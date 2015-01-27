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
$GLOBALS['strInstall']                      = "Installatie";
$GLOBALS['strChooseInstallLanguage']        = "Kies een taal voor de installatie procedure";
$GLOBALS['strLanguageSelection']            = "Taal selectie";
$GLOBALS['strDatabaseSettings']             = "Database instellingen";
$GLOBALS['strAdminSettings']                = "Administrator instellingen";
$GLOBALS['strAdvancedSettings']             = "Geavanceerde instellingen";
$GLOBALS['strOtherSettings']                = "Andere instellingen";
$GLOBALS['strSpecifySyncSettings']          = "Synchronisatie instellingen";
$GLOBALS['strWarning']                      = "Waarschuwing";
$GLOBALS['strFatalError']                   = "Er is een fout opgetreden";
$GLOBALS['strUpdateError']                  = "Er is een fout opgetreden tijdens het bijwerken";
$GLOBALS['strBtnContinue']                  = "Ga verder »";
$GLOBALS['strBtnGoBack']                    = "« Ga terug";
$GLOBALS['strBtnAgree']                     = "Ik ga akkoord »";
$GLOBALS['strBtnDontAgree']                 = "« Ik ga niet akkoord";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Er kon geen connectie opgebouwd worden met de database, controleer a.u.b. de door u opgegeven instellingen";
$GLOBALS['strCreateTableTestFailed']        = "De gebruiker die u heeft opgegeven heeft geen toestemming om de database aan te maken of te wijzigen, neem a.u.b. contact op met de beheerder van de database.";
$GLOBALS['strUpdateTableTestFailed']        = "De gebruiker die u heeft opgegeven heeft geen toestemming om de database structuur te wijzigen, neem a.u.b. contact op met de beheerder van de database.";
$GLOBALS['strTablePrefixInvalid']           = "De tabelnaam voorvoegsel bevat illegale tekens";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Voor dat uw verder gaat, corrigeer a.u.b. de volgende problemen:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Negeer waarschuwingen";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "De PHP instelling register_globals moet aan staan.";
$GLOBALS['strWarningMagicQuotesGPC']        = "De PHP instelling magic_quotes_gpc moet aan staan.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "De PHP instelling magic_quotes_runtime moet uit staan.";
$GLOBALS['strWarningFileUploads']           = "De PHP instelling file_uploads moet aan staan.";
$GLOBALS['strWarningTrackVars']             = "De PHP instelling track_vars moet aan staan.";
$GLOBALS['strWarningPREG']                  = "De versie van PHP die u gebruikt heeft geen ondersteuning voor PERL compatible reguliere expressies. U dient de PREG extentie te installeren voordat u verder kunt gaan.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Het is momenteel nog niet mogelijk om de database bij te werken. Indien u beslist om door te gaan worden alle bestaande banners, statistieken and klanten verwijderd.";
$GLOBALS['strIgnoreErrors']                 = "Negeer foutmeldingen";
$GLOBALS['strRetryUpdate']                  = "Probeer opnieuw";
$GLOBALS['strTableNames']                   = "Tabelnamen";
$GLOBALS['strTablesPrefix']                 = "Tabelnaam voorvoegsel";
$GLOBALS['strTablesType']                   = "Tabeltype";


$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Waarschuwing: het UPGRADE bestand is nog steeds te vinden in jouw var map. We kunnen dit bestand niet verwijderen omwille van ontbrekende rechten. Gelieve dit bestand zelf te verwijderen. ";
$GLOBALS['strRemoveUpgradeFile']               = "Je moet het UPGRADE bestand verwijderen in de map var";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Uw systeem is met succes bijgewerkt. De volgende schermen zullen je helpen met het updaten van de configuratie van uw nieuwe advertentie server.";
$GLOBALS['strErrorOccured']                 = "De volgende fouten zijn opgetreden:";
$GLOBALS['strErrorInstallDatabase']         = "De database kon niet worden aangemaakt.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorInstallDbConnect']        = "Het was niet mogelijk om een connectie te openen met de database.";

$GLOBALS['strErrorWritePermissions']        = "Bestandsrechten errors zijn gedetecteerd, en moeten worden opgelost om te kunnen verdergaan.<br />Om de errors onder Linux op te lossen, probeer eens volgende commando(s) in te geven:";

