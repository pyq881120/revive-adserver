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

$GLOBALS['strHome']                     = "Start";
$GLOBALS['strHelp']                     = "Hjælp";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Start forfra";
$GLOBALS['strNavigation']               = "Naviger";
$GLOBALS['strShortcuts']                = "Genveje";
$GLOBALS['strActions']                  = "Aktion";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Portfolio";
$GLOBALS['strMaintenance']              = "Vedligholdelse";
$GLOBALS['strProbability']              = "Sandsynlighed";
$GLOBALS['strInvocationcode']           = "Kalde Kode";
$GLOBALS['strTrackerVariables']         = "Tracker Variabler";
$GLOBALS['strBasicInformation']         = "Basis information";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "Login information";
$GLOBALS['strLogoutURL']                = "URL til viderstilling ved log ud <br /> Blank er standard";
$GLOBALS['strAppendTrackerCode']        = "Vedhæft Tracker Kode";
$GLOBALS['strOverview']                 = "oversigt";
$GLOBALS['strSearch']                   = "<u>S</u>øg";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "Detaljer";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Tjek for opdateringer";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Kompakt";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "Bruger";
$GLOBALS['strEdit']                     = "Rediger";
$GLOBALS['strCreate']                   = "Opret";
$GLOBALS['strDuplicate']                = "Kopier";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Flyt til";
$GLOBALS['strDelete']                   = "Slet";
$GLOBALS['strActivate']                 = "Aktiver";
$GLOBALS['strDeActivate']               = "Deaktiver";
$GLOBALS['strConvert']                  = "Konverter";
$GLOBALS['strRefresh']                  = "Opdater";
$GLOBALS['strSaveChanges']              = "Gem ændringer";
$GLOBALS['strUp']                       = "Op";
$GLOBALS['strDown']                     = "Ned";
$GLOBALS['strSave']                     = "Gem";
$GLOBALS['strCancel']                   = "Fortryd";
$GLOBALS['strBack']                     = "Tilbage";
$GLOBALS['strPrevious']                 = "Forrige";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Næste";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Ja";
$GLOBALS['strNo']                       = "Nej";
$GLOBALS['strNone']                     = "Ingen";
$GLOBALS['strCustom']                   = "Tilpas";
$GLOBALS['strDefault']                  = "Standard";
$GLOBALS['strOther']                    = "Andre";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "Ubegrænset";
$GLOBALS['strUntitled']                 = "Uden titel";
$GLOBALS['strAll']                      = "alt";
$GLOBALS['strAvg']                      = "Gns.";
$GLOBALS['strAverage']                  = "Gennemsnit";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Total";
$GLOBALS['strTotal']                    = "Total";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "Aktive";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "til";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "linked til";
$GLOBALS['strDaysLeft']                 = "Dage tilbage";
$GLOBALS['strCheckAllNone']             = "Kontroller alt / intet";
$GLOBALS['strKiloByte']                 = "kb";
$GLOBALS['strExpandAll']                = "<u>V</u>is alle";
$GLOBALS['strCollapseAll']              = "<u>S</u>kjul alle";
$GLOBALS['strShowAll']                  = "Vis alt";
$GLOBALS['strNoAdminInterface']         = "Administrators skærmbillede er slukket på grund af vedligeholdelse. Dette påvirker ikke leveringen af din kampagne.";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "Følgende felter indeholder fejl:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Før du kan fortsætte behøver du";
$GLOBALS['strFieldFixBeforeContinue2']  = "at rette følgende fejl.";
$GLOBALS['strDelimiter']                = "Ubegrænser";
$GLOBALS['strMiscellaneous']            = "Tilbehør";
$GLOBALS['strCollectedAllStats']        = "Komplet statistik";
$GLOBALS['strCollectedToday']           = "Idag";
$GLOBALS['strCollectedYesterday']       = "I går";
$GLOBALS['strCollectedThisWeek']        = "Denne uge";
$GLOBALS['strCollectedLastWeek']        = "Sidste uge";
$GLOBALS['strCollectedThisMonth']       = "Denne måned";
$GLOBALS['strCollectedLastMonth']       = "Sidste måned";
$GLOBALS['strCollectedLast7Days']       = "Seneste 7 dage";
$GLOBALS['strCollectedSpecificDates']   = "Specifikke dage";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Værdi";
$GLOBALS['strAdmin']                    = "Administrator";
$GLOBALS['strWarning']                  = "Advarsel";
$GLOBALS['strNotice']                   = "Besked";
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
$GLOBALS['strPriority']                 = "Prioritet";
$GLOBALS['strPriorityLevel']            = "Prioritets niveau";
$GLOBALS['strPriorityTargeting']        = "Fordeling";
$GLOBALS['strPriorityOptimisation']     = "Tilbehør"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Begrænsninger";
$GLOBALS['strNoLimitations']            = "Uden begrænsninger";
$GLOBALS['strCapping']                  = "Rammer";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Navn";
$GLOBALS['strSize']                     = "Størrelse";
$GLOBALS['strWidth']                    = "Bredde";
$GLOBALS['strHeight']                   = "Højde";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Mål";
$GLOBALS['strLanguage']                 = "Sprog";
$GLOBALS['strDescription']              = "Beskrivelse";
$GLOBALS['strVariables']                = "Variabler";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Kommentarer";

