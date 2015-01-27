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

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection']        = "ltr";
$GLOBALS['phpAds_TextAlignRight']       = "right";
$GLOBALS['phpAds_TextAlignLeft']        = "left";
$GLOBALS['phpAds_CharSet']              = "UTF-8";

$GLOBALS['phpAds_DecimalPoint']         = ".";
$GLOBALS['phpAds_ThousandsSeperator']   = ",";

// Date & time configuration
$GLOBALS['date_format']                 = "%d-%m-%Y";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m-%Y";
$GLOBALS['day_format']                  = "%d-%m";
$GLOBALS['week_format']                 = "%W-%Y";
$GLOBALS['weekiso_format']              = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "主頁";
$GLOBALS['strHelp']                     = "幫助";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "重新開始";
$GLOBALS['strNavigation']               = "導航";
$GLOBALS['strShortcuts']                = "快捷方式";
$GLOBALS['strActions']                  = "操作";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "系統管理";
$GLOBALS['strMaintenance']              = "維護";
$GLOBALS['strProbability']              = "Probability";
$GLOBALS['strInvocationcode']           = "調用代碼";
$GLOBALS['strTrackerVariables']         = "跟蹤器變量";
$GLOBALS['strBasicInformation']         = "基本信息";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "登錄信息";
$GLOBALS['strLogoutURL']                = "退出後指向地址 <br />不填則指向默認地址";
$GLOBALS['strAppendTrackerCode']        = "附加跟蹤碼";
$GLOBALS['strOverview']                 = "Overview";
$GLOBALS['strSearch']                   = "<u>搜索</u>";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "詳細";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "查找更新";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "壓縮";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "用戶";
$GLOBALS['strEdit']                     = "編輯";
$GLOBALS['strCreate']                   = "新建";
$GLOBALS['strDuplicate']                = "複製";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "移動到";
$GLOBALS['strDelete']                   = "刪除";
$GLOBALS['strActivate']                 = "激活";
$GLOBALS['strDeActivate']               = "解除激活";
$GLOBALS['strConvert']                  = "轉換";
$GLOBALS['strRefresh']                  = "刷新";
$GLOBALS['strSaveChanges']              = "保存更改";
$GLOBALS['strUp']                       = "上";
$GLOBALS['strDown']                     = "下";
$GLOBALS['strSave']                     = "保存";
$GLOBALS['strCancel']                   = "取消";
$GLOBALS['strBack']                     = "回退";
$GLOBALS['strPrevious']                 = "上一步";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "下一步";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "是";
$GLOBALS['strNo']                       = "否";
$GLOBALS['strNone']                     = "無";
$GLOBALS['strCustom']                   = "定制";
$GLOBALS['strDefault']                  = "默認";
$GLOBALS['strOther']                    = "其它";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "無限制";
$GLOBALS['strUntitled']                 = "未命名";
$GLOBALS['strAll']                      = "全部";
$GLOBALS['strAvg']                      = "平均";
$GLOBALS['strAverage']                  = "平均";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Overall";
$GLOBALS['strTotal']                    = "合計";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "活躍";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "到";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "連接到";
$GLOBALS['strDaysLeft']                 = "剩餘天數";
$GLOBALS['strCheckAllNone']             = "全選/取消全選";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>全部展開</u>";
$GLOBALS['strCollapseAll']              = "<u>全部收起</u>";
$GLOBALS['strShowAll']                  = "顯示全部";
$GLOBALS['strNoAdminInterface']         = "管理界面將會在維護之後關閉，但不會影響你正在投放的項目。";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "The following fields contain errors:";
$GLOBALS['strFieldFixBeforeContinue1']  = "在繼續之前，您需要";
$GLOBALS['strFieldFixBeforeContinue2']  = "糾正這些錯誤";
$GLOBALS['strDelimiter']                = "分隔符";
$GLOBALS['strMiscellaneous']            = "雜項";
$GLOBALS['strCollectedAllStats']        = "所有統計數據";
$GLOBALS['strCollectedToday']           = "今天";
$GLOBALS['strCollectedYesterday']       = "昨天";
$GLOBALS['strCollectedThisWeek']        = "本周";
$GLOBALS['strCollectedLastWeek']        = "上周";
$GLOBALS['strCollectedThisMonth']       = "本月";
$GLOBALS['strCollectedLastMonth']       = "上月";
$GLOBALS['strCollectedLast7Days']       = "過去7天";
$GLOBALS['strCollectedSpecificDates']   = "特殊數據";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "值";
$GLOBALS['strAdmin']                    = "管理";
$GLOBALS['strWarning']                  = "警告";
$GLOBALS['strNotice']                   = "提示";
$GLOBALS['strRequiredField']            = "Required field";
$GLOBALS['strCloseWindow']              = "Close window";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "The dashboard can not be displayed";
$GLOBALS['strNoCheckForUpdates']        = "The dashboard cannot be displayed unless the<br />check for updates setting is enabled.";
$GLOBALS['strEnableCheckForUpdates']    = "Please enable the <a href='account-settings-update.php' target='_top'>check for updates</a> setting on the<br/><a href='account-settings-update.php' target='_top'>update settings</a> page.";
$GLOBALS['strChoosenDisableHomePage']   = "You have choosen to disable your Home page.";
$GLOBALS['strAccessHomePage']           = "Click here to access your Home page";
$GLOBALS['strEditSyncSettings']         = "and edit your synchronization settings";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "code";
$GLOBALS['strDashboardSystemMessage']   = "System message";
$GLOBALS['strDashboardErrorHelp']       = "If this error repeats please describe your problem in detail and post it on <a href='http://forum.revive-adserver.com/'>forum.revive-adserver.com/</a>.";

// Priority
$GLOBALS['strPriority']                 = "優先";
$GLOBALS['strPriorityLevel']            = "優先級";
$GLOBALS['strPriorityTargeting']        = "發行";
$GLOBALS['strPriorityOptimisation']     = "雜項"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "限制";
$GLOBALS['strNoLimitations']            = "没有限制";
$GLOBALS['strCapping']                  = "上限";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "名稱";
$GLOBALS['strSize']                     = "大小";
$GLOBALS['strWidth']                    = "寬";
$GLOBALS['strHeight']                   = "高";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "目標";
$GLOBALS['strLanguage']                 = "語言";
$GLOBALS['strDescription']              = "Description";
$GLOBALS['strVariables']                = "變量";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "注釋";

// User access
$GLOBALS['strWorkingAs']                = "用作";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "用作";
$GLOBALS['strSwitchTo']                 = "Switch to";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s用於";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Add user";
$GLOBALS['strLinkUser_Key']             = "Add <u>u</u>ser";
$GLOBALS['strUsernameToLink']           = "將被添加用戶的姓名";
$GLOBALS['strEmailToLink']              = "將被添加用戶的Email";
$GLOBALS['strNewUserWillBeCreated']     = "將創建新用戶";
$GLOBALS['strToLinkProvideEmail']       = "如想新增用戶,請提供用戶電子郵件";
$GLOBALS['strToLinkProvideUsername']    = "如想新增用戶,請提供用戶名稱";
$GLOBALS['strErrorWhileCreatingUser']   = "創建用戶錯誤: %s";
$GLOBALS['strUserLinkedToAccount']      = "用戶已經被添加到賬號內";
$GLOBALS['strUserAccountUpdated']       = "用戶賬號已經更新";
$GLOBALS['strUserUnlinkedFromAccount']  = "用戶已經從賬號內被刪除";
$GLOBALS['strUserWasDeleted']           = "用戶已經被刪除";
$GLOBALS['strUserNotLinkedWithAccount'] = "Such user is not linked with account";
$GLOBALS['strCantDeleteOneAdminUser']   = "You can't delete a user. At least one user needs to be linked with admin account.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "用戶名";
$GLOBALS['strLinkUserHelpEmail']        = "電子郵件地址";
$GLOBALS['strLastLoggedIn']             = "Last logged in";
$GLOBALS['strDateLinked']               = "Date linked";
$GLOBALS['strUnlink']                   = "Remove";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removing user from last entity";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Removing user from last entity will cause the user to be deleted. Would you like to remove this user?";
$GLOBALS['strUnlinkAndDelete']          = "Remove &amp; delete user";
$GLOBALS['strUnlinkUser']               = "Remove user";
$GLOBALS['strUnlinkUserConfirmBody']    = "Are you sure you want to remove this user?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "用戶訪問";
$GLOBALS['strAdminAccess']              = "Admin Access";
$GLOBALS['strUserProperties']           = "廣告屬性";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "權限";
$GLOBALS['strAuthentification']         = "認證";
$GLOBALS['strWelcomeTo']                = "歡迎來到";
$GLOBALS['strEnterUsername']            = "請填入你的用戶名和密碼";
$GLOBALS['strEnterBoth']                = "請填入你的用戶名和密碼";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "登錄";
$GLOBALS['strLogout']                   = "退出";
$GLOBALS['strUsername']                 = "用戶名";
$GLOBALS['strPassword']                 = "密碼";
$GLOBALS['strPasswordRepeat']           = "重複輸入密碼";
$GLOBALS['strAccessDenied']             = "拒絕訪問";
$GLOBALS['strUsernameOrPasswordWrong']  = "用戶名或密碼不正確，請重新輸入";
$GLOBALS['strPasswordWrong']            = "密碼不正確";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Your account does not have the required permissions to use this feature, you can log into another account to use it.";
$GLOBALS['strDuplicateClientName']      = "用戶名已經存在，請重新選擇用戶名";
$GLOBALS['strDuplicateAgencyName']      = "用戶名已經存在，請重新選擇用戶名";
$GLOBALS['strInvalidPassword']          = "新密碼無效，請重新選擇密碼";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "兩次輸入的密碼不一致";
$GLOBALS['strRepeatPassword']           = "重複輸入密碼";
$GLOBALS['strOldPassword']              = "舊密碼";
$GLOBALS['strNewPassword']              = "新密碼";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "請求";
$GLOBALS['strImpressions']              = "曝光量";
$GLOBALS['strClicks']                   = "點擊";
$GLOBALS['strConversions']              = "轉化";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "Click-Through Ratio";
$GLOBALS['strCNVR']                     = "Sales Ratio";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Total Clicks";
$GLOBALS['strTotalConversions']         = "Total Conversions";
$GLOBALS['strViewCredits']              = "曝光額度";
$GLOBALS['strClickCredits']             = "點擊額度";
$GLOBALS['strConversionCredits']        = "轉化額度";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "每日時間";
$GLOBALS['strTrackerID']                = "跟蹤ID";
$GLOBALS['strTrackerName']              = "跟蹤器名稱";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "廣告";
$GLOBALS['strCampaigns']                = "項目";
$GLOBALS['strCampaignID']               = "項目ID";
$GLOBALS['strCampaignName']             = "項目名稱";
$GLOBALS['strCountry']                  = "國家";
$GLOBALS['strStatsAction']              = "操作";
$GLOBALS['strWindowDelay']              = "窗口延時";
$GLOBALS['strStatsVariables']           = "變量";

