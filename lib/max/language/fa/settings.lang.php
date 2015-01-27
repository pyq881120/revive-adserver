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
$GLOBALS['strCreateTableTestFailed']        = "کاربری که شما مشخص کرده اید دسترسی کا�?ی برای ایجاد و بروزرسانی بانک اطلاعاتی را ندارد,با مدیریت بانک اطلاعاتی خود تماس بگیرید.";
$GLOBALS['strUpdateTableTestFailed']        = "کاربری که شما مشخص کرده اید دسترسی کا�?ی برای ایجاد و بروزرسانی بانک اطلاعاتی را ندارد,با مدیریت بانک اطلاعاتی خود تماس بگیرید.";
$GLOBALS['strTablePrefixInvalid']           = "پیشوند جدول ها دارای کاراکتر غیر مجاز می باشد";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "قبل از ادامه این مشکل جدی را اصلاح نمایید:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "نادیده گر�?تن هشدارها";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "گزینه register_globals در پیکربندی PHP نیاز دارد که بر روی گزینه on تنظیم شود.";
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


$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Warning: the UPGRADE file is still present inside of your var folder. We are unable to remove this file because of insufficient permissions. Please delete this file yourself.";
$GLOBALS['strRemoveUpgradeFile']               = "You must remove the UPGRADE file from the var folder.";
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

$GLOBALS['strAdminUrlPrefix']               = "آدرس ورود به مدیریت";
$GLOBALS['strDeliveryUrlPrefix']            = "آدرس خروجی";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "آدرس خروجی به صورت (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "آدرس ذخیره سازی عکسها";
$GLOBALS['strImagesUrlPrefixSSL']           = "آدرس عکسها به صورت (SSL)";

$GLOBALS['strInvalidUserPwd']               = "نام کاربری و پسورد اشتباه است";

$GLOBALS['strUpgrade']                      = "به روز رسانی";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "انتخاب بخش";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

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
$GLOBALS['strUserlogEmail']                          = "همه خروجی پیامهای ایمیل";
$GLOBALS['strEnableDashboard']                       = "�?عال بودن داشبورد";
$GLOBALS['strTimezone']                              = "ساعت";
$GLOBALS['strTimezoneEstimated']                     = "قیمت ساعتی";
$GLOBALS['strTimezoneDocumentation']                 = "مدارک";
$GLOBALS['strAdminSettingsTitle']                    = "اکانت مدیریت شما";

$GLOBALS['strEnableAutoMaintenance']	             = "نگهداری به صورت اتوماتیک تا زمان تحویل ";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "تنظیمت دیتابیس";
$GLOBALS['strDatabaseServer']                        = "تنظیمات کلی سرور دیتابیس";
$GLOBALS['strDbLocal']                               = "متصل شدن به لوکال سرور";
$GLOBALS['strDbType']                                = "نوع دیتابیس";
$GLOBALS['strDbHost']                                = "نام هاست دیتابیس";
$GLOBALS['strDbPort']                                = "پرت دیتابیس";
$GLOBALS['strDbUser']                                = "نام کاربری دیتابیس";
$GLOBALS['strDbPassword']                            = "پسورد دیتابیس";
$GLOBALS['strDbName']                                = "نام دیتابیس";
$GLOBALS['strDatabaseOptimalisations']               = "تنظیمات آپشنهای کلی دیتابیس";
$GLOBALS['strPersistentConnections']                 = "نسبت مانده مصر�?";
$GLOBALS['strDemoDataInstall']                       = "نصب اطلاعات پیش �?رض";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "تنظیمات اصلی";
$GLOBALS['strQmailPatch']                            = "Enable qmail patch";

