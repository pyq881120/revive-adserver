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

$GLOBALS['strDeliveryEngine']				= "نظام التوزيع";
$GLOBALS['strMaintenance']					= "الصيانة";
$GLOBALS['strAdministrator']				= "المدير";

// Audit
$GLOBALS['strLogging']                      = "Logging";
$GLOBALS['strAudit']                        = "Audit Log";
$GLOBALS['strDebugLog']                     = "Debug Log";
$GLOBALS['strEvent']                        = "Event";
$GLOBALS['strTimestamp']                    = "Timestamp";
$GLOBALS['strDeleted']                      = "حذف";
$GLOBALS['strInserted']                     = "inserted";
$GLOBALS['strUpdated']                      = "updated";
$GLOBALS['strDelete']                       = "حذف";
$GLOBALS['strInsert']                       = "Insert";
$GLOBALS['strUpdate']                       = "Update";
$GLOBALS['strHas']                          = "has";
$GLOBALS['strFilters']                      = "Filters";
$GLOBALS['strAdvertiser']                   = "المعلن";
$GLOBALS['strPublisher']                    = "الموقع";
$GLOBALS['strCampaign']                     = "الحملة الإعلانية";
$GLOBALS['strZone']                         = "المنطقة";
$GLOBALS['strType']                         = "النوع";
$GLOBALS['strAction']                       = "الفعل";
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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "تعطيل التنبيهات للحملة رقم {id} المرسلة عبر البريد الإلكتروني";

?>