// Finance
$GLOBALS['strFinanceCPM']               = "千人成本";
$GLOBALS['strFinanceCPC']               = "每次點擊的費用";
$GLOBALS['strFinanceCPA']               = "每次行動的費用";
$GLOBALS['strFinanceMT']                = "月租";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "籃價值";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "日期";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "日";
$GLOBALS['strDays']                     = "日";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "周";
$GLOBALS['strWeeks']                    = "周";
$GLOBALS['strSingleMonth']              = "月";
$GLOBALS['strMonths']                   = "月";
$GLOBALS['strDayOfWeek']                = "周一至周七";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "小時";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "秒";
$GLOBALS['strMinutes']                  = "分鐘";
$GLOBALS['strHours']                    = "小時";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "廣告商";
$GLOBALS['strClients']                      = "客戶";
$GLOBALS['strClientsAndCampaigns']          = "廣告商與項目";
$GLOBALS['strAddClient']                    = "新增廣告商";
$GLOBALS['strAddClient_Key']                = "新增廣告商(<u>n</u>)";
$GLOBALS['strTotalClients']                 = "所有廣告商";
$GLOBALS['strClientProperties']             = "廣告商屬性";
$GLOBALS['strClientHistory']                = "廣告商歷史";
$GLOBALS['strNoClients']                    = "目前沒有廣告，請先<a href='advertiser-edit.php'>創建</a>";
$GLOBALS['strNoClientsForBanners']          = "目前沒有廣告，請先<a href='advertiser-edit.php'>創建</a>";
$GLOBALS['strConfirmDeleteClient']          = "您真的希望刪除該廣告商";
$GLOBALS['strConfirmDeleteClients']         = "您真的希望刪除該廣告商";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "大小";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "隱藏停用的廣告商";
$GLOBALS['strInactiveAdvertisersHidden']    = "不顯示停用的廣告商";
$GLOBALS['strOverallAdvertisers']           = "客戶";
$GLOBALS['strAdvertiserSignup']             = "註冊廣告主";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "註冊廣告主";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "註冊廣告主";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "廣告商與項目";
// Advertisers properties
$GLOBALS['strContact']                          = "聯繫人";
$GLOBALS['strContactName']                      = "聯繫人名稱";
$GLOBALS['strEMail']                            = "電子郵件";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "Email campaign delivery reports";
$GLOBALS['strNoDaysBetweenReports']             = "Number of days between campaign delivery reports";
$GLOBALS['strSendDeactivationWarning']          = "Email when a campaign is automatically activated/deactivated";
$GLOBALS['strAllowClientModifyInfo']            = "允許用戶修改自己版面";
$GLOBALS['strAllowClientModifyBanner']          = "允許用戶修改自己版面";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "允許用戶修改自己版面";
$GLOBALS['strAllowClientActivateBanner']        = "允許用戶修改自己版面";
$GLOBALS['strAllowClientViewTargetingStats']    = "允許用戶瀏覽版位統計";
$GLOBALS['strAllowCreateAccounts']              = "允許本用戶創建新賬號";
$GLOBALS['strCsvImportConversions']             = "Allow this user to import offline conversions";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "項目";
$GLOBALS['strCampaigns']                    = "項目";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "所有項目數";
$GLOBALS['strActiveCampaigns']              = "啟用中的項目數";
$GLOBALS['strAddCampaign']                  = "新增一個項目";
$GLOBALS['strAddCampaign_Key']              = "新增<u>n</u>ew 項目";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "修改項目";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "刪除所有項目";
$GLOBALS['strLinkedCampaigns']              = "Linked Campaigns";
$GLOBALS['strCampaignStats']                = "Campaign Statistics";
$GLOBALS['strCampaignProperties']           = "項目屬性";
$GLOBALS['strCampaignOverview']             = "項目概要";
$GLOBALS['strCampaignHistory']              = "項目歷史";
$GLOBALS['strNoCampaigns']                  = "There are currently no campaigns defined for this advertiser.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "您是否真的希望刪除該客戶下的所有廣告";
$GLOBALS['strConfirmDeleteCampaign']        = "你是否希望刪除該項目";
$GLOBALS['strConfirmDeleteCampaigns']       = "你是否希望刪除該項目";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "顯示父客戶";
$GLOBALS['strHideParentAdvertisers']        = "隱藏父客戶";
$GLOBALS['strHideInactiveCampaigns']        = "隱藏停用的項目";
$GLOBALS['strInactiveCampaignsHidden']      = "隱藏被撤銷的項目";
$GLOBALS['strContractDetails']              = "Contract details";
$GLOBALS['strInventoryDetails']             = "Inventory details";
$GLOBALS['strPriorityInformation']          = "Priority in relation to other campaigns";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "項目";
$GLOBALS['strHiddenAd']                     = "廣告";
$GLOBALS['strHiddenAdvertiser']             = "廣告商";
$GLOBALS['strHiddenTracker']                = "跟蹤系統";
$GLOBALS['strHiddenWebsite']              = "網站";
$GLOBALS['strHiddenZone']                   = "版位";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "項目撇之";
$GLOBALS['strSelectUnselectAll']            = "選擇/反選";
$GLOBALS['strConfirmOverwrite']             = "Saving these changes will overwrite any individual banner-zone links. Are you sure?";
$GLOBALS['strCampaignsOfAdvertiser']        = "of"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie']           = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns']    = "Calculated for all campaigns";
$GLOBALS['strCalculatedForThisCampaign']    = "Calculated for this campaign";
$GLOBALS['strLinkingZonesProblem']          = "Problem occurred when linking zones";
$GLOBALS['strUnlinkingZonesProblem']        = "Problem occurred when unlinking zones";
$GLOBALS['strZonesLinked']                  = "zone(s) linked";
$GLOBALS['strZonesUnlinked']                = "zone(s) unlinked";
$GLOBALS['strZonesSearch']                  = "Search";
$GLOBALS['strZonesSearchTitle']             = "Search zones and websites by name";
$GLOBALS['strNoWebsitesAndZones']           = "No websites and zones";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "in category";
$GLOBALS['strNoWebsitesAndZonesText']       = "with \"%s\" in name";
$GLOBALS['strToLink']                       = "to link";
$GLOBALS['strToUnlink']                     = "to unlink";
$GLOBALS['strLinked']                       = "Linked";
$GLOBALS['strAvailable']                    = "Available";
$GLOBALS['strShowing']                      = "Showing";
$GLOBALS['strAllCategories']                = "all categories";
$GLOBALS['strUncategorized']                = "Uncategorized";
$GLOBALS['strEditZone']                     = "Edit zone";
$GLOBALS['strEditWebsite']                  = "Edit website";


