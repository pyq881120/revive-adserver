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
$GLOBALS['phpAds_ThousandsSeperator']   = " ";

// Date & time configuration
$GLOBALS['date_format']                 = "%d.%m.%Y";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m.%Y";
$GLOBALS['day_format']                  = "%d.%m";
$GLOBALS['week_format']                 = "%W.%Y";
$GLOBALS['weekiso_format']              = "%V.%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Home";
$GLOBALS['strHelp']                     = "Nápověda";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Start over";
$GLOBALS['strNavigation']               = "Navigace";
$GLOBALS['strShortcuts']                = "Zkratka";
$GLOBALS['strActions']                  = "Akce";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Inventář";
$GLOBALS['strMaintenance']              = "Správa";
$GLOBALS['strProbability']              = "Pravděpodobnost";
$GLOBALS['strInvocationcode']           = "Zobrazovací kód";
$GLOBALS['strTrackerVariables']         = "Proměnné Sledovače";
$GLOBALS['strBasicInformation']         = "Základní údaje";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Obchodní údaje";
$GLOBALS['strLoginInformation']         = "Přihlašovací údaje";
$GLOBALS['strLogoutURL']                = "URL to redirect to on logout. <br />Blank for default";
$GLOBALS['strAppendTrackerCode']        = "Append Tracker Code";
$GLOBALS['strOverview']                 = "Přehled";
$GLOBALS['strSearch']                   = "<u>V</u>yhledávání";
$GLOBALS['strHistory']                  = "Historie";
$GLOBALS['strDetails']                  = "Detaily";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Kontrolovat aktualizace";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Kompaktní";
$GLOBALS['strVerbose']                  = "Podrobné";
$GLOBALS['strUser']                     = "Uživatel";
$GLOBALS['strEdit']                     = "Upravit";
$GLOBALS['strCreate']                   = "Vytvořit";
$GLOBALS['strDuplicate']                = "Duplikovat";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Přesunout";
$GLOBALS['strDelete']                   = "Smazat";
$GLOBALS['strActivate']                 = "Aktivovat";
$GLOBALS['strDeActivate']               = "Deaktivovat";
$GLOBALS['strConvert']                  = "Konvertovat";
$GLOBALS['strRefresh']                  = "Obnovit";
$GLOBALS['strSaveChanges']              = "Uložit změny";
$GLOBALS['strUp']                       = "Nahoru";
$GLOBALS['strDown']                     = "Dolů";
$GLOBALS['strSave']                     = "Uložit";
$GLOBALS['strCancel']                   = "Zrušit";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "Předchozí";
$GLOBALS['strPrevious_Key']             = "<u>P</u>ředchozí";
$GLOBALS['strNext']                     = "Následující";
$GLOBALS['strNext_Key']                 = "<u>N</u>ásledující";
$GLOBALS['strYes']                      = "Ano";
$GLOBALS['strNo']                       = "Ne";
$GLOBALS['strNone']                     = "Žádné";
$GLOBALS['strCustom']                   = "Vlastní";
$GLOBALS['strDefault']                  = "Implicitní";
$GLOBALS['strOther']                    = "Jiné";
$GLOBALS['strUnknown']                  = "Neznámé";
$GLOBALS['strUnlimited']                = "Neomezené";
$GLOBALS['strUntitled']                 = "Bezejména";
$GLOBALS['strAll']                      = "všechny";
$GLOBALS['strAvg']                      = "Prům.";
$GLOBALS['strAverage']                  = "Průměr";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Celkový přehled";
$GLOBALS['strTotal']                    = "Celkem";
$GLOBALS['strUnfilteredTotal']          = "Total (nefiltrovaných)";
$GLOBALS['strFilteredTotal']            = "Total (filtrovaných)";
$GLOBALS['strActive']                   = "aktivní";
$GLOBALS['strFrom']                     = "Od";
$GLOBALS['strTo']                       = "do";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "připojení k";
$GLOBALS['strDaysLeft']                 = "Zbývá dnů";
$GLOBALS['strCheckAllNone']             = "Označit vše / nic";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>R</u>ozšířit vše";
$GLOBALS['strCollapseAll']              = "<u>S</u>loučit vše";
$GLOBALS['strShowAll']                  = "Ukázat vše";
$GLOBALS['strNoAdminInterface']         = "Služba není dostupná...";
$GLOBALS['strFilterBySource']           = "filtrovat podle zdroje";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "Následující položky obsahují chyby:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Než budete moci pokračovat potřebujete";
$GLOBALS['strFieldFixBeforeContinue2']  = "opravit tyto chyby.";
$GLOBALS['strDelimiter']                = "Oddělovač";
$GLOBALS['strMiscellaneous']            = "Různé";
$GLOBALS['strCollectedAllStats']        = "Všechny statistiky";
$GLOBALS['strCollectedToday']           = "Dnes";
$GLOBALS['strCollectedYesterday']       = "Včera";
$GLOBALS['strCollectedThisWeek']        = "Tento týden (Po-Ne)";
$GLOBALS['strCollectedLastWeek']        = "Minulý týden (Po-Ne)";
$GLOBALS['strCollectedThisMonth']       = "Tento měsíc";
$GLOBALS['strCollectedLastMonth']       = "Minulý měsíc";
$GLOBALS['strCollectedLast7Days']       = "Posledních 7 dní";
$GLOBALS['strCollectedSpecificDates']   = "Specific dates";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "Admin";
$GLOBALS['strWarning']                  = "Warning";
$GLOBALS['strNotice']                   = "Notice";
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
$GLOBALS['strPriority']                 = "Priorita";
$GLOBALS['strPriorityLevel']            = "Úroveň priority";
$GLOBALS['strPriorityTargeting']        = "Distribuce";
$GLOBALS['strPriorityOptimisation']     = "Různé"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Limitations";
$GLOBALS['strNoLimitations']            = "Bez omezení";
$GLOBALS['strCapping']                  = "Capping";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Jméno";
$GLOBALS['strSize']                     = "Velikost";
$GLOBALS['strWidth']                    = "Šířka";
$GLOBALS['strHeight']                   = "Výška";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Cíl";
$GLOBALS['strLanguage']                 = "Jazyk";
$GLOBALS['strDescription']              = "Popis";
$GLOBALS['strVariables']                = "Proměnné";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Comments";

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
$GLOBALS['strLinkUserHelpUser']         = "Jméno";
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
$GLOBALS['strUserProperties']           = "Nastavení banneru";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "Autentifikace";
$GLOBALS['strWelcomeTo']                = "Vítejte do";
$GLOBALS['strEnterUsername']            = "Pro přihlásení zadejte vaše uživatelské jméno a heslo";
$GLOBALS['strEnterBoth']                = "Prosím zadejte vaše jméno i heslo";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "Přihlásit";
$GLOBALS['strLogout']                   = "Odhlásit";
$GLOBALS['strUsername']                 = "Jméno";
$GLOBALS['strPassword']                 = "Heslo";
$GLOBALS['strPasswordRepeat']           = "Zopakujte heslo";
$GLOBALS['strAccessDenied']             = "Přístup odepřen";
$GLOBALS['strUsernameOrPasswordWrong']  = "The username and/or password were not correct. Please try again.";
$GLOBALS['strPasswordWrong']            = "Toto není správné heslo";
$GLOBALS['strParametersWrong']          = "Parametry, které jste zadal nejsou správné";
$GLOBALS['strNotAdmin']                 = "Zřejmě nemáte dostatečné oprávnění";
$GLOBALS['strDuplicateClientName']      = "Zadané uživatelské jméno již existuje. Prosím zadejte jiné jméno.";
$GLOBALS['strDuplicateAgencyName']      = "Zadané uživatelské jméno již existuje. Prosím zadejte jiné jméno.";
$GLOBALS['strInvalidPassword']          = "Zadané heslo je špatné. Prosím zadejte jiné heslo.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "Dvě hesla která jste zadal nejsou stejná.";
$GLOBALS['strRepeatPassword']           = "Zopakujte heslo";
$GLOBALS['strOldPassword']              = "Staré heslo";
$GLOBALS['strNewPassword']              = "Nové heslo";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "Requests";
$GLOBALS['strImpressions']              = "Impressions";
$GLOBALS['strClicks']                   = "Kliknutí";
$GLOBALS['strConversions']              = "Prodeje";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Poměr prodeje";
$GLOBALS['strCPC']                      = "Náklad na klik";
$GLOBALS['strCPCo']                     = "Náklad na prodej";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Celkem zobrazení";
$GLOBALS['strTotalClicks']              = "Celkem kliknutí";
$GLOBALS['strTotalConversions']         = "Celkem prodejů";
$GLOBALS['strViewCredits']              = "Kreditůzobrazení";
$GLOBALS['strClickCredits']             = "Kredit kliknutí";
$GLOBALS['strConversionCredits']        = "Kredit prodeje";
$GLOBALS['strImportStats']              = "Import statistik";
$GLOBALS['strDateTime']                 = "Date Time";
$GLOBALS['strTrackerID']                = "Tracker ID";
$GLOBALS['strTrackerName']              = "Tracker Name";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Bannery";
$GLOBALS['strCampaigns']                = "Skrytá kampaň";
$GLOBALS['strCampaignID']               = "Campaign ID";
$GLOBALS['strCampaignName']             = "Historie kampaně";
$GLOBALS['strCountry']                  = "Země";
$GLOBALS['strStatsAction']              = "Akce";
$GLOBALS['strWindowDelay']              = "Window delay";
$GLOBALS['strStatsVariables']           = "Proměnné";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Tenancy";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Datum";
$GLOBALS['strToday']                    = "Dnes";
$GLOBALS['strDay']                      = "Den";
$GLOBALS['strDays']                     = "Dní";
$GLOBALS['strLast7Days']                = "Posledních 7 dní";
$GLOBALS['strWeek']                     = "Týden";
$GLOBALS['strWeeks']                    = "Týdnů";
$GLOBALS['strSingleMonth']              = "Měsíců";
$GLOBALS['strMonths']                   = "Měsíců";
$GLOBALS['strDayOfWeek']                = "Day of week";
$GLOBALS['strThisMonth']                = "Tento měsíc";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Hodina";
$GLOBALS['strHourFilter']               = "Filtr hodin";
$GLOBALS['strSeconds']                  = "vteřin";
$GLOBALS['strMinutes']                  = "minut";
$GLOBALS['strHours']                    = "hodin";
$GLOBALS['strTimes']                    = "krát";

