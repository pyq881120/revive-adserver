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
$GLOBALS['strInstall']                      = "Kurulum";
$GLOBALS['strChooseInstallLanguage']        = "Kurulum sürecinde kullanacağnız dili seçiniz";
$GLOBALS['strLanguageSelection']            = "Dil Seçimi";
$GLOBALS['strDatabaseSettings']             = "Veritabanı ayarları";
$GLOBALS['strAdminSettings']                = "Yönetici Ayarları";
$GLOBALS['strAdminAccount']                 = "System Administrator Account";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Gelişmiş Ayarlar";
$GLOBALS['strOtherSettings']                = "Diğer Ayarlar";
$GLOBALS['strSpecifySyncSettings']          = "Senkronizasyon Ayarları";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strWarning']                      = "Uyarı";
$GLOBALS['strFatalError']                   = "Tehlikeli hata oluştu";
$GLOBALS['strUpdateError']                  = "An error occurred while updating";
$GLOBALS['strBtnContinue']                  = "Continue »";
$GLOBALS['strBtnRecover']                   = "Recover »";
$GLOBALS['strBtnStartAgain']                   = "Start Upgrade Again »";
$GLOBALS['strBtnGoBack']                    = "« Go Back";
$GLOBALS['strBtnAgree']                     = "I Agree »";
$GLOBALS['strBtnDontAgree']                 = "« I Disagree";
$GLOBALS['strBtnRetry']                     = "Retry";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Veritabanına bağlanılamadı, lütfen belirtmiş olduğunuz ayarları kontrol ediniz";
$GLOBALS['strCreateTableTestFailed']        = "Belirtmiş olduğunuz kullanıcı veritabanı yapısına ekleme yapma iznine sahip değil, veritabanı yöneticinizle irtibata geçiniz.";
$GLOBALS['strUpdateTableTestFailed']        = "Belirtmiş olduğunuz kullanıcı veritabanı yapısını değiştirme iznine sahip değil, veritabanı yöneticinizle irtibata geçiniz.";
$GLOBALS['strTablePrefixInvalid']           = "Tablo önadları geçersiz karakter içeriyor";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Devam etmeden önce aşağıdaki problemleri düzeltiniz:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Hataları yoksay";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "PHP ayarlarındaki register_globals değişkeni <b>on</b> olmalıdır.";
$GLOBALS['strWarningRegisterArgcArv']       = "The PHP configuration variable register_argc_argv needs to be turned on to run maintenance from the command line.";
$GLOBALS['strWarningMagicQuotesGPC']        = "PHP ayarlarındaki magic_quotes_gpc değişkeni <b>on</b> olmalıdır.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "PHP ayarlarındaki magic_quotes_runtime değişkeni <b>off</b> olmalıdır.";
$GLOBALS['strWarningFileUploads']           = "PHP ayarlarındaki file_uploads değişkeni <b>on</b> olmalıdır.";
$GLOBALS['strWarningTrackVars']             = "The PHP configuration variable track_vars needs to be turned on.";
$GLOBALS['strWarningPREG']                  = "The version of PHP you are using doesn't have support for PERL compatible regular expressions. You need to enable the PREG extension before you can proceed.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Şu anda veritabanını güncelleme izni yok. Eğer devam etmek istiyorsanız, tüm bannerlar, istatistikler ve reklamlarsilinecek.";
$GLOBALS['strIgnoreErrors']                 = "Ignore errors";
$GLOBALS['strRetryUpdate']                  = "Retry updating";
$GLOBALS['strTableNames']                   = "Tablo isimleri";
$GLOBALS['strTablesPrefix']                 = "Tablo isim önadları";
$GLOBALS['strTablesType']                   = "Tablo tipleri";


$GLOBALS['strRecoveryRequiredTitle']    = "Your previous upgrade attempt encountered an error";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "The UPGRADE file is still present inside of your 'var' folder. We are unable to remove this file because of insufficient permissions. Please delete this file yourself.";
$GLOBALS['strRemoveUpgradeFile']               = "You must remove the UPGRADE file from the 'var' folder.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Your system has been successfully upgraded.  The remaining screens will help you update the configuration of your new ad server.";
$GLOBALS['strErrorOccured']                 = "Aşağıdaki hatalar oluştu:";
$GLOBALS['strErrorInstallDatabase']         = "Veritabanı yapısı oluşturulamıyor.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "Veritabanına bağlantı sağlanamıyor.";

