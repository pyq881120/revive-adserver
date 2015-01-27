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

// Installer translation strings
$GLOBALS['strInstall']                      = "インストール";
$GLOBALS['strChooseInstallLanguage']        = "インストール言語の選択";
$GLOBALS['strLanguageSelection']            = "言語の選択";
$GLOBALS['strDatabaseSettings']             = "データベース設定";
$GLOBALS['strAdminSettings']                = "管理者設定";
$GLOBALS['strAdminAccount']                 = "管理者アカウント";
$GLOBALS['strAdministrativeSettings']       = "管理者用設定";
$GLOBALS['strAdvancedSettings']             = "高度な設定";
$GLOBALS['strOtherSettings']                = "その他の設定";
$GLOBALS['strSpecifySyncSettings']          = "同期設定";
$GLOBALS['strLicenseInformation']           = "ライセンス情報";
$GLOBALS['strWarning']                      = "警告";
$GLOBALS['strFatalError']                   = "致命的なエラーが発生しました。";
$GLOBALS['strUpdateError']                  = "更新中にエラーが発生しました。";
$GLOBALS['strBtnContinue']                  = "続行する »";
$GLOBALS['strBtnRecover']                   = "復旧する »";
$GLOBALS['strBtnStartAgain']                   = "アップデートを再開する »";
$GLOBALS['strBtnGoBack']                    = "« 戻る";
$GLOBALS['strBtnAgree']                     = "承認する »";
$GLOBALS['strBtnDontAgree']                 = "« 承認しない";
$GLOBALS['strBtnRetry']                     = "再試行する";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "データベースに接続できませんでした。データベース設定を再確認してください。";
$GLOBALS['strCreateTableTestFailed']        = "指定されたユーザーは、データベースの作成もしくは更新権限がありません。データベース管理者に連絡してください。";
$GLOBALS['strUpdateTableTestFailed']        = "指定されたユーザーは、データベースの更新権限を持っていません。データベース管理者に連絡してください。";
$GLOBALS['strTablePrefixInvalid']           = "指定したテーブルプリフィックスには、無効な文字が含まれています。";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "指定したデータベースバージョンは選択できません！";
$GLOBALS['strInvalidVersionInfo']           = "指定したデータベースのバージョンが特定できません！";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "継続するには、潜在的な問題を修正してください:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "警告を無視する";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "PHPの設定値[register_globals]を'on'にしてください";
$GLOBALS['strWarningRegisterArgcArv']       = "PHPの設定値[register_argc_argv]を'on'にしてください";
$GLOBALS['strWarningMagicQuotesGPC']        = "PHPの設定値[magic_quotes_gpc]を'on'にしてください";
$GLOBALS['strWarningMagicQuotesRuntime']    = "PHPの設定値[magic_quotes_runtime]を'off'にしてください";
$GLOBALS['strWarningFileUploads']           = "PHPの設定値[file_uploads]を'on'にしてください";
$GLOBALS['strWarningTrackVars']             = "PHPの設定値[track_vars]を'on'にしてください";
$GLOBALS['strWarningPREG']                  = "使用中のPHPバージョンは、Perl互換正規表現(PREG)をサポートしていません。継続するには PREG拡張を有効にしてください。";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "データベース更新ができません。 このまま継続すると、すべての既存のバナー、統計、および広告主は削除される可能性があります。";
$GLOBALS['strIgnoreErrors']                 = "警告を無視する";
$GLOBALS['strRetryUpdate']                  = "更新を再実行する";
$GLOBALS['strTableNames']                   = "テーブル名";
$GLOBALS['strTablesPrefix']                 = "テーブルプリフィックス";
$GLOBALS['strTablesType']                   = "テーブルタイプ";


$GLOBALS['strRecoveryRequiredTitle']    = "前回のアップデートでエラーが発生";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "警告:アップデートファイルが、varディレクトリに残っています。十分な権限がないため、アップデートファイルを削除できませんでした。このファイルを自分自身の手で削除してください。";
$GLOBALS['strRemoveUpgradeFile']               = "varディレクトリ内にあるUPGRADEファイルを削除してください。";
$GLOBALS['strInstallSuccess']               = "Clicking 'Continue' will log you in to your ad server.
<p><strong>What next?</strong></p>
<div class='psub'>";
$GLOBALS['strInstallSuccess2'] ="
  <p><b>Serving your first ad campaign</b><br>
    Use our <a href='".PRODUCT_DOCSURL."/user/quickStartGuide' target='_blank'>quick start guide to start serving your first ad campaign</a>.
  </p>
