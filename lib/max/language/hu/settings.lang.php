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
$GLOBALS['strInstall']                      = "Installálás";
$GLOBALS['strChooseInstallLanguage']        = "Válassza ki a telepítési folyamat nyelvét";
$GLOBALS['strLanguageSelection']            = "Nyelvválasztás";
$GLOBALS['strDatabaseSettings']             = "Adatbázis beállításai";
$GLOBALS['strAdminSettings']                = "Adminisztrátor beállítások";
$GLOBALS['strAdminAccount']                 = "Adminisztrátor";
$GLOBALS['strAdvancedSettings']             = "Haladó beállítások";
$GLOBALS['strOtherSettings']                = "Egyéb beállítások";
$GLOBALS['strSpecifySyncSettings']          = "Szinkronizációs beállítások";
$GLOBALS['strWarning']                      = "Figyelmeztetés";
$GLOBALS['strFatalError']                   = "Végzetes hiba történt";
$GLOBALS['strUpdateError']                  = "Hiba történt frissítés közben";
$GLOBALS['strBtnContinue']                  = "Folytatás »";
$GLOBALS['strBtnRecover']                   = "Visszaállítás »";
$GLOBALS['strBtnStartAgain']                   = "Újraépítés újrakezdése »";
$GLOBALS['strBtnGoBack']                    = "« Vissza";
$GLOBALS['strBtnAgree']                     = "Elfogadom »";
$GLOBALS['strBtnRetry']                     = "Újrapróbál";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Nem lehet kapcsolódni az adatbázishoz, ellenőrizze ismét az ön által megadott beállításokat";
$GLOBALS['strCreateTableTestFailed']        = "Az ön által megadott felhasználónak nincs joga létrehozni vagy frissíteni az adatbázis szerkezetet. Vegye fel a kapcsolatot az adatbázis adminisztrátorával.";
$GLOBALS['strUpdateTableTestFailed']        = "Az ön által megadott felhasználónak nincs joga frissíteni az adatbázis szerkezetet. Vegye fel a kapcsolatot az adatbázis adminisztrátorával.";
$GLOBALS['strTablePrefixInvalid']           = "A tábla előtag érvénytelen karaktert tartalmaz";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Folytatás előtt javítsa ki ezeket a lehetséges hibákat:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Figyelmeztetések mellőzése";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "A register_globals PHP konfigurációs változónak engedélyezettnek kell lennie.";
$GLOBALS['strWarningRegisterArgcArv']       = "A register_argc_argv PHP konfigurációs változót be kell kapcsolni hogy a parancssorból el lehessen végezni a karbantartást.";
$GLOBALS['strWarningMagicQuotesGPC']        = "A magic_quotes_gpc PHP konfigurációs változónak engedélyezettnek kell lennie.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "A magic_quotes_runtime PHP konfigurációs változónak letiltottnak kell lennie.";
$GLOBALS['strWarningFileUploads']           = "A file_uploads  PHP konfigurációs változónak engedélyezettnek kell lennie.";
$GLOBALS['strWarningTrackVars']             = "A track_vars PHP konfigurációs változónak engedélyezettnek kell lennie.";
$GLOBALS['strWarningPREG']                  = "Az ön által használt PHP-verzió nem rendelkezik PERL kompatibilis reguláris kifejezés támogatással. Engedélyezze a PREG kiterjesztést, mielőtt folytatná.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Az adatbázis jelenleg nem frissíthető. Ha a folytatás mellett dönt, akkor valamennyi reklám, statisztika és hirdető törlésre kerül.";
$GLOBALS['strIgnoreErrors']                 = "Hibák kihagyása";
$GLOBALS['strRetryUpdate']                  = "Frissítés ismétlése";
$GLOBALS['strTableNames']                   = "Táblanevek";
$GLOBALS['strTablesPrefix']                 = "Táblanevek előtagja";
$GLOBALS['strTablesType']                   = "Tábla típusa";