$GLOBALS['strErrorWritePermissions']        = "File permission errors have been detected, and must be fixed before you can continue.<br />To fix the errors on a Linux system, try typing in the following command(s):";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "File permission errors have been detected, and must be fixed before you can continue.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "Admin Interface URL";
$GLOBALS['strDeliveryUrlPrefix']            = "Teslimat Motoru";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Teslimat Motoru";
$GLOBALS['strImagesUrlPrefix']              = "Image Store URL";
$GLOBALS['strImagesUrlPrefixSSL']           = "Image Store URL (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Geçersiz kullanıcı adı veya parolası";

$GLOBALS['strUpgrade']                      = "Güncelle";
$GLOBALS['strSystemUpToDate']               = "Sisteminiz güncellenmiştir, yeniden güncelleme gerekmemektedir. <br>Ana Sayfaya dönmek için <b>İleri</b>yi tıklayınız.";
$GLOBALS['strSystemNeedsUpgrade']           = "Veritabanı yapısı ve ayar dosyası düzgün çalışması için güncellenmesi için gerekiyor. Güncelleme için <b>İleriyi</b> tıklayınız. <br>Güncelleme bir kaç dakika sürebilir lütfen sabırlı olun.";
$GLOBALS['strSystemUpgradeBusy']            = "Sistem güncelleniyor, lütfen bekleyiniz...";
$GLOBALS['strSystemRebuildingCache']        = "Hafıza tekrar oluşturuluyor, lütfen bekleyiniz...";
$GLOBALS['strServiceUnavalable']            = "Siste geçici olarak çalışmıyor. Sistem güncelemesi devam ediyor";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Bölüm Seçiniz";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Unable to write changes to the config file";
$GLOBALS['strUnableToWritePrefs']                    = "Unable to commit preferences to the database";
$GLOBALS['strImageDirLockedDetected']	             = "The supplied <b>Images Folder</b> is not writeable by the server. <br>You can't proceed until you either change permissions of the folder or create the folder.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Configuration checklist";
$GLOBALS['strConfigurationSettings']                 = "Configuration settings";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Yönetici Ayarları";
$GLOBALS['strAdministratorAccount']                  = "The System Administrator Account";
$GLOBALS['strLoginCredentials']                      = "Giriş güvenliği";
$GLOBALS['strAdminUsername']                         = "Yönetici ismi";
$GLOBALS['strAdminPassword']                         = "Administrator  Password";
$GLOBALS['strInvalidUsername']                       = "Geçersiz Kullanıcı Adı";
$GLOBALS['strBasicInformation']                      = "Temel Bilgiler";
$GLOBALS['strAdminFullName']                         = "Yönetici Tam ismi";
$GLOBALS['strAdminEmail']                            = "Yönetici e-mail adresi";
$GLOBALS['strAdministratorEmail']                    = "Administrator email Address";
$GLOBALS['strCompanyName']                           = "Firma İsmi";
$GLOBALS['strAdminCheckUpdates']                     = "Güncellemeleri kontrol et";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Her girişte";
$GLOBALS['strAdminCheckDaily']                       = "Günlük";
$GLOBALS['strAdminCheckWeekly']                      = "Haftalık";
$GLOBALS['strAdminCheckMonthly']                     = "Aylık";
$GLOBALS['strAdminCheckNever']                       = "Asla";
$GLOBALS['strNovice']                                = "Delete actions require confirmation for safety";
$GLOBALS['strUserlogEmail']                          = "Tüm giden e-mailleri logla";
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Please enable <a href='account-settings-update.php'>check for updates</a> to use the dashboard.";
$GLOBALS['strTimezone']                              = "Timezone";
$GLOBALS['strTimezoneEstimated']                     = "Estimated Timezone";
$GLOBALS['strTimezoneGuessedValue']                  = "Server timezone not correctly set in PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Please see the %DOCS% about setting this variable for PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "documentation";
$GLOBALS['strAdminSettingsTitle']                    = "Create a system administrator account";
$GLOBALS['strAdminSettingsIntro']                    = "Please complete this form to create your ad server administration account.";
$GLOBALS['strConfigSettingsIntro']                   = "Please check the configuration settings below and make any required changes before proceeding. If unsure, leave the default values.";

