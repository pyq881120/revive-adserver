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

// Main strings
$GLOBALS['strChooseSection']			= "בחר מחלקה";

// Maintenance

$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "
	Automatic maintenance is enabled, but it has not been triggered. Automatic maintenance is triggered only when ".MAX_PRODUCT_NAME." delivers banners.
    For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "
	Automatic maintenance is currently disabled, so when ".MAX_PRODUCT_NAME." delivers banners, automatic maintenance will not be triggered.
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
    However, if you are not going to set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>,
    then you <i>must</i> <a href='account-settings-maintenance.php'>enable automatic maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.
";

$GLOBALS['strAutoMantenaceEnabledAndRunning']   = "
	Automatic maintenance is enabled and will be triggered, as required, when ".MAX_PRODUCT_NAME." delivers banners.
	However, for the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndRunning']  = "
	However, automatic maintenance has recently been disabled. To ensure that ".MAX_PRODUCT_NAME." works correctly, you should
	either set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a> or
	<a href='account-settings-maintenance.php'>re-enable automatic maintenance</a>.
	<br><br>
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";





// Priority
$GLOBALS['strRecalculatePriority']		= "שקלל קדימויות";
$GLOBALS['strHighPriorityCampaigns']		= "מערכות פרסו�? בקדימות גבוהה";
$GLOBALS['strAdViewsAssigned']			= "הוקצו חשיפות";
$GLOBALS['strLowPriorityCampaigns']		= "מערכות פרסו�? בקדימות נמוכה";
$GLOBALS['strPredictedAdViews']			= "חשיפות צפויות";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "הערכה מבוססת על נתוני�? מהשבוע שעבר והנוכחי.  ";
$GLOBALS['strPriorityBasedLastDays']		= "הערכה מבוססת על נתוני�? מהימי�? ה�?חרוני�?.  ";
$GLOBALS['strPriorityBasedYesterday']		= "הערכה מבוססת על נתוני�? מ�?תמול.  ";
$GLOBALS['strPriorityNoData']			= "�?ין מספיק נתוני�? כדי ליצור הערכה �?מינה לגבי מספר החשיפות ששרת פרסומות זה יפיק היו�?. יישו�? קדימויות יתבסס על סטטיסטיקות בזמן �?מת בלבד.  ";
$GLOBALS['strPriorityEnoughAdViews']		= "צריכה להיות חשיפה מספקת כדי לספק �?ת מטרת מערכות הפרסו�? בקדימות גבוהה.  ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "ל�? ברור �?�? יהיו מספיק חשיפות היו�? כדי לספק �?ת המטרה במערכות הפרסו�? בעלות הקדימות הגבוהה. עקב כך כל מערכות הפרסו�? בעלות קדימות נמוכה משותקות כעת זמנית. ";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "רענן זיכרון-מטמון ב�?נרי�?";
$GLOBALS['strRebuildDeliveryCache']			= "רענן זיכרון-מטמון תפוצה";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "זיכרון-מטמון תפוצה";
$GLOBALS['strAge']				= "גיל";
$GLOBALS['strDeliveryCacheSharedMem']		= "
נעשה כעת שימוש בזכרון משותף	ל�?יחסון זכרון מטמון (cache).
";
$GLOBALS['strDeliveryCacheDatabase']		= "
	בסיס הנתוני�? משמשמ בעת ל�?יחסון מטמון הפקת הבנ�?רי�? (cache).
";
$GLOBALS['strDeliveryCacheFiles']		= "
מטמון הפקת הבנ�?רי�? (cache) מ�?וחסן כעת על כמה קבצי�? בשרת שלך.
";


// Storage
$GLOBALS['strStorage']				= "�?יחסון";
$GLOBALS['strMoveToDirectory']			= "העבר �?ת התמונות השמורות בתוך בסיס הנתוני�? �?ל תוך התיקייה.";
$GLOBALS['strStorageExplaination']		= "הב�?נרי�? בשימוש מקומי מ�?וחסני�? בתוך בסיס הנתוני�? �?ו בתיקייה על השרת. �?�? �?תה שומר �?ת הב�?נרי�? בתוך תיקייה יפחת העומס על בסיס הנתוני�? ו�?ף המהירות תו�?ץ. ";

