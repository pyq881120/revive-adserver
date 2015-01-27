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
$GLOBALS['phpAds_TextDirection']        = "ltr";
$GLOBALS['phpAds_TextAlignRight']       = "right";
$GLOBALS['phpAds_TextAlignLeft']        = "left";
$GLOBALS['phpAds_CharSet']              = "UTF-8";

$GLOBALS['phpAds_DecimalPoint']         = ".";
$GLOBALS['phpAds_ThousandsSeperator']   = ",";

// Date & time configuration
$GLOBALS['date_format']                 = "%d-%m-%Y";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m-%Y";
$GLOBALS['day_format']                  = "%d-%m";
$GLOBALS['week_format']                 = "%W-%Y";
$GLOBALS['weekiso_format']              = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Domov";
$GLOBALS['strHelp']                     = "Pomoč";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Začni znova";
$GLOBALS['strNavigation']               = "Navigacija";
$GLOBALS['strShortcuts']                = "Bližnjice";
$GLOBALS['strActions']                  = "Dejanja";
$GLOBALS['strMore']                     = "Več";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Manj";
$GLOBALS['strAdminstration']            = "Inventar";
$GLOBALS['strMaintenance']              = "Vzdrževanje";
$GLOBALS['strProbability']              = "Verjetnost prikaza";
$GLOBALS['strInvocationcode']           = "Pozivna koda";
$GLOBALS['strTrackerVariables']         = "Sledilne spremenljivke";
$GLOBALS['strBasicInformation']         = "Osnovne informacije";
$GLOBALS['strAdditionalInformation']    = "Dodatne informacije";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "Informacije o prijavi";
$GLOBALS['strLogoutURL']                = "URL za preusmeritev ob odjavi. <br />Prazno za privzeto";
$GLOBALS['strAppendTrackerCode']        = "Pripni sledilno kodo";
$GLOBALS['strOverview']                 = "Pregled";
$GLOBALS['strSearch']                   = "<u>I</u>skanje";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "Podrobnosti";
$GLOBALS['strUpdateSettings']           = "Posodobitvene nastavitve";
$GLOBALS['strCheckForUpdates']          = "Preveri za posodobitve";
$GLOBALS['strWhenCheckingForUpdates']   = "Pri preverjanju za posodobitve";
$GLOBALS['strCompact']                  = "Zgoščeno";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "Uporabnik";
$GLOBALS['strEdit']                     = "Uredi";
$GLOBALS['strCreate']                   = "Ustvari";
$GLOBALS['strDuplicate']                = "Podvoji";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Premakni v";
$GLOBALS['strDelete']                   = "Izbriši";
$GLOBALS['strActivate']                 = "Aktiviraj";
$GLOBALS['strDeActivate']               = "Deaktiviraj";
$GLOBALS['strConvert']                  = "Pretvori";
$GLOBALS['strRefresh']                  = "Osveži";
$GLOBALS['strSaveChanges']              = "Shrani spremembe";
$GLOBALS['strUp']                       = "Gor";
$GLOBALS['strDown']                     = "Dol";
$GLOBALS['strSave']                     = "Shrani";
$GLOBALS['strCancel']                   = "Prekliči";
$GLOBALS['strBack']                     = "Nazaj";
$GLOBALS['strPrevious']                 = "Predhodnji";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Naslednji";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Da";
$GLOBALS['strNo']                       = "Ne";
$GLOBALS['strNone']                     = "Nobeden";
$GLOBALS['strCustom']                   = "Po meri";
$GLOBALS['strDefault']                  = "Privzeto";
$GLOBALS['strOther']                    = "Drugo";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "Neomejeno";
$GLOBALS['strUntitled']                 = "Neimenovano";
$GLOBALS['strAll']                      = "vsi";
$GLOBALS['strAvg']                      = "Povp.";
$GLOBALS['strAverage']                  = "Povprečje";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Celotno";
$GLOBALS['strTotal']                    = "Skupno";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "aktiven";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "do";
$GLOBALS['strAdd']                      = "Dodaj";
$GLOBALS['strLinkedTo']                 = "povezan z";
$GLOBALS['strDaysLeft']                 = "Preostalo dni";
$GLOBALS['strCheckAllNone']             = "Preveri vse / ničesar";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>R</u>azširi vse";
$GLOBALS['strCollapseAll']              = "<u>P</u>ovrni vse";
$GLOBALS['strShowAll']                  = "Prikaži vse";
$GLOBALS['strNoAdminInterface']         = "Administratorski vmesnik je bil izklopljen zaradi vzdrževalnih del. To ne vpliva na dostavo vaših kampanj.";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "\\'Od' datum mora biti zgodnješi kot 'Do' datum";
$GLOBALS['strFieldContainsErrors']      = "Naslednja polja vsebujejo napake:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Preden lahko nadaljujete, morate";
$GLOBALS['strFieldFixBeforeContinue2']  = "te napake odpraviti.";
$GLOBALS['strDelimiter']                = "Ločilo";
$GLOBALS['strMiscellaneous']            = "Razno";
$GLOBALS['strCollectedAllStats']        = "Vse statistike";
$GLOBALS['strCollectedToday']           = "Danes";
$GLOBALS['strCollectedYesterday']       = "Včeraj";
$GLOBALS['strCollectedThisWeek']        = "Trenutni teden";
$GLOBALS['strCollectedLastWeek']        = "Prejšnji teden";
$GLOBALS['strCollectedThisMonth']       = "Trenutni mesec";
$GLOBALS['strCollectedLastMonth']       = "Prejšnji mesec";
$GLOBALS['strCollectedLast7Days']       = "Zadnjih 7 dni";
$GLOBALS['strCollectedSpecificDates']   = "Izbrani datumi";
$GLOBALS['strDifference']               = "Razlika (%)";
$GLOBALS['strPercentageOfTotal']        = "% Celoten";
$GLOBALS['strValue']                    = "Vrednost";
$GLOBALS['strAdmin']                    = "Administrator";
$GLOBALS['strWarning']                  = "Opozorilo";
$GLOBALS['strNotice']                   = "Obvestilo";
$GLOBALS['strRequiredField']            = "Zahtevano polje";
$GLOBALS['strCloseWindow']              = "Close window";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "Nadzorna plošča ne more biti prikazana";
$GLOBALS['strNoCheckForUpdates']        = "Nadzorna plošča trenutno ne more biti prikazana, ker imate<br/>onemogočeno nastavitev Preveri za posodobitve.";
$GLOBALS['strEnableCheckForUpdates']    = "Prosimo omogočite nastavite <a href='account-settings-update.php'>preveri za posodobitve</a> na strani<br/><a href='account-settings-update.php'>posodobitvene nastavitve</a> .";
$GLOBALS['strChoosenDisableHomePage']   = "Izbrali ste onemogočitev vaše Domače strani.";
$GLOBALS['strAccessHomePage']           = "Kliknite tukaj za dostop do vaše Domače strani";
$GLOBALS['strEditSyncSettings']         = "in uredite vaše usklajevalne nastavitve";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "koda";
$GLOBALS['strDashboardSystemMessage']   = "Sistemsko sporočilo";
$GLOBALS['strDashboardErrorHelp']       = "Če se ta napaka ponovi, jo prosimo podrobno opišite in objavite na <a href='http://forum.openx.org/'>OpenX forumu</a>.";

// Priority
$GLOBALS['strPriority']                 = "Prioriteta";
$GLOBALS['strPriorityLevel']            = "Prednostna raven";
$GLOBALS['strPriorityTargeting']        = "Razporeditev";
$GLOBALS['strPriorityOptimisation']     = "Razno"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Pogodbeni oglasi";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Preostali oglasi";
$GLOBALS['strLimitations']              = "Omejitve";
$GLOBALS['strNoLimitations']            = "Brez omejitev";
$GLOBALS['strCapping']                  = "Prilagoditev";
$GLOBALS['strCapped']                   = "Ovit (capped)";
$GLOBALS['strNoCapping']                = "Brez ovijanja (no capping) ";

// Properties
$GLOBALS['strName']                     = "Ime";
$GLOBALS['strSize']                     = "Velikost";
$GLOBALS['strWidth']                    = "Širina";
$GLOBALS['strHeight']                   = "Višina";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Cilj";
$GLOBALS['strLanguage']                 = "Jezik";
$GLOBALS['strDescription']              = "Opis";
$GLOBALS['strVariables']                = "Spremenljivke";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Komentarji";

// User access
$GLOBALS['strWorkingAs']                = "Deluje kot";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Deluje kot";
$GLOBALS['strSwitchTo']                 = "Preklopi na";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s za...";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Dodaj uporabnika";
$GLOBALS['strLinkUser_Key']             = "Dodaj <u>u</u>porabnika";
$GLOBALS['strUsernameToLink']           = "Uporabniško ime uporabnika za dodajanje";
$GLOBALS['strEmailToLink']              = "E-pošta uporabnika za dodajanje";
$GLOBALS['strNewUserWillBeCreated']     = "Ustvarjen bo nov uporabnik";
$GLOBALS['strToLinkProvideEmail']       = "Za dodajanje uporabnika vpišite njegov e-poštni naslov";
$GLOBALS['strToLinkProvideUsername']    = "Za dodajanje uporabnika vpišite njegovo uporabniško ime";
$GLOBALS['strErrorWhileCreatingUser']   = "Napaka pri ustvarjanju uporabnika: %s";
$GLOBALS['strUserLinkedToAccount']      = "Uporabnik je bil dodan računu";
$GLOBALS['strUserAccountUpdated']       = "Račun uporabnika je bil posodobljen";
$GLOBALS['strUserUnlinkedFromAccount']  = "Uporabnik je bil odstranjen iz računa";
$GLOBALS['strUserWasDeleted']           = "Uporabnik je bil izbrisan";
$GLOBALS['strUserNotLinkedWithAccount'] = "Naveden uporabnik ni povezan z računom";
$GLOBALS['strCantDeleteOneAdminUser']   = "Ne morete izbrisati uporabnika. Vsaj en uporabnik mora biti povezan z administratorskim računom.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "uporabniško ime";
$GLOBALS['strLinkUserHelpEmail']        = "e-poštni naslov";
$GLOBALS['strLastLoggedIn']             = "Zadnja prijava";
$GLOBALS['strDateLinked']               = "Datum povezave";
$GLOBALS['strUnlink']                   = "Odstrani";
$GLOBALS['strUnlinkingFromLastEntity']  = "Odstranjevanje uporabnika";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Odstranjevanje uporabnika bo izbrisalo uporabnika. Želite odstraniti tega uporabnika?";
$GLOBALS['strUnlinkAndDelete']          = "Odstrani &amp; izbriši uporabnika";
$GLOBALS['strUnlinkUser']               = "Odstrani uporabnika";
$GLOBALS['strUnlinkUserConfirmBody']    = "Ste prepričani, da želite odstraniti tega uporabnika?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Uporabnikov dostop";
$GLOBALS['strAdminAccess']              = "Administratorski dostop";
$GLOBALS['strUserProperties']           = "Lastnosti uporabnika";
$GLOBALS['strLinkNewUser']              = "Poveži novega uporabnika";
$GLOBALS['strPermissions']              = "Dovoljenja";
$GLOBALS['strAuthentification']         = "Preverjanje pristnosti";
$GLOBALS['strWelcomeTo']                = "Dobrodošli v";
$GLOBALS['strEnterUsername']            = "Vnesite svoje uporabniško ime in geslo";
$GLOBALS['strEnterBoth']                = "Prosimo, vnesite svoje uporabniško ime in geslo";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Napaka piškotka seje. Prosimo, prijavite se znova";
$GLOBALS['strLogin']                    = "Prijava";
$GLOBALS['strLogout']                   = "Odjava";
$GLOBALS['strUsername']                 = "Uporabniško ime";
$GLOBALS['strPassword']                 = "Geslo";
$GLOBALS['strPasswordRepeat']           = "Ponovite geslo";
$GLOBALS['strAccessDenied']             = "Dostop zavrnjen";
$GLOBALS['strUsernameOrPasswordWrong']  = "Uporabniško ime in/ali geslo se ne ujemata. Prosimo, poizkusite znova.";
$GLOBALS['strPasswordWrong']            = "Geslo ni pravilno";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Vaš račun nima dovolj zahtevanih dovoljenj za uporabo te funkcije. Za uporabo se lahko prijavite pod drugim računom. Kliknite <a href='logout.php'>tukaj</a> za prijavo kot drug uporabnik.";
$GLOBALS['strDuplicateClientName']      = "Uporabniško ime že obstaja. Prosimo, izberite drugo.";
$GLOBALS['strDuplicateAgencyName']      = "Uporabniško ime že obstaja. Prosimo, izberite drugo.";
$GLOBALS['strInvalidPassword']          = "Novo geslo je neveljavno. Prosimo, izberite drugo.";
$GLOBALS['strInvalidEmail']             = "Prosimo, vnesite veljaven naslov elektronske pošte.";
$GLOBALS['strNotSamePasswords']         = "Gesli se ne ujemata";
$GLOBALS['strRepeatPassword']           = "Ponovite geslo";
$GLOBALS['strOldPassword']              = "Trenutno geslo";
$GLOBALS['strNewPassword']              = "Novo geslo";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Vaša povezava je neveljavna.";
$GLOBALS['strNoPlacement']              = "Izbrana kampanja ne obstaja. Poizkusite s to <a href='{link}'>povezavo</a> ";
$GLOBALS['strNoAdvertiser']             = "Izbran oglaševalec ne obstaja. poizkusite s to <a href='{link}'>povezavo</a>";

