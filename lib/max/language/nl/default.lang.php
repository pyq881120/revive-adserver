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
$GLOBALS['phpAds_TextAlignRight']       = "rechts";
$GLOBALS['phpAds_TextAlignLeft']        = "links";

$GLOBALS['phpAds_DecimalPoint']         = ",";
$GLOBALS['phpAds_ThousandsSeperator']   = ".";

// Date & time configuration
$GLOBALS['day_format']                  = "%m-%d";

// Formats used by PEAR Spreadsheet_Excel_Writer packate

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
$GLOBALS['strChoosenDisableHomePage']   = "U hebt gekozen om uw beginpagina uit te schakelen.";
$GLOBALS['strAccessHomePage']           = "Klik hier voor toegang tot uw beginpagina";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "code";
$GLOBALS['strDashboardSystemMessage']   = "Systeem bericht";
$GLOBALS['strDashboardErrorHelp']       = "Als deze fout vaker voorkomt, beschrijf dan alstublieft uw probleem in detail en plaats het op <a href='http://forum.revive-adserver.com/'> forum.revive-adserver.com/</a>.";

// Priority
$GLOBALS['strPriority']                 = "Prioriteit";
$GLOBALS['strPriorityLevel']            = "Prioriteitslevel ";
$GLOBALS['strPriorityTargeting']        = "Distributie ";
$GLOBALS['strPriorityOptimisation']     = "Diversen"; // Er, what?
$GLOBALS['strLimitations']              = "Limitaties ";
$GLOBALS['strNoLimitations']            = "Geen beperkingen";
$GLOBALS['strCapping']                  = "Plafonnering ";

// Properties
$GLOBALS['strName']                     = "Naam";
$GLOBALS['strSize']                     = "Afmetingen";
$GLOBALS['strWidth']                    = "Breedte";
$GLOBALS['strHeight']                   = "Hoogte";
$GLOBALS['strLanguage']                 = "Taal";
$GLOBALS['strDescription']              = "Beschrijving";
$GLOBALS['strVariables']                = "Variabele";
$GLOBALS['strComments']                 = "Reacties";

// User access
$GLOBALS['strWorkingAs']                = "Aan het werken als";
$GLOBALS['strWorkingAs']                = "Aan het werken als";
$GLOBALS['strSwitchTo']                 = "Ga naar";
$GLOBALS['strRecentlyUsed']             = "Recent gebruikte";
$GLOBALS['strLinkUser']                 = "Voeg gebruiker toe";
$GLOBALS['strLinkUser_Key']             = "Voeg <u>G</u>ebruiker toe";
$GLOBALS['strUsernameToLink']           = "gebruikersnaam van toegevoegde gebruiker";
$GLOBALS['strEmailToLink']              = "e-mail van toegevoegde gebruiker";
$GLOBALS['strNewUserWillBeCreated']     = "Nieuwe gebruiker wordt aangemaakt";
$GLOBALS['strErrorWhileCreatingUser']   = "Error tijdens creatie gebruiker: %s";
$GLOBALS['strUserLinkedToAccount']      = "Gebruiker is toegevoegd aan account";
$GLOBALS['strUserAccountUpdated']       = "Gebruikersaccount geupdate";
$GLOBALS['strUserUnlinkedFromAccount']  = "Gebruiker is verwijder van het account";
$GLOBALS['strUserWasDeleted']           = "Gebruiker is verwijderd";
$GLOBALS['strCantDeleteOneAdminUser']   = "U kunt een gebruiker niet verwijderen. Ten minste één gebruiker moet verbonden zijn met het system administrator account.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;
$GLOBALS['strLinkUserHelpUser']         = "gebruikersnaam";
$GLOBALS['strLinkUserHelpEmail']        = "E-mail adres";
$GLOBALS['strLastLoggedIn']             = "Laatst aangemeld";
$GLOBALS['strDateLinked']               = "Datum gekoppeld";
$GLOBALS['strUnlink']                   = "Verwijder";
$GLOBALS['strUnlinkAndDelete']          = "Verwijder en verwijder gebruiker";
$GLOBALS['strUnlinkUser']               = "Verwijder gebruiker";
$GLOBALS['strUnlinkUserConfirmBody']    = "Weet u zeker dat u deze gebruiker wilt verwijderen?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Gebruikerstoegang";
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
$GLOBALS['strNotAdmin']                 = "U heeft waarschijnlijk niet genoeg privileges";
$GLOBALS['strDuplicateClientName']      = "De gebruikersnaam die u wenst is al reeds in gebruik, gelieve een andere gebruikersnaam te gebruiken";
$GLOBALS['strDuplicateAgencyName']      = "De gebruikersnaam die u wenst is al reeds in gebruik, gelieve een andere gebruikersnaam te gebruiken";
$GLOBALS['strInvalidPassword']          = "Het nieuwe wachtwoord is niet geldig, voer een ander wachtwoord in.";
$GLOBALS['strNotSamePasswords']         = "De twee wachtwoorden die u ingevoerd heeft zijn niet hetzelfde";
$GLOBALS['strRepeatPassword']           = "Herhaal het wachtwoord";
$GLOBALS['strOldPassword']              = "Oud wachtwoord";
$GLOBALS['strNewPassword']              = "Nieuw wachtwoord";
$GLOBALS['strDeadLink']                 = "Deze link is ongeldig";
$GLOBALS['strNoPlacement']              = "Geselecteerde campagne bestaat niet. probeer deze <a href='{link}'>link</a> eens";
$GLOBALS['strNoAdvertiser']             = "Geselecteerde adverteerder bestaat niet. Probeer deze <a href='{link}'>link</a> eens";

