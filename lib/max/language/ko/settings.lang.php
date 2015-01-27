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
$GLOBALS['strInstall']                      = "설치";
$GLOBALS['strChooseInstallLanguage']        = "설치�? 사용할 언어를 선�?하세요.";
$GLOBALS['strLanguageSelection']            = "언어 선�?";
$GLOBALS['strDatabaseSettings']             = "�?��?�터베�?�스 설정";
$GLOBALS['strAdminSettings']                = "관리�? 설정";
$GLOBALS['strAdvancedSettings']             = "고급 설정";
$GLOBALS['strOtherSettings']                = "기타 설정";
$GLOBALS['strWarning']                      = "경고";
$GLOBALS['strFatalError']                   = "치명�?�?� 오류가 발�?했습니다.";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "�?��?�터베�?�스�? 연결할 수 없습니다. 입력한 설정�?� 맞는지 다시 확�?�하십시오.";
$GLOBALS['strCreateTableTestFailed']        = "입력�?� 사용�?는 �?��?�터베�?�스 구조를 �?성하거나 업�?��?�트할 수 있는 권한�?� 없습니다. �?��?�터베�?�스 관리�?�?게 문�?�하십시오.";
$GLOBALS['strUpdateTableTestFailed']        = "입력�?� 사용�?는 �?��?�터베�?�스 구조를 업�?��?�트할 수 있는 권한�?� 없습니다. �?��?�터베�?�스 관리�?�?게 문�?�하십시오..";
$GLOBALS['strTablePrefixInvalid']           = "테�?�블 접�?어로 사용할 수 없는 문�?가 있습니다.";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "계�? 진행하기 전�? 문제를 수정하십시오. 문제를 수정하지 않고 진행하면 문제가 발�?할 수 있습니다:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "경고 무시";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "PHP 설정 변수 register_globals를 설정해야 합니다.";
$GLOBALS['strWarningMagicQuotesGPC']        = "PHP 설정 변수 magic_quotes_gpc를 설정해야 합니다.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "PHP 설정 변수 magic_quotes_runtime�?� 제거해야합니다.";
$GLOBALS['strWarningFileUploads']           = "PHP 설정 변수 file_uploads를 설정해야 합니다.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "현재 �?��?�터베�?�스를 갱신할 수 없습니다. 계�? 진행하면 기존�? 설정한 배너, 통계, 광고주가 모�? 삭제�?�니다.";
$GLOBALS['strTableNames']                   = "테�?�블 �?�름";
$GLOBALS['strTablesPrefix']                 = "테�?�블 접�?어";
$GLOBALS['strTablesType']                   = "테�?�블 종류";


$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
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
$GLOBALS['strErrorOccured']                 = "다�?� 오류가 발�?했습니다:";
$GLOBALS['strErrorInstallDatabase']         = "�?��?�터베�?�스 구조가 �?성�?�지 않았습니다.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorInstallDbConnect']        = "�?��?�터베�?�스와 연결할 수 없습니다.";


$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strDeliveryUrlPrefix']            = "전달유지 엔진";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "전달유지 엔진";

$GLOBALS['strInvalidUserPwd']               = "잘못�?� 사용�? ID �?는 비밀번호입니다.";

$GLOBALS['strUpgrade']                      = "업그레�?�드";
$GLOBALS['strSystemUpToDate']               = "시스템�?� 구성요소가 �?�미 최신 버전입니다. 지금 업그레�?�드할 수 없습니다.<br> 홈페�?�지로 �?��?�하려면 <b>계�?</b>�?� �?�릭하세요.";
$GLOBALS['strSystemNeedsUpgrade']           = "시스템�?� 올바르게 �?�작하려면 �?��?�터베�?�스 구조와 설정 파�?��?� 업그레�?�드해야 합니다. 시스템�?� 업그레�?�드하기 위해 <b>계�?</b>�?� �?�릭하십시오.<br>시스템�?� 업그레�?�드하는 �?� 몇 분 정�?� 걸릴 수 있습니다.";
$GLOBALS['strSystemUpgradeBusy']            = "시스템�?� 업그레�?�드중입니다. 잠시 기다려주십시오...";
$GLOBALS['strSystemRebuildingCache']        = "�?시를 재구축중입니다. 잠시 기다려주십시오...";
$GLOBALS['strServiceUnavalable']            = "시스템�?� 업그레�?�드 중�?�므로 서비스를 잠시�?�안 �?�용할 수 없습니다.";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "�?역 선�?";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