$GLOBALS['strEnableAutoMaintenance']	             = "Automatically perform maintenance during delivery if scheduled maintenance is not set up";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Veritabanı ayarları";
$GLOBALS['strDatabaseServer']                        = "Veritabanı server";
$GLOBALS['strDbLocal']                               = "Use local socket connection";
$GLOBALS['strDbType']                                = "Veritabanı adı";
$GLOBALS['strDbHost']                                = "Veritabanı sunucu";
$GLOBALS['strDbSocket']                              = "Database Socket";
$GLOBALS['strDbPort']                                = "Database Port Number";
$GLOBALS['strDbUser']                                = "Veritabanı kullanıcı adı";
$GLOBALS['strDbPassword']                            = "Veritabanı parolası";
$GLOBALS['strDbName']                                = "Veritabanı adı";
$GLOBALS['strDbNameHint']                            = "Database will be created if it does not exist";
$GLOBALS['strDatabaseOptimalisations']               = "Veritabanı Uygunluğu";
$GLOBALS['strPersistentConnections']                 = "Israrlı bağlantıları kullan";
$GLOBALS['strCantConnectToDb']                       = "Veritabanına bağlanılamıyor";
$GLOBALS['strCantConnectToDbDelivery']               = 'Can\'t Connect to Database for Delivery';
$GLOBALS['strDemoDataInstall']                       = "Install Demo Data";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Ana Ayarlar";
$GLOBALS['strEmailAddresses']                        = "Email 'From' Address";
$GLOBALS['strEmailFromName']                         = "Email 'From' Name";
$GLOBALS['strEmailFromAddress']                      = "Email 'From' Email Address";
$GLOBALS['strEmailFromCompany']                      = "Email 'From' Company";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "qmail patchini kullanın";
$GLOBALS['strEnableQmailPatch']                      = "qmail patchini kullanın";
$GLOBALS['strEmailHeader']                           = "Email headers";
$GLOBALS['strEmailLog']                              = "Email log";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Audit Trail Settings";
$GLOBALS['strEnableAudit']                           = "Enable Audit Trail";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Debug Logging Settings";
$GLOBALS['strProduction']                            = "Production server";
$GLOBALS['strEnableDebug']                           = "Enable Debug Logging";
$GLOBALS['strDebugMethodNames']                      = "Include method names in debug log";
$GLOBALS['strDebugLineNumbers']                      = "Include line numbers in debug log";
$GLOBALS['strDebugType']                             = "Debug Log Type";
$GLOBALS['strDebugTypeFile']                         = "File";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "SQL Database";
$GLOBALS['strDebugTypeSyslog']                       = "Syslog";
$GLOBALS['strDebugName']                             = "Debug Log Name, Calendar, SQL Table,<br />or Syslog Facility";
$GLOBALS['strDebugPriority']                         = "Debug Priority Level";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Most Information";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Default Information";
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
$GLOBALS['strDeliverySettings']                      = "Delivery Settings";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Web path";
$GLOBALS['strDeliveryPath']                          = "Delivery path";
$GLOBALS['strImagePath']                             = "Images path";
$GLOBALS['strDeliverySslPath']                       = "Delivery SSL path";
$GLOBALS['strImageSslPath']                          = "Images SSL path";
$GLOBALS['strImageStore']                            = "Images folder";
$GLOBALS['strTypeWebSettings']                       = "Yerel banner (Webserver) ayarları";
$GLOBALS['strTypeWebMode']                           = "Depolama metodu";
$GLOBALS['strTypeWebModeLocal']                      = "Yerel Klasörler";
$GLOBALS['strTypeDirError']                          = "The local directory cannot be written to by the web server";
$GLOBALS['strTypeWebModeFtp']                        = "Harici FTP sunucu";
$GLOBALS['strTypeWebDir']                            = "Yerel Klasörler";
$GLOBALS['strTypeFTPHost']                           = "FTP Sunucu";
$GLOBALS['strTypeFTPDirectory']                      = "Sunucu klasörü";
$GLOBALS['strTypeFTPUsername']                       = "Giriş";
$GLOBALS['strTypeFTPPassword']                       = "Parola";
$GLOBALS['strTypeFTPPassive']                        = "Use passive FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "The FTP Host Directory does not exist";
$GLOBALS['strTypeFTPErrorConnect']                   = "Could not connect to the FTP Server, the Login or Password is not correct";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Your installation of PHP does not support FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "Could not upload file to the FTP Server, check set proper rights to Host Directory";
$GLOBALS['strTypeFTPErrorHost']                      = "The FTP Host is not correct";
$GLOBALS['strDeliveryFilenames']                     = "Delivery File Names";
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
$GLOBALS['strDeliveryFilenamesLocal']                = "Local Invocation";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Front Controller";
$GLOBALS['strDeliveryFilenamesFlash']                = "Flash Include (Can be a full URL)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Banner Delivery Cache Settings";
$GLOBALS['strDeliveryCacheLimit']                    = "Time Between Banner Cache Updates (seconds)";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "Use remote origin server";
$GLOBALS['strOriginType']                            = "Origin server type";
$GLOBALS['strOriginHost']                            = "Hostname for origin server";
$GLOBALS['strOriginPort']                            = "Port number for origin database";
$GLOBALS['strOriginScript']                          = "Script file for origin database";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Origin timeout (seconds)";
$GLOBALS['strOriginProtocol']                        = "Origin server protocol";

