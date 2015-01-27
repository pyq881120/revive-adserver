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

// Set translation strings

$GLOBALS['strDeliveryEngine']				= "Bannerauslieferung (Programm)";
$GLOBALS['strMaintenance']					= "Wartung (Programm)";
$GLOBALS['strAdministrator']				= "Administration (Programm)";

// Audit
$GLOBALS['strLogging']                      = "Protokollierung";
$GLOBALS['strAudit']                        = "Prüfungsprotokoll";
$GLOBALS['strDebugLog']                     = "Debug-Protokoll";
$GLOBALS['strEvent']                        = "Ereignis";
$GLOBALS['strTimestamp']                    = "Uhrzeit";
$GLOBALS['strDeleted']                      = "gelöscht";
$GLOBALS['strInserted']                     = "eingefügt";
$GLOBALS['strUpdated']                      = "geändert";
$GLOBALS['strInsert']                       = "Einfügen";
$GLOBALS['strUpdate']                       = "Ändern";
$GLOBALS['strHas']                          = "hat";
$GLOBALS['strFilters']                      = "Filter";
$GLOBALS['strAdvertiser']                   = "Werbetreibender";
$GLOBALS['strPublisher']                    = "Webseite";
$GLOBALS['strType']                         = "Art";
$GLOBALS['strDetailedView']                 = "Erweiterte Ansicht";
$GLOBALS['strReturnAuditTrail']             = "Zurück zum Prüfprotokoll";
$GLOBALS['strAuditTrail']                   = "Prüfprotokoll";
$GLOBALS['strMaintenanceLog']               = "Wartungsprotokoll";
$GLOBALS['strAuditResultsNotFound']         = "Keine Ereignisse mit den ausgewählten Suchkriterien gefunden";
$GLOBALS['strCollectedAllEvents']           = "Alle Ereignisse";
$GLOBALS['strClear']                        = "Leeren";

$GLOBALS['strUserlog'] = array (
	phpAds_actionAdvertiserReportMailed 	=> "Report for advertiser {id} send by email",
	phpAds_actionActiveCampaign				=> "Campaign {id} activated",
	phpAds_actionAutoClean					=> "Auto clean of database",
	phpAds_actionBatchStatistics			=> "Statistics compiled",
	phpAds_actionDeactivationMailed			=> "Deactivation notification for campaign {id} send by email",
	phpAds_actionDeactiveCampaign			=> "Campaign {id} deactivated",
	phpAds_actionPriorityCalculation		=> "Priority recalculated",
	phpAds_actionPublisherReportMailed 		=> "Report for website {id} send by email",
	phpAds_actionWarningMailed				=> "Deactivation warning for campaign {id} send by email"
);
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Benachrichtigungsmail über die Aktivierung der Kampagne {id} versendet";

?>
