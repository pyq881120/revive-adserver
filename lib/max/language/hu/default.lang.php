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
$GLOBALS['date_format']                 = "%Y-%m-%d";
$GLOBALS['month_format']                = "%Y-%m";
$GLOBALS['day_format']                  = "%m-%d";
$GLOBALS['week_format']                 = "%Y-%W";

// Formats used by PEAR Spreadsheet_Excel_Writer packate

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Kezdőlap";
$GLOBALS['strHelp']                     = "Segítség";
$GLOBALS['strStartOver']                = "Újrakezdés";
$GLOBALS['strNavigation']               = "Navigáció";
$GLOBALS['strShortcuts']                = "Gyorsgombok";
$GLOBALS['strAdminstration']            = "Leltár";
$GLOBALS['strMaintenance']              = "Karbantartás";
$GLOBALS['strProbability']              = "Valószínűség";
$GLOBALS['strInvocationcode']           = "Beillesztő programkód";
$GLOBALS['strTrackerVariables']         = "Követő változók";
$GLOBALS['strBasicInformation']         = "Alapinformáció";
$GLOBALS['strContractInformation']      = "Megállapodás adatai";
$GLOBALS['strLoginInformation']         = "Belépési információk";
$GLOBALS['strLogoutURL']                = "Kilépést követő átirányítás URL-je. <br />Alapértelmezettként üres";
$GLOBALS['strAppendTrackerCode']        = "Követő kód hozzáadása";
$GLOBALS['strOverview']                 = "�?ttekintés";
$GLOBALS['strSearch']                   = "Kere<u>s</u>és";
$GLOBALS['strHistory']                  = "Előzmények";
$GLOBALS['strDetails']                  = "Részletek";
$GLOBALS['strCheckForUpdates']          = "Elérhető frissítések keresése";
$GLOBALS['strCompact']                  = "Tömör";
$GLOBALS['strVerbose']                  = "Részletes";
$GLOBALS['strUser']                     = "Felhasználó";
$GLOBALS['strEdit']                     = "Szerkeszt";
$GLOBALS['strCreate']                   = "Létrehoz";
$GLOBALS['strDuplicate']                = "Duplikál";
$GLOBALS['strMoveTo']                   = "Mozgat";
$GLOBALS['strDelete']                   = "Töröl";
$GLOBALS['strActivate']                 = "Aktivál";
$GLOBALS['strDeActivate']               = "Inaktivál";
$GLOBALS['strConvert']                  = "Konvertál";
$GLOBALS['strRefresh']                  = "Frissít";
$GLOBALS['strSaveChanges']              = "Változtatások mentése";
$GLOBALS['strUp']                       = "Föl";
$GLOBALS['strDown']                     = "Le";
$GLOBALS['strSave']                     = "Mentés";
$GLOBALS['strCancel']                   = "Mégse";
$GLOBALS['strPrevious']                 = "Előző";
$GLOBALS['strPrevious_Key']             = "<u>V</u>issza";
$GLOBALS['strNext']                     = "Következő";
$GLOBALS['strNext_Key']                 = "<u>T</u>ovább";
$GLOBALS['strYes']                      = "Igen";
$GLOBALS['strNo']                       = "Nem";
$GLOBALS['strNone']                     = "Nincs";
$GLOBALS['strCustom']                   = "Egyedi";
$GLOBALS['strDefault']                  = "Alapértelmezett";
$GLOBALS['strOther']                    = "Egyéb";
$GLOBALS['strUnknown']                  = "Ismeretlen";
$GLOBALS['strUnlimited']                = "Korlátlan";
$GLOBALS['strUntitled']                 = "Címtelen";
$GLOBALS['strAll']                      = "Összes";
$GLOBALS['strAvg']                      = "�?tlag";
$GLOBALS['strAverage']                  = "�?tlag";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Teljes";
$GLOBALS['strTotal']                    = "Összesen";
$GLOBALS['strActive']                   = "aktív";
$GLOBALS['strFrom']                     = "Mettől";
$GLOBALS['strTo']                       = "meddig";
$GLOBALS['strLinkedTo']                 = "csatolva";
$GLOBALS['strDaysLeft']                 = "Hátralévő napok";
$GLOBALS['strCheckAllNone']             = "Összes kijelölve/üres";
$GLOBALS['strExpandAll']                = "Össz<u>e</u>s kibontása";
$GLOBALS['strCollapseAll']              = "Összes be<u>c</u>sukása";
$GLOBALS['strShowAll']                  = "Összes megjelenítése";
$GLOBALS['strNoAdminInterface']         = "Az adminisztrációs felület jelenleg karbantartás miatt nem elérhető. A kampányok kiszolgálását ez nem akadályozza.";
$GLOBALS['strFilterBySource']           = "szűrés forrás alapján";
$GLOBALS['strFieldContainsErrors']      = "A következő mezők hibá(ka)t tartalmaznak:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Folytatás előtt szükséges";
$GLOBALS['strFieldFixBeforeContinue2']  = "javítani kell ezeket a hibákat.";
$GLOBALS['strDelimiter']                = "Határolójel";
$GLOBALS['strMiscellaneous']            = "Vegyes";
$GLOBALS['strCollectedAllStats']        = "Minden statisztika";
$GLOBALS['strCollectedToday']           = "Ma";
$GLOBALS['strCollectedYesterday']       = "Tegnap";
$GLOBALS['strCollectedThisWeek']        = "Aktuális hét";
$GLOBALS['strCollectedLastWeek']        = "Előző hét";
$GLOBALS['strCollectedThisMonth']       = "Aktuális hónap";
$GLOBALS['strCollectedLastMonth']       = "Előző hónap";
$GLOBALS['strCollectedLast7Days']       = "Előző 7 nap";
$GLOBALS['strCollectedSpecificDates']   = "Egyedi dátumok";
$GLOBALS['strNotice']                   = "Értesítés";