$GLOBALS['strDeliveryAcls']                          = "Evaluate banner delivery limitations during delivery";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "Obfuscate channel when delivering ads";
$GLOBALS['strDeliveryExecPhp']                       = "Allow PHP code in ads to be executed<br />(Warning: Security risk)";
$GLOBALS['strDeliveryCtDelimiter']                   = "3rd Party Click Tracking Delimiter";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Global default Banner Image URL";
$GLOBALS['strP3PSettings']                           = "P3P Gizlilik Politikaları";
$GLOBALS['strUseP3P']                                = "P3P Politikalarını kullan";
$GLOBALS['strP3PCompactPolicy']                      = "P3P Yoğunlaştırılmış politika";
$GLOBALS['strP3PPolicyLocation']                     = "P3P Politika yeri";

// General Settings
$GLOBALS['generalSettings']                          = "Global General System Settings";
$GLOBALS['uiEnabled']                                = "User Interface Enabled";
$GLOBALS['defaultLanguage']                          = "Default System Language<br />(Each user can select their own language)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting Settings";
$GLOBALS['strGeotargeting']                          = "Geotargeting Settings";
$GLOBALS['strGeotargetingType']                      = "Geotargeting Module Type";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Use the bundled MaxMind GeoLiteCountry database";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP Country Database Location";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP Region Database Location";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP City Database Location";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP Area Database Location";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP DMA Database Location";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP Organisation Database Location";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP Database Location";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP Netspeed Database Location";
$GLOBALS['strGeoShowUnavailable']                    = "Show geotargeting delivery limitations even if GeoIP data unavailable";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "The MaxMind GeoIP Country Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "The MaxMind GeoIP Region Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "The MaxMind GeoIP City Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "The MaxMind GeoIP Area Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "The MaxMind GeoIP DMA Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "The MaxMind GeoIP Organisation Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "The MaxMind GeoIP ISP Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "The MaxMind GeoIP Netspeed Database does not exist in the location specified";

// Interface Settings
$GLOBALS['strInventory']                             = "Envanter";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "<i>Kampanya önizleme</i> sayfasında ekstra kampanya bigilerini göster";
$GLOBALS['strShowBannerInfo']                        = "<i>Banner önizleme</i> sayfasında ekstra banner bilgilerini göster";
$GLOBALS['strShowCampaignPreview']                   = "<i>Banner önizleme</i> sayfasında tüm bannerları göster";
$GLOBALS['strShowBannerHTML']                        = "HTML banner önizlemede düz HTML kodlu bannerlar haricindeki asıl bannerları göster";
$GLOBALS['strShowBannerPreview']                     = "Sayfanın en üstünde uyan banner önizlemeyi göster";
$GLOBALS['strHideInactive']                          = "Etkin olmayanları gizle";
$GLOBALS['strGUIShowMatchingBanners']                = "<i>İlişkili Bannerlar</i> sayfalarında uyan bannerları göster";
$GLOBALS['strGUIShowParentCampaigns']                = "<i>ilişkili Bannerlar</i> sayfasında ebeveyn bannerları göster";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Default Campaigns to Anonymous";
$GLOBALS['strStatisticsDefaults']                    = "İstatistikler";
$GLOBALS['strBeginOfWeek']                           = "Haftanın Başlangıcı";
$GLOBALS['strPercentageDecimals']                    = "Yüzdelik Basamağı";
$GLOBALS['strWeightDefaults']                        = "öntanımlı ağırlık";
$GLOBALS['strDefaultBannerWeight']                   = "öntanımlı banner ağırlığı";
$GLOBALS['strDefaultCampaignWeight']                 = "öntanımlı kampanya ağırlığı";
$GLOBALS['strDefaultBannerWErr']                     = "öntanımlı banner ağırlığı pozitif tamsayı olmalıdır";
$GLOBALS['strDefaultCampaignWErr']                   = "öntanımlı kampanya ağırlığı pozitif tamsayı olmalıdır";
$GLOBALS['strConfirmationUI']                        = "Confirmation in User Interface";

