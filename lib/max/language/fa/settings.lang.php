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
$GLOBALS['strInstall']                      = "نصب";
$GLOBALS['strChooseInstallLanguage']        = "انتخاب زبان جدید برای نصب";
$GLOBALS['strLanguageSelection']            = "تنظیمات زبان";
$GLOBALS['strDatabaseSettings']             = "تنظیمت دیتابیس";
$GLOBALS['strAdminSettings']                = "تنظیمات مدیریت";
$GLOBALS['strAdminAccount']                 = "اکانت مدیریت";
$GLOBALS['strAdministrativeSettings']       = "تنظیمات مدیراجرایی";
$GLOBALS['strAdvancedSettings']             = "تنظیمات پیشر�?ته";
$GLOBALS['strOtherSettings']                = "سایر تنظیمات";
$GLOBALS['strSpecifySyncSettings']          = "تنظیمات همگانی";
$GLOBALS['strLicenseInformation']           = "اطلاعات لایسنس";
$GLOBALS['strWarning']                      = "اخطار";
$GLOBALS['strFatalError']                   = "  یک خطای مهم رخ داده است";
$GLOBALS['strUpdateError']                  = "یک خطا در طی بروزرسانی برنامه رخ داده است";
$GLOBALS['strBtnContinue']                  = "ادامه دادن »";
$GLOBALS['strBtnRecover']                   = "دوباره »";
$GLOBALS['strBtnStartAgain']                   = "شروع به روزرسانی مجدد";
$GLOBALS['strBtnGoBack']                    = "« بازگشت";
$GLOBALS['strBtnAgree']                     = "من موا�?قم »";
$GLOBALS['strBtnDontAgree']                 = "« من موا�?ق نیستم";
$GLOBALS['strBtnRetry']                     = "مجدد";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Could not connect to database, please recheck the settings you specified";
$GLOBALS['strCreateTableTestFailed']        = "کاربری که شما مشخص کرده اید دسترسی کا�?ی برای ایجاد و بروزرسانی بانک اطلاعاتی را ندارد,با مدیریت بانک اطلاعاتی خود تماس بگیرید.";
$GLOBALS['strUpdateTableTestFailed']        = "کاربری که شما مشخص کرده اید دسترسی کا�?ی برای ایجاد و بروزرسانی بانک اطلاعاتی را ندارد,با مدیریت بانک اطلاعاتی خود تماس بگیرید.";
$GLOBALS['strTablePrefixInvalid']           = "پیشوند جدول ها دارای کاراکتر غیر مجاز می باشد";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "قبل از ادامه این مشکل جدی را اصلاح نمایید:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "نادیده گر�?تن هشدارها";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "گزینه register_globals در پیکربندی PHP نیاز دارد که بر روی گزینه on تنظیم شود.";
$GLOBALS['strWarningRegisterArgcArv']       = "The PHP configuration variable register_argc_argv needs to be turned on to run maintenance from the command line.";
$GLOBALS['strWarningMagicQuotesGPC']        = "متغیر magic_quotes_gpc در پیکر بندی PHP باید بر روی گزینه on تنظیم شود.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "گزینه magic_quotes_runtime در پیکر بندی PHP نیاز دارد که بر روی گزینه off تنظیم شود.";
$GLOBALS['strWarningFileUploads']           = "متغیر file_uploads در پیکربندیPHP نیاز دارد که بر روی گزینه on تنظیم شود.";
$GLOBALS['strWarningTrackVars']             = "متغیر track_vars در پیکربندیPHP  نیاز دارد که بر روی گزینه on تنظیم شود.";
$GLOBALS['strWarningPREG']                  = "نسخه PHP شما برای پشتیبانی از عبارت منطقی PERL همسازی ندارد. شما نیاز به �?عال کردن PREG extension قبل از ادامه پردازش دارید.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "در حال حاضر امکان بروزرسانی بانک اطلاعاتی وجود ندارد. اگر شما تصمیم جدی به این کار دارید کلیه اطلاعات بانک اطلاعاتی شما از بین خواهد ر�?ت.";
$GLOBALS['strIgnoreErrors']                 = "نادیده گر�?تن خطاها";
$GLOBALS['strRetryUpdate']                  = "تلاش برای بروزرسانی";
$GLOBALS['strTableNames']                   = "نام های جدول";
$GLOBALS['strTablesPrefix']                 = "پیشوند نام جدولها";
$GLOBALS['strTablesType']                   = "نوع جدول";


