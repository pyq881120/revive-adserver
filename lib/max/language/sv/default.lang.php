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

$GLOBALS['strHome']                     = "Home";
$GLOBALS['strHelp']                     = "Hjälp";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Börja om";
$GLOBALS['strNavigation']               = "Navigering";
$GLOBALS['strShortcuts']                = "Genvägar";
$GLOBALS['strActions']                  = "Handling";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Lager";
$GLOBALS['strMaintenance']              = "Underhåll";
$GLOBALS['strProbability']              = "Sannolikhet";
$GLOBALS['strInvocationcode']           = "Publiceringskod";
$GLOBALS['strTrackerVariables']         = "Spårningsvariabler";
$GLOBALS['strBasicInformation']         = "Grundläggande Information";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "Inloggningsuppgifter";
$GLOBALS['strLogoutURL']                = "URL för omdirigering vid utloggning. Lämna tomt för standardinställning";
$GLOBALS['strAppendTrackerCode']        = "Hämta spårningskod";
$GLOBALS['strOverview']                 = "Översikt";
$GLOBALS['strSearch']                   = "<u>S</u>ök";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "Detaljer";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Sök efter uppdateringar";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Kompakt";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "Användare";
$GLOBALS['strEdit']                     = "Redigera";
$GLOBALS['strCreate']                   = "Skapa";
$GLOBALS['strDuplicate']                = "Duplicera";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Flytta till";
$GLOBALS['strDelete']                   = "Radera";
$GLOBALS['strActivate']                 = "Aktivera";
$GLOBALS['strDeActivate']               = "Avaktivera";
$GLOBALS['strConvert']                  = "Konvertera";
$GLOBALS['strRefresh']                  = "Uppdatera";
$GLOBALS['strSaveChanges']              = "Spara ändringar";
$GLOBALS['strUp']                       = "Upp";
$GLOBALS['strDown']                     = "Ner";
$GLOBALS['strSave']                     = "Spara";
$GLOBALS['strCancel']                   = "Avbryt";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "Föregående";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Nästa";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Ja";
$GLOBALS['strNo']                       = "Nej";
$GLOBALS['strNone']                     = "Inga";
$GLOBALS['strCustom']                   = "Anpassad";
$GLOBALS['strDefault']                  = "Standard";
$GLOBALS['strOther']                    = "Annan";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "Obegränsad";
$GLOBALS['strUntitled']                 = "Namnlös";
$GLOBALS['strAll']                      = "alla";
$GLOBALS['strAvg']                      = "Genomsnittlig";
$GLOBALS['strAverage']                  = "Genomsnitt";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Total";
$GLOBALS['strTotal']                    = "Totalt";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "aktiv";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "till";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "länkad till";
$GLOBALS['strDaysLeft']                 = "Dagar kvar";
$GLOBALS['strCheckAllNone']             = "Markera alla / avmarkera alla";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>E</u>xpandera alla";
$GLOBALS['strCollapseAll']              = "<u>K</u>ollapsa alla";
$GLOBALS['strShowAll']                  = "Visa alla";
$GLOBALS['strNoAdminInterface']         = "Administrationen har stängts av pga underhåll. Detta påverkar inte leveranser av era kampanjer.";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "Följande fält innehåller fel:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Innan du kan fortsätta måste du";
$GLOBALS['strFieldFixBeforeContinue2']  = "åtgärda dessa fel.";
$GLOBALS['strDelimiter']                = "Avgränsare";
$GLOBALS['strMiscellaneous']            = "Diverse";
$GLOBALS['strCollectedAllStats']        = "All statistik";
$GLOBALS['strCollectedToday']           = "Idag";
$GLOBALS['strCollectedYesterday']       = "Igår";
$GLOBALS['strCollectedThisWeek']        = "Denna vecka";
$GLOBALS['strCollectedLastWeek']        = "Förra veckan";
$GLOBALS['strCollectedThisMonth']       = "Denna månad";
$GLOBALS['strCollectedLastMonth']       = "Förra månaden";
$GLOBALS['strCollectedLast7Days']       = "Senaste 7 dagarna";
$GLOBALS['strCollectedSpecificDates']   = "Specifika datum";
$GLOBALS['strDifference']               = "Skillnad (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Värde";
$GLOBALS['strAdmin']                    = "Administratör";
$GLOBALS['strWarning']                  = "Varning";
$GLOBALS['strNotice']                   = "Viktigt information";
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
$GLOBALS['strPriority']                 = "Prioritering";
$GLOBALS['strPriorityLevel']            = "Prioriteringsnivå";
$GLOBALS['strPriorityTargeting']        = "Distribution";
$GLOBALS['strPriorityOptimisation']     = "Diverse"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Begränsningar";
$GLOBALS['strNoLimitations']            = "Inga begränsningar";
$GLOBALS['strCapping']                  = "Taksättning";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Namn";
$GLOBALS['strSize']                     = "Storlek";
$GLOBALS['strWidth']                    = "Bredd";
$GLOBALS['strHeight']                   = "Höjd";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Mål";
$GLOBALS['strLanguage']                 = "Språk";
$GLOBALS['strDescription']              = "Beskrivning";
$GLOBALS['strVariables']                = "Variabler";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Kommentarer";

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
$GLOBALS['strLinkUserHelpUser']         = "Användarnamn";
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
$GLOBALS['strUserProperties']           = "Banneregenskaper";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "Autentisering";
$GLOBALS['strWelcomeTo']                = "Välkommen till";
$GLOBALS['strEnterUsername']            = "Ange ditt användarnamn och lösenord för att logga in";
$GLOBALS['strEnterBoth']                = "Vänligen ange både användarnamn och lösenord";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "Logga in";
$GLOBALS['strLogout']                   = "Logga ut";
$GLOBALS['strUsername']                 = "Användarnamn";
$GLOBALS['strPassword']                 = "Lösenord";
$GLOBALS['strPasswordRepeat']           = "Upprepa lösenord";
$GLOBALS['strAccessDenied']             = "Åtkomst nekad";
$GLOBALS['strUsernameOrPasswordWrong']  = "Användarnamnet och/eller lösenordet var inkorrekt. Vänligen försök igen.";
$GLOBALS['strPasswordWrong']            = "Lösenordet är inkorrekt";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Your account does not have the required permissions to use this feature, you can log into another account to use it.";
$GLOBALS['strDuplicateClientName']      = "Användarnamnet du angav finns redan, vänligen ange ett annat användarnamn.";
$GLOBALS['strDuplicateAgencyName']      = "Användarnamnet du angav finns redan, vänligen ange ett annat användarnamn.";
$GLOBALS['strInvalidPassword']          = "Lösenordet är ej giltigt, vänligen använd ett annat lösenord.";
$GLOBALS['strInvalidEmail']             = "Epostadressen har ett ogiltigt format, använd en korrekt epostadress.";
$GLOBALS['strNotSamePasswords']         = "De två lösenorden du angav är inte identiska";
$GLOBALS['strRepeatPassword']           = "Upprepa lösenord";
$GLOBALS['strOldPassword']              = "Gammalt lösenord";
$GLOBALS['strNewPassword']              = "Nytt lösenord";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Din länk är ogiltig.";
$GLOBALS['strNoPlacement']              = "Vald kampanj existerar ej. Prova denna <a href='{link}'>länk</a> istället.";
$GLOBALS['strNoAdvertiser']             = "Vald annonsör existerar ej. Prova denna <a href='{link}'>länk</a> istället.";

