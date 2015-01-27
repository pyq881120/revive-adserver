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
$GLOBALS['strHelp']                     = "Bantuan";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Mulai dari semula";
$GLOBALS['strNavigation']               = "Navigasi";
$GLOBALS['strShortcuts']                = "Jalan Pintas";
$GLOBALS['strActions']                  = "Aksi";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Inventori";
$GLOBALS['strMaintenance']              = "Pemeliharaan";
$GLOBALS['strProbability']              = "Kemungkinan";
$GLOBALS['strInvocationcode']           = "Invokasi Kode";
$GLOBALS['strTrackerVariables']         = "Variabel Pelacak";
$GLOBALS['strBasicInformation']         = "Informasi Dasar";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Informasi Kontrak";
$GLOBALS['strLoginInformation']         = "Informasi Login";
$GLOBALS['strLogoutURL']                = "URL pengalihan setelah Logout. <br />Kosong untuk Default";
$GLOBALS['strAppendTrackerCode']        = "Tempelkan kode pelacak";
$GLOBALS['strOverview']                 = "Pandangan Menyeluruh";
$GLOBALS['strSearch']                   = "<u>C</u>ari";
$GLOBALS['strHistory']                  = "Proses Pembuatan";
$GLOBALS['strDetails']                  = "Perincian";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Periksa adanya Update";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Kompak";
$GLOBALS['strVerbose']                  = "Secara terperinci";
$GLOBALS['strUser']                     = "Pengguna";
$GLOBALS['strEdit']                     = "Edit";
$GLOBALS['strCreate']                   = "Ciptakan";
$GLOBALS['strDuplicate']                = "Mendobelkan";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Pindahkan ke";
$GLOBALS['strDelete']                   = "Hapus";
$GLOBALS['strActivate']                 = "Aktifkan";
$GLOBALS['strDeActivate']               = "Hentikan";
$GLOBALS['strConvert']                  = "Tukarkan";
$GLOBALS['strRefresh']                  = "Menyegarkan";
$GLOBALS['strSaveChanges']              = "Simpan Perubahan";
$GLOBALS['strUp']                       = "Keatas";
$GLOBALS['strDown']                     = "Kebawah";
$GLOBALS['strSave']                     = "Simpan";
$GLOBALS['strCancel']                   = "Batal";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "Sebelumnya";
$GLOBALS['strPrevious_Key']             = "<u>S</u>ebelumnya";
$GLOBALS['strNext']                     = "Berikutnya";
$GLOBALS['strNext_Key']                 = "<u>B</u>erikutnya";
$GLOBALS['strYes']                      = "Ya";
$GLOBALS['strNo']                       = "Tidak";
$GLOBALS['strNone']                     = "Belum ditentukan";
$GLOBALS['strCustom']                   = "Langgam";
$GLOBALS['strDefault']                  = "Default";
$GLOBALS['strOther']                    = "Yang lain";
$GLOBALS['strUnknown']                  = "Tidak dikenal";
$GLOBALS['strUnlimited']                = "Tidak terbatas";
$GLOBALS['strUntitled']                 = "Tanpa nama";
$GLOBALS['strAll']                      = "semua";
$GLOBALS['strAvg']                      = "Rata-rata";
$GLOBALS['strAverage']                  = "Rata-rata";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Seluruhnya";
$GLOBALS['strTotal']                    = "Jumlah";
$GLOBALS['strUnfilteredTotal']          = "Jumlah (tanpa disaring)";
$GLOBALS['strFilteredTotal']            = "Jumlah (disaring)";
$GLOBALS['strActive']                   = "aktif";
$GLOBALS['strFrom']                     = "Dari";
$GLOBALS['strTo']                       = "ke";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "dihubungkan pada";
$GLOBALS['strDaysLeft']                 = "Hari yang tersisa";
$GLOBALS['strCheckAllNone']             = "Pilih semua / tdk satupun";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>M</u>eluaskan semua";
$GLOBALS['strCollapseAll']              = "<u>M</u>elipatkan semua";
$GLOBALS['strShowAll']                  = "Tampilkan semua";
$GLOBALS['strNoAdminInterface']         = "Pelayanan tidak dapat dicapai...";
$GLOBALS['strFilterBySource']           = "Saring sesuai sumber";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "Kotak berikut berisi kesalahan:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Sebelum melanjut Anda perlu";
$GLOBALS['strFieldFixBeforeContinue2']  = "perbaiki kesalahan tersebut.";
$GLOBALS['strDelimiter']                = "Pemisah";
$GLOBALS['strMiscellaneous']            = "Lain-Lain";
$GLOBALS['strCollectedAllStats']        = "Kumpulan seluruh statistik";
$GLOBALS['strCollectedToday']           = "Statistik hari ini saja";
$GLOBALS['strCollectedYesterday']       = "Kemarin";
$GLOBALS['strCollectedThisWeek']        = "Minggu ini";
$GLOBALS['strCollectedLastWeek']        = "Minggu terakhir";
$GLOBALS['strCollectedThisMonth']       = "Bulan ini";
$GLOBALS['strCollectedLastMonth']       = "Bulan terakhir";
$GLOBALS['strCollectedLast7Days']       = "7 hari terakhir";
$GLOBALS['strCollectedSpecificDates']   = "Tanggal-tanggal tertentu";
$GLOBALS['strDifference']               = "Perbedaan (%)";
$GLOBALS['strPercentageOfTotal']        = "% dari keseluruhan";
$GLOBALS['strValue']                    = "Nilai";
$GLOBALS['strAdmin']                    = "Admin";
$GLOBALS['strWarning']                  = "Warning";
$GLOBALS['strNotice']                   = "Untuk diperhatikan";
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
$GLOBALS['strPriority']                 = "Prioritas";
$GLOBALS['strPriorityLevel']            = "Tingkat Prioritas";
$GLOBALS['strPriorityTargeting']        = "Distribusi";
$GLOBALS['strPriorityOptimisation']     = "Lain-Lain"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Iklan dengan prioritas tinggi";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Iklan dengan prioritas rendah";
$GLOBALS['strLimitations']              = "Limitasi";
$GLOBALS['strNoLimitations']            = "Tanpa batas";
$GLOBALS['strCapping']                  = "Pemangkasan";
$GLOBALS['strCapped']                   = "Dipangkas";
$GLOBALS['strNoCapping']                = "Tanpa pemangkasan";

