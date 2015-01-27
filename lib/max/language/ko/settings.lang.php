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
$GLOBALS['strAdminAccount']                 = "System Administrator Account";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "고급 설정";
$GLOBALS['strOtherSettings']                = "기타 설정";
$GLOBALS['strSpecifySyncSettings']          = "Synchronisation settings";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strWarning']                      = "경고";
$GLOBALS['strFatalError']                   = "치명�?�?� 오류가 발�?했습니다.";
$GLOBALS['strUpdateError']                  = "An error occurred while updating";
$GLOBALS['strBtnContinue']                  = "Continue »";
$GLOBALS['strBtnRecover']                   = "Recover »";
$GLOBALS['strBtnStartAgain']                   = "Start Upgrade Again »";
$GLOBALS['strBtnGoBack']                    = "« Go Back";
$GLOBALS['strBtnAgree']                     = "I Agree »";
$GLOBALS['strBtnDontAgree']                 = "« I Disagree";
$GLOBALS['strBtnRetry']                     = "Retry";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "�?��?�터베�?�스�? 연결할 수 없습니다. 입력한 설정�?� 맞는지 다시 확�?�하십시오.";
$GLOBALS['strCreateTableTestFailed']        = "입력�?� 사용�?는 �?��?�터베�?�스 구조를 �?성하거나 업�?��?�트할 수 있는 권한�?� 없습니다. �?��?�터베�?�스 관리�?�?게 문�?�하십시오.";
$GLOBALS['strUpdateTableTestFailed']        = "입력�?� 사용�?는 �?��?�터베�?�스 구조를 업�?��?�트할 수 있는 권한�?� 없습니다. �?��?�터베�?�스 관리�?�?게 문�?�하십시오..";
$GLOBALS['strTablePrefixInvalid']           = "테�?�블 접�?어로 사용할 수 없는 문�?가 있습니다.";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "계�? 진행하기 전�? 문제를 수정하십시오. 문제를 수정하지 않고 진행하면 문제가 발�?할 수 있습니다:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "경고 무시";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "PHP 설정 변수 register_globals를 설정해야 합니다.";
$GLOBALS['strWarningRegisterArgcArv']       = "The PHP configuration variable register_argc_argv needs to be turned on to run maintenance from the command line.";
$GLOBALS['strWarningMagicQuotesGPC']        = "PHP 설정 변수 magic_quotes_gpc를 설정해야 합니다.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "PHP 설정 변수 magic_quotes_runtime�?� 제거해야합니다.";
$GLOBALS['strWarningFileUploads']           = "PHP 설정 변수 file_uploads를 설정해야 합니다.";
$GLOBALS['strWarningTrackVars']             = "The PHP configuration variable track_vars needs to be turned on.";
$GLOBALS['strWarningPREG']                  = "The version of PHP you are using doesn't have support for PERL compatible regular expressions. You need to enable the PREG extension before you can proceed.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "현재 �?��?�터베�?�스를 갱신할 수 없습니다. 계�? 진행하면 기존�? 설정한 배너, 통계, 광고주가 모�? 삭제�?�니다.";
$GLOBALS['strIgnoreErrors']                 = "Ignore errors";
$GLOBALS['strRetryUpdate']                  = "Retry updating";
$GLOBALS['strTableNames']                   = "테�?�블 �?�름";
$GLOBALS['strTablesPrefix']                 = "테�?�블 접�?어";
$GLOBALS['strTablesType']                   = "테�?�블 종류";


$GLOBALS['strRecoveryRequiredTitle']    = "Your previous upgrade attempt encountered an error";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "The UPGRADE file is still present inside of your 'var' folder. We are unable to remove this file because of insufficient permissions. Please delete this file yourself.";
$GLOBALS['strRemoveUpgradeFile']               = "You must remove the UPGRADE file from the 'var' folder.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Your system has been successfully upgraded.  The remaining screens will help you update the configuration of your new ad server.";
$GLOBALS['strErrorOccured']                 = "다�?� 오류가 발�?했습니다:";
$GLOBALS['strErrorInstallDatabase']         = "�?��?�터베�?�스 구조가 �?성�?�지 않았습니다.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "�?��?�터베�?�스와 연결할 수 없습니다.";