// Dashboard
// Dashboard Errors

// Priority
$GLOBALS['strPriority']                 = "Prioritás";
$GLOBALS['strPriorityLevel']            = "Prioritási szint";
$GLOBALS['strPriorityTargeting']        = "Elosztás";
$GLOBALS['strPriorityOptimisation']     = "Vegyes"; // Er, what?
$GLOBALS['strLimitations']              = "Korlátozások";
$GLOBALS['strNoLimitations']            = "Nincsenek korlátozások";

// Properties
$GLOBALS['strName']                     = "Név";
$GLOBALS['strSize']                     = "Méret";
$GLOBALS['strWidth']                    = "Szélesség";
$GLOBALS['strHeight']                   = "Magasság";
$GLOBALS['strURL2']                     = "Hivatkozás";
$GLOBALS['strTarget']                   = "Cél";
$GLOBALS['strLanguage']                 = "Nyelv";
$GLOBALS['strDescription']              = "Leírás";
$GLOBALS['strVariables']                = "Változók";
$GLOBALS['strID']                       = "Azonosító";
$GLOBALS['strComments']                 = "Megjegyzések";

// User access
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Felhasználónév";

// Login & Permissions
$GLOBALS['strAuthentification']         = "Hitelesítés";
$GLOBALS['strWelcomeTo']                = "Üdvözli az";
$GLOBALS['strEnterUsername']            = "Adja meg felhasználónevét és jelszavát";
$GLOBALS['strEnterBoth']                = "Felhasználói nevét és jelszavát is adja meg";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strLogin']                    = "Login név (FTP felhasználó)";
$GLOBALS['strLogout']                   = "Kilépés";
$GLOBALS['strUsername']                 = "Felhasználónév";
$GLOBALS['strPassword']                 = "Jelszó";
$GLOBALS['strPasswordRepeat']           = "Jelszó ismét";
$GLOBALS['strAccessDenied']             = "Hozzáférés megtagadva";
$GLOBALS['strUsernameOrPasswordWrong']  = "Hibás felhasználónév vagy jelszó. Próbálja meg újra!";
$GLOBALS['strPasswordWrong']            = "Hibás jelszó.";
$GLOBALS['strNotAdmin']                 = "Lehet, hogy ön nem rendelkezik megfelelő jogosultsággal";
$GLOBALS['strDuplicateClientName']      = "A megadott felhasználónév foglalt, adjon meg másikat.";
$GLOBALS['strDuplicateAgencyName']      = "A megadott felhasználónév foglalt, adjon meg másikat.";
$GLOBALS['strInvalidPassword']          = "Az új jelszó érvénytelen, adjon meg másikat.";
$GLOBALS['strNotSamePasswords']         = "A két jelszó különbözik.";
$GLOBALS['strRepeatPassword']           = "Jelszó ismét";
$GLOBALS['strOldPassword']              = "Régi jelszó";
$GLOBALS['strNewPassword']              = "Új jelszó";

// General advertising
$GLOBALS['strRequests']                 = "Kérések";
$GLOBALS['strImpressions']              = "Megjelenés";
$GLOBALS['strClicks']                   = "Kattintás";
$GLOBALS['strConversions']              = "Konverzió";
$GLOBALS['strCTRShort']                 = "�?tkattintás";
$GLOBALS['strCTR']                      = "�?tkattintás";
$GLOBALS['strCNVR']                     = "Értékesítési arány";
$GLOBALS['strTotalViews']               = "Összes letöltés";
$GLOBALS['strTotalClicks']              = "Összes kattintás";
$GLOBALS['strTotalConversions']         = "Összes konverzió";
$GLOBALS['strViewCredits']              = "Megjelenési keret";
$GLOBALS['strClickCredits']             = "Kattintási keret";
$GLOBALS['strConversionCredits']        = "Konverzió keret";
$GLOBALS['strBanners']                  = "Reklámok";
$GLOBALS['strCampaigns']                = "Kampány";
$GLOBALS['strCampaignID']               = "Kampány azonosító";
$GLOBALS['strCampaignName']             = "Kampány név";
$GLOBALS['strCountry']                  = "Ország";
$GLOBALS['strStatsVariables']           = "Változók";

// Finance
$GLOBALS['strFinanceCTR']               = "�?tkattintás";

