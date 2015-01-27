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
$GLOBALS['strInstall']                      = "Instalace";
$GLOBALS['strChooseInstallLanguage']        = "Vyberte si jazyk pro instalcni proceduru";
$GLOBALS['strLanguageSelection']            = "Vyber jazyka";
$GLOBALS['strDatabaseSettings']             = "Nastavení databáze";
$GLOBALS['strAdminSettings']                = "Nastavení administrátora";
$GLOBALS['strAdvancedSettings']             = "Rozsirena nastaveni databaze";
$GLOBALS['strOtherSettings']                = "Ostatni nastaveni";
$GLOBALS['strWarning']                      = "Upozornění";
$GLOBALS['strFatalError']                   = "Nastala fatalni chyba";
$GLOBALS['strUpdateError']                  = "Nastala chyba pri aktualizaci";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Ignorovat upozorneni";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strIgnoreErrors']                 = "Ignorovat chyby";
$GLOBALS['strRetryUpdate']                  = "Zopakovat aktualizaci";
$GLOBALS['strTableNames']                   = "Nazvy tabulek";
$GLOBALS['strTablesPrefix']                 = "Prefix nazvu tabulek";
$GLOBALS['strTablesType']                   = "Typ tabulky";


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
$GLOBALS['strErrorOccured']                 = "Nastala tato chyba:";
$GLOBALS['strErrorInstallDatabase']         = "Databázová struktura nemohla být vytvořena.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'Databáze současné instalace nemohla být aktualizována';
$GLOBALS['strErrorInstallDbConnect']        = "Nepodařilo se připojit k databázi.";


$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strDeliveryUrlPrefix']            = "Doručovací engine";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Doručovací engine";

$GLOBALS['strInvalidUserPwd']               = "Špatné jméno nebo heslo";

$GLOBALS['strUpgrade']                      = "Aktualizace";
$GLOBALS['strSystemUpToDate']               = "Your system is already up to date, no upgrade is needed at the moment. <br>Click on <b>Proceed</b> to go to home page.";
$GLOBALS['strSystemNeedsUpgrade']           = "The database structure and configuration file need to be upgraded in order to function correctly. Click <b>Proceed</b> to start the upgrade process. <br><br>Depending on which version you are upgrading from and how many statistics are already stored in the database, this process can cause high load on your database server. Please be patient, the upgrade can take up to a couple of minutes.";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Vyberte sekci";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

// Configuration Settings

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Nastavení administrátora";
$GLOBALS['strLoginCredentials']                      = "Přihlašovací údaje";
$GLOBALS['strAdminUsername']                         = "Jméno Admina";
$GLOBALS['strInvalidUsername']                       = "Špatné Jméno";
$GLOBALS['strBasicInformation']                      = "Základní údaje";
$GLOBALS['strAdminFullName']                         = "Celé jméno";
$GLOBALS['strAdminEmail']                            = "Emailová adresa";
$GLOBALS['strCompanyName']                           = "Název firmy";
$GLOBALS['strAdminCheckUpdates']                     = "Kontrolovat aktualizace";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Při přihlášení";
$GLOBALS['strAdminCheckDaily']                       = "Denně";
$GLOBALS['strAdminCheckWeekly']                      = "Týdenně";
$GLOBALS['strAdminCheckMonthly']                     = "Měsíčně";
$GLOBALS['strAdminCheckNever']                       = "Nikdy";
$GLOBALS['strUserlogEmail']                          = "Logovat veškerou odchozí poštu";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Nastavení databáze";
$GLOBALS['strDatabaseServer']                        = "Databázový server";
$GLOBALS['strDbLocal']                               = "Připojit k lokálnímu serveru pomocí soketů";
$GLOBALS['strDbType']                                = "Jméno databáze";
$GLOBALS['strDbHost']                                = "Hostname databáze";
$GLOBALS['strDbPort']                                = "Port databáze";
$GLOBALS['strDbUser']                                = "Uživatel databáze";
$GLOBALS['strDbPassword']                            = "Heslo databáze";
$GLOBALS['strDbName']                                = "Jméno databáze";
$GLOBALS['strDatabaseOptimalisations']               = "Optimalizace databáze";
$GLOBALS['strPersistentConnections']                 = "Použít trvalé připojení";
$GLOBALS['strCantConnectToDb']                       = "Nemohu se připojit k databázi";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Základní nastavení";
$GLOBALS['strQmailPatch']                            = "Zapnout qmail patch";
$GLOBALS['strEnableQmailPatch']                      = "Zapnout qmail patch";

