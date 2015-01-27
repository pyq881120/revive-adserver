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
$GLOBALS['strHelp']                     = "Cymorth";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Cychwyn eto";
$GLOBALS['strNavigation']               = "Llywio";
$GLOBALS['strShortcuts']                = "Llwybrau Byr";
$GLOBALS['strActions']                  = "Gweithred";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Rhestren";
$GLOBALS['strMaintenance']              = "Cynnal";
$GLOBALS['strProbability']              = "Tebygolrwydd";
$GLOBALS['strInvocationcode']           = "Cod Actifadu";
$GLOBALS['strTrackerVariables']         = "Newidynnau Traciwr";
$GLOBALS['strBasicInformation']         = "Gwybodaeth Sylfaenol";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "Gwybodaeth mewngofnodi";
$GLOBALS['strLogoutURL']                = "Cyfeiriad gwe i ailgyfeirio iddo ar ôl allgofnodi. <br />Gwag fel rhagosodiad";
$GLOBALS['strAppendTrackerCode']        = "Atodi Cod Traciwr";
$GLOBALS['strOverview']                 = "Trosolwg";
$GLOBALS['strSearch']                   = "Chwilio";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "Manylion";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Gwirio am Ddiweddariadau";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Cywasgu";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "Defnyddiwr";
$GLOBALS['strEdit']                     = "Golygu";
$GLOBALS['strCreate']                   = "Creu";
$GLOBALS['strDuplicate']                = "Dyblygu";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Symud i";
$GLOBALS['strDelete']                   = "Dileu";
$GLOBALS['strActivate']                 = "Ysgogi";
$GLOBALS['strDeActivate']               = "Dad-ysgogi";
$GLOBALS['strConvert']                  = "Trosi";
$GLOBALS['strRefresh']                  = "Ail-lwytho";
$GLOBALS['strSaveChanges']              = "Cadw newidiadau";
$GLOBALS['strUp']                       = "I fyny";
$GLOBALS['strDown']                     = "I lawr";
$GLOBALS['strSave']                     = "Cadw";
$GLOBALS['strCancel']                   = "Canslo";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "Blaenorol";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Nesaf";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Iawn";
$GLOBALS['strNo']                       = "Na";
$GLOBALS['strNone']                     = "Dim";
$GLOBALS['strCustom']                   = "Addasu";
$GLOBALS['strDefault']                  = "Rhagosodiad";
$GLOBALS['strOther']                    = "Arall";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "Diderfyn";
$GLOBALS['strUntitled']                 = "Di-deitl";
$GLOBALS['strAll']                      = "popeth";
$GLOBALS['strAvg']                      = "Cyfartaledd";
$GLOBALS['strAverage']                  = "Cyfartaledd";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Cyffredinol";
$GLOBALS['strTotal']                    = "Cyfanswm";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "gweithredol";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "i";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "wedi cysylltu â";
$GLOBALS['strDaysLeft']                 = "Dyddiau ar ôl";
$GLOBALS['strCheckAllNone']             = "Gwirio popeth / dim";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>E</u>hangu popeth";
$GLOBALS['strCollapseAll']              = "<u>C</u>ywasgu popeth";
$GLOBALS['strShowAll']                  = "Dangos popeth";
$GLOBALS['strNoAdminInterface']         = "Mae'r sgrin gweinyddu wedi cael ei ddiffodd ar gyfer gwaith cynnal a chadw.  Ni fydd hyn yn effeithio ar eich ymgyrchoedd.";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "Mae'r meysydd canlynol yn cynnwys gwallau:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Cyn parhau, bydd angen i chi";
$GLOBALS['strFieldFixBeforeContinue2']  = "gywiro'r gwallau yma.";
$GLOBALS['strDelimiter']                = "Amffinydd";
$GLOBALS['strMiscellaneous']            = "Amrywiol";
$GLOBALS['strCollectedAllStats']        = "Holl ystadegau";
$GLOBALS['strCollectedToday']           = "Heddiw";
$GLOBALS['strCollectedYesterday']       = "Ddoe";
$GLOBALS['strCollectedThisWeek']        = "Yr wythnos hon";
$GLOBALS['strCollectedLastWeek']        = "Wythnos diwethaf";
$GLOBALS['strCollectedThisMonth']       = "Y mis hwn";
$GLOBALS['strCollectedLastMonth']       = "Mis diwethaf";
$GLOBALS['strCollectedLast7Days']       = "7 niwrnod diwethaf";
$GLOBALS['strCollectedSpecificDates']   = "Dyddiadau penodol";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "Gweinyddu";
$GLOBALS['strWarning']                  = "Rhybudd";
$GLOBALS['strNotice']                   = "Hysbysiad";
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
$GLOBALS['strPriority']                 = "Blaenoriaeth";
$GLOBALS['strPriorityLevel']            = "Lefel blaenoriaeth";
$GLOBALS['strPriorityTargeting']        = "Dosbarthiad";
$GLOBALS['strPriorityOptimisation']     = "Amrywiol"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Cyfyngiadau";
$GLOBALS['strNoLimitations']            = "Dim cyfyngiadau";
$GLOBALS['strCapping']                  = "Terfyn Uchaf";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Enw";
$GLOBALS['strSize']                     = "Maint";
$GLOBALS['strWidth']                    = "Lled";
$GLOBALS['strHeight']                   = "Uchder";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Targed";
$GLOBALS['strLanguage']                 = "Iaith";
$GLOBALS['strDescription']              = "Disgrifiad";
$GLOBALS['strVariables']                = "Newidynnau";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Sylwadau";

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
$GLOBALS['strLinkUserHelpUser']         = "Enw Defnyddiwr";
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
$GLOBALS['strUserProperties']           = "Priodweddau Baner";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "Dilysiad ";
$GLOBALS['strWelcomeTo']                = "Croeso i";
$GLOBALS['strEnterUsername']            = "Rhowch eich enw defnyddiwr a'ch cyfrinair i fewngofnodi";
$GLOBALS['strEnterBoth']                = "Rhowch eich enw defnyddiwr a'ch cyfrinair os gwelwch yn dda";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "Mewngofnodi";
$GLOBALS['strLogout']                   = "Allgofnodi";
$GLOBALS['strUsername']                 = "Enw Defnyddiwr";
$GLOBALS['strPassword']                 = "Cyfrinair";
$GLOBALS['strPasswordRepeat']           = "Ailadroddwch y cyfrinair";
$GLOBALS['strAccessDenied']             = "Gwadwyd mynediad";
$GLOBALS['strUsernameOrPasswordWrong']  = "Nid oedd yr enw defnyddiwr na'r/neu'r cyfrinair yn gywir. Rhowch gynnig arall arni.";
$GLOBALS['strPasswordWrong']            = "Nid yw'r cyfrinair yn gywir";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Your account does not have the required permissions to use this feature, you can log into another account to use it.";
$GLOBALS['strDuplicateClientName']      = "Mae'r enw defnyddiwr yn bodoli eisoes, defnyddiwch enw defnyddiwr gwahanol.";
$GLOBALS['strDuplicateAgencyName']      = "Mae'r enw defnyddiwr yn bodoli eisoes, defnyddiwch enw defnyddiwr gwahanol.";
$GLOBALS['strInvalidPassword']          = "Nid yw'r cyfrinair newydd yn ddilys, defnyddiwch gyfrinair gwahanol.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "Nid yw'r ddau gyfrinair a ddarparwyd gennych yr un peth";
$GLOBALS['strRepeatPassword']           = "Ailadroddwch y cyfrinair";
$GLOBALS['strOldPassword']              = "Hen gyfrinair";
$GLOBALS['strNewPassword']              = "Cyfrinair newydd";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "Ceisiadau";
$GLOBALS['strImpressions']              = "Argraffiadau";
$GLOBALS['strClicks']                   = "Cliciau";
$GLOBALS['strConversions']              = "Trawsnewidiadau";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Cymhareb Gwerthiant";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Cyfanswm Cliciau";
$GLOBALS['strTotalConversions']         = "Cyfanswm Trawsnewidiadau";
$GLOBALS['strViewCredits']              = "Credydau Argraffiadau";
$GLOBALS['strClickCredits']             = "Credydau Cliciau";
$GLOBALS['strConversionCredits']        = "Credydau Trawsnewidiadau";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Dyddiad Amser";
$GLOBALS['strTrackerID']                = "ID Traciwr";
$GLOBALS['strTrackerName']              = "Enw Traciwr";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Baneri";
$GLOBALS['strCampaigns']                = "Ymgyrch";
$GLOBALS['strCampaignID']               = "ID Ymgyrch";
$GLOBALS['strCampaignName']             = "Enw Ymgyrch";
$GLOBALS['strCountry']                  = "Gwlad";
$GLOBALS['strStatsAction']              = "Gweithred";
$GLOBALS['strWindowDelay']              = "Oediad Ffenest";
$GLOBALS['strStatsVariables']           = "Newidynnau";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Tenantiaeth Misol";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Dyddiad";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "Diwrnod";
$GLOBALS['strDays']                     = "Diwrnodau";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "Wythnos";
$GLOBALS['strWeeks']                    = "Wythnosau";
$GLOBALS['strSingleMonth']              = "Mis";
$GLOBALS['strMonths']                   = "Misoedd";
$GLOBALS['strDayOfWeek']                = "Diwrnod yr wythnos";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Awr";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "eiliadau";
$GLOBALS['strMinutes']                  = "munudau";
$GLOBALS['strHours']                    = "oriau";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "Hysbysebwr";
$GLOBALS['strClients']                      = "Hysbysebwyr";
$GLOBALS['strClientsAndCampaigns']          = "Hysbysebwyr a Ymgyrchoedd";
$GLOBALS['strAddClient']                    = "Ychwanegu hysbysebwr newydd";
$GLOBALS['strAddClient_Key']                = "Ychwanegu hysbysebwr <u>n</u>ewydd";
$GLOBALS['strTotalClients']                 = "Cyfanswm hysbysebwyr";
$GLOBALS['strClientProperties']             = "Priodweddau Hysbysebwr";
$GLOBALS['strClientHistory']                = "Hanes Hysbysebwr";
$GLOBALS['strNoClients']                    = "Nid oes unrhyw hysbysebwr wedi ei ddiffinio hyd yma. Er mwyn creu ymgyrch, <a href='advertiser-edit.php'>ychwanegwch hysbysebwr newydd.";
$GLOBALS['strNoClientsForBanners']          = "Nid oes unrhyw hysbysebwr wedi ei ddiffinio hyd yma. Er mwyn creu ymgyrch, <a href='advertiser-edit.php'>ychwanegwch hysbysebwr newydd.";
$GLOBALS['strConfirmDeleteClient']          = "Ydych chi wir am ddileu'r hysbysebwr yma?";
$GLOBALS['strConfirmDeleteClients']         = "Ydych chi wir am ddileu'r hysbysebwr yma?";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "Maint";
$GLOBALS['strHideInactive']                 = "Cuddio anweithredol";
$GLOBALS['strHideInactiveAdvertisers']      = "Cuddio hysbysebwyr anweithredol";
$GLOBALS['strInactiveAdvertisersHidden']    = "hysbysebw(y)r anweithredol wedi cuddio";
$GLOBALS['strOverallAdvertisers']           = "Hysbysebwyr";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Hysbysebwyr a Ymgyrchoedd";
// Advertisers properties
$GLOBALS['strContact']                          = "Cysylltu";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "Ebost";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "Ebostio adroddiadau trosglwyddo ymgyrch";
$GLOBALS['strNoDaysBetweenReports']             = "Nifer o ddyddiau rhwng adroddiadau trosglwyddo ymgyrch";
$GLOBALS['strSendDeactivationWarning']          = "Ebostio pan mae ymgyrch wedi ysgogi/dad-ysgogi yn awtomatig";
$GLOBALS['strAllowClientModifyInfo']            = "Caniatáu y defnyddiwr i addasu ei osodiadau ei hunan";
$GLOBALS['strAllowClientModifyBanner']          = "Caniatáu y defnyddiwr i newid ei faneri";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "Caniatáu y defnyddiwr i ddad-ysgogi ei faneri";
$GLOBALS['strAllowClientActivateBanner']        = "Caniatáu y defnyddiwr i ysgogi ei faneri";
$GLOBALS['strAllowClientViewTargetingStats']    = "Caniatáu y defnyddiwr i weld ystadegau targedi";
$GLOBALS['strAllowCreateAccounts']              = "Caniatáu i'r defnyddiwr greu cyfrifon newydd";
$GLOBALS['strCsvImportConversions']             = "Caniatáu y defnyddiwr i fewnforio trawsnewidiadau all-lein";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Caniatáu i'r defnyddiwr gyrchu y trywydd archwilio";

