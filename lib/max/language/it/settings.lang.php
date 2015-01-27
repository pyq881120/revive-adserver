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
$GLOBALS['strInstall']                      = "Installa";
$GLOBALS['strChooseInstallLanguage']        = "Scegli la lingua per la procedura di installazione";
$GLOBALS['strLanguageSelection']            = "Selezione lingua";
$GLOBALS['strDatabaseSettings']             = "Impostazioni database";
$GLOBALS['strAdminSettings']                = "Impostazioni amministratore";
$GLOBALS['strAdminAccount']                 = "Account dell'amministratore";
$GLOBALS['strAdvancedSettings']             = "Impostazioni avanzate";
$GLOBALS['strOtherSettings']                = "Altre impostazioni";
$GLOBALS['strSpecifySyncSettings']          = "Sincronizzazione delle impostazioni";
$GLOBALS['strWarning']                      = "Attenzione";
$GLOBALS['strFatalError']                   = "Si è verificato un errore fatale";
$GLOBALS['strUpdateError']                  = "Si è verificato un errore durante l'aggiornamento";
$GLOBALS['strBtnContinue']                  = "Continua »";
$GLOBALS['strBtnRecover']                   = "Recupera »";
$GLOBALS['strBtnStartAgain']                   = "Riavvia aggiornamento »";
$GLOBALS['strBtnGoBack']                    = "« Torna Indietro";
$GLOBALS['strBtnAgree']                     = "Acconsento »";
$GLOBALS['strBtnDontAgree']                 = "« Non acconsento";
$GLOBALS['strBtnRetry']                     = "Riprova";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Impossibile connettersi al database, controlla i parametri specificati";
$GLOBALS['strCreateTableTestFailed']        = "L'utente specificato non ha i permessi necessari a creare o aggiornare la struttura del database, contatta l'amministratore di sistema.";
$GLOBALS['strUpdateTableTestFailed']        = "L'utente specificato non ha i permessi necessari ad aggiornare la struttura del database, contatta l'amministratore di sistema.";
$GLOBALS['strTablePrefixInvalid']           = "Il prefisso delle tabelle contiene caratteri non validi";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Prima di continuare, correggi questi potenziali problemi:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Ignora avvertimenti";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "La variabile di configurazione del PHP register_globals deve essere abilitata.";
$GLOBALS['strWarningRegisterArgcArv']       = "La variabile di configurazione del PHP register_argc_argv deve essere attiva per eseguire la manutenzione da linea di comando.";
$GLOBALS['strWarningMagicQuotesGPC']        = "La variabile di configurazione del PHP magic_quotes_gpc deve essere abilitata.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "La variabile di configurazione del PHP magic_quotes_runtime deve essere disabilitata.";
$GLOBALS['strWarningFileUploads']           = "La variabile di configurazione del PHP file_uploads deve essere abilitata.";
$GLOBALS['strWarningTrackVars']             = "La variabile di configurazione del PHP track_vars deve essere abilitata.";
$GLOBALS['strWarningPREG']                  = "La versione di PHP utilizzata non ha il supporto alle espressioni regolari PERL-compatibili. È necessario abilitare l'estensione PREG prima di procedere.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Non è possibile aggiornare il database. Se decidi di procedere, tutti i banner, le statistiche e i clienti saranno cancellati.";
$GLOBALS['strIgnoreErrors']                 = "Ignora errori";
$GLOBALS['strRetryUpdate']                  = "Riprova";
$GLOBALS['strTableNames']                   = "Nomi delle tabelle";
$GLOBALS['strTablesPrefix']                 = "Prefisso delle tabelle";
$GLOBALS['strTablesType']                   = "Tipo di tabelle";


$GLOBALS['strRecoveryRequiredTitle']    = "Il tuo precedente tentativo di aggiornamento ha generato un errore";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Attenzione: il file UPGRADE è ancora presente all'interno della cartella var. Non è possibile cancellare questo file automaticamente per mancanza dei permessi necessari. Si prega di rimuovere il file manualmente.";
$GLOBALS['strRemoveUpgradeFile']               = "Devi rimuovere il file UPGRADE dalla cartella var.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Il tuo sistema è stato aggiornato con successo. Le rimanenti schermate ti aiuteranno per la configurazione del nuovo server ad.";
$GLOBALS['strErrorOccured']                 = "Si è verificato il seguente errore:";
$GLOBALS['strErrorInstallDatabase']         = "La struttura del database non pu� essere creata.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "Non è stato possibile connettersi al database.";

