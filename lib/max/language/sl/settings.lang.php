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
$GLOBALS['strInstall']                      = "Namesti";
$GLOBALS['strLanguageSelection']            = "Izbira jezika";
$GLOBALS['strDatabaseSettings']             = "Nastavitve podatkovne baze";
$GLOBALS['strAdminSettings']                = "Administratorske nastavitve";
$GLOBALS['strAdminAccount']                 = "Nadzorniški račun";
$GLOBALS['strAdvancedSettings']             = "Napredne nastavitve";
$GLOBALS['strSpecifySyncSettings']          = "Usklajevalne nastavitve";
$GLOBALS['strWarning']                      = "Opozorilo";
$GLOBALS['strBtnContinue']                  = "Nadaljuj »";
$GLOBALS['strBtnRecover']                   = "Povrni »";
$GLOBALS['strBtnStartAgain']                   = "Znova začni s posodobitvijo »";
$GLOBALS['strBtnGoBack']                    = "« Vrnitev";
$GLOBALS['strBtnAgree']                     = "Strinjam se »";
$GLOBALS['strBtnDontAgree']                 = "« Ne strinjam se";
$GLOBALS['strBtnRetry']                     = "Poizkusi znova";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterArgcArv']       = "PHP nastavitvena spremenljivka register_argc_argv mora biti omogočena za zagon vzdrževanja iz ukazne vrstice.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strTablesPrefix']                 = "Predpona tabelnih imen";
$GLOBALS['strTablesType']                   = "Tip tabele";


$GLOBALS['strRecoveryRequiredTitle']    = "Vaš prejšnji poizkus posodobitve je naletel na težavo";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Opozorilo: Posodobitvena datoteka je še vedno v vaši mapi. Zaradi varnostnih razlogov je ne moremo odstraniti. Prosimo, datoteko izbrišite ročno.";
$GLOBALS['strRemoveUpgradeFile']               = "Posodobitveno datoteko morate odstraniti iz vaše \"var\" mape.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Vaš sistem je bil uspešno nadgrajen. Naslednji koraki vam bodo pomagali pri posodobitvi konfiguracije vašega novega oglaševalskega strežnika.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";

$GLOBALS['strErrorWritePermissions']        = "Prišlo je do napak pri dostopu do datotek. Pred nadaljevanjem jih morate odpraviti.<br />Pri odpravi teh napak v sistemu Linux vtipkajte naslednji ukazni niz:";

$GLOBALS['strErrorWritePermissionsWin']     = "Prišlo je do napak pri dostopu do datotek. Pred nadaljevanjem jih morate odpraviti.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL Nadzorniškega vmesnika";
$GLOBALS['strDeliveryUrlPrefix']            = "URL Dostavnega orodja";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL (SSL) Dostavnega orodja";
$GLOBALS['strImagesUrlPrefix']              = "URL Hrambe slik";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL (SSL) Hrambe slik";



