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

// Set text direction and characterset

$GLOBALS['phpAds_DecimalPoint']         = ",";
$GLOBALS['phpAds_ThousandsSeperator']   = ".";

// Date & time configuration
$GLOBALS['date_format']                 = "%d/%m/%Y";
$GLOBALS['month_format']                = "%m/%Y";
$GLOBALS['day_format']                  = "%d/%m";
$GLOBALS['week_format']                 = "%W/%Y";
$GLOBALS['weekiso_format']              = "%V/%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Główna";
$GLOBALS['strHelp']                     = "Pomoc";
$GLOBALS['strStartOver']                = "Zacznij od początku";
$GLOBALS['strNavigation']               = "Nawigacja";
$GLOBALS['strShortcuts']                = "Skróty";
$GLOBALS['strActions']                  = "Operacje";
$GLOBALS['strAdminstration']            = "Inwentarz";
$GLOBALS['strMaintenance']              = "Konserwacja";
$GLOBALS['strProbability']              = "Prawdopodobieństwo";
$GLOBALS['strInvocationcode']           = "Kod wywołujący";
$GLOBALS['strTrackerVariables']         = "Zmienne trackera";
$GLOBALS['strBasicInformation']         = "Podstawowe Informacje";
$GLOBALS['strAdditionalInformation']    = "Informacje dodatkowe";
$GLOBALS['strContractInformation']      = "Informacje kontraktowe";
$GLOBALS['strLoginInformation']         = "Dane logowania";
$GLOBALS['strLogoutURL']                = "URL - przekierowanie po wylogowaniu";
$GLOBALS['strAppendTrackerCode']        = "Dodaj kod trackera";
$GLOBALS['strOverview']                 = "Podgląd";
$GLOBALS['strSearch']                   = "<u>S</u>zukaj";
$GLOBALS['strHistory']                  = "Historia";
$GLOBALS['strDetails']                  = "Szczegóły";
$GLOBALS['strUpdateSettings']           = "Ustawienia aktualizacji";
$GLOBALS['strCheckForUpdates']          = "Sprawdź dostępne aktualizacje";
$GLOBALS['strCompact']                  = "Skrócone";
$GLOBALS['strVerbose']                  = "Rozszerzone";
$GLOBALS['strUser']                     = "Użytkownik";
$GLOBALS['strEdit']                     = "Edycja";
$GLOBALS['strCreate']                   = "Utwórz";
$GLOBALS['strDuplicate']                = "Duplikuj";
$GLOBALS['strMoveTo']                   = "Przenieś do";
$GLOBALS['strDelete']                   = "Usuń";
$GLOBALS['strActivate']                 = "Aktywuj";
$GLOBALS['strDeActivate']               = "Deaktywuj";
$GLOBALS['strConvert']                  = "Konwertuj";
$GLOBALS['strRefresh']                  = "Odśwież";
$GLOBALS['strSaveChanges']              = "Zapisz zmiany";
$GLOBALS['strUp']                       = "Góra";
$GLOBALS['strDown']                     = "Dół";
$GLOBALS['strSave']                     = "Zapisz";
$GLOBALS['strCancel']                   = "Anuluj";
$GLOBALS['strBack']                     = "Wstecz";
$GLOBALS['strPrevious']                 = "Poprzedni";
$GLOBALS['strPrevious_Key']             = "<u>P</u>oprzedni";
$GLOBALS['strNext']                     = "Następny";
$GLOBALS['strNext_Key']                 = "<u>N</u>astępny";
$GLOBALS['strYes']                      = "Tak";
$GLOBALS['strNo']                       = "Nie";
$GLOBALS['strNone']                     = "Brak";
$GLOBALS['strCustom']                   = "Własne";
$GLOBALS['strDefault']                  = "Domyślne";
$GLOBALS['strOther']                    = "Inne";
$GLOBALS['strUnknown']                  = "Nieznane";
$GLOBALS['strUnlimited']                = "Nieograniczone";
$GLOBALS['strUntitled']                 = "Bez tytułu";
$GLOBALS['strAll']                      = "wszystkie";
$GLOBALS['strAvg']                      = "śr.";
$GLOBALS['strAverage']                  = "średnio";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Ogółem";
$GLOBALS['strTotal']                    = "Wszystkie";
$GLOBALS['strActive']                   = "aktywne";
$GLOBALS['strFrom']                     = "Od";
$GLOBALS['strTo']                       = "do";
$GLOBALS['strAdd']                      = "Dodaj";
$GLOBALS['strLinkedTo']                 = "podłączony do";
$GLOBALS['strDaysLeft']                 = "Pozostało dni";
$GLOBALS['strCheckAllNone']             = "Zaznacz wszystkie / żaden";
$GLOBALS['strExpandAll']                = "<u>R</u>ozwiń wszystkie";
$GLOBALS['strCollapseAll']              = "<u>Z</u>wiń wszystkie";
$GLOBALS['strShowAll']                  = "Pokaż Wszystkie";
$GLOBALS['strNoAdminInterface']         = "Interfejs admina został wyłączony na czas przeprowadzenia konserwacji. Nie ma to wpływu na obsługę Twoich kampanii.";
$GLOBALS['strFilterBySource']           = "filtruj według źródła";
$GLOBALS['strFieldStartDateBeforeEnd']  = "Data 'Od' musi być wcześniejsza niż data 'Do'";
$GLOBALS['strFieldContainsErrors']      = "Następujące pola zawierają błędy:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Zanim przejdziesz dalej musisz";
$GLOBALS['strFieldFixBeforeContinue2']  = "skorygować te błędy.";
$GLOBALS['strDelimiter']                = "Ogranicznik";
$GLOBALS['strMiscellaneous']            = "Różne";
$GLOBALS['strCollectedAllStats']        = "Wszystkie statystyki";
$GLOBALS['strCollectedToday']           = "Dziś";
$GLOBALS['strCollectedYesterday']       = "Wczoraj";
$GLOBALS['strCollectedThisWeek']        = "W tym tygodniu";
$GLOBALS['strCollectedLastWeek']        = "W poprzednim tygodniu";
$GLOBALS['strCollectedThisMonth']       = "W tym miesiącu";
$GLOBALS['strCollectedLastMonth']       = "W poprzednim miesiącu";
$GLOBALS['strCollectedLast7Days']       = "W ciągu ostatnich 7 dni";
$GLOBALS['strCollectedSpecificDates']   = "Określone daty";
$GLOBALS['strValue']                    = "Wartość";
$GLOBALS['strNotice']                   = "Ogłoszenie";
$GLOBALS['strRequiredField']            = "Pole wymagane";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "Panel nawigacyjny nie może zostać wyświetlony";
$GLOBALS['strChoosenDisableHomePage']   = "Wybrano wyłączenie strony głównej.";
$GLOBALS['strAccessHomePage']           = "Kliknij tutaj, aby uzyskać dostęp do strony głównej";
$GLOBALS['strEditSyncSettings']         = "i edytować ustawienia synchronizacji";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "kod";
$GLOBALS['strDashboardSystemMessage']   = "Wiadomość systemowa";
$GLOBALS['strDashboardErrorHelp']       = "Jeśli błąd będzie się powtarzał proszę opisz problem szczegółowo na <a href='http://forum.openx.org/'>forum OpenX</a>.";

// Priority
$GLOBALS['strPriority']                 = "Priorytet";
$GLOBALS['strPriorityLevel']            = "Poziom priorytetu";
$GLOBALS['strPriorityTargeting']        = "Dystrybucja";
$GLOBALS['strPriorityOptimisation']     = "Różne"; // Er, what?
$GLOBALS['strLimitations']              = "Limity";
$GLOBALS['strNoLimitations']            = "Bez limitów";
$GLOBALS['strCapping']                  = "Ograniczenia";

// Properties
$GLOBALS['strName']                     = "Nazwa";
$GLOBALS['strSize']                     = "Rozmiar";
$GLOBALS['strWidth']                    = "Szerokość";
$GLOBALS['strHeight']                   = "Wysokość";
$GLOBALS['strTarget']                   = "Okno docelowe (np. _self)";
$GLOBALS['strLanguage']                 = "Język";
$GLOBALS['strDescription']              = "Opis";
$GLOBALS['strVariables']                = "Zmienne";
$GLOBALS['strComments']                 = "Komentarze";

