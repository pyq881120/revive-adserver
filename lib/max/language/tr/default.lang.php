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
$GLOBALS['date_format']                 = "%m/%d/%Y";
$GLOBALS['time_format']                 = "%H:%i:%S";
$GLOBALS['month_format']                = "%m/%Y";
$GLOBALS['day_format']                  = "%m/%d";
$GLOBALS['week_format']                 = "%W/%Y";
$GLOBALS['weekiso_format']              = "%V/%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Ana Sayfa";
$GLOBALS['strHelp']                     = "Yardım";
$GLOBALS['strStartOver']                = "Baştan başla";
$GLOBALS['strNavigation']               = "Neredeyim";
$GLOBALS['strShortcuts']                = "Kısayollar";
$GLOBALS['strActions']                  = "Eylem";
$GLOBALS['strAdminstration']            = "Envanter";
$GLOBALS['strMaintenance']              = "Bakım";
$GLOBALS['strProbability']              = "Olasılık";
$GLOBALS['strInvocationcode']           = "Çağırma kodu";
$GLOBALS['strTrackerVariables']         = "İzleme değişkenleri";
$GLOBALS['strBasicInformation']         = "Temel Bilgiler";
$GLOBALS['strContractInformation']      = "Sözleşme Bilgileri";
$GLOBALS['strLoginInformation']         = "Giriş bilgileri";
$GLOBALS['strLogoutURL']                = "Çıkışta yönlendirilecek URL. <br />Varsayılan için boş bırakın";
$GLOBALS['strAppendTrackerCode']        = "İzleme kodunu ekle";
$GLOBALS['strOverview']                 = "Genel Görünüm";
$GLOBALS['strSearch']                   = "Arama";
$GLOBALS['strHistory']                  = "Geçmiş";
$GLOBALS['strDetails']                  = "Ayrıntılar";
$GLOBALS['strCheckForUpdates']          = "Güncellemeleri Kontrol Et";
$GLOBALS['strCompact']                  = "Yoğunlaştırılmış";
$GLOBALS['strVerbose']                  = "Gereksiz sözcükler";
$GLOBALS['strUser']                     = "Kullanıcı";
$GLOBALS['strEdit']                     = "Değiştir";
$GLOBALS['strCreate']                   = "Yarat";
$GLOBALS['strDuplicate']                = "Çoğalt";
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
$GLOBALS['strPrevious']                 = "Önceki";
$GLOBALS['strNext']                     = "Sonraki";
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
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Tüm";
$GLOBALS['strTotal']                    = "Toplam";
$GLOBALS['strActive']                   = "etkin";
$GLOBALS['strFrom']                     = "-den/-dan";
$GLOBALS['strTo']                       = "-e/-a";
$GLOBALS['strLinkedTo']                 = "bağlanmış";
$GLOBALS['strDaysLeft']                 = "Kalan gün";
$GLOBALS['strCheckAllNone']             = "Tümünü / Hiçbirini Seç";
$GLOBALS['strExpandAll']                = "Hepsini Aç";
$GLOBALS['strCollapseAll']              = "Hepsini Kapat";
$GLOBALS['strShowAll']                  = "Hepsini Göster";
$GLOBALS['strNoAdminInterface']         = "Servis müsait değil...";
$GLOBALS['strFilterBySource']           = "kaynağa göre filtrele";
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
$GLOBALS['strAdmin']                    = "Yönetici";
$GLOBALS['strNotice']                   = "Uyarı";

// Dashboard
// Dashboard Errors

// Priority
$GLOBALS['strPriority']                 = "Öncelik";
$GLOBALS['strPriorityLevel']            = "Öncelik düzeyi";
$GLOBALS['strPriorityTargeting']        = "Dağıtım";
$GLOBALS['strPriorityOptimisation']     = "Çeşitli"; // Er, what?
$GLOBALS['strLimitations']              = "Kısıtlamalar";
$GLOBALS['strNoLimitations']            = "Kısıtlama yok";
$GLOBALS['strCapping']                  = "Başlıklamak";

// Properties
$GLOBALS['strName']                     = "İsim";
$GLOBALS['strSize']                     = "Boyut";
$GLOBALS['strWidth']                    = "Genişlik";
$GLOBALS['strHeight']                   = "Yükseklik";
$GLOBALS['strTarget']                   = "Hedef";
$GLOBALS['strLanguage']                 = "Dil";
$GLOBALS['strDescription']              = "Tanımlama";
$GLOBALS['strVariables']                = "Değişkenler";
$GLOBALS['strComments']                 = "Yorumlar";

