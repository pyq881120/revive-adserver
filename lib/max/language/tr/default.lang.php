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
$GLOBALS['date_format']                 = "%m/%d/%Y";
$GLOBALS['time_format']                 = "%H:%i:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m/%Y";
$GLOBALS['day_format']                  = "%m/%d";
$GLOBALS['week_format']                 = "%W/%Y";
$GLOBALS['weekiso_format']              = "%V/%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Ana Sayfa";
$GLOBALS['strHelp']                     = "Yardım";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Baştan başla";
$GLOBALS['strNavigation']               = "Neredeyim";
$GLOBALS['strShortcuts']                = "Kısayollar";
$GLOBALS['strActions']                  = "Eylem";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Envanter";
$GLOBALS['strMaintenance']              = "Bakım";
$GLOBALS['strProbability']              = "Olasılık";
$GLOBALS['strInvocationcode']           = "Çağırma kodu";
$GLOBALS['strTrackerVariables']         = "İzleme değişkenleri";
$GLOBALS['strBasicInformation']         = "Temel Bilgiler";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Sözleşme Bilgileri";
$GLOBALS['strLoginInformation']         = "Giriş bilgileri";
$GLOBALS['strLogoutURL']                = "Çıkışta yönlendirilecek URL. <br />Varsayılan için boş bırakın";
$GLOBALS['strAppendTrackerCode']        = "İzleme kodunu ekle";
$GLOBALS['strOverview']                 = "Genel Görünüm";
$GLOBALS['strSearch']                   = "Arama";
$GLOBALS['strHistory']                  = "Geçmiş";
$GLOBALS['strDetails']                  = "Ayrıntılar";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Güncellemeleri Kontrol Et";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Yoğunlaştırılmış";
$GLOBALS['strVerbose']                  = "Gereksiz sözcükler";
$GLOBALS['strUser']                     = "Kullanıcı";
$GLOBALS['strEdit']                     = "Değiştir";
$GLOBALS['strCreate']                   = "Yarat";
$GLOBALS['strDuplicate']                = "Çoğalt";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Taşı";
$GLOBALS['strDelete']                   = "Sil";
$GLOBALS['strActivate']                 = "Etkinleştir";
$GLOBALS['strDeActivate']               = "Etkinliğini kaldır";
$GLOBALS['strConvert']                  = "Dönüştür";
$GLOBALS['strRefresh']                  = "Yenile";
$GLOBALS['strSaveChanges']              = "Değişiklikleri Kaydet";
$GLOBALS['strUp']                       = "Yukarı";
$GLOBALS['strDown']                     = "Aşağı";
$GLOBALS['strSave']                     = "Kaydet";
$GLOBALS['strCancel']                   = "İptal";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "Önceki";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Sonraki";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Evet";
$GLOBALS['strNo']                       = "Hayır";
$GLOBALS['strNone']                     = "Hiçbiri";
$GLOBALS['strCustom']                   = "Özel";
$GLOBALS['strDefault']                  = "Varsayılan";
$GLOBALS['strOther']                    = "Diğer";
$GLOBALS['strUnknown']                  = "Bilinmeyen";
$GLOBALS['strUnlimited']                = "Sınırsız";
$GLOBALS['strUntitled']                 = "Başlıksız";
$GLOBALS['strAll']                      = "tümü";
$GLOBALS['strAvg']                      = "Ort.";
$GLOBALS['strAverage']                  = "Ortalama";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Tüm";
$GLOBALS['strTotal']                    = "Toplam";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "etkin";
$GLOBALS['strFrom']                     = "-den/-dan";
$GLOBALS['strTo']                       = "-e/-a";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "bağlanmış";
$GLOBALS['strDaysLeft']                 = "Kalan gün";
$GLOBALS['strCheckAllNone']             = "Tümünü / Hiçbirini Seç";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "Hepsini Aç";
$GLOBALS['strCollapseAll']              = "Hepsini Kapat";
$GLOBALS['strShowAll']                  = "Hepsini Göster";
$GLOBALS['strNoAdminInterface']         = "Servis müsait değil...";
$GLOBALS['strFilterBySource']           = "kaynağa göre filtrele";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "Aşağıdaki alanlar hata içeriyor:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Devam etmeden önce ";
$GLOBALS['strFieldFixBeforeContinue2']  = "bu hataları düzeltmeniz gerekiyor.";
$GLOBALS['strDelimiter']                = "Ayraç";
$GLOBALS['strMiscellaneous']            = "Çeşitli";
$GLOBALS['strCollectedAllStats']        = "Tüm istatistikler";
$GLOBALS['strCollectedToday']           = "Bugün";
$GLOBALS['strCollectedYesterday']       = "Dün";
$GLOBALS['strCollectedThisWeek']        = "Bu hafta";
$GLOBALS['strCollectedLastWeek']        = "Geçen hafta";
$GLOBALS['strCollectedThisMonth']       = "Bu ay";
$GLOBALS['strCollectedLastMonth']       = "Geçen ay";
$GLOBALS['strCollectedLast7Days']       = "Son 7 gün";
$GLOBALS['strCollectedSpecificDates']   = "Belirli tarihler";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "Yönetici";
$GLOBALS['strWarning']                  = "Warning";
$GLOBALS['strNotice']                   = "Uyarı";
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
$GLOBALS['strPriority']                 = "Öncelik";
$GLOBALS['strPriorityLevel']            = "Öncelik düzeyi";
$GLOBALS['strPriorityTargeting']        = "Dağıtım";
$GLOBALS['strPriorityOptimisation']     = "Çeşitli"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Kısıtlamalar";
$GLOBALS['strNoLimitations']            = "Kısıtlama yok";
$GLOBALS['strCapping']                  = "Başlıklamak";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "İsim";
$GLOBALS['strSize']                     = "Boyut";
$GLOBALS['strWidth']                    = "Genişlik";
$GLOBALS['strHeight']                   = "Yükseklik";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Hedef";
$GLOBALS['strLanguage']                 = "Dil";
$GLOBALS['strDescription']              = "Tanımlama";
$GLOBALS['strVariables']                = "Değişkenler";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Yorumlar";

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
$GLOBALS['strLinkUserHelpUser']         = "Kullanıcı Adı";
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
$GLOBALS['strUserProperties']           = "Banner özellikleri";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "Kimlik Doğrulama";
$GLOBALS['strWelcomeTo']                = "Hoşgeldiniz ";
$GLOBALS['strEnterUsername']            = "Giriş yapabilmek için kullanıcı adınızı ve parolanızı giriniz";
$GLOBALS['strEnterBoth']                = "Lütfen kullanıcı adınızı ve parolanızı birlikte giriniz";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "Giriş";
$GLOBALS['strLogout']                   = "Çıkış";
$GLOBALS['strUsername']                 = "Kullanıcı Adı";
$GLOBALS['strPassword']                 = "Parola";
$GLOBALS['strPasswordRepeat']           = "Parola Tekrarı";
$GLOBALS['strAccessDenied']             = "Erişim reddedildi";
$GLOBALS['strUsernameOrPasswordWrong']  = "Girmiş olduğunuz kullanıcı adı ve/veya parola geçerli değil. Lütfen tekrar deneyiniz.";
$GLOBALS['strPasswordWrong']            = "Parola geçersiz";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Yeterli önceliğiniz yok";
$GLOBALS['strDuplicateClientName']      = "Girdiğiniz kullanıcı adı başkası tarafından kullanılıyor. Lütfen başka bir kullanıcı adıyla yeniden deneyiniz.";
$GLOBALS['strDuplicateAgencyName']      = "Girdiğiniz kullanıcı adı başkası tarafından kullanılıyor. Lütfen başka bir kullanıcı adıyla yeniden deneyiniz.";
$GLOBALS['strInvalidPassword']          = "The new password is invalid, please use a different password.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "The two passwords you supplied are not the same";
$GLOBALS['strRepeatPassword']           = "Repeat Password";
$GLOBALS['strOldPassword']              = "Old Password";
$GLOBALS['strNewPassword']              = "New Password";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "İstekler";
$GLOBALS['strImpressions']              = "Gösterimler";
$GLOBALS['strClicks']                   = "Tıklamalar";
$GLOBALS['strConversions']              = "Dönüşümler";
$GLOBALS['strCTRShort']                 = "TGO";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "Dn";
$GLOBALS['strCTR']                      = "TGO";
$GLOBALS['strCNVR']                     = "Satış Oranı";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Toplam Görüntülenme";
$GLOBALS['strTotalClicks']              = "Toplam Tıklama";
$GLOBALS['strTotalConversions']         = "Toplam Dönüşüm";
$GLOBALS['strViewCredits']              = "Gösterim Alacakları";
$GLOBALS['strClickCredits']             = "Tıklama Alacakları";
$GLOBALS['strConversionCredits']        = "Dönüşüm Alacakları";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Tarih Saat";
$GLOBALS['strTrackerID']                = "İzleme ID";
$GLOBALS['strTrackerName']              = "İzleme Adı";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Bannerlar";
$GLOBALS['strCampaigns']                = "Kampanya";
$GLOBALS['strCampaignID']               = "Kampanya ID";
$GLOBALS['strCampaignName']             = "Kampanya Adı";
$GLOBALS['strCountry']                  = "Ülke";
$GLOBALS['strStatsAction']              = "Eylem";
$GLOBALS['strWindowDelay']              = "Pencere gecikmesi";
$GLOBALS['strStatsVariables']           = "Değişkenler";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Aylık Kiralama";
$GLOBALS['strFinanceCTR']               = "TGO";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "Sepet değeri";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "Tarih";
$GLOBALS['strToday']                    = "Bugün";
$GLOBALS['strDay']                      = "Gün";
$GLOBALS['strDays']                     = "Günler";
$GLOBALS['strLast7Days']                = "Son 7 Gün";
$GLOBALS['strWeek']                     = "Hafta";
$GLOBALS['strWeeks']                    = "Haftalar";
$GLOBALS['strSingleMonth']              = "Ay";
$GLOBALS['strMonths']                   = "Aylar";
$GLOBALS['strDayOfWeek']                = "Haftanın günü";
$GLOBALS['strThisMonth']                = "Bu Ay";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Saat";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "saniye";
$GLOBALS['strMinutes']                  = "dakika";
$GLOBALS['strHours']                    = "saat";
$GLOBALS['strTimes']                    = "zamanlar";