// Campaign
$GLOBALS['strCampaign']                     = "Ymgyrch";
$GLOBALS['strCampaigns']                    = "Ymgyrch";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Cyfanswm ymgyrchoedd";
$GLOBALS['strActiveCampaigns']              = "Ymgyrchoedd gweithredol";
$GLOBALS['strAddCampaign']                  = "Ychwanegu ymgyrch newydd";
$GLOBALS['strAddCampaign_Key']              = "Ychwanegu ymgyrch <u>n</u>ewydd";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "Newid ymgyrch";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "Dileu pob ymgyrch";
$GLOBALS['strLinkedCampaigns']              = "Ymgyrchoedd Cysylltiedig";
$GLOBALS['strCampaignStats']                = "Campaign Statistics";
$GLOBALS['strCampaignProperties']           = "Priodoleddau Ymgyrch";
$GLOBALS['strCampaignOverview']             = "Trosolwg ymgyrch";
$GLOBALS['strCampaignHistory']              = "Hanes Ymgyrch";
$GLOBALS['strNoCampaigns']                  = "There are currently no campaigns defined for this advertiser.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Ydych chi wir am ddileu pob ymgyrch o eiddo yr hysbysebwr yma?";
$GLOBALS['strConfirmDeleteCampaign']        = "Ydych chi wir am ddileu yr ymgyrch yma?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Ydych chi wir am ddileu yr ymgyrch yma?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Dangos hysbysebwyr rhiant";
$GLOBALS['strHideParentAdvertisers']        = "Cuddio hysbysebwyr rhiant";
$GLOBALS['strHideInactiveCampaigns']        = "Cuddio ymgyrchoedd sydd ddim yn weithredol";
$GLOBALS['strInactiveCampaignsHidden']      = "Ymgyrchoedd anweithredol wedi cuddio";
$GLOBALS['strContractDetails']              = "Manylion cytundeb";
$GLOBALS['strInventoryDetails']             = "Manylion rhestr eiddo";
$GLOBALS['strPriorityInformation']          = "Blaenoriaeth mewn perthynas ag ymgyrchoedd eraill";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Ymgyrch";
$GLOBALS['strHiddenAd']                     = "Hysbyseb";
$GLOBALS['strHiddenAdvertiser']             = "Hysbysebwr";
$GLOBALS['strHiddenTracker']                = "Traciwr";
$GLOBALS['strHiddenWebsite']              = "Gwefan";
$GLOBALS['strHiddenZone']                   = "Ardal";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Safleoli cymar";
$GLOBALS['strSelectUnselectAll']            = "Dewis / Dad-ddewis popeth";
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
$GLOBALS['strLow']                              = "Isel";
$GLOBALS['strHigh']                             = "Uchel";
$GLOBALS['strExpirationDate']                   = "Dyddiad Gorffen";
$GLOBALS['strExpirationDateComment']            = "Bydd yr ymgyrch yn gorffen ar ddiwedd y diwrnod yma";
$GLOBALS['strActivationDate']                   = "Dyddiad Cychwyn";
$GLOBALS['strActivationDateComment']            = "Bydd yr ymgyrch yn cychwyn ar gychwyn y diwrnod yma";
$GLOBALS['strRevenueInfo']                      = "Gwybodaeth Cyllid";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "Argraffiadau sy'n weddill";
$GLOBALS['strClicksRemaining']                  = "Cliciau sy'n weddill";
$GLOBALS['strConversionsRemaining']             = "Trawsnewidiadau sy'n weddill";
$GLOBALS['strImpressionsBooked']                = "Argraffiadau a Archebwyd";
$GLOBALS['strClicksBooked']                     = "Cliciau a Archebwyd";
$GLOBALS['strConversionsBooked']                = "Trawsnewidiadau a Archebwyd";
$GLOBALS['strCampaignWeight']                   = "Set the campaign weight";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimeiddio";
$GLOBALS['strAnonymous']                        = "Cuddio hysbysebwr a gwefannau'r ymgyrch hwn.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "y diwrnod.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Awtomatig - Dosbarthu y rhestren sy'n weddill yn gydradd dros y nifer o ddiwrnodau sy'n weddill.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Mae blaenoriaeth yr ymgyrch wedi ei osod i isel, \\nond mae'r pwysau wedi ei osod i sero neu nid yw wedi cael \\nei nodi. Bydd hyn yn achosi bod eich ymgyrch yn \\ncael ei ddad-ysgogi ac ni fydd y baneri yn cael eu trosglwyddo \\nnes bod y pwysau yn cael ei newid i rif dilys. \\n\\nYdych chi'n siwr eich bod am barhau?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Mae blaenoriaeth yr ymgyrch wedi ei osod i uchel, \\nond nid yw'r nifer darged o Argraffiadau wedi cael ei nodi.\\nBydd hyn yn achosi bod eich ymgyrch yn cael ei ddad-ysgogi \\nac ni fydd y baneri yn cael eu trosglwyddo nes bod rhif targed \\ndilys o Argraffiadau wedi cael ei osod. \\n\\nYdych chi'n siwr eich bod am barhau?";
$GLOBALS['strCampaignStatusPending']            = "Dan Ystyriaeth";
$GLOBALS['strCampaignStatusInactive']           = "gweithredol";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Saib";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Ailgychwyn";
$GLOBALS['strCampaignStatusDeleted']            = "Dileu";
$GLOBALS['strCampaignApprove']                  = "Cymeradwywyd ";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "Saib";
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
$GLOBALS['strCampaignType']                     = "Enw Ymgyrch";
$GLOBALS['strType']                             = "Math";
$GLOBALS['strContract']                         = "Cysylltu";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Cysylltu";
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
$GLOBALS['strTracker']                    = "Traciwr";
$GLOBALS['strTrackers']                   = "Traciwr";
$GLOBALS['strTrackerOverview']            = "Trosolwg Traciwr";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "Ychwanegu traciwr newydd";
$GLOBALS['strAddTracker_Key']             = "Ychwanegu traciwr <u>n</u>ewydd";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Ydych chi wir am ddileu pob traciwr o eiddo yr hysbysebwr yma?";
$GLOBALS['strConfirmDeleteTrackers']      = "Ydych chi wir am ddileu'r traciwr yma?";
$GLOBALS['strConfirmDeleteTracker']       = "Ydych chi wir am ddileu'r traciwr yma?";
$GLOBALS['strDeleteAllTrackers']          = "Dileu pob traciwr";
$GLOBALS['strTrackerProperties']          = "Priodweddau Traciwr";
$GLOBALS['strTrackerOverview']            = "Trosolwg Traciwr";
$GLOBALS['strModifyTracker']              = "Addasu Traciwr";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "Rhagosodiad Statws";
$GLOBALS['strStatus']                     = "Statws";
$GLOBALS['strLinkedTrackers']             = "Tracwyr Cysylltiedig";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Ffenest trawsnewidiadau";
$GLOBALS['strUniqueWindow']               = "Ffenest unigryw";
$GLOBALS['strClick']                      = "Clic";
$GLOBALS['strView']                       = "Golwg";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Argraffiadau";
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
$GLOBALS['strConversionType']             = "Math trawsnewidiad";
$GLOBALS['strLinkCampaignsByDefault']     = "Cysylltwch ymgyrchoedd newydd yn ddiofyn";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Baner";
$GLOBALS['strBanners']                       = "Baneri";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Ychwanegu baner newydd";
$GLOBALS['strAddBanner_Key']                 = "Ychwanegu baner <u>n</u>ewydd";
$GLOBALS['strBannerToCampaign']              = "Eich ymgyrch";
$GLOBALS['strModifyBanner']                  = "Addasu baner";
$GLOBALS['strActiveBanners']                 = "Baneri gweithredol";
$GLOBALS['strTotalBanners']                  = "Cyfanswm baneri";
$GLOBALS['strShowBanner']                    = "Dangos baner";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Dileu pob baner";
$GLOBALS['strActivateAllBanners']            = "Ysgogi pob baner";
$GLOBALS['strDeactivateAllBanners']          = "Dad-ysgogi pob baner";
$GLOBALS['strBannerOverview']                = "Trosolwg Baner";
$GLOBALS['strBannerProperties']              = "Priodweddau Baner";
$GLOBALS['strBannerHistory']                 = "Hanes Baner";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "There are currently no banners defined for this campaign.";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "Nid oes unrhyw wefan wedi cael ei ddiffinio hyd yma. I greu ardal, <a href='affiliate-edit.php'>ychwanegwch wefan newydd</a> yn gyntaf.";
$GLOBALS['strConfirmDeleteBanner']           = "Ydych chi wir am ddileu'r faner yma?";
$GLOBALS['strConfirmDeleteBanners']          = "Ydych chi wir am ddileu'r faner yma?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Ydych chi wir am ddileu pob baner o eiddo'r ymgyrch yma?";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "Dangos ymgyrchoedd rhiant";
$GLOBALS['strHideParentCampaigns']           = "Cuddio ymgyrchoedd rhiant";
$GLOBALS['strHideInactiveBanners']           = "Cuddio baneri anweithredol";
$GLOBALS['strInactiveBannersHidden']         = "baner(i) anweithredol wedi cuddio";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "Nid yw'n bosib atodi baneri eraill i hysbysebion testun.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Rhybudd, y canlynol o bosib ar goll";
$GLOBALS['strWarningMissingClosing']         = " closing tag \">\"";
$GLOBALS['strWarningMissingOpening']         = " opening tag \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Argymell Beth Bynnag";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Banner Preferences";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Default Banners";
$GLOBALS['strDefaultBannerUrl']                      = "Default Image URL";
$GLOBALS['strDefaultBannerDestination']              = "Default Destination URL";
$GLOBALS['strAllowedBannerTypes']                    = "Allowed Banner Types";
$GLOBALS['strTypeSqlAllow']                          = "Caniatáu Baneri Lleol SQL";
$GLOBALS['strTypeWebAllow']                          = "Caniatáu Baneri Lleol Gwe-weinydd";
$GLOBALS['strTypeUrlAllow']                          = "Caniatáu Baneri Allanol";
$GLOBALS['strTypeHtmlAllow']                         = "Caniatáu Baneri HTML";
$GLOBALS['strTypeTxtAllow']                          = "Caniatáu Hysbysebion Testun";
$GLOBALS['strTypeHtmlSettings']                      = "HTML Banner Options";
$GLOBALS['strTypeHtmlAuto']                          = "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']                           = "Caniatáu ymadroddion PHP i gael eu gweithredu oddi fewn i faner HTML";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Dewiswch math y baner";
$GLOBALS['strMySQLBanner']             = "Upload a local banner to the database";
$GLOBALS['strWebBanner']               = "Upload a local banner to the webserver";
$GLOBALS['strURLBanner']               = "Link an external banner";
$GLOBALS['strHTMLBanner']              = "Create an HTML banner";
$GLOBALS['strTextBanner']              = "Create a Text banner";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Ydych chi am gadw eich <br />llun presennol, neu ydych chi am <br />lanlwytho un arall?";
$GLOBALS['strUploadOrKeepAlt']        = "Ydych chi am gadw eich <br />llun wrth gefn presennol, neu ydych chi am <br />lanlwytho un arall?";
$GLOBALS['strNewBannerFile']         = "Dewiswch y llun yr ydych <br />am ei ddefnyddio ar gyfer y faner<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Dewiswch y llun wrth gefn yr ydych <br />am ei ddefnyddio rhag ofn <br />nad yw'r porwr yn cefnogi cyfryngau cyfoethog<br />";
$GLOBALS['strNewBannerURL']         = "URL Llun (cynnwys. http://)";
$GLOBALS['strURL']                     = "URL Gwefan (cynnwys. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Allweddeiriau";
$GLOBALS['strTextBelow']             = "Testun dan y llun";
$GLOBALS['strWeight']                 = "Pwysau";
$GLOBALS['strAlt']                     = "Testun Alt";
$GLOBALS['strStatusText']            = "Testun statws";
$GLOBALS['strBannerWeight']            = "Pwysau baner";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Baner HTML Generig";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generig";
$GLOBALS['strSwfTransparency']		   = "Caniatáu cefndir tryloyw";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Chwilio am ddolenni cod-caled tu fewn i'r ffeil Flash";
$GLOBALS['strConvertSWFLinks']        = "Trosi dolenni Flash";
$GLOBALS['strHardcodedLinks']        = "Dolenni cod-caled";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Cywasgu ffeil SWF ar gyfer lawrlwytho cynt (Chwaraewr Flash 6 yn ofynnol)";
$GLOBALS['strOverwriteSource']        = "Trosysgrifo paramedr ffynhonnell";
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
$GLOBALS['strModifyBannerAcl']            = "Dewisiadau Trosglwyddiad";
$GLOBALS['strACL']                        = "Trosglwyddo";
$GLOBALS['strACLAdd']                     = "Add delivery limitation";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Dim cyfyngiadau";
$GLOBALS['strApplyLimitationsTo']         = "Cymhwyso cyfyngiadau at";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Diddymu pob cyfyngiad";
$GLOBALS['strEqualTo']                    = "yn hafal i";
$GLOBALS['strDifferentFrom']              = "yn wahanol i";
$GLOBALS['strLaterThan']                  = "yn hwyrach na";
$GLOBALS['strLaterThanOrEqual']           = "yn hwyrach na neu yn hafal i";
$GLOBALS['strEarlierThan']                = "yn gynharach na";
$GLOBALS['strEarlierThanOrEqual']         = "yn gynharach na neu yn hafal i";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "yn fwy na";
$GLOBALS['strLessThan']                   = "yn llai na";
$GLOBALS['strAND']                        = "A";                          // logical operator
$GLOBALS['strOR']                         = "NEU";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Dangos y faner yma yn unig pan:";
$GLOBALS['strWeekDay']                    = "Dydd o'r wythnos";
$GLOBALS['strWeekDays']                   = "Dyddiau o'r wythnos";
$GLOBALS['strTime']                       = "Amser";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "Ffynhonnell";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Dinas";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Cyfyngiadau Trosglwyddo";