// Configuration Settings

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "관리�? 설정";
$GLOBALS['strLoginCredentials']                      = "로그�?� 정보";
$GLOBALS['strAdminUsername']                         = "관리�? ID";
$GLOBALS['strInvalidUsername']                       = "잘못�?� ID";
$GLOBALS['strBasicInformation']                      = "기본 정보";
$GLOBALS['strAdminFullName']                         = "관리�? 전체 �?�름";
$GLOBALS['strAdminEmail']                            = "관리�? �?�메�?�";
$GLOBALS['strCompanyName']                           = "회사 �?�름";
$GLOBALS['strAdminCheckUpdates']                     = "업�?��?�트 검색";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "로긴마다";
$GLOBALS['strAdminCheckDaily']                       = "�?��?�";
$GLOBALS['strAdminCheckWeekly']                      = "주간";
$GLOBALS['strAdminCheckMonthly']                     = "월간";
$GLOBALS['strAdminCheckNever']                       = "안함";
$GLOBALS['strUserlogEmail']                          = "모든 외부 발송 �?�메�?� 메시지를 기�?합니다.";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "�?��?�터베�?�스 설정";
$GLOBALS['strDatabaseServer']                        = "�?��?�터베�?�스 서버";
$GLOBALS['strDbType']                                = "�?��?�터베�?�스 �?�름";
$GLOBALS['strDbHost']                                = "�?��?�터베�?�스 호스트명";
$GLOBALS['strDbUser']                                = "�?��?�터베�?�스 사용�?�?�름";
$GLOBALS['strDbPassword']                            = "�?��?�터베�?�스 비밀번호";
$GLOBALS['strDbName']                                = "�?��?�터베�?�스 �?�름";
$GLOBALS['strDatabaseOptimalisations']               = "�?��?�터베�?�스 최�?화";
$GLOBALS['strPersistentConnections']                 = "연결 유지(persistent connection) 사용";
$GLOBALS['strCantConnectToDb']                       = "�?��?�터베�?�스�? 연결할 수 없습니다.";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "설정";
$GLOBALS['strQmailPatch']                            = "qmail 패치를 사용합니다.(qmail�?� 사용하는 경우)";
$GLOBALS['strEnableQmailPatch']                      = "qmail 패치를 사용합니다.(qmail�?� 사용하는 경우)";

// Audit Trail Settings

// Debug Logging Settings

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "전달 유지 설정";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strDeliveryPath']                          = "전달유지 �?시";
$GLOBALS['strDeliverySslPath']                       = "전달유지 �?시";
$GLOBALS['strTypeWebSettings']                       = "로컬 배너(웹서버) 설정";
$GLOBALS['strTypeWebMode']                           = "저장 방법";
$GLOBALS['strTypeWebModeLocal']                      = "로컬 디렉터리";
$GLOBALS['strTypeWebModeFtp']                        = "외부 FTP 서버";
$GLOBALS['strTypeWebDir']                            = "로컬 디렉터리";
$GLOBALS['strTypeFTPHost']                           = "FTP 호스트";
$GLOBALS['strTypeFTPDirectory']                      = "호스트 디렉터리";
$GLOBALS['strTypeFTPUsername']                       = "로그�?�ID";
$GLOBALS['strTypeFTPPassword']                       = "비밀번호";



$GLOBALS['strP3PSettings']                           = "P3P 개�?� 보호 정책";
$GLOBALS['strUseP3P']                                = "P3P 정책 사용";
$GLOBALS['strP3PCompactPolicy']                      = "P3P Compact 정책";
$GLOBALS['strP3PPolicyLocation']                     = "P3P 정책 위치";

// General Settings

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "지역 정보 중심(Geotargeting)";
$GLOBALS['strGeotargeting']                          = "지역 정보 중심(Geotargeting)";

