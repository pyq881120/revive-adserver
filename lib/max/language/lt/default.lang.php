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

$GLOBALS['strHome']                     = "Namai";
$GLOBALS['strHelp']                     = "Pagalba";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Pradėti nuo";
$GLOBALS['strNavigation']               = "Navigacija";
$GLOBALS['strShortcuts']                = "Nuorodos";
$GLOBALS['strActions']                  = "Veiksmas";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Inventorius";
$GLOBALS['strMaintenance']              = "Aptarnavimas";
$GLOBALS['strProbability']              = "Galimybės";
$GLOBALS['strInvocationcode']           = "Nuorodos kodas";
$GLOBALS['strTrackerVariables']         = "Raktinis žodis";
$GLOBALS['strBasicInformation']         = "Pradinė informacija";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "Prisijungimo informacija";
$GLOBALS['strLogoutURL']                = " Nukreipiamasis URL, skirtas išsiregistravimui. <br />  Pagrindinis blankas ";
$GLOBALS['strAppendTrackerCode']        = "Append Tracker Code";
$GLOBALS['strOverview']                 = "Bendra peržiūra";
$GLOBALS['strSearch']                   = "<u>P</u>aieška";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "Detalus apibūdinimas";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Ieškoti atnaujinimų";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Glaustai";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "Vartotojas";
$GLOBALS['strEdit']                     = "Redaguoti";
$GLOBALS['strCreate']                   = "Sukurti";
$GLOBALS['strDuplicate']                = "Kopijuoti";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Prekelti į";
$GLOBALS['strDelete']                   = "Ištrinti";
$GLOBALS['strActivate']                 = "Aktyvuoti";
$GLOBALS['strDeActivate']               = "Deaktyvizuoti";
$GLOBALS['strConvert']                  = "Konvertuoti";
$GLOBALS['strRefresh']                  = "Atnaujinti";
$GLOBALS['strSaveChanges']              = "Išsaugoti pasikeitimus";
$GLOBALS['strUp']                       = "Į viršų";
$GLOBALS['strDown']                     = "Žemyn";
$GLOBALS['strSave']                     = "Išsaugoti";
$GLOBALS['strCancel']                   = "Atšaukti";
$GLOBALS['strBack']                     = "Atgal";
$GLOBALS['strPrevious']                 = "Ankstesnis";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Kitas";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Taip";
$GLOBALS['strNo']                       = "Ne";
$GLOBALS['strNone']                     = "Nė vienas";
$GLOBALS['strCustom']                   = "Įprastas";
$GLOBALS['strDefault']                  = "Pagrindinis";
$GLOBALS['strOther']                    = "Kitas";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "Neribotas";
$GLOBALS['strUntitled']                 = "Be pavadinimo";
$GLOBALS['strAll']                      = "Visi";
$GLOBALS['strAvg']                      = "Vidurkis";
$GLOBALS['strAverage']                  = "Vidurkis";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Iš viso";
$GLOBALS['strTotal']                    = "Viso";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "Aktyvus";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "skirta (kam)";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "Priskirta (kam)";
$GLOBALS['strDaysLeft']                 = "Liko dienų";
$GLOBALS['strCheckAllNone']             = "Patikrinti visus/ nė vieno";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>P</u>adidinti visus";
$GLOBALS['strCollapseAll']              = "<u>P</u>anaikinti visus";
$GLOBALS['strShowAll']                  = "Rodyti visus";
$GLOBALS['strNoAdminInterface']         = "Administratoriaus ekranas buvo išjuntas dėl techninio aptarnavimo darbų. Tai nei kiek nepaveikė Jūsų kampanijų pristatymo";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "Pastarieji laukai turi klaidų:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Jei norite tęsti pirmiausia turite";
$GLOBALS['strFieldFixBeforeContinue2']  = "ištaisyti šias klaidas";
$GLOBALS['strDelimiter']                = "Delimiter";
$GLOBALS['strMiscellaneous']            = "Įvairus";
$GLOBALS['strCollectedAllStats']        = "Visa statistika";
$GLOBALS['strCollectedToday']           = "Šiandien";
$GLOBALS['strCollectedYesterday']       = "Vakar";
$GLOBALS['strCollectedThisWeek']        = "Šią savaitę";
$GLOBALS['strCollectedLastWeek']        = "Praėjusią savaitę";
$GLOBALS['strCollectedThisMonth']       = "Šį mėnesį";
$GLOBALS['strCollectedLastMonth']       = "Praėjusį mėnesį";
$GLOBALS['strCollectedLast7Days']       = "Paskutinias septynias dienas";
$GLOBALS['strCollectedSpecificDates']   = "Specifinės datos";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Vertė";
$GLOBALS['strAdmin']                    = "Administratorius";
$GLOBALS['strWarning']                  = "Perspėjimas";
$GLOBALS['strNotice']                   = "Įspėjimas";
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
$GLOBALS['strPriority']                 = "Pirmenybė";
$GLOBALS['strPriorityLevel']            = "Pirmumo lygmuo";
$GLOBALS['strPriorityTargeting']        = "Paskirstymas";
$GLOBALS['strPriorityOptimisation']     = "Įvairus"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Draudimai";
$GLOBALS['strNoLimitations']            = "Nėra draudimų";
$GLOBALS['strCapping']                  = "Capping";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Vardas";
$GLOBALS['strSize']                     = "Dydis";
$GLOBALS['strWidth']                    = "Plotis";
$GLOBALS['strHeight']                   = "A";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Taikinys";
$GLOBALS['strLanguage']                 = "Kalba";
$GLOBALS['strDescription']              = "Aprašymas";
$GLOBALS['strVariables']                = "Kintamieji";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Komentarai";