$GLOBALS['strPublisherDefaults']                     = "Website defaults";
$GLOBALS['strModesOfPayment']                        = "Ödeme tipi";
$GLOBALS['strCurrencies']                            = "Currencies";
$GLOBALS['strCategories']                            = "Categories";
$GLOBALS['strHelpFiles']                             = "Yardım dosyası";
$GLOBALS['strHasTaxID']                              = "Vergi numarası";
$GLOBALS['strDefaultApproved']                       = "Approved check box";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Choose Advertiser";
$GLOBALS['strChooseCampaign']                        = "Choose Campaign";
$GLOBALS['strChooseCampaignBanner']                  = "Choose Banner";
$GLOBALS['strChooseTracker']                         = "Choose Tracker";
$GLOBALS['strDefaultConversionStatus']               = "Varsayılan dönüştürme kuralları";
$GLOBALS['strDefaultConversionType']                 = "Varsayılan dönüştürme kuralları";
$GLOBALS['strCSVTemplateSettings']                   = "CSV Template Settings";
$GLOBALS['strIncludeCountryInfo']                    = "Include Country Info";
$GLOBALS['strIncludeBrowserInfo']                    = "Include Browser Info";
$GLOBALS['strIncludeOSInfo']                         = "Include OS Info";
$GLOBALS['strIncludeSampleRow']                      = "Include Sample Row";
$GLOBALS['strCSVTemplateAdvanced']                   = "Advanced Template";
$GLOBALS['strCSVTemplateIncVariables']               = "Include Tracker Variables";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "İzin verilen invocation tipleri";
$GLOBALS['strInvocationDefaults']                    = "Invocation Defaults";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Enable 3rd Party Clicktracking by Default";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner Delivery Settings";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Banner Logging Settings";
$GLOBALS['strLogAdRequests']                         = "Log a request every time a banner is requested";
$GLOBALS['strLogAdImpressions']                      = "Log an impression every time a banner is viewed";
$GLOBALS['strLogAdClicks']                           = "Log a click every time a viewer clicks on a banner";
$GLOBALS['strLogTrackerImpressions']                 = "Log a tracker impression every time a tracker beacon is viewed";
$GLOBALS['strReverseLookup']                         = "DNS geri besleme";
$GLOBALS['strProxyLookup']                           = "Proxy izleme";
$GLOBALS['strPreventLogging']                        = "Block Banner Logging Settings";
$GLOBALS['strIgnoreHosts']                           = "Sunuculara önem verme";
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
$GLOBALS['strBlockAdViews']                          = "Don't count Ad Impressions if the viewer has seen the same ad/zone pair within the specified time (seconds)";
$GLOBALS['strBlockAdViewsError']                     = "Ad Impression block value must be a non-negative integer";
$GLOBALS['strBlockAdClicks']                         = "Don't count Ad Clicks if the viewer has clicked on the same ad/zone pair within the specified time (seconds)";
$GLOBALS['strBlockAdClicksError']                    = "Ad Click block value must be a non-negative integer";
$GLOBALS['strMaintenanceOI']                         = "Maintenance Operation Interval (minutes)";
$GLOBALS['strMaintenanceOIError']                    = "The Maintenace Operation Interval is not valid - see documentation for valid values";
$GLOBALS['strPrioritySettings']                      = "Priority Settings";
$GLOBALS['strPriorityInstantUpdate']                 = "Update advertisement priorities immediately when changes made in the UI";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Default Ad Impression Connection Window (seconds)";
$GLOBALS['strDefaultImpConWindowError']              = "If set, the Default Ad Impression Connection Window must be a positive integer";
$GLOBALS['strDefaultCliConWindow']                   = "Default Ad Click Connection Window (seconds)";
$GLOBALS['strDefaultCliConWindowError']              = "If set, the Default Ad Click Connection Window must be a positive integer";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Uyarı Sınırı";
$GLOBALS['strWarnLimitErr']                          = "Uyarı limiti pozitif tamsayı olmalıdır";
$GLOBALS['strWarnLimitDays']                         = "Send a warning when the days left are less than specified here";
$GLOBALS['strWarnLimitDaysErr']                      = "Warn Limit Days should be a positive number";
$GLOBALS['strAllowEmail']                            = "Globally allow sending of emails";
$GLOBALS['strEmailAddressFrom']                      = "Email address to send reports FROM";
$GLOBALS['strEmailAddressName']                      = "Company or personal name to sign off email with";
$GLOBALS['strWarnAdmin']                             = "Uyarı Yöneticisi";
$GLOBALS['strWarnClient']                            = "Reklamcıya uyarı";
$GLOBALS['strWarnAgency']                            = "Reklamcıya uyarı";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Kullanıcı arabirimi ayarları";
$GLOBALS['strGeneralSettings']                       = "Genel Ayarlar";
$GLOBALS['strAppName']                               = "Uygulama Adı";
$GLOBALS['strMyHeader']                              = "Altbilgi";
$GLOBALS['strMyHeaderError']                         = "The header file does not exist in the location you specified";
$GLOBALS['strMyFooter']                              = "Altbilgi";
$GLOBALS['strMyFooterError']                         = "The footer file does not exist in the location you specified";
$GLOBALS['strDefaultTrackerStatus']                  = "Default tracker status";
$GLOBALS['strDefaultTrackerType']                    = "Default tracker type";
$GLOBALS['strSSLSettings']                           = "SSL Settings";
$GLOBALS['requireSSL']                               = "Force SSL Access on User Interface";
$GLOBALS['sslPort']                                  = "SSL Port Used by Web Server";
$GLOBALS['strDashboardSettings']                     = "Dashboard Settings";

