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
$GLOBALS['strInstall']                      = "התקן";
$GLOBALS['strChooseInstallLanguage']        = "בחר �?ת שפת ההתקנה";
$GLOBALS['strLanguageSelection']            = "בחירת שפה";
$GLOBALS['strDatabaseSettings']             = "קביעות בסיס נתוני�?";
$GLOBALS['strAdminSettings']                = "קביעות מנהל";
$GLOBALS['strAdvancedSettings']             = "קביעות מתקדמות";
$GLOBALS['strOtherSettings']                = "קביעות �?חרות";
$GLOBALS['strWarning']                      = "�?זהרה";
$GLOBALS['strFatalError']                   = "קרתה שגי�?ה גורלית";
$GLOBALS['strUpdateError']                  = "חלה שגי�?ה בזמן העדכון";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "ל�? יכול להתחבר לבסיס הנתוני�?, �?נ�? בדוק מחדש �?ת הקביעות שרשמת.";
$GLOBALS['strCreateTableTestFailed']        = "לש�? המשתמש שרשמת �?ין מספיק הרש�?ה ליצירת �?ו עדכון מבנה בסיס הנתוני�?, �?נ�? צור קשר ע�? ה�?חר�?י בשרת.";
$GLOBALS['strUpdateTableTestFailed']        = "לש�? המשתמש שרשמת �?ין די הרש�?ה לעדכון בסיס הנתוני�?. �?נ�? צור קשר ע�? ה�?חר�?י�?.";
$GLOBALS['strTablePrefixInvalid']           = "קידומת הטבל�?ות מכילה �?ותיות פסולות.";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "לפני ש�?תה ממשיך, �?נ�? תקן �?ת הבעיה ה�?פשריות ה�?לו:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "התעל�? מ�?ז�?רות";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "קונפיגורצית  PHP של המשתנה <B>register_globals</B> צריכה להיות מופעלת.";
$GLOBALS['strWarningMagicQuotesGPC']        = "קונפיגורצית  PHP של המשתנה  <B>magic_quotes_gpc</B>  צריכה להיות מופעלת.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "קונפיגורצית  PHP של המשתנה  <B>magic_quotes_runtime</B>  צריכה להיות מופעלת.";
$GLOBALS['strWarningFileUploads']           = "קונפיגורצית  PHP של המשתנה  <B>file_uploads</B>  צריכה להיות מופעלת.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "ל�? ניתן לעדכן �?ת בסיס הנתוני�? כעתץ �?�? החלטת להמשיך, כל הב�?נרי�? הקיימי�?, סטטיסטיקה ומפרסמי�? ימחקו.";
$GLOBALS['strIgnoreErrors']                 = "התעל�? משגי�?ות";
$GLOBALS['strRetryUpdate']                  = "נסה עדכון מחדש";
$GLOBALS['strTableNames']                   = "שמות הטבל�?ות";
$GLOBALS['strTablesPrefix']                 = "קידומת של טבל�?ות";
$GLOBALS['strTablesType']                   = "סוגי הטבל�?ות";


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
$GLOBALS['strErrorOccured']                 = "השגי�?ה הב�?ה קרתה:";
$GLOBALS['strErrorInstallDatabase']         = "מבנה בסיס הנתוני�? ל�? יכל להיווצר.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorInstallDbConnect']        = "ל�? ניתן היה להתחבר לבסיס הנתוני�?.";


$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";


$GLOBALS['strInvalidUserPwd']               = "ש�? משתמש �?ו סיסמ�? פסולי�?";

$GLOBALS['strUpgrade']                      = "עדכון";
$GLOBALS['strSystemUpToDate']               = "המערכת שלך מוכנה ומעודנת, ל�? נדרש עדכון ברגע זה. <br>לחץ על <b>המשך</b> כדי להגיע לעמוד הבית.";
$GLOBALS['strSystemNeedsUpgrade']           = "מבנה בסיס הנתוני�? וקובץ הקונפיגורציה זקוקי�? לעדכון כדי שהמערכת תתפקד נכונה.<br>�?נ�? הת�?זר בסבלנות כיוון שתהליך העדכון יכול לקחת כמה דקות.";
$GLOBALS['strSystemUpgradeBusy']            = "תהליך עדכון המערכת בעיצומו, �?נ�? המתן...";
$GLOBALS['strSystemRebuildingCache']        = "בונה �?ת זכרון המטמון מחדש, �?נ�? המתן...";
$GLOBALS['strServiceUnavalable']            = "השירות �?ינו �?פשרי זמנית. תהליך עדכון המערכת בעיצומו";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "בחר מחלקה";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