// Campaign properties
$GLOBALS['strDontExpire']                       = "Don't expire";
$GLOBALS['strActivateNow']                      = "Start immediately";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "低";
$GLOBALS['strHigh']                             = "高";
$GLOBALS['strExpirationDate']                   = "結束日期";
$GLOBALS['strExpirationDateComment']            = "項目結束日期";
$GLOBALS['strActivationDate']                   = "開始日期";
$GLOBALS['strActivationDateComment']            = "項目自該日起啟動";
$GLOBALS['strRevenueInfo']                      = "Revenue Information";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "剩餘曝光量";
$GLOBALS['strClicksRemaining']                  = "剩餘點擊數";
$GLOBALS['strConversionsRemaining']             = "剩餘轉化數";
$GLOBALS['strImpressionsBooked']                = "記錄的曝光量";
$GLOBALS['strClicksBooked']                     = "記錄的點擊數";
$GLOBALS['strConversionsBooked']                = "記錄的轉化數";
$GLOBALS['strCampaignWeight']                   = "Set the campaign weight";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "優化";
$GLOBALS['strAnonymous']                        = "隱藏該項目的廣告主和網站";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "平均每天";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "自動-在剩餘天數中平均分配投放量";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "The type of this campaign has been set to Remnant, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "The type of this campaign has been set to Contract, \\nbut Limit per day is not specified. \\nThis will cause the campaign to be deactivated and \\nits banners won't be delivered until a valid Limit per day has been set. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignStatusPending']            = "未決的";
$GLOBALS['strCampaignStatusInactive']           = "活躍";
$GLOBALS['strCampaignStatusRunning']            = "運行中";
$GLOBALS['strCampaignStatusPaused']             = "已暫停";
$GLOBALS['strCampaignStatusAwaiting']           = "等待中";
$GLOBALS['strCampaignStatusExpired']            = "結束";
$GLOBALS['strCampaignStatusApproval']           = "等待批准 »";
$GLOBALS['strCampaignStatusRejected']           = "被拒絕";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "重啟";
$GLOBALS['strCampaignStatusDeleted']            = "刪除";
$GLOBALS['strCampaignApprove']                  = "批准";
$GLOBALS['strCampaignApproveDescription']       = "拒絕此項目";
$GLOBALS['strCampaignReject']                   = "拒絕";
$GLOBALS['strCampaignRejectDescription']        = "拒絕此項目";
$GLOBALS['strCampaignPause']                    = "暫停";
$GLOBALS['strCampaignPauseDescription']         = "臨時暫停此項目";
$GLOBALS['strCampaignRestart']                  = "恢復運行";
$GLOBALS['strCampaignRestartDescription']       = "恢復本項目的運行";
$GLOBALS['strCampaignStatus']                   = "項目狀態";
$GLOBALS['strReasonForRejection']               = "拒絕的原因";
$GLOBALS['strReasonSiteNotLive']                = "站點不活動";
$GLOBALS['strReasonBadCreative']                = "廣告創意不恰當";
$GLOBALS['strReasonBadUrl']                     = "目標URL不恰當";
$GLOBALS['strReasonBreakTerms']                 = "網站不符合前提和約定條件";
$GLOBALS['strChangeStatus']                     = "Change status";
$GLOBALS['strCampaignType']                     = "項目名稱";
$GLOBALS['strType']                             = "類型";
$GLOBALS['strContract']                         = "聯繫人";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "聯繫人";
$GLOBALS['strStandardContractInfo']             = "Contract campaigns are for smoothly delivering the impressions
    required to achieve a specified time-critical performance requirement. That is, Contract campaigns are for when
    an advertiser has paid specifically to have a given number of impressions, clicks and/or conversions to be
    achieved either between two dates, or per day.";
$GLOBALS['strRemnant']                          = "Remnant";
$GLOBALS['strRemnantInfo']                      = "The default campaign type. Remnant campaigns have lots of different
    delivery options, and you should ideally always have at least one Remnant campaign linked to every zone, to ensure
    that there is always something to show. Use Remnant campaigns to display house banners, ad-network banners, or even
    direct advertising that has been sold, but where there is not a time-critical performance requirement for the
    campaign to adhere to.";
$GLOBALS['strECPMInfo']                         = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strContractCampaign']                 = "Contract Campaign";
$GLOBALS['strRemnantCampaign']                  = "Remnant Campaign";
$GLOBALS['strPricing']                          = "Pricing";
$GLOBALS['strPricingModel']                     = "Pricing model";
$GLOBALS['strSelectPricingModel']               = "-- select model --";
$GLOBALS['strRatePrice']                        = "Rate / Price";
$GLOBALS['strMinimumImpressions']               = "Minimum daily impressions";
$GLOBALS['strLimit']                            = "Limit";
$GLOBALS['strLowExclusiveDisabled']             = "You cannot change this campaign to Remnant or Exclusive, since both an end date and either of impressions/clicks/conversions limit are set. <br>In order to change type, you need to set no expiry date or remove limits.";
$GLOBALS['strCannotSetBothDateAndLimit']        = "You cannot set both an end date and limit for a Remnant or Exclusive campaign.<br>If you need to set both an end date and limit impressions/clicks/conversions please use a non-exclusive Contract campaign.";
$GLOBALS['strWhyDisabled']                      = "why is it disabled?";
$GLOBALS['strBackToCampaigns']                  = "Back to campaigns";
$GLOBALS['strCampaignBanners']                  = "Campaign's banners";
$GLOBALS['strCookies']                          = "Cookies";

