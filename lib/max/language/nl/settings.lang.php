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
$GLOBALS['strAdminAccount']                 = "System Administrator Account";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Geavanceerde instellingen";
$GLOBALS['strOtherSettings']                = "Andere instellingen";
$GLOBALS['strSpecifySyncSettings']          = "Synchronisatie instellingen";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strWarning']                      = "Waarschuwing";
$GLOBALS['strFatalError']                   = "Er is een fout opgetreden";
$GLOBALS['strUpdateError']                  = "Er is een fout opgetreden tijdens het bijwerken";
$GLOBALS['strBtnContinue']                  = "Ga verder »";
$GLOBALS['strBtnRecover']                   = "Recover »";
$GLOBALS['strBtnStartAgain']                   = "Start Upgrade Again »";
$GLOBALS['strBtnGoBack']                    = "« Ga terug";
$GLOBALS['strBtnAgree']                     = "Ik ga akkoord »";
$GLOBALS['strBtnDontAgree']                 = "« Ik ga niet akkoord";
$GLOBALS['strBtnRetry']                     = "Retry";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Er kon geen connectie opgebouwd worden met de database, controleer a.u.b. de door u opgegeven instellingen";
$GLOBALS['strCreateTableTestFailed']        = "De gebruiker die u heeft opgegeven heeft geen toestemming om de database aan te maken of te wijzigen, neem a.u.b. contact op met de beheerder van de database.";
$GLOBALS['strUpdateTableTestFailed']        = "De gebruiker die u heeft opgegeven heeft geen toestemming om de database structuur te wijzigen, neem a.u.b. contact op met de beheerder van de database.";
$GLOBALS['strTablePrefixInvalid']           = "De tabelnaam voorvoegsel bevat illegale tekens";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Voor dat uw verder gaat, corrigeer a.u.b. de volgende problemen:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Negeer waarschuwingen";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "De PHP instelling register_globals moet aan staan.";
$GLOBALS['strWarningRegisterArgcArv']       = "The PHP configuration variable register_argc_argv needs to be turned on to run maintenance from the command line.";
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


$GLOBALS['strRecoveryRequiredTitle']    = "Your previous upgrade attempt encountered an error";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Waarschuwing: het UPGRADE bestand is nog steeds te vinden in jouw var map. We kunnen dit bestand niet verwijderen omwille van ontbrekende rechten. Gelieve dit bestand zelf te verwijderen. ";
$GLOBALS['strRemoveUpgradeFile']               = "Je moet het UPGRADE bestand verwijderen in de map var";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Uw systeem is met succes bijgewerkt. De volgende schermen zullen je helpen met het updaten van de configuratie van uw nieuwe advertentie server.";
$GLOBALS['strErrorOccured']                 = "De volgende fouten zijn opgetreden:";
$GLOBALS['strErrorInstallDatabase']         = "De database kon niet worden aangemaakt.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "Het was niet mogelijk om een connectie te openen met de database.";

$GLOBALS['strErrorWritePermissions']        = "Bestandsrechten errors zijn gedetecteerd, en moeten worden opgelost om te kunnen verdergaan.<br />Om de errors onder Linux op te lossen, probeer eens volgende commando(s) in te geven:";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "Bestandsrechten errors zijn gedetecteerd, en moeten worden opgelost om te kunnen verdergaan.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "Admin interface URL";
$GLOBALS['strDeliveryUrlPrefix']            = "Bezorger";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Bezorger";
$GLOBALS['strImagesUrlPrefix']              = "Image Store URL";
$GLOBALS['strImagesUrlPrefixSSL']           = "Image Store URL (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Ongeldige gebruikersnaam of wachtwoord";

