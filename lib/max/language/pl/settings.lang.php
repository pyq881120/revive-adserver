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
$GLOBALS['strInstall']                      = "Zainstaluj";
$GLOBALS['strChooseInstallLanguage']        = "Wybierz język dla procedury instalacji";
$GLOBALS['strLanguageSelection']            = "Język";
$GLOBALS['strDatabaseSettings']             = "Ustawienia Bazy Danych";
$GLOBALS['strAdminSettings']                = "Ustawienia Administratora";
$GLOBALS['strAdminAccount']                 = "Konto Administratora";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Ustawienia zaawansowane";
$GLOBALS['strOtherSettings']                = "Inne Ustawienia";
$GLOBALS['strSpecifySyncSettings']          = "Ustawienia synchronizacji";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strWarning']                      = "Uwaga";
$GLOBALS['strFatalError']                   = "Wystąpił błąd krytyczny";
$GLOBALS['strUpdateError']                  = "An error occurred while updating";
$GLOBALS['strBtnContinue']                  = "Dalej »";
$GLOBALS['strBtnRecover']                   = "Odzyskaj »";
$GLOBALS['strBtnStartAgain']                   = "Rozpocznij aktualizację od początku »";
$GLOBALS['strBtnGoBack']                    = "« Wstecz";
$GLOBALS['strBtnAgree']                     = "Wyrażam zgodę »";
$GLOBALS['strBtnDontAgree']                 = "« Nie wyrażam zgody";
$GLOBALS['strBtnRetry']                     = "Próbuj ponownie";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Połączenie z bazą danych nie było możliwe, sprawdź poprawność wpisanych danych";
$GLOBALS['strCreateTableTestFailed']        = "Użytkownik, którego podałeś nie ma uprawnień do tworzenia lub zmiany tabel w bazie danych, skontaktuj się z administratorem bazy danych.";
$GLOBALS['strUpdateTableTestFailed']        = "Użytkownik, którego podałeś nie ma uprawnień do zmiany struktury bazy danych, skontaktuj się z administratorem bazy danych.";
$GLOBALS['strTablePrefixInvalid']           = "Prefiks tabeli zawiera nieprawidłowe znaki";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Przed kontynuacją popraw te potencjalne problemy:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Ignoruj ostrzeżenia";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "Opcja konfiguracyjna PHP register_globals musi być włączona.";
$GLOBALS['strWarningRegisterArgcArv']       = "Aby uruchomić działania konserwacyjne z polecenia należy włączyć zmienną konfiguracji PHP register_argc_argv.";
$GLOBALS['strWarningMagicQuotesGPC']        = "Opcja konfiguracyjna PHP magic_quotes_gpc musi być włączona.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "Opcja konfiguracyjna PHP magic_quotes_runtime musi być wyłączona.";
$GLOBALS['strWarningFileUploads']           = "Opcja konfiguracyjna PHP file_uploads musi być wyłączona.";
$GLOBALS['strWarningTrackVars']             = "Opcja konfiguracyjna PHP variable track_vars musi być wyłączona.";
$GLOBALS['strWarningPREG']                  = "Wersja PHP, której używasz nie posiada obsługi wyrażeń regularnych w formacie PERL'a. Musisz włączyć rozszerzenie PREG zanim będziesz mógł przejść dalej.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Aktualizacja bazy danych nie jest w tej chwili możliwa. Jeżeli zdecydujesz się kontynuować, wszystkie istniejące bannery, statystyki i reklamodawcy zostaną usunięci.";
$GLOBALS['strIgnoreErrors']                 = "Ignore errors";
$GLOBALS['strRetryUpdate']                  = "Retry updating";
$GLOBALS['strTableNames']                   = "Nazwy Tabeli";
$GLOBALS['strTablesPrefix']                 = "Prefiks nazw tabeli";
$GLOBALS['strTablesType']                   = "Typ tabeli";


