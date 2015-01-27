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

$GLOBALS['strMaintenance']					= "Обслуговування";

// Audit
$GLOBALS['strDeleted']                      = "Видалити";
$GLOBALS['strDelete']                       = "Видалити";
$GLOBALS['strAdvertiser']                   = "Клієнт";
$GLOBALS['strPublisher']                    = "Вебсайт";
$GLOBALS['strCampaign']                     = "Кампанія";
$GLOBALS['strZone']                         = "Зона";
$GLOBALS['strAction']                       = "Дія";

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

?>
