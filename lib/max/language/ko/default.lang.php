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

$GLOBALS['phpAds_DecimalPoint']         = ",";
$GLOBALS['phpAds_ThousandsSeperator']   = ".";

// Date & time configuration

// Formats used by PEAR Spreadsheet_Excel_Writer packate

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHelp']                     = "�?�움�?";
$GLOBALS['strShortcuts']                = "바로가기";
$GLOBALS['strAdminstration']            = "목�?";
$GLOBALS['strMaintenance']              = "유지보수";
$GLOBALS['strProbability']              = "확률";
$GLOBALS['strInvocationcode']           = "호출코드";
$GLOBALS['strBasicInformation']         = "기본 정보";
$GLOBALS['strContractInformation']      = "계약 정보";
$GLOBALS['strLoginInformation']         = "로그�?� 정보";
$GLOBALS['strOverview']                 = "목�?보기";
$GLOBALS['strSearch']                   = "검색(<u>S</u>)";
$GLOBALS['strHistory']                  = "기�?";
$GLOBALS['strDetails']                  = "�?세히";
$GLOBALS['strCheckForUpdates']          = "업�?��?�트 검색";
$GLOBALS['strCompact']                  = "간단히";
$GLOBALS['strVerbose']                  = "세부내용";
$GLOBALS['strUser']                     = "사용�?";
$GLOBALS['strEdit']                     = "편집";
$GLOBALS['strCreate']                   = "�?성";
$GLOBALS['strDuplicate']                = "복제";
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
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "전체";
$GLOBALS['strTotal']                    = "합계";
$GLOBALS['strActive']                   = "사용 가능";
$GLOBALS['strDaysLeft']                 = "남�?� 기간";
$GLOBALS['strCheckAllNone']             = "모�? 선�?/ 해제";
$GLOBALS['strExpandAll']                = "모�? 보기(<u>E</u>)";
$GLOBALS['strCollapseAll']              = "모�? 숨기기(<u>C</u>)";
$GLOBALS['strShowAll']                  = "모�? 보기";
$GLOBALS['strNoAdminInterface']         = "서비스를 �?�용할 수 없습니다.";
$GLOBALS['strFilterBySource']           = "소스 필터�?";
$GLOBALS['strFieldContainsErrors']      = "다�?� 필드�? 오류가 있습니다.:";
$GLOBALS['strFieldFixBeforeContinue1']  = "오류를 수정한 후�?";
$GLOBALS['strFieldFixBeforeContinue2']  = "다시 시작해야 합니다..";
$GLOBALS['strDelimiter']                = "구분기호";
$GLOBALS['strMiscellaneous']            = "기타";
$GLOBALS['strCollectedAllStats']        = "�?��?� 통계";

// Dashboard
// Dashboard Errors

// Priority
$GLOBALS['strPriority']                 = "우선순위";
$GLOBALS['strPriorityOptimisation']     = "기타"; // Er, what?
$GLOBALS['strNoLimitations']            = "제한 없�?�";

// Properties
$GLOBALS['strName']                     = "�?�름";
$GLOBALS['strSize']                     = "�?�기";
$GLOBALS['strWidth']                    = "너비";
$GLOBALS['strHeight']                   = "높�?�";
$GLOBALS['strTarget']                   = "대�? 프레임";
$GLOBALS['strLanguage']                 = "언어";
$GLOBALS['strDescription']              = "설명";

// User access
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;
$GLOBALS['strLinkUserHelpUser']         = "사용�?ID";

// Login & Permissions
$GLOBALS['strUserProperties']           = "배너 등�? 정보";
$GLOBALS['strAuthentification']         = "�?��?";
$GLOBALS['strWelcomeTo']                = "환�?합니다. ";
$GLOBALS['strEnterUsername']            = "로그�?�하기 위해 사용�?ID과 비밀번호를 입력하세요.";
$GLOBALS['strEnterBoth']                = "사용�?ID와 비밀번호를 모�? 입력하세요.";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strLogin']                    = "로그�?�ID";
$GLOBALS['strLogout']                   = "로그아웃";
$GLOBALS['strUsername']                 = "사용�?ID";
$GLOBALS['strPassword']                 = "비밀번호";
$GLOBALS['strPasswordRepeat']           = "비밀번호 확�?�";
$GLOBALS['strAccessDenied']             = "액세스할 수 없습니다.";
$GLOBALS['strPasswordWrong']            = "올바른 비밀번호가 아닙니다.";
$GLOBALS['strNotAdmin']                 = "권한�?� 없습니다.";
$GLOBALS['strDuplicateClientName']      = "입력한 ID가 �?�미 있습니다. 다른 ID를 입력하세요.";
$GLOBALS['strDuplicateAgencyName']      = "입력한 ID가 �?�미 있습니다. 다른 ID를 입력하세요.";

