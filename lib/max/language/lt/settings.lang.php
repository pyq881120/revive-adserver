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
$GLOBALS['strInstall']                      = "Įdiegti";
$GLOBALS['strChooseInstallLanguage']        = "Choose language for the installation procedure";
$GLOBALS['strLanguageSelection']            = "Kalbos pasirinkimas";
$GLOBALS['strDatabaseSettings']             = "Duomenų bazės nustatymai";
$GLOBALS['strAdminSettings']                = "Administratoriaus nustatymai";
$GLOBALS['strAdminAccount']                 = "Administratoriaus sąskaita";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Papildomi nustatymai";
$GLOBALS['strOtherSettings']                = "Other settings";
$GLOBALS['strSpecifySyncSettings']          = "Sinchronizacijos nustatymai";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strWarning']                      = "Perspėjimas";
$GLOBALS['strFatalError']                   = "A fatal error occurred";
$GLOBALS['strUpdateError']                  = "An error occurred while updating";
$GLOBALS['strBtnContinue']                  = "Tęsti »";
$GLOBALS['strBtnRecover']                   = "Atnaujinti »";
$GLOBALS['strBtnStartAgain']                   = "Pradėti iš naujo atnaujinimų siuntimą »";
$GLOBALS['strBtnGoBack']                    = "« Grįžti";
$GLOBALS['strBtnAgree']                     = "Aš sutinku »";
$GLOBALS['strBtnDontAgree']                 = "« Aš nesutinku";
$GLOBALS['strBtnRetry']                     = "Bandyti dar kartą";
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
$GLOBALS['strWarningRegisterArgcArv']       = " PHP registracijos konfigūracija _argc_argv turi būti įjungta, tam kad būtų paleistas aptarnavimo komanda.";
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
$GLOBALS['strTablesPrefix']                 = "Lentelių pavadinimų priešdelis";
$GLOBALS['strTablesType']                   = "Lentelės tipas";


$GLOBALS['strRecoveryRequiredTitle']    = "Jūsų pastarasis bandymas buvo su klaida";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Įspėjimas: Atnaujinimo failas vis dar yra Jūsų var aplanke. Mes negalime pašalinti šio failo dėl tam tikrų prieigos draudimų. Prašome ištrinkite šį failą patys.";
$GLOBALS['strRemoveUpgradeFile']               = "Jūs privalote pašalinti UPGRADE failą iš var aplanko.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Jūsų sistema buvo sėkmingai atnaujinta. Rodomi langai padės Jums atnaujinti naujo serverio konfigūraciją. ";
$GLOBALS['strErrorOccured']                 = "The following error occurred:";
$GLOBALS['strErrorInstallDatabase']         = "The database structure could not be created.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "It was not possible to open a connection to the database.";