$GLOBALS['strDeliveryCapping']            = "Nenfwd trosglwyddo yr ymwelydd";
$GLOBALS['strDeliveryCappingReset']       = "Ailosod rhifydd golwg ar ôl:";
$GLOBALS['strDeliveryCappingTotal']       = "mewn cyfanswm";
$GLOBALS['strDeliveryCappingSession']     = "y sesiwn ";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Cyfyngu golygon baner i:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Cyfyngu golygon ymgyrch i:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Cyfyngu golygon ardal i:";

// Website
$GLOBALS['strAffiliate']                = "Gwefan";
$GLOBALS['strAffiliates']                 = "Gwefannau";
$GLOBALS['strAffiliatesAndZones']        = "Gwefannau ac Ardaloedd";
$GLOBALS['strAddNewAffiliate']            = "Ychwanegu gwefan newydd";
$GLOBALS['strAddNewAffiliate_Key']        = "Ychwanegu gwefan <u>n</u>ewydd";
$GLOBALS['strAddAffiliate']                = "Create website";
$GLOBALS['strAffiliateProperties']        = "Priodweddau Gwefan";
$GLOBALS['strAffiliateOverview']        = "Website Overview";
$GLOBALS['strAffiliateHistory']            = "Hanes Gwefan";
$GLOBALS['strZonesWithoutAffiliate']    = "Ardaloedd heb wefan";
$GLOBALS['strMoveToNewAffiliate']        = "Symud i wefan newydd";
$GLOBALS['strNoAffiliates']                = "Nid oes unrhyw wefan wedi cael ei ddiffinio hyd yma. I greu ardal, <a href='affiliate-edit.php'>ychwanegwch wefan newydd</a> yn gyntaf.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Ydych chi wir am ddileu'r wefan yma?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Ydych chi wir am ddileu'r wefan yma?";
$GLOBALS['strMakePublisherPublic']        = "Gwneud yr ardaloedd o eiddo y wefan yma yn rhai cyhoeddus";
$GLOBALS['strAffiliateInvocation']      = "Cod Actifadu";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Cyfanswm gwefannau";
$GLOBALS['strInactiveAffiliatesHidden'] = "gwefan(nau) anweithredol wedi cuddio";
$GLOBALS['strShowParentAffiliates']     = "Dangos gwefannau rhiant";
$GLOBALS['strHideParentAffiliates']     = "Cuddio gwefannau rhiant";