// User access
$GLOBALS['strWorkingAs']                = "Arbejder som";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Arbejder som";
$GLOBALS['strSwitchTo']                 = "Skift til";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s for...";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Add user";
$GLOBALS['strLinkUser_Key']             = "Link <u>b</u>ruger";
$GLOBALS['strUsernameToLink']           = "Username of user to add";
$GLOBALS['strEmailToLink']              = "Email of user to add";
$GLOBALS['strNewUserWillBeCreated']     = "Ny bruger vil blive oprettet";
$GLOBALS['strToLinkProvideEmail']       = "For at tilføje brugere, angiv brugerens email";
$GLOBALS['strToLinkProvideUsername']    = "For at tilføje bruger, angiv brugernavn";
$GLOBALS['strErrorWhileCreatingUser']   = "Error while creating user: %s";
$GLOBALS['strUserLinkedToAccount']      = "Bruger er blevet tilføjet til konto";
$GLOBALS['strUserAccountUpdated']       = "Bruger konto opdateret";
$GLOBALS['strUserUnlinkedFromAccount']  = "Bruger er fjernet fra konto";
$GLOBALS['strUserWasDeleted']           = "Bruger er blevet slettet";
$GLOBALS['strUserNotLinkedWithAccount'] = "Such user is not linked with account";
$GLOBALS['strCantDeleteOneAdminUser']   = "You can't delete a user. At least one user needs to be linked with admin account.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Brugernavn";
$GLOBALS['strLinkUserHelpEmail']        = "Email adresse";
$GLOBALS['strLastLoggedIn']             = "Last logged in";
$GLOBALS['strDateLinked']               = "Date linked";
$GLOBALS['strUnlink']                   = "Remove";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removing user from last entity";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Removing user from last entity will cause the user to be deleted. Would you like to remove this user?";
$GLOBALS['strUnlinkAndDelete']          = "Remove &amp; delete user";
$GLOBALS['strUnlinkUser']               = "Remove user";
$GLOBALS['strUnlinkUserConfirmBody']    = "Are you sure you want to remove this user?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Bruger Adgang";
$GLOBALS['strAdminAccess']              = "Admin Access";
$GLOBALS['strUserProperties']           = "Bruger Indstillinger";
$GLOBALS['strLinkNewUser']              = "Link Ny Bruger";
$GLOBALS['strPermissions']              = "Tilladelser";
$GLOBALS['strAuthentification']         = "Ægtheds kontrol";
$GLOBALS['strWelcomeTo']                = "Velkommen til";
$GLOBALS['strEnterUsername']            = "Indtast dit brugernavn og kodeord for at logge ind";
$GLOBALS['strEnterBoth']                = "Indtast venligs både dit brugernavn og kodeord";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "Log ind";
$GLOBALS['strLogout']                   = "Log ud";
$GLOBALS['strUsername']                 = "Brugernavn";
$GLOBALS['strPassword']                 = "Kodeord";
$GLOBALS['strPasswordRepeat']           = "Gentag kodeordet";
$GLOBALS['strAccessDenied']             = "Adgang nægtet";
$GLOBALS['strUsernameOrPasswordWrong']  = "Brugernavnet og/eller kodeordet er ikke korrekt. Venligst prøv igen.";
$GLOBALS['strPasswordWrong']            = "Kodeordet er ikke korrekt.";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Your account does not have the required permissions to use this feature, you can log into another account to use it.";
$GLOBALS['strDuplicateClientName']      = "Brugernavnet du har oplyst eksistere allerede, venligst anvend en anden brugenavn";
$GLOBALS['strDuplicateAgencyName']      = "Brugernavnet du har oplyst eksistere allerede, venligst anvend en anden brugenavn";
$GLOBALS['strInvalidPassword']          = "Kodeorder er ikke korrekt. Venligst anvend et andet kodeord.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "De to kodeord du har oplyst er ikke ens.";
$GLOBALS['strRepeatPassword']           = "Gentag kodeordet";
$GLOBALS['strOldPassword']              = "Gammelt kodeord";
$GLOBALS['strNewPassword']              = "Nyt kodeord";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "Forespørgelser";
$GLOBALS['strImpressions']              = "Visninger";
$GLOBALS['strClicks']                   = "Klik";
$GLOBALS['strConversions']              = "Conversions";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Salgs Kvotient";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Total antal klik";
$GLOBALS['strTotalConversions']         = "Total Antal Conversions";
$GLOBALS['strViewCredits']              = "Impressions kredit";
$GLOBALS['strClickCredits']             = "Klik kredit";
$GLOBALS['strConversionCredits']        = "Conversions kredit";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Dato tid";
$GLOBALS['strTrackerID']                = "Tracker ID";
$GLOBALS['strTrackerName']              = "Tracker navn";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Banner";
$GLOBALS['strCampaigns']                = "Kampagne";
$GLOBALS['strCampaignID']               = "Kampagne ID";
$GLOBALS['strCampaignName']             = "Kampagne navn";
$GLOBALS['strCountry']                  = "Land";
$GLOBALS['strStatsAction']              = "Aktion";
$GLOBALS['strWindowDelay']              = "Vindues forsinkelse";
$GLOBALS['strStatsVariables']           = "Variabler";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Månedelig afgift";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Værdi af kurv";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Dato";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "Dag";
$GLOBALS['strDays']                     = "Dage";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "Uge";
$GLOBALS['strWeeks']                    = "Uger";
$GLOBALS['strSingleMonth']              = "Måned";
$GLOBALS['strMonths']                   = "Måneder";
$GLOBALS['strDayOfWeek']                = "Ugedag";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Time";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "Sekunder";
$GLOBALS['strMinutes']                  = "minutter";
$GLOBALS['strHours']                    = "timer";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "Annoncør";
$GLOBALS['strClients']                      = "Annoncører";
$GLOBALS['strClientsAndCampaigns']          = "Annoncører & Kampagne";
$GLOBALS['strAddClient']                    = "Tilføj ny annoncør";
$GLOBALS['strAddClient_Key']                = "Tilføj <u>n</u>y annoncør";
$GLOBALS['strTotalClients']                 = "Toal annoncører";
$GLOBALS['strClientProperties']             = "Annoncør egenskaber";
$GLOBALS['strClientHistory']                = "Annoncør historik";
$GLOBALS['strNoClients']                    = "Der er ikke valgt nogen annoncør. For at oprette en kampagne <a href='advertiser-edit.php'>kan du oprette en annoncør</a> først.";
$GLOBALS['strNoClientsForBanners']          = "Der er ikke valgt nogen annoncør. For at oprette en kampagne <a href='advertiser-edit.php'>kan du oprette en annoncør</a> først.";
$GLOBALS['strConfirmDeleteClient']          = "Vil du virkelig slette denne annoncør?";
$GLOBALS['strConfirmDeleteClients']         = "Vil du virkelig slette denne annoncør?";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "Størrelse";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "Skjul inaktive annoncører";
$GLOBALS['strInactiveAdvertisersHidden']    = "Inaktive annoncør(er) er skjult";
$GLOBALS['strOverallAdvertisers']           = "Annoncører";
$GLOBALS['strAdvertiserSignup']             = "Annoncør Oprettelse";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Annoncør Oprettelse";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Annoncør Oprettelse";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Annoncører & Kampagne";
// Advertisers properties
$GLOBALS['strContact']                          = "Kontakt";
$GLOBALS['strContactName']                      = "Kontakt Navn";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "Leverings rapport for E-mail kampagne";
$GLOBALS['strNoDaysBetweenReports']             = "Antal dage mellem kampagne leverings rapport";
$GLOBALS['strSendDeactivationWarning']          = "E-mail når en kampagne automatisk er aktiveret/deaktiveret";
$GLOBALS['strAllowClientModifyInfo']            = "Tillad denne bruger at modificere egen opsætning";
$GLOBALS['strAllowClientModifyBanner']          = "Tillad denne bruger at modificere egne bannere";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "Tillad denne bruger at deaktivere egne bannere";
$GLOBALS['strAllowClientActivateBanner']        = "Tillad denne bruger at aktivere egen bannere";
$GLOBALS['strAllowClientViewTargetingStats']    = "Tillad denne bruger at se målgruppe statistikker";
$GLOBALS['strAllowCreateAccounts']              = "Tillad at denne bruger opretter nye kontoer";
$GLOBALS['strCsvImportConversions']             = "Tillad denne bruger at importere offline conversions";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Kampagne";
$GLOBALS['strCampaigns']                    = "Kampagne";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Total kampagner";
$GLOBALS['strActiveCampaigns']              = "Aktive kampagner";
$GLOBALS['strAddCampaign']                  = "Tilføj ny kampagne";
$GLOBALS['strAddCampaign_Key']              = "Tilføj <u>n/u>ew kampagne";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "Modificer kampagne";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "Slet alle kampagner";
$GLOBALS['strLinkedCampaigns']              = "Relaterede kampagner";
$GLOBALS['strCampaignStats']                = "Campaign Statistics";
$GLOBALS['strCampaignProperties']           = "Kampagne egenskaber";
$GLOBALS['strCampaignOverview']             = "Kampagne oversigt";
$GLOBALS['strCampaignHistory']              = "Kampagne historik";
$GLOBALS['strNoCampaigns']                  = "There are currently no campaigns defined for this advertiser.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Vil du virkelig slette alle kampagner som tilhører denne annoncører?";
$GLOBALS['strConfirmDeleteCampaign']        = "Vil du virkelig slette denne aktive kampagne?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Vil du virkelig slette denne aktive kampagne?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Vis oprindelig annoncør";
$GLOBALS['strHideParentAdvertisers']        = "Skjul oprindelig annoncør";
$GLOBALS['strHideInactiveCampaigns']        = "Skjul inaktive kampagner";
$GLOBALS['strInactiveCampaignsHidden']      = "Inaktive kampagne(r) er skjult";
$GLOBALS['strContractDetails']              = "Kontakt detaljer";
$GLOBALS['strInventoryDetails']             = "Inventory detaljer";
$GLOBALS['strPriorityInformation']          = "Priority in relation to other campaigns";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Kampagne";
$GLOBALS['strHiddenAd']                     = "Annonce";
$GLOBALS['strHiddenAdvertiser']             = "Annoncør";
$GLOBALS['strHiddenTracker']                = "Tracker";
$GLOBALS['strHiddenWebsite']              = "Webside";
$GLOBALS['strHiddenZone']                   = "Zone";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Ledsagende positionering";
$GLOBALS['strSelectUnselectAll']            = "Vælg/fravælg alt";
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
$GLOBALS['strLow']                              = "Lav";
$GLOBALS['strHigh']                             = "Høj";
$GLOBALS['strExpirationDate']                   = "Slut dato";
$GLOBALS['strExpirationDateComment']            = "Kampagnen vil udløbe ved afslutningen på denne dag";
$GLOBALS['strActivationDate']                   = "Start dato";
$GLOBALS['strActivationDateComment']            = "Kampagnen vil begynde ved starten af denne dag";
$GLOBALS['strRevenueInfo']                      = "Indtægts information";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "Tilbageværende impressions";
$GLOBALS['strClicksRemaining']                  = "Tilbageværende kliks";
$GLOBALS['strConversionsRemaining']             = "Tilbageværende Conversions";
$GLOBALS['strImpressionsBooked']                = "Reserverede visninger";
$GLOBALS['strClicksBooked']                     = "Reserverede kliks";
$GLOBALS['strConversionsBooked']                = "Reserverede conversions";
$GLOBALS['strCampaignWeight']                   = "Set the campaign weight";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimere";
$GLOBALS['strAnonymous']                        = "Skjul annoncør og webside af denne kampagne";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "per dag.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Automatisk - fordel de resterende inventory jævnt over de resterende antal dage.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Prioriteringen af denne kampagne er sat til lav,\\nmen vægten er sat til nul eller den ikke er \\n specificeret. Dette vil betyde at kampagnen er \\n deaktiveret og dens banner vil ikke blive levert \\n indtil vægten er sat til valid nummer. \\n \\n Er du sikker på at du vil fortsætte?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Prioriteringen af denne kampagne er sat til høj,\\nmen ønsket antal impressions er ikke specificeret. Dette vil betyde at kampagnen er \\n deaktiveret og dens banner vil ikke blive levert \\n indtil vægten er sat til valid nummer. \\n \\n Er du sikker på at du vil fortsætte?";
$GLOBALS['strCampaignStatusPending']            = "Under behandling";
$GLOBALS['strCampaignStatusInactive']           = "Aktive";
$GLOBALS['strCampaignStatusRunning']            = "Kører";
$GLOBALS['strCampaignStatusPaused']             = "Pauset";
$GLOBALS['strCampaignStatusAwaiting']           = "Afventer";
$GLOBALS['strCampaignStatusExpired']            = "Gennemført";
$GLOBALS['strCampaignStatusApproval']           = "Afventer godkendelse »";
$GLOBALS['strCampaignStatusRejected']           = "Afvist";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Restarted";
$GLOBALS['strCampaignStatusDeleted']            = "Slet";
$GLOBALS['strCampaignApprove']                  = "Godkend";
$GLOBALS['strCampaignApproveDescription']       = "accepter denne kampagne";
$GLOBALS['strCampaignReject']                   = "Afvis";
$GLOBALS['strCampaignRejectDescription']        = "afvis denne kampagne";
$GLOBALS['strCampaignPause']                    = "Pause";
$GLOBALS['strCampaignPauseDescription']         = "pause denne kampagne midlertidigt";
$GLOBALS['strCampaignRestart']                  = "Genoptag";
$GLOBALS['strCampaignRestartDescription']       = "genoptag denne kampagne";
$GLOBALS['strCampaignStatus']                   = "Kampagne status";
$GLOBALS['strReasonForRejection']               = "Begrundelse for afvisning";
$GLOBALS['strReasonSiteNotLive']                = "Sitet er ikke live";
$GLOBALS['strReasonBadCreative']                = "Inappropriate creative";
$GLOBALS['strReasonBadUrl']                     = "Inappropriate destination url";
$GLOBALS['strReasonBreakTerms']                 = "Website againts terms and conditions";
$GLOBALS['strChangeStatus']                     = "Change status";
$GLOBALS['strCampaignType']                     = "Kampagne navn";
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
$GLOBALS['strTracker']                    = "Tracker";
$GLOBALS['strTrackers']                   = "Tracker";
$GLOBALS['strTrackerOverview']            = "Tracker oversigt";
$GLOBALS['strTrackerPreferences']            = "Tracker Præferencer";
$GLOBALS['strAddTracker']                 = "Tilføj ny tracker";
$GLOBALS['strAddTracker_Key']             = "Tilføj <u>n</u>y tracker";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Vil du virkelig slette denne tracker som tilhører denne annoncør?";
$GLOBALS['strConfirmDeleteTrackers']      = "Vil du virkelig slette denne tracker?";
$GLOBALS['strConfirmDeleteTracker']       = "Vil du virkelig slette denne tracker?";
$GLOBALS['strDeleteAllTrackers']          = "Slet alle trackere";
$GLOBALS['strTrackerProperties']          = "Tracker egenskaber";
$GLOBALS['strTrackerOverview']            = "Tracker oversigt";
$GLOBALS['strModifyTracker']              = "Modificer tracker";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "Normal status";
$GLOBALS['strStatus']                     = "Status";
$GLOBALS['strLinkedTrackers']             = "Sammenhængende sporer";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Conversions vindue";
$GLOBALS['strUniqueWindow']               = "Unik vindue";
$GLOBALS['strClick']                      = "Klik";
$GLOBALS['strView']                       = "Oversigt";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Visninger";
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
$GLOBALS['strLinkCampaignsByDefault']     = "Link de ny oprettede kampagner som udgangspunkt";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Banner";
$GLOBALS['strBanners']                       = "Banner";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Tilføj ny banner";
$GLOBALS['strAddBanner_Key']                 = "Tilføj <u>n</u>y banner";
$GLOBALS['strBannerToCampaign']              = "Din kampagne";
$GLOBALS['strModifyBanner']                  = "Modificer banner";
$GLOBALS['strActiveBanners']                 = "Aktiver bannere";
$GLOBALS['strTotalBanners']                  = "Total bannere";
$GLOBALS['strShowBanner']                    = "Vis banner";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Slet alle bannere";
$GLOBALS['strActivateAllBanners']            = "Aktiver alle bannere";
$GLOBALS['strDeactivateAllBanners']          = "Deaktiver alle bannere";
$GLOBALS['strBannerOverview']                = "Banner oversigt";
$GLOBALS['strBannerProperties']              = "Banner egenskaber";
$GLOBALS['strBannerHistory']                 = "Banner historik";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "There are currently no banners defined for this campaign.";
$GLOBALS['strNoBannersAddCampaign']          = "Der er ikke valgt noget website. For at oprette en zone, skal du <a href='affiliate-edit.php'>tilføje et nyt website</a> først.";
$GLOBALS['strNoBannersAddAdvertiser']        = "Der er ikke valgt noget website. For at oprette en zone, skal du <a href='affiliate-edit.php'>tilføje et nyt website</a> først.";
$GLOBALS['strConfirmDeleteBanner']           = "Vil du virkelig slette denne banner?";
$GLOBALS['strConfirmDeleteBanners']          = "Vil du virkelig slette denne banner?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Vil du virkelig slette alle bannere som er tilknyttet denne kampagne?";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "Vis oprindelige kampagner";
$GLOBALS['strHideParentCampaigns']           = "Skjul oprindelige kampagner";
$GLOBALS['strHideInactiveBanners']           = "Skjul inaktive bannere";
$GLOBALS['strInactiveBannersHidden']         = "Inaktive banner(e) er skjult";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "Det er ikke muligt at vedhæfte andre bannere til tekst reklamer";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Advarsel, der mangler muligvis_";
$GLOBALS['strWarningMissingClosing']         = " lukke mærke \">\"";
$GLOBALS['strWarningMissingOpening']         = " åbne mærke \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Fremsende alligevel";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "i"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Banner Præferencer";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Standard banner";
$GLOBALS['strDefaultBannerUrl']                      = "Default Image URL";
$GLOBALS['strDefaultBannerDestination']              = "Standard destination URL";
$GLOBALS['strAllowedBannerTypes']                    = "Tilladte banner typer";
$GLOBALS['strTypeSqlAllow']                          = "Tillad SQL lokale bannere";
$GLOBALS['strTypeWebAllow']                          = "Tillad Webserver lokale bannere";
$GLOBALS['strTypeUrlAllow']                          = "Tillad eksterne bannere";
$GLOBALS['strTypeHtmlAllow']                         = "Tillad HTML bannere";
$GLOBALS['strTypeTxtAllow']                          = "Tillad tekst reklamer";
$GLOBALS['strTypeHtmlSettings']                      = "HTML banner optioner";
$GLOBALS['strTypeHtmlAuto']                          = "Automatsk ændre HTML bannere for at forcere klik sporing";
$GLOBALS['strTypeHtmlPhp']                           = "Tillad PHP udtryk at blive kørt inde i HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Venligst vælg den type banner";
$GLOBALS['strMySQLBanner']             = "Upload a local banner to the database";
$GLOBALS['strWebBanner']               = "Upload a local banner to the webserver";
$GLOBALS['strURLBanner']               = "Link an external banner";
$GLOBALS['strHTMLBanner']              = "Create an HTML banner";
$GLOBALS['strTextBanner']              = "Create a Text banner";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Ønsker du at beholde din <br /> eksisterende billede, eller du <br /> ønsker måske at uploade en anden?";
$GLOBALS['strUploadOrKeepAlt']        = "Ønsker du at beholde din <br /> eksisterende backupbillede, eller du <br /> ønsker at uploade en anden?";
$GLOBALS['strNewBannerFile']         = "Vælg det billede du ønsker <br /> at bruge til denne banner <br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Vægl en backup billede du <br /> ønsker at brugei tilfælde af at browseren <br /> ikke supportere rich media <br /><br />";
$GLOBALS['strNewBannerURL']         = "Billede URL (inkl. http://)";
$GLOBALS['strURL']                     = "Destination URL (inkl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Nøgleord";
$GLOBALS['strTextBelow']             = "Tekst under billedet";
$GLOBALS['strWeight']                 = "Vægt";
$GLOBALS['strAlt']                     = "Alt text";
$GLOBALS['strStatusText']            = "Status tekst";
$GLOBALS['strBannerWeight']            = "Banner vægt";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Generisk HTML Banner";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generisk";
$GLOBALS['strSwfTransparency']		   = "Allow transparent background";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Tjek for hard-coded links inde i Flash filen";
$GLOBALS['strConvertSWFLinks']        = "Konverter Flash links";
$GLOBALS['strHardcodedLinks']        = "Hard-coded links";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "KOmprimer SWF filen for hurtigere downloading (Dette kræver en Flash 6 afspiller)";
$GLOBALS['strOverwriteSource']        = "Overskriv kilde parameter";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "Adsense Kontoer";
$GLOBALS['strLinkAdSenseAccount']         = "Link Adsense Konto";
$GLOBALS['strCreateAdSenseAccount']       = "Opret Adsense Konto";
$GLOBALS['strEditAdSenseAccount']         = "Rediger Adsense Konto";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Leverings optioner";
$GLOBALS['strACL']                        = "Levering";
$GLOBALS['strACLAdd']                     = "Add delivery limitation";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Uden begrænsninger";
$GLOBALS['strApplyLimitationsTo']         = "Tilføj begrænsninger til";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Fjern alle begrænsninger";
$GLOBALS['strEqualTo']                    = "er lig med";
$GLOBALS['strDifferentFrom']              = "er forskellig fra";
$GLOBALS['strLaterThan']                  = "er senere end";
$GLOBALS['strLaterThanOrEqual']           = "er senere end eller lig med";
$GLOBALS['strEarlierThan']                = "er tidligere end";
$GLOBALS['strEarlierThanOrEqual']         = "er tidligere eller lig med";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "er større end";
$GLOBALS['strLessThan']                   = "er mindre end";
$GLOBALS['strAND']                        = "OG";                          // logical operator
$GLOBALS['strOR']                         = "ELLER";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Vis kun denne banner når:";
$GLOBALS['strWeekDay']                    = "Ugedag";
$GLOBALS['strWeekDays']                   = "Ugedage";
$GLOBALS['strTime']                       = "Tid";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "Kilde";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "By";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Leverings begræsninger";