// User access
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Kullanıcı Adı";

// Login & Permissions
$GLOBALS['strUserProperties']           = "Banner özellikleri";
$GLOBALS['strAuthentification']         = "Kimlik Doğrulama";
$GLOBALS['strWelcomeTo']                = "Hoşgeldiniz ";
$GLOBALS['strEnterUsername']            = "Giriş yapabilmek için kullanıcı adınızı ve parolanızı giriniz";
$GLOBALS['strEnterBoth']                = "Lütfen kullanıcı adınızı ve parolanızı birlikte giriniz";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strLogin']                    = "Giriş";
$GLOBALS['strLogout']                   = "Çıkış";
$GLOBALS['strUsername']                 = "Kullanıcı Adı";
$GLOBALS['strPassword']                 = "Parola";
$GLOBALS['strPasswordRepeat']           = "Parola Tekrarı";
$GLOBALS['strAccessDenied']             = "Erişim reddedildi";
$GLOBALS['strUsernameOrPasswordWrong']  = "Girmiş olduğunuz kullanıcı adı ve/veya parola geçerli değil. Lütfen tekrar deneyiniz.";
$GLOBALS['strPasswordWrong']            = "Parola geçersiz";
$GLOBALS['strNotAdmin']                 = "Yeterli önceliğiniz yok";
$GLOBALS['strDuplicateClientName']      = "Girdiğiniz kullanıcı adı başkası tarafından kullanılıyor. Lütfen başka bir kullanıcı adıyla yeniden deneyiniz.";
$GLOBALS['strDuplicateAgencyName']      = "Girdiğiniz kullanıcı adı başkası tarafından kullanılıyor. Lütfen başka bir kullanıcı adıyla yeniden deneyiniz.";

// General advertising
$GLOBALS['strRequests']                 = "İstekler";
$GLOBALS['strImpressions']              = "Gösterimler";
$GLOBALS['strClicks']                   = "Tıklamalar";
$GLOBALS['strConversions']              = "Dönüşümler";
$GLOBALS['strCTRShort']                 = "TGO";
$GLOBALS['strCNVRShort']                = "Dn";
$GLOBALS['strCTR']                      = "TGO";
$GLOBALS['strCNVR']                     = "Satış Oranı";
$GLOBALS['strTotalViews']               = "Toplam Görüntülenme";
$GLOBALS['strTotalClicks']              = "Toplam Tıklama";
$GLOBALS['strTotalConversions']         = "Toplam Dönüşüm";
$GLOBALS['strViewCredits']              = "Gösterim Alacakları";
$GLOBALS['strClickCredits']             = "Tıklama Alacakları";
$GLOBALS['strConversionCredits']        = "Dönüşüm Alacakları";
$GLOBALS['strDateTime']                 = "Tarih Saat";
$GLOBALS['strTrackerID']                = "İzleme ID";
$GLOBALS['strTrackerName']              = "İzleme Adı";
$GLOBALS['strBanners']                  = "Bannerlar";
$GLOBALS['strCampaigns']                = "Kampanya";
$GLOBALS['strCampaignID']               = "Kampanya ID";
$GLOBALS['strCampaignName']             = "Kampanya Adı";
$GLOBALS['strCountry']                  = "Ülke";
$GLOBALS['strStatsAction']              = "Eylem";
$GLOBALS['strWindowDelay']              = "Pencere gecikmesi";
$GLOBALS['strStatsVariables']           = "Değişkenler";

// Finance
$GLOBALS['strFinanceMT']                = "Aylık Kiralama";
$GLOBALS['strFinanceCTR']               = "TGO";
$GLOBALS['strPercentBasketValue']       = "Sepet değeri";

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
$GLOBALS['strHideInactiveAdvertisers']      = "Etkin olmayan reklamverenleri gizle";
$GLOBALS['strInactiveAdvertisersHidden']    = "Etkin olmayan reklamveren(ler) gizlendi";
$GLOBALS['strOverallAdvertisers']           = "Reklamcılar";
$GLOBALS['strAdvertiserCampaigns']          = "Reklamverenler ve Kampanyalar";
// Advertisers properties
$GLOBALS['strContact']                          = "İletişim";
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
$GLOBALS['strCsvImportConversions']             = "Bu kullanıcı çevrimdışı dönüşümleri içe aktarabilsin";

