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
$GLOBALS['strInstall']                      = "安裝";
$GLOBALS['strLanguageSelection']            = "語言選擇";
$GLOBALS['strDatabaseSettings']             = "數據庫設置";
$GLOBALS['strAdminSettings']                = "管理員設置";
$GLOBALS['strAdminAccount']                 = "管理員帳號";
$GLOBALS['strAdvancedSettings']             = "高級設置";
$GLOBALS['strSpecifySyncSettings']          = "同步設置";
$GLOBALS['strWarning']                      = "警告";
$GLOBALS['strBtnContinue']                  = "繼續》";
$GLOBALS['strBtnRecover']                   = "恢復》";
$GLOBALS['strBtnStartAgain']                   = "開始升級》";
$GLOBALS['strBtnGoBack']                    = "《返回";
$GLOBALS['strBtnAgree']                     = "我同意》";
$GLOBALS['strBtnDontAgree']                 = "《我拒絕";
$GLOBALS['strBtnRetry']                     = "重試";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterArgcArv']       = "如許運行維護腳本，您需要開啟PHP配置變量中的register_argc_argv";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strTablesPrefix']                 = "名稱前綴";
$GLOBALS['strTablesType']                   = "表格類型";


$GLOBALS['strRecoveryRequiredTitle']    = "你以前嘗試升級遇到一個錯誤";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "警告: 升級文件仍在var目錄。因為權限不夠，我們無法移除此檔案。請先手動刪除該文件吧。 ";
$GLOBALS['strRemoveUpgradeFile']               = "你需要刪除刪除var文件夾下的升級文件";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "您的系統已被成功更新。後面的頁面將幫助您升級新建廣告伺服器的配置。";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";

$GLOBALS['strErrorWritePermissions']        = "文件權限錯誤。\\n </br>在Linux下修正這個錯誤，請輸入以下命令: ";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod a+w %s</i>";

$GLOBALS['strErrorWritePermissionsWin']     = "文件權限錯誤。您必須先修正這個錯誤才可繼續下一步。 ";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "管理員介面路徑";
$GLOBALS['strDeliveryUrlPrefix']            = "發布引擎路徑";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "發布引擎路徑 (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "由於安全原因無法編輯所有設定。如果你希望修改，你需要解鎖配置文件。 ";
$GLOBALS['strImagesUrlPrefixSSL']           = "由於安全原因無法編輯所有設定。如果你希望修改，你需要解鎖配置文件。 (SSL)";



/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "選擇章節";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "無法修改配置文件";
$GLOBALS['strUnableToWritePrefs']                    = "無法向數據庫提交屬性更改 ";
$GLOBALS['strImageDirLockedDetected']	             = "<b>圖片文件夾</b>不可寫<br>在修改文件夾權限之前無法修改或創建相關文件夾。\\n";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "配置檢查表";
$GLOBALS['strConfigurationSettings']                 = "配置設置";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "管理員設置";
$GLOBALS['strLoginCredentials']                      = "登錄信任";
$GLOBALS['strAdminUsername']                         = "管理員用戶名";
$GLOBALS['strAdminPassword']                         = "管理員密碼";
$GLOBALS['strInvalidUsername']                       = "用戶名不正確";
$GLOBALS['strBasicInformation']                      = "基本信息";
$GLOBALS['strAdminFullName']                         = "管理員全名";
$GLOBALS['strAdminEmail']                            = "管理員郵件地址";
$GLOBALS['strAdministratorEmail']                    = "管理員郵件地址";
$GLOBALS['strCompanyName']                           = "公司名稱";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strNovice']                                = "管理員的刪除操作需確認";
$GLOBALS['strUserlogEmail']                          = "記錄所有發出郵件資訊";
$GLOBALS['strTimezone']                              = "時區";
$GLOBALS['strTimezoneEstimated']                     = "預計時區";
$GLOBALS['strTimezoneGuessedValue']                  = "在PHP設定中的時區不正確";
$GLOBALS['strTimezoneSeeDocs']                       = "請參閱 %DOCS% 了解在PHP中設定這個變量的方法。";
$GLOBALS['strTimezoneDocumentation']                 = "文檔";
$GLOBALS['strAdminSettingsTitle']                    = "創建管理員賬號";
$GLOBALS['strAdminSettingsIntro']                    = "請完成這個表格來創建您的廣告伺服器管理員賬號。";
$GLOBALS['strConfigSettingsIntro']                   = "請檢查以下設定，進行必需的修改，如果您不確定，請使用默認選項";