// General advertising
$GLOBALS['strClicks']                   = "AdClicks";
$GLOBALS['strCTRShort']                 = "�?�릭율";
$GLOBALS['strCTR']                      = "�?�릭율";
$GLOBALS['strTotalViews']               = "�? AdViews";
$GLOBALS['strTotalClicks']              = "�? AdClicks";
$GLOBALS['strViewCredits']              = "AdView credits";
$GLOBALS['strClickCredits']             = "AdClick credits";
$GLOBALS['strBanners']                  = "배너";
$GLOBALS['strCampaigns']                = "캠페�?�";
$GLOBALS['strCampaignName']             = "캠페�?� 기�?";
$GLOBALS['strCountry']                  = "국가";

// Finance
$GLOBALS['strFinanceCTR']               = "�?�릭율";

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
$GLOBALS['strThisMonth']                = "월";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "시";
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
$GLOBALS['strConfirmDeleteClient']          = "해당 광고주를 삭제합니까?";
$GLOBALS['strConfirmDeleteClients']         = "해당 광고주를 삭제합니까?";
$GLOBALS['strConfirmResetClientStats']      = "해당 광고주�? 대한 모든 통계를 삭제합니까?";
$GLOBALS['strSite']                         = "�?�기";
$GLOBALS['strHideInactiveAdvertisers']      = "사용하지 않는 광고주 숨기기";
$GLOBALS['strInactiveAdvertisersHidden']    = "광고주가 숨겨져 있습니다.";
$GLOBALS['strOverallAdvertisers']           = "광고주";
$GLOBALS['strAdvertiserCampaigns']          = "광고주 & 캠페�?�";
// Advertisers properties
$GLOBALS['strContact']                          = "연�?�처";
$GLOBALS['strEMail']                            = "�?�메�?�";
$GLOBALS['strSendAdvertisingReport']            = "광고 보고서를 �?�메�?�로 발송합니다.";
$GLOBALS['strNoDaysBetweenReports']             = "보고서 발송 간격";
$GLOBALS['strSendDeactivationWarning']          = "캠페�?��?� 중지�?�면 알립니다.";
$GLOBALS['strAllowClientModifyInfo']            = "사용�?가 설정�?� 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowClientModifyBanner']          = "사용�?가 배너를 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowClientAddBanner']             = "사용�?가 배너를 추가할 수 있게 합니다.";
$GLOBALS['strAllowClientDisableBanner']         = "사용�?가 �?신�?� 배너를 중지할 수 있게 합니다.";
$GLOBALS['strAllowClientActivateBanner']        = "사용�?가 �?신�?� 배너를 운�?할 수 있게 합니다.";

// Campaign
$GLOBALS['strCampaign']                     = "캠페�?�";
$GLOBALS['strCampaigns']                    = "캠페�?�";
$GLOBALS['strTotalCampaigns']               = "�? 캠페�?� 수";
$GLOBALS['strActiveCampaigns']              = "운�?중�?� 캠페�?�";
$GLOBALS['strAddCampaign']                  = "새 캠페�?� 추가";
$GLOBALS['strAddCampaign_Key']              = "새 캠페�?� 추가(<u>n</u>)";
$GLOBALS['strCreateNewCampaign']            = "새 캠페�?� �?성";
$GLOBALS['strModifyCampaign']               = "캠페�?� 수정";
$GLOBALS['strMoveToNewCampaign']            = "새로운 캠페�?�으로 �?��?�";
$GLOBALS['strBannersWithoutCampaign']       = "캠페�?��?� 없는 배너(�?�립배너)";
$GLOBALS['strDeleteAllCampaigns']           = "모든 캠페�?� 삭제";
$GLOBALS['strCampaignStats']                = "캠페�?� 통계";
$GLOBALS['strCampaignProperties']           = "캠페�?� 등�?정보";
$GLOBALS['strCampaignOverview']             = "캠페�?� 목�?";
$GLOBALS['strCampaignHistory']              = "캠페�?� 기�?";
$GLOBALS['strNoCampaigns']                  = "현재 정�?��?� 캠페�?��?� 없습니다.";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "해당 광고주�?� 모든 캠페�?��?� 삭제합니까?";
$GLOBALS['strConfirmDeleteCampaign']        = "�?� �?페�?��?� 정�?로 삭제합니까?";
$GLOBALS['strConfirmDeleteCampaigns']       = "�?� �?페�?��?� 정�?로 삭제합니까?";
$GLOBALS['strHideInactiveCampaigns']        = "운�?하지 않는 캠페�?� 숨기기";
$GLOBALS['strInactiveCampaignsHidden']      = "캠페�?��?� 숨겨져 있습니다.";
$GLOBALS['strHiddenAdvertiser']             = "광고주";
$GLOBALS['strHiddenWebsite']              = "광고게시�?";
$GLOBALS['strHiddenZone']                   = "�?역";