// Properties
$GLOBALS['strName']                     = "Nama";
$GLOBALS['strSize']                     = "Ukuran";
$GLOBALS['strWidth']                    = "Lebar";
$GLOBALS['strHeight']                   = "Tinggi";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Target";
$GLOBALS['strLanguage']                 = "Bahasa";
$GLOBALS['strDescription']              = "Deskripsi";
$GLOBALS['strVariables']                = "Variabel";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Komentar";

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
$GLOBALS['strLinkUserHelpUser']         = "Nama Pengguna";
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
$GLOBALS['strUserProperties']           = "Properties dari Banner";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "Autentifikasi";
$GLOBALS['strWelcomeTo']                = "Selamat Datang di";
$GLOBALS['strEnterUsername']            = "Silakan masukan Nama dan Kata Sandi Anda untuk Login";
$GLOBALS['strEnterBoth']                = "Silakan masukan Nama <i>dan</i> Kata Sandi";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "Login";
$GLOBALS['strLogout']                   = "Logout";
$GLOBALS['strUsername']                 = "Nama Pengguna";
$GLOBALS['strPassword']                 = "Kata Sandi";
$GLOBALS['strPasswordRepeat']           = "Ulangi Kata Sandi";
$GLOBALS['strAccessDenied']             = "Akses ditolak";
$GLOBALS['strUsernameOrPasswordWrong']  = "Nama pengguna atau kata sandi salah. Mohon diulangi.";
$GLOBALS['strPasswordWrong']            = "Kata Sandi salah";
$GLOBALS['strParametersWrong']          = "Parameter yang diberikan tidak benar";
$GLOBALS['strNotAdmin']                 = "Kemungkinan privilese Anda kurang";
$GLOBALS['strDuplicateClientName']      = "Nama Pengguna yang dipilih sudah ada. Silakan gunakan nama pengguna yang lain.";
$GLOBALS['strDuplicateAgencyName']      = "Nama Pengguna yang dipilih sudah ada. Silakan gunakan nama pengguna yang lain.";
$GLOBALS['strInvalidPassword']          = "Kata Sandi Anda tidak berlaku. Silakan gunakan kata sandi lain.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "Pasangan Kata Sandi tidak sesuai";
$GLOBALS['strRepeatPassword']           = "Ulangi Kata Sandi";
$GLOBALS['strOldPassword']              = "Kata Sandi lama";
$GLOBALS['strNewPassword']              = "Kata Sandi baru";
$GLOBALS['strNoBannerId']               = "Tidak ada ID banner";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "Permintaan";
$GLOBALS['strImpressions']              = "Kesan";
$GLOBALS['strClicks']                   = "AdClick";
$GLOBALS['strConversions']              = "Konversi";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR untuk tinggi";
$GLOBALS['strCTRShortLow']              = "CTR untuk rendah";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Rasio Penjualan";
$GLOBALS['strCPC']                      = "Harga per satu Klik";
$GLOBALS['strCPCo']                     = "Harga per konversi";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Jumlah AdViews";
$GLOBALS['strTotalClicks']              = "Jumlah AdClick";
$GLOBALS['strTotalConversions']         = "Jumlah Konversi";
$GLOBALS['strViewCredits']              = "Saldo AdView";
$GLOBALS['strClickCredits']             = "Saldo AdClick";
$GLOBALS['strConversionCredits']        = "Saldo Konversi";
$GLOBALS['strImportStats']              = "Statistik Impor";
$GLOBALS['strDateTime']                 = "Tanggal Waktu";
$GLOBALS['strTrackerID']                = "ID Pelacak";
$GLOBALS['strTrackerName']              = "Nama Pelacak";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Banner";
$GLOBALS['strCampaigns']                = "Kampanye";
$GLOBALS['strCampaignID']               = "ID Kampanye";
$GLOBALS['strCampaignName']             = "Nama Kampanye";
$GLOBALS['strCountry']                  = "Negara";
$GLOBALS['strStatsAction']              = "Aksi";
$GLOBALS['strWindowDelay']              = "Penundaan Jendela";
$GLOBALS['strStatsVariables']           = "Variabel";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Sewa menyewa bulanan";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Tanggal";
$GLOBALS['strToday']                    = "Hari ini";
$GLOBALS['strDay']                      = "Hari";
$GLOBALS['strDays']                     = "Hari";
$GLOBALS['strLast7Days']                = "7 hari terakhir";
$GLOBALS['strWeek']                     = "Minggu";
$GLOBALS['strWeeks']                    = "Minggu";
$GLOBALS['strSingleMonth']              = "Satu bulan";
$GLOBALS['strMonths']                   = "Bulan";
$GLOBALS['strDayOfWeek']                = "Hari dalam minggu";
$GLOBALS['strThisMonth']                = "Bulan ini";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Jam";
$GLOBALS['strHourFilter']               = "Saringan per jam";
$GLOBALS['strSeconds']                  = "Detik";
$GLOBALS['strMinutes']                  = "Menit";
$GLOBALS['strHours']                    = "Jam";
$GLOBALS['strTimes']                    = "kali";

