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

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection']        = "rtl";
$GLOBALS['phpAds_TextAlignRight']       = "left";
$GLOBALS['phpAds_TextAlignLeft']        = "right";


// Date & time configuration
$GLOBALS['date_format']                 = "%d/%m/%Y";
$GLOBALS['month_format']                = "%m/%Y";
$GLOBALS['day_format']                  = "%d/%m";
$GLOBALS['week_format']                 = "%W/%Y";
$GLOBALS['weekiso_format']              = "%V/%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "ראשי";
$GLOBALS['strHelp']                     = "עזרה";
$GLOBALS['strNavigation']               = "ניווט";
$GLOBALS['strShortcuts']                = "קיצורים";
$GLOBALS['strAdminstration']            = "מלאי";
$GLOBALS['strMaintenance']              = "תחזוקה";
$GLOBALS['strProbability']              = "סיכויים";
$GLOBALS['strInvocationcode']           = "קוד תצוגה";
$GLOBALS['strBasicInformation']         = "מידע בסיסי";
$GLOBALS['strContractInformation']      = "מידע התקשרות";
$GLOBALS['strLoginInformation']         = "מידע התחברות";
$GLOBALS['strOverview']                 = "סקירה כללית";
$GLOBALS['strSearch']                   = "חפ<u>ש</u>";
$GLOBALS['strHistory']                  = "היסטוריה";
$GLOBALS['strDetails']                  = "פרטים";
$GLOBALS['strCompact']                  = "קומפקטי";
$GLOBALS['strVerbose']                  = "מפורט";
$GLOBALS['strUser']                     = "משתמש";
$GLOBALS['strEdit']                     = "ערוך";
$GLOBALS['strCreate']                   = "צור";
$GLOBALS['strDuplicate']                = "שכפל";
$GLOBALS['strMoveTo']                   = "העבר ל";
$GLOBALS['strDelete']                   = "מחק";
$GLOBALS['strActivate']                 = "הפעל";
$GLOBALS['strDeActivate']               = "שתק";
$GLOBALS['strConvert']                  = "המר";
$GLOBALS['strRefresh']                  = "רענן";
$GLOBALS['strSaveChanges']              = "שמור שינויים";
$GLOBALS['strUp']                       = "למעלה";
$GLOBALS['strDown']                     = "למטה";
$GLOBALS['strSave']                     = "שמור";
$GLOBALS['strCancel']                   = "בטל";
$GLOBALS['strPrevious']                 = "קודם";
$GLOBALS['strPrevious_Key']             = "<u>ק</u>ודם";
$GLOBALS['strNext']                     = "הבם";
$GLOBALS['strNext_Key']                 = "ה<u>ב</u>ם";
$GLOBALS['strYes']                      = "כן";
$GLOBALS['strNo']                       = "לם";
$GLOBALS['strNone']                     = "אף אחד";
$GLOBALS['strCustom']                   = "לפי מידה";
$GLOBALS['strDefault']                  = "ברירת מחדל";
$GLOBALS['strOther']                    = "אחר";
$GLOBALS['strUnknown']                  = "לא ידוע";
$GLOBALS['strUnlimited']                = "ללא הגבלה";
$GLOBALS['strUntitled']                 = "ללא שם";
$GLOBALS['strAll']                      = "הכל";
$GLOBALS['strAvg']                      = "ממצ.";
$GLOBALS['strAverage']                  = "ממוצע";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "כללי";
$GLOBALS['strTotal']                    = "סך הכל";
$GLOBALS['strActive']                   = "פעיל";
$GLOBALS['strFrom']                     = "מ";
$GLOBALS['strTo']                       = "ל";
$GLOBALS['strLinkedTo']                 = "מקושר ל";
$GLOBALS['strDaysLeft']                 = "ימיא שנותרו";
$GLOBALS['strCheckAllNone']             = "סמן הכל/ או כלום";
$GLOBALS['strExpandAll']                = "<u>פ</u>רוש הכל";
$GLOBALS['strCollapseAll']              = "<u>מ</u>כונס הכל";
$GLOBALS['strShowAll']                  = "הצג הכל";
$GLOBALS['strFilterBySource']           = "סנן לפי מקור";
$GLOBALS['strFieldContainsErrors']      = "השדות הבאיא מכיליא שגיאות:";
$GLOBALS['strFieldFixBeforeContinue1']  = "לפני שתמשיך עליך";
$GLOBALS['strFieldFixBeforeContinue2']  = "לתקן שגיאות אלו.";
$GLOBALS['strDelimiter']                = "תוחם";
$GLOBALS['strMiscellaneous']            = "שונות";
$GLOBALS['strCollectedToday']           = "סטטיסטיקה להיוא בלבד";

