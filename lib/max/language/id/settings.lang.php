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
$GLOBALS['strInstall']                      = "Instal";
$GLOBALS['strChooseInstallLanguage']        = "Silakan pilih bahasa untuk digunakan dalam proses instalasi";
$GLOBALS['strLanguageSelection']            = "Pilihan Bahasa";
$GLOBALS['strDatabaseSettings']             = "Penyetelan Database";
$GLOBALS['strAdminSettings']                = "Penyetelan Administrator";
$GLOBALS['strAdminAccount']                 = "Administrator Account";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Penyetelan Lanjut";
$GLOBALS['strOtherSettings']                = "Penyetelan Lainnya";
$GLOBALS['strSpecifySyncSettings']          = "Penyetelan Sinkronisasi";
$GLOBALS['strLicenseInformation']           = "Informasi Lisensi";
$GLOBALS['strWarning']                      = "Peringatan";
$GLOBALS['strFatalError']                   = "Telah terjadi Error yang fatal";
$GLOBALS['strUpdateError']                  = "Telah terjadi kesalahan pada saat meng-update";
$GLOBALS['strBtnContinue']                  = "Lanjut &raquo;";
$GLOBALS['strBtnRecover']                   = "Bangkitkan kembali &raquo;";
$GLOBALS['strBtnStartAgain']                   = "Ulangi proses upgrade &raquo;";
$GLOBALS['strBtnGoBack']                    = "&laquo; Kembali";
$GLOBALS['strBtnAgree']                     = "Saya setuju &raquo;";
$GLOBALS['strBtnDontAgree']                 = "« Saya tidak setuju";
$GLOBALS['strBtnRetry']                     = "Coba kembali";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Koneksi ke database gagal. Mohon periksa ulang penyetelan yang telah dilakukan";
$GLOBALS['strCreateTableTestFailed']        = "Pengguna yang ditentukan oleh Anda tidak memiliki hak untuk membuat atau update struktur dari database. Mohon hubungi administrator database.";
$GLOBALS['strUpdateTableTestFailed']        = "Pengguna yang ditentukan oleh Anda tidak memiliki hak untuk membuat atau update struktur dari database. Mohon hubungi administrator database.";
$GLOBALS['strTablePrefixInvalid']           = "Prefix dari tabel mengandung karakter yang tidak valid";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Tidak dapat memilih versi database";
$GLOBALS['strInvalidVersionInfo']           = "Versi database tidak dapat diketahui";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Sebelum Anda lanjut mohon perbaiki masalah berikut:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Abaikan Peringatan";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "Variabel register_globals dalam konfigurasi PHP perlu diubah ke posisi ON.";
$GLOBALS['strWarningRegisterArgcArv']       = "Variabel register_argc_argv dalam konfigurasi PHP harus berada dalam posisi ON untuk jalankan pemeliharaan dari Command Line.";
$GLOBALS['strWarningMagicQuotesGPC']        = "Variabel magic_quotes_gpc dalam konfigurasi perlu diubah ke posisi ON.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "Variabel magic_quotes_runtime dalam konfigurasi perlu diubah ke posisi OFF.";
$GLOBALS['strWarningFileUploads']           = "Variabel file_uploads dalam konfigurasi perlu diubah ke posisi ON.";
$GLOBALS['strWarningTrackVars']             = "Variabel track_vars dalam konfigurasi perlu diubah ke posisi ON.";
$GLOBALS['strWarningPREG']                  = "Versi PHP yang digunakan oleh Anda tidak mendukung PERL compatible regular expressions. Anda perlu mengaktifkan ekstensi PREG sebelum melanjutkan.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Pada saat ini update database tidak bisa dilakukan. Bila Anda tetap memutuskan untuk melanjutkan, seluruh banner, statistik dan pemasang iklan akan terhapus.";
$GLOBALS['strIgnoreErrors']                 = "Abaikan Error";
$GLOBALS['strRetryUpdate']                  = "Coba ulang meng-update";
$GLOBALS['strTableNames']                   = "Nama Tabel";
$GLOBALS['strTablesPrefix']                 = "Prefix Nama Tabel";
$GLOBALS['strTablesType']                   = "Jenis Tabel";


