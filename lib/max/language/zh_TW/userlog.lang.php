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

$GLOBALS['strDeliveryEngine']				= "發布引擎";
$GLOBALS['strMaintenance']					= "維護";
$GLOBALS['strAdministrator']				= "管理員";

// Audit
$GLOBALS['strLogging']                      = "日誌";
$GLOBALS['strAudit']                        = "審計日誌";
$GLOBALS['strDebugLog']                     = "調試日誌";
$GLOBALS['strEvent']                        = "事件";
$GLOBALS['strTimestamp']                    = "時間戳";
$GLOBALS['strDeleted']                      = "已刪除 ";
$GLOBALS['strInserted']                     = "已插入";
$GLOBALS['strUpdated']                      = "已更新";
$GLOBALS['strDelete']                       = "刪除";
$GLOBALS['strInsert']                       = "插入";
$GLOBALS['strUpdate']                       = "更新";
$GLOBALS['strHas']                          = "具備";
$GLOBALS['strFilters']                      = "過濾器";
$GLOBALS['strAdvertiser']                   = "廣告商";
$GLOBALS['strPublisher']                    = "網站";
$GLOBALS['strCampaign']                     = "項目";
$GLOBALS['strZone']                         = "版位";
$GLOBALS['strType']                         = "類型";
$GLOBALS['strAction']                       = "操作";
$GLOBALS['strParameter']                    = "參數";
$GLOBALS['strValue']                        = "值";
$GLOBALS['strDetailedView']                 = "詳細視圖";
$GLOBALS['strReturnAuditTrail']             = "返回到審計跟蹤";
$GLOBALS['strAuditTrail']                   = "審計跟踪";
$GLOBALS['strMaintenanceLog']               = "維護日誌";
$GLOBALS['strAuditResultsNotFound']         = "沒有滿足約束條件的事件";
$GLOBALS['strCollectedAllEvents']           = "所有事件";
$GLOBALS['strClear']                        = "清除";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "已發送發布商{id}報告郵件";

?>