// Advertiser
$GLOBALS['strClient']                       = "Pemasang Iklan";
$GLOBALS['strClients']                      = "Pemasang Iklan";
$GLOBALS['strClientsAndCampaigns']          = "Pemasang Iklan & Kampanye";
$GLOBALS['strAddClient']                    = "Tambah Pemasang Iklan baru";
$GLOBALS['strAddClient_Key']                = "Tambah Pemasang Iklan <u>b</u>aru";
$GLOBALS['strTotalClients']                 = "Jumlah Pemasang Iklan";
$GLOBALS['strClientProperties']             = "Properties dari Pemasang Iklan";
$GLOBALS['strClientHistory']                = "Sejarah Pemasangan Iklan";
$GLOBALS['strNoClients']                    = "Pada saat ini belum ada Pemasang Iklan yang didefinisikan";
$GLOBALS['strNoClientsForBanners']          = "There are currently no advertisers defined. To add banners you need to <a href='advertiser-edit.php'>add new advertiser</a> and campaign first.";
$GLOBALS['strConfirmDeleteClient']          = "Apakah Anda benar ingin hapus Pemasang Iklan yang ini?";
$GLOBALS['strConfirmDeleteClients']         = "Apakah Anda benar ingin hapus Pemasang Iklan yang ini?";
$GLOBALS['strConfirmResetClientStats']      = "Apakah Anda benar ingin hapus seluruh statistik dari Pemasang Iklan yang ini?";
$GLOBALS['strSite']                         = "Ukuran";
$GLOBALS['strHideInactive']                 = "Sembunyikan yang tidak aktif";
$GLOBALS['strHideInactiveAdvertisers']      = "Sembunyikan Pemasang Iklan yang tidak aktif";
$GLOBALS['strInactiveAdvertisersHidden']    = "Pemasang Iklan yang tidak aktif disembunyikan";
$GLOBALS['strOverallAdvertisers']           = "Pemasang Iklan";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Pemasang Iklan & Kampanye";
// Advertisers properties
$GLOBALS['strContact']                          = "Alamat";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "Alamat E-mail";
$GLOBALS['strChars']                            = "Huruf/Angka/Tanda";
$GLOBALS['strSendAdvertisingReport']            = "Kirim laporan iklan lewat E-mail";
$GLOBALS['strNoDaysBetweenReports']             = "Jumlah hari antara laporan";
$GLOBALS['strSendDeactivationWarning']          = "Kirim peringatan bila kampanye tidak aktif";
$GLOBALS['strAllowClientModifyInfo']            = "Izinkan pengguna ini untuk merubah penyetelan";
$GLOBALS['strAllowClientModifyBanner']          = "Izinkan pengguna ini untuk merubah banner yang dimiliki";
$GLOBALS['strAllowClientAddBanner']             = "Izinkan pengguna ini untuk menambah banner sendiri";
$GLOBALS['strAllowClientDisableBanner']         = "Izinkan pengguna ini untuk hentikan banner yang dimiliki";
$GLOBALS['strAllowClientActivateBanner']        = "Izinkan pengguna ini untuk aktifkan banner yang dimiliki";
$GLOBALS['strAllowClientViewTargetingStats']    = "Izinkan pengguna ini untuk menampilkan statistik Targeting";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "Izinkan pengguna ini untuk upload konversi Offline";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Kampanye";
$GLOBALS['strCampaigns']                    = "Kampanye";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Jumlah kampanye";
$GLOBALS['strActiveCampaigns']              = "Kampanye yang aktif";
$GLOBALS['strAddCampaign']                  = "Tambah kampanye baru";
$GLOBALS['strAddCampaign_Key']              = "Tambah kampanye <u>b</u>aru";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Buat kampanye baru";
$GLOBALS['strModifyCampaign']               = "Ubah kampanye";
$GLOBALS['strMoveToNewCampaign']            = "Pindahkan ke kampanye baru";
$GLOBALS['strBannersWithoutCampaign']       = "Banner tanpa kampanye";
$GLOBALS['strDeleteAllCampaigns']           = "Hapus seluruh kampanye";
$GLOBALS['strLinkedCampaigns']              = "Kampanye yang diikat";
$GLOBALS['strCampaignStats']                = "Statistik Kampanye";
$GLOBALS['strCampaignProperties']           = "Properties dari Kampanye";
$GLOBALS['strCampaignOverview']             = "Rekapitulasi Kampanye";
$GLOBALS['strCampaignHistory']              = "Sejarah Kampanye";
$GLOBALS['strNoCampaigns']                  = "Pada saat ini tidak ada kampanye yang ditentukan";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Apakah benar Anda ingin menghapus semua kampanye yang dimiliki oleh pemasang iklan ini?";
$GLOBALS['strConfirmDeleteCampaign']        = "Apakah benar Anda ingin menghapus semua kampanye ini?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Apakah benar Anda ingin menghapus semua kampanye ini?";
$GLOBALS['strConfirmResetCampaignStats']    = "Apakah benar Anda ingin menghapus semua statistik untuk kampanye ini?";
$GLOBALS['strShowParentAdvertisers']        = "Tampilkan pemasang iklan induk";
$GLOBALS['strHideParentAdvertisers']        = "Sembunyikan pemasang iklan induk";
$GLOBALS['strHideInactiveCampaigns']        = "Sembunyikan kampanye yang tidak aktif";
$GLOBALS['strInactiveCampaignsHidden']      = "Kampanye yang tidak aktif tersembunyi";
$GLOBALS['strContractDetails']              = "Rincian Kontrak";
$GLOBALS['strInventoryDetails']             = "Rincian Inventaris";
$GLOBALS['strPriorityInformation']          = "Prioritas dalam relasi kampanye yang lain";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Kampanye";
$GLOBALS['strHiddenAd']                     = "Iklan";
$GLOBALS['strHiddenAdvertiser']             = "Pemasang Iklan";
$GLOBALS['strHiddenTracker']                = "Pelacak";
$GLOBALS['strHiddenWebsite']              = "Penerbit";
$GLOBALS['strHiddenZone']                   = "Zona";
$GLOBALS['strUnderdeliveringCampaigns']     = "Kampanye yang belum dipenuhi";
$GLOBALS['strCampaignDelivery']             = "Pelayanan Kampanye";
$GLOBALS['strBookedMetric']                 = "Jenis kampanye yang dibooking";
$GLOBALS['strValueBooked']                  = "Nilai kampanye yang dibooking";
$GLOBALS['strRemaining']                    = "Sisa";
$GLOBALS['strCompanionPositioning']         = "Iklan yang bermitra";
$GLOBALS['strSelectUnselectAll']            = "Pilih / Batalkan Pilihan";
$GLOBALS['strConfirmOverwrite']             = "Menyimpan perubahan-perubahan ini akan menimpahkan seluruh ikatan zona banner yang lain. Apakah Anda sudah yakin untuk melakukan ini?";
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
$GLOBALS['strDontExpire']                       = "Jangan menghembuskan kampanye ini pada tanggal tertentu";
$GLOBALS['strActivateNow']                      = "Aktifkan kampanye ini segera";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Rendah";
$GLOBALS['strHigh']                             = "Tinggi";
$GLOBALS['strExpirationDate']                   = "Akhir pada tanggal";
$GLOBALS['strExpirationDateComment']            = "Kampanye akan berakhir pada ujung hari yang ditentukan";
$GLOBALS['strActivationDate']                   = "Mulai dari tanggal";
$GLOBALS['strActivationDateComment']            = "Kampanye akan dimulai pada awal hari hari yang ditentukan";
$GLOBALS['strRevenueInfo']                      = "Informasi penghasilan";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "AdViews yang tersisa";
$GLOBALS['strClicksRemaining']                  = "AdKlik yang tersisa";
$GLOBALS['strConversionsRemaining']             = "Konversi yang tersisa";
$GLOBALS['strImpressionsBooked']                = "Jumlah AdViews yang dipesan";
$GLOBALS['strClicksBooked']                     = "Jumlah AdKlik yang dipesan";
$GLOBALS['strConversionsBooked']                = "Jumlah konversi yang dipesan";
$GLOBALS['strCampaignWeight']                   = "Bobot Kampanye";
$GLOBALS['strTargetLimitAdImpressions']         = "Batas AdViews";
$GLOBALS['strOptimise']                         = "Pemperlancarkan";
$GLOBALS['strAnonymous']                        = "Sembunyikan pemasang iklan dan penerbit dari kampanye ini.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Tampilkan banner dengan prioritas yang rendah dalam kampanye ini.<br /> Kampanye ini digunakan untuk menampilkan sisa dari AdViews yang tidak digunakan oleh kampanye dengan prioritas tinggi.";
$GLOBALS['strTargetPerDay']                     = "per hari.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Membagikan sisa AdViews pada hari-hari yang tertinggal. Jumlah AdViews akan diset sesuai hari yang tersisa.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Prioritas dari kampanye ini distel pada posisi yang rendah, \\ntetapi berbobot nol atau tidak \\nditentukan. Hal ini mengakibatkan deaktivasi \\nkampanye tersebut dan tidak ada banner yang disampaikan \\nsampai bobotnya distel pada angka yang berlaku. \\n\\nApakah Anda yakin untuk melanjut?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Prioritas dari kampanye ini distel pada posisi yang terlalu tinggi, \\ntetapi jumlah target dari AdViews tidak ditentukan. \\nHal ini mengakibatkan deaktivasi kampanye tersebut dan tidak ada banner yang disampaikan \\nsampai jumlah target AdViews yang berlaku ditentukan. \\n\\nApakah Anda yakin untuk melanjut?";
$GLOBALS['strCampaignStatusPending']            = "Pending";
$GLOBALS['strCampaignStatusInactive']           = "aktif";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Istirahat";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Restart";
$GLOBALS['strCampaignStatusDeleted']            = "Hapus";
$GLOBALS['strCampaignApprove']                  = "Disetujui";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "Istirahat";
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
$GLOBALS['strCampaignType']                     = "Nama Kampanye";
$GLOBALS['strType']                             = "Jenis";
$GLOBALS['strContract']                         = "Alamat";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Alamat";
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
$GLOBALS['strTracker']                    = "Pelacak";
$GLOBALS['strTrackers']                   = "Pelacak";
$GLOBALS['strTrackerOverview']            = "Rincian dari Pelacak";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "Tambah pelacak baru";
$GLOBALS['strAddTracker_Key']             = "<u>T</u>ambah pelacak baru";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "Pada saat ini belum ada pelacak yang ditetapkan";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Apakah Anda sudah yakin ingin menghapus seluruh pelacak yang dimiliki oleh pemasang iklan ini?";
$GLOBALS['strConfirmDeleteTrackers']      = "Apakah Anda sudah yakin ingin menghapus seluruh pelacak?";
$GLOBALS['strConfirmDeleteTracker']       = "Apakah Anda sudah yakin ingin menghapus seluruh pelacak?";
$GLOBALS['strDeleteAllTrackers']          = "Hapus seluruh pelacak";
$GLOBALS['strTrackerProperties']          = "Ciri-ciri dari Pelacak";
$GLOBALS['strTrackerOverview']            = "Rincian dari Pelacak";
$GLOBALS['strModifyTracker']              = "Ubah Pelacak";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "Keadaan Default";
$GLOBALS['strStatus']                     = "Keadaan";
$GLOBALS['strLinkedTrackers']             = "Pelacak yang terikat";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Pandangan konversi";
$GLOBALS['strUniqueWindow']               = "Window unik";
$GLOBALS['strClick']                      = "Klik";
$GLOBALS['strView']                       = "Pandangan";
$GLOBALS['strArrival']                    = "Kedatangan";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "AdView";
$GLOBALS['strConversionClickWindow']      = "Hitung konversi yang terjadi dalam jumlah detik antara AdClick";
$GLOBALS['strConversionViewWindow']       = "Count conversions which occur within this number of seconds of a view";
$GLOBALS['strTotalTrackerImpressions']    = "Jumlah AdView";
$GLOBALS['strTotalTrackerConnections']    = "Jumlah Koneksi";
$GLOBALS['strTotalTrackerConversions']    = "Jumlah Konversi";
$GLOBALS['strTrackerImpressions']         = "AdView";
$GLOBALS['strTrackerImprConnections']     = "Koneksi AdView";
$GLOBALS['strTrackerClickConnections']    = "Koneksi Klik";
$GLOBALS['strTrackerImprConversions']     = "Konversi AdView";
$GLOBALS['strTrackerClickConversions']    = "Konversi Klik";
$GLOBALS['strConversionType']             = "Jenis konversi";
$GLOBALS['strLinkCampaignsByDefault']     = "Hubungkan kampanye baru secara Default";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Banner";
$GLOBALS['strBanners']                       = "Banner";
$GLOBALS['strBannerFilter']                  = "Saringan Banner";
$GLOBALS['strAddBanner']                     = "Tambah banner baru";
$GLOBALS['strAddBanner_Key']                 = "Tambah banner <u>b</u>aru";
$GLOBALS['strBannerToCampaign']              = "Kampanye Anda";
$GLOBALS['strModifyBanner']                  = "Ubah banner";
$GLOBALS['strActiveBanners']                 = "Banner yang aktif";
$GLOBALS['strTotalBanners']                  = "Jumlah banner";
$GLOBALS['strShowBanner']                    = "Tampilkan banner";
$GLOBALS['strShowAllBanners']                = "Tampilkan seluruh banner";
$GLOBALS['strShowBannersNoAdViews']          = "Tampilkan banner tanpa AdViews";
$GLOBALS['strShowBannersNoAdClicks']         = "Tampilkan banner tanpa AdClicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Tampilkan banner tanpa penjualan";
$GLOBALS['strDeleteAllBanners']              = "Hapus semua banner";
$GLOBALS['strActivateAllBanners']            = "Aktifkan semua banner";
$GLOBALS['strDeactivateAllBanners']          = "Hentikan semua banner";
$GLOBALS['strBannerOverview']                = "Pandangan Banner";
$GLOBALS['strBannerProperties']              = "Properties dari Banner";
$GLOBALS['strBannerHistory']                 = "Sejarah Banner";
$GLOBALS['strBannerNoStats']                 = "Tidak ada statistik untuk banner ini";
$GLOBALS['strNoBanners']                     = "Pada saat ini tidak ada banner yang ditentukan";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "There are currently no banners defined, because there are no advertisers. To create a banner, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strConfirmDeleteBanner']           = "Apakah benar Anda ingin menghapus banner ini?";
$GLOBALS['strConfirmDeleteBanners']          = "Apakah benar Anda ingin menghapus banner ini?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Apakah benar Anda ingin menghapus semua banner yang dimiliki oleh kampanye ini?";
$GLOBALS['strConfirmResetBannerStats']       = "Apakah benar Anda ingin menghapus semua statistik untuk banner ini?";
$GLOBALS['strShowParentCampaigns']           = "Tampilkan kampanye induk";
$GLOBALS['strHideParentCampaigns']           = "Sembunyikan kampanye induk";
$GLOBALS['strHideInactiveBanners']           = "Sembunyikan banner yang tidak aktif";
$GLOBALS['strInactiveBannersHidden']         = "Banner yang tidak aktif tesembunyi";
$GLOBALS['strAppendOthers']                  = "Sisipkan yang lain";
$GLOBALS['strAppendTextAdNotPossible']       = "Penyisipan banner lain pada <i>Text Ads</i> tidak diperbolehkan.";
$GLOBALS['strHiddenBanner']                  = "Banner tersembunyi";
$GLOBALS['strWarningTag1']                   = "Perhatian, tag ";
$GLOBALS['strWarningTag2']                   = " kemungkinan tidak dibuka/tidak ditutup";
$GLOBALS['strWarningMissing']                = "Perhatian, kemungkinan ada kekurangan";
$GLOBALS['strWarningMissingClosing']         = "penutup ujung \\\">\\\"";
$GLOBALS['strWarningMissingOpening']         = "pembuka ujung \\\"<\\\"";
$GLOBALS['strSubmitAnyway']       		     = "Tetap menyerahi";
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
$GLOBALS['strChooseBanner']         = "Silakan pilih jenis banner";
$GLOBALS['strMySQLBanner']             = "Banner lokal (SQL)";
$GLOBALS['strWebBanner']               = "Banner lokal (Webserver)";
$GLOBALS['strURLBanner']               = "Banner eksternal";
$GLOBALS['strHTMLBanner']              = "Banner HTML";
$GLOBALS['strTextBanner']              = "Text ad";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Apakah Anda ingin mempertahankan <br />gambar yang lama atau <br />Anda inging upload gambar baru?";
$GLOBALS['strUploadOrKeepAlt']        = "Apakah Anda ingin mempertahankan <br />Backup Image yang tersedia<br />  ataukah Anda ingin meng-upload yang baru?";
$GLOBALS['strNewBannerFile']         = "Silakan pilih gambar untuk <br />dipakai pada banner ini<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Silakan pilih Backup Image <br />yang ingin digunakan <br />bila Browser pengguna tidak mendukung Rich Media <br /><br />";
$GLOBALS['strNewBannerURL']         = "URL gambar (termasuk http://)";
$GLOBALS['strURL']                     = "URL tujuan (termasuk http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Kata Kunci";
$GLOBALS['strTextBelow']             = "Teks dibawah gambar";
$GLOBALS['strWeight']                 = "Bobot";
$GLOBALS['strAlt']                     = "Teks alternatif";
$GLOBALS['strStatusText']            = "Teks status";
$GLOBALS['strBannerWeight']            = "Bobot banner";
$GLOBALS['strBannerType']           = "Tambah Jenis";
$GLOBALS['strAdserverTypeGeneric']  = "Banner HTML Generik";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Generik";
$GLOBALS['strSwfTransparency']		   = "Background transparan (hanya Flash)";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Periksa hard-coded links dalam file Flash";
$GLOBALS['strConvertSWFLinks']        = "Menukarkan links dari Flash";
$GLOBALS['strHardcodedLinks']        = "Hard-coded links";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Kompres file SWF untuk meng-download lebih cepat (Player Flash 6 dibutuhkan)";
$GLOBALS['strOverwriteSource']        = "Timpah parameter induk";
$GLOBALS['strLinkToShort']            = "Perhatian: Hard-coded URLs terdeteksi - Bagaimanapun juga, URL yang bersangkutan terlalu pendek untuk dimonifikasi secara otomatis";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "Template HTML";
$GLOBALS['strChooseNetwork']        = "Silakan pilih template untuk digunakan";
$GLOBALS['strMoreInformation']        = "Informasi lebih lanjut...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Lacak AdClicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Pilihan Penyampaian";
$GLOBALS['strACL']                        = "Penyampaian";
$GLOBALS['strACLAdd']                     = "Tambah batasan baru";
$GLOBALS['strACLAdd_Key']                 = "Tambah batasan <u>b</u>aru";
$GLOBALS['strNoLimitations']              = "Tanpa batas";
$GLOBALS['strApplyLimitationsTo']         = "Gunakan batas untuk";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Hapus semua batas";
$GLOBALS['strEqualTo']                    = "sama dengan";
$GLOBALS['strDifferentFrom']              = "lain dibandingkan dengan";
$GLOBALS['strLaterThan']                  = "lebih lambat dibandingkan dengan";
$GLOBALS['strLaterThanOrEqual']           = "lebih lambat dari atau sama dengan";
$GLOBALS['strEarlierThan']                = "lebih cepat dibandingkan dengan";
$GLOBALS['strEarlierThanOrEqual']         = "lebih cepat dari atau sama dibandingkan dengan";
$GLOBALS['strContains']                   = "berisi";
$GLOBALS['strNotContains']                = "tidak berisi";
$GLOBALS['strGreaterThan']                = "lebih besar daripada";
$GLOBALS['strLessThan']                   = "lebih kecil daripada";
$GLOBALS['strAND']                        = "DAN";                          // logical operator
$GLOBALS['strOR']                         = "ATAU";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Tampilkan banner ini hanya:";
$GLOBALS['strWeekDay']                    = "Hari Kerja";
$GLOBALS['strWeekDays']                   = "Hari Kerja";
$GLOBALS['strTime']                       = "Waktu";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "IP dari Client";
$GLOBALS['strSource']                     = "Sumber";
$GLOBALS['strSourceFilter']               = "Saringan Sumber";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Kode Negara (ISO 3166)";
$GLOBALS['strCountryName']                = "Nama Negara";
$GLOBALS['strRegion']                     = "Kode Daerah (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Kota";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Nama Perusahaan";
$GLOBALS['strIsp']                        = "Nama ISP";
$GLOBALS['strNetspeed']                   = "Kecepatan koneksi internet";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Limitasi Penyampaian";