// Tracker
$GLOBALS['strTracker']                    = "跟蹤系統";
$GLOBALS['strTrackers']                   = "跟蹤系統";
$GLOBALS['strTrackerOverview']            = "廣告預覽";
$GLOBALS['strTrackerPreferences']            = "跟蹤器首選項";
$GLOBALS['strAddTracker']                 = "增加一個跟蹤器";
$GLOBALS['strAddTracker_Key']             = "<u>新增</u>跟蹤器 ";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "您是否希望刪除該客戶下的所有跟蹤器";
$GLOBALS['strConfirmDeleteTrackers']      = "您是否希望刪除該跟蹤器 ";
$GLOBALS['strConfirmDeleteTracker']       = "您是否希望刪除該跟蹤器 ";
$GLOBALS['strDeleteAllTrackers']          = "刪除所有廣告";
$GLOBALS['strTrackerProperties']          = "跟蹤器屬性";
$GLOBALS['strTrackerOverview']            = "廣告預覽";
$GLOBALS['strModifyTracker']              = "修改跟蹤器";
$GLOBALS['strLog']                        = "記錄？";
$GLOBALS['strDefaultStatus']              = "默認狀態";
$GLOBALS['strStatus']                     = "狀態";
$GLOBALS['strLinkedTrackers']             = "已連結的跟蹤器";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "轉化窗口";
$GLOBALS['strUniqueWindow']               = "獨立窗口";
$GLOBALS['strClick']                      = "點擊";
$GLOBALS['strView']                       = "瀏覽";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "曝光量";
$GLOBALS['strConversionClickWindow']      = "Count conversions which occur within this number of seconds of a click";
$GLOBALS['strConversionViewWindow']       = "Count conversions which occur within this number of seconds of a view";
$GLOBALS['strTotalTrackerImpressions']    = "Total Impressions";
$GLOBALS['strTotalTrackerConnections']    = "Total Connections";
$GLOBALS['strTotalTrackerConversions']    = "Total Conversions";
$GLOBALS['strTrackerImpressions']         = "Impressions";
$GLOBALS['strTrackerImprConnections']     = "Impression Connections";
$GLOBALS['strTrackerClickConnections']    = "Click Connections";
$GLOBALS['strTrackerImprConversions']     = "Impression Conversions";
$GLOBALS['strTrackerClickConversions']    = "Click Conversions";
$GLOBALS['strConversionType']             = "轉化類型";
$GLOBALS['strLinkCampaignsByDefault']     = "Link newly created campaigns by default";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "廣告";
$GLOBALS['strBanners']                       = "廣告";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "新增一個廣告";
$GLOBALS['strAddBanner_Key']                 = "<u>新增</u>一個廣告";
$GLOBALS['strBannerToCampaign']              = "您的項目";
$GLOBALS['strModifyBanner']                  = "修改廣告";
$GLOBALS['strActiveBanners']                 = "啟用中廣告數";
$GLOBALS['strTotalBanners']                  = "所有廣告";
$GLOBALS['strShowBanner']                    = "顯示廣告";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "刪除所有廣告";
$GLOBALS['strActivateAllBanners']            = "激活所有廣告";
$GLOBALS['strDeactivateAllBanners']          = "撤銷所有廣告";
$GLOBALS['strBannerOverview']                = "廣告預覽";
$GLOBALS['strBannerProperties']              = "廣告屬性";
$GLOBALS['strBannerHistory']                 = "廣告歷史";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "There are currently no banners defined for this campaign.";
$GLOBALS['strNoBannersAddCampaign']          = "目前沒有網站，想要新建一個版位，請先<a href='affiliate-edit.php'>創建</a>一個網站";
$GLOBALS['strNoBannersAddAdvertiser']        = "目前沒有網站，想要新建一個版位，請先<a href='affiliate-edit.php'>創建</a>一個網站";
$GLOBALS['strConfirmDeleteBanner']           = "您是否真的希望刪除該廣告";
$GLOBALS['strConfirmDeleteBanners']          = "您是否真的希望刪除該廣告";
$GLOBALS['strConfirmDeleteAllBanners']       = "你是否希望刪除該項目下的所有廣告";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "顯示父項目";
$GLOBALS['strHideParentCampaigns']           = "顯示父項目";
$GLOBALS['strHideInactiveBanners']           = "隱藏停用的廣告";
$GLOBALS['strInactiveBannersHidden']         = "隱藏已停用的廣告";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "文字鏈廣告無法附帶其它廣告";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "警告，可能失蹤";
$GLOBALS['strWarningMissingClosing']         = "正在關閉標籤\">\"";
$GLOBALS['strWarningMissingOpening']         = "正在打開標籤\"<\"";
$GLOBALS['strSubmitAnyway']       		     = "提交";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "屬於"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "廣告首選項";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "默認廣告";
$GLOBALS['strDefaultBannerUrl']                      = "默認圖片URL";
$GLOBALS['strDefaultBannerDestination']              = "默認連結地址";
$GLOBALS['strAllowedBannerTypes']                    = "允許的廣告形式";
$GLOBALS['strTypeSqlAllow']                          = "可使用本地數據庫廣告";
$GLOBALS['strTypeWebAllow']                          = "可使用Webserver伺服器本地廣告";
$GLOBALS['strTypeUrlAllow']                          = "使用外部廣告";
$GLOBALS['strTypeHtmlAllow']                         = "可使用HTML廣告";
$GLOBALS['strTypeTxtAllow']                          = "可使用文字廣告";
$GLOBALS['strTypeHtmlSettings']                      = "HTML廣告選項";
$GLOBALS['strTypeHtmlAuto']                          = "自動轉換HTML廣告以實現點擊跟蹤";
$GLOBALS['strTypeHtmlPhp']                           = "允許HTML格式廣告中運行PHP表達式";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "請選擇廣告形式";
$GLOBALS['strMySQLBanner']             = "Upload a local banner to the database";
$GLOBALS['strWebBanner']               = "Upload a local banner to the webserver";
$GLOBALS['strURLBanner']               = "Link an external banner";
$GLOBALS['strHTMLBanner']              = "Create an HTML banner";
$GLOBALS['strTextBanner']              = "Create a Text banner";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "你是否希望保留已有的圖片，還是上傳其它文件？";
$GLOBALS['strUploadOrKeepAlt']        = "你是否希望保留已有的備份圖片，還是上傳其它文件？";
$GLOBALS['strNewBannerFile']         = "選擇該廣告使用的圖片";
$GLOBALS['strNewBannerFileAlt']     = "請在瀏覽狂中選擇希望使用的備份圖片（但不支持富媒體格式）";
$GLOBALS['strNewBannerURL']         = "廣告圖形 URL (包含 http://) ";
$GLOBALS['strURL']                     = "Destination URL (incl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "關鍵詞";
$GLOBALS['strTextBelow']             = "圖注";
$GLOBALS['strWeight']                 = "權重";
$GLOBALS['strAlt']                     = "說明文字";
$GLOBALS['strStatusText']            = "狀態文字";
$GLOBALS['strBannerWeight']            = "項目權重 ";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "生成HTML廣告";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "生成";
$GLOBALS['strSwfTransparency']		   = "使用透明背景";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Check for hard-coded links inside the Flash file";
$GLOBALS['strConvertSWFLinks']        = "Convert Flash links";
$GLOBALS['strHardcodedLinks']        = "Hard-coded links";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "壓縮SWF文件（需要Flash 6 player)";
$GLOBALS['strOverwriteSource']        = "覆蓋原參數";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense賬號";
$GLOBALS['strLinkAdSenseAccount']         = "鏈接到AdSense賬號";
$GLOBALS['strCreateAdSenseAccount']       = "創建AdSense賬號";
$GLOBALS['strEditAdSenseAccount']         = "編輯AdSense賬號";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "發送選項";
$GLOBALS['strACL']                        = "發送設置";
$GLOBALS['strACLAdd']                     = "Add delivery limitation";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "没有限制";
$GLOBALS['strApplyLimitationsTo']         = "應用限制";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "移除所有限制";
$GLOBALS['strEqualTo']                    = "等於";
$GLOBALS['strDifferentFrom']              = "不同於";
$GLOBALS['strLaterThan']                  = "晚於";
$GLOBALS['strLaterThanOrEqual']           = "晚於或剛好";
$GLOBALS['strEarlierThan']                = "早於";
$GLOBALS['strEarlierThanOrEqual']         = "早於或剛好";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "大於";
$GLOBALS['strLessThan']                   = "少於";
$GLOBALS['strAND']                        = "與";                          // logical operator
$GLOBALS['strOR']                         = "或";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "當： 時候顯示這條廣告";
$GLOBALS['strWeekDay']                    = "工作日";
$GLOBALS['strWeekDays']                   = "工作日";
$GLOBALS['strTime']                       = "時間";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "來源";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "城市";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "發布限制";

$GLOBALS['strDeliveryCapping']            = "每訪問者的發送過濾器";
$GLOBALS['strDeliveryCappingReset']       = "於此時之後重新開始統計";
$GLOBALS['strDeliveryCappingTotal']       = "合計";
$GLOBALS['strDeliveryCappingSession']     = "平均每個線程";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "限定廣告瀏覽數為:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "限定項目瀏覽數為:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "限定版位瀏覽數為:";

// Website
$GLOBALS['strAffiliate']                = "網站";
$GLOBALS['strAffiliates']                 = "網站";
$GLOBALS['strAffiliatesAndZones']        = "網站和版位";
$GLOBALS['strAddNewAffiliate']            = "新增一個網站";
$GLOBALS['strAddNewAffiliate_Key']        = "新增<u>n</u>位網站";
$GLOBALS['strAddAffiliate']                = "Create website";
$GLOBALS['strAffiliateProperties']        = "網站屬性";
$GLOBALS['strAffiliateOverview']        = "Website Overview";
$GLOBALS['strAffiliateHistory']            = "網站歷史記錄";
$GLOBALS['strZonesWithoutAffiliate']    = "不屬於網站的版位";
$GLOBALS['strMoveToNewAffiliate']        = "移至其他網站";
$GLOBALS['strNoAffiliates']                = "目前沒有網站，想要新建一個版位，請先<a href='affiliate-edit.php'>創建</a>一個網站";
$GLOBALS['strConfirmDeleteAffiliate']    = "確定刪除此網站？";
$GLOBALS['strConfirmDeleteAffiliates']   = "確定刪除此網站？";
$GLOBALS['strMakePublisherPublic']        = "此網站中版位公開可用";
$GLOBALS['strAffiliateInvocation']      = "調用代碼";
$GLOBALS['strAdvertiserSetup']          = "註冊廣告主";
$GLOBALS['strTotalAffiliates']          = "所有網站";
$GLOBALS['strInactiveAffiliatesHidden'] = "隱藏未激活的網站";
$GLOBALS['strShowParentAffiliates']     = "顯示父網站";
$GLOBALS['strHideParentAffiliates']     = "隱藏父網站";