$GLOBALS['strDeliveryCapping']            = "Delivery capping per visitor";
$GLOBALS['strDeliveryCappingReset']       = "Nulstil visnings tæller efter:";
$GLOBALS['strDeliveryCappingTotal']       = "total";
$GLOBALS['strDeliveryCappingSession']     = "per session";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Begræns kampagne visninger til:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Begræns zone visninger til:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Begræns zone visninger til:";

// Website
$GLOBALS['strAffiliate']                = "Webside";
$GLOBALS['strAffiliates']                 = "Websider";
$GLOBALS['strAffiliatesAndZones']        = "Websider og zoner";
$GLOBALS['strAddNewAffiliate']            = "Tilføj nye websider";
$GLOBALS['strAddNewAffiliate_Key']        = "Tilføj <u>n</u>ye websider";
$GLOBALS['strAddAffiliate']                = "Create website";
$GLOBALS['strAffiliateProperties']        = "Webside egenskab";
$GLOBALS['strAffiliateOverview']        = "Website Overview";
$GLOBALS['strAffiliateHistory']            = "Webside historik";
$GLOBALS['strZonesWithoutAffiliate']    = "Zoner uden websider";
$GLOBALS['strMoveToNewAffiliate']        = "Flyt til ny webside";
$GLOBALS['strNoAffiliates']                = "Der er ikke valgt noget website. For at oprette en zone, skal du <a href='affiliate-edit.php'>tilføje et nyt website</a> først.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Vil du virkelig slette denne webside?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Vil du virkelig slette denne webside?";
$GLOBALS['strMakePublisherPublic']        = "Gør zonerne som er tilknyttet denne webside offentlige tilgængelige";
$GLOBALS['strAffiliateInvocation']      = "Ægthes kode";
$GLOBALS['strAdvertiserSetup']          = "Annoncør Oprettelse";
$GLOBALS['strTotalAffiliates']          = "Totale websider";
$GLOBALS['strInactiveAffiliatesHidden'] = "Inaktiv webside(r) som er skjult";
$GLOBALS['strShowParentAffiliates']     = "Vis oprindelig websider";
$GLOBALS['strHideParentAffiliates']     = "Skjul oprindelig websider";