// Time and date related
$GLOBALS['strDate']                     = "Dátum";
$GLOBALS['strToday']                    = "Ma";
$GLOBALS['strDay']                      = "Nap";
$GLOBALS['strDays']                     = "Nap";
$GLOBALS['strLast7Days']                = "Utóbbi 7 nap";
$GLOBALS['strWeek']                     = "Hét";
$GLOBALS['strWeeks']                    = "Hét";
$GLOBALS['strSingleMonth']              = "Hónap";
$GLOBALS['strMonths']                   = "Hónap";
$GLOBALS['strDayOfWeek']                = "A hét napja";
$GLOBALS['strThisMonth']                = "E hónap";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Óra";
$GLOBALS['strSeconds']                  = "másodperc";
$GLOBALS['strMinutes']                  = "perc";
$GLOBALS['strHours']                    = "óra";
$GLOBALS['strTimes']                    = "alkalommal";

// Advertiser
$GLOBALS['strClient']                       = "Hirdető";
$GLOBALS['strClients']                      = "Hirdetők";
$GLOBALS['strClientsAndCampaigns']          = "Hirdetők és kampányok";
$GLOBALS['strAddClient']                    = "Új hirdető hozzáadása";
$GLOBALS['strAddClient_Key']                = "Új hirdető hozzáadása (<u>n</u>)";
$GLOBALS['strTotalClients']                 = "Összes hirdető";
$GLOBALS['strClientProperties']             = "Hirdető tulajdonságai";
$GLOBALS['strClientHistory']                = "Hirdető előzményei";
$GLOBALS['strNoClients']                    = "Jelenleg nincsenek hirdetők";
$GLOBALS['strConfirmDeleteClient']          = "Valóban törli ezt a hirdetőt?";
$GLOBALS['strConfirmResetClientStats']      = "Valóban törli ennek a hirdetőnek a létező statisztikáit?";
$GLOBALS['strSite']                         = "Méret";
$GLOBALS['strHideInactiveAdvertisers']      = "Inaktív hirdetők elrejtése";
$GLOBALS['strInactiveAdvertisersHidden']    = "inaktív hirdető elrejtve";
$GLOBALS['strOverallAdvertisers']           = "Hirdetők";
$GLOBALS['strAdvertiserCampaigns']          = "Hirdetők és kampányok";
// Advertisers properties
$GLOBALS['strContact']                          = "Kapcsolattartó";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strSendAdvertisingReport']            = "Hirdetési jelentés küldése e-mailben";
$GLOBALS['strNoDaysBetweenReports']             = "A jelentések közti napok száma";
$GLOBALS['strSendDeactivationWarning']          = "Figyelmeztetés küldése a kampány deaktiválásakor";
$GLOBALS['strAllowClientModifyInfo']            = "A felhasználó módosíthatja a saját beállításait";
$GLOBALS['strAllowClientModifyBanner']          = "A felhasználó módosíthatja a reklámait";
$GLOBALS['strAllowClientAddBanner']             = "A felhasználó feltöltheti a saját reklámait";
$GLOBALS['strAllowClientDisableBanner']         = "A felhasználó deaktiválhatja a saját reklámait";
$GLOBALS['strAllowClientActivateBanner']        = "A felhasználó aktiválhatja a saját reklámait";

// Campaign
$GLOBALS['strCampaign']                     = "Kampány";
$GLOBALS['strCampaigns']                    = "Kampány";
$GLOBALS['strTotalCampaigns']               = "Összes kampány";
$GLOBALS['strActiveCampaigns']              = "Aktív kampány";
$GLOBALS['strAddCampaign']                  = "Új kampány";
$GLOBALS['strAddCampaign_Key']              = "Ú<u>j</u> kampány";
$GLOBALS['strCreateNewCampaign']            = "Új kampány létrehozása";
$GLOBALS['strModifyCampaign']               = "Kampány módosítása";
$GLOBALS['strMoveToNewCampaign']            = "�?thelyezés új kampányba";
$GLOBALS['strBannersWithoutCampaign']       = "Kampány nélküli reklámok";
$GLOBALS['strDeleteAllCampaigns']           = "Minden kampány törlése";
$GLOBALS['strCampaignStats']                = "Kampány statisztika";
$GLOBALS['strCampaignProperties']           = "Kampány tulajdonságai";
$GLOBALS['strCampaignOverview']             = "Kampány áttekintése";
$GLOBALS['strCampaignHistory']              = "Kampány előzményei";
$GLOBALS['strNoCampaigns']                  = "Jelenleg nincsenek kampányok";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Valóban törli ennek a hirdetőnek az összes kampányát?";
$GLOBALS['strConfirmDeleteCampaign']        = "Valóban törli ezt a kampányt?";
$GLOBALS['strConfirmResetCampaignStats']    = "Valóban törli ennek a kampánynak a teljes statisztikáját?";
$GLOBALS['strHideInactiveCampaigns']        = "Inaktív kampányok elrejtése";
$GLOBALS['strInactiveCampaignsHidden']      = "inaktív kampány elrejtve";
$GLOBALS['strHiddenCampaign']               = "Kampány";
$GLOBALS['strHiddenAdvertiser']             = "Hirdető";
$GLOBALS['strHiddenZone']                   = "Nincs";

// Campaign-zone linking page


