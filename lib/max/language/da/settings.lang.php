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
$GLOBALS['strInstall']                      = "Installer";
$GLOBALS['strLanguageSelection']            = "Sprog valg";
$GLOBALS['strDatabaseSettings']             = "Database opsætning";
$GLOBALS['strAdminSettings']                = "Administrator opsætninger";
$GLOBALS['strAdminAccount']                 = "Administrator konto";
$GLOBALS['strAdvancedSettings']             = "Avanceret opsætning";
$GLOBALS['strSpecifySyncSettings']          = "Synkroniserings opsætning";
$GLOBALS['strWarning']                      = "Advarsel";
$GLOBALS['strBtnContinue']                  = "Fortsæt »";
$GLOBALS['strBtnRecover']                   = "Genskab »";
$GLOBALS['strBtnStartAgain']                   = "Start opdatering igen »";
$GLOBALS['strBtnGoBack']                    = "« Gå tilbage";
$GLOBALS['strBtnAgree']                     = "Jeg acceptere »";
$GLOBALS['strBtnDontAgree']                 = "« Jeg er uenig";
$GLOBALS['strBtnRetry']                     = "Forsøg igen";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterArgcArv']       = "PHP konfigurator variable register_argc_argv skal tændes for at kunne køre vedligeholdelse fra kommando linien.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strTablesPrefix']                 = "Tabel navne prefix";
$GLOBALS['strTablesType']                   = "Tabel type";


$GLOBALS['strRecoveryRequiredTitle']    = "Dit tidligere forsøg på at upgradere udløste en fejl";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Advarsel: UPGRADE filen er stadig inde i din var folder. Vi kan ikke fjerne denne fil på grund af manglede adgang og tilladelse. Venligst slet denne fil selv.";
$GLOBALS['strRemoveUpgradeFile']               = "Du skal fjerne UPGRADE filen fra var folderen.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Dit system er opgraderet succesfuldt. De resterende skærmbilleder vil hjælpe dig med at opdatere konfigurationen af din nye reklame server.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";

$GLOBALS['strErrorWritePermissions']        = "Der er fundet nogle fil adgangs fejl, og disse skal repareres inden du kan fortsætte.<br />For at reparere fejlene på en Linux system, prøv at skrive følgende kommando(er):";

$GLOBALS['strErrorWritePermissionsWin']     = "Der er fundet nogle fil adgangs fejl, og disse skal repareres inden du kan fortsætte";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "Administrator interface URL";



/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Vælg sektion";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Ude af stand til at skrive ændringer til config filen";
$GLOBALS['strUnableToWritePrefs']                    = "Ude af stand til at binde referencer til databasen";
$GLOBALS['strImageDirLockedDetected']	             = "Den leverede <b>Billede Mappe</b> er ikke skrivebar af serveren. <br>Du kan ikke fortsætte indtil du enten ændrer adgangstilladdelse til mappen eller opretter mappen.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Konfigurations tjekliste";
$GLOBALS['strConfigurationSettings']                 = "Konfigurations opsætning";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Administrator opsætninger";
$GLOBALS['strAdminUsername']                         = "Administrator  brugernavn";
$GLOBALS['strAdminPassword']                         = "Administrator  password";
$GLOBALS['strInvalidUsername']                       = "Ugyldig brugernavn";
$GLOBALS['strBasicInformation']                      = "Basis information";
$GLOBALS['strAdminFullName']                         = "Admin's fulde navn";
$GLOBALS['strAdminEmail']                            = "Admin's email adresse";
$GLOBALS['strAdministratorEmail']                    = "Administrators email adresse";
$GLOBALS['strCompanyName']                           = "Virksomheds navn";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strUserlogEmail']                          = "Log alle udgående email beskeder";
$GLOBALS['strTimezone']                              = "Tidszone";
$GLOBALS['strTimezoneEstimated']                     = "Estimeret tidszone";
$GLOBALS['strTimezoneGuessedValue']                  = "Server tidszone er ikke sat korrekt i PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Venligst se %DOCS% omkring settings variabler for PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "dokumentation";
$GLOBALS['strAdminSettingsTitle']                    = "Opret en administrator konto";
$GLOBALS['strAdminSettingsIntro']                    = "Venligst udfyld denne formlar for at oprette din annonce server adiminstrator konto.";