// General advertising
$GLOBALS['strRequests']                 = "Zahtev";
$GLOBALS['strImpressions']              = "Učinkov";
$GLOBALS['strClicks']                   = "Klikov";
$GLOBALS['strConversions']              = "Pretvorb";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Prodajno razmerje";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Celotnih klikov";
$GLOBALS['strTotalConversions']         = "Celotnih pretvorb";
$GLOBALS['strViewCredits']              = "Učinkovni krediti";
$GLOBALS['strClickCredits']             = "Klikovni krediti";
$GLOBALS['strConversionCredits']        = "Pretvorbeni krediti";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Datum Ura";
$GLOBALS['strTrackerID']                = "ID sledilnika";
$GLOBALS['strTrackerName']              = "Ime sledilnika";
$GLOBALS['strTrackerImageTag']          = "Zaznamek slike";
$GLOBALS['strTrackerJsTag']             = "Zaznamek JavaScript";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Pasice";
$GLOBALS['strCampaigns']                = "Kampanje";
$GLOBALS['strCampaignID']               = "ID kampanje";
$GLOBALS['strCampaignName']             = "Ime kampanje";
$GLOBALS['strCountry']                  = "Država";
$GLOBALS['strStatsAction']              = "Dejanje";
$GLOBALS['strWindowDelay']              = "Zamik okna";
$GLOBALS['strStatsVariables']           = "Spremenljivke";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Mesečni zakup";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% razdelitve dohodka";
$GLOBALS['strPercentBasketValue']       = "& vrednosti košarice";
$GLOBALS['strAmountPerItem']            = "Količina na postavko";
$GLOBALS['strPercentCustomVariable']    = "% spremenljivke po meri";
$GLOBALS['strPercentSumVariables']      = "& vsote spremenljivk";

// Time and date related
$GLOBALS['strDate']                     = "Datum";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "Dan";
$GLOBALS['strDays']                     = "Dni";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "Teden";
$GLOBALS['strWeeks']                    = "Tednov";
$GLOBALS['strSingleMonth']              = "Mesec";
$GLOBALS['strMonths']                   = "Mesecev";
$GLOBALS['strDayOfWeek']                = "Dan v tednu";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Ura";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "sekund";
$GLOBALS['strMinutes']                  = "minut";
$GLOBALS['strHours']                    = "ur";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "Oglaševalec";
$GLOBALS['strClients']                      = "Oglaševalci";
$GLOBALS['strClientsAndCampaigns']          = "Oglaševalci & Kampanje";
$GLOBALS['strAddClient']                    = "Dodaj novega oglaševalca";
$GLOBALS['strAddClient_Key']                = "Dodaj <u>n</u>ovega oglaševalca";
$GLOBALS['strTotalClients']                 = "Vseh oglaševalcev";
$GLOBALS['strClientProperties']             = "Lastnosti oglaševalca";
$GLOBALS['strClientHistory']                = "Zgodovina oglaševalca";
$GLOBALS['strNoClients']                    = "Trenutno ni definiranih nobenih oglaševalcev. Če želite ustvariti novo kampanjo, <a href='advertiser-edit.php'>morate najprej dodati novega</a> oglaševalca.";
$GLOBALS['strNoClientsForBanners']          = "Trenutno ni definiranih nobenih oglaševalcev. Za dodajanje pasic morate <a href='advertiser-edit.php'>dodati novega oglaševalca</a> in kampanjo.";
$GLOBALS['strConfirmDeleteClient']          = "Ste prepričani, da želite izbrisati tega oglaševalca?";
$GLOBALS['strConfirmDeleteClients']         = "Ste prepričani, da želite izbrisati izbrane oglaševalce?";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "Stran";
$GLOBALS['strHideInactive']                 = "Skrij neaktivne";
$GLOBALS['strHideInactiveAdvertisers']      = "Skrij neaktivne oglaševalce";
$GLOBALS['strInactiveAdvertisersHidden']    = "skriti neaktivni oglaševalci";
$GLOBALS['strOverallAdvertisers']           = "oglaševalec(ci)";
$GLOBALS['strAdvertiserSignup']             = "Prijava za oglaševalca";
$GLOBALS['strAdvertiserSignupDesc']         = "Prijavite se za samodejne storitve in plačila oglaševalca";
$GLOBALS['strAdvertiserSignupLink']         = "Povezava prijave za oglaševalca";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "Da bi dodali povezavo prijave za oglaševalca, prosimo, skopirajte naslednji HTML:";
$GLOBALS['strAdvertiserSignupOption']       = "Možnosti prijave oglaševalca";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "Za urejanje možnosti prijave oglaševalca, sledite";
$GLOBALS['strAdvertiserCampaigns']          = "Oglaševalčeve kampanje";
// Advertisers properties
$GLOBALS['strContact']                          = "Kontakt";
$GLOBALS['strContactName']                      = "Ime stika";
$GLOBALS['strEMail']                            = "E-pošta";
$GLOBALS['strChars']                            = "znakov (chars)";
$GLOBALS['strSendAdvertisingReport']            = "E-pošta za dostavo poročila o kampanji";
$GLOBALS['strNoDaysBetweenReports']             = "Število dni med dostavo poročil";
$GLOBALS['strSendDeactivationWarning']          = "Pošlji e-pošto, ko se kampanja samodejno aktivira/deaktivira";
$GLOBALS['strAllowClientModifyInfo']            = "Dovoli temu uporabniku spremembo lastnih nastavitev";
$GLOBALS['strAllowClientModifyBanner']          = "Dovoli temu uporabniku spremembo lastnih pasic";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "Dovoli temu uporabniku deaktivacijo lastnih pasic";
$GLOBALS['strAllowClientActivateBanner']        = "Dovoli temu uporabniku aktivacijo lastnih pasic";
$GLOBALS['strAllowClientViewTargetingStats']    = "Dovoli temu uporabniku vpogled v ciljno statistiko";
$GLOBALS['strAllowCreateAccounts']              = "Dovoli temu uporabniku ustvarjanje novih računov";
$GLOBALS['strCsvImportConversions']             = "Dovoli temu uporabniku uvoz offline pretvorb";
$GLOBALS['strAdvertiserLimitation']             = "Prikaži samo eno pasico tega oglaševalca na spletni strani";
$GLOBALS['strAllowAuditTrailAccess']            = "Dovoli temu uporabniku dostop do pregledne poti";

// Campaign
$GLOBALS['strCampaign']                     = "Kampanja";
$GLOBALS['strCampaigns']                    = "Kampanje";
$GLOBALS['strOverallCampaigns']             = "kampanja(e)";
$GLOBALS['strTotalCampaigns']               = "Vseh kampanj";
$GLOBALS['strActiveCampaigns']              = "Aktivnih kampanj";
$GLOBALS['strAddCampaign']                  = "Dodaj novo kampanjo";
$GLOBALS['strAddCampaign_Key']              = "Dodaj <u>n</u>ovo kampanjo";
$GLOBALS['strCampaignForAdvertiser']        = "za oglaševalca";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "Prilagodi kampanjo";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "Izbriši vse kampanje";
$GLOBALS['strLinkedCampaigns']              = "Kampanje z povezavami";
$GLOBALS['strCampaignStats']                = "Statistika kampanje";
$GLOBALS['strCampaignProperties']           = "Lastnosti kampanje";
$GLOBALS['strCampaignOverview']             = "Pregled kampanje";
$GLOBALS['strCampaignHistory']              = "Zgodovina kampanje";
$GLOBALS['strNoCampaigns']                  = "Trenutni ni definiranih kampanj za tega oglaševalca";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "Ta oglaševalec nima kampanj. Najprej morate <a href='campaign-edit.php?clientid=%s'>dodati novo kampanjo</a> , če želite dodajati pasice";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Ste prepričani, da želite izbrisati vse kampanje tega oglaševalca?";
$GLOBALS['strConfirmDeleteCampaign']        = "Ste prepričani, da želite izbrisati to kampanjo?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Ste prepričani, da želite izbrisati izbrane kampanje?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Prikaži izvorne oglaševalce";
$GLOBALS['strHideParentAdvertisers']        = "Skrij izvorne oglaševalce";
$GLOBALS['strHideInactiveCampaigns']        = "Skrij neaktivne kampanje";
$GLOBALS['strInactiveCampaignsHidden']      = "skrite neaktivne kampanje";
$GLOBALS['strContractDetails']              = "Pogodbene podrobnosti";
$GLOBALS['strInventoryDetails']             = "Podrobnosti inventarja";
$GLOBALS['strPriorityInformation']          = "Prioriteta v razmerju z ostalimi kampanjami";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Kampanja";
$GLOBALS['strHiddenAd']                     = "Oglas";
$GLOBALS['strHiddenAdvertiser']             = "Oglaševalec";
$GLOBALS['strHiddenTracker']                = "Sledilnik";
$GLOBALS['strHiddenWebsite']              = "Spletna stran";
$GLOBALS['strHiddenZone']                   = "Področje";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Spremljevalni položaj";
$GLOBALS['strSelectUnselectAll']            = "Izberi / Odizberi vse";
$GLOBALS['strConfirmOverwrite']             = "Saving these changes will overwrite any individual banner-zone links. Are you sure?";
$GLOBALS['strCampaignsOfAdvertiser']        = "od"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie']           = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns']    = "Preračunano za vse kampanje";
$GLOBALS['strCalculatedForThisCampaign']    = "Preračunano za to kampanjo";
$GLOBALS['strLinkingZonesProblem']          = "Prišlo je do težave pri povezovanju področij";
$GLOBALS['strUnlinkingZonesProblem']        = "Prišlo je do težave pri odstranjevanju povezav področij";
$GLOBALS['strZonesLinked']                  = "področje(a) z povezavo";
$GLOBALS['strZonesUnlinked']                = "področje(a) brez povezav";
$GLOBALS['strZonesSearch']                  = "Iskanje";
$GLOBALS['strZonesSearchTitle']             = "Išči področja in spletne strani po imenih";
$GLOBALS['strNoWebsitesAndZones']           = "Ni spletnih stranih in področij";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "v kategoriji";
$GLOBALS['strNoWebsitesAndZonesText']       = "z \"%s\" v imenu";
$GLOBALS['strToLink']                       = "za povezovanje";
$GLOBALS['strToUnlink']                     = "za odstranitev povezave";
$GLOBALS['strLinked']                       = "Povezani";
$GLOBALS['strAvailable']                    = "Dosegljivi";
$GLOBALS['strShowing']                      = "Prikazovanje";
$GLOBALS['strAllCategories']                = "vse kategorije";
$GLOBALS['strUncategorized']                = "Nekategorizirane";
$GLOBALS['strEditZone']                     = "Uredi področje";
$GLOBALS['strEditWebsite']                  = "Uredi spletno stran";


