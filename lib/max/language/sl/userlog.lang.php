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

$GLOBALS['strDeliveryEngine']				= "Orodje za dostavo";
$GLOBALS['strMaintenance']					= "Vzdrževanje";
$GLOBALS['strAdministrator']				= "Administrator";

// Audit
$GLOBALS['strLogging']                      = "Beleženje";
$GLOBALS['strAudit']                        = "Preglej beležko";
$GLOBALS['strDebugLog']                     = "Debug beležka";
$GLOBALS['strEvent']                        = "Dogodek";
$GLOBALS['strTimestamp']                    = "Časovni žig";
$GLOBALS['strDeleted']                      = "izbrisano";
$GLOBALS['strInserted']                     = "vstavljeno";
$GLOBALS['strUpdated']                      = "posodobljeno";
$GLOBALS['strDelete']                       = "Izbriši";
$GLOBALS['strInsert']                       = "Vstavi";
$GLOBALS['strUpdate']                       = "Posodobi";
$GLOBALS['strHas']                          = "ima";
$GLOBALS['strFilters']                      = "Filtri";
$GLOBALS['strAdvertiser']                   = "Oglaševalec";
$GLOBALS['strPublisher']                    = "Spletna stran";
$GLOBALS['strCampaign']                     = "Kampanja";
$GLOBALS['strZone']                         = "Področje";
$GLOBALS['strType']                         = "Tip";
$GLOBALS['strAction']                       = "Dejanje";
$GLOBALS['strParameter']                    = "Parameter";
$GLOBALS['strValue']                        = "Vrednost";
$GLOBALS['strDetailedView']                 = "Podroben pogled";
$GLOBALS['strReturnAuditTrail']             = "Vrnitev na Pregledno pot";
$GLOBALS['strAuditTrail']                   = "Pregledna pot (audit trail)";
$GLOBALS['strMaintenanceLog']               = "Vzdrževalna beležka";
$GLOBALS['strAuditResultsNotFound']         = "Po izbranih kriterijih ni bilo mogoče najti zadetkov";
$GLOBALS['strCollectedAllEvents']           = "Vsi dogodki";
$GLOBALS['strClear']                        = "Počisti";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Objava o aktivaciji kampanje {id} se pošlje preko e-pošte";

?>