// Advertiser
$GLOBALS['strClient']                       = "Reklamveren";
$GLOBALS['strClients']                      = "Reklamverenler";
$GLOBALS['strClientsAndCampaigns']          = "Reklamverenler ve Kampanyalar";
$GLOBALS['strAddClient']                    = "Yeni reklamveren ekle";
$GLOBALS['strAddClient_Key']                = "Ye<u>n</u>i reklamveren ekle";
$GLOBALS['strTotalClients']                 = "Tüm reklamverenler";
$GLOBALS['strClientProperties']             = "Reklamveren Bilgileri";
$GLOBALS['strClientHistory']                = "Reklamveren Geçmişi";
$GLOBALS['strNoClients']                    = "Henüz hiç reklamveren tanımlanmamış. Bir kampanya yaratabilmek için öncelikle <a href='advertiser-edit.php'>yeni bir reklamveren yarat</a>malısınız.";
$GLOBALS['strNoClientsForBanners']          = "Henüz hiç reklamveren tanımlanmamış. Bir kampanya yaratabilmek için öncelikle <a href='advertiser-edit.php'>yeni bir reklamveren yarat</a>malısınız.";
$GLOBALS['strConfirmDeleteClient']          = "Bu reklamvereni silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteClients']         = "Bu reklamvereni silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmResetClientStats']      = "Bu reklamcıya ait tüm istatistikleri silmek istediğinize emin misiniz?";
$GLOBALS['strSite']                         = "Boyut";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "Etkin olmayan reklamverenleri gizle";
$GLOBALS['strInactiveAdvertisersHidden']    = "Etkin olmayan reklamveren(ler) gizlendi";
$GLOBALS['strOverallAdvertisers']           = "Reklamcılar";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "Reklamverenler ve Kampanyalar";
// Advertisers properties
$GLOBALS['strContact']                          = "İletişim";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "Eposta";
$GLOBALS['strChars']                            = "karakter";
$GLOBALS['strSendAdvertisingReport']            = "Kampanya teslimat raporlarını epostayla gönder";
$GLOBALS['strNoDaysBetweenReports']             = "Teslimat raporları arasındaki gün sayısı";
$GLOBALS['strSendDeactivationWarning']          = "Bir kampanya otomatik olarak etkin olduğunda ya da etkinliği kalktığında eposta gönder";
$GLOBALS['strAllowClientModifyInfo']            = "Bu kullanıcı kendi ayarlarını düzenleyebilsin";
$GLOBALS['strAllowClientModifyBanner']          = "Bu kullanıcı kendi bannerlarını düzenleyebilsin";
$GLOBALS['strAllowClientAddBanner']             = "Bu kullanıcı kendi bannerlarını ekleyebilsin";
$GLOBALS['strAllowClientDisableBanner']         = "Bu kullanıcı kendi bannerlarının etkinliğini kaldırabilsin";
$GLOBALS['strAllowClientActivateBanner']        = "Bu kullanıcı kendi bannerlarını etkinleştirebilsin";
$GLOBALS['strAllowClientViewTargetingStats']    = "Bu kullanıcı hedefleme istatistiklerini görebilsin";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "Bu kullanıcı çevrimdışı dönüşümleri içe aktarabilsin";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Kampanya";
$GLOBALS['strCampaigns']                    = "Kampanya";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Tüm kampanyalar";
$GLOBALS['strActiveCampaigns']              = "Etkin kampanyalar";
$GLOBALS['strAddCampaign']                  = "Yeni kampanya ekle";
$GLOBALS['strAddCampaign_Key']              = "Ye<u>n</u>i kampanya ekle";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Yeni Kampanya Oluştur";
$GLOBALS['strModifyCampaign']               = "Kampanyayı düzenle";
$GLOBALS['strMoveToNewCampaign']            = "Yeni Kampanyaya Taşı";
$GLOBALS['strBannersWithoutCampaign']       = "Bannersız Kampanyalar";
$GLOBALS['strDeleteAllCampaigns']           = "Tüm kampanyaları sil";
$GLOBALS['strLinkedCampaigns']              = "Bağlı kampanyalar";
$GLOBALS['strCampaignStats']                = "Kampanya İstatistikleri";
$GLOBALS['strCampaignProperties']           = "Kampanya Bilgileri";
$GLOBALS['strCampaignOverview']             = "Kampanya Özeti";
$GLOBALS['strCampaignHistory']              = "Kampanya Geçmişi";
$GLOBALS['strNoCampaigns']                  = "Henüz tanımlanmış Kampanya yok";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Bu reklamverene ait tüm kampayaları silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteCampaign']        = "Bu kampanyayı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Bu kampanyayı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Üst reklamverenleri göster";
$GLOBALS['strHideParentAdvertisers']        = "Üst reklamverenleri gizle";
$GLOBALS['strHideInactiveCampaigns']        = "Etkin olmayan kampanyaları gizle";
$GLOBALS['strInactiveCampaignsHidden']      = "Etkin olmayan kampanya(lar) gizlendi";
$GLOBALS['strContractDetails']              = "Sözleşme ayrıntıları";
$GLOBALS['strInventoryDetails']             = "Envanter ayrıntıları";
$GLOBALS['strPriorityInformation']          = "Diğer kampanyalara göre öncelik";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Kampanya";
$GLOBALS['strHiddenAd']                     = "Reklam";
$GLOBALS['strHiddenAdvertiser']             = "Reklamveren";
$GLOBALS['strHiddenTracker']                = "İzleyici";
$GLOBALS['strHiddenWebsite']              = "Web sitesi";
$GLOBALS['strHiddenZone']                   = "Alan";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Klavuz yerleştirme";
$GLOBALS['strSelectUnselectAll']            = "Tümünü Seç / Seçme";
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
$GLOBALS['strDontExpire']                       = "Bu kampanyayı belirli bir tarihte bitirme";
$GLOBALS['strActivateNow']                      = "Bu kampanyayı hemen aktif et";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Düşük";
$GLOBALS['strHigh']                             = "Yüksek";
$GLOBALS['strExpirationDate']                   = "Bitiş Tarihi";
$GLOBALS['strExpirationDateComment']            = "Kampanya bu günün sonunda bitecek";
$GLOBALS['strActivationDate']                   = "Başlama Tarihi";
$GLOBALS['strActivationDateComment']            = "Kampanya bu tarihte başlayacak";
$GLOBALS['strRevenueInfo']                      = "Gelir Bilgisi";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "Kalan Gösterimler";
$GLOBALS['strClicksRemaining']                  = "Kalan Tıklamalar";
$GLOBALS['strConversionsRemaining']             = "Kalan Dönüşümler";
$GLOBALS['strImpressionsBooked']                = "Ayırtılmış Gösterimler";
$GLOBALS['strClicksBooked']                     = "Ayırtılmış Tıklamalar";
$GLOBALS['strConversionsBooked']                = "Ayırtılmış Dönüşümler";
$GLOBALS['strCampaignWeight']                   = "Kampanya Ağırlığı";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimize et";
$GLOBALS['strAnonymous']                        = "Bu kampanyanın reklamverenini ve web sitesini gizle ";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Bu kampanyadaki bannerları düşük öncelikli belirle.<br>Bu kampanya yüksek öncelikli kampanyalardan fırsat bulduğu zaman görüntülenecektir.";
$GLOBALS['strTargetPerDay']                     = "günlük.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Otomatik - Kalan gösterimi kalan günlere uygun şekilde dağıt.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Bu kampanyanın önceliği düşük olarak ayarlanmış,\\nancak ağırlığı 0 ya da ayarlanmamış.\\nBu durum, kampanya ağırlığına geçerli bir değer verilene kadar kampanyanın etkinliğinin kaldırılmasına\\nve bağlı bannerların gösteriminin durdurulmasına \\nneden olacak.\\n\\nDevam etmek istediğinize emin misiniz?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "Bu kampanyanın önceliği yüksek olarak ayarlanmış,\\nancak hedeflenen gösterim sayısı belirlenmemiş.\\nBu durum, geçerli bir hedef gösterim sayısı verilene kadar kampanyanın etkinliğinin kaldırılmasına\\nve bağlı bannerların gösteriminin durdurulmasına \\nneden olacak.\\n\\nDevam etmek istediğinize emin misiniz?";
$GLOBALS['strCampaignStatusPending']            = "Beklemede";
$GLOBALS['strCampaignStatusInactive']           = "etkin";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Duraklat";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Yeniden başlat";
$GLOBALS['strCampaignStatusDeleted']            = "Sil";
$GLOBALS['strCampaignApprove']                  = "Onaylandı";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "Duraklat";
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
$GLOBALS['strCampaignType']                     = "Kampanya Adı";
$GLOBALS['strType']                             = "Tip";
$GLOBALS['strContract']                         = "İletişim";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "İletişim";
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
$GLOBALS['strTracker']                    = "İzleyici";
$GLOBALS['strTrackers']                   = "İzleyici";
$GLOBALS['strTrackerOverview']            = "İzleyici Genel Görünümü";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "Yeni bir izleyici ekle";
$GLOBALS['strAddTracker_Key']             = "Ye<u>n</u>i bir izleyici ekle";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Bu reklamverene ait tüm izleyicileri silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteTrackers']      = "Bu izleyiciyi silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteTracker']       = "Bu izleyiciyi silmek istediğinize emin misiniz?";
$GLOBALS['strDeleteAllTrackers']          = "Tüm izleyicileri sil";
$GLOBALS['strTrackerProperties']          = "İzleyici Özellikleri";
$GLOBALS['strTrackerOverview']            = "İzleyici Genel Görünümü";
$GLOBALS['strModifyTracker']              = "İzleyiciyi düzenle";
$GLOBALS['strLog']                        = "Kayda alınsın mı?";
$GLOBALS['strDefaultStatus']              = "Varsayılan Durum";
$GLOBALS['strStatus']                     = "Durum";
$GLOBALS['strLinkedTrackers']             = "Bağlı İzleyiciler";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Dönüştürme penceresi";
$GLOBALS['strUniqueWindow']               = "Tekil pencere";
$GLOBALS['strClick']                      = "Tıkla";
$GLOBALS['strView']                       = "Görüntüle";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Gösterimler";
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
$GLOBALS['strConversionType']             = "Dönüşüm tipi";
$GLOBALS['strLinkCampaignsByDefault']     = "Yeni yaratılan kampanyaları doğrudan bağla";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Banner";
$GLOBALS['strBanners']                       = "Bannerlar";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Yeni banner ekle";
$GLOBALS['strAddBanner_Key']                 = "Ye<u>n</u>i banner ekle";
$GLOBALS['strBannerToCampaign']              = "Kampanyanız";
$GLOBALS['strModifyBanner']                  = "Banner düzenle";
$GLOBALS['strActiveBanners']                 = "Etkin bannerlar";
$GLOBALS['strTotalBanners']                  = "Tüm bannerlar";
$GLOBALS['strShowBanner']                    = "Banneri göster";
$GLOBALS['strShowAllBanners']                = "Tüm Bannerları göster";
$GLOBALS['strShowBannersNoAdViews']          = "Görüntülemeyen Bannerları göster";
$GLOBALS['strShowBannersNoAdClicks']         = "Tıklanmayan bannerları göster";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Tüm bannerları sil";
$GLOBALS['strActivateAllBanners']            = "Tüm bannerları etkinleştir";
$GLOBALS['strDeactivateAllBanners']          = "Tüm bannerların etkinliğini kaldır";
$GLOBALS['strBannerOverview']                = "Banner Genel Görünüm";
$GLOBALS['strBannerProperties']              = "Banner Özellikleri";
$GLOBALS['strBannerHistory']                 = "Banner Geçmişi";
$GLOBALS['strBannerNoStats']                 = "Bu bannera ait istatistik yok";
$GLOBALS['strNoBanners']                     = "Tanımlanmış Banner Yok";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "Henüz tanımlı bir web sitesi yok. Bir alan yaratmak için öncelikle <a href='affiliate-edit.php'>yeni bir web sitesi yarat</a>malısınız.";
$GLOBALS['strConfirmDeleteBanner']           = "Bu bannerı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteBanners']          = "Bu bannerı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Bu kampanyaya ait tüm bannerları silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmResetBannerStats']       = "Bu bannera ait tüm istatistikleri silmek istediğinize emin misiniz?";
$GLOBALS['strShowParentCampaigns']           = "Üst kampanyaları göster";
$GLOBALS['strHideParentCampaigns']           = "Üst kampanyaları gizle";
$GLOBALS['strHideInactiveBanners']           = "Etkin olmayan bannerları gizle";
$GLOBALS['strInactiveBannersHidden']         = "Etkin olmayan banner(lar) gizlendi";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "Metin reklamlara başka banner eklemeniz olanaklı değildir.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Uyarı, muhtemelen kayıp";
$GLOBALS['strWarningMissingClosing']         = "kapatma tag'i  \">\"";
$GLOBALS['strWarningMissingOpening']         = "açma tag'i \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Her şeye rağmen Gönder";
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
$GLOBALS['strChooseBanner']         = "Lütfen banner tipini seçiniz";
$GLOBALS['strMySQLBanner']             = "Yerel banner (SQL)";
$GLOBALS['strWebBanner']               = "Yerel banner (Webserver)";
$GLOBALS['strURLBanner']               = "Harici banner";
$GLOBALS['strHTMLBanner']              = "HTML banner";
$GLOBALS['strTextBanner']              = "Yazı Olarak Reklam";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Varolan resmi korumak mı, <br />yoksa yeni bir tane mi <br />yüklemek istersiniz?";
$GLOBALS['strUploadOrKeepAlt']        = "Varolan yedek resmi korumak mı, <br /> yoksa yeni bir tane mi <br />yüklemek istersiniz? ";
$GLOBALS['strNewBannerFile']         = "Bu banner için kullanacağınız <br/>resmi seçiniz<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Tarayıcının zengin medya <br />desteklememesi halinde <br /> kullanmak istediğiniz yedek resmi seçiniz <br /><br />";
$GLOBALS['strNewBannerURL']         = "Resim URL (http:// dahil yazın)";
$GLOBALS['strURL']                     = "Hedef URL (http:// dahil yazın)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Anahtar Kelimeler";
$GLOBALS['strTextBelow']             = "Resim altına gelen yazı";
$GLOBALS['strWeight']                 = "Ağırlığı";
$GLOBALS['strAlt']                     = "Alt(ernatif) yazı";
$GLOBALS['strStatusText']            = "Durum yazısı";
$GLOBALS['strBannerWeight']            = "Banner ağırlığı";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Jenerik HTML banner";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Jenerik";
$GLOBALS['strSwfTransparency']		   = "Şeffaf zemine izin ver";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Flash dosyaları içerisindeki sabit URL bağlantıları denetle";
$GLOBALS['strConvertSWFLinks']        = "Flash linklerini dönüştür";
$GLOBALS['strHardcodedLinks']        = "Elle girilmiş, sabit bağlantılar";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Daha hızlı yüklenmesi için SWF dosyasını sıkıştır (Flash 6 player gerekli)";
$GLOBALS['strOverwriteSource']        = "Kaynak parametresinin üzerine yaz";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML şablonu";
$GLOBALS['strChooseNetwork']        = "Kullanacağınız şablonu seçiniz";
$GLOBALS['strMoreInformation']        = "Daha fazla bilgi...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Tıklamaları izle";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Teslimat Seçenekleri";
$GLOBALS['strACL']                        = "Teslimat";
$GLOBALS['strACLAdd']                     = "Yeni Sınırlama Ekle";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Kısıtlama yok";
$GLOBALS['strApplyLimitationsTo']         = "Kısıtlamaları şunun için uygula:";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Tüm kısıtlamaları kaldır";
$GLOBALS['strEqualTo']                    = "eşittir";
$GLOBALS['strDifferentFrom']              = "farklıdır";
$GLOBALS['strLaterThan']                  = "daha geçtir";
$GLOBALS['strLaterThanOrEqual']           = "daha geç ya da eşittir";
$GLOBALS['strEarlierThan']                = "daha erkendir ";
$GLOBALS['strEarlierThanOrEqual']         = "daha erken ya da eşittir";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "daha fazladır";
$GLOBALS['strLessThan']                   = "daha azdır";
$GLOBALS['strAND']                        = "VE";                          // logical operator
$GLOBALS['strOR']                         = "VEYA";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Bu bannerı yalnızca şu durumda göster:";
$GLOBALS['strWeekDay']                    = "Haftaiçi";
$GLOBALS['strWeekDays']                   = "Haftaiçi";
$GLOBALS['strTime']                       = "Zaman";
$GLOBALS['strUserAgent']                  = "Kullanıcı Temsilcisi";
$GLOBALS['strDomain']                     = "Alan";
$GLOBALS['strClientIP']                   = "Müşteri IP";
$GLOBALS['strSource']                     = "Kaynak";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Tarayıcı";
$GLOBALS['strOS']                         = "İşletim Sistemi";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "İl";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Teslimat Kısıtlamaları";