// Audit Trail Settings

// Debug Logging Settings
$GLOBALS['strDebugTypeFile']                         = "Soubory";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Nastavení doručování";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strDeliveryPath']                          = "Cache doručování";
$GLOBALS['strDeliverySslPath']                       = "Cache doručování";
$GLOBALS['strTypeWebSettings']                       = "Nastavení lokálních bannerů (Webserver)";
$GLOBALS['strTypeWebMode']                           = "Typ ukládání";
$GLOBALS['strTypeWebModeLocal']                      = "Lokální adresář";
$GLOBALS['strTypeDirError']                          = "Lokální adresář neexistuje";
$GLOBALS['strTypeWebModeFtp']                        = "Externí FTP server";
$GLOBALS['strTypeWebDir']                            = "Lokální adresář";
$GLOBALS['strTypeFTPHost']                           = "Server FTP";
$GLOBALS['strTypeFTPDirectory']                      = "Adresář serveru";
$GLOBALS['strTypeFTPUsername']                       = "Přihlásit";
$GLOBALS['strTypeFTPPassword']                       = "Heslo";
$GLOBALS['strTypeFTPErrorDir']                       = "Adresář serveru neexistuje";
$GLOBALS['strTypeFTPErrorConnect']                   = "Nemohu se přihlásit k FTP serveru. Uživatelské jméno a heslo nejsou správné";
$GLOBALS['strTypeFTPErrorHost']                      = "Jméno FTP server není správné";



$GLOBALS['strP3PSettings']                           = "Pravidla soukromí P3P";
$GLOBALS['strUseP3P']                                = "Použít P3P pravidla";
$GLOBALS['strP3PCompactPolicy']                      = "Kompaktní P3P pravidlo";
$GLOBALS['strP3PPolicyLocation']                     = "Umístění P3P pravidla";

// General Settings

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geocílení";
$GLOBALS['strGeotargeting']                          = "Geocílení";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventář";
$GLOBALS['strShowCampaignInfo']                      = "Zobrazit extra informace o kampani na stránce <i>Přehled kampaně</i>";
$GLOBALS['strShowBannerInfo']                        = "Zobrazit extra informace o banneru na stránce <i>Přehled banneru</i>";
$GLOBALS['strShowCampaignPreview']                   = "Zobrazit náhled všech bannerů na stránce <i>Přehled banneru</i>";
$GLOBALS['strShowBannerHTML']                        = "Zobrazit banner místo HTML kódu pro náhled HTML banneru";
$GLOBALS['strShowBannerPreview']                     = "Zobrazit náhled banneru na konci stránek které pracují s bannery";
$GLOBALS['strHideInactive']                          = "Skrýt neaktivní položky ze všech přehledových stránek";
$GLOBALS['strGUIShowMatchingBanners']                = "Zobrazit odpovídající bannery na stránce <i>Připojený banner</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Zobrazit nadřazenou kampaň na stránce <i>Připojený banner</i>";
$GLOBALS['strStatisticsDefaults']                    = "Statistiky";
$GLOBALS['strBeginOfWeek']                           = "Počátek týdne";
$GLOBALS['strPercentageDecimals']                    = "Desetinná místa procent";
$GLOBALS['strWeightDefaults']                        = "Implicitní váha";
$GLOBALS['strDefaultBannerWeight']                   = "Implicitní váha banneru";
$GLOBALS['strDefaultCampaignWeight']                 = "Implicitní váha kampaně";
$GLOBALS['strDefaultBannerWErr']                     = "Implicitní váha banneru by měla být kladné číslo";
$GLOBALS['strDefaultCampaignWErr']                   = "Implicitní váha kampaně by měla být kladné číslo";


// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "Implicitní pravidla prodeje";
$GLOBALS['strDefaultConversionType']                 = "Implicitní pravidla prodeje";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Povolené typy volání";

// Banner Delivery Settings

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Zamezit logování";
$GLOBALS['strReverseLookup']                         = "Pokus se určit název hostitele návštěníka pokud není poskytnuto serverem";
$GLOBALS['strProxyLookup']                           = "Pokus se určit pravou IP adresu navštěvníka, který používá proxy server";
$GLOBALS['strPreventLogging']                        = "Zamezit logování";
$GLOBALS['strIgnoreHosts']                           = "Neukládát statistiky pro návštěvníky užívající jednu z následujících IP adres nebo názvů hostitelů";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Poslat upozornění když počet zbývajících impresí je nižší než zde uvedený";
$GLOBALS['strWarnLimitErr']                          = "Limit pro upozornění by mělo být kladné číslo";
$GLOBALS['strWarnAdmin']                             = "Poslat upozornění správci kdykoliv je kampaň téměř vyčerpána";
$GLOBALS['strWarnClient']                            = "Poslat upozornění inzerentovi kdykoliv je kampaň téměř vyčerpána";
$GLOBALS['strWarnAgency']                            = "Poslat upozornění partnerovi kdykoliv je kampaň téměř vyčerpána";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Nastavení uživatelského rozhraní";
$GLOBALS['strGeneralSettings']                       = "Základní nastavení";
$GLOBALS['strAppName']                               = "Název aplikace";
$GLOBALS['strMyHeader']                              = "Umístění souboru hlavičky";
$GLOBALS['strMyHeaderError']                         = "Soubor hlavičky neexistuje v místě které jste zadal";
$GLOBALS['strMyFooter']                              = "Umístění souboru patičky";
$GLOBALS['strMyFooterError']                         = "Soubor patičky neexistuje v místě které jste zadal";


$GLOBALS['strGzipContentCompression']                = "Použít kompresi obsahu GZIPem";
$GLOBALS['strClientInterface']                       = "Rozhraní inzerenta";
$GLOBALS['strClientWelcomeEnabled']                  = "Zapnout uvítací text inzerenta";
$GLOBALS['strClientWelcomeText']                     = "Uvítací text<br>(HTML tagy jsou povoleny)";


// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "Experimentální";
$GLOBALS['strKeywordRetrieval']             = "Načítání klíčových slov";
$GLOBALS['strBannerRetrieval']              = "Způsob načítání bannerů";
$GLOBALS['strRetrieveRandom']               = "Náhodné načítání bannerů (standardní)";
$GLOBALS['strRetrieveNormalSeq']            = "Normální sekvenční načítání bannerů";
$GLOBALS['strWeightSeq']                    = "Vážené sekvenční načítání bannerů";
$GLOBALS['strFullSeq']                      = "Plně sekvenční načítání bannerů";
$GLOBALS['strUseKeywords']                  = "Použít klíčová slova k volbě bannerů";
$GLOBALS['strUseConditionalKeys']           = "Povolit logické operatory při použití přímé volby";
$GLOBALS['strUseMultipleKeys']              = "Povolit vícero klíčových slov při použití přímé volby";

$GLOBALS['strTableBorderColor']             = "Barva okraje tabulky";
$GLOBALS['strTableBackColor']               = "Barva pozadí tabulky";
$GLOBALS['strTableBackColorAlt']            = "Barva pozadí tabulky (alternativní)";
$GLOBALS['strMainBackColor']                = "Základní barva pozadí";
$GLOBALS['strOverrideGD']                   = "Anulovat formát obrázku GD";
$GLOBALS['strTimeZone']                     = "Časové pásmo";

?>