// Advertiser
$GLOBALS['strClient']                       = "Inzerent";
$GLOBALS['strClients']                      = "Inzerenti";
$GLOBALS['strClientsAndCampaigns']          = "Inzerenti & Kampaně";
$GLOBALS['strAddClient']                    = "Přidat inzerenta";
$GLOBALS['strAddClient_Key']                = "Přidat <u>i</u>nzerenta";
$GLOBALS['strTotalClients']                 = "Celkem inzerentů";
$GLOBALS['strClientProperties']             = "Nastavení inzerenta";
$GLOBALS['strClientHistory']                = "Historie inzerenta";
$GLOBALS['strNoClients']                    = "Zatím nejsou definování žádní inzerenti";
$GLOBALS['strNoClientsForBanners']          = "There are currently no advertisers defined. To add banners you need to <a href='advertiser-edit.php'>add new advertiser</a> and campaign first.";
$GLOBALS['strConfirmDeleteClient']          = "Opravdu chcete smazat tohoto inzerenta?";
$GLOBALS['strConfirmDeleteClients']         = "Opravdu chcete smazat tohoto inzerenta?";
$GLOBALS['strConfirmResetClientStats']      = "Opravdu chcete smazat všechny existující statistiky tohoto inzerenta?";
$GLOBALS['strSite']                         = "Velikost";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "Skrýt neaktivní inzerenty";
$GLOBALS['strInactiveAdvertisersHidden']    = "nekativních inzerent(ů) skryto";
$GLOBALS['strOverallAdvertisers']           = "Inzerenti";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Inzerenti & Kampaně";
// Advertisers properties
$GLOBALS['strContact']                          = "Kontakt";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "Zaslat přehled inzerce e-mailem";
$GLOBALS['strNoDaysBetweenReports']             = "Počet dní mezi přehledy";
$GLOBALS['strSendDeactivationWarning']          = "Zaslat upozornění při deaktivaci kampaně";
$GLOBALS['strAllowClientModifyInfo']            = "Povolit tomuto uživateli měnit vlastní nastavení";
$GLOBALS['strAllowClientModifyBanner']          = "Povolit uživateli měnit vlastní bannery";
$GLOBALS['strAllowClientAddBanner']             = "Povolit uživateli vkládat vlastní bannery";
$GLOBALS['strAllowClientDisableBanner']         = "Povolit uživateli deaktivovat vlastní bannery";
$GLOBALS['strAllowClientActivateBanner']        = "Povolit uživateli aktivovat vlastní bannery";
$GLOBALS['strAllowClientViewTargetingStats']    = "Povolit uživateli prohlížet statistiky cílení";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "Allow this user to import offline conversions";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Skrytá kampaň";
$GLOBALS['strCampaigns']                    = "Skrytá kampaň";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Celkem kampaní";
$GLOBALS['strActiveCampaigns']              = "Aktivních kampaní";
$GLOBALS['strAddCampaign']                  = "Přidat kampaň";
$GLOBALS['strAddCampaign_Key']              = "Přidat <u>k</u>ampaň";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Vytvořit novou kampaň";
$GLOBALS['strModifyCampaign']               = "Upravit kampaň";
$GLOBALS['strMoveToNewCampaign']            = "Přesunout do nové kampaně";
$GLOBALS['strBannersWithoutCampaign']       = "Bannery bez kampaně";
$GLOBALS['strDeleteAllCampaigns']           = "Smazat všechny kampaně";
$GLOBALS['strLinkedCampaigns']              = "Připojené kampaně";
$GLOBALS['strCampaignStats']                = "Statistiky kampaně";
$GLOBALS['strCampaignProperties']           = "Nastavení kampaně";
$GLOBALS['strCampaignOverview']             = "Přehled kampaně";
$GLOBALS['strCampaignHistory']              = "Historie kampaně";
$GLOBALS['strNoCampaigns']                  = "V tuto chvíli nejsou definované žádné kampaně";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Opravdu chcete smazat všechny kampaně tohoto inzerenta?";
$GLOBALS['strConfirmDeleteCampaign']        = "Opravdu chcete smazat tuto kampaň?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Opravdu chcete smazat tuto kampaň?";
$GLOBALS['strConfirmResetCampaignStats']    = "Opravdu chcete smazat všechny statistiky pro tuto kampaň?";
$GLOBALS['strShowParentAdvertisers']        = "Show parent advertisers";
$GLOBALS['strHideParentAdvertisers']        = "Hide parent advertisers";
$GLOBALS['strHideInactiveCampaigns']        = "Skrýt neaktivní kampaně";
$GLOBALS['strInactiveCampaignsHidden']      = "neaktivních kampaní skryto";
$GLOBALS['strContractDetails']              = "Detail zakázky";
$GLOBALS['strInventoryDetails']             = "Detail inventáře";
$GLOBALS['strPriorityInformation']          = "Informace o prioritě";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Skrytá kampaň";
$GLOBALS['strHiddenAd']                     = "Advertisement";
$GLOBALS['strHiddenAdvertiser']             = "Inzerent";
$GLOBALS['strHiddenTracker']                = "Sledovač";
$GLOBALS['strHiddenWebsite']              = "Website";
$GLOBALS['strHiddenZone']                   = "Zóna";
$GLOBALS['strUnderdeliveringCampaigns']     = "Neplnící kampaně";
$GLOBALS['strCampaignDelivery']             = "Doručování kampaně";
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
$GLOBALS['strDontExpire']                       = "Tato kampaň nikdy automaticky neexpiruje";
$GLOBALS['strActivateNow']                      = "Okamžitě aktivovat tuto kampaň";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Nízká";
$GLOBALS['strHigh']                             = "Vysoká";
$GLOBALS['strExpirationDate']                   = "Koncové datum";
$GLOBALS['strExpirationDateComment']            = "Kampaň skončí na konci tohoto dne";
$GLOBALS['strActivationDate']                   = "Počáteční datum";
$GLOBALS['strActivationDateComment']            = "Kampaň začne na začatku tohoto dne";
$GLOBALS['strRevenueInfo']                      = "Revenue Information";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "Impressions Remaining";
$GLOBALS['strClicksRemaining']                  = "Clicks Remaining";
$GLOBALS['strConversionsRemaining']             = "Conversions Remaining";
$GLOBALS['strImpressionsBooked']                = "Impressions Booked";
$GLOBALS['strClicksBooked']                     = "Clicks Booked";
$GLOBALS['strConversionsBooked']                = "Conversions Booked";
$GLOBALS['strCampaignWeight']                   = "Váha kampaně";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimalizace";
$GLOBALS['strAnonymous']                        = "Skrýt inzerenta a vydavatele této kampaně.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Zobrazit bannery této kampaně s nízkou prioritou.<br> Tato kampaň se používá pro zbytková zobrazení, která nejsou využita kampaněmi s vysokou prioritou.";
$GLOBALS['strTargetPerDay']                     = "za den.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Distribuovat zbývající počet AdViews rovnoměrně na zbývající dny. Zbývající počet AdViews bude vypočítán přiměřeně každý den.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Priorita této kampaně byla nastavena na nízkou, \\nale váha byla nastavena na nulu nebo nebyla \\nzadána. Takto bude kampaň okamžitě \\ndeaktivována a její bannery nebudou doručeny \\ndokud její váha nebude nastavena na platné číslo. \\n\\nJste si jist že chcete pokračovat?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Priorita této kampaně byla nastavena na vysokou, \\nale cílový počet AdViews nebyl zadán. \\nTakto bude kampaň okamžitě deaktivována a\\njejí bannery nebudou doručeny dokdu nebude \\nnastaven platný počet AdViews. \\n\\nJste si jist že chcete pokračovat?";
$GLOBALS['strCampaignStatusPending']            = "Pending";
$GLOBALS['strCampaignStatusInactive']           = "aktivní";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Paused";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Restarted";
$GLOBALS['strCampaignStatusDeleted']            = "Smazat";
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
$GLOBALS['strCampaignType']                     = "Historie kampaně";
$GLOBALS['strType']                             = "Type";
$GLOBALS['strContract']                         = "Kontakt";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Kontakt";
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
$GLOBALS['strTracker']                    = "Sledovač";
$GLOBALS['strTrackers']                   = "Sledovač";
$GLOBALS['strTrackerOverview']            = "Přehled sledovače";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "Přidat nový sledovač";
$GLOBALS['strAddTracker_Key']             = "Přidat <u>n</u>ový sledovač";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "V tuto chvíli nejsou definovány ádné sledovače";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Opravdu chcete smazat všechny sledovače tohoto inzerenta?";
$GLOBALS['strConfirmDeleteTrackers']      = "Opravdu chcete smazat tento sledovač?";
$GLOBALS['strConfirmDeleteTracker']       = "Opravdu chcete smazat tento sledovač?";
$GLOBALS['strDeleteAllTrackers']          = "Smazat všechny sledovače";
$GLOBALS['strTrackerProperties']          = "Vlastnosti sledovače";
$GLOBALS['strTrackerOverview']            = "Přehled sledovače";
$GLOBALS['strModifyTracker']              = "Upravit sledovač";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "Default Status";
$GLOBALS['strStatus']                     = "Status";
$GLOBALS['strLinkedTrackers']             = "Připojené sledovače";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Okno převodu";
$GLOBALS['strUniqueWindow']               = "Unique window";
$GLOBALS['strClick']                      = "Klik";
$GLOBALS['strView']                       = "Zobrazení";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Impression";
$GLOBALS['strConversionClickWindow']      = "Měřit prodeje které proběhnou během uvedeného časového rozmezí (vteřin) od kliknutí";
$GLOBALS['strConversionViewWindow']       = "Měřit prodeje které proběhnou během uvedeného časového rozmezí (vteřin) od zobrazení";
$GLOBALS['strTotalTrackerImpressions']    = "Celkem zobrazení";
$GLOBALS['strTotalTrackerConnections']    = "Celkem spojení";
$GLOBALS['strTotalTrackerConversions']    = "Celkem prodejů";
$GLOBALS['strTrackerImpressions']         = "Zobrazení";
$GLOBALS['strTrackerImprConnections']     = "Spojení zobrazení";
$GLOBALS['strTrackerClickConnections']    = "Spojení kliknutí";
$GLOBALS['strTrackerImprConversions']     = "Prodejních zobrazení";
$GLOBALS['strTrackerClickConversions']    = "Prodejních kliknutí";
$GLOBALS['strConversionType']             = "Conversion Type";
$GLOBALS['strLinkCampaignsByDefault']     = "Link newly created campaigns by default";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Banner";
$GLOBALS['strBanners']                       = "Bannery";
$GLOBALS['strBannerFilter']                  = "Filtr bannerů";
$GLOBALS['strAddBanner']                     = "Přidat banner";
$GLOBALS['strAddBanner_Key']                 = "Přidat <u>b</u>anner";
$GLOBALS['strBannerToCampaign']              = "to campaign";
$GLOBALS['strModifyBanner']                  = "Upravit banner";
$GLOBALS['strActiveBanners']                 = "Aktivních bannerů";
$GLOBALS['strTotalBanners']                  = "Celkem bannerů";
$GLOBALS['strShowBanner']                    = "Zobrazit banner";
$GLOBALS['strShowAllBanners']                = "Zobrazit všechny bannery";
$GLOBALS['strShowBannersNoAdViews']          = "Zobrazit bannery bez zobrazení";
$GLOBALS['strShowBannersNoAdClicks']         = "Zobrazit bannery bez kliknutů";
$GLOBALS['strShowBannersNoAdConversions']    = "Zobrazit bannery bez prodeje";
$GLOBALS['strDeleteAllBanners']              = "Smazat všechny bannery";
$GLOBALS['strActivateAllBanners']            = "Aktivovat všechny bannery";
$GLOBALS['strDeactivateAllBanners']          = "Deaktivovat všechny bannery";
$GLOBALS['strBannerOverview']                = "Přehled bannerů";
$GLOBALS['strBannerProperties']              = "Nastavení banneru";
$GLOBALS['strBannerHistory']                 = "Historie banneru";
$GLOBALS['strBannerNoStats']                 = "Pro tento banner zatím nejsou žádné statistiky";
$GLOBALS['strNoBanners']                     = "Zatím nejsou definovány žádné bannery";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "There are currently no banners defined, because there are no advertisers. To create a banner, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strConfirmDeleteBanner']           = "Opravdu chcete smazat tento banner?";
$GLOBALS['strConfirmDeleteBanners']          = "Opravdu chcete smazat tento banner?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Opravdu chcete smazat všechny bannery které patří k této kampani?";
$GLOBALS['strConfirmResetBannerStats']       = "Opravdu chcete smazat všechny statistiky tohoto banneru?";
$GLOBALS['strShowParentCampaigns']           = "Zobrazit nadřazené kampaně";
$GLOBALS['strHideParentCampaigns']           = "Skrýt nadřazené kampaně";
$GLOBALS['strHideInactiveBanners']           = "Skrýt neaktivní bannery";
$GLOBALS['strInactiveBannersHidden']         = "neaktivních bannerů skryto";
$GLOBALS['strAppendOthers']                  = "Připojit jiné";
$GLOBALS['strAppendTextAdNotPossible']       = "Není možné připojit jiné bannery k textové reklamě.";
$GLOBALS['strHiddenBanner']                  = "Skrytý banner";
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
$GLOBALS['strDefaultBannerDestination']              = "Default Destination URL";
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
$GLOBALS['strChooseBanner']         = "Prosím vyberte typ banneru";
$GLOBALS['strMySQLBanner']             = "Lokální banner (SQL)";
$GLOBALS['strWebBanner']               = "Lokální banner (Webserver)";
$GLOBALS['strURLBanner']               = "Externí banner";
$GLOBALS['strHTMLBanner']              = "HTML banner";
$GLOBALS['strTextBanner']              = "Textová reklama";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Přejete se zachovat <br>současný obrázek, nebo <br>chcete nahrát jiný?";
$GLOBALS['strUploadOrKeepAlt']        = "Přejete se zachovat <br>současný alternativní obrázek, nebo <br>chcete nahrát jiný?";
$GLOBALS['strNewBannerFile']         = "Zvolte obrázek, který <br>chcete použít pro tento banner<br><br>";
$GLOBALS['strNewBannerFileAlt']     = "Vyberte alternativní obrázek, který <br>chcete použít pro prohlížeče,<br>které nepodporují rich-media<br><br>";
$GLOBALS['strNewBannerURL']         = "URL obrázku (včetně http://)";
$GLOBALS['strURL']                     = "Cílová URL (incl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Klíčová slova";
$GLOBALS['strTextBelow']             = "Text pod obrázkem";
$GLOBALS['strWeight']                 = "Váha";
$GLOBALS['strAlt']                     = "Alt text";
$GLOBALS['strStatusText']            = "Stavový text";
$GLOBALS['strBannerWeight']            = "Váha banneru";
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
$GLOBALS['strCheckSWF']                = "Převést pevné odkazy uvnitř Flash souboru";
$GLOBALS['strConvertSWFLinks']        = "Převést Flash odkazy";
$GLOBALS['strHardcodedLinks']        = "Pevné odkazy";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Komprimovat SWF soubor pro rychlejší stahování (vyžaduje přehrávač Flash 6)";
$GLOBALS['strOverwriteSource']        = "Přepsat zdrojový parametr";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML vzor";
$GLOBALS['strChooseNetwork']        = "Zvolte vzor který chcete použít";
$GLOBALS['strMoreInformation']        = "Více informací...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Sledovat AdClicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Nastavení doručování";
$GLOBALS['strACL']                        = "Doručování";
$GLOBALS['strACLAdd']                     = "Přidat omezení";
$GLOBALS['strACLAdd_Key']                 = "Přidat <u>o</u>mezení";
$GLOBALS['strNoLimitations']              = "Bez omezení";
$GLOBALS['strApplyLimitationsTo']         = "Aplikovat omezení na";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Odstranit všechna omezení";
$GLOBALS['strEqualTo']                    = "je rovno";
$GLOBALS['strDifferentFrom']              = "liší se od";
$GLOBALS['strLaterThan']                  = "je později než";
$GLOBALS['strLaterThanOrEqual']           = "je později nebo rovno";
$GLOBALS['strEarlierThan']                = "je dříve než";
$GLOBALS['strEarlierThanOrEqual']         = "je dříve nebo rovno";
$GLOBALS['strContains']                   = "obsahuje";
$GLOBALS['strNotContains']                = "neobsahuje";
$GLOBALS['strGreaterThan']                = "je později než";
$GLOBALS['strLessThan']                   = "is less than";
$GLOBALS['strAND']                        = "A";                          // logical operator
$GLOBALS['strOR']                         = "NEBO";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Zobrazit tento banner pouze:";
$GLOBALS['strWeekDay']                    = "V pracovní den";
$GLOBALS['strWeekDays']                   = "V pracovní den";
$GLOBALS['strTime']                       = "Čas";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Doména";
$GLOBALS['strClientIP']                   = "IP klienta";
$GLOBALS['strSource']                     = "Zdroj";
$GLOBALS['strSourceFilter']               = "Filtr zdroje";
$GLOBALS['strBrowser']                    = "Prohlížeč";
$GLOBALS['strOS']                         = "OS";
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
$GLOBALS['strReferer']                    = "Odkazující stránka";
$GLOBALS['strDeliveryLimitations']        = "Omezení doručování";