</div>
<p><strong>Optional installation steps</strong></p>
<div class='psub'>
  <p><b>Lock your configuration files</b><br>
    This is a good extra security step to protect your ad server configuration settings from being altered.  <a href='".PRODUCT_DOCSURL."/admin/lockConfig' target='_blank'>Find out more</a>.
  </p>
  <p><b>Set up a regular maintenance task</b><br>
    A maintenance script is recommended to ensure timely reporting and the best possible ad delivery performance.  <a href='".PRODUCT_DOCSURL."/admin/maintenance' target='_blank'>Find out more</a>
  </p>
  <p><b>Review your system configuration settings</b><br>
    Before you start using ".MAX_PRODUCT_NAME." we suggest you review your settings within the 'Settings' tab.
  </p>
</div>";
$GLOBALS['strInstallNotSuccessful']         = "<b>The installation of ".MAX_PRODUCT_NAME." was not succesful</b><br /><br />Some portions of the install process could not be completed.
                                                It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the
                                                first step of the install process. If you want to know more on what the error message below means, and how to solve it,
                                                please consult the supplied documentation.";
$GLOBALS['strDbSuccessIntro']               = "The " . MAX_PRODUCT_NAME . " database has now been created. Please click the 'Continue' button to proceed with configuring " . MAX_PRODUCT_NAME . " Administrator and Delivery settings.";
$GLOBALS['strDbSuccessIntroUpgrade']        = "システムのアップグレードが成功しました。次の画面では、新しいアドサーバーの設定を説明します。";
$GLOBALS['strErrorOccured']                 = "次のエラーが発生しました:";
$GLOBALS['strErrorInstallDatabase']         = "データベースを構築できませんでした。";
$GLOBALS['strErrorInstallPrefs']            = "管理者用ユーザプリファレンスをデータベースに保存できませんでした。";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = '既存のデータベースをアップグレードできませんでした。';
$GLOBALS['strErrorInstallDbConnect']        = "データベース接続を開始できませんでした。";

$GLOBALS['strErrorWritePermissions']        = "ファイルのパーミッションエラーが検出されました。継続するには、指定ファイルのパーミッションを変更してください。<br />Linux系のシステムでは、以下のコマンドを入力してください。:";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "ファイルのパーミッションエラーが検出されました。継続するには、指定ファイルのパーミッションを変更してください。";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "管理者画面URL";
$GLOBALS['strDeliveryUrlPrefix']            = "配信エンジンURL";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "配信エンジンURL(SSL)";
$GLOBALS['strImagesUrlPrefix']              = "画像ストレージURL";
$GLOBALS['strImagesUrlPrefixSSL']           = "画像ストレージURL(SSL)";

$GLOBALS['strInvalidUserPwd']               = "ユーザ名とパスワードが正しくありません。";

