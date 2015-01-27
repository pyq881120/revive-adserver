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

// Installer translation strings
$GLOBALS['strInstall']                      = "Kurulum";
$GLOBALS['strChooseInstallLanguage']        = "Kurulum sürecinde kullanacağnız dili seçiniz";
$GLOBALS['strLanguageSelection']            = "Dil Seçimi";
$GLOBALS['strDatabaseSettings']             = "Veritabanı ayarları";
$GLOBALS['strAdminSettings']                = "Yönetici Ayarları";
$GLOBALS['strAdvancedSettings']             = "Gelişmiş Ayarlar";
$GLOBALS['strOtherSettings']                = "Diğer Ayarlar";
$GLOBALS['strSpecifySyncSettings']          = "Senkronizasyon Ayarları";
$GLOBALS['strWarning']                      = "Uyarı";
$GLOBALS['strFatalError']                   = "Tehlikeli hata oluştu";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Veritabanına bağlanılamadı, lütfen belirtmiş olduğunuz ayarları kontrol ediniz";
$GLOBALS['strCreateTableTestFailed']        = "Belirtmiş olduğunuz kullanıcı veritabanı yapısına ekleme yapma iznine sahip değil, veritabanı yöneticinizle irtibata geçiniz.";
$GLOBALS['strUpdateTableTestFailed']        = "Belirtmiş olduğunuz kullanıcı veritabanı yapısını değiştirme iznine sahip değil, veritabanı yöneticinizle irtibata geçiniz.";
$GLOBALS['strTablePrefixInvalid']           = "Tablo önadları geçersiz karakter içeriyor";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Devam etmeden önce aşağıdaki problemleri düzeltiniz:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Hataları yoksay";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "PHP ayarlarındaki register_globals değişkeni <b>on</b> olmalıdır.";
$GLOBALS['strWarningMagicQuotesGPC']        = "PHP ayarlarındaki magic_quotes_gpc değişkeni <b>on</b> olmalıdır.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "PHP ayarlarındaki magic_quotes_runtime değişkeni <b>off</b> olmalıdır.";
$GLOBALS['strWarningFileUploads']           = "PHP ayarlarındaki file_uploads değişkeni <b>on</b> olmalıdır.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Şu anda veritabanını güncelleme izni yok. Eğer devam etmek istiyorsanız, tüm bannerlar, istatistikler ve reklamlarsilinecek.";
$GLOBALS['strTableNames']                   = "Tablo isimleri";
$GLOBALS['strTablesPrefix']                 = "Tablo isim önadları";
$GLOBALS['strTablesType']                   = "Tablo tipleri";


$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strInstallSuccess2'] ="
  <p><b>Serving your first ad campaign</b><br>
    Use our <a href='".PRODUCT_DOCSURL."/user/quickStartGuide' target='_blank'>quick start guide to start serving your first ad campaign</a>.
  </p>
</div>
<p><strong>Optional installation steps</strong></p>
<div class='psub'>
  <p><b>Lock your configuration files</b><br>
    This is a good extra security step to protect your ad server configuration settings from being altered.  <a href='".PRODUCT_DOCSURL."/admin/lockConfig' target='_blank'>Find out more</a>.
  </p>
  <p><b>Set up a regular maintenance task</b><br>
    A maintenance script is recommended to ensure timely reporting and the best possible ad delivery performance.  <a href='".PRODUCT_DOCSURL."/admin/maintenance' target='_blank'>Find out more</a>
  </p>
  <p><b>Review your system configuration settings</b><br>
    Before you start using ".MAX_PRODUCT_NAME." we suggest you review your settings within the 'Settings' tab.
  </p>
</div>";
$GLOBALS['strInstallNotSuccessful']         = "<b>The installation of ".MAX_PRODUCT_NAME." was not succesful</b><br /><br />Some portions of the install process could not be completed.
                                                It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the
                                                first step of the install process. If you want to know more on what the error message below means, and how to solve it,
                                                please consult the supplied documentation.";
$GLOBALS['strDbSuccessIntro']               = "The " . MAX_PRODUCT_NAME . " database has now been created. Please click the 'Continue' button to proceed with configuring " . MAX_PRODUCT_NAME . " Administrator and Delivery settings.";
$GLOBALS['strErrorOccured']                 = "Aşağıdaki hatalar oluştu:";
$GLOBALS['strErrorInstallDatabase']         = "Veritabanı yapısı oluşturulamıyor.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorInstallDbConnect']        = "Veritabanına bağlantı sağlanamıyor.";


$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strDeliveryUrlPrefix']            = "Teslimat Motoru";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "Teslimat Motoru";

$GLOBALS['strInvalidUserPwd']               = "Geçersiz kullanıcı adı veya parolası";