$GLOBALS['strRecoveryRequiredTitle']    = "W czasie poprzedniej próby aktualizacji wystąpiły błędy";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Ostrzeżenie: plik UPGRADE wciąż znajduje się w folderze var. Nie możemy go usunąć ze względu na ograniczone uprawnienia. Musisz usunąć plik własnoręcznie.";
$GLOBALS['strRemoveUpgradeFile']               = "Musisz usunąć plik UPGRADE z folderu var.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Aktualizacja systemu zakończyła się pomyślnie. Pozostałe instrukcje pomogą Ci zaktualizować konfigurację Twojego nowego serwera do obsługi reklam.";
$GLOBALS['strErrorOccured']                 = "Wystąpiły następujące błędy:";
$GLOBALS['strErrorInstallDatabase']         = "Nie udało się strowzyć struktury bazy danych.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "Nie można było połączyć się z bazą danych.";

$GLOBALS['strErrorWritePermissions']        = "Wykryto błędy w dostępie do pliku. Błędy muszą zostać naprawione zanim przejdziesz dalej.<br/>Aby naprawić błędy w systemie Linux, spróbuj wpisać następujące polecenie(a):";
$GLOBALS['strErrorFixPermissionsCommand']   = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "Wykryto błędy w dostępie do pliku. Błędy muszą zostać naprawione zanim przejdziesz dalej.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL interfejsu administratora";
$GLOBALS['strDeliveryUrlPrefix']            = "URL serwera";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL serwera (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "URL pamięci plików graficznych";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL pamięci plików graficznych (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Błędna nazwa użytkownika lub hasło";

$GLOBALS['strUpgrade']                      = "Aktualizacja";
$GLOBALS['strSystemUpToDate']               = "Twój system ma już zainstalowaną najnowszą wersję programu, aktualizacja nie jest potrzebna. <br />Kliknij <b>Dalej</b> aby przejść na stronę główną.";
$GLOBALS['strSystemNeedsUpgrade']           = "Struktura bazy danych i plik konfiguracyjny muszą zostać zaktualizowane, aby zapewnić prawidłowe funkcjonowanie systemu. Kliknij <b>Dalej</b> aby rozpocząć proces aktualizacji. <br /><br />Zależnie od tego, z której wersji dokonywana jest aktualizacja i ile statystyk znajduje się już w bazie danych, może to spowodować znaczne obciążenie dla serwera. Przygotuj się na to, że aktualizacja może potrwać do kilkunastu minut.";
$GLOBALS['strSystemUpgradeBusy']            = "System w trakcie aktualizacji, proszę zaczekać...";
$GLOBALS['strSystemRebuildingCache']        = "Odbudowywanie cache'u, proszę zaczekać...";
$GLOBALS['strServiceUnavalable']            = "System jest obecnie niedostępny. Trwa aktualizacja";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Wybierz sekcję";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Nie można wprowadzić zmian w pliku config";
$GLOBALS['strUnableToWritePrefs']                    = "Nie można wprowadzić preferencji w bazie danych";
$GLOBALS['strImageDirLockedDetected']	             = "Wskazany <b>Folder Obrazów</b> nie jest otwarty do edycji. <b>Zmień uprawnienia w folderze lub utwórz folder, aby kontynuować.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Lista sprawdzająca konfiguracji";
$GLOBALS['strConfigurationSettings']                 = "Ustawienia konfiguracji";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Ustawienia Administratora";
$GLOBALS['strAdministratorAccount']                  = "The System Administrator Account";
$GLOBALS['strLoginCredentials']                      = "Informacje logowania";
$GLOBALS['strAdminUsername']                         = "Nazwa użytkownika Administratora";
$GLOBALS['strAdminPassword']                         = "Hasło Administratora";
$GLOBALS['strInvalidUsername']                       = "Nieprawidłowa nazwa użytkownika";
$GLOBALS['strBasicInformation']                      = "Informacje podstawowe";
$GLOBALS['strAdminFullName']                         = "Imię i nazwisko admina";
$GLOBALS['strAdminEmail']                            = "E-mail admina";
$GLOBALS['strAdministratorEmail']                    = "E-mail Administratora";
$GLOBALS['strCompanyName']                           = "Nazwa firmy";
$GLOBALS['strAdminCheckUpdates']                     = "Sorawdź aktualizacje";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Przy każdym logowaniu";
$GLOBALS['strAdminCheckDaily']                       = "Codziennie";
$GLOBALS['strAdminCheckWeekly']                      = "Co tydzień";
$GLOBALS['strAdminCheckMonthly']                     = "Co miesiąc";
$GLOBALS['strAdminCheckNever']                       = "Nigdy";
$GLOBALS['strNovice']                                = "Usuwanie wymaga potwierdzenia ze względu na bezpieczeństwo";
$GLOBALS['strUserlogEmail']                          = "Loguj wszystkie wychodzące wiadomości e-mail";
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Please enable <a href='account-settings-update.php'>check for updates</a> to use the dashboard.";
$GLOBALS['strTimezone']                              = "Strefa czasowa";
$GLOBALS['strTimezoneEstimated']                     = "Szacowana strefa czasowa";
$GLOBALS['strTimezoneGuessedValue']                  = "Strefa czasowa serwera jest niepoprawnie skonfigurowana w PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Sprawdź %DOCS% odnośnie ustwień tej zmiennej w PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "dokumentacja";
$GLOBALS['strAdminSettingsTitle']                    = "Utwórz konto administratora";
$GLOBALS['strAdminSettingsIntro']                    = "Wypełnij formularz, aby utworzyć konto administratora serwera.";
$GLOBALS['strConfigSettingsIntro']                   = "Proszę sprawdzić ustawienia konfiguracji poniżej oraz wprowadzić wymagane zmiany przed przejściem dalej. Jeśli nie jesteś pewny, pozostaw wartości domyślne.";

$GLOBALS['strEnableAutoMaintenance']	             = "Jeśli nie ustawiono konserwacji, przeprowadź ją automatycznie w trakcie dostarczania";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Ustawienia Bazy Danych";
$GLOBALS['strDatabaseServer']                        = "Ogólne ustawienia serwera bazy danych";
$GLOBALS['strDbLocal']                               = "Użyj lokalnego połączenia z portem";
$GLOBALS['strDbType']                                = "Typ bazy danych";
$GLOBALS['strDbHost']                                = "Adres serwera";
$GLOBALS['strDbSocket']                              = "Port bazy danych";
$GLOBALS['strDbPort']                                = "Numer portu bazy danych";
$GLOBALS['strDbUser']                                = "Nazwa użytkownika";
$GLOBALS['strDbPassword']                            = "Hasło";
$GLOBALS['strDbName']                                = "Nazwa bazy danych";
$GLOBALS['strDbNameHint']                            = "Baza danych zostanie utworzona, jeżeli nie istnieje";
$GLOBALS['strDatabaseOptimalisations']               = "Optymalizacja bazy danych";
$GLOBALS['strPersistentConnections']                 = "Użyj połączeń stałych";
$GLOBALS['strCantConnectToDb']                       = "Nie można połączyć z bazą danych";
$GLOBALS['strCantConnectToDbDelivery']               = 'Nie można połączyć z bazą danych dostarczania';
$GLOBALS['strDemoDataInstall']                       = "Zainstaluj dane przykładowe";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Ustawienia e-maila";
$GLOBALS['strEmailAddresses']                        = "Wyślij \"Od\" - adres e-mail";
$GLOBALS['strEmailFromName']                         = "Wyślij \"Od\" - nazwa";
$GLOBALS['strEmailFromAddress']                      = "Wyślij \"Od\" - adres e-mail";
$GLOBALS['strEmailFromCompany']                      = "Wyślij \"Od\" - firma";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "Włącz łatkę qmail";
$GLOBALS['strEnableQmailPatch']                      = "Włącz łatkę qmail";
$GLOBALS['strEmailHeader']                           = "Nagłówki e-mail";
$GLOBALS['strEmailLog']                              = "Log e-maila";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Ustawienia Audytu";
$GLOBALS['strEnableAudit']                           = "Włącz Audyt";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Ustawienia protokołowania diagnostycznego";
$GLOBALS['strProduction']                            = "Serwer działający";
$GLOBALS['strEnableDebug']                           = "Włącz protokołowanie diagnostyczne";
$GLOBALS['strDebugMethodNames']                      = "Uwzględnij nazwę metody w protokole diagnostycznym";
$GLOBALS['strDebugLineNumbers']                      = "Uwzględnij numer linii w protokole diagnostycznym";
$GLOBALS['strDebugType']                             = "Typ protokołu diagnostycznego";
$GLOBALS['strDebugTypeFile']                         = "Plik";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "Baza danych SQL";
$GLOBALS['strDebugTypeSyslog']                       = "Syslog";
$GLOBALS['strDebugName']                             = "Nazwa protokołu diagnostycznego, kalendarz, tabela SQL, <br />lub urządzenie Syslog";
$GLOBALS['strDebugPriority']                         = "Poziom priorytetu diagnozowania";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Pełne dane";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Dane standardowe";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE - Wskazówki ogólne";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING - Ostrzeżenie";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR - Błędy proste";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT - Błędy poważne";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT - Błędy krytyczne";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Dane minimalne";
$GLOBALS['strDebugIdent']                            = "Popraw ścieżkę identyfikacyjną";
$GLOBALS['strDebugUsername']                         = "Nazwa użytkownika serwera mCal, SQL";
$GLOBALS['strDebugPassword']                         = "Hasło serwera mCal, SQL";
$GLOBALS['strProductionSystem']                      = "System produkcji";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Ustawienia dostarczania";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Ścieżka strony";
$GLOBALS['strDeliveryPath']                          = "Ścieżka dostarczania";
$GLOBALS['strImagePath']                             = "Ścieżka obrazów";
$GLOBALS['strDeliverySslPath']                       = "SSL - Ścieżka dostarczania";
$GLOBALS['strImageSslPath']                          = "SSL - Ścieżka obrazów";
$GLOBALS['strImageStore']                            = "Folder obrazów";
$GLOBALS['strTypeWebSettings']                       = "Konfiguracja banerów lokalnych (Webserwer)";
$GLOBALS['strTypeWebMode']                           = "Metoda przechowywania";
$GLOBALS['strTypeWebModeLocal']                      = "Katalog lokalny";
$GLOBALS['strTypeDirError']                          = "Serwer nie może dokonywać wpisów w katalogu lokalnym";
$GLOBALS['strTypeWebModeFtp']                        = "Zewnętrzny serwer FTP";
$GLOBALS['strTypeWebDir']                            = "Katalog lokalny";
$GLOBALS['strTypeFTPHost']                           = "Adres serwera FTP";
$GLOBALS['strTypeFTPDirectory']                      = "Katalog serwera";
$GLOBALS['strTypeFTPUsername']                       = "Login";
$GLOBALS['strTypeFTPPassword']                       = "Hasło";
$GLOBALS['strTypeFTPPassive']                        = "Używaj pasywnego FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "Podany katalog na serwerze nie istnieje";
$GLOBALS['strTypeFTPErrorConnect']                   = "Błąd połączenia z serwerem FTP, login lub hasło jest niepoprawne";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Zainstalowana wersja PHP nie obsługuje FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "Nie można przesłać pliku na serwer FTP, sprawdź ustawienia uprawnień hosta";
$GLOBALS['strTypeFTPErrorHost']                      = "Nazwa hosta serwera FTP nie jest poprawna";
$GLOBALS['strDeliveryFilenames']                     = "Nazwy plików przychodzących";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Kliknięcie";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Zmienne konwersji";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Zawartość reklamy";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Konwersja";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Konwersja (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Ramka (frame) reklamy";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Obraz reklamy";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Reklama (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Warstwa reklamy";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Log reklamy";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Reklama typu Popup";
$GLOBALS['strDeliveryFilenamesAdView']               = "Wyświetlenie reklamy";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "Kod wywołujący XML RPC";
$GLOBALS['strDeliveryFilenamesLocal']                = "Lokalny kod wywołujący";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Sterownik główny";
$GLOBALS['strDeliveryFilenamesFlash']                = "Animacja Flash (może być pełny URL)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Ustawienia cache banerów";
$GLOBALS['strDeliveryCacheLimit']                    = "Okres czasu pomiędzy aktualizacjami cache banerów (w sekundach)";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "Użyj zdalnego serwera głównego";
$GLOBALS['strOriginType']                            = "Typ serwera głównego";
$GLOBALS['strOriginHost']                            = "Nazwa serwera głównego";
$GLOBALS['strOriginPort']                            = "Numer portu głównej bazy danych";
$GLOBALS['strOriginScript']                          = "Plik skryptowy głównej bazy danych";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Czas oczekiwania (w sekundach)";
$GLOBALS['strOriginProtocol']                        = "Protokół serwera głównego";

$GLOBALS['strDeliveryAcls']                          = "Ewaluacja limitów dostarczania banerów w trakcie ich dostarczania";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "Ukryj kanał podczas dostarczania reklam";
$GLOBALS['strDeliveryExecPhp']                       = "Zezwól na wykonywanie kodu PHP w reklamach <br /> (UWAGA: Obniża poziom bezpieczeństwa)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Ogranicznik śledzenia kliknięć strony trzeciej";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Ogólny domyślny URL banera obrazu";
$GLOBALS['strP3PSettings']                           = "Polityka prywatności P3P";
$GLOBALS['strUseP3P']                                = "Użyj deklaracji P3P";
$GLOBALS['strP3PCompactPolicy']                      = "Skrócona deklaracja P3P";
$GLOBALS['strP3PPolicyLocation']                     = "Lokalizacja deklaracji P3P";

// General Settings
$GLOBALS['generalSettings']                          = "Global General System Settings";
$GLOBALS['uiEnabled']                                = "Interfejs użytkownika aktywny";
$GLOBALS['defaultLanguage']                          = "Default System Language<br />(Each user can select their own language)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting";
$GLOBALS['strGeotargeting']                          = "Geotargeting";
$GLOBALS['strGeotargetingType']                      = "Typ modułu Geotargetingu";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Użyj bazy MaxMind GeoLiteCountry";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "Lokalizacja Bazy Danych Państw MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "Lokalizacja Bazy Danych Regionów MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "Lokalizacja Bazy Danych Miast MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "Lokalizacja Bazy Danych Obszaru MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "Lokalizacja Bazy Danych DMA MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "Lokalizacja Bazy Danych Organizacji MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "Lokalizacja Bazy Danych ISP MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "Lokalizacja Bazy Danych Netspeed MaxMind GeoIP";
$GLOBALS['strGeoShowUnavailable']                    = "Pokaż limity geotargetingu, nawet jeśli dane GeoIP nie są dostępne";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "We wskazanej lokalizacji nie znaleziono Bazy Danych Państw MaxMind GeoIP";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "We wskazanej lokalizacji nie znaleziono Bazy Danych Regionów MaxMind GeoIP";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "We wskazanej lokalizacji nie znaleziono Bazy Danych Miast MaxMind GeoIP";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "We wskazanej lokalizacji nie znaleziono Bazy Danych Obszaru MaxMind GeoIP";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "We wskazanej lokalizacji nie znaleziono Bazy Danych MaxMind GeoIP DMA";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "We wskazanej lokalizacji nie znaleziono Bazy Danych Organizacji MaxMind GeoIP";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "We wskazanej lokalizacji nie znaleziono Bazy Danych ISP MaxMind GeoIP";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "We wskazanej lokalizacji nie znaleziono Bazy Danych Netspeed MaxMind GeoIP";

// Interface Settings
$GLOBALS['strInventory']                             = "Inwentarz";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "Pokaż dodatkowe informacje o kampanii na stronie <i>Kampanie</i>";
$GLOBALS['strShowBannerInfo']                        = "Pokaż dodatkowe informacje o banerze na stronie <i>Banery</i>";
$GLOBALS['strShowCampaignPreview']                   = "Pokaż podgląd wszystkich banerów na stronie <i>Banery</i>";
$GLOBALS['strShowBannerHTML']                        = "Pokaż baner zamiast zwykłego kodu HTML w podglądzie banerów HTML";
$GLOBALS['strShowBannerPreview']                     = "Pokaż podgląd banera na górze stron, które wyświetlają banery";
$GLOBALS['strHideInactive']                          = "Ukryj nieaktywne";
$GLOBALS['strGUIShowMatchingBanners']                = "Pokaż pasujące banery na stronach <i>Podłączony baner</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Pokaż nadrzędne kampanie na stronach <i>Podłączony baner</i>";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Ustawienie domyślne Kampanii na anonimowe";
$GLOBALS['strStatisticsDefaults']                    = "Statystyki";
$GLOBALS['strBeginOfWeek']                           = "Początek tygodnia";
$GLOBALS['strPercentageDecimals']                    = "Cyfr po przecinku";
$GLOBALS['strWeightDefaults']                        = "Waga domyślna";
$GLOBALS['strDefaultBannerWeight']                   = "Domyślna waga banera";
$GLOBALS['strDefaultCampaignWeight']                 = "Domyślna waga kampanii";
$GLOBALS['strDefaultBannerWErr']                     = "Domyślna waga bannera powinna być dodatnią liczbę całkowitą";
$GLOBALS['strDefaultCampaignWErr']                   = "Domyślna waga kampanii powinna być dodatnią liczbę całkowitą";
$GLOBALS['strConfirmationUI']                        = "Potwierdzenie w interfejsie użytkownika";

$GLOBALS['strPublisherDefaults']                     = "Domyślne ustawienia strony";
$GLOBALS['strModesOfPayment']                        = "Metody płatności";
$GLOBALS['strCurrencies']                            = "Waluta";
$GLOBALS['strCategories']                            = "Kategorie";
$GLOBALS['strHelpFiles']                             = "Pliki pomocy";
$GLOBALS['strHasTaxID']                              = "NIP";
$GLOBALS['strDefaultApproved']                       = "Zatwierdzone - okienko do odznaczenia";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Choose Advertiser";
$GLOBALS['strChooseCampaign']                        = "Choose Campaign";
$GLOBALS['strChooseCampaignBanner']                  = "Choose Banner";
$GLOBALS['strChooseTracker']                         = "Choose Tracker";
$GLOBALS['strDefaultConversionStatus']               = "Domyślny status konwersji";
$GLOBALS['strDefaultConversionType']                 = "Domyślny typ konwersji";
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
$GLOBALS['strAllowedInvocationTypes']                = "Dopuszczalne typy kodu wywołującego";
$GLOBALS['strInvocationDefaults']                    = "Domyślne ustawienia kodu wywołującego";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Niezależne śledzenie kliknięć jako ustawienie domyślne";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Ustawienia dostarczania banerów";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Ustawienia protokołowania banerów";
$GLOBALS['strLogAdRequests']                         = "Protokołuj żądanie przy każdym żądaniu banera";
$GLOBALS['strLogAdImpressions']                      = "Protokołuj odsłonę przy każdym wyświetlonym banerze";
$GLOBALS['strLogAdClicks']                           = "Protokołuj kliknięcie za każdym razem, gdy odwiedzający klika na baner";
$GLOBALS['strLogTrackerImpressions']                 = "Loguj odsłonę tackera każdorazowo, gdy wyświetlany jest sygnał trackera";
$GLOBALS['strReverseLookup']                         = "Spróbuj ustalić nazwę hosta odwiedzającego, jeżeli nie została podana przez serwer";
$GLOBALS['strProxyLookup']                           = "Spróbuj ustalić prawdziwy adres IP odwiedzającego, jeżeli korzysta on z Proxy";
$GLOBALS['strPreventLogging']                        = "Zablokuj ustawienia protokołowania banerów";
$GLOBALS['strIgnoreHosts']                           = "Nie protokołuj statystyk dla odwiedzających używających jednego z poniższych adresów IP lub hostów";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Nie</b> loguj statystyk dla klientów, których aplikacja kliencka zawiera jeden z następujących ciągów (po jednym w rubryce)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Loguj wyłącznie</b> statystyki dla klientów, których aplikacja kliencka zawiera jeden z następujących ciągów (po jednym w rubryce)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Ustawienia przechowywania banerów";

// Campaign ECPM settings
$GLOBALS['strEnableECPM']                            = "Use eCPM optimized priorities instead of remnant-weighted priorities";
$GLOBALS['strEnableContractECPM']                    = "Use eCPM optimized priorities instead of standard contract priorities";
$GLOBALS['strEnableECPMfromRemnant']                 = "(If you enable this feature all your remnant campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strEnableECPMfromECPM']                    = "(If you disable this feature some of your active eCPM campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strInactivatedCampaigns']                  = "List of campaigns which became inactive due to the changes in preferences:";

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Ustawienia konserwacji";
$GLOBALS['strConversionTracking']                    = "Ustawienia śledzenia konwersji";
$GLOBALS['strEnableConversionTracking']              = "Uruchom śledzenie konwersji";
$GLOBALS['strCsvImport']                             = "Zezwalaj na wysyłanie konwersji offline";
$GLOBALS['strBlockAdViews']                          = "Nie zliczaj Odsłon, jeśli odwiedzający widział tę samą parę reklama/strefa w ciągu określonego okresu czasu (w sekundach)";
$GLOBALS['strBlockAdViewsError']                     = "Wartość blokowania Odsłon musi być dodatnią liczbą całkowitą";
$GLOBALS['strBlockAdClicks']                         = "Nie zliczaj Kliknięć, jeśli odwiedzający kliknął tę samą parę reklama/strefa w ciągu określonego okresu czasu (w sekundach)";
$GLOBALS['strBlockAdClicksError']                    = "Wartość blokowania Kliknięć musi być dodatnią liczbą całkowitą";
$GLOBALS['strMaintenanceOI']                         = "Odstęp między przeprowadzaniem konserwacji (w minutach)";
$GLOBALS['strMaintenanceOIError']                    = "Odstęp między przeprowadzaniem konserwacji jest nieprawidłowo określony - definicję prawidłowych wartości znajdziesz w dokumentacji";
$GLOBALS['strPrioritySettings']                      = "Ustawienia priorytetów";
$GLOBALS['strPriorityInstantUpdate']                 = "Aktualizuj priorytety reklamy natychmiast po modyfikacjach w interfejsie";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Domyślny okres walidacji Odsłony (w sekundach)";
$GLOBALS['strDefaultImpConWindowError']              = "Domyślny okres walidacji Odsłony musi być dodatnią liczbą całkowitą";
$GLOBALS['strDefaultCliConWindow']                   = "Domyślny okres walidacji Kliknięcia (w sekundach)";
$GLOBALS['strDefaultCliConWindowError']              = "Domyślny okres walidacji Kliknięcia musi być dodatnią liczbą całkowitą";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Limit Ostrzeżenia - wyślij ostrzeżenie, gdy ilość pozostałych odsłon jest mniejsza niż ta określona tutaj";
$GLOBALS['strWarnLimitErr']                          = "Limit ostrzeżenia musi być dodatnią liczbą całkowitą";
$GLOBALS['strWarnLimitDays']                         = "Wyślij ostrzeżenie, gdy ilość dni jest mniejsza niż ta określona tutaj";
$GLOBALS['strWarnLimitDaysErr']                      = "Ostrzeżenie: Limit dni powinien być liczbą dodatnią";
$GLOBALS['strAllowEmail']                            = "Ogólne zezwolenie na wysyłanie e-maili";
$GLOBALS['strEmailAddressFrom']                      = "Adres e-mail, z którego wysyłane są raporty";
$GLOBALS['strEmailAddressName']                      = "Nazwa firmy lub osoby, która figuruje w syganturze wiadomości";
$GLOBALS['strWarnAdmin']                             = "Wyślij ostrzeżenie do administratora zawsze, gdy kampania dobiega końca";
$GLOBALS['strWarnClient']                            = "Wyślij ostrzeżenie do reklamodawcy zawsze, gdy kampania dobiega końca";
$GLOBALS['strWarnAgency']                            = "Wyślij ostrzeżenie do agencji zawsze, gdy kampania dobiega końca";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Konfiguracja interfejsu użytkownika";
$GLOBALS['strGeneralSettings']                       = "Ustawienia ogólne";
$GLOBALS['strAppName']                               = "Nazwa programu";
$GLOBALS['strMyHeader']                              = "Mój nagłówek";
$GLOBALS['strMyHeaderError']                         = "Plik nagłówka nie istnieje w podanej lokalizacji";
$GLOBALS['strMyFooter']                              = "Moja stopka";
$GLOBALS['strMyFooterError']                         = "Plik stopki nie istnieje w podanej lokalizacji";
$GLOBALS['strDefaultTrackerStatus']                  = "Domyślny status trackera";
$GLOBALS['strDefaultTrackerType']                    = "Domyślny typ trackera";
$GLOBALS['strSSLSettings']                           = "Ustawienia SSL";
$GLOBALS['requireSSL']                               = "Wymuś dostęp SSL w interfejsie użytkownika";
$GLOBALS['sslPort']                                  = "Port SSL używany przez serwer WWW";
$GLOBALS['strDashboardSettings']                     = "Ustawienia Panelu Nawigacyjnego";

$GLOBALS['strMyLogo']                                = "Nazwa pliku logo";
$GLOBALS['strMyLogoError']                           = "Plik logo nie istnieje w katalogu admin/images";
$GLOBALS['strGuiHeaderForegroundColor']              = "Kolor planu pierwszego w nagłówku";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Kolor tła nagłówka";
$GLOBALS['strGuiActiveTabColor']                     = "Kolor aktywnej zakładki";
$GLOBALS['strGuiHeaderTextColor']                    = "Kolor tekstu w nagłówku";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Wpisz kolory w formacie RGB, np.'0066CC'";

$GLOBALS['strGzipContentCompression']                = "Użyj kompresji zawartości GZIP";
$GLOBALS['strClientInterface']                       = "Interfejs Reklamodawcy";
$GLOBALS['strReportsInterface']                      = "Interfejs raportów";
$GLOBALS['strClientWelcomeEnabled']                  = "Włącz wiadomości powitalne dla Reklamodawcy";
$GLOBALS['strClientWelcomeText']                     = "Tekst powitalny<br />(znaczniki HTML dozwolone)";

$GLOBALS['strPublisherInterface']                    = "Interfejs Strony";
$GLOBALS['strPublisherAgreementEnabled']             = "Kontrola loginu dla Stron, które nie zaakceptowały Warunków Serwisu";
$GLOBALS['strPublisherAgreementText']                = "Tekst loginu (dopuszczalne znaczniki HTML)";

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

$GLOBALS['strExperimental']                 = "Eksperymentalne";
$GLOBALS['strKeywordRetrieval']             = "Słowa Kluczowe";
$GLOBALS['strBannerRetrieval']              = "Metoda Doboru Bannerów";
$GLOBALS['strRetrieveRandom']               = "Losowy wybór (domyślnie)";
$GLOBALS['strRetrieveNormalSeq']            = "Normalny, sekwencyjny wybór";
$GLOBALS['strWeightSeq']                    = "Sekwencyjny wybór w oparciu o wagę";
$GLOBALS['strFullSeq']                      = "Pełny wybór sekwencyjny";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "Zezwól na operatory logiczne przy bezpśrednim wyborze";
$GLOBALS['strUseMultipleKeys']              = "Zezwól na kilka słów kluczowych przy bezpośrednim wyborze";

$GLOBALS['strTableBorderColor']             = "Kolor Obramowania Tabeli";
$GLOBALS['strTableBackColor']               = "Kolor Tła Tabeli";
$GLOBALS['strTableBackColorAlt']            = "Kolor Tła Tabeli (Alternatywny)";
$GLOBALS['strMainBackColor']                = "Główny Kolor Tła";
$GLOBALS['strOverrideGD']                   = "Zignoruj Format Grafiki GD";
$GLOBALS['strTimeZone']                     = "Strefa Czasowa";

?>