/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Izberi oddelek";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "V konfiguracijsko datoteko je bilo nemožno zapisati spremembe";
$GLOBALS['strUnableToWritePrefs']                    = "Podatkovni bazi je bilo nemožno izročiti izbiro";
$GLOBALS['strImageDirLockedDetected']	             = "Strežnik ne more zapisovati v <b>Mapo z slikami</b>. <br>Ne morete nadaljevati, dokler ne spremenite dovoljenj za to mapo ali pa ustvarite novo.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Nastavitveni kontrolni seznam";
$GLOBALS['strConfigurationSettings']                 = "Konfiguracijske nastavitve";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Administratorske nastavitve";
$GLOBALS['strLoginCredentials']                      = "Prijavne poverilnice";
$GLOBALS['strAdminUsername']                         = "Administrator  Uporabniško ime";
$GLOBALS['strAdminPassword']                         = "Administrator  Geslo";
$GLOBALS['strInvalidUsername']                       = "Napačno uporabniško ime";
$GLOBALS['strBasicInformation']                      = "Osnovne informacije";
$GLOBALS['strAdminFullName']                         = "Polno ime Administratorja";
$GLOBALS['strAdminEmail']                            = "E-pošta Administratorja";
$GLOBALS['strAdministratorEmail']                    = "E-pošta Administratorja";
$GLOBALS['strCompanyName']                           = "Ime podjetja";
$GLOBALS['strAdminCheckUpdates']                     = "Samodejni preveri za posodobitve izdelka in varnostna opozorila (Priporočeno)";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Vsako prijavo";
$GLOBALS['strAdminCheckDaily']                       = "Dnevno";
$GLOBALS['strAdminCheckWeekly']                      = "Tedensko";
$GLOBALS['strAdminCheckMonthly']                     = "Mesečno";
$GLOBALS['strAdminCheckNever']                       = "Nikoli";
$GLOBALS['strNovice']                                = "Zaradi varnostnih razlogov potrebujejo postopki o izbrisu potrditev";
$GLOBALS['strUserlogEmail']                          = "Beleži vsa odhodna e-poštna sporočila";
$GLOBALS['strEnableDashboardSyncNotice']             = "Prosimo, omogočite <a href='account-settings-update.php'>Preveri za posodobitve</a> , če bi želeli uporabljati Nadzorno ploščo.";
$GLOBALS['strTimezone']                              = "Časovno področje";
$GLOBALS['strTimezoneEstimated']                     = "Ocenjeno časovno področje";
$GLOBALS['strTimezoneGuessedValue']                  = "Strežniško časovno področje ni pravilno nastavljeno v PHP-ju";
$GLOBALS['strTimezoneSeeDocs']                       = "Prosimo, oglejte si %DOCS% za nastavitev te spremenljivke v PHP-ju";
$GLOBALS['strTimezoneDocumentation']                 = "dokumentacija";
$GLOBALS['strAdminSettingsTitle']                    = "Ustvari administratorski račun";
$GLOBALS['strAdminSettingsIntro']                    = "Prosimo, izpolnite to polje za ustvaritev vašega administratorskega računa.";
$GLOBALS['strConfigSettingsIntro']                   = "Prosimo, pred nadaljevanjem preverite spodnje konfiguracijske nastavite. Če niste prepričani, kaj počnete, pustite privzete nastavitve.";