$GLOBALS['strUpgrade']                      = "Güncelle";
$GLOBALS['strSystemUpToDate']               = "Sisteminiz güncellenmiştir, yeniden güncelleme gerekmemektedir. <br>Ana Sayfaya dönmek için <b>İleri</b>yi tıklayınız.";
$GLOBALS['strSystemNeedsUpgrade']           = "Veritabanı yapısı ve ayar dosyası düzgün çalışması için güncellenmesi için gerekiyor. Güncelleme için <b>İleriyi</b> tıklayınız. <br>Güncelleme bir kaç dakika sürebilir lütfen sabırlı olun.";
$GLOBALS['strSystemUpgradeBusy']            = "Sistem güncelleniyor, lütfen bekleyiniz...";
$GLOBALS['strSystemRebuildingCache']        = "Hafıza tekrar oluşturuluyor, lütfen bekleyiniz...";
$GLOBALS['strServiceUnavalable']            = "Siste geçici olarak çalışmıyor. Sistem güncelemesi devam ediyor";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Bölüm Seçiniz";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";

// Configuration Settings

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Yönetici Ayarları";
$GLOBALS['strLoginCredentials']                      = "Giriş güvenliği";
$GLOBALS['strAdminUsername']                         = "Yönetici ismi";
$GLOBALS['strInvalidUsername']                       = "Geçersiz Kullanıcı Adı";
$GLOBALS['strBasicInformation']                      = "Temel Bilgiler";
$GLOBALS['strAdminFullName']                         = "Yönetici Tam ismi";
$GLOBALS['strAdminEmail']                            = "Yönetici e-mail adresi";
$GLOBALS['strCompanyName']                           = "Firma İsmi";
$GLOBALS['strAdminCheckUpdates']                     = "Güncellemeleri kontrol et";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "Her girişte";
$GLOBALS['strAdminCheckDaily']                       = "Günlük";
$GLOBALS['strAdminCheckWeekly']                      = "Haftalık";
$GLOBALS['strAdminCheckMonthly']                     = "Aylık";
$GLOBALS['strAdminCheckNever']                       = "Asla";
$GLOBALS['strUserlogEmail']                          = "Tüm giden e-mailleri logla";


// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Veritabanı ayarları";
$GLOBALS['strDatabaseServer']                        = "Veritabanı server";
$GLOBALS['strDbType']                                = "Veritabanı adı";
$GLOBALS['strDbHost']                                = "Veritabanı sunucu";
$GLOBALS['strDbUser']                                = "Veritabanı kullanıcı adı";
$GLOBALS['strDbPassword']                            = "Veritabanı parolası";
$GLOBALS['strDbName']                                = "Veritabanı adı";
$GLOBALS['strDatabaseOptimalisations']               = "Veritabanı Uygunluğu";
$GLOBALS['strPersistentConnections']                 = "Israrlı bağlantıları kullan";
$GLOBALS['strCantConnectToDb']                       = "Veritabanına bağlanılamıyor";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Ana Ayarlar";
$GLOBALS['strQmailPatch']                            = "qmail patchini kullanın";
$GLOBALS['strEnableQmailPatch']                      = "qmail patchini kullanın";

// Audit Trail Settings

// Debug Logging Settings

// Delivery Settings
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strTypeWebSettings']                       = "Yerel banner (Webserver) ayarları";
$GLOBALS['strTypeWebMode']                           = "Depolama metodu";
$GLOBALS['strTypeWebModeLocal']                      = "Yerel Klasörler";
$GLOBALS['strTypeWebModeFtp']                        = "Harici FTP sunucu";
$GLOBALS['strTypeWebDir']                            = "Yerel Klasörler";
$GLOBALS['strTypeFTPHost']                           = "FTP Sunucu";
$GLOBALS['strTypeFTPDirectory']                      = "Sunucu klasörü";
$GLOBALS['strTypeFTPUsername']                       = "Giriş";
$GLOBALS['strTypeFTPPassword']                       = "Parola";



$GLOBALS['strP3PSettings']                           = "P3P Gizlilik Politikaları";
$GLOBALS['strUseP3P']                                = "P3P Politikalarını kullan";
$GLOBALS['strP3PCompactPolicy']                      = "P3P Yoğunlaştırılmış politika";
$GLOBALS['strP3PPolicyLocation']                     = "P3P Politika yeri";

// General Settings

// Geotargeting Settings

