<?php
/**
 * @package plugins
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: auto.downloads_via_streaming.php 2019-07-22 08:13:51Z webchills $
 */

/**
 * This observer class is intended to allow downloadable files to be served
 * by streaming as a direct memory-feed from disk-to-browser, handled
 * completely by PHP. This can be a RAM drain. Redirect is better.
 *
 */
class zcObserverDownloadsViaStreaming extends base {

  /**
   * Class constructor
   */
  public function __construct() {
    $this->attach($this, array('NOTIFY_DOWNLOAD_READY_TO_STREAM'));
  }

  /**
   * This fires when the download module is ready to stream a download to the browser
   *
   * @param string $eventID name of the observer event fired
   * @param array $array deprecated BC data
   * @param string $origin_filename (mutable)
   * @param string $browser_filename (mutable)
   * @param string $source_directory (mutable)
   * @param integer $downloadFilesize (mutable)
   */
  protected function updateNotifyDownloadReadyToStream(&$class, $eventID, $array, &$service, &$origin_filename, &$browser_filename, &$source_directory, &$downloadFilesize)
  {
    global $messageStack;

    if ((int)$downloadFilesize > 0) header("Content-Length: " . (string) $downloadFilesize);

    $disabled_funcs = @ini_get("disable_functions");

    if (DOWNLOAD_IN_CHUNKS != 'true' && !strstr($disabled_funcs,'readfile')) {
      $this->notify('NOTIFY_DOWNLOAD_WITHOUT_REDIRECT___COMPLETED', $origin_filename);

      // close the session, since it is not needed for streaming the file contents
      session_write_close();

      // Dump the file to the browser. This will work on all systems, but will need considerable resources
      readfile($source_directory . $origin_filename);

    } else {
      // override PHP timeout to 25 minutes, if allowed
      @set_time_limit(1500);

      $this->notify('NOTIFY_DOWNLOAD_IN_CHUNKS___COMPLETED', $origin_filename);

      // loop with fread($fp, xxxx) to allow streaming in chunk sizes below the PHP memory_limit
      $handle = @fopen($source_directory . $origin_filename, "rb");
      if ($handle) {

        // close the session, since it is not needed for streaming the file contents
        session_write_close();

        // stream the file in 4K chunks
        while (!@feof($handle)) {
          echo(fread($handle, 4096));
          @flush();
        }
        fclose($handle);

      } else {
        // Throw error condition -- this should never happen!
        $msg = 'Please contact store owner.  ERROR: Cannot read file: ' . $origin_filename;
        $messageStack->add_session('default', $msg, 'error');
        error_log($msg);
        zen_mail('', STORE_OWNER_EMAIL_ADDRESS, ERROR_CUSTOMER_DOWNLOAD_FAILURE, "Unable to open file '" . $origin_filename . " for reading.  Check the file permissions.", STORE_NAME, EMAIL_FROM);
      }
      $this->notify('NOTIFY_DOWNLOAD_WITHOUT_REDIRECT_VIA_CHUNKS___COMPLETED');
    }
    zen_exit();
  }

}