// Interface Settings
$GLOBALS['strInventory']                             = "목�?";
$GLOBALS['strShowCampaignInfo']                      = "<i>캠페�?� 목�?</i> 페�?�지�? 캠페�?� 정보를 �?세히 보여�?니다.";
$GLOBALS['strShowBannerInfo']                        = "<i>배너 목�?</i> 페�?�지�? 배너 정보를 �?세히 보여�?니다.";
$GLOBALS['strShowCampaignPreview']                   = "<i>배너 목�?</i> 페�?�지�? 배너�?� 미리보기를 모�? 표시합니다.";
$GLOBALS['strShowBannerHTML']                        = "HTML 코드 대신�? 실제 배너를 표시합니다.";
$GLOBALS['strShowBannerPreview']                     = "배너 처리 화면�?서 페�?�지 �?단�? 배너 미리보기를 표시합니다.";
$GLOBALS['strHideInactive']                          = "사용하지 않는 항목�?� 모든 목�? 페�?�지�?서 숨�?니다.";
$GLOBALS['strGUIShowMatchingBanners']                = "<i>연결�?� 배너</i> 페�?�지�? 해당 배너를 표시합니다.";
$GLOBALS['strGUIShowParentCampaigns']                = "<i>연결�?� 배너</i> 페�?�지�? 해당하는 �?위 �?페�?��?� 표시합니다.";
$GLOBALS['strStatisticsDefaults']                    = "통계";
$GLOBALS['strBeginOfWeek']                           = "한 주�?� 시작�?�";
$GLOBALS['strPercentageDecimals']                    = "백분율 소수�?";
$GLOBALS['strWeightDefaults']                        = "가중치 기본설정";
$GLOBALS['strDefaultBannerWeight']                   = "배너 가중치 기본값";
$GLOBALS['strDefaultCampaignWeight']                 = "캠페�?� 가중치 기본값";
$GLOBALS['strDefaultBannerWErr']                     = "배너 가중치�?� 기본값�?� 정수를 입력해야합니다.";
$GLOBALS['strDefaultCampaignWErr']                   = "캠페�?� 가중치�?� 기본값�?� 정수를 입력해야합니다.";


// CSV Import Settings

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "허용�?� 배너 호출 종류";

// Banner Delivery Settings

// Banner Logging Settings
$GLOBALS['strReverseLookup']                         = "DNS 역참조";
$GLOBALS['strProxyLookup']                           = "프�?시 참조";
$GLOBALS['strIgnoreHosts']                           = "무시할 호스트";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "경고횟수 제한(Warn Limit)";
$GLOBALS['strWarnLimitErr']                          = "경고횟수 제한(Warn Limit)�?� �?�수를 사용할 수 없습니다.";
$GLOBALS['strWarnAdmin']                             = "관리�?�?게 경고를 알립니다.";
$GLOBALS['strWarnClient']                            = "광고주�?게 경고를 알립니다.";
$GLOBALS['strWarnAgency']                            = "광고주�?게 경고를 알립니다.";

// UI Settings
$GLOBALS['strGuiSettings']                           = "사용�? �?�터페�?�스 설정";
$GLOBALS['strGeneralSettings']                       = "�?�반 설정";
$GLOBALS['strAppName']                               = "�?�용 프로그램 �?�름";
$GLOBALS['strMyHeader']                              = "내 머리글";
$GLOBALS['strMyFooter']                              = "내 바닥글";


$GLOBALS['strGzipContentCompression']                = "컨�?트 GZIP 압축 사용";
$GLOBALS['strClientInterface']                       = "광고주 �?�터페�?�스";
$GLOBALS['strClientWelcomeEnabled']                  = "광고주 환�? 메시지를 사용합니다.";
$GLOBALS['strClientWelcomeText']                     = "환�? 메시지<br>(HTML 태그 가능)";


// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strKeywordRetrieval']             = "키워드 검색";
$GLOBALS['strBannerRetrieval']              = "배너 검색 방법";
$GLOBALS['strRetrieveRandom']               = "랜�?� 배너 검색(기본)";
$GLOBALS['strRetrieveNormalSeq']            = "배너 검색(�?�반)";
$GLOBALS['strWeightSeq']                    = "가중치로 배너 검색";
$GLOBALS['strFullSeq']                      = "전체 배너 검색";
$GLOBALS['strUseConditionalKeys']           = "�?접 선�?�?� 사용할 때 논리 연산�?를 허용합니다.";
$GLOBALS['strUseMultipleKeys']              = "�?접 선�?�?� 사용할 때 다수�?� 키워드를 허용합니다.";

$GLOBALS['strTableBorderColor']             = "테�?�블 테�?리 색�?";
$GLOBALS['strTableBackColor']               = "테�?�블 배경 색�?";
$GLOBALS['strTableBackColorAlt']            = "테�?�블 배경 색�?(Alternative)";
$GLOBALS['strMainBackColor']                = "주 배경 색�?";
$GLOBALS['strOverrideGD']                   = "GD �?�미지 �?�맷�?� 무시합니다.";
$GLOBALS['strTimeZone']                     = "시간 �?역";

?>