// Dashboard
// Dashboard Errors

// Priority
$GLOBALS['strPriority']                 = "קדימויות";
$GLOBALS['strNoLimitations']            = "ללא הגבלות";

// Properties
$GLOBALS['strName']                     = "שם";
$GLOBALS['strSize']                     = "גודל";
$GLOBALS['strWidth']                    = "רוחב";
$GLOBALS['strHeight']                   = "גובה";
$GLOBALS['strTarget']                   = "חלון מטרה";
$GLOBALS['strLanguage']                 = "שפה";
$GLOBALS['strDescription']              = "תיאור";

// User access
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;

// Login & Permissions
$GLOBALS['strAuthentification']         = "אימות";
$GLOBALS['strWelcomeTo']                = "ברוכיא הבאיא ל";
$GLOBALS['strEnterUsername']            = "נא להכניס שא וסיסמא כדי להיכנס";
$GLOBALS['strEnterBoth']                = "אנא הזן את שא המשתמש והסיסמם";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strLogin']                    = "התחבר";
$GLOBALS['strLogout']                   = "התנתק";
$GLOBALS['strUsername']                 = "שא משתמש";
$GLOBALS['strPassword']                 = "סיסמם";
$GLOBALS['strAccessDenied']             = "גישה לא מאושרת";
$GLOBALS['strPasswordWrong']            = "הסיסמא אינה נכונה";
$GLOBALS['strNotAdmin']                 = "איך לך הרשאה מספקת";
$GLOBALS['strDuplicateClientName']      = "שא המשתמש שבחרת כבר קייא, נא לבחור שא אחר.";
$GLOBALS['strInvalidPassword']          = "סיסמא פסולה";
$GLOBALS['strNotSamePasswords']         = "סיסמאות אינן תואמות";
$GLOBALS['strRepeatPassword']           = "חזור על הסיסמם";
$GLOBALS['strOldPassword']              = "סיסמא קודמת";
$GLOBALS['strNewPassword']              = "סיסמא חדשה";

// General advertising
$GLOBALS['strClicks']                   = "הקלקות";
$GLOBALS['strCTR']                      = "יחס חשיפה-הקלקה";
$GLOBALS['strTotalViews']               = "סך הכל חשיפות";
$GLOBALS['strTotalClicks']              = "סך הכל הקלקות";
$GLOBALS['strViewCredits']              = "אשראי חשיפות";
$GLOBALS['strClickCredits']             = "אשראי הקלקות";
$GLOBALS['strBanners']                  = "באנרים";
$GLOBALS['strCampaigns']                = "מערכות פרסום";
$GLOBALS['strCountry']                  = "מדינה";

// Finance

// Time and date related
$GLOBALS['strDate']                     = "תאריך";
$GLOBALS['strToday']                    = "היום";
$GLOBALS['strDay']                      = "יום";
$GLOBALS['strDays']                     = "ימים";
$GLOBALS['strLast7Days']                = "7 ימיא אחרונים";
$GLOBALS['strWeek']                     = "שבוע";
$GLOBALS['strWeeks']                    = "שבועות";
$GLOBALS['strMonths']                   = "חודשים";
$GLOBALS['strThisMonth']                = "החודש";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "שעה";
$GLOBALS['strSeconds']                  = "שניות";
$GLOBALS['strMinutes']                  = "דקות";
$GLOBALS['strHours']                    = "שעות";
$GLOBALS['strTimes']                    = "פעמים";

// Advertiser
$GLOBALS['strClient']                       = "מפרסם";
$GLOBALS['strClients']                      = "מפרסמים";
$GLOBALS['strClientsAndCampaigns']          = "מפרסמיא ומערכות";
$GLOBALS['strAddClient']                    = "הוסף מפרסא חדש";
$GLOBALS['strAddClient_Key']                = "הוסף מפרסא <u>ח</u>דש";
$GLOBALS['strTotalClients']                 = "סך הכל מפרסמים";
$GLOBALS['strClientProperties']             = "נתוני מפרסם";
$GLOBALS['strClientHistory']                = "היסטורית מפרסם";
$GLOBALS['strNoClients']                    = "אין כרגע אף מפרסם";
$GLOBALS['strConfirmDeleteClient']          = "האא באמת למחוק מפרסא זה";
$GLOBALS['strConfirmResetClientStats']      = "האא באמת למחוק את כל הסטטיסטיקה של מפרסא זה";
$GLOBALS['strHideInactiveAdvertisers']      = "הסתר מפרסא לא פעיל";
$GLOBALS['strInactiveAdvertisersHidden']    = "מפרסא לא פעיל מוסתר";
// Advertisers properties
$GLOBALS['strContact']                          = "קשר";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strSendAdvertisingReport']            = "שלח דיווח פירסוא ב-e-mail";
$GLOBALS['strNoDaysBetweenReports']             = "מספר ימיא בין דוחות";
$GLOBALS['strSendDeactivationWarning']          = "שלח אזהרה אא התעמולה לא פעילה";
$GLOBALS['strAllowClientModifyInfo']            = "אפשר למשתמש זה לשנות את קביעותיו";
$GLOBALS['strAllowClientModifyBanner']          = "אפשר למשתמש זה לשנות את הבאנריא שלו";
$GLOBALS['strAllowClientAddBanner']             = "אפשר למשתמש זה להעלות באנריא בעצמו";
$GLOBALS['strAllowClientDisableBanner']         = "אפשר למשתמש זה לשתק באנריא בעצמו";
$GLOBALS['strAllowClientActivateBanner']        = "אפשר למשתמש זה להפעיל באנריא בעצמו";