$GLOBALS['strErrorWritePermissions']        = "File permission errors have been detected, and must be fixed before you can continue.<br />To fix the errors on a Linux system, try typing in the following command(s):";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "File permission errors have been detected, and must be fixed before you can continue.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "Admin Interface URL";
$GLOBALS['strDeliveryUrlPrefix']            = "전달유지 엔진";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "전달유지 엔진";
$GLOBALS['strImagesUrlPrefix']              = "Image Store URL";
$GLOBALS['strImagesUrlPrefixSSL']           = "Image Store URL (SSL)";

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
$GLOBALS['strUnableToWriteConfig']                   = "Unable to write changes to the config file";
$GLOBALS['strUnableToWritePrefs']                    = "Unable to commit preferences to the database";
$GLOBALS['strImageDirLockedDetected']	             = "The supplied <b>Images Folder</b> is not writeable by the server. <br>You can't proceed until you either change permissions of the folder or create the folder.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Configuration checklist";
$GLOBALS['strConfigurationSettings']                 = "Configuration settings";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "관리�? 설정";
$GLOBALS['strAdministratorAccount']                  = "The System Administrator Account";
$GLOBALS['strLoginCredentials']                      = "로그�?� 정보";
$GLOBALS['strAdminUsername']                         = "관리�? ID";
$GLOBALS['strAdminPassword']                         = "Administrator  Password";
$GLOBALS['strInvalidUsername']                       = "잘못�?� ID";
$GLOBALS['strBasicInformation']                      = "기본 정보";
$GLOBALS['strAdminFullName']                         = "관리�? 전체 �?�름";
$GLOBALS['strAdminEmail']                            = "관리�? �?�메�?�";
$GLOBALS['strAdministratorEmail']                    = "Administrator email Address";
$GLOBALS['strCompanyName']                           = "회사 �?�름";
$GLOBALS['strAdminCheckUpdates']                     = "업�?��?�트 검색";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "로긴마다";
$GLOBALS['strAdminCheckDaily']                       = "�?��?�";
$GLOBALS['strAdminCheckWeekly']                      = "주간";
$GLOBALS['strAdminCheckMonthly']                     = "월간";
$GLOBALS['strAdminCheckNever']                       = "안함";
$GLOBALS['strNovice']                                = "Delete actions require confirmation for safety";
$GLOBALS['strUserlogEmail']                          = "모든 외부 발송 �?�메�?� 메시지를 기�?합니다.";
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Please enable <a href='account-settings-update.php'>check for updates</a> to use the dashboard.";
$GLOBALS['strTimezone']                              = "Timezone";
$GLOBALS['strTimezoneEstimated']                     = "Estimated Timezone";
$GLOBALS['strTimezoneGuessedValue']                  = "Server timezone not correctly set in PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Please see the %DOCS% about setting this variable for PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "documentation";
$GLOBALS['strAdminSettingsTitle']                    = "Create a system administrator account";
$GLOBALS['strAdminSettingsIntro']                    = "Please complete this form to create your ad server administration account.";
$GLOBALS['strConfigSettingsIntro']                   = "Please check the configuration settings below and make any required changes before proceeding. If unsure, leave the default values.";

