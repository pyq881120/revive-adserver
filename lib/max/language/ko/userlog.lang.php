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

$GLOBALS['strDeliveryEngine']				= "전달유지 엔진";
$GLOBALS['strMaintenance']					= "유지보수";
$GLOBALS['strAdministrator']				= "관리자";

// Audit
$GLOBALS['strLogging']                      = "Logging";
$GLOBALS['strAudit']                        = "Audit Log";
$GLOBALS['strDebugLog']                     = "Debug Log";
$GLOBALS['strEvent']                        = "Event";
$GLOBALS['strTimestamp']                    = "Timestamp";
$GLOBALS['strDeleted']                      = "삭제";
$GLOBALS['strInserted']                     = "inserted";
$GLOBALS['strUpdated']                      = "updated";
$GLOBALS['strDelete']                       = "Delete";
$GLOBALS['strInsert']                       = "Insert";
$GLOBALS['strUpdate']                       = "Update";
$GLOBALS['strHas']                          = "has";
$GLOBALS['strFilters']                      = "Filters";
$GLOBALS['strAdvertiser']                   = "광고주";
$GLOBALS['strPublisher']                    = "광고게시자";
$GLOBALS['strCampaign']                     = "Campaign";
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strType']                         = "Type";
$GLOBALS['strAction']                       = "Action";
$GLOBALS['strParameter']                    = "Parameter";
$GLOBALS['strValue']                        = "Value";
$GLOBALS['strDetailedView']                 = "Detailed View";
$GLOBALS['strReturnAuditTrail']             = "Return to Audit Trail";
$GLOBALS['strAuditTrail']                   = "Audit trail";
$GLOBALS['strMaintenanceLog']               = "Maintenance log";
$GLOBALS['strAuditResultsNotFound']         = "No events found matching the selected criteria";
$GLOBALS['strCollectedAllEvents']           = "All events";
$GLOBALS['strClear']                        = "Clear";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "데이터베이스 자동 정리";

?>