// Campaign properties
$GLOBALS['strDontExpire']                       = "A kampány nem jár le a megadott napon";
$GLOBALS['strActivateNow']                      = "A kampány azonnali aktiválása";
$GLOBALS['strLow']                              = "Alacsony";
$GLOBALS['strHigh']                             = "Magas";
$GLOBALS['strExpirationDate']                   = "Lejárat dátuma";
$GLOBALS['strActivationDate']                   = "Aktiválás dátuma";
$GLOBALS['strCampaignWeight']                   = "A kampány fontossága";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "A reklám megjelenítése alacsony prioritással ebben a reklámban.<br> Ez a kampány kerül felhasználásra azon hátralévő letöltések megjelenítésére, melyeket nem használnak a magas prioritású kampányok.";
$GLOBALS['strTargetPerDay']                     = "naponta.";
$GLOBALS['strPriorityAutoTargeting']            = "A maradék reklámletöltések egyenletes elosztása a maradék napok számán túl. A reklámletöltések célzott száma minden napnak megfelelően kerül beállításra.";
$GLOBALS['strCampaignWarningNoTarget']          = "A kampány prioritását magasra állította, \\nviszont nem adta meg a reklámletöltések célzott számát. \\nEz a kampány deaktiválását eredményezi, és \\na reklámok továbbítására nem kerül sor a reklámletöltések \\ncélzott számának megadásáig. \\n\\nBiztos, hogy folytatja?";
$GLOBALS['strCampaignStatusInactive']           = "aktív";
$GLOBALS['strCampaignStatusDeleted']            = "Töröl";
$GLOBALS['strCampaignType']                     = "Kampány név";

// Tracker
$GLOBALS['strClick']                      = "Kattintás";
$GLOBALS['strImpression']                 = "Megjelenés";



// Banners (General)
$GLOBALS['strBanner']                        = "Reklám";
$GLOBALS['strBanners']                       = "Reklámok";
$GLOBALS['strAddBanner']                     = "Új reklám";
$GLOBALS['strAddBanner_Key']                 = "Ú<u>j</u> reklám";
$GLOBALS['strModifyBanner']                  = "Reklám módosítása";
$GLOBALS['strActiveBanners']                 = "Aktív reklám";
$GLOBALS['strTotalBanners']                  = "Összes reklám";
$GLOBALS['strShowBanner']                    = "Nézet";
$GLOBALS['strShowAllBanners']                = "Minden reklám megjelenítése";
$GLOBALS['strShowBannersNoAdViews']          = "Reklámok megjelenítése reklámletöltések nélkül";
$GLOBALS['strShowBannersNoAdClicks']         = "Reklámok megjelenítése kattintások nélkül";
$GLOBALS['strDeleteAllBanners']              = "Minden reklám törlése";
$GLOBALS['strActivateAllBanners']            = "Minden reklám aktiválása";
$GLOBALS['strDeactivateAllBanners']          = "Minden reklám deaktiválása";
$GLOBALS['strBannerOverview']                = "Reklám áttekintése";
$GLOBALS['strBannerProperties']              = "Reklám tulajdonságai";
$GLOBALS['strBannerHistory']                 = "Reklám előzményei";
$GLOBALS['strBannerNoStats']                 = "Ennek a reklámnak a statisztikája nem áll rendelkezésre";
$GLOBALS['strNoBanners']                     = "Jelenleg nincsenek reklámok";
$GLOBALS['strConfirmDeleteBanner']           = "Valóban törli ezt a reklámot?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Valóban törli az ehhez a kampányhoz tartozó reklámokat?";
$GLOBALS['strConfirmResetBannerStats']       = "Valóban törli ennek a reklámnak a teljes statisztikáját?";
$GLOBALS['strShowParentCampaigns']           = "Szülő kampányok megjelenítése";
$GLOBALS['strHideParentCampaigns']           = "Szülő kampányok elrejtése";
$GLOBALS['strHideInactiveBanners']           = "Inaktív reklámok elrejtése";
$GLOBALS['strInactiveBannersHidden']         = "inaktív reklám elrejtve";
$GLOBALS['strAppendOthers']                  = "Egyebek hozzáfűzése";
$GLOBALS['strAppendTextAdNotPossible']       = "Szöveges hirdetésekhez nem lehet másik reklámot hozzáfűzni.";


// Banner Preferences
$GLOBALS['strDefaultBannerDestination']              = "Alapértelmezett cél URL";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Válassza ki a reklámtípust";
$GLOBALS['strMySQLBanner']             = "Helyi reklám (SQL)";
$GLOBALS['strWebBanner']               = "Helyi reklám (Webkiszolgáló)";
$GLOBALS['strURLBanner']               = "Külső reklám";
$GLOBALS['strHTMLBanner']              = "HTML reklám";
$GLOBALS['strTextBanner']              = "Szöveges hirdetés";
$GLOBALS['strUploadOrKeep']            = "Megtartja a létező képet, <br>vagy tölt fel egy másikat?";
$GLOBALS['strNewBannerFile']         = "Válassza ki a reklámként <br>használni kívánt képet<br><br>";
$GLOBALS['strNewBannerURL']         = "Kép hivatkozása (tart. http://)";
$GLOBALS['strURL']                     = "Cél hivatkozása (tart. http://)";
$GLOBALS['strKeyword']              = "Kulcsszó";
$GLOBALS['strTextBelow']             = "A kép alatti szöveg";
$GLOBALS['strWeight']                 = "Magasság";
$GLOBALS['strAlt']                     = "ALT szöveg";
$GLOBALS['strStatusText']            = "Szöveg az állapotsoron";
$GLOBALS['strBannerWeight']            = "Reklám fontossága";

