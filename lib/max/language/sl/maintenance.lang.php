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
$GLOBALS['strChooseSection']			= "Izberi oddelek";
$GLOBALS['strAppendCodes']              = "Pripni zbirnike";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>Načrtovano vzdrževanje ni bilo zagnano v zadnji uri. To lahko pomeni, da ga niste pravilno nastavili.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>Načrtovano vzdrževanje deluje pravilno.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>Samodejno vzdrževanje deluje pravilno.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Samodejno vzdrževanje je še vedno omogočeno. Za optimalno delovanje <a href='account-settings-maintenance.php'>onemogočite to funcijo</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Preračunaj prioriteto";
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
$GLOBALS['strCheckBannerCache']		= "Preveri pomnilnik pasice";
$GLOBALS['strRebuildBannerCache']		= "Rebuild banner cache";
$GLOBALS['strBannerCacheErrorsFound'] = "Preverba podatkovne baze pomnilnika pasic je našla napake. Te pasice ne bodo delovale, dokler jih ročno ne popravite.";
$GLOBALS['strBannerCacheOK'] = "Nobena napaka ni bila odkrita. Vaša pomnilniška baza pasic deluje pravilno.";
$GLOBALS['strBannerCacheDifferencesFound'] = "Vaša pomnilniška baza pasice ni posodobljena. Za normalno delovanje je potrebna posodobitev.";
$GLOBALS['strBannerCacheFixed'] = "Uspešno končano. Vaš pomnilnik podatkovne baze je posodobljen.";
$GLOBALS['strBannerCacheRebuildButton'] = "Ponovno sestavi";
$GLOBALS['strRebuildDeliveryCache']			= "Ponovno sestavi pomnilniško bazo pasice";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Dostavni pomnilnik";
$GLOBALS['strAge']				= "Starost";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n	Skupen pomnilnik je trenutno v uporabi za hrambo dostavnega pomnilnika.\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n	Podatkovna baza je trenutno v uporabi za hrambo dostavnega pomnilnika.\\n";
$GLOBALS['strDeliveryCacheFiles']		= "\\n	Dostavni pomnilnik je trenutno v hrambi v večih datotekah na vašem strežniku.\\n";


// Storage
$GLOBALS['strStorage']				= "Shramba";
$GLOBALS['strMoveToDirectory']			= "Premakni slike shranjene v podatkovni bazi v mapo";
$GLOBALS['strStorageExplaination']		= "\\n	Slike, ki jih uporablja lokalna pasica, so shranjene v podatkovni bazi ali mapi. Če boste slike shranili\\n	v mapo, boste pospešili nalagalni čas podatkovne baze.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Šifriranje";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Pretvori iz tega šifriranja:";
$GLOBALS['strEncodingConvert']          = "Pretvori";
$GLOBALS['strEncodingConvertTest']      = "Preveri pretvorbo";
$GLOBALS['strConvertThese']             = "Naslednji podatki bodo spremenjeni, če boste nadaljevali";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	Omogočeno imate <i>Zgoščeno statistiko</i>, vendar so starejši statistični podatki še vedno v preobširnem formatu.\\n	Si jih želite spremeniti v zgoščen format?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Preverjam za posodobitve. Prosimo, počakajte...";
$GLOBALS['strAvailableUpdates']			= "Razpoložljive posodobitve";
$GLOBALS['strDownloadZip']			= "Shrani (.zip)";
$GLOBALS['strDownloadGZip']			= "Shrani (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "Zaradi neznane napake je bilo nemogoče pridobiti <br>informacije o možnih posodobitvah. Prosimo, poizkusite znova kasneje.";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";

$GLOBALS['strCheckForUpdatesDisabled'] = "<b>Preveri za posodobitve je onemogočne.Â Prosimo omogočiteÂ preko <a href='account-settings-update.php'>posodobitvenega</a> zaslona.</b>";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Če želite vedeti, ali obstaja novejša različica, vas prosimo, da obiščete našo spletno stran.\\n";

$GLOBALS['strClickToVisitWebsite']		= "Kliknite tukaj za obisk naše spletne strani";
$GLOBALS['strCurrentlyUsing'] 			= "Trenutno uporabljate";
$GLOBALS['strRunningOn']				= "teče na";
$GLOBALS['strAndPlain']					= "in";


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
$GLOBALS['strAutoMaintenanceDisabled'] = "Samodejno vzdrževanje je onemogočeno.";
$GLOBALS['strAutoMaintenanceEnabled']  = "Samodejno vzdrževanje je omogočeno. Za optimalno delovanje je priporočljivo to funkcijo <a href='settings-admin.php'>onemogočiti</a>.";
$GLOBALS['strScheduledMaintenance']         = "Načrtovano vzdrževanje deluje pravilno.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "Načrtovano vzdrževanje ni bilo zagnano v zadnji uri. To verjetno pomeni, da ni nastavljeno pravilno.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "Samodejno vzdrževanje je omogočeno in bo aktiviralo vzdrževalni postopek vsako uro.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Omejitve dostave";
$GLOBALS['strAllBannerChannelCompiled'] = "Vse zbrane omejitvene vrednosti pasice/kanala so bile sestavljene";
$GLOBALS['strBannerChannelResult']      = "Tukaj so rezultati veljavne zbrane omejitve pasice/kanala";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Vse zbrane omejitve kanala so veljavne";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Vse zbrane omejitve pasice so veljavne";
$GLOBALS['strErrorsFound']              = "Najdene napake";
$GLOBALS['strRepairCompiledLimitations']        = "Zgoraj je bilo najdenih nekaj nedoslednosti. Te lahko odpravite s klikom na spodnjim gumbom, ki bo znova sestavil zbrane omejitve za vsako pasico/kanal v sistemu<br />";
$GLOBALS['strRecompile']                = "Znova sestavi";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "V nekaterih okoliščinah dostavno orodje pride v navzkrižje z shranjenimi ACL-ji za pasice in kanale. Uporabite naslednjo povezavo za potrditev ACL-jev v podatkovni bazi";
$GLOBALS['strCheckACLs'] = "Preveri ACL-je";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "Po nekaterimi pogoji dostavno orodje ne deluje pravilno z shranjenim zbirnikom za sledilnike. Uporabite naslednjo povezavo za potrditev zbrinika v podatkovni bazi";
$GLOBALS['strCheckAppendCodes']         = "Preveri pripojitveni zbirnik";
$GLOBALS['strAppendCodesRecompiled']    = "Vse zbrane pripojitvene vrednosti zbirnika so bile znova sestavljene";
$GLOBALS['strAppendCodesResult']        = "Tukaj so rezultati veljavnosti zbranih pripojitvenih zbirnikov";
$GLOBALS['strAppendCodesValid']         = "Vsi zbrani pripojitveni zbirniki sledilnika so veljavni";
$GLOBALS['strRepairAppenedCodes']       = "Zgoraj je bilo najdenih nekaj nedoslednosti. Te lahko odpravite s klikom na spodnji gumb.";

$GLOBALS['strPlugins']                  = "Vtičniki";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "Nobenih težav ni bilo najdenih";

$GLOBALS['strMenus']                    = "Meniji";
$GLOBALS['strMenusPrecis']              = "Ponovno sestavi menijski pomnilnik";
$GLOBALS['strMenusCachedOk']            = "Menijskih pomnilnik je bil ponovno sestavljen";
$GLOBALS['strMenusCachedErr']           = "Prišlo je do napak pri sestavljanju menijskega pomnilnika";

?>