// Website (properties)
$GLOBALS['strWebsite']                      = "網站";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "記憶";
$GLOBALS['strAllowAffiliateModifyInfo']     = "允許用戶修改自己版面";
$GLOBALS['strAllowAffiliateModifyZones']    = "允許用戶修改自己版面";
$GLOBALS['strAllowAffiliateLinkBanners']    = "允許用戶";
$GLOBALS['strAllowAffiliateAddZone']        = "允許用戶新建版位";
$GLOBALS['strAllowAffiliateDeleteZone']     = "允允許用戶刪除版位";
$GLOBALS['strAllowAffiliateGenerateCode']   = "允許用戶生成調用代碼";
$GLOBALS['strAllowAffiliateZoneStats']      = "允許用戶瀏覽版位統計";
$GLOBALS['strAllowAffiliateApprPendConv']   = "僅允許用戶瀏覽被審核或等候的轉換數據";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "地址";
$GLOBALS['strAddress']                      = "郵政編碼";
$GLOBALS['strPostcode']                     = "Postcode";
$GLOBALS['strCity']                         = "城市";
$GLOBALS['strCountry']                      = "國家";
$GLOBALS['strPhone']                        = "電話";
$GLOBALS['strFax']                          = "傳真";
$GLOBALS['strAccountContact']               = "財務聯繫人";
$GLOBALS['strPayeeName']                    = "收款人名";
$GLOBALS['strTaxID']                        = "稅務ID";
$GLOBALS['strModeOfPayment']                = "支付方式";
$GLOBALS['strPaymentChequeByPost']          = "郵遞支票";
$GLOBALS['strCurrency']                     = "現金";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Other information";
$GLOBALS['strUniqueUsersMonth']             = "獨立用戶/月";
$GLOBALS['strUniqueViewsMonth']             = "獨立瀏覽量/月";
$GLOBALS['strPageRank']                     = "網頁排名";
$GLOBALS['strCategory']                     = "類別";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "幫助文件";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "網站和版位";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "版位";
$GLOBALS['strZones']                        = "版位";
$GLOBALS['strAddNewZone']                   = "新增一個版位";
$GLOBALS['strAddNewZone_Key']               = "新增<u>n</u>ew版位";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "修改版位";
$GLOBALS['strZoneToWebsite']                = "沒有網站";
$GLOBALS['strLinkedZones']                  = "Linked Zones";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "版位總覽";
$GLOBALS['strZoneProperties']               = "版位屬性";
$GLOBALS['strZoneHistory']                  = "版位歷史";
$GLOBALS['strNoZones']                      = "There are currently no zones defined for this website.";
$GLOBALS['strNoZonesAddWebsite']            = "目前沒有網站，想要新建一個版位，請先<a href='affiliate-edit.php'>創建</a>一個網站";
$GLOBALS['strConfirmDeleteZone']            = "您真的希望刪除該版位";
$GLOBALS['strConfirmDeleteZones']           = "您真的希望刪除該版位";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "版位類型";
$GLOBALS['strBannerButtonRectangle']        = "旗標廣告、按鈕廣告或矩形廣告";
$GLOBALS['strInterstitial']                 = "Interstitial or Floating DHTML";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "文字廣告";
$GLOBALS['strEmailAdZone']                  = "電子郵件/郵件列表版位";
$GLOBALS['strZoneClick']                    = "點擊跟蹤版位";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "顯示符合條件的廣告";
$GLOBALS['strHideMatchingBanners']          = "顯示符合條件的廣告";
$GLOBALS['strBannerLinkedAds']              = "Banners linked to the zone";
$GLOBALS['strCampaignLinkedAds']            = "Campaigns linked to the zone";
$GLOBALS['strTotalZones']                   = "所有版位";
$GLOBALS['strInactiveZonesHidden']          = "隱藏已停用的廣告";
$GLOBALS['strWarnChangeZoneType']           = "因為廣告形式的限制,將版位的形式更改成文字或電子郵件將會斷開與所有廣告/項目的關聯。\\n<ul>\\n <li>文字版位只能與文字廣告相關聯</li>\\n<li>電子郵件廣告版位項目一次僅能與一個激活廣告關聯</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = '由於廣告尺寸沒有任何變化，所改變了版位的尺寸，斷開所有現有廣告與該版位的關聯。需要重新連結符合新尺寸的廣告。';
$GLOBALS['strWarnChangeBannerSize']         = 'Changing the banner size will unlink this banner from any zones that are not the new size, and if this banner\'s <strong>campaign</strong> is linked to a zone of the new size, this banner will be automatically linked';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Inventory Forecasting';
$GLOBALS['strZonesOfWebsite']               = '屬於'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones']                  = "Back to zones";

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)']        = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)']        = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Button 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Button 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Rectangle (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Square Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Medium Rectangle (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Large Rectangle (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Wide Skyscraper (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "高級";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "主要設置";
$GLOBALS['strZoneNoDelivery']            = "If no banners from this zone <br />can be delivered, try to...";
$GLOBALS['strZoneStopDelivery']            = "Stop delivery and don't show a banner";
$GLOBALS['strZoneOtherZone']            = "Display the selected zone instead";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "該版位可以附加彈出或浮動效果";
$GLOBALS['strAppendSettings']            = "附加和預先設定";
$GLOBALS['strZoneForecasting']            = "版位預報設定";
$GLOBALS['strZonePrependHTML']            = "該版位允許為文字廣告預先設定HTML代碼";
$GLOBALS['strZoneAppendHTML']            = "該版位允許為文字廣告附加HTML代碼";
$GLOBALS['strZoneAppendNoBanner']        = "如果沒有廣告投放則附加";
$GLOBALS['strZoneAppendType']            = "附加模式";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML代碼";
$GLOBALS['strZoneAppendZoneSelection']    = "彈出或浮動";
$GLOBALS['strZoneAppendSelectZone']        = "該版位可以附加彈出或浮動效果";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "All the banners linked to the selected zone are currently not active. <br />This is the zone chain that will be followed:";
$GLOBALS['strZoneProbNullPri']            = "There are no active banners linked to this zone.";
$GLOBALS['strZoneProbListChainLoop']    = "Following the zone chain would cause a circular loop. Delivery for this zone is halted.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Please choose what to link to this zone";
$GLOBALS['strLinkedBanners']            = "Link individual banners";
$GLOBALS['strCampaignDefaults']            = "Link banners by parent campaign";
$GLOBALS['strLinkedCategories']         = "Link banners by category";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "關鍵詞";
$GLOBALS['strIncludedBanners']            = "Linked Banners";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "There are no zones available to which this banner can be linked";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} 配對廣告";
$GLOBALS['strNoCampaignsToLink']        = "There are currently no campaigns available which can be linked to this zone";
$GLOBALS['strNoTrackersToLink']            = "There are currently no trackers available which can be linked to this campaign";
$GLOBALS['strNoZonesToLinkToCampaign']  = "There are no zones available to which this campaign can be linked";
$GLOBALS['strSelectBannerToLink']        = "Select the banner you would like to link to this zone:";
$GLOBALS['strSelectCampaignToLink']        = "Select the campaign you would like to link to this zone:";
$GLOBALS['strSelectAdvertiser']         = "選擇客戶";
$GLOBALS['strSelectPlacement']          = "選擇項目";
$GLOBALS['strSelectAd']                 = "選擇廣告";
$GLOBALS['strSelectPublisher']          = "選擇網站";
$GLOBALS['strSelectZone']               = "選擇版位";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "附加跟蹤碼";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "未決的";
$GLOBALS['strStatusApproved']           = "確認";
$GLOBALS['strStatusDisapproved']        = "否決";
$GLOBALS['strStatusDuplicate']          = "複製";
$GLOBALS['strStatusOnHold']             = "擱置";
$GLOBALS['strStatusIgnore']             = "忽略";
$GLOBALS['strConnectionType']           = "類型";
$GLOBALS['strConnTypeSale']             = "出售";
$GLOBALS['strConnTypeLead']             = "領先";
$GLOBALS['strConnTypeSignUp']           = "註冊";
$GLOBALS['strShortcutEditStatuses'] = "編輯狀態";
$GLOBALS['strShortcutShowStatuses'] = "顯示狀態";

// Statistics
$GLOBALS['strStats']                     = "統計";
$GLOBALS['strNoStats']                   = "沒有統計數據";
$GLOBALS['strNoTargetingStats']          = "沒有目標數據";
$GLOBALS['strNoStatsForPeriod']          = "沒有統計數據可供百分比計算";
$GLOBALS['strNoTargetingStatsForPeriod'] = "沒有目標數據可供百分比計算";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "全局歷史";
$GLOBALS['strDailyHistory']              = "每日歷史";
$GLOBALS['strDailyStats']                = "每日統計數據";
$GLOBALS['strWeeklyHistory']             = "每週統計數據";
$GLOBALS['strMonthlyHistory']            = "Monthly history";
$GLOBALS['strCreditStats']               = "額度統計數據";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "在該期限之前累計";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "網站發布數";
$GLOBALS['strCampaignDistribution']      = "項目發布數";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "目標統計";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "瀏覽按照";
$GLOBALS['strBreakdownByDay']            = "日";
$GLOBALS['strBreakdownByWeek']           = "周";
$GLOBALS['strBreakdownByMonth']          = "月";
$GLOBALS['strBreakdownByDow']            = "周一至周七";
$GLOBALS['strBreakdownByHour']           = "小時";
$GLOBALS['strItemsPerPage']              = "每頁顯示條數";
$GLOBALS['strDistributionHistory']       = "發布歷史";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "顯示<u>統計</u>圖形";
$GLOBALS['strExportStatisticsToExcel']   = "<u>導出</u>數據成EXCEL文件";
$GLOBALS['strGDnotEnabled']              = "為了顯示圖表，您必須在PHP中啟用GD。<br /> 請參閱 <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> 。";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "到期";
$GLOBALS['strNoExpiration']           = "沒有到期日";
$GLOBALS['strEstimated']              = "預期到期日";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "項目歷史";

// Reports
$GLOBALS['strReports']                = "報告";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "開始日期";
$GLOBALS['strEndDate']                = "結束日期";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "限制";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "所有客戶";
$GLOBALS['strAnonAdvertisers']           = "匿名客戶";
$GLOBALS['strAllPublishers']             = "所有網站";
$GLOBALS['strAnonPublishers']            = "匿名網站";
$GLOBALS['strAllAvailZones']             = "所有可選擇的版位";

// Userlog
$GLOBALS['strUserLog']                = "用戶日誌";
$GLOBALS['strUserLogDetails']        = "詳細用戶日誌";
$GLOBALS['strDeleteLog']            = "刪除日誌";
$GLOBALS['strAction']                = "操作";
$GLOBALS['strNoActionsLogged']        = "不記錄操作";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Direct Selection";
$GLOBALS['strChooseInvocationType']        = "請選擇生成的公告形式";
$GLOBALS['strGenerate']                    = "生成";
$GLOBALS['strParameters']                = "標籤設置";
$GLOBALS['strFrameSize']                = "框架尺寸";
$GLOBALS['strBannercode']                = "旗標代碼";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "返回報告列表";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
$GLOBALS['strCharset']                  = "Character set";
$GLOBALS['strAutoDetect']                   = "Auto-detect";
$GLOBALS['strCacheBusterComment']       = "  * Replace all instances of {random} with
  * a generated random number (or timestamp).
  *";
$GLOBALS['strSSLBackupComment']         = "
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment']       = "
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";

$GLOBALS['strThirdPartyComment']        = "
  * Don't forget to replace the '{clickurl}' text with
  * the click tracking URL if this ad is to be delivered through a 3rd
  * party (non-Max) adserver.
  *";

// Errors
$GLOBALS['strMySQLError']                       = "SQL Error:";
$GLOBALS['strErrorDatabaseConnetion']           = "Database connection error.";
$GLOBALS['strErrorCantConnectToDatabase']       = "A fatal error occurred %s can't connect to the database. Because
                                                   of this it isn't possible to use the administrator interface. The delivery
                                                   of banners might also be affected. Possible reasons for the problem are:
                                                   <ul>
                                                     <li>The database server isn't functioning at the moment</li>
                                                     <li>The location of the database server has changed</li>
                                                     <li>The username or password used to contact the database server are not correct</li>
                                                     <li>PHP has not loaded the MySQL Extension</li>
                                                   </ul>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] 當嘗試從數據庫中提取客戶數據時出現了錯誤。";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] 當嘗試從數據庫中提取廣告數據時出現了錯誤。";
$GLOBALS['strLogErrorViews']                    = "[phpAds] 當嘗試從數據庫中提取曝光量數據時出現了錯誤。";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] 當嘗試從數據庫中提取點擊數數據時出現了錯誤。";
$GLOBALS['strLogErrorConversions']              = "[phpAds] 當嘗試從數據庫中提取轉換數數據時出現了錯誤。";
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "沒有符合的結果";
$GLOBALS['strErrorOccurred']                    = "出錯";
$GLOBALS['strErrorUploadSecurity']              = "發現潛在的安全隱患，上傳被掛起！";
$GLOBALS['strErrorUploadBasedir']               = "無法訪問上傳文件，可能是正在使用安全模式或目錄打開權限受限起！";
$GLOBALS['strErrorUploadUnknown']               = "由於不知名的願意，導致無法訪問上傳文件。請檢查您的PHP設置";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "訪問數據庫出錯";
$GLOBALS['strErrorDBSerious']                   = "數據庫出錯";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "數據庫表格出錯需要修復。希望了解關於修復表格的更多資訊，請參閱<i>管理員手冊</i>中的<i>排錯</i>章節";
$GLOBALS['strErrorDBContact']                   = "請聯繫伺服器管理員注意相關問題。";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "It was not possible to link this banner to this zone because:";
$GLOBALS['strUnableToLinkBanner']               = "Cannot link this banner: ";
$GLOBALS['strErrorEditingCampaign']             = "更新項目出錯";
$GLOBALS['strUnableToChangeCampaign']           = "因為以下原因無法應用更新";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "因為以下原因無法應用更新";
$GLOBALS['strDatesConflict']                    = "數據衝突";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Some of these statistics were logged in a non-UTC timezone, and may not be displayed in the correct timezone.";
$GLOBALS['strWarningInaccurateReadMore']        = "Read more about this";
$GLOBALS['strWarningInaccurateReport']          = "Some of the statistics in this report were logged in a non-UTC timezone, and may not be displayed in the correct timezone";

//Validation
$GLOBALS['strRequiredFieldLegend']              = "denotes required field";
$GLOBALS['strFormContainsErrors']               = "Form contains errors, please correct the marked fields below.";
$GLOBALS['strRequiredField']                    = "Required field";
$GLOBALS['strXRequiredField']                   = "%s is required";
$GLOBALS['strMaxLengthField']                   = "Please enter maximum %s characters";
$GLOBALS['strEmailField']                       = "Please enter a valid email";
$GLOBALS['strNumericField']                     = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField']             = "Must be greater than 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s must be greater than 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s must be a positive whole number";
$GLOBALS['strXUniqueField']                     = "%s with this %s already exists";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "Must be a decimal with maximum %s decimal places";
$GLOBALS['strInvalidWebsiteURL']                = "Invalid Website URL";


// Email
$GLOBALS['strSirMadam']                         = "先生/女士";
$GLOBALS['strMailSubject']                      = "客戶報告";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "親愛的（）";
$GLOBALS['strMailBannerStats']                  = "{clientname}的廣告統計數據:";
$GLOBALS['strMailBannerActivatedSubject']       = "激活的項目";
$GLOBALS['strMailBannerDeactivatedSubject']     = "撤銷的項目";
$GLOBALS['strMailBannerActivated']              = "激活期限已到，您的項目已經被激活";
$GLOBALS['strMailBannerDeactivated']            = "由於以下原因，您的項目已被撤銷";
$GLOBALS['strMailFooter']                       = "尊敬的：";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "如果您希望繼續在我們的網站投放廣告，請隨時與我們聯繫。";
$GLOBALS['strClientDeactivated']                = "由於以下原因，該項目未被激活";
$GLOBALS['strBeforeActivate']                   = "激活日期還未到";
$GLOBALS['strAfterExpire']                      = "項目已過期";
$GLOBALS['strNoMoreImpressions']                = "曝光量已全部使用";
$GLOBALS['strNoMoreClicks']                     = "點擊數已全部使用";
$GLOBALS['strNoMoreConversions']                = "已經沒有可出售的了";
$GLOBALS['strWeightIsNull']                     = "其權重被設為零";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "您廣告的曝光量、點擊數或轉化數已經低於{limit}";
$GLOBALS['strImpressionsClicksConversionsLow']  = "曝光量/點擊數/轉換數已經過低";
$GLOBALS['strNoViewLoggedInInterval']           = "發送本報告時，系統並沒有關於廣告曝光量的記錄。";
$GLOBALS['strNoClickLoggedInInterval']          = "發送本報告時，系統並沒有關於廣告點擊數的記錄。";
$GLOBALS['strNoConversionLoggedInInterval']     = "發送本報告時，系統並沒有關於廣告轉換數的記錄。";
$GLOBALS['strMailReportPeriod']                 = "本報告統計數據範圍為自{startdate}至{enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "本報告數據截止至{enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "本項目沒有統計數據";
$GLOBALS['strImpendingCampaignExpiry']          = "項目即將到期";
$GLOBALS['strYourCampaign']                     = "您的項目";
$GLOBALS['strTheCampiaignBelongingTo']          = "該項目屬於";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname}在{date}之前.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} 剩餘的曝光量已低於 {limit}。";
$GLOBALS['strImpendingCampaignExpiryBody']      = "該項目即將自動失效，項目之下的廣告也將一併失效:";

