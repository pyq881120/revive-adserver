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
$GLOBALS['strChooseSection']			= "Alege Secţiune";
$GLOBALS['strAppendCodes']              = "Alătură coduri";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>Întreţinerea programată nu a fost executată în ultima oră. Acest lucru ar putea însemna că nu ai setat-o corect.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>Întreţinerea programată funcţionează corect.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>Întreţinerea automată funcţionează corect.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Totuşi, întreţinerea automată încă este activată. Pentru cea mai bună performanţă, ar trebui să <a href='account-settings-maintenance.php'>dezactivezi întreţinerea automată</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Recalculează prioritatea";
$GLOBALS['strHighPriorityCampaigns']		= "High priority campaigns";
$GLOBALS['strAdViewsAssigned']			= "AdViews assigned";
$GLOBALS['strLowPriorityCampaigns']		= "Low priority campaigns";
$GLOBALS['strPredictedAdViews']			= "Predicted AdViews";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "The prediction is based on data from this week and last week. ";
$GLOBALS['strPriorityBasedLastDays']		= "The prediction is based on data from the last couple of days. ";
$GLOBALS['strPriorityBasedYesterday']		= "The prediction is based on data from yesterday. ";
$GLOBALS['strPriorityNoData']			= "There isn't enough data available to make a reliable prediction about the number of impressions this adserver will generate today. Priority assignments will be based on real time statistics only. ";
$GLOBALS['strPriorityEnoughAdViews']		= "There should be enough AdViews to fully satisfy the target all high priority campaigns. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "It isn't clear wether there will be enough AdViews served today to satisfy the target all high priority campaigns. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Verifică cache banner";
$GLOBALS['strRebuildBannerCache']		= "Rebuild banner cache";
$GLOBALS['strBannerCacheErrorsFound'] = "Verificarea bazei de date pentru cache-ul bannerului a întâmpinat unele erori. Aceste bannere nu vor funcţiona până când nu le repari manual.";
$GLOBALS['strBannerCacheOK'] = "Nu a fost detectată nici o eroare. Baza de date cu cache-ul bannerului este actualizată";
$GLOBALS['strBannerCacheDifferencesFound'] = "Verificarea bazei de date pentru cache-ul bannerului a descoperit ca sunt necesare actualizări ce necesită reconstruirea acesteia. Apasă aici pentru actualizarea automată a cache-ului.";
$GLOBALS['strBannerCacheFixed'] = "Refacerea cache-ului bazei de date folosite pentru bannere a fost refăcut cu succes. Cache-ul bazei tale de date este actualizat acum.";
$GLOBALS['strBannerCacheRebuildButton'] = "Reconstruieşte";
$GLOBALS['strRebuildDeliveryCache']			= "Reconstruieşte baza de date cu cache-ul bannerului";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Cache Distribuţie";
$GLOBALS['strAge']				= "Vârstă";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n	Memoria împărţită este momentan utilizată pentru a stoca cache-ul distribuţiei.\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n	Baza de date este momentan utilizată pentru a stoca cache-ul distribuţiei.\\n";
$GLOBALS['strDeliveryCacheFiles']		= "\\n	Cache-ul distribuţiei este stocat momentan în mai multe fişiere de pe server.\\n";


// Storage
$GLOBALS['strStorage']				= "Stocare";
$GLOBALS['strMoveToDirectory']			= "Mută imaginile stocate în baza de date într-un director";
$GLOBALS['strStorageExplaination']		= "\\n	Imaginile utilizate de bannerele locale sunt stocate în interiorul bazei de date sau stocate într-un director. Dacă stochezi imaginile într-un\\n	director, utilizarea bazei de date va fi redusă, ceea ce va duce la o viteză îmbunătăţită.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Codare";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Converteşte din această codare:";
$GLOBALS['strEncodingConvert']          = "Converteşte";
$GLOBALS['strEncodingConvertTest']      = "Verifică conversia";
$GLOBALS['strConvertThese']             = "Următoarele date vor fi schimbate dacă continui";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	Ai activat <i>statisticile compacte</i>, dar vechile tale statistici încă sunt în formatul normal.\\n	Vrei să converteşti statisticile tale normale în noul format compact?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Caut actualizări. Te rugăm să aştepţi...";
$GLOBALS['strAvailableUpdates']			= "Actualizări disponibile";
$GLOBALS['strDownloadZip']			= "Descarcă (.zip)";
$GLOBALS['strDownloadGZip']			= "Descarcă (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "Nu este posibilă obţinerea informaţiilor despre<br>eventualele actualizări din cauya unui motiv necunoscut. Te rugăm să încerci din nou.";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Dacă doreşi să afli noutăţi despre ultima versiune disponibilă, te rugăm sa accesezi site-ul nostru.\\n";