$GLOBALS['strDeliveryCapping']            = "Ziyaretçi başına teslimat sınırlaması";
$GLOBALS['strDeliveryCappingReset']       = "Görüntüleme sayaçlarını şundan sonra sıfırla:";
$GLOBALS['strDeliveryCappingTotal']       = "toplam";
$GLOBALS['strDeliveryCappingSession']     = "oturum başına";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Banner gösterimlerini şununla sınırla:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Kampanya gösterimlerini şununla sınırla:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Alan gösterimlerini şununla sınırla:";

// Website
$GLOBALS['strAffiliate']                = "Web sitesi";
$GLOBALS['strAffiliates']                 = "Web Siteleri ";
$GLOBALS['strAffiliatesAndZones']        = "Web Siteleri ve Alanlar";
$GLOBALS['strAddNewAffiliate']            = "Yeni web sitesi ekle";
$GLOBALS['strAddNewAffiliate_Key']        = "Ye<u>n</u>i web sitesi ekle";
$GLOBALS['strAddAffiliate']                = "Yayıncı Oluştur";
$GLOBALS['strAffiliateProperties']        = "Web Sitesi Özellikleri";
$GLOBALS['strAffiliateOverview']        = "Yayıncı Önizleme";
$GLOBALS['strAffiliateHistory']            = "Web Sitesi Geçmişi";
$GLOBALS['strZonesWithoutAffiliate']    = "Web Sitesi olmayan alanlar";
$GLOBALS['strMoveToNewAffiliate']        = "Yeni web sitesine taşı";
$GLOBALS['strNoAffiliates']                = "Henüz tanımlı bir web sitesi yok. Bir alan yaratmak için öncelikle <a href='affiliate-edit.php'>yeni bir web sitesi yarat</a>malısınız.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Bu web sitesini silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Bu web sitesini silmek istediğinize emin misiniz?";
$GLOBALS['strMakePublisherPublic']        = "Bu web sitesine ait tüm alanları herkesçe erişilebilir yap";
$GLOBALS['strAffiliateInvocation']      = "Çağırma Kodu";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Tüm web siteleri";
$GLOBALS['strInactiveAffiliatesHidden'] = "Etkin olmayan web siteleri gizlendi";
$GLOBALS['strShowParentAffiliates']     = "Üst web sitelerini görüntüle ";
$GLOBALS['strHideParentAffiliates']     = "Üst web sitelerini gizle";

