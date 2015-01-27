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
$GLOBALS['phpAds_TextAlignRight']       = "rechts";
$GLOBALS['phpAds_TextAlignLeft']        = "links";
$GLOBALS['phpAds_CharSet']              = "UTF-8";

$GLOBALS['phpAds_DecimalPoint']         = ",";
$GLOBALS['phpAds_ThousandsSeperator']   = ".";

// Date & time configuration
$GLOBALS['date_format']                 = "%d-%m-%Y";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m-%Y";
$GLOBALS['day_format']                  = "%m-%d";
$GLOBALS['week_format']                 = "%W-%Y";
$GLOBALS['weekiso_format']              = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Hoofdpagina";
$GLOBALS['strHelp']                     = "Help";
$GLOBALS['strContactUs']                = "Neem contact met ons op";
$GLOBALS['strStartOver']                = "Opnieuw beginnen";
$GLOBALS['strNavigation']               = "Navigatie";
$GLOBALS['strShortcuts']                = "Snelkoppelingen";
$GLOBALS['strActions']                  = "Actie";
$GLOBALS['strMore']                     = "Meer";
$GLOBALS['strAndXMore']                 = "en %s meer";
$GLOBALS['strLess']                     = "Minder";
$GLOBALS['strAdminstration']            = "Inventaris";
$GLOBALS['strMaintenance']              = "Onderhoud";
$GLOBALS['strProbability']              = "Waarschijnlijkheid";
$GLOBALS['strInvocationcode']           = "Invocatiecode";
$GLOBALS['strTrackerVariables']         = "Tracker-variabelen";
$GLOBALS['strBasicInformation']         = "Standaard informatie";
$GLOBALS['strAdditionalInformation']    = "Extra informatie";
$GLOBALS['strContractInformation']      = "Contract informatie";
$GLOBALS['strLoginInformation']         = "Aanmeldingsgegevens";
$GLOBALS['strLogoutURL']                = "URL om te worden afgemeld. <br />Laat leeg voor standaard";
$GLOBALS['strAppendTrackerCode']        = "Append tracker-code";
$GLOBALS['strOverview']                 = "Overzicht";
$GLOBALS['strSearch']                   = "<u>Z</u>oeken";
$GLOBALS['strHistory']                  = "Geschiedenis";
$GLOBALS['strDetails']                  = "Details";
$GLOBALS['strUpdateSettings']           = "Update-instellingen";
$GLOBALS['strCheckForUpdates']          = "Controleer voor updates";
$GLOBALS['strWhenCheckingForUpdates']   = "Bij het controleren op updates";
$GLOBALS['strCompact']                  = "Compact";
$GLOBALS['strVerbose']                  = "Uitgebreid";
$GLOBALS['strUser']                     = "Gebruiker";
$GLOBALS['strEdit']                     = "Wijzig";
$GLOBALS['strCreate']                   = "Creëer";
$GLOBALS['strDuplicate']                = "Dubbel";
$GLOBALS['strCopyOf']                   = "Kopie van";
$GLOBALS['strMoveTo']                   = "Verplaatst naar";
$GLOBALS['strDelete']                   = "Verwijder";
$GLOBALS['strActivate']                 = "Activeer";
$GLOBALS['strDeActivate']               = "Deactiveer";
$GLOBALS['strConvert']                  = "Converteer";
$GLOBALS['strRefresh']                  = "Vernieuwen";
$GLOBALS['strSaveChanges']              = "Bewaar veranderingen";
$GLOBALS['strUp']                       = "Omhoog";
$GLOBALS['strDown']                     = "Omlaag";
$GLOBALS['strSave']                     = "Bewaren";
$GLOBALS['strCancel']                   = "Annuleer";
$GLOBALS['strBack']                     = "Terug";
$GLOBALS['strPrevious']                 = "Vorige";
$GLOBALS['strPrevious_Key']             = "Vo<u>r</u>ige";
$GLOBALS['strNext']                     = "Volgende";
$GLOBALS['strNext_Key']                 = "Vol<u>g</u>ende";
$GLOBALS['strYes']                      = "Ja";
$GLOBALS['strNo']                       = "Nee";
$GLOBALS['strNone']                     = "Geen";
$GLOBALS['strCustom']                   = "Anders";
$GLOBALS['strDefault']                  = "Standaard";
$GLOBALS['strOther']                    = "Andere";
$GLOBALS['strUnknown']                  = "Onbekend";
$GLOBALS['strUnlimited']                = "Onbegrensd";
$GLOBALS['strUntitled']                 = "Naamloos";
$GLOBALS['strAll']                      = "alle";
$GLOBALS['strAvg']                      = "Gem.";
$GLOBALS['strAverage']                  = "Gemiddelde";
$GLOBALS['strAveraged']                 = "Gemiddeld";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Algemeen";
$GLOBALS['strTotal']                    = "Totaal";
$GLOBALS['strUnfilteredTotal']          = "Totaal (ongefilterd)";
$GLOBALS['strFilteredTotal']            = "Totaal (gefilterd)";
$GLOBALS['strActive']                   = "actief";
$GLOBALS['strFrom']                     = "Van";
$GLOBALS['strTo']                       = "tot";
$GLOBALS['strAdd']                      = "Toevoegen";
$GLOBALS['strLinkedTo']                 = "gelinkt naar";
$GLOBALS['strDaysLeft']                 = "Dagen te gaan";
$GLOBALS['strCheckAllNone']             = "Selecteer alle / geen";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "Alles <u>u</u>itklappen";
$GLOBALS['strCollapseAll']              = "Alles <u>i</u>nklappen";
$GLOBALS['strShowAll']                  = "Toon alles";
$GLOBALS['strNoAdminInterface']         = "Deze dienst is momenteel niet beschikbaar...";
$GLOBALS['strFilterBySource']           = "filter op bron";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'Vanaf' datum moet eerder zijn dan 'Tot' datum";
$GLOBALS['strFieldContainsErrors']      = "De volgende velden bevatten fouten:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Voordat u verder kunt gaan dient u";
$GLOBALS['strFieldFixBeforeContinue2']  = "deze fouten te corrigeren.";
$GLOBALS['strDelimiter']                = "Scheidingsteken";
$GLOBALS['strMiscellaneous']            = "Diversen";
$GLOBALS['strCollectedAllStats']        = "Alle statistieken";
$GLOBALS['strCollectedToday']           = "Vandaag";
$GLOBALS['strCollectedYesterday']       = "Gisteren";
$GLOBALS['strCollectedThisWeek']        = "Deze week";
$GLOBALS['strCollectedLastWeek']        = "Afgelopen week";
$GLOBALS['strCollectedThisMonth']       = "Deze maand";
$GLOBALS['strCollectedLastMonth']       = "Afgelopen maand";
$GLOBALS['strCollectedLast7Days']       = "Afgelopen 7 dagen";
$GLOBALS['strCollectedSpecificDates']   = "specifieke data";
$GLOBALS['strDifference']               = "Verschil (%)";
$GLOBALS['strPercentageOfTotal']        = "% Totaal";
$GLOBALS['strValue']                    = "Waarde";
$GLOBALS['strAdmin']                    = "admin";
$GLOBALS['strWarning']                  = "Waarschuwing";
$GLOBALS['strNotice']                   = "Notitie";
$GLOBALS['strRequiredField']            = "Verplicht veld";
$GLOBALS['strCloseWindow']              = "Venster sluiten";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "Het dashboard kan niet worden weergegeven";
$GLOBALS['strNoCheckForUpdates']        = "The dashboard cannot be displayed unless the<br />check for updates setting is enabled.";
$GLOBALS['strEnableCheckForUpdates']    = "Please enable the <a href='account-settings-update.php' target='_top'>check for updates</a> setting on the<br/><a href='account-settings-update.php' target='_top'>update settings</a> page.";
$GLOBALS['strChoosenDisableHomePage']   = "U hebt gekozen om uw beginpagina uit te schakelen.";
$GLOBALS['strAccessHomePage']           = "Klik hier voor toegang tot uw beginpagina";
$GLOBALS['strEditSyncSettings']         = "and edit your synchronization settings";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "code";
$GLOBALS['strDashboardSystemMessage']   = "Systeem bericht";
$GLOBALS['strDashboardErrorHelp']       = "Als deze fout vaker voorkomt, beschrijf dan alstublieft uw probleem in detail en plaats het op <a href='http://forum.revive-adserver.com/'> forum.revive-adserver.com/</a>.";

