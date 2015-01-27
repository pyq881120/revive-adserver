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

$GLOBALS['strDeliveryEngine']				= "Dostarczanie";
$GLOBALS['strMaintenance']					= "Utrzymanie";
$GLOBALS['strAdministrator']				= "Administrator";

// Audit
$GLOBALS['strLogging']                      = "Protokołowanie";
$GLOBALS['strAudit']                        = "Log Audytu";
$GLOBALS['strDebugLog']                     = "Log debugowania";
$GLOBALS['strEvent']                        = "Zdarzenie";
$GLOBALS['strTimestamp']                    = "Znacznik czasowy";
$GLOBALS['strDeleted']                      = "usunięto";
$GLOBALS['strInserted']                     = "dodano";
$GLOBALS['strUpdated']                      = "aktualizowano";
$GLOBALS['strDelete']                       = "Delete";
$GLOBALS['strInsert']                       = "Dodaj";
$GLOBALS['strUpdate']                       = "Aktualizuj";
$GLOBALS['strHas']                          = "has";
$GLOBALS['strFilters']                      = "Filtry";
$GLOBALS['strAdvertiser']                   = "Reklamodawca";
$GLOBALS['strPublisher']                    = "Strona";
$GLOBALS['strCampaign']                     = "Campaign";
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strType']                         = "Typ";
$GLOBALS['strAction']                       = "Action";
$GLOBALS['strParameter']                    = "Parametr";
$GLOBALS['strValue']                        = "Wartość";
$GLOBALS['strDetailedView']                 = "Szczegóły";
$GLOBALS['strReturnAuditTrail']             = "Powrót do Audytu";
$GLOBALS['strAuditTrail']                   = "Audyt";
$GLOBALS['strMaintenanceLog']               = "Log konserwacji";
$GLOBALS['strAuditResultsNotFound']         = "Brak wyników dla wybranych kryteriów.";
$GLOBALS['strCollectedAllEvents']           = "Wszystkie wyniki";
$GLOBALS['strClear']                        = "Wyczyść";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Informacja o aktywacji kampanii {id} została wysłana e-mailem";

?>