// Priority
$GLOBALS['strPriority']                         = "優先";
$GLOBALS['strSourceEdit']                       = "編輯來源";

// Preferences
$GLOBALS['strPreferences']                      = "首選設定";
$GLOBALS['strUserPreferences']                  = "廣告首選項";
$GLOBALS['strChangePassword']                   = "Change Password";
$GLOBALS['strChangeEmail']                      = "Change E-mail";
$GLOBALS['strCurrentPassword']                  = "Current Password";
$GLOBALS['strChooseNewPassword']                = "Choose a new password";
$GLOBALS['strReenterNewPassword']               = "Re-enter new password";
$GLOBALS['strNameLanguage']                     = "Name & Language";
$GLOBALS['strAccountPreferences']               = "賬號首選項";
$GLOBALS['strCampaignEmailReportsPreferences']  = "項目的電子郵件首選項";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "管理員電子郵件報警";
$GLOBALS['strAgencyEmailWarnings']              = "代理商電子郵件告警";
$GLOBALS['strAdveEmailWarnings']                = "廣告主電子郵件告警";
$GLOBALS['strFullName']                         = "全名";
$GLOBALS['strEmailAddress']                     = "電子郵件地址";
$GLOBALS['strUserDetails']                      = "User Details";
$GLOBALS['strLanguageTimezone']                 = "語言和失去";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "用戶界面(UI)首選項";
$GLOBALS['strPluginPreferences']                = "主要選項";
$GLOBALS['strInvocationPreferences']            = "代碼調用首選項";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Revenue";
$GLOBALS['strNumberOfItems']                       = "條目數";
$GLOBALS['strRevenueCPC']                          = "Revenue CPC";
$GLOBALS['strERPM']                                = "千人成本";
$GLOBALS['strERPC']                                = "每次點擊的費用";
$GLOBALS['strERPS']                                = "千人成本";
$GLOBALS['strEIPM']                                = "千人成本";
$GLOBALS['strEIPC']                                = "每次點擊的費用";
$GLOBALS['strEIPS']                                = "千人成本";
$GLOBALS['strECPM']                                = "千人成本";
$GLOBALS['strECPC']                                = "每次點擊的費用";
$GLOBALS['strECPS']                                = "千人成本";
$GLOBALS['strEPPM']                                = "千人成本";
$GLOBALS['strEPPC']                                = "每次點擊的費用";
$GLOBALS['strEPPS']                                = "千人成本";
$GLOBALS['strPendingConversions']               = "Pending conversions";
$GLOBALS['strImpressionSR']                     = "曝光數SR";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "曝光量";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "請求數";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "Num. Items";
$GLOBALS['strRevenueCPC_short']                 = "Rev. CPC";
$GLOBALS['strERPM_short']                       = "千人成本";
$GLOBALS['strERPC_short']                       = "每次點擊的費用";
$GLOBALS['strERPS_short']                       = "千人成本";
$GLOBALS['strEIPM_short']                       = "千人成本";
$GLOBALS['strEIPC_short']                       = "每次點擊的費用";
$GLOBALS['strEIPS_short']                       = "千人成本";
$GLOBALS['strECPM_short']                       = "千人成本";
$GLOBALS['strECPC_short']                       = "每次點擊的費用";
$GLOBALS['strECPS_short']                       = "千人成本";
$GLOBALS['strEPPM_short']                       = "千人成本";
$GLOBALS['strEPPC_short']                       = "每次點擊的費用";
$GLOBALS['strEPPS_short']                       = "千人成本";
$GLOBALS['strID_short']                         = "ID";
$GLOBALS['strRequests_short']                   = "請求數";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "點擊";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "一般設置";
$GLOBALS['strGeneralSettings']              = "一般設置";
$GLOBALS['strMainSettings']                 = "主要設置";
$GLOBALS['strAdminSettings']                = "管理員設置";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = '選擇章節';

