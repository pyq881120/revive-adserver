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
$GLOBALS['strDatabaseSettings']             = "数据库";
$GLOBALS['strAdminAccount']                 = "Administrator Account";
$GLOBALS['strUpdateError']                  = "An error occured while updating";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";


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
$GLOBALS['strErrorOccured']                 = "The following error occured:";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";


$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";




/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

// Configuration Settings

// Administrator Settings
$GLOBALS['strAdministratorAccount']                  = "The Administrator Account";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strNovice']                                = "执行删除操作之前需要确认";
$GLOBALS['strEnableDashboard']                       = "启用首页仪表盘";
$GLOBALS['strTimezone']                              = "时区";
$GLOBALS['strAdminSettingsTitle']                    = "Create an administrator account";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "数据库";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Email 功能";

// Audit Trail Settings

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "调试日志";

// Delivery Settings
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strDeliveryCaching']                       = "素材缓存";
$GLOBALS['strDeliveryCacheLimit']                    = "更新间隔（秒）";
$GLOBALS['strDeliveryCacheStore']                    = "存储类型";



$GLOBALS['strDeliveryAcls']                          = "在投放时检查投放控制选项";

// General Settings

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "地理信息库";

// Interface Settings
$GLOBALS['strInventory']                             = "管理界面";
$GLOBALS['strShowCampaignInfo']                      = "在<i>项目列表</i>页面显示更多信息";
$GLOBALS['strShowBannerInfo']                        = "在<i>素材列表</i>页面显示更多信息";
$GLOBALS['strShowCampaignPreview']                   = "在<i>素材列表</i>页面显示所有素材的预览";
$GLOBALS['strShowBannerHTML']                        = "预览 HTML 素材时显示实际内容（而不是 HTML 代码）";
$GLOBALS['strShowBannerPreview']                     = "在所有操作素材的页面顶部显示素材预览";
$GLOBALS['strHideInactive']                          = "在所有列表页面隐藏无效的行";
$GLOBALS['strGUIShowMatchingBanners']                = "在<i>素材关联<i>页面显示可匹配的素材";
$GLOBALS['strGUIShowParentCampaigns']                = "在<i>素材关联<i>页面显示素材所属的项目";
$GLOBALS['strShowEntityId']                          = "显示 ID";
$GLOBALS['strStatisticsDefaults']                    = "报表";
$GLOBALS['strBeginOfWeek']                           = "每周的第一天";
$GLOBALS['strPercentageDecimals']                    = "精确到小数点后...位";
$GLOBALS['strWeightDefaults']                        = "默认权重";
$GLOBALS['strDefaultBannerWeight']                   = "素材";
$GLOBALS['strDefaultCampaignWeight']                 = "项目";
$GLOBALS['strConfirmationUI']                        = "操作确认";


// CSV Import Settings

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "素材投放";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "素材投放日志";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "素材存储";

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "维护任务";
$GLOBALS['strConversionTracking']                    = "数据追踪";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "如果剩余投放量低于";
$GLOBALS['strWarnLimitErr']                          = "投放量必须是正整数";
$GLOBALS['strWarnLimitDays']                         = "如果剩余天数少于";
$GLOBALS['strWarnLimitDaysErr']                      = "天数必须是正整数";
$GLOBALS['strAllowEmail']                            = "全局启用 Email 发送功能";
$GLOBALS['strEmailAddressFrom']                      = "发件人地址";
$GLOBALS['strEmailAddressName']                      = "发件人名称";
$GLOBALS['strWarnAdmin']                             = "项目即将过期时发送通知";
$GLOBALS['strWarnClient']                            = "项目即将过期时发送通知";
$GLOBALS['strWarnAgency']                            = "项目即将过期时发送通知";

// UI Settings
$GLOBALS['strGuiSettings']                           = "用户界面";
$GLOBALS['strGeneralSettings']                       = "基本";
$GLOBALS['strAppName']                               = "系统名称";
$GLOBALS['strMyHeader']                              = "页眉文件";
$GLOBALS['strMyHeaderError']                         = "在指定的路径找不到页眉文件";
$GLOBALS['strMyFooter']                              = "页脚文件";
$GLOBALS['strMyFooterError']                         = "在指定的路径找不到页脚文件";
$GLOBALS['strSSLSettings']                           = "HTTPS";
$GLOBALS['requireSSL']                               = "强制使用 HTTPS 登录用户界面";
$GLOBALS['sslPort']                                  = "HTTPS 端口";
$GLOBALS['strDashboardSettings']                     = "首页仪表盘";

$GLOBALS['strMyLogo']                                = "Logo 文件名或 URL";
$GLOBALS['strMyLogoError']                           = "在 admin/images 目录中找不到指定的 Logo 文件";
$GLOBALS['strGuiHeaderForegroundColor']              = "页眉前景色";
$GLOBALS['strGuiHeaderBackgroundColor']              = "页眉背景色";
$GLOBALS['strGuiActiveTabColor']                     = "激活标签颜色";
$GLOBALS['strGuiHeaderTextColor']                    = "页眉文本颜色";
$GLOBALS['strColorError']                            = "请按 RGB 格式输入，例如“0066CC”";

$GLOBALS['strGzipContentCompression']                = "使用 GZIP 压缩";


// Regenerate Platfor Hash script

// Plugin Settings
$GLOBALS['strPluginSettings']                        = "插件";

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