$GLOBALS['strDeliveryCapping']            = "Delivery capping per pengunjung";
$GLOBALS['strDeliveryCappingReset']       = "Reset hitungan AdViews setelah:";
$GLOBALS['strDeliveryCappingTotal']       = "jumlahnya";
$GLOBALS['strDeliveryCappingSession']     = "per sesi";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Batasi penampilan banner pada:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Batasi penampilan kampanye pada:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Batasi penampilan zona pada:";

// Website
$GLOBALS['strAffiliate']                = "Penerbit";
$GLOBALS['strAffiliates']                 = "Halaman web";
$GLOBALS['strAffiliatesAndZones']        = "Halaman web & Zona";
$GLOBALS['strAddNewAffiliate']            = "Tambah halaman web baru";
$GLOBALS['strAddNewAffiliate_Key']        = "Tambah halaman web  <u>b</u>aru";
$GLOBALS['strAddAffiliate']                = "Buat Penerbit";
$GLOBALS['strAffiliateProperties']        = "Properties dari website";
$GLOBALS['strAffiliateOverview']        = "Daftar Penerbit";
$GLOBALS['strAffiliateHistory']            = "Sejarah Penerbit";
$GLOBALS['strZonesWithoutAffiliate']    = "Zona tanpa Penerbit";
$GLOBALS['strMoveToNewAffiliate']        = "Pindahkan ke Penerbit yang baru";
$GLOBALS['strNoAffiliates']                = "Belum ada Penerbit yang ditentukan";
$GLOBALS['strConfirmDeleteAffiliate']    = "Apakah benar Anda ingin menghapus Penerbit ini?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Apakah benar Anda ingin menghapus Penerbit ini?";
$GLOBALS['strMakePublisherPublic']        = "Ubah zona yang dimiliki oleh Penerbit ini supaya dapat digunakan oleh umum";
$GLOBALS['strAffiliateInvocation']      = "Invokasi Kode";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Jumlah Penerbit";
$GLOBALS['strInactiveAffiliatesHidden'] = "penerbit yang tidak aktif disembunyikan";
$GLOBALS['strShowParentAffiliates']     = "Tampilkan penerbit induk";
$GLOBALS['strHideParentAffiliates']     = "Sembunyikan penerbit induk";