$GLOBALS['strErrorWritePermissions']        = "Aptiktos failo leidimų klaidos, jos turibūti ištaisytos prieš tęsiant. <br/> Tam kad pataisytumėte klaidas Linux sistemoje, pabandykite įvesti sekančias komandas:";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "Rasta failo leidimo klaidų ir jos turi būti pataisytos prieš tęsiant. ";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "Administartoriaus sąsaja su URL";
$GLOBALS['strDeliveryUrlPrefix']            = "Pristatymo variklio URL";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Pristatymo variklio URL (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "Vaizdų išsaugojimo URL";
$GLOBALS['strImagesUrlPrefixSSL']           = "Vaizdų išsaugojimo URL (SSL)";

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
$GLOBALS['strChooseSection']                         = "Pasirinkti dalį";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Neįmano įrašyti pakeitimų į šiuos konfigūracijos failus";
$GLOBALS['strUnableToWritePrefs']                    = "Neįmanoma nustatyti pirmenybių duomenų bazėje";
$GLOBALS['strImageDirLockedDetected']	             = "Pateiktas <b>Paveikslėlių aplankas</b> nėra įrašomas per serverį. <br> Jūs negalite tęsti kol nepakeitėte aplankų galimų leidimų arba nesukūrėte naujo aplanko.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Konfigūracijos patikrinimo sąrašas";
$GLOBALS['strConfigurationSettings']                 = "Konfigūracijos nustatymai";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Administratoriaus nustatymai";
$GLOBALS['strAdministratorAccount']                  = "The System Administrator Account";
$GLOBALS['strLoginCredentials']                      = "Prisijungimo Credentials";
$GLOBALS['strAdminUsername']                         = "Administratoriaus vartotojo avrdas";
$GLOBALS['strAdminPassword']                         = "Administratoriaus slaptažodis";
$GLOBALS['strInvalidUsername']                       = "Netinkamas vartotojo vardas";
$GLOBALS['strBasicInformation']                      = "Pradinė informacija";
$GLOBALS['strAdminFullName']                         = "Administratoriaus pilnas vardas";
$GLOBALS['strAdminEmail']                            = "Administratoriaus el. pašto adresas";
$GLOBALS['strAdministratorEmail']                    = "Administratoriaus el.pašto adresas";
$GLOBALS['strCompanyName']                           = "Įmonės pavadinimas";
$GLOBALS['strAdminCheckUpdates']                     = "Automatically check for product updates and security alerts (Recommended).";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Every Login";
$GLOBALS['strAdminCheckDaily']                       = "Daily";
$GLOBALS['strAdminCheckWeekly']                      = "Weekly";
$GLOBALS['strAdminCheckMonthly']                     = "Monthly";
$GLOBALS['strAdminCheckNever']                       = "Never";
$GLOBALS['strNovice']                                = "Ištrinimo veiksmai reikalaujami dėl saugumo tikslų";
$GLOBALS['strUserlogEmail']                          = "Įrašyti visas išsiunčiamas elektroninio pašto žinutes";
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Please enable <a href='account-settings-update.php'>check for updates</a> to use the dashboard.";
$GLOBALS['strTimezone']                              = "Laiko zona";
$GLOBALS['strTimezoneEstimated']                     = "Apytikslė laiko zona";
$GLOBALS['strTimezoneGuessedValue']                  = "Serverio laikas nustatytas neteisingai PHP ";
$GLOBALS['strTimezoneSeeDocs']                       = "Prašome pažiūrėti %DOCS% apie nustatant šiuos kintamuosius, skirtus PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "Dokumentacija";
$GLOBALS['strAdminSettingsTitle']                    = "Sukurkite administratoriaus sąskaita";
$GLOBALS['strAdminSettingsIntro']                    = "Prašome užpildyti šią formą jei pageidaujate sukurti ad serverio administratoriaus sąskaitą.";
$GLOBALS['strConfigSettingsIntro']                   = "Please check the configuration settings below and make any required changes before proceeding. If unsure, leave the default values.";

$GLOBALS['strEnableAutoMaintenance']	             = "Automatiškai atlikite aptarnavimo darbus per pristatymą jei nėra pagal grafiką sudarytų aptarvimų darbų sąrašo";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Duomenų bazės nustatymai";
$GLOBALS['strDatabaseServer']                        = "Pasauliniai duomenų bazės serverio nustatymai";
$GLOBALS['strDbLocal']                               = "Naudoti vietinę socket jungtį";
$GLOBALS['strDbType']                                = "Duomenų bazės tipas";
$GLOBALS['strDbHost']                                = "Duomenų bazės Hostname";
$GLOBALS['strDbSocket']                              = "Duomenų bazės Socket";
$GLOBALS['strDbPort']                                = "Duomenų bazės jungties numeris";
$GLOBALS['strDbUser']                                = "Duomenų bazės vartotojo vardas";
$GLOBALS['strDbPassword']                            = "Duomenų bazės slaptažodis";
$GLOBALS['strDbName']                                = "Duomenų bazės pavadinimas";
$GLOBALS['strDbNameHint']                            = "Database will be created if it does not exist";
$GLOBALS['strDatabaseOptimalisations']               = "Duomenų bazės optimizavimo nustatymai";
$GLOBALS['strPersistentConnections']                 = "Naudokite nuolaitines jungtis";
$GLOBALS['strCantConnectToDb']                       = "Neiįmanoma susjungti su duomenų baze";
$GLOBALS['strCantConnectToDbDelivery']               = 'Can\'t Connect to Database for Delivery';
$GLOBALS['strDemoDataInstall']                       = "Įdiekite demo duomenis ";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "El. pašto nustatymai";
$GLOBALS['strEmailAddresses']                        = "El. paštas  el. pašto adresas";
$GLOBALS['strEmailFromName']                         = "Email 'From' Name";
$GLOBALS['strEmailFromAddress']                      = "El. paštas  el. pašto adresas";
$GLOBALS['strEmailFromCompany']                      = "Email 'From' Company";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "qmail patch";
$GLOBALS['strEnableQmailPatch']                      = "Įgalinti pašto taisymą";
$GLOBALS['strEmailHeader']                           = "El. pašto antraštė";
$GLOBALS['strEmailLog']                              = "El. pašto registras";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Audit trail nustatymai";
$GLOBALS['strEnableAudit']                           = "Įgalinti Audit trail";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Suderinti prisijungimo nustatymus";
$GLOBALS['strProduction']                            = "Produkcijos serveris";
$GLOBALS['strEnableDebug']                           = "Įgalinti prisijungimo suderinimą";
$GLOBALS['strDebugMethodNames']                      = "Įterpti metodinius vardus suderinant prisijungimą";
$GLOBALS['strDebugLineNumbers']                      = "įterpti linijų numerius derinant prisijungimą";
$GLOBALS['strDebugType']                             = "Suderinti prisijungimo tipą";
$GLOBALS['strDebugTypeFile']                         = "Failas";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "SQL duomenų bazė";
$GLOBALS['strDebugTypeSyslog']                       = "Sistemos registras";
$GLOBALS['strDebugName']                             = "Suderinti Prisijungimo vardą, Kalendarių, SQL lentelę,<br />arba Syslog Facility";
$GLOBALS['strDebugPriority']                         = "Suderinti pirmenybinį lygį ";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Dauguma informacijos";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Pagrindinė informacija";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_PRIMINIMAS";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_ĮSPĖJIMAS";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_KLAIDA";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_PAVOJUS";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Mažiausiai informacijos";
$GLOBALS['strDebugIdent']                            = "Suderinti identifikacijos grandinę";
$GLOBALS['strDebugUsername']                         = "mCal, SQL serverio vartotojo vardas";
$GLOBALS['strDebugPassword']                         = "mCal, SQL serverio slaptažodis";
$GLOBALS['strProductionSystem']                      = "Production System";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Pristatymo nustatymai";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Web kelias";
$GLOBALS['strDeliveryPath']                          = "Pristatymo kelias";
$GLOBALS['strImagePath']                             = "Vaizdų kelias";
$GLOBALS['strDeliverySslPath']                       = "SSL pristatymo kelias";
$GLOBALS['strImageSslPath']                          = "SSL vaizdų kelias";
$GLOBALS['strImageStore']                            = "Vaizdų aplankai";
$GLOBALS['strTypeWebSettings']                       = "Web serverių ir vietinių banerių išsaugojimo nustatymai";
$GLOBALS['strTypeWebMode']                           = "Išsaugojimo metodas";
$GLOBALS['strTypeWebModeLocal']                      = "Vietinis katalogas";
$GLOBALS['strTypeDirError']                          = "Vietinis katalogas negali būti įrašytas per we serverį";
$GLOBALS['strTypeWebModeFtp']                        = "Išorinis FTP serveris";
$GLOBALS['strTypeWebDir']                            = "Vietinis katalogas";
$GLOBALS['strTypeFTPHost']                           = "FTP Hostingas";
$GLOBALS['strTypeFTPDirectory']                      = "Hostingo aplankas";
$GLOBALS['strTypeFTPUsername']                       = "Prisijungti";
$GLOBALS['strTypeFTPPassword']                       = "Slaptažodis";
$GLOBALS['strTypeFTPPassive']                        = "Naudoti pasyvų FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "FTP hostingo aplankas neegiztuoja";
$GLOBALS['strTypeFTPErrorConnect']                   = "Neįmanoma prisijungti prie FTP serverio, prisijungimo vardas arba slaptažodis neteisingi";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Jūsų PHP instaliacija nepalaiko Jūsų FTP";
$GLOBALS['strTypeFTPErrorUpload']                    = "Could not upload file to the FTP Server, check set proper rights to Host Directory";
$GLOBALS['strTypeFTPErrorHost']                      = "FTP hostingas neteisingas";
$GLOBALS['strDeliveryFilenames']                     = "Pristatymo failų vardai";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Ad paspaudimas";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Ad konvertavimo kintamuosius";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Ad turinys";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Ad konvertacija";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Ad konvertacija (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Ad rėmeliai";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Ad paveikslėlis";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Ad (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Ad lygmuo";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Ad registras";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Ad Popup";
$GLOBALS['strDeliveryFilenamesAdView']               = "Ad rodymas";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPC kreipimasis";
$GLOBALS['strDeliveryFilenamesLocal']                = "Vietinis kreipimasis";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Priekinis tikrintojas";
$GLOBALS['strDeliveryFilenamesFlash']                = "Pridėti Flash (gali būti pilnas URL)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Banerio pristatymo kelio nustatymai";
$GLOBALS['strDeliveryCacheLimit']                    = "Laikas ";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "Naudoti nuotolini ";
$GLOBALS['strOriginType']                            = "Pirminis serverio tipas";
$GLOBALS['strOriginHost']                            = "Pavadinimas pirminiam serveriui";
$GLOBALS['strOriginPort']                            = "Stoties numeris pirminiai duomenų bazei";
$GLOBALS['strOriginScript']                          = "Rašto failas, skirtas originaliai duomenų bazei";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Minutinės pertraukos atsiradimas (sekundėmis)";
$GLOBALS['strOriginProtocol']                        = "Serverio protokolo atsiradimas";

$GLOBALS['strDeliveryAcls']                          = "Nustatyti banerio pristatymo limitus per patį pristatymą";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "Užtamsyti kanalą, kai pridedamas pristatymas";
$GLOBALS['strDeliveryExecPhp']                       = "Leisti PHP kodui, kai pridedamas būti pašalintam<br />(Įspėjimas: Security risk)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Trečiosios šalies paspaudimų seklio delimiter";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Global default Banner Image URL";
$GLOBALS['strP3PSettings']                           = "P3P privatumo politika";
$GLOBALS['strUseP3P']                                = "Naudoti P3P politiką";
$GLOBALS['strP3PCompactPolicy']                      = "P3P susitarimo politika";
$GLOBALS['strP3PPolicyLocation']                     = "P3P vietos politika";

// General Settings
$GLOBALS['generalSettings']                          = "Global General System Settings";
$GLOBALS['uiEnabled']                                = "User Interface Enabled";
$GLOBALS['defaultLanguage']                          = "Default System Language<br />(Each user can select their own language)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting nustatymai";
$GLOBALS['strGeotargeting']                          = "Geotargeting nustatymai";
$GLOBALS['strGeotargetingType']                      = "Geotargeting modulio tipas";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Naudokite duomenų bazės MaxMind GeoLiteCountry paketą";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP šalies duomenų bazės vieta";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP regiono duomenų bazės vieta";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP miesto duomenų bazės vieta";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP ploto duomenų bazės vieta";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP DMA duomenų bazės vieta";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP organizacijos duomenų bazės vieta";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP duomenų bazės vieta ";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP naršyklės duomenų bazės vieta ";
$GLOBALS['strGeoShowUnavailable']                    = "Rodyti geotargeting pristatymo limitus net jei GeoIP duomenys negalimi";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "MaxMind GeoIP šalies duomenų bazė neegzistuoja nurodytoje vietoje";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "MaxMind GeoIP regiono duomenų bazė neegzistuoja nurodytoje vietoje";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "MaxMind GeoIP miesto duomenų bazė neegzistuoja nurodytoje vietoje";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "MaxMind GeoIP ploto duomenų bazė neegzistuoja nurodytoje vietoje";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "MaxMind GeoIP DMA duomenų bazė neegzistuoja nurodytoje vietoje";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "MaxMind GeoIP organizacijos duomenų bazė neegzistuoja nurodytoje vietoje";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "MaxMind GeoIP ISP duomenų bazė neegzistuoja nurodytoje vietoje";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "MaxMind GeoIP Netspeed duomenų bazė neegzistuoja nurodytoje vietoje";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventorius";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "Show extra campaign info on <i>Campaigns</i> page";
$GLOBALS['strShowBannerInfo']                        = "Show extra banner info on <i>Banners</i> page";
$GLOBALS['strShowCampaignPreview']                   = "Show preview of all banners on <i>Banners</i> page";
$GLOBALS['strShowBannerHTML']                        = "Rodyti banerį vietoj HTML kodo per HTML banerio peržiūrą";
$GLOBALS['strShowBannerPreview']                     = "Rodyti banerio peržiūrą, puslapių viršuje, tuose puslapiuose, kurie naudojami baneriams";
$GLOBALS['strHideInactive']                          = "Hide inactive items from all overview pages";
$GLOBALS['strGUIShowMatchingBanners']                = "rodyti sutampančius banerius <i> Susieti baneriai</i> puspaliuose";
$GLOBALS['strGUIShowParentCampaigns']                = "Rodyti pirminias kampanijas per <i> Susieti  baneriai </i> puslapius";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Pagrindinės kampanijos, skirtos anonimams";
$GLOBALS['strStatisticsDefaults']                    = "Statistika";
$GLOBALS['strBeginOfWeek']                           = "Savaitės pradžia";
$GLOBALS['strPercentageDecimals']                    = "Dešimtainė procento dalis";
$GLOBALS['strWeightDefaults']                        = "Pagrindinis svoris";
$GLOBALS['strDefaultBannerWeight']                   = "Pagrindinis banerio svoris";
$GLOBALS['strDefaultCampaignWeight']                 = "Pagrindinis kampanijos svoris";
$GLOBALS['strDefaultBannerWErr']                     = "Default banner weight should be a positive integer";
$GLOBALS['strDefaultCampaignWErr']                   = "Default campaign weight should be a positive integer";
$GLOBALS['strConfirmationUI']                        = "Vartotojo sąsajos patvirtinimas";

$GLOBALS['strPublisherDefaults']                     = "Intertinio puslapio pirminiai nustatymai";
$GLOBALS['strModesOfPayment']                        = "Apmokėjimo modeliai";
$GLOBALS['strCurrencies']                            = "Valiutos";
$GLOBALS['strCategories']                            = "Kategorijos";
$GLOBALS['strHelpFiles']                             = "pagalbos failai";
$GLOBALS['strHasTaxID']                              = "Mokesčių ID";
$GLOBALS['strDefaultApproved']                       = "Patvirtinta patikrinimo dėžutė";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Choose Advertiser";
$GLOBALS['strChooseCampaign']                        = "Choose Campaign";
$GLOBALS['strChooseCampaignBanner']                  = "Choose Banner";
$GLOBALS['strChooseTracker']                         = "Choose Tracker";
$GLOBALS['strDefaultConversionStatus']               = "Pagrindininės konvertavimo taisyklės";
$GLOBALS['strDefaultConversionType']                 = "Pagrindininės konvertavimo taisyklės";
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
$GLOBALS['strAllowedInvocationTypes']                = "Leistini kreipimosi tipai";
$GLOBALS['strInvocationDefaults']                    = "Pasveikinimų pagrindinės frazės";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Įgalinti trečiosios šalies paspaudimų sekimą per pagrindinius nustatymus";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banerio pristatymo kelio nustatymai";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Blokuoti  banerio prisijungimo nustatymus";
$GLOBALS['strLogAdRequests']                         = "Įregistruoti prašymą kiekvieną kartą kai prašomas baneris";
$GLOBALS['strLogAdImpressions']                      = "Įregistruoti įspūdį kiekvieną kartą kai baneris peržiūrimas";
$GLOBALS['strLogAdClicks']                           = "Įregistruoti paspaudimus kiekvieną kartą kai vartotojas paspaudžia ant banerio";
$GLOBALS['strLogTrackerImpressions']                 = "Įregistruoti agento įpūdį kiekvieną kartą kai agento ženklas yra peržiūrimas";
$GLOBALS['strReverseLookup']                         = "Pakeisti peržiūrinėjimo pavadinimus kai jie nepateikiami";
$GLOBALS['strProxyLookup']                           = "Bandyti nustatyti tikrąjį IP adresą vartotojų besijungiančių per proxy serverį";
$GLOBALS['strPreventLogging']                        = "Blokuoti  banerio prisijungimo nustatymus";
$GLOBALS['strIgnoreHosts']                           = "Neišsaugokite jokios žemiau nurodytų vartotojų statistikos pagal nurodytus IP adresus arba pavadinimus";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Neregistruokite</b> jokios statistikos iš klientų, kurie naudoja bent vieną iš šių strings savo user-agent dalyje (vienas per liniją)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Registruokite</b> tik tą statistiką iš klientų, kurie naudoja strings savo user-agent dalyje (vienas per liniją)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Banerio išsaugojimo nustatymai";

// Campaign ECPM settings
$GLOBALS['strEnableECPM']                            = "Use eCPM optimized priorities instead of remnant-weighted priorities";
$GLOBALS['strEnableContractECPM']                    = "Use eCPM optimized priorities instead of standard contract priorities";
$GLOBALS['strEnableECPMfromRemnant']                 = "(If you enable this feature all your remnant campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strEnableECPMfromECPM']                    = "(If you disable this feature some of your active eCPM campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strInactivatedCampaigns']                  = "List of campaigns which became inactive due to the changes in preferences:";

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Techninio aptarnavimo nustatymai";
$GLOBALS['strConversionTracking']                    = "Agento konvertacijos nustatymai";
$GLOBALS['strEnableConversionTracking']              = "Įgalinti agento konvertaciją";
$GLOBALS['strCsvImport']                             = "Leisti užkrauti offline konvertaciją";
$GLOBALS['strBlockAdViews']                          = "Neskaičiuokite pridėtų įspūdžių jei peržiūrėtojas matė tą pačią zonos porą per tam tikrą laiką (sekundės)";
$GLOBALS['strBlockAdViewsError']                     = "Įspūdžio blokuojama reikšmė turi būti teigiamas sveikasis skaičius";
$GLOBALS['strBlockAdClicks']                         = "Neskaičiuoti paspaudimų jei peržiūrėtojas paspaudė ant tos pačios zonos poros per tam tikrą laiką (sekundės)";
$GLOBALS['strBlockAdClicksError']                    = "Paspaudimų skaičiaus pridėjimo blokuojama reikšmė turi būti teigiamas sveikasis skaičius";
$GLOBALS['strMaintenanceOI']                         = "Techninio aptarnavimo intervalas (minutės)";
$GLOBALS['strMaintenanceOIError']                    = "Techninio aptarnavimo intervalas negaliojantis - žiūrėkite dokumentaciją tinkamoms reikšmėms";
$GLOBALS['strPrioritySettings']                      = "Pirmenybės nustatymai";
$GLOBALS['strPriorityInstantUpdate']                 = "Atnaujinti reklamos pirmenybės iš karto kai tik atliekami bet kokie UI pasikeitimai";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Pagrindinis įspūdžių/nuomonių prisijungimo langas (sekundės)";
$GLOBALS['strDefaultImpConWindowError']              = "Jei nustatyta pagrindinis įspūdžių prisijungimo langas turi būti teigiamas sveikasis skaičius ";
$GLOBALS['strDefaultCliConWindow']                   = "Pagrindinis Ad paspaudimų prisijungimo langas (sekundėmis)";
$GLOBALS['strDefaultCliConWindowError']              = "Jei nustatyta pagrindinis įspūdžių prisijungimo langas turi būti teigiamas sveikasis skaičius ";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Išsiųsti įspėjimą kai įspūdžių/nuomonių skaičius yra mažesnis nei nurodyta čia";
$GLOBALS['strWarnLimitErr']                          = "Įspėjimo limitas turi būti teigiamas sveikasis skaičius";
$GLOBALS['strWarnLimitDays']                         = "Siųsti įspėjimą kai likę dienų mažiau nei nurodyta čia";
$GLOBALS['strWarnLimitDaysErr']                      = "Įspėjimo dienų skaičius turi būti teigiamas skaičius";
$GLOBALS['strAllowEmail']                            = "Leisti siųsti email pasauliniu lygiu";
$GLOBALS['strEmailAddressFrom']                      = "El. pašto adresas siųsti ataskaitas IŠ";
$GLOBALS['strEmailAddressName']                      = "Įmonės ar asmeninis vardas, kurį galima naudoti kaip el. laiškų paraštę";
$GLOBALS['strWarnAdmin']                             = "Išsiųsti įspėjimą administratoriui kiekvieną kartą kai kampanijos galiojimo laikas beveik pasibaigė";
$GLOBALS['strWarnClient']                            = "Išsiųsti įspėjimą reklamuotojui kiekvieną kartą kai kampanijos galiojimo laikas beveik pasibaigė";
$GLOBALS['strWarnAgency']                            = "Išsiųsti įspėjimą agentūrai kiekvieną kartą kai kampanijos galiojimo laikas beveik pasibaigė";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Vartotojo sąsajų nustatymai ";
$GLOBALS['strGeneralSettings']                       = "Bendri nustatymai";
$GLOBALS['strAppName']                               = "Prašymo pavadinimas";
$GLOBALS['strMyHeader']                              = "Antraštės failo vieta";
$GLOBALS['strMyHeaderError']                         = "Antraštės failas neegzistuoja toje vietoje, kurią nurodėte";
$GLOBALS['strMyFooter']                              = "Paraštės  failo vieta";
$GLOBALS['strMyFooterError']                         = "Paraštės failas neegzistuoja toje vietoje, kurią nurodėte";
$GLOBALS['strDefaultTrackerStatus']                  = "Pagrindinis agento statusas";
$GLOBALS['strDefaultTrackerType']                    = "Pagrindinis agento tipas";
$GLOBALS['strSSLSettings']                           = "SSL nustatymai";
$GLOBALS['requireSSL']                               = "Leisti SSL priėjimą vartotojo sąsajoje";
$GLOBALS['sslPort']                                  = "SSL sotis naudojama internetinio serverio";
$GLOBALS['strDashboardSettings']                     = "Dashboard Settings";

$GLOBALS['strMyLogo']                                = "Įprasto logo failo vardas";
$GLOBALS['strMyLogoError']                           = "Logo failas administratoriaus/vaizdų aplanke neegzistuoja";
$GLOBALS['strGuiHeaderForegroundColor']              = "Antraštės pirminė spalva";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Antraštės fono spalva";
$GLOBALS['strGuiActiveTabColor']                     = "Aktyvios pozicijos spalva";
$GLOBALS['strGuiHeaderTextColor']                    = "Teksto antraštėje spalva";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Prašome įvesti spalvas RGB formatu, pvz '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Naudokite GZIP turinio suspaudimo programą";
$GLOBALS['strClientInterface']                       = "Reklamuotojo sandūra";
$GLOBALS['strReportsInterface']                      = "Sąssajų ataskaitos";
$GLOBALS['strClientWelcomeEnabled']                  = "Įgalinti reklamuotojo pasveikinimo žinutę";
$GLOBALS['strClientWelcomeText']                     = "Pasveikinimo tekstas<br />(HTML Tags leistini)";

$GLOBALS['strPublisherInterface']                    = "Internetinių puslapių sąsajos";
$GLOBALS['strPublisherAgreementEnabled']             = "Įgalinti prisijungimą prie internetinių puslapių, kurie sutiko su taisyklėmis ir nuostatomis ";
$GLOBALS['strPublisherAgreementText']                = "Prisijungimo tekstas (HTML tags leistini)";

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