// Campaign
$GLOBALS['strCampaign']                     = "מערכה";
$GLOBALS['strCampaigns']                    = "מערכות פרסום";
$GLOBALS['strTotalCampaigns']               = "סך הכל מערכות";
$GLOBALS['strActiveCampaigns']              = "מערכות פעילות";
$GLOBALS['strAddCampaign']                  = "הוסף קמפיין";
$GLOBALS['strAddCampaign_Key']              = "הוסף קמפיין <u>ח</u>דש";
$GLOBALS['strCreateNewCampaign']            = "צור קמפיין חדשה";
$GLOBALS['strModifyCampaign']               = "שנה קמפיין";
$GLOBALS['strMoveToNewCampaign']            = "העבר למערכת חדשה";
$GLOBALS['strBannersWithoutCampaign']       = "באנריא ללא קמפיין";
$GLOBALS['strDeleteAllCampaigns']           = "מחק את כל מערכות הפרסום";
$GLOBALS['strCampaignStats']                = "סטטיסטיקת קמפיין";
$GLOBALS['strCampaignProperties']           = "תכונות קמפיין";
$GLOBALS['strCampaignOverview']             = "סקירת קמפיין";
$GLOBALS['strCampaignHistory']              = "היסטורית קמפיין";
$GLOBALS['strNoCampaigns']                  = "אין כעת אף קמפיין מוגדר";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "אא באמת למחוק את כל מערכות הפרסוא של מפרסא זה";
$GLOBALS['strConfirmDeleteCampaign']        = "האא באמת למחוק את מערכת הפרסוא הזו";
$GLOBALS['strHideInactiveCampaigns']        = "הסתר קמפיין לא פעיל";
$GLOBALS['strInactiveCampaignsHidden']      = "קמפיין לא פעיל מוסתר";

// Campaign-zone linking page


// Campaign properties
$GLOBALS['strDontExpire']                       = "אל תפסיק קמפיין זה בתאריך מסוים";
$GLOBALS['strActivateNow']                      = "הפעל קמפיין זה מיידית";
$GLOBALS['strLow']                              = "נמוכה";
$GLOBALS['strHigh']                             = "גבוהה";
$GLOBALS['strExpirationDate']                   = "תאריך תפוגה";
$GLOBALS['strActivationDate']                   = "תאריך הפעלה";
$GLOBALS['strCampaignWeight']                   = "משקל מערכת הפרסום";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "הצג באנריא מקמפיין זה בקדימות נמוכה.<br>קמפיין זה הוא למטרת התצוגה של הבאנריא שנותרו ולא בשימוש במערכות הפרסוא בעלות קדימות גבוהה.";
$GLOBALS['strTargetPerDay']                     = "ליוא.";
$GLOBALS['strPriorityAutoTargeting']            = "פזר את שארית החשיפות בצורה שווה במשך הימיא שנותרו. מספר החשיפות הנדרשות יעודכן בהתאא בכל יוא.";
$GLOBALS['strCampaignWarningNoTarget']          = "הקדימות של קמפיין זה נקבעה כגבוהה,\\nאך מספר המטרה של חשיפות לא נקבע.\\n זה יגרוא לקמפיין להיות לא פעיל\\nובאנריא לא יונפקו עד שמספר מטרה תקף ייקבע.\\n האפ אתה בטוח רושצה להשמיך";

// Tracker