$GLOBALS['strRecoveryRequiredTitle']    = "Your previous upgrade attempt encountered an error";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Warning: the UPGRADE file is still present inside of your var folder. We are unable to remove this file because of insufficient permissions. Please delete this file yourself.";
$GLOBALS['strRemoveUpgradeFile']               = "You must remove the UPGRADE file from the var folder.";
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
$GLOBALS['strErrorOccured']                 = "The following error occurred:";
$GLOBALS['strErrorInstallDatabase']         = "The database structure could not be created.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "It was not possible to open a connection to the database.";

$GLOBALS['strErrorWritePermissions']        = "File permission errors have been detected, and must be fixed before you can continue.<br />To fix the errors on a Linux system, try typing in the following command(s):";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "File permission errors have been detected, and must be fixed before you can continue.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "آدرس ورود به مدیریت";
$GLOBALS['strDeliveryUrlPrefix']            = "آدرس خروجی";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "آدرس خروجی به صورت (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "آدرس ذخیره سازی عکسها";
$GLOBALS['strImagesUrlPrefixSSL']           = "آدرس عکسها به صورت (SSL)";

$GLOBALS['strInvalidUserPwd']               = "نام کاربری و پسورد اشتباه است";

$GLOBALS['strUpgrade']                      = "به روز رسانی";
$GLOBALS['strSystemUpToDate']               = "Your system is already up to date, no upgrade is needed at the moment. <br />Click on <b>Proceed</b> to go to home page.";
$GLOBALS['strSystemNeedsUpgrade']           = "The database structure and configuration file need to be upgraded in order to function correctly. Click <b>Proceed</b> to start the upgrade process. <br /><br />Depending on which version you are upgrading from and how many statistics are already stored in the database, this process can cause high load on your database server. Please be patient, the upgrade can take up to a couple of minutes.";
$GLOBALS['strSystemUpgradeBusy']            = "System upgrade in progress, please wait...";
$GLOBALS['strSystemRebuildingCache']        = "Rebuilding cache, please wait...";
$GLOBALS['strServiceUnavalable']            = "The service is temporarily unavailable. System upgrade in progress";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "انتخاب بخش";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Unable to write changes to the config file";
$GLOBALS['strUnableToWritePrefs']                    = "Unable to commit preferences to the database";
$GLOBALS['strImageDirLockedDetected']	             = "The supplied <b>Images Folder</b> is not writeable by the server. <br>You can't proceed until you either change permissions of the folder or create the folder.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "نصب پیکربندی";
$GLOBALS['strConfigurationSettings']                 = "تنظیمات پیکربندی";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "تنظیمات مدیریت";
$GLOBALS['strAdministratorAccount']                  = "اکانت مدیریت";
$GLOBALS['strLoginCredentials']                      = "اطلاعات ورود";
$GLOBALS['strAdminUsername']                         = "نام کاربری مدیریت";
$GLOBALS['strAdminPassword']                         = "پسورد مدیریت";
$GLOBALS['strInvalidUsername']                       = "نام کاربری اشتباه است";
$GLOBALS['strBasicInformation']                      = "اطلاعات اصلی";
$GLOBALS['strAdminFullName']                         = "نام کامل مدیر";
$GLOBALS['strAdminEmail']                            = "آدرس ایمیل مدیران";
$GLOBALS['strAdministratorEmail']                    = "آدرس ایمیل مدیریت";
$GLOBALS['strCompanyName']                           = "نام کمپانی";
$GLOBALS['strAdminCheckUpdates']                     = "چک برای به روزرسانی";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "ورود  همه";
$GLOBALS['strAdminCheckDaily']                       = "روزانه";
$GLOBALS['strAdminCheckWeekly']                      = "ه�?تگی";
$GLOBALS['strAdminCheckMonthly']                     = "ماهیانه";
$GLOBALS['strAdminCheckNever']                       = "همیشه";
$GLOBALS['strNovice']                                = "Delete actions require confirmation for safety";
$GLOBALS['strUserlogEmail']                          = "همه خروجی پیامهای ایمیل";
$GLOBALS['strEnableDashboard']                       = "�?عال بودن داشبورد";
$GLOBALS['strEnableDashboardSyncNotice']             = "Please enable <a href='account-settings-update.php'>check for updates</a> to use the dashboard.";
$GLOBALS['strTimezone']                              = "ساعت";
$GLOBALS['strTimezoneEstimated']                     = "قیمت ساعتی";
$GLOBALS['strTimezoneGuessedValue']                  = "Server timezone not correctly set in PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Please see the %DOCS% about setting this variable for PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "مدارک";
$GLOBALS['strAdminSettingsTitle']                    = "اکانت مدیریت شما";
$GLOBALS['strAdminSettingsIntro']                    = "Please complete this form to create your ad server administration account.";
$GLOBALS['strConfigSettingsIntro']                   = "Please check the configuration settings below and make any required changes before proceeding. If unsure, leave the default values.";