// Encoding
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";


// Storage
$GLOBALS['strStatisticsExplaination']		= " הפעלת תצורת <i>סטטיסטיקה קומפקטית</i>, �?ך הסטטיסטיקה הישנה שלך הי�? עדיין בתצורה טקסטו�?לית. ה�?�? �?תה רוצה להמיר �?ת הסטטיסטיקה המילולית לתצורה הקומפקטית? ";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "מחפש עדכוני�?. �?נ�? המתן...";
$GLOBALS['strAvailableUpdates']			= "עדכוני�? זמיני�?";
$GLOBALS['strDownloadZip']			= "הורד (.zip)";
$GLOBALS['strDownloadGZip']			= "הורד (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "מסיבה בלתי ידועה ל�? ניתן להשיג<br />מידע על עדכוני�? �?פשריי�?. �?נ�? נסה שוב מ�?וחר יותר.";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";


$GLOBALS['strNewVersionAvailable']		= "
	<b>A new version of ".MAX_PRODUCT_NAME." is available.</b><br /> It is recommended to install this update,
	because it may fix some currently existing problems and will add new features. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strSecurityUpdate']			= "
	<b>It is highly recommended to install this update as soon as possible, because it contains a number
	of security fixes.</b> The version of ".MAX_PRODUCT_NAME." which you are currently using might
	be vulnerable to certain attacks and is probably not secure. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strNotAbleToCheck']			= "
	<b>Because the XML extention isn't available on your server, ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available.</b>
";


$GLOBALS['strClickToVisitWebsite']		= "
	לחץ כ�?ן כדי לבקר ב�?תר שלנו";
$GLOBALS['strCurrentlyUsing'] 			= "�?תה משתמש כעת";
$GLOBALS['strRunningOn']				= "רץ על";
$GLOBALS['strAndPlain']					= "ו";


// Stats conversion
$GLOBALS['strConverting']			= "ממיר";
$GLOBALS['strConvertingStats']			= "ממיר סטטיסטיקה...";
$GLOBALS['strConvertStats']			= "המר סטטיסטיקה";
$GLOBALS['strConvertAdViews']			= "חשיפות הומרו,";
$GLOBALS['strConvertAdClicks']			= "הקלקות הומרו...";
$GLOBALS['strConvertNothing']			= "�?ין מה להמיר...";
$GLOBALS['strConvertFinished']			= "ת�? ונשל�?...";

$GLOBALS['strConvertExplaination']		= "�?תה משתמש כעת בתצורה הקומפקטית לשמירת סטטיסטיקה, �?ך<br /> נותרו סטטיסטיקות בתצורת מלל. כל עוד תצורות המלל �?ינן מומרות<br />לתצורה קומפקטית, ל�? ייעשה בהן שימוש בזמן צפיה בעמושי�? �?לה.<br />לפני ההמרת הסטטיסטיקה, ד�?ג לגיבוי של בסיס הנתוני�?!<br />ה�?�? �?תה רוצה להמיר �?ת הסטטיסטיקה הטקסטו�?לית לתצורה הקומפקטית החדשה?<br />";

$GLOBALS['strConvertingExplaination']		= "כל הסטטיסטיקה הטקסטו�?לית שנותרה מומרת כעת לתצורה קומפקטית.<br />תלוי בכמות החשיפות השמורה בתצורה הקושמת, זה יכול<br />לקחת כמה דקות. �?נ�? המתן עד שתהליך ההמרה התסיי�? לפני שתעבור לעמודי�? �?חרי�?.<br />למטה תוכל לר�?ות יומן של כל השינויי�? שנעשו לבסיס הנתוני�?<br />. ";

$GLOBALS['strConvertFinishedExplaination']  	= "המרת הסטטיסטיקה הטקסטו�?לית שנותרה עברה בהצלחה<br /> והנתנוי�? צריכי�? להיות שמישי�? שוב. למטה תוכל לר�?ות יומן של כל השינויי�? שנעשו בבסיס הנתוני�?.<br /> ";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations


//  Append codes

$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";


?>