// User access
$GLOBALS['strWorkingAs']                = "Działasz jako";
$GLOBALS['strWorkingAs']                = "Działasz jako";
$GLOBALS['strSwitchTo']                 = "Przełącz na";
$GLOBALS['strWorkingFor']               = "%s dla...";
$GLOBALS['strLinkUser']                 = "Dodaj użytkownika";
$GLOBALS['strLinkUser_Key']             = "Dodaj <u>u</u>żytkownika";
$GLOBALS['strUsernameToLink']           = "Nazwa użytkownika, który ma być dodany";
$GLOBALS['strEmailToLink']              = "E-mail użytkownika, który ma być dodany";
$GLOBALS['strNewUserWillBeCreated']     = "Utworzony zostanie nowy użytkownik";
$GLOBALS['strToLinkProvideEmail']       = "Aby dodać użytkownika, podaj jego adres e-mail";
$GLOBALS['strToLinkProvideUsername']    = "Aby dodać użytkownika, podaj jego nazwę";
$GLOBALS['strErrorWhileCreatingUser']   = "Błąd w trakcie tworzenia użytkownika: %s";
$GLOBALS['strUserLinkedToAccount']      = "Użytkownik został dodany do konta";
$GLOBALS['strUserAccountUpdated']       = "Konto użytkownika zostało aktualizowane";
$GLOBALS['strUserUnlinkedFromAccount']  = "Użytkownik został usunięty z konta";
$GLOBALS['strUserWasDeleted']           = "Użytkownik został usunięty";
$GLOBALS['strUserNotLinkedWithAccount'] = "Podany użytkownik nie jest podłączony do konta";
$GLOBALS['strCantDeleteOneAdminUser']   = "Nie można usunąć użytkownika. Do konta admina musi być podłączony przynajmniej jeden użytkownik.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Nazwa użytkownika";
$GLOBALS['strLinkUserHelpEmail']        = "adres e-mail";
$GLOBALS['strLastLoggedIn']             = "Ostatnio zalogowany";
$GLOBALS['strDateLinked']               = "Data zlinkowania";
$GLOBALS['strUnlink']                   = "Usuń";
$GLOBALS['strUnlinkingFromLastEntity']  = "Usuwanie użytkownika z ostatniego podmiotu";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Usunięcie użytkownika z ostatniego podmiotu spowoduje usunięcie go z systemu. Czy chcesz usunąć tego użytkownika?";
$GLOBALS['strUnlinkAndDelete']          = "Odłącz i usuń użytkownika";
$GLOBALS['strUnlinkUser']               = "Usuń użytkownika";
$GLOBALS['strUnlinkUserConfirmBody']    = "Czy jesteś pewien, że chcesz usunąć użytkownika?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Dostęp użytkownika";
$GLOBALS['strAdminAccess']              = "Dostęp Admina";
$GLOBALS['strUserProperties']           = "Właściwości użytkownika";
$GLOBALS['strLinkNewUser']              = "Podłącz nowego użytkownika";
$GLOBALS['strPermissions']              = "Uprawnienia";
$GLOBALS['strAuthentification']         = "Autoryzacja";
$GLOBALS['strWelcomeTo']                = "Witamy w";
$GLOBALS['strEnterUsername']            = "Wpisz nazwę użytkownika i hasło, aby się zalogować";
$GLOBALS['strEnterBoth']                = "Wpisz zarówno nazwę użytkownika jak i hasło";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Błąd cookie, zaloguj się ponownie";
$GLOBALS['strLogout']                   = "Wyloguj";
$GLOBALS['strUsername']                 = "Nazwa użytkownika";
$GLOBALS['strPassword']                 = "Hasło";
$GLOBALS['strPasswordRepeat']           = "Powtórz hasło";
$GLOBALS['strAccessDenied']             = "Dostęp zabroniony";
$GLOBALS['strUsernameOrPasswordWrong']  = "Niepoprawna nazwa użytkownika i/lub hasło. Spróbuj ponownie.";
$GLOBALS['strPasswordWrong']            = "Hasło jest nieprawidłowe";
$GLOBALS['strNotAdmin']                 = "Nie masz odpowiednich uprawnień, aby korzystać z tej funkcji. Możesz zalogować się do innego konta, aby jej użyć. Kliknij <a href='logout.php'>tutaj</a>, aby zalogować się jako inny użytkownik.";
$GLOBALS['strDuplicateClientName']      = "Wpisana nazwa użytkownika już istnieje. Podaj inną nazwę.";
$GLOBALS['strDuplicateAgencyName']      = "Wpisana nazwa użytkownika już istnieje. Podaj inną nazwę.";
$GLOBALS['strInvalidEmail']             = "Format wiadomości jest niepoprawny, wpisz poprawny adres e-mail.";
$GLOBALS['strDeadLink']                 = "Twój link jest nieprawidłowy.";
$GLOBALS['strNoPlacement']              = "Wybrana Kampania nie istnieje. Sprawdź <a href='{link}'>ten link</a>";
$GLOBALS['strNoAdvertiser']             = "Wybrany Reklamodawca nie istnieje. Sprawdź <a href='{link}'>ten link</a>";

// General advertising
$GLOBALS['strRequests']                 = "Próby wywołania";
$GLOBALS['strImpressions']              = "Odsłony";
$GLOBALS['strClicks']                   = "Kliknięcia";
$GLOBALS['strConversions']              = "Konwersje";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Wskaźnik sprzedaży (SR)";
$GLOBALS['strTotalViews']               = "Wszystkich Odsłon";
$GLOBALS['strTotalClicks']              = "Kliknięcia ogółem";
$GLOBALS['strTotalConversions']         = "Konwersje ogółem";
$GLOBALS['strViewCredits']              = "Pula Odsłon";
$GLOBALS['strClickCredits']             = "Pula Kliknięć";
$GLOBALS['strConversionCredits']        = "Pula Konwersji";
$GLOBALS['strDateTime']                 = "Data Godzina";
$GLOBALS['strTrackerID']                = "ID trackera";
$GLOBALS['strTrackerName']              = "Nazwa trackera";
$GLOBALS['strTrackerImageTag']          = "Znacznik obrazka";
$GLOBALS['strTrackerJsTag']             = "Znacznik Javascript";
$GLOBALS['strBanners']                  = "Banery";
$GLOBALS['strCampaigns']                = "Kampanie";
$GLOBALS['strCampaignID']               = "ID kampanii";
$GLOBALS['strCampaignName']             = "Nazwa kampanii";
$GLOBALS['strCountry']                  = "Kraj";
$GLOBALS['strStatsAction']              = "Akcja";
$GLOBALS['strWindowDelay']              = "Opóźnienie okna";
$GLOBALS['strStatsVariables']           = "Zmienne";

// Finance
$GLOBALS['strFinanceMT']                = "Użytkowanie miesięczne";
$GLOBALS['strPercentRevenueSplit']      = "% Wykaz przychodów";
$GLOBALS['strPercentBasketValue']       = "% Wartość koszyka";
$GLOBALS['strAmountPerItem']            = "Kwota za sztukę";
$GLOBALS['strPercentCustomVariable']    = "% Niestandardowa zmienna";
$GLOBALS['strPercentSumVariables']      = "% Suma zmiennych";

// Time and date related
$GLOBALS['strDate']                     = "Data";
$GLOBALS['strToday']                    = "Dzisiaj";
$GLOBALS['strDay']                      = "Dzień";
$GLOBALS['strDays']                     = "Dni";
$GLOBALS['strLast7Days']                = "Ostatnie 7 dni";
$GLOBALS['strWeek']                     = "Tydzień";
$GLOBALS['strWeeks']                    = "Tygodni";
$GLOBALS['strSingleMonth']              = "Miesiąc";
$GLOBALS['strMonths']                   = "Miesiący";
$GLOBALS['strDayOfWeek']                = "Dzień tygodnia";
$GLOBALS['strThisMonth']                = "Ten miesiąc";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "godzina";
$GLOBALS['strSeconds']                  = "sekund";
$GLOBALS['strMinutes']                  = "minut";
$GLOBALS['strHours']                    = "godzin";
$GLOBALS['strTimes']                    = "razy";

// Advertiser
$GLOBALS['strClient']                       = "Reklamodawca";
$GLOBALS['strClients']                      = "Reklamodawcy";
$GLOBALS['strClientsAndCampaigns']          = "Reklamodawcy i Kampanie";
$GLOBALS['strAddClient']                    = "Dodaj nowego reklamodawcę";
$GLOBALS['strAddClient_Key']                = "Dodaj <u>n</u>owego reklamodawcę";
$GLOBALS['strTotalClients']                 = "Wszystkich reklamodawców";
$GLOBALS['strClientProperties']             = "Właściwości reklamodawcy";
$GLOBALS['strClientHistory']                = "Historia reklamodawcy";
$GLOBALS['strNoClients']                    = "Obecnie nie istnieją żadni określeni reklamodawcy. Aby utworzyć kampanię najpierw <a href='advertiser-edit.php'> dodaj nowego reklamodawcę </ a>.";
$GLOBALS['strNoClientsForBanners']          = "Na obecną chwilę nie określeno żadnych reklamodawców. Aby utworzyć kampanię najpierw <a href='advertiser-edit.php'> dodaj nowego reklamodawcę</a> i kampanię.";
$GLOBALS['strConfirmDeleteClient']          = "Czy na pewno chcesz usunąć tego reklamodawcę?";
$GLOBALS['strConfirmDeleteClients']         = "Czy na pewno chcesz usunąć wybranych reklamodawców?";
$GLOBALS['strConfirmResetClientStats']      = "Czy na pewno chcesz usunąć wszystkie statystyki dla tego reklamodawcy?";
$GLOBALS['strSite']                         = "Rozmiar";
$GLOBALS['strHideInactiveAdvertisers']      = "Ukryj nieaktywnych reklamodawców";
$GLOBALS['strInactiveAdvertisersHidden']    = "ukryci reklamodawcy nieaktywni";
$GLOBALS['strOverallAdvertisers']           = "reklamodawca(y)";
$GLOBALS['strAdvertiserSignup']             = "Podpis reklamodawcy";
$GLOBALS['strAdvertiserSignupDesc']         = "Zapisz się do Samoobsługi i Płatności Reklamodawcy";
$GLOBALS['strAdvertiserSignupLink']         = "Link do rejestracji reklamodawcy";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "Aby dodać link z podpisem reklamodawcy na Twojej stronie, proszę skopiować poniższy kod HTML:";
$GLOBALS['strAdvertiserSignupOption']       = "Opcje rejestracji reklamodawcy";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "Aby edytować podpis twojego reklamodawcy idź do";
$GLOBALS['strAdvertiserCampaigns']          = "Kampanie Reklamodawcy";
// Advertisers properties
$GLOBALS['strContact']                          = "Kontakt";
$GLOBALS['strContactName']                      = "Dane kontaktowe";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "znaki";
$GLOBALS['strSendAdvertisingReport']            = "Wyślij raport o kampanii na adres e-mail";
$GLOBALS['strNoDaysBetweenReports']             = "Liczba dni między sporządzaniem raportów o kampanii";
$GLOBALS['strSendDeactivationWarning']          = "Wyślij ostrzeżenie, gdy kampania jest automatycznie aktywowana/dezaktywowana";
$GLOBALS['strAllowClientModifyInfo']            = "Zezwól temu użytkownikowi na modyfikację własnych ustawień";
$GLOBALS['strAllowClientModifyBanner']          = "Zezwól temu użytkownikowi na modyfikację własnych banerów";
$GLOBALS['strAllowClientAddBanner']             = "Zezwól temu użytkownikowi na dodawanie własnych bannerów";
$GLOBALS['strAllowClientDisableBanner']         = "Zezwól temu użytkownikowi na dezaktywowanie własnych banerów";
$GLOBALS['strAllowClientActivateBanner']        = "Zezwól temu użytkownikowi na aktywowanie własnych banerów";
$GLOBALS['strAllowClientViewTargetingStats']    = "Zezwól temu użytkownikowi na wgląd w statystki targetowania";
$GLOBALS['strAllowCreateAccounts']              = "Zezwól temu użytkownikowi na tworzenie nowych kont";
$GLOBALS['strCsvImportConversions']             = "Zezwól temu użytkownikowi na importowanie konwersji offline";
$GLOBALS['strAdvertiserLimitation']             = "Wyświetlaj tylko jeden baner tego reklamodawcy na danej stronie";
$GLOBALS['strAllowAuditTrailAccess']            = "Zezwól temu użytkownikowi na dostęp do audytu";