$GLOBALS['strEnableAutoMaintenance']	             = "Automatically perform maintenance during delivery if scheduled maintenance is not set up";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "�?��?�터베�?�스 설정";
$GLOBALS['strDatabaseServer']                        = "�?��?�터베�?�스 서버";
$GLOBALS['strDbLocal']                               = "Use local socket connection";
$GLOBALS['strDbType']                                = "�?��?�터베�?�스 �?�름";
$GLOBALS['strDbHost']                                = "�?��?�터베�?�스 호스트명";
$GLOBALS['strDbSocket']                              = "Database Socket";
$GLOBALS['strDbPort']                                = "Database Port Number";
$GLOBALS['strDbUser']                                = "�?��?�터베�?�스 사용�?�?�름";
$GLOBALS['strDbPassword']                            = "�?��?�터베�?�스 비밀번호";
$GLOBALS['strDbName']                                = "�?��?�터베�?�스 �?�름";
$GLOBALS['strDbNameHint']                            = "Database will be created if it does not exist";
$GLOBALS['strDatabaseOptimalisations']               = "�?��?�터베�?�스 최�?화";
$GLOBALS['strPersistentConnections']                 = "연결 유지(persistent connection) 사용";
$GLOBALS['strCantConnectToDb']                       = "�?��?�터베�?�스�? 연결할 수 없습니다.";
$GLOBALS['strCantConnectToDbDelivery']               = 'Can\'t Connect to Database for Delivery';
$GLOBALS['strDemoDataInstall']                       = "Install Demo Data";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "설정";
$GLOBALS['strEmailAddresses']                        = "Email 'From' Address";
$GLOBALS['strEmailFromName']                         = "Email 'From' Name";
$GLOBALS['strEmailFromAddress']                      = "Email 'From' Email Address";
$GLOBALS['strEmailFromCompany']                      = "Email 'From' Company";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "qmail 패치를 사용합니다.(qmail�?� 사용하는 경우)";
$GLOBALS['strEnableQmailPatch']                      = "qmail 패치를 사용합니다.(qmail�?� 사용하는 경우)";
$GLOBALS['strEmailHeader']                           = "Email headers";
$GLOBALS['strEmailLog']                              = "Email log";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Audit Trail Settings";
$GLOBALS['strEnableAudit']                           = "Enable Audit Trail";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Debug Logging Settings";
$GLOBALS['strProduction']                            = "Production server";
$GLOBALS['strEnableDebug']                           = "Enable Debug Logging";
$GLOBALS['strDebugMethodNames']                      = "Include method names in debug log";
$GLOBALS['strDebugLineNumbers']                      = "Include line numbers in debug log";
$GLOBALS['strDebugType']                             = "Debug Log Type";
$GLOBALS['strDebugTypeFile']                         = "File";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "SQL Database";
$GLOBALS['strDebugTypeSyslog']                       = "Syslog";
$GLOBALS['strDebugName']                             = "Debug Log Name, Calendar, SQL Table,<br />or Syslog Facility";
$GLOBALS['strDebugPriority']                         = "Debug Priority Level";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Most Information";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Default Information";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Least Information";
$GLOBALS['strDebugIdent']                            = "Debug Identification String";
$GLOBALS['strDebugUsername']                         = "mCal, SQL Server Username";
$GLOBALS['strDebugPassword']                         = "mCal, SQL Server Password";
$GLOBALS['strProductionSystem']                      = "Production System";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "전달 유지 설정";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Web path";
$GLOBALS['strDeliveryPath']                          = "전달유지 �?시";
$GLOBALS['strImagePath']                             = "Images path";
$GLOBALS['strDeliverySslPath']                       = "전달유지 �?시";
$GLOBALS['strImageSslPath']                          = "Images SSL path";
$GLOBALS['strImageStore']                            = "Images folder";
$GLOBALS['strTypeWebSettings']                       = "로컬 배너(웹서버) 설정";
$GLOBALS['strTypeWebMode']                           = "저장 방법";
$GLOBALS['strTypeWebModeLocal']                      = "로컬 디렉터리";
$GLOBALS['strTypeDirError']                          = "The local directory cannot be written to by the web server";
$GLOBALS['strTypeWebModeFtp']                        = "외부 FTP 서버";
$GLOBALS['strTypeWebDir']                            = "로컬 디렉터리";
$GLOBALS['strTypeFTPHost']                           = "FTP 호스트";
$GLOBALS['strTypeFTPDirectory']                      = "호스트 디렉터리";
$GLOBALS['strTypeFTPUsername']                       = "로그�?�ID";
$GLOBALS['strTypeFTPPassword']                       = "비밀번호";
$GLOBALS['strTypeFTPPassive']                        = "Use passive FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "The FTP Host Directory does not exist";
$GLOBALS['strTypeFTPErrorConnect']                   = "Could not connect to the FTP Server, the Login or Password is not correct";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Your installation of PHP does not support FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "Could not upload file to the FTP Server, check set proper rights to Host Directory";
$GLOBALS['strTypeFTPErrorHost']                      = "The FTP Host is not correct";
$GLOBALS['strDeliveryFilenames']                     = "Delivery File Names";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Ad Click";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Ad Conversion Variables";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Ad Content";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Ad Conversion";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Ad Conversion (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Ad Frame";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Ad Image";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Ad (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Ad Layer";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Ad Log";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Ad Popup";
$GLOBALS['strDeliveryFilenamesAdView']               = "Ad View";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPC Invocation";
$GLOBALS['strDeliveryFilenamesLocal']                = "Local Invocation";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Front Controller";
$GLOBALS['strDeliveryFilenamesFlash']                = "Flash Include (Can be a full URL)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Banner Delivery Cache Settings";
$GLOBALS['strDeliveryCacheLimit']                    = "Time Between Banner Cache Updates (seconds)";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "Use remote origin server";
$GLOBALS['strOriginType']                            = "Origin server type";
$GLOBALS['strOriginHost']                            = "Hostname for origin server";
$GLOBALS['strOriginPort']                            = "Port number for origin database";
$GLOBALS['strOriginScript']                          = "Script file for origin database";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Origin timeout (seconds)";
$GLOBALS['strOriginProtocol']                        = "Origin server protocol";

$GLOBALS['strDeliveryAcls']                          = "Evaluate banner delivery limitations during delivery";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "Obfuscate channel when delivering ads";
$GLOBALS['strDeliveryExecPhp']                       = "Allow PHP code in ads to be executed<br />(Warning: Security risk)";
$GLOBALS['strDeliveryCtDelimiter']                   = "3rd Party Click Tracking Delimiter";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Global default Banner Image URL";
$GLOBALS['strP3PSettings']                           = "P3P 개�?� 보호 정책";
$GLOBALS['strUseP3P']                                = "P3P 정책 사용";
$GLOBALS['strP3PCompactPolicy']                      = "P3P Compact 정책";
$GLOBALS['strP3PPolicyLocation']                     = "P3P 정책 위치";

// General Settings
$GLOBALS['generalSettings']                          = "Global General System Settings";
$GLOBALS['uiEnabled']                                = "User Interface Enabled";
$GLOBALS['defaultLanguage']                          = "Default System Language<br />(Each user can select their own language)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "지역 정보 중심(Geotargeting)";
$GLOBALS['strGeotargeting']                          = "지역 정보 중심(Geotargeting)";
$GLOBALS['strGeotargetingType']                      = "Geotargeting Module Type";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Use the bundled MaxMind GeoLiteCountry database";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP Country Database Location";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP Region Database Location";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP City Database Location";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP Area Database Location";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP DMA Database Location";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP Organisation Database Location";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP Database Location";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP Netspeed Database Location";
$GLOBALS['strGeoShowUnavailable']                    = "Show geotargeting delivery limitations even if GeoIP data unavailable";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "The MaxMind GeoIP Country Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "The MaxMind GeoIP Region Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "The MaxMind GeoIP City Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "The MaxMind GeoIP Area Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "The MaxMind GeoIP DMA Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "The MaxMind GeoIP Organisation Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "The MaxMind GeoIP ISP Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "The MaxMind GeoIP Netspeed Database does not exist in the location specified";

// Interface Settings
$GLOBALS['strInventory']                             = "목�?";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "<i>캠페�?� 목�?</i> 페�?�지�? 캠페�?� 정보를 �?세히 보여�?니다.";
$GLOBALS['strShowBannerInfo']                        = "<i>배너 목�?</i> 페�?�지�? 배너 정보를 �?세히 보여�?니다.";
$GLOBALS['strShowCampaignPreview']                   = "<i>배너 목�?</i> 페�?�지�? 배너�?� 미리보기를 모�? 표시합니다.";
$GLOBALS['strShowBannerHTML']                        = "HTML 코드 대신�? 실제 배너를 표시합니다.";
$GLOBALS['strShowBannerPreview']                     = "배너 처리 화면�?서 페�?�지 �?단�? 배너 미리보기를 표시합니다.";
$GLOBALS['strHideInactive']                          = "사용하지 않는 항목�?� 모든 목�? 페�?�지�?서 숨�?니다.";
$GLOBALS['strGUIShowMatchingBanners']                = "<i>연결�?� 배너</i> 페�?�지�? 해당 배너를 표시합니다.";
$GLOBALS['strGUIShowParentCampaigns']                = "<i>연결�?� 배너</i> 페�?�지�? 해당하는 �?위 �?페�?��?� 표시합니다.";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Default Campaigns to Anonymous";
$GLOBALS['strStatisticsDefaults']                    = "통계";
$GLOBALS['strBeginOfWeek']                           = "한 주�?� 시작�?�";
$GLOBALS['strPercentageDecimals']                    = "백분율 소수�?";
$GLOBALS['strWeightDefaults']                        = "가중치 기본설정";
$GLOBALS['strDefaultBannerWeight']                   = "배너 가중치 기본값";
$GLOBALS['strDefaultCampaignWeight']                 = "캠페�?� 가중치 기본값";
$GLOBALS['strDefaultBannerWErr']                     = "배너 가중치�?� 기본값�?� 정수를 입력해야합니다.";
$GLOBALS['strDefaultCampaignWErr']                   = "캠페�?� 가중치�?� 기본값�?� 정수를 입력해야합니다.";
$GLOBALS['strConfirmationUI']                        = "Confirmation in User Interface";

$GLOBALS['strPublisherDefaults']                     = "Website defaults";
$GLOBALS['strModesOfPayment']                        = "Modes of payment";
$GLOBALS['strCurrencies']                            = "Currencies";
$GLOBALS['strCategories']                            = "Categories";
$GLOBALS['strHelpFiles']                             = "Help files";
$GLOBALS['strHasTaxID']                              = "Tax ID";
$GLOBALS['strDefaultApproved']                       = "Approved check box";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Choose Advertiser";
$GLOBALS['strChooseCampaign']                        = "Choose Campaign";
$GLOBALS['strChooseCampaignBanner']                  = "Choose Banner";
$GLOBALS['strChooseTracker']                         = "Choose Tracker";
$GLOBALS['strDefaultConversionStatus']               = "Default Conversion Status";
$GLOBALS['strDefaultConversionType']                 = "Default Conversion Type";
$GLOBALS['strCSVTemplateSettings']                   = "CSV Template Settings";
$GLOBALS['strIncludeCountryInfo']                    = "Include Country Info";
$GLOBALS['strIncludeBrowserInfo']                    = "Include Browser Info";
$GLOBALS['strIncludeOSInfo']                         = "Include OS Info";
$GLOBALS['strIncludeSampleRow']                      = "Include Sample Row";
$GLOBALS['strCSVTemplateAdvanced']                   = "Advanced Template";
$GLOBALS['strCSVTemplateIncVariables']               = "Include Tracker Variables";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "허용�?� 배너 호출 종류";
$GLOBALS['strInvocationDefaults']                    = "Invocation Defaults";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Enable 3rd Party Clicktracking by Default";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner Delivery Settings";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Banner Logging Settings";
$GLOBALS['strLogAdRequests']                         = "Log a request every time a banner is requested";
$GLOBALS['strLogAdImpressions']                      = "Log an impression every time a banner is viewed";
$GLOBALS['strLogAdClicks']                           = "Log a click every time a viewer clicks on a banner";
$GLOBALS['strLogTrackerImpressions']                 = "Log a tracker impression every time a tracker beacon is viewed";
$GLOBALS['strReverseLookup']                         = "DNS 역참조";
$GLOBALS['strProxyLookup']                           = "프�?시 참조";
$GLOBALS['strPreventLogging']                        = "Block Banner Logging Settings";
$GLOBALS['strIgnoreHosts']                           = "무시할 호스트";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Don't</b> log statistics from clients with any of the following strings in their user-agent (one-per-line)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Only</b> log statistics from clients with any of the following strings in their user-agent (one-per-line)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Banner Storage Settings";

// Campaign ECPM settings
$GLOBALS['strEnableECPM']                            = "Use eCPM optimized priorities instead of remnant-weighted priorities";
$GLOBALS['strEnableContractECPM']                    = "Use eCPM optimized priorities instead of standard contract priorities";
$GLOBALS['strEnableECPMfromRemnant']                 = "(If you enable this feature all your remnant campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strEnableECPMfromECPM']                    = "(If you disable this feature some of your active eCPM campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strInactivatedCampaigns']                  = "List of campaigns which became inactive due to the changes in preferences:";

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Maintenance Settings";
$GLOBALS['strConversionTracking']                    = "Conversion Tracking Settings";
$GLOBALS['strEnableConversionTracking']              = "Enable Conversion Tracking";
$GLOBALS['strCsvImport']                             = "Allow upload of offline conversions";
$GLOBALS['strBlockAdViews']                          = "Don't count Ad Impressions if the viewer has seen the same ad/zone pair within the specified time (seconds)";
$GLOBALS['strBlockAdViewsError']                     = "Ad Impression block value must be a non-negative integer";
$GLOBALS['strBlockAdClicks']                         = "Don't count Ad Clicks if the viewer has clicked on the same ad/zone pair within the specified time (seconds)";
$GLOBALS['strBlockAdClicksError']                    = "Ad Click block value must be a non-negative integer";
$GLOBALS['strMaintenanceOI']                         = "Maintenance Operation Interval (minutes)";
$GLOBALS['strMaintenanceOIError']                    = "The Maintenace Operation Interval is not valid - see documentation for valid values";
$GLOBALS['strPrioritySettings']                      = "Priority Settings";
$GLOBALS['strPriorityInstantUpdate']                 = "Update advertisement priorities immediately when changes made in the UI";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Default Ad Impression Connection Window (seconds)";
$GLOBALS['strDefaultImpConWindowError']              = "If set, the Default Ad Impression Connection Window must be a positive integer";
$GLOBALS['strDefaultCliConWindow']                   = "Default Ad Click Connection Window (seconds)";
$GLOBALS['strDefaultCliConWindowError']              = "If set, the Default Ad Click Connection Window must be a positive integer";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "경고횟수 제한(Warn Limit)";
$GLOBALS['strWarnLimitErr']                          = "경고횟수 제한(Warn Limit)�?� �?�수를 사용할 수 없습니다.";
$GLOBALS['strWarnLimitDays']                         = "Send a warning when the days left are less than specified here";
$GLOBALS['strWarnLimitDaysErr']                      = "Warn Limit Days should be a positive number";
$GLOBALS['strAllowEmail']                            = "Globally allow sending of emails";
$GLOBALS['strEmailAddressFrom']                      = "Email address to send reports FROM";
$GLOBALS['strEmailAddressName']                      = "Company or personal name to sign off email with";
$GLOBALS['strWarnAdmin']                             = "관리�?�?게 경고를 알립니다.";
$GLOBALS['strWarnClient']                            = "광고주�?게 경고를 알립니다.";
$GLOBALS['strWarnAgency']                            = "광고주�?게 경고를 알립니다.";

// UI Settings
$GLOBALS['strGuiSettings']                           = "사용�? �?�터페�?�스 설정";
$GLOBALS['strGeneralSettings']                       = "�?�반 설정";
$GLOBALS['strAppName']                               = "�?�용 프로그램 �?�름";
$GLOBALS['strMyHeader']                              = "내 머리글";
$GLOBALS['strMyHeaderError']                         = "The header file does not exist in the location you specified";
$GLOBALS['strMyFooter']                              = "내 바닥글";
$GLOBALS['strMyFooterError']                         = "The footer file does not exist in the location you specified";
$GLOBALS['strDefaultTrackerStatus']                  = "Default tracker status";
$GLOBALS['strDefaultTrackerType']                    = "Default tracker type";
$GLOBALS['strSSLSettings']                           = "SSL Settings";
$GLOBALS['requireSSL']                               = "Force SSL Access on User Interface";
$GLOBALS['sslPort']                                  = "SSL Port Used by Web Server";
$GLOBALS['strDashboardSettings']                     = "Dashboard Settings";

$GLOBALS['strMyLogo']                                = "Name/URL of custom logo file";
$GLOBALS['strMyLogoError']                           = "The logo file does not exist in the admin/images directory";
$GLOBALS['strGuiHeaderForegroundColor']              = "Color of the header foreground";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Color of the header background";
$GLOBALS['strGuiActiveTabColor']                     = "Color of the active tab";
$GLOBALS['strGuiHeaderTextColor']                    = "Color of the text in the header";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Please enter colors in an RGB format, like '0066CC'";

$GLOBALS['strGzipContentCompression']                = "컨�?트 GZIP 압축 사용";
$GLOBALS['strClientInterface']                       = "광고주 �?�터페�?�스";
$GLOBALS['strReportsInterface']                      = "Reports Interface";
$GLOBALS['strClientWelcomeEnabled']                  = "광고주 환�? 메시지를 사용합니다.";
$GLOBALS['strClientWelcomeText']                     = "환�? 메시지<br>(HTML 태그 가능)";

$GLOBALS['strPublisherInterface']                    = "Website interface";
$GLOBALS['strPublisherAgreementEnabled']             = "Enable login control for websites who haven't accepted Terms and Conditions";
$GLOBALS['strPublisherAgreementText']                = "Login text (HTML tags allowed)";

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

$GLOBALS['strExperimental']                 = "Experimental";
$GLOBALS['strKeywordRetrieval']             = "키워드 검색";
$GLOBALS['strBannerRetrieval']              = "배너 검색 방법";
$GLOBALS['strRetrieveRandom']               = "랜�?� 배너 검색(기본)";
$GLOBALS['strRetrieveNormalSeq']            = "배너 검색(�?�반)";
$GLOBALS['strWeightSeq']                    = "가중치로 배너 검색";
$GLOBALS['strFullSeq']                      = "전체 배너 검색";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "�?접 선�?�?� 사용할 때 논리 연산�?를 허용합니다.";
$GLOBALS['strUseMultipleKeys']              = "�?접 선�?�?� 사용할 때 다수�?� 키워드를 허용합니다.";

$GLOBALS['strTableBorderColor']             = "테�?�블 테�?리 색�?";
$GLOBALS['strTableBackColor']               = "테�?�블 배경 색�?";
$GLOBALS['strTableBackColorAlt']            = "테�?�블 배경 색�?(Alternative)";
$GLOBALS['strMainBackColor']                = "주 배경 색�?";
$GLOBALS['strOverrideGD']                   = "GD �?�미지 �?�맷�?� 무시합니다.";
$GLOBALS['strTimeZone']                     = "시간 �?역";

?>