// Audit Trail Settings

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "تنظیمات کلی ر�?ع اشکال";
$GLOBALS['strProduction']                            = "خرورجی سرور";
$GLOBALS['strEnableDebug']                           = "�?عال بودن ر�?ع اشکال";
$GLOBALS['strDebugMethodNames']                      = "همراه بودن نام مشکل و دلیل آن";
$GLOBALS['strDebugLineNumbers']                      = "همراه بودن شماره خط ارور";
$GLOBALS['strDebugType']                             = "نوع اشکال زدا";
$GLOBALS['strDebugTypeFile']                         = "�?ایل";
$GLOBALS['strDebugTypeSql']                          = "دیتا بیس اس کیو ال";
$GLOBALS['strDebugTypeSyslog']                       = "سیستم ورود";
$GLOBALS['strDebugName']                             = "نام و تاریخ ارور در جدول دیتابیس با نام";
$GLOBALS['strDebugPriority']                         = "انتخاب مرحله اول ر�?ع مشکل";
$GLOBALS['strDebugIdent']                            = "شناسایی ریشه مشکل";
$GLOBALS['strDebugUsername']                         = "نام کاربری سرور اس کیو ال و سی پنل";
$GLOBALS['strDebugPassword']                         = "پسورد سرور اس کیو ال و سی پنل";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "تنظیمات خروجی";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "آدرس وب";
$GLOBALS['strDeliveryPath']                          = "آدرس خروجی";
$GLOBALS['strImagePath']                             = "آدرس عکسها";
$GLOBALS['strImageStore']                            = "�?ولدر عکسها";
$GLOBALS['strTypeWebSettings']                       = "تنظیمات کلی بنرهای در لوکال سرور";
$GLOBALS['strTypeWebMode']                           = "روش ذخیره سازی";
$GLOBALS['strTypeWebModeLocal']                      = "لوکال دایرکتوری";
$GLOBALS['strTypeWebDir']                            = "لوکال دایرکتوری";
$GLOBALS['strTypeFTPHost']                           = "ا�? ت پی هاست";
$GLOBALS['strTypeFTPDirectory']                      = "هاست دایرکتوری";
$GLOBALS['strTypeFTPUsername']                       = "ورود به سیستم";
$GLOBALS['strTypeFTPPassword']                       = "رمز ";
$GLOBALS['strTypeFTPPassive']                        = "است�?اده ا�? تی پی غیر�?عال";
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
$GLOBALS['strDeliveryCaching']                       = "تنظیمات کلی خروجی";
$GLOBALS['strDeliveryCacheLimit']                    = "زمان بین به روز رسانی (ثانیه)";


$GLOBALS['strOrigin']                                = "است�?اده جزیی مبدا سرور";
$GLOBALS['strOriginType']                            = "نوع اصلی سرور";
$GLOBALS['strOriginHost']                            = "نام هاست برای سرور اصلی";
$GLOBALS['strOriginPort']                            = "شماره پرت برای دیتابیس اصلی";
$GLOBALS['strOriginScript']                          = "�?ایل اسکریپت برای دیتابیس اصلی";
$GLOBALS['strOriginTimeout']                         = "زمان باقیمانده ( ثانیه )";
$GLOBALS['strOriginProtocol']                        = "قاعده سرور اصلی";

$GLOBALS['strDeliveryAcls']                          = "تعیین کردن با محدودیت خروجی برای بنرها";
$GLOBALS['strDeliveryObfuscate']                     = "مبهم بودن خط مشی در هنگام خروجی تبلیغ";
$GLOBALS['strDeliveryExecPhp']                       = "مجاز بودن است�?اده از کدهای پی اچ پی در آگهی ( از نظر امنیتی مشکل دارد )";
$GLOBALS['strDeliveryCtDelimiter']                   = "پیگیری �?رد کلیک کننده";
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
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "آخرین آی پی دیتابیس";

// Interface Settings
$GLOBALS['strInventory']                             = "صورت موجودی";
$GLOBALS['strShowCampaignInfo']                      = "Show extra campaign info on <i>Campaign overview</i> page";
$GLOBALS['strShowBannerInfo']                        = "Show extra banner info on <i>Banner overview</i> page";
$GLOBALS['strShowCampaignPreview']                   = "Show preview of all banners on <i>Banner overview</i> page";
$GLOBALS['strStatisticsDefaults']                    = "آمار";
$GLOBALS['strBeginOfWeek']                           = "آغاز ه�?ته";
$GLOBALS['strPercentageDecimals']                    = "درصد اعشار";
$GLOBALS['strWeightDefaults']                        = "وزن پیش �?رض";
$GLOBALS['strDefaultBannerWeight']                   = "حجم پیش �?رض بنر";
$GLOBALS['strDefaultCampaignWeight']                 = "حجم پیش �?رض داخلی";

