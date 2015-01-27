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

$GLOBALS['strDeliveryEngine']				= "Delivery Engine";
$GLOBALS['strMaintenance']					= "Vedligholdelse";
$GLOBALS['strAdministrator']				= "Administrator";

// Audit
$GLOBALS['strLogging']                      = "Logging";
$GLOBALS['strAudit']                        = "Audit Log";
$GLOBALS['strDebugLog']                     = "Debug Log";
$GLOBALS['strEvent']                        = "Event";
$GLOBALS['strTimestamp']                    = "Tidsstempel";
$GLOBALS['strDeleted']                      = "Slettet";
$GLOBALS['strInserted']                     = "indsat";
$GLOBALS['strUpdated']                      = "opdateret";
$GLOBALS['strDelete']                       = "Slet";
$GLOBALS['strInsert']                       = "Indsæt";
$GLOBALS['strUpdate']                       = "Opdater";
$GLOBALS['strHas']                          = "has";
$GLOBALS['strFilters']                      = "Filtre";
$GLOBALS['strAdvertiser']                   = "Annoncør";
$GLOBALS['strPublisher']                    = "Webside";
$GLOBALS['strCampaign']                     = "Kampagne";
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strType']                         = "Type";
$GLOBALS['strAction']                       = "Aktion";
$GLOBALS['strParameter']                    = "Parametre";
$GLOBALS['strValue']                        = "Værdi";
$GLOBALS['strDetailedView']                 = "Detaljeret Oversigt";
$GLOBALS['strReturnAuditTrail']             = "Tilbage til Handlings Log";
$GLOBALS['strAuditTrail']                   = "Handlings Log";
$GLOBALS['strMaintenanceLog']               = "Vedligeholdelses log";
$GLOBALS['strAuditResultsNotFound']         = "Ingen handlinger fundet, der matcher valgte kriterier";
$GLOBALS['strCollectedAllEvents']           = "Alle handlinger";
$GLOBALS['strClear']                        = "Ryd";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Kampagne deaktiveret";

?>