// General advertising
$GLOBALS['strRequests']                 = "Begäran";
$GLOBALS['strImpressions']              = "Visningar";
$GLOBALS['strClicks']                   = "Klick";
$GLOBALS['strConversions']              = "Konverteringar";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Försäljningsfrekvens";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Totala klick";
$GLOBALS['strTotalConversions']         = "Totala konverteringar";
$GLOBALS['strViewCredits']              = "Visningspoäng";
$GLOBALS['strClickCredits']             = "Klickpoäng";
$GLOBALS['strConversionCredits']        = "Konverteringspoäng";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Datum Tid";
$GLOBALS['strTrackerID']                = "Spårnings ID";
$GLOBALS['strTrackerName']              = "Spårningsnamn";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Banners";
$GLOBALS['strCampaigns']                = "Kampanj";
$GLOBALS['strCampaignID']               = "Kampanj ID";
$GLOBALS['strCampaignName']             = "Kampanjnamn";
$GLOBALS['strCountry']                  = "Land";
$GLOBALS['strStatsAction']              = "Handling";
$GLOBALS['strWindowDelay']              = "Fönsterdröjsmål";
$GLOBALS['strStatsVariables']           = "Variabler";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Månadsavgift";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "Värdet på korgen";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Datum";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "Dag";
$GLOBALS['strDays']                     = "Dagar";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "Vecka";
$GLOBALS['strWeeks']                    = "Veckor";
$GLOBALS['strSingleMonth']              = "Månad";
$GLOBALS['strMonths']                   = "Månader";
$GLOBALS['strDayOfWeek']                = "Dag av vecka";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Timme";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "sekunder";
$GLOBALS['strMinutes']                  = "minuter";
$GLOBALS['strHours']                    = "timmar";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "Annonsör";
$GLOBALS['strClients']                      = "Annonsörer";
$GLOBALS['strClientsAndCampaigns']          = "Annonsörer & kampanjer";
$GLOBALS['strAddClient']                    = "Lägg till ny annonsör";
$GLOBALS['strAddClient_Key']                = "Lägg till<u>n</u>y annonsör";
$GLOBALS['strTotalClients']                 = "Totala annonsörer";
$GLOBALS['strClientProperties']             = "Annonsöregenskaper";
$GLOBALS['strClientHistory']                = "Annonsörhistorik";
$GLOBALS['strNoClients']                    = "Det finns inga annonsörer inlagda. För att skapa en kampanj, <a href='advertiser-edit.php'>lägg till en annonsör</a> först.";
$GLOBALS['strNoClientsForBanners']          = "Det finns inga annonsörer inlagda. För att skapa en kampanj, <a href='advertiser-edit.php'>lägg till en annonsör</a> först.";
$GLOBALS['strConfirmDeleteClient']          = "Vill du verkligen radera den här annonsören?";
$GLOBALS['strConfirmDeleteClients']         = "Vill du verkligen radera den här annonsören?";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "Sida";
$GLOBALS['strHideInactive']                 = "Dölj inaktiva";
$GLOBALS['strHideInactiveAdvertisers']      = "Dölj inaktiva annonsörer";
$GLOBALS['strInactiveAdvertisersHidden']    = "dolda inaktiva annonsörer";
$GLOBALS['strOverallAdvertisers']           = "Annonsörer";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Annonsörer & kampanjer";
// Advertisers properties
$GLOBALS['strContact']                          = "Kontakt";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "Epost";
$GLOBALS['strChars']                            = "tecken";
$GLOBALS['strSendAdvertisingReport']            = "Eposta leveransrapport för kampanj";
$GLOBALS['strNoDaysBetweenReports']             = "Antal dagar mellan leveransrapport för kampanj";
$GLOBALS['strSendDeactivationWarning']          = "Eposta när en kampanj automatiskt aktiveras/avaktiveras";
$GLOBALS['strAllowClientModifyInfo']            = "Tillåt användaren att redigera egna inställningar";
$GLOBALS['strAllowClientModifyBanner']          = "Tillåt användaren att redigera egna annonser";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "Tillåt användaren att avaktivera egna annonser";
$GLOBALS['strAllowClientActivateBanner']        = "Tillåt användaren att aktivera egna annonser";
$GLOBALS['strAllowClientViewTargetingStats']    = "Tillåt användaren att se mål-statistik";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "Tillåt användaren att importera offline konverteringar";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Kampanj";
$GLOBALS['strCampaigns']                    = "Kampanj";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Antal kampanjer";
$GLOBALS['strActiveCampaigns']              = "Aktiva kampanjer";
$GLOBALS['strAddCampaign']                  = "Lägg till ny kampanj";
$GLOBALS['strAddCampaign_Key']              = "Lägg till <u>n</u>y kampanj";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "Redigera kampanj";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "Radera alla kampanjer";
$GLOBALS['strLinkedCampaigns']              = "Länkade kampanjer";
$GLOBALS['strCampaignStats']                = "Campaign Statistics";
$GLOBALS['strCampaignProperties']           = "Kampanjegenskaper";
$GLOBALS['strCampaignOverview']             = "Kampanjöversikt";
$GLOBALS['strCampaignHistory']              = "Kampanjhistorik";
$GLOBALS['strNoCampaigns']                  = "Det finns för närvarande inga kampanjer definierade för denna annonsör.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Vill du verkligen radera alla kampanjer som ägs av den här annonsören?";
$GLOBALS['strConfirmDeleteCampaign']        = "Vill du verkligen radera den här kampanjen?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Vill du verkligen radera den här kampanjen?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Visa överordnade annonsörer";
$GLOBALS['strHideParentAdvertisers']        = "Dölj överordnade annonsörer";
$GLOBALS['strHideInactiveCampaigns']        = "Dölj inaktiva kampanjer";
$GLOBALS['strInactiveCampaignsHidden']      = "inaktiva kampanjer dolda";
$GLOBALS['strContractDetails']              = "Kontraktdetaljer";
$GLOBALS['strInventoryDetails']             = "Lagerdetaljer";
$GLOBALS['strPriorityInformation']          = "Prioritet i förhållande till andra kampanjer";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Kampanj";
$GLOBALS['strHiddenAd']                     = "Annons";
$GLOBALS['strHiddenAdvertiser']             = "Annonsör";
$GLOBALS['strHiddenTracker']                = "Tracker";
$GLOBALS['strHiddenWebsite']              = "Webbsida";
$GLOBALS['strHiddenZone']                   = "Zon";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Kompanjonpositionering";
$GLOBALS['strSelectUnselectAll']            = "Markera / avmarkera alla";
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
$GLOBALS['strDontExpire']                       = "Inte förfalla/utgå";
$GLOBALS['strActivateNow']                      = "Start immediately";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Låg";
$GLOBALS['strHigh']                             = "Hög";
$GLOBALS['strExpirationDate']                   = "Slutdatum";
$GLOBALS['strExpirationDateComment']            = "Kampanjen avslutas i slutet av denna dag";
$GLOBALS['strActivationDate']                   = "Startdatum";
$GLOBALS['strActivationDateComment']            = "Kampanjen påbörjas vid början av denna dag";
$GLOBALS['strRevenueInfo']                      = "Intäktsinformation";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "Återstående visningar";
$GLOBALS['strClicksRemaining']                  = "Återstående klick";
$GLOBALS['strConversionsRemaining']             = "Återstående konverteringar";
$GLOBALS['strImpressionsBooked']                = "Bokade visningar";
$GLOBALS['strClicksBooked']                     = "Bokade klick";
$GLOBALS['strConversionsBooked']                = "Bokade konverteringar";
$GLOBALS['strCampaignWeight']                   = "Kampanj vikt";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimera";
$GLOBALS['strAnonymous']                        = "Dölj kampanjens annonsörer och sajter.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "per dag.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Automatisk - Distribuera återstående lager jämnt över återstående antal dagar.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Kampanjens prioriteringar är satta till låg, \\nmen vikten är satt till noll eller har inte \\nspecifiserats. Kampanjen kommer att \\navaktiveras och dess banners ej levereras\\ntills vikten sätts till giltigt nummer. \\n\\nVill du fortsätta?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Kampanjens prioritet är satt till hög, \\nmen målantal för visningar är inte angivet. \\nDetta gör att kampanjen blir avaktiverad och \\ndess banners kommer inte att levereras tills \\ngiltigt målantal anges \\n \\nÄr du säker på att du vill fortsätta? \\n";
$GLOBALS['strCampaignStatusPending']            = "Pågående";
$GLOBALS['strCampaignStatusInactive']           = "aktiv";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Pause";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Starta om";
$GLOBALS['strCampaignStatusDeleted']            = "Radera";
$GLOBALS['strCampaignApprove']                  = "Godkänd";
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
$GLOBALS['strCampaignType']                     = "Kampanjnamn";
$GLOBALS['strType']                             = "Typ";
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
$GLOBALS['strTracker']                    = "Tracker";
$GLOBALS['strTrackers']                   = "Tracker";
$GLOBALS['strTrackerOverview']            = "Spårningsöversikt";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "Lägg till ny spårning";
$GLOBALS['strAddTracker_Key']             = "Lägg till <u>n</u>y spårning";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "Det finns för närvarande inga spårare definierade för denna annonsör";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Vill du verkligen radera alla spårare tillhörande denna annonsör?";
$GLOBALS['strConfirmDeleteTrackers']      = "Will du verkligen kasta denna tracker?";
$GLOBALS['strConfirmDeleteTracker']       = "Vill du verkligen radera denna spårare?";
$GLOBALS['strDeleteAllTrackers']          = "Radera alla spårare?";
$GLOBALS['strTrackerProperties']          = "Spårningsegenskaper";
$GLOBALS['strTrackerOverview']            = "Spårningsöversikt";
$GLOBALS['strModifyTracker']              = "Ändra spårning";
$GLOBALS['strLog']                        = "Skapa logg?";
$GLOBALS['strDefaultStatus']              = "Standard status";
$GLOBALS['strStatus']                     = "Status";
$GLOBALS['strLinkedTrackers']             = "Länkad spårning";
$GLOBALS['strTrackerInformation']         = "Spårningsinformation";
$GLOBALS['strConversionWindow']           = "Konverteringsfönster";
$GLOBALS['strUniqueWindow']               = "Unikt fönster";
$GLOBALS['strClick']                      = "Klicka";
$GLOBALS['strView']                       = "Visa";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Visningar";
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
$GLOBALS['strConversionType']             = "Konversionstyp";
$GLOBALS['strLinkCampaignsByDefault']     = "Länka nyskapade kampanjer som standard";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Annons";
$GLOBALS['strBanners']                       = "Banners";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Lägg till ny annons";
$GLOBALS['strAddBanner_Key']                 = "Lägg till<u>n</u>y annons";
$GLOBALS['strBannerToCampaign']              = "Din kampanj";
$GLOBALS['strModifyBanner']                  = "Ändra annons";
$GLOBALS['strActiveBanners']                 = "Aktiva annonser";
$GLOBALS['strTotalBanners']                  = "Totalt antal annonser";
$GLOBALS['strShowBanner']                    = "Visa annonser";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Radera alla annonser";
$GLOBALS['strActivateAllBanners']            = "Aktivera alla annonser";
$GLOBALS['strDeactivateAllBanners']          = "Avaktivera alla annonser";
$GLOBALS['strBannerOverview']                = "Annonsöversikt";
$GLOBALS['strBannerProperties']              = "Annonsegenskaper";
$GLOBALS['strBannerHistory']                 = "Annonshistorik";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "Det finns för närvarande inga annonser definierade till den här kampanjen.";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "Det finns inga sajter inlagda. För att skapa en zon, <a href='affiliate-edit.php'>lägg till ny sajt</a> först.";
$GLOBALS['strConfirmDeleteBanner']           = "Vill du verkligen radera den här annonsen?";
$GLOBALS['strConfirmDeleteBanners']          = "Vill du verkligen radera den här bannern?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Vill du verkligen radera alla annonser som tillhör den här kampanjen?";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "Visa överordnade kampanjer";
$GLOBALS['strHideParentCampaigns']           = "Dölj överordnade kampanjer";
$GLOBALS['strHideInactiveBanners']           = "Dölj inaktiva annonser";
$GLOBALS['strInactiveBannersHidden']         = "inaktiva annonser dolda";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "Det är inte möjligt att koppla annonser till textannonser.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Varning, tag";
$GLOBALS['strWarningTag2']                   = "möjligtvis inte stängd/startad";
$GLOBALS['strWarningMissing']                = "Varning, förmodligen saknas _";
$GLOBALS['strWarningMissingClosing']         = "_ avslutande tag \">\"";
$GLOBALS['strWarningMissingOpening']         = "_ öppningstag \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Skicka ändå";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "i"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


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
$GLOBALS['strChooseBanner']         = "Vänligen välj annonstyp";
$GLOBALS['strMySQLBanner']             = "Ladda upp en lokal annons till databasen";
$GLOBALS['strWebBanner']               = "Ladda upp en lokal annons till webbservern";
$GLOBALS['strURLBanner']               = "Länka en extern annons";
$GLOBALS['strHTMLBanner']              = "Skapa en HTML annons";
$GLOBALS['strTextBanner']              = "Skapa en textannons";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Vill du behålla <br />befintlig bild, eller vill du<br />ladda upp ny bild?";
$GLOBALS['strUploadOrKeepAlt']        = "Vill du behålla <br />befintlig backup bild, eller vill du <br />ladda upp ny bild?";
$GLOBALS['strNewBannerFile']         = "Välj vilken bild du vill <br />använda för den här annonsen<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Välj den säkerhets bild du <br />vill använda i fall vissa webbläsare <br />inte stödjer rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "Bild URL (inkl. http://)";
$GLOBALS['strURL']                     = "Destinations URL (inkl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Nyckelord";
$GLOBALS['strTextBelow']             = "Text under bild";
$GLOBALS['strWeight']                 = "Vikt";
$GLOBALS['strAlt']                     = "Alt text";
$GLOBALS['strStatusText']            = "Statustext";
$GLOBALS['strBannerWeight']            = "Bannervikt";
$GLOBALS['strBannerType']           = "Annons typ";
$GLOBALS['strAdserverTypeGeneric']  = "Generisk HTML banner";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generisk";
$GLOBALS['strSwfTransparency']		   = "Tillåt transparent bakgrund";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Sök efter hård-kodade länkar i Flashfilen";
$GLOBALS['strConvertSWFLinks']        = "Konvertera Flashlänkar";
$GLOBALS['strHardcodedLinks']        = "Hård-kodade länkar";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Komprimera SWF filen för snabbare nedladdning (Flash 6 spelare krävs)";
$GLOBALS['strOverwriteSource']        = "Skriv över källparameter";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Leveransinställningar";
$GLOBALS['strACL']                        = "Leverans";
$GLOBALS['strACLAdd']                     = "Lägg till leveransbegränsningar";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Inga begränsningar";
$GLOBALS['strApplyLimitationsTo']         = "Applicera begränsningar på";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Ta bort alla begränsningar";
$GLOBALS['strEqualTo']                    = "är lika med";
$GLOBALS['strDifferentFrom']              = "skiljer sig från";
$GLOBALS['strLaterThan']                  = "är senare än";
$GLOBALS['strLaterThanOrEqual']           = "är senare än eller lika med";
$GLOBALS['strEarlierThan']                = "är tidigare än";
$GLOBALS['strEarlierThanOrEqual']         = "är tidigare än eller lika med";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "är större än";
$GLOBALS['strLessThan']                   = "är mindre än";
$GLOBALS['strAND']                        = "OCH";                          // logical operator
$GLOBALS['strOR']                         = "ELLER";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Visa endast den här annonsen när:";
$GLOBALS['strWeekDay']                    = "Veckodag";
$GLOBALS['strWeekDays']                   = "Veckodagar";
$GLOBALS['strTime']                       = "Tid";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "Källa";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Stad";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Leveransbegränsningar";

$GLOBALS['strDeliveryCapping']            = "Leveranstak per besökare";
$GLOBALS['strDeliveryCappingReset']       = "Återställ visningsräknare efter:";
$GLOBALS['strDeliveryCappingTotal']       = "totalt";
$GLOBALS['strDeliveryCappingSession']     = "per session";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Begränsa annonsvisningar till:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Begränsa kampanjvisningar till:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Begränsa zonvisningar till:";

// Website
$GLOBALS['strAffiliate']                = "Webbsida";
$GLOBALS['strAffiliates']                 = "Webbsidor";
$GLOBALS['strAffiliatesAndZones']        = "Webbsidor & Zoner";
$GLOBALS['strAddNewAffiliate']            = "Lägg till ny webbsida";
$GLOBALS['strAddNewAffiliate_Key']        = "Lägg till <u>n</u>y webbsida";
$GLOBALS['strAddAffiliate']                = "Create website";
$GLOBALS['strAffiliateProperties']        = "Egenskaper för webbsida";
$GLOBALS['strAffiliateOverview']        = "Website Overview";
$GLOBALS['strAffiliateHistory']            = "Webbsideshistorik";
$GLOBALS['strZonesWithoutAffiliate']    = "Zoner utan webbsida";
$GLOBALS['strMoveToNewAffiliate']        = "Flytta till ny webbsida";
$GLOBALS['strNoAffiliates']                = "Det finns inga webbsidor inlagda. För att skapa en zon, <a href='affiliate-edit.php'>lägg till ny webbsida</a> först.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Vill du verkligen radera den här webbsidan?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Vill du verkligen radera den här sajten?";
$GLOBALS['strMakePublisherPublic']        = "Gör de zoner som ägs av den här webbsidan offentligt tillgängliga";
$GLOBALS['strAffiliateInvocation']      = "Publiceringskod";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Totalt antal webbsidor";
$GLOBALS['strInactiveAffiliatesHidden'] = "inaktiva webbsidor dolda";
$GLOBALS['strShowParentAffiliates']     = "Visa överordnade webbsidor";
$GLOBALS['strHideParentAffiliates']     = "Dölj överordnade webbsidor";

// Website (properties)
$GLOBALS['strWebsite']                      = "Webbsida";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Minnesstöd";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Tillåt användaren att redigera egna inställningar";
$GLOBALS['strAllowAffiliateModifyZones']    = "Tillåt användaren att modifiera egna zoner";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Tillåt användaren att länka annonser till egna zoner";
$GLOBALS['strAllowAffiliateAddZone']        = "Tillåt användaren att skapa nya zoner";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Tillåt användaren att radera befintliga zoner";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Tillåt användaren att generera publiceringskoder";
$GLOBALS['strAllowAffiliateZoneStats']      = "Tillåt användaren att se zonstatistik";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Tillåt användaren att endast se godkända eller oavslutade konverteringar";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Betalinformation";
$GLOBALS['strAddress']                      = "Adress";
$GLOBALS['strPostcode']                     = "Postnummer";
$GLOBALS['strCity']                         = "Stad";
$GLOBALS['strCountry']                      = "Land";
$GLOBALS['strPhone']                        = "Telefon";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Kontots kontaktperson";
$GLOBALS['strPayeeName']                    = "Betalningsmottagarens namn";
$GLOBALS['strTaxID']                        = "Skatte-ID";
$GLOBALS['strModeOfPayment']                = "Betalsätt";
$GLOBALS['strPaymentChequeByPost']          = "Postcheck";
$GLOBALS['strCurrency']                     = "Valuta";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Övrig information";
$GLOBALS['strUniqueUsersMonth']             = "Unika besökare/månad";
$GLOBALS['strUniqueViewsMonth']             = "Unika visningar/månad";
$GLOBALS['strPageRank']                     = "Sidranking";
$GLOBALS['strCategory']                     = "Kategori";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Hjälpfil";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Webbsajter & zoner";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Zon";
$GLOBALS['strZones']                        = "Zoner";
$GLOBALS['strAddNewZone']                   = "Lägg till ny zon";
$GLOBALS['strAddNewZone_Key']               = "Lägg till <u>n</u>y zon";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "Redigera zon";
$GLOBALS['strZoneToWebsite']                = "INga webbsajter";
$GLOBALS['strLinkedZones']                  = "Länkade zoner";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Zonöversikt";
$GLOBALS['strZoneProperties']               = "Zonegenskaper";
$GLOBALS['strZoneHistory']                  = "Zonhistorik";
$GLOBALS['strNoZones']                      = "Det finns för närvarande inga zoner definierade för denna webbsida";
$GLOBALS['strNoZonesAddWebsite']            = "Det finns inga sajter inlagda. För att skapa en zon, <a href='affiliate-edit.php'>lägg till ny sajt</a> först.";
$GLOBALS['strConfirmDeleteZone']            = "Vill du verkligen radera den här zonen?";
$GLOBALS['strConfirmDeleteZones']           = "Vill du verkligen radera den här zonen?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Zontyp";
$GLOBALS['strBannerButtonRectangle']        = "Annons, Knapp eller Rektangel";
$GLOBALS['strInterstitial']                 = "Inledande eller flytande DHTML";
$GLOBALS['strPopup']                        = "Pop-upp";
$GLOBALS['strTextAdZone']                   = "Textannons";
$GLOBALS['strEmailAdZone']                  = "Epost/Nyhetsbrev zon";
$GLOBALS['strZoneClick']                    = "Klickspårningszon";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Visa matchande annonser";
$GLOBALS['strHideMatchingBanners']          = "Dölj matchande annonser";
$GLOBALS['strBannerLinkedAds']              = "Annonser länkade till zonen";
$GLOBALS['strCampaignLinkedAds']            = "Kampanjer länkade till zonen";
$GLOBALS['strTotalZones']                   = "Antal zoner";
$GLOBALS['strInactiveZonesHidden']          = "inaktiva zoner dolda";
$GLOBALS['strWarnChangeZoneType']           = "Om du ändrar zontyp till text eller epost kommer alla annonser/kampanjer att kopplas bort på grund av restriktioner i dessa zontyper\\n<ul>\\n<li>Textzoner kan bara länkas till textannonser</li>\\n<li>Epost kampanjer kan endast ha en aktiv annons åt gången</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Om du ändrar zonstorleken avlänkas alla annonser som inte matchar den nya storleken och alla annonser från länkade kampanjer med samma storlek läggs till';
$GLOBALS['strWarnChangeBannerSize']         = 'Changing the banner size will unlink this banner from any zones that are not the new size, and if this banner\'s <strong>campaign</strong> is linked to a zone of the new size, this banner will be automatically linked';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Inventory Forecasting';
$GLOBALS['strZonesOfWebsite']               = 'i'; //this is added between page name and website name eg. 'Zones in www.example.com'
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
$GLOBALS['strAdvanced']                    = "Avancerat";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "Kedjeinställningar";
$GLOBALS['strZoneNoDelivery']            = "Om inga annonser från den här zonen <br />kan levereras, försök att...";
$GLOBALS['strZoneStopDelivery']            = "Stoppa leverans och visa inga annonser";
$GLOBALS['strZoneOtherZone']            = "Visa den valda zonen istället";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "Lägg alltid till följande HTML-kod till annonser som visas på den här zonen";
$GLOBALS['strAppendSettings']            = "Append and prepend settings";
$GLOBALS['strZoneForecasting']            = "Zonprognos-inställningar";
$GLOBALS['strZonePrependHTML']            = "Lägg alltid till följande HTML-kod till texannonser som visas på den här zonen";
$GLOBALS['strZoneAppendHTML']            = "Lägg alltid till följande HTML-kod till texannonser som visas på den här zonen";
$GLOBALS['strZoneAppendNoBanner']        = "Bifoga även om ingen banner levereras";
$GLOBALS['strZoneAppendType']            = "Bifogningstyp";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML-kod";
$GLOBALS['strZoneAppendZoneSelection']    = "Pop-upp eller inledande";
$GLOBALS['strZoneAppendSelectZone']        = "Lägg alltid till följande HTML-kod till banners som visas på den här zonen";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Alla banners länkade till den här zonen är f.n. inaktiva. <br /> Den här zonkedjan kommer att följas:";
$GLOBALS['strZoneProbNullPri']            = "Det finns inga aktiva banners länkade till den här zonen.";
$GLOBALS['strZoneProbListChainLoop']    = "Följande zonkedja skulle orsaka en cirkulär loop. Leverans för den här zonen är stoppad.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Vänligen välj vad som ska länkas till den här zonen.";
$GLOBALS['strLinkedBanners']            = "Länka individuella banners";
$GLOBALS['strCampaignDefaults']            = "Länka banners utifrån överordnad kampanj";
$GLOBALS['strLinkedCategories']         = "Länka banners utifrån kategori";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "Sökord";
$GLOBALS['strIncludedBanners']            = "Länkade banners";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "Det finns inga tillgängliga zoner som den här bannern kan länkas till";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} matchande banners";
$GLOBALS['strNoCampaignsToLink']        = "Det finns inga kampanjer tillgängliga som kan länkas till den här zonen";
$GLOBALS['strNoTrackersToLink']            = "Det finns ingen spårning tillgänglig som kan länkas till den här kampanjen";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Det finns inga zoner tillgängliga som den här kampanjen kan länkas till";
$GLOBALS['strSelectBannerToLink']        = "Välj den banner du vill länka till den här zonen:";
$GLOBALS['strSelectCampaignToLink']        = "Välj den kampanj du vill länka till den här zonen:";
$GLOBALS['strSelectAdvertiser']         = "Välj annonsör";
$GLOBALS['strSelectPlacement']          = "Välj kampanj";
$GLOBALS['strSelectAd']                 = "Välj banner";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Hämta spårningskod";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Pågående";
$GLOBALS['strStatusApproved']           = "Godkänd";
$GLOBALS['strStatusDisapproved']        = "Ej godkänd";
$GLOBALS['strStatusDuplicate']          = "Duplicera";
$GLOBALS['strStatusOnHold']             = "Pausad";
$GLOBALS['strStatusIgnore']             = "Ignorera";
$GLOBALS['strConnectionType']           = "Typ";
$GLOBALS['strConnTypeSale']             = "Sälj";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Signup";
$GLOBALS['strShortcutEditStatuses'] = "Redigera statusar";
$GLOBALS['strShortcutShowStatuses'] = "Visa statusar";

