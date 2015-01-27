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

$GLOBALS['phpAds_DecimalPoint']         = ",";
$GLOBALS['phpAds_ThousandsSeperator']   = ".";

// Date & time configuration
$GLOBALS['date_format']                 = "%Y-%m-%d";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%Y-%m";
$GLOBALS['day_format']                  = "%m-%d";
$GLOBALS['week_format']                 = "%Y-%W";
$GLOBALS['weekiso_format']              = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Kezdőlap";
$GLOBALS['strHelp']                     = "Segítség";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Újrakezdés";
$GLOBALS['strNavigation']               = "Navigáció";
$GLOBALS['strShortcuts']                = "Gyorsgombok";
$GLOBALS['strActions']                  = "Actions";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Leltár";
$GLOBALS['strMaintenance']              = "Karbantartás";
$GLOBALS['strProbability']              = "Valószínűség";
$GLOBALS['strInvocationcode']           = "Beillesztő programkód";
$GLOBALS['strTrackerVariables']         = "Követő változók";
$GLOBALS['strBasicInformation']         = "Alapinformáció";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Megállapodás adatai";
$GLOBALS['strLoginInformation']         = "Belépési információk";
$GLOBALS['strLogoutURL']                = "Kilépést követő átirányítás URL-je. <br />Alapértelmezettként üres";
$GLOBALS['strAppendTrackerCode']        = "Követő kód hozzáadása";
$GLOBALS['strOverview']                 = "�?ttekintés";
$GLOBALS['strSearch']                   = "Kere<u>s</u>és";
$GLOBALS['strHistory']                  = "Előzmények";
$GLOBALS['strDetails']                  = "Részletek";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Elérhető frissítések keresése";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Tömör";
$GLOBALS['strVerbose']                  = "Részletes";
$GLOBALS['strUser']                     = "Felhasználó";
$GLOBALS['strEdit']                     = "Szerkeszt";
$GLOBALS['strCreate']                   = "Létrehoz";
$GLOBALS['strDuplicate']                = "Duplikál";
$GLOBALS['strCopyOf']                   = "Copy of";
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
$GLOBALS['strBack']                     = "Back";
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
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Teljes";
$GLOBALS['strTotal']                    = "Összesen";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "aktív";
$GLOBALS['strFrom']                     = "Mettől";
$GLOBALS['strTo']                       = "meddig";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "csatolva";
$GLOBALS['strDaysLeft']                 = "Hátralévő napok";
$GLOBALS['strCheckAllNone']             = "Összes kijelölve/üres";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "Össz<u>e</u>s kibontása";
$GLOBALS['strCollapseAll']              = "Összes be<u>c</u>sukása";
$GLOBALS['strShowAll']                  = "Összes megjelenítése";
$GLOBALS['strNoAdminInterface']         = "Az adminisztrációs felület jelenleg karbantartás miatt nem elérhető. A kampányok kiszolgálását ez nem akadályozza.";
$GLOBALS['strFilterBySource']           = "szűrés forrás alapján";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
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
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "Admin";
$GLOBALS['strWarning']                  = "Warning";
$GLOBALS['strNotice']                   = "Értesítés";
$GLOBALS['strRequiredField']            = "Required field";
$GLOBALS['strCloseWindow']              = "Close window";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "The dashboard can not be displayed";
$GLOBALS['strNoCheckForUpdates']        = "The dashboard cannot be displayed unless the<br />check for updates setting is enabled.";
$GLOBALS['strEnableCheckForUpdates']    = "Please enable the <a href='account-settings-update.php' target='_top'>check for updates</a> setting on the<br/><a href='account-settings-update.php' target='_top'>update settings</a> page.";
$GLOBALS['strChoosenDisableHomePage']   = "You have choosen to disable your Home page.";
$GLOBALS['strAccessHomePage']           = "Click here to access your Home page";
$GLOBALS['strEditSyncSettings']         = "and edit your synchronization settings";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "code";
$GLOBALS['strDashboardSystemMessage']   = "System message";
$GLOBALS['strDashboardErrorHelp']       = "If this error repeats please describe your problem in detail and post it on <a href='http://forum.revive-adserver.com/'>forum.revive-adserver.com/</a>.";