// Banner (advanced)

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Nehezen módosítható hivatkozások keresése a Flash fájlban";
$GLOBALS['strConvertSWFLinks']        = "Flash hivatkozások konvertálása";
$GLOBALS['strHardcodedLinks']        = "Nehezen módosítható hivatkozások";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Az SWF fájl tömörítése a gyorsabb letöltés céljából (Flash 6 lejátszó szükséges)";
$GLOBALS['strOverwriteSource']        = "Forrás tulajdonságok felülírása";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML sablon";
$GLOBALS['strChooseNetwork']        = "Válassza ki az ön által használni kívánt sablont";
$GLOBALS['strMoreInformation']        = "Több információ...";
$GLOBALS['strTrackAdClicks']        = "Kattintások nyomkövetése";

// Banner (AdSense)

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Továbbítás beállításai";
$GLOBALS['strACL']                        = "Továbbítás";
$GLOBALS['strACLAdd']                     = "Új korlátozás hozzáadása";
$GLOBALS['strACLAdd_Key']                 = "Ú<u>j</u> korlátozás";
$GLOBALS['strNoLimitations']              = "Nincsenek korlátozások";
$GLOBALS['strApplyLimitationsTo']         = "Korlátozás alkalmazása a következőre";
$GLOBALS['strRemoveAllLimitations']       = "Minden korlátozás eltávolítása";
$GLOBALS['strEqualTo']                    = "egyenlő ezzel:";
$GLOBALS['strDifferentFrom']              = "eltérő ettől:";
$GLOBALS['strLaterThan']                  = "későbbi, mint";
$GLOBALS['strLaterThanOrEqual']           = "későbbi, vagy egyenlő ezzel:";
$GLOBALS['strEarlierThan']                = "korábbi, mint ";
$GLOBALS['strEarlierThanOrEqual']         = "korábbi, vagy azonos ezzel";
$GLOBALS['strContains']                   = "tartalmaz";
$GLOBALS['strNotContains']                = "nem tartalmaz";
$GLOBALS['strOnlyDisplayWhen']            = "A reklám megjelenítése csak ekkor:";
$GLOBALS['strWeekDay']                    = "Munkanap";
$GLOBALS['strTime']                       = "Idő";
$GLOBALS['strUserAgent']                  = "Felhasználói ügynök";
$GLOBALS['strDomain']                     = "Tartomány";
$GLOBALS['strClientIP']                   = "Ügyfél IP-címe";
$GLOBALS['strSource']                     = "Forrás";
$GLOBALS['strBrowser']                    = "Böngésző";
$GLOBALS['strOS']                         = "Operációs rendszer";
$GLOBALS['strReferer']                    = "Hivatkozó oldal";
$GLOBALS['strDeliveryLimitations']        = "Továbbítás korlátozásai";

$GLOBALS['strDeliveryCapping']            = "Továbbítás szüneteltetése";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];

// Website
$GLOBALS['strAffiliate']                = "Kiadó";
$GLOBALS['strAffiliates']                 = "Kiadók";
$GLOBALS['strAffiliatesAndZones']        = "Kiadók és zónák";
$GLOBALS['strAddNewAffiliate']            = "Új kiadó";
$GLOBALS['strAddNewAffiliate_Key']        = "Ú<u>j</u> kiadó";
$GLOBALS['strAddAffiliate']                = "Kiadó létrehozása";
$GLOBALS['strAffiliateProperties']        = "Kiadó tulajdonságai";
$GLOBALS['strAffiliateOverview']        = "Kiadó áttekintése";
$GLOBALS['strAffiliateHistory']            = "Kiadó előzményei";
$GLOBALS['strZonesWithoutAffiliate']    = "Kiadó nélküli zónák";
$GLOBALS['strMoveToNewAffiliate']        = "�?thelyezés új kiadóhoz";
$GLOBALS['strNoAffiliates']                = "Jelenleg nincsenek kiadók";
$GLOBALS['strConfirmDeleteAffiliate']    = "Valóban törli ezt a kiadót?";
$GLOBALS['strMakePublisherPublic']        = "A kiadóhoz tartozó zónák nyilvánossá tétele";
$GLOBALS['strAffiliateInvocation']      = "Beillesztő programkód";

// Website (properties)
$GLOBALS['strWebsite']                      = "Webhely";
$GLOBALS['strAllowAffiliateModifyInfo']     = "A felhasználó módosíthatja a saját beállításait";
$GLOBALS['strAllowAffiliateModifyZones']    = "A felhasználó módosíthatja a saját zónáit";
$GLOBALS['strAllowAffiliateLinkBanners']    = "A felhasználó kapcsolhat reklámokat a saját zónáihoz";
$GLOBALS['strAllowAffiliateAddZone']        = "A felhasználó adhat meg új zónákat";
$GLOBALS['strAllowAffiliateDeleteZone']     = "A felhasználó törölhet létező zónákat";

// Website (properties - payment information)
$GLOBALS['strCountry']                      = "Ország";
$GLOBALS['strTaxID']                        = "Adó azonosító";
$GLOBALS['strModeOfPayment']                = "Fizetési módok";

// Website (properties - other information)
$GLOBALS['strHelpFile']                     = "Súgó fájlok";