$GLOBALS['strEnableAutoMaintenance']	             = "Samodejno izvrši vzdrževalna dela med dostavo, če načrtovana vzdrževalna dela niso omogočena";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Nastavitve podatkovne baze";
$GLOBALS['strDatabaseServer']                        = "Globalne nastavitve podatkovne strežniške baze (Global database server)";
$GLOBALS['strDbLocal']                               = "Uporabi lokalni povezovalni vtič (socket connection)";
$GLOBALS['strDbType']                                = "Tip podatkovne baze";
$GLOBALS['strDbHost']                                = "Gostiteljsko ime podatkovne baze (Hostname)";
$GLOBALS['strDbSocket']                              = "Vtičnica podatkovne baze";
$GLOBALS['strDbPort']                                = "Številka vtiča podatkovne baze (Port number)";
$GLOBALS['strDbUser']                                = "Uporabniško ime za podatkovno bazo";
$GLOBALS['strDbPassword']                            = "Geslo za podatkovno bazo";
$GLOBALS['strDbName']                                = "Ime podatkovne baze";
$GLOBALS['strDbNameHint']                            = "Podatkovna baza bo ustvarjena, če ne obstaja";
$GLOBALS['strDatabaseOptimalisations']               = "Optimizacijske nastavitve podatkovne baze";
$GLOBALS['strPersistentConnections']                 = "Uporabi trajne povezave (persistent connections)";
$GLOBALS['strCantConnectToDb']                       = "Ne morem se povezati s podatkovno bazo";
$GLOBALS['strCantConnectToDbDelivery']               = 'Ne morem se povezati z podatkovno bazo';
$GLOBALS['strDemoDataInstall']                       = "Namesti demonstracijske podatke";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Nastavitve za e-pošto";
$GLOBALS['strEmailAddresses']                        = "Naslov \"From\" e-pošte";
$GLOBALS['strEmailFromName']                         = "Ime \"From\" e-pošte";
$GLOBALS['strEmailFromAddress']                      = "E-pošta \"From\" e-poštnega naslova";
$GLOBALS['strEmailFromCompany']                      = "E-pošta \"From\" podjetja";
$GLOBALS['strQmailPatch']                            = "qmail popravek";
$GLOBALS['strEnableQmailPatch']                      = "Omogoči qmail popravek";
$GLOBALS['strEmailHeader']                           = "Glava za e-pošto";
$GLOBALS['strEmailLog']                              = "Beležka za e-pošto";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Nastavitve za pregled poti (audit trail)";
$GLOBALS['strEnableAudit']                           = "Omogoči pregled poti (audit trail)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Nastavitve beleženja iskanja in odstranjevanja napak (debug)";
$GLOBALS['strProduction']                            = "Strežnik za produkcijo (production server)";
$GLOBALS['strEnableDebug']                           = "Omogoči beleženje iskanja in odstranjevanja napak (debug)";
$GLOBALS['strDebugMethodNames']                      = "Vključi imena postopkov v \"debug\" beležko";
$GLOBALS['strDebugLineNumbers']                      = "Vključi številke nizov v \"debug\" beležko";
$GLOBALS['strDebugType']                             = "Tip beležke za iskanje in odstranjevanje napak (debug)";
$GLOBALS['strDebugTypeFile']                         = "Datoteka";
$GLOBALS['strDebugTypeSql']                          = "SQL podatkovna baza";
$GLOBALS['strDebugTypeSyslog']                       = "Sistemska beležka (syslog)";
$GLOBALS['strDebugName']                             = "Ime beležke, Kolendar, SQL Tabela,<br />ali Sistemska beležka";
$GLOBALS['strDebugPriority']                         = "Prioritetni nivo iskanja in odstranjevanja napak";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Največ informacij";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Privzete informacije";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Najmanj informacij";
$GLOBALS['strDebugIdent']                            = "\"Debug\" identifikacijski niz";
$GLOBALS['strDebugUsername']                         = "mCal, SQL Uporabniško ime strežnika";
$GLOBALS['strDebugPassword']                         = "mCal, SQL Geslo strežnika";
$GLOBALS['strProductionSystem']                      = "Sistem produkcije";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Dostavne nastavitve";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Omrežna pot";
$GLOBALS['strDeliveryPath']                          = "Dostavna pot";
$GLOBALS['strImagePath']                             = "Pot slik";
$GLOBALS['strDeliverySslPath']                       = "SSL Dostavna pot";
$GLOBALS['strImageSslPath']                          = "SSL Pot slik";
$GLOBALS['strImageStore']                            = "Mapa za slike";
$GLOBALS['strTypeWebSettings']                       = "Nastavitve hrambe spletnega strežnika lokalne pasice";
$GLOBALS['strTypeWebMode']                           = "Shranjevalni način";
$GLOBALS['strTypeWebModeLocal']                      = "Lokalni imenik";
$GLOBALS['strTypeDirError']                          = "Mrežni strežnik ne more zapisovati v lokalni imenik";
$GLOBALS['strTypeWebModeFtp']                        = "Zunanji FTP strežnik";
$GLOBALS['strTypeWebDir']                            = "Lokalni imenik";
$GLOBALS['strTypeFTPHost']                           = "FTP gostitelj";
$GLOBALS['strTypeFTPDirectory']                      = "Imenik gostitelja";
$GLOBALS['strTypeFTPUsername']                       = "Prijava";
$GLOBALS['strTypeFTPPassword']                       = "Geslo";
$GLOBALS['strTypeFTPPassive']                        = "Uporabi pasivni FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "FTP imenik gostitelja ne obstaja";
$GLOBALS['strTypeFTPErrorConnect']                   = "Ne morem se povezati s FTP strežnikom. Uporabniško ime ali geslo ni pravilno";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Vaša PHP namestitev ne podpira FTP-ja";
$GLOBALS['strTypeFTPErrorUpload']                    = "Datoteke ni bilo mogoče naložiti na FTP strežnik. Preverite vse nastavitve.";
$GLOBALS['strTypeFTPErrorHost']                      = "FTP gostitelj ni pravilen";
$GLOBALS['strDeliveryFilenames']                     = "Dostavna imena datotek";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Klikov na oglas";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Pretvorbenih spremenljivk oglasa";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Vsebina oglasa";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Pretvorba oglasa";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Pretvorba oglasa (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Okvir oglasa";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Slika oglasa";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Oglas (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Sloj oglasa";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Beležka oglasa";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Prikazujoč (Popup) oglas";
$GLOBALS['strDeliveryFilenamesAdView']               = "Prikaz oglasa";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPC Poziv";
$GLOBALS['strDeliveryFilenamesLocal']                = "Lokalni poziv";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Sprednji preglednik";
$GLOBALS['strDeliveryFilenamesFlash']                = "Vključujoč FLASH (lahko je poln URL)";
$GLOBALS['strDeliveryCaching']                       = "Nastavitve dostavnega pomnilnika pasice";
$GLOBALS['strDeliveryCacheLimit']                    = "Čas med posodobitvami pomnilnika pasice (v sekundah)";
$GLOBALS['strDeliveryCacheStore']                    = "Tip hrambe pomnilnika dostavljanja pasice ";

$GLOBALS['strErrorInCacheStorePlugin']               = "Pri \"%s\" vtičniku je prišlo do napak.";
$GLOBALS['strDeliveryCacheStorage']                  = "Tip hrambe dostavnega pomnilnika";

$GLOBALS['strOrigin']                                = "Uporabi oddaljen izvorni strežnik";
$GLOBALS['strOriginType']                            = "Tip izvornega strežnika";
$GLOBALS['strOriginHost']                            = "Gostiteljsko ime (hostname) za izvorni strežnik";
$GLOBALS['strOriginPort']                            = "Številka vtiča (port number) za izvorno podatkovno bazo";
$GLOBALS['strOriginScript']                          = "Skriptna datoteka za izvorno podatkovno bazo";
$GLOBALS['strOriginTimeout']                         = "Premor izvora (v sekundah)";
$GLOBALS['strOriginProtocol']                        = "Protokol izvornega strežnika";

$GLOBALS['strDeliveryAcls']                          = "Preračunaj omejitve dostave pasice med dostavo";
$GLOBALS['strDeliveryObfuscate']                     = "Zmedi kanal pri dostavi oglasov";
$GLOBALS['strDeliveryExecPhp']                       = "Dovoli izvedbo PHP kode v oglasih<br />(Opozorilo: Varnostno tveganje)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Omejitev zunanjih (3rd party) sledilnikov klikov";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Privzet URL slikovne pasice ";
$GLOBALS['strP3PSettings']                           = "P3P Varovanje zasebnosti";
$GLOBALS['strUseP3P']                                = "Uporabi P3P polico";
$GLOBALS['strP3PCompactPolicy']                      = "P3P pogodbena polica";
$GLOBALS['strP3PPolicyLocation']                     = "Lokacija P3P police";

// General Settings
$GLOBALS['generalSettings']                          = "Globalne nastavitve sistema";
$GLOBALS['uiEnabled']                                = "Uporabniški vmesnik je omogočen";
$GLOBALS['defaultLanguage']                          = "Privzeti jezik sistema<br />(Vask uporabnik lahko izbere svoj jezik)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geociljne nastavitve";
$GLOBALS['strGeotargeting']                          = "Geociljne nastavitve";
$GLOBALS['strGeotargetingType']                      = "Tip geociljnega modula";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Uporabi implementirano MaxMind GeoLiteCountry podatkovno bazo";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "Lokacija MaxMind GeoIP podatkovne baze za državo";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "Lokacija MaxMind GeoIP podatkovne baze za regijo";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "Lokacija MaxMind GeoIP podatkovne baze za mesto";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "Lokacija MaxMind GeoIP podatkovne baze za področje";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "Lokacija MaxMind GeoIP podatkovne baze za DMA";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "Lokacija MaxMind GeoIP podatkovne baze za organizacijo";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "Lokacija MaxMind GeoIP podatkovne baze za ISP-ja";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "Lokacija MaxMind GeoIP podatkovne baze za Netspeed";
$GLOBALS['strGeoShowUnavailable']                    = "Prikaži geociljne dostavne omejitve, četudi GeoIP podatki niso na voljo";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "MaxMind GeoIP podatkovna baza za državo ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "MaxMind GeoIP podatkovna baza za regijo ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "MaxMind GeoIP podatkovna baza za mesto ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "MaxMind GeoIP podatkovna baza za področje ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "MaxMind GeoIP podatkovna baza za DMA ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "MaxMind GeoIP podatkovna baza za organizacijo ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "MaxMind GeoIP podatkovna baza za ISP-ja ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "MaxMind GeoIP podatkovna baza za Netspeed ne obstaja na določeni lokaciji";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventar";
$GLOBALS['strUploadConversions']                     = "Naloži pretvorbe";
$GLOBALS['strShowCampaignInfo']                      = "Prikaži dodatne informacije o kampanji na strani <i>Kampanje</i>";
$GLOBALS['strShowBannerInfo']                        = "Prikaži dodatne informacije o pasici na strani <i>Pasice</i>";
$GLOBALS['strShowCampaignPreview']                   = "Prikaži predogled vseh pasic na strani <i>Pasice</i>";
$GLOBALS['strShowBannerHTML']                        = "Prikaži dejansko pasico namesto enostavne HTML kode pri predogledu HTML pasice";
$GLOBALS['strShowBannerPreview']                     = "Prikaži predogled pasice na vrhu strani, ki obravnavajo pasice";
$GLOBALS['strHideInactive']                          = "Skrij neaktivne";
$GLOBALS['strGUIShowMatchingBanners']                = "Prikaži ujemajoče pasice na strani <i>Pasica s povezavo</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Prikaži izvorne kampanje na strani <i>Pasica s povezavo</i>";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Privzete kampanje spremeni v anonimne";
$GLOBALS['strStatisticsDefaults']                    = "Statistika";
$GLOBALS['strBeginOfWeek']                           = "Začetek tedna";
$GLOBALS['strPercentageDecimals']                    = "Decimalke po odstotkih";
$GLOBALS['strWeightDefaults']                        = "Privzeta vrednost";
$GLOBALS['strDefaultBannerWeight']                   = "Privzeta vrednost pasice";
$GLOBALS['strDefaultCampaignWeight']                 = "Privzeta vrednost kampanje";
$GLOBALS['strDefaultBannerWErr']                     = "Privzeta vrednost pasice naj bo pozitivno število";
$GLOBALS['strDefaultCampaignWErr']                   = "Privzeta vrednost kampanje naj bo pozitivno število";
$GLOBALS['strConfirmationUI']                        = "Potrditev v Uporabniškem vmesniku";

$GLOBALS['strPublisherDefaults']                     = "Privzete nastavitve spletne strani";
$GLOBALS['strModesOfPayment']                        = "Načini plačila";
$GLOBALS['strCurrencies']                            = "Valute";
$GLOBALS['strCategories']                            = "Kategorije";
$GLOBALS['strHelpFiles']                             = "Datoteke s pomočjo";
$GLOBALS['strHasTaxID']                              = "ID DDV";
$GLOBALS['strDefaultApproved']                       = "Odobreni čekovni predeli";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Izberite oglaševalca";
$GLOBALS['strChooseCampaign']                        = "Izberite kampanjo";
$GLOBALS['strChooseCampaignBanner']                  = "Izberite pasico";
$GLOBALS['strChooseTracker']                         = "Izberite sledilnik";
$GLOBALS['strDefaultConversionStatus']               = "Privzeti status pretvorb";
$GLOBALS['strDefaultConversionType']                 = "Privzeti tip pretvorb";
$GLOBALS['strCSVTemplateSettings']                   = "Nastavitve CSV predloge";
$GLOBALS['strIncludeCountryInfo']                    = "Vključi informacije o državi";
$GLOBALS['strIncludeBrowserInfo']                    = "Vključi informacije o brskalniku";
$GLOBALS['strIncludeOSInfo']                         = "Vključi informacije o operacijskem sistemu";
$GLOBALS['strIncludeSampleRow']                      = "Vključi vzorčni niz";
$GLOBALS['strCSVTemplateAdvanced']                   = "Napredna predloga";
$GLOBALS['strCSVTemplateIncVariables']               = "Vključi spremenljivke sledilnika";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Dovoljeni pozivni tipi";
$GLOBALS['strInvocationDefaults']                    = "Privzete pozivne nastavitve";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Omogoči privzeto zunanje sledenje klikov (3rd party)";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Nastavitve dostave pasice";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Nastavitve beleženja pasice";
$GLOBALS['strLogAdRequests']                         = "Beleži zahtevo ob vsaki zahtevani pasici";
$GLOBALS['strLogAdImpressions']                      = "Beleži ogled ob vsakem ogledu pasice";
$GLOBALS['strLogAdClicks']                           = "Beleži klik ob vsakem kliku na pasico";
$GLOBALS['strLogTrackerImpressions']                 = "Beleži sledilni ogled ob vsakem ogledu sledilnega signala";
$GLOBALS['strReverseLookup']                         = "Preglej imena gostiteljev obiskovalcev, če niso podana";
$GLOBALS['strProxyLookup']                           = "Poizkusi ugotoviti prave IP naslove obiskovalcev, ki uporabljajo proxy strežnik";
$GLOBALS['strPreventLogging']                        = "Blokiraj nastavitve beleženja pasic";
$GLOBALS['strIgnoreHosts']                           = "Ne beleži statistike za uporabnike, ki uporabljajo naslednje IP naslove ali gostitelje";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Ne</b> beleži statistike odjemalcev z naslednjimi nizi v njihovem uporabniškem zastopniku (user-agent)(ena na vrstico)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Samo</b> beleži statistike odjemalcev z naslednjimi nizi v njihovem uporabniškem zastopniku (user-agent)(ena na vrstico)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Nastavitve hrambe pasic";

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Vzdrževalne nastavitve";
$GLOBALS['strConversionTracking']                    = "Nastavitve sledilnika pretvorb";
$GLOBALS['strEnableConversionTracking']              = "Omogoči sledenje pretvorb";
$GLOBALS['strCsvImport']                             = "Dovoli nalaganje offline pretvorb";
$GLOBALS['strBlockAdViews']                          = "Ne štej učinkov oglasa, če je obiskovalec videl enak oglas/področje znotraj označenega časa (v sekundah)";
$GLOBALS['strBlockAdViewsError']                     = "Blokirna vrednost učinka oglasa ne sme biti negativna";
$GLOBALS['strBlockAdClicks']                         = "Ne štej klikov oglasa, če je obiskovalec kliknil na enak oglas/področje znotraj označenega časa (v sekundah)";
$GLOBALS['strBlockAdClicksError']                    = "Blokirna vrednost klikov na oglas ne sme biti negativna";
$GLOBALS['strMaintenanceOI']                         = "Presledek vzdrževalnega postopka (v minutah)";
$GLOBALS['strMaintenanceOIError']                    = "Neveljaven presledek vzdrževalnega postopka - preglejte dokumentacijo za veljavne vrednosti";
$GLOBALS['strPrioritySettings']                      = "Prednostne nastavitve";
$GLOBALS['strPriorityInstantUpdate']                 = "Takoj posodobi oglasne prioritete po spremembi uporabniškega vmesnika (UI)";
$GLOBALS['strDefaultImpConWindow']                   = "Privzeto okno povezave pri Učinkih oglasa (v sekundah)";
$GLOBALS['strDefaultImpConWindowError']              = "Če omogočeno, mora biti privzeto okno povezave pri Učinkih oglasa pozitivna vrednost";
$GLOBALS['strDefaultCliConWindow']                   = "Privzeto okno povezave pri Klikih na oglas (v sekundah)";
$GLOBALS['strDefaultCliConWindowError']              = "Če omogočeno, mora biti privzeto okno povezave pri Klikih na oglas pozitivna vrednost";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Pošlji opozorilo ko je število preostalih učinkov manjše kot navedeno tukaj";
$GLOBALS['strWarnLimitErr']                          = "Opozorilo omejitve mora biti pozitivna vrednost";
$GLOBALS['strWarnLimitDays']                         = "Pošlji opozorilo ko je število preostalih dni manjše kot navedeno tukaj";
$GLOBALS['strWarnLimitDaysErr']                      = "Opozorilo omejitve dni naj bo pozitivna vrednost";
$GLOBALS['strAllowEmail']                            = "Dovoli globalno pošiljanje e-pošte";
$GLOBALS['strEmailAddressFrom']                      = "E-poštni naslov pošilja poročila IZ";
$GLOBALS['strEmailAddressName']                      = "Osebno ali ime podjetja se podpiše v e-pošto";
$GLOBALS['strWarnAdmin']                             = "Pošlji opozorilo administratorju, ko se kampanja bliža svojemu koncu";
$GLOBALS['strWarnClient']                            = "Pošlji opozorilo oglaševalcu, ko se kampanja bliža svojemu koncu";
$GLOBALS['strWarnAgency']                            = "Pošlji opozorilo agenciji, ko se kampanja bliža svojemu koncu";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Nastavitve uporabniškega vmesnika";
$GLOBALS['strGeneralSettings']                       = "Splošne nastavitve";
$GLOBALS['strAppName']                               = "Ime aplikacije";
$GLOBALS['strMyHeader']                              = "Lokacija header datoteke";
$GLOBALS['strMyHeaderError']                         = "Header datoteka ne obstaja na lokaciji, ki ste jo določili";
$GLOBALS['strMyFooter']                              = "Lokacija footer datoteke";
$GLOBALS['strMyFooterError']                         = "Footer datoteka ne obstaja na lokaciji, ki ste jo določili";
$GLOBALS['strDefaultTrackerStatus']                  = "Privzeto stanje sledilnika";
$GLOBALS['strDefaultTrackerType']                    = "Privzeti tip sledilnika";
$GLOBALS['strSSLSettings']                           = "SSL nastavitve";
$GLOBALS['requireSSL']                               = "Vsili SSL dostop do uporabniškega vmesnika";
$GLOBALS['sslPort']                                  = "SSL port, ki ga uporablja Web Server";
$GLOBALS['strDashboardSettings']                     = "Nastavitve Nadzorne plošče";

$GLOBALS['strMyLogo']                                = "Ime datoteke po meri za logotip";
$GLOBALS['strMyLogoError']                           = "Datoteka za logotip ne obstaja v admin/slikovni mapi";
$GLOBALS['strGuiHeaderForegroundColor']              = "Barva header-ja v ospredju";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Barva header-ja v ozadju";
$GLOBALS['strGuiActiveTabColor']                     = "Barva aktivnega zaznamka";
$GLOBALS['strGuiHeaderTextColor']                    = "Barva besedila v header-ju";
$GLOBALS['strColorError']                            = "Prosimo, vnesite barve v formatu RGB, npr '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Uporabi GZIP za stiskanje vsebine";
$GLOBALS['strClientInterface']                       = "Oglaševalcev vmesnik";
$GLOBALS['strReportsInterface']                      = "Vmesnik za poročila";
$GLOBALS['strClientWelcomeEnabled']                  = "Omogoči Dobrodošlico za oglaševalca";
$GLOBALS['strClientWelcomeText']                     = "Pozdravno sporočilo<br />(HTML zaznamki so dovoljeni)";

$GLOBALS['strPublisherInterface']                    = "Vmesnik za spletno stran";
$GLOBALS['strPublisherAgreementEnabled']             = "Omogoči prijavo za spletne strani, ki niso sprejele Pogojev uporabe";
$GLOBALS['strPublisherAgreementText']                = "Prijavno besedilo (HTML zaznamki so dovoljeni)";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
