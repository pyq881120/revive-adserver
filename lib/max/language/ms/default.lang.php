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


// Date & time configuration

// Formats used by PEAR Spreadsheet_Excel_Writer packate

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHelp']                     = "Bantuan";
$GLOBALS['strStartOver']                = "Mula kembali";
$GLOBALS['strNavigation']               = "Navigasi";
$GLOBALS['strAdminstration']            = "Inventori";
$GLOBALS['strMaintenance']              = "Baikpulih";
$GLOBALS['strProbability']              = "Kebarangkalian";
$GLOBALS['strInvocationcode']           = "Kod seruan";
$GLOBALS['strTrackerVariables']         = "Pembolehubah pencari jejak";
$GLOBALS['strBasicInformation']         = "Maklumat Asas";
$GLOBALS['strLoginInformation']         = "Maklumat Log Masuk";
$GLOBALS['strDetails']                  = "secara terperinci";
$GLOBALS['strCheckForUpdates']          = "Periksa untuk versi baru";
$GLOBALS['strCompact']                  = "Padat";
$GLOBALS['strUser']                     = "Pengguna";
$GLOBALS['strEdit']                     = "Menyunting";
$GLOBALS['strCreate']                   = "Mencipta";
$GLOBALS['strDuplicate']                = "Salinan";
$GLOBALS['strMoveTo']                   = "Pindah ke";
$GLOBALS['strDelete']                   = "Padam";
$GLOBALS['strActivate']                 = "Aktifkan";
$GLOBALS['strDeActivate']               = "Nyahaktifkan";
$GLOBALS['strConvert']                  = "Tukar";
$GLOBALS['strRefresh']                  = "Pamer kembali";
$GLOBALS['strSaveChanges']              = "Simpan penukaran";
$GLOBALS['strUp']                       = "Atas";
$GLOBALS['strDown']                     = "Bawah";
$GLOBALS['strSave']                     = "Simpan";
$GLOBALS['strCancel']                   = "Batal";
$GLOBALS['strPrevious']                 = "Yang dahulu";
$GLOBALS['strNext']                     = "Seterusnya";
$GLOBALS['strYes']                      = "Ya";
$GLOBALS['strNo']                       = "Tidak";
$GLOBALS['strNone']                     = "Tiada";
$GLOBALS['strOther']                    = "Lain-lain";
$GLOBALS['strUnlimited']                = "Tiada had";
$GLOBALS['strUntitled']                 = "Tiada tajuk";
$GLOBALS['strAll']                      = "Semua";
$GLOBALS['strAverage']                  = "Purata";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Kesemuanya";
$GLOBALS['strTotal']                    = "Jumlah";
$GLOBALS['strActive']                   = "Aktif";
$GLOBALS['strTo']                       = "kepada";
$GLOBALS['strLinkedTo']                 = "dihubungkan ke";
$GLOBALS['strDaysLeft']                 = "baki hari yang masih ada";
$GLOBALS['strCheckAllNone']             = "Tanda Semua / Tiada";
$GLOBALS['strShowAll']                  = "Papar Semua";
$GLOBALS['strWarning']                  = "Amaran";

// Dashboard
// Dashboard Errors

// Priority

// Properties

// User access
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;

// Login & Permissions
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strLogin']                    = "Log Masuk";
$GLOBALS['strPassword']                 = "Kata Laluan";

// General advertising

// Finance

// Time and date related
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");

// Advertiser
// Advertisers properties

// Campaign
$GLOBALS['strHiddenZone']                   = "Tiada";

// Campaign-zone linking page


// Campaign properties
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strCampaignStatusInactive']           = "Aktif";
$GLOBALS['strCampaignStatusDeleted']            = "Padam";

// Tracker



// Banners (General)


// Banner Preferences
$GLOBALS['strTypeHtmlAllow']                         = "Benarkan banner HTML";
$GLOBALS['strTypeTxtAllow']                          = "Benarkan Iklan Teks";

// Banner (Properties)

// Banner (advanced)

// Banner (swf)
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";

// Banner (network)

// Banner (AdSense)

// Display limitations


$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];

// Website
$GLOBALS['strAffiliateInvocation']      = "Kod seruan";

// Website (properties)

// Website (properties - payment information)

// Website (properties - other information)

// Zone
$GLOBALS['strZone']                         = "Tiada";
$GLOBALS['strZones']                        = "Tiada";


// Advanced zone settings

// Zone probability

// Linked banners/campaigns/trackers
$GLOBALS['strStatusDuplicate']          = "Salinan";
$GLOBALS['strConnTypeSale']             = "Simpan";

// Statistics

// Hosts

// Expiration

// Reports

// Admin_UI_Fields

// Userlog

// Code generation


// Errors
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";

//Validation


// Email

// Priority

// Preferences
$GLOBALS['strPreferences']                      = "Pilihan";
$GLOBALS['strAdminEmailWarnings']               = "Alamat emel Pentadbir";


// Statistics columns
// Long names

    // Short names

// Global Settings
$GLOBALS['strAdminSettings']                = "Konfigurasi Pentadbir";

$GLOBALS['strChooseSection']          = 'Pilih bahagian';

// Product Updates

// Agency

// Channels


// Tracker Variables


// Upload conversions


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

// Market entities

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/


?>