// Campaign properties
$GLOBALS['strDontExpire']                       = "Ne poteči";
$GLOBALS['strActivateNow']                      = "Takoj začni";
$GLOBALS['strSetSpecificDate']                  = "Nastavi določen datum";
$GLOBALS['strLow']                              = "Nizek";
$GLOBALS['strHigh']                             = "Visok";
$GLOBALS['strExpirationDate']                   = "Datum zaključka";
$GLOBALS['strExpirationDateComment']            = "Kampanja se bo končala ob koncu tega dneva";
$GLOBALS['strActivationDate']                   = "Datum začetka";
$GLOBALS['strActivationDateComment']            = "Kampanja se bo pričela ob začetku tega dneva";
$GLOBALS['strRevenueInfo']                      = "Podatki o dohodkih";
$GLOBALS['strTotalRevenue']                     = "Vseh prihodkov";
$GLOBALS['strImpressionsRemaining']             = "Preostalih učinkov";
$GLOBALS['strClicksRemaining']                  = "Preostalih klikov";
$GLOBALS['strConversionsRemaining']             = "Preostalih pretvorb";
$GLOBALS['strImpressionsBooked']                = "Rezerviranih učinkov";
$GLOBALS['strClicksBooked']                     = "Rezerviranih klikov";
$GLOBALS['strConversionsBooked']                = "Rezerviranih pretvorb";
$GLOBALS['strCampaignWeight']                   = "Nastavi kampanjsko vrednost";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimiziraj";
$GLOBALS['strAnonymous']                        = "Skrij oglaševalca in spletne strani te kampanje";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "na dan.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Samodejno - Enakomerno razporedi preostanek inventarja preko naslednjih dni.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Tip te kampanje je bil nastavljen na Preostalo, \\nvendar je postavka nastavljena na nič ali pa ni specificirana.\\nKampanja bo zaradi tega deaktivirana \\nin pasice ne bodo dostavljene,\\ndokler postavke ne spremenite v veljaven element. \\n\\nSte prepričani, da želite nadaljevati?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Tip te kampanje je bil nastavljen na Pogodbeno, \\nvendar ni nastavljena dnevna omejitev. \\nZaradi tega bo kampanja deaktivirana, \\npasice pa ne bodo prikazane, dokler ne nastavite \\ndnevne omejitve. \\n\\nSte prepričani, da želite nadaljevati?";
$GLOBALS['strCampaignStatusPending']            = "V teku";
$GLOBALS['strCampaignStatusInactive']           = "Neaktiven";
$GLOBALS['strCampaignStatusRunning']            = "V teku";
$GLOBALS['strCampaignStatusPaused']             = "Premor";
$GLOBALS['strCampaignStatusAwaiting']           = "V pričakovanju";
$GLOBALS['strCampaignStatusExpired']            = "Končano";
$GLOBALS['strCampaignStatusApproval']           = "Čakam na odobritev »";
$GLOBALS['strCampaignStatusRejected']           = "Zavrnjeno";
$GLOBALS['strCampaignStatusAdded']              = "Dodano";
$GLOBALS['strCampaignStatusStarted']            = "Zagnano";
$GLOBALS['strCampaignStatusRestarted']          = "Znova zagnano";
$GLOBALS['strCampaignStatusDeleted']            = "Izbrisano";
$GLOBALS['strCampaignApprove']                  = "Odobri";
$GLOBALS['strCampaignApproveDescription']       = "sprejmi to kampanjo";
$GLOBALS['strCampaignReject']                   = "Zavrni";
$GLOBALS['strCampaignRejectDescription']        = "zavrni to kampanjo";
$GLOBALS['strCampaignPause']                    = "Premor";
$GLOBALS['strCampaignPauseDescription']         = "začasno pavziraj to kampanjo";
$GLOBALS['strCampaignRestart']                  = "Nadaljuj";
$GLOBALS['strCampaignRestartDescription']       = "nadaljuj s to kampanjo";
$GLOBALS['strCampaignStatus']                   = "Status kampanje";
$GLOBALS['strReasonForRejection']               = "Razlog zavrnitve";
$GLOBALS['strReasonSiteNotLive']                = "Stran ne obstaja";
$GLOBALS['strReasonBadCreative']                = "Neprimerna tvornost";
$GLOBALS['strReasonBadUrl']                     = "Neprimeren ciljni URL";
$GLOBALS['strReasonBreakTerms']                 = "Spletna stran se ne strinja z Pogoji uporabe";
$GLOBALS['strChangeStatus']                     = "Spremeni stanje";
$GLOBALS['strCampaignType']                     = "Tip kampanje";
$GLOBALS['strType']                             = "Tip";
$GLOBALS['strContract']                         = "Pogodba";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Pogodba";
$GLOBALS['strStandardContractInfo']             = "Ta kampanja ima dnevne omejitve in bo enakomerno dostavljana do zaključnega datuma ali nastavljene omejitve";
$GLOBALS['strRemnant']                          = "Ostanek";
$GLOBALS['strRemnantInfo']                      = "To je standardna kampanja, ki jo lahko omejite z zaključnim datumom ali določenimi ostalimi omejitvami";
$GLOBALS['strECPMInfo']                         = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strContractCampaign']                 = "Pogodbena kampanja";
$GLOBALS['strRemnantCampaign']                  = "Preostala kampanja";
$GLOBALS['strPricing']                          = "Cenitev";
$GLOBALS['strPricingModel']                     = "Cenitveni model";
$GLOBALS['strSelectPricingModel']               = "\\-- izberite model --";
$GLOBALS['strRatePrice']                        = "Razmerje / Cena";
$GLOBALS['strMinimumImpressions']               = "Minimum daily impressions";
$GLOBALS['strLimit']                            = "Omejitev";
$GLOBALS['strLowExclusiveDisabled']             = "Te kampanje ne morete spremeniti v Preostalo ali Eksluzivno, saj je nastavljen zaključni datum ali omejitev ogledov/klikov/pretvorb. <br>Če bi želeli spremeniti tip, morate odstraniti zaključni datum ali ostale omejitve";
$GLOBALS['strCannotSetBothDateAndLimit']        = "Za Eksluzivno in Preostalo kampanjo ne morete nastaviti zaključnega datuma in omejitev.<br>Če morate nastaviti zaključni datum in omejitve ogledov/klikov/pretvorb, prosimo uporabite neeksluzivno pogodbeno kampanjo.";
$GLOBALS['strWhyDisabled']                      = "zakaj je onemogočeno?";
$GLOBALS['strBackToCampaigns']                  = "Vrnitev na kampanje";
$GLOBALS['strCampaignBanners']                  = "Pasice kampanje";
$GLOBALS['strCookies']                          = "Cookies";

// Tracker
$GLOBALS['strTracker']                    = "Sledilnik";
$GLOBALS['strTrackers']                   = "Sledilniki";
$GLOBALS['strTrackerOverview']            = "Pregled sledilnika";
$GLOBALS['strTrackerPreferences']            = "Preference sledilnika";
$GLOBALS['strAddTracker']                 = "Dodaj nov sledilnik";
$GLOBALS['strAddTracker_Key']             = "Dodaj <u>n</u>ov sledilnik";
$GLOBALS['strTrackerForAdvertiser']       = "za oglaševalca";
$GLOBALS['strNoTrackers']                 = "Trenutno ni definiranih nobenih sledilnikov";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Ste prepričani, da želite izbrisati vse sledilnike tega oglaševalca?";
$GLOBALS['strConfirmDeleteTrackers']      = "Ste prepričani, da želite izbrisati izbrane sledilnike?";
$GLOBALS['strConfirmDeleteTracker']       = "Ste prepričani, da želite izbrisati ta sledilnik?";
$GLOBALS['strDeleteAllTrackers']          = "Izbriši vse sledilnike";
$GLOBALS['strTrackerProperties']          = "Lastnosti sledilnika";
$GLOBALS['strTrackerOverview']            = "Pregled sledilnika";
$GLOBALS['strModifyTracker']              = "Prilagodi sledilnik";
$GLOBALS['strLog']                        = "Beleži?";
$GLOBALS['strDefaultStatus']              = "Privzeto stanje";
$GLOBALS['strStatus']                     = "Stanje";
$GLOBALS['strLinkedTrackers']             = "Sledilniki s povezavo";
$GLOBALS['strTrackerInformation']         = "Podatki o sledilniku";
$GLOBALS['strConversionWindow']           = "Pretvorbeno okno";
$GLOBALS['strUniqueWindow']               = "Edinstveno okno";
$GLOBALS['strClick']                      = "Klik";
$GLOBALS['strView']                       = "Pogled";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Ogled";
$GLOBALS['strConversionClickWindow']      = "Count conversions which occur within this number of seconds of a click";
$GLOBALS['strConversionViewWindow']       = "Count conversions which occur within this number of seconds of a view";
$GLOBALS['strTotalTrackerImpressions']    = "Total Impressions";
$GLOBALS['strTotalTrackerConnections']    = "Total Connections";
$GLOBALS['strTotalTrackerConversions']    = "Total Conversions";
$GLOBALS['strTrackerImpressions']         = "Impressions";
$GLOBALS['strTrackerImprConnections']     = "Impression Connections";
$GLOBALS['strTrackerClickConnections']    = "Click Connections";
$GLOBALS['strTrackerImprConversions']     = "Impression Conversions";
$GLOBALS['strTrackerClickConversions']    = "Click Conversions";
$GLOBALS['strConversionType']             = "Tip pretvorbe";
$GLOBALS['strLinkCampaignsByDefault']     = "Privzeto nastavi povezave pri novih kampanjah";
$GLOBALS['strNoLinkedTrackersDropdown']   = "\\-- ni povezanega sledilnika --";
$GLOBALS['strPerSingleImpression']        = "na posamezen učinek";
$GLOBALS['strBackToTrackers']             = "Nazaj k sledilnikom";