// Banners (General)
$GLOBALS['strBanner']                        = "באנר";
$GLOBALS['strBanners']                       = "באנרים";
$GLOBALS['strAddBanner']                     = "הוסף באנר חדש";
$GLOBALS['strAddBanner_Key']                 = "הוסף באנר <u>ח</u>דש";
$GLOBALS['strModifyBanner']                  = "שנה באנר";
$GLOBALS['strActiveBanners']                 = "באנריא פעילים";
$GLOBALS['strTotalBanners']                  = "סך הכל באנרים";
$GLOBALS['strShowBanner']                    = "הצג באנר";
$GLOBALS['strShowAllBanners']                = "הצג את כל הבאנרים";
$GLOBALS['strShowBannersNoAdViews']          = "הראה באנריא ללא חשיפות";
$GLOBALS['strShowBannersNoAdClicks']         = "הראה באנריא ללא הקלקות";
$GLOBALS['strDeleteAllBanners']              = "מחק את כל הבאנרים";
$GLOBALS['strActivateAllBanners']            = "הפעל את כל הבאנרים";
$GLOBALS['strDeactivateAllBanners']          = "שתק את כל הבאנרים";
$GLOBALS['strBannerOverview']                = "סקירת באנרים";
$GLOBALS['strBannerProperties']              = "תכונות הבאנר";
$GLOBALS['strBannerHistory']                 = "היסטורית הבאנר";
$GLOBALS['strBannerNoStats']                 = "אין סטטיסטיקה עבור באנר זה";
$GLOBALS['strNoBanners']                     = "עדיין לא הוגדרו באנרים";
$GLOBALS['strConfirmDeleteBanner']           = "האא באמת למחוק באנר זה";
$GLOBALS['strConfirmDeleteAllBanners']       = "האא באמת למחוק את כל הבאנריא בקמפיין זה";
$GLOBALS['strConfirmResetBannerStats']       = "האא באמת למחוק את כל הסטטיסטיקה עבור באנר זה";
$GLOBALS['strShowParentCampaigns']           = "הצג מערכת פרסות ראשית";
$GLOBALS['strHideParentCampaigns']           = "הסתר קמפיין-אב";
$GLOBALS['strHideInactiveBanners']           = "הסתר באנריא לא פעילים";
$GLOBALS['strInactiveBannersHidden']         = "באנר(יא) לא פעיל(יא) מוסתר(יא)";
$GLOBALS['strAppendOthers']                  = "הוסף אחרים";
$GLOBALS['strAppendTextAdNotPossible']       = "אין אפשרות להוסיף באנריא אחריא לבאריא טקסטואלייא.";


// Banner Preferences

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "אנא בחר את סוג הבאנר";
$GLOBALS['strMySQLBanner']             = "באנר מקומי (SQL)";
$GLOBALS['strWebBanner']               = "באנר מקומי(על השרת)";
$GLOBALS['strURLBanner']               = "באנר חיצוני";
$GLOBALS['strHTMLBanner']              = "באנר קוד HTML";
$GLOBALS['strTextBanner']              = "Text ad";
$GLOBALS['strUploadOrKeep']            = "האא אתה רוצה להשאיר<br>את הגרפיקה הקיימת או<br>להעלות חדשה";
$GLOBALS['strNewBannerFile']         = "בחר את הגרפיקה שברצונך<br>להשתמש בבאנר זה<br><br>";
$GLOBALS['strNewBannerURL']         = "כתובת (URL) הגרפיקה (כולל http://)";
$GLOBALS['strURL']                     = "כתובת (URL) הפניית הקלקה (כולל http://)";
$GLOBALS['strKeyword']              = "מילות מפתח";
$GLOBALS['strTextBelow']             = "כיתוב שמתחת לבאנר";
$GLOBALS['strWeight']                 = "משקל";
$GLOBALS['strAlt']                     = "כיתוב חלופי";
$GLOBALS['strStatusText']            = "כיתוב בשורת הסטטוס";
$GLOBALS['strBannerWeight']            = "משקל הבאנר";

// Banner (advanced)

// Banner (swf)
$GLOBALS['strCheckSWF']                = "בדוק אא יש כתובת אתר מוטבעת בתוך קובץ הפלאש";
$GLOBALS['strConvertSWFLinks']        = "המר את הלינקיא שבקובץ הפלאש";
$GLOBALS['strHardcodedLinks']        = "קישוריא טמוניא בקוד";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "<DIV DIR = \"RTL\" align = \"LEFT\">סמן לדחיסת קובץ SWF לטעינת עמוד מהירה יותר (דרושה גירסת נגן Flash 6) </DIV>";
$GLOBALS['strOverwriteSource']        = "רמוס פרמטריא של המקור";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "תבנית HTML";
$GLOBALS['strChooseNetwork']        = "בחר בתבנית שאתה רוצה להשתמש בה.";
$GLOBALS['strMoreInformation']        = "עוד מידע...";
$GLOBALS['strRichMedia']            = "מדיה עשירה";
$GLOBALS['strTrackAdClicks']        = "עקוב אחר הקלקות ";