// Website (properties)
$GLOBALS['strWebsite']                      = "Gwefan";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Cofrif";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Caniatáu y defnyddiwr i addasu ei osodiadau ei hunan";
$GLOBALS['strAllowAffiliateModifyZones']    = "Caniatáu i'r defnyddiwr newid ei ardaloedd ei hunan";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Caniatáu i'r defnyddiwr gysylltu baneri i'w ardaloedd ei hunan";
$GLOBALS['strAllowAffiliateAddZone']        = "Caniatáu i'r defnyddiwr ddiffinio ardaloedd newydd";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Caniatáu i'r defnyddiwr ddileu ardaloedd presennol";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Caniatáu i'r defnyddiwr gynhyrchu cod actifadu ei hunan";
$GLOBALS['strAllowAffiliateZoneStats']      = "Caniatáu y defnyddiwr i weld ystadegau ardal";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Caniatáu y defnyddiwr i weld trawsnewidiadau sydd wedi eu cymeradwyo neu sydd dan ystyriaeth yn unig";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Manylion tâl";
$GLOBALS['strAddress']                      = "Cyfeiriad";
$GLOBALS['strPostcode']                     = "Cod Post";
$GLOBALS['strCity']                         = "Dinas";
$GLOBALS['strCountry']                      = "Gwlad";
$GLOBALS['strPhone']                        = "Ffôn";
$GLOBALS['strFax']                          = "Ffacs";
$GLOBALS['strAccountContact']               = "Cyswllt cyfrif";
$GLOBALS['strPayeeName']                    = "Enw derbynnydd tâl";
$GLOBALS['strTaxID']                        = "ID Treth";
$GLOBALS['strModeOfPayment']                = "Dull talu";
$GLOBALS['strPaymentChequeByPost']          = "Siec trwy'r post";
$GLOBALS['strCurrency']                     = "Arian Cyfred ";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Gwybodaeth arall";
$GLOBALS['strUniqueUsersMonth']             = "Defnyddwyr unigryw/mis";
$GLOBALS['strUniqueViewsMonth']             = "Golygon unigryw/mis";
$GLOBALS['strPageRank']                     = "Gradd tudalen";
$GLOBALS['strCategory']                     = "Categori";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Ffeil cymorth";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Gwefannau ac Ardaloedd";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Ardal";
$GLOBALS['strZones']                        = "Ardaloedd";
$GLOBALS['strAddNewZone']                   = "Ychwanegu ardal newydd";
$GLOBALS['strAddNewZone_Key']               = "Ychwanegu ardal <u>n</u>ewydd";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "Addasu ardal";
$GLOBALS['strZoneToWebsite']                = "Pob gwefan";
$GLOBALS['strLinkedZones']                  = "Ardaloedd cysylltiedig";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Trosolwg Ardal";
$GLOBALS['strZoneProperties']               = "Priodweddau Ardal";
$GLOBALS['strZoneHistory']                  = "Hanes Ardal";
$GLOBALS['strNoZones']                      = "There are currently no zones defined for this website.";
$GLOBALS['strNoZonesAddWebsite']            = "Nid oes unrhyw wefan wedi cael ei ddiffinio hyd yma. I greu ardal, <a href='affiliate-edit.php'>ychwanegwch wefan newydd</a> yn gyntaf.";
$GLOBALS['strConfirmDeleteZone']            = "Ydych chi wir am ddileu yr ardal yma?";
$GLOBALS['strConfirmDeleteZones']           = "Ydych chi wir am ddileu yr ardal yma?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Math ardal";
$GLOBALS['strBannerButtonRectangle']        = "Baner, Botwm neu Betryal";
$GLOBALS['strInterstitial']                 = "DHTML Interstitaidd neu Arnawf";
$GLOBALS['strPopup']                        = "Naidlen";
$GLOBALS['strTextAdZone']                   = "Hysbyseb Testun";
$GLOBALS['strEmailAdZone']                  = "Ardal Ebost/Cylchlythyr";
$GLOBALS['strZoneClick']                    = "Ardal tracio cliciau";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Dangos baneri sy'n cydweddu";
$GLOBALS['strHideMatchingBanners']          = "Cuddio baneri sy'n cydweddu";
$GLOBALS['strBannerLinkedAds']              = "Baneri sy'n gysylltiedig i'r ardal";
$GLOBALS['strCampaignLinkedAds']            = "Ymgyrchoedd sy'n gysylltiedig i'r ardal";
$GLOBALS['strTotalZones']                   = "Cyfanswm ardaloedd";
$GLOBALS['strInactiveZonesHidden']          = "ardal(oedd) anweithredol wedi cuddio";
$GLOBALS['strWarnChangeZoneType']           = "Bydd newid math yr ardal i testun neu ebost yn dad-gysylltu pob baner/ymgyrch oherwydd cyfyngderau'r mathau yma o ardaloedd\\n<ul>\\n<li>Gall ardaloedd testun gysylltu i hysbysebion testun yn unig</li>\\n<li>Gall ymgyrchoedd ardal ebost ddim ond gael un faner weithredol ar y tro</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Bydd newid maint yr ardal yn dad-gysylltu unrhyw faneri sydd ddim o\'r maint newydd, ac yn ychwanegu unrhyw faneri o ymgyrchoedd cysylltiedig sydd o\'r maint newydd';
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
$GLOBALS['strAdvanced']                    = "Uwch";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "Gosodiadau cadwyn";
$GLOBALS['strZoneNoDelivery']            = "Os na ellir trosglwyddo unrhyw <br />faneri o'r ardal hon, ceisiwch...";
$GLOBALS['strZoneStopDelivery']            = "Atal trosglwyddo a peidio dangos baner";
$GLOBALS['strZoneOtherZone']            = "Arddangos yr ardal dewisedig yn lle";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "Atodi y cod HTML canlynol i faneri sy'n cael eu harddangos gan yr ardal hon bob tro";
$GLOBALS['strAppendSettings']            = "Gosodiadau Atodi a Rhagddodi";
$GLOBALS['strZoneForecasting']            = "Gosodiadau Rhagolygi ardal";
$GLOBALS['strZonePrependHTML']            = "Rhagddodi y cod HTML i hysbysebion testun sy'n cael eu harddangos gan yr ardal hon bob tro";
$GLOBALS['strZoneAppendHTML']            = "Atodi y cod HTML i hysbysebion testun sy'n cael eu harddangos gan yr ardal hon bob tro";
$GLOBALS['strZoneAppendNoBanner']        = "Atodi hyd yn oed os na drosglwyddir baner";
$GLOBALS['strZoneAppendType']            = "Math atodi";
$GLOBALS['strZoneAppendHTMLCode']        = "Cod HTML";
$GLOBALS['strZoneAppendZoneSelection']    = "Naidlen neu interstitaidd";
$GLOBALS['strZoneAppendSelectZone']        = "Atodi y naidlen neu interstitaidd canlynol i faneri sy'n cael eu harddangos gan yr ardal hon bob tro";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Mae'r holl faneri sydd wedi'u cysylltu i'r ardal dewisedig yn anweithredol ar hyn o bryd. <br />Dyma'r gadwyn ardal a fydd yn cael ei ddilyn:";
$GLOBALS['strZoneProbNullPri']            = "Nid oes unrhyw faneri gweithredol wedi'u cysylltu i'r ardal hon.";
$GLOBALS['strZoneProbListChainLoop']    = "Byddai dilyn y gadwyn ardal yn achosi dolen gron. Mae trosglwyddo i'r ardal hon wedi ei atal.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Dewiswch beth i gysylltu i'r ardal hon";
$GLOBALS['strLinkedBanners']            = "Cysylltu baneri unigol";
$GLOBALS['strCampaignDefaults']            = "Cysylltu baneri wrth yr ymgyrch rhiant";
$GLOBALS['strLinkedCategories']         = "Cysylltu baneri wrth y categori";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "Allweddair";
$GLOBALS['strIncludedBanners']            = "Baneri Cysylltiedig";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "Nid oes unrhyw ardal ar gael y gellir cysylltu'r baner â hi";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} baner sy'n cydweddu";
$GLOBALS['strNoCampaignsToLink']        = "Nid oes unrhyw ymgyrch ar gael y gellir ei gysylltu i'r ardal hon";
$GLOBALS['strNoTrackersToLink']            = "Nid oes unrhyw draciwr ar gael y gellir ei gysylltu i'r ymgyrch hon";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Nid oes unrhyw ardal ar gael y gellir cysylltu'r ymgyrch â hi";
$GLOBALS['strSelectBannerToLink']        = "Dewiswch y faner yr hoffech chi gysylltu â'r ardal hon:";
$GLOBALS['strSelectCampaignToLink']        = "Dewiswch yr ymgyrch yr hoffech chi gysylltu â'r ardal hon:";
$GLOBALS['strSelectAdvertiser']         = "Dewiswch Hysbysebwr";
$GLOBALS['strSelectPlacement']          = "Dewiswch Ymgyrch";
$GLOBALS['strSelectAd']                 = "Dewiswch Faner";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Atodi Côd Traciwr";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Dan Ystyriaeth";
$GLOBALS['strStatusApproved']           = "Cymeradwywyd ";
$GLOBALS['strStatusDisapproved']        = "Anghymeradwywyd";
$GLOBALS['strStatusDuplicate']          = "Dyblygu";
$GLOBALS['strStatusOnHold']             = "Ar Aros";
$GLOBALS['strStatusIgnore']             = "Anwybyddu";
$GLOBALS['strConnectionType']           = "Math";
$GLOBALS['strConnTypeSale']             = "Gwerthiant";
$GLOBALS['strConnTypeLead']             = "Blaenydd";
$GLOBALS['strConnTypeSignUp']           = "Cofrestru";
$GLOBALS['strShortcutEditStatuses'] = "Golygu statysau";
$GLOBALS['strShortcutShowStatuses'] = "Dangos statysau";

