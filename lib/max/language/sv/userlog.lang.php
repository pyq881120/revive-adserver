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

$GLOBALS['strDeliveryEngine']				= "Visningsmotor";
$GLOBALS['strMaintenance']					= "Underhåll";
$GLOBALS['strAdministrator']				= "Administratör";

// Audit
$GLOBALS['strLogging']                      = "Loggning";
$GLOBALS['strAudit']                        = "Auditlogg";
$GLOBALS['strDebugLog']                     = "Debuglogg";
$GLOBALS['strEvent']                        = "Händelse";
$GLOBALS['strTimestamp']                    = "Tidstämpel";
$GLOBALS['strDeleted']                      = "raderade";
$GLOBALS['strInserted']                     = "lade till";
$GLOBALS['strUpdated']                      = "aktualiserade";
$GLOBALS['strDelete']                       = "Radera";
$GLOBALS['strInsert']                       = "Lägg till";
$GLOBALS['strUpdate']                       = "Uppdatera";
$GLOBALS['strHas']                          = "har";
$GLOBALS['strFilters']                      = "Filter";
$GLOBALS['strAdvertiser']                   = "Annonsör";
$GLOBALS['strPublisher']                    = "Webbsida";
$GLOBALS['strCampaign']                     = "Kampanj";
$GLOBALS['strZone']                         = "Zon";
$GLOBALS['strType']                         = "Typ";
$GLOBALS['strAction']                       = "Handling";
$GLOBALS['strValue']                        = "Värde";
$GLOBALS['strDetailedView']                 = "Detaljerad visning";
$GLOBALS['strReturnAuditTrail']             = "Återvänd till Auditlista";
$GLOBALS['strAuditTrail']                   = "Auditlista";
$GLOBALS['strMaintenanceLog']               = "Underhållslogg";
$GLOBALS['strAuditResultsNotFound']         = "Inga händelser passar till valda kriterier";
$GLOBALS['strCollectedAllEvents']           = "Alla händelser";
$GLOBALS['strClear']                        = "Rensa";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Aktiveringsmeddelande för kampanj {id} skickat per epost";

?>