// Statistics
$GLOBALS['strStats']                     = "Statistik";
$GLOBALS['strNoStats']                   = "Det finns ingen statistik tillgänglig";
$GLOBALS['strNoTargetingStats']          = "Det finns ingen målstatistik tillgänglig";
$GLOBALS['strNoStatsForPeriod']          = "Det finns ingen statistik tillgänglig för perioden %s till %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Det finns ingen målstatistik tillgänglig för perioden %s till %s";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "Global historik";
$GLOBALS['strDailyHistory']              = "Daglig historik";
$GLOBALS['strDailyStats']                = "Daglig statistik";
$GLOBALS['strWeeklyHistory']             = "Veckohistorik";
$GLOBALS['strMonthlyHistory']            = "Månadshistorik";
$GLOBALS['strCreditStats']               = "Credit statistics";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "Totalt den här perioden";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Webbsajtdistribution";
$GLOBALS['strCampaignDistribution']      = "Kampanjdistribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Målstatistik";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Visa efter";
$GLOBALS['strBreakdownByDay']            = "Dag";
$GLOBALS['strBreakdownByWeek']           = "Vecka";
$GLOBALS['strBreakdownByMonth']          = "Månad";
$GLOBALS['strBreakdownByDow']            = "Dag av vecka";
$GLOBALS['strBreakdownByHour']           = "Timme";
$GLOBALS['strItemsPerPage']              = "Objekt per sida";
$GLOBALS['strDistributionHistory']       = "Distributionshistorik";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Visa <u>G</u>raf för statistiken";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>xportera statistik till Excel";
$GLOBALS['strGDnotEnabled']              = "Du måste ha GD aktiverat i PHP för att visa grafer. <br />Vänligen besök <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> för mer information, inklusive hur man installerar GD på servern.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "Utgång";
$GLOBALS['strNoExpiration']           = "Inget utgångsdatum angivet";
$GLOBALS['strEstimated']              = "Estimerad utgångsdatum";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Kampanjhistorik";