$GLOBALS['strUpgrade']                      = "アップデート";
$GLOBALS['strSystemUpToDate']               = "システムは最新情報に保たれているため、アップデートは不要です。<br />トップページに戻るには、<b>続行する</b>をクリックしてください。";
$GLOBALS['strSystemNeedsUpgrade']           = "正常なシステム運用のために、データベース構造とシステム設定ファイルのアップデートが必要です。アップデートプロセスを開始するには、<b>続行する</b>をクリックしてください。<br /><br />バージョンアップ内容と統計データの変換処理量によって、サーバが高負荷状態になる場合があります。アップデートに数分を要する場合がありますが、しばらくお待ちください。";
$GLOBALS['strSystemUpgradeBusy']            = "システムのアップデート中です。しばらくお待ちください...";
$GLOBALS['strSystemRebuildingCache']        = "キャッシュの再構築中です。しばらくお待ちください...";
$GLOBALS['strServiceUnavalable']            = "現在、システムのアップデート中のため、サービスは一時的に利用できません。";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "セクションの選択";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "設定ファイルに書き込む事ができませんでした。";
$GLOBALS['strUnableToWritePrefs']                    = "データベースに設定を反映できませんでした。";
$GLOBALS['strImageDirLockedDetected']	             = "指定した<b>画像ストレージ</b>への書き込みができません。<br>ディレクトリのパーミッションを変更するか、新しくディレクトリを作成してください。";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "設定内容チェックリスト";
$GLOBALS['strConfigurationSettings']                 = "設定";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "管理者設定";
$GLOBALS['strAdministratorAccount']                  = "管理者アカウント";
$GLOBALS['strLoginCredentials']                      = "ログインユーザ";
$GLOBALS['strAdminUsername']                         = "管理者  ユーザ名";
$GLOBALS['strAdminPassword']                         = "管理者  パスワード";
$GLOBALS['strInvalidUsername']                       = "ユーザ名が不正です";
$GLOBALS['strBasicInformation']                      = "基本情報";
$GLOBALS['strAdminFullName']                         = "管理者氏名";
$GLOBALS['strAdminEmail']                            = "管理者メールアドレス";
$GLOBALS['strAdministratorEmail']                    = "管理者メールアドレス";
$GLOBALS['strCompanyName']                           = "会社名";
$GLOBALS['strAdminCheckUpdates']                     = "アップデートの確認";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "ログイン毎";
$GLOBALS['strAdminCheckDaily']                       = "毎日";
$GLOBALS['strAdminCheckWeekly']                      = "毎週";
$GLOBALS['strAdminCheckMonthly']                     = "毎月";
$GLOBALS['strAdminCheckNever']                       = "更新しない";
$GLOBALS['strNovice']                                = "アクションを削除する前に確認する";
$GLOBALS['strUserlogEmail']                          = "全ての送信メールの内容をログに取る";
$GLOBALS['strEnableDashboard']                       = "ダッシュボードを有効にする";
$GLOBALS['strEnableDashboardSyncNotice']             = "ダッシュボードを使用するには、<a href='account-settings-update.php'>アップデートのチェック</a>を有効にしてください。";
$GLOBALS['strTimezone']                              = "タイムゾーン";
$GLOBALS['strTimezoneEstimated']                     = "検出タイムゾーン";
$GLOBALS['strTimezoneGuessedValue']                  = "サーバのタイムゾーンがPHPで正しく設定されていません";
$GLOBALS['strTimezoneSeeDocs']                       = "PHPでタイムゾーンを設定するには%DOCS% を参照してください。";
$GLOBALS['strTimezoneDocumentation']                 = "ドキュメント";
$GLOBALS['strAdminSettingsTitle']                    = "管理者アカウントの作成";
$GLOBALS['strAdminSettingsIntro']                    = "管理者アカウントを作成するためにフォームの入力を完了してください。";
$GLOBALS['strConfigSettingsIntro']                   = "下記設定内容を確認してください。もし明確でない場合は、デフォルトのままにしておいて下さい。";

