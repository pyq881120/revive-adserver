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
$GLOBALS['strChooseSection']			= "Auswahlbereich";
$GLOBALS['strAppendCodes']              = "Code-Anhang";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>Der regelmäßige Wartungslauf ist in der vergangenen Stunde nicht gelaufen, d.h. Sie haben ihn noch nicht richtig eingerichtet.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>Der regelmäßige Wartungslauf ist korrekt eingerichtet.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>Der automatische Wartungslauf läuft korrekt.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Der automatische Wartungslauf ist jedoch immer noch aktiviert. Für eine bestmögliche Ausführungsgeschwindigkeit sollten Sie den <a href='account-settings-maintenance.php'>automatischen Wartungslauf deaktivieren</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Neuberechnung der Prioritäten";
$GLOBALS['strHighPriorityCampaigns']		= "Kampagnen mit hoher Priorität";
$GLOBALS['strAdViewsAssigned']			= "Festgelegte AdViews";
$GLOBALS['strLowPriorityCampaigns']		= " Kampagnen mit geringer Priorität ";
$GLOBALS['strPredictedAdViews']			= "Prognostizierte AdViews";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "Die Prognose basiert auf den Daten dieser und der vergangenen Woche. ";
$GLOBALS['strPriorityBasedLastDays']		= "Die Prognose basiert auf den Daten der letzten Tage. ";
$GLOBALS['strPriorityBasedYesterday']		= "Die Prognose basiert auf den Daten von gestern. ";
$GLOBALS['strPriorityNoData']			= "Für eine zuverlässige Prognose über die heute mögliche Anzahl von AdViews stehen nicht ausreichend Daten zur Verfügung. Die Festlegung der Prioritäten wird daher nur auf in Echtzeit erstellte Statistiken gestützt sein. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Es werden ausreichend AdViews zur Verfügung stehen, um die Kampagnen mit hoher Priorität bedienen zu können. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Es ist ungewiß, ob ausreichend AdViews zur Verfügung stehen werden, um die Anforderungen durch Kampagnen mit hoher Priorität befriedigen zu können.";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Überprüfung des Banner-Cache";
$GLOBALS['strRebuildBannerCache']		= "Bannercache erneuern";
$GLOBALS['strBannerCacheErrorsFound'] = "Die Cache-Überprüfung hat einige Fehler gefunden. Diese Banner werden nicht funktionieren bis das Problem manuell behoben wurde.";
$GLOBALS['strBannerCacheOK'] = "Es wurden keine Fehler gefunden. Der Banner-Cache ist aktuell.";
$GLOBALS['strBannerCacheDifferencesFound'] = "Die Banner-Cache Überprüfung hat ergeben das einige Einträge nicht aktuell sind. Klicken Sie hier um den Cache automatisch zu aktualisieren.";
$GLOBALS['strBannerCacheFixed'] = "Die Aktualisierung wurde erfolgreich abgeschlossen.";
$GLOBALS['strBannerCacheRebuildButton'] = "Erneuern";
$GLOBALS['strRebuildDeliveryCache']			= "Cache wird erneuert";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Cache für Bannerauslieferung";
$GLOBALS['strAge']				= "Alter";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n	Der gemeinsam genutzte Speicher wird vom Cache für Bannerauslieferung benutzt.";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n	Die Datenbank wird zur Zeit vom Cache für Bannerauslieferung benutzt.";
$GLOBALS['strDeliveryCacheFiles']		= "\\n	Der Cache für Bannerauslieferung wird zur Zeit in mehrere Dateien gespeichert.";


// Storage
$GLOBALS['strStorage']				= "Speicherung";
$GLOBALS['strMoveToDirectory']			= "Bilder aus der Datenbank in ein Verzeichnis verschieben ";
$GLOBALS['strStorageExplaination']		= "\\n	Bilddateien für lokale Banner werden in der Datenbank oder in einem lokalen Verzeichnis gespeichert.\\n	Das Speichern in einem lokalen Verzeichnis anstelle in der Datenbank vermindert die Ladezeit.";

// Encoding
$GLOBALS['strEncoding']                 = "Kodierung";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Umwandeln aus der Kodierung:";
$GLOBALS['strEncodingConvert']          = "Konvertieren";
$GLOBALS['strEncodingConvertTest']      = "Konversion prüfen";
$GLOBALS['strConvertThese']             = "Die folgenden Daten werden verändert wenn Sie fortfahren";


// Storage
$GLOBALS['strStatisticsExplaination']		= "Sie haben in den Einstellungen die <i>kompakten Statistiken</i> aktiviert, Ihre bisherigen Statistiken liegen noch im ausführlichen Format vor. Möchten Sie Ihre diese Statistiken ebenfalls in das neue, kompakte Format umwandeln?";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Suche nach neuen Updates. Bitte warten...";
$GLOBALS['strAvailableUpdates']			= "Vorhandene Updates";
$GLOBALS['strDownloadZip']			= "Download (.zip)";
$GLOBALS['strDownloadGZip']			= "Download (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "\\n    Aus unbekannten Gründen ist es nicht möglich, nach Informationen <br />\\n	zu neuen Updates zu prüfen. Versuchen Sie es später noch einmal.\\n";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";

$GLOBALS['strCheckForUpdatesDisabled'] = "<b>Die Prüfung auf Updates ist ausgeschaltet. Bitte aktivieren Sie die Prüfung auf der <a href='account-settings-update.php'>Update Einstellungsseite</a>.</b>";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Informationen über neue Versionen .befinden sich auf unserer Webseite.";

$GLOBALS['strClickToVisitWebsite']		= "Zu unserer Webseite ";
$GLOBALS['strCurrentlyUsing'] 			= "Sie nutzen derzeit";
$GLOBALS['strRunningOn']				= "laufend auf";
$GLOBALS['strAndPlain']					= "und";