// Campaign
$GLOBALS['strCampaign']                     = "Kampania";
$GLOBALS['strCampaigns']                    = "Kampanie";
$GLOBALS['strOverallCampaigns']             = "kampania(e)";
$GLOBALS['strTotalCampaigns']               = "Wszystkich kampanii";
$GLOBALS['strActiveCampaigns']              = "Kampanie aktywne";
$GLOBALS['strAddCampaign']                  = "Dodaj nową kampanię";
$GLOBALS['strAddCampaign_Key']              = "Dodaj <u>n</u>ową kampanię";
$GLOBALS['strCreateNewCampaign']            = "Utwórz kampanię";
$GLOBALS['strModifyCampaign']               = "Zmień kampanię";
$GLOBALS['strMoveToNewCampaign']            = "Przenieź do nowej kampanii";
$GLOBALS['strBannersWithoutCampaign']       = "Bannery bez kampanii";
$GLOBALS['strDeleteAllCampaigns']           = "Usuń wszystkie kampanie";
$GLOBALS['strLinkedCampaigns']              = "Kampanie podłączone";
$GLOBALS['strCampaignStats']                = "Statystyki kampanii";
$GLOBALS['strCampaignProperties']           = "Właściwości kampanii";
$GLOBALS['strCampaignOverview']             = "Przegląd kampanii";
$GLOBALS['strCampaignHistory']              = "Historia kampanii";
$GLOBALS['strNoCampaigns']                  = "Obecnie brak kampanii zdefiniowanych dla tego reklamodawcy.";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Czy na pewno chcesz usunąć wszystkie kampanie tego reklamodawcy?";
$GLOBALS['strConfirmDeleteCampaign']        = "Czy na pewno chcesz usunąć tę kampanię?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Czy na pewno chcesz usunąć wybrane kampanie?";
$GLOBALS['strShowParentAdvertisers']        = "Pokaż głównych reklamodawców";
$GLOBALS['strHideParentAdvertisers']        = "Ukryj głównych reklamodawców";
$GLOBALS['strHideInactiveCampaigns']        = "Ukryj kampanie nieaktywne";
$GLOBALS['strInactiveCampaignsHidden']      = "ukrytenie kampanie aktywne";
$GLOBALS['strContractDetails']              = "Szczegóły kontraktu";
$GLOBALS['strInventoryDetails']             = "Szczegóły zasobów";
$GLOBALS['strPriorityInformation']          = "Pierwszeństwo w stosunku do innych kampanii";
$GLOBALS['strHiddenCampaign']               = "Kampania";
$GLOBALS['strHiddenAdvertiser']             = "Reklamodawca";
$GLOBALS['strHiddenWebsite']              = "Strona";
$GLOBALS['strHiddenZone']                   = "Strefa";
$GLOBALS['strCompanionPositioning']         = "Poyzcjonowanie wzajemne";
$GLOBALS['strSelectUnselectAll']            = "Zaznacz/ odznacz wszystko";

// Campaign-zone linking page
$GLOBALS['strNoWebsitesAndZones']           = "Brak stron i stref";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "w kategorii";
$GLOBALS['strNoWebsitesAndZonesText']       = "z \"%s\" w nazwie";


// Campaign properties
$GLOBALS['strDontExpire']                       = "Kampania nie kończy się o określonej dacie";
$GLOBALS['strActivateNow']                      = "Rozpocznij natychmiast";
$GLOBALS['strLow']                              = "Niski";
$GLOBALS['strHigh']                             = "Wysoki";
$GLOBALS['strExpirationDate']                   = "Data zakończenia";
$GLOBALS['strExpirationDateComment']            = "Kampania wygaśnie z końcem dnia";
$GLOBALS['strActivationDate']                   = "Data rozpoczęcia";
$GLOBALS['strActivationDateComment']            = "Kampania rozpocznie się z początkiem dnia";
$GLOBALS['strRevenueInfo']                      = "Informacje o dochodzie";
$GLOBALS['strTotalRevenue']                     = "Dochód ogółem";
$GLOBALS['strImpressionsRemaining']             = "Pozostałe odsłony";
$GLOBALS['strClicksRemaining']                  = "Pozostałe kliknięcia";
$GLOBALS['strConversionsRemaining']             = "Pozostałe konwersje";
$GLOBALS['strImpressionsBooked']                = "Odsłony zarezerwowane";
$GLOBALS['strClicksBooked']                     = "Kliknięcia zarezerwowane";
$GLOBALS['strConversionsBooked']                = "Konwersje zarezerwowane";
$GLOBALS['strCampaignWeight']                   = "Waga kampanii";
$GLOBALS['strOptimise']                         = "Optymalizacja";
$GLOBALS['strAnonymous']                        = "Ukryj reklamodawcę i strony tej kampanii.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Wyświetlaj bannery z tej kampanii z niskim priorytetem.<br />Ta kampania wykorzysta liczbę Odsłon pozostałą po wyświetleniu kampanii o wysokich priorytetach.";
$GLOBALS['strTargetPerDay']                     = "dziennie.";
$GLOBALS['strPriorityAutoTargeting']            = "Rozdziel pozostałą liczbę Odsłon równomiernie przez pozostałą liczbę dni.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Kampania została ustwiona jako pozostała, \\njednak jej waga jest równa zeru bądź nie została \\nsprecyzowana. Spowoduje to dezaktywację \\nkampanii. Banery będą dostarczane dopiero \\npo wprowadzeniu wartości w formacie liczby. \\n\\nCzy na pewno chcesz kontynuować?";
$GLOBALS['strCampaignWarningNoTarget']          = "Kampania została ustwiona jako Kontrakt, \\njednak dzienny limit nie został \\nsprecyzowany. Spowoduje to dezaktywację \\nkampanii. Banery będą dostarczane dopiero \\npo wprowadzeniu dziennego limitu. \\n\\nCzy na pewno chcesz kontynuować?";
$GLOBALS['strCampaignStatusPending']            = "Oczekuje";
$GLOBALS['strCampaignStatusInactive']           = "Nieaktywna";
$GLOBALS['strCampaignStatusRunning']            = "Aktywna";
$GLOBALS['strCampaignStatusPaused']             = "Wstrzymano";
$GLOBALS['strCampaignStatusAwaiting']           = "Oczekuje";
$GLOBALS['strCampaignStatusExpired']            = "Zakończona";
$GLOBALS['strCampaignStatusApproval']           = "Czeka na akceptację »";
$GLOBALS['strCampaignStatusRejected']           = "Odrzucono";
$GLOBALS['strCampaignStatusAdded']              = "Dodana";
$GLOBALS['strCampaignStatusStarted']            = "Rozpoczęta";
$GLOBALS['strCampaignStatusRestarted']          = "Uruchomiona ponownie";
$GLOBALS['strCampaignStatusDeleted']            = "Usunięta";
$GLOBALS['strCampaignApprove']                  = "Akceptuj";
$GLOBALS['strCampaignApproveDescription']       = "Akceptuj kampanię";
$GLOBALS['strCampaignReject']                   = "Odrzuć";
$GLOBALS['strCampaignRejectDescription']        = "Odrzuć kampanię";
$GLOBALS['strCampaignPause']                    = "Przerwij";
$GLOBALS['strCampaignPauseDescription']         = "Tymczasowo przerwij tę kampanię";
$GLOBALS['strCampaignRestart']                  = "Powróć";
$GLOBALS['strCampaignRestartDescription']       = "Przywróć tę kampanię";
$GLOBALS['strCampaignStatus']                   = "Status kampanii";
$GLOBALS['strReasonForRejection']               = "Powód odrzucenia";
$GLOBALS['strReasonSiteNotLive']                = "Błąd strony";
$GLOBALS['strReasonBadCreative']                = "Nieprawidłowe działanie";
$GLOBALS['strReasonBadUrl']                     = "Nieprawidłowy adres URL";
$GLOBALS['strReasonBreakTerms']                 = "Strona niezgodna z regulaminem";
$GLOBALS['strChangeStatus']                     = "Zmień status";
$GLOBALS['strCampaignType']                     = "Typ kampanii";
$GLOBALS['strType']                             = "Typ";
$GLOBALS['strContract']                         = "Kontrakt";
$GLOBALS['strStandardContract']                 = "Kontrakt";

// Tracker
$GLOBALS['strTrackers']                   = "Trackery";
$GLOBALS['strTrackerOverview']            = "Podgląd trackera";
$GLOBALS['strTrackerPreferences']            = "Ustawienia trackera";
$GLOBALS['strAddTracker']                 = "Dodaj nowy tracker";
$GLOBALS['strAddTracker_Key']             = "Dodaj <u>n</u>owy tracker";
$GLOBALS['strNoTrackers']                 = "Obecnie brak trackerów zdefiniowanych dla tego reklamodawcy.";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Czy na pewno chcesz usunąć wszystkie trackery należące do tego reklamodawcy?";
$GLOBALS['strConfirmDeleteTrackers']      = "Czy na pewno chcesz usunąć wybrane trackery?";
$GLOBALS['strConfirmDeleteTracker']       = "Czy na pewno chcesz usunąć tracker?";
$GLOBALS['strDeleteAllTrackers']          = "Usuń wszystkie trackery";
$GLOBALS['strTrackerProperties']          = "Właściwości trackera";
$GLOBALS['strTrackerOverview']            = "Podgląd trackera";
$GLOBALS['strModifyTracker']              = "Modyfikuj tracker";
$GLOBALS['strLog']                        = "Protokołować?";
$GLOBALS['strDefaultStatus']              = "Status domyślny";
$GLOBALS['strLinkedTrackers']             = "Podłączone trackery";
$GLOBALS['strConversionWindow']           = "Odstęp między konwersjami";
$GLOBALS['strUniqueWindow']               = "Odstęp między walidacją zmiennych";
$GLOBALS['strClick']                      = "Kliknięcie";
$GLOBALS['strView']                       = "Widok";
$GLOBALS['strImpression']                 = "Odsłona";
$GLOBALS['strConversionType']             = "Typ konwersji";
$GLOBALS['strLinkCampaignsByDefault']     = "Podłącz nowo utworzone kampanie w ramach ustawień domyślnych";
$GLOBALS['strPerSingleImpression']        = "na pojedynczą odsłonę";