// Website (properties)
$GLOBALS['strWebsite']                      = "Web sitesi";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "Anımsatıcı";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Bu kullanıcı kendi ayarlarını düzenleyebilsin";
$GLOBALS['strAllowAffiliateModifyZones']    = "Bu kullanıcının kendi alanlarını düzenlemesine izin ver";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Bu kullanıcının kendi alanlarına banner bağlamasına izin ver";
$GLOBALS['strAllowAffiliateAddZone']        = "Bu kullanıcının yeni alanlar tanımlamasına izin ver";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Bu kullanıcının varolan alanları silmesine izin ver";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Bu kullanıcının çağırma kodu oluşturmasına izin ver";
$GLOBALS['strAllowAffiliateZoneStats']      = "Bu kullanıcının alan istatistiklerini görüntülemesine izin ver";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Bu kullanıcının yalnızca onaylanmış ya da beklemede duran dönüşümleri görüntülemesine izin ver";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Ödeme bilgileri";
$GLOBALS['strAddress']                      = "Adres";
$GLOBALS['strPostcode']                     = "Posta kodu";
$GLOBALS['strCity']                         = "İl";
$GLOBALS['strCountry']                      = "Ülke";
$GLOBALS['strPhone']                        = "Telefon";
$GLOBALS['strFax']                          = "Belgegeçer";
$GLOBALS['strAccountContact']               = "Hesap aracısı";
$GLOBALS['strPayeeName']                    = "Ödeme alıcısının adı";
$GLOBALS['strTaxID']                        = "Vergi numarası";
$GLOBALS['strModeOfPayment']                = "Ödeme tipi";
$GLOBALS['strPaymentChequeByPost']          = "Posta ile çek";
$GLOBALS['strCurrency']                     = "Para birimi";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Diğer bilgiler";
$GLOBALS['strUniqueUsersMonth']             = "Aylık tekil kullanıcı";
$GLOBALS['strUniqueViewsMonth']             = "Aylık tekil gösterim";
$GLOBALS['strPageRank']                     = "Page Rank";
$GLOBALS['strCategory']                     = "Kategori";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Yardım dosyası";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Web Siteleri ve Alanlar";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Alan";
$GLOBALS['strZones']                        = "Alanlar";
$GLOBALS['strAddNewZone']                   = "Yeni alan ekle";
$GLOBALS['strAddNewZone_Key']               = "Ye<u>n</u>i alan ekle";
$GLOBALS['strAddZone']                      = "Alan Oluştur";
$GLOBALS['strModifyZone']                   = "Alanı düzenle";
$GLOBALS['strZoneToWebsite']                = "Web sitesi yok";
$GLOBALS['strLinkedZones']                  = "Bağlı alanlar";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Alan Genel Görünüş";
$GLOBALS['strZoneProperties']               = "Alan Özellikleri";
$GLOBALS['strZoneHistory']                  = "Alan Geçmişi";
$GLOBALS['strNoZones']                      = "Henüz hiçbir alan tanımlanmamış";
$GLOBALS['strNoZonesAddWebsite']            = "Henüz tanımlı bir web sitesi yok. Bir alan yaratmak için öncelikle <a href='affiliate-edit.php'>yeni bir web sitesi yarat</a>malısınız.";
$GLOBALS['strConfirmDeleteZone']            = "Bu alanı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteZones']           = "Bu alanı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "Alan tipi";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Düğme veya Dikdörtgen";
$GLOBALS['strInterstitial']                 = "Sayfa arası reklamı \"veya\" Yüzen reklam";
$GLOBALS['strPopup']                        = "Açılır pencere (popup) reklam";
$GLOBALS['strTextAdZone']                   = "Metin reklam";
$GLOBALS['strEmailAdZone']                  = "Eposta/bülten alanı";
$GLOBALS['strZoneClick']                    = "Tıklama izleyen alan";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Eşleşen bannerları göster";
$GLOBALS['strHideMatchingBanners']          = "Eşleşen bannerları gizle";
$GLOBALS['strBannerLinkedAds']              = "Bu alana bağlı bannerlar";
$GLOBALS['strCampaignLinkedAds']            = "Bu alana bağlı kampanyalar";
$GLOBALS['strTotalZones']                   = "Tüm alanlar";
$GLOBALS['strInactiveZonesHidden']          = "etkin olmayan alan(lar) gizlendi";
$GLOBALS['strWarnChangeZoneType']           = "Alan tipini metin ya da eposta'ya çevirmek, bu alan tiplerindeki kısıtlamalardan dolayı bağlantılı tüm banner/kampanyaların bağını keser\\n<ul>\\n<li>Metin alanları sadece metin reklamlara bağlanabilir</li>\\n<li>Eposta alanı kampanyalarında aynı anda sadece bir aktif banner olabilir</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Alan ölçüsünü değiştirmek, yeni ölçüde olmayan bannerların alanla bağını keser ve bağlantılı kampanyalarda yer alan yeni ölçüdeki tüm bannerları alanla bağlantılandırır';
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
$GLOBALS['strAdvanced']                    = "Gelişmiş";
$GLOBALS['strChains']                    = "Zincirler";
$GLOBALS['strChainSettings']            = "Zincir ayarları";
$GLOBALS['strZoneNoDelivery']            = "Bu alana ait hiçbir banner <br/>tanımlanmamışsa şunu dene...";
$GLOBALS['strZoneStopDelivery']            = "Gösterimi durdur ve banner gösterme";
$GLOBALS['strZoneOtherZone']            = "Yerine seçilen alanı göster";
$GLOBALS['strZoneUseKeywords']            = "Aşağıdaki anahtar cümlecikleri kullanan bannerları göster";
$GLOBALS['strZoneAppend']                = "Bu alanda gösterilen bannerlara her zaman aşağıdaki HTML kodunu ekle";
$GLOBALS['strAppendSettings']            = "Başına ve sonuna ekleme ayarları";
$GLOBALS['strZoneForecasting']            = "Alan Tahmini ayarları";
$GLOBALS['strZonePrependHTML']            = "Bu alanda gösterilen bannerların başına her zaman aşağıdaki HTML kodunu ekle";
$GLOBALS['strZoneAppendHTML']            = "Bu alanda gösterilen metin reklamların sonuna her zaman aşağıdaki HTML kodunu ekle";
$GLOBALS['strZoneAppendNoBanner']        = "Banner gösterilemese bile ekle";
$GLOBALS['strZoneAppendType']            = "Ekleme tipi";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML kodu";
$GLOBALS['strZoneAppendZoneSelection']    = "Açılır pencere veya arada";
$GLOBALS['strZoneAppendSelectZone']        = "Bu alan tarafından gösterilen tüm bannerlara aşağıdaki açılır pencere veya ara kodunu ekle";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Seçili alanla bağlantılı bannerlar şu anda aktif değil. <br />Takip edilecek alan zinciri şöyle:";
$GLOBALS['strZoneProbNullPri']            = "Bu alanla bağlantılı aktif banner yok.";
$GLOBALS['strZoneProbListChainLoop']    = "Alan zincirini takip etmek sonsuz bir döngüye yol açabilir. Bu alan için gösterim durduruldu.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Lütfen bu alana neyin bağlanacağını seçin";
$GLOBALS['strLinkedBanners']            = "Tek tek banner bağla";
$GLOBALS['strCampaignDefaults']            = "Bannerları ekli olduğu kampanyaya göre bağla";
$GLOBALS['strLinkedCategories']         = "Bannerları kategorisine göre bağla";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interaktif";
$GLOBALS['strRawQueryString']            = "Anahtar Kelime";
$GLOBALS['strIncludedBanners']            = "Bağlantılı bannerlar";
$GLOBALS['strLinkedBannersOverview']    = "İlişkili banner önizleme";
$GLOBALS['strLinkedBannerHistory']        = "İlişkili banner geçmişi";
$GLOBALS['strNoZonesToLink']            = "Bu bannerın bağlanabileceği herhangi bir alan bulunmamaktadır";
$GLOBALS['strNoBannersToLink']            = "Bu alana ilişkilendirilecek uygun banner bulunmamaktadır";
$GLOBALS['strNoLinkedBanners']            = "Bu alana ilişkilnedirilecek herhangi bir banner bulunmamktadır";
$GLOBALS['strMatchingBanners']            = "{count} uygun banner";
$GLOBALS['strNoCampaignsToLink']        = "Bu alana bağlanabilecek hiçbir kampanya bulunmamaktadır";
$GLOBALS['strNoTrackersToLink']            = "Bu kampanyaya bağlanabilecek hiçbir takipçi bulunmamaktadır";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Bu kampanyanın bağlanabileceği alan bulunmamaktadır";
$GLOBALS['strSelectBannerToLink']        = "Bu alana bağlamak istediğiniz bannerı seçin:";
$GLOBALS['strSelectCampaignToLink']        = "Bu alana bağlamak istediğiniz kampanyayı seçin:";
$GLOBALS['strSelectAdvertiser']         = "Reklamveren Seçin";
$GLOBALS['strSelectPlacement']          = "Kampanya Seçin";
$GLOBALS['strSelectAd']                 = "Banner Seçin";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "İzleme kodunu ekle";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Beklemede";
$GLOBALS['strStatusApproved']           = "Onaylandı";
$GLOBALS['strStatusDisapproved']        = "Onaylanmadı";
$GLOBALS['strStatusDuplicate']          = "Çoğalt";
$GLOBALS['strStatusOnHold']             = "Tutuluyor";
$GLOBALS['strStatusIgnore']             = "Yok say";
$GLOBALS['strConnectionType']           = "Tip";
$GLOBALS['strConnTypeSale']             = "Satış";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Kayıt";
$GLOBALS['strShortcutEditStatuses'] = "Durumları düzenle";
$GLOBALS['strShortcutShowStatuses'] = "Durumları göster";