// Statistics
$GLOBALS['strStats']                     = "Ystadegau";
$GLOBALS['strNoStats']                   = "Nid oes unrhyw ystadegau ar gael ar hyn o bryd";
$GLOBALS['strNoTargetingStats']          = "Nid oes unrhyw ystadegau targedu ar gael ar hyn o bryd";
$GLOBALS['strNoStatsForPeriod']          = "Nid oes unrhyw ystadegau ar gael ar gyfer cyfnod %s i %s ar hyn o bryd";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Nid oes unrhyw ystadegau targedu ar gael ar gyfer cyfnod %s i %s ar hyn o bryd";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "Hanes Eang";
$GLOBALS['strDailyHistory']              = "Hanes dyddiol";
$GLOBALS['strDailyStats']                = "Ystadegau dyddiol";
$GLOBALS['strWeeklyHistory']             = "Hanes wythnosol";
$GLOBALS['strMonthlyHistory']            = "Hanes misol";
$GLOBALS['strCreditStats']               = "Ystadegau credyd";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "Cyfanswm ar gyfer cyfnod";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Dosbarthiad gwefan";
$GLOBALS['strCampaignDistribution']      = "Dosbarthiad Ymgyrch";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Ystadegau Targedi";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Golwg gan";
$GLOBALS['strBreakdownByDay']            = "Diwrnod";
$GLOBALS['strBreakdownByWeek']           = "Wythnos";
$GLOBALS['strBreakdownByMonth']          = "Mis";
$GLOBALS['strBreakdownByDow']            = "Diwrnod yr wythnos";
$GLOBALS['strBreakdownByHour']           = "Awr";
$GLOBALS['strItemsPerPage']              = "Eitem y tudalen";
$GLOBALS['strDistributionHistory']       = "Hanes Dosbarthiad";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Dangos yr Ystadegau fel <u>G</u>raff";
$GLOBALS['strExportStatisticsToExcel']   = "Allforio'r Ystadegau i Excel";
$GLOBALS['strGDnotEnabled']              = "You must have GD enabled in PHP to display graphs. <br />Please see <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for more information, including how to install GD on your server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "Dod i ben";
$GLOBALS['strNoExpiration']           = "Dyddiad dod i ben heb ei osod";
$GLOBALS['strEstimated']              = "Dyddiad dod i ben amcangyfrifol";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Hanes ymgyrch";