// General advertising
$GLOBALS['strRequests']                 = "Aanvragen";
$GLOBALS['strImpressions']              = "AdViews";
$GLOBALS['strClicks']                   = "AdClicks";
$GLOBALS['strConversions']              = "Conversies ";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Verkoop ratio";
$GLOBALS['strTotalViews']               = "Totaal AdViews";
$GLOBALS['strTotalClicks']              = "Totaal AdClicks";
$GLOBALS['strTotalConversions']         = "Totaal conversies";
$GLOBALS['strViewCredits']              = "Adview krediet";
$GLOBALS['strClickCredits']             = "Adclick krediet";
$GLOBALS['strConversionCredits']        = "Conversies krediet";
$GLOBALS['strDateTime']                 = "Datum tijd";
$GLOBALS['strTrackerID']                = "Tracker-ID";
$GLOBALS['strTrackerName']              = "Tracker naam";
$GLOBALS['strTrackerImageTag']          = "Afbeelding tag";
$GLOBALS['strTrackerJsTag']             = "Javascript tag";
$GLOBALS['strCampaigns']                = "Campagnes";
$GLOBALS['strCampaignID']               = "Campagne-ID";
$GLOBALS['strCampaignName']             = "Campagne naam";
$GLOBALS['strCountry']                  = "Land";
$GLOBALS['strStatsAction']              = "Actie";
$GLOBALS['strWindowDelay']              = "Scherm vertraging";
$GLOBALS['strStatsVariables']           = "Variabele";

// Finance
$GLOBALS['strFinanceMT']                = "Maandelijkse opstal";
$GLOBALS['strFinanceCTR']               = "CTR";

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
$GLOBALS['strHideInactiveAdvertisers']      = "Verberg niet-actieve adverteerders";
$GLOBALS['strInactiveAdvertisersHidden']    = "niet-actieve adverteerder(s) verborgen";
$GLOBALS['strOverallAdvertisers']           = "Adverteerder(s)";
$GLOBALS['strAdvertiserSignup']             = "Adverteerder aanmelden";
$GLOBALS['strAdvertiserSignupLink']         = "Adverteerder aanmelden";
$GLOBALS['strAdvertiserSignupOption']       = "Adverteerder aanmelden";
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
$GLOBALS['strHiddenCampaign']               = "Campagne";
$GLOBALS['strHiddenAd']                     = "advertentie";
$GLOBALS['strHiddenAdvertiser']             = "Adverteerder";
$GLOBALS['strHiddenTracker']                = "Banner";
$GLOBALS['strHiddenWebsite']              = "Website";
$GLOBALS['strHiddenZone']                   = "Zone";
$GLOBALS['strSelectUnselectAll']            = "Selecteer/deselecteer alles";