// Website (properties)
$GLOBALS['strWebsite']                      = "Webside";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Tillad denne bruger at modificere egen opsætning";
$GLOBALS['strAllowAffiliateModifyZones']    = "Tillad denne bruger at modificere egne zoner";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Tillad denne bruger at linke banner til egne zoner";
$GLOBALS['strAllowAffiliateAddZone']        = "Tillad denne burger at definere nye zoner";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Tillad denne bruger at slette eksisterende zoner";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Tillad denne bruger at genere invocation kode";
$GLOBALS['strAllowAffiliateZoneStats']      = "Tillad denne bruger at se zone statistik";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Tillad denne bruger kun at se godkendte eller conversions under behandling";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Betalings information";
$GLOBALS['strAddress']                      = "Adresse";
$GLOBALS['strPostcode']                     = "Post nummer";
$GLOBALS['strCity']                         = "By";
$GLOBALS['strCountry']                      = "Land";
$GLOBALS['strPhone']                        = "Telefon";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Konto kontakt";
$GLOBALS['strPayeeName']                    = "Betalers navn";
$GLOBALS['strTaxID']                        = "Skat ID";
$GLOBALS['strModeOfPayment']                = "Betalings metode";
$GLOBALS['strPaymentChequeByPost']          = "Ckeck med posten";
$GLOBALS['strCurrency']                     = "Valuta";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Anden information";
$GLOBALS['strUniqueUsersMonth']             = "Unikke brugere/måned";
$GLOBALS['strUniqueViewsMonth']             = "Unikke visninger/måned";
$GLOBALS['strPageRank']                     = "Side rangklasse";
$GLOBALS['strCategory']                     = "Kategori";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Hjælpe fil";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Websider og zoner";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strZones']                        = "Zoner";
$GLOBALS['strAddNewZone']                   = "Tilføj nye zoner";
$GLOBALS['strAddNewZone_Key']               = "Tilføj <u>n</u>y zone";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "Modificer zone";
$GLOBALS['strZoneToWebsite']                = "Alle websider";
$GLOBALS['strLinkedZones']                  = "Sammenhængende zoner";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Zone overblik";
$GLOBALS['strZoneProperties']               = "Zone egenskaber";
$GLOBALS['strZoneHistory']                  = "Zone historik";
$GLOBALS['strNoZones']                      = "There are currently no zones defined for this website.";
$GLOBALS['strNoZonesAddWebsite']            = "Der er ikke valgt noget website. For at oprette en zone, skal du <a href='affiliate-edit.php'>tilføje et nyt website</a> først.";
$GLOBALS['strConfirmDeleteZone']            = "Vil du virkelig slette denne zone?";
$GLOBALS['strConfirmDeleteZones']           = "Vil du virkelig slette denne zone?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Zone type";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Button eller Retangulær";
$GLOBALS['strInterstitial']                 = "Mellemliggende eller flydende DHTML";
$GLOBALS['strPopup']                        = "Pop op";
$GLOBALS['strTextAdZone']                   = "Tekst reklame";
$GLOBALS['strEmailAdZone']                  = "Email/Nyhedsbrev zone";
$GLOBALS['strZoneClick']                    = "Klik tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Vis matchende bannere";
$GLOBALS['strHideMatchingBanners']          = "Skjul matchende bannere";
$GLOBALS['strBannerLinkedAds']              = "Bannere tilknyttet til zonen";
$GLOBALS['strCampaignLinkedAds']            = "Kampagner tilknyttet til zonen";
$GLOBALS['strTotalZones']                   = "Total zoner";
$GLOBALS['strInactiveZonesHidden']          = "inaktive zone(r) er skjult";
$GLOBALS['strWarnChangeZoneType']           = "Ved at skifte zone type til tekst eller email vil fjerne all links til bannere/kampagner på grund af restriktioner på disse zoner\\n<ul>\\n<li>Tekst zoner kan kun linkes til tekst reklamer</li>\\n<li>Email zoner kan kun have en aktic banner på samme tid</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Skifte zone størrelse vil fjerne link til all bannnere som ikke er i den nye størrelse, og vil tilføje enhver banner fra tilsvarend kampagner som har den nye størrelse';
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
$GLOBALS['strAdvanced']                    = "Avanceret";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "Kæde opsætning";
$GLOBALS['strZoneNoDelivery']            = "Hvis ingen bannere fra denne zone <br /> kan blive leveret, prøv at...";
$GLOBALS['strZoneStopDelivery']            = "Stop levering og vis ikke nogen banner";
$GLOBALS['strZoneOtherZone']            = "Vis den valgte zone i stedet";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "Tilføj altid den følgende HTML kode til bannere som er vist i denne zone";
$GLOBALS['strAppendSettings']            = "Tilføj og forbered opsætninger";
$GLOBALS['strZoneForecasting']            = "Zone prognose opsætninger";
$GLOBALS['strZonePrependHTML']            = "Forbered altid HTML koden til tekst reklamer som er vist i denne zone";
$GLOBALS['strZoneAppendHTML']            = "Vedhæft altid HTML koden til tekst reklamer som er vist i denne zone";
$GLOBALS['strZoneAppendNoBanner']        = "Vedhæft selv om der ikke er leveret bannere";
$GLOBALS['strZoneAppendType']            = "Tilføj type";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML kode";
$GLOBALS['strZoneAppendZoneSelection']    = "Pop up eller interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Tilføj altid den følgende pop up eller interstitial til baners som er vist i denne zone";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Alle bannere som er linket sammen to den valgte zone er i øjeblikket ikke aktive. <br />Dette er zone kæden som vil blive anvendt:";
$GLOBALS['strZoneProbNullPri']            = "Der er ikke nogle aktive bannere tilknyttet denne zone.";
$GLOBALS['strZoneProbListChainLoop']    = "Resultatet ved at anvende zone kæden er en loop. Levering for denne zone er standset.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Venligst vælg hvad som ønskes tilknyttet til denne zone";
$GLOBALS['strLinkedBanners']            = "Tilknyt individuelle bannere";
$GLOBALS['strCampaignDefaults']            = "Tilknyt banner til oprindelig kampagne";
$GLOBALS['strLinkedCategories']         = "Tilknyt bannere ved kategori";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "Nøgleord";
$GLOBALS['strIncludedBanners']            = "Tilknyttede bannere";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "Der er ikke nogle zoner tilgængelige som denne banner kan blive tilknyttet sammen med";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} matchende bannere";
$GLOBALS['strNoCampaignsToLink']        = "Der er for øjeblikket ikke nogle kampagner tilgængelige, der kan blive linkes til denne zone";
$GLOBALS['strNoTrackersToLink']            = "Der er for øjeblikke ikke nogle tracker tilgængelige, der kan linkes til denne kampagne";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Der er ikke nogle zoner tilgængelige som denne kampagne kan blive sammenkædet med";
$GLOBALS['strSelectBannerToLink']        = "Vælg den banner som du vil linke til denne zone:";
$GLOBALS['strSelectCampaignToLink']        = "Vælg den kampagne som du vil linke til denne zone:";
$GLOBALS['strSelectAdvertiser']         = "Vælg annoncør";
$GLOBALS['strSelectPlacement']          = "Vælg kampagne";
$GLOBALS['strSelectAd']                 = "Vælg banner";
$GLOBALS['strSelectPublisher']          = "Vælg Website";
$GLOBALS['strSelectZone']               = "Vælg Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Vedhæft sporings kode";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Under behandling";
$GLOBALS['strStatusApproved']           = "Godkendt";
$GLOBALS['strStatusDisapproved']        = "Afvist";
$GLOBALS['strStatusDuplicate']          = "Kopier";
$GLOBALS['strStatusOnHold']             = "Venteposition";
$GLOBALS['strStatusIgnore']             = "Ignorere";
$GLOBALS['strConnectionType']           = "Type";
$GLOBALS['strConnTypeSale']             = "Salg";
$GLOBALS['strConnTypeLead']             = "Føre";
$GLOBALS['strConnTypeSignUp']           = "Tilmelde";
$GLOBALS['strShortcutEditStatuses'] = "Editere status";
$GLOBALS['strShortcutShowStatuses'] = "Vis status";