$GLOBALS['strEnableAutoMaintenance']	             = "定期メンテナンスが設定されていない場合、配信中に定期的なメンテナンスを自動実行する。";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "データベース設定";
$GLOBALS['strDatabaseServer']                        = "グローバルデータベースサーバ設定";
$GLOBALS['strDbLocal']                               = "ソケットを使う";
$GLOBALS['strDbType']                                = "データベースのタイプ";
$GLOBALS['strDbHost']                                = "データベースのホスト名";
$GLOBALS['strDbSocket']                              = "データベースソケット";
$GLOBALS['strDbPort']                                = "データベースのポート番号";
$GLOBALS['strDbUser']                                = "データベースのユーザ名";
$GLOBALS['strDbPassword']                            = "データベースのパスワード";
$GLOBALS['strDbName']                                = "データベース名";
$GLOBALS['strDbNameHint']                            = "もしない場合、データベースが自動で作成されます。";
$GLOBALS['strDatabaseOptimalisations']               = "データベース最適化設定";
$GLOBALS['strPersistentConnections']                 = "持続的にデータベースに接続する";
$GLOBALS['strCantConnectToDb']                       = "データベースに接続できません";
$GLOBALS['strCantConnectToDbDelivery']               = 'Can\'t Connect to Database for Delivery';
$GLOBALS['strDemoDataInstall']                       = "デモデータをインストールする";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Eメール設定";
$GLOBALS['strEmailAddresses']                        = "Eメール  アドレス";
$GLOBALS['strEmailFromName']                         = "Eメール  宛先名";
$GLOBALS['strEmailFromAddress']                      = "Eメール  Eメールアドレス";
$GLOBALS['strEmailFromCompany']                      = "Eメール  社用";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "Qメールパッチ";
$GLOBALS['strEnableQmailPatch']                      = "Qmailパッチを適用する";
$GLOBALS['strEmailHeader']                           = "Eメールヘッダ";
$GLOBALS['strEmailLog']                              = "Eメールログ";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "追跡記録ログ";
$GLOBALS['strEnableAudit']                           = "監査の追跡を有効にする";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "ログ検査方法の設定";
$GLOBALS['strProduction']                            = "広告配信サーバ";
$GLOBALS['strEnableDebug']                           = "ログの検査を有効にする";
$GLOBALS['strDebugMethodNames']                      = "関数名を検査ログに含める";
$GLOBALS['strDebugLineNumbers']                      = "検査ログに行番号を含める";
$GLOBALS['strDebugType']                             = "検査ログのタイプ";
$GLOBALS['strDebugTypeFile']                         = "ファイル";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "SQLデータベース";
$GLOBALS['strDebugTypeSyslog']                       = "システムログ";
$GLOBALS['strDebugName']                             = "ログ名、カレンダー、SQLテーブル<br />もしくはシスログを検査する";
$GLOBALS['strDebugPriority']                         = "優先度を検査する";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - ほぼ全てをログに出力する";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - 通常の情報をログに出力する";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE - Noticeレベルの情報をログに出力する";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING - 警告レベルの情報をログに出力する";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR - エラーレベルの情報をログに出力する";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT- クリティカルレベルの情報をログに出力する";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT - アラートレベルの情報をログに出力する";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - 最も情報の少ないレベル";
$GLOBALS['strDebugIdent']                            = "識別文字の検査";
$GLOBALS['strDebugUsername']                         = "mCal, SQLサーバのユーザ名";
$GLOBALS['strDebugPassword']                         = "mCal, SQLサーバのパスワード";
$GLOBALS['strProductionSystem']                      = "プロダクションシステム";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "配信設定";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Webパス";
$GLOBALS['strDeliveryPath']                          = "配信パス";
$GLOBALS['strImagePath']                             = "画像パス";
$GLOBALS['strDeliverySslPath']                       = "配信パス（SSL)";
$GLOBALS['strImageSslPath']                          = "画像パス（SSL)";
$GLOBALS['strImageStore']                            = "画像ディレクトリ";
$GLOBALS['strTypeWebSettings']                       = "画像のサーバ保存設定";
$GLOBALS['strTypeWebMode']                           = "保存方法";
$GLOBALS['strTypeWebModeLocal']                      = "ローカルディレクトリ";
$GLOBALS['strTypeDirError']                          = "ウェブサーバがローカルディレクトリに書き込むことができません";
$GLOBALS['strTypeWebModeFtp']                        = "外部FTPサーバ";
$GLOBALS['strTypeWebDir']                            = "ローカルディレクトリ";
$GLOBALS['strTypeFTPHost']                           = "FTPホスト";
$GLOBALS['strTypeFTPDirectory']                      = "ホストディレクトリ";
$GLOBALS['strTypeFTPUsername']                       = "ログイン";
$GLOBALS['strTypeFTPPassword']                       = "パスワード";
$GLOBALS['strTypeFTPPassive']                        = "パッシブFTPを使用";
$GLOBALS['strTypeFTPErrorDir']                       = "FTPホストにディレクトリが存在しません";
$GLOBALS['strTypeFTPErrorConnect']                   = "FTPサーバに接続できません。ログインかパスワードが間違っている可能性があります。";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "PHPの設定で、FTPをサポートする必要があります。";
$GLOBALS['strTypeFTPErrorUpload']                    = "FTPサーバにファイルをアップロードすることができませんでした。ディレクトリの権限を確認してください。";
$GLOBALS['strTypeFTPErrorHost']                      = "FTPホストが正しくありません";
$GLOBALS['strDeliveryFilenames']                     = "配信ファイル名";
$GLOBALS['strDeliveryFilenamesAdClick']              = "広告クリック";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "広告コンバージョン値";
$GLOBALS['strDeliveryFilenamesAdContent']            = "広告内容";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "広告コンバージョン";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "広告コンバージョン(Javascript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "広告フレーム";
$GLOBALS['strDeliveryFilenamesAdImage']              = "広告画像";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "広告（Javascript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "広告レイヤー";
$GLOBALS['strDeliveryFilenamesAdLog']                = "広告ログ";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "広告ポップアップ";
$GLOBALS['strDeliveryFilenamesAdView']               = "広告ビュー";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPCで広告を生成する";
$GLOBALS['strDeliveryFilenamesLocal']                = "ローカルサーバより広告を生成する";
$GLOBALS['strDeliveryFilenamesFrontController']      = "フロントコントローラ";
$GLOBALS['strDeliveryFilenamesFlash']                = "FlashのURL（フルURL）";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "バナーキャッシュの設定";
$GLOBALS['strDeliveryCacheLimit']                    = "バナーキャッシュの更新間隔";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "リモートサーバを使用";
$GLOBALS['strOriginType']                            = "リモートサーバのタイプ";
$GLOBALS['strOriginHost']                            = "リモートサーバのホスト名";
$GLOBALS['strOriginPort']                            = "リモートサーバのポート番号";
$GLOBALS['strOriginScript']                          = "リモートデータベースのスクリプト";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC通信";
$GLOBALS['strOriginTimeout']                         = "リモートサーバのタイムアウト（秒）";
$GLOBALS['strOriginProtocol']                        = "リモートサーバのプロトコル";