// Campaign
$GLOBALS['strCampaign']                     = "Kampanya";
$GLOBALS['strCampaigns']                    = "Kampanya";
$GLOBALS['strTotalCampaigns']               = "Tüm kampanyalar";
$GLOBALS['strActiveCampaigns']              = "Etkin kampanyalar";
$GLOBALS['strAddCampaign']                  = "Yeni kampanya ekle";
$GLOBALS['strAddCampaign_Key']              = "Ye<u>n</u>i kampanya ekle";
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
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Bu reklamverene ait tüm kampayaları silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteCampaign']        = "Bu kampanyayı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Bu kampanyayı silmek istediğinize emin misiniz?";
$GLOBALS['strShowParentAdvertisers']        = "Üst reklamverenleri göster";
$GLOBALS['strHideParentAdvertisers']        = "Üst reklamverenleri gizle";
$GLOBALS['strHideInactiveCampaigns']        = "Etkin olmayan kampanyaları gizle";
$GLOBALS['strInactiveCampaignsHidden']      = "Etkin olmayan kampanya(lar) gizlendi";
$GLOBALS['strContractDetails']              = "Sözleşme ayrıntıları";
$GLOBALS['strInventoryDetails']             = "Envanter ayrıntıları";
$GLOBALS['strPriorityInformation']          = "Diğer kampanyalara göre öncelik";
$GLOBALS['strHiddenCampaign']               = "Kampanya";
$GLOBALS['strHiddenAd']                     = "Reklam";
$GLOBALS['strHiddenAdvertiser']             = "Reklamveren";
$GLOBALS['strHiddenTracker']                = "İzleyici";
$GLOBALS['strHiddenWebsite']              = "Web sitesi";
$GLOBALS['strHiddenZone']                   = "Alan";
$GLOBALS['strCompanionPositioning']         = "Klavuz yerleştirme";
$GLOBALS['strSelectUnselectAll']            = "Tümünü Seç / Seçme";

// Campaign-zone linking page


// Campaign properties
$GLOBALS['strDontExpire']                       = "Bu kampanyayı belirli bir tarihte bitirme";
$GLOBALS['strActivateNow']                      = "Bu kampanyayı hemen aktif et";
$GLOBALS['strLow']                              = "Düşük";
$GLOBALS['strHigh']                             = "Yüksek";
$GLOBALS['strExpirationDate']                   = "Bitiş Tarihi";
$GLOBALS['strExpirationDateComment']            = "Kampanya bu günün sonunda bitecek";
$GLOBALS['strActivationDate']                   = "Başlama Tarihi";
$GLOBALS['strActivationDateComment']            = "Kampanya bu tarihte başlayacak";
$GLOBALS['strRevenueInfo']                      = "Gelir Bilgisi";
$GLOBALS['strImpressionsRemaining']             = "Kalan Gösterimler";
$GLOBALS['strClicksRemaining']                  = "Kalan Tıklamalar";
$GLOBALS['strConversionsRemaining']             = "Kalan Dönüşümler";
$GLOBALS['strImpressionsBooked']                = "Ayırtılmış Gösterimler";
$GLOBALS['strClicksBooked']                     = "Ayırtılmış Tıklamalar";
$GLOBALS['strConversionsBooked']                = "Ayırtılmış Dönüşümler";
$GLOBALS['strCampaignWeight']                   = "Kampanya Ağırlığı";
$GLOBALS['strOptimise']                         = "Optimize et";
$GLOBALS['strAnonymous']                        = "Bu kampanyanın reklamverenini ve web sitesini gizle ";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Bu kampanyadaki bannerları düşük öncelikli belirle.<br>Bu kampanya yüksek öncelikli kampanyalardan fırsat bulduğu zaman görüntülenecektir.";
$GLOBALS['strTargetPerDay']                     = "günlük.";
$GLOBALS['strPriorityAutoTargeting']            = "Otomatik - Kalan gösterimi kalan günlere uygun şekilde dağıt.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Bu kampanyanın önceliği düşük olarak ayarlanmış,\\nancak ağırlığı 0 ya da ayarlanmamış.\\nBu durum, kampanya ağırlığına geçerli bir değer verilene kadar kampanyanın etkinliğinin kaldırılmasına\\nve bağlı bannerların gösteriminin durdurulmasına \\nneden olacak.\\n\\nDevam etmek istediğinize emin misiniz?";
$GLOBALS['strCampaignWarningNoTarget']          = "Bu kampanyanın önceliği yüksek olarak ayarlanmış,\\nancak hedeflenen gösterim sayısı belirlenmemiş.\\nBu durum, geçerli bir hedef gösterim sayısı verilene kadar kampanyanın etkinliğinin kaldırılmasına\\nve bağlı bannerların gösteriminin durdurulmasına \\nneden olacak.\\n\\nDevam etmek istediğinize emin misiniz?";
$GLOBALS['strCampaignStatusPending']            = "Beklemede";
$GLOBALS['strCampaignStatusInactive']           = "etkin";
$GLOBALS['strCampaignStatusPaused']             = "Duraklat";
$GLOBALS['strCampaignStatusRestarted']          = "Yeniden başlat";
$GLOBALS['strCampaignStatusDeleted']            = "Sil";
$GLOBALS['strCampaignApprove']                  = "Onaylandı";
$GLOBALS['strCampaignPause']                    = "Duraklat";
$GLOBALS['strCampaignType']                     = "Kampanya Adı";
$GLOBALS['strType']                             = "Tip";
$GLOBALS['strContract']                         = "İletişim";
$GLOBALS['strStandardContract']                 = "İletişim";

