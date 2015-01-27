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
$GLOBALS['strChooseSection']			= "選擇章節";

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
$GLOBALS['strRecalculatePriority']		= "重新計算優先級";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "檢查廣告緩存";
$GLOBALS['strBannerCacheErrorsFound'] = "經查，數據庫廣告緩存發現錯誤。在手工修正這些錯誤之前，這些廣告將無法正常運行。";
$GLOBALS['strBannerCacheOK'] = "未發現錯誤，您的數據庫廣告緩存已是最新的";
$GLOBALS['strBannerCacheDifferencesFound'] = "經查，數據庫廣告緩存不是最新的，需要重建。點擊這裡自動更新緩存。";
$GLOBALS['strBannerCacheFixed'] = "成功完成廣告數據庫緩存重構, 數據庫緩存已經更新.";
$GLOBALS['strBannerCacheRebuildButton'] = "重構";
$GLOBALS['strRebuildDeliveryCache']			= "重構數據庫廣告緩存";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "發布緩存";
$GLOBALS['strAge']				= "年齡";
$GLOBALS['strDeliveryCacheSharedMem']		= "共享內存目前正被發布緩存佔用";
$GLOBALS['strDeliveryCacheDatabase']		= "數據正在存儲發布緩存";
$GLOBALS['strDeliveryCacheFiles']		= "發布緩存正在存儲到你伺服器上的多個文件 ";


// Storage
$GLOBALS['strStorage']				= "存儲";
$GLOBALS['strMoveToDirectory']			= "將圖片從數據庫中移動到目錄下 ";
$GLOBALS['strStorageExplaination']		= "圖片文件可存儲在數據庫或文件系統中。存儲在文件系統中將比存儲在數據庫中效率更高。";

// Encoding
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvert']          = "轉換";


// Storage
$GLOBALS['strStatisticsExplaination']		= "您已經啟用了<i>緊縮統計</i>, 但是您的報表還是詳細格式.您是否願意把現有的詳細格式轉換為緊縮格式?";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "查找更新，請稍候……";
$GLOBALS['strAvailableUpdates']			= "提供的更新";
$GLOBALS['strDownloadZip']			= "下載 (.zip)";
$GLOBALS['strDownloadGZip']			= "下載 (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";


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

$GLOBALS['strForUpdatesLookOnWebsite']	= "如果您希望知道是否有新的版本提供，請查閱我們的網站。";

$GLOBALS['strClickToVisitWebsite']		= "點擊訪問官方網站";
$GLOBALS['strCurrentlyUsing'] 			= "你正在使用的";
$GLOBALS['strRunningOn']				= "運行的";
$GLOBALS['strAndPlain']					= "與";


// Stats conversion




//  Maintenace
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "發布限制";


//  Append codes

$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";


?>