$GLOBALS['strDeliveryCapping']            = "Upřesnění doručování";
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
$GLOBALS['strAffiliate']                = "Website";
$GLOBALS['strAffiliates']                 = "Vydavatelé";
$GLOBALS['strAffiliatesAndZones']        = "Vydavatelé & Zóny";
$GLOBALS['strAddNewAffiliate']            = "Přidat vydavatele";
$GLOBALS['strAddNewAffiliate_Key']        = "Přidat <u>v</u>ydavatele";
$GLOBALS['strAddAffiliate']                = "Vytvořit vydavatele";
$GLOBALS['strAffiliateProperties']        = "Nastavení vydavatele";
$GLOBALS['strAffiliateOverview']        = "Přehled vydavatele";
$GLOBALS['strAffiliateHistory']            = "Historie vydavatele";
$GLOBALS['strZonesWithoutAffiliate']    = "Zóny bez vydavatele";
$GLOBALS['strMoveToNewAffiliate']        = "Přesunout k novému vydavateli";
$GLOBALS['strNoAffiliates']                = "V tuto chvíli nejsou zadáni žádní vydavatelé";
$GLOBALS['strConfirmDeleteAffiliate']    = "Opravdu si přejete smazat tohoto vydavatele?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Opravdu si přejete smazat tohoto vydavatele?";
$GLOBALS['strMakePublisherPublic']        = "Zóny tohoto vydavatele nastavit jako veřejné";
$GLOBALS['strAffiliateInvocation']      = "Zobrazovací kód";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Celkem vydavatelů";
$GLOBALS['strInactiveAffiliatesHidden'] = "neaktivních bannerů skryto";
$GLOBALS['strShowParentAffiliates']     = "Show parent websites";
$GLOBALS['strHideParentAffiliates']     = "Hide parent websites";

