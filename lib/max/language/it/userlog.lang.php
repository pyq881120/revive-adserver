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

$GLOBALS['strDeliveryEngine']				= "Motore di Distribuzione";
$GLOBALS['strMaintenance']					= "Manutenzione";
$GLOBALS['strAdministrator']				= "Amministratore";

// Audit
$GLOBALS['strLogging']                      = "Logging";
$GLOBALS['strAudit']                        = "Audit Log";
$GLOBALS['strDebugLog']                     = "Log di debug";
$GLOBALS['strEvent']                        = "Evento";
$GLOBALS['strTimestamp']                    = "Timestamp";
$GLOBALS['strDeleted']                      = "cancellato";
$GLOBALS['strInserted']                     = "inserito";
$GLOBALS['strUpdated']                      = "aggiornato";
$GLOBALS['strDelete']                       = "Elimina";
$GLOBALS['strInsert']                       = "Inserisci";
$GLOBALS['strUpdate']                       = "Aggiorna";
$GLOBALS['strHas']                          = "era";
$GLOBALS['strFilters']                      = "Filtri";
$GLOBALS['strAdvertiser']                   = "Inserzionista";
$GLOBALS['strPublisher']                    = "Sito";
$GLOBALS['strCampaign']                     = "Campagna";
$GLOBALS['strZone']                         = "Zona";
$GLOBALS['strType']                         = "Tipo";
$GLOBALS['strAction']                       = "Azione";
$GLOBALS['strParameter']                    = "Parametro";
$GLOBALS['strValue']                        = "Valore";
$GLOBALS['strDetailedView']                 = "Visualizzazione dettagliata";
$GLOBALS['strReturnAuditTrail']             = "Torna a Audit Trail";
$GLOBALS['strAuditTrail']                   = "Audit Trail";
$GLOBALS['strMaintenanceLog']               = "Log di manutenzione";
$GLOBALS['strAuditResultsNotFound']         = "Nessun evento trovato corrispondente ai criteri selezionati";
$GLOBALS['strCollectedAllEvents']           = "Tutti gli eventi";
$GLOBALS['strClear']                        = "Pulisci";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Notifica attivazione per campagna {id} spedito via email";

?>