$GLOBALS['strEnableAutoMaintenance']	             = "運行期間的自動維護還未設定";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "數據庫設置";
$GLOBALS['strDatabaseServer']                        = "全局數據庫伺服器設置";
$GLOBALS['strDbType']                                = "數據庫類型";
$GLOBALS['strDbHost']                                = "數據庫主機名";
$GLOBALS['strDbPort']                                = "數據庫端口號";
$GLOBALS['strDbUser']                                = "數據庫用戶名";
$GLOBALS['strDbPassword']                            = "數據庫密碼";
$GLOBALS['strDbName']                                = "數據庫名";
$GLOBALS['strDatabaseOptimalisations']               = "全局數據庫優化設置";
$GLOBALS['strPersistentConnections']                 = "使用持久連結";
$GLOBALS['strCantConnectToDb']                       = "無法連結數據庫";
$GLOBALS['strDemoDataInstall']                       = "安裝演示數據";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "電子郵件設置";
$GLOBALS['strQmailPatch']                            = "qmail的補丁";
$GLOBALS['strEnableQmailPatch']                      = "啟用qmail補丁";
$GLOBALS['strEmailHeader']                           = "電子郵件標題";
$GLOBALS['strEmailLog']                              = "電子郵件日誌";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "審計追蹤設置";
$GLOBALS['strEnableAudit']                           = "啟用審計追蹤";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "調試日誌設置";
$GLOBALS['strProduction']                            = "產品伺服器";
$GLOBALS['strEnableDebug']                           = "啟用調試日誌";
$GLOBALS['strDebugMethodNames']                      = "在調試日誌中包括方法名";
$GLOBALS['strDebugLineNumbers']                      = "在調試日誌中包括方線程號碼";
$GLOBALS['strDebugType']                             = "調試日誌類型";
$GLOBALS['strDebugTypeFile']                         = "文件";
$GLOBALS['strDebugTypeSql']                          = "SQL數據庫";
$GLOBALS['strDebugTypeSyslog']                       = "系統日誌";
$GLOBALS['strDebugName']                             = "除錯日誌名，日曆，SQL表格或系統日誌工具";
$GLOBALS['strDebugPriority']                         = "除錯優先級";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - 所有信息";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - 默認信息";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - 最少信息";
$GLOBALS['strDebugIdent']                            = "調試鑑定弦";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "發布設置";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "頁面路徑";
$GLOBALS['strDeliveryPath']                          = "發布緩存";
$GLOBALS['strImagePath']                             = "圖片路徑";
$GLOBALS['strDeliverySslPath']                       = "發布SSL緩存";
$GLOBALS['strImageSslPath']                          = "圖片SSL路徑";
$GLOBALS['strImageStore']                            = "圖片文件夾";
$GLOBALS['strTypeWebSettings']                       = "Webserver本地廣告全局存儲設置 ";
$GLOBALS['strTypeWebMode']                           = "存儲模式";
$GLOBALS['strTypeWebModeLocal']                      = "本地目錄";
$GLOBALS['strTypeDirError']                          = "無法通過Web Server寫入本地目錄 ";
$GLOBALS['strTypeWebDir']                            = "本地目錄";
$GLOBALS['strTypeFTPHost']                           = "FTP主機";
$GLOBALS['strTypeFTPDirectory']                      = "主機目錄";
$GLOBALS['strTypeFTPUsername']                       = "登錄";
$GLOBALS['strTypeFTPPassword']                       = "密碼";
$GLOBALS['strTypeFTPPassive']                        = "使用被動FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "FTP主機目錄不存在";
$GLOBALS['strTypeFTPErrorConnect']                   = "無法連結FTP伺服器，登錄名或密碼不正確";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "您安裝的PHP不支持FTP";
$GLOBALS['strTypeFTPErrorHost']                      = "主機不正確";
$GLOBALS['strDeliveryFilenames']                     = "全局發布文件名";
$GLOBALS['strDeliveryFilenamesAdClick']              = "廣告點擊";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "廣告轉化參數";
$GLOBALS['strDeliveryFilenamesAdContent']            = "廣告內容";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "廣告轉化";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "廣告轉化（JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "廣告框架";
$GLOBALS['strDeliveryFilenamesAdImage']              = "廣告圖片";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "廣告 (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "廣告層";
$GLOBALS['strDeliveryFilenamesAdLog']                = "廣告記錄";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "彈出廣告";
$GLOBALS['strDeliveryFilenamesAdView']               = "廣告預覽";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "生成遠程調用XML";
$GLOBALS['strDeliveryFilenamesLocal']                = "生成本地的";
$GLOBALS['strDeliveryFilenamesFrontController']      = "字體控制器";
$GLOBALS['strDeliveryFilenamesFlash']                = "包括Flash（可以使用絕對路徑)";
$GLOBALS['strDeliveryCaching']                       = "全局發送緩存設置";
$GLOBALS['strDeliveryCacheLimit']                    = "緩存刷新頻率（秒)";


