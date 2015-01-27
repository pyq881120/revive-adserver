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

$GLOBALS['phpAds_DecimalPoint']         = ",";
$GLOBALS['phpAds_ThousandsSeperator']   = ".";

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

$GLOBALS['strHome']                     = "Home";
$GLOBALS['strHelp']                     = "�?�움�?";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Start over";
$GLOBALS['strNavigation']               = "Navigation";
$GLOBALS['strShortcuts']                = "바로가기";
$GLOBALS['strActions']                  = "Actions";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "목�?";
$GLOBALS['strMaintenance']              = "유지보수";
$GLOBALS['strProbability']              = "확률";
$GLOBALS['strInvocationcode']           = "호출코드";
$GLOBALS['strTrackerVariables']         = "Tracker Variables";
$GLOBALS['strBasicInformation']         = "기본 정보";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "계약 정보";
$GLOBALS['strLoginInformation']         = "로그�?� 정보";
$GLOBALS['strLogoutURL']                = "URL to redirect to on logout. <br />Blank for default";
$GLOBALS['strAppendTrackerCode']        = "Append Tracker Code";
$GLOBALS['strOverview']                 = "목�?보기";
$GLOBALS['strSearch']                   = "검색(<u>S</u>)";
$GLOBALS['strHistory']                  = "기�?";
$GLOBALS['strDetails']                  = "�?세히";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "업�?��?�트 검색";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "간단히";
$GLOBALS['strVerbose']                  = "세부내용";
$GLOBALS['strUser']                     = "사용�?";
$GLOBALS['strEdit']                     = "편집";
$GLOBALS['strCreate']                   = "�?성";
$GLOBALS['strDuplicate']                = "복제";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "�?��?�하기";
$GLOBALS['strDelete']                   = "삭제";
$GLOBALS['strActivate']                 = "활성화";
$GLOBALS['strDeActivate']               = "배너중지";
$GLOBALS['strConvert']                  = "변환";
$GLOBALS['strRefresh']                  = "새로고침";
$GLOBALS['strSaveChanges']              = "변경사항 저장";
$GLOBALS['strUp']                       = "위로";
$GLOBALS['strDown']                     = "아래로";
$GLOBALS['strSave']                     = "저장";
$GLOBALS['strCancel']                   = "취소";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "�?�전";
$GLOBALS['strPrevious_Key']             = "�?�전(<u>p</u>)";
$GLOBALS['strNext']                     = "다�?�";
$GLOBALS['strNext_Key']                 = "다�?�(<u>n</u>)";
$GLOBALS['strYes']                      = "예";
$GLOBALS['strNo']                       = "아니오";
$GLOBALS['strNone']                     = "없�?�";
$GLOBALS['strCustom']                   = "사용�? 지정";
$GLOBALS['strDefault']                  = "기본설정";
$GLOBALS['strOther']                    = "기타";
$GLOBALS['strUnknown']                  = "알려지지 않�?�";
$GLOBALS['strUnlimited']                = "제한없�?�";
$GLOBALS['strUntitled']                 = "제목없�?�";
$GLOBALS['strAll']                      = "모�?";
$GLOBALS['strAvg']                      = "�?�균";
$GLOBALS['strAverage']                  = "�?�균";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "전체";
$GLOBALS['strTotal']                    = "합계";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "사용 가능";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "to";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "linked to";
$GLOBALS['strDaysLeft']                 = "남�?� 기간";
$GLOBALS['strCheckAllNone']             = "모�? 선�?/ 해제";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "모�? 보기(<u>E</u>)";
$GLOBALS['strCollapseAll']              = "모�? 숨기기(<u>C</u>)";
$GLOBALS['strShowAll']                  = "모�? 보기";
$GLOBALS['strNoAdminInterface']         = "서비스를 �?�용할 수 없습니다.";
$GLOBALS['strFilterBySource']           = "소스 필터�?";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "다�?� 필드�? 오류가 있습니다.:";
$GLOBALS['strFieldFixBeforeContinue1']  = "오류를 수정한 후�?";
$GLOBALS['strFieldFixBeforeContinue2']  = "다시 시작해야 합니다..";
$GLOBALS['strDelimiter']                = "구분기호";
$GLOBALS['strMiscellaneous']            = "기타";
$GLOBALS['strCollectedAllStats']        = "�?��?� 통계";
$GLOBALS['strCollectedToday']           = "Today";
$GLOBALS['strCollectedYesterday']       = "Yesterday";
$GLOBALS['strCollectedThisWeek']        = "This week";
$GLOBALS['strCollectedLastWeek']        = "Last week";
$GLOBALS['strCollectedThisMonth']       = "This month";
$GLOBALS['strCollectedLastMonth']       = "Last month";
$GLOBALS['strCollectedLast7Days']       = "Last 7 days";
$GLOBALS['strCollectedSpecificDates']   = "Specific dates";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "Admin";
$GLOBALS['strWarning']                  = "Warning";
$GLOBALS['strNotice']                   = "Notice";
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
$GLOBALS['strPriority']                 = "우선순위";
$GLOBALS['strPriorityLevel']            = "Priority level";
$GLOBALS['strPriorityTargeting']        = "Distribution";
$GLOBALS['strPriorityOptimisation']     = "기타"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Limitations";
$GLOBALS['strNoLimitations']            = "제한 없�?�";
$GLOBALS['strCapping']                  = "Capping";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "�?�름";
$GLOBALS['strSize']                     = "�?�기";
$GLOBALS['strWidth']                    = "너비";
$GLOBALS['strHeight']                   = "높�?�";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "대�? 프레임";
$GLOBALS['strLanguage']                 = "언어";
$GLOBALS['strDescription']              = "설명";
$GLOBALS['strVariables']                = "Variables";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Comments";

