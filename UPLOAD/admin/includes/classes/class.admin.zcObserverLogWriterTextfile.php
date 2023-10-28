<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: class.admin.zcObserverLogWriterTextfile.php 2023-10-23 17:56:29Z webchills $
 *
 * Designed for ZC >= v1.5.4
 *
 */

class zcObserverLogWriterTextfile extends base {

  private $destinationLogFilename = '';
  private $notifier;

  public function __construct(notifier $zco_notifier = null) {
    if (!$zco_notifier) $zco_notifier = new notifier;
    $this->notifier = $zco_notifier;
    $this->notifier->attach($this, array('NOTIFY_ADMIN_FIRE_LOG_WRITERS', 'NOTIFY_ADMIN_FIRE_LOG_WRITER_RESET'));
    $this->setLogFilename();
  }

  /**
   * Set the folderpath on the filesystem where the data will be logged
   */
  public function setLogFilename($filepath = '')
  {
    if ($filepath == '') $filepath = DIR_FS_LOGS . '/admin_log.txt';

    $this->destinationLogFilename = $filepath;
  }

  public function updateNotifyAdminFireLogWriters(&$class, $eventID, $log_data)
  {
    $this->initLogFile();
    /**
     * The observer's $paramsArray contains the data passed to the notifier hook.
     * That data is json-encoded here, and then stored to
     * a custom specified text file on the filesystem using PHP error_log() function.
     */
    $data = json_encode($log_data);

    error_log($log_data['severity'] . ' [' . date('M-d-Y H:i:s') . '] ' . $log_data['ip_address'] . ' ' . $data . "\n", 3, $this->destinationLogFilename);
  }

  /**
   * PCI requires that if the log is blank, that the logs be initialized
   * So this tests whether the logging file exists, creates it if necessary, and
   * then if the file is empty initializes it
   */
  public function initLogFile()
  {
    $init_required = false;
    if (!file_exists($this->destinationLogFilename))
    {
      touch($this->destinationLogFilename);
      $init_required = true;
    } else {
      $val = file_get_contents($this->destinationLogFilename, null, null, null, 100);
      if ($val === false || strlen($val) < 20) {
        $init_required = true;
      }
    }
    if ($init_required)
    {
      /**
       * builds a json-encoded array here, for consistency with normal logging
       */
      $admin_id = (isset($_SESSION['admin_id'])) ? $_SESSION['admin_id'] : 0;
      $data = array('access_date' => date('M-d-Y H:i:s'),
              'admin_id' => (int)$admin_id,
              'page_accessed' =>  'Log found to be empty. Logging started.',
              'page_parameters' => '',
              'ip_address' => substr($_SERVER['REMOTE_ADDR'],0,45),
              'gzpost' => '',
              'flagged' => 0,
              'attention' => '',
              'severity' => 'notice',
      );
      $data = json_encode($data);

      error_log('notice [' . date('M-d-Y H:i:s') . '] ' . substr($_SERVER['REMOTE_ADDR'],0,45) . ' ' . $data . "\n", 3, $this->destinationLogFilename);
    }
  }

  public function updateNotifyAdminFireLogWriterReset()
  {
    if (file_exists($this->destinationLogFilename))
    {
      unlink($this->destinationLogFilename);
    }

    $admname = '{' . preg_replace('/[^\w]/', '*', zen_get_admin_name()) . '[' . (int)$_SESSION['admin_id'] . ']}';
    $admin_id = (isset($_SESSION['admin_id'])) ? $_SESSION['admin_id'] : 0;
    $data = array('access_date' => date('M-d-Y H:i:s'),
            'admin_id' => (int)$admin_id,
            'page_accessed' =>  'Log reset by ' . $admname . '.',
            'page_parameters' => '',
            'ip_address' => substr($_SERVER['REMOTE_ADDR'],0,45),
            'gzpost' => '',
            'flagged' => 0,
            'attention' => '',
            'severity' => 'warning',
            'logmessage' =>  'Log reset by ' . $admname . '.',
      );
      $data = json_encode($data);
      error_log('notice [' . date('M-d-Y H:i:s') . '] ' . substr($_SERVER['REMOTE_ADDR'],0,45) . ' ' . $data . "\n", 3, $this->destinationLogFilename);
  }

}
