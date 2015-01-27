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
$GLOBALS['strInstall']                      = "تنصيب";
$GLOBALS['strLanguageSelection']            = "إختيار اللغة";
$GLOBALS['strDatabaseSettings']             = "خيارات قواعد البيانات";
$GLOBALS['strAdminSettings']                = "خيارات المدير";
$GLOBALS['strAdminAccount']                 = "حساب المدير";
$GLOBALS['strAdvancedSettings']             = "خيارات متقدمة";
$GLOBALS['strSpecifySyncSettings']          = "خيارات التزامن";
$GLOBALS['strWarning']                      = "تحذير";
$GLOBALS['strBtnContinue']                  = "متابعة >>";
$GLOBALS['strBtnRecover']                   = "إسترجاع >>";
$GLOBALS['strBtnStartAgain']                   = "البدء بالتحديث من جديد >>";
$GLOBALS['strBtnGoBack']                    = "<< الرجوع";
$GLOBALS['strBtnAgree']                     = "موافق >>";
$GLOBALS['strBtnRetry']                     = "فصح جديد";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterArgcArv']       = "حتى تتم عملية الصيانة من خلال سطر الأوامر يجب أن يكون المتغير register_argc_argv مفعلاً في خيارات PHP.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strTablesPrefix']                 = "السابقة لإسم الجداول";
$GLOBALS['strTablesType']                   = "نوع الجدول";


$GLOBALS['strRecoveryRequiredTitle']    = "عملية محاولة الترقية السابقة واجهت بعض المشاكل";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
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

$GLOBALS['strErrorWritePermissions']        = "هناك خلل في تصاريح الملفات ، يجب عليك إصلاحه قبل الاستمرار.<br />لحل الأخطاء في نظام لينوكس ، قم بكتابة هذه الأوامر :";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>إعطاء التصريح a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>إعطاء التصريح a+w %s</i>";

$GLOBALS['strErrorWritePermissionsWin']     = "هناك خلل في تصاريح الملفات ، يجب عليك إصلاحه قبل الاستمرار";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "رابط لوحة التحكم";
$GLOBALS['strDeliveryUrlPrefix']            = "نظام التوزيع";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "نظام التوزيع";
$GLOBALS['strImagesUrlPrefix']              = "رابط حفظ الصور";
$GLOBALS['strImagesUrlPrefixSSL']           = "رابط حفظ الصور (رابط آمن)";



/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "إختيار قسم";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "تعذر حفظ التعديلات في ملف الإعدادات";
$GLOBALS['strUnableToWritePrefs']                    = "تعذر حفظ التعديلات في قاعدة البيانات";
$GLOBALS['strImageDirLockedDetected']	             = "<b>ملجد الصور</b>غير قابل للكتابة. <br> يجب عليك إنشاء المجلد او تعديل صلاحياته قبل الاستمرار";

// Configuration Settings
$GLOBALS['strConfigurationSettings']                 = "تعديل الاعدادات";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "خيارات المدير";
$GLOBALS['strLoginCredentials']                      = "معلومات الدخول";
$GLOBALS['strAdminUsername']                         = "اسم المستخدم للمدير";
$GLOBALS['strAdminPassword']                         = "كلمة السر للمدير";
$GLOBALS['strInvalidUsername']                       = "اسم المستخدم غير صالح";
$GLOBALS['strBasicInformation']                      = "معلومات أساسية";
$GLOBALS['strAdminFullName']                         = "الاسم الكامل للمدير";
$GLOBALS['strAdminEmail']                            = "البريد الالكتروني للمدير";
$GLOBALS['strAdministratorEmail']                    = "البريد الالكتروني للمدير العام";
$GLOBALS['strCompanyName']                           = "اسم الشركة";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strNovice']                                = "نحتاج للتأكيد قبل الحذف كخطوة احترازية";
$GLOBALS['strUserlogEmail']                          = "حفظ كل الرسائل الصادرة";
$GLOBALS['strTimezone']                              = "المنطقة الزمنية";
$GLOBALS['strTimezoneEstimated']                     = "المنطقة الزمنية المتوقعة";
$GLOBALS['strTimezoneGuessedValue']                  = "المنطقة الزمنية للسيرفر غير مجهزة في إعدادات PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "الرجاء الإطلاع على %DOCS% بخصوص تجهيز هذا المتغير في PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "وثائق المساعدة";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "خيارات قواعد البيانات";
$GLOBALS['strDatabaseServer']                        = "الإعدادات العامة لمستضيف قاعدة البيانات";
$GLOBALS['strDbType']                                = "نوع قاعدة البيانات";
$GLOBALS['strDbHost']                                = "مستضيف قاعدة البيانات";
$GLOBALS['strDbPort']                                = "رقم المنفذ (بورت) قاعدة البيانات";
$GLOBALS['strDbUser']                                = "اسم مستخدم قاعدة البيانات";
$GLOBALS['strDbPassword']                            = "كلمة سر قاعدة البيانات";
$GLOBALS['strDbName']                                = "اسم قاعدة البيانات";
$GLOBALS['strPersistentConnections']                 = "استخدام الاتصال المستمر";
$GLOBALS['strCantConnectToDb']                       = "لا يمكن الاتصال بقاعدة البيانات";
$GLOBALS['strDemoDataInstall']                       = "تركيب بيانات تجريبية";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings

// Audit Trail Settings