// Configuration Settings

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "קביעות מינהלה";
$GLOBALS['strLoginCredentials']                      = "הרש�?ות התחברות";
$GLOBALS['strAdminUsername']                         = "ש�? המשתמש - מנהל";
$GLOBALS['strInvalidUsername']                       = "ש�? משתמש פסול";
$GLOBALS['strBasicInformation']                      = "מידע בסיסי";
$GLOBALS['strAdminFullName']                         = "הש�? המל�? של המנהל";
$GLOBALS['strAdminEmail']                            = "כתובת ה�?ימייל של המנהל";
$GLOBALS['strCompanyName']                           = "ש�? החברה/�?יגוד";
$GLOBALS['strAdminCheckUpdates']                     = "בדוק עדכוני�?";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "בכל התחברות";
$GLOBALS['strAdminCheckDaily']                       = "יומית";
$GLOBALS['strAdminCheckWeekly']                      = "שבועית";
$GLOBALS['strAdminCheckMonthly']                     = "חודשית";
$GLOBALS['strAdminCheckNever']                       = "�?ף פע�?";
$GLOBALS['strUserlogEmail']                          = " תעד �?ת כל ה�?ימייל היוצ�?";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "קביעות בסיס נתוני�?";
$GLOBALS['strDatabaseServer']                        = "שרת בסיס הנתוני�?";
$GLOBALS['strDbLocal']                               = "התחבר לשרת המקומי ב�?מצעות מעברי�? (sockets)";
$GLOBALS['strDbHost']                                = "השרת המ�?רח";
$GLOBALS['strDbPort']                                = "מספר המבו�? של בסיס הנתוני�? (port)";
$GLOBALS['strDbUser']                                = "ש�? המשתמש בבסיס הנתוני�?";
$GLOBALS['strDbPassword']                            = "הסיסמ�? של בסיס הנתוני�?";
$GLOBALS['strDbName']                                = "הש�? של בסיס הנתוני�?";
$GLOBALS['strDatabaseOptimalisations']               = "ייטוב בסיס הנתוני�?";
$GLOBALS['strPersistentConnections']                 = " השתמש בחיבור רציף (בסיס הנתוני�? תפוס יותר)";
$GLOBALS['strCantConnectToDb']                       = " ל�? מסוגל להתחבר לבסיס הנתוני�?";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strQmailPatch']                            = " �?פשר טל�?י qmail ";

// Audit Trail Settings

// Debug Logging Settings

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "קביעות תפוצה";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strTypeWebSettings']                       = "קונפיגורציית ב�?נר מקומי (השרת)";
$GLOBALS['strTypeWebMode']                           = "שיטת �?יחסון";
$GLOBALS['strTypeWebModeLocal']                      = "תיקייה מקומית";
$GLOBALS['strTypeDirError']                          = "התיקייה המקומית �?ינה קיימת";
$GLOBALS['strTypeWebModeFtp']                        = "שרת FTP חיצוני";
$GLOBALS['strTypeWebDir']                            = "תיקייה מקומית";
$GLOBALS['strTypeFTPHost']                           = "מ�?רח FTP";
$GLOBALS['strTypeFTPDirectory']                      = "תיקיית FTP";
$GLOBALS['strTypeFTPUsername']                       = "ש�? משתמש";
$GLOBALS['strTypeFTPPassword']                       = "סיסמ�?";
$GLOBALS['strTypeFTPErrorDir']                       = "תקיית המ�?רח �?ינה קיימת";
$GLOBALS['strTypeFTPErrorConnect']                   = "ל�? ניתן להתחבר לשרת ה-FTP, ש�? המשתמש �?ו הסיסמ�? שגויי�?";
$GLOBALS['strTypeFTPErrorHost']                      = "ש�? השרת המ�?רח �?ת ה-FTP שגוי";



$GLOBALS['strP3PSettings']                           = "פוליסות פרטיות מסוג P3P";
$GLOBALS['strUseP3P']                                = " השתמש בפוליסות P3P";
$GLOBALS['strP3PCompactPolicy']                      = "פוליסת P3P קומפקטית";
$GLOBALS['strP3PPolicyLocation']                     = "מיקו�? פוליסת ה-P3P";

// General Settings

// Geotargeting Settings
$GLOBALS['strGeotargeting']                          = "Geotargeting - מיקוד גי�?וגרפי";

// Interface Settings
$GLOBALS['strInventory']                             = "מצ�?י";
$GLOBALS['strShowCampaignInfo']                      = " הצג מידע נוסף עבור קמפיין בעמוד <i>סקירת קמפיין</i>";
$GLOBALS['strShowBannerInfo']                        = " הצג מידע נוסף עבור ב�?נר בעמוד <i>סקירת ב�?נרי�?</i>";
$GLOBALS['strShowCampaignPreview']                   = " תצוגה מקדמת של כל הב�?נרי�? בעמוד <i>סקירת ב�?נרי�?</i>";
$GLOBALS['strShowBannerHTML']                        = " הצג ב�?נר ממשי במקו�? קוד רגיל של  HTML, במצב תצוגת ב�?נרי�? מסוג HTML";
$GLOBALS['strShowBannerPreview']                     = " תצוגה מקדימה של ב�?נרי�? בכותרת העמוד העוסק בב�?נרי�?";
$GLOBALS['strHideInactive']                          = " הסתר פרטי�? ל�? פעילי�? בכל עמודי תצוגה מקדימה";
$GLOBALS['strGUIShowMatchingBanners']                = " הצג ב�?נרי�? תו�?מי�? בעמודי <i>ב�?נרי�? מקושרי�?</i>";
$GLOBALS['strGUIShowParentCampaigns']                = " הר�?ה קמפיין-�?ב בעמודי <i>ב�?נרי�? מקושרי�?</i>";
$GLOBALS['strStatisticsDefaults']                    = "סטטיסטיקה";
$GLOBALS['strBeginOfWeek']                           = "השבוע מתחיל ביו�?";
$GLOBALS['strPercentageDecimals']                    = "נקודה עשרונית";
$GLOBALS['strWeightDefaults']                        = "משקל התחלתי (ברירת מחדל)";
$GLOBALS['strDefaultBannerWeight']                   = "משקל ב�?נר התחלתי (ברירת מחדל)";
$GLOBALS['strDefaultCampaignWeight']                 = "משקל קמפיין התחלתי (ברירת מחדל)";
$GLOBALS['strDefaultBannerWErr']                     = "משקל התחלתי של ב�?נר צריך להיות מספר חיובי";
$GLOBALS['strDefaultCampaignWErr']                   = "משקל קמפיין התחלתי חייב להיות מספר חיובי";