// Reports
$GLOBALS['strReports']                = "Rapporter";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "Startdatum";
$GLOBALS['strEndDate']                = "Slutdatum";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Begränsningar";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Alla annonsörer";
$GLOBALS['strAnonAdvertisers']           = "Anonym annonsör";
$GLOBALS['strAllPublishers']             = "Alla webbsajter";
$GLOBALS['strAnonPublishers']            = "Anonyma webbsajter";
$GLOBALS['strAllAvailZones']             = "Alla tillgängliga zoner";

// Userlog
$GLOBALS['strUserLog']                = "Användarlogg";
$GLOBALS['strUserLogDetails']        = "Användarloggdetaljer";
$GLOBALS['strDeleteLog']            = "Radera logg";
$GLOBALS['strAction']                = "Handling";
$GLOBALS['strNoActionsLogged']        = "Inga händelser är loggade";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Direktval";
$GLOBALS['strChooseInvocationType']        = "Vänligen välj typ av bannerpublicering";
$GLOBALS['strGenerate']                    = "Generera";
$GLOBALS['strParameters']                = "Taginställningar";
$GLOBALS['strFrameSize']                = "Ramstorlek";
$GLOBALS['strBannercode']                = "Bannerkod";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Gå tillbaks till rapportlistan";
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
$GLOBALS['strLogErrorClients']                  = "[phpAds] Ett fel har inträffat när annonsörer skulle hämtas från databasen.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Ett fel har inträffat när bannersen skulle hämtas från databasen.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Ett fel har inträffat när visningarna skulle hämtas från databasen.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Ett fel har inträffat när klickarna skulle hämtas från databasen.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Ett fel har inträffat när konverteringarna skulle hämtas från databasen.";
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Inga matchningar hittades";
$GLOBALS['strErrorOccurred']                    = "Ett fel inträffade";
$GLOBALS['strErrorUploadSecurity']              = "Upptäckte möjligt säkerhetsproblem, uppladdning stoppad!";
$GLOBALS['strErrorUploadBasedir']               = "Uppladdad fil kan inte godkännas, förmodligen pga safemode eller open_basedir restriktioner";
$GLOBALS['strErrorUploadUnknown']               = "Kan inte komma åt uppladdad fil, pga av okänd anledning. Vänligen kontrollera PHP konfigurationen";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "Ett fel inträffande vid läsning från databasen";
$GLOBALS['strErrorDBSerious']                   = "Ett allvarligt problem med databasen har upptäckts";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Databasen är förmodligen korrupt och behöver lagas. För mer info om hur man fixar korrupta tabeller, vänligen läs kapitlet <i>Felsökning</i> i <i>Administrationsguide</i>";
$GLOBALS['strErrorDBContact']                   = "Vänligen kontakta serveradministratören och meddela problemet.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "Det var inte möjligt att länka bannern till den här zonen pga:";
$GLOBALS['strUnableToLinkBanner']               = "Kan inte länka bannern:";
$GLOBALS['strErrorEditingCampaign']             = "Fel vid uppdatering av kampanj:";
$GLOBALS['strUnableToChangeCampaign']           = "Kan inte genomföra denna ändring därför att:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Kan inte genomföra denna ändring därför att:";
$GLOBALS['strDatesConflict']                    = "datumen i konflikt med:";
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
$GLOBALS['strSirMadam']                         = "Herr/fru";
$GLOBALS['strMailSubject']                      = "Rapport för annonsör";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Bäste {kontakt},\\n";
$GLOBALS['strMailBannerStats']                  = "Nedan finner du bannerstatistik för {klientnamn}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampanjen aktiverad";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampanjen avaktiverad";
$GLOBALS['strMailBannerActivated']              = "Din kampanj nedan har aktiverats pga \\nkampanjens aktiveringsdatum har nåtts.";
$GLOBALS['strMailBannerDeactivated']            = "Din kampanj nedan har avaktiverats p.g.a";
$GLOBALS['strMailFooter']                       = "Regards,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "Om du vill fortsätta annonsera på vår sajt, vänligen kontakta oss\\nVi ser fram emot att höra av dig";
$GLOBALS['strClientDeactivated']                = "Denna kampanj är för närvarande inte aktiv p.g.a";
$GLOBALS['strBeforeActivate']                   = "aktiveringsdatumet har inte nåtts";
$GLOBALS['strAfterExpire']                      = "utgångsdatumet har nåtts";
$GLOBALS['strNoMoreImpressions']                = "det finns inga fler visningar";
$GLOBALS['strNoMoreClicks']                     = "det finns inga fler klick";
$GLOBALS['strNoMoreConversions']                = "det finns inga fler försäljningar";
$GLOBALS['strWeightIsNull']                     = "dess vikt är satt till noll";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "De kvarvarande visningar, klick och konverteringar som finns kvar för din banner närmar sig {gräns}.\\.Din banner kommer att inaktiveras när det inte finns några visningar, klick eller konverteringar kvar.";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Visningar/klick/konverteringar är få";
$GLOBALS['strNoViewLoggedInInterval']           = "No Impressions were logged during the span of this report";
$GLOBALS['strNoClickLoggedInInterval']          = "No Clicks were logged during the span of this report";
$GLOBALS['strNoConversionLoggedInInterval']     = "No Conversions were logged during the span of this report";
$GLOBALS['strMailReportPeriod']                 = "Denna rapport inkluderar statistik från {startdatum} till {slutdatum}";
$GLOBALS['strMailReportPeriodAll']              = "Denna rapport inkluderar all statistik t.o.m {slutdatum}";
$GLOBALS['strNoStatsForCampaign']               = "Det finns ingen statistik tillgänglig för denna kampanj";
$GLOBALS['strImpendingCampaignExpiry']          = "Förestående utgång av kampanj";
$GLOBALS['strYourCampaign']                     = "Din kampanj";
$GLOBALS['strTheCampiaignBelongingTo']          = "Kampanjen tillhör";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{klientnamn} som visas nedan avslutas {datum}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{klientnamn} som visas nedan har färre än {gräns} visningar kvar.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Som ett resultat av det kommer kampanjen snart att avaktiveras automatiskt och då kommer \\nföljande banners i kampanjen också att avaktiveras:";