// User access
$GLOBALS['strWorkingAs']                = "Dirbama kaip";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Dirbama kaip";
$GLOBALS['strSwitchTo']                 = "Switch to";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s skirta...";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Add user";
$GLOBALS['strLinkUser_Key']             = "Susieti <u>v</u>artotojus";
$GLOBALS['strUsernameToLink']           = "Username of user to add";
$GLOBALS['strEmailToLink']              = "Email of user to add";
$GLOBALS['strNewUserWillBeCreated']     = "Naujas vartotojas sukurtas";
$GLOBALS['strToLinkProvideEmail']       = "To add user, provide user's email";
$GLOBALS['strToLinkProvideUsername']    = "To add user, provide username";
$GLOBALS['strErrorWhileCreatingUser']   = "Klaida kuriant vartotoją: %s";
$GLOBALS['strUserLinkedToAccount']      = "User has been added to account";
$GLOBALS['strUserAccountUpdated']       = "Atnaujinta vartotojo sąskaita";
$GLOBALS['strUserUnlinkedFromAccount']  = "User has been removed from account";
$GLOBALS['strUserWasDeleted']           = "User has been deleted";
$GLOBALS['strUserNotLinkedWithAccount'] = "Toks vartotojas nesusietas su sąskaita";
$GLOBALS['strCantDeleteOneAdminUser']   = "Jūs negalite ištrinti vartotojo. Bent vienas vartotojas turi būti susietas su administratoriaus sąskaita";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Vartotojo vardas";
$GLOBALS['strLinkUserHelpEmail']        = "El. pašto adresas";
$GLOBALS['strLastLoggedIn']             = "Last logged in";
$GLOBALS['strDateLinked']               = "Date linked";
$GLOBALS['strUnlink']                   = "Remove";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removing user from last entity";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Removing user from last entity will cause the user to be deleted. Would you like to remove this user?";
$GLOBALS['strUnlinkAndDelete']          = "Remove &amp; delete user";
$GLOBALS['strUnlinkUser']               = "Remove user";
$GLOBALS['strUnlinkUserConfirmBody']    = "Are you sure you want to remove this user?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "vartotojo priėjimas";
$GLOBALS['strAdminAccess']              = "Administratoriaus priėjimas";
$GLOBALS['strUserProperties']           = "Vartotojo ypatybės";
$GLOBALS['strLinkNewUser']              = "Susieti naują vartotoją";
$GLOBALS['strPermissions']              = "Leidimai";
$GLOBALS['strAuthentification']         = "Autorizacija";
$GLOBALS['strWelcomeTo']                = "Sveiki atvykę į";
$GLOBALS['strEnterUsername']            = "Įveskite savo vartotojo vardą ir slaptažodį, jei norite prisijungti";
$GLOBALS['strEnterBoth']                = "Prašome įvesti abu savo vartotojo vardus ir slaptažodžius ";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Sesijos cookie klaida, prašome prisijungti dar kartą";
$GLOBALS['strLogin']                    = "Prisijungti";
$GLOBALS['strLogout']                   = "išsiregistruoti";
$GLOBALS['strUsername']                 = "Vartotojo vardas";
$GLOBALS['strPassword']                 = "Slaptažodis";
$GLOBALS['strPasswordRepeat']           = "Pakartokite slaptažodį";
$GLOBALS['strAccessDenied']             = "Priėjimas uždraustas";
$GLOBALS['strUsernameOrPasswordWrong']  = "Vartotojo vardas ir slaptažodis neteisingai įvesti. Prašome bandyti iš naujo. ";
$GLOBALS['strPasswordWrong']            = "Jūsų slaptažodis neteisingas. ";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Jūsų sąskaita neturi visų reikiamų leidimų šiai savybei naudoti, Jūs galite prisijungti į kitą sąskaitą norėdami ją panaudoti. Spauskite <a href='logout.php'>čia</a> norėdami prisijungti prie kitos sąskaitos.";
$GLOBALS['strDuplicateClientName']      = "Vartotojo vardas, kurį pateikėte jau egzistuoja, prašome naudoti kitokį vartotojo vardą. ";
$GLOBALS['strDuplicateAgencyName']      = "Vartotojo vardas, kurį pateikėte jau egzistuoja, prašome naudoti kitokį vartotojo vardą. ";
$GLOBALS['strInvalidPassword']          = "Naujasis slaptažodis, kurį pateikėte jau egzistuoja, prašome naudoti kitokį slaptažodį. ";
$GLOBALS['strInvalidEmail']             = "El. paštas neteisingai suformatuotas, prašome įvesti teisingą el. pašto adresą.";
$GLOBALS['strNotSamePasswords']         = "Du slaptažodžiai, kuriuos įvedėte nėra vienodi";
$GLOBALS['strRepeatPassword']           = "Pakartokite slaptažodį";
$GLOBALS['strOldPassword']              = "Senas slaptažodis";
$GLOBALS['strNewPassword']              = "Naujas slaptažodis";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "Prašymai";
$GLOBALS['strImpressions']              = "Įspūdis";
$GLOBALS['strClicks']                   = "Paspaudimai";
$GLOBALS['strConversions']              = "Konvertavimas";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Išpardavimų reitingas";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Viso paspaudimų";
$GLOBALS['strTotalConversions']         = "Viso konvertavimų";
$GLOBALS['strViewCredits']              = "Įspūdžių kreditai";
$GLOBALS['strClickCredits']             = "Paspaudimų kreditai";
$GLOBALS['strConversionCredits']        = "konvertavimo kreditai";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Data Laikas";
$GLOBALS['strTrackerID']                = "Agento ID";
$GLOBALS['strTrackerName']              = "Agento vardas";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Baneriai";
$GLOBALS['strCampaigns']                = "Kampanija";
$GLOBALS['strCampaignID']               = "Kampanijos ID";
$GLOBALS['strCampaignName']             = "Kampanijos pavadinimas";
$GLOBALS['strCountry']                  = "Šalis";
$GLOBALS['strStatsAction']              = "Veiksmas";
$GLOBALS['strWindowDelay']              = "Lango atidėjimas";
$GLOBALS['strStatsVariables']           = "Kintamieji";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Mėnesinis nuomos terminas";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "Krepšelio vertė";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Data";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "Diena";
$GLOBALS['strDays']                     = "Dienos";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "Savaitė";
$GLOBALS['strWeeks']                    = "Savaitės";
$GLOBALS['strSingleMonth']              = "Mėnesis";
$GLOBALS['strMonths']                   = "Mėnesiai";
$GLOBALS['strDayOfWeek']                = "Savaitės diena";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Valanda";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "Sekundės";
$GLOBALS['strMinutes']                  = "Minutės";
$GLOBALS['strHours']                    = "Valandos";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "Reklamos skelbėjas";
$GLOBALS['strClients']                      = "Reklamos skelbėjai";
$GLOBALS['strClientsAndCampaigns']          = "Reklamos skelbėjai ir kampanijos";
$GLOBALS['strAddClient']                    = "Pridėti naują reklamos skelbėją";
$GLOBALS['strAddClient_Key']                = "Pridėti <u>n</u>aują reklamuotoją";
$GLOBALS['strTotalClients']                 = "Viso reklamos skelbėjų";
$GLOBALS['strClientProperties']             = "Advertiser Properties";
$GLOBALS['strClientHistory']                = "Advertiser History";
$GLOBALS['strNoClients']                    = "There are currently no advertisers defined. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoClientsForBanners']          = "There are currently no advertisers defined. To add banners you need to <a href='advertiser-edit.php'>add new advertiser</a> and campaign first.";
$GLOBALS['strConfirmDeleteClient']          = "Ar tikrai norite ištrinti šį reklamos skelbėją?";
$GLOBALS['strConfirmDeleteClients']         = "Ar tikrai norite ištrinti šį reklamos skelbėją?";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "Dydis";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "paslėpti neaktyvius reklamos skelbėjus. ";
$GLOBALS['strInactiveAdvertisersHidden']    = "Neaktyvus reklamos skelbėjai paslėpti.";
$GLOBALS['strOverallAdvertisers']           = "reklamuotojas (-ai)";
$GLOBALS['strAdvertiserSignup']             = "Prisijunti reklamuotojui";
$GLOBALS['strAdvertiserSignupDesc']         = "Užsiregistruokite dėl savęs aptarnavimo ir apmokėjimo reklamos paslaugų";
$GLOBALS['strAdvertiserSignupLink']         = "Prisijunti reklamuotojui";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Prisijunti reklamuotojui";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Reklamos skelbėjai ir kampanijos";
// Advertisers properties
$GLOBALS['strContact']                          = "Kontaktai";
$GLOBALS['strContactName']                      = "Kontaktinis vardas";
$GLOBALS['strEMail']                            = "El. paštas";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "El. pranešimų atsiuntimo ataskaitų kampanija";
$GLOBALS['strNoDaysBetweenReports']             = "Dienų skaičius tarp atsiuntimo ataskaitų kampanijos";
$GLOBALS['strSendDeactivationWarning']          = "Siųsti el. pranešimą, kai kampanija automatiškai aktyvuoja/ išjungta";
$GLOBALS['strAllowClientModifyInfo']            = "Leisti šiam vartotojui keisti savo pačio nustatymus";
$GLOBALS['strAllowClientModifyBanner']          = "Leisti šiam vartotojui keisti savo pačio banerius";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "Leisti šiam vartotojui išjungti savo pačio banerius";
$GLOBALS['strAllowClientActivateBanner']        = "Leisti šiam vartotojui aktyvuoti savo pačio banerius";
$GLOBALS['strAllowClientViewTargetingStats']    = "Leisti šiam vartotojui peržiūrėti planinę statistiką";
$GLOBALS['strAllowCreateAccounts']              = "Leisti šiam vartotojui kurti naujas sąskaitas";
$GLOBALS['strCsvImportConversions']             = "Leisti šiam vartotojui įdėti konvertavimus būnant neprisijungus prie internetinio ryšio";
$GLOBALS['strAdvertiserLimitation']             = "Rodyti tik banerį ";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Kampanija";
$GLOBALS['strCampaigns']                    = "Kampanija";
$GLOBALS['strOverallCampaigns']             = "kampanija(-os)";
$GLOBALS['strTotalCampaigns']               = "Viso kampanijų";
$GLOBALS['strActiveCampaigns']              = "Aktyvi kampanija";
$GLOBALS['strAddCampaign']                  = "pridėti naują kampaniją";
$GLOBALS['strAddCampaign_Key']              = "Pridėti <u>n</u>ają kampaniją";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "Taisyti kampaniją";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "Ištrinti visas kampanijas";
$GLOBALS['strLinkedCampaigns']              = "Linked Campaigns";
$GLOBALS['strCampaignStats']                = "Campaign Statistics";
$GLOBALS['strCampaignProperties']           = "Campaign Properties";
$GLOBALS['strCampaignOverview']             = "Kampanijos peržiūra";
$GLOBALS['strCampaignHistory']              = "Campaign History";
$GLOBALS['strNoCampaigns']                  = "There are currently no campaigns defined for this advertiser.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Ar Jūs tikrai norite ištrinti kampanijas, kurios priklauso reklamos skleidėjams?";
$GLOBALS['strConfirmDeleteCampaign']        = "Ar tikrai norite ištrinti šią kampaniją?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Ar tikrai norite ištrinti šią kampaniją?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Rodyti pagrindinius reklamos skleidėjus";
$GLOBALS['strHideParentAdvertisers']        = "Slėpti pagrindinius reklamos skleidėjus";
$GLOBALS['strHideInactiveCampaigns']        = "Paslėpti neaktyvias reklamos kampanijas";
$GLOBALS['strInactiveCampaignsHidden']      = "Neaktyvios reklamos kampanijos paslėptos";
$GLOBALS['strContractDetails']              = "Sutarties detalės";
$GLOBALS['strInventoryDetails']             = "Inventoriaus detalės";
$GLOBALS['strPriorityInformation']          = "Priority in relation to other campaigns";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Kampanija";
$GLOBALS['strHiddenAd']                     = "Reklama";
$GLOBALS['strHiddenAdvertiser']             = "Reklamos skelbėjas";
$GLOBALS['strHiddenTracker']                = "Agentas";
$GLOBALS['strHiddenWebsite']              = "Internetinis puslapis";
$GLOBALS['strHiddenZone']                   = "Zona";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Kampanijos vietos pasirinkimas";
$GLOBALS['strSelectUnselectAll']            = "Pažymėti/ Nuimti žymėjimą visiems";
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
$GLOBALS['strDontExpire']                       = "Don't expire";
$GLOBALS['strActivateNow']                      = "Start immediately";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Žemas";
$GLOBALS['strHigh']                             = "Aukštas";
$GLOBALS['strExpirationDate']                   = "Pasibaigimo data";
$GLOBALS['strExpirationDateComment']            = "Kampanija baigsis šios dienos pabaigoje";
$GLOBALS['strActivationDate']                   = "Pradžios data";
$GLOBALS['strActivationDateComment']            = "Kampanija prasidės šios dienos pradžioje";
$GLOBALS['strRevenueInfo']                      = "Pajamų informacija";
$GLOBALS['strTotalRevenue']                     = "Viso pajamų";
$GLOBALS['strImpressionsRemaining']             = "Likę įspūdžiai";
$GLOBALS['strClicksRemaining']                  = "Likę paspaudimai";
$GLOBALS['strConversionsRemaining']             = "Likę konvertavimai";
$GLOBALS['strImpressionsBooked']                = "Užsakyti įspūdžiai";
$GLOBALS['strClicksBooked']                     = "Užsakyti paspaudimai";
$GLOBALS['strConversionsBooked']                = "Užsakyti konvertavimai";
$GLOBALS['strCampaignWeight']                   = "Set the campaign weight";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimizuoti";
$GLOBALS['strAnonymous']                        = "Slėpti šios kampanijos internetinius puslapius ir reklamos skleidėjus.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "per dieną.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Automatiškai - Lygiai paskirstyti turimą inventorių atitinkamam dienų skaičiui.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Šiai kompanijai nustatyta žema pirmenybė \\nbet nustatytas svoris lygus arba jis nebuvo \\nnustatytas iš viso. Tai priverčia kampanija būti \\n išformuotair jos baneriai nebus pristatyti \\ntol kol jos svoris bus nustatytas kaip tinkamas dydis. \\n\\nAr esate tikri, kad norite tęsti?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Šiai kampanijai parinktas aukšto lygio prioritetas, \\ntačiau tikslus spaudinių skaičius nėra nurodytas. \\nTai priverčia kampaniją būti deaktyvuotai ir \\njos baneriai nebus pristatyti tol, kol tinkamas \\nspaudinių skaičius nebus parinktas. \\n\\nAr esate įsitikines, kad norite tęsti?";
$GLOBALS['strCampaignStatusPending']            = "Laukiantis";
$GLOBALS['strCampaignStatusInactive']           = "Aktyvus";
$GLOBALS['strCampaignStatusRunning']            = "Procesas";
$GLOBALS['strCampaignStatusPaused']             = "Laikinai sustabdytas";
$GLOBALS['strCampaignStatusAwaiting']           = "Laukiantis";
$GLOBALS['strCampaignStatusExpired']            = "Baigtas";
$GLOBALS['strCampaignStatusApproval']           = "Laukiama patvirtinimo »";
$GLOBALS['strCampaignStatusRejected']           = "Atmestas";
$GLOBALS['strCampaignStatusAdded']              = "Pridėtas";
$GLOBALS['strCampaignStatusStarted']            = "Pradėtas";
$GLOBALS['strCampaignStatusRestarted']          = "Atnaujintas";
$GLOBALS['strCampaignStatusDeleted']            = "Ištrinti";
$GLOBALS['strCampaignApprove']                  = "Patvirtintas";
$GLOBALS['strCampaignApproveDescription']       = "Priimti šią kampaniją";
$GLOBALS['strCampaignReject']                   = "Atmesti";
$GLOBALS['strCampaignRejectDescription']        = "atmesti šią kampaniją";
$GLOBALS['strCampaignPause']                    = "Laikinai sustabdyti";
$GLOBALS['strCampaignPauseDescription']         = "Laikinai sustabdyti šią kampaniją";
$GLOBALS['strCampaignRestart']                  = "Atnaujinti";
$GLOBALS['strCampaignRestartDescription']       = "Atnaujinti i kampaniją";
$GLOBALS['strCampaignStatus']                   = "Kampanijos būklė";
$GLOBALS['strReasonForRejection']               = "Atmetimo priežastis";
$GLOBALS['strReasonSiteNotLive']                = "Laukas not live";
$GLOBALS['strReasonBadCreative']                = "Netinkamas kūrimas";
$GLOBALS['strReasonBadUrl']                     = "Netinkamas galutinis url";
$GLOBALS['strReasonBreakTerms']                 = "Internetinis puslapis prieš sąlygas ir reikalavimus";
$GLOBALS['strChangeStatus']                     = "Pakeisti statusą";
$GLOBALS['strCampaignType']                     = "Kampanijos pavadinimas";
$GLOBALS['strType']                             = "Tipas";
$GLOBALS['strContract']                         = "Kontaktai";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Kontaktai";
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
$GLOBALS['strTracker']                    = "Agentas";
$GLOBALS['strTrackers']                   = "Agentas";
$GLOBALS['strTrackerOverview']            = "Tracker overview";
$GLOBALS['strTrackerPreferences']            = "Agento pirmenybės";
$GLOBALS['strAddTracker']                 = "Pridėti naują agentą";
$GLOBALS['strAddTracker_Key']             = "Pridėti <u>n</u>aują agentą";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Ar tikrai norite ištrinti visus agentus, kurie priklauso šiam reklamuotojui?";
$GLOBALS['strConfirmDeleteTrackers']      = "Ar tikrai norite ištrinti šį agentą?";
$GLOBALS['strConfirmDeleteTracker']       = "Ar tikrai norite ištrinti šį agentą?";
$GLOBALS['strDeleteAllTrackers']          = "Ištrinti visus agentus";
$GLOBALS['strTrackerProperties']          = "Vartotojo ypatybės";
$GLOBALS['strTrackerOverview']            = "Tracker overview";
$GLOBALS['strModifyTracker']              = "Taisyti agentą";
$GLOBALS['strLog']                        = "Prisijungti";
$GLOBALS['strDefaultStatus']              = "Pagrindinis statusas";
$GLOBALS['strStatus']                     = "Statusas";
$GLOBALS['strLinkedTrackers']             = "Susieti agentai";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Konvertavimo langas";
$GLOBALS['strUniqueWindow']               = "Unikalus langas";
$GLOBALS['strClick']                      = "Paspaudimas";
$GLOBALS['strView']                       = "Vaizdas";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Įspūdis";
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
$GLOBALS['strLinkCampaignsByDefault']     = "Sujungti naujai sukurtas kampanijas";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Baneris";
$GLOBALS['strBanners']                       = "Baneriai";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Pridėti naują banerį";
$GLOBALS['strAddBanner_Key']                 = "Pridėti <u>n</u>aują banerį";
$GLOBALS['strBannerToCampaign']              = "Jūsų kampanija";
$GLOBALS['strModifyBanner']                  = "Keisti banerio duomenis";
$GLOBALS['strActiveBanners']                 = "Aktyvūs baneriai";
$GLOBALS['strTotalBanners']                  = "Viso banerių";
$GLOBALS['strShowBanner']                    = "Rodyti banerius";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Ištrinti visus banerius";
$GLOBALS['strActivateAllBanners']            = "Aktyvuoti visus banerius";
$GLOBALS['strDeactivateAllBanners']          = "Dezaktyvuoti visus banerius";
$GLOBALS['strBannerOverview']                = "Banner Overview";
$GLOBALS['strBannerProperties']              = "Vartotojo ypatybės";
$GLOBALS['strBannerHistory']                 = "Banner History";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "There are currently no banners defined for this campaign.";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "There are currently no banners defined, because there are no advertisers. To create a banner, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strConfirmDeleteBanner']           = "Ar tikrai norite ištrinti šį banerį?";
$GLOBALS['strConfirmDeleteBanners']          = "Ar tikrai norite ištrinti šį banerį?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Ar tikrai norite ištrinti visus banerius, kurie priklauso šiai kampanijai?";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "Rodyti pagrindines kampanijas";
$GLOBALS['strHideParentCampaigns']           = "Slėpti pagrindines kampanijas";
$GLOBALS['strHideInactiveBanners']           = "Slėpti neaktyvius banerius";
$GLOBALS['strInactiveBannersHidden']         = "Neaktyvūs baneriai paslėpti";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "Neįmanoma pridėti kitų banerių tekstui.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Įspėjimas, tikriausiai trūksta";
$GLOBALS['strWarningMissingClosing']         = " closing tag '>'";
$GLOBALS['strWarningMissingOpening']         = " opening tag '<'";
$GLOBALS['strSubmitAnyway']       		     = "Tvirtinti bet kokiu atveju";
$GLOBALS['strOverallBanners']                = "baneris";
$GLOBALS['strBannersOfCampaign']             = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Pirmenybė baneriui";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Pagrindiniai baneriai";
$GLOBALS['strDefaultBannerUrl']                      = "Pagrindiniai vaizdų URL";
$GLOBALS['strDefaultBannerDestination']              = "Pagrindinė URL paskyrimo vieta";
$GLOBALS['strAllowedBannerTypes']                    = "Leidžiami banerio tipai";
$GLOBALS['strTypeSqlAllow']                          = "Leisti SQL vietinius banerius";
$GLOBALS['strTypeWebAllow']                          = "Įgalinti internetinio serverio vietinius banerius";
$GLOBALS['strTypeUrlAllow']                          = "Įgalinti išorinius banerius";
$GLOBALS['strTypeHtmlAllow']                         = "Įgalinti HTML banerius";
$GLOBALS['strTypeTxtAllow']                          = "Įgalinti teksto Ads";
$GLOBALS['strTypeHtmlSettings']                      = "HTML banerio nustatymai";
$GLOBALS['strTypeHtmlAuto']                          = "Automatiškai daryti taip, kad HTML baneriai būtų surikiuoti iš eilės, norint išvengti (tracking) sekimo ";
$GLOBALS['strTypeHtmlPhp']                           = "Leisti PHP išraiškoms būti atodaromoms su HTML baneriais";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Prašome pasirinkti kitą naberio tipą";
$GLOBALS['strMySQLBanner']             = "Upload a local banner to the database";
$GLOBALS['strWebBanner']               = "Upload a local banner to the webserver";
$GLOBALS['strURLBanner']               = "Link an external banner";
$GLOBALS['strHTMLBanner']              = "Create an HTML banner";
$GLOBALS['strTextBanner']              = "Create a Text banner";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Ar pageidaujate išsaugoti Jūsų <br />jau esantį paveikslėlį, ar Jūs norite <br /> įkelti kitą?";
$GLOBALS['strUploadOrKeepAlt']        = "Ar pageidaujate išsaugoti Jūsų <br />jau esantį atsarginį paveikslėlį, ar Jūs norite <br /> įkelti kitą?";
$GLOBALS['strNewBannerFile']         = "Pasirinkite norimą paveikslėlį <br />, kurį naudosite šiam baneriui  <br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Pasirinkite atsarginį paveikslėlį, kurį Jūs <br />norite naudoti tuo atveju, jei naršyklės<br />nepalaiko rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "Vaizdo URL (incl. http://)";
$GLOBALS['strURL']                     = "Galutinio tikslo URL (incl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Raktiniai žodžiai";
$GLOBALS['strTextBelow']             = "Tekstas po nuotrauka";
$GLOBALS['strWeight']                 = "Svoris";
$GLOBALS['strAlt']                     = "Visas tekstas";
$GLOBALS['strStatusText']            = "Teksto statusas";
$GLOBALS['strBannerWeight']            = "Banerio svoris";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Bendras HTML baneris";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Bendras";
$GLOBALS['strSwfTransparency']		   = "Leisti skaidrų foną";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Ieškoti sunkiai u-koduotų internetinių puslapių Flash failo viduje";
$GLOBALS['strConvertSWFLinks']        = "Pakeisti Flash saitus";
$GLOBALS['strHardcodedLinks']        = "Sunkiai užkoduoti saitai";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Suspausti SWF failą, tam kad būtų pagreitintas atsiuntimas (Flash 6 player reikalaujamas)";
$GLOBALS['strOverwriteSource']        = "Perrašyti šaltinio parametrus";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense sąskaitos";
$GLOBALS['strLinkAdSenseAccount']         = "Susietos AdSense sąskaitos";
$GLOBALS['strCreateAdSenseAccount']       = "Sukurti AdSense sąskaita";
$GLOBALS['strEditAdSenseAccount']         = "Redaguoti AdSense sąskaitą";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Delivery Options";
$GLOBALS['strACL']                        = "Atsiuntimas";
$GLOBALS['strACLAdd']                     = "Add delivery limitation";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Nėra draudimų";
$GLOBALS['strApplyLimitationsTo']         = "Pritaikyti apribojimus";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Panaikinti apribojimus";
$GLOBALS['strEqualTo']                    = "yra lygus";
$GLOBALS['strDifferentFrom']              = "skiriasi nuo";
$GLOBALS['strLaterThan']                  = "paskesnis už";
$GLOBALS['strLaterThanOrEqual']           = "paskesnis už arba lygus";
$GLOBALS['strEarlierThan']                = "anksčiau nei";
$GLOBALS['strEarlierThanOrEqual']         = "anksčiau nei arba lygiai su";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "didesnis už";
$GLOBALS['strLessThan']                   = "mažesnis už";
$GLOBALS['strAND']                        = "IR";                          // logical operator
$GLOBALS['strOR']                         = "AR";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Šį banerį rodyti tik";
$GLOBALS['strWeekDay']                    = "Savaitės diena";
$GLOBALS['strWeekDays']                   = "Savaitės dienos";
$GLOBALS['strTime']                       = "Laikas";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "Pirminis";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Miestas";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Atsiuntimo apribojimai";

$GLOBALS['strDeliveryCapping']            = "Delivery capping per visitor";
$GLOBALS['strDeliveryCappingReset']       = "Perstatyti vaizdo skaitiklius po:";
$GLOBALS['strDeliveryCappingTotal']       = "viso";
$GLOBALS['strDeliveryCappingSession']     = "per sesiją";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Sumažinti banerių rodymų dydį iki: ";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Sumažinti kampanijų rodymų dydį iki:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Sumažinti zonų rodymų dydį iki:";

// Website
$GLOBALS['strAffiliate']                = "Internetinis puslapis";
$GLOBALS['strAffiliates']                 = "Internetiniai puslapiai";
$GLOBALS['strAffiliatesAndZones']        = "Internetiniai puslapiai ir zonos";
$GLOBALS['strAddNewAffiliate']            = "Pridėti naują internetinį puslapį";
$GLOBALS['strAddNewAffiliate_Key']        = "Pridėti <u>n</u>aują internetinį puslapį";
$GLOBALS['strAddAffiliate']                = "Sukurti internetinį puslapį";
$GLOBALS['strAffiliateProperties']        = "Website Properties";
$GLOBALS['strAffiliateOverview']        = "Website Overview";
$GLOBALS['strAffiliateHistory']            = "Website History";
$GLOBALS['strZonesWithoutAffiliate']    = "Zonos be internetinių puslapių";
$GLOBALS['strMoveToNewAffiliate']        = "Eiti į naują internetinį puslapį";
$GLOBALS['strNoAffiliates']                = "There are currently no websites defined. To create a zone, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Ar tikrai norite ištrinti šį internetinį puslapį?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Ar tikrai norite ištrinti šį internetinį puslapį?";
$GLOBALS['strMakePublisherPublic']        = "Padaryti šios zonos internetinius puslapius visiems prieinamus";
$GLOBALS['strAffiliateInvocation']      = "Aktyvizacijos kodas";
$GLOBALS['strAdvertiserSetup']          = "Prisijunti reklamuotojui";
$GLOBALS['strTotalAffiliates']          = "Viso internetinių puslapių ";
$GLOBALS['strInactiveAffiliatesHidden'] = "Neaktyvūs internetiniai puslapiai paslėpti";
$GLOBALS['strShowParentAffiliates']     = "Rodyti pagrindinius (pirminius) internetinius puslapius";
$GLOBALS['strHideParentAffiliates']     = "Slėpti pagrindinius (pirminius) internetinius puslapius";

// Website (properties)
$GLOBALS['strWebsite']                      = "Internetinis puslapis";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Leisti šiam vartotojui keisti savo pačio nustatymus";
$GLOBALS['strAllowAffiliateModifyZones']    = "Leisti šiam vartotojui redaguoti savo zonas";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Leisti šiam vartotojui susieti su savo zonomis banerius";
$GLOBALS['strAllowAffiliateAddZone']        = "Leisti šiam vartotojui kurti naujas zonas";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Leisti šiam vartotojui ištrinti jau sukurtas savo zonas";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Leisti šiam vartotojui generuoti aktyvizacijos kodą";
$GLOBALS['strAllowAffiliateZoneStats']      = "Leisti šiam vartotojui žiūrėti zonų statistikas";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Leisti šiam vartotojui peržiūrėti tik patvirtintas arba laukiančias patvirtinimo versijas";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Amokėjimų informacija";
$GLOBALS['strAddress']                      = "Adresas";
$GLOBALS['strPostcode']                     = "Pašto indeksas";
$GLOBALS['strCity']                         = "Miestas";
$GLOBALS['strCountry']                      = "Šalis";
$GLOBALS['strPhone']                        = "Telefonas";
$GLOBALS['strFax']                          = "Faksas";
$GLOBALS['strAccountContact']               = "Sąskaitos kontaktai";
$GLOBALS['strPayeeName']                    = "Remitento vardas";
$GLOBALS['strTaxID']                        = "Mokesčių ID";
$GLOBALS['strModeOfPayment']                = "Mokėjimo būdas";
$GLOBALS['strPaymentChequeByPost']          = "Pašto čekis";
$GLOBALS['strCurrency']                     = "Valiuta";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Kita informacija";
$GLOBALS['strUniqueUsersMonth']             = "Unikalūs vartotojai/mėnesį";
$GLOBALS['strUniqueViewsMonth']             = "Unikalūs peržiūrėjimai/mėnesį";
$GLOBALS['strPageRank']                     = "Puslapio kategorija";
$GLOBALS['strCategory']                     = "Kategorija";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Pagalbinis failas";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Internetiniai puslapiai ir zonos";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Zona";
$GLOBALS['strZones']                        = "Zonos";
$GLOBALS['strAddNewZone']                   = "Pridėti naują zoną";
$GLOBALS['strAddNewZone_Key']               = "Pridėti <u>n</u>aują zoną";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "Redaguoti zoną";
$GLOBALS['strZoneToWebsite']                = "Visi internetiniai puslapiai";
$GLOBALS['strLinkedZones']                  = "Linked Zones";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Zone Overview";
$GLOBALS['strZoneProperties']               = "Vartotojo ypatybės";
$GLOBALS['strZoneHistory']                  = "Zone History";
$GLOBALS['strNoZones']                      = "There are currently no zones defined for this website.";
$GLOBALS['strNoZonesAddWebsite']            = "There are currently no zones defined, because there are no websites. To create a zone, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strConfirmDeleteZone']            = "Ar tikrai norite ištrinti šią zoną";
$GLOBALS['strConfirmDeleteZones']           = "Ar tikrai norite ištrinti šią zoną";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "Už kampanijas prijungtas prie šios zonos sumokėta, jei ištrinsite jas, nebegalėsite jų paleisti ir jums už jas nebus sumokėta.";
$GLOBALS['strZoneType']                     = "Zonos tipas";
$GLOBALS['strBannerButtonRectangle']        = "Baneris, mygtukas ir stačiakampis";
$GLOBALS['strInterstitial']                 = "Interstitial or Floating DHTML";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "Text ad";
$GLOBALS['strEmailAdZone']                  = "El. pašto/ informacinio biuletenio zona";
$GLOBALS['strZoneClick']                    = "Paspaudimų sekimo zona";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Rodyti sutampančius banerius";
$GLOBALS['strHideMatchingBanners']          = "Slėpti sutampančius banerius";
$GLOBALS['strBannerLinkedAds']              = "Baneriai susieti su zona";
$GLOBALS['strCampaignLinkedAds']            = "Kampanijos susietos su zona";
$GLOBALS['strTotalZones']                   = "Viso zonų";
$GLOBALS['strInactiveZonesHidden']          = "neaktyvios zonos palsėptos";
$GLOBALS['strWarnChangeZoneType']           = "Keičiant zonos tipą į tekstinį ar elektroninį paštą atsies visus banerius/kampanijas dėl šių zonos tipų pažeidimų                                                 <ul>\\n                                                    <li>Tekstinės zonos gali būti priskirtos tik teksto ads</li>\\n                                                    <li>Elektroninio pašto zonos gali turėti tik vieną aktyvų banerį vienu metu</li>\\n                                                </ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Zonos pakeitimas  gali lemti tai, kad baneriai, kurie nėra naujojo dydžio bus nebesusieti su zona, ir gali pridėti kampanijų banerius, kurie atitinka šį dydį';
$GLOBALS['strWarnChangeBannerSize']         = 'Banerio dydžio keitimas atsies šį banerį nuo visų zonų, kurios nėra tokio dydžio koks jis dabar, o jei šio banerio <strong>kampanija</strong>susieta su naujo dydžio zona, tai šis baners bus susietas automatiškai';
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
$GLOBALS['strAdvanced']                    = "Papildomi nustatymai";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "Grandinės nustatymai";
$GLOBALS['strZoneNoDelivery']            = "Jei šioje zonoje nėra banerių <br />, tai negali būti pristatyta, pabandykite...";
$GLOBALS['strZoneStopDelivery']            = "Sustabdyti pristatymą ir nerodyti banerio";
$GLOBALS['strZoneOtherZone']            = "Rodyti pasirinktą zoną vietoj to";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "Visada pridėti HTML kodą baneriams rodomiems šioje zonoje";
$GLOBALS['strAppendSettings']            = "Papildyti ir pridėti nustatymų";
$GLOBALS['strZoneForecasting']            = "Zonos prognozių nustatymai";
$GLOBALS['strZonePrependHTML']            = "Visada įkelti HTML kodus rodomam tekstui šioje zonoje";
$GLOBALS['strZoneAppendHTML']            = "Visada pridėti HTML kodą tekstui, kuris rodomas šioje zonoje";
$GLOBALS['strZoneAppendNoBanner']        = "Pridėti net ir tuo atveju jei baneris nepristatytas";
$GLOBALS['strZoneAppendType']            = "Pridėjimo tipai";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML kodas";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup ir interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Visada papildyti šiuos popup langus ir intersitial, skirtus baneriams būti rodomiems šioje zonoje";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Visi baneriai priskirti pasirinktai zonai šiuo metu yra neaktyvūs. <br/> Šios zonos grandinė bus tokia:";
$GLOBALS['strZoneProbNullPri']            = "Prie šios zonos nėra priskirtų banerių. ";
$GLOBALS['strZoneProbListChainLoop']    = "Sekant zonos grandinę galimas uždaras ciklas. Atsiuntimas šioje zonoje sustabdytas. ";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Prašome pasirinkti ką norite susieti su šia zona";
$GLOBALS['strLinkedBanners']            = "Susieti individualius banerius";
$GLOBALS['strCampaignDefaults']            = "Susieti  banerius su pagrindine kampanija";
$GLOBALS['strLinkedCategories']         = "Susieti banerius pagal kategorijas";
$GLOBALS['strWithXBanners']                = "baneris";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "Raktinis žodis";
$GLOBALS['strIncludedBanners']            = "Linked Banners";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "Nėra galimų zonų su kuriomis galėtų būti susietas baneris";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{skaičiuoti} sutampantys baneriai";
$GLOBALS['strNoCampaignsToLink']        = "Nėra galimų kampanijų su kuriomis galėtų būti susietos su šia zona";
$GLOBALS['strNoTrackersToLink']            = "Šiuo metu nėra galimų agentų, kurie galėtų būti susieti su šia kampanija";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Nėra galimų zonų su kuriomis galėtų būti susieta ši kampanija";
$GLOBALS['strSelectBannerToLink']        = "Pasirinkite banerį, kurį norėtumėte susieti su šia zona:";
$GLOBALS['strSelectCampaignToLink']        = "Pasirinkite kampaniją, kurią norėtumėte susieti su šia zona:";
$GLOBALS['strSelectAdvertiser']         = "Pasirinkite reklamuotoją";
$GLOBALS['strSelectPlacement']          = "Pasirinkite kampaniją";
$GLOBALS['strSelectAd']                 = "Pasirinkite banerį";
$GLOBALS['strSelectPublisher']          = "Pasirinkite internetinį puslapį";
$GLOBALS['strSelectZone']               = "Pasirinkite zoną";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Append Tracker Code";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Laukiantis";
$GLOBALS['strStatusApproved']           = "Patvirtintas";
$GLOBALS['strStatusDisapproved']        = "Atmestas";
$GLOBALS['strStatusDuplicate']          = "Kopijuoti";
$GLOBALS['strStatusOnHold']             = "Laukiama";
$GLOBALS['strStatusIgnore']             = "Ignoruoti";
$GLOBALS['strConnectionType']           = "Tipas";
$GLOBALS['strConnTypeSale']             = "Parduoti";
$GLOBALS['strConnTypeLead']             = "Vadovauti";
$GLOBALS['strConnTypeSignUp']           = "Prisijungti";
$GLOBALS['strShortcutEditStatuses'] = "Redaguoti statusus";
$GLOBALS['strShortcutShowStatuses'] = "Rodyti statusus";

// Statistics
$GLOBALS['strStats']                     = "Statistika";
$GLOBALS['strNoStats']                   = "Šiuo metu nėra jokio prieinamos statistikos";
$GLOBALS['strNoTargetingStats']          = "Šiuo metu nėra jokio prieinamos pasirinktos statistikos";
$GLOBALS['strNoStatsForPeriod']          = "Šiuo metu nėra  statistikos nuo %s iki %s ";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Šiuo metu nėra pasirinktos  statistikos nuo %s iki %s ";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "Globalinė istorija";
$GLOBALS['strDailyHistory']              = "Kasdienė istorija";
$GLOBALS['strDailyStats']                = "Kasdienė statistika";
$GLOBALS['strWeeklyHistory']             = "Savaitinė istorija";
$GLOBALS['strMonthlyHistory']            = "Mėnesinė istorija";
$GLOBALS['strCreditStats']               = "Kreditų statistika";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "Viso per šį periodą";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Website Distribution";
$GLOBALS['strCampaignDistribution']      = "Campaign Distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Targeting Statistics";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Rodyti pagal";
$GLOBALS['strBreakdownByDay']            = "Diena";
$GLOBALS['strBreakdownByWeek']           = "Savaitė";
$GLOBALS['strBreakdownByMonth']          = "Mėnesis";
$GLOBALS['strBreakdownByDow']            = "Savaitės diena";
$GLOBALS['strBreakdownByHour']           = "Valanda";
$GLOBALS['strItemsPerPage']              = "Gaminiai per puslapį";
$GLOBALS['strDistributionHistory']       = "Paplitimų istorija";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Rodyti <u>G</u>rafas statistikos";
$GLOBALS['strExportStatisticsToExcel']   = "<u>Į</u>kelti statistiką į Excel failą";
$GLOBALS['strGDnotEnabled']              = "Jūs turite įgalinti GD veikimą pagal PHP. <br />Čia rasite <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> daugiau informacijos, įskaitant ir tai, kaip  įdiegti GD į jūsų serverį.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "Galiojimo pabaiga";
$GLOBALS['strNoExpiration']           = "Nėra galiojimo pasibaigimo nustatytos datos";
$GLOBALS['strEstimated']              = "Estimated expiration date";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Kampanijos pavadinimas";

// Reports
$GLOBALS['strReports']                = "Ataskaitos";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Internetinio puslapio ataskaitos";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "Pradžios data";
$GLOBALS['strEndDate']                = "Pasibaigimo data";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Periodas";
$GLOBALS['strLimitations']            = "Draudimai";
$GLOBALS['strWorksheets']             = "Darbalaukiai";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Visi reklamuotojai";
$GLOBALS['strAnonAdvertisers']           = "Anonimiški reklamos skleidėjai";
$GLOBALS['strAllPublishers']             = "Visi internetiniai puslapiai";
$GLOBALS['strAnonPublishers']            = "Anonimiški internetiniai puslapiai";
$GLOBALS['strAllAvailZones']             = "Visos galimos zonos";

// Userlog
$GLOBALS['strUserLog']                = "Vartotojo registracija";
$GLOBALS['strUserLogDetails']        = "Vartotojo registracijos detalės";
$GLOBALS['strDeleteLog']            = "Ištrinit regitraciją";
$GLOBALS['strAction']                = "Veiksmas";
$GLOBALS['strNoActionsLogged']        = "Nėra jokių registruotų veiksmų";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Tiesioginis pasirinkimas";
$GLOBALS['strChooseInvocationType']        = "Prašome pasirinkti banerio aktyvizacijos tipą";
$GLOBALS['strGenerate']                    = "Generuoti";
$GLOBALS['strParameters']                = "Tag nustatymai";
$GLOBALS['strFrameSize']                = "Rėmelių dydis";
$GLOBALS['strBannercode']                = "Banerio kodas";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Grįžti į ataskaitų sąrašą";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
$GLOBALS['strCharset']                  = "Ženklų nustatymus";
$GLOBALS['strAutoDetect']                   = "Auto radimas";
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
$GLOBALS['strMySQLError']                       = "SQL Error:";
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
$GLOBALS['strLogErrorClients']                  = "[phpAds] Atsirado klaida bandant paimti iš duomenų bazės reklamos skleidėjus.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Atsirado klaida bandant paimti iš duomenų bazės banerius.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Atsirado klaida bandant paimti iš duomenų bazės spaudą.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Atsirado klaida bandant paimti iš duomenų bazės paspaudimus.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Atsirado klaida bandant paimti iš duomenų bazės konvertavimus.";
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Jokių atitikmenų nerasta";
$GLOBALS['strErrorOccurred']                    = "Atsirado klaida";
$GLOBALS['strErrorUploadSecurity']              = "Rasta galima apsaugos klaida, siuntimas nutrauktas!";
$GLOBALS['strErrorUploadBasedir']               = "Priėjimas prie atsisiųsto failo negalimas, turbūt dėl  safemode ar open_basedir draudimų. ";
$GLOBALS['strErrorUploadUnknown']               = "Priėjimas prie atsisiųsto failo negalimas dėl nežinomų priežasčių. Prašome patikrinti Jūsų PHP konfigūraciją";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "Atsirado klaida priėjimu prie duomenų bazės metu";
$GLOBALS['strErrorDBSerious']                   = "Rasta rimta duomenų bazės problema";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Duomenų bazės lentelė greičiausiai yra sugadinta ir turi būti pataisyta. Daugiau informacijos apie sugadintų lenteliu taisymą prašome skaityti skyrių <i>Troubleshooting</i> iš <i>Administratoriaus gido</i>.";
$GLOBALS['strErrorDBContact']                   = "Prašome susisiekti su šio serverio administratoriumi ir ptanešti jam ar jai apie šią problemą. ";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "Neįmanoma ssieti šį banerį su šia zona, nes:";
$GLOBALS['strUnableToLinkBanner']               = "Negalima susieti šio banerio:";
$GLOBALS['strErrorEditingCampaign']             = "Klaida atnaujinant kampaniją:";
$GLOBALS['strUnableToChangeCampaign']           = "Neįmanoma patvirtinti šių pasikeitimų, nes:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Neįmanoma patvirtinti šių pasikeitimų, nes:";
$GLOBALS['strDatesConflict']                    = "datos prieštarauja su:";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Kai kurios iš šių statistikų buvo prijungtos  prie ne ne-UTC laiko zonos, ir gali būti rodomos neteisingu laiko zonos laiku. ";
$GLOBALS['strWarningInaccurateReadMore']        = "Skaitykite daugiau apie tai";
$GLOBALS['strWarningInaccurateReport']          = "Dalis  šios ataskaitos statistikos buvo priregistruoti į ne-UTC laiko zoną, ir gali būti rodoma neteisingoje laiko zonoje ";

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
$GLOBALS['strSirMadam']                         = "Pone/Madam";
$GLOBALS['strMailSubject']                      = "Reklamos skleidėjo ataskaita";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Brangus {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Žemiau rasite banerio statistiką, skirtą {klientvardas}: ";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampanija aktyvuota";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampanija deaktyvuota";
$GLOBALS['strMailBannerActivated']              = "Jūsų kampanija, rodoma žemiau, buvo aktyvuota, nes\\natėjo kampanijos aktyvavimo data.";
$GLOBALS['strMailBannerDeactivated']            = "Jūsų kampanija, rodoma žemiau, buvo deaktyvuota, nes";
$GLOBALS['strMailFooter']                       = "Pagarbiai,\\n   {administartoriauspilnasvardas}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "Jei ir toliau nori reklamuotis savo puslapyje, prašome susisiekti su mumis. \\nMes su nekantrumu laukiame žinių iš Jūsų.";
$GLOBALS['strClientDeactivated']                = "Ši kampanija šiuo metu neaktyvi, nes";
$GLOBALS['strBeforeActivate']                   = "aktyvacijos data dar neatėjo";
$GLOBALS['strAfterExpire']                      = "atėjo galiojimo pasibaigimo data";
$GLOBALS['strNoMoreImpressions']                = "nėra likusių spaudinių";
$GLOBALS['strNoMoreClicks']                     = "nėra likusių paspaudimų";
$GLOBALS['strNoMoreConversions']                = "nėra likusių išpardavimų";
$GLOBALS['strWeightIsNull']                     = "nustatytas nulinis svoris";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "Spauda, paspaudimai ir konvertavimas palikti jūsų baneriams mažėja ir baigia pasiekti {limit} limito ribą. \\nJūsų banerių veiksnumas bus apribotas jei neliks spaudos, paspaudimų ar konvertavimo.";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Spauda, paspaudimai ir konvertavimas yra žemi";
$GLOBALS['strNoViewLoggedInInterval']           = "Jokių spaudinių nerasta per šios ataskaitos trukmę (laiką)";
$GLOBALS['strNoClickLoggedInInterval']          = "Jokių paspaudimų nerasta per šios ataskaitos trukmę (laiką)";
$GLOBALS['strNoConversionLoggedInInterval']     = "Jokių konversijų nerasta per šios ataskaitos trukmę (laiką)";
$GLOBALS['strMailReportPeriod']                 = "Ataskaitoje yra statistinių duomenų nuo {pradžia} iki {pabaiga}.";
$GLOBALS['strMailReportPeriodAll']              = "Ataskaitoje yra statistinių duomenų iki {pabaigos data}.";
$GLOBALS['strNoStatsForCampaign']               = "Nėra jokių statistinių duomenų šiai kampanijai";
$GLOBALS['strImpendingCampaignExpiry']          = "Artėja kampanijos pasibaigimo data";
$GLOBALS['strYourCampaign']                     = "Jūsų kampanija";
$GLOBALS['strTheCampiaignBelongingTo']          = "Kampanija priklauso";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{klientovardas} rodomas žemiau baigiasi {data}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{klientovardas} rodomas žemiau turi spaudos limitą, kurios dydis yra {limitodydis}.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Kaip pasekmė, kampanijai bus automatiškai apriboti tam tikri veiksmai, ir\\nkampanijos baneriai taip pat bus apriboti: ";

// Priority
$GLOBALS['strPriority']                         = "Pirmenybė";
$GLOBALS['strSourceEdit']                       = "Koreguoti šaltinius";

// Preferences
$GLOBALS['strPreferences']                      = "Pirmenybė";
$GLOBALS['strUserPreferences']                  = "Vartotojo pirmenybės";
$GLOBALS['strChangePassword']                   = "pakeisti slaptažodį";
$GLOBALS['strChangeEmail']                      = "Pakeisti el.paštą";
$GLOBALS['strCurrentPassword']                  = "Dabartinis slaptažodis";
$GLOBALS['strChooseNewPassword']                = "Pasirinkite naują slaptažodį";
$GLOBALS['strReenterNewPassword']               = "Įveskite dar kartą naują slaptažodį";
$GLOBALS['strNameLanguage']                     = "Vardas ir kalba";
$GLOBALS['strAccountPreferences']               = "Sąskaitos pirmenybės";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Kampanijos e. pašto ataskaitų pirmenybės";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "Administratoriaus el. pašto įspėjimai";
$GLOBALS['strAgencyEmailWarnings']              = "Agentūros el. pašto įspėjimai";
$GLOBALS['strAdveEmailWarnings']                = "reklamuotojo el. pašto įspėjimai";
$GLOBALS['strFullName']                         = "Pilnas vardas";
$GLOBALS['strEmailAddress']                     = "El. pašto adresas";
$GLOBALS['strUserDetails']                      = "Vartotojo detalės";
$GLOBALS['strLanguageTimezone']                 = "Kalba ir Laiko zona";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "Vartotojo sąsajų pirmenybės";
$GLOBALS['strPluginPreferences']                = "Pagrindinės pirmenybės";
$GLOBALS['strInvocationPreferences']            = "Pakvietimo pirmenybės";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Revenue";
$GLOBALS['strNumberOfItems']                       = "Gaminių skaičius";
$GLOBALS['strRevenueCPC']                          = "Revenue CPC";
$GLOBALS['strERPM']                                = "CPM";
$GLOBALS['strERPC']                                = "CPC";
$GLOBALS['strERPS']                                = "CPM";
$GLOBALS['strEIPM']                                = "CPM";
$GLOBALS['strEIPC']                                = "CPC";
$GLOBALS['strEIPS']                                = "CPM";
$GLOBALS['strECPM']                                = "CPM";
$GLOBALS['strECPC']                                = "CPC";
$GLOBALS['strECPS']                                = "CPM";
$GLOBALS['strEPPM']                                = "CPM";
$GLOBALS['strEPPC']                                = "CPC";
$GLOBALS['strEPPS']                                = "CPM";
$GLOBALS['strPendingConversions']               = "Pending conversions";
$GLOBALS['strImpressionSR']                     = "Įspūdis";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Įspūdis";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "Rev.";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "Num. Items";
$GLOBALS['strRevenueCPC_short']                 = "Rev. CPC";
$GLOBALS['strERPM_short']                       = "CPM";
$GLOBALS['strERPC_short']                       = "CPC";
$GLOBALS['strERPS_short']                       = "CPM";
$GLOBALS['strEIPM_short']                       = "CPM";
$GLOBALS['strEIPC_short']                       = "CPC";
$GLOBALS['strEIPS_short']                       = "CPM";
$GLOBALS['strECPM_short']                       = "CPM";
$GLOBALS['strECPC_short']                       = "CPC";
$GLOBALS['strECPS_short']                       = "CPM";
$GLOBALS['strEPPM_short']                       = "CPM";
$GLOBALS['strEPPC_short']                       = "CPC";
$GLOBALS['strEPPS_short']                       = "CPM";
$GLOBALS['strID_short']                         = "ID";
$GLOBALS['strRequests_short']                   = "Req.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "Paspaudimai";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Bendri nustatymai";
$GLOBALS['strGeneralSettings']              = "Bendri nustatymai";
$GLOBALS['strMainSettings']                 = "Pagrindiniai nustatymai";
$GLOBALS['strAdminSettings']                = "Administratoriaus nustatymai";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Pasirinkti dalį';

// Product Updates
$GLOBALS['strProductUpdates']         = "Prekės atnaujinimas";
$GLOBALS['strViewPastUpdates']        = "Rasti senus atnaujinimus ir Backups";
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
$GLOBALS['strAddAgency_Key']               = "Pridėti <u>n</u>aują zoną";
$GLOBALS['strTotalAgencies']               = "Total accounts";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "Nerasta jokių zonų";
$GLOBALS['strConfirmDeleteAgency']           = "Ar tikrai norite ištrinti šią zoną";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive accounts";
$GLOBALS['strInactiveAgenciesHidden']     = "neaktyvios zonos palsėptos";
$GLOBALS['strAllowAgencyEditConversions'] = "Leisti šiam vartotojui redaguoti konvertavimus";
$GLOBALS['strAllowMoreReports']           = "Pridėti 'Daugiau ataskaitų' mygtuką";
$GLOBALS['strSwitchAccount']              = "Perjungti į šią sąskaitą";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "Targeting Channels";
$GLOBALS['strChannelOverview']            = "Targeting Channel Overview";
$GLOBALS['strChannelManagement']          = "Targeting Channel Management";
$GLOBALS['strAddNewChannel']              = "Add new Targeting Channel";
$GLOBALS['strAddNewChannel_Key']          = "Add <u>n</u>ew Targeting Channel";
$GLOBALS['strChannelToWebsite']           = "Visi internetiniai puslapiai";
$GLOBALS['strNoChannels']                 = "There are currently no targeting channels defined";
$GLOBALS['strNoChannelsAddWebsite']       = "There are currently no targeting channels defined, because there are no websites. To create a targeting channel, <a href='affiliate-edit.php'>add a new website</a> first.";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "Targeting Channel properties";
$GLOBALS['strChannelLimitations']         = "Delivery Options";
$GLOBALS['strConfirmDeleteChannel']       = "Ar tikrai norite ištrinti šį banerį?";
$GLOBALS['strConfirmDeleteChannels']      = "Ar tikrai norite ištrinti šį banerį?";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Kintamas vardas";
$GLOBALS['strVariableDescription']     = "Aprašymas";
$GLOBALS['strVariableDataType']         = "Duomenų tipas";
$GLOBALS['strVariablePurpose']       = "Tikslas";
$GLOBALS['strGeneric']               = "Bendras";
$GLOBALS['strBasketValue']           = "Krepšelio vertė";
$GLOBALS['strNumItems']              = "Gaminių skaičius";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Skaičius";
$GLOBALS['strString']                 = "Eilė";
$GLOBALS['strTrackFollowingVars']     = "Susekti sekantį kintamąjį";
$GLOBALS['strAddVariable']             = "Pridėti kintamąjį ";
$GLOBALS['strNoVarsToTrack']         = "Nėra kintamųjų, kuriuos būtų galima susekti";
$GLOBALS['strVariableHidden']       = "Paslėpti kintamas ataskaitas";
$GLOBALS['strVariableRejectEmpty']  = "Atmesti jei tusčia?";
$GLOBALS['strTrackingSettings']     = "Sekimo nustatymai";
$GLOBALS['strTrackerType']          = "Agento tippas";
$GLOBALS['strTrackerTypeJS']        = "Susekti JavaScript kintamuosius";
$GLOBALS['strTrackerTypeDefault']   = "Susekti JavaScript kintamuosius (priešingus sutaikomus, išėjimo reikalaujamus)";
$GLOBALS['strTrackerTypeDOM']       = "Susekti HTML elementus, naudojantis DOM";
$GLOBALS['strTrackerTypeCustom']    = "Įprastas JS kodas";
$GLOBALS['strVariableCode']         = "Javascript sekimo kodas";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Reklamos skelbėjai ir kampanijos";
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
$GLOBALS['strForgotPassword']         = "Pamiršote savo slaptažodį?";
$GLOBALS['strPasswordRecovery']       = "Slaptažodžio gražinimas";
$GLOBALS['strEmailRequired']          = "Privaloma užpildyti elektroninį lauką";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Elektroninis adresas nerastas";
$GLOBALS['strPwdRecPasswordSaved']    = "Naujasis slaptažodis buvo išsaugotas, tęskite <a href='index.php'> prisijungimą </a>";
$GLOBALS['strPwdRecWrongId']          = "Neteisingas ID ";
$GLOBALS['strPwdRecEnterEmail']       = "Įveskite savo elektroninio pašto adresą žemiau";
$GLOBALS['strPwdRecEnterPassword']    = "Įveskite savo slaptažodį žemiau";
$GLOBALS['strPwdRecReset']            = "Atnaujinti slaptažodį";
$GLOBALS['strPwdRecResetLink']        = "Slaptažodžio pakeitimo nuoroda";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Pakartokite slaptažodį šiam vartotojui";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s slaptažodžio grąžinimas";
$GLOBALS['strProceed']                = "Tęskite >";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "Pridėti papildomų punktų";
$GLOBALS['strFor']                    = "skirta";
$GLOBALS['strHas']                    = "turi";
$GLOBALS['strAdZoneAsscociation']     = "Pridėti zonos asociaciją";
$GLOBALS['strBinaryData']             = "Dvejetainė data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail naudojimas administrtoriui buvo apribotas. Jokių įvykių Audit Trail sąraše neberegistruojama ir neberodoma. ";
$GLOBALS['strAccount']                  = "Account";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "Įvykis";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "Per laiko tarpą, kurį pasirinkote jokia vartotojo veikla neužfiksuota";
$GLOBALS['strAuditTrail']             = "Audit trail";
$GLOBALS['strAuditTrailSetup']          = "Nustatykite Audit trail šiandien";
$GLOBALS['strAuditTrailGoTo']           = "Eiti į Audit trail puslapį";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Eiti į kampanijos puslapį";
$GLOBALS['strCampaignSetUp']            = "Nustatyti kampaniją šiandien";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li> Nėra jokių įrašų atvaizduoti kampanijos veiklą.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "Per laiko tarpą, kurį pasirinkote jokia kampanija neprasidėjo ir nesibaigė";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>Jei norite peržiūrėti kampanijas, kurios prasidėjo arba kurios jau baigėsi, pagal tam tikrą laiką intervalą, kurį nustatėte, Audit trail turi būti aktyvuotas</li>	        <li>Jūs matote šį pranešimą, nes dar neaktyvavote patikrinimo keliol</li>";
$GLOBALS['strCampaignAuditTrailSetup']   = "Aktyvuokite Audit Trail norėdami pradėti peržiūrėti kampanijas";

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