$GLOBALS['strErrorWritePermissionsWin']     = "Bestandsrechten errors zijn gedetecteerd, en moeten worden opgelost om te kunnen verdergaan.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "Admin interface URL";
$GLOBALS['strDeliveryUrlPrefix']            = "Bezorger";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Bezorger";

$GLOBALS['strInvalidUserPwd']               = "Ongeldige gebruikersnaam of wachtwoord";

$GLOBALS['strSystemUpToDate']               = "Uw systeem is al bijgewerkt, het is momenteel niet nodig om verder bij te werken. <br />Klik op <b>Verder</b> om door te gaan.";
$GLOBALS['strSystemNeedsUpgrade']           = "Om goed te functioneren moeten de database structuur en het configuratie bestand worden bijgewerkt. Klik op <b>Verder</b> om te beginnen met bijwerken. <br /><br />Afhankelijk van welke versie u wilt bijwerken en de hoeveelheid bestaande statistieken kan deze functie een hoge belasting veroorzaken op de database server. Het bijwerken kan enige minuten duren.";
$GLOBALS['strSystemUpgradeBusy']            = "Uw systeem wordt momenteel bijgewerkt, een moment geduld a.u.b...";
$GLOBALS['strSystemRebuildingCache']        = "Uw bestaande gegevens worden bijgewerkt, een moment geduld a.u.b...";
$GLOBALS['strServiceUnavalable']            = "Deze service is momenteel niet beschikbaar. Het systeem wordt bijgewerkt.";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Kies sectie";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

// Configuration Settings

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Administrator instellingen";
$GLOBALS['strLoginCredentials']                      = "Inlog gegevens";
$GLOBALS['strAdminUsername']                         = "Gebruikersnaam van de beheerder";
$GLOBALS['strInvalidUsername']                       = "Ongeldige gebruikersnaam";
$GLOBALS['strBasicInformation']                      = "Basisinformatie";
$GLOBALS['strAdminFullName']                         = "Volledige naam van de beheerder";
$GLOBALS['strAdminEmail']                            = "E-mail adres van de beheerder";
$GLOBALS['strAdministratorEmail']                    = "E-mail adres administrator";
$GLOBALS['strCompanyName']                           = "Bedrijfsnaam";
$GLOBALS['strAdminCheckUpdates']                     = "Controleer op nieuwe versie";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Altijd";
$GLOBALS['strAdminCheckDaily']                       = "Dagelijks";
$GLOBALS['strAdminCheckWeekly']                      = "Wekelijks";
$GLOBALS['strAdminCheckMonthly']                     = "Maandelijks";
$GLOBALS['strAdminCheckNever']                       = "Nooit";
$GLOBALS['strUserlogEmail']                          = "Sla alle uitgaande e-mails op";
$GLOBALS['strTimezone']                              = "Tijdzone";
$GLOBALS['strTimezoneEstimated']                     = "Geschatte tijdzone";
$GLOBALS['strTimezoneGuessedValue']                  = "De tijdzone van de server is niet correct ingesteld in PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Gelieve de  %DOCS% na te kijken over de instellingen van deze variabele voor PHP in te stellen.";
$GLOBALS['strTimezoneDocumentation']                 = "documentatie";
$GLOBALS['strAdminSettingsTitle']                    = "Maak een administrator account";
$GLOBALS['strAdminSettingsIntro']                    = "Gelieve de velden te vervolledigen om jouw ad server administrator account aan te maken ";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Database instellingen";
$GLOBALS['strDatabaseServer']                        = "Database server";
$GLOBALS['strDbLocal']                               = "Gebruik een lokale server door middel van sockets";
$GLOBALS['strDbType']                                = "Database naam";
$GLOBALS['strDbHost']                                = "Database adres";
$GLOBALS['strDbPort']                                = "Database poort nummer";
$GLOBALS['strDbUser']                                = "Database gebruikersnaam";
$GLOBALS['strDbPassword']                            = "Database wachtwoord";
$GLOBALS['strDbName']                                = "Database naam";
$GLOBALS['strDatabaseOptimalisations']               = "Database optimalisaties";
$GLOBALS['strPersistentConnections']                 = "Gebruik 'persistent connections'";
$GLOBALS['strCantConnectToDb']                       = "Kan geen connectie maken met de database";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Hoofd instellingen";
$GLOBALS['strQmailPatch']                            = "Pas headers aan voor qmail";