// Tracker
$GLOBALS['strTracker']                    = "İzleyici";
$GLOBALS['strTrackers']                   = "İzleyici";
$GLOBALS['strTrackerOverview']            = "İzleyici Genel Görünümü";
$GLOBALS['strAddTracker']                 = "Yeni bir izleyici ekle";
$GLOBALS['strAddTracker_Key']             = "Ye<u>n</u>i bir izleyici ekle";
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
$GLOBALS['strConversionWindow']           = "Dönüştürme penceresi";
$GLOBALS['strUniqueWindow']               = "Tekil pencere";
$GLOBALS['strClick']                      = "Tıkla";
$GLOBALS['strView']                       = "Görüntüle";
$GLOBALS['strImpression']                 = "Gösterimler";
$GLOBALS['strConversionType']             = "Dönüşüm tipi";
$GLOBALS['strLinkCampaignsByDefault']     = "Yeni yaratılan kampanyaları doğrudan bağla";



// Banners (General)
$GLOBALS['strBanners']                       = "Bannerlar";
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
$GLOBALS['strDeleteAllBanners']              = "Tüm bannerları sil";
$GLOBALS['strActivateAllBanners']            = "Tüm bannerları etkinleştir";
$GLOBALS['strDeactivateAllBanners']          = "Tüm bannerların etkinliğini kaldır";
$GLOBALS['strBannerOverview']                = "Banner Genel Görünüm";
$GLOBALS['strBannerProperties']              = "Banner Özellikleri";
$GLOBALS['strBannerHistory']                 = "Banner Geçmişi";
$GLOBALS['strBannerNoStats']                 = "Bu bannera ait istatistik yok";
$GLOBALS['strNoBanners']                     = "Tanımlanmış Banner Yok";
$GLOBALS['strNoBannersAddAdvertiser']        = "Henüz tanımlı bir web sitesi yok. Bir alan yaratmak için öncelikle <a href='affiliate-edit.php'>yeni bir web sitesi yarat</a>malısınız.";
$GLOBALS['strConfirmDeleteBanner']           = "Bu bannerı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteBanners']          = "Bu bannerı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Bu kampanyaya ait tüm bannerları silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmResetBannerStats']       = "Bu bannera ait tüm istatistikleri silmek istediğinize emin misiniz?";
$GLOBALS['strShowParentCampaigns']           = "Üst kampanyaları göster";
$GLOBALS['strHideParentCampaigns']           = "Üst kampanyaları gizle";
$GLOBALS['strHideInactiveBanners']           = "Etkin olmayan bannerları gizle";
$GLOBALS['strInactiveBannersHidden']         = "Etkin olmayan banner(lar) gizlendi";
$GLOBALS['strAppendTextAdNotPossible']       = "Metin reklamlara başka banner eklemeniz olanaklı değildir.";
$GLOBALS['strWarningMissing']                = "Uyarı, muhtemelen kayıp";
$GLOBALS['strWarningMissingClosing']         = "kapatma tag'i  \">\"";
$GLOBALS['strWarningMissingOpening']         = "açma tag'i \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Her şeye rağmen Gönder";