$GLOBALS['strClickToVisitWebsite']		= "Click aici pentru a vizita site-ul nostru";
$GLOBALS['strCurrentlyUsing'] 			= "Momentan utilizezi";
$GLOBALS['strRunningOn']				= "rulând pe";
$GLOBALS['strAndPlain']					= "şi";


// Stats conversion
$GLOBALS['strConverting']			= "Converting";
$GLOBALS['strConvertingStats']			= "Converting statistics...";
$GLOBALS['strConvertStats']			= "Convert statistics";
$GLOBALS['strConvertAdViews']			= "AdViews converted,";
$GLOBALS['strConvertAdClicks']			= "AdClicks converted...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "Nothing to convert...";
$GLOBALS['strConvertFinished']			= "Finished...";

$GLOBALS['strConvertExplaination']		= "
	You are currently using the compact format to store your statistics, but there are <br />
	still some statistics in verbose format. As long as the verbose statistics aren't  <br />
	converted to compact format they will not be used while viewing these pages.  <br />
	Before converting your statistics, make a backup of the database!  <br />
	Do you want to convert your verbose statistics to the new compact format? <br />
";

$GLOBALS['strConvertingExplaination']		= "
	All remaining verbose statistics are now being converted to the compact format. <br />
	Depending on how many impressions are stored in verbose format this may take a  <br />
	couple of minutes. Please wait until the conversion is finished before you visit other <br />
	pages. Below you will see a log of all modification made to the database. <br />
";

$GLOBALS['strConvertFinishedExplaination']  	= "
	The conversion of the remaining verbose statistics was succesful and the data <br />
	should now be usable again. Below you will see a log of all modification made <br />
	to the database.<br />
";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "Întreţinerea automată este dezactivată.";
$GLOBALS['strAutoMaintenanceEnabled']  = "Întreţinerea automată este activată. Pentru cea mai bună performanţă îţi recomandăm să <a href='settings-admin.php'>dezactivezi întreţinerea automată</a>.";
$GLOBALS['strScheduledMaintenance']         = "Se pare că întreţinerea programată funcţionează corect.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "Întreţinerea programată nu a fost executată în ultima oră. Acest lucru ar putea însemna că nu ai setat-o corect.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "Întreţinerea automată este activată şi va accesa întreţinerea în fiecare oră.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Limitări Livare";
$GLOBALS['strAllBannerChannelCompiled'] = "Toate valorile de limitare compilate ale banner-ului/canalului au fost recompilate";
$GLOBALS['strBannerChannelResult']      = "Aici sunt rezultatele validării limitării compilate ale banner-ului/canalului";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Toate limitările compilate ale canalului sunt valide";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Toate limitările compilate ale banner-ului sunt valide";
$GLOBALS['strErrorsFound']              = "Au fost găsite erori";
$GLOBALS['strRepairCompiledLimitations']        = "Au fost găsite unele incompatibilităţi deasupra, le poţi repara folosind butonul de mai jos, acesta va recompila limitarea compilată pentru fiecare banner/canal din sistem<br />";
$GLOBALS['strRecompile']                = "Recompilează";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "În unele circumstanţe motorul de livrare poate dezaproba ACL-urile stocate pentru bannere şi canale, foloseşte următorul link pentru a valida ACL-urile din baza de date";
$GLOBALS['strCheckACLs'] = "Verifică ACL-uri";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "În unele circumstanţe motorul de livrare poate dezaproba codul alăturat contoarelor, foloseşte următorul link pentru a valida codul alăturat din baza de date";
$GLOBALS['strCheckAppendCodes']         = "Verifica codurile alăturate";
$GLOBALS['strAppendCodesRecompiled']    = "Toate valorile codurilor alăturate compilate au fost recompilate";
$GLOBALS['strAppendCodesResult']        = "Aici sunt rezultatele validării codurilor alăturate compilate";
$GLOBALS['strAppendCodesValid']         = "Toate codurile alăturate ale contorului compilate sunt valide";
$GLOBALS['strRepairAppenedCodes']       = "Au fost găsite unele incompatibilităţi mai sus, le poţi repara folosind butonul de mai jos, acesta va recompila codurile alăturate pentru fiecare contor din sistem";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "No problems found";

$GLOBALS['strMenus']                    = "Menus";
$GLOBALS['strMenusPrecis']              = "Rebuild the menu cache";
$GLOBALS['strMenusCachedOk']            = "Menu cache has been rebuilt";
$GLOBALS['strMenusCachedErr']           = "Errors while rebuilding Menu cache";

?>