// Statistics
$GLOBALS['strStats']                     = "İstatistikler";
$GLOBALS['strNoStats']                   = "Henüz istatistik bulunmamakta";
$GLOBALS['strNoTargetingStats']          = "Henüz hiç hedefleme istatistiği bulunmamakta";
$GLOBALS['strNoStatsForPeriod']          = "Henüz %s - %s periyoduna ait istatistik bulunmamakta";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Henüz %s - %s periyoduna ait hedefleme istatistiği bulunmamakta";
$GLOBALS['strConfirmResetStats']         = "Mevcut tüm istatistikleri silmek istediğinize emin misiniz?";
$GLOBALS['strGlobalHistory']             = "Genel Geçmiş";
$GLOBALS['strDailyHistory']              = "Günlük Geçmiş";
$GLOBALS['strDailyStats']                = "Günlük istatistikler";
$GLOBALS['strWeeklyHistory']             = "Haftalık geçmiş";
$GLOBALS['strMonthlyHistory']            = "Aylık geçmiş";
$GLOBALS['strCreditStats']               = "Kredi istatistikleri";
$GLOBALS['strDetailStats']               = "Detaylı istatistikler";
$GLOBALS['strTotalThisPeriod']           = "Bu periyoda ait toplam";
$GLOBALS['strAverageThisPeriod']         = "Bu dönemde ortalama";
$GLOBALS['strPublisherDistribution']     = "Web Sitesi Dağılımı";
$GLOBALS['strCampaignDistribution']      = "Kampanya Dağılımı";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "İstatistikleri temizle";
$GLOBALS['strSourceStats']               = "Kaynak istatistikler";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Görmek istediğiniz kaynağı seçiniz:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Hedefleme İstatistikleri";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Şuna göre görüntüle:";
$GLOBALS['strBreakdownByDay']            = "Gün";
$GLOBALS['strBreakdownByWeek']           = "Hafta";
$GLOBALS['strBreakdownByMonth']          = "Ay";
$GLOBALS['strBreakdownByDow']            = "Haftanın günü";
$GLOBALS['strBreakdownByHour']           = "Saat";
$GLOBALS['strItemsPerPage']              = "Sayfa başına öğe";
$GLOBALS['strDistributionHistory']       = "Dağılım geçmişi";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "İstatistiklerin <u>G</u>rafiğini göster";
$GLOBALS['strExportStatisticsToExcel']   = "İstatistikleri <u>E</u>xcel'e aktar";
$GLOBALS['strGDnotEnabled']              = "Grafikleri görüntüleyebilmek için PHP'de GD'nin etkin olması gerekmektedir. <br/>Lütfen, GD'nin nasıl yükleneceğini de içeren şu sayfaya bakın: <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a>.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Sunucular";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Süresi dolmuş";
$GLOBALS['strExpiration']             = "Bitiş";
$GLOBALS['strNoExpiration']           = "Bitiş tarihi belirtilmemiş";
$GLOBALS['strEstimated']              = "Tahmini bitiş tarihi";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Kampanya Geçmişi";