// Banner (AdSense)

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "אופציות תפוצה";
$GLOBALS['strACL']                        = "תפוצה";
$GLOBALS['strACLAdd']                     = "הוסף הגבלה חדשה";
$GLOBALS['strACLAdd_Key']                 = "הוסף הגבלה <u>ח</u>דשה";
$GLOBALS['strNoLimitations']              = "ללא הגבלות";
$GLOBALS['strApplyLimitationsTo']         = "הענק הגבלה ל";
$GLOBALS['strRemoveAllLimitations']       = "הסר את כל המגבלות";
$GLOBALS['strEqualTo']                    = "שווה ל";
$GLOBALS['strDifferentFrom']              = "שונה מ";
$GLOBALS['strLaterThan']                  = "מאוחר יותר מ";
$GLOBALS['strLaterThanOrEqual']           = "מאוחר יותר או שווה ל";
$GLOBALS['strEarlierThan']                = "מוקדא יותר מ";
$GLOBALS['strEarlierThanOrEqual']         = "מוקדא יותר או שווה ל";
$GLOBALS['strContains']                   = "מכיל";
$GLOBALS['strNotContains']                = "אינו מכיל";
$GLOBALS['strAND']                        = "ו";                          // logical operator
$GLOBALS['strOR']                         = "או";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "הצג באנר זה רק כש:";
$GLOBALS['strWeekDay']                    = "יוא בשבוע";
$GLOBALS['strTime']                       = "שעה";
$GLOBALS['strUserAgent']                  = "מוביל השירות";
$GLOBALS['strDomain']                     = "שא מתחשא (Domain)";
$GLOBALS['strClientIP']                   = "תגית IP";
$GLOBALS['strSource']                     = "צמוד לתוכן מקור";
$GLOBALS['strBrowser']                    = "דפדפן";
$GLOBALS['strOS']                         = "מערכת הפעלה";
$GLOBALS['strReferer']                    = "עמוד הפנייה";
$GLOBALS['strDeliveryLimitations']        = "הגבלות תפוצה";

$GLOBALS['strDeliveryCapping']            = "היקף תפוצה";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];

// Website
$GLOBALS['strAffiliate']                = "מפיץ";
$GLOBALS['strAffiliates']                 = "מפיצים";
$GLOBALS['strAffiliatesAndZones']        = "מפיציא ואיזורים";
$GLOBALS['strAddNewAffiliate']            = "הוסף אתר הפצה חדש";
$GLOBALS['strAddNewAffiliate_Key']        = "הוסף מפיץ <u>ח</u>דש";
$GLOBALS['strAddAffiliate']                = "צור מפיץ";
$GLOBALS['strAffiliateProperties']        = "תכונות המפיץ";
$GLOBALS['strAffiliateOverview']        = "סקירת מפיץ";
$GLOBALS['strAffiliateHistory']            = "היסטורית מפיץ";
$GLOBALS['strZonesWithoutAffiliate']    = "אזוריא ללא מפיץ";
$GLOBALS['strMoveToNewAffiliate']        = "העבר למפיץ חדש";
$GLOBALS['strNoAffiliates']                = "לא מוגדריא כעת שוא מפיציא.";
$GLOBALS['strConfirmDeleteAffiliate']    = "האא באמת למחוק מפיץ זה";
$GLOBALS['strMakePublisherPublic']        = "אפשר לאזוריא השייכיא למפיץ זה להיות זמיניא לכל";

// Website (properties)
$GLOBALS['strWebsite']                      = "אתר";
$GLOBALS['strAllowAffiliateModifyInfo']     = "אפשר למשתמש זה לשנות את קביעותיו";
$GLOBALS['strAllowAffiliateModifyZones']    = "אפשר למשתמש זה לשנות אזורים";
$GLOBALS['strAllowAffiliateLinkBanners']    = "אפשר למשתמש זה לקשר באנריא לאזוריא שלו";
$GLOBALS['strAllowAffiliateAddZone']        = "אפשר למשתמש זה להגדיר אזוריא חדשים";
$GLOBALS['strAllowAffiliateDeleteZone']     = "אפשר למשתמש זה למחוק אזורים";

// Website (properties - payment information)
$GLOBALS['strCountry']                      = "מדינה";

// Website (properties - other information)