// User access
$GLOBALS['strWorkingAs']                = "Working as";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Working as";
$GLOBALS['strSwitchTo']                 = "Switch to";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s for...";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Add user";
$GLOBALS['strLinkUser_Key']             = "Add <u>u</u>ser";
$GLOBALS['strUsernameToLink']           = "Username of user to add";
$GLOBALS['strEmailToLink']              = "Email of user to add";
$GLOBALS['strNewUserWillBeCreated']     = "New user will be created";
$GLOBALS['strToLinkProvideEmail']       = "To add user, provide user's email";
$GLOBALS['strToLinkProvideUsername']    = "To add user, provide username";
$GLOBALS['strErrorWhileCreatingUser']   = "Error while creating user: %s";
$GLOBALS['strUserLinkedToAccount']      = "User has been added to account";
$GLOBALS['strUserAccountUpdated']       = "User account updated";
$GLOBALS['strUserUnlinkedFromAccount']  = "User has been removed from account";
$GLOBALS['strUserWasDeleted']           = "User has been deleted";
$GLOBALS['strUserNotLinkedWithAccount'] = "Such user is not linked with account";
$GLOBALS['strCantDeleteOneAdminUser']   = "You can't delete a user. At least one user needs to be linked with admin account.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "사용�?ID";
$GLOBALS['strLinkUserHelpEmail']        = "email address";
$GLOBALS['strLastLoggedIn']             = "Last logged in";
$GLOBALS['strDateLinked']               = "Date linked";
$GLOBALS['strUnlink']                   = "Remove";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removing user from last entity";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Removing user from last entity will cause the user to be deleted. Would you like to remove this user?";
$GLOBALS['strUnlinkAndDelete']          = "Remove &amp; delete user";
$GLOBALS['strUnlinkUser']               = "Remove user";
$GLOBALS['strUnlinkUserConfirmBody']    = "Are you sure you want to remove this user?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "User Access";
$GLOBALS['strAdminAccess']              = "Admin Access";
$GLOBALS['strUserProperties']           = "배너 등�? 정보";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "�?��?";
$GLOBALS['strWelcomeTo']                = "환�?합니다. ";
$GLOBALS['strEnterUsername']            = "로그�?�하기 위해 사용�?ID과 비밀번호를 입력하세요.";
$GLOBALS['strEnterBoth']                = "사용�?ID와 비밀번호를 모�? 입력하세요.";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "로그�?�ID";
$GLOBALS['strLogout']                   = "로그아웃";
$GLOBALS['strUsername']                 = "사용�?ID";
$GLOBALS['strPassword']                 = "비밀번호";
$GLOBALS['strPasswordRepeat']           = "비밀번호 확�?�";
$GLOBALS['strAccessDenied']             = "액세스할 수 없습니다.";
$GLOBALS['strUsernameOrPasswordWrong']  = "The username and/or password were not correct. Please try again.";
$GLOBALS['strPasswordWrong']            = "올바른 비밀번호가 아닙니다.";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "권한�?� 없습니다.";
$GLOBALS['strDuplicateClientName']      = "입력한 ID가 �?�미 있습니다. 다른 ID를 입력하세요.";
$GLOBALS['strDuplicateAgencyName']      = "입력한 ID가 �?�미 있습니다. 다른 ID를 입력하세요.";
$GLOBALS['strInvalidPassword']          = "The new password is invalid, please use a different password.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "The two passwords you supplied are not the same";
$GLOBALS['strRepeatPassword']           = "Repeat Password";
$GLOBALS['strOldPassword']              = "Old Password";
$GLOBALS['strNewPassword']              = "New Password";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "Requests";
$GLOBALS['strImpressions']              = "Impressions";
$GLOBALS['strClicks']                   = "AdClicks";
$GLOBALS['strConversions']              = "Conversions";
$GLOBALS['strCTRShort']                 = "�?�릭율";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "�?�릭율";
$GLOBALS['strCNVR']                     = "Sales Ratio";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "�? AdViews";
$GLOBALS['strTotalClicks']              = "�? AdClicks";
$GLOBALS['strTotalConversions']         = "Total Conversions";
$GLOBALS['strViewCredits']              = "AdView credits";
$GLOBALS['strClickCredits']             = "AdClick credits";
$GLOBALS['strConversionCredits']        = "Conversion Credits";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Date Time";
$GLOBALS['strTrackerID']                = "Tracker ID";
$GLOBALS['strTrackerName']              = "Tracker Name";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "배너";
$GLOBALS['strCampaigns']                = "캠페�?�";
$GLOBALS['strCampaignID']               = "Campaign ID";
$GLOBALS['strCampaignName']             = "캠페�?� 기�?";
$GLOBALS['strCountry']                  = "국가";
$GLOBALS['strStatsAction']              = "Action";
$GLOBALS['strWindowDelay']              = "Window delay";
$GLOBALS['strStatsVariables']           = "Variables";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Tenancy";
$GLOBALS['strFinanceCTR']               = "�?�릭율";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "날짜";
$GLOBALS['strToday']                    = "오늘";
$GLOBALS['strDay']                      = "�?�";
$GLOBALS['strDays']                     = "�?�";
$GLOBALS['strLast7Days']                = "최근 7�?�";
$GLOBALS['strWeek']                     = "주";
$GLOBALS['strWeeks']                    = "주";
$GLOBALS['strSingleMonth']              = "월";
$GLOBALS['strMonths']                   = "월";
$GLOBALS['strDayOfWeek']                = "Day of week";
$GLOBALS['strThisMonth']                = "월";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "시";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "초";
$GLOBALS['strMinutes']                  = "분";
$GLOBALS['strHours']                    = "시";
$GLOBALS['strTimes']                    = "회";