// Banner Preferences

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Lütfen banner tipini seçiniz";
$GLOBALS['strMySQLBanner']             = "Yerel banner (SQL)";
$GLOBALS['strWebBanner']               = "Yerel banner (Webserver)";
$GLOBALS['strURLBanner']               = "Harici banner";
$GLOBALS['strHTMLBanner']              = "HTML banner";
$GLOBALS['strTextBanner']              = "Yazı Olarak Reklam";
$GLOBALS['strUploadOrKeep']            = "Varolan resmi korumak mı, <br />yoksa yeni bir tane mi <br />yüklemek istersiniz?";
$GLOBALS['strUploadOrKeepAlt']        = "Varolan yedek resmi korumak mı, <br /> yoksa yeni bir tane mi <br />yüklemek istersiniz? ";
$GLOBALS['strNewBannerFile']         = "Bu banner için kullanacağınız <br/>resmi seçiniz<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Tarayıcının zengin medya <br />desteklememesi halinde <br /> kullanmak istediğiniz yedek resmi seçiniz <br /><br />";
$GLOBALS['strNewBannerURL']         = "Resim URL (http:// dahil yazın)";
$GLOBALS['strURL']                     = "Hedef URL (http:// dahil yazın)";
$GLOBALS['strKeyword']              = "Anahtar Kelimeler";
$GLOBALS['strTextBelow']             = "Resim altına gelen yazı";
$GLOBALS['strWeight']                 = "Ağırlığı";
$GLOBALS['strAlt']                     = "Alt(ernatif) yazı";
$GLOBALS['strStatusText']            = "Durum yazısı";
$GLOBALS['strBannerWeight']            = "Banner ağırlığı";
$GLOBALS['strAdserverTypeGeneric']  = "Jenerik HTML banner";
$GLOBALS['strGenericOutputAdServer'] = "Jenerik";
$GLOBALS['strSwfTransparency']		   = "Şeffaf zemine izin ver";

// Banner (advanced)

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Flash dosyaları içerisindeki sabit URL bağlantıları denetle";
$GLOBALS['strConvertSWFLinks']        = "Flash linklerini dönüştür";
$GLOBALS['strHardcodedLinks']        = "Elle girilmiş, sabit bağlantılar";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Daha hızlı yüklenmesi için SWF dosyasını sıkıştır (Flash 6 player gerekli)";
$GLOBALS['strOverwriteSource']        = "Kaynak parametresinin üzerine yaz";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML şablonu";
$GLOBALS['strChooseNetwork']        = "Kullanacağınız şablonu seçiniz";
$GLOBALS['strMoreInformation']        = "Daha fazla bilgi...";
$GLOBALS['strTrackAdClicks']        = "Tıklamaları izle";

// Banner (AdSense)

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Teslimat Seçenekleri";
$GLOBALS['strACL']                        = "Teslimat";
$GLOBALS['strACLAdd']                     = "Yeni Sınırlama Ekle";
$GLOBALS['strNoLimitations']              = "Kısıtlama yok";
$GLOBALS['strApplyLimitationsTo']         = "Kısıtlamaları şunun için uygula:";
$GLOBALS['strRemoveAllLimitations']       = "Tüm kısıtlamaları kaldır";
$GLOBALS['strEqualTo']                    = "eşittir";
$GLOBALS['strDifferentFrom']              = "farklıdır";
$GLOBALS['strLaterThan']                  = "daha geçtir";
$GLOBALS['strLaterThanOrEqual']           = "daha geç ya da eşittir";
$GLOBALS['strEarlierThan']                = "daha erkendir ";
$GLOBALS['strEarlierThanOrEqual']         = "daha erken ya da eşittir";
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
$GLOBALS['strBrowser']                    = "Tarayıcı";
$GLOBALS['strOS']                         = "İşletim Sistemi";
$GLOBALS['strCity']                       = "İl";
$GLOBALS['strDeliveryLimitations']        = "Teslimat Kısıtlamaları";