// Banners (General)
$GLOBALS['strBanner']                        = "Pasica";
$GLOBALS['strBanners']                       = "Pasice";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Dodaj novo pasico";
$GLOBALS['strAddBanner_Key']                 = "Dodaj <u>n</u>ovo pasico";
$GLOBALS['strBannerToCampaign']              = "v kampanjo";
$GLOBALS['strModifyBanner']                  = "Prilagodi pasico";
$GLOBALS['strActiveBanners']                 = "Aktivne pasice";
$GLOBALS['strTotalBanners']                  = "Vseh pasic";
$GLOBALS['strShowBanner']                    = "Prikaži pasico";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Izbriši vse pasice";
$GLOBALS['strActivateAllBanners']            = "Aktiviraj vse pasice";
$GLOBALS['strDeactivateAllBanners']          = "Deaktiviraj vse pasice";
$GLOBALS['strBannerOverview']                = "Pregled pasice";
$GLOBALS['strBannerProperties']              = "Lastnosti pasice";
$GLOBALS['strBannerHistory']                 = "Zgodovina pasice";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "Trenutno ni nobene definirane pasice za to kampanjo";
$GLOBALS['strNoBannersAddCampaign']          = "Trenutno ni definiranih nobenih pasic, ker ni kampanj. Za ustvaritev pasice, <a href='campaign-edit.php?clientid=%s'>dodajte novo kampanjo</a> najprej.";
$GLOBALS['strNoBannersAddAdvertiser']        = "Treutno ni definiranih nobenih pasic, ker ni oglaševalcev. Za ustvaritev pasice, <a href='advertiser-edit.php'>dodajte novega oglaševalca</a> najprej.";
$GLOBALS['strConfirmDeleteBanner']           = "Ste prepričani, da želite izbrisati to pasico?";
$GLOBALS['strConfirmDeleteBanners']          = "Ste prepričani, da želite izbrisati izbrane pasice?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Ste prepričani, da želite izbrisati vse pasice v lasti te kampanje?";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "Prikaži izvorne kampanje";
$GLOBALS['strHideParentCampaigns']           = "Skrij izvorne kampanje";
$GLOBALS['strHideInactiveBanners']           = "Skrij neaktivne pasice";
$GLOBALS['strInactiveBannersHidden']         = "skrite neaktivne pasice";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "Dodajanje drugih pasic k tekstovnim oglasom ni mogoče.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Opozorilo, zaznamek";
$GLOBALS['strWarningTag2']                   = "verjetno ni zaprt/odprt";
$GLOBALS['strWarningMissing']                = "Opozorilo, morda manjka";
$GLOBALS['strWarningMissingClosing']         = "zapiram zaznamek '>'";
$GLOBALS['strWarningMissingOpening']         = " odpiram zaznamek \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Vseeno predloži";
$GLOBALS['strOverallBanners']                = "oglas(i)";
$GLOBALS['strBannersOfCampaign']             = "v"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Preference pasice";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Privzete pasice";
$GLOBALS['strDefaultBannerUrl']                      = "URL privzete slike";
$GLOBALS['strDefaultBannerDestination']              = "URL privzetega naslova";
$GLOBALS['strAllowedBannerTypes']                    = "Dovoli tip pasic";
$GLOBALS['strTypeSqlAllow']                          = "Dovoli SQL lokalne pasice";
$GLOBALS['strTypeWebAllow']                          = "Dovoli WebServer lokalne pasice";
$GLOBALS['strTypeUrlAllow']                          = "Dovoli zunanje pasice";
$GLOBALS['strTypeHtmlAllow']                         = "Dovoli HTML pasice";
$GLOBALS['strTypeTxtAllow']                          = "Dovoli besedilne oglase";
$GLOBALS['strTypeHtmlSettings']                      = "Možnosti HTML pasice";
$GLOBALS['strTypeHtmlAuto']                          = "Samodejno spremeni HTML pasice za sledenje klikov";
$GLOBALS['strTypeHtmlPhp']                           = "Dovoli izvedbo PHP izjav znotraj HTML pasice";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Prosimo, izberite tip pasice";
$GLOBALS['strMySQLBanner']             = "Naloži lokalno pasico v podatkovno bazo";
$GLOBALS['strWebBanner']               = "Naloži lokalno pasico v spletni strežnik";
$GLOBALS['strURLBanner']               = "Poveži zunanjo pasico";
$GLOBALS['strHTMLBanner']              = "Ustvari HTML pasico";
$GLOBALS['strTextBanner']              = "Ustvari besedilno pasico";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Ali želite obdržati <br />obstoječo sliko, ali pa <br />nastaviti drugo?";
$GLOBALS['strUploadOrKeepAlt']        = "Ali želite obdržati <br />obstoječo arhivsko sliko, ali pa <br />nastaviti drugo?";
$GLOBALS['strNewBannerFile']         = "Izberite sliko, ki jo želite <br />uporabiti za to pasico<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Izberite arhivsko sliko, ki jo želite <br />uporabiti v primeru, če brskalnik<br />ne podpira obogatenih medijskih vsebin<br /><br />";
$GLOBALS['strNewBannerURL']         = "URL slike (vključno z http://)";
$GLOBALS['strURL']                     = "URL cilja (vključno z http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Ključne besede";
$GLOBALS['strTextBelow']             = "Besedilo pod sliko";
$GLOBALS['strWeight']                 = "Vrednost";
$GLOBALS['strAlt']                     = "Drugotno besedilo";
$GLOBALS['strStatusText']            = "Besedilo stanja";
$GLOBALS['strBannerWeight']            = "Vrednost pasice";
$GLOBALS['strBannerType']           = "Tip oglasa";
$GLOBALS['strAdserverTypeGeneric']  = "Generična HTML pasica";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Splošno";
$GLOBALS['strSwfTransparency']		   = "Dovoli prozorno ozadje";
$GLOBALS['strBackToBanners']           = "Vrnitev na pasice";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Preveri za hard-code povezave v FLASH datoteki";
$GLOBALS['strConvertSWFLinks']        = "Pretvori FLASH povezave";
$GLOBALS['strHardcodedLinks']        = "Implementirane povezave (hard-coded links)";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Stisni SWF datoteko za hitrejši prenos (zahtevan Flash player 6)";
$GLOBALS['strOverwriteSource']        = "Prepiši izvirni parameter";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense računi";
$GLOBALS['strLinkAdSenseAccount']         = "Poveži AdSense račun";
$GLOBALS['strCreateAdSenseAccount']       = "Ustvari AdSense račun";
$GLOBALS['strEditAdSenseAccount']         = "Uredi AdSense račun";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Možnosti dostave";
$GLOBALS['strACL']                        = "Dostava";
$GLOBALS['strACLAdd']                     = "Dodaj dostavno omejitev";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Brez omejitev";
$GLOBALS['strApplyLimitationsTo']         = "Uporabi omejitve";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Odstrani vse omejitve";
$GLOBALS['strEqualTo']                    = "je enak";
$GLOBALS['strDifferentFrom']              = "je različen od";
$GLOBALS['strLaterThan']                  = "je poznejši kot";
$GLOBALS['strLaterThanOrEqual']           = "je kasnejši ali enak";
$GLOBALS['strEarlierThan']                = "je zgodnejši kot";
$GLOBALS['strEarlierThanOrEqual']         = "je zgodnejši ali enak";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "je večji kot";
$GLOBALS['strLessThan']                   = "je manj kot";
$GLOBALS['strAND']                        = "IN";                          // logical operator
$GLOBALS['strOR']                         = "ALI";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "To pasico prikaži samo ko:";
$GLOBALS['strWeekDay']                    = "Delavnik";
$GLOBALS['strWeekDays']                   = "Delavniki";
$GLOBALS['strTime']                       = "Čas";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "Vir";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Mesto";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Omejitve dostave";

$GLOBALS['strDeliveryCapping']            = "Omejitve dostave na obiskovalca";
$GLOBALS['strDeliveryCappingReset']       = "Ponastavi števce po:";
$GLOBALS['strDeliveryCappingTotal']       = "celotnih";
$GLOBALS['strDeliveryCappingSession']     = "na sejo";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Omeji prikazov pasice na:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Omeji prikazov kampanje na:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Omeji prikazov področja na:";

// Website
$GLOBALS['strAffiliate']                = "Spletna stran";
$GLOBALS['strAffiliates']                 = "Spletne strani";
$GLOBALS['strAffiliatesAndZones']        = "Spletne strani & Področja";
$GLOBALS['strAddNewAffiliate']            = "Dodaj novo spletno stran";
$GLOBALS['strAddNewAffiliate_Key']        = "Dodaj <u>n</u>ovo spletno stran";
$GLOBALS['strAddAffiliate']                = "Ustvari spletno stran";
$GLOBALS['strAffiliateProperties']        = "Lastnosti spletne strani";
$GLOBALS['strAffiliateOverview']        = "Pregled spletne strani";
$GLOBALS['strAffiliateHistory']            = "Zgodovina spletne strani";
$GLOBALS['strZonesWithoutAffiliate']    = "Področja brez spletne strani";
$GLOBALS['strMoveToNewAffiliate']        = "Premakni v novo spletno stran";
$GLOBALS['strNoAffiliates']                = "Trenutno ni definiranih nobenih spletnih strani. Če želite ustvariti novo področje, morate najprej dodati novo <a href='affiliate-edit.php'>spletno stran</a>.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Ste prepričani, da želite izbrisati to spletno stran?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Ste prepričani, da želite izbrisati izbrane spletne strani?";
$GLOBALS['strMakePublisherPublic']        = "Naredi področja v lasti te spletne strani javno razpoložljiva";
$GLOBALS['strAffiliateInvocation']      = "Pozivna koda";
$GLOBALS['strAdvertiserSetup']          = "Prijava za oglaševalca";
$GLOBALS['strTotalAffiliates']          = "Vseh spletnih strani";
$GLOBALS['strInactiveAffiliatesHidden'] = "skrite neaktivne spletne strani";
$GLOBALS['strShowParentAffiliates']     = "Prikaži izvorne spletne strani";
$GLOBALS['strHideParentAffiliates']     = "Skrij izvorne spletne strani";