// Reports
$GLOBALS['strReports']                = "Raporlar";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Üreteceğiniz rapor tipini seçiniz";
$GLOBALS['strStartDate']              = "Başlama Tarihi";
$GLOBALS['strEndDate']                = "Bitiş Tarihi";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "Kısıtlamalar";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Tüm reklamverenler";
$GLOBALS['strAnonAdvertisers']           = "İsimsiz reklamverenler";
$GLOBALS['strAllPublishers']             = "Tüm web siteleri";
$GLOBALS['strAnonPublishers']            = "İsimsiz web siteleri";
$GLOBALS['strAllAvailZones']             = "Tüm uygun alanlar";

// Userlog
$GLOBALS['strUserLog']                = "Kullanıcı kayıtları";
$GLOBALS['strUserLogDetails']        = "Kullanıcı kayıt detayları";
$GLOBALS['strDeleteLog']            = "Kayıtları Sil";
$GLOBALS['strAction']                = "Eylem";
$GLOBALS['strNoActionsLogged']        = "Kaydedilmiş aktivite yok";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Direkt seçim";
$GLOBALS['strChooseInvocationType']        = "Lütfen banner çağırma tipini seçiniz";
$GLOBALS['strGenerate']                    = "Oluştur";
$GLOBALS['strParameters']                = "Etiket ayarları";
$GLOBALS['strFrameSize']                = "Çerçeve boyutu";
$GLOBALS['strBannercode']                = "Banner kodu";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Rapor listesine geri dön";
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
$GLOBALS['strMySQLError']                       = "SQL Hatası:";
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
$GLOBALS['strLogErrorClients']                  = "[phpAds] Veritabanından reklamverenleri alırken bir hata oluştu.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Veritabanından bannerları alırken bir hata oluştu.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Veritabanından gösterimleri alırken bir hata oluştu.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Veritabanından tıklamaları alırken bir hata oluştu.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Veritabanından dönüşümleri alırken bir hata oluştu.";
$GLOBALS['strErrorViews']                       = "Gösterim sayısını belirtmelisiniz veya sınırsız seçeneğini işaretlemelisiniz!";
$GLOBALS['strErrorNegViews']                    = "Negatif gösterim sayıları geçersizdir";
$GLOBALS['strErrorClicks']                      = "Tıklanma sayısını belirtmelisiniz veya sınırsız seçeneğini işaretlemelisiniz!";
$GLOBALS['strErrorNegClicks']                   = "Negatif tıklanma sayıları geçersizdir";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Uygun kayıt bulunamadı";
$GLOBALS['strErrorOccurred']                    = "Bir hata oluştu";
$GLOBALS['strErrorUploadSecurity']              = "Olası bir güvenlik problemi saptandı, yükleme durduruldu!";
$GLOBALS['strErrorUploadBasedir']               = "Muhtemelen safemode ya da open_basedir kısıtlamalarından dolayı yüklenen dosyaya ulaşılamadı";
$GLOBALS['strErrorUploadUnknown']               = "Bilinmeyen bir nedenden dolayı yüklenen dosyaya ulaşılamadı. Lütfen PHP ayarlarınızı kontrol edin";
$GLOBALS['strErrorStoreLocal']                  = "Yerel klasöre bannerı kaydederken hata oluştu. Yerel dizin ayarlarının yanlış yapıldığından dolayı olabilir.";
$GLOBALS['strErrorStoreFTP']                    = "Banner FTP sunucuya gönderilirken hata oluıştu. Bu sunucunun uygun olmadığından veya FTP sunucunun ayarlarının yanlış yapıldığından dolayı olabilir";
$GLOBALS['strErrorDBPlain']                     = "Veritabanına erişilirken bir hata oluştu";
$GLOBALS['strErrorDBSerious']                   = "Veritabanıyla ilgili ciddi bir problem tespit edildi";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Veritabanı tablosu muhtemelen bozuk ve onarılması gerekiyor. Bozulmuş tabloların onarımı hakkında daha fazla bilgi için lütfen <i>Yönetici klavuzu</i>'nun <i>Sorun Çözme</i> bölümünü okuyun.";
$GLOBALS['strErrorDBContact']                   = "Lütfen bu sunucunun yöneticisiyle iletişime geçin ve problem hakkında bilgilendirin.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "Belirtilen nedenle banner bu alana bağlanamadı:";
$GLOBALS['strUnableToLinkBanner']               = "Bu banner bağlanamıyor: _";
$GLOBALS['strErrorEditingCampaign']             = "Kampanya güncellenirken hata:";
$GLOBALS['strUnableToChangeCampaign']           = "Belirtilen nedenle bu değişiklik uygulanamadı:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Belirtilen nedenle bu değişiklik uygulanamadı:";
$GLOBALS['strDatesConflict']                    = "tarih çakışıyor: ";
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
$GLOBALS['strSirMadam']                         = "Bay/Bayan";
$GLOBALS['strMailSubject']                      = "Reklamveren raporu";
$GLOBALS['strAdReportSent']                     = "Reklamcı Raporu Gönderildi";
$GLOBALS['strMailHeader']                       = "Sayın {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "{clientname} için banner istatistiklerini aşağıda bulacaksınız:";
$GLOBALS['strMailBannerActivatedSubject']       = "Kampanya aktifleştirildi";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Kampanya pasifleştirildi";
$GLOBALS['strMailBannerActivated']              = "Başlangıç tarihine erişildiği için aşağıdaki kampanyanız aktifleştirildi.";
$GLOBALS['strMailBannerDeactivated']            = "Aşağıda gösterilen kampanyanız pasifleştirildi, çünkü";
$GLOBALS['strMailFooter']                       = "Saygılar,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Aşağıdaki bannerlar kapatıldı çünkü";
$GLOBALS['strMailNothingLeft']                  = "Sitemizde reklam yayınlamaya devam etmek istiyorsanız, lütfen bizimle iletişime geçin.\\nİletişime geçmeniz bizi memnun eder.";
$GLOBALS['strClientDeactivated']                = "Bu kampanya şu anda aktif değil, çünkü";
$GLOBALS['strBeforeActivate']                   = "aktivasyon tarihine henüz ulaşılmadı";
$GLOBALS['strAfterExpire']                      = "sona erme tarihine ulaşıldı";
$GLOBALS['strNoMoreImpressions']                = "gösterim kalmadı";
$GLOBALS['strNoMoreClicks']                     = "tıklama kalmadı";
$GLOBALS['strNoMoreConversions']                = "satış hakkı kalmadı";
$GLOBALS['strWeightIsNull']                     = "ağırlığı sıfıra ayarlı";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "Bannerlarınız için kalan Gösterim, Tıklama veya Dönüşüm sayıları {limit} altına düşüyor. \\nGösterim, Tıklama veya Dönüşümü biten bannerlarınız pasifleştirilecektir. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Gösterim/Tıklanma/Dönüşüm düşük";
$GLOBALS['strNoViewLoggedInInterval']           = "Bu rapor süresince gösterim kaydedilmedi";
$GLOBALS['strNoClickLoggedInInterval']          = "Bu rapor süresince tıklama kaydedilmedi";
$GLOBALS['strNoConversionLoggedInInterval']     = "Bu rapor süresince dönüşüm kaydedilmedi";
$GLOBALS['strMailReportPeriod']                 = "Bu rapor {startdate} tarihi ile {enddate} tarihleri arasındaki istatistikleri içerir.";
$GLOBALS['strMailReportPeriodAll']              = "Bu rapor {enddate} tarihine kadarki tüm istatistikleri içerir.";
$GLOBALS['strNoStatsForCampaign']               = "Bu kampanyaya ait istatistik bulunmuyor";
$GLOBALS['strImpendingCampaignExpiry']          = "Kampanya bitişi yakın";
$GLOBALS['strYourCampaign']                     = "Kampanyanız";
$GLOBALS['strTheCampiaignBelongingTo']          = "{clientname} reklamverenine ait aşağıdaki kampanya";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{date} tarihinde bitiyor.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "Aşağıda gösterilen {clientname} {limit} değerinden az gösterim hakkına sahip.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Sonuç olarak kampanya yakında otomatik olarak pasifleştirilecek ve \\nbelirtilen bannerlar da beraberinde pasif olacak.";