// Product Updates
$GLOBALS['strProductUpdates']         = "產品更新";
$GLOBALS['strViewPastUpdates']        = "更新與備份管理";
$GLOBALS['strFromVersion']            = "From Version";
$GLOBALS['strToVersion']              = "To Version";
$GLOBALS['strToggleDataBackupDetails']= "Toggle data backup details";
$GLOBALS['strClickViewBackupDetails'] = "click to view backup details";
$GLOBALS['strClickHideBackupDetails'] = "click to hide backup details";
$GLOBALS['strShowBackupDetails']      = "Show data backup details";
$GLOBALS['strHideBackupDetails']      = "Hide data backup details";
$GLOBALS['strInstallation']           = "Installation";
$GLOBALS['strBackupDeleteConfirm']    = "Do you really want to delete all backups created from this upgrade?";
$GLOBALS['strDeleteArtifacts']         = "Delete Artifacts";
$GLOBALS['strArtifacts']              = "Artifacts";
$GLOBALS['strBackupDbTables']         = "Backup database tables";
$GLOBALS['strLogFiles']               = "Log files";
$GLOBALS['strConfigBackups']          = "Conf backups";
$GLOBALS['strUpdatedDbVersionStamp']  = "Updated database version stamp";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "UPGRADE COMPLETE";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "UPGRADE FAILED";

// Agency
$GLOBALS['strAgencyManagement']              = "帳戶管理";
$GLOBALS['strAgency']                      = "賬號";
$GLOBALS['strAgencies']                   = "賬號";
$GLOBALS['strAddAgency']                   = "新增一個賬戶";
$GLOBALS['strAddAgency_Key']               = "新增版位";
$GLOBALS['strTotalAgencies']               = "賬戶統計";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "沒有相關的賬戶";
$GLOBALS['strConfirmDeleteAgency']           = "您真的希望刪除該賬戶？";
$GLOBALS['strHideInactiveAgencies']          = "藏不活躍的帳戶";
$GLOBALS['strInactiveAgenciesHidden']     = "藏不活躍的帳戶";
$GLOBALS['strAllowAgencyEditConversions'] = "允許編輯轉換";
$GLOBALS['strAllowMoreReports']           = "可使用“移動報告”按鈕";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "目標頻道";
$GLOBALS['strChannels']                   = "目標頻道";
$GLOBALS['strChannelOverview']            = "目標頻道總覽";
$GLOBALS['strChannelManagement']          = "目標頻道管理";
$GLOBALS['strAddNewChannel']              = "新增一個目標頻道";
$GLOBALS['strAddNewChannel_Key']          = "新增一個目標頻道";
$GLOBALS['strChannelToWebsite']           = "沒有網站";
$GLOBALS['strNoChannels']                 = "尚未定義目標頻道";
$GLOBALS['strNoChannelsAddWebsite']       = "目前沒有網站，想要新建一個版位，請先<a href='affiliate-edit.php'>創建</a>一個網站";

$GLOBALS['strEditChannelLimitations']     = "編輯目標頻道限制";
$GLOBALS['strChannelProperties']          = "目標頻道屬性";
$GLOBALS['strChannelLimitations']         = "發送選項";
$GLOBALS['strConfirmDeleteChannel']       = "您是否真的希望刪除該目標頻道";
$GLOBALS['strConfirmDeleteChannels']      = "您是否真的希望刪除該目標頻道";
$GLOBALS['strModifychannel']              = "新增一個目標頻道";
$GLOBALS['strChannelsOfWebsite']          = '屬於'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "變量名";
$GLOBALS['strVariableDescription']     = "Description";
$GLOBALS['strVariableDataType']         = "數據類型";
$GLOBALS['strVariablePurpose']       = "目的";
$GLOBALS['strGeneric']               = "生成";
$GLOBALS['strBasketValue']           = "籃價值";
$GLOBALS['strNumItems']              = "條目數";
$GLOBALS['strVariableIsUnique']      = "dedup轉換";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "數";
$GLOBALS['strString']                 = "串值";
$GLOBALS['strTrackFollowingVars']     = "根據以下變量跟蹤";
$GLOBALS['strAddVariable']             = "新增變量";
$GLOBALS['strNoVarsToTrack']         = "沒有跟蹤的變量";
$GLOBALS['strVariableHidden']       = "Hide variable to websites?";
$GLOBALS['strVariableRejectEmpty']  = "拒絕為空";
$GLOBALS['strTrackingSettings']     = "跟蹤設置";
$GLOBALS['strTrackerType']          = "跟蹤模式";
$GLOBALS['strTrackerTypeJS']        = "跟蹤JavaScript變量";
$GLOBALS['strTrackerTypeDefault']   = "跟踪JavaScript变量（backwards compatible, escaping needed）";
$GLOBALS['strTrackerTypeDOM']       = "使用DOM跟蹤HTML元素";
$GLOBALS['strTrackerTypeCustom']    = "自定義JS代碼";
$GLOBALS['strVariableCode']         = "JavaScript跟蹤代碼";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "廣告商與項目";
$GLOBALS['strYouHaveNoBanners']     = "Campaign has no banners!";
$GLOBALS['strYouHaveNoZones']       = "Banner not linked to any zones!";
$GLOBALS['strNoBannersDropdown']    = "--No Banners Found--";
$GLOBALS['strNoZonesDropdown']      = "--No Zones Found--";
$GLOBALS['strInsertErrorPart1']     = "<br><br><center><b> Error, ";
$GLOBALS['strInsertErrorPart2']     = "records was not inserted! </b></center>";
$GLOBALS['strDuplicatedValue']      = "Duplicated Value!";
$GLOBALS['strInsertCorrect']        = "<br><br><center><b> File was uploaded correctly </b></center>";
$GLOBALS['strReuploadCsvFile']      = "Reupload CSV File";
$GLOBALS['strConfirmUpload']        = "Confirm Upload";
$GLOBALS['strLoadedRecords']        = "Loaded Records";
$GLOBALS['strBrokenRecords']        = "Broken Fields in all Records";
$GLOBALS['strWrongDateFormat']      = "Wrong Date Format";