// Statistics
$GLOBALS['strStats']                     = "Statistikker";
$GLOBALS['strNoStats']                   = "Der er for øjeblikket ingen statistik tilgængelig";
$GLOBALS['strNoTargetingStats']          = "Der er for øjeblikket ingen target statistik tilgængelig";
$GLOBALS['strNoStatsForPeriod']          = "Der er for øjeblikket ingen statistik tilgængelig for perioden %s til %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Der er for øjeblikket ingen target statistik tilgængelig for perioden %s til %s";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "Global historik";
$GLOBALS['strDailyHistory']              = "Daglig historik";
$GLOBALS['strDailyStats']                = "Daglig statistik";
$GLOBALS['strWeeklyHistory']             = "Ugentlig statistik";
$GLOBALS['strMonthlyHistory']            = "Månedlig statistik";
$GLOBALS['strCreditStats']               = "Kredit statistik";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "Total for denne periode";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Webside distribution";
$GLOBALS['strCampaignDistribution']      = "Kampagne distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Targeting statistik";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Vis efter";
$GLOBALS['strBreakdownByDay']            = "Dag";
$GLOBALS['strBreakdownByWeek']           = "Uge";
$GLOBALS['strBreakdownByMonth']          = "Måned";
$GLOBALS['strBreakdownByDow']            = "Ugedag";
$GLOBALS['strBreakdownByHour']           = "Time";
$GLOBALS['strItemsPerPage']              = "Antal pr. side";
$GLOBALS['strDistributionHistory']       = "Leverings historik";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Vis <u>g</u>raf af statistik";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>ksport statistik til Excel";
$GLOBALS['strGDnotEnabled']              = "Du skal have GD aktiveret i PHP for at vise grafer. <br />Venligst se<a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for yderligere information, inklusiv hvordan du installerer GD på din server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "Udløb";
$GLOBALS['strNoExpiration']           = "Der er ikke defineret en udløbsdato";
$GLOBALS['strEstimated']              = "Estimeret udløbs dato";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Kampagne historik";