// Campaign-zone linking page
$GLOBALS['strZonesSearch']                  = "Zoeken";
$GLOBALS['strNoWebsitesAndZones']           = "Geen websites en zones";
$GLOBALS['strAvailable']                    = "Beschikbaar";


// Campaign properties
$GLOBALS['strDontExpire']                       = "Deze campagne niet laten vervallen op een specifieke datum";
$GLOBALS['strActivateNow']                      = "Deze campagne direct activeren";
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
$GLOBALS['strOptimise']                         = "Optimaliseer ";
$GLOBALS['strAnonymous']                        = "Verberg de adverteerder en websites van deze campagne";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Toon de banners in deze campagne met lage prioriteit.<br />Deze campagne wordt gebruikt om de overgebleven AdViews te tonen, welke niet gebruikt worden door hoge prioriteit campagnes.";
$GLOBALS['strTargetPerDay']                     = "per dag.";
$GLOBALS['strPriorityAutoTargeting']            = "Gekochte AdViews en vervaldatum zijn ingesteld.\\n De limiet wordt elke dag bijgesteld.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "De prioriteit van deze campagne is laag, \\nterwijl het gewicht op nul is gezet of niet \\ngespecificeerd is. Dit zal er voor zorgen dat de campagne \\ngedeactiveerd wordt en de banners zullen niet getoond \\nworden totdat het gewicht aangepast is. \\n\\nWeet u zeker dat u door wilt gaan?";
$GLOBALS['strCampaignWarningNoTarget']          = "De prioriteit van deze campagne is hoog, \\nmaar u heeft het aantal AdViews niet gelimiteerd tot een. \\nbepaald aantal. Dit zal er voor zorgen dat de campagne \\n gedeactiveerd wordt en de banner zullen niet getoond \\nworden totdat u het aantal AdViews gelimiteerd heeft \\n\\nWeet u zeker dat u door wilt gaan?";
$GLOBALS['strCampaignStatusInactive']           = "actief";
$GLOBALS['strCampaignStatusRunning']            = "Lopend";
$GLOBALS['strCampaignStatusPaused']             = "Gepauzeerd";
$GLOBALS['strCampaignStatusAwaiting']           = "Wachtend";
$GLOBALS['strCampaignStatusExpired']            = "Voltooid";
$GLOBALS['strCampaignStatusRestarted']          = "Herstart ";
$GLOBALS['strCampaignStatusDeleted']            = "Verwijder";
$GLOBALS['strCampaignApprove']                  = "Goedkeuren";
$GLOBALS['strCampaignPause']                    = "Pauze ";
$GLOBALS['strCampaignStatus']                   = "Campagnestatus";
$GLOBALS['strReasonForRejection']               = "Reden voor afwijzing";
$GLOBALS['strCampaignType']                     = "Campagne naam";
$GLOBALS['strType']                             = "Type";
$GLOBALS['strContract']                         = "Contactpersoon";
$GLOBALS['strStandardContract']                 = "Contactpersoon";

// Tracker
$GLOBALS['strTracker']                    = "Banner";
$GLOBALS['strTrackers']                   = "Banner";
$GLOBALS['strTrackerOverview']            = "Banner overzicht";
$GLOBALS['strTrackerPreferences']            = "Banner voorkeuren";
$GLOBALS['strAddTracker']                 = "Voeg nieuwe banner toe";
$GLOBALS['strAddTracker_Key']             = "<u>V</u>oeg een banner toe";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Weet je zeker dat je alle campagnes van deze adverteerder wilt verwijderen?";
$GLOBALS['strConfirmDeleteTrackers']      = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteTracker']       = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strDeleteAllTrackers']          = "Verwijder alle banners";
$GLOBALS['strTrackerProperties']          = "Banner eigenschappen";
$GLOBALS['strTrackerOverview']            = "Banner overzicht";
$GLOBALS['strUniqueWindow']               = "Uniek scherm";
$GLOBALS['strClick']                      = "AdClicks";
$GLOBALS['strView']                       = "Bekijk";
$GLOBALS['strImpression']                 = "AdViews";



