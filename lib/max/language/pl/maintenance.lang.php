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

// Main strings
$GLOBALS['strChooseSection']			= "Wybierz sekcję";
$GLOBALS['strAppendCodes']              = "Dołącz kody";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>Planowana konserwacja nie była uruchomiona w ciągu ostatniej godziny. Może to oznaczać, że nie została poprawnie skonfigurowana.</b>";

$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "
	Automatic maintenance is enabled, but it has not been triggered. Automatic maintenance is triggered only when ".MAX_PRODUCT_NAME." delivers banners.
    For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "
	Automatic maintenance is currently disabled, so when ".MAX_PRODUCT_NAME." delivers banners, automatic maintenance will not be triggered.
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
    However, if you are not going to set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>,
    then you <i>must</i> <a href='account-settings-maintenance.php'>enable automatic maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.
";

$GLOBALS['strAutoMantenaceEnabledAndRunning']   = "
	Automatic maintenance is enabled and will be triggered, as required, when ".MAX_PRODUCT_NAME." delivers banners.
	However, for the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndRunning']  = "
	However, automatic maintenance has recently been disabled. To ensure that ".MAX_PRODUCT_NAME." works correctly, you should
	either set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a> or
	<a href='account-settings-maintenance.php'>re-enable automatic maintenance</a>.
	<br><br>
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>Planowana konserwacja działa poprawnie.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>Automatyczna konserwacja działa poprawnie.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Jednakże, automatyczna konserwacja jest nadal włączona. Dla optymalnej wydajności, należy wyłączyć <a href='account-settings-maintenance.php'>automatyczną konserwację</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Przelicz priorytety";
$GLOBALS['strHighPriorityCampaigns']		= "Kampanie o wysokich priorytetach";
$GLOBALS['strAdViewsAssigned']			= "Odsłony przydzielone";
$GLOBALS['strLowPriorityCampaigns']		= "Kampanie o niskich priorytetach";
$GLOBALS['strPredictedAdViews']			= "Przewidziane Odsłony";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "Predykcja jest oparta na danych z tego i poprzedniego tygodnia. ";
$GLOBALS['strPriorityBasedLastDays']		= "Predykcja jest oparta na danych z kilku ostatnich dni. ";
$GLOBALS['strPriorityBasedYesterday']		= "Predykcja jest oparta na danych z wczoraj. ";
$GLOBALS['strPriorityNoData']			= "Nie ma wystarczających danych na których możnaby oprzeć przewidywania co o ilości Odsłon, które ten serwer może wytworzyć dzisiaj. Przydziały priorytetów będą bazowały jedynie na chwilowych danych statystycznych. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Powinno wystarczyć Odsłon aby zapewnić wykonanie limitów przydzielonych kampaniom o wysokim priorytecie. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Nie jest pewne czy wystarczy Odsłon aby zapewnić wykonanie limitów wszystkich kampanii o wysokim priorytecie. Z tego powodu kampanie o niskim priorytecie zostają chwilowo wyłączone. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Sprawdź cache banerów";
$GLOBALS['strRebuildBannerCache']		= "Odbuduj cache bannerów";
$GLOBALS['strBannerCacheErrorsFound'] = "Wykryto błędy w cache banerów. Banery będą działać, jeśli problemy zostaną naprawione manualnie.";
$GLOBALS['strBannerCacheOK'] = "Nie wykryto błędów. Cache banerów jest aktualne.";
$GLOBALS['strBannerCacheDifferencesFound'] = "Twoje cache banerów nie jest aktualne i wymaga odbudowania. Kliknij tu, aby automatycznie aktualizować cache.";
$GLOBALS['strBannerCacheFixed'] = "Cache banerów zostało pomyślnie odbudowane. Cache bazy danych jest aktualne.";
$GLOBALS['strBannerCacheRebuildButton'] = "Odbuduj";
$GLOBALS['strRebuildDeliveryCache']			= "Odbuduj cache banerów";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Cache dostarczania";
$GLOBALS['strAge']				= "Wiek";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n	Współdzielona pamięć jest obecnie wykorzystywana do przechowywania cache dostarczania.\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n	Baza danych jest obecnie wykorzystywana do przechowywania cache dostarczania.\\n";
$GLOBALS['strDeliveryCacheFiles']		= "Cache dostarczania jest obecnie przechowywane w różnych plikach na serwerze.";