// Reports
$GLOBALS['strReports']                = "Adroddiadau";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "Dyddiad Cychwyn";
$GLOBALS['strEndDate']                = "Dyddiad Gorffen";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Cyfyngiadau";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Pob hysbysebwr";
$GLOBALS['strAnonAdvertisers']           = "Hysbysebwyr anhysbys";
$GLOBALS['strAllPublishers']             = "Pob gwefan";
$GLOBALS['strAnonPublishers']            = "Gwefannau anhysbys";
$GLOBALS['strAllAvailZones']             = "Pob ardal posib";

// Userlog
$GLOBALS['strUserLog']                = "Log Defnyddiwr";
$GLOBALS['strUserLogDetails']        = "Manylion log defnyddiwr";
$GLOBALS['strDeleteLog']            = "Dileu log";
$GLOBALS['strAction']                = "Gweithred";
$GLOBALS['strNoActionsLogged']        = "Dim gweithredoedd wedi'u logio";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Dewis uniongyrchol";
$GLOBALS['strChooseInvocationType']        = "Dewiswch y math o actifadu baneri";
$GLOBALS['strGenerate']                    = "Cynhyrchu";
$GLOBALS['strParameters']                = "Gosodiadau Tagiau";
$GLOBALS['strFrameSize']                = "Maint ffram";
$GLOBALS['strBannercode']                = "Codbaner";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Mynd yn ôl i'r rhestr adroddiadau";
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
$GLOBALS['strLogErrorClients']                  = "[Hysbysebionphp] Bu gwall wrth geisio nôl yr hysbysebwyr o'r gronfa ddata.";
$GLOBALS['strLogErrorBanners']                  = "[Hysbysebionphp] Bu gwall wrth geisio nôl y baneri o'r gronfa ddata.";
$GLOBALS['strLogErrorViews']                    = "[Hysbysebionphp] Bu gwall wrth geisio nôl yr Argraffiadau o'r gronfa ddata.";
$GLOBALS['strLogErrorClicks']                   = "[Hysbysebionphp] Bu gwall wrth geisio nôl yr Cliciau o'r gronfa ddata.";
$GLOBALS['strLogErrorConversions']              = "[Hysbysebionphp] Bu gwall wrth geisio nôl yr Trawsnewidiadau o'r gronfa ddata.";
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Methwyd darganfod cydweddiadau";
$GLOBALS['strErrorOccurred']                    = "Bu gwall";
$GLOBALS['strErrorUploadSecurity']              = "Problem diogelwch posibl, lanlwytho wedi atal!";
$GLOBALS['strErrorUploadBasedir']               = "Could not access uploaded file, probably due to safemode or open_basedir restrictions";
$GLOBALS['strErrorUploadUnknown']               = "Could not access uploaded file, due to an unknown reason. Please check your PHP configuration";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "Bu gwall tra'n cyrchu'r gronfa ddata";
$GLOBALS['strErrorDBSerious']                   = "Datgelwyd problem ddifrifol gyda'r gronfa ddata";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "The database table is probably corrupt and needs to be repaired. For more information about repairing corrupted tables please read the chapter <i>Troubleshooting</i> of the <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact']                   = "Cysylltwch â gweinyddwr y gweinydd a'i hysbysu o'r broblem.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "It was not possible to link this banner to this zone because:";
$GLOBALS['strUnableToLinkBanner']               = "Methwyd cysylltu'r baner:";
$GLOBALS['strErrorEditingCampaign']             = "Gwall diweddaru'r ymgyrch:";
$GLOBALS['strUnableToChangeCampaign']           = "Methwyd gweithredu'r newidiad oherwydd:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Methwyd gweithredu'r newidiad oherwydd:";
$GLOBALS['strDatesConflict']                    = "dyddiadau'n gwrthdaro gyda:";
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
$GLOBALS['strSirMadam']                         = "Syr/Madam";
$GLOBALS['strMailSubject']                      = "Adroddiad Hysbysebwr";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Annwyl{contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Isod byddwch yn darganfod ystadegau baner ar gyfer {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Ymgyrch wedi ysgogi";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Ymgyrch wedi dad-ysgogi";
$GLOBALS['strMailBannerActivated']              = "Mae eich ymgyrch a ddangosir isod wedi cael ei ysgogi achos\\nbod y dyddiad ysgogi ymgyrch wedi cael ei gyrraedd.";
$GLOBALS['strMailBannerDeactivated']            = "Mae eich ymgyrch a ddangosir isod wedi cael ei ddad-ysgogi achos";
$GLOBALS['strMailFooter']                       = "Cofion,\\n{adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "Os hoffech chi barhau i hysbysebu ar ein gwefan, cysylltwch â ni.\\nByddwn yn falch o glywed gennych.";
$GLOBALS['strClientDeactivated']                = "Nid yw'r ymgyrch yn weithredol ar hyn o bryd oherwydd";
$GLOBALS['strBeforeActivate']                   = "nad yw'r dyddiad ysgogi wedi cyrraedd eto";
$GLOBALS['strAfterExpire']                      = "nad yw'r dyddiad gorffen weddi cyrraedd";
$GLOBALS['strNoMoreImpressions']                = "nad oes Argraffiadau yn weddill";
$GLOBALS['strNoMoreClicks']                     = "nad oes Cliciau yn weddill";
$GLOBALS['strNoMoreConversions']                = "nad oes gwerthiannau yn weddill";
$GLOBALS['strWeightIsNull']                     = "bod y pwysau wedi ei osod i sero";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "The Impressions, Clicks, or Conversions left for your banners are getting below {limit}. \\nYour banners will be disabled when there are no Impressions, Clicks, or Conversions left. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Argraffiadau/Cliciau/Trawsnewidiadau yn isel";
$GLOBALS['strNoViewLoggedInInterval']           = "Ni logiwyd unrhyw Argraffiadau yn ystod cyfnod yr adroddiad hwn";
$GLOBALS['strNoClickLoggedInInterval']          = "Ni logiwyd unrhyw Gliciau yn ystod cyfnod yr adroddiad hwn";
$GLOBALS['strNoConversionLoggedInInterval']     = "Ni logiwyd unrhyw Drawsnewidiadau yn ystod cyfnod yr adroddiad hwn";
$GLOBALS['strMailReportPeriod']                 = "Mae'r adroddiad hwn yn cynnwys ystadegau o {startdate} hyd at {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Mae'r adroddiad hwn yn cynnwys yr holl ystadegau hyd at {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Nid oes ystadegau ar gael ar gyfer yr ymgyrch hon";
$GLOBALS['strImpendingCampaignExpiry']          = "Diwedd cyfnod yr ymgyrch yn agos";
$GLOBALS['strYourCampaign']                     = "Eich ymgyrch";
$GLOBALS['strTheCampiaignBelongingTo']          = "Yr ymgyrch sy'n perthyn i";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "Mae {clientname} a ddangosir isod yn dod i ben ar {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "Mae gan {clientname} a ddangosir isod lai na {limit} argraffiad yn weddill.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "Blaenoriaeth";
$GLOBALS['strSourceEdit']                       = "Golygu Ffynonellau";

// Preferences
$GLOBALS['strPreferences']                      = "Dewisiadau";
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
$GLOBALS['strInvocationPreferences']            = "Dewisiadau Actifadu";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Revenue";
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
$GLOBALS['strImpressionSR']                     = "Argraffiadau";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Argraffiadau";
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
$GLOBALS['strClicks_short']                     = "Cliciau";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Gosodiadau Cyffredinol";
$GLOBALS['strGeneralSettings']              = "Gosodiadau Cyffredinol";
$GLOBALS['strMainSettings']                 = "Prif Osodiadau";
$GLOBALS['strAdminSettings']                = "Gosodiadau Gweinyddwr";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Diweddariadau Cynnyrch";
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
$GLOBALS['strAddAgency_Key']               = "Ychwanegu ardal <u>n</u>ewydd";
$GLOBALS['strTotalAgencies']               = "Total accounts";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "Nid oes unrhyw gyfrifon wedi eu diffinio eto";
$GLOBALS['strConfirmDeleteAgency']           = "Ydych chi wir am ddileu y cyfrif yma?";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive accounts";
$GLOBALS['strInactiveAgenciesHidden']     = "cyfrif(on) anweithredol wedi cuddio";
$GLOBALS['strAllowAgencyEditConversions'] = "Caniatáu y defnyddiwr i olygu trawsnewidiadau";
$GLOBALS['strAllowMoreReports']           = "Caniatáu botwm 'Mwy o Adroddiadau'";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "Targeting Channels";
$GLOBALS['strChannelOverview']            = "Targeting Channel Overview";
$GLOBALS['strChannelManagement']          = "Targeting Channel Management";
$GLOBALS['strAddNewChannel']              = "Add new Targeting Channel";
$GLOBALS['strAddNewChannel_Key']          = "Add <u>n</u>ew Targeting Channel";
$GLOBALS['strChannelToWebsite']           = "Pob gwefan";
$GLOBALS['strNoChannels']                 = "There are currently no targeting channels defined";
$GLOBALS['strNoChannelsAddWebsite']       = "Nid oes unrhyw wefan wedi cael ei ddiffinio hyd yma. I greu ardal, <a href='affiliate-edit.php'>ychwanegwch wefan newydd</a> yn gyntaf.";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "Targeting Channel properties";
$GLOBALS['strChannelLimitations']         = "Dewisiadau Trosglwyddiad";
$GLOBALS['strConfirmDeleteChannel']       = "Ydych chi wir am ddileu yr ymgyrch yma?";
$GLOBALS['strConfirmDeleteChannels']      = "Ydych chi wir am ddileu yr ymgyrch yma?";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Variable Name";
$GLOBALS['strVariableDescription']     = "Disgrifiad";
$GLOBALS['strVariableDataType']         = "Data Type";
$GLOBALS['strVariablePurpose']       = "Purpose";
$GLOBALS['strGeneric']               = "Generig";
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
$GLOBALS['strTrackerType']          = "Enw Traciwr";
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
$GLOBALS['strYouHaveNoCampaigns']   = "Hysbysebwyr a Ymgyrchoedd";
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
$GLOBALS['strCampaignAuditTrailSetup']   = "Ysgogi Trywydd Archwilio er mwyn cychwyn gweld Ymgyrchoedd";

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