// CSV Import Settings

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "סוגי קרי�?ה מותרי�?";

// Banner Delivery Settings

// Banner Logging Settings
$GLOBALS['strReverseLookup']                         = "נסה לקבוע �?ת ספקית השירות של המבקר �?�? הנתון ל�? מגיע מהשרת";
$GLOBALS['strProxyLookup']                           = "נסה לקבוע �?ת כתובת ה-IP ה�?מיתית של המבקר �?�? הו�? משתמש במ�?גר ביניי�? (proxy).";
$GLOBALS['strPreventLogging']                        = "מנע התחברות";
$GLOBALS['strIgnoreHosts']                           = "�?ל תתעד סטטיסטיקה ממבקרי�? המשתמשי�? ב�?חד ממספרי ה-IP �?ו שמות המ�?רחי�? הב�?י�?";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "שלח �?תר�?ה כ�?שר מספר החשיפות הנותר הינו פחות מהנקוב כ�?ן";
$GLOBALS['strWarnAdmin']                             = " שלח התר�?ת מנהל בכל פע�? שקמפין מסויי�? לפני סיומו";
$GLOBALS['strWarnClient']                            = " שלח התר�?ת מפרס�? בכל פע�? שהקמפין שלו לפני סיו�?";

// UI Settings
$GLOBALS['strGuiSettings']                           = "קביעות ממשק משתמש";
$GLOBALS['strGeneralSettings']                       = "קביעות כלליות";
$GLOBALS['strAppName']                               = "ש�? היישו�? שיוצג";
$GLOBALS['strMyHeader']                              = "כותרת העמוד שלי נמצ�?ת בכתובת:";
$GLOBALS['strMyHeaderError']                         = "כותרת העמוד ל�? נמצ�?ה במיקו�? שנרש�?";
$GLOBALS['strMyFooter']                              = "תחתית העמוד שלי נמצ�?ת בכתובת:";
$GLOBALS['strMyFooterError']                         = "תחתית העמוד ל�? נמצ�?ה במיקו�? שנרש�?";


$GLOBALS['strGzipContentCompression']                = "השתמש בדחיסת-תכולה GZIP";
$GLOBALS['strClientInterface']                       = "ממשק מפרס�?";
$GLOBALS['strClientWelcomeEnabled']                  = "�?פשר הודעת מילות הקדמה בהתחברות המפרס�?";
$GLOBALS['strClientWelcomeText']                     = "הודעת הקדמה/ברכת ברוכי�? הב�?י�?...<br>(�?פשרי שימוש בתגי HTML)";


// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "נסיוני";
$GLOBALS['strKeywordRetrieval']             = "שליפה לפי מילות מפתח";
$GLOBALS['strBannerRetrieval']              = " שיטת שליפת הב�?נרי�?";
$GLOBALS['strRetrieveRandom']               = " שליפה �?קר�?ית (ברירת מחדל)";
$GLOBALS['strRetrieveNormalSeq']            = " שליפה סדרתית רגילה";
$GLOBALS['strWeightSeq']                    = " שליפה סדרתית מבוסס משקל";
$GLOBALS['strFullSeq']                      = " שליפה סדרתית מל�?ה";
$GLOBALS['strUseConditionalKeys']           = " השתמש במילות תנ�?י";
$GLOBALS['strUseMultipleKeys']              = " השתמש בריבוי מילות מפתח";

$GLOBALS['strTableBorderColor']             = "צבע המסגרת של הטבלה";
$GLOBALS['strTableBackColor']               = "צבע הרקע של הטבלה";
$GLOBALS['strTableBackColorAlt']            = "צבע הרקע  של הטבלה(חלופי)";
$GLOBALS['strMainBackColor']                = "צבע רקע ר�?שי";
$GLOBALS['strOverrideGD']                   = "�?כוף תמונה בתצורת GD";
$GLOBALS['strTimeZone']                     = "�?יזור זמן";

?>