$GLOBALS['strRecoveryRequiredTitle']    = "Proses upgrade semula mengalami sebuah Error";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Perhatian: File UPGRADE masih berada dalam direktori var. Kami tidak dapat menghapus file tersebut disebabkan oleh permission yang tidak cukup. Mohon hapuskan file tersebut secara manual.";
$GLOBALS['strRemoveUpgradeFile']               = "Anda harus menghapus file UPGRADE dari direktori var.";
$GLOBALS['strInstallSuccess']               = "Clicking 'Continue' will log you in to your ad server.
<p><strong>What next?</strong></p>
<div class='psub'>";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Database untuk  berhasil di-update. Silakan klik tombol 'Lanjut' untuk me-review  Penyetelan Administrator dan Penyampaian iklan.";
$GLOBALS['strErrorOccured']                 = "Error yang dialami sbb.:";
$GLOBALS['strErrorInstallDatabase']         = "Struktur database gagal dibangun.";
$GLOBALS['strErrorInstallPrefs']            = "Preferensi pengguna Administrator gagal ditulis dalam database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'Instalasi dari database yang sudah ada gagal di-upgrade.';
$GLOBALS['strErrorInstallDbConnect']        = "Gagal membuka koneksi ke database.";

$GLOBALS['strErrorWritePermissions']        = "Error pada File permission terdeteksi. Masalah ini harus diperbaiki terlebih dahulu sebelum melanjut.<br />To fix the errors on a Linux system, try typing in the following command(s):";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "Error pada File permission terdeteksi. Masalah ini harus diperbaiki terlebih dahulu sebelum melanjut.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL tampilan untuk Admin";
$GLOBALS['strDeliveryUrlPrefix']            = "URL tampilan untuk mesin penyampaian iklan";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL tampilan untuk mesin penyampaian iklan (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "URL penyimpanan gambar";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL penyimpanan gambar (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Nama Pengguna atau Kata Sandi tidak benar";

$GLOBALS['strUpgrade']                      = "Upgrade";
$GLOBALS['strSystemUpToDate']               = "Sistem Anda sudah aktual. Upgrade pada saat ini tidak diperlukan. <br>Klik <b>Lanjut</b> untuk melanjut ke halaman muka.";
$GLOBALS['strSystemNeedsUpgrade']           = "Struktur database dan file konfigurasi perlu di-upgrade untuk berfungsi dengan baik. Klik <b>Lanjut</b> untuk memulai proses upgrade. <br><br>Tergantung pada versi yang di-upgrade dan pada jumlah statistik yang telah tersimpan pada database, proses ini dapat mengakibatkan beban yang tinggi pada database server. Mohon sabar, proses upgrade membutuhkan waktu berberapa menit.";
$GLOBALS['strSystemUpgradeBusy']            = "Upgrade sistem dalam proses, silakan tunggu...";
$GLOBALS['strSystemRebuildingCache']        = "Bangun ulang cache, silakan tunggu...";
$GLOBALS['strServiceUnavalable']            = "Fasilitas tidak tersedia. Upgrade sistem dalam proses";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Pilih Bagian";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Gagal menulis perubahan pada config file";
$GLOBALS['strUnableToWritePrefs']                    = "Gagal mengirim preferensi kepada database";
$GLOBALS['strImageDirLockedDetected']	             = "<b>Direktori Gambar</b> yang diberikan tidak bisa ditulis oleh server. <br>Anda tidak dapat melanjut sebelum permissions dari direktori tersebut diubah atau direktori tersebut dibuatkan.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Setup konfigurasi";
$GLOBALS['strConfigurationSettings']                 = "Penyetelan konfigurasi";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Penyetelan Administrator";
$GLOBALS['strAdministratorAccount']                  = "Account Administrator";
$GLOBALS['strLoginCredentials']                      = "Data Login";
$GLOBALS['strAdminUsername']                         = "Nama pengguna Administrator";
$GLOBALS['strAdminPassword']                         = "Kata sandi Administrator";
$GLOBALS['strInvalidUsername']                       = "Nama pengguna tidak berlaku";
$GLOBALS['strBasicInformation']                      = "Informasi Dasar";
$GLOBALS['strAdminFullName']                         = "Nama lengkap Admin";
$GLOBALS['strAdminEmail']                            = "Alamat E-Mail Admin";
$GLOBALS['strAdministratorEmail']                    = "Alamat E-Mail Administrator";
$GLOBALS['strCompanyName']                           = "Nama perusahaan";
$GLOBALS['strAdminCheckUpdates']                     = "Cari Update";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Setiap Login";
$GLOBALS['strAdminCheckDaily']                       = "Setiap hari";
$GLOBALS['strAdminCheckWeekly']                      = "Setiap minggu";
$GLOBALS['strAdminCheckMonthly']                     = "Setiap bulan";
$GLOBALS['strAdminCheckNever']                       = "tidak samasekali";
$GLOBALS['strNovice']                                = "Delete actions require confirmation for safety";
$GLOBALS['strUserlogEmail']                          = "Catat seluruh E-Mail yang dikirim";
$GLOBALS['strEnableDashboard']                       = "Aktifkan Dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Please enable <a href='account-settings-update.php'>check for updates</a> to use the dashboard.";
$GLOBALS['strTimezone']                              = "Zona waktu";
$GLOBALS['strTimezoneEstimated']                     = "Perkiraan zona waktu";
$GLOBALS['strTimezoneGuessedValue']                  = "Zona waktu pada PHP tidak distel dengan benar";
$GLOBALS['strTimezoneSeeDocs']                       = "Silakan belajari %DOCS% tentang caranya mengatur variabel ini pada PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "dokumentasi";
$GLOBALS['strAdminSettingsTitle']                    = "Akun Administrator Anda";
$GLOBALS['strAdminSettingsIntro']                    = "Akun Administrator digunakan untuk login ke tampilan  dan untuk mengatur inventori, statistik dan membuat tags. Silakan masukkan nama pengguna, kata sandi dan alamat E-Mail Administrator.";
$GLOBALS['strConfigSettingsIntro']                   = "Please check the configuration settings below and make any required changes before proceeding. If unsure, leave the default values.";

$GLOBALS['strEnableAutoMaintenance']	             = "Bila jadwal untuk pemeliharaan tidak di-set pada Cron, jalankan pemeliharaan dengan cara otomatis pada saat penyampaian iklan";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Penyetelan Database";
$GLOBALS['strDatabaseServer']                        = "Database Server";
$GLOBALS['strDbLocal']                               = "Koneksi ke server lokal dengan menggunakan socket";
$GLOBALS['strDbType']                                = "Jenis Database";
$GLOBALS['strDbHost']                                = "Hostname Database";
$GLOBALS['strDbSocket']                              = "Database Socket";
$GLOBALS['strDbPort']                                = "Port Number Database";
$GLOBALS['strDbUser']                                = "Pengguna Database";
$GLOBALS['strDbPassword']                            = "Kata Sandi Database";
$GLOBALS['strDbName']                                = "Nama Database";
$GLOBALS['strDbNameHint']                            = "Database will be created if it does not exist";
$GLOBALS['strDatabaseOptimalisations']               = "Optimalisasi Database";
$GLOBALS['strPersistentConnections']                 = "Gunakan Koneksi Persistent";
$GLOBALS['strCantConnectToDb']                       = "Koneksi ke Database gagal";
$GLOBALS['strCantConnectToDbDelivery']               = 'Can\'t Connect to Database for Delivery';
$GLOBALS['strDemoDataInstall']                       = "Instal data Demo";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Penyetelan Utama";
$GLOBALS['strEmailAddresses']                        = "Email 'From' Address";
$GLOBALS['strEmailFromName']                         = "Email 'From' Name";
$GLOBALS['strEmailFromAddress']                      = "Email 'From' Email Address";
$GLOBALS['strEmailFromCompany']                      = "Email 'From' Company";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "Aktifkan qmail patch";
$GLOBALS['strEnableQmailPatch']                      = "Enable qmail patch";
$GLOBALS['strEmailHeader']                           = "Email headers";
$GLOBALS['strEmailLog']                              = "Email log";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Audit Trail Settings";
$GLOBALS['strEnableAudit']                           = "Enable Audit Trail";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Penyetelan Global Debug Logging";
$GLOBALS['strProduction']                            = "Production server";
$GLOBALS['strEnableDebug']                           = "Aktifkan Debug Logging";
$GLOBALS['strDebugMethodNames']                      = "Mencakupkan nama metode pada debug log";
$GLOBALS['strDebugLineNumbers']                      = "Mencakupkan nomor garis pada debug log";
$GLOBALS['strDebugType']                             = "Jenis Debug Log";
$GLOBALS['strDebugTypeFile']                         = "File";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "SQL Database";
$GLOBALS['strDebugTypeSyslog']                       = "Syslog";
$GLOBALS['strDebugName']                             = "Debug Log Name, Calendar, SQL Table,<br />atau Syslog Facility";
$GLOBALS['strDebugPriority']                         = "Debug Priority Level";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Most Information";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Informasi anggapan";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Least Information";
$GLOBALS['strDebugIdent']                            = "Debug Identification String";
$GLOBALS['strDebugUsername']                         = "mCal, SQL Server Username";
$GLOBALS['strDebugPassword']                         = "mCal, SQL Server Password";
$GLOBALS['strProductionSystem']                      = "Production System";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Penyetelan Penyampaian";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Lintasan Web";
$GLOBALS['strDeliveryPath']                          = "Cache penyampaian";
$GLOBALS['strImagePath']                             = "Lintasan gambar";
$GLOBALS['strDeliverySslPath']                       = "Cache penyampaian";
$GLOBALS['strImageSslPath']                          = "Lintasan SSL gambar";
$GLOBALS['strImageStore']                            = "Folder gambar";
$GLOBALS['strTypeWebSettings']                       = "Global Webserver Local Banner Storage Settings";
$GLOBALS['strTypeWebMode']                           = "Metode Penyimpanan";
$GLOBALS['strTypeWebModeLocal']                      = "Direktori lokal";
$GLOBALS['strTypeDirError']                          = "The local directory cannot be written to by the web server";
$GLOBALS['strTypeWebModeFtp']                        = "Server FTP eksternal";
$GLOBALS['strTypeWebDir']                            = "Direktori lokal";
$GLOBALS['strTypeFTPHost']                           = "Host FTP";
$GLOBALS['strTypeFTPDirectory']                      = "Direktori Host";
$GLOBALS['strTypeFTPUsername']                       = "Login";
$GLOBALS['strTypeFTPPassword']                       = "Kata Sandi";
$GLOBALS['strTypeFTPPassive']                        = "Gunakan FTP pasif";
$GLOBALS['strTypeFTPErrorDir']                       = "Direktori dari hosti FTP tidak ada";
$GLOBALS['strTypeFTPErrorConnect']                   = "Koneksi ke server FTP gagal. Nama login atau kata sandi salah";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Your installation of PHP does not support FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "Could not upload file to the FTP Server, check set proper rights to Host Directory";
$GLOBALS['strTypeFTPErrorHost']                      = "Hosti FTP yang dipilih salah";
$GLOBALS['strDeliveryFilenames']                     = "Nama-nama file dari Penyampaian Global";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Ad Click";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Ad Conversion Variables";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Ad Content";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Ad Conversion";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Ad Conversion (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Ad Frame";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Ad Image";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Ad (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Ad Layer";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Ad Log";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Ad Popup";
$GLOBALS['strDeliveryFilenamesAdView']               = "Ad View";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPC Invocation";
$GLOBALS['strDeliveryFilenamesLocal']                = "Invokasi lokal";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Kontrol depan";
$GLOBALS['strDeliveryFilenamesFlash']                = "Pencakupan Flash (Alamat URL lengkap diizinkan)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Penyetelan global untuk caching penyampaian";
$GLOBALS['strDeliveryCacheLimit']                    = "Time Between Cache Updates (seconds)";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "Gunakan server muasal remote";
$GLOBALS['strOriginType']                            = "Jenis server muasal";
$GLOBALS['strOriginHost']                            = "Nama host dari server muasal";
$GLOBALS['strOriginPort']                            = "Nomor port dari database muasal";
$GLOBALS['strOriginScript']                          = "Script file for origin database";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Origin timeout (seconds)";
$GLOBALS['strOriginProtocol']                        = "Origin server protocol";

$GLOBALS['strDeliveryAcls']                          = "Evaluasikan limitasi dari penyampaian banner pada saat penyampaian";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "Mengkaburkan saluran pada saat penyampaian iklan";
$GLOBALS['strDeliveryExecPhp']                       = "Izinkan eksekusi kode PHP dalam iklan<br />(Perhatian: Resiko Keamanan)";
$GLOBALS['strDeliveryCtDelimiter']                   = "3rd Party Click Tracking Delimiter";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Global default Banner Image URL";
$GLOBALS['strP3PSettings']                           = "Kebijaksanaan keleluasaan pribadi global P3P";
$GLOBALS['strUseP3P']                                = "Gunakan kebijaksanaan P3P";
$GLOBALS['strP3PCompactPolicy']                      = "P3P Compact Policy";
$GLOBALS['strP3PPolicyLocation']                     = "Lokasi dari kebijaksanaan P3P";

// General Settings
$GLOBALS['generalSettings']                          = "Penyetelan Global Umum";
$GLOBALS['uiEnabled']                                = "Interface untuk pengguna diaktifkan";
$GLOBALS['defaultLanguage']                          = "Anggapan Bahasa yang digunakan<br />(Setiap pengguna dapat memilih bahasa yang diinginkan)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting Settings";
$GLOBALS['strGeotargeting']                          = "Penyetelan Global Geotargeting";
$GLOBALS['strGeotargetingType']                      = "Jenis modul Geotargeting";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Use the bundled MaxMind GeoLiteCountry database";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "Lokasi dari database MaxMind GeoIP Country<br />(Tinggalkan kosong untuk menggunakan free database)";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "Lokasi dari database MaxMind GeoIP Region";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "Lokasi dari database MaxMind GeoIP City";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "Lokasi dari database MaxMind GeoIP Area";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "Lokasi dari database MaxMind GeoIP DMA";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "Lokasi dari database MaxMind GeoIP Organisation";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "Lokasi dari database MaxMind GeoIP ISP";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "Lokasi dari database MaxMind GeoIP Netspeed";
$GLOBALS['strGeoShowUnavailable']                    = "Tampilkan limitasi penyampaian dari geotargeting meskipun data GeoIP tidak tersedia";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "Database MaxMind GeoIP Country tidak ditemukan pada lokasi yang ditunjukkan";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "Database GeoIP Region tidak ditemukan pada lokasi yang ditunjukkan";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "Database GeoIP City tidak ditemukan pada lokasi yang ditunjukkan";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "Database GeoIP Area tidak ditemukan pada lokasi yang ditunjukkan";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "Database GeoIP DMA tidak ditemukan pada lokasi yang ditunjukkan";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "Database GeoIP Organisation tidak ditemukan pada lokasi yang ditunjukkan";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "Database GeoIP ISP tidak ditemukan pada lokasi yang ditunjukkan";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "Database GeoIP Netspeed tidak ditemukan pada lokasi yang ditunjukkan";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventori";
$GLOBALS['strUploadConversions']                     = "Upload Konversi";
$GLOBALS['strShowCampaignInfo']                      = "Tampilkan informasi tambahan tentang kampanya pada halaman <i>Peninjauan Luas Kampanye</i>";
$GLOBALS['strShowBannerInfo']                        = "Tampilkan informasi tambahan tentang banner pada halaman <i>Peninjauan Luas Banner</i>";
$GLOBALS['strShowCampaignPreview']                   = "Tampilkan pertunjukan pendahuluan dari seluruh banner pada halaman <i>Peninjauan Luas Banner</i>";
$GLOBALS['strShowBannerHTML']                        = "Show actual banner instead of plain HTML code for HTML banner preview";
$GLOBALS['strShowBannerPreview']                     = "Show banner preview at the top of pages which deal with banners";
$GLOBALS['strHideInactive']                          = "Sembunyikan yang tidak aktif";
$GLOBALS['strGUIShowMatchingBanners']                = "Show matching banners on the <i>Linked banner</i> pages";
$GLOBALS['strGUIShowParentCampaigns']                = "Show parent campaigns on the <i>Linked banner</i> pages";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Default Campaigns to Anonymous";
$GLOBALS['strStatisticsDefaults']                    = "Statistik";
$GLOBALS['strBeginOfWeek']                           = "Beginning of Week";
$GLOBALS['strPercentageDecimals']                    = "Presentase dari angka desimal";
$GLOBALS['strWeightDefaults']                        = "Bobot anggapan";
$GLOBALS['strDefaultBannerWeight']                   = "Bobot anggapan untuk banner";
$GLOBALS['strDefaultCampaignWeight']                 = "Bobot anggapan untuk kamanye";
$GLOBALS['strDefaultBannerWErr']                     = "Default banner weight should be a positive integer";
$GLOBALS['strDefaultCampaignWErr']                   = "Default campaign weight should be a positive integer";
$GLOBALS['strConfirmationUI']                        = "Confirmation in User Interface";

$GLOBALS['strPublisherDefaults']                     = "Anggapan untuk Penerbit";
$GLOBALS['strModesOfPayment']                        = "Cara pembayaran";
$GLOBALS['strCurrencies']                            = "Mata uang";
$GLOBALS['strCategories']                            = "Kategori";
$GLOBALS['strHelpFiles']                             = "File Bantuan";
$GLOBALS['strHasTaxID']                              = "NPWP";
$GLOBALS['strDefaultApproved']                       = "Kotak tick Persetujuan";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Pilih Pemasang Iklan";
$GLOBALS['strChooseCampaign']                        = "Pilih Kampanye";
$GLOBALS['strChooseCampaignBanner']                  = "Pilih Banner";
$GLOBALS['strChooseTracker']                         = "Pilih Pelacak";
$GLOBALS['strDefaultConversionStatus']               = "Aturan konversi Deafault";
$GLOBALS['strDefaultConversionType']                 = "Aturan konversi Deafault";
$GLOBALS['strCSVTemplateSettings']                   = "Penyetelan template CSV";
$GLOBALS['strIncludeCountryInfo']                    = "Mengikutkan informasi tentang negara";
$GLOBALS['strIncludeBrowserInfo']                    = "Mengikutkan informasi tentang Browser";
$GLOBALS['strIncludeOSInfo']                         = "Mengikutkan informasi tentang sistem operasi";
$GLOBALS['strIncludeSampleRow']                      = "Mengikutkan barisan contoh";
$GLOBALS['strCSVTemplateAdvanced']                   = "Template mengedepan";
$GLOBALS['strCSVTemplateIncVariables']               = "Mengikutkan informasi tentang variabel dari Pelacak";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Jenis Invokasi yang diizinkan";
$GLOBALS['strInvocationDefaults']                    = "Invocation Defaults";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Aktifkan Pelacak Klik (Clicktracking) dari pihak ketiga secara anggapan";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner Delivery Settings";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Banner Logging Settings";
$GLOBALS['strLogAdRequests']                         = "Log an Ad Request every time an advertisement is requested";
$GLOBALS['strLogAdImpressions']                      = "Log an Ad Impression every time an advertisement is viewed";
$GLOBALS['strLogAdClicks']                           = "Log an Ad Click every time a viewer clicks on an advertisement";
$GLOBALS['strLogTrackerImpressions']                 = "Log a Tracker Impression every time a tracker beacon viewed";
$GLOBALS['strReverseLookup']                         = "Reverse lookup the hostnames of viewers when not supplied";
$GLOBALS['strProxyLookup']                           = "Try to determine the real IP address of viewers behind a proxy server";
$GLOBALS['strPreventLogging']                        = "Global Prevent Statistics Logging Settings";
$GLOBALS['strIgnoreHosts']                           = "Don't store statistics for viewers using one of the following IP addresses or hostnames";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Don't</b> log statistics from clients with any of the following strings in their user-agent (one-per-line)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Only</b> log statistics from clients with any of the following strings in their user-agent (one-per-line)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Banner Storage Settings";

// Campaign ECPM settings
$GLOBALS['strEnableECPM']                            = "Use eCPM optimized priorities instead of remnant-weighted priorities";
$GLOBALS['strEnableContractECPM']                    = "Use eCPM optimized priorities instead of standard contract priorities";
$GLOBALS['strEnableECPMfromRemnant']                 = "(If you enable this feature all your remnant campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strEnableECPMfromECPM']                    = "(If you disable this feature some of your active eCPM campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strInactivatedCampaigns']                  = "List of campaigns which became inactive due to the changes in preferences:";

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Maintenance Settings";
$GLOBALS['strConversionTracking']                    = "Conversion Tracking Settings";
$GLOBALS['strEnableConversionTracking']              = "Enable Conversion Tracking";
$GLOBALS['strCsvImport']                             = "Allow upload of offline conversions";
$GLOBALS['strBlockAdViews']                          = "Don't log an Ad Impression if the viewer has seen the same ad within the specified time (seconds)";
$GLOBALS['strBlockAdViewsError']                     = "Ad Impression block value must be a non-negative integer";
$GLOBALS['strBlockAdClicks']                         = "Don't log an Ad Click if the viewer has clicked on the same ad within the specified time (seconds)";
$GLOBALS['strBlockAdClicksError']                    = "Ad Click block value must be a non-negative integer";
$GLOBALS['strMaintenanceOI']                         = "Maintenance Operation Interval (minutes)";
$GLOBALS['strMaintenanceOIError']                    = "The Maintenace Operation Interval is not valid - see documentation for valid values";
$GLOBALS['strPrioritySettings']                      = "Penyetelan prioritas secara global";
$GLOBALS['strPriorityInstantUpdate']                 = "Update advertisement priorities immediately when changes made in the UI";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Default Ad Impression Connection Window (seconds)";
$GLOBALS['strDefaultImpConWindowError']              = "If set, the Default Ad Impression Connection Window must be a positive integer";
$GLOBALS['strDefaultCliConWindow']                   = "Default Ad Click Connection Window (seconds)";
$GLOBALS['strDefaultCliConWindowError']              = "If set, the Default Ad Click Connection Window must be a positive integer";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Kirimkan pemberitahuan bilamana jumlah impresi yang tersisa kurang dari jumlah impresi yang ditentukan disini";
$GLOBALS['strWarnLimitErr']                          = "Pemberitahuan batas harus dalam angka positiv";
$GLOBALS['strWarnLimitDays']                         = "Kirimkan pemberitahuan bilamana jumlah hari yang tersisa kurang dari jumlah hari yang ditentukan disini";
$GLOBALS['strWarnLimitDaysErr']                      = "Pemberitahuan tentang jumlah hari yang tersisa harus dalam angka positiv";
$GLOBALS['strAllowEmail']                            = "Izinkan pengiriman E-Mail secara umum";
$GLOBALS['strEmailAddressFrom']                      = "Email address to send reports FROM";
$GLOBALS['strEmailAddressName']                      = "Company or personal name to sign off e-mail with";
$GLOBALS['strWarnAdmin']                             = "Send a warning to the administrator every time a campaign is almost expired";
$GLOBALS['strWarnClient']                            = "Send a warning to the advertiser every time a campaign is almost expired";
$GLOBALS['strWarnAgency']                            = "Send a warning to the agency every time a campaign is almost expired";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Penyetelan Interface Pengguna";
$GLOBALS['strGeneralSettings']                       = "Penyetelan Umum";
$GLOBALS['strAppName']                               = "Nama Aplikasi";
$GLOBALS['strMyHeader']                              = "Lokasi dari file Header";
$GLOBALS['strMyHeaderError']                         = "File header tidak ditemukan dalam lokasi yang ditunjuk oleh Anda";
$GLOBALS['strMyFooter']                              = "Lokasi dari file Footer";
$GLOBALS['strMyFooterError']                         = "File footer tidak ditemukan dalam lokasi yang ditunjuk oleh Anda";
$GLOBALS['strDefaultTrackerStatus']                  = "Anggapan Status dari pelacak";
$GLOBALS['strDefaultTrackerType']                    = "Jenis pelacak anggapan";
$GLOBALS['strSSLSettings']                           = "SSL Settings";
$GLOBALS['requireSSL']                               = "Paksakan penggunaan SSL pada interface Pengguna";
$GLOBALS['sslPort']                                  = "Port SSL yang digunakan oleh Web Server";
$GLOBALS['strDashboardSettings']                     = "Dashboard Settings";

$GLOBALS['strMyLogo']                                = "Nama dari file lambang kegaliban";
$GLOBALS['strMyLogoError']                           = "Nama dari file lambang tidak ditemukan dalam direktori admin/images";
$GLOBALS['strGuiHeaderForegroundColor']              = "Warna dari header pada latar depan";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Warna dari header pada latar belakang";
$GLOBALS['strGuiActiveTabColor']                     = "Warna dari tab yang aktif";
$GLOBALS['strGuiHeaderTextColor']                    = "Warna dari teks dalam header";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Silakan masukkan warna dalam format RGB, seperti '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Gunakan GZIP Content Compression";
$GLOBALS['strClientInterface']                       = "Interface Pemasang Iklan";
$GLOBALS['strReportsInterface']                      = "Interface Laporan";
$GLOBALS['strClientWelcomeEnabled']                  = "Aktifkan pesan Selamat Datang untuk pemasang iklan";
$GLOBALS['strClientWelcomeText']                     = "Pesan Selamat Datang<br />(Tag HTML diizinkan)";

$GLOBALS['strPublisherInterface']                    = "Interface Penerbit";
$GLOBALS['strPublisherAgreementEnabled']             = "Aktifkan pengendalian Login untuk penerbit yang belum mengsetujui Tata Tertip dan Persyaratan";
$GLOBALS['strPublisherAgreementText']                = "Pesan yang ditampilkan pada saat Login (Tag HTML diizinkan)";

// Regenerate Platfor Hash script
$GLOBALS['strPlatformHashRegenerate']                = "Platform Hash Regenerate";
$GLOBALS['strNewPlatformHash']                       = "Your new Platform Hash is:";
$GLOBALS['strPlatformHashInsertingError']            = "Error inserting Platform Hash into database";

// Plugin Settings
$GLOBALS['strPluginSettings']                        = "Plugin Settings";
$GLOBALS['strEnableNewPlugins']                      = "Enable newly installed plugins";
$GLOBALS['strUseMergedFunctions']                    = "Use merged delivery functions file";

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "Experimental";
$GLOBALS['strKeywordRetrieval']             = "Keyword retrieval";
$GLOBALS['strBannerRetrieval']              = "Banner retrieval method";
$GLOBALS['strRetrieveRandom']               = "Random banner retrieval (default)";
$GLOBALS['strRetrieveNormalSeq']            = "Normal sequental banner retrieval";
$GLOBALS['strWeightSeq']                    = "Weight based sequential banner retrieval";
$GLOBALS['strFullSeq']                      = "Full sequential banner retrieval";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "Allow logical operators when using direct selection";
$GLOBALS['strUseMultipleKeys']              = "Allow multiple keywords when using direct selection";

$GLOBALS['strTableBorderColor']             = "Table Border Color";
$GLOBALS['strTableBackColor']               = "Table Back Color";
$GLOBALS['strTableBackColorAlt']            = "Table Back Color (Alternative)";
$GLOBALS['strMainBackColor']                = "Main Back Color";
$GLOBALS['strOverrideGD']                   = "Override GD Imageformat";
$GLOBALS['strTimeZone']                     = "Zona Waktu";

?>
