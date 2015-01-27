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
$GLOBALS['strChooseSection']			= "انتخاب بخش";

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
$GLOBALS['strRecalculatePriority']		= "محاسبه مجدد اولو&#1740;ت";
$GLOBALS['strHighPriorityCampaigns']		= "بااولو&#1740;ت تر&#1740;ن  campaigns";
$GLOBALS['strAdViewsAssigned']			= "مشاهدات تع&#1740;&#1740;ن شده";
$GLOBALS['strLowPriorityCampaigns']		= "پا&#1740;&#1740;ن تر&#1740;ن اولو&#1740;ت campaigns";
$GLOBALS['strPredictedAdViews']			= "مشاهدات پ&#1740;ش ب&#1740;ن&#1740; شده";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "ا&#1740;ن پ&#1740;ش ب&#1740;ن&#1740; مبتن&#1740; بر اطلاعات ا&#1740;ن ه";
$GLOBALS['strPriorityBasedLastDays']		= "ا&#1740;ن پ&#1740;ش ب&#1740;ن&#1740; م&#1740;تن&#1740; بر اطلاعات ج";
$GLOBALS['strPriorityBasedYesterday']		= "ا&#1740;ن پ&#1740;ش ب&#1740;ن&#1740; مبتن&#1740; بر اطلاعات روز گذشته م&#1740; باشد. ";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "ساختن مجدد cache بنر";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strDeliveryCacheSharedMem']		= "\\nحا";
$GLOBALS['strDeliveryCacheDatabase']		= "\\nبانک اطلاعای در حال حاضر در حال است";
$GLOBALS['strDeliveryCacheFiles']		= "\\ncache تحویل در حال حاضر درون ";


// Storage
$GLOBALS['strStorage']				= "ذخیره سازی";
$GLOBALS['strMoveToDirectory']			= "انتقال تصاویر ذخیره شده درون بانک اطلاعای بهیک دایرکتوری";
$GLOBALS['strStorageExplaination']		= "\\n	The images used by local banners are stored inside the database or stored in a directory. If you store the images inside\\n	a directory the load on the database will be reduced and this will lead to an increase in speed.\\n";

// Encoding
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvert']          = "تبدیل";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	You have enabled the <i>compact statistics</i>, but your old statistics are still in verbose format.\\n	Do you want to convert your verbose statistics to the new compact format?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "جستجو برای بروزرسانی. منتظر بمانید....";
$GLOBALS['strAvailableUpdates']			= "به روزرسانی های در دسترس";
$GLOBALS['strDownloadZip']			= "دانلود (.zip)";
$GLOBALS['strDownloadGZip']			= "دانلود (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "\\nبه دلیل یک مشکل ناسناخته امکان بازیابی وجود ندارد. <br>\\nاطلاعات در باره بروزرسای هی ممکن.لط";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	If you want to know if there is a newer version available, please take a look at our website.\\n";

$GLOBALS['strClickToVisitWebsite']		= "برای دیدن وب سایت ما اینجا کلیک نمایید";
$GLOBALS['strCurrentlyUsing'] 			= "شما در حال است";
$GLOBALS['strRunningOn']				= "اجرا روی";
$GLOBALS['strAndPlain']					= "و";


// Stats conversion
$GLOBALS['strConverting']			= "برگرداندن";
$GLOBALS['strConvertingStats']			= "درحال برگرداندن آمار ...";
$GLOBALS['strConvertStats']			= "برگرداندن آمار";
$GLOBALS['strConvertAdViews']			= "مشاهدات برگردانده شد...";
$GLOBALS['strConvertAdClicks']			= "کل&#1740;ک ها برگردانده شد ...";
$GLOBALS['strConvertNothing']			= "چ&#1740;ز&#1740; برا&#1740; برگرداندن ن&#1740;ست...";
$GLOBALS['strConvertFinished']			= "پا&#1740;ان &#1740;ا";

$GLOBALS['strConvertExplaination']		= "\\n	You are currently using the compact format to store your statistics, but there are <br />\\n	still some statistics in verbose format. As long as the verbose statistics aren't  <br />\\n	converted to compact format they will not be used while viewing these pages.  <br />\\n	Before converting your statistics, make a backup of the database!  <br />\\n	Do you want to convert your verbose statistics to the new compact format? <br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	All remaining verbose statistics are now being converted to the compact format. <br />\\n	Depending on how many impressions are stored in verbose format this may take a  <br />\\n	couple of minutes. Please wait until the conversion is finished before you visit other <br />\\n	pages. Below you will see a log of all modification made to the database. <br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	The conversion of the remaining verbose statistics was succesful and the data <br />\\n	should now be usable again. Below you will see a log of all modification made <br />\\n	to the database.<br />\\n";

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