// Advertiser
$GLOBALS['strClient']                       = "광고주";
$GLOBALS['strClients']                      = "광고주";
$GLOBALS['strClientsAndCampaigns']          = "광고주 & 캠페�?�";
$GLOBALS['strAddClient']                    = "새 광고주 추가";
$GLOBALS['strAddClient_Key']                = "새 광고주 추가(<u>n</u>)";
$GLOBALS['strTotalClients']                 = "�? 광고주 수";
$GLOBALS['strClientProperties']             = "광고주 등�?정보";
$GLOBALS['strClientHistory']                = "광고주 기�?";
$GLOBALS['strNoClients']                    = "현재 등�?�?� 광고주가 없습니다.";
$GLOBALS['strNoClientsForBanners']          = "There are currently no advertisers defined. To add banners you need to <a href='advertiser-edit.php'>add new advertiser</a> and campaign first.";
$GLOBALS['strConfirmDeleteClient']          = "해당 광고주를 삭제합니까?";
$GLOBALS['strConfirmDeleteClients']         = "해당 광고주를 삭제합니까?";
$GLOBALS['strConfirmResetClientStats']      = "해당 광고주�? 대한 모든 통계를 삭제합니까?";
$GLOBALS['strSite']                         = "�?�기";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "사용하지 않는 광고주 숨기기";
$GLOBALS['strInactiveAdvertisersHidden']    = "광고주가 숨겨져 있습니다.";
$GLOBALS['strOverallAdvertisers']           = "광고주";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "광고주 & 캠페�?�";
// Advertisers properties
$GLOBALS['strContact']                          = "연�?�처";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "�?�메�?�";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "광고 보고서를 �?�메�?�로 발송합니다.";
$GLOBALS['strNoDaysBetweenReports']             = "보고서 발송 간격";
$GLOBALS['strSendDeactivationWarning']          = "캠페�?��?� 중지�?�면 알립니다.";
$GLOBALS['strAllowClientModifyInfo']            = "사용�?가 설정�?� 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowClientModifyBanner']          = "사용�?가 배너를 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowClientAddBanner']             = "사용�?가 배너를 추가할 수 있게 합니다.";
$GLOBALS['strAllowClientDisableBanner']         = "사용�?가 �?신�?� 배너를 중지할 수 있게 합니다.";
$GLOBALS['strAllowClientActivateBanner']        = "사용�?가 �?신�?� 배너를 운�?할 수 있게 합니다.";
$GLOBALS['strAllowClientViewTargetingStats']    = "Allow this user to view targeting statistics";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "Allow this user to import offline conversions";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "캠페�?�";
$GLOBALS['strCampaigns']                    = "캠페�?�";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "�? 캠페�?� 수";
$GLOBALS['strActiveCampaigns']              = "운�?중�?� 캠페�?�";
$GLOBALS['strAddCampaign']                  = "새 캠페�?� 추가";
$GLOBALS['strAddCampaign_Key']              = "새 캠페�?� 추가(<u>n</u>)";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "새 캠페�?� �?성";
$GLOBALS['strModifyCampaign']               = "캠페�?� 수정";
$GLOBALS['strMoveToNewCampaign']            = "새로운 캠페�?�으로 �?��?�";
$GLOBALS['strBannersWithoutCampaign']       = "캠페�?��?� 없는 배너(�?�립배너)";
$GLOBALS['strDeleteAllCampaigns']           = "모든 캠페�?� 삭제";
$GLOBALS['strLinkedCampaigns']              = "Linked Campaigns";
$GLOBALS['strCampaignStats']                = "캠페�?� 통계";
$GLOBALS['strCampaignProperties']           = "캠페�?� 등�?정보";
$GLOBALS['strCampaignOverview']             = "캠페�?� 목�?";
$GLOBALS['strCampaignHistory']              = "캠페�?� 기�?";
$GLOBALS['strNoCampaigns']                  = "현재 정�?��?� 캠페�?��?� 없습니다.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "해당 광고주�?� 모든 캠페�?��?� 삭제합니까?";
$GLOBALS['strConfirmDeleteCampaign']        = "�?� �?페�?��?� 정�?로 삭제합니까?";
$GLOBALS['strConfirmDeleteCampaigns']       = "�?� �?페�?��?� 정�?로 삭제합니까?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Show parent advertisers";
$GLOBALS['strHideParentAdvertisers']        = "Hide parent advertisers";
$GLOBALS['strHideInactiveCampaigns']        = "운�?하지 않는 캠페�?� 숨기기";
$GLOBALS['strInactiveCampaignsHidden']      = "캠페�?��?� 숨겨져 있습니다.";
$GLOBALS['strContractDetails']              = "Contract details";
$GLOBALS['strInventoryDetails']             = "Inventory details";
$GLOBALS['strPriorityInformation']          = "Priority in relation to other campaigns";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Campaign";
$GLOBALS['strHiddenAd']                     = "Advertisement";
$GLOBALS['strHiddenAdvertiser']             = "광고주";
$GLOBALS['strHiddenTracker']                = "Tracker";
$GLOBALS['strHiddenWebsite']              = "광고게시�?";
$GLOBALS['strHiddenZone']                   = "�?역";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Companion positioning";
$GLOBALS['strSelectUnselectAll']            = "Select / Unselect All";
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
$GLOBALS['strDontExpire']                       = "�?� 캠페�?��?� 만료하지 않습니다.";
$GLOBALS['strActivateNow']                      = "�?� �?페�?��?� 지금 활성화합니다.";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "낮�?�";
$GLOBALS['strHigh']                             = "높�?�";
$GLOBALS['strExpirationDate']                   = "만료�?�";
$GLOBALS['strExpirationDateComment']            = "Campaign will finish at the end of this day";
$GLOBALS['strActivationDate']                   = "활성�?�";
$GLOBALS['strActivationDateComment']            = "Campaign will commence at the start of this day";
$GLOBALS['strRevenueInfo']                      = "Revenue Information";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "Impressions Remaining";
$GLOBALS['strClicksRemaining']                  = "Clicks Remaining";
$GLOBALS['strConversionsRemaining']             = "Conversions Remaining";
$GLOBALS['strImpressionsBooked']                = "Impressions Booked";
$GLOBALS['strClicksBooked']                     = "Clicks Booked";
$GLOBALS['strConversionsBooked']                = "Conversions Booked";
$GLOBALS['strCampaignWeight']                   = "캠페�?� 가중치";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimise delivery of this campaign.";
$GLOBALS['strAnonymous']                        = "Hide the advertiser and websites of this campaign.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "�?� 캠페�?��?� 배너를 낮�?� 우선 순위로 설정합니다.<br>�?� 옵션�?� 높�?� 우선 순위�?� 배너가 노출�?�지 않�?� 때 배너를 노출하기 위해 사용합니다. 노출 횟수를 지정할 수 없으며, 가중치를 통해서 낮�?� 우선 순위 배너들간�?� 비율만 설정할 수 있습니다.";
$GLOBALS['strTargetPerDay']                     = "회로 제한합니다.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "남�?� 기간 �?�안 배너를 균등하게 노출시킵니다. 따�?�서 매�?� 매�?� AdView�?� 노출 횟수가 설정�?�니다.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "The type of this campaign has been set to Remnant, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "The type of this campaign has been set to Contract, \\nbut Limit per day is not specified. \\nThis will cause the campaign to be deactivated and \\nits banners won't be delivered until a valid Limit per day has been set. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignStatusPending']            = "Pending";
$GLOBALS['strCampaignStatusInactive']           = "사용 가능";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Paused";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Restarted";
$GLOBALS['strCampaignStatusDeleted']            = "삭제";
$GLOBALS['strCampaignApprove']                  = "Approve";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "Pause";
$GLOBALS['strCampaignPauseDescription']         = "pause this campaign temporarily";
$GLOBALS['strCampaignRestart']                  = "Resume";
$GLOBALS['strCampaignRestartDescription']       = "resume this campaign";
$GLOBALS['strCampaignStatus']                   = "Campaign status";
$GLOBALS['strReasonForRejection']               = "Reason for rejection";
$GLOBALS['strReasonSiteNotLive']                = "Site not live";
$GLOBALS['strReasonBadCreative']                = "Inappropriate creative";
$GLOBALS['strReasonBadUrl']                     = "Inappropriate destination url";
$GLOBALS['strReasonBreakTerms']                 = "Website againts terms and conditions";
$GLOBALS['strChangeStatus']                     = "Change status";
$GLOBALS['strCampaignType']                     = "캠페�?� 기�?";
$GLOBALS['strType']                             = "Type";
$GLOBALS['strContract']                         = "연�?�처";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "연�?�처";
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
$GLOBALS['strTracker']                    = "Tracker";
$GLOBALS['strTrackers']                   = "Trackers";
$GLOBALS['strTrackerOverview']            = "배너 목�?";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "Add new tracker";
$GLOBALS['strAddTracker_Key']             = "새 배너 추가(<u>n</u>)";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "해당 광고주�?� 모든 캠페�?��?� 삭제합니까?";
$GLOBALS['strConfirmDeleteTrackers']      = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteTracker']       = "해당 배너를 삭제합니까??";
$GLOBALS['strDeleteAllTrackers']          = "모든 배너 삭제";
$GLOBALS['strTrackerProperties']          = "배너 등�? 정보";
$GLOBALS['strTrackerOverview']            = "배너 목�?";
$GLOBALS['strModifyTracker']              = "Modify tracker";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "Default Status";
$GLOBALS['strStatus']                     = "Status";
$GLOBALS['strLinkedTrackers']             = "Linked Trackers";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Conversion window";
$GLOBALS['strUniqueWindow']               = "Unique window";
$GLOBALS['strClick']                      = "Click";
$GLOBALS['strView']                       = "View";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Impression";
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
$GLOBALS['strConversionType']             = "Conversion Type";
$GLOBALS['strLinkCampaignsByDefault']     = "Link newly created campaigns by default";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "배너";
$GLOBALS['strBanners']                       = "배너";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "새 배너 추가";
$GLOBALS['strAddBanner_Key']                 = "새 배너 추가(<u>n</u>)";
$GLOBALS['strBannerToCampaign']              = "to campaign";
$GLOBALS['strModifyBanner']                  = "배너 수정";
$GLOBALS['strActiveBanners']                 = "운�?중�?� 배너";
$GLOBALS['strTotalBanners']                  = "�? 배너 수";
$GLOBALS['strShowBanner']                    = "배너 보기";
$GLOBALS['strShowAllBanners']                = "모든 배너 보기";
$GLOBALS['strShowBannersNoAdViews']          = "AdView 없는 배너 보기";
$GLOBALS['strShowBannersNoAdClicks']         = "AdClick 없는 배너 보기";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "모든 배너 삭제";
$GLOBALS['strActivateAllBanners']            = "모든 배너 활성화";
$GLOBALS['strDeactivateAllBanners']          = "모든 배너중지";
$GLOBALS['strBannerOverview']                = "배너 목�?";
$GLOBALS['strBannerProperties']              = "배너 등�? 정보";
$GLOBALS['strBannerHistory']                 = "배너 기�?";
$GLOBALS['strBannerNoStats']                 = "해당 배너�? 대한 통계가 없습니다.";
$GLOBALS['strNoBanners']                     = "현재 등�?�?� 배너가 없습니다.";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "There are currently no banners defined, because there are no advertisers. To create a banner, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strConfirmDeleteBanner']           = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteBanners']          = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteAllBanners']       = "해당 캠페�?��?� 모든 배너를 삭제합니까?";
$GLOBALS['strConfirmResetBannerStats']       = "해당 배너�? 대한 모든 통계를 삭제합니까?";
$GLOBALS['strShowParentCampaigns']           = "�?위 캠페�?� 표시";
$GLOBALS['strHideParentCampaigns']           = "�?위 캠페�?� 숨기기";
$GLOBALS['strHideInactiveBanners']           = "사용하지 않는 배너 숨김";
$GLOBALS['strInactiveBannersHidden']         = "배너가 숨겨져 있습니다.";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "It is not possible to append other banners to text ads.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Warning, possibly missing ";
$GLOBALS['strWarningMissingClosing']         = " closing tag '>'";
$GLOBALS['strWarningMissingOpening']         = " opening tag '<'";
$GLOBALS['strSubmitAnyway']       		     = "Submit Anyway";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Banner Preferences";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Default Banners";
$GLOBALS['strDefaultBannerUrl']                      = "Default Image URL";
$GLOBALS['strDefaultBannerDestination']              = "Default Destination URL";
$GLOBALS['strAllowedBannerTypes']                    = "Allowed Banner Types";
$GLOBALS['strTypeSqlAllow']                          = "Allow SQL Local Banners";
$GLOBALS['strTypeWebAllow']                          = "Allow Webserver Local Banners";
$GLOBALS['strTypeUrlAllow']                          = "Allow External Banners";
$GLOBALS['strTypeHtmlAllow']                         = "Allow HTML Banners";
$GLOBALS['strTypeTxtAllow']                          = "Allow Text Ads";
$GLOBALS['strTypeHtmlSettings']                      = "HTML Banner Options";
$GLOBALS['strTypeHtmlAuto']                          = "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']                           = "Allow PHP expressions to be executed from within a HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "배너 형�?�?� 선�?하세요.";
$GLOBALS['strMySQLBanner']             = "로컬 배너(SQL - DB 저장방�?)";
$GLOBALS['strWebBanner']               = "로컬 배너(웹서버 - 웹 저장 방�?)";
$GLOBALS['strURLBanner']               = "외부 배너";
$GLOBALS['strHTMLBanner']              = "HTML 배너";
$GLOBALS['strTextBanner']              = "�?스트 광고";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "현재 �?�미지를 �?�용하거나<br> 다른 �?�미지를 업로드할<br> 수 있습니다.";
$GLOBALS['strUploadOrKeepAlt']        = "현재 �?�미지를 �?�용하거나<br /> 다른 �?�미지를 업로드할<br /> 수 있습니다.";
$GLOBALS['strNewBannerFile']         = "배너�? 사용할 �?�미지를 선�?하세요.";
$GLOBALS['strNewBannerFileAlt']     = "Select a backup image you <br />want to use in case browsers<br />don't support rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "�?�미지 URL(incl. http://)";
$GLOBALS['strURL']                     = "대�? URL(incl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "키워드";
$GLOBALS['strTextBelow']             = "�?�미지 설명";
$GLOBALS['strWeight']                 = "가중치";
$GLOBALS['strAlt']                     = "Alt �?스트";
$GLOBALS['strStatusText']            = "�?태표시줄 문구";
$GLOBALS['strBannerWeight']            = "배너 가중치";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Generic HTML Banner";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generic";
$GLOBALS['strSwfTransparency']		   = "Allow transparent background";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "플래시 파�?��? 입력�?� �?�?�를 확�?�합니다.";
$GLOBALS['strConvertSWFLinks']        = "플래시 �?�?� 변환합니다.";
$GLOBALS['strHardcodedLinks']        = "내장�?� �?�?�";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "보다 빠른 파�?� 전송�?� 위해 SWF 파�?� 압축";
$GLOBALS['strOverwriteSource']        = "소스 파�?�미터 �?�어쓰기";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML 템플릿";
$GLOBALS['strChooseNetwork']        = "사용할 템플릿 선�?하세요.";
$GLOBALS['strMoreInformation']        = "�?세한 정보...";
$GLOBALS['strRichMedia']            = "리치미디어";
$GLOBALS['strTrackAdClicks']        = "AdClicks 추�?";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "전달유지 옵션";
$GLOBALS['strACL']                        = "전달유지";
$GLOBALS['strACLAdd']                     = "새 제한 추가";
$GLOBALS['strACLAdd_Key']                 = "새 제한 추가(<u>n</u>)";
$GLOBALS['strNoLimitations']              = "제한 없�?�";
$GLOBALS['strApplyLimitationsTo']         = "제한 �?용하기";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "모든 제한 제거";
$GLOBALS['strEqualTo']                    = "같�?� 경우";
$GLOBALS['strDifferentFrom']              = "다른 경우";
$GLOBALS['strLaterThan']                  = "is later than";
$GLOBALS['strLaterThanOrEqual']           = "is later than or equal to";
$GLOBALS['strEarlierThan']                = "is earlier than";
$GLOBALS['strEarlierThanOrEqual']         = "is earlier than or equal to";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "is greater than";
$GLOBALS['strLessThan']                   = "is less than";
$GLOBALS['strAND']                        = "그리고";                          // logical operator
$GLOBALS['strOR']                         = "�?는";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "다�?� 조건�?서만 배너를 표시합니다.:";
$GLOBALS['strWeekDay']                    = "�?��?�(월-금)";
$GLOBALS['strWeekDays']                   = "�?��?�(월-금)";
$GLOBALS['strTime']                       = "시간";
$GLOBALS['strUserAgent']                  = "사용�? �?�?�전트";
$GLOBALS['strDomain']                     = "�?�메�?�";
$GLOBALS['strClientIP']                   = "�?��?��?�언트 IP";
$GLOBALS['strSource']                     = "소스";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "브�?�우저";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "City Name";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "전달유지 제한";

$GLOBALS['strDeliveryCapping']            = "전달유지 제한(Delivery capping)";
$GLOBALS['strDeliveryCappingReset']       = "Reset view counters after:";
$GLOBALS['strDeliveryCappingTotal']       = "in total";
$GLOBALS['strDeliveryCappingSession']     = "per session";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Limit banner views to:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Limit campaign views to:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Limit zone views to:";

// Website
$GLOBALS['strAffiliate']                = "광고게시�?";
$GLOBALS['strAffiliates']                 = "광고게시�?";
$GLOBALS['strAffiliatesAndZones']        = "광고게시�? & �?역";
$GLOBALS['strAddNewAffiliate']            = "새 광고게시�? 추가";
$GLOBALS['strAddNewAffiliate_Key']        = "새 광고게시�? 추가(<u>n</u>)";
$GLOBALS['strAddAffiliate']                = "광고게시�? �?성";
$GLOBALS['strAffiliateProperties']        = "광고게시�? 등�?정보";
$GLOBALS['strAffiliateOverview']        = "광고게시�? 목�?";
$GLOBALS['strAffiliateHistory']            = "광고게시�? 기�?";
$GLOBALS['strZonesWithoutAffiliate']    = "광고게시�? 미등�? �?역";
$GLOBALS['strMoveToNewAffiliate']        = "새 광고게시�?로 �?��?�";
$GLOBALS['strNoAffiliates']                = "현재 정�?��?� 광고게시�?가 없습니다.";
$GLOBALS['strConfirmDeleteAffiliate']    = "해당 광고게시�?를 삭제합니까?";
$GLOBALS['strConfirmDeleteAffiliates']   = "해당 광고게시�?를 삭제합니까?";
$GLOBALS['strMakePublisherPublic']        = "광고게시�?�?게 해당하는 �?역�?� 공개합니다.";
$GLOBALS['strAffiliateInvocation']      = "호출코드";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Total websites";
$GLOBALS['strInactiveAffiliatesHidden'] = "배너가 숨겨져 있습니다.";
$GLOBALS['strShowParentAffiliates']     = "Show parent websites";
$GLOBALS['strHideParentAffiliates']     = "Hide parent websites";

// Website (properties)
$GLOBALS['strWebsite']                      = "광고게시�?";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "사용�?가 설정�?� 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowAffiliateModifyZones']    = "사용�?가 �?역�?� 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowAffiliateLinkBanners']    = "사용�?가 �?신�?� �?역�? 배너를 연결할 수 있게 합니다.";
$GLOBALS['strAllowAffiliateAddZone']        = "사용�?가 새 �?역�?� 정�?�하는 것�?� 허용합니다.";
$GLOBALS['strAllowAffiliateDeleteZone']     = "사용�?가 기존 �?역�?� 삭제하는 것�?� 허용합니다.";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Allow this user to generate invocation code";
$GLOBALS['strAllowAffiliateZoneStats']      = "Allow this user to view zone statistics";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Allow this user to only view approved or pending conversions";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Payment information";
$GLOBALS['strAddress']                      = "Address";
$GLOBALS['strPostcode']                     = "Postcode";
$GLOBALS['strCity']                         = "City Name";
$GLOBALS['strCountry']                      = "국가";
$GLOBALS['strPhone']                        = "Phone";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Account contact";
$GLOBALS['strPayeeName']                    = "Payee name";
$GLOBALS['strTaxID']                        = "Tax ID";
$GLOBALS['strModeOfPayment']                = "Mode of payment";
$GLOBALS['strPaymentChequeByPost']          = "Cheque by post";
$GLOBALS['strCurrency']                     = "Currency";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Other information";
$GLOBALS['strUniqueUsersMonth']             = "Unique users/month";
$GLOBALS['strUniqueViewsMonth']             = "Unique views/month";
$GLOBALS['strPageRank']                     = "Page rank";
$GLOBALS['strCategory']                     = "Category";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Help file";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "광고게시�? & �?역";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "�?역";
$GLOBALS['strZones']                        = "�?역";
$GLOBALS['strAddNewZone']                   = "새 �?역 추가";
$GLOBALS['strAddNewZone_Key']               = "새 �?역 추가(<u>n</u>)";
$GLOBALS['strAddZone']                      = "�?역 �?성";
$GLOBALS['strModifyZone']                   = "�?역 수정";
$GLOBALS['strZoneToWebsite']                = "to website";
$GLOBALS['strLinkedZones']                  = "연결�?� �?역";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "�?역 목�?";
$GLOBALS['strZoneProperties']               = "�?역 등�?정보";
$GLOBALS['strZoneHistory']                  = "�?역 기�?";
$GLOBALS['strNoZones']                      = "현재 등�?�?� �?역�?� 없습니다.";
$GLOBALS['strNoZonesAddWebsite']            = "There are currently no zones defined, because there are no websites. To create a zone, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strConfirmDeleteZone']            = "�?� �?역�?� 삭제합니까?";
$GLOBALS['strConfirmDeleteZones']           = "�?� �?역�?� 삭제합니까?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "�?역 종류";
$GLOBALS['strBannerButtonRectangle']        = "배너, 버튼 �?는 사�?형";
$GLOBALS['strInterstitial']                 = "격�? �?는 플로팅 DHTML";
$GLOBALS['strPopup']                        = "�?업";
$GLOBALS['strTextAdZone']                   = "�?스트 광고";
$GLOBALS['strEmailAdZone']                  = "Email/Newsletter zone";
$GLOBALS['strZoneClick']                    = "Click tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "�?�치하는 배너 보기";
$GLOBALS['strHideMatchingBanners']          = "�?�치하는 배너 숨기기";
$GLOBALS['strBannerLinkedAds']              = "Banners linked to the zone";
$GLOBALS['strCampaignLinkedAds']            = "Campaigns linked to the zone";
$GLOBALS['strTotalZones']                   = "Total zones";
$GLOBALS['strInactiveZonesHidden']          = "배너가 숨겨져 있습니다.";
$GLOBALS['strWarnChangeZoneType']           = "Changing the zone type to text or email will unlink all banners/campaigns due to restrictions of these zone types
                                                <ul>
                                                    <li>Text zones can only be linked to text ads</li>
                                                    <li>Email zone campaigns can only have one active banner at a time</li>
                                                </ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Changing the zone size will unlink any banners that are not the new size, and will add any banners from linked campaigns which are the new size';
$GLOBALS['strWarnChangeBannerSize']         = 'Changing the banner size will unlink this banner from any zones that are not the new size, and if this banner\'s <strong>campaign</strong> is linked to a zone of the new size, this banner will be automatically linked';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Inventory Forecasting';
$GLOBALS['strZonesOfWebsite']               = 'in'; //this is added between page name and website name eg. 'Zones in www.example.com'
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
$GLOBALS['strAdvanced']                    = "고급 설정";
$GLOBALS['strChains']                    = "연결";
$GLOBALS['strChainSettings']            = "연결 설정";
$GLOBALS['strZoneNoDelivery']            = "�?� �?역�?서 어떤 배너�?� 전달할 수 없습니다...";
$GLOBALS['strZoneStopDelivery']            = "연결유지를 중지하고 배너를 표시하지 않습니다.";
$GLOBALS['strZoneOtherZone']            = "선�?�?� �?역�?� 대신 표시합니다.";
$GLOBALS['strZoneUseKeywords']            = "아래�? 입력�?� 키워드를 사용해서 배너를 선�?하세요.";
$GLOBALS['strZoneAppend']                = "�?� �?역�? 연결�?� 배너�? �?업�?�나 격�? 배너 호출 코드를 항�? 추가합니다.";
$GLOBALS['strAppendSettings']            = "배너 첨부 설정";
$GLOBALS['strZoneForecasting']            = "Zone Forecasting settings";
$GLOBALS['strZonePrependHTML']            = "�?� �?역�? 표시�?� �?스트 광고 앞�? HTML 코드를 추가합니다.";
$GLOBALS['strZoneAppendHTML']            = "�?� �?역�? 표시�?� �?스트 광고 뒤�? HTML 코드를 추가합니다.";
$GLOBALS['strZoneAppendNoBanner']        = "Prepend/Append even if no banner delivered";
$GLOBALS['strZoneAppendType']            = "Append type";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML code";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup or interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "�?� �?역�? 연결�?� 배너�? �?업�?�나 격�? 배너 호출 코드를 항�? 추가합니다.";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "선�?한 �?역�? 연결�?� 배너는 모�? �?(null) 우선순위입니다. �?역 연결�?� 다�?�과 같습니다.:";
$GLOBALS['strZoneProbNullPri']            = "�?� �?역�? 연결�?� 배너는 모�? �?(null) 우선순위입니다.";
$GLOBALS['strZoneProbListChainLoop']    = "Following the zone chain would cause a circular loop. Delivery for this zone is halted.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "연결할 배너�?� 종류를 선�?하세요.";
$GLOBALS['strLinkedBanners']            = "Link individual banners";
$GLOBALS['strCampaignDefaults']            = "Link banners by parent campaign";
$GLOBALS['strLinkedCategories']         = "Link banners by category";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "키워드";
$GLOBALS['strIncludedBanners']            = "연결�?� 배너";
$GLOBALS['strLinkedBannersOverview']    = "연결�?� 배너 목�?";
$GLOBALS['strLinkedBannerHistory']        = "연결�?� 배너 기�?";
$GLOBALS['strNoZonesToLink']            = "배너와 연결할 수 있는 �?역�?� 없습니다.";
$GLOBALS['strNoBannersToLink']            = "현재 �?� �?역�? 연결할 배너가 없습니다.";
$GLOBALS['strNoLinkedBanners']            = "현재 �?� �?역�? 연결�?� 배너가 없습니다.";
$GLOBALS['strMatchingBanners']            = "�?�치하는 배너 수 {count}";
$GLOBALS['strNoCampaignsToLink']        = "현재 �?� �?역�? 연결할 �?페�?��?� 없습니다.";
$GLOBALS['strNoTrackersToLink']            = "현재 �?� �?역�? 연결할 �?페�?��?� 없습니다.";
$GLOBALS['strNoZonesToLinkToCampaign']  = "현재 �?� �?역�? 연결�?� �?페�?��?� 없습니다.";
$GLOBALS['strSelectBannerToLink']        = "�?� �?역�? 연결할 배너를 선�?하세요:";
$GLOBALS['strSelectCampaignToLink']        = "�?� �?역�? 연결할 캠페�?� 선�?합니다:";
$GLOBALS['strSelectAdvertiser']         = "Select Advertiser";
$GLOBALS['strSelectPlacement']          = "Select Campaign";
$GLOBALS['strSelectAd']                 = "Select Banner";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Append Tracker Code";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Pending";
$GLOBALS['strStatusApproved']           = "Approved";
$GLOBALS['strStatusDisapproved']        = "Disapproved";
$GLOBALS['strStatusDuplicate']          = "복제";
$GLOBALS['strStatusOnHold']             = "On Hold";
$GLOBALS['strStatusIgnore']             = "Ignore";
$GLOBALS['strConnectionType']           = "Type";
$GLOBALS['strConnTypeSale']             = "저장";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Signup";
$GLOBALS['strShortcutEditStatuses'] = "Edit statuses";
$GLOBALS['strShortcutShowStatuses'] = "Show statuses";

// Statistics
$GLOBALS['strStats']                     = "통계";
$GLOBALS['strNoStats']                   = "현재 �?�용할 수 있는 통계가 없습니다.";
$GLOBALS['strNoTargetingStats']          = "현재 �?�용할 수 있는 통계가 없습니다.";
$GLOBALS['strNoStatsForPeriod']          = "There are currently no statistics available for the period %s to %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "There are currently no targeting statistics available for the period %s to %s";
$GLOBALS['strConfirmResetStats']         = "모든 통계를 삭제하시겠습니까?";
$GLOBALS['strGlobalHistory']             = "전체 기�?";
$GLOBALS['strDailyHistory']              = "�?��?� 기�?";
$GLOBALS['strDailyStats']                = "�?��?� 통계";
$GLOBALS['strWeeklyHistory']             = "주간 통계";
$GLOBALS['strMonthlyHistory']            = "월별 통계";
$GLOBALS['strCreditStats']               = "Credit statistics";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "기간 합계";
$GLOBALS['strAverageThisPeriod']         = "기간 �?�균";
$GLOBALS['strPublisherDistribution']     = "Website Distribution";
$GLOBALS['strCampaignDistribution']      = "Campaign Distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "통계 초기화";
$GLOBALS['strSourceStats']               = "소스 통계";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "조회할 소스를 선�?하세요:";
$GLOBALS['strSizeDistribution']          = "�?�기별 분�?�";
$GLOBALS['strCountryDistribution']       = "국가별 분�?�";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Targeting Statistics";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "View by";
$GLOBALS['strBreakdownByDay']            = "�?�";
$GLOBALS['strBreakdownByWeek']           = "주";
$GLOBALS['strBreakdownByMonth']          = "월";
$GLOBALS['strBreakdownByDow']            = "Day of week";
$GLOBALS['strBreakdownByHour']           = "시";
$GLOBALS['strItemsPerPage']              = "Items per page";
$GLOBALS['strDistributionHistory']       = "Distribution history";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Show <u>G</u>raph of Statistics";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>xport Statistics to Excel";
$GLOBALS['strGDnotEnabled']              = "You must have GD enabled in PHP to display graphs. <br />Please see <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for more information, including how to install GD on your server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "호스트";
$GLOBALS['strTopHosts']             = "요청 호스트 순위";
$GLOBALS['strTopCountries']         = "요청 국가 순위";
$GLOBALS['strRecentHosts']             = "최근 요청 호스트";

// Expiration
$GLOBALS['strExpired']                = "만료�?�";
$GLOBALS['strExpiration']             = "만료�?�";
$GLOBALS['strNoExpiration']           = "만료�?� 설정없�?�";
$GLOBALS['strEstimated']              = "예�? 만료�?�";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "캠페�?� 기�?";

// Reports
$GLOBALS['strReports']                = "보고서";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "�?성할 보고서를 선�?하세요.";
$GLOBALS['strStartDate']              = "Start Date";
$GLOBALS['strEndDate']                = "End Date";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Limitations";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "�? 광고주 수";
$GLOBALS['strAnonAdvertisers']           = "Anonymous advertisers";
$GLOBALS['strAllPublishers']             = "All websites";
$GLOBALS['strAnonPublishers']            = "Anonymous websites";
$GLOBALS['strAllAvailZones']             = "All available zones";

// Userlog
$GLOBALS['strUserLog']                = "사용�? 로그";
$GLOBALS['strUserLogDetails']        = "사용�? 로그 항목";
$GLOBALS['strDeleteLog']            = "로그 삭제";
$GLOBALS['strAction']                = "활�?� 기�?";
$GLOBALS['strNoActionsLogged']        = "기�?�?� 내용�?� 없습니다.";

// Code generation
$GLOBALS['strGenerateBannercode']        = "배너 코드 �?성";
$GLOBALS['strChooseInvocationType']        = "호출할 배너 종류를 선�?하세요.";
$GLOBALS['strGenerate']                    = "�?성하기";
$GLOBALS['strParameters']                = "파�?�미터";
$GLOBALS['strFrameSize']                = "프레임 �?�기";
$GLOBALS['strBannercode']                = "배너코드";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Go back to report list";
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
$GLOBALS['strMySQLError']                       = "SQL 오류:";
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
$GLOBALS['strLogErrorClients']                  = "[phpAds] �?��?�터베�?�스�?서 광고주를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] �?��?�터베�?�스�?서 배너를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strLogErrorViews']                    = "[phpAds] �?��?�터베�?�스�?서 AdView를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] �?��?�터베�?�스�?서 AdClick�?� 가져오는 �?�안 오류가 발�?했습니다.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] �?��?�터베�?�스�?서 AdView를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strErrorViews']                       = "뷰 횟수를 입력하거나 제한하지 않�?� �?�?를 체�?�해야합니다!";
$GLOBALS['strErrorNegViews']                    = "�?�수는 사용할 수 없습니다.";
$GLOBALS['strErrorClicks']                      = "�?�릭 횟수를 입력하거나 제한하지 않�?� �?�?를 체�?�해야합니다!";
$GLOBALS['strErrorNegClicks']                   = "부정한 �?�릭(negative click)�?� 허용�?�지 않습니다.";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "검색 결과가 없습니다.";
$GLOBALS['strErrorOccurred']                    = "오류가 발�?했습니다.";
$GLOBALS['strErrorUploadSecurity']              = "보안 문제가 발견�?�었습니다. 업로드를 중지합니다 !";
$GLOBALS['strErrorUploadBasedir']               = "업로드�?� 파�?��? 액세스할 수 없습니다. 안전 모드 �?는 open_basedir 제한 때문�?� 수 있습니다.";
$GLOBALS['strErrorUploadUnknown']               = "알 수 없는 �?�유로 업로드�?� 파�?��? 액세스할 수 없습니다. PHP 설정�?� 확�?�하십시오.";
$GLOBALS['strErrorStoreLocal']                  = "로컬 디렉터리�? 배너를 저장하는 �?�안 오류가 발�?했습니다. 로컬 디렉터리 경로 설정�?� 잘못�?�었�?� 수 있습니다.";
$GLOBALS['strErrorStoreFTP']                    = "FTP 서버�? 배너를 업로드하는 �?�안 오류가 발�?했습니다. 서버를 �?�용할 수 없거나 FTP 서버 설정�?� 잘못�?�었�?� 수 있습니다.";
$GLOBALS['strErrorDBPlain']                     = "An error occurred while accessing the database";
$GLOBALS['strErrorDBSerious']                   = "A serious problem with the database has been detected";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "The database table is probably corrupt and needs to be repaired. For more information about repairing corrupted tables please read the chapter <i>Troubleshooting</i> of the <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact']                   = "Please contact the administrator of this server and notify him or her of the problem.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "It was not possible to link this banner to this zone because:";
$GLOBALS['strUnableToLinkBanner']               = "Cannot link this banner: ";
$GLOBALS['strErrorEditingCampaign']             = "Error updating campaign:";
$GLOBALS['strUnableToChangeCampaign']           = "Cannot apply this change because:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Cannot apply this change because:";
$GLOBALS['strDatesConflict']                    = "Dates of the campaign you are trying to link overlap with the dates of a campaign already linked ";
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
$GLOBALS['strSirMadam']                         = "Sir/Madam";
$GLOBALS['strMailSubject']                      = "광고주 보고서";
$GLOBALS['strAdReportSent']                     = "광고주 보고서를 보냈습니다";
$GLOBALS['strMailHeader']                       = "{contact}님,\\n";
$GLOBALS['strMailBannerStats']                  = "{clientname}�?� 배너 통계는 다�?�과 같습니다.";
$GLOBALS['strMailBannerActivatedSubject']       = "캠페�?� {id} 활성화";
$GLOBALS['strMailBannerDeactivatedSubject']     = "캠페�?� {id} 활성화";
$GLOBALS['strMailBannerActivated']              = "Your campaign shown below has been activated because\\nthe campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated']            = "Your campaign shown below has been deactivated because";
$GLOBALS['strMailFooter']                       = "Regards,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "다�?� 배너는 다�?� �?�유로 �?�용할 수 없습니다.";
$GLOBALS['strMailNothingLeft']                  = "웹 사�?�트를 계�? �?보하려면 담당�?�?게 문�?�하십시오.";
$GLOBALS['strClientDeactivated']                = "�?� 캠페�?��?� 현재 다�?�과 같�?� �?�유로 운�?하지 않습니다.";
$GLOBALS['strBeforeActivate']                   = "아�? 시작�?��?� 아닙니다.";
$GLOBALS['strAfterExpire']                      = "만기�?�입니다.";
$GLOBALS['strNoMoreImpressions']                = "there are no Impressions remaining";
$GLOBALS['strNoMoreClicks']                     = "남아있는 AdClicks�?� 없습니다.";
$GLOBALS['strNoMoreConversions']                = "남아있는 AdClicks�?� 없습니다.";
$GLOBALS['strWeightIsNull']                     = "its weight is set to zero";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "배너�? 남아있는 AdClciks �?는 AdViews�?� {limit}입니다. \\n남아있는 AdCliks나 AdViews가 없�?� 때 배너를 운�? 중지합니다. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Clicks/Conversions are low";
$GLOBALS['strNoViewLoggedInInterval']           = "�?� 기간 �?�안�?� 보고서�? 기�?�?� AdViews가 없습니다.";
$GLOBALS['strNoClickLoggedInInterval']          = "�?� 기간 �?�안�?� 보고서�? 기�?�?� AdClicks�?� 없습니다.";
$GLOBALS['strNoConversionLoggedInInterval']     = "�?� 기간 �?�안�?� 보고서�? 기�?�?� AdViews가 없습니다.";
$GLOBALS['strMailReportPeriod']                 = "�?� 보고서�?는 {startdate}�?서 {enddate}까지�?� 통계를 �?�함하고 있습니다.";
$GLOBALS['strMailReportPeriodAll']              = "�?� 보고서�?는 {enddate}까지�?� 통계를 �?�함하고 있습니다.";
$GLOBALS['strNoStatsForCampaign']               = "�?� 캠페�?��?서 �?�용할 수 있는 통계가 없습니다.";
$GLOBALS['strImpendingCampaignExpiry']          = "Impending campaign expiration";
$GLOBALS['strYourCampaign']                     = "Your campaign";
$GLOBALS['strTheCampiaignBelongingTo']          = "The campaign belonging to";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} shown below is due to end on {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} shown below has less than {limit} impressions remaining.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "우선순위";
$GLOBALS['strSourceEdit']                       = "Edit Sources";