$GLOBALS['strEnableAutoMaintenance']	             = "نگهداری به صورت اتوماتیک تا زمان تحویل ";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "تنظیمت دیتابیس";
$GLOBALS['strDatabaseServer']                        = "تنظیمات کلی سرور دیتابیس";
$GLOBALS['strDbLocal']                               = "متصل شدن به لوکال سرور";
$GLOBALS['strDbType']                                = "نوع دیتابیس";
$GLOBALS['strDbHost']                                = "نام هاست دیتابیس";
$GLOBALS['strDbSocket']                              = "Database Socket";
$GLOBALS['strDbPort']                                = "پرت دیتابیس";
$GLOBALS['strDbUser']                                = "نام کاربری دیتابیس";
$GLOBALS['strDbPassword']                            = "پسورد دیتابیس";
$GLOBALS['strDbName']                                = "نام دیتابیس";
$GLOBALS['strDbNameHint']                            = "Database will be created if it does not exist";
$GLOBALS['strDatabaseOptimalisations']               = "تنظیمات آپشنهای کلی دیتابیس";
$GLOBALS['strPersistentConnections']                 = "نسبت مانده مصر�?";
$GLOBALS['strCantConnectToDb']                       = "Can't Connect to Database";
$GLOBALS['strCantConnectToDbDelivery']               = 'Can\'t Connect to Database for Delivery';
$GLOBALS['strDemoDataInstall']                       = "نصب اطلاعات پیش �?رض";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "تنظیمات اصلی";
$GLOBALS['strEmailAddresses']                        = "Email 'From' Address";
$GLOBALS['strEmailFromName']                         = "Email 'From' Name";
$GLOBALS['strEmailFromAddress']                      = "Email 'From' Email Address";
$GLOBALS['strEmailFromCompany']                      = "Email 'From' Company";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "Enable qmail patch";
$GLOBALS['strEnableQmailPatch']                      = "Enable qmail patch";
$GLOBALS['strEmailHeader']                           = "Email headers";
$GLOBALS['strEmailLog']                              = "Email log";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Audit Trail Settings";
$GLOBALS['strEnableAudit']                           = "Enable Audit Trail";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "تنظیمات کلی ر�?ع اشکال";
$GLOBALS['strProduction']                            = "خرورجی سرور";
$GLOBALS['strEnableDebug']                           = "�?عال بودن ر�?ع اشکال";
$GLOBALS['strDebugMethodNames']                      = "همراه بودن نام مشکل و دلیل آن";
$GLOBALS['strDebugLineNumbers']                      = "همراه بودن شماره خط ارور";
$GLOBALS['strDebugType']                             = "نوع اشکال زدا";
$GLOBALS['strDebugTypeFile']                         = "�?ایل";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "دیتا بیس اس کیو ال";
$GLOBALS['strDebugTypeSyslog']                       = "سیستم ورود";
$GLOBALS['strDebugName']                             = "نام و تاریخ ارور در جدول دیتابیس با نام";
$GLOBALS['strDebugPriority']                         = "انتخاب مرحله اول ر�?ع مشکل";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Most Information";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Default Information";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Least Information";
$GLOBALS['strDebugIdent']                            = "شناسایی ریشه مشکل";
$GLOBALS['strDebugUsername']                         = "نام کاربری سرور اس کیو ال و سی پنل";
$GLOBALS['strDebugPassword']                         = "پسورد سرور اس کیو ال و سی پنل";
$GLOBALS['strProductionSystem']                      = "Production System";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "تنظیمات خروجی";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "آدرس وب";
$GLOBALS['strDeliveryPath']                          = "آدرس خروجی";
$GLOBALS['strImagePath']                             = "آدرس عکسها";
$GLOBALS['strDeliverySslPath']                       = "Delivery SSL path";
$GLOBALS['strImageSslPath']                          = "Images SSL path";
$GLOBALS['strImageStore']                            = "�?ولدر عکسها";
$GLOBALS['strTypeWebSettings']                       = "تنظیمات کلی بنرهای در لوکال سرور";
$GLOBALS['strTypeWebMode']                           = "روش ذخیره سازی";
$GLOBALS['strTypeWebModeLocal']                      = "لوکال دایرکتوری";
$GLOBALS['strTypeDirError']                          = "The local directory cannot be written to by the web server";
$GLOBALS['strTypeWebModeFtp']                        = "External FTP Server";
$GLOBALS['strTypeWebDir']                            = "لوکال دایرکتوری";
$GLOBALS['strTypeFTPHost']                           = "ا�? ت پی هاست";
$GLOBALS['strTypeFTPDirectory']                      = "هاست دایرکتوری";
$GLOBALS['strTypeFTPUsername']                       = "ورود به سیستم";
$GLOBALS['strTypeFTPPassword']                       = "رمز ";
$GLOBALS['strTypeFTPPassive']                        = "است�?اده ا�? تی پی غیر�?عال";
$GLOBALS['strTypeFTPErrorDir']                       = "The FTP Host Directory does not exist";
$GLOBALS['strTypeFTPErrorConnect']                   = "Could not connect to the FTP Server, the Login or Password is not correct";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Your installation of PHP does not support FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "Could not upload file to the FTP Server, check set proper rights to Host Directory";
$GLOBALS['strTypeFTPErrorHost']                      = "The FTP Host is not correct";
$GLOBALS['strDeliveryFilenames']                     = "کل نامهای �?ایل خروجی";
$GLOBALS['strDeliveryFilenamesAdClick']              = "کلیکها";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "تغییر و متغییرها";
$GLOBALS['strDeliveryFilenamesAdContent']            = "گنجایش ( مثدار )";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "تبدیلات";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "تغییر (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "�?ریم";
$GLOBALS['strDeliveryFilenamesAdImage']              = "عکس";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "جاوا اسکریپت";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "لایه";
$GLOBALS['strDeliveryFilenamesAdLog']                = "گزارش روزانه";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "پاپ آپ";
$GLOBALS['strDeliveryFilenamesAdView']               = "نمایش";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "خروجی XML";
$GLOBALS['strDeliveryFilenamesLocal']                = "خروجی لوکال";
$GLOBALS['strDeliveryFilenamesFrontController']      = "جلو کنترل کننده";
$GLOBALS['strDeliveryFilenamesFlash']                = "همراه �?لش";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "تنظیمات کلی خروجی";
$GLOBALS['strDeliveryCacheLimit']                    = "زمان بین به روز رسانی (ثانیه)";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "است�?اده جزیی مبدا سرور";
$GLOBALS['strOriginType']                            = "نوع اصلی سرور";
$GLOBALS['strOriginHost']                            = "نام هاست برای سرور اصلی";
$GLOBALS['strOriginPort']                            = "شماره پرت برای دیتابیس اصلی";
$GLOBALS['strOriginScript']                          = "�?ایل اسکریپت برای دیتابیس اصلی";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "زمان باقیمانده ( ثانیه )";
$GLOBALS['strOriginProtocol']                        = "قاعده سرور اصلی";