// Website (properties)
$GLOBALS['strWebsite']                      = "Spletna stran";
$GLOBALS['strWebsiteURL']                      = "URL spletne strani";
$GLOBALS['strMnemonic']                     = "Spominski (mnemoničen)";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Dovoli temu uporabniku spremembo lastnih nastavitev";
$GLOBALS['strAllowAffiliateModifyZones']    = "Dovoli temu uporabniku spreminjanje lastnih področij";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Dovoli temu uporabniku povezavo pasic k lastnim področjem";
$GLOBALS['strAllowAffiliateAddZone']        = "Dovoli temu uporabniku določitev novih področij";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Dovoli temu uporabniku izbris obstoječih področij";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Dovoli temu uporabniku ustvariti pozivno kodo";
$GLOBALS['strAllowAffiliateZoneStats']      = "Dovoli temu uporabniku pregled področnih statistik";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Dovoli temu uporabniku samo vpogled v odobrene in čakajoče pretvorbe";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Podatki o plačilu";
$GLOBALS['strAddress']                      = "Naslov";
$GLOBALS['strPostcode']                     = "Poštna številka";
$GLOBALS['strCity']                         = "Mesto";
$GLOBALS['strCountry']                      = "Država";
$GLOBALS['strPhone']                        = "Telefon";
$GLOBALS['strFax']                          = "Faks";
$GLOBALS['strAccountContact']               = "Številka TRR";
$GLOBALS['strPayeeName']                    = "Ime in priimek plačnika";
$GLOBALS['strTaxID']                        = "ID DDV";
$GLOBALS['strModeOfPayment']                = "Način plačila";
$GLOBALS['strPaymentChequeByPost']          = "Bančno nakazilo";
$GLOBALS['strCurrency']                     = "Valuta";
$GLOBALS['strCurrencyGBP']                  = "Evro (€)";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Ostale informacije";
$GLOBALS['strUniqueUsersMonth']             = "Edinstvenih uporabnikov/mesec";
$GLOBALS['strUniqueViewsMonth']             = "Edinstvenih ogledov/mesec";
$GLOBALS['strPageRank']                     = "Uvrstitev spletne strani";
$GLOBALS['strCategory']                     = "Kategorija";
$GLOBALS['strPrimaryCategory']              = "Primarna kategorija";
$GLOBALS['strSecondaryCategory']            = "Sekundarna kategorija";
$GLOBALS['strHelpFile']                     = "Datoteka s pomočjo";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Področja spletne strani";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Področje";
$GLOBALS['strZones']                        = "Področja";
$GLOBALS['strAddNewZone']                   = "Dodaj novo področje";
$GLOBALS['strAddNewZone_Key']               = "Dodaj <u>n</u>ovo področje";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "Prilagodi področje";
$GLOBALS['strZoneToWebsite']                = "k spletni strani";
$GLOBALS['strLinkedZones']                  = "Področja z povezavami";
$GLOBALS['strAvailableZones']               = "Razpoložljivih področij";
$GLOBALS['strLinkingNotSuccess']            = "Povezovanje ni bilo uspešno, prosimo, poizkusite znova";
$GLOBALS['strZoneOverview']                 = "Pregled področja";
$GLOBALS['strZoneProperties']               = "Lastnosti področja";
$GLOBALS['strZoneHistory']                  = "Zgodovina področja";
$GLOBALS['strNoZones']                      = "Trenutno ni definiranih nobenih področij za to spletno stran";
$GLOBALS['strNoZonesAddWebsite']            = "Trenutno ni definiranih nobenih področij, ker ni spletnih strani. Za ustvaritev področja, <a href='affiliate-edit.php'>dodajte spletno stran</a> najprej.";
$GLOBALS['strConfirmDeleteZone']            = "Ste prepričani, da želite izbrisati to področje?";
$GLOBALS['strConfirmDeleteZones']           = "Ste prepričani, da želite izbrisati izbrana področja?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "Nekatere kampanje so še vedno povezane v to področje. Če jih boste izbrisali, ne boste zanje dobili plačila.";
$GLOBALS['strZoneType']                     = "Tip področja";
$GLOBALS['strBannerButtonRectangle']        = "Pasica, gumb ali pravokotnik";
$GLOBALS['strInterstitial']                 = "Vmesen ali lebdeč DHTML";
$GLOBALS['strPopup']                        = "Prikazujoč (pop-up)";
$GLOBALS['strTextAdZone']                   = "Tekstovni oglas";
$GLOBALS['strEmailAdZone']                  = "E-poštno/Newsletter področje";
$GLOBALS['strZoneClick']                    = "Sledilno področje \"klikov\"";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Prikaži ujemajoče pasice";
$GLOBALS['strHideMatchingBanners']          = "Skrij ujemajoče pasice";
$GLOBALS['strBannerLinkedAds']              = "Pasice povezujoče v področje";
$GLOBALS['strCampaignLinkedAds']            = "Kampanje povezujoče v področje";
$GLOBALS['strTotalZones']                   = "Vseh področij";
$GLOBALS['strInactiveZonesHidden']          = "skrita neaktivna področja";
$GLOBALS['strWarnChangeZoneType']           = "Spreminjanje tipa področja v besedilno ali e-poštno bo odstranilo vse povezave pasic/kampanj zaradi omejitev teh tipov področij\\n<ul>\\n<li>Besedilna področja so lahko v povezavi z samo besedilnimi oglasi</li>\\n<li>E-poštne področne kampanje imajo naenkrat lahko samo eno aktivno pasico</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Spreminjanje področja bo odstranilo vse povezave pasic, ki niso nove velikosti, in bo dodalo pasice iz povezujočih kampanj, ki so nove velikosti';
$GLOBALS['strWarnChangeBannerSize']         = 'Spreminjanje vrednosti pasice bo prekinilo povezavo z vsemi področji, ki niso te vrednosti, in če je <strong>kampanja</strong> pasice povezana s področjem nove vrednosti, bo ta pasica samodejno povezana.';
$GLOBALS['strWarnBannerReadonly']           = 'Ker so razširitve onemogočene, je ta pasica samo read-only.  Kontaktirajte svojega administratorja za več informacij.';
$GLOBALS['strInventoryForecasting']         = 'Predviden inventar';
$GLOBALS['strZonesOfWebsite']               = 'v'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones']                  = "Vrnitev na področja";

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB pasica (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)']        = "IAB nebotičnik (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)']        = "IAB velika pasica (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB gumb 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB gumb 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB polovična pasica (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB mikro črta (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB kvadratni gumb (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB pravokotnik (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB kvadratni pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB navpična pasica (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB srednji pravokotnik (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB veliki pravokotnik (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB navpični pravokotnik (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB širok nebotičnik (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "Napredno";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "Verižne nastavitve";
$GLOBALS['strZoneNoDelivery']            = "Če iz tega področja ni dostavljena nobena pasica, <br />poizkusite...";
$GLOBALS['strZoneStopDelivery']            = "Ustavi dostavo in ne prikaži pasice";
$GLOBALS['strZoneOtherZone']            = "Prikaži izbrano področje";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "Vedno pripni naslednjo HTML kodo v prikazane pasice tega področja";
$GLOBALS['strAppendSettings']            = "Pripni in omogoči nastavitve";
$GLOBALS['strZoneForecasting']            = "Nastavitev področnih predvidevanj";
$GLOBALS['strZonePrependHTML']            = "Vedno omogoči HTML kodo v besedilnih oglasih prikazanih s tega področja";
$GLOBALS['strZoneAppendHTML']            = "Vedno pripni HTML kodo v besedilnih oglasih prikazanih s tega področja";
$GLOBALS['strZoneAppendNoBanner']        = "Pripni, tudi če pasica ni dostavljena";
$GLOBALS['strZoneAppendType']            = "Tip pripojitve";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML zbirnik";
$GLOBALS['strZoneAppendZoneSelection']    = "Prikazujoč (pop-up) ali vmesen";
$GLOBALS['strZoneAppendSelectZone']        = "Vedno pripni naslednji prikazujoč (pop-up) ali vmesen zbirnik v prikazano pasico tega področja";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Vse pasice povezujoče v izbrano področje trenutno niso aktivne. <br />Postopek v področju si bo sledil po naslednjih korakih:";
$GLOBALS['strZoneProbNullPri']            = "Ni aktivnih pasic povezujočih v to področje.";
$GLOBALS['strZoneProbListChainLoop']    = "Sledenje področnim korakom bi povzročilo nepretrgano zanko. Dostava za to področje je ustavljena.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Prosimo, izberite kaj se naj povezuje na to področje";
$GLOBALS['strLinkedBanners']            = "Poveži posamezne pasice";
$GLOBALS['strCampaignDefaults']            = "Poveži pasice po izvorni kampanji";
$GLOBALS['strLinkedCategories']         = "Poveži pasice po kategoriji";
$GLOBALS['strWithXBanners']                = "%d oglas(i)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "Ključna beseda";
$GLOBALS['strIncludedBanners']            = "Pasice s povezavo";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "Na voljo ni nobenih področij, s katerimi bi lahko povezali to pasico";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} ujemajočih pasic";
$GLOBALS['strNoCampaignsToLink']        = "Na voljo ni nobenih kampanj, s katerimi bi lahko povezali to področje";
$GLOBALS['strNoTrackersToLink']            = "Na voljo ni nobenih sledilnikov, s katerimi bi lahko povezali to kampanjo";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Na voljo ni nobenih področij, s katerimi bi lahko povezali to kampanjo";
$GLOBALS['strSelectBannerToLink']        = "Izberite pasico, ki bi jo želeli povezati na to področje:";
$GLOBALS['strSelectCampaignToLink']        = "Izberite kampanjo, ki bi jo želeli povezati na to področje:";
$GLOBALS['strSelectAdvertiser']         = "Izberite oglaševalca";
$GLOBALS['strSelectPlacement']          = "Izberite kampanjo";
$GLOBALS['strSelectAd']                 = "Izberite pasico";
$GLOBALS['strSelectPublisher']          = "Izberite spletno stran";
$GLOBALS['strSelectZone']               = "Izberite področje";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Pripni zbirnik sledilnika";
$GLOBALS['strAppendTrackerNotPossible']    = "Pripnitev tega zaznamka ni mogoča.";
$GLOBALS['strStatusPending']            = "V teku";
$GLOBALS['strStatusApproved']           = "Odobreno";
$GLOBALS['strStatusDisapproved']        = "Neodobreno";
$GLOBALS['strStatusDuplicate']          = "Podvoji";
$GLOBALS['strStatusOnHold']             = "Na čakanju";
$GLOBALS['strStatusIgnore']             = "Prezri";
$GLOBALS['strConnectionType']           = "Tip";
$GLOBALS['strConnTypeSale']             = "Prodaja";
$GLOBALS['strConnTypeLead']             = "Vodenje";
$GLOBALS['strConnTypeSignUp']           = "Prijava";
$GLOBALS['strShortcutEditStatuses'] = "Uredi statuse";
$GLOBALS['strShortcutShowStatuses'] = "Prikaži statuse";

// Statistics
$GLOBALS['strStats']                     = "Statistika";
$GLOBALS['strNoStats']                   = "Trenutno ni na voljo nobenih statističnih podatkov";
$GLOBALS['strNoTargetingStats']          = "Trenutno ni na voljo nobenih ciljanih statističnih podatkov";
$GLOBALS['strNoStatsForPeriod']          = "Trenutno ni na voljo nobenih statističnih podatkov za obdobje od %s do %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Trenutni ni na voljo nobenih ciljanih statističnih podatkov za obdobje od %s do %s";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "Celotna zgodovina";
$GLOBALS['strDailyHistory']              = "Dnevna zgodovina";
$GLOBALS['strDailyStats']                = "Dnevna statistika";
$GLOBALS['strWeeklyHistory']             = "Tedenska zgodovina";
$GLOBALS['strMonthlyHistory']            = "Mesečna zgodovina";
$GLOBALS['strCreditStats']               = "Statistika kreditov";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "Vseh za to obdobje";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Razporeditev spletne strani";
$GLOBALS['strCampaignDistribution']      = "Razporeditev kampanje";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Ciljana statistika";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Pogled po";
$GLOBALS['strBreakdownByDay']            = "Dan";
$GLOBALS['strBreakdownByWeek']           = "Teden";
$GLOBALS['strBreakdownByMonth']          = "Mesec";
$GLOBALS['strBreakdownByDow']            = "Dan v tednu";
$GLOBALS['strBreakdownByHour']           = "Ura";
$GLOBALS['strItemsPerPage']              = "Postavk po strani";
$GLOBALS['strDistributionHistory']       = "Zgodovina razdelitve";
$GLOBALS['strDistributionHistoryCampaign'] = "Zgodovina distribucije (Kampanja)";
$GLOBALS['strDistributionHistoryBanner'] = "Zgodovina distribucije (Pasica)";
$GLOBALS['strDistributionHistoryWebsite'] = "Zgodovina distribucije (Spletna stran)";
$GLOBALS['strDistributionHistoryZone']   = "Zgodovina distribucije (Področje)";
$GLOBALS['strShowGraphOfStatistics']     = "Prikaži <u>G</u>raf statistike";
$GLOBALS['strExportStatisticsToExcel']   = "<u>I</u>zvozi statistiko v Excel-ovo datoteko";
$GLOBALS['strGDnotEnabled']              = "V PHP-ju morate imeti omogočen GD za prikaz grafov. <br />Obiščite <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> za več informacij.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Površina";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "Potek roka";
$GLOBALS['strNoExpiration']           = "Datum izteka ni nastavljen";
$GLOBALS['strEstimated']              = "Predviden iztek";
$GLOBALS['strNoExpirationEstimation'] = "Iztek roka še ni presojen";
$GLOBALS['strDaysAgo']                = "dnevi";
$GLOBALS['strCampaignStop']           = "Ustavitev kampanje";

// Reports
$GLOBALS['strReports']                = "Poročila";
$GLOBALS['strAdvancedReports']        = "Naprednejša poročila";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Poročilo spletne strani";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "Datum začetka";
$GLOBALS['strEndDate']                = "Datum zaključka";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Obdobje";
$GLOBALS['strLimitations']            = "Omejitve";
$GLOBALS['strWorksheets']             = "Delovnih listov";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Vsi oglaševalci";
$GLOBALS['strAnonAdvertisers']           = "Anonimni oglaševalci";
$GLOBALS['strAllPublishers']             = "Vse spletne strani";
$GLOBALS['strAnonPublishers']            = "Anonimne spletne strani";
$GLOBALS['strAllAvailZones']             = "Vsa razpoložljiva področja";

