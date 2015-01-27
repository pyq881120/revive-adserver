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

// Main strings
$GLOBALS['strChooseSection']			= "Pilihan Bagian";

// Maintenance

$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "
	Automatic maintenance is enabled, but it has not been triggered. Automatic maintenance is triggered only when ".MAX_PRODUCT_NAME." delivers banners.
    For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "
	Automatic maintenance is currently disabled, so when ".MAX_PRODUCT_NAME." delivers banners, automatic maintenance will not be triggered.
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
    However, if you are not going to set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>,
    then you <i>must</i> <a href='account-settings-maintenance.php'>enable automatic maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.
";

$GLOBALS['strAutoMantenaceEnabledAndRunning']   = "
	Automatic maintenance is enabled and will be triggered, as required, when ".MAX_PRODUCT_NAME." delivers banners.
	However, for the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";

$GLOBALS['strAutoMantenaceDisabledAndRunning']  = "
	However, automatic maintenance has recently been disabled. To ensure that ".MAX_PRODUCT_NAME." works correctly, you should
	either set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a> or
	<a href='account-settings-maintenance.php'>re-enable automatic maintenance</a>.
	<br><br>
	For the best performance, you should set up <a href='" . PRODUCT_DOCSURL . "/admin/maintenance' target='_blank'>scheduled maintenance</a>.
";





// Priority
$GLOBALS['strRecalculatePriority']		= "Ulangi kalkulasi prioritas";
$GLOBALS['strHighPriorityCampaigns']		= "Kampanye prioritas tinggi";
$GLOBALS['strAdViewsAssigned']			= "Memperuntukkan AdViews";
$GLOBALS['strLowPriorityCampaigns']		= "Kampanye prioritas rendah";
$GLOBALS['strPredictedAdViews']			= "Prediksi AdViews";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "Prediksi ini berdasar pada data minggu ini dan data minggu terakhir. ";
$GLOBALS['strPriorityBasedLastDays']		= "Prediksi ini berdasar pada data berberapa hari terakhir. ";
$GLOBALS['strPriorityBasedYesterday']		= "Prediksi ini berdasar pada data hari kemarin. ";
$GLOBALS['strPriorityNoData']			= "Data yang tersedia tidak cukup untuk memprediksikan secara akur berapa Impression yang akan diolah oleh Adserver pada hari ini. Memperuntukkan prioritas akan didasarkan oleh statisik Real Time. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Jumlah AdViews sudah cukup untuk mempenuhi target dari seluruh kampanye dengan prioritas tinggi. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Pada saat ini belum cukup jelas apakah jumlah AdViews telah cukup untuk mempenuhi target dari seluruh kampanye dengan prioritas tinggi. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Periksa banner cache";
$GLOBALS['strRebuildBannerCache']		= "Bangun ulang cache banner";
$GLOBALS['strBannerCacheRebuildButton'] = "Bangun ulang";
$GLOBALS['strRebuildDeliveryCache']			= "Bangun ulang database banner cache";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Cache penyampaian";
$GLOBALS['strAge']				= "Umur";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\nDatabase pada saat ini digunakan untuk menyimpan cache penyampaian.\\n\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\nDatabase pada saat ini digunakan untuk menyimpan cache penyampaian.\\n\\n";
$GLOBALS['strDeliveryCacheFiles']		= "\\nCache penyampaian pada saat ini disimpan pada berberapa file yang berbeda di server Anda.\\n\\n";


// Storage
$GLOBALS['strStorage']				= "Tempat Penampungan";
$GLOBALS['strMoveToDirectory']			= "Pindahkan gambar yang ditampung dalam database kedalam direktori";
$GLOBALS['strStorageExplaination']		= "\\nGambar-gambar yang digunakan oleh banner lokal tertampung pada database atau dalam direktori. Bila Anda menampung gambar\\ndalam sebuah direktori, beban pada database berkurang yang mengakibatkan kecepatan yang lebih tinggi.\\n\\n";

// Encoding
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvert']          = "Tukarkan";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\nAnda telah aktifkan <i>Statistik Kompak</i> tetapi statistik yang lama masih dalam format Verbose (terperinci).\\nApakah Anda ingin merubah statistik verbose ke dalam format kompak?\\n\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Mencari Update. Silakan tunggu...";
$GLOBALS['strAvailableUpdates']			= "Update yang tersedia";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "\\nBerdasarkan alasan yang tidak jelas pada saat ini pengecheckan tentang<br>\\nadanya Update gagal dilakukan. Silakan coba kembali pada lain waktu.\\n\\n";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";


$GLOBALS['strNewVersionAvailable']		= "
	<b>A new version of ".MAX_PRODUCT_NAME." is available.</b><br /> It is recommended to install this update,
	because it may fix some currently existing problems and will add new features. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strSecurityUpdate']			= "
	<b>It is highly recommended to install this update as soon as possible, because it contains a number
	of security fixes.</b> The version of ".MAX_PRODUCT_NAME." which you are currently using might
	be vulnerable to certain attacks and is probably not secure. For more information
	about upgrading please read the documentation which is included in the files below.</b>
";

$GLOBALS['strNotAbleToCheck']			= "
	<b>Because the XML extention isn't available on your server, ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available.</b>
";

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Bila Anda ingin tahu apakah telah tersedia versi yang lebih baru silakan kunjungi website kami.\\n\\n";

$GLOBALS['strClickToVisitWebsite']		= "Klik disini untuk kunjungi website kami";
$GLOBALS['strCurrentlyUsing'] 			= "Anda gunakan";
$GLOBALS['strRunningOn']				= "yang bekerjasama dengan";
$GLOBALS['strAndPlain']					= "dan";


// Stats conversion
$GLOBALS['strConverting']			= "Menukarkan";
$GLOBALS['strConvertingStats']			= "Menukarkan statistik...";
$GLOBALS['strConvertStats']			= "Menukarkan statistik";
$GLOBALS['strConvertAdViews']			= "AdViews telah ditukarkan,";
$GLOBALS['strConvertAdClicks']			= "AdClicks telah ditukarkan...";
$GLOBALS['strConvertNothing']			= "Tidak ada yang perlu ditukarkan...";
$GLOBALS['strConvertFinished']			= "Selesai...";

$GLOBALS['strConvertExplaination']		= "\\n	Pada saat ini Anda menggunakan format kompak untuk menyimpan statistik Anda. Tetapi <br>\\n	tetap masih ada statistik dalam format verbose (terperinci). Selama statistik verbose <br>\\n	tidak diubah menjadi format kompak, statistik tersebut tidak digunakan untuk tampilan\\n	di halaman-halaman tersebut.  <br>\\n	Sebelum mengubah statistik Anda disarankan untuk meng-backup database Anda!  <br>\\n	Apakah Anda ingin mengubah statistik Anda kedalam format kompak yang baru? <br>\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	Seluruh statistik verbose (terperinci) yang tersisa akan diubah kedalam format kompak. <br>\\n	Tergantung pada jumlah Impression yang tersimpan dalam format verbose, pengolahan ini  <br>\\n	butuh waktu berberapa menit. Mohon tunggu sampai perubahaan ini selesai sebelum halaman <br>\\n	lain dikunjungi. Dibawah ini akan tertampil seluruh perubahan yang dilakukan dalam database. <br>\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	Perubahan dari statistik verbose telah selesai dengan sukses dan data-data bisa <br>\\n	dipakai kembali seperti biasa. Dibawah ini akan tertampil seluruh perubahan yang <br>\\n	dilakukan dalam	database. <br>\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations


//  Append codes

$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";


?>
