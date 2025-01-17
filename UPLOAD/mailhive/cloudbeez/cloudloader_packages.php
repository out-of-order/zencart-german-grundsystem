<?php
/*
  MailBeez Automatic Trigger Email Campaigns
  http://www.mailbeez.com

  Copyright (c) 2010 - 2015 MailBeez

  inspired and in parts based on
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License (Version 2)
  [http://www.gnu.org/licenses/gpl-2.0.html]

 */



$install_lang = $_SESSION['language'];

if (stream_resolve_include_path('cloudloader/languages/' . $install_lang . '.php')) {
    include('cloudloader/languages/' . $install_lang . '.php');
} else {
    $install_lang = 'english';
    include('cloudloader/languages/' . $install_lang . '.php');
}

$base_path = '../' . MH_ROOT_PATH . 'cloudbeez/';

include_once 'cloudloader.php';
include_once 'cloudloader/php/boot.php';
include_once 'cloudloader/php/CloudloaderInit.php';


if ($cloudloader_mode == 'install_package') {
    // install
    $inc_content_intro = '';
    $inc_content_progress = $cloudloader->getContent('mailbeez_package_installer_steps/' . $inst_lang, array());
    $inc_content_install_final = $cloudloader->getContent('mailbeez_package_installer_final/' . $inst_lang, array());
} else {
    // update
    $inc_content_intro = '';
    $inc_content_progress = $cloudloader->getContent('mailbeez_package_update_steps/' . $inst_lang, array());
    $inc_content_update_final = $cloudloader->getContent('mailbeez_package_update_final/' . $inst_lang, array());
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-15"/>
    <meta name="viewport" content="width=device-width">
    <title>MailBeez OS CloudLoader</title>
    <!-- Styles -->
    <link href="<?php echo $base_path; ?>cloudloader/css/vendor.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/layout.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/controls.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/animations.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/awesome/css/font-awesome.min.css" rel="stylesheet">

    <script>
        <!--
        installerBaseUrl = '<?php echo $cloudloader->getBaseUrl() ?>';
        // -->
    </script>
</head>
<body class="js">

<div id="wrap">

    <!-- Header -->
    <header>
        <div class="container" id="containerHeader"></div>

        <!-- Title -->
        <section class="title">
            <div class="container" id="containerTitle"></div>
        </section>

    </header>

    <!-- Body -->
    <section class="body">
        <div class="container" id="containerBody"></div>
    </section>

</div>

<!-- Footer -->
<footer>
    <div class="container" id="containerFooter"></div>
</footer>

<!-- Render Partials -->
<?php
$partialList = array(
    'header',
    'title',
    'footer',
    'check',
    'check/fail',
    'config',
    'progress',
    'progress/fail',
    'complete' => 'complete_install',
);

if ($_GET['cloudloader_mode'] == 'update_core' || $_GET['cloudloader_mode'] == 'update_package') {
    $partialList['complete'] = 'complete_update';
}

?>

<?php foreach ($partialList as $step => $file): ?>
    <script type="text/template" data-partial="<?php echo (is_numeric($step)) ? $file : $step; ?>">
        <?php

        if (stream_resolve_include_path('cloudloader/languages/' . $install_lang . '/partials/' . $file . '.htm')) {
            include('cloudloader/languages/' . $install_lang . '/partials/' . $file . '.htm');
        } else {
            include('cloudloader/languages/english/partials/' . $file . '.htm');
        }
        ?>
    </script>
<?php endforeach ?>

<!-- Scripts -->
<script>
    window.cloudloader_mode = '<?php echo $cloudloader_mode ?>';
    window.securityToken = '<?php echo(isset($_SESSION['securityToken']) ? $_SESSION['securityToken'] : '-1') ?>';
    window.securityToken_name = '<?php echo(isset($_SESSION['CSRFName']) ? $_SESSION['CSRFName'] : 'none') ?>';
    window.securityToken_value = '<?php echo(isset($_SESSION['CSRFToken']) ? $_SESSION['CSRFToken'] : '-1') ?>';

    <?php
    if (defined('SESSION_FORCE_COOKIE_USE') && constant('SESSION_FORCE_COOKIE_USE') == 'False' && function_exists('xtc_href_link')) {
    ?>
    window.session_name = '<?php echo xtc_session_name(); ?>';
    window.session_value = '<?php echo xtc_session_id(); ?>';
    <?php }
    ?>

</script>
<script
        src="<?php echo $base_path; ?>cloudloader/js/vendor.js?ver=<?php echo CLOUDBEEZ_MAILBEEZ_INSTALLER_VERSION; ?>"></script>
<script
        src="<?php echo $base_path; ?>cloudloader/js/app.js?ver=<?php echo CLOUDBEEZ_MAILBEEZ_INSTALLER_VERSION; ?>"></script>
<script
        src="<?php echo $base_path; ?>cloudloader/js/check.js?ver=<?php echo CLOUDBEEZ_MAILBEEZ_INSTALLER_VERSION; ?>"></script>
<script
        src="<?php echo $base_path; ?>cloudloader/js/progress.js?ver=<?php echo CLOUDBEEZ_MAILBEEZ_INSTALLER_VERSION; ?>"></script>
<script
        src="<?php echo $base_path; ?>cloudloader/js/complete.js?ver=<?php echo CLOUDBEEZ_MAILBEEZ_INSTALLER_VERSION; ?>"></script>

<!-- Bespoke Properties -->
<script>
    /*
     * Checker Page
     */
    Installer.Pages.systemCheck.title = '<?php echo MAILBEEZ_INSTALL_SYSTEM_CHECK; ?>'
    Installer.Pages.systemCheck.nextButton = '<?php echo MAILBEEZ_INSTALL_SYSTEM_CONFIRM; ?>'
    Installer.Pages.systemCheck.cancelButton = '<?php echo MAILBEEZ_INSTALL_CANCEL; ?>'


    Installer.Pages.systemCheck.requirements = [
        {code: 'phpVersion', label: '<?php echo MAILBEEZ_INSTALL_SYSTEM_CHECK_PHP; ?>'},
        {code: 'safeMode', label: '<?php echo MAILBEEZ_INSTALL_SYSTEM_CHECK_SAFEMODE; ?>'},
        {code: 'curlLibrary', label: '<?php echo MAILBEEZ_INSTALL_SYSTEM_CHECK_CURL; ?>'},
        {code: 'liveConnectionPrivate', label: '<?php echo MAILBEEZ_INSTALL_SYSTEM_CHECK_TEST_CONNECTION; ?>'},
        {
            code: 'liveConnectionPrivateSpeed',
            label: '<?php echo MAILBEEZ_INSTALL_SYSTEM_CHECK_TEST_CONNECTION_SPEED; ?>'
        },
        {code: 'writePermission', label: '<?php echo MAILBEEZ_INSTALL_SYSTEM_CHECK_TEST_WRITE_PERM; ?>'}
    ]

    /*
     * Progress Page
     */
    Installer.Pages.installProgress.title = '<?php echo ($cloudloader_mode == 'install_package') ? MAILBEEZ_PACKAGE_INSTALL : MAILBEEZ_PACKAGE_UPDATE; ?>'
    Installer.Pages.installProgress.cancelButton = '<?php echo MAILBEEZ_INSTALL_CANCEL; ?>'

    Installer.Pages.installProgress.steps = [
        {code: 'getMetaDataPackage', label: '<?php echo MAILBEEZ_INSTALL_INSTALL_STEP1; ?>'},
        {code: 'downloadPackage', label: '<?php echo MAILBEEZ_INSTALL_INSTALL_STEP2; ?>'},
        <?php
        if ($cloudloader_mode != 'install_package') {
        ?>
        {code: 'backupZip', label: '<?php echo MAILBEEZ_INSTALL_INSTALL_STEP3; ?>'},
        <?php
        }
        ?>
        {code: 'checkFilePermissionPackage', label: '<?php echo MAILBEEZ_INSTALL_INSTALL_STEP4; ?>'},
        {code: 'extractPackage', label: '<?php echo MAILBEEZ_INSTALL_INSTALL_STEP5; ?>'},
        {
            code: 'finishInstall',
            label: '<?php echo ($cloudloader_mode == 'install_package') ? MAILBEEZ_PACKAGE_INSTALL_STEP6 : MAILBEEZ_PACKAGE_UPDATE_STEP6; ?>'
        }
    ]

    /*
     * Final Pages
     */
    Installer.Pages.installComplete.title = '<?php echo ($cloudloader_mode == 'install_package') ? MAILBEEZ_PACKAGE_INSTALL_FINISH : MAILBEEZ_PACKAGE_UPDATE_FINISH; ?>'
    Installer.Pages.installComplete.backuplocation = '<?php echo sprintf(MAILBEEZ_INSTALL_BACKUP_LOCATION, $_SESSION['mailbeez_installer_backup_location_dir']); ?>'

</script>
</body>
</html>