$GLOBALS['strRecoveryRequiredTitle']    = "Az előző újraépítési kísérlete során hiba történt";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Figyelmeztetés: Az UPGRADE fájl még mindig a var könyvtárban van. Nem sikerült automatikusan eltávolítani a fájlt, mert a fájlra vonatkozó engedélyezések nem tették lehetővé. Kérjük törölje a fájlt manuálisan!";
$GLOBALS['strRemoveUpgradeFile']               = "Az UPGRADE fájlt el kell távolítania a var könyvtárból!";
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
$GLOBALS['strErrorOccured']                 = "A következő hiba történt:";
$GLOBALS['strErrorInstallDatabase']         = "Nem lehet létrehozni az adatbázis szerkezetet.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorInstallDbConnect']        = "Nem lehet kapcsolatot létesíteni az adatbázissal.";

$GLOBALS['strErrorWritePermissions']        = "Fájl engedélyezési hibákat észleltünk, amiket meg kell oldani a folytatás előtt.<br />A hibák kijavításához Linux rendszeren a következő parancs(ok) beírását érdemes megpróbálni:";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod a+w %s</i>";

$GLOBALS['strErrorWritePermissionsWin']     = "Fájl engedélyezési hibákat észleltünk, amiket meg kell oldani a folytatás előtt.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "Az Adminisztrációs Felület URL-je";
$GLOBALS['strDeliveryUrlPrefix']            = "A Kiszolgáló Motor URL-je";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "A Kiszoláló Motor URL-je (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "A Kép Tár URL-je";
$GLOBALS['strImagesUrlPrefixSSL']           = "A Kép Tár URL-je (SSL)";

$GLOBALS['strInvalidUserPwd']               = "A felhasználónév vagy a jelszó érvénytelen";

$GLOBALS['strUpgrade']                      = "Frissítés";
$GLOBALS['strSystemUpToDate']               = "A rendszer frissítése már megtörtént, jelenleg nincs szükség az aktualizálására. <br>A <b>Tovább</b> megnyomásával ugorjon a kezdőlapra.";
$GLOBALS['strSystemNeedsUpgrade']           = "A megfelelő működés céljából frissíteni kell az adatbázis szerkezetet és a konfigurációs fájlt. A <b>Tovább</b> megnyomásával indíthatja a frissítési folyamatot. <br><br>Attól függően, hogy melyik verzióról frissít, és mennyi statisztikát tárol már az adatbázisban, ez a folyamat az adatbázis kiszolgálót nagyon leterhelheti. Legyen türelemmel, a frissítés eltarthat néhány percig.";
$GLOBALS['strSystemUpgradeBusy']            = "A rendszer frissítése folyamatban. Kis türelmet...";
$GLOBALS['strSystemRebuildingCache']        = "A gyorsítótár újraépítése. Kis türelmet...";
$GLOBALS['strServiceUnavalable']            = "A szolgáltatás átmenetileg nem elérhető. A rendszer frissítése folyamatban";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Válasszon szekciót";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "A konfigurációs fájl írása sikertelen";
$GLOBALS['strUnableToWritePrefs']                    = "A beállítás adatbázisba írása sikertelen";
$GLOBALS['strImageDirLockedDetected']	             = "A kiszolgáló nem tudja írnia a megadott <b>Képek Könyvtárt</b>. <br>Addig nem tud továbblépni, amíg vagy meg nem változtatja a beállításokat vagy létre nem hozza a könyvtárat.";