// Priority
$GLOBALS['strPriority']                 = "Prioriteit";
$GLOBALS['strPriorityLevel']            = "Prioriteitslevel ";
$GLOBALS['strPriorityTargeting']        = "Distributie ";
$GLOBALS['strPriorityOptimisation']     = "Diversen"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Limitaties ";
$GLOBALS['strNoLimitations']            = "Geen beperkingen";
$GLOBALS['strCapping']                  = "Plafonnering ";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Naam";
$GLOBALS['strSize']                     = "Afmetingen";
$GLOBALS['strWidth']                    = "Breedte";
$GLOBALS['strHeight']                   = "Hoogte";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Target";
$GLOBALS['strLanguage']                 = "Taal";
$GLOBALS['strDescription']              = "Beschrijving";
$GLOBALS['strVariables']                = "Variabele";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Reacties";

// User access
$GLOBALS['strWorkingAs']                = "Aan het werken als";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Aan het werken als";
$GLOBALS['strSwitchTo']                 = "Ga naar";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s for...";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recent gebruikte";
$GLOBALS['strLinkUser']                 = "Voeg gebruiker toe";
$GLOBALS['strLinkUser_Key']             = "Voeg <u>G</u>ebruiker toe";
$GLOBALS['strUsernameToLink']           = "gebruikersnaam van toegevoegde gebruiker";
$GLOBALS['strEmailToLink']              = "e-mail van toegevoegde gebruiker";
$GLOBALS['strNewUserWillBeCreated']     = "Nieuwe gebruiker wordt aangemaakt";
$GLOBALS['strToLinkProvideEmail']       = "To add user, provide user's email";
$GLOBALS['strToLinkProvideUsername']    = "To add user, provide username";
$GLOBALS['strErrorWhileCreatingUser']   = "Error tijdens creatie gebruiker: %s";
$GLOBALS['strUserLinkedToAccount']      = "Gebruiker is toegevoegd aan account";
$GLOBALS['strUserAccountUpdated']       = "Gebruikersaccount geupdate";
$GLOBALS['strUserUnlinkedFromAccount']  = "Gebruiker is verwijder van het account";
$GLOBALS['strUserWasDeleted']           = "Gebruiker is verwijderd";
$GLOBALS['strUserNotLinkedWithAccount'] = "Such user is not linked with account";
$GLOBALS['strCantDeleteOneAdminUser']   = "U kunt een gebruiker niet verwijderen. Ten minste één gebruiker moet verbonden zijn met het system administrator account.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "gebruikersnaam";
$GLOBALS['strLinkUserHelpEmail']        = "E-mail adres";
$GLOBALS['strLastLoggedIn']             = "Laatst aangemeld";
$GLOBALS['strDateLinked']               = "Datum gekoppeld";
$GLOBALS['strUnlink']                   = "Verwijder";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removing user from last entity";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Removing user from last entity will cause the user to be deleted. Would you like to remove this user?";
$GLOBALS['strUnlinkAndDelete']          = "Verwijder en verwijder gebruiker";
$GLOBALS['strUnlinkUser']               = "Verwijder gebruiker";
$GLOBALS['strUnlinkUserConfirmBody']    = "Weet u zeker dat u deze gebruiker wilt verwijderen?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Gebruikerstoegang";
$GLOBALS['strAdminAccess']              = "Admin Access";
$GLOBALS['strUserProperties']           = "Gebruiker eigenschappen";
$GLOBALS['strLinkNewUser']              = "Link nieuwe gebruiker";
$GLOBALS['strPermissions']              = "Permissies ";
$GLOBALS['strAuthentification']         = "Authenticatie";
$GLOBALS['strWelcomeTo']                = "Welkom bij";
$GLOBALS['strEnterUsername']            = "Vul uw gebruikersnaam en wachtwoord in om uw te kunnen aanmelden";
$GLOBALS['strEnterBoth']                = "Vul zowel uw gebruikersnaam als  uw wachtwoord in";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Cookie error voor deze sessie, gelieve nogmaals in te loggen";
$GLOBALS['strLogin']                    = "Aanmelden";
$GLOBALS['strLogout']                   = "Afmelden";
$GLOBALS['strUsername']                 = "Gebruikersnaam";
$GLOBALS['strPassword']                 = "Wachtwoord";
$GLOBALS['strPasswordRepeat']           = "Herhaal het wachtwoord";
$GLOBALS['strAccessDenied']             = "Toegang geweigerd";
$GLOBALS['strUsernameOrPasswordWrong']  = "De gebruikersnaam en/of wachtwoord zijn niet juist. Gelieve opnieuw te proberen";
$GLOBALS['strPasswordWrong']            = "Het wachtwoord is niet correct";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "U heeft waarschijnlijk niet genoeg privileges";
$GLOBALS['strDuplicateClientName']      = "De gebruikersnaam die u wenst is al reeds in gebruik, gelieve een andere gebruikersnaam te gebruiken";
$GLOBALS['strDuplicateAgencyName']      = "De gebruikersnaam die u wenst is al reeds in gebruik, gelieve een andere gebruikersnaam te gebruiken";
$GLOBALS['strInvalidPassword']          = "Het nieuwe wachtwoord is niet geldig, voer een ander wachtwoord in.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "De twee wachtwoorden die u ingevoerd heeft zijn niet hetzelfde";
$GLOBALS['strRepeatPassword']           = "Herhaal het wachtwoord";
$GLOBALS['strOldPassword']              = "Oud wachtwoord";
$GLOBALS['strNewPassword']              = "Nieuw wachtwoord";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Deze link is ongeldig";
$GLOBALS['strNoPlacement']              = "Geselecteerde campagne bestaat niet. probeer deze <a href='{link}'>link</a> eens";
$GLOBALS['strNoAdvertiser']             = "Geselecteerde adverteerder bestaat niet. Probeer deze <a href='{link}'>link</a> eens";

// General advertising
$GLOBALS['strRequests']                 = "Aanvragen";
$GLOBALS['strImpressions']              = "AdViews";
$GLOBALS['strClicks']                   = "AdClicks";
$GLOBALS['strConversions']              = "Conversies ";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Verkoop ratio";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Totaal AdViews";
$GLOBALS['strTotalClicks']              = "Totaal AdClicks";
$GLOBALS['strTotalConversions']         = "Totaal conversies";
$GLOBALS['strViewCredits']              = "Adview krediet";
$GLOBALS['strClickCredits']             = "Adclick krediet";
$GLOBALS['strConversionCredits']        = "Conversies krediet";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Datum tijd";
$GLOBALS['strTrackerID']                = "Tracker-ID";
$GLOBALS['strTrackerName']              = "Tracker naam";
$GLOBALS['strTrackerImageTag']          = "Afbeelding tag";
$GLOBALS['strTrackerJsTag']             = "Javascript tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Banners";
$GLOBALS['strCampaigns']                = "Campagnes";
$GLOBALS['strCampaignID']               = "Campagne-ID";
$GLOBALS['strCampaignName']             = "Campagne naam";
$GLOBALS['strCountry']                  = "Land";
$GLOBALS['strStatsAction']              = "Actie";
$GLOBALS['strWindowDelay']              = "Scherm vertraging";
$GLOBALS['strStatsVariables']           = "Variabele";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Maandelijkse opstal";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Datum";
$GLOBALS['strToday']                    = "Vandaag";
$GLOBALS['strDay']                      = "Dagen";
$GLOBALS['strDays']                     = "Dagen";
$GLOBALS['strLast7Days']                = "Laatste 7 dagen";
$GLOBALS['strWeek']                     = "Weken";
$GLOBALS['strWeeks']                    = "Weken";
$GLOBALS['strSingleMonth']              = "Maand";
$GLOBALS['strMonths']                   = "Maanden";
$GLOBALS['strDayOfWeek']                = "Dag van de week";
$GLOBALS['strThisMonth']                = "Deze maand";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Uur";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "seconden";
$GLOBALS['strMinutes']                  = "minuten";
$GLOBALS['strHours']                    = "uren";
$GLOBALS['strTimes']                    = "keer";