// Website (properties)
$GLOBALS['strWebsite']                      = "Website";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Povolit tomuto uživateli měnit vlastní nastavení";
$GLOBALS['strAllowAffiliateModifyZones']    = "Povolit tomuto uživateli měnit vlastní zóny";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Povolit tomuto uživateli připojovat vlastní bannery k zónám";
$GLOBALS['strAllowAffiliateAddZone']        = "Povolit tomuto uživateli přidávat vlastní zóny";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Povolit tomuto uživateli mazat existující zóny";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Allow this user to generate invocation code";
$GLOBALS['strAllowAffiliateZoneStats']      = "Povolit uživateli prohlížet statistiky cílení";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Allow this user to only view approved or pending conversions";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Payment information";
$GLOBALS['strAddress']                      = "Address";
$GLOBALS['strPostcode']                     = "Postcode";
$GLOBALS['strCity']                         = "City Name";
$GLOBALS['strCountry']                      = "Země";
$GLOBALS['strPhone']                        = "Phone";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Account contact";
$GLOBALS['strPayeeName']                    = "Payee name";
$GLOBALS['strTaxID']                        = "Tax ID";
$GLOBALS['strModeOfPayment']                = "Mode of payment";
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
$GLOBALS['strHelpFile']                     = "Help file";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Vydavatelé & Zóny";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Zóna";
$GLOBALS['strZones']                        = "Zóny";
$GLOBALS['strAddNewZone']                   = "Přidat zónu";
$GLOBALS['strAddNewZone_Key']               = "Přidat <u>z</u>ónu";
$GLOBALS['strAddZone']                      = "Vytvořit zónu";
$GLOBALS['strModifyZone']                   = "Upravit zónu";
$GLOBALS['strZoneToWebsite']                = "to website";
$GLOBALS['strLinkedZones']                  = "Připojené zóny";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Přehled zóny";
$GLOBALS['strZoneProperties']               = "Nastavení zóny";
$GLOBALS['strZoneHistory']                  = "Historie zóny";
$GLOBALS['strNoZones']                      = "Zatím nejsou definované žádné zóny";
$GLOBALS['strNoZonesAddWebsite']            = "There are currently no zones defined, because there are no websites. To create a zone, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strConfirmDeleteZone']            = "Opravdu chcete smazat tuto zónu?";
$GLOBALS['strConfirmDeleteZones']           = "Opravdu chcete smazat tuto zónu?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Typ zóny";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Button nebo Čtverec";
$GLOBALS['strInterstitial']                 = "Interstitial nebo Plovoucí DHTML";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "Textová reklama";
$GLOBALS['strEmailAdZone']                  = "Email/Newsletter zone";
$GLOBALS['strZoneClick']                    = "Click tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Zobrazit odpovídající bannery";
$GLOBALS['strHideMatchingBanners']          = "Skrýt odpovídající bannery";
$GLOBALS['strBannerLinkedAds']              = "Banners linked to the zone";
$GLOBALS['strCampaignLinkedAds']            = "Campaigns linked to the zone";
$GLOBALS['strTotalZones']                   = "Celkem zón";
$GLOBALS['strInactiveZonesHidden']          = "neaktivních bannerů skryto";
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
$GLOBALS['strAdvanced']                    = "Rozšířené";
$GLOBALS['strChains']                    = "Vazby";
$GLOBALS['strChainSettings']            = "Nastavení vazby";
$GLOBALS['strZoneNoDelivery']            = "Pokud žádné bannery z této zóny <br>nemohou být zobrazeny snaž se...";
$GLOBALS['strZoneStopDelivery']            = "Ukonči doručování a nezobrazuj bannery";
$GLOBALS['strZoneOtherZone']            = "Zobraz místo toho jinou zónu";
$GLOBALS['strZoneUseKeywords']            = "Vyber banner na základě níže uvedených klíčových slov";
$GLOBALS['strZoneAppend']                = "Vždy přidej následující HTML kód k bannerům v této zóně";
$GLOBALS['strAppendSettings']            = "Nastavení přiložení a předložení";
$GLOBALS['strZoneForecasting']            = "Zone Forecasting settings";
$GLOBALS['strZonePrependHTML']            = "Vždy předlož HTML kód k textové inzerci v této zóně";
$GLOBALS['strZoneAppendHTML']            = "Vždy přilož HTML kód k textové inzerci v této zóně";
$GLOBALS['strZoneAppendNoBanner']        = "Prepend/Append even if no banner delivered";
$GLOBALS['strZoneAppendType']            = "Druh připojení";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML kód";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup nebo interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Vždy přilož následující popup nebo intersitial k bannerům v této zóně";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Žádný z bannerů připojených k této zóně není aktivní. <br>Toto je vazba zóny která bude následována:";
$GLOBALS['strZoneProbNullPri']            = "Žádný z bannerů připojených k této zóně není aktivní.";
$GLOBALS['strZoneProbListChainLoop']    = "Následování vazeb zóny může vytvořit cyklickou smyčku. Doručování pro tuto zónu je zastaveno.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Prosím zvolte typ připojených bannerů";
$GLOBALS['strLinkedBanners']            = "Link individual banners";
$GLOBALS['strCampaignDefaults']            = "Link banners by parent campaign";
$GLOBALS['strLinkedCategories']         = "Link banners by category";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interaktivní";
$GLOBALS['strRawQueryString']            = "Klíčové slovo";
$GLOBALS['strIncludedBanners']            = "Připojené bannery";
$GLOBALS['strLinkedBannersOverview']    = "Přehled připojených bannerů";
$GLOBALS['strLinkedBannerHistory']        = "Historie připojených bannerů";
$GLOBALS['strNoZonesToLink']            = "Nejsou k dispozici žádné zóny ke kterým by mohl být tento banner připojen";
$GLOBALS['strNoBannersToLink']            = "Nejsou k dispozici žádné bannery které by mohly být připojeny k této zoně";
$GLOBALS['strNoLinkedBanners']            = "Nejsou k dispozici žádné bannery připojené k této zóně";
$GLOBALS['strMatchingBanners']            = "{count} odpovídajících bannerů";
$GLOBALS['strNoCampaignsToLink']        = "Nejsou k dispozici žádné kampaně které by mohly být připojeny k této zóně";
$GLOBALS['strNoTrackersToLink']            = "Nejsou k dispozici žádné sledovače které by mohly být připojeny k této zóně";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Nejsou k dispozici žádné zóny ke kterým by mohla být tato kampaň připojena";
$GLOBALS['strSelectBannerToLink']        = "Zvolte banner který chcete připojit k této zóně:";
$GLOBALS['strSelectCampaignToLink']        = "Zvolte kampaň kterou chcete připojit k této zóně:";
$GLOBALS['strSelectAdvertiser']         = "Zvolte inzerenta";
$GLOBALS['strSelectPlacement']          = "Zvolte kampaň";
$GLOBALS['strSelectAd']                 = "Zvolte banner";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Append Tracker Code";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Pending";
$GLOBALS['strStatusApproved']           = "Approved";
$GLOBALS['strStatusDisapproved']        = "Disapproved";
$GLOBALS['strStatusDuplicate']          = "Duplikovat";
$GLOBALS['strStatusOnHold']             = "On Hold";
$GLOBALS['strStatusIgnore']             = "Ignore";
$GLOBALS['strConnectionType']           = "Type";
$GLOBALS['strConnTypeSale']             = "Uložit";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Signup";
$GLOBALS['strShortcutEditStatuses'] = "Edit statuses";
$GLOBALS['strShortcutShowStatuses'] = "Show statuses";