// Campaign-zone linking page


// Campaign properties
$GLOBALS['strDontExpire']                       = "�?� 캠페�?��?� 만료하지 않습니다.";
$GLOBALS['strActivateNow']                      = "�?� �?페�?��?� 지금 활성화합니다.";
$GLOBALS['strLow']                              = "낮�?�";
$GLOBALS['strHigh']                             = "높�?�";
$GLOBALS['strExpirationDate']                   = "만료�?�";
$GLOBALS['strActivationDate']                   = "활성�?�";
$GLOBALS['strCampaignWeight']                   = "캠페�?� 가중치";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "�?� 캠페�?��?� 배너를 낮�?� 우선 순위로 설정합니다.<br>�?� 옵션�?� 높�?� 우선 순위�?� 배너가 노출�?�지 않�?� 때 배너를 노출하기 위해 사용합니다. 노출 횟수를 지정할 수 없으며, 가중치를 통해서 낮�?� 우선 순위 배너들간�?� 비율만 설정할 수 있습니다.";
$GLOBALS['strTargetPerDay']                     = "회로 제한합니다.";
$GLOBALS['strPriorityAutoTargeting']            = "남�?� 기간 �?�안 배너를 균등하게 노출시킵니다. 따�?�서 매�?� 매�?� AdView�?� 노출 횟수가 설정�?�니다.";
$GLOBALS['strCampaignStatusInactive']           = "사용 가능";
$GLOBALS['strCampaignStatusDeleted']            = "삭제";
$GLOBALS['strCampaignType']                     = "캠페�?� 기�?";
$GLOBALS['strContract']                         = "연�?�처";
$GLOBALS['strStandardContract']                 = "연�?�처";

// Tracker
$GLOBALS['strTrackerOverview']            = "배너 목�?";
$GLOBALS['strAddTracker_Key']             = "새 배너 추가(<u>n</u>)";
$GLOBALS['strConfirmDeleteAllTrackers']   = "해당 광고주�?� 모든 캠페�?��?� 삭제합니까?";
$GLOBALS['strConfirmDeleteTrackers']      = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteTracker']       = "해당 배너를 삭제합니까??";
$GLOBALS['strDeleteAllTrackers']          = "모든 배너 삭제";
$GLOBALS['strTrackerProperties']          = "배너 등�? 정보";
$GLOBALS['strTrackerOverview']            = "배너 목�?";