// Banners (General)
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


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Banner voorkeuren";
$GLOBALS['strDefaultBannerDestination']              = "Standaard bestemmings URL";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Kies het banner type";
$GLOBALS['strMySQLBanner']             = "Lokale banner (SQL)";
$GLOBALS['strWebBanner']               = "Lokale banner (Webserver)";
$GLOBALS['strURLBanner']               = "Externe banner";
$GLOBALS['strHTMLBanner']              = "HTML banner";
$GLOBALS['strTextBanner']              = "Tekst advertentie";
$GLOBALS['strUploadOrKeep']            = "Wilt u uw bestaande afbeelding <br />houden, of wilt u een <br />nieuwe afbeelding uploaden?";
$GLOBALS['strUploadOrKeepAlt']        = "Wilt u uw bestaande afbeelding <br />houden, of wilt u een <br />nieuwe afbeelding uploaden?";
$GLOBALS['strNewBannerFile']         = "Selecteer de afbeelding die u <br />wilt gebruiken voor deze banner<br /><br />";
$GLOBALS['strNewBannerURL']         = "Afbeelding URL (incl. http://)";
$GLOBALS['strURL']                     = "Doel URL (incl. http://)";
$GLOBALS['strKeyword']              = "Sleutelwoorden";
$GLOBALS['strTextBelow']             = "Tekst onder banner";
$GLOBALS['strWeight']                 = "Gewicht";
$GLOBALS['strAlt']                     = "Alternative tekst";
$GLOBALS['strStatusText']            = "Status tekst";
$GLOBALS['strBannerWeight']            = "Banner gewicht";

// Banner (advanced)

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Controleer op vaste links in het Flash bestand";
$GLOBALS['strConvertSWFLinks']        = "Converteer Flash links";
$GLOBALS['strHardcodedLinks']        = "Vaste links";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Comprimeer SWF bestand voor versneld downloaden (Flash 6 speler verplicht)";
$GLOBALS['strOverwriteSource']        = "Overschrijft de bron parameter";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "Banner netwerk";
$GLOBALS['strChooseNetwork']        = "Kies het banner netwerk dat u wilt gebruiken";
$GLOBALS['strMoreInformation']        = "Meer informatie...";
$GLOBALS['strTrackAdClicks']        = "Volg AdClicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense accounts";
$GLOBALS['strCreateAdSenseAccount']       = "Maak AdSense account";
$GLOBALS['strEditAdSenseAccount']         = "Verander AdSense account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Leveringsopties";
$GLOBALS['strACL']                        = "Levering";
$GLOBALS['strACLAdd']                     = "Voeg nieuwe beperking toe";
$GLOBALS['strACLAdd_Key']                 = "<u>V</u>oeg nieuwe beperking toe";
$GLOBALS['strNoLimitations']              = "Geen beperkingen";
$GLOBALS['strApplyLimitationsTo']         = "Pas beperking toe op";
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
$GLOBALS['strAND']                        = "EN";                          // logical operator
$GLOBALS['strOR']                         = "OF";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Toon deze banner alleen wanneer:";
$GLOBALS['strWeekDay']                    = "Weekdag";
$GLOBALS['strWeekDays']                   = "Weekdagen";
$GLOBALS['strTime']                       = "Tijd";
$GLOBALS['strDomain']                     = "Domein";
$GLOBALS['strClientIP']                   = "IP adres";
$GLOBALS['strSource']                     = "Bron";
$GLOBALS['strCountryName']                = "Naam van het land";
$GLOBALS['strCity']                       = "Stad";
$GLOBALS['strLatitude']                   = "Breedtegraad";
$GLOBALS['strLongitude']                  = "Lengtegraad";
$GLOBALS['strNetspeed']                   = "Internet verbindingssnelheid";
$GLOBALS['strReferer']                    = "Verwijzende pagina";
$GLOBALS['strDeliveryLimitations']        = "Leveringsbeperkingen";

