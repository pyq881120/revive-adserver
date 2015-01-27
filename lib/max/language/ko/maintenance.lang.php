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
$GLOBALS['strRecalculatePriority']		= "우선순위 다시 계산";
$GLOBALS['strHighPriorityCampaigns']		= "높�?� 우선순위 캠페�?�";
$GLOBALS['strAdViewsAssigned']			= "할당�?� AdViews";
$GLOBALS['strLowPriorityCampaigns']		= "낮�?� 우선순위 캠페�?�";
$GLOBALS['strPredictedAdViews']			= "예�? AdViews";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "지난주와 금주�?� �?��?�터를 토대로 예�? 노출수 계산. ";
$GLOBALS['strPriorityBasedLastDays']		= "최근 며칠간�?� �?��?�터를 토대로 예�? 노출수 계산. ";
$GLOBALS['strPriorityBasedYesterday']		= "어제 �?��?�터를 기준으로 예�? 노출수 계산. ";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "배너 �?시 다시 빌드";
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
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n현재 전달유지 �?시를 저장하기 위해 공유 메모리를 사용하고 있습니다. \\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n현재 전달유지 �?시를 저장하기 위해 �?��?�터베�?�스를 사용하고 있습니다. \\n";


// Storage
$GLOBALS['strStorage']				= "저장�?역";
$GLOBALS['strMoveToDirectory']			= "�?��?�터베�?�스�? 저장�?� �?�미지를 디렉터리로 옮기기";
$GLOBALS['strStorageExplaination']		= "\\n로컬 배너로 사용하는 �?�미지는 �?��?�터베�?�스 �?는 디렉터리�? 저장�?�어 있습니다. �?�미지를 디렉터리�? 저장한 경우�?는 �?��?�터베�?�스�? 대한 부하를 줄임으로�?� �?�?�를 향�?시킬 수 있습니다.\\n";

// Encoding
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvert']          = "변환";


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


$GLOBALS['strClickToVisitWebsite']		= "\\n	Click here to visit our website\\n";


// Stats conversion
$GLOBALS['strConverting']			= "변환중";
$GLOBALS['strConvertingStats']			= "통계를 변환중입니다...";
$GLOBALS['strConvertStats']			= "통계 변환";
$GLOBALS['strConvertAdViews']			= "AdViews 변환,";
$GLOBALS['strConvertAdClicks']			= "AdClicks 변환...";
$GLOBALS['strConvertNothing']			= "변환할 것�?� 없습니다...";
$GLOBALS['strConvertFinished']			= "완료...";

$GLOBALS['strConvertExplaination']		= "\\n	You are currently using the compact format to store your statistics, but there are <br>\\n	still some statistics in verbose format. As long as the verbose statistics aren't  <br>\\n	converted to compact format they will not be used while viewing these pages.  <br>\\n	Before converting your statistics, make a backup of the database!  <br>\\n	Do you want to convert your verbose statistics to the new compact format? <br>\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	All remaining verbose statistics are now being converted to the compact format. <br>\\n	Depending on how many impressions are stored in verbose format this may take a  <br>\\n	couple of minutes. Please wait until the conversion is finished before you visit other <br>\\n	pages. Below you will see a log of all modification made to the database. <br>\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	The conversion of the remaining verbose statistics was succesful and the data <br>\\n	should now be usable again. Below you will see a log of all modification made <br>\\n	to the database.<br>\\n";

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