// Zone
$GLOBALS['strZone']                         = "Nincs";
$GLOBALS['strZones']                        = "Nincs";
$GLOBALS['strAddNewZone']                   = "Új zóna";
$GLOBALS['strAddNewZone_Key']               = "Ú<u>j</u> zóna";
$GLOBALS['strAddZone']                      = "Zóna létrehozása";
$GLOBALS['strModifyZone']                   = "Zóna módosítása";
$GLOBALS['strLinkedZones']                  = "Zónák kapcsolása";
$GLOBALS['strZoneOverview']                 = "Zóna áttekintése";
$GLOBALS['strZoneProperties']               = "Zóna tulajdonságai";
$GLOBALS['strZoneHistory']                  = "Zóna előzményei";
$GLOBALS['strNoZones']                      = "Jelenleg nincsenek zónák";
$GLOBALS['strConfirmDeleteZone']            = "Valóban törölni akarja ezt a zónát?";
$GLOBALS['strZoneType']                     = "Zóna típusa";
$GLOBALS['strBannerButtonRectangle']        = "Reklám, gomb vagy négyszög";
$GLOBALS['strInterstitial']                 = "Interstíciós vagy lebegő DHTML";
$GLOBALS['strPopup']                        = "Felbukkanó ablak";
$GLOBALS['strTextAdZone']                   = "Szöveges hirdetés";
$GLOBALS['strShowMatchingBanners']          = "Egyező reklámok megjelenítése";
$GLOBALS['strHideMatchingBanners']          = "Egyező reklámok elrejtése";


// Advanced zone settings
$GLOBALS['strAdvanced']                    = "Speciális";
$GLOBALS['strChains']                    = "Láncok";
$GLOBALS['strChainSettings']            = "Lánc beállításai";
$GLOBALS['strZoneNoDelivery']            = "Ha nem továbbíthatók reklámok <br>ebból a zónából, akkor próbálja meg...";
$GLOBALS['strZoneStopDelivery']            = "A továbbítás leállítása, és nincs reklám megjelenítés";
$GLOBALS['strZoneOtherZone']            = "A kiválasztott zóna megjelenítése ehelyett";
$GLOBALS['strZoneUseKeywords']            = "Reklám kiválasztása az alább beírt kulcsszavak alapján";
$GLOBALS['strZoneAppend']                = "A következő HTML kód mindenkori hozzáfűzése a zóna által megjelenített reklámokhoz";
$GLOBALS['strAppendSettings']            = "Hozzáfűzés beállításai";
$GLOBALS['strZonePrependHTML']            = "A HTML-kód hozzáfűzése a zóna által megjelenített szöveges hirdetések előtt";
$GLOBALS['strZoneAppendHTML']            = "A HTML-kód hozzáfűzése a zóna által megjelenített szöveges hirdetések után";
$GLOBALS['strZoneAppendType']            = "Hozzáfűzés típusa";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML kód";
$GLOBALS['strZoneAppendZoneSelection']    = "Felbukkanó vagy interstíciós ablak";
$GLOBALS['strZoneAppendSelectZone']        = "A következő felbukkanó vagy interstíciós ablakok mindenkori hozzáfűzése a zóna által megjelenített reklámok elé";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "A kiválasztott zónához kapcsolt reklámok jelenleg nem aktívak. <br>Ez az a zónalánc, ami után következik:";
$GLOBALS['strZoneProbNullPri']            = "Jelenleg nem aktívak a zónához kapcsolt reklámok.";
$GLOBALS['strZoneProbListChainLoop']    = "A zónalánc követése ismétlődő ciklust okozhat. A zónához történő továbbítás leáll.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Válassza ki a kapcsolt reklámok típusát";
$GLOBALS['strInteractive']                = "Interaktív";
$GLOBALS['strRawQueryString']            = "Kulcsszó";
$GLOBALS['strIncludedBanners']            = "Reklámok kapcsolása";
$GLOBALS['strLinkedBannersOverview']    = "Kapcsolt reklámok áttekintése";
$GLOBALS['strLinkedBannerHistory']        = "Kapcsolt reklám előzményei";
$GLOBALS['strNoZonesToLink']            = "Nincsenek ehhez a reklámhoz kapcsolható zónák";
$GLOBALS['strNoBannersToLink']            = "Jelenleg nincsenek ehhez a zónához kapcsolható reklámok";
$GLOBALS['strNoLinkedBanners']            = "Nincsenek ehhez a zónához kapcsolt reklámok";
$GLOBALS['strMatchingBanners']            = "{szám} egyező reklámok";
$GLOBALS['strNoCampaignsToLink']        = "Jelenleg nincsenek ehhez a zónához kapcsolt kampányok";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Nincsenek ehhez a kampányhoz kapcsolható zónák";
$GLOBALS['strSelectBannerToLink']        = "Válassza ki a zónához kapcsolni kívánt reklámot:";
$GLOBALS['strSelectCampaignToLink']        = "Válassza ki a zónához kapcsolni kívánt kampányt:";
$GLOBALS['strTrackerCodeSubject']          = "Követő kód hozzáadása";
$GLOBALS['strStatusDuplicate']          = "Duplikál";
$GLOBALS['strConnTypeSale']             = "Mentés";

