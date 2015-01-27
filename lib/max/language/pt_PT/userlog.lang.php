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

$GLOBALS['strDeliveryEngine']				= "Engine de entrega";
$GLOBALS['strMaintenance']					= "Manutenção";
$GLOBALS['strAdministrator']				= "Administrador";

// Audit
$GLOBALS['strLogging']                      = "Logs";
$GLOBALS['strAudit']                        = "Log de auditoria";
$GLOBALS['strDebugLog']                     = "Log de depuração";
$GLOBALS['strEvent']                        = "Evento";
$GLOBALS['strTimestamp']                    = "Hora";
$GLOBALS['strDeleted']                      = "removido";
$GLOBALS['strInserted']                     = "inserido";
$GLOBALS['strUpdated']                      = "atualizado";
$GLOBALS['strDelete']                       = "Remover";
$GLOBALS['strInsert']                       = "Inserir";
$GLOBALS['strUpdate']                       = "Atualizar";
$GLOBALS['strHas']                          = "tem";
$GLOBALS['strFilters']                      = "Filtros";
$GLOBALS['strAdvertiser']                   = "Anunciante";
$GLOBALS['strPublisher']                    = "Site";
$GLOBALS['strCampaign']                     = "Campanha";
$GLOBALS['strZone']                         = "Zona";
$GLOBALS['strType']                         = "Tipo";
$GLOBALS['strAction']                       = "Ação";
$GLOBALS['strParameter']                    = "Parâmetro";
$GLOBALS['strValue']                        = "Valor";
$GLOBALS['strDetailedView']                 = "Visão detalhada";
$GLOBALS['strReturnAuditTrail']             = "Voltar para Auditoria de percurso";
$GLOBALS['strAuditTrail']                   = "Rastros de auditoria";
$GLOBALS['strMaintenanceLog']               = "Log de manutenção";
$GLOBALS['strAuditResultsNotFound']         = "Nenhum evento encontrado com os critérios informados";
$GLOBALS['strCollectedAllEvents']           = "Todos eventos";
$GLOBALS['strClear']                        = "Limpar";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Relatório para o site {id} enviado por e-mail";

?>