// Interface Settings
$GLOBALS['strInventory']                             = "Envanter";
$GLOBALS['strShowCampaignInfo']                      = "<i>Kampanya önizleme</i> sayfasında ekstra kampanya bigilerini göster";
$GLOBALS['strShowBannerInfo']                        = "<i>Banner önizleme</i> sayfasında ekstra banner bilgilerini göster";
$GLOBALS['strShowCampaignPreview']                   = "<i>Banner önizleme</i> sayfasında tüm bannerları göster";
$GLOBALS['strShowBannerHTML']                        = "HTML banner önizlemede düz HTML kodlu bannerlar haricindeki asıl bannerları göster";
$GLOBALS['strShowBannerPreview']                     = "Sayfanın en üstünde uyan banner önizlemeyi göster";
$GLOBALS['strHideInactive']                          = "Etkin olmayanları gizle";
$GLOBALS['strGUIShowMatchingBanners']                = "<i>İlişkili Bannerlar</i> sayfalarında uyan bannerları göster";
$GLOBALS['strGUIShowParentCampaigns']                = "<i>ilişkili Bannerlar</i> sayfasında ebeveyn bannerları göster";
$GLOBALS['strStatisticsDefaults']                    = "İstatistikler";
$GLOBALS['strBeginOfWeek']                           = "Haftanın Başlangıcı";
$GLOBALS['strPercentageDecimals']                    = "Yüzdelik Basamağı";
$GLOBALS['strWeightDefaults']                        = "öntanımlı ağırlık";
$GLOBALS['strDefaultBannerWeight']                   = "öntanımlı banner ağırlığı";
$GLOBALS['strDefaultCampaignWeight']                 = "öntanımlı kampanya ağırlığı";
$GLOBALS['strDefaultBannerWErr']                     = "öntanımlı banner ağırlığı pozitif tamsayı olmalıdır";
$GLOBALS['strDefaultCampaignWErr']                   = "öntanımlı kampanya ağırlığı pozitif tamsayı olmalıdır";

$GLOBALS['strModesOfPayment']                        = "Ödeme tipi";
$GLOBALS['strHelpFiles']                             = "Yardım dosyası";
$GLOBALS['strHasTaxID']                              = "Vergi numarası";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "Varsayılan dönüştürme kuralları";
$GLOBALS['strDefaultConversionType']                 = "Varsayılan dönüştürme kuralları";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "İzin verilen invocation tipleri";

// Banner Delivery Settings

// Banner Logging Settings
$GLOBALS['strReverseLookup']                         = "DNS geri besleme";
$GLOBALS['strProxyLookup']                           = "Proxy izleme";
$GLOBALS['strIgnoreHosts']                           = "Sunuculara önem verme";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Uyarı Sınırı";
$GLOBALS['strWarnLimitErr']                          = "Uyarı limiti pozitif tamsayı olmalıdır";
$GLOBALS['strWarnAdmin']                             = "Uyarı Yöneticisi";
$GLOBALS['strWarnClient']                            = "Reklamcıya uyarı";
$GLOBALS['strWarnAgency']                            = "Reklamcıya uyarı";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Kullanıcı arabirimi ayarları";
$GLOBALS['strGeneralSettings']                       = "Genel Ayarlar";
$GLOBALS['strAppName']                               = "Uygulama Adı";
$GLOBALS['strMyHeader']                              = "Altbilgi";
$GLOBALS['strMyFooter']                              = "Altbilgi";


$GLOBALS['strGzipContentCompression']                = "Sıkıştırma için GZIP içeriğini kullan";
$GLOBALS['strClientInterface']                       = "Reklamcı arayüzü ayarları";
$GLOBALS['strClientWelcomeEnabled']                  = "Reklamcıya hoşgeldiniz mesajı";
$GLOBALS['strClientWelcomeText']                     = "Hoşgeldiniz mesajı<br>(HTML taglarına izin veriliyor)";


// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strKeywordRetrieval']             = "Anahtar kelime düzeltmeleri";
$GLOBALS['strBannerRetrieval']              = "Banner düzeltme metodu";
$GLOBALS['strRetrieveRandom']               = "Rastgele banner düzeltme (öntanımlı)";
$GLOBALS['strRetrieveNormalSeq']            = "Normal sıralı banner düzeltme";
$GLOBALS['strWeightSeq']                    = "Ağarlık tabanlı sıralı banner düzeltme";
$GLOBALS['strFullSeq']                      = "Tam sıralı banner düzeltme";
$GLOBALS['strUseConditionalKeys']           = "Şartlı anahtar kelimeleri kullan";
$GLOBALS['strUseMultipleKeys']              = "Birden fazla anahtar kullan";

$GLOBALS['strTableBorderColor']             = "Tablo Çerçeve rengi";
$GLOBALS['strTableBackColor']               = "Tablo Zemin Rengi";
$GLOBALS['strTableBackColorAlt']            = "Tablo Zemin Rengi (Alternatif)";
$GLOBALS['strMainBackColor']                = "Ana Zemin Rengi";
$GLOBALS['strTimeZone']                     = "Zaman Alanı";

?>