// Banners (General)
$GLOBALS['strBanner']                        = "배너";
$GLOBALS['strBanners']                       = "배너";
$GLOBALS['strAddBanner']                     = "새 배너 추가";
$GLOBALS['strAddBanner_Key']                 = "새 배너 추가(<u>n</u>)";
$GLOBALS['strModifyBanner']                  = "배너 수정";
$GLOBALS['strActiveBanners']                 = "운�?중�?� 배너";
$GLOBALS['strTotalBanners']                  = "�? 배너 수";
$GLOBALS['strShowBanner']                    = "배너 보기";
$GLOBALS['strShowAllBanners']                = "모든 배너 보기";
$GLOBALS['strShowBannersNoAdViews']          = "AdView 없는 배너 보기";
$GLOBALS['strShowBannersNoAdClicks']         = "AdClick 없는 배너 보기";
$GLOBALS['strDeleteAllBanners']              = "모든 배너 삭제";
$GLOBALS['strActivateAllBanners']            = "모든 배너 활성화";
$GLOBALS['strDeactivateAllBanners']          = "모든 배너중지";
$GLOBALS['strBannerOverview']                = "배너 목�?";
$GLOBALS['strBannerProperties']              = "배너 등�? 정보";
$GLOBALS['strBannerHistory']                 = "배너 기�?";
$GLOBALS['strBannerNoStats']                 = "해당 배너�? 대한 통계가 없습니다.";
$GLOBALS['strNoBanners']                     = "현재 등�?�?� 배너가 없습니다.";
$GLOBALS['strConfirmDeleteBanner']           = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteBanners']          = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteAllBanners']       = "해당 캠페�?��?� 모든 배너를 삭제합니까?";
$GLOBALS['strConfirmResetBannerStats']       = "해당 배너�? 대한 모든 통계를 삭제합니까?";
$GLOBALS['strShowParentCampaigns']           = "�?위 캠페�?� 표시";
$GLOBALS['strHideParentCampaigns']           = "�?위 캠페�?� 숨기기";
$GLOBALS['strHideInactiveBanners']           = "사용하지 않는 배너 숨김";
$GLOBALS['strInactiveBannersHidden']         = "배너가 숨겨져 있습니다.";


// Banner Preferences

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "배너 형�?�?� 선�?하세요.";
$GLOBALS['strMySQLBanner']             = "로컬 배너(SQL - DB 저장방�?)";
$GLOBALS['strWebBanner']               = "로컬 배너(웹서버 - 웹 저장 방�?)";
$GLOBALS['strURLBanner']               = "외부 배너";
$GLOBALS['strHTMLBanner']              = "HTML 배너";
$GLOBALS['strTextBanner']              = "�?스트 광고";
$GLOBALS['strUploadOrKeep']            = "현재 �?�미지를 �?�용하거나<br> 다른 �?�미지를 업로드할<br> 수 있습니다.";
$GLOBALS['strUploadOrKeepAlt']        = "현재 �?�미지를 �?�용하거나<br /> 다른 �?�미지를 업로드할<br /> 수 있습니다.";
$GLOBALS['strNewBannerFile']         = "배너�? 사용할 �?�미지를 선�?하세요.";
$GLOBALS['strNewBannerURL']         = "�?�미지 URL(incl. http://)";
$GLOBALS['strURL']                     = "대�? URL(incl. http://)";
$GLOBALS['strKeyword']              = "키워드";
$GLOBALS['strTextBelow']             = "�?�미지 설명";
$GLOBALS['strWeight']                 = "가중치";
$GLOBALS['strAlt']                     = "Alt �?스트";
$GLOBALS['strStatusText']            = "�?태표시줄 문구";
$GLOBALS['strBannerWeight']            = "배너 가중치";

// Banner (advanced)

// Banner (swf)
$GLOBALS['strCheckSWF']                = "플래시 파�?��? 입력�?� �?�?�를 확�?�합니다.";
$GLOBALS['strConvertSWFLinks']        = "플래시 �?�?� 변환합니다.";
$GLOBALS['strHardcodedLinks']        = "내장�?� �?�?�";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "보다 빠른 파�?� 전송�?� 위해 SWF 파�?� 압축";
$GLOBALS['strOverwriteSource']        = "소스 파�?�미터 �?�어쓰기";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML 템플릿";
$GLOBALS['strChooseNetwork']        = "사용할 템플릿 선�?하세요.";
$GLOBALS['strMoreInformation']        = "�?세한 정보...";
$GLOBALS['strRichMedia']            = "리치미디어";
$GLOBALS['strTrackAdClicks']        = "AdClicks 추�?";

// Banner (AdSense)

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "전달유지 옵션";
$GLOBALS['strACL']                        = "전달유지";
$GLOBALS['strACLAdd']                     = "새 제한 추가";
$GLOBALS['strACLAdd_Key']                 = "새 제한 추가(<u>n</u>)";
$GLOBALS['strNoLimitations']              = "제한 없�?�";
$GLOBALS['strApplyLimitationsTo']         = "제한 �?용하기";
$GLOBALS['strRemoveAllLimitations']       = "모든 제한 제거";
$GLOBALS['strEqualTo']                    = "같�?� 경우";
$GLOBALS['strDifferentFrom']              = "다른 경우";
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
$GLOBALS['strBrowser']                    = "브�?�우저";
$GLOBALS['strDeliveryLimitations']        = "전달유지 제한";

