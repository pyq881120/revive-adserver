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
$GLOBALS['strChooseSection']			= "Kies sectie";
$GLOBALS['strAppendCodes']              = "Append codes";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>Gepland onderhoud is in het afgelopen uur niet uitgevoerd. Dit kan betekenen dat u hebt niet correct hebt ingesteld.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>Gepland onderhoud wordt correct uitgevoerd.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>Automatisch onderhoud wordt correct uitgevoerd.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Automatisch onderhoud is echter nog steeds ingeschakeld. Voor de beste prestaties moet u <a href='account-settings-maintenance.php'> automatisch onderhoud</a> uitschakelen.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Prioriteit opnieuw berekenen";
$GLOBALS['strHighPriorityCampaigns']		= "Hoge prioriteit campagnes";
$GLOBALS['strAdViewsAssigned']			= "AdViews toegewezen";
$GLOBALS['strLowPriorityCampaigns']		= "Lage prioriteit campagnes";
$GLOBALS['strPredictedAdViews']			= "Voorspelde AdViews";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "De voorspelling is gebaseerd op data van deze week en afgelopen week. ";
$GLOBALS['strPriorityBasedLastDays']		= "De voorspelling is gebaseerd op data van de laatste paar dagen. ";
$GLOBALS['strPriorityBasedYesterday']		= "De voorspelling is gebaseerd op data van gisteren. ";
$GLOBALS['strPriorityNoData']			= "Er is niet genoeg data beschikbaar om een betrouwbare voorspelling te doen betreffende het aantal impressies dat deze ad server vandaag zal genereren. De toewijzing van de prioriteit zal op basis van de statistieken van vandaag gebeuren. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Er zijn genoeg AdViews om aan de doelstelling van alle hoge prioriteit campagnes te voldoen. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Het is niet zeker dat er vandaag genoeg AdViews zijn om de doelstellingen van alle hoge prioriteit campaignes te halen. Daarom zijn alle lage prioriteit campagnes tijdelijk uitgeschaked. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Controleer banner cache";
$GLOBALS['strRebuildBannerCache']		= "Banner cache opnieuw aanmaken";
$GLOBALS['strBannerCacheErrorsFound'] = "De database banner chase controle heeft geen fouten gevonden. De banners zullen niet werken totdat je ze manueel gerepareerd hebt.";
$GLOBALS['strBannerCacheOK'] = "Er zijn geen fouten gevonden. De database banner cache is up to date";
$GLOBALS['strBannerCacheDifferencesFound'] = "The database banner cache check has found that your cache is not up to date and requires rebuilding. Click here to automatically  update your cache.";
$GLOBALS['strBannerCacheFixed'] = "The database banner cache rebuild was successfully completed. Your database cache is now up to date.";
$GLOBALS['strBannerCacheRebuildButton'] = "Rebuild";
$GLOBALS['strRebuildDeliveryCache']			= "Leveringscache opnieuw aanmaken";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Leveringscache";
$GLOBALS['strAge']				= "Leeftijd";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n	Momenteel wordt de cache opgeslagen in gedeeld geheugen.\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n	Momenteel wordt de cache opgeslagen in de database.\\n";
$GLOBALS['strDeliveryCacheFiles']		= "\\n	Momenteel wordt de cache opgeslagen in bestanden op de server.\\n";


// Storage
$GLOBALS['strStorage']				= "Opslag methoden";
$GLOBALS['strMoveToDirectory']			= "Verplaats afbeeldingen van de database naar een directory";
$GLOBALS['strStorageExplaination']		= "\\n	De afbeeldingen welke gebruikt worden door lokale banners worden, of in de database, of in een directory opgeslagen. \\n	Indien de afbeeldingen in een directory worden opgeslagen wordt de database minder belast.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Encoding";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Convert from this encoding:";
$GLOBALS['strEncodingConvert']          = "Converteer";
$GLOBALS['strEncodingConvertTest']      = "Test conversion";
$GLOBALS['strConvertThese']             = "The following data will be changed if you continue";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	U heeft <i>compacte statistieken</i> ingeschakeld, maar er zijn nog enkele oude statistieken beschikbaar\\n	in het uitgebreide formaat. Wilt u de oude statistieken converteren naar het compacte formaat?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Zoeken naar nieuwere versies, een moment geduld a.u.b...";
$GLOBALS['strAvailableUpdates']			= "Beschikbare update";
$GLOBALS['strDownloadZip']			= "Downloaden (.zip)";
$GLOBALS['strDownloadGZip']			= "Downloaden (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "\\n    Vanwege een onbekende reden is het momenteel niet mogelijk<br />\\n    om informatie op te halen over mogelijke updates. Probeer<br />\\n    het later nog eens.\\n";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Indien u wilt weten of er een nieuwere versie beschikbaar is, kijk dan op onze website.\\n";