// Priority
$GLOBALS['strPriority']                         = "Öncelik";
$GLOBALS['strSourceEdit']                       = "Kaynakları Düzenle";

// Preferences
$GLOBALS['strPreferences']                      = "Tercihler";
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
$GLOBALS['strNumberOfItems']                       = "Öğe sayısı";
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
$GLOBALS['strImpressionSR']                     = "Gösterimler";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Gösterimler";
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
$GLOBALS['strClicks_short']                     = "Tıklamalar";
$GLOBALS['strCTR_short']                        = "TGO";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Genel Ayarlar";
$GLOBALS['strGeneralSettings']              = "Genel Ayarlar";
$GLOBALS['strMainSettings']                 = "Ana Ayarlar";
$GLOBALS['strAdminSettings']                = "Yönetici Ayarları";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Ürün Güncellemeleri";
$GLOBALS['strViewPastUpdates']        = "Eski Güncelleme ve Yedekleri Yönet";
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
$GLOBALS['strAgencyManagement']              = "Hesap Yönetimi";
$GLOBALS['strAgency']                      = "Hesap";
$GLOBALS['strAgencies']                   = "Hesap";
$GLOBALS['strAddAgency']                   = "Yeni hesap ekle";
$GLOBALS['strAddAgency_Key']               = "Ye<u>n</u>i hesap ekle";
$GLOBALS['strTotalAgencies']               = "Tüm hesaplar";
$GLOBALS['strAgencyProperties']              = "Hesap özellikleri";
$GLOBALS['strNoAgencies']                 = "Henüz hiçbir hesap tanımlanmamış";
$GLOBALS['strConfirmDeleteAgency']           = "Bu hesabı silmek istediğinize emin misiniz?";
$GLOBALS['strHideInactiveAgencies']          = "Etkin olmayan hesapları gizle";
$GLOBALS['strInactiveAgenciesHidden']     = "etkin olmayan hesap(lar) gizlendi";
$GLOBALS['strAllowAgencyEditConversions'] = "Bu kullanıcının dönüşümleri düzenlemesine izin ver";
$GLOBALS['strAllowMoreReports']           = "\\'Daha fazla Rapor' düğmesine izin ver";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Hedefleme Kanalı";
$GLOBALS['strChannels']                   = "Hedefleme Kanalları";
$GLOBALS['strChannelOverview']            = "Hedefleme Kanallarına Genel Bakış";
$GLOBALS['strChannelManagement']          = "Hedefleme Kanalı Yönetimi";
$GLOBALS['strAddNewChannel']              = "Yeni hedefleme kanalı ekle";
$GLOBALS['strAddNewChannel_Key']          = "Ye<u>n</u>i hedefleme kanalı ekle";
$GLOBALS['strChannelToWebsite']           = "Web sitesi yok";
$GLOBALS['strNoChannels']                 = "Tanımlanmış hedefleme kanalı yok";
$GLOBALS['strNoChannelsAddWebsite']       = "Henüz tanımlı bir web sitesi yok. Bir alan yaratmak için öncelikle <a href='affiliate-edit.php'>yeni bir web sitesi yarat</a>malısınız.";

