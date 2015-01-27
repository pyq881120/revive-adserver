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
$GLOBALS['strChooseSection']			= "�?역 선�?";
$GLOBALS['strAppendCodes']              = "Append codes";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>Scheduled maintenance hasn't run in the past hour. This may mean that you have not set it up correctly.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>Scheduled maintenance is running correctly.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>Automatic maintenance is running correctly.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "However, automatic maintenance is still enabled. For the best performance, you should <a href='account-settings-maintenance.php'>disable automatic maintenance</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "우선순위 다시 계산";
$GLOBALS['strHighPriorityCampaigns']		= "높�?� 우선순위 캠페�?�";
$GLOBALS['strAdViewsAssigned']			= "할당�?� AdViews";
$GLOBALS['strLowPriorityCampaigns']		= "낮�?� 우선순위 캠페�?�";
$GLOBALS['strPredictedAdViews']			= "예�? AdViews";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "지난주와 금주�?� �?��?�터를 토대로 예�? 노출수 계산. ";
$GLOBALS['strPriorityBasedLastDays']		= "최근 며칠간�?� �?��?�터를 토대로 예�? 노출수 계산. ";
$GLOBALS['strPriorityBasedYesterday']		= "어제 �?��?�터를 기준으로 예�? 노출수 계산. ";
$GLOBALS['strPriorityNoData']			= "There isn't enough data available to make a reliable prediction about the number of impressions this adserver will generate today. Priority assignments will be based on real time statistics only. ";
$GLOBALS['strPriorityEnoughAdViews']		= "There should be enough AdViews to fully satisfy the target all high priority campaigns. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "It isn't clear wether there will be enough AdViews served today to satisfy the target all high priority campaigns. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Check banner cache";
$GLOBALS['strRebuildBannerCache']		= "배너 �?시 다시 빌드";
$GLOBALS['strBannerCacheErrorsFound'] = "The database banner cache check has found some errors. These banners will not work until you manually fix them.";
$GLOBALS['strBannerCacheOK'] = "There were no errors detected. Your database banner cache is up to date";
$GLOBALS['strBannerCacheDifferencesFound'] = "The database banner cache check has found that your cache is not up to date and requires rebuilding. Click here to automatically  update your cache.";
$GLOBALS['strBannerCacheFixed'] = "The database banner cache rebuild was successfully completed. Your database cache is now up to date.";
$GLOBALS['strBannerCacheRebuildButton'] = "Rebuild";
$GLOBALS['strRebuildDeliveryCache']			= "전달유지 �?시 다시 빌드";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "전달유지 �?시";
$GLOBALS['strAge']				= "Age";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n현재 전달유지 �?시를 저장하기 위해 공유 메모리를 사용하고 있습니다. \\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n현재 전달유지 �?시를 저장하기 위해 �?��?�터베�?�스를 사용하고 있습니다. \\n";
$GLOBALS['strDeliveryCacheFiles']		= "
	The delivery cache is currently being stored into multiple files on your server.
";


// Storage
$GLOBALS['strStorage']				= "저장�?역";
$GLOBALS['strMoveToDirectory']			= "�?��?�터베�?�스�? 저장�?� �?�미지를 디렉터리로 옮기기";
$GLOBALS['strStorageExplaination']		= "\\n로컬 배너로 사용하는 �?�미지는 �?��?�터베�?�스 �?는 디렉터리�? 저장�?�어 있습니다. �?�미지를 디렉터리�? 저장한 경우�?는 �?��?�터베�?�스�? 대한 부하를 줄임으로�?� �?�?�를 향�?시킬 수 있습니다.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Encoding";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Convert from this encoding:";
$GLOBALS['strEncodingConvert']          = "변환";
$GLOBALS['strEncodingConvertTest']      = "Test conversion";
$GLOBALS['strConvertThese']             = "The following data will be changed if you continue";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	You have enabled the <i>compact statistics</i>, but your old statistics are still in verbose format.\\n	Do you want to convert your verbose statistics to the new compact format?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "업�?��?�트를 겅색중입니다. 잠시 기다려주십시오...";
$GLOBALS['strAvailableUpdates']			= "�?�용할 수 있는 업�?��?�트";
$GLOBALS['strDownloadZip']			= "다운로드(.zip)";
$GLOBALS['strDownloadGZip']			= "다운로드(.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "\\n    Due to an unknown reason it isn't possible to retrieve <br>\\n	information about possible updates. Please try again later.\\n";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";