// Advertiser
$GLOBALS['strClient']                       = "Adverteerder";
$GLOBALS['strClients']                      = "Adverteerders";
$GLOBALS['strClientsAndCampaigns']          = "Adverteerders & Campagnes";
$GLOBALS['strAddClient']                    = "Voeg een adverteerder toe";
$GLOBALS['strAddClient_Key']                = "<u>V</u>oeg een adverteerder toe";
$GLOBALS['strTotalClients']                 = "Totaal aantal adverteerders";
$GLOBALS['strClientProperties']             = "Adverteerder eigenschappen";
$GLOBALS['strClientHistory']                = "Adverteerder geschiedenis";
$GLOBALS['strNoClients']                    = "Er zijn momenteel geen adverteerders beschikbaar. Om een campagne aan te maken, <a href='advertiser-edit.php'>voeg eerst een nieuwe adverteerder toe</a>.";
$GLOBALS['strNoClientsForBanners']          = "Er zijn momenteel geen adverteerders beschikbaar. Om een campagne aan te maken, <a href='advertiser-edit.php'>voeg eerst een nieuwe adverteerder toe</a>.";
$GLOBALS['strConfirmDeleteClient']          = "Weet u zeker dat u deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmDeleteClients']         = "Weet u zeker dat u deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmResetClientStats']      = "Weet u zeker dat u de statistieken wilt wissen voor deze adverteerder?";
$GLOBALS['strSite']                         = "Afmetingen";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "Verberg niet-actieve adverteerders";
$GLOBALS['strInactiveAdvertisersHidden']    = "niet-actieve adverteerder(s) verborgen";
$GLOBALS['strOverallAdvertisers']           = "Adverteerder(s)";
$GLOBALS['strAdvertiserSignup']             = "Adverteerder aanmelden";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Adverteerder aanmelden";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Adverteerder aanmelden";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Adverteerders & Campagnes";
// Advertisers properties
$GLOBALS['strContact']                          = "Contactpersoon";
$GLOBALS['strContactName']                      = "Contactnaam";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "tekens";
$GLOBALS['strSendAdvertisingReport']            = "Stuur een advertentie rapport per e-mail";
$GLOBALS['strNoDaysBetweenReports']             = "Aantal dagen tussen rapporten";
$GLOBALS['strSendDeactivationWarning']          = "Stuur een waarschuwing wanneer de campagne gedeactiveerd wordt";
$GLOBALS['strAllowClientModifyInfo']            = "Deze gebruiker kan zijn eigen instellingen wijzigen";
$GLOBALS['strAllowClientModifyBanner']          = "Deze gebruiker kan zijn eigen banners wijzigen";
$GLOBALS['strAllowClientAddBanner']             = "Deze gebruiker kan zijn eigen banners toevoegen";
$GLOBALS['strAllowClientDisableBanner']         = "Deze gebruiker kan zijn eigen banners deactiveren";
$GLOBALS['strAllowClientActivateBanner']        = "Deze gebruiker kan zijn eigen banners activeren";
$GLOBALS['strAllowClientViewTargetingStats']    = "Laat deze gebruiker de gerichte statistieken bekijken";
$GLOBALS['strAllowCreateAccounts']              = "Laat deze gebruiker toe nieuwe accounts aan te maken";
$GLOBALS['strCsvImportConversions']             = "Deze gebruiker kan offline conversies importeren";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Campagne";
$GLOBALS['strCampaigns']                    = "Campagnes";
$GLOBALS['strOverallCampaigns']             = "campagne(s)";
$GLOBALS['strTotalCampaigns']               = "Totaal aantal campagnes";
$GLOBALS['strActiveCampaigns']              = "Actieve campagnes";
$GLOBALS['strAddCampaign']                  = "Voeg een campagne toe";
$GLOBALS['strAddCampaign_Key']              = "<u>V</u>oeg een campagne toe";
$GLOBALS['strCampaignForAdvertiser']        = "voor adverteerder";
$GLOBALS['strCreateNewCampaign']            = "Maak nieuwe campagne";
$GLOBALS['strModifyCampaign']               = "Wijzig campagne";
$GLOBALS['strMoveToNewCampaign']            = "Verplaats naar een nieuwe campagne";
$GLOBALS['strBannersWithoutCampaign']       = "Banners zonder campagne";
$GLOBALS['strDeleteAllCampaigns']           = "Verwijder alle campagnes";
$GLOBALS['strLinkedCampaigns']              = "Gelinkte campagnes";
$GLOBALS['strCampaignStats']                = "Campagne statistieken";
$GLOBALS['strCampaignProperties']           = "Campagne eigenschappen";
$GLOBALS['strCampaignOverview']             = "Campagne overzicht";
$GLOBALS['strCampaignHistory']              = "Campagne geschiedenis";
$GLOBALS['strNoCampaigns']                  = "Er zijn momenteel geen campagnes gedefinieerd";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Weet je zeker dat je alle campagnes van deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmDeleteCampaign']        = "Weet u zeker dat u deze campagne wilt verwijderen?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Weet u zeker dat u deze campagne wilt verwijderen?";
$GLOBALS['strConfirmResetCampaignStats']    = "Weet u zeker dat u de statistieken wilt wissen voor deze campagne?";
$GLOBALS['strShowParentAdvertisers']        = "Laat huidige adverteerders zien";
$GLOBALS['strHideParentAdvertisers']        = "Verberg huidige adverteerders";
$GLOBALS['strHideInactiveCampaigns']        = "Verberg niet-actieve campagnes";
$GLOBALS['strInactiveCampaignsHidden']      = "niet-actieve campagne(s) verborgen";
$GLOBALS['strContractDetails']              = "Contract details";
$GLOBALS['strInventoryDetails']             = "Inventaris details";
$GLOBALS['strPriorityInformation']          = "Prioriteit in relatie met andere campagnes";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Campagne";
$GLOBALS['strHiddenAd']                     = "advertentie";
$GLOBALS['strHiddenAdvertiser']             = "Adverteerder";
$GLOBALS['strHiddenTracker']                = "Banner";
$GLOBALS['strHiddenWebsite']              = "Website";
$GLOBALS['strHiddenZone']                   = "Zone";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Companion positioning";
$GLOBALS['strSelectUnselectAll']            = "Selecteer/deselecteer alles";
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
$GLOBALS['strZonesSearch']                  = "Zoeken";
$GLOBALS['strZonesSearchTitle']             = "Search zones and websites by name";
$GLOBALS['strNoWebsitesAndZones']           = "Geen websites en zones";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "in category";
$GLOBALS['strNoWebsitesAndZonesText']       = "with \"%s\" in name";
$GLOBALS['strToLink']                       = "to link";
$GLOBALS['strToUnlink']                     = "to unlink";
$GLOBALS['strLinked']                       = "Linked";
$GLOBALS['strAvailable']                    = "Beschikbaar";
$GLOBALS['strShowing']                      = "Showing";
$GLOBALS['strAllCategories']                = "all categories";
$GLOBALS['strUncategorized']                = "Uncategorized";
$GLOBALS['strEditZone']                     = "Edit zone";
$GLOBALS['strEditWebsite']                  = "Edit website";