// Reports
$GLOBALS['strReports']                = "Rapporter";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "Start dato";
$GLOBALS['strEndDate']                = "Slut dato";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Begrænsninger";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "All annoncører";
$GLOBALS['strAnonAdvertisers']           = "Annonyme annoncører";
$GLOBALS['strAllPublishers']             = "Alle websider";
$GLOBALS['strAnonPublishers']            = "Annonyme websider";
$GLOBALS['strAllAvailZones']             = "Alle tilgængelige zoner";

// Userlog
$GLOBALS['strUserLog']                = "Bruger log";
$GLOBALS['strUserLogDetails']        = "Bruger log detaljer";
$GLOBALS['strDeleteLog']            = "Slet log";
$GLOBALS['strAction']                = "Aktion";
$GLOBALS['strNoActionsLogged']        = "Der er ikke logget nogle hændelser";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Direkte udvælgelse";
$GLOBALS['strChooseInvocationType']        = "Venligst vælg den type af banner invocation";
$GLOBALS['strGenerate']                    = "Generere";
$GLOBALS['strParameters']                = "Tag opsætning";
$GLOBALS['strFrameSize']                = "Ramme størrelse";
$GLOBALS['strBannercode']                = "Banner kode";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Gå tilbage til rapport listen";
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
$GLOBALS['strLogErrorClients']                  = "[phpAds] En fejl opstod under forsøget på at hente annoncører fra databasen";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] En fejl opstod under forsøget på at hente bannere fra databasen";
$GLOBALS['strLogErrorViews']                    = "[phpAds] En fejl opstod under forsøget på at hente impressions fra databasen";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] En fejl opstod under forsøget på at hente kliks fra databasen";
$GLOBALS['strLogErrorConversions']              = "[phpAds] En fejl opstod under forsøget på at hente conversions fra databasen";
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Der er ikke fundet nogle matchende resultater";
$GLOBALS['strErrorOccurred']                    = "Der opstod en fejl";
$GLOBALS['strErrorUploadSecurity']              = "Der er slettet en mulig sikkerheds problem og upload er stoppet!";
$GLOBALS['strErrorUploadBasedir']               = "Der kunne ikke oprettes adgang til uploadede fil, sandsynligvis på grund af sikkerhedstilstanden eller open_basedir restriktioner";
$GLOBALS['strErrorUploadUnknown']               = "Der kunne ikke oprettes adgang til uploadede fil, sandsynligvis på grund af en ukendt fejl. Venligst tjek din PHP konfiguration.";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "Der opstod en fejl under adgangsforsøget til databasen.";
$GLOBALS['strErrorDBSerious']                   = "Der er detekteret et avorligt problem med databasen.";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Database tabellen er sandsynligvis fejlbehæftet og behøver at blive repareret. For yderligere information om at reparere fejlbehæftede tabeller, venligst læs kapitlet <i>Troubleshooting</i> i <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact']                   = "Venligst kontakt administratoren af denne server og meddel ham eller hende om dette problem.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "Det var ikke muligt at linke banner til denne zone fordi:";
$GLOBALS['strUnableToLinkBanner']               = "Kan ikke linke denne banner:_";
$GLOBALS['strErrorEditingCampaign']             = "Fejl ved opdatering af kampagne:";
$GLOBALS['strUnableToChangeCampaign']           = "Kan ikke tilføje denne ændring på grund af:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Kan ikke tilføje denne ændring på grund af:";
$GLOBALS['strDatesConflict']                    = "datoer konflikter med:";
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
$GLOBALS['strSirMadam']                         = "Hr/Fru";
$GLOBALS['strMailSubject']                      = "Annoncør rapport";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Kære {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Nedenfor vil få finde banner statistik for {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampagne aktiveret";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampagne deaktiveret";
$GLOBALS['strMailBannerActivated']              = "Din kampagne som er vist nedenfor er blevet aktiveret fordi\\n kampagnens aktiverings dato er nået.";
$GLOBALS['strMailBannerDeactivated']            = "Din kampagne som er vist nedenfor er deaktiveret fordi";
$GLOBALS['strMailFooter']                       = "Med venlig hilsen,\\n{adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "Hvis du vil fortsætte at reklamere på vores webside, venligst kontakt os.\\nVi ser frem til at høre fra dig.";
$GLOBALS['strClientDeactivated']                = "Kampagnen er for øjeblikket ikke aktiv fordi";
$GLOBALS['strBeforeActivate']                   = "aktiverings datoen er endu ikke opnået";
$GLOBALS['strAfterExpire']                      = "udløbsdatoen er opnået";
$GLOBALS['strNoMoreImpressions']                = "der er ikke nogle Impressions tilbage";
$GLOBALS['strNoMoreClicks']                     = "der er ikke nogle klik's tilbage";
$GLOBALS['strNoMoreConversions']                = "der er ikke noglet salg tilbage";
$GLOBALS['strWeightIsNull']                     = "vægten er sat til nul";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "Impressions, Klik eller Conversions som er tilbage på dine bannere er på vej til at kommer under {limit}. \\nDine bannere vil blive deaktiveret når der ikke er flere Impressions, Klik eller Conversions tilbage. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Klik/Conversions niveau er lav";
$GLOBALS['strNoViewLoggedInInterval']           = "Der blev ikke logget nogle Impressions i tidsrummet under denne rapport";
$GLOBALS['strNoClickLoggedInInterval']          = "Der blev ikke logget nogle Kliks i tidsrummet under denne rapport";
$GLOBALS['strNoConversionLoggedInInterval']     = "Der blev ikke logget nogle Conversions i tidsrummet under denne rapport";
$GLOBALS['strMailReportPeriod']                 = "Denne rapport inkludere statistik fra {startdate} til {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Denne rapport indeholder alt statistik op til {enddate}";
$GLOBALS['strNoStatsForCampaign']               = "Der er ikke statistik tilgængelig for denne kampagne";
$GLOBALS['strImpendingCampaignExpiry']          = "Forestående kampagne udløber";
$GLOBALS['strYourCampaign']                     = "Din kampagne";
$GLOBALS['strTheCampiaignBelongingTo']          = "Kampagnen som hører til";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} vist nedenfor er sat til at slutte på {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} vist nedenfor har mindre end {limit} impressions tilbage.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Som et resultat vil kampagnen automatisk blive stoppet, og de \\n følgende bannere i kampagnen vil også blive stoppet:";

// Priority
$GLOBALS['strPriority']                         = "Prioritet";
$GLOBALS['strSourceEdit']                       = "Rediger kilde";

// Preferences
$GLOBALS['strPreferences']                      = "Præferencer";
$GLOBALS['strUserPreferences']                  = "Bruger Indstillinger";
$GLOBALS['strChangePassword']                   = "Skift Password";
$GLOBALS['strChangeEmail']                      = "Skift Email";
$GLOBALS['strCurrentPassword']                  = "Nuværende password";
$GLOBALS['strChooseNewPassword']                = "Vælg et nyt password";
$GLOBALS['strReenterNewPassword']               = "Gentag det nye password";
$GLOBALS['strNameLanguage']                     = "Navn & sprog";
$GLOBALS['strAccountPreferences']               = "Konto Indstillinger";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Kampagne email Rapport Indstillinger";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "Administrator email Advarsler";
$GLOBALS['strAgencyEmailWarnings']              = "Bureau email Advarsler";
$GLOBALS['strAdveEmailWarnings']                = "Annoncør email Advarsler";
$GLOBALS['strFullName']                         = "Fulde Navn";
$GLOBALS['strEmailAddress']                     = "Email adresse";
$GLOBALS['strUserDetails']                      = "Bruger Information";
$GLOBALS['strLanguageTimezone']                 = "Sprog & Tidszone";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "Bruger Grænseflade Indstillinger";
$GLOBALS['strPluginPreferences']                = "Generelle Indstillinger";
$GLOBALS['strInvocationPreferences']            = "Invocation Indstillinger";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Revenue";
$GLOBALS['strNumberOfItems']                       = "Antal poster";
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
$GLOBALS['strImpressionSR']                     = "Visninger";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Visninger";
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
$GLOBALS['strClicks_short']                     = "Klik";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Overordnede Indstillinger";
$GLOBALS['strGeneralSettings']              = "Generel opsætninger";
$GLOBALS['strMainSettings']                 = "Hoved opsætninger";
$GLOBALS['strAdminSettings']                = "Administrator opsætninger";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Vælg sektion';

// Product Updates
$GLOBALS['strProductUpdates']         = "Produkt opdateringer";
$GLOBALS['strViewPastUpdates']        = "Håndtere tidligere opdateringer og back-up's";
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
$GLOBALS['strAgencyManagement']              = "Konto Administration";
$GLOBALS['strAgency']                      = "Konto";
$GLOBALS['strAgencies']                   = "Konto";
$GLOBALS['strAddAgency']                   = "Tilføj ny konto";
$GLOBALS['strAddAgency_Key']               = "Tilføj <u>n</u>y zone";
$GLOBALS['strTotalAgencies']               = "Total antal kontoer";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "Der er i øjeblikket ikke defineret nogle zoner";
$GLOBALS['strConfirmDeleteAgency']           = "Vil du virkelig slette denne zone?";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive accounts";
$GLOBALS['strInactiveAgenciesHidden']     = "inaktive zone(r) er skjult";
$GLOBALS['strAllowAgencyEditConversions'] = "Tillad denne bruger at redigere conversions";
$GLOBALS['strAllowMoreReports']           = "Tillad 'Flere rapporter' knap";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "Targeting Channels";
$GLOBALS['strChannelOverview']            = "Oversigt over Targeting Channel";
$GLOBALS['strChannelManagement']          = "Administration af Targeting Channels";
$GLOBALS['strAddNewChannel']              = "Tilføj ny targeting channel";
$GLOBALS['strAddNewChannel_Key']          = "Tilføj <u>n</u>y targeting channel";
$GLOBALS['strChannelToWebsite']           = "til website";
$GLOBALS['strNoChannels']                 = "Der er ikke valgt nogen targeting channels";
$GLOBALS['strNoChannelsAddWebsite']       = "Der er ikke valgt noget website. For at oprette en zone, skal du <a href='affiliate-edit.php'>tilføje et nyt website</a> først.";

$GLOBALS['strEditChannelLimitations']     = "Rediger targeting channel begrænsninger";
$GLOBALS['strChannelProperties']          = "Targeting Channel indstillinger";
$GLOBALS['strChannelLimitations']         = "Leverings optioner";
$GLOBALS['strConfirmDeleteChannel']       = "Vil du virkelig slette denne targeting channel?";
$GLOBALS['strConfirmDeleteChannels']      = "Vil du virkelig slette denne targeting channel?";
$GLOBALS['strModifychannel']              = "Tilføj ny targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'i'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Variable Navn";
$GLOBALS['strVariableDescription']     = "Beskrivelse";
$GLOBALS['strVariableDataType']         = "Data Type";
$GLOBALS['strVariablePurpose']       = "Formål";
$GLOBALS['strGeneric']               = "Generisk";
$GLOBALS['strBasketValue']           = "Værdi af kurv";
$GLOBALS['strNumItems']              = "Antal poster";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Nummer";
$GLOBALS['strString']                 = "Streng";
$GLOBALS['strTrackFollowingVars']     = "Spor de følgende variabler";
$GLOBALS['strAddVariable']             = "Tilføj variabel";
$GLOBALS['strNoVarsToTrack']         = "Der er ingen variabler at spore.";
$GLOBALS['strVariableHidden']       = "Hide variable to websites?";
$GLOBALS['strVariableRejectEmpty']  = "Afvise hvis tom?";
$GLOBALS['strTrackingSettings']     = "Sporer opsætninger";
$GLOBALS['strTrackerType']          = "Sporer type";
$GLOBALS['strTrackerTypeJS']        = "Spor JavaScript variabler";
$GLOBALS['strTrackerTypeDefault']   = "Spor JavaScript variabler (bagud kompertibel, escape er nødvendig)";
$GLOBALS['strTrackerTypeDOM']       = "Spor HTML elementer ved brug af DOM";
$GLOBALS['strTrackerTypeCustom']    = "Tilpasset JS kode";
$GLOBALS['strVariableCode']         = "Javascript sporer kode";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Annoncører & Kampagne";
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
$GLOBALS['strForgotPassword']         = "Glemt dit password?";
$GLOBALS['strPasswordRecovery']       = "Password genskabes";
$GLOBALS['strEmailRequired']          = "Email er et krævet felt";
$GLOBALS['strPwdRecEmailSent']        = "Generhvervelses email er sendt";
$GLOBALS['strPwdRecEmailNotFound']    = "Email adresse er ikke fundet";
$GLOBALS['strPwdRecPasswordSaved']    = "Det nye password var gemt, fortsæt til <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "Forkert ID";
$GLOBALS['strPwdRecEnterEmail']       = "Skriv din email adresse nedefor";
$GLOBALS['strPwdRecEnterPassword']    = "Skriv dit nye password nedenfor";
$GLOBALS['strPwdRecReset']            = "Password nulstillet";
$GLOBALS['strPwdRecResetLink']        = "Password reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Nulstil password for denne bruger";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s password genskabes";
$GLOBALS['strProceed']                = "Fortsæt >";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binær date";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by the system administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "Konto";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "Event";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No user activity has been recorded during the timeframe you have selected.";
$GLOBALS['strAuditTrail']             = "Handlings Log";
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
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>Der er ikke nogle kampagne aktiviteret at vise. </li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "No campaigns have started or finished during the timeframe you have selected";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>In order to view campaigns which have started or finished during the timeframe you have selected, the Audit Trail must be activated</li>
        <li>You are seeing this message because you didn't activate the Audit Trail</li>
";
$GLOBALS['strCampaignAuditTrailSetup']   = "Activate Audit Trail to start viewing Campaigns";

$GLOBALS['strUnsavedChanges']       = "You have unsaved changes on this page, make sure you press &quot;Save Changes&quot; when finished";
$GLOBALS['strDeliveryLimitationsDisagree'] = "WARNING: The delivery engine limitations <strong>DO NOT AGREE</strong> with the limitations shown below<br />Please hit save changes to update the delivery engine's rules";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Some of delivery limitations reports incorrect values:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "Du arbejder nu som <b>%s</b>";
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