// Password recovery
$GLOBALS['strForgotPassword']         = "忘記密碼？";
$GLOBALS['strPasswordRecovery']       = "密碼恢復";
$GLOBALS['strEmailRequired']          = "電子郵件為必填項";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "沒有該電子郵件地址";
$GLOBALS['strPwdRecPasswordSaved']    = "新密碼已經保存，請<a href='index.php'>登錄</a>";
$GLOBALS['strPwdRecWrongId']          = "錯誤ID";
$GLOBALS['strPwdRecEnterEmail']       = "請填入你的郵件地址";
$GLOBALS['strPwdRecEnterPassword']    = "請填入新密碼";
$GLOBALS['strPwdRecReset']            = "密碼重置";
$GLOBALS['strPwdRecResetLink']        = "Password reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "重置此用戶的密碼";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s 密碼重置";
$GLOBALS['strProceed']                = "繼續>";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "具備";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binary data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by the system administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "賬號";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "事件";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No user activity has been recorded during the timeframe you have selected.";
$GLOBALS['strAuditTrail']             = "審計跟踪";
$GLOBALS['strAuditTrailSetup']          = "Setup the Audit Trail today";
$GLOBALS['strAuditTrailGoTo']           = "Go to Audit Trail page";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Go to Campaigns page";
$GLOBALS['strCampaignSetUp']            = "Set up a Campaign today";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>There is no campaign activity to display.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "No campaigns have started or finished during the timeframe you have selected";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>In order to view campaigns which have started or finished during the timeframe you have selected, the Audit Trail must be activated</li>
        <li>You are seeing this message because you didn't activate the Audit Trail</li>
";
$GLOBALS['strCampaignAuditTrailSetup']   = "Activate Audit Trail to start viewing Campaigns";

$GLOBALS['strUnsavedChanges']       = "You have unsaved changes on this page, make sure you press &quot;Save Changes&quot; when finished";
$GLOBALS['strDeliveryLimitationsDisagree'] = "WARNING: The delivery engine limitations <strong>DO NOT AGREE</strong> with the limitations shown below<br />Please hit save changes to update the delivery engine's rules";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Some of delivery limitations reports incorrect values:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "You are now working as <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "You don't have access to that page. You have been re-directed.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Advertiser <a href='%s'>%s</a> has been added, <a href='%s'>add a campaign</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Advertiser <a href='%s'>%s</a> has been updated";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Advertiser <b>%s</b> has been deleted";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "All selected advertisers have been deleted";

$GLOBALS['strTrackerHasBeenAdded'] = "Tracker <a href='%s'>%s</a> has been added";
$GLOBALS['strTrackerHasBeenUpdated'] = "Tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Variables of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Linked campaigns of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Append tracker code of tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> has been deleted";
$GLOBALS['strTrackersHaveBeenDeleted'] = "All selected trackers have been deleted";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Tracker <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Tracker <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Campaign <a href='%s'>%s</a> has been added, <a href='%s'>add a banner</a>";
$GLOBALS['strCampaignHasBeenNoBanner'] = "Campaign <a href='%s'>%s</a> has been added";
$GLOBALS['strCampaignHasBeenUpdated'] = "Campaign <a href='%s'>%s</a> has been updated";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Linked trackers of campaign <a href='%s'>%s</a> have been updated";
$GLOBALS['strCampaignHasBeenDeleted'] = "Campaign <b>%s</b> has been deleted";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "All selected campaigns have been deleted";
$GLOBALS['strCampaignHasBeenDuplicated'] = "Campaign <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "Campaign <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Banner <a href='%s'>%s</a> has been added";
$GLOBALS['strBannerHasBeenUpdated'] = "Banner <a href='%s'>%s</a> has been updated";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Advanced settings for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Delivery options for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Delivery options for banner <a href='%s'>%s</a> have been applied to %d banners";
$GLOBALS['strBannerHasBeenDeleted'] = "Banner <b>%s</b> has been deleted";
$GLOBALS['strBannersHaveBeenDeleted'] = "All selected banners have been deleted";
$GLOBALS['strBannerHasBeenDuplicated'] = "Banner <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Banner <b>%s</b> has been moved to campaign <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Banner <a href='%s'>%s</a> has been activated";
$GLOBALS['strBannerHasBeenDeactivated'] = "Banner <a href='%s'>%s</a> has been deactivated";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zone(s) linked";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zone(s) unlinked";

$GLOBALS['strWebsiteHasBeenAdded'] = "Website <a href='%s'>%s</a> has been added, <a href='%s'>add a zone</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Website <a href='%s'>%s</a> has been updated";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Website <b>%s</b> has been deleted";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "All selected website have been deleted";

$GLOBALS['strZoneHasBeenAdded'] = "Zone <a href='%s'>%s</a> has been added";
$GLOBALS['strZoneHasBeenUpdated'] = "Zone <a href='%s'>%s</a> has been updated";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Advanced settings for zone <a href='%s'>%s</a> have been updated";
$GLOBALS['strZoneHasBeenDeleted'] = "Zone <b>%s</b> has been deleted";
$GLOBALS['strZonesHaveBeenDeleted'] = "All selected zone have been deleted";
$GLOBALS['strZoneHasBeenDuplicated'] = "Zone <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Zone <b>%s</b> has been moved to website <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Banner has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Campaign has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Banner has been unlinked from zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Campaign has been unlinked from zone <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Targeting channel <a href='%s'>%s</a> has been added, <a href='%s'>change the delivery options</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Targeting channel <a href='%s'>%s</a> has been updated";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Delivery options for targeting channel <a href='%s'>%s</a> have been updated";
$GLOBALS['strChannelHasBeenDeleted'] = "Targeting channel <b>%s</b> has been deleted";
$GLOBALS['strChannelsHaveBeenDeleted'] = "All selected Targeting Channels have been deleted";
$GLOBALS['strChannelHasBeenDuplicated'] = "Targeting channel <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Your <b>%s</b> preferences has been updated";
$GLOBALS['strPreferencesHaveBeenUpdated'] = "Preferences have been updated";
$GLOBALS['strEmailChanged'] = "Your E-mail has been changed";
$GLOBALS['strPasswordChanged'] = "Your password has been changed";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strTZPreferencesWarning'] = "However, campaign activation and expiry were not updated, nor time-based banner limitations.<br />You will need to update them manually if you wish them to use the new timezone";


/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome']            = "h";
$GLOBALS['keyUp']            = "u";
$GLOBALS['keyNextItem']        = ".";
$GLOBALS['keyPreviousItem']    = ",";
$GLOBALS['keyList']            = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "s";
$GLOBALS['keyCollapseAll']    = "c";
$GLOBALS['keyExpandAll']    = "e";
$GLOBALS['keyAddNew']        = "n";
$GLOBALS['keyNext']            = "n";
$GLOBALS['keyPrevious']        = "p";
$GLOBALS['keyLinkUser']        = "u";
$GLOBALS['keyWorkingAs']        = "w";

// Market entities
$GLOBALS['strMarketCampaignOptin'] = "OpenX Market - Opted In Campaigns";
$GLOBALS['strMarketZoneOptin'] = "OpenX Market - Zone Default Ads";
$GLOBALS['strMarketZoneBeforeOpenX2.8.4'] = "OpenX Market ads before OpenX 2.8.4";

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Arabic";
$GLOBALS['str_bg']                  = "匈牙利語";
$GLOBALS['str_cs']                  = "捷克語";
$GLOBALS['str_cy']                  = "Welsh";
$GLOBALS['str_da']                  = "Danish";
$GLOBALS['str_de']                  = "德語";
$GLOBALS['str_el']                  = "Greek";
$GLOBALS['str_en']                  = "英語";
$GLOBALS['str_es']                  = "西班牙語";
$GLOBALS['str_fa']                  = "波斯語";
$GLOBALS['str_fr']                  = "法語";
$GLOBALS['str_he']                  = "希伯來語";
$GLOBALS['str_hr']                  = "Croatian";
$GLOBALS['str_hu']                  = "匈牙利語";
$GLOBALS['str_id']                  = "印尼語";
$GLOBALS['str_it']                  = "意大利語";
$GLOBALS['str_ja']                  = "日語";
$GLOBALS['str_ko']                  = "韓語";
$GLOBALS['str_lt']                  = "Lithuanian";
$GLOBALS['str_ms']                  = "Malay";
$GLOBALS['str_nb']                  = "Norwegian Bokmal";
$GLOBALS['str_nl']                  = "荷蘭語";
$GLOBALS['str_pl']                  = "波蘭語";
$GLOBALS['str_pt_BR']               = "Portuguese Brazil";
$GLOBALS['str_pt_PT']               = "Portuguese Portugal";
$GLOBALS['str_ro']                  = "羅馬尼亞語";
$GLOBALS['str_ru']                  = "俄語";
$GLOBALS['str_sk']                  = "Slovak";
$GLOBALS['str_sl']                  = "斯洛文尼亞語";
$GLOBALS['str_sq']                  = "Albanian";
$GLOBALS['str_sv']                  = "Swedish";
$GLOBALS['str_tr']                  = "土耳其語";
$GLOBALS['str_uk']                  = "Ukranian";
$GLOBALS['str_zh_CN']               = "Chinese Simplified";
$GLOBALS['str_zh_TW']               = "Chinese Traditional";

?>