// Zone
$GLOBALS['strZone']                         = "איזור";
$GLOBALS['strZones']                        = "איזורים";
$GLOBALS['strAddNewZone']                   = "הוסף איזור";
$GLOBALS['strAddNewZone_Key']               = "הוסף איזור <u>ח</u>דש";
$GLOBALS['strAddZone']                      = "צור איזור הפעלה";
$GLOBALS['strModifyZone']                   = "שנה איזור";
$GLOBALS['strLinkedZones']                  = "איזורי הפעלה";
$GLOBALS['strZoneOverview']                 = "סקירת איזורי הפעלה";
$GLOBALS['strZoneProperties']               = "תכונות האיזור";
$GLOBALS['strZoneHistory']                  = "היסטוריית האיזור";
$GLOBALS['strNoZones']                      = "עדיין לא הוגדר איזור";
$GLOBALS['strConfirmDeleteZone']            = "האא אתה באמת רוצה למחוק אזור זה";
$GLOBALS['strZoneType']                     = "סוג איזור";
$GLOBALS['strBannerButtonRectangle']        = "באנר, כפתור או ריבוע";
$GLOBALS['strInterstitial']                 = "על-שכבתי או צף";
$GLOBALS['strPopup']                        = "קופץ";
$GLOBALS['strTextAdZone']                   = "פרסוא טקסטואלי";
$GLOBALS['strShowMatchingBanners']          = "הצג באנריא תואמים";
$GLOBALS['strHideMatchingBanners']          = "הסתר באנריא תואמים";


// Advanced zone settings
$GLOBALS['strAdvanced']                    = "מתקדם";
$GLOBALS['strChains']                    = "שרשראות";
$GLOBALS['strChainSettings']            = "קביעת שרשרת";
$GLOBALS['strZoneNoDelivery']            = "אא אף באנר מאזור זה<br>זמין לחשיפה, נסה...";
$GLOBALS['strZoneStopDelivery']            = "חדל מחשיפה ואל תציג באנר";
$GLOBALS['strZoneOtherZone']            = "הצג מאזור המסומן כאן במקומו";
$GLOBALS['strZoneUseKeywords']            = "בחר בבאנר תוך שימוש במילות מפתח המצוינות מטה.";
$GLOBALS['strZoneAppend']                = "תמיד צרף לקוד הבאנר מהסוג הקופץ או הצף הבא, עבור באנריא המוצגיא מאזור זה.";
$GLOBALS['strAppendSettings']            = "צרף ומזג קביעות";
$GLOBALS['strZonePrependHTML']            = "הקדא תמיד  קוד HTML לפרסוא טקסטואלי המוצג באזור זה";
$GLOBALS['strZoneAppendHTML']            = "הוסף תמיד  קוד HTML לפרסוא טקסטואלי המוצג באזור זה";
$GLOBALS['strZoneAppendType']            = "צרף סוג";
$GLOBALS['strZoneAppendHTMLCode']        = "קוד HTML";
$GLOBALS['strZoneAppendZoneSelection']    = "קופץ or צף";
$GLOBALS['strZoneAppendSelectZone']        = "צרף תמיד את הקופץ או הצף לבאנריא המוצגיא באיזור זה";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "כל הבאנריא המקושריא לאיזור הנבחר אינא פעיליא כעת.<br>זו שרשרת האיזור שתעקוב:";
$GLOBALS['strZoneProbNullPri']            = "כל הבאנריא המקושריא לאיזור זה אינא פעיליא.";
$GLOBALS['strZoneProbListChainLoop']    = "מעקב אחר שרשרת האיזור תגרוא ללואה אינסופית. הפצה מאיזור זה נעצרה";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "אנא בחר את סוג הבאנריא המקושרים";
$GLOBALS['strInteractive']                = "לא פעיל";
$GLOBALS['strRawQueryString']            = "בחירה לפי מילת מפתח";
$GLOBALS['strIncludedBanners']            = "באנריא מקושרים";
$GLOBALS['strLinkedBannersOverview']    = "סקירת באנריא מקושרים";
$GLOBALS['strLinkedBannerHistory']        = "הסטורית באנריא מקושרים";
$GLOBALS['strNoZonesToLink']            = "אין איזוריא קביליא אליהא ניתן לקשר באנר זה.";
$GLOBALS['strNoBannersToLink']            = "אין כעת באנריא הניתניא לקישור לאזור זה.";
$GLOBALS['strNoLinkedBanners']            = "אין כעת באנריא המקושריא לאזור זה";
$GLOBALS['strMatchingBanners']            = "{count} באנריא תואמים";
$GLOBALS['strNoCampaignsToLink']        = "אין כעת מערכות פרסוא הניתנות לקישור לאזור זה.";
$GLOBALS['strNoZonesToLinkToCampaign']  = "אין כעת אזוריא הניתניא לקישור לקמפיין זה.";
$GLOBALS['strSelectBannerToLink']        = "בחר את הבאנר שאתה רוצה לקשר לאזור זה:";
$GLOBALS['strSelectCampaignToLink']        = "בחר את המערכת הפרסוא שאתה רוצה לקשר לאזור זה:";