$GLOBALS['strPublisherDefaults']                     = "ناشر پیش �?رض";
$GLOBALS['strModesOfPayment']                        = "نحوه پرداخت وجه";
$GLOBALS['strCurrencies']                            = "پول رایج";
$GLOBALS['strCategories']                            = "مجموعه ها";
$GLOBALS['strHelpFiles']                             = "�?ایل راهنما";
$GLOBALS['strDefaultApproved']                       = "چک کردن بسته تایید شده ها";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "عملکرد تغییرات پیش �?رض";
$GLOBALS['strDefaultConversionType']                 = "عملکرد تغییرات پیش �?رض";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "انواع مجوز خروجی";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "�?عال شدن 3ار دی در قبال هر کلیک به صورت پیش �?رض";

// Banner Delivery Settings

// Banner Logging Settings
$GLOBALS['strLogAdRequests']                         = "ورود آگهی دهنده همیشه در صورت درخواست";
$GLOBALS['strLogAdImpressions']                      = "ورود آگهی دهنده همیشه در صورت نمایش آثار";
$GLOBALS['strLogAdClicks']                           = "ورود آگهی دهنده همیشه بعد از کلیک و نمایش کلیک";
$GLOBALS['strLogTrackerImpressions']                 = "ورود تراکر در صورت نمایش یک اثر برای همیشه";
$GLOBALS['strPreventLogging']                        = "Global Prevent Statistics Logging Settings";
$GLOBALS['strIgnoreHosts']                           = "Don't store statistics for viewers using one of the following IP addresses or hostnames";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strBlockAdViews']                          = "Don't log an Ad Impression if the viewer has seen the same ad within the specified time (seconds)";
$GLOBALS['strBlockAdClicks']                         = "Don't log an Ad Click if the viewer has clicked on the same ad within the specified time (seconds)";
$GLOBALS['strPrioritySettings']                      = "Global Priority Settings";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strAllowEmail']                            = "Globally allow sending of e-mails";
$GLOBALS['strEmailAddressName']                      = "Company or personal name to sign off e-mail with";
$GLOBALS['strWarnAgency']                            = "Send a warning to the agency every time a campaign is almost expired";

// UI Settings
$GLOBALS['strGuiSettings']                           = "تنظیمات بین کاربر";
$GLOBALS['strGeneralSettings']                       = "تنظیمات عمومی";
$GLOBALS['strAppName']                               = "نام درخواست کننده";
$GLOBALS['strMyHeader']                              = "مکان �?ایل هدر";
$GLOBALS['strMyFooter']                              = "مکان �?ایل �?وتر";
$GLOBALS['strDefaultTrackerStatus']                  = "وضعیت پیش �?رض تراکر";
$GLOBALS['strDefaultTrackerType']                    = "نوع پیش �?رض تراکر";
$GLOBALS['requireSSL']                               = "کاربر مجاز به است�?اده از SSL می باشد";
$GLOBALS['sslPort']                                  = "پرت SSL توسط وب سرور";

$GLOBALS['strMyLogo']                                = "نام مبدا �?ایل لوگو";
$GLOBALS['strGuiHeaderForegroundColor']              = "رنگ جلو هدر";
$GLOBALS['strGuiHeaderBackgroundColor']              = "رنگ بکگراند هدر";
$GLOBALS['strGuiActiveTabColor']                     = "رنگ تب �?عال";
$GLOBALS['strGuiHeaderTextColor']                    = "رنگ متن هدر";

$GLOBALS['strGzipContentCompression']                = "است�?اده از زیپ کردن برای �?شرده سازی";

$GLOBALS['strPublisherInterface']                    = "Publisher interface";
$GLOBALS['strPublisherAgreementEnabled']             = "Enable login control for publishers who haven't accepted Terms and Conditions";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