$GLOBALS['strUpgrade']                      = "Upgrade";
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
$GLOBALS['strUnableToWriteConfig']                   = "Unable to write changes to the config file";
$GLOBALS['strUnableToWritePrefs']                    = "Unable to commit preferences to the database";
$GLOBALS['strImageDirLockedDetected']	             = "The supplied <b>Images Folder</b> is not writeable by the server. <br>You can't proceed until you either change permissions of the folder or create the folder.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Configuration checklist";
$GLOBALS['strConfigurationSettings']                 = "Configuration settings";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Administrator instellingen";
$GLOBALS['strAdministratorAccount']                  = "The System Administrator Account";
$GLOBALS['strLoginCredentials']                      = "Inlog gegevens";
$GLOBALS['strAdminUsername']                         = "Gebruikersnaam van de beheerder";
$GLOBALS['strAdminPassword']                         = "Administrator  Password";
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
$GLOBALS['strNovice']                                = "Delete actions require confirmation for safety";
$GLOBALS['strUserlogEmail']                          = "Sla alle uitgaande e-mails op";
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Please enable <a href='account-settings-update.php'>check for updates</a> to use the dashboard.";
$GLOBALS['strTimezone']                              = "Tijdzone";
$GLOBALS['strTimezoneEstimated']                     = "Geschatte tijdzone";
$GLOBALS['strTimezoneGuessedValue']                  = "De tijdzone van de server is niet correct ingesteld in PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Gelieve de  %DOCS% na te kijken over de instellingen van deze variabele voor PHP in te stellen.";
$GLOBALS['strTimezoneDocumentation']                 = "documentatie";
$GLOBALS['strAdminSettingsTitle']                    = "Maak een administrator account";
$GLOBALS['strAdminSettingsIntro']                    = "Gelieve de velden te vervolledigen om jouw ad server administrator account aan te maken ";
$GLOBALS['strConfigSettingsIntro']                   = "Please check the configuration settings below and make any required changes before proceeding. If unsure, leave the default values.";