// Storage
$GLOBALS['strStorage']				= "Przechowywanie";
$GLOBALS['strMoveToDirectory']			= "Przenieś obrazy przechowywane w bazie danych do katalogu";
$GLOBALS['strStorageExplaination']		= "\\n	Pliki graficzne wykorzystywane przez banery lokalne są przechowane w bazie danych lub katalogu. Jeśli przechowujesz je w\\n	katalogu zmniejszy to obciążenie bazy danych i poprawi szybkość działania.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Kodowanie";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Konwertuj z następującego kodowania:";
$GLOBALS['strEncodingConvert']          = "Konwertuj";
$GLOBALS['strEncodingConvertTest']      = "Konwersja próbna";
$GLOBALS['strConvertThese']             = "Następujące dane zostaną zmienione, jeśli przejdziesz dalej";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	Wybrałeś opcję <i>statystyk skróconych</i>, jednakże stare statystyki są nadal w rozszerzonym formacie.\\n	Czy chcesz je skonwertować do nowego, skróconego formatu?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Wyszukiwanie aktualizacji. Proszę czekać...";
$GLOBALS['strAvailableUpdates']			= "Dostępne aktualizacje";
$GLOBALS['strDownloadZip']			= "Pobierz (zip.)";
$GLOBALS['strDownloadGZip']			= "Pobierz (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "Z nieznanego powodu nie jest możliwe pobranie<br />informacji o możliwych aktualizacjach. Spróbuj ponownie później.";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";

$GLOBALS['strCheckForUpdatesDisabled'] = "
    <b>Check for updates is disabled. Please enable via the
    <a href='account-settings-update.php'>update settings</a> screen.</b>
";

$GLOBALS['strNewVersionAvailable']		= "
	<b>A new version of ".MAX_PRODUCT_NAME." is available.</b><br /> It is recommended to install this update,
	because it may fix some currently existing problems and will add new features. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strSecurityUpdate']			= "
	<b>It is highly recommended to install this update as soon as possible, because it contains a number
	of security fixes.</b> The version of ".MAX_PRODUCT_NAME." which you are currently using might
	be vulnerable to certain attacks and is probably not secure. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strNotAbleToCheck']			= "
	<b>Because the XML extention isn't available on your server, ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available.</b>
";

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Jeśli chcesz sprawdzić, czy dostępna jest nowsza wersja, odwiedź naszą stronę.\\n";

$GLOBALS['strClickToVisitWebsite']		= "	Kliknij, aby odwiedzić naszą stronę";
$GLOBALS['strCurrentlyUsing'] 			= "Obecnie korzystasz z";
$GLOBALS['strRunningOn']				= "obsługujący";
$GLOBALS['strAndPlain']					= "i";


// Stats conversion
$GLOBALS['strConverting']			= "Konwersja";
$GLOBALS['strConvertingStats']			= "Konwertowanie statystyk...";
$GLOBALS['strConvertStats']			= "Konwertuj statystyki";
$GLOBALS['strConvertAdViews']			= "Odsłony skonwertowane,";
$GLOBALS['strConvertAdClicks']			= "Kliknięcia skonwertowane...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "Nie ma nic do konwersji...";
$GLOBALS['strConvertFinished']			= "Zakończone...";