$GLOBALS['strOriginPort']                            = "源數據庫端口號";
$GLOBALS['strOriginScript']                          = "源數據庫腳本文件";
$GLOBALS['strOriginTypeXMLRPC']                      = "遠程調用XML";
$GLOBALS['strOriginTimeout']                         = "源暫停（秒)";
$GLOBALS['strOriginProtocol']                        = "源伺服器協議";

$GLOBALS['strDeliveryAcls']                          = "在分發時評估廣告的分發";
$GLOBALS['strDeliveryObfuscate']                     = "混淆通道時廣告";
$GLOBALS['strDeliveryExecPhp']                       = "可在廣告中使用PHP代碼（可能存在安全隱患)";
$GLOBALS['strDeliveryCtDelimiter']                   = "第三方廣告跟蹤分隔符";
$GLOBALS['strP3PSettings']                           = "P3P隱私策略的全局設置";
$GLOBALS['strUseP3P']                                = "使用P3P策略";
$GLOBALS['strP3PCompactPolicy']                      = "P3P壓縮策略";
$GLOBALS['strP3PPolicyLocation']                     = "P3P策略地點";

// General Settings
$GLOBALS['uiEnabled']                                = "啟用用戶界面";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "地理定位設置";
$GLOBALS['strGeotargeting']                          = "地理定位設置";
$GLOBALS['strGeotargetingType']                      = "地理定位模塊類型";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "使用自帶的MaxMindGeoLite 國家數據庫";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP 國家數據庫(如果不填則使用免費數據庫)";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP 區域數據庫地址";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP 城市數據地址";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP 大區數據庫地址";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP DMA 數據庫地址";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP 組織數據庫地址";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP數據庫地址";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP網速數據地址";
$GLOBALS['strGeoShowUnavailable']                    = "如果沒有GeoIP數據，則提示地理定位發布條件";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "在指定位置沒有MaxMind GeoIP 國家數據庫";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "在指定位置沒有MaxMind GeoIP 區域數據庫";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "在指定位置沒有MaxMind GeoIP 城市數據庫";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "在指定位置沒有MaxMind GeoIP 大區數據庫";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "在指定位置沒有MaxMind GeoIP DMA數據庫";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "在指定位置沒有MaxMind GeoIP 組織數據庫";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "在指定位置沒有MaxMind GeoIP 數據庫";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "在指定位置沒有MaxMind GeoIP 網速數據庫";

// Interface Settings
$GLOBALS['strInventory']                             = "系統管理";
$GLOBALS['strShowCampaignPreview']                   = "在<i>廣告</i>頁中預覽所有廣告";
$GLOBALS['strShowBannerHTML']                        = "實際顯示廣告，以代替plain html代碼的廣告預覽";
$GLOBALS['strShowBannerPreview']                     = "在頁首顯示廣告預覽";
$GLOBALS['strGUIShowMatchingBanners']                = "顯示符合<i>Linked banner</i>的廣告";
$GLOBALS['strGUIShowParentCampaigns']                = "顯示<i>Linked banner</i>的父項目";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "默認匿名項目";
$GLOBALS['strStatisticsDefaults']                    = "統計";
$GLOBALS['strBeginOfWeek']                           = "一周的開始";
$GLOBALS['strPercentageDecimals']                    = "十進製百分比";
$GLOBALS['strWeightDefaults']                        = "默認權重";
$GLOBALS['strDefaultBannerWeight']                   = "默認廣告權重";
$GLOBALS['strDefaultCampaignWeight']                 = "默認項目權重";
$GLOBALS['strConfirmationUI']                        = "在用戶介面(UI)確認";