$GLOBALS['strDeliveryCapping']            = "Leveringsplafond";
$GLOBALS['strDeliveryCappingReset']       = "Reset vertoningentellers na:";
$GLOBALS['strDeliveryCappingTotal']       = "in totaal";
$GLOBALS['strDeliveryCappingSession']     = "per sessie";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];
$GLOBALS['strCappingBanner']['limit'] = "Limiteer banner vertoningen tot";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];
$GLOBALS['strCappingCampaign']['limit'] = "Limiteer campagne vertoningen tot:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];
$GLOBALS['strCappingZone']['limit'] = "Limiteer zone vertoningen tot:";

// Website
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
$GLOBALS['strAllowAffiliateModifyInfo']     = "Deze gebruiker kan zijn eigen instellingen wijzigen";
$GLOBALS['strAllowAffiliateModifyZones']    = "Deze gebruiker kan zijn eigen zones wijzigen";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Deze gebruiker kan banners koppelen aan zijn eigen zones";
$GLOBALS['strAllowAffiliateAddZone']        = "Deze gebruiker kan nieuwe zones definieeren";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Deze gebruiker kan bestaande zones verwijderen";
$GLOBALS['strAllowAffiliateZoneStats']      = "Laat deze gebruiker de gerichte statistieken bekijken";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Betalingsinformatie ";
$GLOBALS['strAddress']                      = "Adres";
$GLOBALS['strPostcode']                     = "Postcode";
$GLOBALS['strCity']                         = "Stad";
$GLOBALS['strCountry']                      = "Land";
$GLOBALS['strPhone']                        = "Telefoon";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strPayeeName']                    = "Naam betaler";
$GLOBALS['strCurrency']                     = "Valuta";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Andere informatie";
$GLOBALS['strUniqueUsersMonth']             = "unieke gebruikers/maand";
$GLOBALS['strUniqueViewsMonth']             = "Unieke bekijken/maand";
$GLOBALS['strCategory']                     = "Categorie";
$GLOBALS['strPrimaryCategory']              = "Primaire rubriek";
$GLOBALS['strSecondaryCategory']            = "Secundaire rubriek";
$GLOBALS['strHelpFile']                     = "Help bestanden";
$GLOBALS['strWebsiteZones']                 = "Uitgevers & Zones";

// Zone
$GLOBALS['strZone']                         = "Zone";
$GLOBALS['strAddNewZone']                   = "Voeg een zone toe";
$GLOBALS['strAddNewZone_Key']               = "<u>V</u>oeg een zone toe";
$GLOBALS['strAddZone']                      = "Maak zone";
$GLOBALS['strModifyZone']                   = "Wijzig zone";
$GLOBALS['strZoneToWebsite']                = "Alle websites";
$GLOBALS['strLinkedZones']                  = "Gekoppelde zones";
$GLOBALS['strZoneOverview']                 = "Zone overzicht";
$GLOBALS['strZoneProperties']               = "Zone eigenschappen";
$GLOBALS['strZoneHistory']                  = "Zone geschiendenis";
$GLOBALS['strNoZones']                      = "Er zijn momenteel geen zones gedefinieerd";
$GLOBALS['strNoZonesAddWebsite']            = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";
$GLOBALS['strConfirmDeleteZone']            = "Weet u zeker dat u deze zone wilt wissen?";
$GLOBALS['strConfirmDeleteZones']           = "Weet u zeker dat u deze zone wilt wissen?";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Button of Rectangle";
$GLOBALS['strInterstitial']                 = "Interstitial of Floating DHTML";
$GLOBALS['strTextAdZone']                   = "Tekst advertentie";
$GLOBALS['strShowMatchingBanners']          = "Toon geschikte banners";
$GLOBALS['strHideMatchingBanners']          = "Verberg geschikte banners";
$GLOBALS['strInactiveZonesHidden']          = "niet-actieve banner(s) verborgen";

