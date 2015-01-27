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

$GLOBALS['strDeliveryEngine']				= "Pristatymo variklis";
$GLOBALS['strMaintenance']					= "Aptarnavimas";
$GLOBALS['strAdministrator']				= "Administratorius";

// Audit
$GLOBALS['strLogging']                      = "Prisijungiama";
$GLOBALS['strAudit']                        = "Patikrinimo registras";
$GLOBALS['strEvent']                        = "Įvykis";
$GLOBALS['strDeleted']                      = "ištrintas";
$GLOBALS['strInserted']                     = "įterptas";
$GLOBALS['strUpdated']                      = "atnaujintas";
$GLOBALS['strDelete']                       = "Ištrinti";
$GLOBALS['strInsert']                       = "Įterpti";
$GLOBALS['strUpdate']                       = "Atnaujinti";
$GLOBALS['strHas']                          = "turi";
$GLOBALS['strFilters']                      = "Filtrai";
$GLOBALS['strAdvertiser']                   = "Reklamos skelbėjas";
$GLOBALS['strPublisher']                    = "Internetinis puslapis";
$GLOBALS['strCampaign']                     = "Kampanija";
$GLOBALS['strZone']                         = "Zona";
$GLOBALS['strType']                         = "Tipas";
$GLOBALS['strAction']                       = "Veiksmas";
$GLOBALS['strParameter']                    = "Parametrai";
$GLOBALS['strValue']                        = "Vertė";
$GLOBALS['strDetailedView']                 = "Detalus vaizdas";
$GLOBALS['strReturnAuditTrail']             = "Grįžti prie Audit Trail";
$GLOBALS['strMaintenanceLog']               = "techninio aptarnavimo registras";
$GLOBALS['strAuditResultsNotFound']         = "Jokių įvykių pagal įvestus kriterijus nerasta";
$GLOBALS['strCollectedAllEvents']           = "Visi įvykiai";
$GLOBALS['strClear']                        = "Ištrinti";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Aktyvacijos pranešimas apie kampaniją {id} išsiųstas el. paštu";

?>