// Banners (General)
$GLOBALS['strBanner']                        = "Baner";
$GLOBALS['strBanners']                       = "Banery";
$GLOBALS['strAddBanner']                     = "Dodaj nowy baner";
$GLOBALS['strAddBanner_Key']                 = "Dodaj <u>n</u>owy baner";
$GLOBALS['strBannerToCampaign']              = "Twoja kampania";
$GLOBALS['strModifyBanner']                  = "Modyfikuj baner";
$GLOBALS['strActiveBanners']                 = "Banery aktywne";
$GLOBALS['strTotalBanners']                  = "Wszystkich banerów";
$GLOBALS['strShowBanner']                    = "Pokaż baner";
$GLOBALS['strShowAllBanners']                = "Pokaż wszystkie bannery";
$GLOBALS['strShowBannersNoAdViews']          = "Pokaż bannery bez Odsłon";
$GLOBALS['strShowBannersNoAdClicks']         = "Pokaż bannery bez kliknięć";
$GLOBALS['strDeleteAllBanners']              = "Usuń wszystkie banery";
$GLOBALS['strActivateAllBanners']            = "Aktywuj wszystkie banery";
$GLOBALS['strDeactivateAllBanners']          = "Dezaktywuj wszystkie banery";
$GLOBALS['strBannerOverview']                = "Podgląd banerów";
$GLOBALS['strBannerProperties']              = "Właściwości banera";
$GLOBALS['strBannerHistory']                 = "Historia banera";
$GLOBALS['strBannerNoStats']                 = "Nie ma żadnych statystyk dla tego bannera";
$GLOBALS['strNoBanners']                     = "Obecnie brak stref zdefiniowanych dla tej strony.";
$GLOBALS['strNoBannersAddCampaign']          = "Obecnie nie istnieją żadne zdefiniowane strony internetowe. Aby utworzyć strefę najpierw <a href='affiliate-edit.php'> dodaj nową stronę internetową </ a> .";
$GLOBALS['strNoBannersAddAdvertiser']        = "Obecnie nie istnieją żadne zdefiniowane strony internetowe. Aby utworzyć strefę najpierw <a href='affiliate-edit.php'> dodaj nową stronę internetową </ a> .";
$GLOBALS['strConfirmDeleteBanner']           = "Czy na pewno chcesz usunąć ten baner?";
$GLOBALS['strConfirmDeleteBanners']          = "Czy na pewno chcesz usunąć wybrane banery?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Czy na pewno chcesz usunąć wszystkie banery należące do tej kampanii?";
$GLOBALS['strConfirmResetBannerStats']       = "Czy na pewno chcesz usunąć wszystkie istniejące statystyki dla tego bannera?";
$GLOBALS['strShowParentCampaigns']           = "Pokaż kampanie nadrzędne";
$GLOBALS['strHideParentCampaigns']           = "Ukryj kampanie nadrzędne";
$GLOBALS['strHideInactiveBanners']           = "Ukryj banery nieaktywne";
$GLOBALS['strInactiveBannersHidden']         = "ukryte banery nieaktywne";
$GLOBALS['strAppendTextAdNotPossible']       = "Nie można dołączyć innych banerów do reklam tekstowych.";
$GLOBALS['strWarningMissing']                = "Uwaga, prawdopodobnie brakuje ";
$GLOBALS['strWarningMissingClosing']         = "znacznika zamykającego '>'";
$GLOBALS['strWarningMissingOpening']         = "znacznika otwierającego '<'";
$GLOBALS['strSubmitAnyway']       		     = "Pomimo to wyślij";
$GLOBALS['strOverallBanners']                = "baner(y)";
$GLOBALS['strBannersOfCampaign']             = "w"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Ustawienia banera";
$GLOBALS['strDefaultBannerDestination']              = "Docelowy adres URL";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Wybierz typ banera";
$GLOBALS['strMySQLBanner']             = "Banner lokalny (SQL)";
$GLOBALS['strWebBanner']               = "Banner lokalny (Webserver)";
$GLOBALS['strURLBanner']               = "Banner zewnętrzny";
$GLOBALS['strHTMLBanner']              = "Banner HTML";
$GLOBALS['strTextBanner']              = "Reklama tekstowa";
$GLOBALS['strUploadOrKeep']            = "Chcesz zatrzymać <br />istniejący obrazek czy też chcesz <br />dodać inny?";
$GLOBALS['strUploadOrKeepAlt']        = "Chcesz zatrzymać <br />istniejący obrazek zamienny czy też chcesz <br />dodać inny?";
$GLOBALS['strNewBannerFile']         = "Wybierz obrazek, którego chcesz <br />użyć dla tego banera<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Wybierz obrazek, którego chcesz <br />użyć jeśli przeglądarka />nie obsługuje Rich Media<br /><br />";
$GLOBALS['strNewBannerURL']         = "Adres URL obrazka (dodaj http://)";
$GLOBALS['strURL']                     = "Docelowy adres URL (dodaj http://)";
$GLOBALS['strKeyword']              = "Słowa kluczowe";
$GLOBALS['strTextBelow']             = "Tekst pod banerem";
$GLOBALS['strWeight']                 = "Waga";
$GLOBALS['strAlt']                     = "Tekst Alt";
$GLOBALS['strStatusText']            = "Tekst paska statusu";
$GLOBALS['strBannerWeight']            = "Waga banera";
$GLOBALS['strAdserverTypeGeneric']  = "Ogólny baner HTML";
$GLOBALS['strGenericOutputAdServer'] = "Ogólny";
$GLOBALS['strSwfTransparency']		   = "Tło transparentne";

// Banner (advanced)

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Sprawdź wpisane w animację Flash odnośniki";
$GLOBALS['strConvertSWFLinks']        = "Konwertuj odnośniki w amimacji Flash";
$GLOBALS['strHardcodedLinks']        = "Wpisane odnośniki";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Kompresuj plik SWF, aby usprawnić pobieranie (wymagany Flash 6)";
$GLOBALS['strOverwriteSource']        = "Wstaw nowy parametr źródła";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "Szablon HTML";
$GLOBALS['strChooseNetwork']        = "Wybierz szablon, który chcesz wykorzystać";
$GLOBALS['strMoreInformation']        = "Więcej informacji...";
$GLOBALS['strTrackAdClicks']        = "Śledź Kliknięcia";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "Konta AdSense";
$GLOBALS['strLinkAdSenseAccount']         = "Podłącz konto AdSense";
$GLOBALS['strCreateAdSenseAccount']       = "Utwórz konto AdSense";
$GLOBALS['strEditAdSenseAccount']         = "Edytuj konto AdSense";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Opcje dostarczania";
$GLOBALS['strACL']                        = "Dostarczanie";
$GLOBALS['strACLAdd']                     = "Dodaj nowe ograniczenie";
$GLOBALS['strACLAdd_Key']                 = "Dodaj <u>n</u>owe ograniczenie";
$GLOBALS['strNoLimitations']              = "Bez limitów";
$GLOBALS['strApplyLimitationsTo']         = "Zastosuj limity do";
$GLOBALS['strRemoveAllLimitations']       = "Usuń wszystkie limity";
$GLOBALS['strEqualTo']                    = "jest równy";
$GLOBALS['strDifferentFrom']              = "jest inny niż";
$GLOBALS['strLaterThan']                  = "jest później niż";
$GLOBALS['strLaterThanOrEqual']           = "jest później lub równocześnie z";
$GLOBALS['strEarlierThan']                = "jest wcześniej niż";
$GLOBALS['strEarlierThanOrEqual']         = "jest wcześniej lub równoczesnie z";
$GLOBALS['strGreaterThan']                = "jest większe niż";
$GLOBALS['strLessThan']                   = "jest mniej niż";
$GLOBALS['strAND']                        = "I";                          // logical operator
$GLOBALS['strOR']                         = "LUB";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Wyświetlaj ten baner wyłącznie, gdy:";
$GLOBALS['strWeekDay']                    = "Dzień roboczy";
$GLOBALS['strWeekDays']                   = "Dni robocze";
$GLOBALS['strTime']                       = "Czas";
$GLOBALS['strUserAgent']                  = "Program dostępowy";
$GLOBALS['strDomain']                     = "Domena";
$GLOBALS['strClientIP']                   = "Adres IP";
$GLOBALS['strSource']                     = "Źródło";
$GLOBALS['strBrowser']                    = "Przeglądarka";
$GLOBALS['strOS']                         = "System";
$GLOBALS['strCity']                       = "Miasto";
$GLOBALS['strDeliveryLimitations']        = "Limity dostarczania";

$GLOBALS['strDeliveryCapping']            = "Capping na osobę";
$GLOBALS['strDeliveryCappingReset']       = "Zresetuj liczniki po:";
$GLOBALS['strDeliveryCappingTotal']       = "ogółem";
$GLOBALS['strDeliveryCappingSession']     = "na sesję";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];
$GLOBALS['strCappingBanner']['limit'] = "Ogranicz wyświetlenia banera do:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];
$GLOBALS['strCappingCampaign']['limit'] = "Ogranicz wyświetlenia kampanii do:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];
$GLOBALS['strCappingZone']['limit'] = "Ogranicz wyświetlenia stref do:";

// Website
$GLOBALS['strAffiliate']                = "Strona";
$GLOBALS['strAffiliates']                 = "Strony";
$GLOBALS['strAffiliatesAndZones']        = "Strony i Strefy";
$GLOBALS['strAddNewAffiliate']            = "Dodaj Stronę";
$GLOBALS['strAddNewAffiliate_Key']        = "Dodaj <u>n</u>ową Stronę";
$GLOBALS['strAddAffiliate']                = "Utwórz Stronę";
$GLOBALS['strAffiliateProperties']        = "Właściwości Strony";
$GLOBALS['strAffiliateOverview']        = "Podgląd Strony";
$GLOBALS['strAffiliateHistory']            = "Historia Strony";
$GLOBALS['strZonesWithoutAffiliate']    = "Strefy bez Stron";
$GLOBALS['strMoveToNewAffiliate']        = "Przenieś do nowej Strony";
$GLOBALS['strNoAffiliates']                = "Obecnie nie istnieją żadne zdefiniowane strony internetowe. Aby utworzyć strefę najpierw <a href='affiliate-edit.php'> dodaj nową stronę internetową </ a> .";
$GLOBALS['strConfirmDeleteAffiliate']    = "Czy na pewno chcesz usunąć tę Stronę?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Czy na pewno chcesz usunąć wybrane strony?";
$GLOBALS['strMakePublisherPublic']        = "Udostępnij publicznie strefy należące do tej Strony";
$GLOBALS['strAffiliateInvocation']      = "Kod wywołujący";
$GLOBALS['strAdvertiserSetup']          = "Podpis reklamodawcy";
$GLOBALS['strTotalAffiliates']          = "Wszystkich Stron";
$GLOBALS['strInactiveAffiliatesHidden'] = "ukryte Strony nieaktywne";
$GLOBALS['strShowParentAffiliates']     = "Pokaż Strony nadrzędne";
$GLOBALS['strHideParentAffiliates']     = "Ukryj Strony nadrzędne";