$GLOBALS['strMyLogo']                                = "Name/URL of custom logo file";
$GLOBALS['strMyLogoError']                           = "The logo file does not exist in the admin/images directory";
$GLOBALS['strGuiHeaderForegroundColor']              = "Color of the header foreground";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Color of the header background";
$GLOBALS['strGuiActiveTabColor']                     = "Color of the active tab";
$GLOBALS['strGuiHeaderTextColor']                    = "Color of the text in the header";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Please enter colors in an RGB format, like '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Sıkıştırma için GZIP içeriğini kullan";
$GLOBALS['strClientInterface']                       = "Reklamcı arayüzü ayarları";
$GLOBALS['strReportsInterface']                      = "Reports Interface";
$GLOBALS['strClientWelcomeEnabled']                  = "Reklamcıya hoşgeldiniz mesajı";
$GLOBALS['strClientWelcomeText']                     = "Hoşgeldiniz mesajı<br>(HTML taglarına izin veriliyor)";

$GLOBALS['strPublisherInterface']                    = "Website interface";
$GLOBALS['strPublisherAgreementEnabled']             = "Enable login control for websites who haven't accepted Terms and Conditions";
$GLOBALS['strPublisherAgreementText']                = "Login text (HTML tags allowed)";

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
$GLOBALS['strKeywordRetrieval']             = "Anahtar kelime düzeltmeleri";
$GLOBALS['strBannerRetrieval']              = "Banner düzeltme metodu";
$GLOBALS['strRetrieveRandom']               = "Rastgele banner düzeltme (öntanımlı)";
$GLOBALS['strRetrieveNormalSeq']            = "Normal sıralı banner düzeltme";
$GLOBALS['strWeightSeq']                    = "Ağarlık tabanlı sıralı banner düzeltme";
$GLOBALS['strFullSeq']                      = "Tam sıralı banner düzeltme";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "Şartlı anahtar kelimeleri kullan";
$GLOBALS['strUseMultipleKeys']              = "Birden fazla anahtar kullan";

$GLOBALS['strTableBorderColor']             = "Tablo Çerçeve rengi";
$GLOBALS['strTableBackColor']               = "Tablo Zemin Rengi";
$GLOBALS['strTableBackColorAlt']            = "Tablo Zemin Rengi (Alternatif)";
$GLOBALS['strMainBackColor']                = "Ana Zemin Rengi";
$GLOBALS['strOverrideGD']                   = "Override GD Imageformat";
$GLOBALS['strTimeZone']                     = "Zaman Alanı";

?>