// Statistics
$GLOBALS['strStats']                     = "Statistiky";
$GLOBALS['strNoStats']                   = "V tuto chvíli nejsou k dispozici žádné statistiky";
$GLOBALS['strNoTargetingStats']          = "V tuto chvíli nejsou k dispozici žádné statistiky";
$GLOBALS['strNoStatsForPeriod']          = "There are currently no statistics available for the period %s to %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "There are currently no targeting statistics available for the period %s to %s";
$GLOBALS['strConfirmResetStats']         = "Opravdu chcete smazat všechny existující statistiky?";
$GLOBALS['strGlobalHistory']             = "Globální historie";
$GLOBALS['strDailyHistory']              = "Denní historie";
$GLOBALS['strDailyStats']                = "Denní statistiky";
$GLOBALS['strWeeklyHistory']             = "Týdenní historie";
$GLOBALS['strMonthlyHistory']            = "Měsíční historie";
$GLOBALS['strCreditStats']               = "Statistiky kreditů";
$GLOBALS['strDetailStats']               = "Detailní statistiky";
$GLOBALS['strTotalThisPeriod']           = "Celkem v tomto období";
$GLOBALS['strAverageThisPeriod']         = "Průměr v tomto odbobí";
$GLOBALS['strPublisherDistribution']     = "Rozdělení vydavatelů";
$GLOBALS['strCampaignDistribution']      = "Campaign Distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Vynulovat statistiky";
$GLOBALS['strSourceStats']               = "Statistiky zdroje";
$GLOBALS['strSources']                   = "Zdroje";
$GLOBALS['strAvailableSources']          = "Dostupné zdroje";
$GLOBALS['strSelectSource']              = "Zvolte zdroj který chcete vidět:";
$GLOBALS['strSizeDistribution']          = "Rozdělení podle velikosti";
$GLOBALS['strCountryDistribution']       = "Rozdělení podle země";
$GLOBALS['strEffectivity']               = "Úspěšnost";
$GLOBALS['strTargetStats']               = "Statistiky cílení";
$GLOBALS['strCampaignTarget']            = "Cílení";
$GLOBALS['strTargetRatio']               = "Poměr cílení";
$GLOBALS['strTargetModifiedDay']         = "Cílení bylo v průbehu dne upravováno a cílení nemůže být přesné";
$GLOBALS['strTargetModifiedWeek']        = "Cílení bylo v průbehu týdne upravováno a cílení nemůže být přesné";
$GLOBALS['strTargetModifiedMonth']       = "Cílení bylo v průbehu měsíce upravováno a cílení nemůže být přesné";
$GLOBALS['strNoTargetStats']             = "V tuto chvíli nejsou k dispozici žádné statistiky cílení";
$GLOBALS['strOVerall']                   = "Celkové";
$GLOBALS['strByZone']                    = "Podle zón";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "View by";
$GLOBALS['strBreakdownByDay']            = "Den";
$GLOBALS['strBreakdownByWeek']           = "Týden";
$GLOBALS['strBreakdownByMonth']          = "Měsíců";
$GLOBALS['strBreakdownByDow']            = "Day of week";
$GLOBALS['strBreakdownByHour']           = "Hodina";
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
$GLOBALS['strHosts']                = "Hosté";
$GLOBALS['strTopHosts']             = "Hosté s nejvyšším počtem dotazů";
$GLOBALS['strTopCountries']         = "Země s nejvyšším poštem dotazů";
$GLOBALS['strRecentHosts']             = "Poslední hosté";