$GLOBALS['strDeliveryCapping']            = "전달유지 제한(Delivery capping)";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];

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
$GLOBALS['strInactiveAffiliatesHidden'] = "배너가 숨겨져 있습니다.";

// Website (properties)
$GLOBALS['strWebsite']                      = "광고게시�?";
$GLOBALS['strAllowAffiliateModifyInfo']     = "사용�?가 설정�?� 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowAffiliateModifyZones']    = "사용�?가 �?역�?� 수정하는 것�?� 허용합니다.";
$GLOBALS['strAllowAffiliateLinkBanners']    = "사용�?가 �?신�?� �?역�? 배너를 연결할 수 있게 합니다.";
$GLOBALS['strAllowAffiliateAddZone']        = "사용�?가 새 �?역�?� 정�?�하는 것�?� 허용합니다.";
$GLOBALS['strAllowAffiliateDeleteZone']     = "사용�?가 기존 �?역�?� 삭제하는 것�?� 허용합니다.";

// Website (properties - payment information)
$GLOBALS['strCountry']                      = "국가";

// Website (properties - other information)
$GLOBALS['strWebsiteZones']                 = "광고게시�? & �?역";

// Zone
$GLOBALS['strZone']                         = "�?역";
$GLOBALS['strZones']                        = "�?역";
$GLOBALS['strAddNewZone']                   = "새 �?역 추가";
$GLOBALS['strAddNewZone_Key']               = "새 �?역 추가(<u>n</u>)";
$GLOBALS['strAddZone']                      = "�?역 �?성";
$GLOBALS['strModifyZone']                   = "�?역 수정";
$GLOBALS['strLinkedZones']                  = "연결�?� �?역";
$GLOBALS['strZoneOverview']                 = "�?역 목�?";
$GLOBALS['strZoneProperties']               = "�?역 등�?정보";
$GLOBALS['strZoneHistory']                  = "�?역 기�?";
$GLOBALS['strNoZones']                      = "현재 등�?�?� �?역�?� 없습니다.";
$GLOBALS['strConfirmDeleteZone']            = "�?� �?역�?� 삭제합니까?";
$GLOBALS['strConfirmDeleteZones']           = "�?� �?역�?� 삭제합니까?";
$GLOBALS['strZoneType']                     = "�?역 종류";
$GLOBALS['strBannerButtonRectangle']        = "배너, 버튼 �?는 사�?형";
$GLOBALS['strInterstitial']                 = "격�? �?는 플로팅 DHTML";
$GLOBALS['strPopup']                        = "�?업";
$GLOBALS['strTextAdZone']                   = "�?스트 광고";
$GLOBALS['strShowMatchingBanners']          = "�?�치하는 배너 보기";
$GLOBALS['strHideMatchingBanners']          = "�?�치하는 배너 숨기기";
$GLOBALS['strInactiveZonesHidden']          = "배너가 숨겨져 있습니다.";


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
$GLOBALS['strZonePrependHTML']            = "�?� �?역�? 표시�?� �?스트 광고 앞�? HTML 코드를 추가합니다.";
$GLOBALS['strZoneAppendHTML']            = "�?� �?역�? 표시�?� �?스트 광고 뒤�? HTML 코드를 추가합니다.";
$GLOBALS['strZoneAppendSelectZone']        = "�?� �?역�? 연결�?� 배너�? �?업�?�나 격�? 배너 호출 코드를 항�? 추가합니다.";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "선�?한 �?역�? 연결�?� 배너는 모�? �?(null) 우선순위입니다. �?역 연결�?� 다�?�과 같습니다.:";
$GLOBALS['strZoneProbNullPri']            = "�?� �?역�? 연결�?� 배너는 모�? �?(null) 우선순위입니다.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "연결할 배너�?� 종류를 선�?하세요.";
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
$GLOBALS['strStatusDuplicate']          = "복제";
$GLOBALS['strConnTypeSale']             = "저장";

