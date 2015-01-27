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
$GLOBALS['strChooseSection']			= "Scgli sezione";
$GLOBALS['strAppendCodes']              = "Accoda i codici";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<strong>La manutenzione programmata non è stata eseguita nell'ultima ora. Potrebbe darsi che non sia stata configurata correttamente.</strong>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<strong>La manutenzione programmata funziona correttamente.</strong>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<strong>La manutenzione automatica funziona correttamente</strong>";

$GLOBALS['strAutoMantenaceEnabled']		= "La manutenzione automatica rimane funzionante. Per ottenere le performance migliori dovresti <a href='account-settings-maintenance.php'>disabilitare la manutenzione automatica</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Ricalcola la priorità";
$GLOBALS['strHighPriorityCampaigns']		= "Campagne con Priorità Alta";
$GLOBALS['strAdViewsAssigned']			= "Visualizzazioni assegnate";
$GLOBALS['strLowPriorityCampaigns']		= "Campagne con Priorità Bassa";
$GLOBALS['strPredictedAdViews']			= "Visualizzazioni previste";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "La previsione è basata sui dati della settimana scorsa e di quella attuale. ";
$GLOBALS['strPriorityBasedLastDays']		= "La previsione è basata solo sui dati degli ultimi giorni. ";
$GLOBALS['strPriorityBasedYesterday']		= "La previsione è basata solo sui dati si ieri. ";
$GLOBALS['strPriorityNoData']			= "Non ci sono abbastanza dati per fornire una previsione affidabile sul numero di visualizzazioni che il server genererà oggi. L'assegnamento delle priorità sarà basato solo sulle statistiche generate in tempo reale. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Dovrebbero esserci abbastanza Visualizzazioni per soddisfare completamente gli obiettivi di tutte le campagne ad alta priorità. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Non è chiaro se oggi ci saranno AdViews abbastanza Visualizzazioni per soddisfare completamente gli obiettivi delle campagne ad alta priorità. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Controlla la cache dei banner";
$GLOBALS['strRebuildBannerCache']		= "Ricostruisci cache dei banner";
$GLOBALS['strBannerCacheErrorsFound'] = "La cache dei banner nel database ha riscontrato qualche errore. Questi banner non funzioneranno finchè non correggerai manualmente gli errori riscontrati.";
$GLOBALS['strBannerCacheOK'] = "Non sono stati rilevati errori. La cache dei banner nel database è stata aggiornata.";
$GLOBALS['strBannerCacheDifferencesFound'] = "Il controllo della cache dei banner del database ha trovato che la cache non è aggiornata e deve essere ricalcolata. Clicca qui per aggiornare automaticamente la cache.";
$GLOBALS['strBannerCacheFixed'] = "La ricostruzione della cache dei banner nel catabase è stata completata con successo. La tua cache del database è ora aggiornata.";
$GLOBALS['strBannerCacheRebuildButton'] = "Ricostruisci";
$GLOBALS['strRebuildDeliveryCache']			= "Ricostruisci la cache di consegna";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Cache di consegna";
$GLOBALS['strAge']				= "Età";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n	Per memorizzare la cache di consegna è utilizzata la memoria condivisa.\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n	Per memorizzare la cache di consegna si sta utilizzando il database.\\n";
$GLOBALS['strDeliveryCacheFiles']		= "\\n	Per memorizzare la cache di consegna sono utilizzati dei file sul server.\\n";


// Storage
$GLOBALS['strStorage']				= "Memorizzazione";
$GLOBALS['strMoveToDirectory']			= "Sposta le immagini memorizzate nel database in una cartella";
$GLOBALS['strStorageExplaination']		= "\\nLe immagini utilizzate nei banner locali vengono memorizzate nel database o in una directory sul server web. Memorizzare\\nle immagini in una directory riduce il carico di lavoro eseguito dal database e, di conseguenza, aumenta la velocità\\ndel sistema.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Codifica";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Converti da questa codifica:";
$GLOBALS['strEncodingConvert']          = "Converti";
$GLOBALS['strEncodingConvertTest']      = "Prova la conversione";
$GLOBALS['strConvertThese']             = "Se continui, i seguenti dati saranno cambiati";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	Hai abilitato il <i>formato compatto</i> delle statistiche, ma le vecchie statistiche sono ancora nel formato esteso.\\n	Vuoi convertire le statistiche estese nel nuovo formato compatto?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Ricerca aggiornamenti in corso. Attendere prego...";
$GLOBALS['strAvailableUpdates']			= "Aggiornamenti disponibili";
$GLOBALS['strDownloadZip']			= "Download (.zip)";
$GLOBALS['strDownloadGZip']			= "Download (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "\\n    Per motivi sconosciuti non è possibile scaricare le informazioni<br />\\n	sui possibili aggiornamenti disponibili. Riprovare più tardi, grazie.\\n";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Per sapere se è disponibile una versione più recente, collegati al nostro sito.\\n";