// Expiration
$GLOBALS['strExpired']                = "Expirované";
$GLOBALS['strExpiration']             = "Expirace";
$GLOBALS['strNoExpiration']           = "Není zadáno datum expirace";
$GLOBALS['strEstimated']              = "Předpokládaná expirace";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Historie kampaně";

// Reports
$GLOBALS['strReports']                = "Přehledy";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Vyberte přehled který chcete vygenerovat";
$GLOBALS['strStartDate']              = "Počáteční datum";
$GLOBALS['strEndDate']                = "Koncové datum";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Limitations";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Celkem inzerentů";
$GLOBALS['strAnonAdvertisers']           = "Anonymous advertisers";
$GLOBALS['strAllPublishers']             = "All websites";
$GLOBALS['strAnonPublishers']            = "Anonymous websites";
$GLOBALS['strAllAvailZones']             = "All available zones";

// Userlog
$GLOBALS['strUserLog']                = "Uživatelský log";
$GLOBALS['strUserLogDetails']        = "Datily uživatelského logu";
$GLOBALS['strDeleteLog']            = "Smazat log";
$GLOBALS['strAction']                = "Akce";
$GLOBALS['strNoActionsLogged']        = "Žádné akce se nelogují";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Přímá volba";
$GLOBALS['strChooseInvocationType']        = "Prosím zvolte typ volání banneru";
$GLOBALS['strGenerate']                    = "Vygenerovat";
$GLOBALS['strParameters']                = "Parametry";
$GLOBALS['strFrameSize']                = "Velikost frame";
$GLOBALS['strBannercode']                = "Kód banneru";
$GLOBALS['strTrackercode']                = "Kód sledovače";
$GLOBALS['strOptional']                    = "volitelný";
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
$GLOBALS['strMySQLError']                       = "Chyba SQL:";
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
$GLOBALS['strLogErrorClients']                  = "[phpAds] Nastala chyba při pokusu načíst inzerenty z databáze.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Nastala chyba při pokusu načíst bannery z databáze.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Nastala chyba při pokusu načíst zobrazení z databáze.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Nastala chyba při pokusu načíst kliknutí z databáze.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Nastala chyba při pokusu načíst prodeje z databáze.";
$GLOBALS['strErrorViews']                       = "Musíte zadat počet zobrazení nebo zvolit neomezený !";
$GLOBALS['strErrorNegViews']                    = "Záporný počet zobrazní není povolen";
$GLOBALS['strErrorClicks']                      = "Musíte zadat počet kliknutí nebo zvolit neomezený !";
$GLOBALS['strErrorNegClicks']                   = "Záporný počet kliknutí není povolen";
$GLOBALS['strErrorConversions']                 = "Musíte zadat počet prodejů nebo zvolit neomezený !";
$GLOBALS['strErrorNegConversions']              = "Záporný počet prodejů není povolen";
$GLOBALS['strNoMatchesFound']                   = "Žedné odpovídající záznamy nebyly nalezeny";
$GLOBALS['strErrorOccurred']                    = "Nastala chyba";
$GLOBALS['strErrorUploadSecurity']              = "Byl zjištěn potencionální bezpečností problém, nahrávání ukončeno !";
$GLOBALS['strErrorUploadBasedir']               = "Nemohu otevřít nahraný soubor zřejmě z důvodu bezpečného režimu nebo open_basedir omezení";
$GLOBALS['strErrorUploadUnknown']               = "Menohu otevřít nahraný soubor z neznámého důvodu. Prosím zkontrolujte vaši konfiguraci PHP";
$GLOBALS['strErrorStoreLocal']                  = "Nastala chyba při pokusu o uložení banneru do lokálního adresáře. Toto je zřejmě následek špatné konfigurace nastavení lokálních cest";
$GLOBALS['strErrorStoreFTP']                    = "Nastala chyba při pokusu o nahrání banneru na FTP server. Toto může být způsobeno nedostupností serveru nebo špatnou konfigurací nastavení FTP serveru";
$GLOBALS['strErrorDBPlain']                     = "Nastala chyba při přístupu do databáze";
$GLOBALS['strErrorDBSerious']                   = "Byl zjištěn závažný problém při přístupu do databáze";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Databázová tabulka je pravděpodobně poškozena a potřebuje opravit. Pro více informací o opravování poškozených tabulek prosím čtěte kapitolu <i>Troubleshooting</i> v příručce <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact']                   = "Prosím kontaktujte správce tohoto serveru a oznamte jemu nebo jí tento problém.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "Systém nedokázal určit druh vaeho uivatelského účtu!";
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
$GLOBALS['strMailSubject']                      = "Prehled inzerenta";
$GLOBALS['strAdReportSent']                     = "Přehled inzerenta odeslán";
$GLOBALS['strMailHeader']                       = "Vazeny {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Nize najdete statistiky banneru pro {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampaň aktivována";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampaň {id} aktivována";
$GLOBALS['strMailBannerActivated']              = "Your campaign shown below has been activated because\\nthe campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated']            = "Your campaign shown below has been deactivated because";
$GLOBALS['strMailFooter']                       = "S pozdravem,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Nasledujici bannery byly vypnute z duvodu";
$GLOBALS['strMailNothingLeft']                  = "Pokud chcete i nadale inzerovat na nasich strankach nevahejte nas kontaktovat.\\nRadi vas uslysime.";
$GLOBALS['strClientDeactivated']                = "Tato kampan neni v tuto chvili aktivni z duvodu";
$GLOBALS['strBeforeActivate']                   = "datum aktivace zatim nenastalo";
$GLOBALS['strAfterExpire']                      = "nastalo datum deaktivace";
$GLOBALS['strNoMoreImpressions']                = "there are no Impressions remaining";
$GLOBALS['strNoMoreClicks']                     = "nezbyvaji jiz zadna kliknuti";
$GLOBALS['strNoMoreConversions']                = "nezbyvaji jiz zadne prodeje";
$GLOBALS['strWeightIsNull']                     = "jeji vaha je nastavena na nulu";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "Zbyvajici kliknuti nebo zobrazeni pro vase bannery se blizi k {limit}. \\nVaše bannery budou vypnuté až nezbydou žádné AdClicks nebo AdViews. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Clicks/Conversions are low";
$GLOBALS['strNoViewLoggedInInterval']           = "Zadna zobrazeni nebyla za obdobi tohoto prehledu zaznamenana";
$GLOBALS['strNoClickLoggedInInterval']          = "Zadna kliknuti nebyla za obdobi tohoto prehledu zaznamenana";
$GLOBALS['strNoConversionLoggedInInterval']     = "Zadne prodeje nebyly za obdobi tohoto prehledu zaznamenany";
$GLOBALS['strMailReportPeriod']                 = "Tento prehled obsahuje statistiky od {startdate} do {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Tento prehled obsahuje statistiky do {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Nejsou k dispozici zadne statistiky pro tuto kampan";
$GLOBALS['strImpendingCampaignExpiry']          = "Impending campaign expiration";
$GLOBALS['strYourCampaign']                     = "Your campaign";
$GLOBALS['strTheCampiaignBelongingTo']          = "The campaign belonging to";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} shown below is due to end on {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} shown below has less than {limit} impressions remaining.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "Priorita";
$GLOBALS['strSourceEdit']                       = "Upravit zdroje";