// Userlog
$GLOBALS['strUserLog']                = "Uporabniški dnevnik";
$GLOBALS['strUserLogDetails']        = "Podrobnosti uporabniškega dnevnika";
$GLOBALS['strDeleteLog']            = "Izbriši dnevnik";
$GLOBALS['strAction']                = "Dejanje";
$GLOBALS['strNoActionsLogged']        = "Nobeno dejanje ni zabeleženo";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Neposredna izbira";
$GLOBALS['strChooseInvocationType']        = "Prosimo, izberite tip poziva pasici";
$GLOBALS['strGenerate']                    = "Ustvari";
$GLOBALS['strParameters']                = "Nastavitve zaznamka";
$GLOBALS['strFrameSize']                = "Velikost okvirja";
$GLOBALS['strBannercode']                = "Koda pasice";
$GLOBALS['strTrackercode']                = "Pripni naslednji niz v posamezen Javascript sledilnik ogledov";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Vrnitev na zapisni seznam";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
$GLOBALS['strCharset']                  = "Postavitev znakov";
$GLOBALS['strAutoDetect']                   = "Samodejno prepoznaj";
$GLOBALS['strCacheBusterComment']       = "* Zamenjaj vse primere {random} z * naključno ustvarjenim številom (ali časovnim žigom). *";
$GLOBALS['strSSLBackupComment']         = "* Arhivski del slike tega zaznamka  je bil ustvarjen za uporabo na 	* ne-SSL straneh. Če boste ta zaznamek vstavili na SSL stran, spremenite 	*   'http://%s/...' 	* v 	*   'https://%s/...' 	*";
$GLOBALS['strSSLDeliveryComment']       = "* Ta zaznamek je bil ustvarjen za uporabo na ne-SSL straneh. če bo  	* vstavljen na SSL stran, spremenite 	*   'http://%s/...' 	* v 	*   'https://%s/...' 	*";

$GLOBALS['strThirdPartyComment']        = "* Ne pozabite zamenjati '{clickurl}' besedila z	* URL sledilnikom klikov, če bo da oglas dostavlja preko zunanjega (3rd party) 	* (non-Max) oglaševalskega strežnika. 	*";

// Errors
$GLOBALS['strMySQLError']                       = "SQL Error:";
$GLOBALS['strErrorDatabaseConnetion']           = "Napaka povezave podatkovne baze.";
$GLOBALS['strErrorCantConnectToDatabase']       = "Prišlo je do težke napake. %s se ne more povezati s podatkovno bazo. Zaradi tega ni mogoče uporabljati administratorskega vmesnika. Dostava pasic je verjetno tudi onemogočena. Verjetni razlogi za ta problem so lahko: <ul> <li>Strežnik podatkovne baze trenutno ne deluje</li> <li>Lokacija strežnika podatkovne baze je bila spremenjena</li> <li>Uporabniško ime in geslo za povezavo s strežnikom nista pravilna</li> <li>PHP se ni naložil v MySQL razširitev</li> </ul>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] Prišlo je do napake pri poskusu pridobitve oglaševalca iz podatkovne baze.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Prišlo je do napake pri poskusu pridobitve pasic iz podatkovne baze.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Prišlo je do napake pri poskusu pridobitve učinkov iz podatkovne baze.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Prišlo je do napake pri poskusu pridobitve klikov iz podatkovne baze.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Prišlo je do napake pri poskusu pridobitve pretvorb iz podatkovne baze.";
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Ni zadetkov";
$GLOBALS['strErrorOccurred']                    = "Prišlo je do napake";
$GLOBALS['strErrorUploadSecurity']              = "Prišlo je do odkritja varnostnega problema, nalaganje ustavljeno!";
$GLOBALS['strErrorUploadBasedir']               = "Ne morem dostopati do želene datoteke, verjetno zaradi varnostnih razlogov.";
$GLOBALS['strErrorUploadUnknown']               = "Ne morem dostopati do želene datoteke zaradi neznane napake. Prosimo, preverite vašo PHP konfiguracijo.";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "Prišlo je do napake pri dostopanju do podatkovne baze.";
$GLOBALS['strErrorDBSerious']                   = "Odkrit je bil resen problem pri podatkovni bazi.";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Podatkovna baza je najverjetneje pokvarjena in potrebuje popravilo. Za več informacij o popravilu baz si prosimo preberite poglavje <i>Tehnične motnje</i> v <i>Administratorskem vodiču</i>.";
$GLOBALS['strErrorDBContact']                   = "Prosimo, obvestite administratorja o problemu na tej strani.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "Povezava pasice s tem področjem je bila neizvedljiva zaradi:";
$GLOBALS['strUnableToLinkBanner']               = "Ne morem vzpostaviti povezave s to pasico:";
$GLOBALS['strErrorEditingCampaign']             = "Prišlo je do napake pri posodabljanju kampanje:";
$GLOBALS['strUnableToChangeCampaign']           = "Ne morem prilagoditi te spremembe zaradi:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "napačna oblika številk v polju Informacije o dohodkih";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Napaka pri posodabljanju področja:";
$GLOBALS['strUnableToChangeZone']               = "Ne morem prilagoditi te spremembe zaradi:";
$GLOBALS['strDatesConflict']                    = "datumi so v navzkrižju z:";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Nekatere od teh statistik so bile zabeležene v napačnem časovnem področju, zato morda ne bodo pravilno prikazane";
$GLOBALS['strWarningInaccurateReadMore']        = "Preberite več o tem";
$GLOBALS['strWarningInaccurateReport']          = "Nekatere od statistik v tem poročilu so bile zabeležene v napačnem časovnem področju, zato morda ne bodo pravilno prikazane";

//Validation
$GLOBALS['strRequiredFieldLegend']              = "označite zahtevano polje";
$GLOBALS['strFormContainsErrors']               = "Obrazec vsebuje napake. Prosimo popravite spodaj označena polja.";
$GLOBALS['strRequiredField']                    = "Zahtevano polje";
$GLOBALS['strXRequiredField']                   = "%s je zahtevan";
$GLOBALS['strMaxLengthField']                   = "Please enter maximum %s characters";
$GLOBALS['strEmailField']                       = "Prosimo, vnesite veljaven e-poštni naslov";
$GLOBALS['strNumericField']                     = "Prosimo, vnesite številko";
$GLOBALS['strGreaterThanZeroField']             = "Mora biti več kot 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s mora biti več kot 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s mora biti pozitivno celo število";
$GLOBALS['strXUniqueField']                     = "%s z tem %s že obstaja";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "Mora biti decimalka z največ %s decimalnih položajev";
$GLOBALS['strInvalidWebsiteURL']                = "Napačen URL spletne strani";