$GLOBALS['strDeliveryAcls']                          = "バナー配送毎に配信制限を確認する";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "バナー配信時にチャンネルを隠す";
$GLOBALS['strDeliveryExecPhp']                       = "バナーの内容にPHPコードを許可する<br />(Warning: セキュリティリスクとなり得る)";
$GLOBALS['strDeliveryCtDelimiter']                   = "サードパーティー製の、クリック追跡時用区切り文字";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Global default Banner Image URL";
$GLOBALS['strP3PSettings']                           = "P3Pプライベートポリシー";
$GLOBALS['strUseP3P']                                = "P3Pポリシーを使う";
$GLOBALS['strP3PCompactPolicy']                      = "P3Pコンパクトポリシー";
$GLOBALS['strP3PPolicyLocation']                     = "P3Pポリシーの場所";

// General Settings
$GLOBALS['generalSettings']                          = "全般設定";
$GLOBALS['uiEnabled']                                = "ユーザ画面を有効にする";
$GLOBALS['defaultLanguage']                          = "デフォルト言語設定";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "ジオターゲティング設定";
$GLOBALS['strGeotargeting']                          = "ジオターゲティング設定";
$GLOBALS['strGeotargetingType']                      = "ジオターゲティングモジュールタイプ";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "付属のMaxMind GeoLiteCountryデータベースを使用する";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind製GeoIP国別データベースの場所";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind製GeoIP地方・領域データベースの場所";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind製GeoIP市区町村データベースの場所";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind製GeoIP地域・区域データベースの場所";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind製GeoIP地域・区域データベースの場所";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind製GeoIP企業データベースの場所";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind製GeoIP ISPデータベースの場所";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind製GeoIP 回線速度データベースの場所";
$GLOBALS['strGeoShowUnavailable']                    = "GeoIPにデータがない場合でも、ジオターゲティングの配信制限を表示する";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "MaxMind製GeoIPの国別データベースが見つかりません";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "MaxMind製GeoIPの地方・領域別データベースが見つかりません";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "MaxMind製GeoIPの市区町村別データベースが見つかりません";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "MaxMind製GeoIPの地域別データベースが見つかりません";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "MaxMind製GeoIPのDMAデータベースが見つかりません";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "MaxMind製GeoIPの企業別データベースが見つかりません";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "MaxMind製GeoIPのISP別データベースが見つかりません";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "MaxMind製GeoIPの回線速度別データベースが見つかりません";