// Website (properties)
$GLOBALS['strWebsite']                      = "Strona";
$GLOBALS['strWebsiteURL']                      = "Adres URL strony";
$GLOBALS['strMnemonic']                     = "Mnemonik";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Zezwól temu użytkownikowi na modyfikację własnych ustawień";
$GLOBALS['strAllowAffiliateModifyZones']    = "Zezwól temu użytkownikowi na modyfikację własnych stref";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Zezwól temu użytkownikowi na łączenie banerów z własnymi strefami";
$GLOBALS['strAllowAffiliateAddZone']        = "Zezwól temu użytkownikowi na definiowanie nowych stref";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Zezwól temu użytkownikowi na usuwanie istniejących stref";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Zezwól temu użytkownikowi na generowanie kodu inwokacyjnego";
$GLOBALS['strAllowAffiliateZoneStats']      = "Zezwól temu użytkownikowi na podgląd statystyk strefy";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Zezwól temu użytkownikowi na podgląd jedynie zatwierdzonych lub oczekujących konwersji";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Informacje odnośnie płatności";
$GLOBALS['strAddress']                      = "Adres";
$GLOBALS['strPostcode']                     = "Kod pocztowy";
$GLOBALS['strCity']                         = "Miasto";
$GLOBALS['strCountry']                      = "Kraj";
$GLOBALS['strPhone']                        = "Telefon";
$GLOBALS['strFax']                          = "Faks";
$GLOBALS['strAccountContact']               = "Dane kontaktowe użytkownika konta";
$GLOBALS['strPayeeName']                    = "Nazwa beneficjenta";
$GLOBALS['strTaxID']                        = "NIP";
$GLOBALS['strModeOfPayment']                = "Metoda płatności";
$GLOBALS['strPaymentChequeByPost']          = "Czek przesłany pocztą";
$GLOBALS['strCurrency']                     = "Waluta";
$GLOBALS['strCurrencyGBP']                  = "GBP (funt szterling)";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Inne informacje";
$GLOBALS['strUniqueUsersMonth']             = "Użytkowników unikalnych/miesiąc";
$GLOBALS['strUniqueViewsMonth']             = "Wyświetleń unikalnych/miesiąc";
$GLOBALS['strPageRank']                     = "Ranga strony";
$GLOBALS['strCategory']                     = "Kategoria";
$GLOBALS['strHelpFile']                     = "Plik pomocy";
$GLOBALS['strWebsiteZones']                 = "Strefy Strony";

// Zone
$GLOBALS['strZone']                         = "Strefa";
$GLOBALS['strZones']                        = "Strefy";
$GLOBALS['strAddNewZone']                   = "Dodaj strefę";
$GLOBALS['strAddNewZone_Key']               = "Dodaj <u>n</u>ową strefę";
$GLOBALS['strAddZone']                      = "Utwórz strefę";
$GLOBALS['strModifyZone']                   = "Zmień strefę";
$GLOBALS['strZoneToWebsite']                = "Brak Stron";
$GLOBALS['strLinkedZones']                  = "Przyłączone strefy";
$GLOBALS['strZoneOverview']                 = "Podgląd strefy";
$GLOBALS['strZoneProperties']               = "Właściwości strefy";
$GLOBALS['strZoneHistory']                  = "Historia strefy";
$GLOBALS['strNoZones']                      = "Obecnie brak stref zdefiniowanych dla tej strony.";
$GLOBALS['strNoZonesAddWebsite']            = "Na obecną chwilę nie określeno żadnych stron internetowych. Aby utworzyć strefę najpierw <a href='affiliate-edit.php'> dodaj nową stronę internetową </ a> .";
$GLOBALS['strConfirmDeleteZone']            = "Czy na pewno chcesz usunąć tę strefę?";
$GLOBALS['strConfirmDeleteZones']           = "Czy na pewno chcesz usunąć wybrane strefy?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "Do tej strefy wciąż podłączone są kampanie, jeśli ją usuniesz, kampanie przestaną działać i nie otrzymasz za nie należności.";
$GLOBALS['strZoneType']                     = "Typ strefy";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Button lub Prostokąt";
$GLOBALS['strInterstitial']                 = "Interstitial lub Floating DHTML";
$GLOBALS['strTextAdZone']                   = "Reklama tekstowa";
$GLOBALS['strEmailAdZone']                  = "Strefa E-mail/Biuletyn";
$GLOBALS['strZoneClick']                    = "Kliknij śledzenie strefy";
$GLOBALS['strShowMatchingBanners']          = "Pokaż pasujące banery";
$GLOBALS['strHideMatchingBanners']          = "Ukryj pasujące banery";
$GLOBALS['strBannerLinkedAds']              = "Banery podłączone do strefy";
$GLOBALS['strCampaignLinkedAds']            = "Kampanie podłączone do strefy";
$GLOBALS['strTotalZones']                   = "Strefy ogółem";
$GLOBALS['strInactiveZonesHidden']          = "ukryte strefy nieaktywne";
$GLOBALS['strWarnChangeZoneType']           = "Jeżeli zmienisz strefę na typ tekstowy bądź e-mail, wszystkie banery/kampanie zostaną odłączone z racji restrykcji dla tego typu stref\\n<ul>\\n<li>Do stref tekstowych podłączyć można wyłącznie reklamy tekstowe</li>\\n<li>Kampanie w strefie e-mail mogą w danym czasie posiadać tylko jeden aktywny baner</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Modyfikacja rozmiarów strefy spowoduje odłączenie wszystkich banerów, których rozmiary nie odpowiadają nowym parametrom, oraz dodanie wszystkich banerów o odpowiednich rozmiarach z podłączonych kampanii.';
$GLOBALS['strWarnChangeBannerSize']         = 'Modyfikacja rozmiarów banera spowoduje odłączenie go od stref nie obsługujących nowych rozmiarów. Jeśli <strong>kampania</strong> tego banera jest podłączona do strefy z nowymi rozmiarami, podłączenie banera nastąpi automatycznie';
$GLOBALS['strInventoryForecasting']         = 'Prognozowanie dla zasobów';
$GLOBALS['strZonesOfWebsite']               = 'w'; //this is added between page name and website name eg. 'Zones in www.example.com'

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB Duży Baner (468 x 60 )";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Mały przycisk (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Duży przycisk (120 x 90)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Połowa banera (234 x 60)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Kwadratowy przycisk(125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Prostokąt (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Kwadratowy Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB Pionowy Baner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Średni prostokąt (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Duży prostokąt (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Pionowy prostokąt (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Szeroki Skyscraper (160 x 600)";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "Zaawansowane";
$GLOBALS['strChains']                    = "�?ańcuchy";
$GLOBALS['strChainSettings']            = "Ustawienia łańcucha";
$GLOBALS['strZoneNoDelivery']            = "Jeśli żaden baner z tej strefy <br />nie może być dostarczony...";
$GLOBALS['strZoneStopDelivery']            = "Zaprzestań dostarczania i nie pokazuj banera";
$GLOBALS['strZoneOtherZone']            = "Wyświetl wybraną strefę w zastępstwie";
$GLOBALS['strZoneUseKeywords']            = "Wybierz banner używając poniższych słów kluczowych";
$GLOBALS['strZoneAppend']                = "Zawsze dodawaj poniższy kod HTML do banerów wyświetlanych przez tę strefę";
$GLOBALS['strAppendSettings']            = "Ustawienia dodawania";
$GLOBALS['strZoneForecasting']            = "Ustawienia prognozowania w strefie";
$GLOBALS['strZonePrependHTML']            = "Zawsze dodawaj ten kod HTML przed odnośnikami tekstowymi wyświetlanymi przez tę strefę";
$GLOBALS['strZoneAppendHTML']            = "Zawsze dodawaj ten kod HTML po odnośnikach tekstowych wyświetlanych przez tę strefę";
$GLOBALS['strZoneAppendNoBanner']        = "Dodaj, nawet jeśli baner nie jest dostarczany";
$GLOBALS['strZoneAppendType']            = "Dodaj typ";
$GLOBALS['strZoneAppendHTMLCode']        = "Kod HTML";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup lub interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Zawsze dodawaj ten popup lub interstitial do banerów wyświetlanych przez tę strefę";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Wszystkie banery podłączone do tej strefy są obecnie nieaktywne. <br />Tak wygląda łańcuch strefy, według którego będą ustawione:";
$GLOBALS['strZoneProbNullPri']            = "Do tej strefy nie podłączono żadnych aktywnych banerów.";
$GLOBALS['strZoneProbListChainLoop']    = "Postępowanie zgodnie z łańcuchem stref spowodowałoby kołową pętlę. Dostarczanie z tej strefy zostało wstrzymane.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Wybierz pozycje, które mają być podłączone do tej strefy";
$GLOBALS['strLinkedBanners']            = "Podłącz banery indywidualne";
$GLOBALS['strCampaignDefaults']            = "Podłącz banery wg kampanii nadrzędnej";
$GLOBALS['strLinkedCategories']         = "Podłącz banery wg kategorii";
$GLOBALS['strWithXBanners']                = "%d baner(y)";
$GLOBALS['strInteractive']                = "Interaktywny";
$GLOBALS['strRawQueryString']            = "Słowo kluczowe";
$GLOBALS['strIncludedBanners']            = "Podłączone banery";
$GLOBALS['strLinkedBannersOverview']    = "Przegląd przyłączonych bannerów";
$GLOBALS['strLinkedBannerHistory']        = "Historia przyłączonych bannerów";
$GLOBALS['strNoZonesToLink']            = "Brak stref, do których ten baner mógłby zostać podłączony";
$GLOBALS['strNoBannersToLink']            = "Nie ma obecnie bannerów, które mogłyby zostać przyłączone do tej strefy";
$GLOBALS['strNoLinkedBanners']            = "Nie ma żadnych bannerów przyłączonych do tej strefy";
$GLOBALS['strMatchingBanners']            = "{count} pasujących banerów";
$GLOBALS['strNoCampaignsToLink']        = "Obecnie brak kampanii, które można podłączyć do tej strefy";
$GLOBALS['strNoTrackersToLink']            = "Obecnie brak trackerów, które można podłączyć do tej kampanii";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Obecnie brak stref, do których ta kampania mogłaby zostać podłączona";
$GLOBALS['strSelectBannerToLink']        = "Wybierz baner, który chcesz podłączyć do tej strefy:";
$GLOBALS['strSelectCampaignToLink']        = "Wybierz kampanię, którą chcesz podłączyć do tej strefy:";
$GLOBALS['strSelectAdvertiser']         = "Wybierz reklamodawcę";
$GLOBALS['strSelectPlacement']          = "Wybierz kampanię";
$GLOBALS['strSelectAd']                 = "Wybierz baner";
$GLOBALS['strSelectPublisher']          = "Wybierz stronę";
$GLOBALS['strSelectZone']               = "Wybierz strefę (obszar)";
$GLOBALS['strTrackerCodeSubject']          = "Dodaj kod trackera";
$GLOBALS['strStatusPending']            = "Oczekuje";
$GLOBALS['strStatusApproved']           = "Zatwierdzono";
$GLOBALS['strStatusDisapproved']        = "Odrzucono";
$GLOBALS['strStatusDuplicate']          = "Duplikuj";
$GLOBALS['strStatusOnHold']             = "Zatrzymano";
$GLOBALS['strStatusIgnore']             = "Ignoruj";
$GLOBALS['strConnectionType']           = "Typ";
$GLOBALS['strConnTypeSale']             = "Sprzedaż";
$GLOBALS['strConnTypeSignUp']           = "Rejestracja";
$GLOBALS['strShortcutEditStatuses'] = "Edytuj statusy";
$GLOBALS['strShortcutShowStatuses'] = "Pokaż statusy";

