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

$GLOBALS['strDeliveryEngine']				= "配信エンジン";
$GLOBALS['strMaintenance']					= "メンテナンス";
$GLOBALS['strAdministrator']				= "管理者";

// Audit
$GLOBALS['strLogging']                      = "ロギング";
$GLOBALS['strAudit']                        = "追跡記録ログ";
$GLOBALS['strDebugLog']                     = "デバッグログ";
$GLOBALS['strEvent']                        = "イベント";
$GLOBALS['strTimestamp']                    = "タイムスタンプ";
$GLOBALS['strDeleted']                      = "削除済";
$GLOBALS['strInserted']                     = "挿入済";
$GLOBALS['strUpdated']                      = "更新済";
$GLOBALS['strDelete']                       = "削除";
$GLOBALS['strInsert']                       = "挿入";
$GLOBALS['strUpdate']                       = "更新";
$GLOBALS['strHas']                          = "=";
$GLOBALS['strFilters']                      = "フィルター条件";
$GLOBALS['strAdvertiser']                   = "広告主";
$GLOBALS['strPublisher']                    = "Webサイト";
$GLOBALS['strCampaign']                     = "キャンペーン";
$GLOBALS['strZone']                         = "ゾーン";
$GLOBALS['strType']                         = "タイプ";
$GLOBALS['strAction']                       = "アクション";
$GLOBALS['strParameter']                    = "パラメータ";
$GLOBALS['strValue']                        = "数値";
$GLOBALS['strDetailedView']                 = "明細ビュー";
$GLOBALS['strReturnAuditTrail']             = "追跡記録に戻る";
$GLOBALS['strAuditTrail']                   = "追跡記録";
$GLOBALS['strMaintenanceLog']               = "メンテナンスログ";
$GLOBALS['strAuditResultsNotFound']         = "指定条件にマッチするイベントはありません";
$GLOBALS['strCollectedAllEvents']           = "全てのイベント";
$GLOBALS['strClear']                        = "クリア";

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
$GLOBALS['strUserlog'][phpAds_actionActivationMailed] = "キャンペーン: {id} の非アクティブ警告を電子メールにて送信する";

?>