// Campaign properties
$GLOBALS['strDontExpire']                       = "Deze campagne niet laten vervallen op een specifieke datum";
$GLOBALS['strActivateNow']                      = "Deze campagne direct activeren";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Laag";
$GLOBALS['strHigh']                             = "Hoog";
$GLOBALS['strExpirationDate']                   = "Vervaldatum";
$GLOBALS['strExpirationDateComment']            = "Campagne zal eindigen op het einde van deze dag";
$GLOBALS['strActivationDate']                   = "Activeringsdatum";
$GLOBALS['strActivationDateComment']            = "Campagne zal beginnen aan het begin van deze dag";
$GLOBALS['strRevenueInfo']                      = "Inkomsten informatie";
$GLOBALS['strTotalRevenue']                     = "Totale opbrengst";
$GLOBALS['strImpressionsRemaining']             = "Resterende impressies ";
$GLOBALS['strClicksRemaining']                  = "Resterende kliks";
$GLOBALS['strConversionsRemaining']             = "Resterende conversies";
$GLOBALS['strImpressionsBooked']                = "Geboekte impressies";
$GLOBALS['strClicksBooked']                     = "Geboekte kliks";
$GLOBALS['strConversionsBooked']                = "geboekte conversies";
$GLOBALS['strCampaignWeight']                   = "Campagne gewicht";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimaliseer ";
$GLOBALS['strAnonymous']                        = "Verberg de adverteerder en websites van deze campagne";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Toon de banners in deze campagne met lage prioriteit.<br />Deze campagne wordt gebruikt om de overgebleven AdViews te tonen, welke niet gebruikt worden door hoge prioriteit campagnes.";
$GLOBALS['strTargetPerDay']                     = "per dag.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Gekochte AdViews en vervaldatum zijn ingesteld.\\n De limiet wordt elke dag bijgesteld.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "De prioriteit van deze campagne is laag, \\nterwijl het gewicht op nul is gezet of niet \\ngespecificeerd is. Dit zal er voor zorgen dat de campagne \\ngedeactiveerd wordt en de banners zullen niet getoond \\nworden totdat het gewicht aangepast is. \\n\\nWeet u zeker dat u door wilt gaan?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "De prioriteit van deze campagne is hoog, \\nmaar u heeft het aantal AdViews niet gelimiteerd tot een. \\nbepaald aantal. Dit zal er voor zorgen dat de campagne \\n gedeactiveerd wordt en de banner zullen niet getoond \\nworden totdat u het aantal AdViews gelimiteerd heeft \\n\\nWeet u zeker dat u door wilt gaan?";
$GLOBALS['strCampaignStatusPending']            = "Pending";
$GLOBALS['strCampaignStatusInactive']           = "actief";
$GLOBALS['strCampaignStatusRunning']            = "Lopend";
$GLOBALS['strCampaignStatusPaused']             = "Gepauzeerd";
$GLOBALS['strCampaignStatusAwaiting']           = "Wachtend";
$GLOBALS['strCampaignStatusExpired']            = "Voltooid";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Herstart ";
$GLOBALS['strCampaignStatusDeleted']            = "Verwijder";
$GLOBALS['strCampaignApprove']                  = "Goedkeuren";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "Pauze ";
$GLOBALS['strCampaignPauseDescription']         = "pause this campaign temporarily";
$GLOBALS['strCampaignRestart']                  = "Resume";
$GLOBALS['strCampaignRestartDescription']       = "resume this campaign";
$GLOBALS['strCampaignStatus']                   = "Campagnestatus";
$GLOBALS['strReasonForRejection']               = "Reden voor afwijzing";
$GLOBALS['strReasonSiteNotLive']                = "Site not live";
$GLOBALS['strReasonBadCreative']                = "Inappropriate creative";
$GLOBALS['strReasonBadUrl']                     = "Inappropriate destination url";
$GLOBALS['strReasonBreakTerms']                 = "Website againts terms and conditions";
$GLOBALS['strChangeStatus']                     = "Change status";
$GLOBALS['strCampaignType']                     = "Campagne naam";
$GLOBALS['strType']                             = "Type";
$GLOBALS['strContract']                         = "Contactpersoon";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Contactpersoon";
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
$GLOBALS['strTracker']                    = "Banner";
$GLOBALS['strTrackers']                   = "Banner";
$GLOBALS['strTrackerOverview']            = "Banner overzicht";
$GLOBALS['strTrackerPreferences']            = "Banner voorkeuren";
$GLOBALS['strAddTracker']                 = "Voeg nieuwe banner toe";
$GLOBALS['strAddTracker_Key']             = "<u>V</u>oeg een banner toe";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Weet je zeker dat je alle campagnes van deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmDeleteTrackers']      = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteTracker']       = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strDeleteAllTrackers']          = "Verwijder alle banners";
$GLOBALS['strTrackerProperties']          = "Banner eigenschappen";
$GLOBALS['strTrackerOverview']            = "Banner overzicht";
$GLOBALS['strModifyTracker']              = "Modify tracker";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "Default Status";
$GLOBALS['strStatus']                     = "Status";
$GLOBALS['strLinkedTrackers']             = "Linked Trackers";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Conversion window";
$GLOBALS['strUniqueWindow']               = "Uniek scherm";
$GLOBALS['strClick']                      = "AdClicks";
$GLOBALS['strView']                       = "Bekijk";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "AdViews";
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
$GLOBALS['strBanner']                        = "Banner";
$GLOBALS['strBanners']                       = "Banners";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Voeg een banner toe";
$GLOBALS['strAddBanner_Key']                 = "<u>V</u>oeg een banner toe";
$GLOBALS['strBannerToCampaign']              = "Uw campagne";
$GLOBALS['strModifyBanner']                  = "Wijzig banner";
$GLOBALS['strActiveBanners']                 = "Actieve banners";
$GLOBALS['strTotalBanners']                  = "Totaal banners";
$GLOBALS['strShowBanner']                    = "Toon banner";
$GLOBALS['strShowAllBanners']                = "Toon alle banners";
$GLOBALS['strShowBannersNoAdViews']          = "Toon banners zonder AdViews";
$GLOBALS['strShowBannersNoAdClicks']         = "Toon banners zonder AdClicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Verwijder alle banners";
$GLOBALS['strActivateAllBanners']            = "Activeer alle banners";
$GLOBALS['strDeactivateAllBanners']          = "Deactiveer alle banners";
$GLOBALS['strBannerOverview']                = "Banner overzicht";
$GLOBALS['strBannerProperties']              = "Banner eigenschappen";
$GLOBALS['strBannerHistory']                 = "Banner geschiedenis";
$GLOBALS['strBannerNoStats']                 = "Geen statistieken voor deze banner!";
$GLOBALS['strNoBanners']                     = "Er zijn momenteel geen banner gedefinieerd";
$GLOBALS['strNoBannersAddCampaign']          = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strNoBannersAddAdvertiser']        = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strConfirmDeleteBanner']           = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteBanners']          = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Weet u zeker dat u alle banners die bij deze campagne horen wilt vewijderen?";
$GLOBALS['strConfirmResetBannerStats']       = "Weet u zeker dat u de statistieken wilt wissen voor deze banner?";
$GLOBALS['strShowParentCampaigns']           = "Toon bovenliggende campagnes";
$GLOBALS['strHideParentCampaigns']           = "Verberg bovenliggende campagnes";
$GLOBALS['strHideInactiveBanners']           = "Verberg niet-actieve banners";
$GLOBALS['strInactiveBannersHidden']         = "niet-actieve banner(s) verborgen";
$GLOBALS['strAppendOthers']                  = "Voeg andere toe";
$GLOBALS['strAppendTextAdNotPossible']       = "Het is niet mogelijk om andere banners toe te voegen aan tekst advertenties.";
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
$GLOBALS['strBannerPreferences']                     = "Banner voorkeuren";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Default Banners";
$GLOBALS['strDefaultBannerUrl']                      = "Default Image URL";
$GLOBALS['strDefaultBannerDestination']              = "Standaard bestemmings URL";
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
$GLOBALS['strChooseBanner']         = "Kies het banner type";
$GLOBALS['strMySQLBanner']             = "Lokale banner (SQL)";
$GLOBALS['strWebBanner']               = "Lokale banner (Webserver)";
$GLOBALS['strURLBanner']               = "Externe banner";
$GLOBALS['strHTMLBanner']              = "HTML banner";
$GLOBALS['strTextBanner']              = "Tekst advertentie";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Wilt u uw bestaande afbeelding <br />houden, of wilt u een <br />nieuwe afbeelding uploaden?";
$GLOBALS['strUploadOrKeepAlt']        = "Wilt u uw bestaande afbeelding <br />houden, of wilt u een <br />nieuwe afbeelding uploaden?";
$GLOBALS['strNewBannerFile']         = "Selecteer de afbeelding die u <br />wilt gebruiken voor deze banner<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Select a backup image you <br />want to use in case browsers<br />don't support rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "Afbeelding URL (incl. http://)";
$GLOBALS['strURL']                     = "Doel URL (incl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Sleutelwoorden";
$GLOBALS['strTextBelow']             = "Tekst onder banner";
$GLOBALS['strWeight']                 = "Gewicht";
$GLOBALS['strAlt']                     = "Alternative tekst";
$GLOBALS['strStatusText']            = "Status tekst";
$GLOBALS['strBannerWeight']            = "Banner gewicht";
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
$GLOBALS['strCheckSWF']                = "Controleer op vaste links in het Flash bestand";
$GLOBALS['strConvertSWFLinks']        = "Converteer Flash links";
$GLOBALS['strHardcodedLinks']        = "Vaste links";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Comprimeer SWF bestand voor versneld downloaden (Flash 6 speler verplicht)";
$GLOBALS['strOverwriteSource']        = "Overschrijft de bron parameter";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "Banner netwerk";
$GLOBALS['strChooseNetwork']        = "Kies het banner netwerk dat u wilt gebruiken";
$GLOBALS['strMoreInformation']        = "Meer informatie...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Volg AdClicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Maak AdSense account";
$GLOBALS['strEditAdSenseAccount']         = "Verander AdSense account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Leveringsopties";
$GLOBALS['strACL']                        = "Levering";
$GLOBALS['strACLAdd']                     = "Voeg nieuwe beperking toe";
$GLOBALS['strACLAdd_Key']                 = "<u>V</u>oeg nieuwe beperking toe";
$GLOBALS['strNoLimitations']              = "Geen beperkingen";
$GLOBALS['strApplyLimitationsTo']         = "Pas beperking toe op";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Verwijder alle beperkingen";
$GLOBALS['strEqualTo']                    = "is gelijk aan";
$GLOBALS['strDifferentFrom']              = "is verschillend van";
$GLOBALS['strLaterThan']                  = "is later dan";
$GLOBALS['strLaterThanOrEqual']           = "is later dan of gelijk aan";
$GLOBALS['strEarlierThan']                = "is vroeger dan";
$GLOBALS['strEarlierThanOrEqual']         = "is vroeger dan of gelijk aan";
$GLOBALS['strContains']                   = "bevat";
$GLOBALS['strNotContains']                = "bevat niet";
$GLOBALS['strGreaterThan']                = "is later dan";
$GLOBALS['strLessThan']                   = "is less than";
$GLOBALS['strAND']                        = "EN";                          // logical operator
$GLOBALS['strOR']                         = "OF";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Toon deze banner alleen wanneer:";
$GLOBALS['strWeekDay']                    = "Weekdag";
$GLOBALS['strWeekDays']                   = "Weekdagen";
$GLOBALS['strTime']                       = "Tijd";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domein";
$GLOBALS['strClientIP']                   = "IP adres";
$GLOBALS['strSource']                     = "Bron";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Naam van het land";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Stad";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Breedtegraad";
$GLOBALS['strLongitude']                  = "Lengtegraad";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet verbindingssnelheid";
$GLOBALS['strReferer']                    = "Verwijzende pagina";
$GLOBALS['strDeliveryLimitations']        = "Leveringsbeperkingen";

$GLOBALS['strDeliveryCapping']            = "Leveringsplafond";
$GLOBALS['strDeliveryCappingReset']       = "Reset vertoningentellers na:";
$GLOBALS['strDeliveryCappingTotal']       = "in totaal";
$GLOBALS['strDeliveryCappingSession']     = "per sessie";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Limiteer banner vertoningen tot";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Limiteer campagne vertoningen tot:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Limiteer zone vertoningen tot:";

// Website
$GLOBALS['strAffiliate']                = "Website";
$GLOBALS['strAffiliates']                 = "Uitgevers";
$GLOBALS['strAffiliatesAndZones']        = "Uitgevers & Zones";
$GLOBALS['strAddNewAffiliate']            = "Voeg een uitgever toe";
$GLOBALS['strAddNewAffiliate_Key']        = "<u>V</u>oeg een uitgever toe";
$GLOBALS['strAddAffiliate']                = "Maak uitgever";
$GLOBALS['strAffiliateProperties']        = "Uitgever eigenschappen";
$GLOBALS['strAffiliateOverview']        = "Uitgever overzicht";
$GLOBALS['strAffiliateHistory']            = "Uitgever geschiendenis";
$GLOBALS['strZonesWithoutAffiliate']    = "Zones zonder uitgever";
$GLOBALS['strMoveToNewAffiliate']        = "Verplaats naar een nieuwe uitgever";
$GLOBALS['strNoAffiliates']                = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strConfirmDeleteAffiliate']    = "Weet u zeker dat u deze uitgever wilt wissen?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Weet u zeker dat u deze uitgever wilt wissen?";
$GLOBALS['strMakePublisherPublic']        = "Maak de zones die eigendom zijn van de uitgever publiekelijk toegankelijk";
$GLOBALS['strAffiliateInvocation']      = "Invocatiecode";
$GLOBALS['strAdvertiserSetup']          = "Adverteerder aanmelden";
$GLOBALS['strTotalAffiliates']          = "Total aantal websites";
$GLOBALS['strInactiveAffiliatesHidden'] = "niet-actieve banner(s) verborgen";
$GLOBALS['strShowParentAffiliates']     = "Toon bovenliggende websites";
$GLOBALS['strHideParentAffiliates']     = "Verberg de bovenliggende websites";

// Website (properties)
$GLOBALS['strWebsite']                      = "Website";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Deze gebruiker kan zijn eigen instellingen wijzigen";
$GLOBALS['strAllowAffiliateModifyZones']    = "Deze gebruiker kan zijn eigen zones wijzigen";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Deze gebruiker kan banners koppelen aan zijn eigen zones";
$GLOBALS['strAllowAffiliateAddZone']        = "Deze gebruiker kan nieuwe zones definieeren";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Deze gebruiker kan bestaande zones verwijderen";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Allow this user to generate invocation code";
$GLOBALS['strAllowAffiliateZoneStats']      = "Laat deze gebruiker de gerichte statistieken bekijken";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Allow this user to only view approved or pending conversions";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Betalingsinformatie ";
$GLOBALS['strAddress']                      = "Adres";
$GLOBALS['strPostcode']                     = "Postcode";
$GLOBALS['strCity']                         = "Stad";
$GLOBALS['strCountry']                      = "Land";
$GLOBALS['strPhone']                        = "Telefoon";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Account contact";
$GLOBALS['strPayeeName']                    = "Naam betaler";
$GLOBALS['strTaxID']                        = "Tax ID";
$GLOBALS['strModeOfPayment']                = "Mode of payment";
$GLOBALS['strPaymentChequeByPost']          = "Cheque by post";
$GLOBALS['strCurrency']                     = "Valuta";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Andere informatie";
$GLOBALS['strUniqueUsersMonth']             = "unieke gebruikers/maand";
$GLOBALS['strUniqueViewsMonth']             = "Unieke bekijken/maand";
$GLOBALS['strPageRank']                     = "Page rank";
$GLOBALS['strCategory']                     = "Categorie";
$GLOBALS['strPrimaryCategory']              = "Primaire rubriek";
$GLOBALS['strSecondaryCategory']            = "Secundaire rubriek";
$GLOBALS['strHelpFile']                     = "Help bestanden";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Uitgevers & Zones";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strZones']                        = "Zones";
$GLOBALS['strAddNewZone']                   = "Voeg een zone toe";
$GLOBALS['strAddNewZone_Key']               = "<u>V</u>oeg een zone toe";
$GLOBALS['strAddZone']                      = "Maak zone";
$GLOBALS['strModifyZone']                   = "Wijzig zone";
$GLOBALS['strZoneToWebsite']                = "Alle websites";
$GLOBALS['strLinkedZones']                  = "Gekoppelde zones";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Zone overzicht";
$GLOBALS['strZoneProperties']               = "Zone eigenschappen";
$GLOBALS['strZoneHistory']                  = "Zone geschiendenis";
$GLOBALS['strNoZones']                      = "Er zijn momenteel geen zones gedefinieerd";
$GLOBALS['strNoZonesAddWebsite']            = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strConfirmDeleteZone']            = "Weet u zeker dat u deze zone wilt wissen?";
$GLOBALS['strConfirmDeleteZones']           = "Weet u zeker dat u deze zone wilt wissen?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Zone type";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Button of Rectangle";
$GLOBALS['strInterstitial']                 = "Interstitial of Floating DHTML";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "Tekst advertentie";
$GLOBALS['strEmailAdZone']                  = "Email/Newsletter zone";
$GLOBALS['strZoneClick']                    = "Click tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Toon geschikte banners";
$GLOBALS['strHideMatchingBanners']          = "Verberg geschikte banners";
$GLOBALS['strBannerLinkedAds']              = "Banners linked to the zone";
$GLOBALS['strCampaignLinkedAds']            = "Campaigns linked to the zone";
$GLOBALS['strTotalZones']                   = "Total zones";
$GLOBALS['strInactiveZonesHidden']          = "niet-actieve banner(s) verborgen";
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
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Knop 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Knop 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Halve Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Vierkante knop (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Rechthoekig (180 x 150) *";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Vierkante Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB verticale Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Medium rechthoekig (300 x 250) *";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Groot rechthoekig  (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Verticaal rechthoekig (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Wijde Skyscraper (160 x 600) *";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "Geavanceerd";
$GLOBALS['strChains']                    = "Kettingen";
$GLOBALS['strChainSettings']            = "Ketting instellingen";
$GLOBALS['strZoneNoDelivery']            = "Indien er geen banners van deze<br />zone geleverd kunnen worden, probeer...";
$GLOBALS['strZoneStopDelivery']            = "Stop levering en toon geen banner";
$GLOBALS['strZoneOtherZone']            = "Toon de geselecteerde zone";
$GLOBALS['strZoneUseKeywords']            = "Selecteer een banner met de volgende sleutelwoorden";
$GLOBALS['strZoneAppend']                = "Voeg altijd de volgende<br /> HTML code altijd toe<br /> aan deze zone";
$GLOBALS['strAppendSettings']            = "Invoeg instellingen";
$GLOBALS['strZoneForecasting']            = "Zone Forecasting settings";
$GLOBALS['strZonePrependHTML']            = "Voeg de volgende HTML code altijd toe voor de HTML code die getoond wordt door deze zone";
$GLOBALS['strZoneAppendHTML']            = "Voeg de volgende HTML code altijd toe na de HTML code die getoond wordt door deze zone";
$GLOBALS['strZoneAppendNoBanner']        = "Prepend/Append even if no banner delivered";
$GLOBALS['strZoneAppendType']            = "Toevoeg type";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML code";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup of interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Voeg altijd de volgende popup of intersitial toe aan banners die getoond worden door deze zone";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "De banners welke gekoppeld zijn aan deze zone zijn niet actief. <br />De volgende ketting wordt daarom gebruikt:";
$GLOBALS['strZoneProbNullPri']            = "De banners welke gekoppeld zijn aan deze zone zijn niet actief.";
$GLOBALS['strZoneProbListChainLoop']    = "De ketting welke gevolgd wordt is aan zichzelf gekoppeld. Het is niet mogelijk om deze zone te tonen";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Kies de manier van banners koppelen";
$GLOBALS['strLinkedBanners']            = "Link individual banners";
$GLOBALS['strCampaignDefaults']            = "Link banners by parent campaign";
$GLOBALS['strLinkedCategories']         = "Link banners by category";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactief";
$GLOBALS['strRawQueryString']            = "Sleutelwoorden";
$GLOBALS['strIncludedBanners']            = "Gekoppelde banners";
$GLOBALS['strLinkedBannersOverview']    = "Gekoppelde banner overzicht";
$GLOBALS['strLinkedBannerHistory']        = "Gekoppelde banner geschiedenis";
$GLOBALS['strNoZonesToLink']            = "Er zijn geen zones aanwezig waar deze banner aan gekoppeld kan worden";
$GLOBALS['strNoBannersToLink']            = "Er zijn momenteel geen banners beschikbaar welke gekoppeld kunnen worden aan deze zone";
$GLOBALS['strNoLinkedBanners']            = "Er zijn banners beschikbaar welke gekoppeld zijn aan deze zone";
$GLOBALS['strMatchingBanners']            = "{count} geschikte banners";
$GLOBALS['strNoCampaignsToLink']        = "Er zijn momenteel geen campagnes beschikbaar welke gekoppeld kunnen worden aan deze zone";
$GLOBALS['strNoTrackersToLink']            = "Er zijn momenteel geen campagnes beschikbaar welke gekoppeld kunnen worden aan deze zone";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Er zijn geen zones aanwezig waar deze campagne aan gekoppeld kan worden";
$GLOBALS['strSelectBannerToLink']        = "Selecteer de banner welke u wilt koppelen aan deze zone:";
$GLOBALS['strSelectCampaignToLink']        = "Selecteer de campagne welke u wilt koppelen aan deze zone:";
$GLOBALS['strSelectAdvertiser']         = "Select Advertiser";
$GLOBALS['strSelectPlacement']          = "Select Campaign";
$GLOBALS['strSelectAd']                 = "Select Banner";
$GLOBALS['strSelectPublisher']          = "Selecteer website";
$GLOBALS['strSelectZone']               = "Selecteer zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Append tracker-code";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "In behandeling";
$GLOBALS['strStatusApproved']           = "Goedgekeurd";
$GLOBALS['strStatusDisapproved']        = "Afgekeurd";
$GLOBALS['strStatusDuplicate']          = "Dubbel";
$GLOBALS['strStatusOnHold']             = "On Hold";
$GLOBALS['strStatusIgnore']             = "Ignore";
$GLOBALS['strConnectionType']           = "Type";
$GLOBALS['strConnTypeSale']             = "Bewaren";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Signup";
$GLOBALS['strShortcutEditStatuses'] = "Edit statuses";
$GLOBALS['strShortcutShowStatuses'] = "Show statuses";

// Statistics
$GLOBALS['strStats']                     = "Statistieken";
$GLOBALS['strNoStats']                   = "Er zijn momenteel geen statistieken beschikbaar";
$GLOBALS['strNoTargetingStats']          = "Er zijn momenteel geen statistieken beschikbaar";
$GLOBALS['strNoStatsForPeriod']          = "Er zijn momenteel geen statistieken beschikbaar voor de periode van  %s tot %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Er zijn momenteel geen statistieken beschikbaar voor de periode van  %s tot %s";
$GLOBALS['strConfirmResetStats']         = "Weet u zeker dat u alle statistieken wilt wissen?";
$GLOBALS['strGlobalHistory']             = "Globale geschiedenis";
$GLOBALS['strDailyHistory']              = "Dagelijkse geschiedenis";
$GLOBALS['strDailyStats']                = "Dagelijkse statistieken";
$GLOBALS['strWeeklyHistory']             = "Weeklijkse geschiedenis";
$GLOBALS['strMonthlyHistory']            = "Maandelijkse geschiedenis";
$GLOBALS['strCreditStats']               = "Krediet statistieken";
$GLOBALS['strDetailStats']               = "Gedetailleerde statistieken";
$GLOBALS['strTotalThisPeriod']           = "Totaal deze periode";
$GLOBALS['strAverageThisPeriod']         = "Gemiddelde deze periode";
$GLOBALS['strPublisherDistribution']     = "Website Distribution";
$GLOBALS['strCampaignDistribution']      = "Campaign Distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Wis Statistieken";
$GLOBALS['strSourceStats']               = "Bron statistieken";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Selecteer de bron die u wilt bekijken:";
$GLOBALS['strSizeDistribution']          = "Distributie op grootte";
$GLOBALS['strCountryDistribution']       = "Distributie op land";
$GLOBALS['strEffectivity']               = "Effectiviteit";
$GLOBALS['strTargetStats']               = "Doelberekeningen";
$GLOBALS['strCampaignTarget']            = "Doel";
$GLOBALS['strTargetRatio']               = "Doel ratio";
$GLOBALS['strTargetModifiedDay']         = "Er zijn doelen gewijzigd gedurende de dag, hierdoor waren de berekeningen niet accuraat";
$GLOBALS['strTargetModifiedWeek']        = "Er zijn doelen gewijzigd gedurende de week, hierdoor waren de berekeningen niet accuraat";
$GLOBALS['strTargetModifiedMonth']       = "Er zijn doelen gewijzigd gedurende de maand, hierdoor waren de berekeningen neit accuraat";
$GLOBALS['strNoTargetStats']             = "Er zijn momenteen geen gegevens bekend over doelberekeningen";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "View by";
$GLOBALS['strBreakdownByDay']            = "Dagen";
$GLOBALS['strBreakdownByWeek']           = "Weken";
$GLOBALS['strBreakdownByMonth']          = "Maand";
$GLOBALS['strBreakdownByDow']            = "Dag van de week";
$GLOBALS['strBreakdownByHour']           = "Uur";
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
$GLOBALS['strStatsArea']                 = "Gebied";

// Hosts
$GLOBALS['strHosts']                = "Bezoekers";
$GLOBALS['strTopHosts']             = "Meest actieve bezoekers";
$GLOBALS['strTopCountries']         = "Meest active landen";
$GLOBALS['strRecentHosts']             = "Meest recente bezoekers";

// Expiration
$GLOBALS['strExpired']                = "Vervallen";
$GLOBALS['strExpiration']             = "Vervaldatum";
$GLOBALS['strNoExpiration']           = "Geen vervaldatum ingesteld";
$GLOBALS['strEstimated']              = "Geschatte vervaldatum";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "Dagen te gaan";
$GLOBALS['strCampaignStop']           = "Campagne geschiedenis";

// Reports
$GLOBALS['strReports']                = "Rapportage";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Selecteer de rapportage welke u wilt genereren";
$GLOBALS['strStartDate']              = "Begindatum";
$GLOBALS['strEndDate']                = "Einddatum";
$GLOBALS['strNoData']                 = "Er is geen informatie beschikbaar voor deze periode";
$GLOBALS['strPeriod']                 = "Periode";
$GLOBALS['strLimitations']            = "Limitaties ";
$GLOBALS['strWorksheets']             = "Werkbladen";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Totaal aantal adverteerders";
$GLOBALS['strAnonAdvertisers']           = "Anonieme adverteerders";
$GLOBALS['strAllPublishers']             = "Alle websites";
$GLOBALS['strAnonPublishers']            = "Anonieme websites";
$GLOBALS['strAllAvailZones']             = "Alle beschikbare zones";

// Userlog
$GLOBALS['strUserLog']                = "Gebruikers log";
$GLOBALS['strUserLogDetails']        = "Gebruikers log details";
$GLOBALS['strDeleteLog']            = "Verwijder log";
$GLOBALS['strAction']                = "Actie";
$GLOBALS['strNoActionsLogged']        = "Er zijn geen acties vastgelegd";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Directe selectie";
$GLOBALS['strChooseInvocationType']        = "Kies het type banner invocatie";
$GLOBALS['strGenerate']                    = "Genereer";
$GLOBALS['strParameters']                = "Parameters";
$GLOBALS['strFrameSize']                = "Frame grootte";
$GLOBALS['strBannercode']                = "Bannercode";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optioneel";
$GLOBALS['strBackToTheList']            = "Ga terug naar verslaglijst ";
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
$GLOBALS['strMySQLError']                       = "SQL fout:";
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
$GLOBALS['strLogErrorClients']                  = "Er is een fout opgetreden. De adverteerders konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorBanners']                  = "Er is een fout opgetreden. De banners konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorViews']                    = "Er is een fout opgetreden. De AdViews konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorClicks']                   = "Er is een fout opgetreden. De AdClicks konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorConversions']              = "Er is een fout opgetreden. De AdViews konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strErrorViews']                       = "U moet het aantal AdViews invullen of het vakje 'Onbegrensd' aankruisen!";
$GLOBALS['strErrorNegViews']                    = "Negatieve AdViews zijn niet toegestaan";
$GLOBALS['strErrorClicks']                      = "U moet het aantal AdClicks invullen of het vakje 'Onbegrensd' aankruisen!";
$GLOBALS['strErrorNegClicks']                   = "Negatieve AdClicks zijn niet toegestaan";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Geen objecten gevonden";
$GLOBALS['strErrorOccurred']                    = "Er is een fout opgetreden";
$GLOBALS['strErrorUploadSecurity']              = "Er is een potentieel beveiligingsprobleem gedetecteerd. De operatie is afgebroken!";
$GLOBALS['strErrorUploadBasedir']               = "Het verzonden bestand kon niet worden gelezen. De oorzaak is waarschijnlijk een safemode of open_basedir restrictie";
$GLOBALS['strErrorUploadUnknown']               = "Door een onbekende oorzaak kon het verzonden bestand kon niet worden gelezen. Controleer uw PHP configuratie";
$GLOBALS['strErrorStoreLocal']                  = "Er is een fout opgetreden tijdens het bewaren van de banner in een lokale map. Door oorzaak van dit probleem is waarschijnlijk een misconfiguratie van de locatie van de lokale map";
$GLOBALS['strErrorStoreFTP']                    = "Er is een fout opgetreden tijdens het overzenden van de banner naar de FTP server. De server is niet bereikbaar, of er is een fout gemaakt tijdens het invullen van de gegevens van de FTP server";
$GLOBALS['strErrorDBPlain']                     = "Er is een probleem opgetreden tijdens het benaderen van de database";
$GLOBALS['strErrorDBSerious']                   = "Er is een ernstig probleem met de database opgetreden";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "De database tabel is waarschijnlijk beschadigd en moet gerepareerd worden. Voor meer informatie over het repareren van beschadigde tabellen lees het hoofdstuk <i>Troubleshooting</i> van de <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact']                   = "Neem a.u.b. contact op met de beheerder van deze server en breng hem op de hoogte van uw probleem.";
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
$GLOBALS['strRequiredField']                    = "Verplicht veld";
$GLOBALS['strXRequiredField']                   = "%s is required";
$GLOBALS['strMaxLengthField']                   = "Please enter maximum %s characters";
$GLOBALS['strEmailField']                       = "Voereen geldig e-mailadres in";
$GLOBALS['strNumericField']                     = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField']             = "Moet groter zijn dan 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s moet groter zijn dan 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s moet een positief geheel getal";
$GLOBALS['strXUniqueField']                     = "%s met dit %s bestaat al";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "Must be a decimal with maximum %s decimal places";
$GLOBALS['strInvalidWebsiteURL']                = "Ongeldig Website URL";


// Email
$GLOBALS['strSirMadam']                         = "Meneer/mevrouw";
$GLOBALS['strMailSubject']                      = "Advertentierapport";
$GLOBALS['strAdReportSent']                     = "Advertentierapport verzonden";
$GLOBALS['strMailHeader']                       = "Geachte {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Bijgevoegd vind u de banner-statistieken van {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campagne {id} activeerd";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campagne {id} geactiveerd";
$GLOBALS['strMailBannerActivated']              = "Your campaign shown below has been activated because\\nthe campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated']            = "Your campaign shown below has been deactivated because";
$GLOBALS['strMailFooter']                       = "Met vriendelijke groet,\\n    {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Uw banner zijn gedeactiveerd omdat";
$GLOBALS['strMailNothingLeft']                  = "Indien u verder wilt adverteren op onze website, neem dan gerust contact met ons op. We horen graag van u.";
$GLOBALS['strClientDeactivated']                = "Deze campagne is momenteel niet actief omdat";
$GLOBALS['strBeforeActivate']                   = "de activeringsdatum bereikt is";
$GLOBALS['strAfterExpire']                      = "de vervaldatum bereikt is";
$GLOBALS['strNoMoreImpressions']                = "there are no Impressions remaining";
$GLOBALS['strNoMoreClicks']                     = "de gekochte AdClicks gebruikt zijn";
$GLOBALS['strNoMoreConversions']                = "de gekochte AdClicks gebruikt zijn";
$GLOBALS['strWeightIsNull']                     = "het gewicht op nul gezet is";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "Er zijn minder dan {limit} AdClicks of AdViews over voor uw banners. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Clicks/Conversions are low";
$GLOBALS['strNoViewLoggedInInterval']           = "Er zijn geen AdViews gelogd gedurende de dagen van dit rapport";
$GLOBALS['strNoClickLoggedInInterval']          = "Er zijn geen AdClicks gelogd gedurende de dagen van dit rapport";
$GLOBALS['strNoConversionLoggedInInterval']     = "Er zijn geen AdViews gelogd gedurende de dagen van dit rapport";
$GLOBALS['strMailReportPeriod']                 = "Dit rapport bevat de statistieken van {startdate} tot en met {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Dit rapport bevat alle statistieken tot en met {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Er zijn geen statistieken beschikbaar voor deze campagne";
$GLOBALS['strImpendingCampaignExpiry']          = "Impending campaign expiration";
$GLOBALS['strYourCampaign']                     = "Uw campagne";
$GLOBALS['strTheCampiaignBelongingTo']          = "De campagne behorend bij";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} shown below is due to end on {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} shown below has less than {limit} impressions remaining.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "Prioriteit";
$GLOBALS['strSourceEdit']                       = "Verander bronnen";

// Preferences
$GLOBALS['strPreferences']                      = "Voorkeuren";
$GLOBALS['strUserPreferences']                  = "Gebruikersvoorkeuren ";
$GLOBALS['strChangePassword']                   = "Verander wachtwoord";
$GLOBALS['strChangeEmail']                      = "Verander e-mail";
$GLOBALS['strCurrentPassword']                  = "Huidig wachtwoord";
$GLOBALS['strChooseNewPassword']                = "Kies nieuw wachtwoord";
$GLOBALS['strReenterNewPassword']               = "Herhaal nieuw wachtwoord";
$GLOBALS['strNameLanguage']                     = "Naam en taal";
$GLOBALS['strAccountPreferences']               = "Account voorkeuren";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Campagne e-mail rapporteer voorkeuren";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "Administrator e-mail waarschuwingen";
$GLOBALS['strAgencyEmailWarnings']              = "Agentschap e-mail waarschuwingen";
$GLOBALS['strAdveEmailWarnings']                = "Adverteerder e-mail waarschuwingen ";
$GLOBALS['strFullName']                         = "Volledige naam";
$GLOBALS['strEmailAddress']                     = "E-mail adres";
$GLOBALS['strUserDetails']                      = "Gebruikersdetails";
$GLOBALS['strLanguageTimezone']                 = "Taal en tijdzone";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "Gebruikersinterface voorkeuren";
$GLOBALS['strPluginPreferences']                = "Algemene voorkeuren";
$GLOBALS['strInvocationPreferences']            = "Invocation Preferences";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Opbrengst";
$GLOBALS['strNumberOfItems']                       = "Number of items";
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
$GLOBALS['strImpressionSR']                     = "AdViews";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "AdViews";
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
$GLOBALS['strClicks_short']                     = "AdClicks";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Algemene instellingen";
$GLOBALS['strGeneralSettings']              = "Standaard instellingen";
$GLOBALS['strMainSettings']                 = "Hoofd instellingen";
$GLOBALS['strAdminSettings']                = "Administratie instellingen";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Nieuwe versies";
$GLOBALS['strViewPastUpdates']        = "Manage Past Updates and Backups";
$GLOBALS['strFromVersion']            = "Van versie";
$GLOBALS['strToVersion']              = "Naar versie";
$GLOBALS['strToggleDataBackupDetails']= "Toggle data backup details";
$GLOBALS['strClickViewBackupDetails'] = "click to view backup details";
$GLOBALS['strClickHideBackupDetails'] = "click to hide backup details";
$GLOBALS['strShowBackupDetails']      = "Show data backup details";
$GLOBALS['strHideBackupDetails']      = "Hide data backup details";
$GLOBALS['strInstallation']           = "Installatie";
$GLOBALS['strBackupDeleteConfirm']    = "Weet je zeker dat je alle back-ups wilt verwijderen, die gecreëerd zijn van deze upgrade?";
$GLOBALS['strDeleteArtifacts']         = "Delete Artifacts";
$GLOBALS['strArtifacts']              = "Artifacts";
$GLOBALS['strBackupDbTables']         = "Backup database tables";
$GLOBALS['strLogFiles']               = "Log files";
$GLOBALS['strConfigBackups']          = "Conf backups";
$GLOBALS['strUpdatedDbVersionStamp']  = "Updated database version stamp";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "Upgrade compleet";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "Upgrade mislukt";

// Agency
$GLOBALS['strAgencyManagement']              = "Account beheer";
$GLOBALS['strAgency']                      = "Account";
$GLOBALS['strAgencies']                   = "Account";
$GLOBALS['strAddAgency']                   = "Voeg nieuw account toe";
$GLOBALS['strAddAgency_Key']               = "<u>V</u>oeg een zone toe";
$GLOBALS['strTotalAgencies']               = "Total accounts";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "Er zijn momenteel geen zones gedefinieerd";
$GLOBALS['strConfirmDeleteAgency']           = "Weet u zeker dat u deze zone wilt wissen?";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive accounts";
$GLOBALS['strInactiveAgenciesHidden']     = "niet-actieve banner(s) verborgen";
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
$GLOBALS['strChannelToWebsite']           = "Alle websites";
$GLOBALS['strNoChannels']                 = "Er zijn momenteel geen banner gedefinieerd";
$GLOBALS['strNoChannelsAddWebsite']       = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "Targeting Channel properties";
$GLOBALS['strChannelLimitations']         = "Delivery Options";
$GLOBALS['strConfirmDeleteChannel']       = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteChannels']      = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Variable Name";
$GLOBALS['strVariableDescription']     = "Beschrijving";
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
$GLOBALS['strTrackerType']          = "Tracker naam";
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
$GLOBALS['strYouHaveNoCampaigns']   = "Adverteerders & Campagnes";
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
$GLOBALS['strForgotPassword']         = "Wachtwoord vergeten?";
$GLOBALS['strPasswordRecovery']       = "Wachtwoord herstellen";
$GLOBALS['strEmailRequired']          = "E-mail is een verplicht veld";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "E-mail adres is niet gevonden";
$GLOBALS['strPwdRecPasswordSaved']    = "Het nieuwe wachtwoord is ingesteld, ga verder om  <a href='index.php'>in te loggen</a>";
$GLOBALS['strPwdRecWrongId']          = "Verkeerde ID";
$GLOBALS['strPwdRecEnterEmail']       = "Geef uw e-mail adres onderaan";
$GLOBALS['strPwdRecEnterPassword']    = "Geef uw nieuw wachtwoord onderaan";
$GLOBALS['strPwdRecReset']            = "Wachtwoord reset";
$GLOBALS['strPwdRecResetLink']        = "Wachtwoord reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset wachtwoord van deze gebruiker";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s wachtwoord herstelling";
$GLOBALS['strProceed']                = "Proceed >";
$GLOBALS['strNotifyPageMessage']      = "Een e-mail is naar u verzonden, deze bevat een link dat u de mogelijkheid bied om uw wachtwoord te resetten en in te loggen. <br />Gelieve enkele minuten te wachten eer de e-mail aankomt.<br />Indien u geen e-mail ontvangt, gelieve uw spam map na te kijken.<br /><a href='index.php'>Ga terug naar de login pagina.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binary data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by the system administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "Account";
$GLOBALS['strAccountUserAssociation']   = "Account gebruikersgroep";
$GLOBALS['strEvent']                    = "Event";
$GLOBALS['strImage']                    = "Afbeelding";
$GLOBALS['strCampaignZoneAssociation']      = "Campagne zonegroep";
$GLOBALS['strAccountPreferenceAssociation'] = "Account voorkeurengroep";


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

$GLOBALS['strUnsavedChanges']       = "Je hebt onopgeslagen zken op deze pagina, weet zeker dat alle  \"Save Changes\" zijn gedaan";
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
$GLOBALS['keyUp']            = "o";
$GLOBALS['keyNextItem']        = ".";
$GLOBALS['keyPreviousItem']    = ",";
$GLOBALS['keyList']            = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "z";
$GLOBALS['keyCollapseAll']    = "u";
$GLOBALS['keyExpandAll']    = "i";
$GLOBALS['keyAddNew']        = "v";
$GLOBALS['keyNext']            = "g";
$GLOBALS['keyPrevious']        = "r";
$GLOBALS['keyLinkUser']        = "u";
$GLOBALS['keyWorkingAs']        = "w";

// Market entities
$GLOBALS['strMarketCampaignOptin'] = "OpenX Market - Opted In Campaigns";
$GLOBALS['strMarketZoneOptin'] = "OpenX Market - Zone Default Ads";
$GLOBALS['strMarketZoneBeforeOpenX2.8.4'] = "OpenX Market ads before OpenX 2.8.4";

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Arabisch";
$GLOBALS['str_bg']                  = "Hongaars";
$GLOBALS['str_cs']                  = "Czech";
$GLOBALS['str_cy']                  = "Welsh";
$GLOBALS['str_da']                  = "Deens";
$GLOBALS['str_de']                  = "Duits";
$GLOBALS['str_el']                  = "Grieks";
$GLOBALS['str_en']                  = "Engels";
$GLOBALS['str_es']                  = "Spaans";
$GLOBALS['str_fa']                  = "Perzisch ";
$GLOBALS['str_fr']                  = "Frans";
$GLOBALS['str_he']                  = "Hebreeuws ";
$GLOBALS['str_hr']                  = "Kroaats";
$GLOBALS['str_hu']                  = "Hongaars";
$GLOBALS['str_id']                  = "Indonesisch ";
$GLOBALS['str_it']                  = "Italiaans";
$GLOBALS['str_ja']                  = "Japans";
$GLOBALS['str_ko']                  = "Koreaans";
$GLOBALS['str_lt']                  = "Litouws ";
$GLOBALS['str_ms']                  = "Maleisisch ";
$GLOBALS['str_nb']                  = "Noors Bokmal";
$GLOBALS['str_nl']                  = "Nederlands";
$GLOBALS['str_pl']                  = "Pools";
$GLOBALS['str_pt_BR']               = "Portugees Brazilië";
$GLOBALS['str_pt_PT']               = "Portugees Portugal";
$GLOBALS['str_ro']                  = "Romeens";
$GLOBALS['str_ru']                  = "Russisch ";
$GLOBALS['str_sk']                  = "Slowaaks ";
$GLOBALS['str_sl']                  = "Sloveens ";
$GLOBALS['str_sq']                  = "Albanees";
$GLOBALS['str_sv']                  = "Zweeds";
$GLOBALS['str_tr']                  = "Turks";
$GLOBALS['str_uk']                  = "Ukranian";
$GLOBALS['str_zh_CN']               = "Vereenvoudigd Chinees";
$GLOBALS['str_zh_TW']               = "Traditioneel Chinees";

?>