// Audit Trail Settings

// Debug Logging Settings

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Leveringsinstellingen";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strDeliveryPath']                          = "Leveringscache";
$GLOBALS['strDeliverySslPath']                       = "Leveringscache";
$GLOBALS['strTypeWebSettings']                       = "Lokale banner (Webserver) instellingen";
$GLOBALS['strTypeWebMode']                           = "Opslag methode";
$GLOBALS['strTypeWebModeLocal']                      = "Lokale map";
$GLOBALS['strTypeDirError']                          = "De lokale map bestaat niet";
$GLOBALS['strTypeWebModeFtp']                        = "Externe FTP server)";
$GLOBALS['strTypeWebDir']                            = "Lokale map";
$GLOBALS['strTypeFTPHost']                           = "FTP server";
$GLOBALS['strTypeFTPDirectory']                      = "Server map";
$GLOBALS['strTypeFTPUsername']                       = "Aanmelden";
$GLOBALS['strTypeFTPPassword']                       = "Wachtwoord";
$GLOBALS['strTypeFTPErrorDir']                       = "De server map bestaat niet";
$GLOBALS['strTypeFTPErrorConnect']                   = "De verbinding met de FTP server kon niet worden opgebouwd, de gebruikersnaam of het wachtwoord zijn niet correct";
$GLOBALS['strTypeFTPErrorHost']                      = "De hostname van de FTP server is niet correct";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Ad Klik";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Ad content ";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Ad frame";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Ad afbeelding";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Ad (javascript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Ad layer";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Ad log";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Ad popup";
$GLOBALS['strDeliveryCaching']                       = "Banner afleveringsinstellingen";



$GLOBALS['strUseP3P']                                = "Gebruik P3P Policies";
$GLOBALS['strP3PCompactPolicy']                      = "P3P Compacte Policy";
$GLOBALS['strP3PPolicyLocation']                     = "P3P Policy Locatie";

// General Settings

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting";
$GLOBALS['strGeotargeting']                          = "Geotargeting";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP Land Database locatie";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP Regio Database Locatie";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP Stad Database Locatie";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP Gebied Database Locatie";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP ISP Database Locatie";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP Organisatie Database Locatie";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP Database Locatie";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP Stad Database Locatie";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventaris";
$GLOBALS['strShowCampaignInfo']                      = "Toon extra campagne informatie op de <i>Campagne</i> pagina";
$GLOBALS['strShowBannerInfo']                        = "Toon extra banner informatie op de <i>Banners</i> pagina";
$GLOBALS['strShowCampaignPreview']                   = "Toon voorvertooning van alle banners op de <i>Banners</i> pagina";
$GLOBALS['strShowBannerHTML']                        = "Toon werkelijke banner in plaats van HTML code voor de voorvertoning van HTML banners";
$GLOBALS['strShowBannerPreview']                     = "Toon voorvertoning bovenaan alle pagina's welke betrekking hebben op banners";
$GLOBALS['strHideInactive']                          = "Verberg inactiviteit ";
$GLOBALS['strGUIShowMatchingBanners']                = "Toon geschikte banners op de <i>Gekoppelde banners</i> paginas";
$GLOBALS['strGUIShowParentCampaigns']                = "Toon bovenliggende campagnes op de <i>Gekoppelde banners</i> pagina";
$GLOBALS['strStatisticsDefaults']                    = "Statistieken";
$GLOBALS['strBeginOfWeek']                           = "Begin van de week";
$GLOBALS['strPercentageDecimals']                    = "Nauwkeurigheid van percentages";
$GLOBALS['strWeightDefaults']                        = "Standaard gewicht";
$GLOBALS['strDefaultBannerWeight']                   = "Standaard banner gewicht";
$GLOBALS['strDefaultCampaignWeight']                 = "Standaard campagne gewicht";
$GLOBALS['strDefaultBannerWErr']                     = "Standaard banner gewicht moet een positief getal zijn";
$GLOBALS['strDefaultCampaignWErr']                   = "Standaard campagne gewicht moet een positief getal zijn";

$GLOBALS['strCategories']                            = "Categorieën";
$GLOBALS['strHelpFiles']                             = "Help bestanden";

// CSV Import Settings

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Toegestande aanroeptypes";
$GLOBALS['strInvocationDefaults']                    = "aanroep standaards";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner afleveringsinstellingen";

// Banner Logging Settings
$GLOBALS['strReverseLookup']                         = "Probeer de hostname van de bezoeker te achterhalen als deze niet door de server wordt verstrekt";
$GLOBALS['strProxyLookup']                           = "Probeer het echte IP adres van de bezoeker te achterhalen als er gebruik gemaakt wordt van een proxy server";
$GLOBALS['strIgnoreHosts']                           = "Sla geen statistieken op van gebruikers met een van de volgende IP adressen";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Stuur een waarschuwing als de resterende impressies minder zijn dan hier gespecificeerd";
$GLOBALS['strWarnLimitErr']                          = "Waarschuwings limiet moet een positief nummer zijn";
$GLOBALS['strWarnAdmin']                             = "Stuur een waarschuwing naar de beheerder wanneer er voor een campagne bijna geen impressies meer over zijn";
$GLOBALS['strWarnClient']                            = "Stuur een waarschuwing naar de adverteerder wanneer er voor een campagne bijna geen impressies meer over zijn";
$GLOBALS['strWarnAgency']                            = "Stuur een waarschuwing naar de adverteerder wanneer er voor een campagne bijna geen impressies meer over zijn";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Gebruikersinterface instellingen";
$GLOBALS['strGeneralSettings']                       = "Algemene instellingen";
$GLOBALS['strAppName']                               = "Applicatienaam";
$GLOBALS['strMyHeader']                              = "Voetnoot bestand";
$GLOBALS['strMyHeaderError']                         = "De opgegeven locatie van het voetnoot bestand is niet correct";
$GLOBALS['strMyFooter']                              = "Eindnoot bestand";
$GLOBALS['strMyFooterError']                         = "De opgegeven locatie van het eindnoot bestand is niet correct";
$GLOBALS['strDashboardSettings']                     = "Dashboard instellingen";

$GLOBALS['strMyLogoError']                           = "Het logo bestand bestaat niet in de admin/images map";
$GLOBALS['strGuiHeaderForegroundColor']              = "Kleur van de header voorgrond";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Kleur van de header achtergrond";
$GLOBALS['strGuiActiveTabColor']                     = "Kleur van een actieve tab";
$GLOBALS['strGuiHeaderTextColor']                    = "Kleur van headertekst";
$GLOBALS['strColorError']                            = "Gelieve kleuren in het RGB formaat in te geven, zoals '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Gebruik GZIP content compression";
$GLOBALS['strClientInterface']                       = "Adverteerder interface";
$GLOBALS['strReportsInterface']                      = "Raporteer interface";
$GLOBALS['strClientWelcomeEnabled']                  = "Toon een welkomstbericht";
$GLOBALS['strClientWelcomeText']                     = "Welkomstbericht<br />(HTML is toegestaan)";


// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "Experimenteel";
$GLOBALS['strKeywordRetrieval']             = "Sleutelwoord selectie";
$GLOBALS['strBannerRetrieval']              = "Banner selectie methode";
$GLOBALS['strRetrieveRandom']               = "Willekeurige banner selectie (standaard)";
$GLOBALS['strRetrieveNormalSeq']            = "Normale sequentieele banner selectie";
$GLOBALS['strWeightSeq']                    = "Op gewicht gebaseerde sequentieele banner selectie";
$GLOBALS['strFullSeq']                      = "Volledige sequentieele banner selectie";
$GLOBALS['strUseConditionalKeys']           = "Sta het gebruik van logische operatoren toe tijdens directe selectie";
$GLOBALS['strUseMultipleKeys']              = "Sta het gebruik van meerdere sleutelwoorden toe tijdens directe selectie";

$GLOBALS['strTableBorderColor']             = "Tabel rand kleur";
$GLOBALS['strTableBackColor']               = "Table achtergrond kleur";
$GLOBALS['strTableBackColorAlt']            = "Table achtergrond kleur (alternatief)";
$GLOBALS['strMainBackColor']                = "Globale achtergrond kleur";
$GLOBALS['strTimeZone']                     = "Tijdzone";

?>