// Configuration Settings
$GLOBALS['strConfigurationSettings']                 = "Konfiguráció beállítása";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Adminisztrátor beállítások";
$GLOBALS['strLoginCredentials']                      = "Belépési adatok";
$GLOBALS['strAdminUsername']                         = "Adminisztrátor  felhasználóneve";
$GLOBALS['strAdminPassword']                         = "Adminisztrátor  jelszava";
$GLOBALS['strInvalidUsername']                       = "Érvénytelen felhasználóinév";
$GLOBALS['strBasicInformation']                      = "Alapinformációk";
$GLOBALS['strAdminFullName']                         = "Admin teljes neve";
$GLOBALS['strAdminEmail']                            = "Admin e-mail címe";
$GLOBALS['strAdministratorEmail']                    = "Adminisztrátor e-mail címe";
$GLOBALS['strCompanyName']                           = "Szervezet neve";
$GLOBALS['strAdminCheckUpdates']                     = "Frissítés keresése";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Minden belépéskor";
$GLOBALS['strAdminCheckDaily']                       = "Naponta";
$GLOBALS['strAdminCheckWeekly']                      = "Hetente";
$GLOBALS['strAdminCheckMonthly']                     = "Havonta";
$GLOBALS['strAdminCheckNever']                       = "Soha";
$GLOBALS['strNovice']                                = "A törlésekhez megerősítés szükséges biztonsági okokból";
$GLOBALS['strUserlogEmail']                          = "Kimenő e-mail üzenetek naplózása";
$GLOBALS['strTimezone']                              = "Időzóna";
$GLOBALS['strTimezoneEstimated']                     = "Becsült időzóna";
$GLOBALS['strTimezoneGuessedValue']                  = "A szerver időzónája nincs megfelelően beállítva a PHP-ben";
$GLOBALS['strTimezoneSeeDocs']                       = "Ennek a PHP változónak a beállításáról további információt találsz itt: %DOCS%";
$GLOBALS['strTimezoneDocumentation']                 = "dokumentáció";

$GLOBALS['strEnableAutoMaintenance']	             = "Automatikusan fusson le a karbantartó eljárás a kiszolgáláskor, ha nincs beállítva a karbantartás ütemterve. ";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Adatbázis beállításai";
$GLOBALS['strDatabaseServer']                        = "Globális adatbázis szerver beállítások";
$GLOBALS['strDbLocal']                               = "Kapcsolódás helyi kiszolgálóhoz szoftvercsatornával";
$GLOBALS['strDbType']                                = "Adatbázis típusa";
$GLOBALS['strDbHost']                                = "Adatbázis kiszolgálóneve";
$GLOBALS['strDbPort']                                = "Adatbázis port száma";
$GLOBALS['strDbUser']                                = "Adatbázis felhasználói neve";
$GLOBALS['strDbPassword']                            = "Adatbázis jelszó";
$GLOBALS['strDbName']                                = "Adatbázis név";
$GLOBALS['strDatabaseOptimalisations']               = "Adatbázis optimalizációs beállítások";
$GLOBALS['strPersistentConnections']                 = "�?llandó kapcsolat használata";
$GLOBALS['strCantConnectToDb']                       = "Nem sikerült kapcsolódni az adatbázishoz";
$GLOBALS['strDemoDataInstall']                       = "Demo adatok telepítése";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strQmailPatch']                            = "A qmail folt engedélyezése";
$GLOBALS['strEnableQmailPatch']                      = "Qmail patch engedélyezése";