// Preferences
$GLOBALS['strPreferences']                      = "설정";
$GLOBALS['strUserPreferences']                  = "User Preferences";
$GLOBALS['strChangePassword']                   = "Change Password";
$GLOBALS['strChangeEmail']                      = "Change E-mail";
$GLOBALS['strCurrentPassword']                  = "Current Password";
$GLOBALS['strChooseNewPassword']                = "Choose a new password";
$GLOBALS['strReenterNewPassword']               = "Re-enter new password";
$GLOBALS['strNameLanguage']                     = "Name & Language";
$GLOBALS['strAccountPreferences']               = "Account Preferences";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Campaign email Reports Preferences";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "System administrator email Warnings";
$GLOBALS['strAgencyEmailWarnings']              = "Account email Warnings";
$GLOBALS['strAdveEmailWarnings']                = "Advertiser email Warnings";
$GLOBALS['strFullName']                         = "Full Name";
$GLOBALS['strEmailAddress']                     = "Email address";
$GLOBALS['strUserDetails']                      = "User Details";
$GLOBALS['strLanguageTimezone']                 = "Language & Timezone";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "User Interface Preferences";
$GLOBALS['strPluginPreferences']                = "Plugin Preferences";
$GLOBALS['strInvocationPreferences']            = "Invocation Preferences";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Revenue";
$GLOBALS['strNumberOfItems']                       = "Number of items";
$GLOBALS['strRevenueCPC']                          = "Revenue CPC";
$GLOBALS['strERPM']                                = "ERPM";
$GLOBALS['strERPC']                                = "ERPC";
$GLOBALS['strERPS']                                = "ERPS";
$GLOBALS['strEIPM']                                = "EIPM";
$GLOBALS['strEIPC']                                = "EIPC";
$GLOBALS['strEIPS']                                = "EIPS";
$GLOBALS['strECPM']                                = "eCPM";
$GLOBALS['strECPC']                                = "ECPC";
$GLOBALS['strECPS']                                = "ECPS";
$GLOBALS['strEPPM']                                = "EPPM";
$GLOBALS['strEPPC']                                = "EPPC";
$GLOBALS['strEPPS']                                = "EPPS";
$GLOBALS['strPendingConversions']               = "Pending conversions";
$GLOBALS['strImpressionSR']                     = "Impression SR";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Impressions";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "Rev.";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "Num. Items";
$GLOBALS['strRevenueCPC_short']                 = "Rev. CPC";
$GLOBALS['strERPM_short']                       = "ERPM";
$GLOBALS['strERPC_short']                       = "ERPC";
$GLOBALS['strERPS_short']                       = "ERPS";
$GLOBALS['strEIPM_short']                       = "EIPM";
$GLOBALS['strEIPC_short']                       = "EIPC";
$GLOBALS['strEIPS_short']                       = "EIPS";
$GLOBALS['strECPM_short']                       = "ECPM";
$GLOBALS['strECPC_short']                       = "ECPC";
$GLOBALS['strECPS_short']                       = "ECPS";
$GLOBALS['strEPPM_short']                       = "EPPM";
$GLOBALS['strEPPC_short']                       = "EPPC";
$GLOBALS['strEPPS_short']                       = "EPPS";
$GLOBALS['strID_short']                         = "ID";
$GLOBALS['strRequests_short']                   = "Req.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "Clicks";
$GLOBALS['strCTR_short']                        = "�?�릭율";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "�?�반 설정";
$GLOBALS['strGeneralSettings']              = "�?�반 설정";
$GLOBALS['strMainSettings']                 = "설정";
$GLOBALS['strAdminSettings']                = "관리 설정";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "제품 업�?��?�트";
$GLOBALS['strViewPastUpdates']        = "Manage Past Updates and Backups";
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
$GLOBALS['strAgencyManagement']              = "Account Management";
$GLOBALS['strAgency']                      = "Account";
$GLOBALS['strAgencies']                   = "Accounts";
$GLOBALS['strAddAgency']                   = "Add new account";
$GLOBALS['strAddAgency_Key']               = "새 �?역 추가(<u>n</u>)";
$GLOBALS['strTotalAgencies']               = "Total accounts";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "현재 등�?�?� �?역�?� 없습니다.";
$GLOBALS['strConfirmDeleteAgency']           = "�?� �?역�?� 삭제합니까?";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive accounts";
$GLOBALS['strInactiveAgenciesHidden']     = "배너가 숨겨져 있습니다.";
$GLOBALS['strAllowAgencyEditConversions'] = "Allow this user to edit conversions";
$GLOBALS['strAllowMoreReports']           = "Allow 'More Reports' button";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "Targeting Channels";
$GLOBALS['strChannelOverview']            = "Targeting Channel Overview";
$GLOBALS['strChannelManagement']          = "Targeting Channel Management";
$GLOBALS['strAddNewChannel']              = "Add new Targeting Channel";
$GLOBALS['strAddNewChannel_Key']          = "Add <u>n</u>ew Targeting Channel";
$GLOBALS['strChannelToWebsite']           = "to website";
$GLOBALS['strNoChannels']                 = "현재 등�?�?� 배너가 없습니다.";
$GLOBALS['strNoChannelsAddWebsite']       = "There are currently no targeting channels defined, because there are no websites. To create a targeting channel, <a href='affiliate-edit.php'>add a new website</a> first.";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "Targeting Channel properties";
$GLOBALS['strChannelLimitations']         = "전달유지 옵션";
$GLOBALS['strConfirmDeleteChannel']       = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteChannels']      = "해당 배너를 삭제합니까??";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Variable Name";
$GLOBALS['strVariableDescription']     = "설명";
$GLOBALS['strVariableDataType']         = "Data Type";
$GLOBALS['strVariablePurpose']       = "Purpose";
$GLOBALS['strGeneric']               = "Generic";
$GLOBALS['strBasketValue']           = "Basket value";
$GLOBALS['strNumItems']              = "Number of items";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Number";
$GLOBALS['strString']                 = "String";
$GLOBALS['strTrackFollowingVars']     = "Track the following variable";
$GLOBALS['strAddVariable']             = "Add Variable";
$GLOBALS['strNoVarsToTrack']         = "No Variables to track.";
$GLOBALS['strVariableHidden']       = "Hide variable to websites?";
$GLOBALS['strVariableRejectEmpty']  = "Reject if empty?";
$GLOBALS['strTrackingSettings']     = "Tracking settings";
$GLOBALS['strTrackerType']          = "Tracker type";
$GLOBALS['strTrackerTypeJS']        = "Track JavaScript variables";
$GLOBALS['strTrackerTypeDefault']   = "Track JavaScript variables (backwards compatible, escaping needed)";
$GLOBALS['strTrackerTypeDOM']       = "Track HTML elements using DOM";
$GLOBALS['strTrackerTypeCustom']    = "Custom JS code";
$GLOBALS['strVariableCode']         = "Javascript tracking code";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "광고주 & 캠페�?�";
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
$GLOBALS['strForgotPassword']         = "Forgot your password?";
$GLOBALS['strPasswordRecovery']       = "Password recovery";
$GLOBALS['strEmailRequired']          = "Email is a required field";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Email address not found";
$GLOBALS['strPwdRecPasswordSaved']    = "The new password was saved, proceed to <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "Wrong ID";
$GLOBALS['strPwdRecEnterEmail']       = "Enter your email address below";
$GLOBALS['strPwdRecEnterPassword']    = "Enter your new password below";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "Password reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s password recovery";
$GLOBALS['strProceed']                = "Proceed >";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binary data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by the system administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "Account";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "Event";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No user activity has been recorded during the timeframe you have selected.";
$GLOBALS['strAuditTrail']             = "Audit Trail";
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
$GLOBALS['str_bg']                  = "Bulgarian";
$GLOBALS['str_cs']                  = "Czech";
$GLOBALS['str_cy']                  = "Welsh";
$GLOBALS['str_da']                  = "Danish";
$GLOBALS['str_de']                  = "German";
$GLOBALS['str_el']                  = "Greek";
$GLOBALS['str_en']                  = "English";
$GLOBALS['str_es']                  = "Spanish";
$GLOBALS['str_fa']                  = "Persian";
$GLOBALS['str_fr']                  = "French";
$GLOBALS['str_he']                  = "Hebrew";
$GLOBALS['str_hr']                  = "Croatian";
$GLOBALS['str_hu']                  = "Hungarian";
$GLOBALS['str_id']                  = "Indonesian";
$GLOBALS['str_it']                  = "Italian";
$GLOBALS['str_ja']                  = "Japanese";
$GLOBALS['str_ko']                  = "Korean";
$GLOBALS['str_lt']                  = "Lithuanian";
$GLOBALS['str_ms']                  = "Malay";
$GLOBALS['str_nb']                  = "Norwegian Bokmal";
$GLOBALS['str_nl']                  = "Dutch";
$GLOBALS['str_pl']                  = "Polish";
$GLOBALS['str_pt_BR']               = "Portuguese Brazil";
$GLOBALS['str_pt_PT']               = "Portuguese Portugal";
$GLOBALS['str_ro']                  = "Romanian";
$GLOBALS['str_ru']                  = "Russian";
$GLOBALS['str_sk']                  = "Slovak";
$GLOBALS['str_sl']                  = "Slovenian";
$GLOBALS['str_sq']                  = "Albanian";
$GLOBALS['str_sv']                  = "Swedish";
$GLOBALS['str_tr']                  = "Turkish";
$GLOBALS['str_uk']                  = "Ukranian";
$GLOBALS['str_zh_CN']               = "Chinese Simplified";
$GLOBALS['str_zh_TW']               = "Chinese Traditional";

?>