// Statistics
$GLOBALS['strStats']                     = "통계";
$GLOBALS['strNoStats']                   = "현재 �?�용할 수 있는 통계가 없습니다.";
$GLOBALS['strNoTargetingStats']          = "현재 �?�용할 수 있는 통계가 없습니다.";
$GLOBALS['strConfirmResetStats']         = "모든 통계를 삭제하시겠습니까?";
$GLOBALS['strGlobalHistory']             = "전체 기�?";
$GLOBALS['strDailyHistory']              = "�?��?� 기�?";
$GLOBALS['strDailyStats']                = "�?��?� 통계";
$GLOBALS['strWeeklyHistory']             = "주간 통계";
$GLOBALS['strMonthlyHistory']            = "월별 통계";
$GLOBALS['strTotalThisPeriod']           = "기간 합계";
$GLOBALS['strAverageThisPeriod']         = "기간 �?�균";
$GLOBALS['strResetStats']                = "통계 초기화";
$GLOBALS['strSourceStats']               = "소스 통계";
$GLOBALS['strSelectSource']              = "조회할 소스를 선�?하세요:";
$GLOBALS['strSizeDistribution']          = "�?�기별 분�?�";
$GLOBALS['strCountryDistribution']       = "국가별 분�?�";
$GLOBALS['strBreakdownByDay']            = "�?�";
$GLOBALS['strBreakdownByWeek']           = "주";
$GLOBALS['strBreakdownByMonth']          = "월";
$GLOBALS['strBreakdownByHour']           = "시";

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
$GLOBALS['strCampaignStop']           = "캠페�?� 기�?";

// Reports
$GLOBALS['strReports']                = "보고서";
$GLOBALS['strSelectReport']           = "�?성할 보고서를 선�?하세요.";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "�? 광고주 수";

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


// Errors
$GLOBALS['strMySQLError']                       = "SQL 오류:";
$GLOBALS['strLogErrorClients']                  = "[phpAds] �?��?�터베�?�스�?서 광고주를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] �?��?�터베�?�스�?서 배너를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strLogErrorViews']                    = "[phpAds] �?��?�터베�?�스�?서 AdView를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] �?��?�터베�?�스�?서 AdClick�?� 가져오는 �?�안 오류가 발�?했습니다.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] �?��?�터베�?�스�?서 AdView를 가져오는 �?�안 오류가 발�?했습니다..";
$GLOBALS['strErrorViews']                       = "뷰 횟수를 입력하거나 제한하지 않�?� �?�?를 체�?�해야합니다!";
$GLOBALS['strErrorNegViews']                    = "�?�수는 사용할 수 없습니다.";
$GLOBALS['strErrorClicks']                      = "�?�릭 횟수를 입력하거나 제한하지 않�?� �?�?를 체�?�해야합니다!";
$GLOBALS['strErrorNegClicks']                   = "부정한 �?�릭(negative click)�?� 허용�?�지 않습니다.";
$GLOBALS['strNoMatchesFound']                   = "검색 결과가 없습니다.";
$GLOBALS['strErrorOccurred']                    = "오류가 발�?했습니다.";
$GLOBALS['strErrorUploadSecurity']              = "보안 문제가 발견�?�었습니다. 업로드를 중지합니다 !";
$GLOBALS['strErrorUploadBasedir']               = "업로드�?� 파�?��? 액세스할 수 없습니다. 안전 모드 �?는 open_basedir 제한 때문�?� 수 있습니다.";
$GLOBALS['strErrorUploadUnknown']               = "알 수 없는 �?�유로 업로드�?� 파�?��? 액세스할 수 없습니다. PHP 설정�?� 확�?�하십시오.";
$GLOBALS['strErrorStoreLocal']                  = "로컬 디렉터리�? 배너를 저장하는 �?�안 오류가 발�?했습니다. 로컬 디렉터리 경로 설정�?� 잘못�?�었�?� 수 있습니다.";
$GLOBALS['strErrorStoreFTP']                    = "FTP 서버�? 배너를 업로드하는 �?�안 오류가 발�?했습니다. 서버를 �?�용할 수 없거나 FTP 서버 설정�?� 잘못�?�었�?� 수 있습니다.";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";

//Validation