// Priority
$GLOBALS['strPriority']                         = "Prioritering";
$GLOBALS['strSourceEdit']                       = "Editera källor";

// Preferences
$GLOBALS['strPreferences']                      = "Inställningar";
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
$GLOBALS['strNumberOfItems']                       = "Antal artiklar";
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
$GLOBALS['strImpressionSR']                     = "Visningar";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Visningar";
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
$GLOBALS['strClicks_short']                     = "Klick";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Allmänna inställningar";
$GLOBALS['strGeneralSettings']              = "Allmänna inställningar";
$GLOBALS['strMainSettings']                 = "Huvudsakliga inställningar";
$GLOBALS['strAdminSettings']                = "Administrativa inställningar";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Välj sektion';

// Product Updates
$GLOBALS['strProductUpdates']         = "Produktuppdateringar";
$GLOBALS['strViewPastUpdates']        = "Handhåll gångna uppdateringar och backups";
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
$GLOBALS['strAgency']                      = "Konto";
$GLOBALS['strAgencies']                   = "Konto";
$GLOBALS['strAddAgency']                   = "Lägg till ett nytt konto";
$GLOBALS['strAddAgency_Key']               = "Lägg till <u>n</u>ytt konto";
$GLOBALS['strTotalAgencies']               = "Alla konton";
$GLOBALS['strAgencyProperties']              = "Kontots egenskaper";
$GLOBALS['strNoAgencies']                 = "Det finns inga konton definierade";
$GLOBALS['strConfirmDeleteAgency']           = "Vill du verkligen radera detta konto?";
$GLOBALS['strHideInactiveAgencies']          = "Göm inaktiva konton";
$GLOBALS['strInactiveAgenciesHidden']     = "inaktiva konton gömda";
$GLOBALS['strAllowAgencyEditConversions'] = "Låt denna användare editera konverteringar";
$GLOBALS['strAllowMoreReports']           = "Allow 'More Reports' button";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "Targeting Channels";
$GLOBALS['strChannelOverview']            = "Egenskaper för målkanaler";
$GLOBALS['strChannelManagement']          = "Targeting Channel Management";
$GLOBALS['strAddNewChannel']              = "Add new Targeting Channel";
$GLOBALS['strAddNewChannel_Key']          = "Add <u>n</u>ew Targeting Channel";
$GLOBALS['strChannelToWebsite']           = "INga webbsajter";
$GLOBALS['strNoChannels']                 = "Det finns för tillfället inga målkanaler angivna";
$GLOBALS['strNoChannelsAddWebsite']       = "Det finns inga sajter inlagda. För att skapa en zon, <a href='affiliate-edit.php'>lägg till ny sajt</a> först.";