$GLOBALS['strErrorWritePermissions']        = "E' stato riscontrato un errore nei permessi dei file che deve essere corretto prima procedere.<br />Per correggere l'errore su un sistema Linux, prova a digitare i seguenti comandi:";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";

$GLOBALS['strErrorWritePermissionsWin']     = "Sono stati rilevati errori nei permessi dei file, e devono essere corretti per procedere.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL dell'interfaccia di amministrazione";
$GLOBALS['strDeliveryUrlPrefix']            = "URL sistema di consegna";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL sistema di consegna (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "URL memorizzazione immagini";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL memorizzazione immagini (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Username o password non validi";

$GLOBALS['strUpgrade']                      = "Aggiornamento";
$GLOBALS['strSystemUpToDate']               = "Il sistema è aggiornato, al momento non sono necessari aggiornamenti. <br />Clicca <b>Procedi</b> per andare alla pagina principale.";
$GLOBALS['strSystemNeedsUpgrade']           = "La struttura del database e il file di configurazione devono essere aggiornati per funzionare correttamente. Clicca <b>Procedi</b> per iniziare il processo di aggiornamento. <br /><br />A seconda della versione da cui si fa l'aggiornamento e dalla quantità di statistiche presenti nel database, il processo potrebbe creare un elevato carico sul server di database. Sii paziente, il processo pu� durare anche alcuni minuti.";
$GLOBALS['strSystemUpgradeBusy']            = "Aggiornamento in corso, attendere prego...";
$GLOBALS['strSystemRebuildingCache']        = "Ricostruzione cache in corso, attendere prego...";
$GLOBALS['strServiceUnavalable']            = "Il servizio non è disponibile al momento. È in corso l'aggiornamento del sistema.";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Scegli la sezione";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Impossibile salvare le modifiche nel file di configurazione";
$GLOBALS['strUnableToWritePrefs']                    = "Impossibile salvare le preferenze nel database";
$GLOBALS['strImageDirLockedDetected']	             = "IL server non può scrivere nella <b>Cartelle delle Immagini</b>. <br>Non è possibile procedere fino a che i permessi della cartella non sono cambiati o la cartelle non è stata creata.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Lista di controllo della configurazione";
$GLOBALS['strConfigurationSettings']                 = "Configurazione impostazioni";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Impostazioni amministratore";
$GLOBALS['strLoginCredentials']                      = "Credenziali di accesso";
$GLOBALS['strAdminUsername']                         = "Amministratore  Nome utente";
$GLOBALS['strAdminPassword']                         = "Amministratore  Password";
$GLOBALS['strInvalidUsername']                       = "Nome utente non valido";
$GLOBALS['strBasicInformation']                      = "Informazioni di base";
$GLOBALS['strAdminFullName']                         = "Nome completo dell'Amministratore";
$GLOBALS['strAdminEmail']                            = "Indirizzo email dell'Amministratore";
$GLOBALS['strAdministratorEmail']                    = "Indirizzo email dell'Amministratore";
$GLOBALS['strCompanyName']                           = "Società";
$GLOBALS['strAdminCheckUpdates']                     = "Controlla aggiornamenti disponibili";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Ad ogni login";
$GLOBALS['strAdminCheckDaily']                       = "Una volta al giorno";
$GLOBALS['strAdminCheckWeekly']                      = "Una volta alla settimana";
$GLOBALS['strAdminCheckMonthly']                     = "Una volta al mese";
$GLOBALS['strAdminCheckNever']                       = "Non controllare";
$GLOBALS['strNovice']                                = "Per sicurezza, le cancellazioni richiedono la conferma";
$GLOBALS['strUserlogEmail']                          = "Registra tutte le email in uscita";
$GLOBALS['strEnableDashboardSyncNotice']             = "Per favore abilita <a href='account-settings-update.php'>Controllo aggiornamenti</a> se vuoi usare la bacheca.";
$GLOBALS['strTimezone']                              = "Fuso orario";
$GLOBALS['strTimezoneEstimated']                     = "Fuso orario stimato";
$GLOBALS['strTimezoneGuessedValue']                  = "Il fuso orario del server non è impostato correttamente in PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Consultare la %DOCS% su come impostare questa variabile in PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "documentazione";
$GLOBALS['strAdminSettingsTitle']                    = "Crea un account di amministrazione";
$GLOBALS['strAdminSettingsIntro']                    = "Completa questa form per creare l'account di amministrazione del tuo server ad.";
$GLOBALS['strConfigSettingsIntro']                   = "Per favore controlla le seguenti impostazioni di configurazione ed eventualmente apporta le modifiche necessarie. In caso di dubbio lascia tranquillamente i valori predefiniti.";

$GLOBALS['strEnableAutoMaintenance']	             = "Esegue automaticamente la manutenzione durante la consegna se la manutenzione progeammata non è impostata.";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Impostazioni database";
$GLOBALS['strDatabaseServer']                        = "Impostazioni Globali del Database Server";
$GLOBALS['strDbLocal']                               = "Usa la connessione al socket locale";
$GLOBALS['strDbType']                                = "Tipo di Database";
$GLOBALS['strDbHost']                                = "Hostname del Database";
$GLOBALS['strDbSocket']                              = "Socket del database";
$GLOBALS['strDbPort']                                = "Numero Porta del Database";
$GLOBALS['strDbUser']                                = "Nome Utente del Database";
$GLOBALS['strDbPassword']                            = "Password del Database";
$GLOBALS['strDbName']                                = "Nome del Database";
$GLOBALS['strDbNameHint']                            = "La base dati sarà creata, se non esiste";
$GLOBALS['strDatabaseOptimalisations']               = "Ottimizzazioni Database";
$GLOBALS['strPersistentConnections']                 = "Utilizza connessioni persistenti";
$GLOBALS['strCantConnectToDb']                       = "Impossibile connettersi al database";
$GLOBALS['strDemoDataInstall']                       = "Carica dati dimostrativi";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Impostazioni Email";
$GLOBALS['strEmailAddresses']                        = "Indirizzo del mittente";
$GLOBALS['strEmailFromName']                         = "Nome del mittente";
$GLOBALS['strEmailFromAddress']                      = "Indirizzo del mittente";
$GLOBALS['strEmailFromCompany']                      = "Azienda del mittente";
$GLOBALS['strQmailPatch']                            = "Abilita patch per qmail";
$GLOBALS['strEnableQmailPatch']                      = "Abilita patch qmail";
$GLOBALS['strEmailHeader']                           = "Intestazione email";
$GLOBALS['strEmailLog']                              = "Log email";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Impostazioni Audit Trail";
$GLOBALS['strEnableAudit']                           = "Abilita Audit Trail";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Impostazioni Log di Debug";
$GLOBALS['strProduction']                            = "Server di produzione";
$GLOBALS['strEnableDebug']                           = "Abilita il log di debug";
$GLOBALS['strDebugMethodNames']                      = "Includi il nome dei metodi nei log di debug";
$GLOBALS['strDebugLineNumbers']                      = "Includi il numero di riga nei log di debug";
$GLOBALS['strDebugType']                             = "Tipo di log di debug";
$GLOBALS['strDebugTypeFile']                         = "File";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "Database SQL";
$GLOBALS['strDebugTypeSyslog']                       = "Log si sistema";
$GLOBALS['strDebugName']                             = "Nome del log di debug, Calendario, Tabella SQL<br /> o log di sistema";
$GLOBALS['strDebugPriority']                         = "Livello di priorità debug";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Maggiori informazioni";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Informazioni predefinite";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Meno informazioni";
$GLOBALS['strDebugIdent']                            = "Stringa di indentificazione debug";
$GLOBALS['strDebugUsername']                         = "mCal, Nome utente server SQL";
$GLOBALS['strDebugPassword']                         = "mCal, password server SQL";
$GLOBALS['strProductionSystem']                      = "Sistema di produzione";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Impostazioni di consegna";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Percorso Web";
$GLOBALS['strDeliveryPath']                          = "Percorso di consegna";
$GLOBALS['strImagePath']                             = "Percorso immagini";
$GLOBALS['strDeliverySslPath']                       = "Percorso di consegna SSL";
$GLOBALS['strImageSslPath']                          = "Percorso immagini SSL";
$GLOBALS['strImageStore']                            = "Cartella delle immagini";
$GLOBALS['strTypeWebSettings']                       = "Configurazione banner locali (Server web)";
$GLOBALS['strTypeWebMode']                           = "Tipo di memorizzazione";
$GLOBALS['strTypeWebModeLocal']                      = "Cartella locale";
$GLOBALS['strTypeDirError']                          = "Impossibile accedere alla cartella locale";
$GLOBALS['strTypeWebModeFtp']                        = "Modalità FTP (utilizza un server FTP esterno)";
$GLOBALS['strTypeWebDir']                            = "Cartella locale";
$GLOBALS['strTypeFTPHost']                           = "Hostname FTP";
$GLOBALS['strTypeFTPDirectory']                      = "Directory remota";
$GLOBALS['strTypeFTPUsername']                       = "Nome utente";
$GLOBALS['strTypeFTPPassword']                       = "Password";
$GLOBALS['strTypeFTPPassive']                        = "Usa connessione FTP passiva";
$GLOBALS['strTypeFTPErrorDir']                       = "La directory remota non esiste";
$GLOBALS['strTypeFTPErrorConnect']                   = "Impossibile connettersi al server FTP, nome utente o password non corretti";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "La tua installazione di php non supporta FTP";
$GLOBALS['strTypeFTPErrorUpload']                    = "Impossibile caricare i files sul server FTP, controlla che siano impostati i privilegi corretti nella directory host";
$GLOBALS['strTypeFTPErrorHost']                      = "L'hostname del server FTP non è corretto";
$GLOBALS['strDeliveryFilenames']                     = "Nomi dei file di consegna";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Click Inserzione";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Variabili di Conversione Inserzioni";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Contenuto Inserzione";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Conversione Inserzione";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Conversione Inserzione (Javascript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Frame Inserzione";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Immagine Inserzione";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Inserzione (Javascript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Layer Inserzione";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Log Inserzione";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Popup Inserzione";
$GLOBALS['strDeliveryFilenamesAdView']               = "Vista Inserzione";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "Invocazione XML RPC";
$GLOBALS['strDeliveryFilenamesLocal']                = "Invocazione Locale";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Controllo Front";
$GLOBALS['strDeliveryFilenamesFlash']                = "Inclusione Flash (può essere un URL assoluto)";
$GLOBALS['strDeliveryCaching']                       = "Impostazioni cache per la consegna dei Banner";
$GLOBALS['strDeliveryCacheLimit']                    = "Intervallo di tempo fra due aggiornamenti della cache (in secondi)";


$GLOBALS['strOrigin']                                = "Utilizza il server di origine remoto";
$GLOBALS['strOriginType']                            = "Tipo server di origine";
$GLOBALS['strOriginHost']                            = "Hostname del server di origine";
$GLOBALS['strOriginPort']                            = "Numero di porta per il database di origine";
$GLOBALS['strOriginScript']                          = "File di script per il database di origine";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Timeout origine (in secondi)";
$GLOBALS['strOriginProtocol']                        = "Protocollo del server di origine";

$GLOBALS['strDeliveryAcls']                          = "Valuta le limitazioni nella consegna dei banner durante la consegna";
$GLOBALS['strDeliveryObfuscate']                     = "Offusca il canale durante la consegna delle inserzioni";
$GLOBALS['strDeliveryExecPhp']                       = "Permetti di eseguire codice PHP all'interno delle inserzioni<br />(Attenzione: Potrebbe introdurre rischi di sicurezza)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Delimitatore tracciamento click di terze parti";
$GLOBALS['strGlobalDefaultBannerUrl']                = "URL dell'immagine banner predefinito globale";
$GLOBALS['strP3PSettings']                           = "Impostazioni Privacy P3P";
$GLOBALS['strUseP3P']                                = "Utilizza le policy P3P";
$GLOBALS['strP3PCompactPolicy']                      = "Versione compatta della policy P3P";
$GLOBALS['strP3PPolicyLocation']                     = "Indirizzo della policy P3P completa";

// General Settings
$GLOBALS['uiEnabled']                                = "Interfaccia utente abilitata";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Targeting geografico";
$GLOBALS['strGeotargeting']                          = "Targeting geografico";
$GLOBALS['strGeotargetingType']                      = "Tipo di Modulo Targeting Geografico";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Utilizza il database MaxMind GeoLiteCountry incluso";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "Posizione del database MaxMind GeoIP Country";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "Posizione del database MaxMind GeoIP Region Database";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "Posizione del database MaxMind GeoIP City";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "Posizione del database MaxMind GeoIP Area";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "Posizione del database MaxMind GeoIP DMA";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "Posizione del database MaxMind GeoIP Organisation";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "Posizione del database MaxMind GeoIP ISP";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "Posizione del database MaxMind GeoIP Netspeed";
$GLOBALS['strGeoShowUnavailable']                    = "Mostra le limitazioni sulla consegna geotargetizzata anche se le informazioni GeoIP non sono presenti";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "Il database MaxMind GeoIP Country non esiste nella posizione specificata";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "Il database MaxMind GeoIP Region Database non esiste nella posizione specificata";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "Il database MaxMind GeoIP City non esiste nella posizione specificata";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "Il database MaxMind GeoIP Area non esiste nella posizione specificata";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "Il database MaxMind GeoIP DMA non esiste nella posizione specificata";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "Il database MaxMind GeoIP Organisation non esiste nella posizione specificata";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "Il database MaxMind GeoIP ISP non esiste nella posizione specificata";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "Il database MaxMind GeoIP Netspeed non esiste nella posizione specificata";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventario";
$GLOBALS['strShowCampaignInfo']                      = "Mostra informazioni aggiuntive nella pagina <i>Campagna</i>";
$GLOBALS['strShowBannerInfo']                        = "Mostra informazioni aggiuntive nella pagina <i>Banner</i>";
$GLOBALS['strShowCampaignPreview']                   = "Mostra anteprima dei banner nella pagina <i>Banner</i>";
$GLOBALS['strShowBannerHTML']                        = "Mostra il banner invece del codice HTML nell'anteprima dei banner HTML";
$GLOBALS['strShowBannerPreview']                     = "Mostra anteprima nella parte superiore delle pagine relative ai banner";
$GLOBALS['strHideInactive']                          = "Nascondi inattivi";
$GLOBALS['strGUIShowMatchingBanners']                = "Mostra banner corrispondenti nella pagina <i>Banner collegati</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Mostra campagne nella pagina <i>Banner collegati</i>";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Assegna in modo predefinito le campagne a Anonymous";
$GLOBALS['strStatisticsDefaults']                    = "Statistiche";
$GLOBALS['strBeginOfWeek']                           = "Primo giorno della settimana";
$GLOBALS['strPercentageDecimals']                    = "Numero decimali nelle percentuali";
$GLOBALS['strWeightDefaults']                        = "Peso predefinito";
$GLOBALS['strDefaultBannerWeight']                   = "Peso predefinito del banner";
$GLOBALS['strDefaultCampaignWeight']                 = "Peso predefinito della campagna";
$GLOBALS['strDefaultBannerWErr']                     = "Il peso di default dei banner deve essere un intero positivo";
$GLOBALS['strDefaultCampaignWErr']                   = "Il peso di default delle campagne deve essere un intero positivo";
$GLOBALS['strConfirmationUI']                        = "Conferma nell`interfaccia utente";

$GLOBALS['strPublisherDefaults']                     = "Impostazioni predefinite del sito internet";
$GLOBALS['strModesOfPayment']                        = "Modalità di pagamento";
$GLOBALS['strCurrencies']                            = "Valute";
$GLOBALS['strCategories']                            = "Categorie";
$GLOBALS['strHelpFiles']                             = "File di aiuto";
$GLOBALS['strHasTaxID']                              = "Tax ID";
$GLOBALS['strDefaultApproved']                       = "Check box di approvazione";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "Regole di conversione predefinite";
$GLOBALS['strDefaultConversionType']                 = "Regole di conversione predefinite";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Tipi di invocazione consentiti";
$GLOBALS['strInvocationDefaults']                    = "Impostazioni predefinite per l'invocazione";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Abilita in modo predefinito il tracciamento dei click di terze parti";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Impostazioni per la consegna dei Banner";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Impostazioni Log dei Banner";
$GLOBALS['strLogAdRequests']                         = "Traccia una richiesta ogni volta che un banner viene richiesto";
$GLOBALS['strLogAdImpressions']                      = "Traccia un'impressione ogni volta che un banner viene visto";
$GLOBALS['strLogAdClicks']                           = "Traccia un click ogni vota che il banner viene cliccato";
$GLOBALS['strLogTrackerImpressions']                 = "Traccia una impressione del tracker ogni volta che il tracker viene visualizzato";
$GLOBALS['strReverseLookup']                         = "Cerca di determinare il nome di host del visitatore se non esplicito";
$GLOBALS['strProxyLookup']                           = "Cerca di determinare l'indirizzo IP reale del visitatore se si connette tramite un proxy";
$GLOBALS['strPreventLogging']                        = "Blocca impostazioni Log dei Banner";
$GLOBALS['strIgnoreHosts']                           = "Non tracciare le statistiche di visualizzazione per gli IP e gli hostname specificati sotto";
$GLOBALS['strIgnoreUserAgents']                      = "<strong>Non</strong> loggare le statistiche dai client con una qualsiasi delle seguenti stringhe nel campo user-agent (una per linea)";
$GLOBALS['strEnforceUserAgents']                     = "Logga <strong>soltanto</strong> le statistiche dai client con una qualsiasi delle seguenti stringhe nel campo user-agent (una per linea)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Impostazioni di memorizzazione banner";

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Impostazioni di manutenzione";
$GLOBALS['strConversionTracking']                    = "Impostazioni del monitoraggio conversioni";
$GLOBALS['strEnableConversionTracking']              = "Abilita il monitoraggio conversioni";
$GLOBALS['strCsvImport']                             = "Permetti il caricamento di conversioni off line";
$GLOBALS['strBlockAdViews']                          = "Non conteggiare l'impressione se il visitatore ha visto la stessa inserzione nella stessa zona entro il tempo specificato (in secondi)";
$GLOBALS['strBlockAdViewsError']                     = "Il valore dei blocchi di impressioni deve essere un intero non negativo";
$GLOBALS['strBlockAdClicks']                         = "Non conteggiare il click se il visitatore ha cliccato la stessa inserzione nella stessa zona entro il tempo specificato (in secondi)";
$GLOBALS['strBlockAdClicksError']                    = "Il valore dei blocchi di click deve essere un intero non negativo";
$GLOBALS['strMaintenanceOI']                         = "Intervallo delle operazioni di manutenzione (in minuti)";
$GLOBALS['strMaintenanceOIError']                    = "L'intervallo delle operazioni non è valido - consulta la documentazione per conoscere i valori validi";
$GLOBALS['strPrioritySettings']                      = "Impostazioni Priorità";
$GLOBALS['strPriorityInstantUpdate']                 = "Aggiorna immediatamente le priorità a seguito di un cambiamento effettuato da interfaccia grafica";
$GLOBALS['strDefaultImpConWindow']                   = "Finestra di connessione Ad Impression predefinita (secondi)";
$GLOBALS['strDefaultImpConWindowError']              = "Se impostato, il valore predefinito della Finestra di connessione Ad Impression deve essere un intero positivo";
$GLOBALS['strDefaultCliConWindow']                   = "Valore predefinito della Finestra di connessione Ad Click (in secondi)";
$GLOBALS['strDefaultCliConWindowError']              = "Se impostato, il valore predefinito della Finestra di connessione Ad Click deve essere un intero positivo";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Invia un avviso quando il numero di impressioni rimaste sono inferiori a";
$GLOBALS['strWarnLimitErr']                          = "Il limite di avviso deve essere un intero positivo";
$GLOBALS['strWarnLimitDays']                         = "Invia un messaggio di avviso quando i giorni rimasti sono inferiori al numero specificato";
$GLOBALS['strWarnLimitDaysErr']                      = "Il numero di giorni deve essere un intero positivo";
$GLOBALS['strAllowEmail']                            = "Permettere l`invio globale di email";
$GLOBALS['strEmailAddressFrom']                      = "Indirizzo di posta elettronica da utilizzare come mittente per i report";
$GLOBALS['strEmailAddressName']                      = "Nome di persona o della compagnia da utilizzare come firma in calce all'email";
$GLOBALS['strWarnAdmin']                             = "Invia un messaggio di avviso all'amministratore quando una campagna sta per scadere";
$GLOBALS['strWarnClient']                            = "Invia un messaggio di avviso all'inserzionista quando una campagna sta per scadere";
$GLOBALS['strWarnAgency']                            = "Invia un messaggio di avviso all'agenzia quando una campagna sta per scadere";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Configurazione interfaccia utente";
$GLOBALS['strGeneralSettings']                       = "Impostazioni generali";
$GLOBALS['strAppName']                               = "Intestazione programma";
$GLOBALS['strMyHeader']                              = "File da includere come intestazione";
$GLOBALS['strMyHeaderError']                         = "Il file da includere come intestazione non è stato trovato nel percorso specificato";
$GLOBALS['strMyFooter']                              = "File da includere a pié di pagina";
$GLOBALS['strMyFooterError']                         = "Il file da includere a pié di pagina non è stato trovato nel percorso specificato";
$GLOBALS['strDefaultTrackerStatus']                  = "Stato predefinito del tracker";
$GLOBALS['strDefaultTrackerType']                    = "Tipo di tracker predefinito";
$GLOBALS['strSSLSettings']                           = "Impostazioni SSL";
$GLOBALS['requireSSL']                               = "Forza accesso SSL nell`interfaccia utente";
$GLOBALS['sslPort']                                  = "Porta SSL usata dal Web Server";
$GLOBALS['strDashboardSettings']                     = "Impostazioni Bacheca";

$GLOBALS['strMyLogo']                                = "Nome del file per logo personalizzato";
$GLOBALS['strMyLogoError']                           = "Il file per il logo non esiste nella cartella admin/images";
$GLOBALS['strGuiHeaderForegroundColor']              = "Colore in primo piano dell'intestazione";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Colore di sfondo dell'intestazione";
$GLOBALS['strGuiActiveTabColor']                     = "Colore del tab attivo";
$GLOBALS['strGuiHeaderTextColor']                    = "Colore del testo nell'intestazione";
$GLOBALS['strColorError']                            = "Inserisci i colori in un formato RGB, come '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Utilizza la compressione GZIP per i contenuti";
$GLOBALS['strClientInterface']                       = "Interfaccia inserzionista";
$GLOBALS['strReportsInterface']                      = "Interfaccia dei Report";
$GLOBALS['strClientWelcomeEnabled']                  = "Attiva messaggio di benvenuto per l'inserzionista";
$GLOBALS['strClientWelcomeText']                     = "Messaggio di benvenuto<br />(tag HTML consentite)";

$GLOBALS['strPublisherInterface']                    = "Interfaccia sito";
$GLOBALS['strPublisherAgreementEnabled']             = "Abilita il controllo del login per i siti che non hanno accettato i termini e le condizioni d'uso";
$GLOBALS['strPublisherAgreementText']                = "Testo per il login (tag HTML consentiti)";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "Sperimentale";
$GLOBALS['strKeywordRetrieval']             = "Abilita l'uso di parole chiave";
$GLOBALS['strBannerRetrieval']              = "Metodo di scelta del banner";
$GLOBALS['strRetrieveRandom']               = "Casuale (default)";
$GLOBALS['strRetrieveNormalSeq']            = "Sequenziale normale";
$GLOBALS['strWeightSeq']                    = "Sequenziale pesata";
$GLOBALS['strFullSeq']                      = "Sequenziale completa";
$GLOBALS['strUseConditionalKeys']           = "Abilita operatori logici nella selezione diretta";
$GLOBALS['strUseMultipleKeys']              = "Abilita parole chiave multiple nella selezione diretta";

$GLOBALS['strTableBorderColor']             = "Colore del bordo delle tabelle";
$GLOBALS['strTableBackColor']               = "Colore di sfondo delle tabelle";
$GLOBALS['strTableBackColorAlt']            = "Colore di sfondo delle tabelle (Alternativo)";
$GLOBALS['strMainBackColor']                = "Colore di sfondo delle pagine";
$GLOBALS['strOverrideGD']                   = "Utilizza formato GD personalizzato";
$GLOBALS['strTimeZone']                     = "Fuso orario";

?>