$GLOBALS['strEditChannelLimitations']     = "Hedefleme kanalı kısıtlamalarını düzenle";
$GLOBALS['strChannelProperties']          = "Hedefleme Kanalı özellikleri";
$GLOBALS['strChannelLimitations']         = "Teslimat Seçenekleri";
$GLOBALS['strConfirmDeleteChannel']       = "Bu hedefleme kanalını silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteChannels']      = "Bu hedefleme kanalını silmek istediğinize emin misiniz?";
$GLOBALS['strModifychannel']              = "Yeni hedefleme kanalı ekle";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Değişken Adı";
$GLOBALS['strVariableDescription']     = "Tanımlama";
$GLOBALS['strVariableDataType']         = "Veri Tipi";
$GLOBALS['strVariablePurpose']       = "Amaç";
$GLOBALS['strGeneric']               = "Jenerik";
$GLOBALS['strBasketValue']           = "Sepet değeri";
$GLOBALS['strNumItems']              = "Öğe sayısı";
$GLOBALS['strVariableIsUnique']      = "Mükerrer dönüşümleri birleştir?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Sayı";
$GLOBALS['strString']                 = "Karakter Dizisi";
$GLOBALS['strTrackFollowingVars']     = "Takip eden değişleni izle";
$GLOBALS['strAddVariable']             = "Değişken Ekle";
$GLOBALS['strNoVarsToTrack']         = "İzlenecek değişken yok";
$GLOBALS['strVariableHidden']       = "Hide variable to websites?";
$GLOBALS['strVariableRejectEmpty']  = "Boş ise reddedilsin mi?";
$GLOBALS['strTrackingSettings']     = "İzleme ayarları";
$GLOBALS['strTrackerType']          = "İzleyici tipi";
$GLOBALS['strTrackerTypeJS']        = "Javascript değişkenlerini izle";
$GLOBALS['strTrackerTypeDefault']   = "Javascript değişkenlerini izle (geriye dönük uyumlu, escape karakterleri gerekir)";
$GLOBALS['strTrackerTypeDOM']       = "HTML öğelerini DOM kullanarak izle";
$GLOBALS['strTrackerTypeCustom']    = "Özel JS kodu";
$GLOBALS['strVariableCode']         = "Javascript izleme kodu";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Reklamverenler ve Kampanyalar";
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
$GLOBALS['strForgotPassword']         = "Şifrenizi mi unuttunuz?";
$GLOBALS['strPasswordRecovery']       = "Şifre yenileme";
$GLOBALS['strEmailRequired']          = "Eposta alanı gereklidir";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Eposta adresi bulunamadı";
$GLOBALS['strPwdRecPasswordSaved']    = "Şifre kaydedildi. <a href='index.php'>Giriş</a> adresinden devam edin.";
$GLOBALS['strPwdRecWrongId']          = "Yanlış ID";
$GLOBALS['strPwdRecEnterEmail']       = "Eposta adresinizi girin";
$GLOBALS['strPwdRecEnterPassword']    = "Yeni şifrenizi girin";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "Şifre yenileme bağlantısı";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s şifre yenilemesi";
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
$GLOBALS['strAccount']                  = "Hesap";
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
