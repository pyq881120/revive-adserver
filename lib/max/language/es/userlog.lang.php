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

$GLOBALS['strDeliveryEngine']				= "Motor de entrega";
$GLOBALS['strMaintenance']					= "Mantenimiento";
$GLOBALS['strAdministrator']				= "Administrador";

// Audit
$GLOBALS['strLogging']                      = "Grabando";
$GLOBALS['strAudit']                        = "Auditar Registro";
$GLOBALS['strDebugLog']                     = "Depurar Registro";
$GLOBALS['strEvent']                        = "Evento";
$GLOBALS['strTimestamp']                    = "Timestamp";
$GLOBALS['strDeleted']                      = "borrado";
$GLOBALS['strInserted']                     = "insertado";
$GLOBALS['strUpdated']                      = "actualizado";
$GLOBALS['strDelete']                       = "Delete";
$GLOBALS['strInsert']                       = "Insertar";
$GLOBALS['strUpdate']                       = "Actualizar";
$GLOBALS['strHas']                          = "tiene";
$GLOBALS['strFilters']                      = "Filtros";
$GLOBALS['strAdvertiser']                   = "Anunciante";
$GLOBALS['strPublisher']                    = "Página web";
$GLOBALS['strCampaign']                     = "Campaign";
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strType']                         = "Tipo";
$GLOBALS['strAction']                       = "Action";
$GLOBALS['strParameter']                    = "Parámetro";
$GLOBALS['strValue']                        = "Valor";
$GLOBALS['strDetailedView']                 = "Vista detallada";
$GLOBALS['strReturnAuditTrail']             = "Volver a Audit Trail";
$GLOBALS['strAuditTrail']                   = "Audit Trail";
$GLOBALS['strMaintenanceLog']               = "Registro de mantenimiento";
$GLOBALS['strAuditResultsNotFound']         = "No hay eventos que concuerden con el criterio de selección";
$GLOBALS['strCollectedAllEvents']           = "Todos los eventos";
$GLOBALS['strClear']                        = "Limpiar";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "Notificación de activación de la campaña {id} enviada por e-mail";

?>