// Priority
$GLOBALS['strPriority']                 = "Prioritás";
$GLOBALS['strPriorityLevel']            = "Prioritási szint";
$GLOBALS['strPriorityTargeting']        = "Elosztás";
$GLOBALS['strPriorityOptimisation']     = "Vegyes"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Korlátozások";
$GLOBALS['strNoLimitations']            = "Nincsenek korlátozások";
$GLOBALS['strCapping']                  = "Capping";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

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
$GLOBALS['strWorkingAs']                = "Working as";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Working as";
$GLOBALS['strSwitchTo']                 = "Switch to";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s for...";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Add user";
$GLOBALS['strLinkUser_Key']             = "Add <u>u</u>ser";
$GLOBALS['strUsernameToLink']           = "Username of user to add";
$GLOBALS['strEmailToLink']              = "Email of user to add";
$GLOBALS['strNewUserWillBeCreated']     = "New user will be created";
$GLOBALS['strToLinkProvideEmail']       = "To add user, provide user's email";
$GLOBALS['strToLinkProvideUsername']    = "To add user, provide username";
$GLOBALS['strErrorWhileCreatingUser']   = "Error while creating user: %s";
$GLOBALS['strUserLinkedToAccount']      = "User has been added to account";
$GLOBALS['strUserAccountUpdated']       = "User account updated";
$GLOBALS['strUserUnlinkedFromAccount']  = "User has been removed from account";
$GLOBALS['strUserWasDeleted']           = "User has been deleted";
$GLOBALS['strUserNotLinkedWithAccount'] = "Such user is not linked with account";
$GLOBALS['strCantDeleteOneAdminUser']   = "You can't delete a user. At least one user needs to be linked with admin account.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Felhasználónév";
$GLOBALS['strLinkUserHelpEmail']        = "email address";
$GLOBALS['strLastLoggedIn']             = "Last logged in";
$GLOBALS['strDateLinked']               = "Date linked";
$GLOBALS['strUnlink']                   = "Remove";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removing user from last entity";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Removing user from last entity will cause the user to be deleted. Would you like to remove this user?";
$GLOBALS['strUnlinkAndDelete']          = "Remove &amp; delete user";
$GLOBALS['strUnlinkUser']               = "Remove user";
$GLOBALS['strUnlinkUserConfirmBody']    = "Are you sure you want to remove this user?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "User Access";
$GLOBALS['strAdminAccess']              = "Admin Access";
$GLOBALS['strUserProperties']           = "User Properties";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "Hitelesítés";
$GLOBALS['strWelcomeTo']                = "Üdvözli az";
$GLOBALS['strEnterUsername']            = "Adja meg felhasználónevét és jelszavát";
$GLOBALS['strEnterBoth']                = "Felhasználói nevét és jelszavát is adja meg";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "Login név (FTP felhasználó)";
$GLOBALS['strLogout']                   = "Kilépés";
$GLOBALS['strUsername']                 = "Felhasználónév";
$GLOBALS['strPassword']                 = "Jelszó";
$GLOBALS['strPasswordRepeat']           = "Jelszó ismét";
$GLOBALS['strAccessDenied']             = "Hozzáférés megtagadva";
$GLOBALS['strUsernameOrPasswordWrong']  = "Hibás felhasználónév vagy jelszó. Próbálja meg újra!";
$GLOBALS['strPasswordWrong']            = "Hibás jelszó.";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Lehet, hogy ön nem rendelkezik megfelelő jogosultsággal";
$GLOBALS['strDuplicateClientName']      = "A megadott felhasználónév foglalt, adjon meg másikat.";
$GLOBALS['strDuplicateAgencyName']      = "A megadott felhasználónév foglalt, adjon meg másikat.";
$GLOBALS['strInvalidPassword']          = "Az új jelszó érvénytelen, adjon meg másikat.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "A két jelszó különbözik.";
$GLOBALS['strRepeatPassword']           = "Jelszó ismét";
$GLOBALS['strOldPassword']              = "Régi jelszó";
$GLOBALS['strNewPassword']              = "Új jelszó";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "Kérések";
$GLOBALS['strImpressions']              = "Megjelenés";
$GLOBALS['strClicks']                   = "Kattintás";
$GLOBALS['strConversions']              = "Konverzió";
$GLOBALS['strCTRShort']                 = "�?tkattintás";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "�?tkattintás";
$GLOBALS['strCNVR']                     = "Értékesítési arány";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Összes letöltés";
$GLOBALS['strTotalClicks']              = "Összes kattintás";
$GLOBALS['strTotalConversions']         = "Összes konverzió";
$GLOBALS['strViewCredits']              = "Megjelenési keret";
$GLOBALS['strClickCredits']             = "Kattintási keret";
$GLOBALS['strConversionCredits']        = "Konverzió keret";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Date Time";
$GLOBALS['strTrackerID']                = "Tracker ID";
$GLOBALS['strTrackerName']              = "Tracker Name";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Reklámok";
$GLOBALS['strCampaigns']                = "Kampány";
$GLOBALS['strCampaignID']               = "Kampány azonosító";
$GLOBALS['strCampaignName']             = "Kampány név";
$GLOBALS['strCountry']                  = "Ország";
$GLOBALS['strStatsAction']              = "Action";
$GLOBALS['strWindowDelay']              = "Window delay";
$GLOBALS['strStatsVariables']           = "Változók";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Tenancy";
$GLOBALS['strFinanceCTR']               = "�?tkattintás";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

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
$GLOBALS['strHourFilter']               = "Hour Filter";
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
$GLOBALS['strNoClientsForBanners']          = "There are currently no advertisers defined. To add banners you need to <a href='advertiser-edit.php'>add new advertiser</a> and campaign first.";
$GLOBALS['strConfirmDeleteClient']          = "Valóban törli ezt a hirdetőt?";
$GLOBALS['strConfirmDeleteClients']         = "Do you really want to delete the selected advertisers?";
$GLOBALS['strConfirmResetClientStats']      = "Valóban törli ennek a hirdetőnek a létező statisztikáit?";
$GLOBALS['strSite']                         = "Méret";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "Inaktív hirdetők elrejtése";
$GLOBALS['strInactiveAdvertisersHidden']    = "inaktív hirdető elrejtve";
$GLOBALS['strOverallAdvertisers']           = "Hirdetők";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Hirdetők és kampányok";
// Advertisers properties
$GLOBALS['strContact']                          = "Kapcsolattartó";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "Hirdetési jelentés küldése e-mailben";
$GLOBALS['strNoDaysBetweenReports']             = "A jelentések közti napok száma";
$GLOBALS['strSendDeactivationWarning']          = "Figyelmeztetés küldése a kampány deaktiválásakor";
$GLOBALS['strAllowClientModifyInfo']            = "A felhasználó módosíthatja a saját beállításait";
$GLOBALS['strAllowClientModifyBanner']          = "A felhasználó módosíthatja a reklámait";
$GLOBALS['strAllowClientAddBanner']             = "A felhasználó feltöltheti a saját reklámait";
$GLOBALS['strAllowClientDisableBanner']         = "A felhasználó deaktiválhatja a saját reklámait";
$GLOBALS['strAllowClientActivateBanner']        = "A felhasználó aktiválhatja a saját reklámait";
$GLOBALS['strAllowClientViewTargetingStats']    = "Allow this user to view targeting statistics";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "Allow this user to import offline conversions";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Kampány";
$GLOBALS['strCampaigns']                    = "Kampány";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Összes kampány";
$GLOBALS['strActiveCampaigns']              = "Aktív kampány";
$GLOBALS['strAddCampaign']                  = "Új kampány";
$GLOBALS['strAddCampaign_Key']              = "Ú<u>j</u> kampány";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Új kampány létrehozása";
$GLOBALS['strModifyCampaign']               = "Kampány módosítása";
$GLOBALS['strMoveToNewCampaign']            = "�?thelyezés új kampányba";
$GLOBALS['strBannersWithoutCampaign']       = "Kampány nélküli reklámok";
$GLOBALS['strDeleteAllCampaigns']           = "Minden kampány törlése";
$GLOBALS['strLinkedCampaigns']              = "Linked Campaigns";
$GLOBALS['strCampaignStats']                = "Kampány statisztika";
$GLOBALS['strCampaignProperties']           = "Kampány tulajdonságai";
$GLOBALS['strCampaignOverview']             = "Kampány áttekintése";
$GLOBALS['strCampaignHistory']              = "Kampány előzményei";
$GLOBALS['strNoCampaigns']                  = "Jelenleg nincsenek kampányok";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Valóban törli ennek a hirdetőnek az összes kampányát?";
$GLOBALS['strConfirmDeleteCampaign']        = "Valóban törli ezt a kampányt?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Do you really want to delete the selected campaigns?";
$GLOBALS['strConfirmResetCampaignStats']    = "Valóban törli ennek a kampánynak a teljes statisztikáját?";
$GLOBALS['strShowParentAdvertisers']        = "Show parent advertisers";
$GLOBALS['strHideParentAdvertisers']        = "Hide parent advertisers";
$GLOBALS['strHideInactiveCampaigns']        = "Inaktív kampányok elrejtése";
$GLOBALS['strInactiveCampaignsHidden']      = "inaktív kampány elrejtve";
$GLOBALS['strContractDetails']              = "Contract details";
$GLOBALS['strInventoryDetails']             = "Inventory details";
$GLOBALS['strPriorityInformation']          = "Priority in relation to other campaigns";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Kampány";
$GLOBALS['strHiddenAd']                     = "Advertisement";
$GLOBALS['strHiddenAdvertiser']             = "Hirdető";
$GLOBALS['strHiddenTracker']                = "Tracker";
$GLOBALS['strHiddenWebsite']              = "Website";
$GLOBALS['strHiddenZone']                   = "Nincs";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Companion positioning";
$GLOBALS['strSelectUnselectAll']            = "Select / Unselect All";
$GLOBALS['strConfirmOverwrite']             = "Saving these changes will overwrite any individual banner-zone links. Are you sure?";
$GLOBALS['strCampaignsOfAdvertiser']        = "of"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie']           = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns']    = "Calculated for all campaigns";
$GLOBALS['strCalculatedForThisCampaign']    = "Calculated for this campaign";
$GLOBALS['strLinkingZonesProblem']          = "Problem occurred when linking zones";
$GLOBALS['strUnlinkingZonesProblem']        = "Problem occurred when unlinking zones";
$GLOBALS['strZonesLinked']                  = "zone(s) linked";
$GLOBALS['strZonesUnlinked']                = "zone(s) unlinked";
$GLOBALS['strZonesSearch']                  = "Search";
$GLOBALS['strZonesSearchTitle']             = "Search zones and websites by name";
$GLOBALS['strNoWebsitesAndZones']           = "No websites and zones";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "in category";
$GLOBALS['strNoWebsitesAndZonesText']       = "with \"%s\" in name";
$GLOBALS['strToLink']                       = "to link";
$GLOBALS['strToUnlink']                     = "to unlink";
$GLOBALS['strLinked']                       = "Linked";
$GLOBALS['strAvailable']                    = "Available";
$GLOBALS['strShowing']                      = "Showing";
$GLOBALS['strAllCategories']                = "all categories";
$GLOBALS['strUncategorized']                = "Uncategorized";
$GLOBALS['strEditZone']                     = "Edit zone";
$GLOBALS['strEditWebsite']                  = "Edit website";