$GLOBALS['strClickToVisitWebsite']		= "Clicca qui per visitare il nostro sito";
$GLOBALS['strCurrentlyUsing'] 			= "Attualmente stai utilizzando";
$GLOBALS['strRunningOn']				= "in esecuzione su";
$GLOBALS['strAndPlain']					= "e";


// Stats conversion
$GLOBALS['strConverting']			= "Conversione";
$GLOBALS['strConvertingStats']			= "Conversione statistiche...";
$GLOBALS['strConvertStats']			= "Converti statistiche";
$GLOBALS['strConvertAdViews']			= "Visualizzazioni convertite,";
$GLOBALS['strConvertAdClicks']			= "Click convertiti...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "Niente da convertire...";
$GLOBALS['strConvertFinished']			= "Operazione terminata...";

$GLOBALS['strConvertExplaination']		= "\\n	Stai utilizzando il formato compatto delle statistiche, ma ci sono ancora alcune <br />\\n	statistiche nel formato dettagliato. Finché le statistiche dettagliare non <br />\\n	saranno convertite nel formato compatto, esse non verranno utilizzate.  <br />\\n	Prima di convertire le statistiche, esegui un backup del database!  <br />\\n	Vuoi convertire le statistiche dettagliate nel nuovo formato compatto? <br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	Tutte le statistiche dettagliate verranno ora convertite nel formato compatto. <br />\\n	La durata del processo dipende dal numero di visualizzazioni registrate, e potrà <br />\\n	durare alcuni minuti. Attendi il completamento della conversione prima di visitare <br />\\n	altre pagine. Qui sotto vedrai il registro delle modifiche fatte al database. <br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	La conversione delle restanti statistiche dettagliate è stata completata <br />\\n	con successo e 	i dati sono nuovamente disponibili. Qui sotto vedrai il registro\\n	delle modifiche fatte al database. <br />\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "La manutenzione automatica è disabilitata.";
$GLOBALS['strAutoMaintenanceEnabled']  = "La manutenzione automatica è abilitata. Per ottenere le performance migliori ti consigliamo di <a href='settings-admin.php'>disabilitare la manutenzione automatica</a>.";
$GLOBALS['strScheduledMaintenance']         = "La manutenzione programmata sembra essere pianificata correttamente.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "<strong>La manutenzione programmata non è stata eseguita nell'ultima ora. Potrebbe darsi che non sia stata configurata correttamente.</strong>";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "La manutenzione automatica è abilitata e sarà eseguita circa ogni ora.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Delivery Limitations";
$GLOBALS['strAllBannerChannelCompiled'] = "Sono stati ricompilati tutti i valori compilati di limitazioni banner / canale.";
$GLOBALS['strBannerChannelResult']      = "Seguono i risultati della validazione delle limitazioni banner/canale";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Tutte le limitazioni compilate del canale sono valide";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Tutte le limitazioni compilate del banner sono valide";
$GLOBALS['strErrorsFound']              = "Sono stati rilevati degli errori";
$GLOBALS['strRepairCompiledLimitations']        = "Sono state trovate alcune inconsistenze, puoi ripararle usando il bottone seguente. Ricompilerai la limitazione banner / canale nel sistema<br />";
$GLOBALS['strRecompile']                = "Ricompila";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "In alcune circostanze il motore di distribuzione è in disaccordo con la lista di controllo degli accessi per banner e canali. Clicca sul link sotto per convalidare la lista di controllo degli accessi.";
$GLOBALS['strCheckACLs'] = "Controlla la lista di controllo degli accessi";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "In alcune circostanze il motore di distribuzione è in disaccordo con i codici accodati. Usa il seguente collegamento per convalidare nel database i codici accodati.";
$GLOBALS['strCheckAppendCodes']         = "Controlla i codici accodati";
$GLOBALS['strAppendCodesRecompiled']    = "Tutti i codici accodati sono stati ricalcolati";
$GLOBALS['strAppendCodesResult']        = "Ecco i risultati di convalida dei codici accodati";
$GLOBALS['strAppendCodesValid']         = "Tutti i codici accodati sono validi";
$GLOBALS['strRepairAppenedCodes']       = "Sono state trovate alcune inconsistenze, puoi ripararle usando il bottone seguente. Ricompilerai i codici accodati per ogni tracker del sistema";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "No problems found";

$GLOBALS['strMenus']                    = "Menus";
$GLOBALS['strMenusPrecis']              = "Rebuild the menu cache";
$GLOBALS['strMenusCachedOk']            = "Menu cache has been rebuilt";
$GLOBALS['strMenusCachedErr']           = "Errors while rebuilding Menu cache";

?>