$GLOBALS['strDeliveryCapping']            = "Ziyaretçi başına teslimat sınırlaması";
$GLOBALS['strDeliveryCappingReset']       = "Görüntüleme sayaçlarını şundan sonra sıfırla:";
$GLOBALS['strDeliveryCappingTotal']       = "toplam";
$GLOBALS['strDeliveryCappingSession']     = "oturum başına";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];
$GLOBALS['strCappingBanner']['limit'] = "Banner gösterimlerini şununla sınırla:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];
$GLOBALS['strCappingCampaign']['limit'] = "Kampanya gösterimlerini şununla sınırla:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];
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
$GLOBALS['strTotalAffiliates']          = "Tüm web siteleri";
$GLOBALS['strInactiveAffiliatesHidden'] = "Etkin olmayan web siteleri gizlendi";
$GLOBALS['strShowParentAffiliates']     = "Üst web sitelerini görüntüle ";
$GLOBALS['strHideParentAffiliates']     = "Üst web sitelerini gizle";

// Website (properties)
$GLOBALS['strWebsite']                      = "Web sitesi";
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

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Diğer bilgiler";
$GLOBALS['strUniqueUsersMonth']             = "Aylık tekil kullanıcı";
$GLOBALS['strUniqueViewsMonth']             = "Aylık tekil gösterim";
$GLOBALS['strPageRank']                     = "Page Rank";
$GLOBALS['strCategory']                     = "Kategori";
$GLOBALS['strHelpFile']                     = "Yardım dosyası";
$GLOBALS['strWebsiteZones']                 = "Web Siteleri ve Alanlar";

// Zone
$GLOBALS['strZone']                         = "Alan";
$GLOBALS['strZones']                        = "Alanlar";
$GLOBALS['strAddNewZone']                   = "Yeni alan ekle";
$GLOBALS['strAddNewZone_Key']               = "Ye<u>n</u>i alan ekle";
$GLOBALS['strAddZone']                      = "Alan Oluştur";
$GLOBALS['strModifyZone']                   = "Alanı düzenle";
$GLOBALS['strZoneToWebsite']                = "Web sitesi yok";
$GLOBALS['strLinkedZones']                  = "Bağlı alanlar";
$GLOBALS['strZoneOverview']                 = "Alan Genel Görünüş";
$GLOBALS['strZoneProperties']               = "Alan Özellikleri";
$GLOBALS['strZoneHistory']                  = "Alan Geçmişi";
$GLOBALS['strNoZones']                      = "Henüz hiçbir alan tanımlanmamış";
$GLOBALS['strNoZonesAddWebsite']            = "Henüz tanımlı bir web sitesi yok. Bir alan yaratmak için öncelikle <a href='affiliate-edit.php'>yeni bir web sitesi yarat</a>malısınız.";
$GLOBALS['strConfirmDeleteZone']            = "Bu alanı silmek istediğinize emin misiniz?";
$GLOBALS['strConfirmDeleteZones']           = "Bu alanı silmek istediğinize emin misiniz?";
$GLOBALS['strZoneType']                     = "Alan tipi";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Düğme veya Dikdörtgen";
$GLOBALS['strInterstitial']                 = "Sayfa arası reklamı \"veya\" Yüzen reklam";
$GLOBALS['strPopup']                        = "Açılır pencere (popup) reklam";
$GLOBALS['strTextAdZone']                   = "Metin reklam";
$GLOBALS['strEmailAdZone']                  = "Eposta/bülten alanı";
$GLOBALS['strZoneClick']                    = "Tıklama izleyen alan";
$GLOBALS['strShowMatchingBanners']          = "Eşleşen bannerları göster";
$GLOBALS['strHideMatchingBanners']          = "Eşleşen bannerları gizle";
$GLOBALS['strBannerLinkedAds']              = "Bu alana bağlı bannerlar";
$GLOBALS['strCampaignLinkedAds']            = "Bu alana bağlı kampanyalar";
$GLOBALS['strTotalZones']                   = "Tüm alanlar";
$GLOBALS['strInactiveZonesHidden']          = "etkin olmayan alan(lar) gizlendi";
$GLOBALS['strWarnChangeZoneType']           = "Alan tipini metin ya da eposta'ya çevirmek, bu alan tiplerindeki kısıtlamalardan dolayı bağlantılı tüm banner/kampanyaların bağını keser\\n<ul>\\n<li>Metin alanları sadece metin reklamlara bağlanabilir</li>\\n<li>Eposta alanı kampanyalarında aynı anda sadece bir aktif banner olabilir</li>\\n</ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Alan ölçüsünü değiştirmek, yeni ölçüde olmayan bannerların alanla bağını keser ve bağlantılı kampanyalarda yer alan yeni ölçüdeki tüm bannerları alanla bağlantılandırır';


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
$GLOBALS['strTrackerCodeSubject']          = "İzleme kodunu ekle";
$GLOBALS['strStatusPending']            = "Beklemede";
$GLOBALS['strStatusApproved']           = "Onaylandı";
$GLOBALS['strStatusDisapproved']        = "Onaylanmadı";
$GLOBALS['strStatusDuplicate']          = "Çoğalt";
$GLOBALS['strStatusOnHold']             = "Tutuluyor";
$GLOBALS['strStatusIgnore']             = "Yok say";
$GLOBALS['strConnectionType']           = "Tip";
$GLOBALS['strConnTypeSale']             = "Satış";
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
$GLOBALS['strResetStats']                = "İstatistikleri temizle";
$GLOBALS['strSourceStats']               = "Kaynak istatistikler";
$GLOBALS['strSelectSource']              = "Görmek istediğiniz kaynağı seçiniz:";
$GLOBALS['strTargetStats']               = "Hedefleme İstatistikleri";
$GLOBALS['strViewBreakdown']             = "Şuna göre görüntüle:";
$GLOBALS['strBreakdownByDay']            = "Gün";
$GLOBALS['strBreakdownByWeek']           = "Hafta";
$GLOBALS['strBreakdownByMonth']          = "Ay";
$GLOBALS['strBreakdownByDow']            = "Haftanın günü";
$GLOBALS['strBreakdownByHour']           = "Saat";
$GLOBALS['strItemsPerPage']              = "Sayfa başına öğe";
$GLOBALS['strDistributionHistory']       = "Dağılım geçmişi";
$GLOBALS['strShowGraphOfStatistics']     = "İstatistiklerin <u>G</u>rafiğini göster";
$GLOBALS['strExportStatisticsToExcel']   = "İstatistikleri <u>E</u>xcel'e aktar";
$GLOBALS['strGDnotEnabled']              = "Grafikleri görüntüleyebilmek için PHP'de GD'nin etkin olması gerekmektedir. <br/>Lütfen, GD'nin nasıl yükleneceğini de içeren şu sayfaya bakın: <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a>.";