// Email
$GLOBALS['strMailSubject']                      = "광고주 보고서";
$GLOBALS['strAdReportSent']                     = "광고주 보고서를 보냈습니다";
$GLOBALS['strMailHeader']                       = "{contact}님,\\n";
$GLOBALS['strMailBannerStats']                  = "{clientname}�?� 배너 통계는 다�?�과 같습니다.";
$GLOBALS['strMailBannerActivatedSubject']       = "캠페�?� {id} 활성화";
$GLOBALS['strMailBannerDeactivatedSubject']     = "캠페�?� {id} 활성화";
$GLOBALS['strMailClientDeactivated']            = "다�?� 배너는 다�?� �?�유로 �?�용할 수 없습니다.";
$GLOBALS['strMailNothingLeft']                  = "웹 사�?�트를 계�? �?보하려면 담당�?�?게 문�?�하십시오.";
$GLOBALS['strClientDeactivated']                = "�?� 캠페�?��?� 현재 다�?�과 같�?� �?�유로 운�?하지 않습니다.";
$GLOBALS['strBeforeActivate']                   = "아�? 시작�?��?� 아닙니다.";
$GLOBALS['strAfterExpire']                      = "만기�?�입니다.";
$GLOBALS['strNoMoreClicks']                     = "남아있는 AdClicks�?� 없습니다.";
$GLOBALS['strNoMoreConversions']                = "남아있는 AdClicks�?� 없습니다.";
$GLOBALS['strWarnClientTxt']                    = "배너�? 남아있는 AdClciks �?는 AdViews�?� {limit}입니다. \\n남아있는 AdCliks나 AdViews가 없�?� 때 배너를 운�? 중지합니다. ";
$GLOBALS['strNoViewLoggedInInterval']           = "�?� 기간 �?�안�?� 보고서�? 기�?�?� AdViews가 없습니다.";
$GLOBALS['strNoClickLoggedInInterval']          = "�?� 기간 �?�안�?� 보고서�? 기�?�?� AdClicks�?� 없습니다.";
$GLOBALS['strNoConversionLoggedInInterval']     = "�?� 기간 �?�안�?� 보고서�? 기�?�?� AdViews가 없습니다.";
$GLOBALS['strMailReportPeriod']                 = "�?� 보고서�?는 {startdate}�?서 {enddate}까지�?� 통계를 �?�함하고 있습니다.";
$GLOBALS['strMailReportPeriodAll']              = "�?� 보고서�?는 {enddate}까지�?� 통계를 �?�함하고 있습니다.";
$GLOBALS['strNoStatsForCampaign']               = "�?� 캠페�?��?서 �?�용할 수 있는 통계가 없습니다.";

// Priority
$GLOBALS['strPriority']                         = "우선순위";

// Preferences
$GLOBALS['strPreferences']                      = "설정";


// Statistics columns
// Long names

    // Short names
$GLOBALS['strCTR_short']                        = "�?�릭율";

// Global Settings
$GLOBALS['strGlobalSettings']               = "�?�반 설정";
$GLOBALS['strGeneralSettings']              = "�?�반 설정";
$GLOBALS['strMainSettings']                 = "설정";
$GLOBALS['strAdminSettings']                = "관리 설정";


// Product Updates
$GLOBALS['strProductUpdates']         = "제품 업�?��?�트";

// Agency
$GLOBALS['strAddAgency_Key']               = "새 �?역 추가(<u>n</u>)";
$GLOBALS['strNoAgencies']                 = "현재 등�?�?� �?역�?� 없습니다.";
$GLOBALS['strConfirmDeleteAgency']           = "�?� �?역�?� 삭제합니까?";
$GLOBALS['strInactiveAgenciesHidden']     = "배너가 숨겨져 있습니다.";

// Channels
$GLOBALS['strNoChannels']                 = "현재 등�?�?� 배너가 없습니다.";

$GLOBALS['strChannelLimitations']         = "전달유지 옵션";
$GLOBALS['strConfirmDeleteChannel']       = "해당 배너를 삭제합니까??";
$GLOBALS['strConfirmDeleteChannels']      = "해당 배너를 삭제합니까??";

// Tracker Variables
$GLOBALS['strVariableDescription']     = "설명";


// Upload conversions
$GLOBALS['strYouHaveNoCampaigns']   = "광고주 & 캠페�?�";


// Password recovery

// Audit


// Widget - Audit
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";



//confirmation messages











/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php

// Market entities

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/


?>
