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

// Main strings
$GLOBALS['strChooseSection']			= "セクションの選択";
$GLOBALS['strAppendCodes']              = "コードを追加する";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>過去数時間の間、定期メンテナンス行われていません。設定を確認してください。</b>";

$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "
	Automatic maintenance is enabled, but it has not been triggered. Automatic maintenance is triggered only when ".MAX_PRODUCT_NAME." delivers banners.
    For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "
	Automatic maintenance is currently disabled, so when ".MAX_PRODUCT_NAME." delivers banners, automatic maintenance will not be triggered.
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
    However, if you are not going to set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>,
    then you <i>must</i> <a href='account-settings-maintenance.php'>enable automatic maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.
";

$GLOBALS['strAutoMantenaceEnabledAndRunning']   = "
	Automatic maintenance is enabled and will be triggered, as required, when ".MAX_PRODUCT_NAME." delivers banners.
	However, for the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndRunning']  = "
	However, automatic maintenance has recently been disabled. To ensure that ".MAX_PRODUCT_NAME." works correctly, you should
	either set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a> or
	<a href='account-settings-maintenance.php'>re-enable automatic maintenance</a>.
	<br><br>
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>定期メンテナンスは正常に動作しています。</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>自動メンテナンスは正常に動作しています。</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "自動メンテナンスが動作しています。ベストな状態を保つためには、<a href='account-settings-maintenance.php'>自動メンテナンスを無効</a>にして下さい。";


// Priority
$GLOBALS['strRecalculatePriority']		= "優先度の再計算";
$GLOBALS['strHighPriorityCampaigns']		= "高優先キャンペーン";
$GLOBALS['strAdViewsAssigned']			= "割当ビュー数";
$GLOBALS['strLowPriorityCampaigns']		= "低優先キャンペーン";
$GLOBALS['strPredictedAdViews']			= "予測ビュー数";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "今週と先週のデータを使用して日別推移を予測しています。";
$GLOBALS['strPriorityBasedLastDays']		= "数日間のデータを使用して日別推移を予測しています。";
$GLOBALS['strPriorityBasedYesterday']		= "昨日のデータを使用して日別推移を予測しています。";
$GLOBALS['strPriorityNoData']			= "本日のインプレッション数を予測するのに十分なデータがありません。直近の統計結果に基づき優先度を割り当てます。";
$GLOBALS['strPriorityEnoughAdViews']		= "対象ゾーンには、全ての高優先キャンペーンを完全に満たすための一定以上のビュー数が必要です。";
$GLOBALS['strPriorityNotEnoughAdViews']		= "対象ゾーンには、全ての高優先キャンペーンを満たすための十分なビュー数がありませんでした。";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "バナーキャッシュの構築";
$GLOBALS['strRebuildBannerCache']		= "バナーキャッシュの再構築";
$GLOBALS['strBannerCacheErrorsFound'] = "バナーキャッシュデータにエラーが検出されました。エラーを手作業で回復するまで、対象バナーは正しく動作しません。";
$GLOBALS['strBannerCacheOK'] = "バナーキャッシュデータにエラーは検出されませんでした。バナーキャッシュは最新に保たれています。";
$GLOBALS['strBannerCacheDifferencesFound'] = "バナーキャッシュデータに最新でなく再構築が必要なデータが検出されました。キャッシュを自動的に更新するには、ここをクリックしてください。";
$GLOBALS['strBannerCacheFixed'] = "バナーキャッシュの再構築が正常終了しました。バナーキャッシュは最新に保たれています。";
$GLOBALS['strBannerCacheRebuildButton'] = "再構築";
$GLOBALS['strRebuildDeliveryCache']			= "バナーキャッシュの再構築";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "配信キャッシュ";
$GLOBALS['strAge']				= "キャッシュ寿命";
$GLOBALS['strDeliveryCacheSharedMem']		= "	配信キャッシュの保存用に'共有メモリ'を使用しています。\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "	配信キャッシュの保存用に'データベース'を使用しています。\\n";
$GLOBALS['strDeliveryCacheFiles']		= "	配信キャッシュの保存用に'ファイル'を使用しています。\\n";


// Storage
$GLOBALS['strStorage']				= "画像ストレージ";
$GLOBALS['strMoveToDirectory']			= "画像の保存先をデータベースからディレクトリに変更する";
$GLOBALS['strStorageExplaination']		= "	バナー用の画像は、データベースかディレクトリに保存します。\\n	画像をディレクトリに保存すると、CPU負荷が低下し、配信スピードが向上します。\\n";

// Encoding
$GLOBALS['strEncoding']                 = "エンコード形式";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "変換元エンコード形式:";
$GLOBALS['strEncodingConvert']          = "変換する";
$GLOBALS['strEncodingConvertTest']      = "変換テスト";
$GLOBALS['strConvertThese']             = "続行すると、エンコード形式が変更されます。";