// Campaign properties
$GLOBALS['strDontExpire']                       = "A kampány nem jár le a megadott napon";
$GLOBALS['strActivateNow']                      = "A kampány azonnali aktiválása";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Alacsony";
$GLOBALS['strHigh']                             = "Magas";
$GLOBALS['strExpirationDate']                   = "Lejárat dátuma";
$GLOBALS['strExpirationDateComment']            = "Campaign will finish at the end of this day";
$GLOBALS['strActivationDate']                   = "Aktiválás dátuma";
$GLOBALS['strActivationDateComment']            = "Campaign will commence at the start of this day";
$GLOBALS['strRevenueInfo']                      = "Revenue Information";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "Impressions Remaining";
$GLOBALS['strClicksRemaining']                  = "Clicks Remaining";
$GLOBALS['strConversionsRemaining']             = "Conversions Remaining";
$GLOBALS['strImpressionsBooked']                = "Impressions Booked";
$GLOBALS['strClicksBooked']                     = "Clicks Booked";
$GLOBALS['strConversionsBooked']                = "Conversions Booked";
$GLOBALS['strCampaignWeight']                   = "A kampány fontossága";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimise delivery of this campaign.";
$GLOBALS['strAnonymous']                        = "Hide the advertiser and websites of this campaign.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "A reklám megjelenítése alacsony prioritással ebben a reklámban.<br> Ez a kampány kerül felhasználásra azon hátralévő letöltések megjelenítésére, melyeket nem használnak a magas prioritású kampányok.";
$GLOBALS['strTargetPerDay']                     = "naponta.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "A maradék reklámletöltések egyenletes elosztása a maradék napok számán túl. A reklámletöltések célzott száma minden napnak megfelelően kerül beállításra.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "The type of this campaign has been set to Remnant, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "A kampány prioritását magasra állította, \\nviszont nem adta meg a reklámletöltések célzott számát. \\nEz a kampány deaktiválását eredményezi, és \\na reklámok továbbítására nem kerül sor a reklámletöltések \\ncélzott számának megadásáig. \\n\\nBiztos, hogy folytatja?";
$GLOBALS['strCampaignStatusPending']            = "Pending";
$GLOBALS['strCampaignStatusInactive']           = "aktív";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Paused";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Restarted";
$GLOBALS['strCampaignStatusDeleted']            = "Töröl";
$GLOBALS['strCampaignApprove']                  = "Approve";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "Pause";
$GLOBALS['strCampaignPauseDescription']         = "pause this campaign temporarily";
$GLOBALS['strCampaignRestart']                  = "Resume";
$GLOBALS['strCampaignRestartDescription']       = "resume this campaign";
$GLOBALS['strCampaignStatus']                   = "Campaign status";
$GLOBALS['strReasonForRejection']               = "Reason for rejection";
$GLOBALS['strReasonSiteNotLive']                = "Site not live";
$GLOBALS['strReasonBadCreative']                = "Inappropriate creative";
$GLOBALS['strReasonBadUrl']                     = "Inappropriate destination url";
$GLOBALS['strReasonBreakTerms']                 = "Website againts terms and conditions";
$GLOBALS['strChangeStatus']                     = "Change status";
$GLOBALS['strCampaignType']                     = "Kampány név";
$GLOBALS['strType']                             = "Type";
$GLOBALS['strContract']                         = "Contract";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Contract";
$GLOBALS['strStandardContractInfo']             = "Contract campaigns are for smoothly delivering the impressions
    required to achieve a specified time-critical performance requirement. That is, Contract campaigns are for when
    an advertiser has paid specifically to have a given number of impressions, clicks and/or conversions to be
    achieved either between two dates, or per day.";
$GLOBALS['strRemnant']                          = "Remnant";
$GLOBALS['strRemnantInfo']                      = "The default campaign type. Remnant campaigns have lots of different
    delivery options, and you should ideally always have at least one Remnant campaign linked to every zone, to ensure
    that there is always something to show. Use Remnant campaigns to display house banners, ad-network banners, or even
    direct advertising that has been sold, but where there is not a time-critical performance requirement for the
    campaign to adhere to.";
$GLOBALS['strECPMInfo']                         = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strContractCampaign']                 = "Contract Campaign";
$GLOBALS['strRemnantCampaign']                  = "Remnant Campaign";
$GLOBALS['strPricing']                          = "Pricing";
$GLOBALS['strPricingModel']                     = "Pricing model";
$GLOBALS['strSelectPricingModel']               = "-- select model --";
$GLOBALS['strRatePrice']                        = "Rate / Price";
$GLOBALS['strMinimumImpressions']               = "Minimum daily impressions";
$GLOBALS['strLimit']                            = "Limit";
$GLOBALS['strLowExclusiveDisabled']             = "You cannot change this campaign to Remnant or Exclusive, since both an end date and either of impressions/clicks/conversions limit are set. <br>In order to change type, you need to set no expiry date or remove limits.";
$GLOBALS['strCannotSetBothDateAndLimit']        = "You cannot set both an end date and limit for a Remnant or Exclusive campaign.<br>If you need to set both an end date and limit impressions/clicks/conversions please use a non-exclusive Contract campaign.";
$GLOBALS['strWhyDisabled']                      = "why is it disabled?";
$GLOBALS['strBackToCampaigns']                  = "Back to campaigns";
$GLOBALS['strCampaignBanners']                  = "Campaign's banners";
$GLOBALS['strCookies']                          = "Cookies";