// Statistics
$GLOBALS['strStats']                     = "Statystyki";
$GLOBALS['strNoStats']                   = "Nie ma obecnie żadnych statystyk";
$GLOBALS['strNoTargetingStats']          = "Obecnie brak statystyk targetowania";
$GLOBALS['strNoStatsForPeriod']          = "Obecnie brak statystyk za okres od %s do %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Obecnie brak statystyk targetowania za okres od %s do %s";
$GLOBALS['strConfirmResetStats']         = "Czy na pewno chcesz usunąć wszystkie statystyki?";
$GLOBALS['strGlobalHistory']             = "Historia ogólna";
$GLOBALS['strDailyHistory']              = "Historia dzienna";
$GLOBALS['strDailyStats']                = "Statystyki dzienne";
$GLOBALS['strWeeklyHistory']             = "Historia tygodniowa";
$GLOBALS['strMonthlyHistory']            = "Historia miesięczna";
$GLOBALS['strCreditStats']               = "Statystyki kredytów";
$GLOBALS['strDetailStats']               = "Szczegółowe statystyki";
$GLOBALS['strTotalThisPeriod']           = "Ogółem dla tego okresu";
$GLOBALS['strAverageThisPeriod']         = "Średnio dla tego okresu";
$GLOBALS['strPublisherDistribution']     = "Dystrybucja Stron";
$GLOBALS['strCampaignDistribution']      = "Dystrybucja kampanii";
$GLOBALS['strResetStats']                = "Resetuj statystyki";
$GLOBALS['strSourceStats']               = "Statystyki źródła";
$GLOBALS['strSelectSource']              = "Wybierz źródło, ktęre chcesz zobaczyć:";
$GLOBALS['strSizeDistribution']          = "Dystrybucja według rozmiaru";
$GLOBALS['strCountryDistribution']       = "Dystrybucja według kraju";
$GLOBALS['strEffectivity']               = "Efektywność";
$GLOBALS['strTargetStats']               = "Statystyki targetowania";
$GLOBALS['strCampaignTarget']            = "Cel";
$GLOBALS['strTargetRatio']               = "Ratio Celu";
$GLOBALS['strTargetModifiedDay']         = "Cele zostały zmodyfikowane w ciągu dnia, targeting może nie być precyzyjny";
$GLOBALS['strTargetModifiedWeek']        = "Cele zostały zmodyfikowane w ciągu tygodnia, targeting może nie być precyzyjny";
$GLOBALS['strTargetModifiedMonth']       = "Cele zostały zmodyfikowane w ciągu miesiąca, targeting może nie być precyzyjny";
$GLOBALS['strNoTargetStats']             = "Nie ma obecnie żadnych statystyk targetingu";
$GLOBALS['strViewBreakdown']             = "Kryteria podglądu";
$GLOBALS['strBreakdownByDay']            = "Dzień";
$GLOBALS['strBreakdownByWeek']           = "Tydzień";
$GLOBALS['strBreakdownByMonth']          = "Miesiąc";
$GLOBALS['strBreakdownByDow']            = "Dzień tygodnia";
$GLOBALS['strBreakdownByHour']           = "godzina";
$GLOBALS['strItemsPerPage']              = "Pozycji na stronę";
$GLOBALS['strDistributionHistory']       = "Historia dystrybucji";
$GLOBALS['strShowGraphOfStatistics']     = "Pokaż <u>W</u>ykres statystyk";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>ksportuj statystyki do arkusza Excel";
$GLOBALS['strGDnotEnabled']              = "Aby wyświetlać wykresy musisz uruchomić GD w PHP. <br />Na tej stronie <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> uzyskasz więcej informacji oraz dowiesz się jak zainstalować GD na swoim serwerze.";
$GLOBALS['strStatsArea']                 = "Obszar";

// Hosts
$GLOBALS['strHosts']                = "Hosty";
$GLOBALS['strTopHosts']             = "Najczęściej pobierające hosty";
$GLOBALS['strTopCountries']         = "Najczęściej pobierające kraje";
$GLOBALS['strRecentHosts']             = "Ostatnio pobierające hosty";

// Expiration
$GLOBALS['strExpired']                = "Zakończony";
$GLOBALS['strExpiration']             = "Zakończenie";
$GLOBALS['strNoExpiration']           = "Bez daty zakończenia";
$GLOBALS['strEstimated']              = "Szacowana data zakończenia";
$GLOBALS['strNoExpirationEstimation'] = "Obecnie bezterminowo";
$GLOBALS['strDaysAgo']                = "dni temu";
$GLOBALS['strCampaignStop']           = "Zatrzymanie kampanii";

// Reports
$GLOBALS['strReports']                = "Raporty";
$GLOBALS['strPublisherReports']       = "Raport o Stronach";
$GLOBALS['strSelectReport']           = "Wybierz raport, który chcesz utworzyć";
$GLOBALS['strStartDate']              = "Data rozpoczęcia";
$GLOBALS['strEndDate']                = "Data zakończenia";
$GLOBALS['strPeriod']                 = "Okres";
$GLOBALS['strLimitations']            = "Limity";
$GLOBALS['strWorksheets']             = "Arkusze";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Wszyscy reklamodawcy";
$GLOBALS['strAnonAdvertisers']           = "Reklamodawcy anonimowi";
$GLOBALS['strAllPublishers']             = "Wszystkie Strony";
$GLOBALS['strAnonPublishers']            = "Strony anonimowe";
$GLOBALS['strAllAvailZones']             = "Wszystkie dostępne strefy";

// Userlog
$GLOBALS['strUserLog']                = "Log użytkownika";
$GLOBALS['strUserLogDetails']        = "Szczegóły logu użytkownika";
$GLOBALS['strDeleteLog']            = "Usuń log";
$GLOBALS['strAction']                = "Akcja";
$GLOBALS['strNoActionsLogged']        = "Żadne działania nie są zalogowane";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Generuj kod banera";
$GLOBALS['strChooseInvocationType']        = "Wybierz typ kodu wywołującego baner";
$GLOBALS['strGenerate']                    = "Generuj";
$GLOBALS['strParameters']                = "Atrybuty znacznika";
$GLOBALS['strFrameSize']                = "Rozmiar ramki";
$GLOBALS['strBannercode']                = "Kod banera";
$GLOBALS['strBackToTheList']            = "Wróć do listy raportów";
$GLOBALS['strCharset']                  = "Zestaw znaków";
$GLOBALS['strAutoDetect']                   = "Automatyczne wykrywanie";


// Errors
$GLOBALS['strMySQLError']                       = "Błąd SQL:";
$GLOBALS['strErrorDatabaseConnetion']           = "Błąd połączenia z bazą danych.";
$GLOBALS['strErrorCantConnectToDatabase']       = "Błąd krytyczny. %s nie może połączyć się z bazą danych. Interfejs administratora jest niedostępny. Dostarczanie banerów również może zostać zakłócone. Przyczyny zaistniałego problemu mogą być następujące: <ul> <li>Serwer bazy danych nie działa w danej chwili</li> <li>Lokalizacja serwera bazy danych uległa zmianie</li> <li>Nazwa użytkownika bądź hasło używane do łączenia się z serwerem bazy danych jest niepoprawne</li> <li>PHP nie załadował rozwinięcia MySQL.";
$GLOBALS['strLogErrorClients']                  = "[phpAds] Wystąpił błąd podczas próby pobrania reklamodawców z bazy danych.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Wystąpił błąd podczas próby pobrania banerów z bazy danych.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Wystąpił błąd podczas próby pobrania Odsłon z bazy danych.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Wystąpił błąd podczas próby pobrania Kliknięć z bazy danych.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Wystąpił błąd podczas próby pobrania Konwersji z bazy danych.";
$GLOBALS['strErrorViews']                       = "Musisz wpisać liczbę Odsłon lub zaznaczyć pole Bez ograniczeń!";
$GLOBALS['strErrorNegViews']                    = "Ujemne liczby Odsłon nie są dozwolone";
$GLOBALS['strErrorClicks']                      = "Musisz wpisać liczbę Kliknięć lub zaznaczyć pole Bez ograniczeń!";
$GLOBALS['strErrorNegClicks']                   = "Ujemne liczby kliknięć nie są dozwolone";
$GLOBALS['strNoMatchesFound']                   = "Nie znaleziono pasujących elementów";
$GLOBALS['strErrorOccurred']                    = "Wystąpił błąd";
$GLOBALS['strErrorUploadSecurity']              = "Wykryto możliwy błąd zabezpieczeń, wysyłanie wstrzymane!";
$GLOBALS['strErrorUploadBasedir']               = "Brak dostępu do wysłanego pliku, prawdopodobnie z powodu restrykcji safemode lub open_basedir";
$GLOBALS['strErrorUploadUnknown']               = "Z niewiadomego powodu, brak dostępu do wysłanego pliku. Sprawdź konfigurację PHP";
$GLOBALS['strErrorStoreLocal']                  = "Wystąpił błąd podczas zapisywania bannera w lokalnym katalogu. Powodem tego jest prawdopodobnie błędna ścieżka lokalnego katalogu podana w ustawieniach";
$GLOBALS['strErrorStoreFTP']                    = "Wystąpił błąd podczas zapisywania bannera na serwerze FTP. Powodem tego może być niedostępność serwera lub jego błędna konfiguracja w ustawieniach";
$GLOBALS['strErrorDBPlain']                     = "Wystąpił błąd podczas wywoływania bazy danych";
$GLOBALS['strErrorDBSerious']                   = "Wykryto poważny błąd z bazą danych";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Tabela bazy danych jest prawdopodobnie uszkodzona i wymaga naprawienia. Więcej informacji na temat naprawiania uszkodzonych tabel znajdziesz w <i>Przewodniku administratora</i> w rozdziale <i>Rozwiązywanie problemów</i>.";
$GLOBALS['strErrorDBContact']                   = "Poinformuj administratora serwera o zaistniałym problemie.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorLinkingBanner']               = "Nie można podłączyć banera do strefy, ponieważ:";
$GLOBALS['strUnableToLinkBanner']               = "Nie można podłączyć banera:";
$GLOBALS['strErrorEditingCampaign']             = "Błąd podczas aktualizowania kampanii:";
$GLOBALS['strUnableToChangeCampaign']           = "Nie można wprowadzić tej zmiany, ponieważ:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "nieprawidłowy format numeru w polu informacji o dochodach";
$GLOBALS['strErrorEditingZone']                 = "Błąd w aktualizacji strefy:";
$GLOBALS['strUnableToChangeZone']               = "Nie można wprowadzić tej zmiany, ponieważ:";
$GLOBALS['strDatesConflict']                    = "nastąpił konflikt dat:";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Niektóre statystyki nie zostały zaprotokołowane w strefie czasowej UTC (uniwersalny czas koordynowany), wobec czego mogą zostać wyświetlone w nieodpowiedniej strefie czasowej.";
$GLOBALS['strWarningInaccurateReadMore']        = "Dowiedz się więcej na ten temat";
$GLOBALS['strWarningInaccurateReport']          = "Niektóre statystyki w tym raporcie nie zostały zaprotokołowane w strefie czasowej UTC (uniwersalny czas koordynowany), wobec czego mogą zostać wyświetlone w nieodpowiedniej strefie czasowej.";