$GLOBALS['strEnableAutoMaintenance']	             = "Automatisk udfør vedligeholdelse under levering if planlagt vedligehold ikke er sat op";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Database opsætning";
$GLOBALS['strDatabaseServer']                        = "Global database server opsætninger";
$GLOBALS['strDbType']                                = "Database type";
$GLOBALS['strDbHost']                                = "Database host navn";
$GLOBALS['strDbPort']                                = "Database port nummer";
$GLOBALS['strDbUser']                                = "Database bruger navn";
$GLOBALS['strDbPassword']                            = "Database password";
$GLOBALS['strDbName']                                = "Database navn";
$GLOBALS['strDatabaseOptimalisations']               = "Database optimiserings opsætning";
$GLOBALS['strPersistentConnections']                 = "Brug Persistent tilslutning";
$GLOBALS['strCantConnectToDb']                       = "Kan ikke tilslutte til databasen";
$GLOBALS['strDemoDataInstall']                       = "Installer demp data";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Email Indstillinger";
$GLOBALS['strEmailHeader']                           = "Email Titel";
$GLOBALS['strEmailLog']                              = "Email Log";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Handlings Log Indstillinger";
$GLOBALS['strEnableAudit']                           = "Aktiver Handlings Log";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Opsætning af debug logning";
$GLOBALS['strProduction']                            = "Produktions server";
$GLOBALS['strEnableDebug']                           = "Tillad debug logning";
$GLOBALS['strDebugMethodNames']                      = "Inkluder metode navn i debug loggen";
$GLOBALS['strDebugLineNumbers']                      = "Inkluder linie nummer i degub loggen";
$GLOBALS['strDebugType']                             = "Debug log type";
$GLOBALS['strDebugTypeFile']                         = "Fil";
$GLOBALS['strDebugTypeSql']                          = "SQL database";
$GLOBALS['strDebugName']                             = "Debug log navn, kalender, SQL tabel,<br />eller Syslog funktion";
$GLOBALS['strDebugPriority']                         = "Debug prioritets niveau";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Informations majoriteten";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Standard information";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_DEBUG - Informations majoriteten";
$GLOBALS['strDebugIdent']                            = "Debug identifikations streng";
$GLOBALS['strDebugUsername']                         = "mCal, SQL Server brugernavn";
$GLOBALS['strDebugPassword']                         = "mCal, SQL Server kodeord";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Leverings opsætning";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Web sti";
$GLOBALS['strDeliveryPath']                          = "Cache levering";
$GLOBALS['strDeliverySslPath']                       = "Cache levering";
$GLOBALS['strTypeFTPUsername']                       = "Log ind";
$GLOBALS['strTypeFTPPassword']                       = "Kodeord";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Din PHP installation understøtter ikke FTP.";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Tilføj Billede";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Tilføj (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Tilføj Layer";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Tilføj Log";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Tilføj Popup";
$GLOBALS['strDeliveryFilenamesLocal']                = "Lokal Invocation";
$GLOBALS['strDeliveryFilenamesFlash']                = "Flash Inkluderet (Kan være fuldt URL)";
$GLOBALS['strDeliveryCaching']                       = "Banner Levering Cache Indstillinger";
$GLOBALS['strDeliveryCacheLimit']                    = "Tid imellem Banner Cache Updatering (sekunder)";


$GLOBALS['strOrigin']                                = "Brug remote ophavs server";
$GLOBALS['strOriginType']                            = "Ophavs server type";
$GLOBALS['strOriginHost']                            = "Hostname for ophavs server";


// General Settings

// Geotargeting Settings

// Interface Settings
$GLOBALS['strInventory']                             = "Portfolio";
$GLOBALS['strStatisticsDefaults']                    = "Statistikker";
$GLOBALS['strConfirmationUI']                        = "Bekræftigelse for Bruger Grænseflade";

$GLOBALS['strModesOfPayment']                        = "Betalings metode";
$GLOBALS['strHelpFiles']                             = "Hjælpe fil";
$GLOBALS['strHasTaxID']                              = "Skat ID";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "Normal conversions regler";
$GLOBALS['strDefaultConversionType']                 = "Normal conversions regler";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner Leverings Indstillinger";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Banner Log Indstillinger";
$GLOBALS['strPreventLogging']                        = "Banner Log Indstillinger";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Indstillinger for Banner Lagring";

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Vedligeholdelses Indstillinger";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strEmailAddressFrom']                      = "Email Adresse rapporter skal sendes FRA";
$GLOBALS['strEmailAddressName']                      = "Firma eller navn, email skal underskrives med";

// UI Settings
$GLOBALS['strGeneralSettings']                       = "Generel opsætninger";
$GLOBALS['strSSLSettings']                           = "SSL Indstillinger";
$GLOBALS['requireSSL']                               = "Tving SSL adgang i Bruger Grænseflade";
$GLOBALS['sslPort']                                  = "SSL Port Brugt af Web Server";




// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