$GLOBALS['strClickToVisitWebsite']		= "Klik hier om onze website te bezoeken";
$GLOBALS['strCurrentlyUsing'] 			= "U gebruikt momenteel";
$GLOBALS['strRunningOn']				= "draaiend op";
$GLOBALS['strAndPlain']					= "en";


// Stats conversion
$GLOBALS['strConverting']			= "Bezig met converteren...";
$GLOBALS['strConvertingStats']			= "Statistieken aan het converteren...";
$GLOBALS['strConvertStats']			= "Converteer statitieken";
$GLOBALS['strConvertAdViews']			= "AdViews geconverteerd,";
$GLOBALS['strConvertAdClicks']			= "AdClicks geconverteerd...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "Er zijn geen statistieken aanwezig om te converteren...";
$GLOBALS['strConvertFinished']			= "Klaar...";

$GLOBALS['strConvertExplaination']		= "\\n	U gebruikt momenteel het compacte formaat om uw statistieken te bewaren, maar er zijn<br />\\n	nog steeds statistieken aanwezig in het uitgebreide formaat. Zolang deze uitgebreide<br />\\n	statistieken niet geconverteerd zijn naar het compacte formaat zullen deze niet getoond<br />\\n	worden binnen op de overzichtspagina's. Voordat u uw statistieken gaat converteren, maak<br />\\n	eerst een backup van de database! Wilt u de uitgebreide statistieken converteren? <br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	Alle uitgebreide statistieken worden nu geconverteerd naar het compate formaat.<br />\\n	Afhankelijk van de grootte van de statistieken kan dit enige minuten duren.<br />\\n	Wacht tot de gehele conversie klaar is voordat u andere pagina's gaat bekijken.<br />\\n	Hieronder ziet een een lijst met alle veranderingen welke gemaakt zijn in de database.<br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	De conversie van de uitgebreide statistieken is succesvol afgerond en de gegevens<br />\\n	zouden nu beschikbaar moeten zijn in alle overzichten. Hieronder vindt u een lijst<br />\\n	met alle veranderingen welke gemaakt zijn in de database.<br />\\n";

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
$GLOBALS['strErrorsFound']              = "Fouten gevonden";
$GLOBALS['strRepairCompiledLimitations']        = "Some inconsistancies were found above, you can repair these using the button below, this will recompile the compiled limitation for every banner/channel in the system<br />";
$GLOBALS['strRecompile']                = "Opnieuw compileren";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "Under some circumstances the delivery engine can disagree with the stored ACLs for banners and channels, use the folowing link to validate the ACLs in the database";
$GLOBALS['strCheckACLs'] = "Check ACLs";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "Under some circumstances the delivery engine can disagree with the stored append codes for trackers, use the folowing link to validate the append codes in the database";
$GLOBALS['strCheckAppendCodes']         = "Append codes controleren";
$GLOBALS['strAppendCodesRecompiled']    = "All compiled append codes values have been recompiled";
$GLOBALS['strAppendCodesResult']        = "Here are the results of the compiled append codes validation";
$GLOBALS['strAppendCodesValid']         = "All tracker compiled appendcodes are valid";
$GLOBALS['strRepairAppenedCodes']       = "Some inconsistancies were found above, you can repair these using the button below, this will recompile the append codes for every tracker in the system";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "Geen problemen gevonden";

$GLOBALS['strMenus']                    = "Menu's";
$GLOBALS['strMenusPrecis']              = "Verversen van het gebufferde menu";
$GLOBALS['strMenusCachedOk']            = "Menu cache has been rebuilt";
$GLOBALS['strMenusCachedErr']           = "Fouten terwijl de buffer van het menu werd ververst";

?>