$GLOBALS['strConvertExplaination']		= "\\n	Używasz obecnie skróconego formatu statystyk, ale nadal niektóre dane statystyczne są <br />\\n	w rozszerzonym formacie. Dopóki nie zostaną one skonwertowane do formatu skróconego <br />\\n	nie będą wykorzystywane podczas przeglądania tych stron. <br />\\n	Przed konwersją statystyk zrób kopię zapasową bazy danych! <br />\\n	Czy chcesz skonwertować rozszczerzone statystyki do nowego, skróconego formatu? <br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	Wszystkie pozostające rozszerzone statystyki są obecnie konwertowane do formatu skróconego. <br />\\n	Zależnie od ilości danych poddawanych konwersji może ona potrwać do kilkunastu minut. <br />\\n	Zaczekaj aż zostanie ona zakończona zanim przejdziesz na inną stronę. <br />\\n	Poniżej znajduje się lista wszystkich dokonanych modyfikacji w bazie danych. <br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	Konwersja pozostałych w formacie rozszerzonym statystyk została zakończona i <br />\\n	dane mogą być teraz znowu wykorzystywane. Poniżej znajdziesz listę wszystkich <br />\\n	zmian dokonanych w bazie danych.<br />\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "Automatyczna konserwacja jest wyłączona.";
$GLOBALS['strAutoMaintenanceEnabled']  = "Automatyczna konserwacja jest włączona. Dla optymalnej wydajności zaleca się <a href='settings-admin.php'>wyłączenie automatycznej konserwacji</a>.";
$GLOBALS['strScheduledMaintenance']         = "Planowana konserwacja wydaje się działać poprawnie.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "Planowana konserwacja nie była uruchomiona w ciągu ostatnich godzin. Może to oznaczać, że nie wszystko dobrze ustawiłeś.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "Automatyczna konserwacja jest włączona i będzie uruchamiana co godzinę.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Delivery Limitations";
$GLOBALS['strAllBannerChannelCompiled'] = "Wszystkie skompilowane wartości limitów dla banerów/kanałów zostały zrekompilowane";
$GLOBALS['strBannerChannelResult']      = "Oto wyniki walidacji skompilowanych limitów dla banerów/kanałów";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Wszystkie skompilowane limity dla kanału są ważne";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Wszystkie skompilowane limity dla banerów są ważne";
$GLOBALS['strErrorsFound']              = "Znaleziono błędy";
$GLOBALS['strRepairCompiledLimitations']        = "Stwierdzono pewne nieprawidłowości powyżej, można naprawić je, korzystając z przycisku poniżej, aby ponownie skompilować ograniczenia dla każdego banera/kanału systemu<br />";
$GLOBALS['strRecompile']                = "Przekompiluj";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "W pewnych okolicznościach mechanizm dostarczania może nie być kompatybilny z listami ACL dla banerów i kanałów, użyj tego linku, aby sprawdzić poprawność list ACL w bazie danych";
$GLOBALS['strCheckACLs'] = "Sprawdź listy ACL";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "W pewnych okolicznościach mechanizm dostarczania może nie być kompatybilny z kodami dodawanymi do trackerów, użyj tego linku, aby sprawdzić poprawność kodów w bazie danych";
$GLOBALS['strCheckAppendCodes']         = "Sprawdź dołączone kody";
$GLOBALS['strAppendCodesRecompiled']    = "Wszystkie skompilowane wartości dla dodawanych kodów zostały zrekompilowane";
$GLOBALS['strAppendCodesResult']        = "Oto wyniki walidacji skompilowanch kodów dodanych";
$GLOBALS['strAppendCodesValid']         = "Wszystkie skompilowane kody trackera są ważne";
$GLOBALS['strRepairAppenedCodes']       = "Stwierdzono pewne nieprawidłowości powyżej, można naprawić te, korzystając z przycisku poniżej, aby ponownie skompilować kody dodane dla każdego trackera w systemie";

$GLOBALS['strPlugins']                  = "Moduły dodatkowe";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "No problems found";

$GLOBALS['strMenus']                    = "Menus";
$GLOBALS['strMenusPrecis']              = "Rebuild the menu cache";
$GLOBALS['strMenusCachedOk']            = "Menu cache has been rebuilt";
$GLOBALS['strMenusCachedErr']           = "Errors while rebuilding Menu cache";

?>