// Website (properties)
$GLOBALS['strWebsite']                      = "Penerbit";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Izinkan pengguna ini untuk merubah penyetelan";
$GLOBALS['strAllowAffiliateModifyZones']    = "Izinkan pengguna ini untuk mengubah zona yang dimiliki";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Izinkan pengguna ini untuk me-link banner ke zona yang dimiliki";
$GLOBALS['strAllowAffiliateAddZone']        = "Izinkan pengguna ini untuk membuat zona baru";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Izinkan pengguna ini untuk  menghapus zona yang ada";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Izinkan pengguna ini untuk pengolah sendiri kode invokasi";
$GLOBALS['strAllowAffiliateZoneStats']      = "Izinkan pengguna ini untuk membaca statistik zona";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Batasi pengguna ini untuk hanya dapat membaca konversi yang sudah diizinkan atau yang masih dalam status mengantung";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Informasi Pembayaran";
$GLOBALS['strAddress']                      = "Alamat";
$GLOBALS['strPostcode']                     = "Kode Pos";
$GLOBALS['strCity']                         = "Kota";
$GLOBALS['strCountry']                      = "Negara";
$GLOBALS['strPhone']                        = "Telpon";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Account contact";
$GLOBALS['strPayeeName']                    = "Nama pelanggan";
$GLOBALS['strTaxID']                        = "NPWP";
$GLOBALS['strModeOfPayment']                = "Cara pembayaran";
$GLOBALS['strPaymentChequeByPost']          = "Pengiriman chek melalui pos";
$GLOBALS['strCurrency']                     = "Mata uang";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Informasi lain";
$GLOBALS['strUniqueUsersMonth']             = "Pengguna unik per bulan";
$GLOBALS['strUniqueViewsMonth']             = "AdView unik per bulan";
$GLOBALS['strPageRank']                     = "Ranking Halaman";
$GLOBALS['strCategory']                     = "Kategori";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "File Bantuan";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Halaman web & Zona";