// Statistics
$GLOBALS['strStats']                     = "Statisztikák";
$GLOBALS['strNoStats']                   = "Jelenleg nincs statisztika";
$GLOBALS['strConfirmResetStats']         = "Valóban törölni kívánja a létező teljes statisztikát?";
$GLOBALS['strGlobalHistory']             = "Globális előzmények";
$GLOBALS['strDailyHistory']              = "Napi előzmények";
$GLOBALS['strDailyStats']                = "Minden statisztika";
$GLOBALS['strWeeklyHistory']             = "Heti előzmények";
$GLOBALS['strMonthlyHistory']            = "Havi előzmények";
$GLOBALS['strCreditStats']               = "Követelési statisztika";
$GLOBALS['strDetailStats']               = "Részletes statisztika";
$GLOBALS['strTotalThisPeriod']           = "Időszak összes";
$GLOBALS['strAverageThisPeriod']         = "Időszak átlag";
$GLOBALS['strResetStats']                = "Alaphelyzetbe állítás";
$GLOBALS['strSourceStats']               = "Forrás statisztika";
$GLOBALS['strSelectSource']              = "Válassza ki a megtekinteni kívánt forrást:";
$GLOBALS['strSizeDistribution']          = "Méretek szerinti megoszlás";
$GLOBALS['strCountryDistribution']       = "Országok szerinti megoszlás";
$GLOBALS['strEffectivity']               = "Hatékonyság";
$GLOBALS['strTargetStats']               = "Célkijelölési statisztika";
$GLOBALS['strCampaignTarget']            = "Cél";
$GLOBALS['strTargetRatio']               = "Cél arány";
$GLOBALS['strTargetModifiedDay']         = "A nap folyamán módosításra kerültek a célok, a célkijelölés lehet, hogy nem pontos";
$GLOBALS['strTargetModifiedWeek']        = "A hét folyamán módosításra kerültek a célok, a célkijelölés lehet, hogy nem pontos";
$GLOBALS['strTargetModifiedMonth']       = "A hónap folyamán módosításra kerültek a célok, a célkijelölés lehet, hogy nem pontos";
$GLOBALS['strNoTargetStats']             = "Jelenleg nincs statisztika a célkijelölésről";
$GLOBALS['strBreakdownByDay']            = "Nap";
$GLOBALS['strBreakdownByWeek']           = "Hét";
$GLOBALS['strBreakdownByMonth']          = "Hónap";
$GLOBALS['strBreakdownByDow']            = "A hét napja";
$GLOBALS['strBreakdownByHour']           = "Óra";

// Hosts
$GLOBALS['strHosts']                = "�?llomások";
$GLOBALS['strTopHosts']             = "Népszerű kérő állomások";
$GLOBALS['strTopCountries']         = "Népszerű kérő országok";
$GLOBALS['strRecentHosts']             = "Legutóbbi kérő állomások";

// Expiration
$GLOBALS['strExpired']                = "Lejárt";
$GLOBALS['strExpiration']             = "Lejárat";
$GLOBALS['strNoExpiration']           = "Nincs megadva a lejárat dátuma";
$GLOBALS['strEstimated']              = "Becsült lejárat";
$GLOBALS['strCampaignStop']           = "Kampány név";

// Reports
$GLOBALS['strReports']                = "Jelentések";
$GLOBALS['strSelectReport']           = "Válassza ki a létrehozni kívánt jelentést";
$GLOBALS['strLimitations']            = "Korlátozások";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Összes hirdető";

// Userlog
$GLOBALS['strUserLog']                = "Felhasználói napló";
$GLOBALS['strUserLogDetails']        = "Felhasználói napló részletei";
$GLOBALS['strDeleteLog']            = "Napló törlése";
$GLOBALS['strAction']                = "Művelet";
$GLOBALS['strNoActionsLogged']        = "Nincs naplózott művelet";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Közvetlen kiválasztás";
$GLOBALS['strChooseInvocationType']        = "Válassza ki a reklámhívás típusát";
$GLOBALS['strGenerate']                    = "Generálás";
$GLOBALS['strParameters']                = "Jellemzők";
$GLOBALS['strFrameSize']                = "Keret mérete";
$GLOBALS['strBannercode']                = "Reklámkód";
$GLOBALS['strOptional']                    = "választható";