// Preferences
$GLOBALS['strPreferences']                      = "Předvolby";
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
$GLOBALS['strAdminEmailWarnings']               = "System administrator email Warnings";
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
$GLOBALS['strImpressionSR']                     = "Impression SR";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Impressions";
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
$GLOBALS['strID_short']                         = "ID";
$GLOBALS['strRequests_short']                   = "Req.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "Kliknutí";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Základní nastavení";
$GLOBALS['strGeneralSettings']              = "Obecná nastavení";
$GLOBALS['strMainSettings']                 = "Základní nastavení";
$GLOBALS['strAdminSettings']                = "Nastavení administrace";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Aktualizace produktu";
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
$GLOBALS['strAgencyManagement']              = "Správa partnerů";
$GLOBALS['strAgency']                      = "Partner";
$GLOBALS['strAgencies']                   = "Partneři";
$GLOBALS['strAddAgency']                   = "Přidat partnera";
$GLOBALS['strAddAgency_Key']               = "Přidat <u>z</u>ónu";
$GLOBALS['strTotalAgencies']               = "Celkem partnerů";
$GLOBALS['strAgencyProperties']              = "Vlastnosti partnera";
$GLOBALS['strNoAgencies']                 = "Zatím nejsou definované žádné zóny";
$GLOBALS['strConfirmDeleteAgency']           = "Opravdu chcete smazat tuto zónu?";
$GLOBALS['strHideInactiveAgencies']          = "Skrýt neaktivní partnery";
$GLOBALS['strInactiveAgenciesHidden']     = "neaktivních bannerů skryto";
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
$GLOBALS['strNoChannels']                 = "Zatím nejsou definovány žádné bannery";
$GLOBALS['strNoChannelsAddWebsite']       = "There are currently no targeting channels defined, because there are no websites. To create a targeting channel, <a href='affiliate-edit.php'>add a new website</a> first.";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "Targeting Channel properties";
$GLOBALS['strChannelLimitations']         = "Nastavení doručování";
$GLOBALS['strConfirmDeleteChannel']       = "Opravdu chcete smazat tento banner?";
$GLOBALS['strConfirmDeleteChannels']      = "Opravdu chcete smazat tento banner?";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Název proměnné";
$GLOBALS['strVariableDescription']     = "Popis";
$GLOBALS['strVariableDataType']         = "Datový typ";
$GLOBALS['strVariablePurpose']       = "Purpose";
$GLOBALS['strGeneric']               = "Generic";
$GLOBALS['strBasketValue']           = "Basket value";
$GLOBALS['strNumItems']              = "Number of items";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Řetězec referera";
$GLOBALS['strQuerystring']             = "Řetězec";
$GLOBALS['strInteger']                 = "Číslo";
$GLOBALS['strNumber']                 = "Number";
$GLOBALS['strString']                 = "String";
$GLOBALS['strTrackFollowingVars']     = "Sledovat tuto proměnnou";
$GLOBALS['strAddVariable']             = "Přidat proměnnou";
$GLOBALS['strNoVarsToTrack']         = "Žádné proměnné ke sledování.";
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
$GLOBALS['strYouHaveNoCampaigns']   = "Inzerenti & Kampaně";
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
