<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

// Installer translation strings
$GLOBALS['strInstall']                      = "Pasang";
$GLOBALS['strLanguageSelection']            = "Pilihan Bahasa";
$GLOBALS['strDatabaseSettings']             = "Konfigurasi Pengkalan Data";
$GLOBALS['strAdminSettings']                = "Konfigurasi Pentadbir";
$GLOBALS['strAdminAccount']                 = "Akaun Pentadbir";
$GLOBALS['strAdvancedSettings']             = "Konfigurasi yang lebih mendalam";
$GLOBALS['strSpecifySyncSettings']          = "Konfigurasi Sikronisasi";
$GLOBALS['strWarning']                      = "Amaran";
$GLOBALS['strBtnContinue']                  = "Seterusnya »";
$GLOBALS['strBtnRecover']                   = "Pulihkan »";
$GLOBALS['strBtnStartAgain']                   = "Mulakan pembaharuan semula »";
$GLOBALS['strBtnGoBack']                    = "« Kembali";
$GLOBALS['strBtnAgree']                     = "Saya Setuju »";
$GLOBALS['strBtnRetry']                     = "Cuba lagi";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterArgcArv']       = "Konfigurasi PHP bagi pembolehubah register_argc_argv perlu diubah kepada on untuk membolehkan proses pemulihan dan pemantauan dijalankan dari command line.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";


$GLOBALS['strRecoveryRequiredTitle']    = "Cubaan pembaharuan anda yang terdahulu tidak berjaya";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Amaran: fail Pembaharuan masih lagi terdapat didalam direktori var anda. Kami tidak dapat memadamkan fail ini disebabkan kekurangan hak keatasnya. Sila padamkan fail ini sendiri.";
$GLOBALS['strRemoveUpgradeFile']               = "Anda perlu memadamkan fail pembaharuan yang terdapat didalam direktori var";
$GLOBALS['strInstallSuccess2'] ="
  <p><b>Serving your first ad campaign</b><br>
    Use our <a href='".PRODUCT_DOCSURL."/user/quickStartGuide' target='_blank'>quick start guide to start serving your first ad campaign</a>.
  </p>
</div>
<p><strong>Optional installation steps</strong></p>
<div class='psub'>
  <p><b>Lock your configuration files</b><br>
    This is a good extra security step to protect your ad server configuration settings from being altered.  <a href='".PRODUCT_DOCSURL."/admin/lockConfig' target='_blank'>Find out more</a>.
  </p>
  <p><b>Set up a regular maintenance task</b><br>
    A maintenance script is recommended to ensure timely reporting and the best possible ad delivery performance.  <a href='".PRODUCT_DOCSURL."/admin/maintenance' target='_blank'>Find out more</a>
  </p>
  <p><b>Review your system configuration settings</b><br>
    Before you start using ".MAX_PRODUCT_NAME." we suggest you review your settings within the 'Settings' tab.
  </p>
</div>";
$GLOBALS['strInstallNotSuccessful']         = "<b>The installation of ".MAX_PRODUCT_NAME." was not succesful</b><br /><br />Some portions of the install process could not be completed.
                                                It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the
                                                first step of the install process. If you want to know more on what the error message below means, and how to solve it,
                                                please consult the supplied documentation.";
$GLOBALS['strDbSuccessIntro']               = "The " . MAX_PRODUCT_NAME . " database has now been created. Please click the 'Continue' button to proceed with configuring " . MAX_PRODUCT_NAME . " Administrator and Delivery settings.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";


$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL sistem muka pentadbir";
$GLOBALS['strDeliveryUrlPrefix']            = "Enjin Penghantaran";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Enjin Penghantaran";
$GLOBALS['strImagesUrlPrefix']              = "URL stor imej";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL (SSL) stor imej";



/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Pilih bahagian";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

// Configuration Settings

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Konfigurasi Pentadbir";
$GLOBALS['strAdminUsername']                         = "Kata nama Pentadbir";
$GLOBALS['strAdminPassword']                         = "Kata Laluan Pentadbir";
$GLOBALS['strInvalidUsername']                       = "Kata nama tidak sah";
$GLOBALS['strBasicInformation']                      = "Maklumat Asas";
$GLOBALS['strAdminFullName']                         = "Nama penuh Pentadbir";
$GLOBALS['strAdminEmail']                            = "Alamat emel Pentadbir";
$GLOBALS['strAdministratorEmail']                    = "Alamat emel Pentadbir";
$GLOBALS['strCompanyName']                           = "Nama Syarikat";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strNovice']                                = "Tindakan untuk memadam memerlukan maklum balas diatas tujuan keselamatan untuk mengelakkan kesilapan";
$GLOBALS['strUserlogEmail']                          = "Log kesemua mesej emel keluar";
$GLOBALS['strTimezone']                              = "Zon Waktu";
$GLOBALS['strTimezoneEstimated']                     = "Zon waktu anggaran";
$GLOBALS['strTimezoneGuessedValue']                  = "Zon waktu server tidak disetkan dengan tepat di PHP";
$GLOBALS['strTimezoneDocumentation']                 = "Dokumentasi";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Konfigurasi Pengkalan Data";
$GLOBALS['strDatabaseServer']                        = "Ciri-ciri global server pengkalan data";
$GLOBALS['strDbType']                                = "Jenis pengkalan data";
$GLOBALS['strDbHost']                                = "Nama host pengkalan data";
$GLOBALS['strDbPort']                                = "Nombor port pengkalan data";
$GLOBALS['strDbUser']                                = "Nama pengguna pengkalan data";
$GLOBALS['strDbPassword']                            = "Kata laluan pengkalan data";
$GLOBALS['strDbName']                                = "Nama pengkalan data";
$GLOBALS['strDatabaseOptimalisations']               = "Ciri-ciri untuk mengoptimumkan pengkalan data";
$GLOBALS['strPersistentConnections']                 = "Gunakan hubungan yang kekal";
$GLOBALS['strCantConnectToDb']                       = "Tidak dapat berhubung dengan pengkalan data";
$GLOBALS['strDemoDataInstall']                       = "Masukkan data demo";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings

// Audit Trail Settings

// Debug Logging Settings
$GLOBALS['strProduction']                            = "Server Produksi";
$GLOBALS['strDebugTypeSql']                          = "Pengkalan Data SQL";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Ciri-ciri penghantaran";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strImageStore']                            = "Folder imej-imej";
$GLOBALS['strTypeWebMode']                           = "Cara menyimpan";
$GLOBALS['strTypeWebModeLocal']                      = "Direktori Tempatan";
$GLOBALS['strTypeWebModeFtp']                        = "FTP Server Luar";
$GLOBALS['strTypeWebDir']                            = "Direktori Tempatan";
$GLOBALS['strTypeFTPUsername']                       = "Log Masuk";
$GLOBALS['strTypeFTPPassword']                       = "Kata Laluan";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Maklumat iklan";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Imej Iklan";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Log Iklan";




// General Settings

// Geotargeting Settings

// Interface Settings
$GLOBALS['strInventory']                             = "Inventori";


// CSV Import Settings

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings

// Banner Delivery Settings

// Banner Logging Settings

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;

// UI Settings




// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