// Errors
$GLOBALS['strMySQLError']                       = "SQL hiba:";
$GLOBALS['strLogErrorClients']                  = "[phpAds] Hiba történt a hirdetők adatbázisból történő kiolvasásakor.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Hiba történt a reklámok adatbázisból történő kiolvasásakor.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Hiba történt a reklámletöltések adatbázisból történő kiolvasásakor.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Hiba történt a kattintások adatbázisból történő kiolvasásakor.";
$GLOBALS['strErrorViews']                       = "�?rja be a letöltések számát, vagy jelölje be a korlátlan jelölőnégyzetet !";
$GLOBALS['strErrorNegViews']                    = "A negatív letöltések nem engedélyezettek";
$GLOBALS['strErrorClicks']                      = "�?rja be a kattintások számát, vagy jelölje be a korlátlan jelölőnégyzetet !";
$GLOBALS['strErrorNegClicks']                   = "A negatív kattintások nem engedélyezettek";
$GLOBALS['strNoMatchesFound']                   = "Nincs találat";
$GLOBALS['strErrorOccurred']                    = "Hiba történt";
$GLOBALS['strErrorUploadSecurity']              = "Biztonsági probléma merült fel, a feltöltés leállt!";
$GLOBALS['strErrorUploadBasedir']               = "Nem lehet hozzáférni a feltöltött fájlhoz, valószínűleg a csökkentett mód, vagy az open_basedir korlátozások miatt";
$GLOBALS['strErrorUploadUnknown']               = "Nem lehet ismeretlen ok miatt hozzáférni a feltöltött fájlhoz. Ellenőrizze a PHP beállításokat";
$GLOBALS['strErrorStoreLocal']                  = "Hiba történt a reklám helyi könyvtárba történő mentésekor. Valószínűleg a rosszul megadott helyi mappa útvonala a magyarázata";
$GLOBALS['strErrorStoreFTP']                    = "Hiba történt a reklám FTP-kiszolgálóra történő feltöltésekor. Ez azért történhetett, mert a kiszolgáló nem elérhető, vagy hiba van az FTP-kiszolgáló beállításaiban";
$GLOBALS['strErrorDBPlain']                     = "Hiba történt az adatbázishoz történő hozzáféréskor";
$GLOBALS['strErrorDBSerious']                   = "Komoly probléma állapítható meg az adatbázissal kapcsolatban";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Valószínűleg sérült az adatbázis tábla, ezért javításra szorul. A sérült táblákkal kapcsolatban további részleteket olvashat az <i>Administrator guide</i> <i>Troubleshooting</i> fejezetében.";
$GLOBALS['strErrorDBContact']                   = "Vegye fel a kapcsolatot a kiszolgáló adminisztrátorával, és értesítse őt a problémáról.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";

//Validation


// Email
$GLOBALS['strMailSubject']                      = "Hirdetési jelentés";
$GLOBALS['strAdReportSent']                     = "A hirdetési jelentés elküldve";
$GLOBALS['strMailHeader']                       = "Tisztelt {contact}!\\n";
$GLOBALS['strMailBannerStats']                  = "Kérem, tekintse át az alábbiakban a {clientname} reklámstatisztikáját:";
$GLOBALS['strMailFooter']                       = "Üdvözlettel:\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "A következő reklámok törlésre kerültek, mert";
$GLOBALS['strMailNothingLeft']                  = "Ha szeretné weblapunkon folytatni a hirdetést, nyugodtan vegye fel velünk a kapcsolatot.\\nSzívesen állunk rendelkezésére.";
$GLOBALS['strClientDeactivated']                = "A kampány jelenleg nem aktív, mert";
$GLOBALS['strBeforeActivate']                   = "még nem érkezett el az aktiválás dátuma";
$GLOBALS['strAfterExpire']                      = "már elérkezett a lejárat dátuma";
$GLOBALS['strNoMoreClicks']                     = "már nincs több kattintás";
$GLOBALS['strWeightIsNull']                     = "fontosságát nullára állította";
$GLOBALS['strWarnClientTxt']                    = "A maradék kattintások vagy a reklámletöltések átlépték a (limit) korlátozást. \\nA reklámok letiltásra kerülnek, mert nem maradt már kattintás vagy letöltés. ";
$GLOBALS['strNoViewLoggedInInterval']           = "Egy reklámletöltés sem került naplózásra a jelentés időtartama alatt";
$GLOBALS['strNoClickLoggedInInterval']          = "Egy kattintás sem került naplózásra a jelentés időtartama alatt";
$GLOBALS['strMailReportPeriod']                 = "Ez a jelentés a {startdate} és {enddate} közti statisztikát tartalmazza.";
$GLOBALS['strMailReportPeriodAll']              = "Ez a jelentés a teljes statisztikát tartalmazza {enddate}-ig.";
$GLOBALS['strNoStatsForCampaign']               = "Nem áll rendelkezésre a kampány statisztikája";

// Priority
$GLOBALS['strPriority']                         = "Prioritás";

// Preferences
$GLOBALS['strPreferences']                      = "Preferenciák";
$GLOBALS['strAdminEmailWarnings']               = "Adminisztrátor e-mail címe";


// Statistics columns
// Long names
$GLOBALS['strImpressionSR']                     = "Megjelenés";
$GLOBALS['strActualImpressions']                = "Megjelenés";

    // Short names
$GLOBALS['strID_short']                         = "Azonosító";
$GLOBALS['strClicks_short']                     = "Kattintás";
$GLOBALS['strCTR_short']                        = "�?tkattintás";

// Global Settings
$GLOBALS['strGlobalSettings']               = "�?ltalános beállítások";
$GLOBALS['strGeneralSettings']              = "�?ltalános beállítások";
$GLOBALS['strMainSettings']                 = "Alapbeállítások";
$GLOBALS['strAdminSettings']                = "Adminisztrációs beállítások";


// Product Updates
$GLOBALS['strProductUpdates']         = "Termékfrissítés";

// Agency

// Channels


// Tracker Variables
$GLOBALS['strVariableDescription']     = "Leírás";


// Upload conversions
$GLOBALS['strYouHaveNoCampaigns']   = "Hirdetők és kampányok";


// Password recovery

// Audit


// Widget - Audit
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";



//confirmation messages











/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "k";
$GLOBALS['keyExpandAll']    = "k";
$GLOBALS['keyAddNew']        = "j";

// Market entities

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/


?>