$GLOBALS['strPublisherDefaults']                     = "網站默認設置";
$GLOBALS['strModesOfPayment']                        = "支付方式";
$GLOBALS['strCurrencies']                            = "現金";
$GLOBALS['strCategories']                            = "分類";
$GLOBALS['strHelpFiles']                             = "幫助文件";
$GLOBALS['strHasTaxID']                              = "稅務ID";
$GLOBALS['strDefaultApproved']                       = "勾選的覆選框";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "默認轉化規則";
$GLOBALS['strDefaultConversionType']                 = "默認轉化規則";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "允許生成模式";
$GLOBALS['strInvocationDefaults']                    = "默認調用方式";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "默認啟用第三方點擊跟蹤";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "全局發送緩存設置";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "全球防止統計登錄設置";
$GLOBALS['strLogAdRequests']                         = "廣告的每次請求都需要記錄";
$GLOBALS['strLogAdImpressions']                      = "廣告的每次瀏覽都需要記錄";
$GLOBALS['strLogAdClicks']                           = "廣告的每次點擊都需要記錄";
$GLOBALS['strLogTrackerImpressions']                 = "廣告每次的跟蹤曝光都需要記錄";
$GLOBALS['strReverseLookup']                         = "反向查找瀏覽者的主機名";
$GLOBALS['strProxyLookup']                           = "嘗試查找通過代理伺服器訪問的訪問者的真是IP地址";
$GLOBALS['strPreventLogging']                        = "全球防止統計登錄設置";
$GLOBALS['strIgnoreHosts']                           = "來自以下IP地址或主機的訪客數據不統計";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "廣告存儲設置";

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "維護設置";
$GLOBALS['strCsvImport']                             = "允許上傳離線轉化結果";
$GLOBALS['strBlockAdViews']                          = "如果瀏覽者在在指定時間（秒）內瀏覽同一個廣告，不計算廣告曝光量";
$GLOBALS['strBlockAdViewsError']                     = "廣告曝光塊值必須非負整數";
$GLOBALS['strBlockAdClicks']                         = "如果瀏覽者在在指定時間（秒）內點擊同一個廣告，不計算廣告點擊數";
$GLOBALS['strBlockAdClicksError']                    = "阻擋廣告點擊值應該為非負整數";
$GLOBALS['strMaintenanceOI']                         = "管理運行間隔（分鐘)";
$GLOBALS['strMaintenanceOIError']                    = "維護操作間隔設定不合法 - 請閱讀文檔中關於合法時間的定義";
$GLOBALS['strPrioritySettings']                      = "全局優先權設定";
$GLOBALS['strPriorityInstantUpdate']                 = "修改後廣告優先級立即生效";
$GLOBALS['strDefaultImpConWindow']                   = "默認廣告曝光連結窗口（秒)";
$GLOBALS['strDefaultImpConWindowError']              = "默認廣告曝光連結窗口數應該為正整數";
$GLOBALS['strDefaultCliConWindow']                   = "默認廣告點擊連結窗口（秒)";
$GLOBALS['strDefaultCliConWindowError']              = "默認廣告點擊連結窗口數應該為正整數";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "郵件提醒剩餘曝光投放數以少於指定的數量";
$GLOBALS['strWarnLimitErr']                          = "警告限制請使用正整數";
$GLOBALS['strWarnLimitDays']                         = "在指定日期之前發送一封提醒郵件";
$GLOBALS['strWarnLimitDaysErr']                      = "提醒限制日期應該是一個整數";
$GLOBALS['strAllowEmail']                            = "全局允許發送電子郵件";
$GLOBALS['strEmailAddressFrom']                      = "發送報告的電子郵件地址";
$GLOBALS['strEmailAddressName']                      = "發送停止活動電子郵件的公司或者人名";
$GLOBALS['strWarnAdmin']                             = "郵件提醒管理員項目即將過期";
$GLOBALS['strWarnClient']                            = "郵件提醒客戶項目即將過期";
$GLOBALS['strWarnAgency']                            = "郵件提醒代理商項目即將過期";

// UI Settings
$GLOBALS['strGuiSettings']                           = "用戶界面設定";
$GLOBALS['strGeneralSettings']                       = "一般設置";
$GLOBALS['strAppName']                               = "應用名稱";
$GLOBALS['strMyHeader']                              = "頁眉文件位置";
$GLOBALS['strMyHeaderError']                         = "在您指定的位置下沒有頁眉文件";
$GLOBALS['strMyFooter']                              = "頁腳文件位置";
$GLOBALS['strMyFooterError']                         = "在您指定的位置下沒有頁腳文件";
$GLOBALS['strDefaultTrackerStatus']                  = "默認跟蹤狀態";
$GLOBALS['strDefaultTrackerType']                    = "默認跟蹤模式";
$GLOBALS['strSSLSettings']                           = "SSL設置";
$GLOBALS['requireSSL']                               = "強制使用SSL訪問用戶介面(UI)";
$GLOBALS['sslPort']                                  = "Web伺服器使用的SSL端口";

$GLOBALS['strMyLogo']                                = "自定義logo文件名";
$GLOBALS['strMyLogoError']                           = "admin/images目錄下沒有logo文件";
$GLOBALS['strGuiHeaderForegroundColor']              = "頁眉前景顏色";
$GLOBALS['strGuiHeaderBackgroundColor']              = "頁眉背景顏色";
$GLOBALS['strGuiActiveTabColor']                     = "激活標籤的顏色";
$GLOBALS['strGuiHeaderTextColor']                    = "頁眉文本的顏色";
$GLOBALS['strColorError']                            = "請使用RGB格式輸入顏色資訊，如'0066CC'";

$GLOBALS['strGzipContentCompression']                = "使用GZIP進行壓縮";
$GLOBALS['strClientInterface']                       = "客戶界面";
$GLOBALS['strReportsInterface']                      = "報告界面";
$GLOBALS['strClientWelcomeText']                     = "歡迎辭";

$GLOBALS['strPublisherInterface']                    = "網站界面";
$GLOBALS['strPublisherAgreementText']                = "登錄文本(支持HTML標籤)";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
