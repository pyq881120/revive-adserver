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
$GLOBALS['strInstall']                      = "Instalează";
$GLOBALS['strChooseInstallLanguage']        = "Choose language for the installation procedure";
$GLOBALS['strLanguageSelection']            = "Alegere limbă";
$GLOBALS['strDatabaseSettings']             = "Setări bază de date";
$GLOBALS['strAdminSettings']                = "Setări Administrator";
$GLOBALS['strAdminAccount']                 = "Cont Administrator";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Setări Avansate";
$GLOBALS['strOtherSettings']                = "Other settings";
$GLOBALS['strSpecifySyncSettings']          = "Setări sincronizări";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strWarning']                      = "Avertisment";
$GLOBALS['strFatalError']                   = "A fatal error occurred";
$GLOBALS['strUpdateError']                  = "An error occurred while updating";
$GLOBALS['strBtnContinue']                  = "Continuă »";
$GLOBALS['strBtnRecover']                   = "Recuperează »";
$GLOBALS['strBtnStartAgain']                   = "Începe Actualizarea Din Nou »";
$GLOBALS['strBtnGoBack']                    = "« Întoarce-te";
$GLOBALS['strBtnAgree']                     = "Sunt de acord »";
$GLOBALS['strBtnDontAgree']                 = "« Nu sunt de acord";
$GLOBALS['strBtnRetry']                     = "Reîncearcă";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Could not connect to database, please recheck the settings you specified";
$GLOBALS['strCreateTableTestFailed']        = "The user you specified doesn't have permission to create or update the database structure, please contact the database administrator.";
$GLOBALS['strUpdateTableTestFailed']        = "The user you specified doesn't have permission to update the database structure, please contact the database administrator.";
$GLOBALS['strTablePrefixInvalid']           = "Table prefix contains invalid characters";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Before you continue, please correct these potential problems:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Ignore warnings";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "The PHP configuration variable register_globals needs to be turned on.";
$GLOBALS['strWarningRegisterArgcArv']       = "Variabila register_argc_argv din configuraţia PHP trebuie setată pe on pentru a executa mentenanţa din linia de comandă.";
$GLOBALS['strWarningMagicQuotesGPC']        = "The PHP configuration variable magic_quotes_gpc needs to be turned on.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "The PHP configuration variable magic_quotes_runtime needs to be turned off.";
$GLOBALS['strWarningFileUploads']           = "The PHP configuration variable file_uploads needs to be turned on.";
$GLOBALS['strWarningTrackVars']             = "The PHP configuration variable track_vars needs to be turned on.";
$GLOBALS['strWarningPREG']                  = "The version of PHP you are using doesn't have support for PERL compatible regular expressions. You need to enable the PREG extension before you can proceed.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "It is currently not possible to update the database. If you decide to proceed, all existing banners, statistics and advertisers will be deleted.";
$GLOBALS['strIgnoreErrors']                 = "Ignore errors";
$GLOBALS['strRetryUpdate']                  = "Retry updating";
$GLOBALS['strTableNames']                   = "Table Names";
$GLOBALS['strTablesPrefix']                 = "Prefix nume de tabele";
$GLOBALS['strTablesType']                   = "Tip tabelă";


$GLOBALS['strRecoveryRequiredTitle']    = "Încercarea ta anterioară de actualizare a întâmpinat o eroare";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Atenţie: fişierul de ACTUALIZARE încă este prezent în dosarul var. Nu am putut şterge acest fişier din cauza permisiunilor insuficiente. Te rugăm să ştergi acest fişier.";
$GLOBALS['strRemoveUpgradeFile']               = "Trebuie să ştergi fişierul de ACTUALIZARE din dosarul var.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Sistemul tău a fost actualizat cu succes. Următoarele pagini ce vor fi afişate te vor ajuta să actualizezi configuraţia noului server de reclame.";
$GLOBALS['strErrorOccured']                 = "The following error occurred:";
$GLOBALS['strErrorInstallDatabase']         = "The database structure could not be created.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "It was not possible to open a connection to the database.";