$GLOBALS['strDeliveryAcls']                          = "تعیین کردن با محدودیت خروجی برای بنرها";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "مبهم بودن خط مشی در هنگام خروجی تبلیغ";
$GLOBALS['strDeliveryExecPhp']                       = "مجاز بودن است�?اده از کدهای پی اچ پی در آگهی ( از نظر امنیتی مشکل دارد )";
$GLOBALS['strDeliveryCtDelimiter']                   = "پیگیری �?رد کلیک کننده";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Global default Banner Image URL";
$GLOBALS['strP3PSettings']                           = "کنترل کلی به صورت مخ�?یانه";
$GLOBALS['strUseP3P']                                = "کنترل مخ�?یانه";
$GLOBALS['strP3PCompactPolicy']                      = "کنترل به صورت �?شرده";
$GLOBALS['strP3PPolicyLocation']                     = "موقعیت کنترل";

// General Settings
$GLOBALS['generalSettings']                          = "کل تنظیمات عمومی سیستم";
$GLOBALS['uiEnabled']                                = "�?عال بودن کاربر";
$GLOBALS['defaultLanguage']                          = "زبان پیش �?رض سیستم";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "تنظیمات آی اس پی";
$GLOBALS['strGeotargeting']                          = "تنظیمات کلی آی اس پی";
$GLOBALS['strGeotargetingType']                      = "نوع نمونه آی اس پی";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Use the bundled MaxMind GeoLiteCountry database";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "آخرین آی پی دیتابیس";
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
$GLOBALS['strInventory']                             = "صورت موجودی";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "Show extra campaign info on <i>Campaign overview</i> page";
$GLOBALS['strShowBannerInfo']                        = "Show extra banner info on <i>Banner overview</i> page";
$GLOBALS['strShowCampaignPreview']                   = "Show preview of all banners on <i>Banner overview</i> page";
$GLOBALS['strShowBannerHTML']                        = "Show actual banner instead of plain HTML code for HTML banner preview";
$GLOBALS['strShowBannerPreview']                     = "Show banner preview at the top of pages which deal with banners";
$GLOBALS['strHideInactive']                          = "Hide inactive items from all overview pages";
$GLOBALS['strGUIShowMatchingBanners']                = "Show matching banners on the <i>Linked banner</i> pages";
$GLOBALS['strGUIShowParentCampaigns']                = "Show parent campaigns on the <i>Linked banner</i> pages";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Default Campaigns to Anonymous";
$GLOBALS['strStatisticsDefaults']                    = "آمار";
$GLOBALS['strBeginOfWeek']                           = "آغاز ه�?ته";
$GLOBALS['strPercentageDecimals']                    = "درصد اعشار";
$GLOBALS['strWeightDefaults']                        = "وزن پیش �?رض";
$GLOBALS['strDefaultBannerWeight']                   = "حجم پیش �?رض بنر";
$GLOBALS['strDefaultCampaignWeight']                 = "حجم پیش �?رض داخلی";
$GLOBALS['strDefaultBannerWErr']                     = "Default banner weight should be a positive integer";
$GLOBALS['strDefaultCampaignWErr']                   = "Default campaign weight should be a positive integer";
$GLOBALS['strConfirmationUI']                        = "Confirmation in User Interface";

