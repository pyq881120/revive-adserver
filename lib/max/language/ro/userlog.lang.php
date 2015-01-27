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

$GLOBALS['strDeliveryEngine']				= "Motor de Livrare";
$GLOBALS['strMaintenance']					= "Întreţinere";

// Audit
$GLOBALS['strLogging']                      = "Înregistrare în Jurnal";
$GLOBALS['strAudit']                        = "Jurnal Bilanţ";
$GLOBALS['strDebugLog']                     = "Jurnal Depanare";
$GLOBALS['strEvent']                        = "Eveniment";
$GLOBALS['strDeleted']                      = "şters";
$GLOBALS['strInserted']                     = "adăugat";
$GLOBALS['strUpdated']                      = "actualizat";
$GLOBALS['strDelete']                       = "Şterge";
$GLOBALS['strInsert']                       = "Adaugă";
$GLOBALS['strUpdate']                       = "Actualizează";
$GLOBALS['strHas']                          = "are";
$GLOBALS['strFilters']                      = "Filtre";
$GLOBALS['strCampaign']                     = "Campanie";
$GLOBALS['strZone']                         = "Zonă";
$GLOBALS['strType']                         = "Tip";
$GLOBALS['strAction']                       = "Acţiune";
$GLOBALS['strParameter']                    = "Parametru";
$GLOBALS['strValue']                        = "Valoare";
$GLOBALS['strDetailedView']                 = "Vizualizare Detaliată";
$GLOBALS['strReturnAuditTrail']             = "Întoarcere la Urmărirea Bilanţului";
$GLOBALS['strAuditTrail']                   = "Urmărirea Bilanţului";
$GLOBALS['strMaintenanceLog']               = "Jurnal întreţinere";
$GLOBALS['strAuditResultsNotFound']         = "Nu a fost găsit nici un eveniment care să corespundă criteriilor selectate.";
$GLOBALS['strCollectedAllEvents']           = "Toate evenimentele";
$GLOBALS['strClear']                        = "Curăţă";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Notificarea de activare pentru campania {id} a fost trimisă prin email";

?>