// Debug Logging Settings
$GLOBALS['strProduction']                            = "بيئة عمل";
$GLOBALS['strDebugTypeFile']                         = "ملف";
$GLOBALS['strDebugTypeSql']                          = "قاعدة بيانات SQL";
$GLOBALS['strDebugTypeSyslog']                       = "سجل النظام";

// Delivery Settings
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strImagePath']                             = "مسار الصور";
$GLOBALS['strImageSslPath']                          = "مسار الصور (آمن)";
$GLOBALS['strImageStore']                            = "مجلد الصور";
$GLOBALS['strTypeWebMode']                           = "اسلوب التخزين";
$GLOBALS['strTypeWebModeLocal']                      = "المجلد المحلي";
$GLOBALS['strTypeDirError']                          = "المجلد المحلي غير قابل للكتابة";
$GLOBALS['strTypeWebModeFtp']                        = "مستضيف FTP خارجي";
$GLOBALS['strTypeWebDir']                            = "المجلد المحلي";
$GLOBALS['strTypeFTPHost']                           = "مستضيف FTP";
$GLOBALS['strTypeFTPDirectory']                      = "مجلد المستضيف";
$GLOBALS['strTypeFTPUsername']                       = "اسم الدخول";
$GLOBALS['strTypeFTPPassword']                       = "كلمة السر";
$GLOBALS['strTypeFTPPassive']                        = "استخدام اسلوب passive FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "مجلد المستضيف غير موجود";
$GLOBALS['strTypeFTPErrorConnect']                   = "لا يمكن الاتصال بمستضيف FTP ، الرجاء التحقق من اسم المستخدم او كلمة السر.";
$GLOBALS['strTypeFTPErrorHost']                      = "عنوان مستضيف FTP غير صحيح";
$GLOBALS['strDeliveryFilenamesAdClick']              = "رابط الضغط على الإعلان";
$GLOBALS['strDeliveryFilenamesAdImage']              = "صورة الاعلان";




// General Settings

// Geotargeting Settings

// Interface Settings
$GLOBALS['strInventory']                             = "المخزن";
$GLOBALS['strHideInactive']                          = "إخفاء الغير فعّال";
$GLOBALS['strWeightDefaults']                        = "الوزن الافتراضي";
$GLOBALS['strDefaultBannerWeight']                   = "الوزن الافتراضي للبنر";
$GLOBALS['strDefaultCampaignWeight']                 = "الوزن الافتراضي للحملة الاعلانية";

$GLOBALS['strPublisherDefaults']                     = "الخيارات الافتراضية للموقع";
$GLOBALS['strModesOfPayment']                        = "أساليب الدفع";
$GLOBALS['strCurrencies']                            = "العملات";
$GLOBALS['strCategories']                            = "الأقسام";
$GLOBALS['strHelpFiles']                             = "ملفات التعليمات";
$GLOBALS['strHasTaxID']                              = "رقم الضريبة";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "قوانين التحويل الإفتراضية";
$GLOBALS['strDefaultConversionType']                 = "قوانين التحويل الإفتراضية";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings

// Banner Delivery Settings

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "خيارات حجب تسجيل البنرات";
$GLOBALS['strLogAdRequests']                         = "تسجيل وقت طلب البنر كل مرة يتم طلبه";
$GLOBALS['strLogAdImpressions']                      = "زيادة مرات الظهور في كل مرة يتم عرض البنر";
$GLOBALS['strLogAdClicks']                           = "زيادة مرات الضغطات في كل مرة يتم ضغط البنر";
$GLOBALS['strPreventLogging']                        = "خيارات حجب تسجيل البنرات";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceOI']                         = "توقيت عمليات الصيانة (كل × دقيقة)";
$GLOBALS['strMaintenanceOIError']                    = "توقيت عمليات الصيانة غير صحيح - الرجاء الاطلاع على التعليمات لمعرفة القيم الصحيحة";
$GLOBALS['strPrioritySettings']                      = "إعدادات الأهمية";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "ارسل تحذيراً عندما يكون عدد مرات الظهور أقل من الرقم المكتوب هنا";
$GLOBALS['strAllowEmail']                            = "السماح بإرسال الإيميلات بشكل عام";
$GLOBALS['strEmailAddressFrom']                      = "البريد الإلكتروني الذي يراد إرسال التقارير منه";
$GLOBALS['strEmailAddressName']                      = "الشركة أو الإسم الذي يراد توقيع الرسائل الإلكترونية به";

// UI Settings
$GLOBALS['strGeneralSettings']                       = "الإعدادات العامة";
$GLOBALS['strAppName']                               = "اسم التطبيق";
$GLOBALS['strDefaultTrackerStatus']                  = "النوع الافتراضي للمتتبع";
$GLOBALS['strDefaultTrackerType']                    = "النوع الافتراضي للمتتبع";

$GLOBALS['strMyLogo']                                = "اسم الشعار المخصص";
$GLOBALS['strMyLogoError']                           = "ملف الشعار غير موجود في مجلد admin/images ";

$GLOBALS['strClientInterface']                       = "واجهة المعلن";
$GLOBALS['strReportsInterface']                      = "واجهة التقارير";
$GLOBALS['strClientWelcomeEnabled']                  = "إتاحة رسالة الترحيب بالمعلن";
$GLOBALS['strClientWelcomeText']                     = "نص الترحيب<br />(HTML متاح)";

$GLOBALS['strPublisherInterface']                    = "واجهة الموقع";
$GLOBALS['strPublisherAgreementText']                = "نص تسجيل الدخول<br />(HTML متاح)";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