//Validation
$GLOBALS['strRequiredField']                    = "Pole wymagane";


// Email
$GLOBALS['strSirMadam']                         = "Szanowny/a";
$GLOBALS['strMailSubject']                      = "Raport dla reklamodawcy";
$GLOBALS['strAdReportSent']                     = "Raport dla reklamodawcy wysłany";
$GLOBALS['strMailHeader']                       = "Drogi {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Poniżej widnieją statystyki banerów dla {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampania została aktywowana";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampania została dezaktywowana";
$GLOBALS['strMailBannerActivated']              = "Poniższa kampania została aktywowana, ponieważ nadeszła data jej aktywacji.";
$GLOBALS['strMailBannerDeactivated']            = "Poniższa kampania została dezaktywowana, ponieważ";
$GLOBALS['strMailFooter']                       = "Z poważaniem,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Poniższe bannery zostały deaktywowane ponieważ";
$GLOBALS['strMailNothingLeft']                  = "Jeśli chcieliby Państwo kontynuować reklamę na naszej stronie, prosimy o kontakt.\\nZ przyjemnością udzielimy dalszych informacji.";
$GLOBALS['strClientDeactivated']                = "Ta kampania jest obecnie nieaktywna, ponieważ";
$GLOBALS['strBeforeActivate']                   = "data aktywacji jeszcze nie nadeszła";
$GLOBALS['strAfterExpire']                      = "data zakończenia już minęła";
$GLOBALS['strNoMoreImpressions']                = "wszystkie Odsłony zostały wykorzystane";
$GLOBALS['strNoMoreClicks']                     = "wszystkie Kliknięcia zostały wykorzystane";
$GLOBALS['strNoMoreConversions']                = "pula Sprzedaży została wyczerpana";
$GLOBALS['strWeightIsNull']                     = "jej waga jest ustawiona na zero";
$GLOBALS['strWarnClientTxt']                    = "Liczba Odsłon, Kliknięć lub Konwersji pozostałych dla banerów schodzi poniżej granicy {limit}. \\nKiedy liczba Odsłon, Kliknięć lub Konwersji zostanie wykorzystana, banery zostaną deaktywowane.";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Liczba Odsłon/Kliknięć/Konwersji jest niska";
$GLOBALS['strNoViewLoggedInInterval']           = "Nie zarejestrowano żadnych Odsłon w czasie objętym tym raportem";
$GLOBALS['strNoClickLoggedInInterval']          = "Nie zarejestrowano żadnych Kliknięć w czasie objętym tym raportem";
$GLOBALS['strNoConversionLoggedInInterval']     = "Nie zarejestrowano żadnych Konwersji w czasie objętym tym raportem";
$GLOBALS['strMailReportPeriod']                 = "Ten raport zawiera statystyki od {startdate} do {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Ten raport zawiera wszystkie statystyki aż do {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Brak statystyk dla tej kampanii";
$GLOBALS['strImpendingCampaignExpiry']          = "Kampania wkrótce wygaśnie";
$GLOBALS['strYourCampaign']                     = "Twoja kampania";
$GLOBALS['strTheCampiaignBelongingTo']          = "Kampania należy do";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "Wyświetlenia {clientname} wygasają {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "Klientowi {clientname} pozostało mniej niż {limit} wyświetleń";
$GLOBALS['strImpendingCampaignExpiryBody']      = "W rezultacie kampania zostanie wkrótce automatycznie dezaktywowana,\\npodobnie jak i banery do niej przynależące.";

// Priority
$GLOBALS['strPriority']                         = "Priorytet";
$GLOBALS['strSourceEdit']                       = "Edytuj źródła";

// Preferences
$GLOBALS['strPreferences']                      = "Preferencje";
$GLOBALS['strUserPreferences']                  = "Ustawienia użytkownika";
$GLOBALS['strChangePassword']                   = "Zmień hasło";
$GLOBALS['strChangeEmail']                      = "Zmień adres e-mail";
$GLOBALS['strCurrentPassword']                  = "Hasło aktualne";
$GLOBALS['strChooseNewPassword']                = "Wybierz nowe hasło";
$GLOBALS['strReenterNewPassword']               = "Wpisz ponownie nowe hasło";
$GLOBALS['strNameLanguage']                     = "Nazwa i język";
$GLOBALS['strAccountPreferences']               = "Ustawienia konta";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Ustawienia raportów e-mail kampanii";
$GLOBALS['strAdminEmailWarnings']               = "Ostrzeżenia e-mail administratora";
$GLOBALS['strAgencyEmailWarnings']              = "Ostrzeżenia e-mail agencji";
$GLOBALS['strAdveEmailWarnings']                = "Ostrzeżenia e-mail reklamodawcy";
$GLOBALS['strFullName']                         = "Pełna nazwa";
$GLOBALS['strEmailAddress']                     = "Adres e-mail";
$GLOBALS['strUserDetails']                      = "O użytkowniku";
$GLOBALS['strLanguageTimezone']                 = "Język oraz strefa czasowa";
$GLOBALS['strLanguageTimezonePreferences']      = "Ustawienia języka oraz strefy czasowej";
$GLOBALS['strUserInterfacePreferences']         = "Ustawienia interfejsu użytkownika";
$GLOBALS['strPluginPreferences']                = "Ustawienia wtyczek";
$GLOBALS['strInvocationPreferences']            = "Ustawienia kodu wywołującego";
$GLOBALS['strColumnName']                       = "Nazwa kolumny";
$GLOBALS['strShowColumn']                       = "Pokaż kolumnę";
$GLOBALS['strCustomColumnName']                 = "Niestandardowa nazwa kolumny";
$GLOBALS['strColumnRank']                       = "Ranga kolumny";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Dochód";
$GLOBALS['strNumberOfItems']                       = "Ilość jednostek";
$GLOBALS['strRevenueCPC']                          = "Dochody CPC";
$GLOBALS['strECPM']                                = "ECPM";
$GLOBALS['strPendingConversions']               = "Konwersje oczekujące";
$GLOBALS['strImpressionSR']                     = "Odsłona (współczynnik sprzedaży)";
$GLOBALS['strClickSR']                          = "Kliknięcie (współczynnik sprzedaży)";
$GLOBALS['strActualImpressions']                = "Odsłony";

    // Short names
$GLOBALS['strRevenue_short']                    = "Doch.";
$GLOBALS['strNumberOfItems_short']              = "Ilość jedn.";
$GLOBALS['strRevenueCPC_short']                 = "Doch. CPC";
$GLOBALS['strRequests_short']                   = "żąd.";
$GLOBALS['strClicks_short']                     = "Kliknięcia";
$GLOBALS['strConversions_short']                = "Konw.";
$GLOBALS['strPendingConversions_short']         = "Konw. oczekujące";
$GLOBALS['strClickSR_short']                    = "Kliknięcie (współczynnik sprzedaży)";

// Global Settings
$GLOBALS['strConfiguration']                = "Konfiguracja";
$GLOBALS['strGlobalSettings']               = "Ustawienia ogólne";
$GLOBALS['strGeneralSettings']              = "Ustawienia ogólne";
$GLOBALS['strMainSettings']                 = "Ustawienia główne";
$GLOBALS['strAdminSettings']                = "Ustawienia administracji";


// Product Updates
$GLOBALS['strProductUpdates']         = "Aktualizacje produktu";
$GLOBALS['strViewPastUpdates']        = "Zarządzanie poprzednimi aktualizacjami oraz kopiami zapasowymi";
$GLOBALS['strFromVersion']            = "Z wersji";
$GLOBALS['strToVersion']              = "Do wersji";
$GLOBALS['strToggleDataBackupDetails']= "Przełącz do szczegółów danych kopii zapasowej";
$GLOBALS['strClickViewBackupDetails'] = "kliknij aby zobaczyć szczegóły kopii zapasowej";
$GLOBALS['strClickHideBackupDetails'] = "kliknij aby ukryć szczegóły kopii zapasowej";
$GLOBALS['strShowBackupDetails']      = "Pokaż szczegóły kopii zapasowej danych";
$GLOBALS['strHideBackupDetails']      = "Ukryj szczegóły kopii zapasowej danych";
$GLOBALS['strInstallation']           = "Instalacja";
$GLOBALS['strBackupDeleteConfirm']    = "Czy na pewno chcesz usunąć wszystkie kopie zapasowe utworzone z tego uaktualnienia?";
$GLOBALS['strDeleteArtifacts']         = "Usuń artefakty";
$GLOBALS['strArtifacts']              = "Atrefakty";
$GLOBALS['strBackupDbTables']         = "Kopia zapasowa tabel bazy danych";
$GLOBALS['strLogFiles']               = "Pliki protokołowania";
$GLOBALS['strConfigBackups']          = "Konfiguracja kopii zapasowych";
$GLOBALS['strUpdatedDbVersionStamp']  = "Zaktualizowano wersję znaczka bazy danych";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "AKTUALIZACJA ZAKOŃCZONA";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "AKTUALIZACJA NIE POWIOD�?A SIĘ";