// Audit Trail Settings

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Hibakereső naplózázás beállításai";
$GLOBALS['strProduction']                            = "Publikus szerver";
$GLOBALS['strEnableDebug']                           = "Hibakereső naplózás engedélyezése";
$GLOBALS['strDebugMethodNames']                      = "Eljárásnevek hozzáadása a hibereső naplózáshoz";
$GLOBALS['strDebugLineNumbers']                      = "Naplózott sorok sorszámának hozzáadása a hibakereső naplózáshoz";
$GLOBALS['strDebugType']                             = "Hibakereső napló típusa";
$GLOBALS['strDebugTypeFile']                         = "Fájl";
$GLOBALS['strDebugTypeSql']                          = "SQL adatbázis";
$GLOBALS['strDebugName']                             = "Hibakereső napló név, naptár, SQL tábla,<br />vagy Syslog Facility";
$GLOBALS['strDebugPriority']                         = "Hibakereső prioritási szint";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Az elérhető legtöbb információ";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Alapértelmezett információmennyiség";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Minimális információ";
$GLOBALS['strDebugIdent']                            = "Azonosító sztring hibakeresése";
$GLOBALS['strDebugUsername']                         = "mCal, SQL szerver felhasználóinév";
$GLOBALS['strDebugPassword']                         = "mCal, SQL szerver jelszó";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Kézbesítési beállítások";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Webes elérési út";
$GLOBALS['strDeliveryPath']                          = "Kézbesítés elérési útja";
$GLOBALS['strImagePath']                             = "Képek elérési útja";
$GLOBALS['strDeliverySslPath']                       = "Kézbesítés SSL elérési útja";
$GLOBALS['strImageSslPath']                          = "Képek SSL elérési útja";
$GLOBALS['strImageStore']                            = "Képek könyvtár";
$GLOBALS['strTypeWebSettings']                       = "Webszerver helyi banner tárolásának beállításai";
$GLOBALS['strTypeWebMode']                           = "Tárolási mód";
$GLOBALS['strTypeWebModeLocal']                      = "Helyi könyvtár";
$GLOBALS['strTypeDirError']                          = "A helyi könyvtár a webszerver számára nem írható";
$GLOBALS['strTypeWebModeFtp']                        = "Külső FTP szerver";
$GLOBALS['strTypeWebDir']                            = "Helyi könyvtár";
$GLOBALS['strTypeFTPHost']                           = "FTP kiszolgáló";
$GLOBALS['strTypeFTPDirectory']                      = "Kiszolgáló könyvtár";
$GLOBALS['strTypeFTPUsername']                       = "Login név (FTP felhasználó)";
$GLOBALS['strTypeFTPPassword']                       = "Jelszó";
$GLOBALS['strTypeFTPPassive']                        = "Passzív kapcsolat használata";
$GLOBALS['strTypeFTPErrorDir']                       = "Az FTP kiszolgáló könyvtár nem létezik";
$GLOBALS['strTypeFTPErrorConnect']                   = "Nem sikerült kapcsolódni az FTP szerverhez, a login név vagy a jelszó nem megfelelő";
$GLOBALS['strTypeFTPErrorHost']                      = "Az FTP kiszolgáló nem megfelelő";
$GLOBALS['strDeliveryFilenames']                     = "Kézbesítendő fájl nevek";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Hirdetés kattintás";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Hirdetés változó behelyettesítés";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Hirdetés tartalom";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Hirdetés behelyettesítés";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Hirdetés behelyettesítés (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Hirdetési keret";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Hirdetési kép";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Hirdetés (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Hirdetési réteg";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Hirdetési napló";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Hirdetés popup";
$GLOBALS['strDeliveryFilenamesAdView']               = "Hirdetés megtekintés";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPC kérés";
$GLOBALS['strDeliveryFilenamesLocal']                = "Helyi kérés";
$GLOBALS['strDeliveryFilenamesFlash']                = "Flash beágyazás (teljes URL cím is lehet)";
$GLOBALS['strDeliveryCaching']                       = "Banner kézbesítési gyorsítótár beállításai";
$GLOBALS['strDeliveryCacheLimit']                    = "A banner gyorsítótár frissítései közti idő (másodpercekben)";


$GLOBALS['strOrigin']                                = "Távoli eredet szerver használata";
$GLOBALS['strOriginType']                            = "Eredet szerver típusa";
$GLOBALS['strOriginHost']                            = "Eredet szerver kiszolgálói neve";
$GLOBALS['strOriginPort']                            = "Eredet adatbázis port száma";
$GLOBALS['strOriginScript']                          = "Eredet adatbázis script fájlja";
$GLOBALS['strOriginTimeout']                         = "Eredet időtúllépés (másodpercekben)";
$GLOBALS['strOriginProtocol']                        = "Eredet szerver protokol";

$GLOBALS['strDeliveryAcls']                          = "Banner kézbesítési korlátozások megbecslése kézbesítés közben.";
$GLOBALS['strDeliveryObfuscate']                     = "Csatornazavarás a hirdetések kézbesítése közben";
$GLOBALS['strDeliveryExecPhp']                       = "PHP kódok futtatásának engedélyezése a hirdetésekben<br />(Figyelem: Biztonsági kockázat)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Harmadik féltől származó kattintás követési határolójel";
$GLOBALS['strP3PSettings']                           = "P3P adatvédelmi irányelvek";
$GLOBALS['strUseP3P']                                = "P3P irányelvek használata";
$GLOBALS['strP3PCompactPolicy']                      = "P3P tömörített irányelv";
$GLOBALS['strP3PPolicyLocation']                     = "P3P irányelvek helye";

// General Settings

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting beállítások";
$GLOBALS['strGeotargeting']                          = "Geotargeting beállítások";
$GLOBALS['strGeotargetingType']                      = "Geotargeting modul típus";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP ország adatbázis helye";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP régió adatbázis helye";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP város adatbázis helye";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP terület adatbázis helye";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP DMA adatbázis helye";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP szervezet adatbázis helye";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP adatbázis helye";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP internetsebesség adatbázis helye";
$GLOBALS['strGeoShowUnavailable']                    = "Geotargeting kézbesítési korlátok mutatása a GeoIP adatok elérhetetlensége esetén";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "A MaxMind GeoIP ország adatbázis nem elérhető a megadott helyen";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "A MaxMind GeoIP régió adatbázis nem elérhető a megadott helyen";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "A MaxMind GeoIP város adatbázis nem elérhető a megadott helyen";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "A MaxMind GeoIP terület adatbázis nem elérhető a megadott helyen";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "A MaxMind GeoIP DMA adatbázis nem elérhető a megadott helyen";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "A MaxMind GeoIP szervezet adatbázis nem elérhető a megadott helyen";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "A MaxMind GeoIP ISP adatbázis nem elérhető a megadott helyen";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "A MaxMind GeoIP internet sebesség adatbázis nem elérhető a megadott helyen";

// Interface Settings
$GLOBALS['strInventory']                             = "Leltár";
$GLOBALS['strShowCampaignInfo']                      = "Extra kampány info megjelenítése a <i>Kampány áttekintés</i> oldalon";
$GLOBALS['strShowBannerInfo']                        = "Extra banner info megjelenítése a <i>Banner áttekintés</i> oldalon";
$GLOBALS['strShowCampaignPreview']                   = "Minden banner megjelenítése a <i>Banner áttekintés</i> oldalon";
$GLOBALS['strShowBannerHTML']                        = "A HTML code helyett a tényleges banner megmutatása a HTML bannerek megjelenítésekor";
$GLOBALS['strShowBannerPreview']                     = "Bannerek megjelenítése a kapcsolódó oldalak tetején";
$GLOBALS['strHideInactive']                          = "Az inaktív objektumok elrejtése az áttekintéses oldalakról";
$GLOBALS['strGUIShowMatchingBanners']                = "Egyező bannerek megjelenítése a <i>Linkelt banner</i> oldalakon";
$GLOBALS['strGUIShowParentCampaigns']                = "Szülő kampányok megjelenítése a <i>Linkelt banner</i> oldalakon";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Kampányok alapértelmezése Anonymousként";
$GLOBALS['strStatisticsDefaults']                    = "Statisztikák";
$GLOBALS['strBeginOfWeek']                           = "Hét kezdete";
$GLOBALS['strPercentageDecimals']                    = "Százalékok tört része";
$GLOBALS['strWeightDefaults']                        = "Alapértelmezett súly";
$GLOBALS['strDefaultBannerWeight']                   = "Alapértelmezett banner súly";
$GLOBALS['strDefaultCampaignWeight']                 = "Alapértelmezett kampány súly";
$GLOBALS['strDefaultBannerWErr']                     = "Az alapértelmezett reklám fontosság pozitív egész szám legyen";
$GLOBALS['strDefaultCampaignWErr']                   = "Az alapértelmezett kampány fontosság pozitív egész szám legyen";

$GLOBALS['strPublisherDefaults']                     = "Weboldal alapértelmezések";
$GLOBALS['strModesOfPayment']                        = "Fizetési módok";
$GLOBALS['strCurrencies']                            = "Valuták";
$GLOBALS['strCategories']                            = "Kategóriák";
$GLOBALS['strHelpFiles']                             = "Súgó fájlok";
$GLOBALS['strHasTaxID']                              = "Adó azonosító";
$GLOBALS['strDefaultApproved']                       = "Jóváhagyott választónégyzet";

// CSV Import Settings

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Megengedett követelés típusok";
$GLOBALS['strInvocationDefaults']                    = "Követelések alapértelmezett beállításai";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Harmadik fél által készített kattintáskövetés alapértelmezettként";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Banner kézbesítési gyorsítótár beállításai";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Banner naplózás blokkolásának beállításai";
$GLOBALS['strLogAdRequests']                         = "Minden banner lekérés naplózása";
$GLOBALS['strLogAdImpressions']                      = "Minden banner megtekintés naplózása";
$GLOBALS['strLogAdClicks']                           = "Minden kattintás naplózása amikor a látogató a bannerre kattint";
$GLOBALS['strReverseLookup']                         = "Látogató kiszolgálónevének visszakeresése ha nincs megadva";
$GLOBALS['strProxyLookup']                           = "Valódi IP cím keresése amikor a látogató proxy szerver mögött van";
$GLOBALS['strPreventLogging']                        = "Banner naplózás blokkolásának beállításai";
$GLOBALS['strIgnoreHosts']                           = "A következő IP címek és kiszolgálónevek kihagyása a naplózásból";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strCsvImport']                             = "Offline konverziók feltöltésének engedélyezése";
$GLOBALS['strBlockAdViews']                          = "Hirdetés megtekintés számlálásának kihagyása ha a látogató látta az adott hírdetés/zóna párt a megadott időn belül (másodpercben)";
$GLOBALS['strBlockAdViewsError']                     = "A hírdetés megtekintés blokkolás értéke csak nem negatív egész lehet";
$GLOBALS['strBlockAdClicks']                         = "Hírdetés kattintás számlálásának kihagyása ha a látogató kattintott az adott hírdetés/zóna párra a megadott időn belül (másodpercben)";
$GLOBALS['strBlockAdClicksError']                    = "A hírdetés kattintás blokkolás értéke csak nem negatív egész lehet";
$GLOBALS['strMaintenanceOI']                         = "Karbantartás művelet időköze (percben)";
$GLOBALS['strMaintenanceOIError']                    = "A karbantartás művelet időköze nem érvényes - tekintse meg a dokumentációt az érvényes értékekről";
$GLOBALS['strPrioritySettings']                      = "Prioritás beállítások";
$GLOBALS['strPriorityInstantUpdate']                 = "Hirdetés prioritások frissítése rögtön a változtatások mentése után";
$GLOBALS['strDefaultImpConWindow']                   = "A hirdetés megtekintés alapértelmezett kapcsolati ideje (másodpercben)";
$GLOBALS['strDefaultImpConWindowError']              = "Ha meg van adva, a hirdetés megtekintés kapcsolati ideje csak pozitív egész lehet";
$GLOBALS['strDefaultCliConWindow']                   = "A hirdetés kattintás alapértelmezett kapcsolati ideje (másodpercben)";
$GLOBALS['strDefaultCliConWindowError']              = "Ha meg van adva, a hirdetés kattintás kapcsolati ideje csak pozitív egész lehet";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Figyelmeztetés küldése ha a hátrelévő megtekintések száma kevesebb mint";
$GLOBALS['strWarnLimitErr']                          = "Figyelmeztetési határ csak pozitív egész lehet";
$GLOBALS['strWarnLimitDays']                         = "Figyelmeztetés küldése ha a hátralévő napok száma kevesebb mint ";
$GLOBALS['strWarnLimitDaysErr']                      = "A figyelmeztetési napok száma pozitív egész kellene hogy legyen";
$GLOBALS['strWarnAdmin']                             = "Figyelmeztetés küldése az adminisztrátornak ha a kampány hamarosan lejár";
$GLOBALS['strWarnClient']                            = "Figyelmeztetés küldése a hirdetőnek ha a kampány hamarosan lejár";
$GLOBALS['strWarnAgency']                            = "Figyelmeztetés küldése az ügynökségnek ha a kampány hamarosan lejár";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Felhasználói felület beállításai";
$GLOBALS['strGeneralSettings']                       = "�?ltalános beállítások";
$GLOBALS['strAppName']                               = "Alkalmazás neve";
$GLOBALS['strMyHeader']                              = "Fejléc fájl helye";
$GLOBALS['strMyHeaderError']                         = "Az Ön által megadott helyen nem található fejléc fájl";
$GLOBALS['strMyFooter']                              = "Lábléc fájl helye";
$GLOBALS['strMyFooterError']                         = "Az Ön által megadott helyen nem található lábléc fájl";
$GLOBALS['strDefaultTrackerStatus']                  = "Alapértelmezett követő státusz";
$GLOBALS['strDefaultTrackerType']                    = "Alapértelmezett követő típus";

$GLOBALS['strMyLogo']                                = "Egyedi logó fájl neve";
$GLOBALS['strMyLogoError']                           = "Nincs a megadott logó fájl az admin/images könyvtárban";
$GLOBALS['strGuiHeaderForegroundColor']              = "Fejléc előtér színe";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Fejléc háttér színe";
$GLOBALS['strGuiActiveTabColor']                     = "Az aktív fül színe";
$GLOBALS['strGuiHeaderTextColor']                    = "A fejléc szövegének színe";
$GLOBALS['strColorError']                            = "Kérjük a színeket RGB formában adja meg (pl: 0066CC)";

$GLOBALS['strGzipContentCompression']                = "GZIP tartalom tömörítés használata";
$GLOBALS['strClientInterface']                       = "Hirdetői felület";
$GLOBALS['strReportsInterface']                      = "Jelentés felület";
$GLOBALS['strClientWelcomeEnabled']                  = "Hirdető üdvözlő üzenet engedélyezése";
$GLOBALS['strClientWelcomeText']                     = "Üdvözlő szöveg<br />(HTML tagek használata megengedett)";

$GLOBALS['strPublisherInterface']                    = "Weboldali felület";
$GLOBALS['strPublisherAgreementEnabled']             = "Belépés szabályozás engedélyezése a Felhasználói feltételeket el nem fogadó weboldalaknak";
$GLOBALS['strPublisherAgreementText']                = "Belépési szöveg (HTML tagek használata megengedett)";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "Kísérleti";
$GLOBALS['strKeywordRetrieval']             = "Kulcsszó visszakeresés";
$GLOBALS['strBannerRetrieval']              = "Reklám visszakeresési mód";
$GLOBALS['strRetrieveRandom']               = "Véletlenszerű reklám visszakeresés (alapértelmezett)";
$GLOBALS['strRetrieveNormalSeq']            = "Normál soros reklám viszakeresés";
$GLOBALS['strWeightSeq']                    = "Fontosságon alapuló soros reklám visszakeresés";
$GLOBALS['strFullSeq']                      = "Teljes soros reklám visszakeresés";
$GLOBALS['strUseConditionalKeys']           = "Logikai műveleti jelek engedélyezése a közvetlen kiválasztás használatakor";
$GLOBALS['strUseMultipleKeys']              = "Több kulcsszó engedélyezése a közvetlen kiválasztás használatakor";

$GLOBALS['strTableBorderColor']             = "Táblázatszegély színe";
$GLOBALS['strTableBackColor']               = "Táblázatháttér színer";
$GLOBALS['strTableBackColorAlt']            = "Táblázatháttér színe (választható)";
$GLOBALS['strMainBackColor']                = "Fő háttérszín";
$GLOBALS['strOverrideGD']                   = "A GD képformátum hatálytalanítása";
$GLOBALS['strTimeZone']                     = "Időzóna";

?>