$GLOBALS['strEditChannelLimitations']     = "Editera begränsningar för målkanaler";
$GLOBALS['strChannelProperties']          = "Egenskaper för målkanaler";
$GLOBALS['strChannelLimitations']         = "Leveransinställningar";
$GLOBALS['strConfirmDeleteChannel']       = "Vill du verkligen radera denna målkanal?";
$GLOBALS['strConfirmDeleteChannels']      = "Vill du verkligen radera denna målkanal?";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'i'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Namn på variabel";
$GLOBALS['strVariableDescription']     = "Beskrivning";
$GLOBALS['strVariableDataType']         = "Datatyp";
$GLOBALS['strVariablePurpose']       = "Syfte";
$GLOBALS['strGeneric']               = "Generisk";
$GLOBALS['strBasketValue']           = "Värdet på korgen";
$GLOBALS['strNumItems']              = "Antal artiklar";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Nummer";
$GLOBALS['strString']                 = "Tråd";
$GLOBALS['strTrackFollowingVars']     = "Spåra följande variabler";
$GLOBALS['strAddVariable']             = "Lägg till variabel";
$GLOBALS['strNoVarsToTrack']         = "Inga variabler finns att spåra";
$GLOBALS['strVariableHidden']       = "Hide variable to websites?";
$GLOBALS['strVariableRejectEmpty']  = "Avslå om tom?";
$GLOBALS['strTrackingSettings']     = "Inställningar för spårning";
$GLOBALS['strTrackerType']          = "Spårningstyp";
$GLOBALS['strTrackerTypeJS']        = "Spåra variabler för JavaScript";
$GLOBALS['strTrackerTypeDefault']   = "Track JavaScript variables (backwards compatible, escaping needed)";
$GLOBALS['strTrackerTypeDOM']       = "Track HTML elements using DOM";
$GLOBALS['strTrackerTypeCustom']    = "Custom JS code";
$GLOBALS['strVariableCode']         = "Javascript tracking code";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Fel i CSV fil! Kolumn <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> är inte tillåtet för den här spåraren";
$GLOBALS['strMissingColumnPart1']   = "<br>Fel i CSV fil! Kolumn <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> saknas";
$GLOBALS['strYouHaveNoTrackers']    = "Annonsören har inga spårare!";
$GLOBALS['strYouHaveNoCampaigns']   = "Annonsörer & kampanjer";
$GLOBALS['strYouHaveNoBanners']     = "Kampanjen har inga annonser!";
$GLOBALS['strYouHaveNoZones']       = "Annonsen är inte länkad till några zoner!";
$GLOBALS['strNoBannersDropdown']    = "\\--Inga Annonser Hittade--";
$GLOBALS['strNoZonesDropdown']      = "\\--Inga Zoner Hittade--";
$GLOBALS['strInsertErrorPart1']     = "<br><br><center><b> Fel, ";
$GLOBALS['strInsertErrorPart2']     = "records was not inserted! </b></center>";
$GLOBALS['strDuplicatedValue']      = "Duplicerat värde!";
$GLOBALS['strInsertCorrect']        = "<br><br><center><b> Filen laddas inte upp korrekt </b></center>";
$GLOBALS['strReuploadCsvFile']      = "Ladda upp CSV fil på nytt";
$GLOBALS['strConfirmUpload']        = "Bekräfta uppladdning";
$GLOBALS['strLoadedRecords']        = "Loaded Records";
$GLOBALS['strBrokenRecords']        = "Broken Fields in all Records";
$GLOBALS['strWrongDateFormat']      = "Felaktigt datumformat";


// Password recovery
$GLOBALS['strForgotPassword']         = "Glömt ditt lösenord?";
$GLOBALS['strPasswordRecovery']       = "Hämta lösenord";
$GLOBALS['strEmailRequired']          = "Email måste fyllas i";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Kan inte hitta emailadress";
$GLOBALS['strPwdRecPasswordSaved']    = "Det nya lösenordet sparades, gå vidare till <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "Fel ID";
$GLOBALS['strPwdRecEnterEmail']       = "Skriv in din mailadress nedan";
$GLOBALS['strPwdRecEnterPassword']    = "Skriv ditt nya lösenord nedan";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "Länk för att återställa lösenordet";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "% lösenord återhämtning";
$GLOBALS['strProceed']                = "Gå vidare >";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "har";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binary data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by the system administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "Konto";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "Händelse";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No user activity has been recorded during the timeframe you have selected.";
$GLOBALS['strAuditTrail']             = "Auditlista";
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