// Hosts
$GLOBALS['strHosts']                = "Sunucular";

// Expiration
$GLOBALS['strExpired']                = "Süresi dolmuş";
$GLOBALS['strExpiration']             = "Bitiş";
$GLOBALS['strNoExpiration']           = "Bitiş tarihi belirtilmemiş";
$GLOBALS['strEstimated']              = "Tahmini bitiş tarihi";
$GLOBALS['strCampaignStop']           = "Kampanya Geçmişi";

// Reports
$GLOBALS['strReports']                = "Raporlar";
$GLOBALS['strSelectReport']           = "Üreteceğiniz rapor tipini seçiniz";
$GLOBALS['strStartDate']              = "Başlama Tarihi";
$GLOBALS['strEndDate']                = "Bitiş Tarihi";
$GLOBALS['strLimitations']            = "Kısıtlamalar";

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
$GLOBALS['strBackToTheList']            = "Rapor listesine geri dön";


// Errors
$GLOBALS['strMySQLError']                       = "SQL Hatası:";
$GLOBALS['strLogErrorClients']                  = "[phpAds] Veritabanından reklamverenleri alırken bir hata oluştu.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Veritabanından bannerları alırken bir hata oluştu.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Veritabanından gösterimleri alırken bir hata oluştu.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Veritabanından tıklamaları alırken bir hata oluştu.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Veritabanından dönüşümleri alırken bir hata oluştu.";
$GLOBALS['strErrorViews']                       = "Gösterim sayısını belirtmelisiniz veya sınırsız seçeneğini işaretlemelisiniz!";
$GLOBALS['strErrorNegViews']                    = "Negatif gösterim sayıları geçersizdir";
$GLOBALS['strErrorClicks']                      = "Tıklanma sayısını belirtmelisiniz veya sınırsız seçeneğini işaretlemelisiniz!";
$GLOBALS['strErrorNegClicks']                   = "Negatif tıklanma sayıları geçersizdir";
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
$GLOBALS['strErrorLinkingBanner']               = "Belirtilen nedenle banner bu alana bağlanamadı:";
$GLOBALS['strUnableToLinkBanner']               = "Bu banner bağlanamıyor: _";
$GLOBALS['strErrorEditingCampaign']             = "Kampanya güncellenirken hata:";
$GLOBALS['strUnableToChangeCampaign']           = "Belirtilen nedenle bu değişiklik uygulanamadı:";
$GLOBALS['strUnableToChangeZone']               = "Belirtilen nedenle bu değişiklik uygulanamadı:";
$GLOBALS['strDatesConflict']                    = "tarih çakışıyor: ";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";