// Tracker
$GLOBALS['strTracker']                    = "Tracker";
$GLOBALS['strTrackers']                   = "Trackers";
$GLOBALS['strTrackerOverview']            = "Tracker overview";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "Add new tracker";
$GLOBALS['strAddTracker_Key']             = "Add <u>n</u>ew tracker";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Do you really want to delete all trackers owned by this advertiser?";
$GLOBALS['strConfirmDeleteTrackers']      = "Do you really want to delete all selected trackers?";
$GLOBALS['strConfirmDeleteTracker']       = "Do you really want to delete this tracker?";
$GLOBALS['strDeleteAllTrackers']          = "Delete all trackers";
$GLOBALS['strTrackerProperties']          = "Tracker Properties";
$GLOBALS['strTrackerOverview']            = "Tracker overview";
$GLOBALS['strModifyTracker']              = "Modify tracker";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "Default Status";
$GLOBALS['strStatus']                     = "Status";
$GLOBALS['strLinkedTrackers']             = "Linked Trackers";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Conversion window";
$GLOBALS['strUniqueWindow']               = "Unique window";
$GLOBALS['strClick']                      = "Kattintás";
$GLOBALS['strView']                       = "View";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Megjelenés";
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
$GLOBALS['strConversionType']             = "Conversion Type";
$GLOBALS['strLinkCampaignsByDefault']     = "Link newly created campaigns by default";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Reklám";
$GLOBALS['strBanners']                       = "Reklámok";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Új reklám";
$GLOBALS['strAddBanner_Key']                 = "Ú<u>j</u> reklám";
$GLOBALS['strBannerToCampaign']              = "to campaign";
$GLOBALS['strModifyBanner']                  = "Reklám módosítása";
$GLOBALS['strActiveBanners']                 = "Aktív reklám";
$GLOBALS['strTotalBanners']                  = "Összes reklám";
$GLOBALS['strShowBanner']                    = "Nézet";
$GLOBALS['strShowAllBanners']                = "Minden reklám megjelenítése";
$GLOBALS['strShowBannersNoAdViews']          = "Reklámok megjelenítése reklámletöltések nélkül";
$GLOBALS['strShowBannersNoAdClicks']         = "Reklámok megjelenítése kattintások nélkül";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Minden reklám törlése";
$GLOBALS['strActivateAllBanners']            = "Minden reklám aktiválása";
$GLOBALS['strDeactivateAllBanners']          = "Minden reklám deaktiválása";
$GLOBALS['strBannerOverview']                = "Reklám áttekintése";
$GLOBALS['strBannerProperties']              = "Reklám tulajdonságai";
$GLOBALS['strBannerHistory']                 = "Reklám előzményei";
$GLOBALS['strBannerNoStats']                 = "Ennek a reklámnak a statisztikája nem áll rendelkezésre";
$GLOBALS['strNoBanners']                     = "Jelenleg nincsenek reklámok";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "There are currently no banners defined, because there are no advertisers. To create a banner, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strConfirmDeleteBanner']           = "Valóban törli ezt a reklámot?";
$GLOBALS['strConfirmDeleteBanners']          = "Deleting these banners will also remove their statistics.\\nDo you really want to delete the selected banners?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Valóban törli az ehhez a kampányhoz tartozó reklámokat?";
$GLOBALS['strConfirmResetBannerStats']       = "Valóban törli ennek a reklámnak a teljes statisztikáját?";
$GLOBALS['strShowParentCampaigns']           = "Szülő kampányok megjelenítése";
$GLOBALS['strHideParentCampaigns']           = "Szülő kampányok elrejtése";
$GLOBALS['strHideInactiveBanners']           = "Inaktív reklámok elrejtése";
$GLOBALS['strInactiveBannersHidden']         = "inaktív reklám elrejtve";
$GLOBALS['strAppendOthers']                  = "Egyebek hozzáfűzése";
$GLOBALS['strAppendTextAdNotPossible']       = "Szöveges hirdetésekhez nem lehet másik reklámot hozzáfűzni.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Warning, possibly missing ";
$GLOBALS['strWarningMissingClosing']         = " closing tag '>'";
$GLOBALS['strWarningMissingOpening']         = " opening tag '<'";
$GLOBALS['strSubmitAnyway']       		     = "Submit Anyway";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Banner Preferences";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Default Banners";
$GLOBALS['strDefaultBannerUrl']                      = "Default Image URL";
$GLOBALS['strDefaultBannerDestination']              = "Alapértelmezett cél URL";
$GLOBALS['strAllowedBannerTypes']                    = "Allowed Banner Types";
$GLOBALS['strTypeSqlAllow']                          = "Allow SQL Local Banners";
$GLOBALS['strTypeWebAllow']                          = "Allow Webserver Local Banners";
$GLOBALS['strTypeUrlAllow']                          = "Allow External Banners";
$GLOBALS['strTypeHtmlAllow']                         = "Allow HTML Banners";
$GLOBALS['strTypeTxtAllow']                          = "Allow Text Ads";
$GLOBALS['strTypeHtmlSettings']                      = "HTML Banner Options";
$GLOBALS['strTypeHtmlAuto']                          = "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']                           = "Allow PHP expressions to be executed from within a HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Válassza ki a reklámtípust";
$GLOBALS['strMySQLBanner']             = "Helyi reklám (SQL)";
$GLOBALS['strWebBanner']               = "Helyi reklám (Webkiszolgáló)";
$GLOBALS['strURLBanner']               = "Külső reklám";
$GLOBALS['strHTMLBanner']              = "HTML reklám";
$GLOBALS['strTextBanner']              = "Szöveges hirdetés";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Megtartja a létező képet, <br>vagy tölt fel egy másikat?";
$GLOBALS['strUploadOrKeepAlt']        = "Do you wish to keep your <br />existing backup image, or do you <br />want to upload another?";
$GLOBALS['strNewBannerFile']         = "Válassza ki a reklámként <br>használni kívánt képet<br><br>";
$GLOBALS['strNewBannerFileAlt']     = "Select a backup image you <br />want to use in case browsers<br />don't support rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "Kép hivatkozása (tart. http://)";
$GLOBALS['strURL']                     = "Cél hivatkozása (tart. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Kulcsszó";
$GLOBALS['strTextBelow']             = "A kép alatti szöveg";
$GLOBALS['strWeight']                 = "Magasság";
$GLOBALS['strAlt']                     = "ALT szöveg";
$GLOBALS['strStatusText']            = "Szöveg az állapotsoron";
$GLOBALS['strBannerWeight']            = "Reklám fontossága";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Generic HTML Banner";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generic";
$GLOBALS['strSwfTransparency']		   = "Allow transparent background";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Nehezen módosítható hivatkozások keresése a Flash fájlban";
$GLOBALS['strConvertSWFLinks']        = "Flash hivatkozások konvertálása";
$GLOBALS['strHardcodedLinks']        = "Nehezen módosítható hivatkozások";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Az SWF fájl tömörítése a gyorsabb letöltés céljából (Flash 6 lejátszó szükséges)";
$GLOBALS['strOverwriteSource']        = "Forrás tulajdonságok felülírása";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML sablon";
$GLOBALS['strChooseNetwork']        = "Válassza ki az ön által használni kívánt sablont";
$GLOBALS['strMoreInformation']        = "Több információ...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Kattintások nyomkövetése";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Továbbítás beállításai";
$GLOBALS['strACL']                        = "Továbbítás";
$GLOBALS['strACLAdd']                     = "Új korlátozás hozzáadása";
$GLOBALS['strACLAdd_Key']                 = "Ú<u>j</u> korlátozás";
$GLOBALS['strNoLimitations']              = "Nincsenek korlátozások";
$GLOBALS['strApplyLimitationsTo']         = "Korlátozás alkalmazása a következőre";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Minden korlátozás eltávolítása";
$GLOBALS['strEqualTo']                    = "egyenlő ezzel:";
$GLOBALS['strDifferentFrom']              = "eltérő ettől:";
$GLOBALS['strLaterThan']                  = "későbbi, mint";
$GLOBALS['strLaterThanOrEqual']           = "későbbi, vagy egyenlő ezzel:";
$GLOBALS['strEarlierThan']                = "korábbi, mint ";
$GLOBALS['strEarlierThanOrEqual']         = "korábbi, vagy azonos ezzel";
$GLOBALS['strContains']                   = "tartalmaz";
$GLOBALS['strNotContains']                = "nem tartalmaz";
$GLOBALS['strGreaterThan']                = "is greater than";
$GLOBALS['strLessThan']                   = "is less than";
$GLOBALS['strAND']                        = "AND";                          // logical operator
$GLOBALS['strOR']                         = "OR";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "A reklám megjelenítése csak ekkor:";
$GLOBALS['strWeekDay']                    = "Munkanap";
$GLOBALS['strWeekDays']                   = "Weekdays";
$GLOBALS['strTime']                       = "Idő";
$GLOBALS['strUserAgent']                  = "Felhasználói ügynök";
$GLOBALS['strDomain']                     = "Tartomány";
$GLOBALS['strClientIP']                   = "Ügyfél IP-címe";
$GLOBALS['strSource']                     = "Forrás";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Böngésző";
$GLOBALS['strOS']                         = "Operációs rendszer";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "City Name";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Hivatkozó oldal";
$GLOBALS['strDeliveryLimitations']        = "Továbbítás korlátozásai";

$GLOBALS['strDeliveryCapping']            = "Továbbítás szüneteltetése";
$GLOBALS['strDeliveryCappingReset']       = "Reset view counters after:";
$GLOBALS['strDeliveryCappingTotal']       = "in total";
$GLOBALS['strDeliveryCappingSession']     = "per session";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Limit banner views to:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Limit campaign views to:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Limit zone views to:";

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
$GLOBALS['strConfirmDeleteAffiliates']   = "Do you really want to delete the selected websites?";
$GLOBALS['strMakePublisherPublic']        = "A kiadóhoz tartozó zónák nyilvánossá tétele";
$GLOBALS['strAffiliateInvocation']      = "Beillesztő programkód";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Total websites";
$GLOBALS['strInactiveAffiliatesHidden'] = "inactive website(s) hidden";
$GLOBALS['strShowParentAffiliates']     = "Show parent websites";
$GLOBALS['strHideParentAffiliates']     = "Hide parent websites";

// Website (properties)
$GLOBALS['strWebsite']                      = "Webhely";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "A felhasználó módosíthatja a saját beállításait";
$GLOBALS['strAllowAffiliateModifyZones']    = "A felhasználó módosíthatja a saját zónáit";
$GLOBALS['strAllowAffiliateLinkBanners']    = "A felhasználó kapcsolhat reklámokat a saját zónáihoz";
$GLOBALS['strAllowAffiliateAddZone']        = "A felhasználó adhat meg új zónákat";
$GLOBALS['strAllowAffiliateDeleteZone']     = "A felhasználó törölhet létező zónákat";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Allow this user to generate invocation code";
$GLOBALS['strAllowAffiliateZoneStats']      = "Allow this user to view zone statistics";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Allow this user to only view approved or pending conversions";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Payment information";
$GLOBALS['strAddress']                      = "Address";
$GLOBALS['strPostcode']                     = "Postcode";
$GLOBALS['strCity']                         = "City Name";
$GLOBALS['strCountry']                      = "Ország";
$GLOBALS['strPhone']                        = "Phone";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Account contact";
$GLOBALS['strPayeeName']                    = "Payee name";
$GLOBALS['strTaxID']                        = "Adó azonosító";
$GLOBALS['strModeOfPayment']                = "Fizetési módok";
$GLOBALS['strPaymentChequeByPost']          = "Cheque by post";
$GLOBALS['strCurrency']                     = "Currency";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Other information";
$GLOBALS['strUniqueUsersMonth']             = "Unique users/month";
$GLOBALS['strUniqueViewsMonth']             = "Unique views/month";
$GLOBALS['strPageRank']                     = "Page rank";
$GLOBALS['strCategory']                     = "Category";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Súgó fájlok";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Website's zones";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Nincs";
$GLOBALS['strZones']                        = "Nincs";
$GLOBALS['strAddNewZone']                   = "Új zóna";
$GLOBALS['strAddNewZone_Key']               = "Ú<u>j</u> zóna";
$GLOBALS['strAddZone']                      = "Zóna létrehozása";
$GLOBALS['strModifyZone']                   = "Zóna módosítása";
$GLOBALS['strZoneToWebsite']                = "to website";
$GLOBALS['strLinkedZones']                  = "Zónák kapcsolása";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Zóna áttekintése";
$GLOBALS['strZoneProperties']               = "Zóna tulajdonságai";
$GLOBALS['strZoneHistory']                  = "Zóna előzményei";
$GLOBALS['strNoZones']                      = "Jelenleg nincsenek zónák";
$GLOBALS['strNoZonesAddWebsite']            = "There are currently no zones defined, because there are no websites. To create a zone, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strConfirmDeleteZone']            = "Valóban törölni akarja ezt a zónát?";
$GLOBALS['strConfirmDeleteZones']           = "Do you really want to delete the selected zones?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Zóna típusa";
$GLOBALS['strBannerButtonRectangle']        = "Reklám, gomb vagy négyszög";
$GLOBALS['strInterstitial']                 = "Interstíciós vagy lebegő DHTML";
$GLOBALS['strPopup']                        = "Felbukkanó ablak";
$GLOBALS['strTextAdZone']                   = "Szöveges hirdetés";
$GLOBALS['strEmailAdZone']                  = "Email/Newsletter zone";
$GLOBALS['strZoneClick']                    = "Click tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Egyező reklámok megjelenítése";
$GLOBALS['strHideMatchingBanners']          = "Egyező reklámok elrejtése";
$GLOBALS['strBannerLinkedAds']              = "Banners linked to the zone";
$GLOBALS['strCampaignLinkedAds']            = "Campaigns linked to the zone";
$GLOBALS['strTotalZones']                   = "Total zones";
$GLOBALS['strInactiveZonesHidden']          = "inactive zone(s) hidden";
$GLOBALS['strWarnChangeZoneType']           = "Changing the zone type to text or email will unlink all banners/campaigns due to restrictions of these zone types
                                                <ul>
                                                    <li>Text zones can only be linked to text ads</li>
                                                    <li>Email zone campaigns can only have one active banner at a time</li>
                                                </ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Changing the zone size will unlink any banners that are not the new size, and will add any banners from linked campaigns which are the new size';
$GLOBALS['strWarnChangeBannerSize']         = 'Changing the banner size will unlink this banner from any zones that are not the new size, and if this banner\'s <strong>campaign</strong> is linked to a zone of the new size, this banner will be automatically linked';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Inventory Forecasting';
$GLOBALS['strZonesOfWebsite']               = 'in'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones']                  = "Back to zones";

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)']        = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)']        = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Button 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Button 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Rectangle (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Square Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Medium Rectangle (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Large Rectangle (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Wide Skyscraper (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 3:1 Rectangle (300 x 100)";

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
$GLOBALS['strZoneForecasting']            = "Zone Forecasting settings";
$GLOBALS['strZonePrependHTML']            = "A HTML-kód hozzáfűzése a zóna által megjelenített szöveges hirdetések előtt";
$GLOBALS['strZoneAppendHTML']            = "A HTML-kód hozzáfűzése a zóna által megjelenített szöveges hirdetések után";
$GLOBALS['strZoneAppendNoBanner']        = "Prepend/Append even if no banner delivered";
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
$GLOBALS['strLinkedBanners']            = "Link individual banners";
$GLOBALS['strCampaignDefaults']            = "Link banners by parent campaign";
$GLOBALS['strLinkedCategories']         = "Link banners by category";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
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
$GLOBALS['strNoTrackersToLink']            = "There are currently no trackers available which can be linked to this campaign";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Nincsenek ehhez a kampányhoz kapcsolható zónák";
$GLOBALS['strSelectBannerToLink']        = "Válassza ki a zónához kapcsolni kívánt reklámot:";
$GLOBALS['strSelectCampaignToLink']        = "Válassza ki a zónához kapcsolni kívánt kampányt:";
$GLOBALS['strSelectAdvertiser']         = "Select Advertiser";
$GLOBALS['strSelectPlacement']          = "Select Campaign";
$GLOBALS['strSelectAd']                 = "Select Banner";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Követő kód hozzáadása";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Pending";
$GLOBALS['strStatusApproved']           = "Approved";
$GLOBALS['strStatusDisapproved']        = "Disapproved";
$GLOBALS['strStatusDuplicate']          = "Duplikál";
$GLOBALS['strStatusOnHold']             = "On Hold";
$GLOBALS['strStatusIgnore']             = "Ignore";
$GLOBALS['strConnectionType']           = "Type";
$GLOBALS['strConnTypeSale']             = "Mentés";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Signup";
$GLOBALS['strShortcutEditStatuses'] = "Edit statuses";
$GLOBALS['strShortcutShowStatuses'] = "Show statuses";

// Statistics
$GLOBALS['strStats']                     = "Statisztikák";
$GLOBALS['strNoStats']                   = "Jelenleg nincs statisztika";
$GLOBALS['strNoTargetingStats']          = "There are currently no targeting statistics available";
$GLOBALS['strNoStatsForPeriod']          = "There are currently no statistics available for the period %s to %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "There are currently no targeting statistics available for the period %s to %s";
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
$GLOBALS['strPublisherDistribution']     = "Website Distribution";
$GLOBALS['strCampaignDistribution']      = "Campaign Distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Alaphelyzetbe állítás";
$GLOBALS['strSourceStats']               = "Forrás statisztika";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
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
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "View by";
$GLOBALS['strBreakdownByDay']            = "Nap";
$GLOBALS['strBreakdownByWeek']           = "Hét";
$GLOBALS['strBreakdownByMonth']          = "Hónap";
$GLOBALS['strBreakdownByDow']            = "A hét napja";
$GLOBALS['strBreakdownByHour']           = "Óra";
$GLOBALS['strItemsPerPage']              = "Items per page";
$GLOBALS['strDistributionHistory']       = "Distribution history";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Show <u>G</u>raph of Statistics";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>xport Statistics to Excel";
$GLOBALS['strGDnotEnabled']              = "You must have GD enabled in PHP to display graphs. <br />Please see <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for more information, including how to install GD on your server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

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
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Kampány név";

// Reports
$GLOBALS['strReports']                = "Jelentések";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Válassza ki a létrehozni kívánt jelentést";
$GLOBALS['strStartDate']              = "Start Date";
$GLOBALS['strEndDate']                = "End Date";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Korlátozások";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Összes hirdető";
$GLOBALS['strAnonAdvertisers']           = "Anonymous advertisers";
$GLOBALS['strAllPublishers']             = "All websites";
$GLOBALS['strAnonPublishers']            = "Anonymous websites";
$GLOBALS['strAllAvailZones']             = "All available zones";

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
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "választható";
$GLOBALS['strBackToTheList']            = "Go back to report list";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
$GLOBALS['strCharset']                  = "Character set";
$GLOBALS['strAutoDetect']                   = "Auto-detect";
$GLOBALS['strCacheBusterComment']       = "  * Replace all instances of {random} with
  * a generated random number (or timestamp).
  *";
$GLOBALS['strSSLBackupComment']         = "
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment']       = "
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";

$GLOBALS['strThirdPartyComment']        = "
  * Don't forget to replace the '{clickurl}' text with
  * the click tracking URL if this ad is to be delivered through a 3rd
  * party (non-Max) adserver.
  *";

// Errors
$GLOBALS['strMySQLError']                       = "SQL hiba:";
$GLOBALS['strErrorDatabaseConnetion']           = "Database connection error.";
$GLOBALS['strErrorCantConnectToDatabase']       = "A fatal error occurred %s can't connect to the database. Because
                                                   of this it isn't possible to use the administrator interface. The delivery
                                                   of banners might also be affected. Possible reasons for the problem are:
                                                   <ul>
                                                     <li>The database server isn't functioning at the moment</li>
                                                     <li>The location of the database server has changed</li>
                                                     <li>The username or password used to contact the database server are not correct</li>
                                                     <li>PHP has not loaded the MySQL Extension</li>
                                                   </ul>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] Hiba történt a hirdetők adatbázisból történő kiolvasásakor.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Hiba történt a reklámok adatbázisból történő kiolvasásakor.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Hiba történt a reklámletöltések adatbázisból történő kiolvasásakor.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Hiba történt a kattintások adatbázisból történő kiolvasásakor.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] An error occurred while trying to fetch the Conversions from the database.";
$GLOBALS['strErrorViews']                       = "�?rja be a letöltések számát, vagy jelölje be a korlátlan jelölőnégyzetet !";
$GLOBALS['strErrorNegViews']                    = "A negatív letöltések nem engedélyezettek";
$GLOBALS['strErrorClicks']                      = "�?rja be a kattintások számát, vagy jelölje be a korlátlan jelölőnégyzetet !";
$GLOBALS['strErrorNegClicks']                   = "A negatív kattintások nem engedélyezettek";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
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
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "It was not possible to link this banner to this zone because:";
$GLOBALS['strUnableToLinkBanner']               = "Cannot link this banner: ";
$GLOBALS['strErrorEditingCampaign']             = "Error updating campaign:";
$GLOBALS['strUnableToChangeCampaign']           = "Cannot apply this change because:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Cannot apply this change because:";
$GLOBALS['strDatesConflict']                    = "Dates of the campaign you are trying to link overlap with the dates of a campaign already linked ";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Some of these statistics were logged in a non-UTC timezone, and may not be displayed in the correct timezone.";
$GLOBALS['strWarningInaccurateReadMore']        = "Read more about this";
$GLOBALS['strWarningInaccurateReport']          = "Some of the statistics in this report were logged in a non-UTC timezone, and may not be displayed in the correct timezone";

//Validation
$GLOBALS['strRequiredFieldLegend']              = "denotes required field";
$GLOBALS['strFormContainsErrors']               = "Form contains errors, please correct the marked fields below.";
$GLOBALS['strRequiredField']                    = "Required field";
$GLOBALS['strXRequiredField']                   = "%s is required";
$GLOBALS['strMaxLengthField']                   = "Please enter maximum %s characters";
$GLOBALS['strEmailField']                       = "Please enter a valid email";
$GLOBALS['strNumericField']                     = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField']             = "Must be greater than 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s must be greater than 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s must be a positive whole number";
$GLOBALS['strXUniqueField']                     = "%s with this %s already exists";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "Must be a decimal with maximum %s decimal places";
$GLOBALS['strInvalidWebsiteURL']                = "Invalid Website URL";


// Email
$GLOBALS['strSirMadam']                         = "Sir/Madam";
$GLOBALS['strMailSubject']                      = "Hirdetési jelentés";
$GLOBALS['strAdReportSent']                     = "A hirdetési jelentés elküldve";
$GLOBALS['strMailHeader']                       = "Tisztelt {contact}!\\n";
$GLOBALS['strMailBannerStats']                  = "Kérem, tekintse át az alábbiakban a {clientname} reklámstatisztikáját:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campaign activated";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campaign deactivated";
$GLOBALS['strMailBannerActivated']              = "Your campaign shown below has been activated because\\nthe campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated']            = "Your campaign shown below has been deactivated because";
$GLOBALS['strMailFooter']                       = "Üdvözlettel:\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "A következő reklámok törlésre kerültek, mert";
$GLOBALS['strMailNothingLeft']                  = "Ha szeretné weblapunkon folytatni a hirdetést, nyugodtan vegye fel velünk a kapcsolatot.\\nSzívesen állunk rendelkezésére.";
$GLOBALS['strClientDeactivated']                = "A kampány jelenleg nem aktív, mert";
$GLOBALS['strBeforeActivate']                   = "még nem érkezett el az aktiválás dátuma";
$GLOBALS['strAfterExpire']                      = "már elérkezett a lejárat dátuma";
$GLOBALS['strNoMoreImpressions']                = "there are no Impressions remaining";
$GLOBALS['strNoMoreClicks']                     = "már nincs több kattintás";
$GLOBALS['strNoMoreConversions']                = "there are no Sales remaining";
$GLOBALS['strWeightIsNull']                     = "fontosságát nullára állította";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "A maradék kattintások vagy a reklámletöltések átlépték a (limit) korlátozást. \\nA reklámok letiltásra kerülnek, mert nem maradt már kattintás vagy letöltés. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Clicks/Conversions are low";
$GLOBALS['strNoViewLoggedInInterval']           = "Egy reklámletöltés sem került naplózásra a jelentés időtartama alatt";
$GLOBALS['strNoClickLoggedInInterval']          = "Egy kattintás sem került naplózásra a jelentés időtartama alatt";
$GLOBALS['strNoConversionLoggedInInterval']     = "No Conversions were logged during the span of this report";
$GLOBALS['strMailReportPeriod']                 = "Ez a jelentés a {startdate} és {enddate} közti statisztikát tartalmazza.";
$GLOBALS['strMailReportPeriodAll']              = "Ez a jelentés a teljes statisztikát tartalmazza {enddate}-ig.";
$GLOBALS['strNoStatsForCampaign']               = "Nem áll rendelkezésre a kampány statisztikája";
$GLOBALS['strImpendingCampaignExpiry']          = "Impending campaign expiration";
$GLOBALS['strYourCampaign']                     = "Your campaign";
$GLOBALS['strTheCampiaignBelongingTo']          = "The campaign belonging to";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} shown below is due to end on {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} shown below has less than {limit} impressions remaining.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "Prioritás";
$GLOBALS['strSourceEdit']                       = "Edit Sources";

// Preferences
$GLOBALS['strPreferences']                      = "Preferenciák";
$GLOBALS['strUserPreferences']                  = "User Preferences";
$GLOBALS['strChangePassword']                   = "Change Password";
$GLOBALS['strChangeEmail']                      = "Change E-mail";
$GLOBALS['strCurrentPassword']                  = "Current Password";
$GLOBALS['strChooseNewPassword']                = "Choose a new password";
$GLOBALS['strReenterNewPassword']               = "Re-enter new password";
$GLOBALS['strNameLanguage']                     = "Name & Language";
$GLOBALS['strAccountPreferences']               = "Account Preferences";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Campaign email Reports Preferences";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "Adminisztrátor e-mail címe";
$GLOBALS['strAgencyEmailWarnings']              = "Account email Warnings";
$GLOBALS['strAdveEmailWarnings']                = "Advertiser email Warnings";
$GLOBALS['strFullName']                         = "Full Name";
$GLOBALS['strEmailAddress']                     = "Email address";
$GLOBALS['strUserDetails']                      = "User Details";
$GLOBALS['strLanguageTimezone']                 = "Language & Timezone";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "User Interface Preferences";
$GLOBALS['strPluginPreferences']                = "Plugin Preferences";
$GLOBALS['strInvocationPreferences']            = "Invocation Preferences";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Revenue";
$GLOBALS['strNumberOfItems']                       = "Number of items";
$GLOBALS['strRevenueCPC']                          = "Revenue CPC";
$GLOBALS['strERPM']                                = "ERPM";
$GLOBALS['strERPC']                                = "ERPC";
$GLOBALS['strERPS']                                = "ERPS";
$GLOBALS['strEIPM']                                = "EIPM";
$GLOBALS['strEIPC']                                = "EIPC";
$GLOBALS['strEIPS']                                = "EIPS";
$GLOBALS['strECPM']                                = "eCPM";
$GLOBALS['strECPC']                                = "ECPC";
$GLOBALS['strECPS']                                = "ECPS";
$GLOBALS['strEPPM']                                = "EPPM";
$GLOBALS['strEPPC']                                = "EPPC";
$GLOBALS['strEPPS']                                = "EPPS";
$GLOBALS['strPendingConversions']               = "Pending conversions";
$GLOBALS['strImpressionSR']                     = "Megjelenés";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Megjelenés";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "Rev.";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "Num. Items";
$GLOBALS['strRevenueCPC_short']                 = "Rev. CPC";
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
$GLOBALS['strID_short']                         = "Azonosító";
$GLOBALS['strRequests_short']                   = "Req.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "Kattintás";
$GLOBALS['strCTR_short']                        = "�?tkattintás";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "�?ltalános beállítások";
$GLOBALS['strGeneralSettings']              = "�?ltalános beállítások";
$GLOBALS['strMainSettings']                 = "Alapbeállítások";
$GLOBALS['strAdminSettings']                = "Adminisztrációs beállítások";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Termékfrissítés";
$GLOBALS['strViewPastUpdates']        = "Manage Past Updates and Backups";
$GLOBALS['strFromVersion']            = "From Version";
$GLOBALS['strToVersion']              = "To Version";
$GLOBALS['strToggleDataBackupDetails']= "Toggle data backup details";
$GLOBALS['strClickViewBackupDetails'] = "click to view backup details";
$GLOBALS['strClickHideBackupDetails'] = "click to hide backup details";
$GLOBALS['strShowBackupDetails']      = "Show data backup details";
$GLOBALS['strHideBackupDetails']      = "Hide data backup details";
$GLOBALS['strInstallation']           = "Installation";
$GLOBALS['strBackupDeleteConfirm']    = "Do you really want to delete all backups created from this upgrade?";
$GLOBALS['strDeleteArtifacts']         = "Delete Artifacts";
$GLOBALS['strArtifacts']              = "Artifacts";
$GLOBALS['strBackupDbTables']         = "Backup database tables";
$GLOBALS['strLogFiles']               = "Log files";
$GLOBALS['strConfigBackups']          = "Conf backups";
$GLOBALS['strUpdatedDbVersionStamp']  = "Updated database version stamp";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "UPGRADE COMPLETE";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "UPGRADE FAILED";

// Agency
$GLOBALS['strAgencyManagement']              = "Account Management";
$GLOBALS['strAgency']                      = "Account";
$GLOBALS['strAgencies']                   = "Accounts";
$GLOBALS['strAddAgency']                   = "Add new account";
$GLOBALS['strAddAgency_Key']               = "Add <u>n</u>ew account";
$GLOBALS['strTotalAgencies']               = "Total accounts";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "There are currently no accounts defined";
$GLOBALS['strConfirmDeleteAgency']           = "Do you really want to delete this account?";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive accounts";
$GLOBALS['strInactiveAgenciesHidden']     = "inactive account(s) hidden";
$GLOBALS['strAllowAgencyEditConversions'] = "Allow this user to edit conversions";
$GLOBALS['strAllowMoreReports']           = "Allow 'More Reports' button";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "Targeting Channels";
$GLOBALS['strChannelOverview']            = "Targeting Channel Overview";
$GLOBALS['strChannelManagement']          = "Targeting Channel Management";
$GLOBALS['strAddNewChannel']              = "Add new Targeting Channel";
$GLOBALS['strAddNewChannel_Key']          = "Add <u>n</u>ew Targeting Channel";
$GLOBALS['strChannelToWebsite']           = "to website";
$GLOBALS['strNoChannels']                 = "There are currently no targeting channels defined";
$GLOBALS['strNoChannelsAddWebsite']       = "There are currently no targeting channels defined, because there are no websites. To create a targeting channel, <a href='affiliate-edit.php'>add a new website</a> first.";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "Targeting Channel properties";
$GLOBALS['strChannelLimitations']         = "Delivery Options";
$GLOBALS['strConfirmDeleteChannel']       = "Do you really want to delete this targeting channel?";
$GLOBALS['strConfirmDeleteChannels']      = "Do you really want to delete the selected targeting channels?";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Variable Name";
$GLOBALS['strVariableDescription']     = "Leírás";
$GLOBALS['strVariableDataType']         = "Data Type";
$GLOBALS['strVariablePurpose']       = "Purpose";
$GLOBALS['strGeneric']               = "Generic";
$GLOBALS['strBasketValue']           = "Basket value";
$GLOBALS['strNumItems']              = "Number of items";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Number";
$GLOBALS['strString']                 = "String";
$GLOBALS['strTrackFollowingVars']     = "Track the following variable";
$GLOBALS['strAddVariable']             = "Add Variable";
$GLOBALS['strNoVarsToTrack']         = "No Variables to track.";
$GLOBALS['strVariableHidden']       = "Hide variable to websites?";
$GLOBALS['strVariableRejectEmpty']  = "Reject if empty?";
$GLOBALS['strTrackingSettings']     = "Tracking settings";
$GLOBALS['strTrackerType']          = "Tracker type";
$GLOBALS['strTrackerTypeJS']        = "Track JavaScript variables";
$GLOBALS['strTrackerTypeDefault']   = "Track JavaScript variables (backwards compatible, escaping needed)";
$GLOBALS['strTrackerTypeDOM']       = "Track HTML elements using DOM";
$GLOBALS['strTrackerTypeCustom']    = "Custom JS code";
$GLOBALS['strVariableCode']         = "Javascript tracking code";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Hirdetők és kampányok";
$GLOBALS['strYouHaveNoBanners']     = "Campaign has no banners!";
$GLOBALS['strYouHaveNoZones']       = "Banner not linked to any zones!";
$GLOBALS['strNoBannersDropdown']    = "--No Banners Found--";
$GLOBALS['strNoZonesDropdown']      = "--No Zones Found--";
$GLOBALS['strInsertErrorPart1']     = "<br><br><center><b> Error, ";
$GLOBALS['strInsertErrorPart2']     = "records was not inserted! </b></center>";
$GLOBALS['strDuplicatedValue']      = "Duplicated Value!";
$GLOBALS['strInsertCorrect']        = "<br><br><center><b> File was uploaded correctly </b></center>";
$GLOBALS['strReuploadCsvFile']      = "Reupload CSV File";
$GLOBALS['strConfirmUpload']        = "Confirm Upload";
$GLOBALS['strLoadedRecords']        = "Loaded Records";
$GLOBALS['strBrokenRecords']        = "Broken Fields in all Records";
$GLOBALS['strWrongDateFormat']      = "Wrong Date Format";


// Password recovery
$GLOBALS['strForgotPassword']         = "Forgot your password?";
$GLOBALS['strPasswordRecovery']       = "Password recovery";
$GLOBALS['strEmailRequired']          = "Email is a required field";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Email address not found";
$GLOBALS['strPwdRecPasswordSaved']    = "The new password was saved, proceed to <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "Wrong ID";
$GLOBALS['strPwdRecEnterEmail']       = "Enter your email address below";
$GLOBALS['strPwdRecEnterPassword']    = "Enter your new password below";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "Password reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s password recovery";
$GLOBALS['strProceed']                = "Proceed >";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binary data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by the system administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "Account";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "Event";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No user activity has been recorded during the timeframe you have selected.";
$GLOBALS['strAuditTrail']             = "Audit Trail";
$GLOBALS['strAuditTrailSetup']          = "Setup the Audit Trail today";
$GLOBALS['strAuditTrailGoTo']           = "Go to Audit Trail page";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Go to Campaigns page";
$GLOBALS['strCampaignSetUp']            = "Set up a Campaign today";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>There is no campaign activity to display.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "No campaigns have started or finished during the timeframe you have selected";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>In order to view campaigns which have started or finished during the timeframe you have selected, the Audit Trail must be activated</li>
        <li>You are seeing this message because you didn't activate the Audit Trail</li>
";
$GLOBALS['strCampaignAuditTrailSetup']   = "Activate Audit Trail to start viewing Campaigns";

$GLOBALS['strUnsavedChanges']       = "You have unsaved changes on this page, make sure you press &quot;Save Changes&quot; when finished";
$GLOBALS['strDeliveryLimitationsDisagree'] = "WARNING: The delivery engine limitations <strong>DO NOT AGREE</strong> with the limitations shown below<br />Please hit save changes to update the delivery engine's rules";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Some of delivery limitations reports incorrect values:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "You are now working as <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "You don't have access to that page. You have been re-directed.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Advertiser <a href='%s'>%s</a> has been added, <a href='%s'>add a campaign</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Advertiser <a href='%s'>%s</a> has been updated";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Advertiser <b>%s</b> has been deleted";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "All selected advertisers have been deleted";

$GLOBALS['strTrackerHasBeenAdded'] = "Tracker <a href='%s'>%s</a> has been added";
$GLOBALS['strTrackerHasBeenUpdated'] = "Tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Variables of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Linked campaigns of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Append tracker code of tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> has been deleted";
$GLOBALS['strTrackersHaveBeenDeleted'] = "All selected trackers have been deleted";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Tracker <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Tracker <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Campaign <a href='%s'>%s</a> has been added, <a href='%s'>add a banner</a>";
$GLOBALS['strCampaignHasBeenNoBanner'] = "Campaign <a href='%s'>%s</a> has been added";
$GLOBALS['strCampaignHasBeenUpdated'] = "Campaign <a href='%s'>%s</a> has been updated";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Linked trackers of campaign <a href='%s'>%s</a> have been updated";
$GLOBALS['strCampaignHasBeenDeleted'] = "Campaign <b>%s</b> has been deleted";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "All selected campaigns have been deleted";
$GLOBALS['strCampaignHasBeenDuplicated'] = "Campaign <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "Campaign <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Banner <a href='%s'>%s</a> has been added";
$GLOBALS['strBannerHasBeenUpdated'] = "Banner <a href='%s'>%s</a> has been updated";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Advanced settings for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Delivery options for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Delivery options for banner <a href='%s'>%s</a> have been applied to %d banners";
$GLOBALS['strBannerHasBeenDeleted'] = "Banner <b>%s</b> has been deleted";
$GLOBALS['strBannersHaveBeenDeleted'] = "All selected banners have been deleted";
$GLOBALS['strBannerHasBeenDuplicated'] = "Banner <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Banner <b>%s</b> has been moved to campaign <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Banner <a href='%s'>%s</a> has been activated";
$GLOBALS['strBannerHasBeenDeactivated'] = "Banner <a href='%s'>%s</a> has been deactivated";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zone(s) linked";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zone(s) unlinked";

$GLOBALS['strWebsiteHasBeenAdded'] = "Website <a href='%s'>%s</a> has been added, <a href='%s'>add a zone</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Website <a href='%s'>%s</a> has been updated";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Website <b>%s</b> has been deleted";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "All selected website have been deleted";

$GLOBALS['strZoneHasBeenAdded'] = "Zone <a href='%s'>%s</a> has been added";
$GLOBALS['strZoneHasBeenUpdated'] = "Zone <a href='%s'>%s</a> has been updated";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Advanced settings for zone <a href='%s'>%s</a> have been updated";
$GLOBALS['strZoneHasBeenDeleted'] = "Zone <b>%s</b> has been deleted";
$GLOBALS['strZonesHaveBeenDeleted'] = "All selected zone have been deleted";
$GLOBALS['strZoneHasBeenDuplicated'] = "Zone <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Zone <b>%s</b> has been moved to website <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Banner has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Campaign has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Banner has been unlinked from zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Campaign has been unlinked from zone <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Targeting channel <a href='%s'>%s</a> has been added, <a href='%s'>change the delivery options</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Targeting channel <a href='%s'>%s</a> has been updated";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Delivery options for targeting channel <a href='%s'>%s</a> have been updated";
$GLOBALS['strChannelHasBeenDeleted'] = "Targeting channel <b>%s</b> has been deleted";
$GLOBALS['strChannelsHaveBeenDeleted'] = "All selected Targeting Channels have been deleted";
$GLOBALS['strChannelHasBeenDuplicated'] = "Targeting channel <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Your <b>%s</b> preferences has been updated";
$GLOBALS['strPreferencesHaveBeenUpdated'] = "Preferences have been updated";
$GLOBALS['strEmailChanged'] = "Your E-mail has been changed";
$GLOBALS['strPasswordChanged'] = "Your password has been changed";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> have been updated";
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
$GLOBALS['keySearch']        = "k";
$GLOBALS['keyCollapseAll']    = "c";
$GLOBALS['keyExpandAll']    = "k";
$GLOBALS['keyAddNew']        = "j";
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

$GLOBALS['str_ar']                  = "Arabic";
$GLOBALS['str_bg']                  = "Bulgarian";
$GLOBALS['str_cs']                  = "Czech";
$GLOBALS['str_cy']                  = "Welsh";
$GLOBALS['str_da']                  = "Danish";
$GLOBALS['str_de']                  = "German";
$GLOBALS['str_el']                  = "Greek";
$GLOBALS['str_en']                  = "English";
$GLOBALS['str_es']                  = "Spanish";
$GLOBALS['str_fa']                  = "Persian";
$GLOBALS['str_fr']                  = "French";
$GLOBALS['str_he']                  = "Hebrew";
$GLOBALS['str_hr']                  = "Croatian";
$GLOBALS['str_hu']                  = "Hungarian";
$GLOBALS['str_id']                  = "Indonesian";
$GLOBALS['str_it']                  = "Italian";
$GLOBALS['str_ja']                  = "Japanese";
$GLOBALS['str_ko']                  = "Korean";
$GLOBALS['str_lt']                  = "Lithuanian";
$GLOBALS['str_ms']                  = "Malay";
$GLOBALS['str_nb']                  = "Norwegian Bokmal";
$GLOBALS['str_nl']                  = "Dutch";
$GLOBALS['str_pl']                  = "Polish";
$GLOBALS['str_pt_BR']               = "Portuguese Brazil";
$GLOBALS['str_pt_PT']               = "Portuguese Portugal";
$GLOBALS['str_ro']                  = "Romanian";
$GLOBALS['str_ru']                  = "Russian";
$GLOBALS['str_sk']                  = "Slovak";
$GLOBALS['str_sl']                  = "Slovenian";
$GLOBALS['str_sq']                  = "Albanian";
$GLOBALS['str_sv']                  = "Swedish";
$GLOBALS['str_tr']                  = "Turkish";
$GLOBALS['str_uk']                  = "Ukranian";
$GLOBALS['str_zh_CN']               = "Chinese Simplified";
$GLOBALS['str_zh_TW']               = "Chinese Traditional";

?>