// Zone
$GLOBALS['strChooseZone']                   = "Pilih Zona";
$GLOBALS['strZone']                         = "Zona";
$GLOBALS['strZones']                        = "Zona";
$GLOBALS['strAddNewZone']                   = "Tambah zona baru";
$GLOBALS['strAddNewZone_Key']               = "Tambah zona <u>b</u>aru";
$GLOBALS['strAddZone']                      = "Buat zona";
$GLOBALS['strModifyZone']                   = "Ubah zona";
$GLOBALS['strZoneToWebsite']                = "Semua penerbit";
$GLOBALS['strLinkedZones']                  = "Zona yang dihubungkan";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Daftar Zona";
$GLOBALS['strZoneProperties']               = "Properties Zona";
$GLOBALS['strZoneHistory']                  = "Sejarah Zona";
$GLOBALS['strNoZones']                      = "Tidak ada zona yang ditentukan";
$GLOBALS['strNoZonesAddWebsite']            = "There are currently no zones defined, because there are no websites. To create a zone, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strConfirmDeleteZone']            = "Apakah benar Anda ingin menghapus zona ini?";
$GLOBALS['strConfirmDeleteZones']           = "Apakah benar Anda ingin menghapus zona ini?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Jenis Zona";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Tombol atau Bujur Sangkar";
$GLOBALS['strInterstitial']                 = "Interstitial atau Floating DHTML";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "Text ad";
$GLOBALS['strEmailAdZone']                  = "Zona Email/Newsletter";
$GLOBALS['strZoneClick']                    = "Zona pelacakan AdClick";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Tampilkan banner sepadan";
$GLOBALS['strHideMatchingBanners']          = "Sembunyikan banner sepadan";
$GLOBALS['strBannerLinkedAds']              = "Banner yang dihubungkan pada zona";
$GLOBALS['strCampaignLinkedAds']            = "Kampanye yang dihubungkan pada zona";
$GLOBALS['strTotalZones']                   = "Jumlah Zona";
$GLOBALS['strInactiveZonesHidden']          = "zona yang tidak aktif tersembunyi";
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
$GLOBALS['strAdvanced']                    = "Tingkat Lanjut";
$GLOBALS['strChains']                    = "Rantai";
$GLOBALS['strChainSettings']            = "Stelan Rantai";
$GLOBALS['strZoneNoDelivery']            = "Bila tidak ada banner dari zona ini yang dapat ditampilkan, coba untuk...";
$GLOBALS['strZoneStopDelivery']            = "Hentikan penyampaian dan jangan menampilkan banner";
$GLOBALS['strZoneOtherZone']            = "Tampilkan zona yang dipilih sebagai pengganti";
$GLOBALS['strZoneUseKeywords']            = "Pilih banner dengan mengunakan kata kunci dibawah ini";
$GLOBALS['strZoneAppend']                = "Selalu menambahkan kode HTML berikut kepada banner yang ditampilkan di zona ini";
$GLOBALS['strAppendSettings']            = "Menambahkan dan mensisipkan didepan pada penyetelan";
$GLOBALS['strZoneForecasting']            = "Penyetelan zona prakiraan";
$GLOBALS['strZonePrependHTML']            = "Selalu sisipkan kode HTML didepan text ads yang ditampilkan oleh zona ini";
$GLOBALS['strZoneAppendHTML']            = "Selalu menambahkan kode HTML kepada text ads yang ditampilkan oleh zona ini";
$GLOBALS['strZoneAppendNoBanner']        = "Tetap tempelkan meskipun banner tidak terlayani";
$GLOBALS['strZoneAppendType']            = "Jenis Penambahan";
$GLOBALS['strZoneAppendHTMLCode']        = "Kode HTML";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup atau intersitial";
$GLOBALS['strZoneAppendSelectZone']        = "Selalu menambahkan popup atau intersitial berikut kepada banner yang ditampilkan oleh zona ini";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Tidak ada banner aktif yang di-link kepada zona yang dipilih. <br />Ini adalah rantai zona yang akan diikuti:";
$GLOBALS['strZoneProbNullPri']            = "Seluruh banner yang di-link kepada zona yang dipilih pada saat ini dalam keadaan tidak aktif";
$GLOBALS['strZoneProbListChainLoop']    = "Ikuti rantai zona akan mengakibatkan liku sirkular. Penyampaian untuk zona ini dihentikan";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Silakan pilih jenis hubungan banner";
$GLOBALS['strLinkedBanners']            = "Hubungkan banner individual";
$GLOBALS['strCampaignDefaults']            = "Hubungkan banner berdasarkan kampanye induk";
$GLOBALS['strLinkedCategories']         = "Hubungkan banner berdasarkan kategori induk";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interaktif";
$GLOBALS['strRawQueryString']            = "Kata Kunci";
$GLOBALS['strIncludedBanners']            = "Banner yang di-link";
$GLOBALS['strLinkedBannersOverview']    = "Daftar banner yang di-link";
$GLOBALS['strLinkedBannerHistory']        = "Sejarah banner yang di-link";
$GLOBALS['strNoZonesToLink']            = "Tidak ada zona yang tersedia untuk me-link banner ini";
$GLOBALS['strNoBannersToLink']            = "Pada saat ini tidak ada banner yang bisa di-link ke zona ini";
$GLOBALS['strNoLinkedBanners']            = "Tidak ada banner yang tersedia untuk di-link ke zona ini";
$GLOBALS['strMatchingBanners']            = "{count} banner sepadan";
$GLOBALS['strNoCampaignsToLink']        = "Pada saat ini tidak ada kampanye yang tersedia untuk di-link ke zona ini";
$GLOBALS['strNoTrackersToLink']            = "Pada saat ini tidak tersedia pelacak yang dapat dihubungkan dengan kampanye ini";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Tidak ada zona yang tersedia untuk me-link kampanye ini";
$GLOBALS['strSelectBannerToLink']        = "Silakan pilih banner untuk di-link ke zona ini:";
$GLOBALS['strSelectCampaignToLink']        = "Silakan pilih kampanye untuk di-link ke zona ini:";
$GLOBALS['strSelectAdvertiser']         = "Pilih pemasang iklan";
$GLOBALS['strSelectPlacement']          = "Pilih kampanye";
$GLOBALS['strSelectAd']                 = "Pilih banner";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Tempelkan kode berikut pada setiap pelacak AdView jenis Javascript";
$GLOBALS['strTrackerCodeSubject']          = "Tempelkan kode pelacak";
$GLOBALS['strAppendTrackerNotPossible']    = "Penempelan pelacak ini tidak dapat dilaksanakan.";
$GLOBALS['strStatusPending']            = "Pending";
$GLOBALS['strStatusApproved']           = "Disetujui";
$GLOBALS['strStatusDisapproved']        = "Tidak disetujui";
$GLOBALS['strStatusDuplicate']          = "Mendobelkan";
$GLOBALS['strStatusOnHold']             = "Digantungkan";
$GLOBALS['strStatusIgnore']             = "Ignore";
$GLOBALS['strConnectionType']           = "Jenis";
$GLOBALS['strConnTypeSale']             = "Penjualan";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Daftar";
$GLOBALS['strShortcutEditStatuses'] = "Edit status";
$GLOBALS['strShortcutShowStatuses'] = "Tampilkan status";

// Statistics
$GLOBALS['strStats']                     = "Statistik";
$GLOBALS['strNoStats']                   = "Pada saat ini belum ada statistik yang tersedia";
$GLOBALS['strNoTargetingStats']          = "Pada saat ini statistik Targeting belum tersedia ";
$GLOBALS['strNoStatsForPeriod']          = "Statistik untuk periode %s s/d. %s pada saat ini belum tersedia ";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Pada saat ini statistik Targeting untuk periode %s s/d. %s belum tersedia ";
$GLOBALS['strConfirmResetStats']         = "Apakah Anda yakin ingin menghapus semua statistik yang ada?";
$GLOBALS['strGlobalHistory']             = "Sejarah Global";
$GLOBALS['strDailyHistory']              = "Statistik Harian";
$GLOBALS['strDailyStats']                = "Statistik Harian";
$GLOBALS['strWeeklyHistory']             = "Statistik Mingguan";
$GLOBALS['strMonthlyHistory']            = "Statistik Bulanan";
$GLOBALS['strCreditStats']               = "Statistik Kredit";
$GLOBALS['strDetailStats']               = "Statistik Terperinci";
$GLOBALS['strTotalThisPeriod']           = "Jumlah dalam periode ini";
$GLOBALS['strAverageThisPeriod']         = "Rata-rata dalam periode ini";
$GLOBALS['strPublisherDistribution']     = "Distribusi penerbit";
$GLOBALS['strCampaignDistribution']      = "Distribusi kampanye";
$GLOBALS['strDistributionBy']            = "Distribusi berdasarkan";
$GLOBALS['strResetStats']                = "Reset Statistik";
$GLOBALS['strSourceStats']               = "Sumber Statistik";
$GLOBALS['strSources']                   = "Sumber";
$GLOBALS['strAvailableSources']          = "Sumber yang tersedia";
$GLOBALS['strSelectSource']              = "Silakan pilih sumber untuk dipandang:";
$GLOBALS['strSizeDistribution']          = "Distribusi menurut ukuran";
$GLOBALS['strCountryDistribution']       = "Distribusi menurut negara";
$GLOBALS['strEffectivity']               = "Efektivitas";
$GLOBALS['strTargetStats']               = "Statistik Targeting";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Rasio Target";
$GLOBALS['strTargetModifiedDay']         = "Sepanjang hari ada perubahan target, targeting mungkin tidak akurat";
$GLOBALS['strTargetModifiedWeek']        = "Selama seminggu ada perubahan target, targeting mungkin tidak akurat";
$GLOBALS['strTargetModifiedMonth']       = "Selama sebulan ada perubahan target, targeting mungkin tidak akurat";
$GLOBALS['strNoTargetStats']             = "Pada saat ini belum tersedia statistik tentang targeting";
$GLOBALS['strOVerall']                   = "Keseluruhan";
$GLOBALS['strByZone']                    = "Berdasarkan Zona";
$GLOBALS['strImpressionsRequestsRatio']  = "Tampilkan Rasio Permintaan (%)";
$GLOBALS['strViewBreakdown']             = "Tampilkan berdasarkan";
$GLOBALS['strBreakdownByDay']            = "Hari";
$GLOBALS['strBreakdownByWeek']           = "Minggu";
$GLOBALS['strBreakdownByMonth']          = "Satu bulan";
$GLOBALS['strBreakdownByDow']            = "Hari dalam minggu";
$GLOBALS['strBreakdownByHour']           = "Jam";
$GLOBALS['strItemsPerPage']              = "Items per page";
$GLOBALS['strDistributionHistory']       = "Sejarah Distribusi";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Tampilkan <u>G</u>rafik Statistik";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>kspor Statistik ke Excel";
$GLOBALS['strGDnotEnabled']              = "You must have GD enabled in PHP to display graphs. <br />Please see <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for more information, including how to install GD on your server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Host";
$GLOBALS['strTopHosts']             = "Host yang mengakses tertinggi";
$GLOBALS['strTopCountries']         = "Negara yang mengakses tertinggi";
$GLOBALS['strRecentHosts']             = "Host yang mengakses terakhir";