$GLOBALS['strPublisherDefaults']                     = "ناشر پیش �?رض";
$GLOBALS['strModesOfPayment']                        = "نحوه پرداخت وجه";
$GLOBALS['strCurrencies']                            = "پول رایج";
$GLOBALS['strCategories']                            = "مجموعه ها";
$GLOBALS['strHelpFiles']                             = "�?ایل راهنما";
$GLOBALS['strHasTaxID']                              = "Tax ID";
$GLOBALS['strDefaultApproved']                       = "چک کردن بسته تایید شده ها";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Choose Advertiser";
$GLOBALS['strChooseCampaign']                        = "Choose Campaign";
$GLOBALS['strChooseCampaignBanner']                  = "Choose Banner";
$GLOBALS['strChooseTracker']                         = "Choose Tracker";
$GLOBALS['strDefaultConversionStatus']               = "عملکرد تغییرات پیش �?رض";
$GLOBALS['strDefaultConversionType']                 = "عملکرد تغییرات پیش �?رض";
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
$GLOBALS['strAllowedInvocationTypes']                = "انواع مجوز خروجی";
$GLOBALS['strInvocationDefaults']                    = "Invocation Defaults";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "�?عال شدن 3ار دی در قبال هر کلیک به صورت پیش �?رض";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner Delivery Settings";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Banner Logging Settings";
$GLOBALS['strLogAdRequests']                         = "ورود آگهی دهنده همیشه در صورت درخواست";
$GLOBALS['strLogAdImpressions']                      = "ورود آگهی دهنده همیشه در صورت نمایش آثار";
$GLOBALS['strLogAdClicks']                           = "ورود آگهی دهنده همیشه بعد از کلیک و نمایش کلیک";
$GLOBALS['strLogTrackerImpressions']                 = "ورود تراکر در صورت نمایش یک اثر برای همیشه";
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
$GLOBALS['strPrioritySettings']                      = "Global Priority Settings";
$GLOBALS['strPriorityInstantUpdate']                 = "Update advertisement priorities immediately when changes made in the UI";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Default Ad Impression Connection Window (seconds)";
$GLOBALS['strDefaultImpConWindowError']              = "If set, the Default Ad Impression Connection Window must be a positive integer";
$GLOBALS['strDefaultCliConWindow']                   = "Default Ad Click Connection Window (seconds)";
$GLOBALS['strDefaultCliConWindowError']              = "If set, the Default Ad Click Connection Window must be a positive integer";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Send a warning when the number of impressions left are less than specified here";
$GLOBALS['strWarnLimitErr']                          = "Warn Limit must be a positive integer";
$GLOBALS['strWarnLimitDays']                         = "Send a warning when the days left are less than specified here";
$GLOBALS['strWarnLimitDaysErr']                      = "Warn Limit Days should be a positive number";
$GLOBALS['strAllowEmail']                            = "Globally allow sending of e-mails";
$GLOBALS['strEmailAddressFrom']                      = "Email address to send reports FROM";
$GLOBALS['strEmailAddressName']                      = "Company or personal name to sign off e-mail with";
$GLOBALS['strWarnAdmin']                             = "Send a warning to the administrator every time a campaign is almost expired";
$GLOBALS['strWarnClient']                            = "Send a warning to the advertiser every time a campaign is almost expired";
$GLOBALS['strWarnAgency']                            = "Send a warning to the agency every time a campaign is almost expired";