// Interface Settings
$GLOBALS['strInventory']                             = "インベントリ";
$GLOBALS['strUploadConversions']                     = "コンバージョンのアップロード";
$GLOBALS['strShowCampaignInfo']                      = "キャンペーンの追加情報を<i>キャンペーンの概要</i>に表示する";
$GLOBALS['strShowBannerInfo']                        = "バナーの追加情報を<i>バナーの概要</i>に表示する";
$GLOBALS['strShowCampaignPreview']                   = "全てのバナーのプレビューを<i>バナーの概要</i>に表示する";
$GLOBALS['strShowBannerHTML']                        = "HTMLバナーの場合、HTMLタグではなく、実際のバナーを表示する";
$GLOBALS['strShowBannerPreview']                     = "バナーが表示される画面に遷移した場合、バナーのプレビューを画面上部に表示する";
$GLOBALS['strHideInactive']                          = "非アクティブなものを隠す";
$GLOBALS['strGUIShowMatchingBanners']                = "マッチするバナーを<i>関連済みバナー</i>で表示する";
$GLOBALS['strGUIShowParentCampaigns']                = "親キャンペーンを<i>関連済みバナー</i>で表示する";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "デフォルトキャンペーンを匿名にする";
$GLOBALS['strStatisticsDefaults']                    = "統計";
$GLOBALS['strBeginOfWeek']                           = "週の始まり";
$GLOBALS['strPercentageDecimals']                    = "10進数のパーセンテージ";
$GLOBALS['strWeightDefaults']                        = "デフォルトの重み";
$GLOBALS['strDefaultBannerWeight']                   = "デフォルトのバナーの重み";
$GLOBALS['strDefaultCampaignWeight']                 = "デフォルトのキャンペーンの重み";
$GLOBALS['strDefaultBannerWErr']                     = "バナー用配信ウェイトには正の整数を入力してください。";
$GLOBALS['strDefaultCampaignWErr']                   = "キャンペーン用配信ウェイトには正の整数を入力してください。";
$GLOBALS['strConfirmationUI']                        = "ユーザインターフェースの確認";

$GLOBALS['strPublisherDefaults']                     = "Webサイトのデフォルト";
$GLOBALS['strModesOfPayment']                        = "支払方法";
$GLOBALS['strCurrencies']                            = "通貨";
$GLOBALS['strCategories']                            = "カテゴリ";
$GLOBALS['strHelpFiles']                             = "ヘルプファイル";
$GLOBALS['strHasTaxID']                              = "税金ID";
$GLOBALS['strDefaultApproved']                       = "承認済みのチェックボックス";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "広告主";
$GLOBALS['strChooseCampaign']                        = "キャンペーン";
$GLOBALS['strChooseCampaignBanner']                  = "バナー";
$GLOBALS['strChooseTracker']                         = "トラッカー";
$GLOBALS['strDefaultConversionStatus']               = "デフォルト コンバージョンルール";
$GLOBALS['strDefaultConversionType']                 = "デフォルト コンバージョンルール";
$GLOBALS['strCSVTemplateSettings']                   = "CSVテンプレート設定";
$GLOBALS['strIncludeCountryInfo']                    = "国別情報";
$GLOBALS['strIncludeBrowserInfo']                    = "ブラウザ情報";
$GLOBALS['strIncludeOSInfo']                         = "OS情報";
$GLOBALS['strIncludeSampleRow']                      = "サンプル行";
$GLOBALS['strCSVTemplateAdvanced']                   = "拡張テンプレート";
$GLOBALS['strCSVTemplateIncVariables']               = "トラッカー変数";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "許可されたバナー生成タイプ";
$GLOBALS['strInvocationDefaults']                    = "バナー生成タイプのデフォルト";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "サードパーティー製のクリック追跡をデフォルトで有効にする";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "バナーキャッシュの設定";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "バナーログのブロック設定";
$GLOBALS['strLogAdRequests']                         = "バナー要求毎に'リクエスト'として記録する";
$GLOBALS['strLogAdImpressions']                      = "バナー閲覧毎に'インプレッション'として記録する";
$GLOBALS['strLogAdClicks']                           = "バナークリック毎に'クリック'として記録する";
$GLOBALS['strLogTrackerImpressions']                 = "追跡用ビーコン参照毎に'追跡インプレッション'として記録する";
$GLOBALS['strReverseLookup']                         = "ホストネームが取得できない場合、逆引きを行う";
$GLOBALS['strProxyLookup']                           = "プロキシサーバを経由している場合、本当のIPを取得する";
$GLOBALS['strPreventLogging']                        = "バナーログのブロック設定";
$GLOBALS['strIgnoreHosts']                           = "以下のIPに登録されているユーザはログを取得しない";
$GLOBALS['strIgnoreUserAgents']                      = "以下の内容がUserAgentに含まれていた場合、ログを取得しない";
$GLOBALS['strEnforceUserAgents']                     = "以下の内容がUserAgentに含まれている場合のみ、ログを取得する";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "バナーストレージ設定";