// Expiration
$GLOBALS['strExpired']                = "Masa berlaku sudah habis";
$GLOBALS['strExpiration']             = "Masa berlaku";
$GLOBALS['strNoExpiration']           = "Tanggal masa berlaku tidak ditentukan";
$GLOBALS['strEstimated']              = "Perkiraan habisnya masa berlaku";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Sejarah Kampanye";

// Reports
$GLOBALS['strReports']                = "Laporan";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Laporan Admin";
$GLOBALS['strAdvertiserReports']      = "Laporan Pemasang Iklan";
$GLOBALS['strAgencyReports']          = "Agency Reports";
$GLOBALS['strPublisherReports']       = "Laporan Penerbit";
$GLOBALS['strSelectReport']           = "Silakan pilih laporan untuk diolah";
$GLOBALS['strStartDate']              = "Mulai dari tanggal";
$GLOBALS['strEndDate']                = "Akhir pada tanggal";
$GLOBALS['strNoData']                 = "Data untuk jangka waktu yang dipilih tidak tersedia";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Limitasi";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Semua pemasang iklan";
$GLOBALS['strAnonAdvertisers']           = "Anonymous advertisers";
$GLOBALS['strAllPublishers']             = "Semua penerbit";
$GLOBALS['strAnonPublishers']            = "Anonymous publishers";
$GLOBALS['strAllAvailZones']             = "Seluruh zona yang tersedia";

// Userlog
$GLOBALS['strUserLog']                = "User log";
$GLOBALS['strUserLogDetails']        = "Perincian User log";
$GLOBALS['strDeleteLog']            = "Hapus log";
$GLOBALS['strAction']                = "Aksi";
$GLOBALS['strNoActionsLogged']        = "Tidak ada tindakan yang di-log";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Pembuatan Langsung";
$GLOBALS['strChooseInvocationType']        = "Silakan pilih jenis invokasi banner";
$GLOBALS['strGenerate']                    = "Buat   ";
$GLOBALS['strParameters']                = "Parameter";
$GLOBALS['strFrameSize']                = "Ukuran Frame";
$GLOBALS['strBannercode']                = "Kode Banner";
$GLOBALS['strTrackercode']                = "Kode Pelacakan";
$GLOBALS['strOptional']                    = "opsional";
$GLOBALS['strBackToTheList']            = "Kembali ke daftar laporan";
$GLOBALS['strGoToReportBuilder']        = "Pindah ke daftar laporan pilihan";
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
$GLOBALS['strLogErrorClients']                  = "[phpAds] Telah terjadi Error sewaktu mengambil Penerbit dari database.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Telah terjadi Error sewaktu mengambil banner dari database.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Telah terjadi Error sewaktu coba mengambil AdView dari database.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Telah terjadi Error sewaktu coba mengambil AdClick dari database.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] An error occurred while trying to fetch the Conversions from the database.";
$GLOBALS['strErrorViews']                       = "Anda harus mengisi jumlah View atau pilih kotak <i>Unlimited</i> !";
$GLOBALS['strErrorNegViews']                    = "AdView dengan nilai negatif tidak diperbolehkan";
$GLOBALS['strErrorClicks']                      = "Anda harus mengisi jumlah Clicks atau pilih kotak <i>Unlimited</i> !";
$GLOBALS['strErrorNegClicks']                   = "AdClicks dengan nilai negatif tidak diperbolehkan";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Konversi dengan nilai negatif tidak diperbolehkan";
$GLOBALS['strNoMatchesFound']                   = "Tidak ada sepadan yang ditemukan";
$GLOBALS['strErrorOccurred']                    = "Telah terjadi Error";
$GLOBALS['strErrorUploadSecurity']              = "Kemungkinan ada masalah dalam keamanan. Upload dihentikan!";
$GLOBALS['strErrorUploadBasedir']               = "Gagal mengakses file yang di-upload. Hal ini kemungkinan disebabkan oleh <i>Safemode</i> atau restriksi di bagian <i>open_basedir</i>";
$GLOBALS['strErrorUploadUnknown']               = "Gagal mengakses file yang di-upload dengan alasan yang tidak diketahui. Mohon periksa kembali konfigurasi PHP Anda";
$GLOBALS['strErrorStoreLocal']                  = "Telah terjadi Error sewaktu penyimpanan banner dalam direktori lokal. Hal ini kemungkinan disebabkan oleh kesalahan dalam konfigurasi <i>Local Directory Path</i>";
$GLOBALS['strErrorStoreFTP']                    = "Telah terjadi Error sewaktu mencoba meng-upload banner ke server FTP. Hal ini kemungkinan disebabkan oleh server yang tidak tersedia atau ada kesalahan dalam konfigurasi server FTP Anda";
$GLOBALS['strErrorDBPlain']                     = "Telah terjadi Error sewaktu mengakses database";
$GLOBALS['strErrorDBSerious']                   = "Terdeteksi masalah serius pada database";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Tabel pada database rupanya rusak dan perlu perbaikan. Untuk informasi lebih lanjut tentang caranya memperbaiki tabel yang rusak mohon baca BAB <i>Troubleshooting</i> pada <i>Administrator Guide</i>.";
$GLOBALS['strErrorDBContact']                   = "Mohon hubungi Administrator dari server ini dan beritahukan masalah ini.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "It was not possible to link this banner to this zone because:";
$GLOBALS['strUnableToLinkBanner']               = "Gagal menghubungkan banner: ";
$GLOBALS['strErrorEditingCampaign']             = "Error updating campaign:";
$GLOBALS['strUnableToChangeCampaign']           = "Gagal melakukan perubahan ini disebabkan:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Gagal melakukan perubahan ini disebabkan:";
$GLOBALS['strDatesConflict']                    = "tanggal-tanggal berbentrokan dengan:";
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
$GLOBALS['strSirMadam']                         = "Ibu/Bpk";
$GLOBALS['strMailSubject']                      = "Laporan untuk Pemasang Iklan";
$GLOBALS['strAdReportSent']                     = "Laporan untuk Pemasang Iklan telah dikirim";
$GLOBALS['strMailHeader']                       = "Dengan Hormat {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Bersama E-mail ini kami kirimkan data statistik dari iklan banner untuk {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampanye diaktifkan";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampanye dihentikan";
$GLOBALS['strMailBannerActivated']              = "Kampanye Anda yang dibawah ini telah diaktifkan sehubungan \\ntanggal aktivasi telah sampai.";
$GLOBALS['strMailBannerDeactivated']            = "Kampanye yang dibawah ini telah dihentikan berdasarkan";
$GLOBALS['strMailFooter']                       = "Hormat Kami,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Kampanye-kampanya berikut ini telah dihentikan berdasarkan";
$GLOBALS['strMailNothingLeft']                  = "Jika Anda ingin melanjutkan pemasangan iklan di Website kami silakan hubungi kami.\\nKami menunggu kabar dari Anda.";
$GLOBALS['strClientDeactivated']                = "Kampanye ini pada saat sekarang tidak aktif sehubungan";
$GLOBALS['strBeforeActivate']                   = "tanggal aktivasi belum tercapai";
$GLOBALS['strAfterExpire']                      = "waktu habisnya sudah tercapai";
$GLOBALS['strNoMoreImpressions']                = "tidak ada impresi yang tertinggal";
$GLOBALS['strNoMoreClicks']                     = "tidak ada AdKlik yang tertinggal";
$GLOBALS['strNoMoreConversions']                = "there are no Sales remaining";
$GLOBALS['strWeightIsNull']                     = "bobotnya ditetapkan pada angka nol";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "targetnya ditetapkan pada angka nol";
$GLOBALS['strWarnClientTxt']                    = "Impresi, Adklik atau konversi yang tertinggal untuk banner Anda menuju kebawah {limit}. \\nBanner Anda akan dihentikan tampilannya bilamana tidak ada impresi, AdKlik atau konversi yang tersisa. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impresi/Adklik/konversi sudah hampir habis";
$GLOBALS['strNoViewLoggedInInterval']           = "Tidak ada impresi yang tercatat pada jangka waktu laporan ini";
$GLOBALS['strNoClickLoggedInInterval']          = "Tidak ada AdKlik yang tercatat pada jangka waktu laporan ini";
$GLOBALS['strNoConversionLoggedInInterval']     = "Tidak ada konversi yang tercatat pada jangka waktu laporan ini";
$GLOBALS['strMailReportPeriod']                 = "Laporan ini mencakup statistik tentang performa banner Anda di situs kami terhitung dari tanggal {startdate} s/d. tanggal {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Laporan ini mencakup seluruh statistik tentang performa banner Anda di situs kami terhitung s/d. tanggal {enddate}..";
$GLOBALS['strNoStatsForCampaign']               = "Untuk kampanye ini tidak ada statistik yang tersedia";
$GLOBALS['strImpendingCampaignExpiry']          = "Waktu berakhirnya kampanye dalam waktu dekat";
$GLOBALS['strYourCampaign']                     = "Kampanye Anda";
$GLOBALS['strTheCampiaignBelongingTo']          = "Kampanye ini dimiliki oleh";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} dibawah ini akan berakhir pada tanggal {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} dibawah ini impresinya yang tersisa lebih kurang dari {limit}.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Maka dengan itu kampanye tersebut akan dihentikan dan\\n banner-banner berikut ini akan dilumpuhkan secara otomatis:";