//Validation


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


// Statistics columns
// Long names
$GLOBALS['strNumberOfItems']                       = "Öğe sayısı";
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
$GLOBALS['strImpressionSR']                     = "Gösterimler";
$GLOBALS['strActualImpressions']                = "Gösterimler";

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
$GLOBALS['strClicks_short']                     = "Tıklamalar";
$GLOBALS['strCTR_short']                        = "TGO";

// Global Settings
$GLOBALS['strGlobalSettings']               = "Genel Ayarlar";
$GLOBALS['strGeneralSettings']              = "Genel Ayarlar";
$GLOBALS['strMainSettings']                 = "Ana Ayarlar";
$GLOBALS['strAdminSettings']                = "Yönetici Ayarları";


// Product Updates
$GLOBALS['strProductUpdates']         = "Ürün Güncellemeleri";
$GLOBALS['strViewPastUpdates']        = "Eski Güncelleme ve Yedekleri Yönet";

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

// Tracker Variables
$GLOBALS['strVariableName']             = "Değişken Adı";
$GLOBALS['strVariableDescription']     = "Tanımlama";
$GLOBALS['strVariableDataType']         = "Veri Tipi";
$GLOBALS['strVariablePurpose']       = "Amaç";
$GLOBALS['strGeneric']               = "Jenerik";
$GLOBALS['strBasketValue']           = "Sepet değeri";
$GLOBALS['strNumItems']              = "Öğe sayısı";
$GLOBALS['strVariableIsUnique']      = "Mükerrer dönüşümleri birleştir?";
$GLOBALS['strNumber']                 = "Sayı";
$GLOBALS['strString']                 = "Karakter Dizisi";
$GLOBALS['strTrackFollowingVars']     = "Takip eden değişleni izle";
$GLOBALS['strAddVariable']             = "Değişken Ekle";
$GLOBALS['strNoVarsToTrack']         = "İzlenecek değişken yok";
$GLOBALS['strVariableRejectEmpty']  = "Boş ise reddedilsin mi?";
$GLOBALS['strTrackingSettings']     = "İzleme ayarları";
$GLOBALS['strTrackerType']          = "İzleyici tipi";
$GLOBALS['strTrackerTypeJS']        = "Javascript değişkenlerini izle";
$GLOBALS['strTrackerTypeDefault']   = "Javascript değişkenlerini izle (geriye dönük uyumlu, escape karakterleri gerekir)";
$GLOBALS['strTrackerTypeDOM']       = "HTML öğelerini DOM kullanarak izle";
$GLOBALS['strTrackerTypeCustom']    = "Özel JS kodu";
$GLOBALS['strVariableCode']         = "Javascript izleme kodu";


// Upload conversions
$GLOBALS['strYouHaveNoCampaigns']   = "Reklamverenler ve Kampanyalar";


// Password recovery
$GLOBALS['strForgotPassword']         = "Şifrenizi mi unuttunuz?";
$GLOBALS['strPasswordRecovery']       = "Şifre yenileme";
$GLOBALS['strEmailRequired']          = "Eposta alanı gereklidir";
$GLOBALS['strPwdRecEmailNotFound']    = "Eposta adresi bulunamadı";
$GLOBALS['strPwdRecPasswordSaved']    = "Şifre kaydedildi. <a href='index.php'>Giriş</a> adresinden devam edin.";
$GLOBALS['strPwdRecWrongId']          = "Yanlış ID";
$GLOBALS['strPwdRecEnterEmail']       = "Eposta adresinizi girin";
$GLOBALS['strPwdRecEnterPassword']    = "Yeni şifrenizi girin";
$GLOBALS['strPwdRecResetLink']        = "Şifre yenileme bağlantısı";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s şifre yenilemesi";

// Audit
$GLOBALS['strAccount']                  = "Hesap";


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