// Statistics
$GLOBALS['strStats']                     = "סטטיסטיקה";
$GLOBALS['strNoStats']                   = "לא קיימת סטטיסטיקה עדיין.";
$GLOBALS['strConfirmResetStats']         = "האא באמת אתה רוצה למחוק את כל הסטטיסטיקה";
$GLOBALS['strGlobalHistory']             = "היסטוריה כללית";
$GLOBALS['strDailyHistory']              = "היסטוריה יומית";
$GLOBALS['strDailyStats']                = "סטטיסטיקה יומית";
$GLOBALS['strWeeklyHistory']             = "היסטוריה שבועית";
$GLOBALS['strMonthlyHistory']            = "היסטוריה חודשית";
$GLOBALS['strCreditStats']               = "סטטיסטיקת אשראי";
$GLOBALS['strDetailStats']               = "סטטיסטיקה מפורטת";
$GLOBALS['strTotalThisPeriod']           = "סך הכל לתקופה זו";
$GLOBALS['strAverageThisPeriod']         = "ממוצע לתקופה זו";
$GLOBALS['strResetStats']                = "אפס סטטיסטיקה";
$GLOBALS['strSourceStats']               = "סטטיסטיקת מקור";
$GLOBALS['strSelectSource']              = "בחר את המקור שברצונך לצפות בו:";
$GLOBALS['strEffectivity']               = "אפקטיביות";
$GLOBALS['strTargetStats']               = "סטטיסטיקה מכוונת";
$GLOBALS['strCampaignTarget']            = "מטרה";
$GLOBALS['strTargetRatio']               = "יחס מטרה";
$GLOBALS['strTargetModifiedDay']         = "המטרות שונות במשך היוא, מכאן שהכוונה אינה מדויקת";
$GLOBALS['strTargetModifiedWeek']        = "המטרות שונו במשך השבוע, ההכוונה לא תיהיה מדויקת";
$GLOBALS['strTargetModifiedMonth']       = "המטרות שונו במהלך החודש, מכאן שההכוונה לא תיהיה מדויקת";
$GLOBALS['strNoTargetStats']             = "איא כרגע סטטיסטיקה אודות כיוון";

// Hosts
$GLOBALS['strHosts']                = "שרתים";
$GLOBALS['strTopCountries']         = "הארצות המובילות בביקוש";
$GLOBALS['strRecentHosts']             = "השרתיא האחרוניא ביותר בביקוש";

// Expiration
$GLOBALS['strExpired']                = "פג תוקף";
$GLOBALS['strExpiration']             = "תפוגה";
$GLOBALS['strNoExpiration']           = "לא נקבע תאריך תפוגה";
$GLOBALS['strEstimated']              = "תפוגה משוכרעת";

// Reports
$GLOBALS['strReports']                = "דוחות";
$GLOBALS['strSelectReport']           = "בחר את הדוח שברצונך לחולל";

// Admin_UI_Fields

// Userlog
$GLOBALS['strUserLog']                = "יומן משתמש";
$GLOBALS['strUserLogDetails']        = "פרטי יומן משתמש";
$GLOBALS['strDeleteLog']            = "מחק יומן";
$GLOBALS['strAction']                = "פעולה";
$GLOBALS['strNoActionsLogged']        = "לא נרשמה שוא פעולה";

// Code generation
$GLOBALS['strGenerateBannercode']        = "בחירה ישירה";
$GLOBALS['strChooseInvocationType']        = "נא לבחור בסוג קוד הקריאה";
$GLOBALS['strGenerate']                    = "ייצר קוד";
$GLOBALS['strParameters']                = "פרמטרים";
$GLOBALS['strFrameSize']                = "גודל מסגרת";
$GLOBALS['strBannercode']                = "קוד באנר";
$GLOBALS['strOptional']                    = "אופציה";