// Priority
$GLOBALS['strPriority']                         = "Prioritas";
$GLOBALS['strSourceEdit']                       = "Edit Sumber";

// Preferences
$GLOBALS['strPreferences']                      = "Preferensi";
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
$GLOBALS['strImpressionSR']                     = "AdView";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Kesan";
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
$GLOBALS['strClicks_short']                     = "AdClick";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Penyetelan Umum";
$GLOBALS['strGeneralSettings']              = "Penyetelan Umum";
$GLOBALS['strMainSettings']                 = "Penyetelan Utama";
$GLOBALS['strAdminSettings']                = "Penyetelan Administrasi";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Update Produk";
$GLOBALS['strViewPastUpdates']        = "Atur seluruh Update dan Backup yang pernah dilakukan";
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
$GLOBALS['strAgencyManagement']              = "Agency Management";
$GLOBALS['strAgency']                      = "Agency";
$GLOBALS['strAgencies']                   = "Agencies";
$GLOBALS['strAddAgency']                   = "Add new agency";
$GLOBALS['strAddAgency_Key']               = "Tambah zona <u>b</u>aru";
$GLOBALS['strTotalAgencies']               = "Total agencies";
$GLOBALS['strAgencyProperties']              = "Agency properties";
$GLOBALS['strNoAgencies']                 = "Tidak ada zona yang ditentukan";
$GLOBALS['strConfirmDeleteAgency']           = "Apakah benar Anda ingin menghapus zona ini?";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive agencies";
$GLOBALS['strInactiveAgenciesHidden']     = "zona yang tidak aktif tersembunyi";
$GLOBALS['strAllowAgencyEditConversions'] = "Allow this user to edit conversions";
$GLOBALS['strAllowMoreReports']           = "Allow 'More Reports' button";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Channel";
$GLOBALS['strChannels']                   = "Channels";
$GLOBALS['strChannelOverview']            = "Channel overview";
$GLOBALS['strChannelManagement']          = "Channel management";
$GLOBALS['strAddNewChannel']              = "Add new channel";
$GLOBALS['strAddNewChannel_Key']          = "Add <u>n</u>ew channel";
$GLOBALS['strChannelToWebsite']           = "Semua penerbit";
$GLOBALS['strNoChannels']                 = "There are currently no channels defined";
$GLOBALS['strNoChannelsAddWebsite']       = "There are currently no targeting channels defined, because there are no websites. To create a targeting channel, <a href='affiliate-edit.php'>add a new website</a> first.";

$GLOBALS['strEditChannelLimitations']     = "Edit channel limitations";
$GLOBALS['strChannelProperties']          = "Channel properties";
$GLOBALS['strChannelLimitations']         = "Pilihan Penyampaian";
$GLOBALS['strConfirmDeleteChannel']       = "Do you really want to delete this channel?";
$GLOBALS['strConfirmDeleteChannels']      = "Do you really want to delete this channel?";
$GLOBALS['strModifychannel']              = "Edit channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Nama dari Variabel";
$GLOBALS['strVariableDescription']     = "Deskripsi";
$GLOBALS['strVariableDataType']         = "Jenis Data";
$GLOBALS['strVariablePurpose']       = "Guna";
$GLOBALS['strGeneric']               = "Generik";
$GLOBALS['strBasketValue']           = "Basket value";
$GLOBALS['strNumItems']              = "Number of items";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Nomor";
$GLOBALS['strString']                 = "Perangkaian";
$GLOBALS['strTrackFollowingVars']     = "Lacak variabel yang berikut ini";
$GLOBALS['strAddVariable']             = "Tambahkan Variabel";
$GLOBALS['strNoVarsToTrack']         = "Tidak ada variabel untuk dilacak.";
$GLOBALS['strVariableHidden']       = "Hide variable to publishers?";
$GLOBALS['strVariableRejectEmpty']  = "Tolak bilamana kosong?";
$GLOBALS['strTrackingSettings']     = "Pengaturan Pelacak";
$GLOBALS['strTrackerType']          = "Jenis Pelacak";
$GLOBALS['strTrackerTypeJS']        = "Lacak variabel JavaScript";
$GLOBALS['strTrackerTypeDefault']   = "Track JavaScript variables (backwards compatible, escaping needed)";
$GLOBALS['strTrackerTypeDOM']       = "Track HTML elements using DOM";
$GLOBALS['strTrackerTypeCustom']    = "Custom JS code";
$GLOBALS['strVariableCode']         = "Kode pelacak berbasis Javascript";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Pemasang Iklan & Kampanye";
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
$GLOBALS['strForgotPassword']         = "Lupa kata sandi Anda?";
$GLOBALS['strPasswordRecovery']       = "Password recovery";
$GLOBALS['strEmailRequired']          = "Pengisian alamat E-mail diwajibkan!";
$GLOBALS['strPwdRecEmailSent']        = "Recovery e-mail sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Alamat E-mail tidak ditemukan";
$GLOBALS['strPwdRecPasswordSaved']    = "Kata Sandi baru sudah tersimpan. Silakan lanjut ke <a href='index.php'>Login</a>";
$GLOBALS['strPwdRecWrongId']          = "ID tidak dikenal";
$GLOBALS['strPwdRecEnterEmail']       = "Silakan masukkan alamat E-Mail Anda dibawah ini";
$GLOBALS['strPwdRecEnterPassword']    = "Silakan masukkan alamat E-Mail baru yang terhubung dengan kata sandi Anda dibawah ini";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "Password reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s password recovery";
$GLOBALS['strProceed']                = "Lanjut &gt;";
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