$GLOBALS['strCheckForUpdatesDisabled'] = "
    <b>Check for updates is disabled. Please enable via the
    <a href='account-settings-update.php'>update settings</a> screen.</b>
";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "
	If you want to know if there is a newer version available, please take a look at our website.
";

$GLOBALS['strClickToVisitWebsite']		= "\\n	Click here to visit our website\\n";
$GLOBALS['strCurrentlyUsing'] 			= "You are currently using";
$GLOBALS['strRunningOn']				= "running on";
$GLOBALS['strAndPlain']					= "and";


// Stats conversion
$GLOBALS['strConverting']			= "변환중";
$GLOBALS['strConvertingStats']			= "통계를 변환중입니다...";
$GLOBALS['strConvertStats']			= "통계 변환";
$GLOBALS['strConvertAdViews']			= "AdViews 변환,";
$GLOBALS['strConvertAdClicks']			= "AdClicks 변환...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "변환할 것�?� 없습니다...";
$GLOBALS['strConvertFinished']			= "완료...";

$GLOBALS['strConvertExplaination']		= "\\n	You are currently using the compact format to store your statistics, but there are <br>\\n	still some statistics in verbose format. As long as the verbose statistics aren't  <br>\\n	converted to compact format they will not be used while viewing these pages.  <br>\\n	Before converting your statistics, make a backup of the database!  <br>\\n	Do you want to convert your verbose statistics to the new compact format? <br>\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	All remaining verbose statistics are now being converted to the compact format. <br>\\n	Depending on how many impressions are stored in verbose format this may take a  <br>\\n	couple of minutes. Please wait until the conversion is finished before you visit other <br>\\n	pages. Below you will see a log of all modification made to the database. <br>\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	The conversion of the remaining verbose statistics was succesful and the data <br>\\n	should now be usable again. Below you will see a log of all modification made <br>\\n	to the database.<br>\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "Automatic maintenance is disabled.";
$GLOBALS['strAutoMaintenanceEnabled']  = "Automatic maintenance is enabled. For best performance it is advised to <a href='settings-admin.php'>disable automatic maintenance</a>.";
$GLOBALS['strScheduledMaintenance']         = "Scheduled maintenance seems to be correctly running.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "Scheduled maintenance hasn't run in the past hour. This may mean that you have not set it up correctly.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "Automatic maintenance is enabled and will trigger maintenance every hour.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Delivery Limitations";
$GLOBALS['strAllBannerChannelCompiled'] = "All banner/channel compiled limitation values have been recompiled";
$GLOBALS['strBannerChannelResult']      = "Here are the results of the banner/channel compiled limitation validation";
$GLOBALS['strChannelCompiledLimitationsValid']  = "All channel compiled limitations are valid";
$GLOBALS['strBannerCompiledLimitationsValid']   = "All banner compiled limitations are valid";
$GLOBALS['strErrorsFound']              = "Errors found";
$GLOBALS['strRepairCompiledLimitations']        = "Some inconsistancies were found above, you can repair these using the button below, this will recompile the compiled limitation for every banner/channel in the system<br />";
$GLOBALS['strRecompile']                = "Recompile";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "Under some circumstances the delivery engine can disagree with the stored ACLs for banners and channels, use the folowing link to validate the ACLs in the database";
$GLOBALS['strCheckACLs'] = "Check ACLs";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "Under some circumstances the delivery engine can disagree with the stored append codes for trackers, use the folowing link to validate the append codes in the database";
$GLOBALS['strCheckAppendCodes']         = "Check Append codes";
$GLOBALS['strAppendCodesRecompiled']    = "All compiled append codes values have been recompiled";
$GLOBALS['strAppendCodesResult']        = "Here are the results of the compiled append codes validation";
$GLOBALS['strAppendCodesValid']         = "All tracker compiled appendcodes are valid";
$GLOBALS['strRepairAppenedCodes']       = "Some inconsistancies were found above, you can repair these using the button below, this will recompile the append codes for every tracker in the system";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "No problems found";

$GLOBALS['strMenus']                    = "Menus";
$GLOBALS['strMenusPrecis']              = "Rebuild the menu cache";
$GLOBALS['strMenusCachedOk']            = "Menu cache has been rebuilt";
$GLOBALS['strMenusCachedErr']           = "Errors while rebuilding Menu cache";

?>