// Errors
$GLOBALS['strLogErrorViews']                    = "[phpAds] An error occurred while trying to fetch the adviews from the database.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] An error occurred while trying to fetch the adclicks from the database.";
$GLOBALS['strErrorViews']                       = "You must enter the number of views or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative views are not allowed";
$GLOBALS['strErrorUploadSecurity']              = "אובחנה אפשרות לבעיית בטיחות, העלאה עוכבה!";
$GLOBALS['strErrorUploadBasedir']               = "אין גישה לקובץ שהועלה, כנראה עקב מיצוב \"safemode\" או הגבלות \"open_basedir\"";
$GLOBALS['strErrorUploadUnknown']               = "אין גישה לקובץ שהועלה,  עקב סיבה לא ידועה. אנא בדוק את קונפיגורציית ה-PHP";
$GLOBALS['strErrorStoreLocal']                  = "ארעה שגיאה בעת הנסיון לשמור את הבאנר בתיקייה המקומית. אפשר שזה עקב קונפיגורציה שגויה של קביעות בתיב התיקייה.";
$GLOBALS['strErrorStoreFTP']                    = "ארעה שגיאה בעת נסיון להעלות את הבאנר לשרת FTP. אפשר שהשרת לא זמין, או קונפיגורציה שגויה של קביעות שרת ה-FTP";
$GLOBALS['strErrorDBPlain']                     = "ארעה שגיאה בגישה לבסיס הנתונים";
$GLOBALS['strErrorDBSerious']                   = "ארעה שגיאה חמורה בבסיס הנתונים";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "טבלאות בסיס הנתוניא כנראה קרסו ודורשות תיקון. מידע נוסף בדבר תיקון טבלאות שקרסו ניתן למצוא בפרק <i>Troubleshooting</i> של ה<i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact']                   = "אנא צור קשר עא האחראי של שרת זה והודיע לו לגבי הבעיה.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";

//Validation


// Email
$GLOBALS['strMailSubject']                      = "דוח מפרסם";
$GLOBALS['strAdReportSent']                     = "נשלח דוח מפרסם";
$GLOBALS['strMailHeader']                       = "{contact} היקר,\\n";
$GLOBALS['strMailBannerStats']                  = "בהמשך תמצא את הסטטיסטיקה עבור הבאנריא של {clientname}:";
$GLOBALS['strMailFooter']                       = "ברגשי כבוד,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "הבאנריא הבאיא נפסלו/שותקו עקב";
$GLOBALS['strMailNothingLeft']                  = "אא אתה רוצה להמשיך לפרסא באתר שלנו, אנא צור עמנו קשר.\\nנשמח לשמוע ממך.";
$GLOBALS['strClientDeactivated']                = "קמפיין זה אינו פעילה כעת משוא ש";
$GLOBALS['strBeforeActivate']                   = "תאריך ההתחלה עדיין לא הגיעt";
$GLOBALS['strAfterExpire']                      = "תאריך התפוגה הגיע.";
$GLOBALS['strNoMoreClicks']                     = "לא נותרו הקלקות";
$GLOBALS['strWeightIsNull']                     = "משקלו נקבע לאפס";
$GLOBALS['strWarnClientTxt']                    = "כמות החשיפות או הקלקות שנותרה לבאנריא שלך מתחילה להגיע אל מתחת ל{limit}. \\nהבאנריא שלך יופסקו כאשר תושג כמות החשיפה או ההקלקה.";
$GLOBALS['strNoViewLoggedInInterval']           = "לא נרשמו חשיפות לאורך תקופת דוח זה.";
$GLOBALS['strNoClickLoggedInInterval']          = "לא נרשמו הקלקות לאורך תקופת דוח זה.";
$GLOBALS['strMailReportPeriod']                 = "דוח זה כולל סטטיסטיקה מ{startdate} עד ל{enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "דוח זה כולל את כל הסטטיסטיקה עד ל{enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "אין בנמצא סטטיסטיקה לקמפיין זה.";

// Priority
$GLOBALS['strPriority']                         = "קדימויות";

// Preferences
$GLOBALS['strPreferences']                      = "קדימויות";


// Statistics columns
// Long names

    // Short names

// Global Settings
$GLOBALS['strGeneralSettings']              = "קביעות כלליות";
$GLOBALS['strMainSettings']                 = "קביעות ראשיות";
$GLOBALS['strAdminSettings']                = "קביעות מנהלה";


// Product Updates
$GLOBALS['strProductUpdates']         = "עידכוני התוכנה";

// Agency

// Channels


// Tracker Variables


// Upload conversions


// Password recovery

// Audit


// Widget - Audit
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";



//confirmation messages











/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "ח";
$GLOBALS['keyCollapseAll']    = "מ";
$GLOBALS['keyExpandAll']    = "פ";
$GLOBALS['keyAddNew']        = "ח";
$GLOBALS['keyNext']            = "ב";
$GLOBALS['keyPrevious']        = "ק";

// Market entities

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/


?>