// UI Settings
$GLOBALS['strGuiSettings']                           = "تنظیمات بین کاربر";
$GLOBALS['strGeneralSettings']                       = "تنظیمات عمومی";
$GLOBALS['strAppName']                               = "نام درخواست کننده";
$GLOBALS['strMyHeader']                              = "مکان �?ایل هدر";
$GLOBALS['strMyHeaderError']                         = "The header file does not exist in the location you specified";
$GLOBALS['strMyFooter']                              = "مکان �?ایل �?وتر";
$GLOBALS['strMyFooterError']                         = "The footer file does not exist in the location you specified";
$GLOBALS['strDefaultTrackerStatus']                  = "وضعیت پیش �?رض تراکر";
$GLOBALS['strDefaultTrackerType']                    = "نوع پیش �?رض تراکر";
$GLOBALS['strSSLSettings']                           = "SSL Settings";
$GLOBALS['requireSSL']                               = "کاربر مجاز به است�?اده از SSL می باشد";
$GLOBALS['sslPort']                                  = "پرت SSL توسط وب سرور";
$GLOBALS['strDashboardSettings']                     = "Dashboard Settings";

$GLOBALS['strMyLogo']                                = "نام مبدا �?ایل لوگو";
$GLOBALS['strMyLogoError']                           = "The logo file does not exist in the admin/images directory";
$GLOBALS['strGuiHeaderForegroundColor']              = "رنگ جلو هدر";
$GLOBALS['strGuiHeaderBackgroundColor']              = "رنگ بکگراند هدر";
$GLOBALS['strGuiActiveTabColor']                     = "رنگ تب �?عال";
$GLOBALS['strGuiHeaderTextColor']                    = "رنگ متن هدر";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Please enter colors in an RGB format, like '0066CC'";

$GLOBALS['strGzipContentCompression']                = "است�?اده از زیپ کردن برای �?شرده سازی";
$GLOBALS['strClientInterface']                       = "Advertiser Interface";
$GLOBALS['strReportsInterface']                      = "Reports Interface";
$GLOBALS['strClientWelcomeEnabled']                  = "Enable Advertiser Welcome Message";
$GLOBALS['strClientWelcomeText']                     = "Welcome Text<br />(HTML Tags Allowed)";

$GLOBALS['strPublisherInterface']                    = "Publisher interface";
$GLOBALS['strPublisherAgreementEnabled']             = "Enable login control for publishers who haven't accepted Terms and Conditions";
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
$GLOBALS['strTimeZone']                     = "Time Zone";

?>