// Email
$GLOBALS['strSirMadam']                         = "Gospod/Gospa";
$GLOBALS['strMailSubject']                      = "Poročilo oglaševalca";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Spoštovani/a {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Spodaj boste našli statistične podatke o pasici za {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampanja aktivirana";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampanja deaktivirana";
$GLOBALS['strMailBannerActivated']              = "Vaša kampanja (prikazana spodaj), je bila aktivirana,\\nker je bil dosežen aktivacijski datum.";
$GLOBALS['strMailBannerDeactivated']            = "Vaša kampanja (prikazana spodaj) je bila deaktivirana zaradi";
$GLOBALS['strMailFooter']                       = "Prijeten dan še naprej,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "Če bi v prihodnje želeli še oglaševati na naši strani, nas kontaktirajte.\\nZ veseljem se Vam bomo oglasili.";
$GLOBALS['strClientDeactivated']                = "Ta kampanja trenutno ni aktivna, ker";
$GLOBALS['strBeforeActivate']                   = "aktivacijski datum še ni bil dosežen";
$GLOBALS['strAfterExpire']                      = "datum izteka roka je bil dosežen";
$GLOBALS['strNoMoreImpressions']                = "na voljo ni več ogledov";
$GLOBALS['strNoMoreClicks']                     = "na voljo ni več klikov";
$GLOBALS['strNoMoreConversions']                = "no voljo ni več prometa";
$GLOBALS['strWeightIsNull']                     = "vrednost je nastavljena na nič";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "dnevna omejitev je nastavljena na nič - navesti morate datum zaključka in omejitev ali nastaviti dnevno omejitev";
$GLOBALS['strWarnClientTxt']                    = "Ogledi, kliki ali pretvorbe pri vaši pasici počasi dosegajo raven {limit}. \\nVaše pasice bodo izklopljene, ko ne bo na voljo več učinkov, klikov ali pretvorb.";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Ogledi/Kliki/Pretvorbe dosegajo nizko raven";
$GLOBALS['strNoViewLoggedInInterval']           = "Zabeleženih je bilo 0 ogledov med trajanjem tega poročila";
$GLOBALS['strNoClickLoggedInInterval']          = "Zabeleženih je bilo 0 klikov med trajanjem tega poročila";
$GLOBALS['strNoConversionLoggedInInterval']     = "Zabeleženih je bilo 0 pretvorb med trajanjem tega poročila";
$GLOBALS['strMailReportPeriod']                 = "To poročilo vsebuje statistične podatke od {startdate} do {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "To poročilo vsebuje vse statistične podatke vse do {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Na voljo ni nobenih statističnih podatkov za to kampanjo.";
$GLOBALS['strImpendingCampaignExpiry']          = "Kampanja se približuje svojemu izteku";
$GLOBALS['strYourCampaign']                     = "Vaša kampanja";
$GLOBALS['strTheCampiaignBelongingTo']          = "Kampanja pripada";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} prikazan spodaj se približuje zaključku na dan {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} prikazan spodaj ima manj kot {limit} učinkov še na voljo.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Kot posledica bo kampanja kmalu samodejno izklopljena, \\nvključno z naslednjimi pasicami:";

// Priority
$GLOBALS['strPriority']                         = "Prioriteta";
$GLOBALS['strSourceEdit']                       = "Uredi vire";

// Preferences
$GLOBALS['strPreferences']                      = "Možnosti";
$GLOBALS['strUserPreferences']                  = "Uporabniške nastavitve";
$GLOBALS['strChangePassword']                   = "Spremeni geslo";
$GLOBALS['strChangeEmail']                      = "Spremeni e-pošto";
$GLOBALS['strCurrentPassword']                  = "Trenutno geslo";
$GLOBALS['strChooseNewPassword']                = "Izberite novo geslo";
$GLOBALS['strReenterNewPassword']               = "Ponovno vnesite novo geslo";
$GLOBALS['strNameLanguage']                     = "Ime & Jezik";
$GLOBALS['strAccountPreferences']               = "Preference računa";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Preference kampanjskih e-poštnih sporočil";
$GLOBALS['strTimezonePreferences']              = "Preference časovnega področja";
$GLOBALS['strAdminEmailWarnings']               = "Administratorska e-poštna opozorila";
$GLOBALS['strAgencyEmailWarnings']              = "Agencijska e-poštna opozorila";
$GLOBALS['strAdveEmailWarnings']                = "Oglaševalčeva e-poštna opozorila";
$GLOBALS['strFullName']                         = "Polno ime";
$GLOBALS['strEmailAddress']                     = "E-poštni naslov";
$GLOBALS['strUserDetails']                      = "Podrobnosti o uporabniku";
$GLOBALS['strLanguageTimezone']                 = "Jezik & Časovno področje";
$GLOBALS['strLanguageTimezonePreferences']      = "Jezikovne in Časovnopodročne nastavitve";
$GLOBALS['strUserInterfacePreferences']         = "Preference uporabniškega vmesnika";
$GLOBALS['strPluginPreferences']                = "Preference vtičnika";
$GLOBALS['strInvocationPreferences']            = "Pozivne preference";
$GLOBALS['strColumnName']                       = "Ime stolpca";
$GLOBALS['strShowColumn']                       = "Prikaži stolpec";
$GLOBALS['strCustomColumnName']                 = "Ime stolpca po meri";
$GLOBALS['strColumnRank']                       = "Niz stolpca";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Dohodek";
$GLOBALS['strNumberOfItems']                       = "Število predmetov";
$GLOBALS['strRevenueCPC']                          = "CPC dohodek";
$GLOBALS['strERPM']                                = "ERPM";
$GLOBALS['strERPC']                                = "ERPC";
$GLOBALS['strERPS']                                = "ERPS";
$GLOBALS['strEIPM']                                = "EIPM";
$GLOBALS['strEIPC']                                = "EIPC";
$GLOBALS['strEIPS']                                = "EIPS";
$GLOBALS['strECPM']                                = "ECPM";
$GLOBALS['strECPC']                                = "ECPC";
$GLOBALS['strECPS']                                = "ECPS";
$GLOBALS['strEPPM']                                = "EPPM";
$GLOBALS['strEPPC']                                = "EPPC";
$GLOBALS['strEPPS']                                = "EPPS";
$GLOBALS['strPendingConversions']               = "Pretvorb v teku";
$GLOBALS['strImpressionSR']                     = "SR ogledov";
$GLOBALS['strClickSR']                          = "SR klikov";
$GLOBALS['strRequiredImpressions']              = "Potrebnih Ogledov";
$GLOBALS['strRequestedImpressions']             = "Zahtevanih Ogledov";
$GLOBALS['strActualImpressions']                = "Ogledov";
$GLOBALS['strZoneForecast']                     = "Področna predvidevanja";
$GLOBALS['strZonesForecast']                    = "Seštevek področnih predvidevanj";
$GLOBALS['strZoneImpressions']                  = "Področnih Ogledov";
$GLOBALS['strZonesImpressions']                 = "Seštevek področnih ogledov";

    // Short names
$GLOBALS['strRevenue_short']                    = "Doh.";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "Štev. postavk";
$GLOBALS['strRevenueCPC_short']                 = "CPC doh.";
$GLOBALS['strERPM_short']                       = "ERPM";
$GLOBALS['strERPC_short']                       = "ERPC";
$GLOBALS['strERPS_short']                       = "ERPS";
$GLOBALS['strEIPM_short']                       = "EIPM";
$GLOBALS['strEIPC_short']                       = "EIPC";
$GLOBALS['strEIPS_short']                       = "EIPS";
$GLOBALS['strECPM_short']                       = "ECPM";
$GLOBALS['strECPC_short']                       = "ECPC";
$GLOBALS['strECPS_short']                       = "ECPS";
$GLOBALS['strEPPM_short']                       = "EPPM";
$GLOBALS['strEPPC_short']                       = "EPPC";
$GLOBALS['strEPPS_short']                       = "EPPS";
$GLOBALS['strID_short']                         = "ID";
$GLOBALS['strRequests_short']                   = "Zah.";
$GLOBALS['strImpressions_short']                = "Ogled.";
$GLOBALS['strClicks_short']                     = "Klikov";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Pretv.";
$GLOBALS['strPendingConversions_short']         = "Pretv. v teku";
$GLOBALS['strImpressionSR_short']               = "SR ogled.";
$GLOBALS['strClickSR_short']                    = "SR klikov";

// Global Settings
$GLOBALS['strConfiguration']                = "Konfiguracija";
$GLOBALS['strGlobalSettings']               = "Globalne nastavitve";
$GLOBALS['strGeneralSettings']              = "Splošne nastavitve";
$GLOBALS['strMainSettings']                 = "Glavne nastavitve";
$GLOBALS['strAdminSettings']                = "Administratorske nastavitve";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Izberi oddelek';

// Product Updates
$GLOBALS['strProductUpdates']         = "Posodobitve izdelka";
$GLOBALS['strViewPastUpdates']        = "Upravljaj z zadnjimi posodobitvami in arhivi";
$GLOBALS['strFromVersion']            = "Iz različice";
$GLOBALS['strToVersion']              = "V različico";
$GLOBALS['strToggleDataBackupDetails']= "Preglej podrobnosti varnostne kopije podatkov";
$GLOBALS['strClickViewBackupDetails'] = "klikni za pregled podrobnosti varnostne kopije";
$GLOBALS['strClickHideBackupDetails'] = "klikni za prikritje podrobnosti varnostne kopije";
$GLOBALS['strShowBackupDetails']      = "Prikaži podrobnosti varnostne kopije podatkov";
$GLOBALS['strHideBackupDetails']      = "Skrij podrobnosti varnostne kopije podatkov";
$GLOBALS['strInstallation']           = "Namestitev";
$GLOBALS['strBackupDeleteConfirm']    = "Ste prepričani, da želite izbrisati vse varnostne kopije ustvarjene v tej posodobitvi?";
$GLOBALS['strDeleteArtifacts']         = "Izbriši artefakte";
$GLOBALS['strArtifacts']              = "Artifakti";
$GLOBALS['strBackupDbTables']         = "Ustvari varnostno kopijo tabel podatkovne baze";
$GLOBALS['strLogFiles']               = "Datoteke beležke";
$GLOBALS['strConfigBackups']          = "Varnostne kopije konfiguracij";
$GLOBALS['strUpdatedDbVersionStamp']  = "Posodobljena različica žiga podatkovne baze";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "POSODOBITEV DOKONČANA";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "POSODOBITEV NEUSPEŠNA";

// Agency
$GLOBALS['strAgencyManagement']              = "Upravljanje z računi";
$GLOBALS['strAgency']                      = "Račun";
$GLOBALS['strAgencies']                   = "Računi";
$GLOBALS['strAddAgency']                   = "Dodaj nov račun";
$GLOBALS['strAddAgency_Key']               = "Dodaj <u>n</u>ov račun";
$GLOBALS['strTotalAgencies']               = "Vseh računov";
$GLOBALS['strAgencyProperties']              = "Lastnosti računa";
$GLOBALS['strNoAgencies']                 = "Trenutno ni definiranih nobenih računov";
$GLOBALS['strConfirmDeleteAgency']           = "Ste prepričani, da želite izbrisati ta račun?";
$GLOBALS['strHideInactiveAgencies']          = "Skrij neaktivne račune";
$GLOBALS['strInactiveAgenciesHidden']     = "skriti neaktivni računi";
$GLOBALS['strAllowAgencyEditConversions'] = "Dovoli temu uporabniku urejanje pretvorb";
$GLOBALS['strAllowMoreReports']           = "Dovoli gumb 'Več poročil'";
$GLOBALS['strSwitchAccount']              = "Preklopi na ta račun";

// Channels
$GLOBALS['strChannel']                    = "Ciljni kanal";
$GLOBALS['strChannels']                   = "Ciljni kanali";
$GLOBALS['strChannelOverview']            = "Pregled ciljnega kanala";
$GLOBALS['strChannelManagement']          = "Upravljanje z ciljnim kanalom";
$GLOBALS['strAddNewChannel']              = "Dodaj nov ciljni kanal";
$GLOBALS['strAddNewChannel_Key']          = "Dodaj <u>n</u>ov ciljni kanal";
$GLOBALS['strChannelToWebsite']           = "k spletni strani";
$GLOBALS['strNoChannels']                 = "Trenutno ni definiran noben ciljni kanal";
$GLOBALS['strNoChannelsAddWebsite']       = "Trenutno ni definiranih ciljnih kanalov, ker ni spletnih strani. Za ustvaritev ciljnega kanala, <a href='affiliate-edit.php'>dodajte novo spletno stran</a> najprej.";

$GLOBALS['strEditChannelLimitations']     = "Uredi omejitve ciljnega kanala";
$GLOBALS['strChannelProperties']          = "Lastnosti ciljnega kanala";
$GLOBALS['strChannelLimitations']         = "Možnosti dostave";
$GLOBALS['strConfirmDeleteChannel']       = "Ste prepričani, da želite izbrisati ta ciljni kanal?";
$GLOBALS['strConfirmDeleteChannels']      = "Ste prepričani, da želite izbrisati izbrane ciljne kanale?";
$GLOBALS['strModifychannel']              = "Uredi ciljani kanal";
$GLOBALS['strChannelsOfWebsite']          = 'v'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Ime spremenljivke";
$GLOBALS['strVariableDescription']     = "Opis";
$GLOBALS['strVariableDataType']         = "Tip podatka";
$GLOBALS['strVariablePurpose']       = "Namen";
$GLOBALS['strGeneric']               = "Splošno";
$GLOBALS['strBasketValue']           = "Vrednost košarice";
$GLOBALS['strNumItems']              = "Število predmetov";
$GLOBALS['strVariableIsUnique']      = "Izvedi pretvorbe?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Število";
$GLOBALS['strString']                 = "Niz";
$GLOBALS['strTrackFollowingVars']     = "Sledi naslednji spremenljivki";
$GLOBALS['strAddVariable']             = "Dodaj spremenljivko";
$GLOBALS['strNoVarsToTrack']         = "Ni spremenljivk za sledenje.";
$GLOBALS['strVariableHidden']       = "Skrij spremenljivko k spletnim stranem?";
$GLOBALS['strVariableRejectEmpty']  = "Zavrni, če je prazno?";
$GLOBALS['strTrackingSettings']     = "Sledilne nastavitve";
$GLOBALS['strTrackerType']          = "Tip sledilnika";
$GLOBALS['strTrackerTypeJS']        = "Sledi spremenljivkam JavaScript";
$GLOBALS['strTrackerTypeDefault']   = "Sledi spremenljivkam JavaScript (združljiv z povratno funkcijo)";
$GLOBALS['strTrackerTypeDOM']       = "Sledi elementom HTML z uporabo DOM-a";
$GLOBALS['strTrackerTypeCustom']    = "JS koda po meri";
$GLOBALS['strVariableCode']         = "JavaScript sledilna koda";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Dolžina snemanja je prevelika";
$GLOBALS['strRecordNonInt']         = "Vrednost mora biti numerična";
$GLOBALS['strRecordWasNotInserted'] = "Zapis ni bilo vstavljeno";
$GLOBALS['strWrongColumnPart1']     = "<br>Napaka v CSV datoteki! Stolpec <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> ni dovoljen za ta sledilnik";
$GLOBALS['strMissingColumnPart1']   = "<br>Napaka v CSV datoteki! Stolpec <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> manjka";
$GLOBALS['strYouHaveNoTrackers']    = "Oglaševalec nima sledilnikov!";
$GLOBALS['strYouHaveNoCampaigns']   = "Oglaševalec nima kampanj!";
$GLOBALS['strYouHaveNoBanners']     = "Kampanja nima pasic!";
$GLOBALS['strYouHaveNoZones']       = "Pasica ni povezana v nobeno področje!";
$GLOBALS['strNoBannersDropdown']    = "\\--Nobene pasice ni bilo mogoče najti--";
$GLOBALS['strNoZonesDropdown']      = "\\--Nobenega področja ni bilo mogoče najti--";
$GLOBALS['strInsertErrorPart1']     = "<br><br><center><b> Napaka, ";
$GLOBALS['strInsertErrorPart2']     = "records was not inserted! </b></center>";
$GLOBALS['strDuplicatedValue']      = "Podvojena vrednost!";
$GLOBALS['strInsertCorrect']        = "<br><br><center><b> Datoteka je bila pravilno naložena </b></center>";
$GLOBALS['strReuploadCsvFile']      = "Ponovno naloži CSV datoteko";
$GLOBALS['strConfirmUpload']        = "Potrdi naložitev";
$GLOBALS['strLoadedRecords']        = "Naloženih zapisov";
$GLOBALS['strBrokenRecords']        = "Pokvarjena polja v vseh zapisih";
$GLOBALS['strWrongDateFormat']      = "Napačen format datuma";


// Password recovery
$GLOBALS['strForgotPassword']         = "Ste pozabili svoje geslo?";
$GLOBALS['strPasswordRecovery']       = "Povrnitev gesla";
$GLOBALS['strEmailRequired']          = "Polje za vnos e-pošte je potrebno obvezno izpolniti";
$GLOBALS['strPwdRecEmailSent']        = "E-pošta o obnovitvi poslana";
$GLOBALS['strPwdRecEmailNotFound']    = "Naslova elektronske pošte ni bilo mogoče najti";
$GLOBALS['strPwdRecPasswordSaved']    = "Novo geslo je bilo shranjeno. Nadaljujte na <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "Napačen ID";
$GLOBALS['strPwdRecEnterEmail']       = "Spodaj vpišite naslov svoje elektronske pošte";
$GLOBALS['strPwdRecEnterPassword']    = "Spodaj vpišite vaše novo geslo";
$GLOBALS['strPwdRecReset']            = "Ponastavi geslo";
$GLOBALS['strPwdRecResetLink']        = "Povezava na ponastavitev gesla";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Ponastavi geslo za tega uporabnika";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s ponastavitev gesla";
$GLOBALS['strProceed']                = "Nadaljuj >";
$GLOBALS['strNotifyPageMessage']      = "Poslano vam je bilo elektronsko sporočilo z povezavo, ki vam bo omogočila ponastavitev gesla in prijavo v sistem.<br />Prosimo, počakajte nekaj minut, da se sporočilo dostavi.<br />Če ga niste prejeli, preverite mapo z nezaželjeno pošto.<br /><a href='index.php'>Vrnitev na prijavno stran.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "in dodatnih postavk";
$GLOBALS['strFor']                    = "za";
$GLOBALS['strHas']                    = "ima";
$GLOBALS['strAdZoneAsscociation']     = "Zveza področnega oglasa";
$GLOBALS['strBinaryData']             = "Binarni podatki";
$GLOBALS['strAuditTrailDisabled']     = "Administrator je onemogočil Pregledno pot. Noben nadaljni dogodek ne bo več zabeležen in prikazan.";
$GLOBALS['strAccount']                  = "Račun";
$GLOBALS['strAccountUserAssociation']   = "Povezava uporabniških računov";
$GLOBALS['strEvent']                    = "Dogodek";
$GLOBALS['strImage']                    = "Slika";
$GLOBALS['strCampaignZoneAssociation']      = "Povezava kampanjskih področij";
$GLOBALS['strAccountPreferenceAssociation'] = "Povezava nastavitve računov";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "Nobena uporabniško dejanje ni bilo zabeleženo med časovnim okvirjem, ki ste ga izbrali.";
$GLOBALS['strAuditTrail']             = "Pregledna pot (audit trail)";
$GLOBALS['strAuditTrailSetup']          = "Nastavite Pregledno pot danes";
$GLOBALS['strAuditTrailGoTo']           = "Pojdite na stran Pregledne poti";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Pojdite na stran kampanje";
$GLOBALS['strCampaignSetUp']            = "Ustvari novo kampanjo danes";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>Nobena kampanja ni aktivna za prikaz.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "Nobena kampanja se ni začela ali končala v časovnem okvirju, ki ste ga določili";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>Če bi želeli pregledati katere kampanje so se začele in končale v časovnem okvirju, ki ste ga določili, mora biti omogočena Pregledna pot</li>	        <li>To sporočilo vidite zato, ker nimate omogočene Pregledne poti</li>";
$GLOBALS['strCampaignAuditTrailSetup']   = "Aktiviraj Pregledno pot za ogled Kampanj";

$GLOBALS['strUnsavedChanges']       = "Na tej strani imate neshranjene spremembe. Ko boste končali, kliknite na \"Shrani spremebe\"";
$GLOBALS['strDeliveryLimitationsDisagree'] = "OPOZORILO: Omejitve dostavnega orodja <strong>NE STRINJAM SE</strong> z omejitvami prikazanih spodaj<br />Prosimo, kliknite Shrani spremebe za posodobitev pravil dostavnega orodja";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Omejitve dostave poročajo o napačnih vrednostih:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "Zdaj delujte kot <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "Nimate dostopa do te strani. Bili ste preusmerjeni.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Oglaševalec <a href='%s'>%s</a> je bil dodan, <a href='%s'>dodaj kampanjo</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Oglaševalec <a href='%s'>%s</a> je bil posodobljen";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Oglaševalec <b>%s</b> je bil izbrisan";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "Vsi izbrani oglaševalci so bili izbrisani";

$GLOBALS['strTrackerHasBeenAdded'] = "Sledilnik <a href='%s'>%s</a> je bil dodan";
$GLOBALS['strTrackerHasBeenUpdated'] = "Sledilnik <a href='%s'>%s</a> je bil posodobljen";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Spremenljivke sledilnika <a href='%s'>%s</a> so bile posodobljene";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Povezane kampanje sledilnika <a href='%s'>%s</a> so bile posodobljene";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Pripet sledilni niz sledilnika <a href='%s'>%s</a> je bil posodobljen";
$GLOBALS['strTrackerHasBeenDeleted'] = "Sledilnik <b>%s</b> je bil izbrisan";
$GLOBALS['strTrackersHaveBeenDeleted'] = "Vsi izbrani sledilniki so bili izbrisani";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Sledilnik <a href='%s'>%s</a> je bil kopiran v <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Sledilnik <b>%s</b> je bil premaknjen k oglaševalcu <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Kampanja <a href='%s'>%s</a> je bila dodana, <a href='%s'>dodaj pasico</a>";
$GLOBALS['strCampaignHasBeenNoBanner'] = "Campaign <a href='%s'>%s</a> has been added";
$GLOBALS['strCampaignHasBeenUpdated'] = "Kampanja <a href='%s'>%s</a> je bila posodobljena";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Povezani sledilniki kampanje <a href='%s'>%s</a> so bili posodobljeni";
$GLOBALS['strCampaignHasBeenDeleted'] = "Kampanja <b>%s</b> je bila izbrisana";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "Vse izbrane kampanje so bile izbrisane";
$GLOBALS['strCampaignHasBeenDuplicated'] = "Kampanja <a href='%s'>%s</a> je bila kopirana v <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "Kampanja <b>%s</b> je bila premaknjena k oglaševalcu <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Pasica <a href='%s'>%s</a> je bila dodana";
$GLOBALS['strBannerHasBeenUpdated'] = "Pasica <a href='%s'>%s</a> je bila posodobljena";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Naprednejše nastavitve pasice <a href='%s'>%s</a> so bile posodobljene";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Dostavne možnosti pasice <a href='%s'>%s</a> so bile posodobljene";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Delivery options for banner <a href='%s'>%s</a> have been applied to %d banners";
$GLOBALS['strBannerHasBeenDeleted'] = "Pasica <b>%s</b> je bila izbrisana";
$GLOBALS['strBannersHaveBeenDeleted'] = "Vse izbrane pasice so bile izbrisane";
$GLOBALS['strBannerHasBeenDuplicated'] = "Pasica <a href='%s'>%s</a> je bila kopirana v <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Pasica <b>%s</b> je bila premaknjena v kampanjo <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Pasica <a href='%s'>%s</a> je bila aktivirana";
$GLOBALS['strBannerHasBeenDeactivated'] = "Pasica <a href='%s'>%s</a> je bila deaktivirana";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> področje(ij) povezana(ih)";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> področje(ij) brez povezave";

$GLOBALS['strWebsiteHasBeenAdded'] = "Spletna stran <a href='%s'>%s</a> je bila dodana, <a href='%s'>dodaj področje</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Spletna stran <a href='%s'>%s</a> je bila posodobljena";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Spletna stran <b>%s</b> je bila izbrisana";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "Vse izbrane spletne strani so bile izbrisane";

$GLOBALS['strZoneHasBeenAdded'] = "Področje <a href='%s'>%s</a> je bilo dodano";
$GLOBALS['strZoneHasBeenUpdated'] = "Področje <a href='%s'>%s</a> je bilo posodobljeno";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Naprednejše nastavitve področja <a href='%s'>%s</a> so bile posodobljene";
$GLOBALS['strZoneHasBeenDeleted'] = "Področje <b>%s</b> je bilo izbrisano";
$GLOBALS['strZonesHaveBeenDeleted'] = "Vsa izbrana področja so bila izbrisana";
$GLOBALS['strZoneHasBeenDuplicated'] = "Področje <a href='%s'>%s</a> je bilo kopirano v <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Področje <b>%s</b> je bilo premaknjeno v spletno stran <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Pasica je bila povezana v področje <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Kampanja je bila povezana v področje <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Pasica več ni povezana v področje <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Kampanja več ni povezana v področje <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Ciljni kanal <a href='%s'>%s</a> je bil dodan, <a href='%s'>spremeni dostavne možnosti</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Ciljni kanal <a href='%s'>%s</a> je bil posodobljen";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Dostavne možnosti ciljnega kanala <a href='%s'>%s</a> so bile posodobljene";
$GLOBALS['strChannelHasBeenDeleted'] = "Ciljni kanal <b>%s</b> je bil izbrisan";
$GLOBALS['strChannelsHaveBeenDeleted'] = "Vsi izbrani ciljni kanali so bili izbrisani";
$GLOBALS['strChannelHasBeenDuplicated'] = "Ciljni kanal <a href='%s'>%s</a> je bil kopiran v <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Vaše <b>%s</b> preference so bile posodobljene";
$GLOBALS['strPreferencesHaveBeenUpdated'] = "Preference so bile posodobljene";
$GLOBALS['strEmailChanged'] = "Vaš e-poštni naslov je bil spremenjen";
$GLOBALS['strPasswordChanged'] = "Vaše geslo je bilo spremenjeno";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> so posodobljene";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> so posodobljene";
$GLOBALS['strTZPreferencesWarning'] = "However, campaign activation and expiry were not updated, nor time-based banner limitations.<br />You will need to update them manually if you wish them to use the new timezone";


/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome']            = "h";
$GLOBALS['keyUp']            = "u";
$GLOBALS['keyNextItem']        = ".";
$GLOBALS['keyPreviousItem']    = ",";
$GLOBALS['keyList']            = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "s";
$GLOBALS['keyCollapseAll']    = "c";
$GLOBALS['keyExpandAll']    = "e";
$GLOBALS['keyAddNew']        = "n";
$GLOBALS['keyNext']            = "n";
$GLOBALS['keyPrevious']        = "p";
$GLOBALS['keyLinkUser']        = "u";
$GLOBALS['keyWorkingAs']        = "w";

// Market entities
$GLOBALS['strMarketCampaignOptin'] = "OpenX Market - Opted In Campaigns";
$GLOBALS['strMarketZoneOptin'] = "OpenX Market - Zone Default Ads";
$GLOBALS['strMarketZoneBeforeOpenX2.8.4'] = "OpenX Market ads before OpenX 2.8.4";

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Arabščina";
$GLOBALS['str_bg']                  = "Bolgariščina";
$GLOBALS['str_cs']                  = "Češčina";
$GLOBALS['str_cy']                  = "Welščina";
$GLOBALS['str_da']                  = "Danščina";
$GLOBALS['str_de']                  = "Nemščina";
$GLOBALS['str_el']                  = "Grščina";
$GLOBALS['str_en']                  = "Angleščina";
$GLOBALS['str_es']                  = "Španščina";
$GLOBALS['str_fa']                  = "Perzijščina";
$GLOBALS['str_fr']                  = "Francoščina";
$GLOBALS['str_he']                  = "Hebrejščina";
$GLOBALS['str_hr']                  = "Hrvaščina";
$GLOBALS['str_hu']                  = "Madžarščina";
$GLOBALS['str_id']                  = "Indonezijščina";
$GLOBALS['str_it']                  = "Italijanščina";
$GLOBALS['str_ja']                  = "Japonščina";
$GLOBALS['str_ko']                  = "Korejščina";
$GLOBALS['str_lt']                  = "Litvanščina";
$GLOBALS['str_ms']                  = "Malazijščina";
$GLOBALS['str_nb']                  = "Norveščina (bokmal)";
$GLOBALS['str_nl']                  = "Nizozemščina";
$GLOBALS['str_pl']                  = "Poljščina";
$GLOBALS['str_pt_BR']               = "Portugalska brazilščina";
$GLOBALS['str_pt_PT']               = "Portugalska portugalščina";
$GLOBALS['str_ro']                  = "Romunščina";
$GLOBALS['str_ru']                  = "Ruščina";
$GLOBALS['str_sk']                  = "Slovaščina";
$GLOBALS['str_sl']                  = "Slovenščina";
$GLOBALS['str_sq']                  = "Albanščina";
$GLOBALS['str_sv']                  = "Švedščina";
$GLOBALS['str_tr']                  = "Turščina";
$GLOBALS['str_uk']                  = "Ukrajinščina";
$GLOBALS['str_zh_CN']               = "Poenostavljena kitajščina";
$GLOBALS['str_zh_TW']               = "Tradicionalna kitajščina";

?>