// Agency
$GLOBALS['strAgencyManagement']              = "Zarządzanie kontem";
$GLOBALS['strAgency']                      = "Konto";
$GLOBALS['strAgencies']                   = "Konta";
$GLOBALS['strAddAgency']                   = "Dodaj nowe konto";
$GLOBALS['strAddAgency_Key']               = "Dodaj <u>n</u>owe konto";
$GLOBALS['strTotalAgencies']               = "Wszystkie konta";
$GLOBALS['strAgencyProperties']              = "Ustawienia konta";
$GLOBALS['strNoAgencies']                 = "Obecnie brak zdefiniowanych kont";
$GLOBALS['strConfirmDeleteAgency']           = "Czy na pewno chcesz usunąć konto?";
$GLOBALS['strHideInactiveAgencies']          = "Ukryj konta nieaktywne";
$GLOBALS['strInactiveAgenciesHidden']     = "ukryte konta nieaktywne";
$GLOBALS['strAllowAgencyEditConversions'] = "Zezwalaj temu użytkownikowi na edytowanie konwersji";
$GLOBALS['strAllowMoreReports']           = "Pokaż przycisk 'Więcej raportów'";
$GLOBALS['strSwitchAccount']              = "Zmień konto";

// Channels
$GLOBALS['strChannel']                    = "Kanał targetowania";
$GLOBALS['strChannels']                   = "Kanały targetowania";
$GLOBALS['strChannelOverview']            = "Podgląd kanału targetowania";
$GLOBALS['strChannelManagement']          = "Zarządzenie kanałem targetowania";
$GLOBALS['strAddNewChannel']              = "Dodaj nowy kanał targetowania";
$GLOBALS['strAddNewChannel_Key']          = "Dodaj <u>n</u>owy kanał targetowania";
$GLOBALS['strChannelToWebsite']           = "Brak Stron";
$GLOBALS['strNoChannels']                 = "W tej chwili brak zdefiniowanych kanałów targetowania";
$GLOBALS['strNoChannelsAddWebsite']       = "Obecnie nie istnieją żadne zdefiniowane strony internetowe. Aby utworzyć strefę najpierw <a href='affiliate-edit.php'> dodaj nową stronę internetową </ a> .";

$GLOBALS['strEditChannelLimitations']     = "Edytuj limity dla kanału targetowania";
$GLOBALS['strChannelProperties']          = "Ustawienia docelowego kanału";
$GLOBALS['strChannelLimitations']         = "Opcje dostarczania";
$GLOBALS['strConfirmDeleteChannel']       = "Czy jesteś pewien, że chcesz usunąć kanał targetowania?";
$GLOBALS['strConfirmDeleteChannels']      = "Czy na pewno chcesz usunąć wybrane kanały targetowania?";
$GLOBALS['strModifychannel']              = "Edycja kanału targetowania";
$GLOBALS['strChannelsOfWebsite']          = 'w'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Nazwa zmiennej";
$GLOBALS['strVariableDescription']     = "Opis";
$GLOBALS['strVariableDataType']         = "Wyświetlanie daty";
$GLOBALS['strVariablePurpose']       = "Cel";
$GLOBALS['strGeneric']               = "Ogólny";
$GLOBALS['strBasketValue']           = "Wartość koszyka";
$GLOBALS['strNumItems']              = "Ilość jednostek";
$GLOBALS['strVariableIsUnique']      = "Usunąć duplikaty konwersji?";
$GLOBALS['strNumber']                 = "Numer";
$GLOBALS['strString']                 = "Ciąg";
$GLOBALS['strTrackFollowingVars']     = "Śledzenie następującej zmiennej";
$GLOBALS['strAddVariable']             = "Dodaj zmienną";
$GLOBALS['strNoVarsToTrack']         = "Brak zmiennych do śledzenia.";
$GLOBALS['strVariableHidden']       = "Schować zmienną dla Stron?";
$GLOBALS['strVariableRejectEmpty']  = "Odrzuć jeśli puste?";
$GLOBALS['strTrackingSettings']     = "Ustawienia śledzenia";
$GLOBALS['strTrackerType']          = "Typ trackera";
$GLOBALS['strTrackerTypeJS']        = "Śledzenie zmiennych JavaScript";
$GLOBALS['strTrackerTypeDefault']   = "Śledzenie zmiennych JavaScript (kompatybilne wstecznie, wymaga dostosowania)";
$GLOBALS['strTrackerTypeDOM']       = "Śledź elementy HTML używając DOM";
$GLOBALS['strTrackerTypeCustom']    = "Dowolny kod JS";
$GLOBALS['strVariableCode']         = "Kod śledzenia JavaScript";


// Upload conversions
$GLOBALS['strYouHaveNoCampaigns']   = "Reklamodawcy i Kampanie";


// Password recovery
$GLOBALS['strForgotPassword']         = "Nie pamiętasz hasła?";
$GLOBALS['strPasswordRecovery']       = "Odzyskiwanie hasła";
$GLOBALS['strEmailRequired']          = "Adres e-mail jest obligatoryjny";
$GLOBALS['strPwdRecEmailSent']        = "E-mail z odzyskanym hasłem został wysłany";
$GLOBALS['strPwdRecEmailNotFound']    = "Nie znaleziono adresu e-mail";
$GLOBALS['strPwdRecPasswordSaved']    = "Nowe hasło zostało zapisane, przejdź do <a href='index.php'>loginu</a>";
$GLOBALS['strPwdRecWrongId']          = "ID niepoprawne";
$GLOBALS['strPwdRecEnterEmail']       = "Wprowadź adres e-mail poniżej";
$GLOBALS['strPwdRecEnterPassword']    = "Wprowadź nowe hasło poniżej";
$GLOBALS['strPwdRecReset']            = "Resetuj hasło";
$GLOBALS['strPwdRecResetLink']        = "Link do zresetowania hasła";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Resetuj hasło dla tego użytkownika";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s odzyskiwanie hasła";
$GLOBALS['strNotifyPageMessage']      = "Na Twój adres e-mail wyslaliśmy wiadomość zawierającą link, który pozwoli Ci zresetować hasło i zalogować się.<br />E-mail powinien pojawić się w Twojej skrzynce w ciągu kilku minut.<br />Jeśli nie otrzymasz tej wiadomości, sprawdź swój folder Spam.<br /><a href='index.php'>Powrót do strony logowania.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "oraz dodatkowych pozycji";
$GLOBALS['strFor']                    = "dla";
$GLOBALS['strAdZoneAsscociation']     = "Powiązanie reklama - strefa";
$GLOBALS['strBinaryData']             = "Dane binarne";
$GLOBALS['strAuditTrailDisabled']     = "Opcja Audyt została wyłączona przez administratora . W następstwie nie zalogowano żadnych kolejnych zdarzeń do wyświetlenia na liście Audytu.";
$GLOBALS['strAccount']                  = "Konto";
$GLOBALS['strAccountUserAssociation']   = "Połączenie konto - użytkownik";
$GLOBALS['strEvent']                    = "Zdarzenie";
$GLOBALS['strImage']                    = "Obraz";
$GLOBALS['strCampaignZoneAssociation']      = "Połączenie strefa - kampania";
$GLOBALS['strAccountPreferenceAssociation'] = "Połączenie konto - preferencje";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "Użytkownik nie był aktywny we wskazanym okresie czasu.";
$GLOBALS['strAuditTrail']             = "Audyt";
$GLOBALS['strAuditTrailSetup']          = "Ustaw Audyt na dziś";
$GLOBALS['strAuditTrailGoTo']           = "Przejdź do strony Audytu";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Przejdź do strony Kampanii";
$GLOBALS['strCampaignSetUp']            = "Rozpocznij dziś kampanię";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>Brak danych o kampaniach do wyświetlenia.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "Żadna kampania nie rozpoczęła się ani nie dobiegła końca we wskazanym okresie";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>Aby zobaczyć kampanie, które rozpoczęły się bądź dobiegły końca we wskazanym okresie, musisz uaktywnić opcję Audyt</li>	        <li>Ten komunikat został wyświetlony, ponieważ Audyt nie został aktywowany<li>";
$GLOBALS['strCampaignAuditTrailSetup']   = "Aktywuj opcję Audyt, aby uruchomić podgląd Kampanii";

$GLOBALS['strUnsavedChanges']       = "Nie zapisałeś zmian na tej stronie. Pamiętaj, aby nacisnąć przycisk \"Zapisz zmiany\" kiedy skończysz.";
$GLOBALS['strDeliveryLimitationsDisagree'] = "OSTRZEŻENIE: Ograniczenia maszyny dostarczania <strong>NIE SĄ ZGODNE</strong> z ograniczeniami przedstawionymi poniżej<br /> Proszę nacisnąć ZAPISZ ZMIANY, aby aktualizować reguły dla maszyny dostarczania";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Niektóre limity dostarczania podają nieprawidłowe wartości:";

//confirmation messages











/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php

// Market entities

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Arabski";
$GLOBALS['str_bg']                  = "Bułgarski";
$GLOBALS['str_cs']                  = "Czeski";
$GLOBALS['str_cy']                  = "Walijski";
$GLOBALS['str_da']                  = "Duński";
$GLOBALS['str_de']                  = "Niemiecki";
$GLOBALS['str_el']                  = "Grecki";
$GLOBALS['str_en']                  = "Angielski";
$GLOBALS['str_es']                  = "Hiszpański";
$GLOBALS['str_fa']                  = "Perski";
$GLOBALS['str_fr']                  = "Francuski";
$GLOBALS['str_he']                  = "Hebrajski";
$GLOBALS['str_hr']                  = "Chorwacki";
$GLOBALS['str_hu']                  = "Węgierski";
$GLOBALS['str_id']                  = "Indonezyjski";
$GLOBALS['str_it']                  = "Włoski";
$GLOBALS['str_ja']                  = "Japoński";
$GLOBALS['str_ko']                  = "Koreański";
$GLOBALS['str_lt']                  = "Litewski";
$GLOBALS['str_ms']                  = "Malajski";
$GLOBALS['str_nb']                  = "Norweski";
$GLOBALS['str_nl']                  = "Duński";
$GLOBALS['str_pl']                  = "Polski";
$GLOBALS['str_pt_BR']               = "Portugalski Brazylia";
$GLOBALS['str_ro']                  = "Rumuński";
$GLOBALS['str_ru']                  = "Rosyjski";
$GLOBALS['str_sk']                  = "Słowacki";
$GLOBALS['str_sl']                  = "Słoweński";
$GLOBALS['str_sv']                  = "Szwedzki";
$GLOBALS['str_tr']                  = "Turecki";
$GLOBALS['str_uk']                  = "Ukraiński";
$GLOBALS['str_zh_CN']               = "Chiński (pismo uproszczone)";
$GLOBALS['str_zh_TW']               = "Chiński (pismo tradycyjne)";

?>