// Stats conversion
$GLOBALS['strConverting']			= "Konvertierung";
$GLOBALS['strConvertingStats']			= "Statistiken werden konvertiert...";
$GLOBALS['strConvertStats']			= "Statistiken konvertieren";
$GLOBALS['strConvertAdViews']			= "AdViews sind konvertiert,";
$GLOBALS['strConvertAdClicks']			= "AdClicks sind konvertiert...";
$GLOBALS['strConvertAdConversions']			= "AdConversions werden konvertiert...";
$GLOBALS['strConvertNothing']			= "Nichts zu konvertieren...";
$GLOBALS['strConvertFinished']			= "Fertig...";

$GLOBALS['strConvertExplaination']		= "\\n	Für die statistische Auswertung verwenden Sie kompakte Darstellung. Es liegen <br />\\n	noch ältere Statistiken in detailliertem Format vor. Solange diese detaillierten Statistiken <br />\\n	nicht in das kompakte Format konvertiert sind, können sie auf dieser Seite nicht angezeigt<br />\\n	werden. Eine Sicherung der Datenbank vor dem Konvertierungslauf wird empfohlen!  <br />\\n	Wollen Sie die detaillierten Statistiken in das kompakte Format umwandeln? <br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	Alle verbliebene Statistiken im detaillierten Format werden in das kompakte umgewandelt. <br />\\n	Die Dauer des Vorganges ist abhängig von der Anzahl protokollierten Vorgänge. Es kann <br />\\n	einige Minuten dauern. Bitte warten Sie bis zum Ende des Konvertierungslauf, bevor Sie <br />\\n	andere Seiten aufrufen. Unten wird ein Protokoll der vorgenommenen Datenbankmodifikationen angezeigt. <br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	Der Konvertierungslauf war erfolgreich.  Die Daten stehen nun wieder zur\\n	Verfügung. Nachfolgend ist ein Protokoll aller vorgenommenen Datenbankmodifikationen.<br />\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "Der automatische Wartungslauf ist deaktiviert.";
$GLOBALS['strAutoMaintenanceEnabled']  = "Der automatische Wartungslauf ist aktiviert. Für eine bestmögliche Ausführungsgeschwindigkeit sollten Sie den <a href='settings-admin.php'>automatischen Wartungslauf deaktivieren</a>.";
$GLOBALS['strScheduledMaintenance']         = "Der regelmäßige Wartungslauf scheint korrekt eingerichtet zu sein.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "Der regelmäßige Wartungslauf ist in der vergangenen Stunde nicht gelaufen, dies könnte bedeuten das Sie ihn noch nicht richtig eingerichtet haben.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Der automatische Wartungslauf ist aktiviert, aber noch nicht ausgeführt worden. Bitte beachten Sie, das der automatische Wartungslauf nur durch die Auslieferung von Werbemitteln ausgeführt wird.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "Der automatische Wartungslauf ist aktiviert und wird den Wartungslauf jede Stunde einmal starten.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Delivery Limitations";
$GLOBALS['strAllBannerChannelCompiled'] = "Alle Auslieferungsbeschränkungen der Banner und Gruppen wurden neu übersetzt.";
$GLOBALS['strBannerChannelResult']      = "Hier die Ergebnisse der Übersetzung und Überprüfung der Auslieferungsbeschränkungen der Banner und Gruppen";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Alle Auslieferungsbeschränkungen der Gruppen ist gültig.";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Alle Auslieferungsbeschränkungen der Banner ist gültig.";
$GLOBALS['strErrorsFound']              = "Fehler gefunden";
$GLOBALS['strRepairCompiledLimitations']        = "Obige Inkonsistenzen wurden ermittelt. Sie können diese reparieren durch die Verwendung des unten stehenden Buttons. Hierbei wird das System die Auslieferungsbeschränkungen jedes Banners und jeder Gruppe im System neu übersetzen.<br />";
$GLOBALS['strRecompile']                = "Neu übersetzen";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "Unter manchen Umständen kann das Auslieferungsmodul die gespeicherten ACLs der Banner und Gruppen nicht korrekt verarbeiten. Verwenden Sie den folgenden Link um die in der Datenbank gespeicherten ACLs zu überprüfen.";
$GLOBALS['strCheckACLs'] = "ACLs überprüfen";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "Unter manchen Umständen kann das Auslieferungsmodul den gespeicherten Code-Anhang der Tracker nicht korrekt verarbeiten. Verwenden Sie den folgenden Link um die in der Datenbank gespeicherten Codes zu überprüfen.";
$GLOBALS['strCheckAppendCodes']         = "Code Anhänge prüfen";
$GLOBALS['strAppendCodesRecompiled']    = "Alle übersetzten Code Anhänge wurden neu übersetzt";
$GLOBALS['strAppendCodesResult']        = "Hier sind die Ergebnisse der Überprüfung des Code Anhänge";
$GLOBALS['strAppendCodesValid']         = "Alle Tracker Code Anhänge sind korrekt";
$GLOBALS['strRepairAppenedCodes']       = "Obige Inkonsistenzen wurden ermittelt. Sie können diese reparieren durch die Verwendung des unten stehenden Buttons. Hierbei wird das System die Code Anhänge jedes Trackers im System neu übersetzen.";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "Keine Probleme gefunden";

$GLOBALS['strMenus']                    = "Menüs";
$GLOBALS['strMenusPrecis']              = "Den Menü-Cache wiederaufbauen";
$GLOBALS['strMenusCachedOk']            = "Der Menü-Cache wurde wiederaufgebaut";
$GLOBALS['strMenusCachedErr']           = "Fehler beim Wiederaufbau des Menü-Caches";

?>