// Campaign ECPM settings
$GLOBALS['strEnableECPM']                            = "Use eCPM optimized priorities instead of remnant-weighted priorities";
$GLOBALS['strEnableContractECPM']                    = "Use eCPM optimized priorities instead of standard contract priorities";
$GLOBALS['strEnableECPMfromRemnant']                 = "(If you enable this feature all your remnant campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strEnableECPMfromECPM']                    = "(If you disable this feature some of your active eCPM campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strInactivatedCampaigns']                  = "List of campaigns which became inactive due to the changes in preferences:";

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "メンテナンス設定";
$GLOBALS['strConversionTracking']                    = "コンバージョン追跡設定";
$GLOBALS['strEnableConversionTracking']              = "コンバージョンの追跡を有効にする";
$GLOBALS['strCsvImport']                             = "オフラインでのコンバージョンをアップロードすることを許可する";
$GLOBALS['strBlockAdViews']                          = "特定の時間内に同じゾーンもしくは広告にアクセスするユーザがいた場合、そのインプレッション数を取得しない";
$GLOBALS['strBlockAdViewsError']                     = "インプレッションのブロック数は正数を入力してください";
$GLOBALS['strBlockAdClicks']                         = "特定の時間内に同じゾーンもしくは広告にアクセスするユーザがいた場合、その広告クリック数を取得しない";
$GLOBALS['strBlockAdClicksError']                    = "クリックのブロック数は正数を入力してください";
$GLOBALS['strMaintenanceOI']                         = "メンテナンス時間間隔(分）";
$GLOBALS['strMaintenanceOIError']                    = "メンテナンスの時間間隔が不正です。正しい値に関してはドキュメントを確認してください。";
$GLOBALS['strPrioritySettings']                      = "優先度設定";
$GLOBALS['strPriorityInstantUpdate']                 = "優先度の変更を即反映する";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "デフォルトの広告インプレッション接続ウィンドウ（秒）";
$GLOBALS['strDefaultImpConWindowError']              = "デフォルトの広告インプレッション接続ウィンドウは、正数を入力してください";
$GLOBALS['strDefaultCliConWindow']                   = "デフォルトの広告クリックウィンドウ（秒）";
$GLOBALS['strDefaultCliConWindowError']              = "デフォルトの広告クリックウィンドウは、正数を入力してください";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "インプレッションの残数がここで指定する数値を下回った場合、警告Eメールを送信する";
$GLOBALS['strWarnLimitErr']                          = "残数は正数を入力してください";
$GLOBALS['strWarnLimitDays']                         = "表示日数の残数がここで指定する数値を下回った場合、警告Eメールを送信する";
$GLOBALS['strWarnLimitDaysErr']                      = "残数は正数を入力してください";
$GLOBALS['strAllowEmail']                            = "メール送信を共通して許可する";
$GLOBALS['strEmailAddressFrom']                      = "メール送信時の送り主アドレス";
$GLOBALS['strEmailAddressName']                      = "Eメールに含める、送信者名";
$GLOBALS['strWarnAdmin']                             = "キャンペーンが終了しそうになったら、管理者宛てにメールを送る。";
$GLOBALS['strWarnClient']                            = "キャンペーンが終了しそうになったら、広告主宛てにメールを送る。";
$GLOBALS['strWarnAgency']                            = "キャンペーンが終了しそうになったら、媒体主宛てにメールを送る。";

// UI Settings
$GLOBALS['strGuiSettings']                           = "ユーザインターフェース設定";
$GLOBALS['strGeneralSettings']                       = "全般設定";
$GLOBALS['strAppName']                               = "アプリケーション名";
$GLOBALS['strMyHeader']                              = "ヘッダファイルの場所";
$GLOBALS['strMyHeaderError']                         = "ヘッダファイルが見つかりません。";
$GLOBALS['strMyFooter']                              = "フッタファイルの場所";
$GLOBALS['strMyFooterError']                         = "フッタファイルが見つかりません";
$GLOBALS['strDefaultTrackerStatus']                  = "デフォルトの追跡ステータス";
$GLOBALS['strDefaultTrackerType']                    = "デフォルトの追跡タイプ";
$GLOBALS['strSSLSettings']                           = "SSL設定";
$GLOBALS['requireSSL']                               = "ユーザインターフェースへのアクセスを強制的にSSLを使う";
$GLOBALS['sslPort']                                  = "SSLポート番号";
$GLOBALS['strDashboardSettings']                     = "ダッシュボード設定";

$GLOBALS['strMyLogo']                                = "カスタムロゴファイル名";
$GLOBALS['strMyLogoError']                           = "ロゴファイルがadmin/imagesディレクトリに存在しません";
$GLOBALS['strGuiHeaderForegroundColor']              = "ヘッダーのフロント色";
$GLOBALS['strGuiHeaderBackgroundColor']              = "ヘッダーの背景色";
$GLOBALS['strGuiActiveTabColor']                     = "アクティブタブの色";
$GLOBALS['strGuiHeaderTextColor']                    = "ヘッダーのテキスト色";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "RGBフォーマットで色を指定してください(e.g. 0066CC)";

$GLOBALS['strGzipContentCompression']                = "GZIP圧縮をする";
$GLOBALS['strClientInterface']                       = "広告主インターフェース";
$GLOBALS['strReportsInterface']                      = "レポートインターフェース";
$GLOBALS['strClientWelcomeEnabled']                  = "広告主のウェルカムメッセージを有効にする";
$GLOBALS['strClientWelcomeText']                     = "ウェルカムテキスト<br />（HTMLタグ使用可）";

$GLOBALS['strPublisherInterface']                    = "Webサイトインターフェース";
$GLOBALS['strPublisherAgreementEnabled']             = "Terms and Conditionsを受諾しなかったユーザに対し、ログインコントロールをする";
$GLOBALS['strPublisherAgreementText']                = "ログインテキスト（HTMLタグ使用可）";

// Regenerate Platfor Hash script
$GLOBALS['strPlatformHashRegenerate']                = "Platform Hash Regenerate";
$GLOBALS['strNewPlatformHash']                       = "Your new Platform Hash is:";
$GLOBALS['strPlatformHashInsertingError']            = "Error inserting Platform Hash into database";

// Plugin Settings
$GLOBALS['strPluginSettings']                        = "Plugin Settings";
$GLOBALS['strEnableNewPlugins']                      = "Enable newly installed plugins";
$GLOBALS['strUseMergedFunctions']                    = "Use merged delivery functions file";

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "実験中";
$GLOBALS['strKeywordRetrieval']             = "キーワード検索";
$GLOBALS['strBannerRetrieval']              = "バナー検索メソッド";
$GLOBALS['strRetrieveRandom']               = "ランダムバナー検索 (default)";
$GLOBALS['strRetrieveNormalSeq']            = "ノーマルなシーケンシャルバナー検索";
$GLOBALS['strWeightSeq']                    = "ウェイトベースのシーケンシャルバナー検索";
$GLOBALS['strFullSeq']                      = "フルシーケンシャルバナー検索";
$GLOBALS['strUseKeywords']                  = "バナー選択用キーワードを使用する";
$GLOBALS['strUseConditionalKeys']           = "ダイレクト選択使用時に論理式を許可する";
$GLOBALS['strUseMultipleKeys']              = "ダイレクト選択使用時にマルチキーワードを許容する";

$GLOBALS['strTableBorderColor']             = "テーブルの境界色";
$GLOBALS['strTableBackColor']               = "テーブルの背景色";
$GLOBALS['strTableBackColorAlt']            = "テーブルの背景色（代替）";
$GLOBALS['strMainBackColor']                = "メイン背景色";
$GLOBALS['strOverrideGD']                   = "GDイメージフォーマットを上書きする";
$GLOBALS['strTimeZone']                     = "タイムゾーン";

?>
