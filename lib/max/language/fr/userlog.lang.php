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

$GLOBALS['strDeliveryEngine']				= "Moteur de distribution";
$GLOBALS['strMaintenance']					= "Maintenance";
$GLOBALS['strAdministrator']				= "Administrateur";

// Audit
$GLOBALS['strLogging']                      = "Journalisation";
$GLOBALS['strAudit']                        = "Journal d'audit";
$GLOBALS['strDebugLog']                     = "Journal de débogage";
$GLOBALS['strEvent']                        = "Évènement";
$GLOBALS['strTimestamp']                    = "Date et heure";
$GLOBALS['strDeleted']                      = "supprimé(e)";
$GLOBALS['strInserted']                     = "inséré(e)";
$GLOBALS['strUpdated']                      = "mis(e) à jour";
$GLOBALS['strDelete']                       = "Delete";
$GLOBALS['strInsert']                       = "Insérer";
$GLOBALS['strUpdate']                       = "Mettre à jour";
$GLOBALS['strHas']                          = "contient";
$GLOBALS['strFilters']                      = "Filtres";
$GLOBALS['strAdvertiser']                   = "Annonceur";
$GLOBALS['strPublisher']                    = "Site web";
$GLOBALS['strCampaign']                     = "Campaign";
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strType']                         = "Type";
$GLOBALS['strAction']                       = "Action";
$GLOBALS['strParameter']                    = "Paramètre";
$GLOBALS['strValue']                        = "Valeur";
$GLOBALS['strDetailedView']                 = "Affichage détaillé";
$GLOBALS['strReturnAuditTrail']             = "Retourner à la piste d'audit";
$GLOBALS['strAuditTrail']                   = "Piste d'audit";
$GLOBALS['strMaintenanceLog']               = "Journal de maintenance";
$GLOBALS['strAuditResultsNotFound']         = "Aucun évènement trouvé correspondant aux critères sélectionnés";
$GLOBALS['strCollectedAllEvents']           = "Tous les évènements";
$GLOBALS['strClear']                        = "Vider";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Notification d'activation de la campagne {id} envoyée par e-mail";

?>