// Storage
$GLOBALS['strStatisticsExplaination']		= "	<i>コンパクト形式の統計</i>を有効にしましたが、過去の統計データは冗長形式で保存されています。\\n	過去の統計データを冗長形式からコンパクト形式に変換しますか？\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "アップデートを検索しています。しばらくお待ちください...";
$GLOBALS['strAvailableUpdates']			= "アップデートを有効にする";
$GLOBALS['strDownloadZip']			= "ダウンロードする(.zip)";
$GLOBALS['strDownloadGZip']			= "ダウンロードする(.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "未知の理由によって、アップデート情報の照会ができません。<br>しばらくしてから再度アップデートを実行してください。";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";


$GLOBALS['strNewVersionAvailable']		= "
	<b>A new version of ".MAX_PRODUCT_NAME." is available.</b><br /> It is recommended to install this update,
	because it may fix some currently existing problems and will add new features. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strSecurityUpdate']			= "
	<b>It is highly recommended to install this update as soon as possible, because it contains a number
	of security fixes.</b> The version of ".MAX_PRODUCT_NAME." which you are currently using might
	be vulnerable to certain attacks and is probably not secure. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strNotAbleToCheck']			= "
	<b>Because the XML extention isn't available on your server, ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available.</b>
";


$GLOBALS['strClickToVisitWebsite']		= "Webサイトへ";
$GLOBALS['strCurrentlyUsing'] 			= "使用中のバージョン：";
$GLOBALS['strRunningOn']				= "動作環境";
$GLOBALS['strAndPlain']					= "および";


// Stats conversion
$GLOBALS['strConverting']			= "変換中";
$GLOBALS['strConvertingStats']			= "統計データを変換中です...";
$GLOBALS['strConvertStats']			= "統計データの変換";
$GLOBALS['strConvertAdViews']			= "ビュー数を変換しました...";
$GLOBALS['strConvertAdClicks']			= "クリック数を変換しました...";
$GLOBALS['strConvertAdConversions']			= "コンバージョン数を変換しました...";
$GLOBALS['strConvertNothing']			= "変換対象のデータはありません...";
$GLOBALS['strConvertFinished']			= "統計データの変換が終了しました...";

$GLOBALS['strConvertExplaination']		= "\\n	統計データは、コンパクト形式で保存されていますが、いくつかの冗長形式のデータが発見されました。<br />\\n	冗長形式をコンパクト形式に変換しない場合、その冗長形式のデータは、統計として適切に表示できません。<br />\\n	統計データを変換する前に、必ずデータベースをバックアップしてください！<br />\\n	冗長形式をコンパクト形式に変換しますか？<br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	すべての冗長形式をコンパクト形式に変換しました。 <br />\\n	多くのデータ数が冗長形式で保存されているため、終了まであと数分間必要です。<br />\\n	このまま他のページに移動せず、変換が終了するまでしばらくお待ちください。<br />\\n	実施したすべての修正履歴は、以下で確認できます。<br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	冗長形式の統計データ変換が完了し、すべての統計データが利用可能になっています。<br />\\n	実施したすべての修正履歴は、以下で確認できます。<br />\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "自動メンテナンスが無効です。";
$GLOBALS['strAutoMaintenanceEnabled']  = "自動メンテナンスが有効です。ベストな状態を保つために、<a href='settings-admin.php'>自動メンテナンスを無効</a>にして下さい。";
$GLOBALS['strScheduledMaintenance']         = "定期メンテナンスは正常に動作しています。";
$GLOBALS['strScheduledMaintenanceNotRun']   = "<b>過去数時間の間、定期メンテナンス行われていません。設定を確認してください。</b>";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "定期メンテナンスは有効です。一時間毎に動作します。";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strAllBannerChannelCompiled'] = "すべての広告及びチャンネルの制限値が再集計されました。";
$GLOBALS['strBannerChannelResult']      = "これらはバナーとチャンネルの再集計結果です。";
$GLOBALS['strChannelCompiledLimitationsValid']  = "すべてのチャンネルの再集計は有効です";
$GLOBALS['strBannerCompiledLimitationsValid']   = "すべてのバナーの再集計は有効です";
$GLOBALS['strErrorsFound']              = "エラーがあります";
$GLOBALS['strRepairCompiledLimitations']        = "いくつか内容に矛盾があります。下記のボタンを使用して問題を修正してください。この設定は、すべてのバナー及びチャンネルの再集計に対する上限値を設定し直します。<br />";
$GLOBALS['strRecompile']                = "再集計";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "何らかの状況下において、配信エンジンがトラックコードを拒否しました。以下のリンクをたどって修正をして下さい。";
$GLOBALS['strCheckACLs'] = "ACLをチェックする";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "何らかの状況下において、配信エンジンがトラックコードを拒否しました。以下のリンクをたどって修正をして下さい。";
$GLOBALS['strCheckAppendCodes']         = "追加コードを確認";
$GLOBALS['strAppendCodesRecompiled']    = "すべて追加コードの値が再集計されました。";
$GLOBALS['strAppendCodesResult']        = "追加コードのチェック集計結果";
$GLOBALS['strAppendCodesValid']         = "全ての追跡コードは正常です。";
$GLOBALS['strRepairAppenedCodes']       = "何らかの問題が見つかりました。以下のボタンを使用して修正してください。これは全ての追跡コードの値を再集計します。";

$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";


?>