$GLOBALS['strErrorWritePermissions']        = "Au fost detectate erori legate de permisiunile fişierelor pe care trebuie să le corectezi înainte de a continua.<br />Pentru a repara aceste erori pe un sistem Linux, încearcă să introduci următoarele comenzi:";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "Au fost detectate erori legate de permisiunile fişierelor pe care trebuie să le corectezi înainte de a continua.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL Interfaţă Admin";
$GLOBALS['strDeliveryUrlPrefix']            = "URL Motor de Livrare";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL Motor de Livrare (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "URL Stocare Imagini";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL Stocare Imagini (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Invalid username or password";

$GLOBALS['strUpgrade']                      = "Upgrade";
$GLOBALS['strSystemUpToDate']               = "Your system is already up to date, no upgrade is needed at the moment. <br />Click on <b>Proceed</b> to go to home page.";
$GLOBALS['strSystemNeedsUpgrade']           = "The database structure and configuration file need to be upgraded in order to function correctly. Click <b>Proceed</b> to start the upgrade process. <br /><br />Depending on which version you are upgrading from and how many statistics are already stored in the database, this process can cause high load on your database server. Please be patient, the upgrade can take up to a couple of minutes.";
$GLOBALS['strSystemUpgradeBusy']            = "System upgrade in progress, please wait...";
$GLOBALS['strSystemRebuildingCache']        = "Rebuilding cache, please wait...";
$GLOBALS['strServiceUnavalable']            = "The service is temporarily unavailable. System upgrade in progress";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Alege Secţiune";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Nu pot efectua modificările în fişierul de configurare";
$GLOBALS['strUnableToWritePrefs']                    = "Nu pot introduce aceste preferinţe în baza de date";
$GLOBALS['strImageDirLockedDetected']	             = "<b>Dosarul de Imagini</b> furnizat nu poate fi scris de către server. <br>Nu poţi continua până când nu modifici permisiunile sau creezi acel dosar.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Lista de configurare";
$GLOBALS['strConfigurationSettings']                 = "Setări configurare";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Setări Administrator";
$GLOBALS['strAdministratorAccount']                  = "The System Administrator Account";
$GLOBALS['strLoginCredentials']                      = "Drepturi Autentificare";
$GLOBALS['strAdminUsername']                         = "Utilizator Administrator";
$GLOBALS['strAdminPassword']                         = "Parolă Administrator";
$GLOBALS['strInvalidUsername']                       = "Utilizator Greşit";
$GLOBALS['strBasicInformation']                      = "Informaţii de Bază";
$GLOBALS['strAdminFullName']                         = "Numele Complet al Administratorului";
$GLOBALS['strAdminEmail']                            = "Adresa de E-mail a Administratorului";
$GLOBALS['strAdministratorEmail']                    = "Adresa de E-mail a Administratorului";
$GLOBALS['strCompanyName']                           = "Numele Companiei";
$GLOBALS['strAdminCheckUpdates']                     = "Automatically check for product updates and security alerts (Recommended).";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Every Login";
$GLOBALS['strAdminCheckDaily']                       = "Daily";
$GLOBALS['strAdminCheckWeekly']                      = "Weekly";
$GLOBALS['strAdminCheckMonthly']                     = "Monthly";
$GLOBALS['strAdminCheckNever']                       = "Never";
$GLOBALS['strNovice']                                = "Acţiunile de ştergere necesită confirmare pentru siguranţă";
$GLOBALS['strUserlogEmail']                          = "Păstrează jurnalul tuturor mesajelor email trimise";
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Te rugăm să activezi <a href='account-settings-update.php'>Verificare Actualizări</a> dacă doriţi să utilizaţi Panoul Principal.";
$GLOBALS['strTimezone']                              = "Fus Orar";
$GLOBALS['strTimezoneEstimated']                     = "Fus Orar Estimat";
$GLOBALS['strTimezoneGuessedValue']                  = "Fusul Orar al server-ul nu este setat corect în PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Te rugăm să citeşti %DOCS% legat de setarea acestei variabile pentru PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "documentaţie";
$GLOBALS['strAdminSettingsTitle']                    = "Creează un cont de administrator";
$GLOBALS['strAdminSettingsIntro']                    = "Te rugăm să completezi acest formular pentru a-ţi crea contul de administrator pentru acest server de reclame.";
$GLOBALS['strConfigSettingsIntro']                   = "Te rugăm să verifici setările de configurare de mai jos şi să faci orice schimbări necesare înainte de a continua. Dacă nu eşti sigur, lasă valorile implicite.";

$GLOBALS['strEnableAutoMaintenance']	             = "Execută întreţinerea automat în timpul livrării reclamelor dacă întreţinerea planificată nu este setată";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Setări bază de date";
$GLOBALS['strDatabaseServer']                        = "Setări Globale legate de Baza de Date";
$GLOBALS['strDbLocal']                               = "Foloseşte conectarea pe socket-ul local";
$GLOBALS['strDbType']                                = "Tip bază de Date";
$GLOBALS['strDbHost']                                = "Gazdă bază de Date";
$GLOBALS['strDbSocket']                              = "Socket bază de date";
$GLOBALS['strDbPort']                                = "Număr Port bază de date";
$GLOBALS['strDbUser']                                = "Utilizator bază de date";
$GLOBALS['strDbPassword']                            = "Parolă bază de date";
$GLOBALS['strDbName']                                = "Nume bază de date";
$GLOBALS['strDbNameHint']                            = "Baza de date va fi creată dacă nu există";
$GLOBALS['strDatabaseOptimalisations']               = "Setări Optimizare Bază de Date";
$GLOBALS['strPersistentConnections']                 = "Foloseşte Conexiuni Persistente";
$GLOBALS['strCantConnectToDb']                       = "Nu mă pot conecta la Baza de Date";
$GLOBALS['strCantConnectToDbDelivery']               = 'Nu mă pot conecta la baza de date pentru livrare';
$GLOBALS['strDemoDataInstall']                       = "Instalează Date Demonstrative";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Setări Email";
$GLOBALS['strEmailAddresses']                        = "Adresă \"Expeditor\" Email";
$GLOBALS['strEmailFromName']                         = "Nume \"Expeditor\" Email";
$GLOBALS['strEmailFromAddress']                      = "Adresă de E-mail \"Expeditor\" Email";
$GLOBALS['strEmailFromCompany']                      = "Firmă \"Expeditor\" Email";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "patch qmail";
$GLOBALS['strEnableQmailPatch']                      = "Activează patch-ul qmail";
$GLOBALS['strEmailHeader']                           = "Headere email";
$GLOBALS['strEmailLog']                              = "Jurnal email";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Setări ale Urmăririi Bilanţului";
$GLOBALS['strEnableAudit']                           = "Activează Urmărirea Bilanţului";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Setări Jurnal Depanare";
$GLOBALS['strProduction']                            = "Server de producţie";
$GLOBALS['strEnableDebug']                           = "Activează Jurnalul de Depanare";
$GLOBALS['strDebugMethodNames']                      = "Include numele metodelor în jurnalul de depanare";
$GLOBALS['strDebugLineNumbers']                      = "Include numerele liniilor în jurnalul de depanare";
$GLOBALS['strDebugType']                             = "Tip Jurnal de Depanare";
$GLOBALS['strDebugTypeFile']                         = "Fişier";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "Bază de Date SQL";
$GLOBALS['strDebugTypeSyslog']                       = "Syslog";
$GLOBALS['strDebugName']                             = "Nume Jurnal de Depanare, Calendar, Tabela SQL,<br /> sau Facilitatea Syslog";
$GLOBALS['strDebugPriority']                         = "Nivel de Prioritate pentru Depanare";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Majoritatea Informaţiilor";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Informaţii Implicite";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Ultimele Informaţii";
$GLOBALS['strDebugIdent']                            = "Cuvânt Identificare Depanare";
$GLOBALS['strDebugUsername']                         = "Utilizator mCal, SQL Server";
$GLOBALS['strDebugPassword']                         = "Parolă mCal, SQL Server";
$GLOBALS['strProductionSystem']                      = "Sistem de Producţie";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Setări Livrare";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Locaţie web";
$GLOBALS['strDeliveryPath']                          = "Locaţie livrare";
$GLOBALS['strImagePath']                             = "Locaţie imagini";
$GLOBALS['strDeliverySslPath']                       = "Locaţie SSL livrare";
$GLOBALS['strImageSslPath']                          = "Locaţie SSL Imagini";
$GLOBALS['strImageStore']                            = "Dosar imagini";
$GLOBALS['strTypeWebSettings']                       = "Setări webserver pentru stocarea locală de bannere";
$GLOBALS['strTypeWebMode']                           = "Metodă Stocare";
$GLOBALS['strTypeWebModeLocal']                      = "Dosar Local";
$GLOBALS['strTypeDirError']                          = "Dosarul local nu poate fi scris de către server.";
$GLOBALS['strTypeWebModeFtp']                        = "Server FTP extern";
$GLOBALS['strTypeWebDir']                            = "Dosar Local";
$GLOBALS['strTypeFTPHost']                           = "Gazdă GTP";
$GLOBALS['strTypeFTPDirectory']                      = "Dosar Gazdă";
$GLOBALS['strTypeFTPUsername']                       = "Autentificare";
$GLOBALS['strTypeFTPPassword']                       = "Parola";
$GLOBALS['strTypeFTPPassive']                        = "Foloseşte FTP pasiv";
$GLOBALS['strTypeFTPErrorDir']                       = "Dosarul FTP Gazdă nu există";
$GLOBALS['strTypeFTPErrorConnect']                   = "Nu mă pot conecta la server-ul FTP, Utilizatorul sau Parola este greşit(ă)";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Instalarea ta de PHP nu suportă FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "Nu pot încărca fişierul pe server-ul FTP, verifică drepturile de scriere ale Dosarului Gazdă";
$GLOBALS['strTypeFTPErrorHost']                      = "Adresa gazdă FTP nu este corectă";
$GLOBALS['strDeliveryFilenames']                     = "Nume Fişiere de Livrare";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Click Reclamă";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Variabile Conversii Reclamă";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Conţinut Reclamă";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Conversie Reclamă";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Conversie Reclamă (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Frame Reclamă";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Imagine Reclamă";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Reclamă (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Layer Reclamă";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Jurnal Reclamă";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Popup Reclamă";
$GLOBALS['strDeliveryFilenamesAdView']               = "Vizualizare Reclamă";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "Invocare XML RPC";
$GLOBALS['strDeliveryFilenamesLocal']                = "Invocare Locală";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Controler Faţă";
$GLOBALS['strDeliveryFilenamesFlash']                = "Include Flash (Poate fi un URL complet)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Setări Cache Distribuţie Banner";
$GLOBALS['strDeliveryCacheLimit']                    = "Perioada între actualizările Cache-ului de Bannere (secunde)";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "Foloseşte de la distanţă server principal";
$GLOBALS['strOriginType']                            = "Tip server principal";
$GLOBALS['strOriginHost']                            = "Nume Gazdă pentru server principal";
$GLOBALS['strOriginPort']                            = "Număr port pentru baza de date principală";
$GLOBALS['strOriginScript']                          = "Fişier script pentru baza de date principală";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Timeout Principal (secunde)";
$GLOBALS['strOriginProtocol']                        = "Protocol server principal";

$GLOBALS['strDeliveryAcls']                          = "Evaluează limitările de distribuţie ale banner-ului în timpul livrării";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "Ascunde canalul în timpul livrării reclamelor";
$GLOBALS['strDeliveryExecPhp']                       = "Permite execuţia codului PHP în reclame<br />(Atenţie: Risc de Securitate)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Separator Urmărire Click-uri pentru Terţe Părţi";
$GLOBALS['strGlobalDefaultBannerUrl']                = "URL Global către bannerul imagine implicit";
$GLOBALS['strP3PSettings']                           = "Politici de Confidenţialitate P3P";
$GLOBALS['strUseP3P']                                = "Foloseşte Politici P3P";
$GLOBALS['strP3PCompactPolicy']                      = "Politică Compactă P3P";
$GLOBALS['strP3PPolicyLocation']                     = "Locaţie Politică P3P";

// General Settings
$GLOBALS['generalSettings']                          = "Global General System Settings";
$GLOBALS['uiEnabled']                                = "Interfaţa Utilizatorului Activată";
$GLOBALS['defaultLanguage']                          = "Default System Language<br />(Each user can select their own language)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Setări de Localizare";
$GLOBALS['strGeotargeting']                          = "Setări de Localizare";
$GLOBALS['strGeotargetingType']                      = "Tip Modul de Localizare";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Foloseşte baza de date MaxMind GeoLiteCountry inclusă";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "Locaţia Bazei de Date MaxMind GeoIP cu Ţări";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "Locaţia Bazei de Date MaxMind GeoIP cu Regiuni";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "Locaţia Bazei de Date MaxMind GeoIP cu Oraşe";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "Locaţia Bazei de Date MaxMind GeoIP cu Judeţe";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "Locaţia Bazei de Date MaxMind GeoIP cu DMA";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "Locaţia Bazei de Date MaxMind GeoIP cu Organizaţii";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "Locaţia Bazei de Date MaxMind GeoIP cu ISP";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "Locaţia Bazei de Date MaxMind GeoIP cu Viteza Internet-ului";
$GLOBALS['strGeoShowUnavailable']                    = "Afişează limitările de livrare în funcţie de localizare chiar dacă GeoIP nu este valabil";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "Baza de Date MaxMind GeoIP cu Ţări nu există în locaţia specificată ";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "Baza de Date MaxMind GeoIP cu Regiuni nu există în locaţia specificată ";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "Baza de Date MaxMind GeoIP cu Oraşe nu există în locaţia specificată ";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "Baza de Date MaxMind GeoIP cu Judeţe nu există în locaţia specificată ";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "Baza de Date MaxMind GeoIP cu DMA nu există în locaţia specificată ";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "Baza de Date MaxMind GeoIP cu Organizaţii nu există în locaţia specificată ";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "Baza de Date MaxMind GeoIP cu ISP nu există în locaţia specificată ";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "Baza de Date MaxMind GeoIP cu Viteza Internet-ului nu există în locaţia specificată ";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventar";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "Arată informaţii suplimentare ale campaniei în pagina de <i>Campanii</i>";
$GLOBALS['strShowBannerInfo']                        = "Arată informaţii suplimentare despre banner în pagina de <i>Bannere</i>";
$GLOBALS['strShowCampaignPreview']                   = "Afişează o previzualizare a tuturor banner-elor din pagina de <i>Bannere</i>";
$GLOBALS['strShowBannerHTML']                        = "Arată banner-ul utilizat în locul codului HTML în pagina de previzualizare a banner-ului HTML";
$GLOBALS['strShowBannerPreview']                     = "Afişează previzualizarea banner-ului în partea de sus a paginiilor care se ocupă cu bannere";
$GLOBALS['strHideInactive']                          = "Ascunde inactivi";
$GLOBALS['strGUIShowMatchingBanners']                = "Afişează bannere care se potrivesc pe paginile de <i>Bannere asociate</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Afişează campaniile părinte pe paginile de <i>Bannere asociate</i>";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Campanii Implicite pentru Anonimi";
$GLOBALS['strStatisticsDefaults']                    = "Statistici";
$GLOBALS['strBeginOfWeek']                           = "Începutul Săptămânii";
$GLOBALS['strPercentageDecimals']                    = "Zecimale Procent";
$GLOBALS['strWeightDefaults']                        = "Lăţime Implicită";
$GLOBALS['strDefaultBannerWeight']                   = "Lăţime Banner Implicită";
$GLOBALS['strDefaultCampaignWeight']                 = "Lăţime Campanie Implicită";
$GLOBALS['strDefaultBannerWErr']                     = "Default banner weight should be a positive integer";
$GLOBALS['strDefaultCampaignWErr']                   = "Default campaign weight should be a positive integer";
$GLOBALS['strConfirmationUI']                        = "Confirmare în Interfaţa Utilizatorului";

$GLOBALS['strPublisherDefaults']                     = "Setări website implicite";
$GLOBALS['strModesOfPayment']                        = "Modalitate de plată";
$GLOBALS['strCurrencies']                            = "Valute";
$GLOBALS['strCategories']                            = "Categorii";
$GLOBALS['strHelpFiles']                             = "Fişiere ajutor";
$GLOBALS['strHasTaxID']                              = "Nr. de înregistrare";
$GLOBALS['strDefaultApproved']                       = "Căsuţă de selectare aprobat";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Choose Advertiser";
$GLOBALS['strChooseCampaign']                        = "Choose Campaign";
$GLOBALS['strChooseCampaignBanner']                  = "Choose Banner";
$GLOBALS['strChooseTracker']                         = "Choose Tracker";
$GLOBALS['strDefaultConversionStatus']               = "Reguli implicite de conversie";
$GLOBALS['strDefaultConversionType']                 = "Reguli implicite de conversie";
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
$GLOBALS['strAllowedInvocationTypes']                = "Tipuri de Cod pentru Reclame Permise";
$GLOBALS['strInvocationDefaults']                    = "Codul pentru reclame implicit";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Activează Implicit Urmărirea Click-urilor pentru a 3-a parte";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Setări Livrare Banner";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Setări Jurnal pentru Banner";
$GLOBALS['strLogAdRequests']                         = "Înregistrează o cerere de fiecare dată când un banner este cerut";
$GLOBALS['strLogAdImpressions']                      = "Înregistrează o vizualizare de fiecare dată când un banner este vizualizat";
$GLOBALS['strLogAdClicks']                           = "Înregistrează un click de fiecare dată când un vizitator face click pe un banner";
$GLOBALS['strLogTrackerImpressions']                 = "Înregistrează o vizualizare a contorului de fiecare dată când contorul este vizualizat";
$GLOBALS['strReverseLookup']                         = "Determină numele gazdă ale vizitatorilor prin reverse lookup când nu este furnizat";
$GLOBALS['strProxyLookup']                           = "Încearcă aflarea adresei IP reale a vizitatorilor care se află în spatele unui server proxy";
$GLOBALS['strPreventLogging']                        = "Blochează Setările de Înregistrare Jurnal pentru Bannere";
$GLOBALS['strIgnoreHosts']                           = "Nu înregistra nici o statistică pentru vizitatorii care au oricare dintre următoarele adrese IP sau nume gazdă";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Nu</b> înregistra statistici pentru clienţii care au oricare din următoarele cuvinte în user-agent (unu-pe-linie)";
$GLOBALS['strEnforceUserAgents']                     = "Înregistrează statistici <b>doar</b> pentru clienţii care au oricare din următoarele cuvinte în user-agent (unu-pe-linie)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Setări Stocare Banner";

// Campaign ECPM settings
$GLOBALS['strEnableECPM']                            = "Use eCPM optimized priorities instead of remnant-weighted priorities";
$GLOBALS['strEnableContractECPM']                    = "Use eCPM optimized priorities instead of standard contract priorities";
$GLOBALS['strEnableECPMfromRemnant']                 = "(If you enable this feature all your remnant campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strEnableECPMfromECPM']                    = "(If you disable this feature some of your active eCPM campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strInactivatedCampaigns']                  = "List of campaigns which became inactive due to the changes in preferences:";

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Setări Întreţinere";
$GLOBALS['strConversionTracking']                    = "Setări pentru Urmărirea Conversiilor";
$GLOBALS['strEnableConversionTracking']              = "Activează Urmărirea Conversiilor";
$GLOBALS['strCsvImport']                             = "Permite încărcarea de conversii offline";
$GLOBALS['strBlockAdViews']                          = "Nu contoriza Vizualizările Reclamei daca vizitatorul a mai văzut perechea reclamă/zonă în timpul specificat (secunde)";
$GLOBALS['strBlockAdViewsError']                     = "Valorea de blocare a Vizualizării Reclamelor trebuie să fie un număr întreg pozitiv";
$GLOBALS['strBlockAdClicks']                         = "Nu contoriza Click-urile pe Reclame dacă vizitatorul a mai făcut click pe aceeaşi pereche reclamă/zonă în timpul specificat (secunde)";
$GLOBALS['strBlockAdClicksError']                    = "Valorea de blocare a Click-urilor pe Reclame trebuie să fie un număr întreg pozitiv";
$GLOBALS['strMaintenanceOI']                         = "Intervalul Operaţiunii de Întreţinere (minute)";
$GLOBALS['strMaintenanceOIError']                    = "Intervalul Operaţiunii de Întreţinere nu este corect - citeşte documentaţia pentru valorile valide";
$GLOBALS['strPrioritySettings']                      = "Setări de Prioritate";
$GLOBALS['strPriorityInstantUpdate']                 = "Actualizează priorităţile reclamelor imediat ce sunt făcute schimbări în Interfaţa Utilizatorului";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Fereastra Implicită de Conectare a Vizualizării Reclamei (secunde)";
$GLOBALS['strDefaultImpConWindowError']              = "Dacă este setată, Fereastra Implicită de Conectare a Vizualizării Reclamei trebuie să fie un număr întreg pozitiv";
$GLOBALS['strDefaultCliConWindow']                   = "Fereastra Implicită de Conectare a Click-ului pe Reclamă";
$GLOBALS['strDefaultCliConWindowError']              = "Dacă este setată, Fereastra Implicită de Conectare a Click-ului pe Reclamă trebuie să fie un număr întreg pozitiv";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Trimite o atenţionare când numărul de vizualizări rămase este mai mic decât cel specificat aici";
$GLOBALS['strWarnLimitErr']                          = "Limita de Atenţionare trebuie să fie un număr întreg pozitiv";
$GLOBALS['strWarnLimitDays']                         = "Trimite o atenţionare când numărul de zile rămas este mai mic decât cel specificat aici";
$GLOBALS['strWarnLimitDaysErr']                      = "Limita de Atenţionare pentru Zile trebuie să fie un număr întreg pozitiv";
$GLOBALS['strAllowEmail']                            = "Permite tuturor trimiterea de e-mailuri";
$GLOBALS['strEmailAddressFrom']                      = "Adresa de e-mail de unde să se trimită rapoartele";
$GLOBALS['strEmailAddressName']                      = "Companie sau nume personal pentru semnarea e-mail-ului";
$GLOBALS['strWarnAdmin']                             = "Trimite o atenţionare administratorului de fiecare dată când o campanie se apropie de expirare";
$GLOBALS['strWarnClient']                            = "Trimite o atenţionare advertiserului de fiecare dată când o campanie se apropie de expirare";
$GLOBALS['strWarnAgency']                            = "Trimite o atenţionare agenţiei de fiecare dată când o campanie se apropie de expirare";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Setări Interfaţă Utilizator";
$GLOBALS['strGeneralSettings']                       = "Setări Generale";
$GLOBALS['strAppName']                               = "Nume Aplicaţie";
$GLOBALS['strMyHeader']                              = "Locaţie Fişier Antet";
$GLOBALS['strMyHeaderError']                         = "Fişierul antet nu există în locaţia specificată";
$GLOBALS['strMyFooter']                              = "Locaţie Fişier Subsol";
$GLOBALS['strMyFooterError']                         = "Fişierul subsol nu există în locaţia specificată";
$GLOBALS['strDefaultTrackerStatus']                  = "Starea implicită a contorului";
$GLOBALS['strDefaultTrackerType']                    = "Tipul implicit al contorului";
$GLOBALS['strSSLSettings']                           = "Setări SSL";
$GLOBALS['requireSSL']                               = "Forţează Accesul prin SSL la Interfaţa Utilizatorului";
$GLOBALS['sslPort']                                  = "Port SSL Folosit de Server-ul Web";
$GLOBALS['strDashboardSettings']                     = "Setări Panou Principal";

$GLOBALS['strMyLogo']                                = "Numele fişierului cu emblema personalizată";
$GLOBALS['strMyLogoError']                           = "Fişierul cu emblema nu există în dosarul admin/images";
$GLOBALS['strGuiHeaderForegroundColor']              = "Culoarea de prim-plan a antetului";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Culoarea de fundal a antetului";
$GLOBALS['strGuiActiveTabColor']                     = "Culoarea secţiunii active";
$GLOBALS['strGuiHeaderTextColor']                    = "Culoarea textului din antet";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Te rugăm să introduci culorile în format RGB, precum '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Foloseşte Compresia GZIP pentru Conţinut";
$GLOBALS['strClientInterface']                       = "Interfaţă Advertiser";
$GLOBALS['strReportsInterface']                      = "Interfaţă Rapoarte";
$GLOBALS['strClientWelcomeEnabled']                  = "Activează Mesajul de Întâmpinare al Advertiserului";
$GLOBALS['strClientWelcomeText']                     = "Text de Întâmpinare<br />(Tag-uri HTML Permise)";

$GLOBALS['strPublisherInterface']                    = "Interfaţă Întâmpinare";
$GLOBALS['strPublisherAgreementEnabled']             = "Permite autentificarea website-urilor care nu au acceptat Termenii şi Condiţiile";
$GLOBALS['strPublisherAgreementText']                = "Text autentificare (Tag-uri HTML permise)";

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
$GLOBALS['strKeywordRetrieval']             = "Keyword retrieval";
$GLOBALS['strBannerRetrieval']              = "Banner retrieval method";
$GLOBALS['strRetrieveRandom']               = "Random banner retrieval (default)";
$GLOBALS['strRetrieveNormalSeq']            = "Normal sequental banner retrieval";
$GLOBALS['strWeightSeq']                    = "Weight based sequential banner retrieval";
$GLOBALS['strFullSeq']                      = "Full sequential banner retrieval";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "Allow logical operators when using direct selection";
$GLOBALS['strUseMultipleKeys']              = "Allow multiple keywords when using direct selection";

$GLOBALS['strTableBorderColor']             = "Table Border Color";
$GLOBALS['strTableBackColor']               = "Table Back Color";
$GLOBALS['strTableBackColorAlt']            = "Table Back Color (Alternative)";
$GLOBALS['strMainBackColor']                = "Main Back Color";
$GLOBALS['strOverrideGD']                   = "Override GD Imageformat";
$GLOBALS['strTimeZone']                     = "Time Zone";

?>