$GLOBALS['strEnableAutoMaintenance']	             = "Automatically perform maintenance during delivery if scheduled maintenance is not set up";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Database instellingen";
$GLOBALS['strDatabaseServer']                        = "Database server";
$GLOBALS['strDbLocal']                               = "Gebruik een lokale server door middel van sockets";
$GLOBALS['strDbType']                                = "Database naam";
$GLOBALS['strDbHost']                                = "Database adres";
$GLOBALS['strDbSocket']                              = "Database Socket";
$GLOBALS['strDbPort']                                = "Database poort nummer";
$GLOBALS['strDbUser']                                = "Database gebruikersnaam";
$GLOBALS['strDbPassword']                            = "Database wachtwoord";
$GLOBALS['strDbName']                                = "Database naam";
$GLOBALS['strDbNameHint']                            = "Database will be created if it does not exist";
$GLOBALS['strDatabaseOptimalisations']               = "Database optimalisaties";
$GLOBALS['strPersistentConnections']                 = "Gebruik 'persistent connections'";
$GLOBALS['strCantConnectToDb']                       = "Kan geen connectie maken met de database";
$GLOBALS['strCantConnectToDbDelivery']               = 'Can\'t Connect to Database for Delivery';
$GLOBALS['strDemoDataInstall']                       = "Install Demo Data";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Hoofd instellingen";
$GLOBALS['strEmailAddresses']                        = "Email 'From' Address";
$GLOBALS['strEmailFromName']                         = "Email 'From' Name";
$GLOBALS['strEmailFromAddress']                      = "Email 'From' Email Address";
$GLOBALS['strEmailFromCompany']                      = "Email 'From' Company";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "Pas headers aan voor qmail";
$GLOBALS['strEnableQmailPatch']                      = "Enable qmail patch";
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
$GLOBALS['strDeliverySettings']                      = "Leveringsinstellingen";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Web path";
$GLOBALS['strDeliveryPath']                          = "Leveringscache";
$GLOBALS['strImagePath']                             = "Images path";
$GLOBALS['strDeliverySslPath']                       = "Leveringscache";
$GLOBALS['strImageSslPath']                          = "Images SSL path";
$GLOBALS['strImageStore']                            = "Images folder";
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
$GLOBALS['strTypeFTPPassive']                        = "Use passive FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "De server map bestaat niet";
$GLOBALS['strTypeFTPErrorConnect']                   = "De verbinding met de FTP server kon niet worden opgebouwd, de gebruikersnaam of het wachtwoord zijn niet correct";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Your installation of PHP does not support FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "Could not upload file to the FTP Server, check set proper rights to Host Directory";
$GLOBALS['strTypeFTPErrorHost']                      = "De hostname van de FTP server is niet correct";
$GLOBALS['strDeliveryFilenames']                     = "Delivery File Names";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Ad Klik";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Ad Conversion Variables";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Ad content ";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Ad Conversion";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Ad Conversion (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Ad frame";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Ad afbeelding";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Ad (javascript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Ad layer";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Ad log";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Ad popup";
$GLOBALS['strDeliveryFilenamesAdView']               = "Ad View";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPC Invocation";
$GLOBALS['strDeliveryFilenamesLocal']                = "Local Invocation";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Front Controller";
$GLOBALS['strDeliveryFilenamesFlash']                = "Flash Include (Can be a full URL)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Banner afleveringsinstellingen";
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
$GLOBALS['strP3PSettings']                           = "P3P Privacy Policies";
$GLOBALS['strUseP3P']                                = "Gebruik P3P Policies";
$GLOBALS['strP3PCompactPolicy']                      = "P3P Compacte Policy";
$GLOBALS['strP3PPolicyLocation']                     = "P3P Policy Locatie";

// General Settings
$GLOBALS['generalSettings']                          = "Global General System Settings";
$GLOBALS['uiEnabled']                                = "User Interface Enabled";
$GLOBALS['defaultLanguage']                          = "Default System Language<br />(Each user can select their own language)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting";
$GLOBALS['strGeotargeting']                          = "Geotargeting";
$GLOBALS['strGeotargetingType']                      = "Geotargeting Module Type";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Use the bundled MaxMind GeoLiteCountry database";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP Land Database locatie";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP Regio Database Locatie";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP Stad Database Locatie";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP Gebied Database Locatie";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP ISP Database Locatie";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP Organisatie Database Locatie";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP Database Locatie";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP Stad Database Locatie";
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
$GLOBALS['strInventory']                             = "Inventaris";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "Toon extra campagne informatie op de <i>Campagne</i> pagina";
$GLOBALS['strShowBannerInfo']                        = "Toon extra banner informatie op de <i>Banners</i> pagina";
$GLOBALS['strShowCampaignPreview']                   = "Toon voorvertooning van alle banners op de <i>Banners</i> pagina";
$GLOBALS['strShowBannerHTML']                        = "Toon werkelijke banner in plaats van HTML code voor de voorvertoning van HTML banners";
$GLOBALS['strShowBannerPreview']                     = "Toon voorvertoning bovenaan alle pagina's welke betrekking hebben op banners";
$GLOBALS['strHideInactive']                          = "Verberg inactiviteit ";
$GLOBALS['strGUIShowMatchingBanners']                = "Toon geschikte banners op de <i>Gekoppelde banners</i> paginas";
$GLOBALS['strGUIShowParentCampaigns']                = "Toon bovenliggende campagnes op de <i>Gekoppelde banners</i> pagina";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Default Campaigns to Anonymous";
$GLOBALS['strStatisticsDefaults']                    = "Statistieken";
$GLOBALS['strBeginOfWeek']                           = "Begin van de week";
$GLOBALS['strPercentageDecimals']                    = "Nauwkeurigheid van percentages";
$GLOBALS['strWeightDefaults']                        = "Standaard gewicht";
$GLOBALS['strDefaultBannerWeight']                   = "Standaard banner gewicht";
$GLOBALS['strDefaultCampaignWeight']                 = "Standaard campagne gewicht";
$GLOBALS['strDefaultBannerWErr']                     = "Standaard banner gewicht moet een positief getal zijn";
$GLOBALS['strDefaultCampaignWErr']                   = "Standaard campagne gewicht moet een positief getal zijn";
$GLOBALS['strConfirmationUI']                        = "Confirmation in User Interface";

$GLOBALS['strPublisherDefaults']                     = "Website defaults";
$GLOBALS['strModesOfPayment']                        = "Modes of payment";
$GLOBALS['strCurrencies']                            = "Currencies";
$GLOBALS['strCategories']                            = "Categorieën";
$GLOBALS['strHelpFiles']                             = "Help bestanden";
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
$GLOBALS['strAllowedInvocationTypes']                = "Toegestande aanroeptypes";
$GLOBALS['strInvocationDefaults']                    = "aanroep standaards";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Enable 3rd Party Clicktracking by Default";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner afleveringsinstellingen";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Banner Logging Settings";
$GLOBALS['strLogAdRequests']                         = "Log a request every time a banner is requested";
$GLOBALS['strLogAdImpressions']                      = "Log an impression every time a banner is viewed";
$GLOBALS['strLogAdClicks']                           = "Log a click every time a viewer clicks on a banner";
$GLOBALS['strLogTrackerImpressions']                 = "Log a tracker impression every time a tracker beacon is viewed";
$GLOBALS['strReverseLookup']                         = "Probeer de hostname van de bezoeker te achterhalen als deze niet door de server wordt verstrekt";
$GLOBALS['strProxyLookup']                           = "Probeer het echte IP adres van de bezoeker te achterhalen als er gebruik gemaakt wordt van een proxy server";
$GLOBALS['strPreventLogging']                        = "Block Banner Logging Settings";
$GLOBALS['strIgnoreHosts']                           = "Sla geen statistieken op van gebruikers met een van de volgende IP adressen";
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
$GLOBALS['strWarnLimit']                             = "Stuur een waarschuwing als de resterende impressies minder zijn dan hier gespecificeerd";
$GLOBALS['strWarnLimitErr']                          = "Waarschuwings limiet moet een positief nummer zijn";
$GLOBALS['strWarnLimitDays']                         = "Send a warning when the days left are less than specified here";
$GLOBALS['strWarnLimitDaysErr']                      = "Warn Limit Days should be a positive number";
$GLOBALS['strAllowEmail']                            = "Globally allow sending of emails";
$GLOBALS['strEmailAddressFrom']                      = "Email address to send reports FROM";
$GLOBALS['strEmailAddressName']                      = "Company or personal name to sign off email with";
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
$GLOBALS['strDefaultTrackerStatus']                  = "Default tracker status";
$GLOBALS['strDefaultTrackerType']                    = "Default tracker type";
$GLOBALS['strSSLSettings']                           = "SSL Settings";
$GLOBALS['requireSSL']                               = "Force SSL Access on User Interface";
$GLOBALS['sslPort']                                  = "SSL Port Used by Web Server";
$GLOBALS['strDashboardSettings']                     = "Dashboard instellingen";

$GLOBALS['strMyLogo']                                = "Name/URL of custom logo file";
$GLOBALS['strMyLogoError']                           = "Het logo bestand bestaat niet in de admin/images map";
$GLOBALS['strGuiHeaderForegroundColor']              = "Kleur van de header voorgrond";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Kleur van de header achtergrond";
$GLOBALS['strGuiActiveTabColor']                     = "Kleur van een actieve tab";
$GLOBALS['strGuiHeaderTextColor']                    = "Kleur van headertekst";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Gelieve kleuren in het RGB formaat in te geven, zoals '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Gebruik GZIP content compression";
$GLOBALS['strClientInterface']                       = "Adverteerder interface";
$GLOBALS['strReportsInterface']                      = "Raporteer interface";
$GLOBALS['strClientWelcomeEnabled']                  = "Toon een welkomstbericht";
$GLOBALS['strClientWelcomeText']                     = "Welkomstbericht<br />(HTML is toegestaan)";

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

$GLOBALS['strExperimental']                 = "Experimenteel";
$GLOBALS['strKeywordRetrieval']             = "Sleutelwoord selectie";
$GLOBALS['strBannerRetrieval']              = "Banner selectie methode";
$GLOBALS['strRetrieveRandom']               = "Willekeurige banner selectie (standaard)";
$GLOBALS['strRetrieveNormalSeq']            = "Normale sequentieele banner selectie";
$GLOBALS['strWeightSeq']                    = "Op gewicht gebaseerde sequentieele banner selectie";
$GLOBALS['strFullSeq']                      = "Volledige sequentieele banner selectie";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "Sta het gebruik van logische operatoren toe tijdens directe selectie";
$GLOBALS['strUseMultipleKeys']              = "Sta het gebruik van meerdere sleutelwoorden toe tijdens directe selectie";

$GLOBALS['strTableBorderColor']             = "Tabel rand kleur";
$GLOBALS['strTableBackColor']               = "Table achtergrond kleur";
$GLOBALS['strTableBackColorAlt']            = "Table achtergrond kleur (alternatief)";
$GLOBALS['strMainBackColor']                = "Globale achtergrond kleur";
$GLOBALS['strOverrideGD']                   = "Override GD Imageformat";
$GLOBALS['strTimeZone']                     = "Tijdzone";

?>