$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Knop 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Knop 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Halve Banner (234 x 60)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Vierkante knop (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Rechthoekig (180 x 150) *";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Vierkante Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB verticale Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Medium rechthoekig (300 x 250) *";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Groot rechthoekig  (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Verticaal rechthoekig (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Wijde Skyscraper (160 x 600) *";

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
$GLOBALS['strZonePrependHTML']            = "Voeg de volgende HTML code altijd toe voor de HTML code die getoond wordt door deze zone";
$GLOBALS['strZoneAppendHTML']            = "Voeg de volgende HTML code altijd toe na de HTML code die getoond wordt door deze zone";
$GLOBALS['strZoneAppendType']            = "Toevoeg type";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup of interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Voeg altijd de volgende popup of intersitial toe aan banners die getoond worden door deze zone";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "De banners welke gekoppeld zijn aan deze zone zijn niet actief. <br />De volgende ketting wordt daarom gebruikt:";
$GLOBALS['strZoneProbNullPri']            = "De banners welke gekoppeld zijn aan deze zone zijn niet actief.";
$GLOBALS['strZoneProbListChainLoop']    = "De ketting welke gevolgd wordt is aan zichzelf gekoppeld. Het is niet mogelijk om deze zone te tonen";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Kies de manier van banners koppelen";
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
$GLOBALS['strSelectPublisher']          = "Selecteer website";
$GLOBALS['strSelectZone']               = "Selecteer zone";
$GLOBALS['strTrackerCodeSubject']          = "Append tracker-code";
$GLOBALS['strStatusPending']            = "In behandeling";
$GLOBALS['strStatusApproved']           = "Goedgekeurd";
$GLOBALS['strStatusDisapproved']        = "Afgekeurd";
$GLOBALS['strStatusDuplicate']          = "Dubbel";
$GLOBALS['strConnTypeSale']             = "Bewaren";

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
$GLOBALS['strResetStats']                = "Wis Statistieken";
$GLOBALS['strSourceStats']               = "Bron statistieken";
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
$GLOBALS['strBreakdownByDay']            = "Dagen";
$GLOBALS['strBreakdownByWeek']           = "Weken";
$GLOBALS['strBreakdownByMonth']          = "Maand";
$GLOBALS['strBreakdownByDow']            = "Dag van de week";
$GLOBALS['strBreakdownByHour']           = "Uur";
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
$GLOBALS['strDaysAgo']                = "Dagen te gaan";
$GLOBALS['strCampaignStop']           = "Campagne geschiedenis";

// Reports
$GLOBALS['strReports']                = "Rapportage";
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
$GLOBALS['strOptional']                    = "optioneel";
$GLOBALS['strBackToTheList']            = "Ga terug naar verslaglijst ";


// Errors
$GLOBALS['strMySQLError']                       = "SQL fout:";
$GLOBALS['strLogErrorClients']                  = "Er is een fout opgetreden. De adverteerders konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorBanners']                  = "Er is een fout opgetreden. De banners konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorViews']                    = "Er is een fout opgetreden. De AdViews konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorClicks']                   = "Er is een fout opgetreden. De AdClicks konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strLogErrorConversions']              = "Er is een fout opgetreden. De AdViews konden niet worden opgevraagd vanuit de database.";
$GLOBALS['strErrorViews']                       = "U moet het aantal AdViews invullen of het vakje 'Onbegrensd' aankruisen!";
$GLOBALS['strErrorNegViews']                    = "Negatieve AdViews zijn niet toegestaan";
$GLOBALS['strErrorClicks']                      = "U moet het aantal AdClicks invullen of het vakje 'Onbegrensd' aankruisen!";
$GLOBALS['strErrorNegClicks']                   = "Negatieve AdClicks zijn niet toegestaan";
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
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";

//Validation
$GLOBALS['strRequiredField']                    = "Verplicht veld";
$GLOBALS['strEmailField']                       = "Voereen geldig e-mailadres in";
$GLOBALS['strGreaterThanZeroField']             = "Moet groter zijn dan 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s moet groter zijn dan 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s moet een positief geheel getal";
$GLOBALS['strXUniqueField']                     = "%s met dit %s bestaat al";
$GLOBALS['strInvalidWebsiteURL']                = "Ongeldig Website URL";


// Email
$GLOBALS['strSirMadam']                         = "Meneer/mevrouw";
$GLOBALS['strMailSubject']                      = "Advertentierapport";
$GLOBALS['strAdReportSent']                     = "Advertentierapport verzonden";
$GLOBALS['strMailHeader']                       = "Geachte {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Bijgevoegd vind u de banner-statistieken van {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campagne {id} activeerd";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campagne {id} geactiveerd";
$GLOBALS['strMailFooter']                       = "Met vriendelijke groet,\\n    {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Uw banner zijn gedeactiveerd omdat";
$GLOBALS['strMailNothingLeft']                  = "Indien u verder wilt adverteren op onze website, neem dan gerust contact met ons op. We horen graag van u.";
$GLOBALS['strClientDeactivated']                = "Deze campagne is momenteel niet actief omdat";
$GLOBALS['strBeforeActivate']                   = "de activeringsdatum bereikt is";
$GLOBALS['strAfterExpire']                      = "de vervaldatum bereikt is";
$GLOBALS['strNoMoreClicks']                     = "de gekochte AdClicks gebruikt zijn";
$GLOBALS['strNoMoreConversions']                = "de gekochte AdClicks gebruikt zijn";
$GLOBALS['strWeightIsNull']                     = "het gewicht op nul gezet is";
$GLOBALS['strWarnClientTxt']                    = "Er zijn minder dan {limit} AdClicks of AdViews over voor uw banners. ";
$GLOBALS['strNoViewLoggedInInterval']           = "Er zijn geen AdViews gelogd gedurende de dagen van dit rapport";
$GLOBALS['strNoClickLoggedInInterval']          = "Er zijn geen AdClicks gelogd gedurende de dagen van dit rapport";
$GLOBALS['strNoConversionLoggedInInterval']     = "Er zijn geen AdViews gelogd gedurende de dagen van dit rapport";
$GLOBALS['strMailReportPeriod']                 = "Dit rapport bevat de statistieken van {startdate} tot en met {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Dit rapport bevat alle statistieken tot en met {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Er zijn geen statistieken beschikbaar voor deze campagne";
$GLOBALS['strYourCampaign']                     = "Uw campagne";
$GLOBALS['strTheCampiaignBelongingTo']          = "De campagne behorend bij";

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
$GLOBALS['strAdminEmailWarnings']               = "Administrator e-mail waarschuwingen";
$GLOBALS['strAgencyEmailWarnings']              = "Agentschap e-mail waarschuwingen";
$GLOBALS['strAdveEmailWarnings']                = "Adverteerder e-mail waarschuwingen ";
$GLOBALS['strFullName']                         = "Volledige naam";
$GLOBALS['strEmailAddress']                     = "E-mail adres";
$GLOBALS['strUserDetails']                      = "Gebruikersdetails";
$GLOBALS['strLanguageTimezone']                 = "Taal en tijdzone";
$GLOBALS['strUserInterfacePreferences']         = "Gebruikersinterface voorkeuren";
$GLOBALS['strPluginPreferences']                = "Algemene voorkeuren";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Opbrengst";
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
$GLOBALS['strImpressionSR']                     = "AdViews";
$GLOBALS['strActualImpressions']                = "AdViews";

    // Short names
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
$GLOBALS['strClicks_short']                     = "AdClicks";

// Global Settings
$GLOBALS['strGlobalSettings']               = "Algemene instellingen";
$GLOBALS['strGeneralSettings']              = "Standaard instellingen";
$GLOBALS['strMainSettings']                 = "Hoofd instellingen";
$GLOBALS['strAdminSettings']                = "Administratie instellingen";
$GLOBALS['strPlugins']                      = "Plugins";


// Product Updates
$GLOBALS['strProductUpdates']         = "Nieuwe versies";
$GLOBALS['strFromVersion']            = "Van versie";
$GLOBALS['strToVersion']              = "Naar versie";
$GLOBALS['strInstallation']           = "Installatie";
$GLOBALS['strBackupDeleteConfirm']    = "Weet je zeker dat je alle back-ups wilt verwijderen, die gecreëerd zijn van deze upgrade?";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "Upgrade compleet";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "Upgrade mislukt";

// Agency
$GLOBALS['strAgencyManagement']              = "Account beheer";
$GLOBALS['strAgencies']                   = "Account";
$GLOBALS['strAddAgency']                   = "Voeg nieuw account toe";
$GLOBALS['strAddAgency_Key']               = "<u>V</u>oeg een zone toe";
$GLOBALS['strNoAgencies']                 = "Er zijn momenteel geen zones gedefinieerd";
$GLOBALS['strConfirmDeleteAgency']           = "Weet u zeker dat u deze zone wilt wissen?";
$GLOBALS['strInactiveAgenciesHidden']     = "niet-actieve banner(s) verborgen";

// Channels
$GLOBALS['strChannelToWebsite']           = "Alle websites";
$GLOBALS['strNoChannels']                 = "Er zijn momenteel geen banner gedefinieerd";
$GLOBALS['strNoChannelsAddWebsite']       = "Er zijn momenteel geen websites beschikbaar. Om een zone aan te maken, <a href='affiliate-edit.php'>voeg eerst een nieuwe website toe</a> .";

$GLOBALS['strConfirmDeleteChannel']       = "Weet u zeker dat u deze banner wilt verwijderen?";
$GLOBALS['strConfirmDeleteChannels']      = "Weet u zeker dat u deze banner wilt verwijderen?";

// Tracker Variables
$GLOBALS['strVariableDescription']     = "Beschrijving";
$GLOBALS['strTrackerType']          = "Tracker naam";


// Upload conversions
$GLOBALS['strYouHaveNoCampaigns']   = "Adverteerders & Campagnes";


// Password recovery
$GLOBALS['strForgotPassword']         = "Wachtwoord vergeten?";
$GLOBALS['strPasswordRecovery']       = "Wachtwoord herstellen";
$GLOBALS['strEmailRequired']          = "E-mail is een verplicht veld";
$GLOBALS['strPwdRecEmailNotFound']    = "E-mail adres is niet gevonden";
$GLOBALS['strPwdRecPasswordSaved']    = "Het nieuwe wachtwoord is ingesteld, ga verder om  <a href='index.php'>in te loggen</a>";
$GLOBALS['strPwdRecWrongId']          = "Verkeerde ID";
$GLOBALS['strPwdRecEnterEmail']       = "Geef uw e-mail adres onderaan";
$GLOBALS['strPwdRecEnterPassword']    = "Geef uw nieuw wachtwoord onderaan";
$GLOBALS['strPwdRecReset']            = "Wachtwoord reset";
$GLOBALS['strPwdRecResetLink']        = "Wachtwoord reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset wachtwoord van deze gebruiker";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s wachtwoord herstelling";
$GLOBALS['strNotifyPageMessage']      = "Een e-mail is naar u verzonden, deze bevat een link dat u de mogelijkheid bied om uw wachtwoord te resetten en in te loggen. <br />Gelieve enkele minuten te wachten eer de e-mail aankomt.<br />Indien u geen e-mail ontvangt, gelieve uw spam map na te kijken.<br /><a href='index.php'>Ga terug naar de login pagina.</a>";

// Audit
$GLOBALS['strAccountUserAssociation']   = "Account gebruikersgroep";
$GLOBALS['strImage']                    = "Afbeelding";
$GLOBALS['strCampaignZoneAssociation']      = "Campagne zonegroep";
$GLOBALS['strAccountPreferenceAssociation'] = "Account voorkeurengroep";


// Widget - Audit
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";


$GLOBALS['strUnsavedChanges']       = "Je hebt onopgeslagen zken op deze pagina, weet zeker dat alle  \"Save Changes\" zijn gedaan";

//confirmation messages











/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyUp']            = "o";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "z";
$GLOBALS['keyCollapseAll']    = "u";
$GLOBALS['keyExpandAll']    = "i";
$GLOBALS['keyAddNew']        = "v";
$GLOBALS['keyNext']            = "g";
$GLOBALS['keyPrevious']        = "r";

// Market entities

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Arabisch";
$GLOBALS['str_bg']                  = "Hongaars";
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
$GLOBALS['str_zh_CN']               = "Vereenvoudigd Chinees";
$GLOBALS['str_zh_TW']               = "Traditioneel Chinees";

?>
