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

// Settings help translation strings
$GLOBALS['phpAds_hlp_dbhost'] = "
        Specify the hostname of the ".phpAds_dbmsname." database server to which you are trying to connect.
		";

$GLOBALS['phpAds_hlp_dbport'] = "
        Specify the number of the port of the ".$phpAds_dbmsname." database server to which you are trying to
		connect. The default port number for a ".$phpAds_dbmsname." database is <i>" . ($phpAds_dbmsname == 'MySQL' ? '3306' : '5432')."</i>.
		";

$GLOBALS['phpAds_hlp_dbuser'] = "
        Specify the username which ".MAX_PRODUCT_NAME." must use to gain access to the ".phpAds_dbmsname." database server.
		";

$GLOBALS['phpAds_hlp_dbpassword'] = "
        Specify the password which ".MAX_PRODUCT_NAME." must use to gain access to the ".phpAds_dbmsname." database server.
		";

$GLOBALS['phpAds_hlp_dbname'] = "
        Specify the name of the database on the database server where ".MAX_PRODUCT_NAME." must store its data.
		Important the database must already be created on the database server. ".MAX_PRODUCT_NAME." will <b>not</b> create
		this database if it does not exist yet.
		";

$GLOBALS['phpAds_hlp_persistent_connections'] = "
        The use of persistent connection can speed up ".MAX_PRODUCT_NAME." considerably
		and may even decrease the load on the server. There is a drawback however, on sites with
		a lot of visitors the load on the server can increase and become larger then when using normal
		connections. Whether you should use regular connections or persistant connections depends on the
		number of visitors and the hardware your are using. If ".MAX_PRODUCT_NAME." is using too many resources,
		you should take a look at this setting first.
		";

$GLOBALS['phpAds_hlp_compatibility_mode'] = "
        If you are having problem integrating ".MAX_PRODUCT_NAME." with another thirth-party product it
		might help to turn on the database compatibility mode. If you are using local mode
		invocation and the database compatibility is turned on ".MAX_PRODUCT_NAME." should leave
		the state of the database connection exectly the same as it was before ".MAX_PRODUCT_NAME." ran.
		This option is a bit slower (only slightly) and therefore turned off by default.
		";

$GLOBALS['phpAds_hlp_table_prefix'] = "
        If the database ".MAX_PRODUCT_NAME." is using is shared by multiple software products, it is wise
		to add a prefix to names of the tables. If you are using multiple installations of ".MAX_PRODUCT_NAME."
		in the same database, you need to make sure this prefix is unique for all installations.
		";

$GLOBALS['phpAds_hlp_table_type'] = "
        ".phpAds_dbmsname." supports multiple table types. Each type of table has unique properties and some
		can speed up ".MAX_PRODUCT_NAME." considerable. MyISAM is the default table type and is available
		in all installations of ".phpAds_dbmsname.". Other table types may not be available on your server.
		";

$GLOBALS['phpAds_hlp_url_prefix'] = "
        ".MAX_PRODUCT_NAME." needs to know where it is located on the web server in order
        to work correctly. You must specify the URL to the directory where ".MAX_PRODUCT_NAME."
        is installed, for example: <i>http://www.your-url.com/".MAX_PRODUCT_NAME."</i>.
		";

$GLOBALS['phpAds_hlp_ssl_url_prefix'] = "
        ".MAX_PRODUCT_NAME." needs to know where it is located on the web server in order
        to work correctly. Sometimes the SSL prefix is different than the regular URL prefix.
		You must specify the URL to the directory where ".MAX_PRODUCT_NAME."
        is installed, for example: <i>https://www.your-url.com/".MAX_PRODUCT_NAME."</i>.
		";

$GLOBALS['phpAds_hlp_my_header'] =
$GLOBALS['phpAds_hlp_my_footer'] = "\\n	Disini Anda perlu menetapkan <i>Path</i> ke file Header (contoh: /home/login/www/header.htm)\\n		untuk mengadakan sebuah header dan/atau footer pada setiap halaman di Interface Admin.\\n		Diperbolehkan untuk menggunakan teks atau html dalam file tersebut (bila Anda ingin\\n		menggunakan html dalam satu atau kedua filenya jangan menggunakan <i>Tags</i> seperti &lt;body>\\n		atau &lt;html>).\\n		";

$GLOBALS['phpAds_hlp_my_logo'] = "
        You should put here the name of the custom logo file that you wish to display instead
        of the default logo.  The logo must be placed in the admin/images directory before
        setting the file name here.
               ";

$GLOBALS['phpAds_hlp_gui_header_foreground_color'] = "
        You should put here a custom color which will be used for tabs, the search bar, and
        some bold text.
               ";

$GLOBALS['phpAds_hlp_gui_header_background_color'] = "
        You should put here a custom color which will be used for the header background.
               ";

$GLOBALS['phpAds_hlp_gui_header_active_tab_color'] = "
        You should put here a custom color which will be used for the currently selected main tab.
               ";

$GLOBALS['phpAds_hlp_gui_header_text_color'] = "
        You should put here a custom color which will be used for the text in the header.
               ";

$GLOBALS['phpAds_hlp_content_gzip_compression'] = "\\n	Dengan membolehkan kompresi GZIP Anda akan dapat mengurangi data yang dikirim kepada browser\\n		setiap kalinya Interface Administrator dibuka yang cukup besar. Untuk mengaktifkan\\n		fasilitas ini minimal versi PHP 4.0.5 dengan ekstensi GZIP perlu terinstal pada\\n		server Anda.\\n		";

$GLOBALS['phpAds_hlp_language'] = "
        Specify the default language ".MAX_PRODUCT_NAME." should use. This language will
        be used as a default for the admin and advertiser interface. Please note:
        you can set a different language for each advertiser from the admin interface
        and allow advertisers to change their language themselves.
		";

$GLOBALS['phpAds_hlp_name'] = "
        Specify the name you want to use for this application. This string will
        be displayed on all pages in the admin and advertiser interface. If you leave
        this setting empty (default) a logo of ".MAX_PRODUCT_NAME." will be displayed instead.
		";

$GLOBALS['phpAds_hlp_company_name'] = "
        This name is used in the email sent by ".MAX_PRODUCT_NAME.".
		";

$GLOBALS['phpAds_hlp_override_gd_imageformat'] = "
        ".MAX_PRODUCT_NAME." usually detects if the GD library is installed and which image
        format is supported by the installed version of GD. However it is possible
        the detection is not accurate or false, some versions of PHP do not allow
        the detection of the supported image formats. If ".MAX_PRODUCT_NAME." fails to auto-detect
        the right image format you can specify the right image format. Possible
        values are: none, png, jpeg, gif.
		";

$GLOBALS['phpAds_hlp_p3p_policies'] = "
        If you want to enable ".MAX_PRODUCT_NAME."' P3P Privacy Policies you must turn this
        option on.
		";

$GLOBALS['phpAds_hlp_p3p_compact_policy'] = "
        The compact policy which is sent together with cookies. The default setting
        is: 'CUR ADM OUR NOR STA NID', which will allow Internet Explorer 6 to
        accept the cookies used by ".MAX_PRODUCT_NAME.". If you want you can alter these
        settings to match your own privacy statement.
		";

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "\\n	Bila Anda ingin menggunakan Private Policy yang penuh, Anda bisa menentukan lokasi dari\\n		Policy tersebut disini.\\n		";

$GLOBALS['phpAds_hlp_compact_stats'] = "
        Traditionally ".MAX_PRODUCT_NAME." used rather extensive logging, which was very
        detailed but was also very demanding on the database server. This could
        be a big problem on sites with a lot of visitors. To overcome this problem
		".MAX_PRODUCT_NAME." also supports a new kind of statistics, the compact statistics,
		which is less demanding on the database server, but also less detailed.
		The compact statistics collects AdViews, AdClicks, and AdConversions for each hour, if you need
		more detail you can turn the compact statistics off.
		";

$GLOBALS['phpAds_hlp_log_adviews'] = "
        Normally all AdViews are logged, if you don't want to gather statistics
        about AdViews you can turn this off.
		";

$GLOBALS['phpAds_hlp_block_adviews'] = "
		If a visitor reloads a page an AdView will be logged by ".MAX_PRODUCT_NAME." every time.
		This feature is used to make sure that only one AdView is logged for each unique
		banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdViews if the same banner isn�t already
		shown to the same visitor in the last 5 minutes. This feature only works the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_log_adclicks'] = "
        Normally all AdClicks are logged, if you don't want to gather statistics
        about AdClicks you can turn this off.
		";

$GLOBALS['phpAds_hlp_block_adclicks'] = "
		If a visitor clicks multiple times on a banner an AdClick will be logged by ".MAX_PRODUCT_NAME."
		every time. This feature is used to make sure that only one AdClick is logged for each
		unique banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdClicks if the visitor didn�t click on the same
		banner in the last 5 minutes. This feature only works when the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_log_adconversions'] = "
        Normally all AdConversions are logged, if you don't want to gather statistics
        about AdConversions you can turn this off.
		";

$GLOBALS['phpAds_hlp_block_adconversions'] = "
		If a visitor reloads a page with an AdConversion beacon, ".MAX_PRODUCT_NAME." will log the AdConversion
		every time. This feature is used to make sure that only one AdConversion is logged for each
		unique conversion for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdConversions if the visitor didn�t load the same
		page with the AdConversion beacon in the last 5 minutes. This feature only works when the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_geotracking_stats'] = "\\n	Bila Anda menggunakan database untuk <i>Geotargeting</i>, Anda diperbolehkan untuk menyimpan informasi\\n		geografis dalam database. Jika fungsi ini diaktifkan Anda dapat mengikuti statistik tentang\\n		lokasi asal dari pengunjung dan performa dari setiap banner pada negara-negara berbeda.\\n		Pilihan ini hanya tersedia bilamana Anda menggunakan statistik <i>Verbose</i>.\\n		";

$GLOBALS['phpAds_hlp_reverse_lookup'] = "\\n	Nama dari host pada umumnya ditentukan oleh web server tetapi kadang-kadang fasilitas ini tidak diaktifkan.\\n		Bila Anda ingin menggunakan nama host dari pengunjung dalam batas penyampaian dan/atau ingin\\n		mempertahankan statistik tentang ini tetapi server tidak menyediakan informasi tersebut, pilihan\\n		ini perlu dimatikan. Penentuan nama host dari pengunjung membutuhkan waktu yang cukup lama;\\n		hal ini akan memperlambat penyampaian banner.\\n		";

$GLOBALS['phpAds_hlp_proxy_lookup'] = "
		Some visitors are using a proxy server to access the internet. In that case ".MAX_PRODUCT_NAME." will
		log the IP address or the hostname of the proxy server instead of the user. If you enable
		this feature ".MAX_PRODUCT_NAME." will try to find the IP address or hostname of the visitor's computer
		behind the proxy server. If it is not possible to find the exact address of the visitor
		it will use the address of the proxy server instead. This option is not enabled by default,
		because it will slow the delivery of banners down considerably.
		";

$GLOBALS['phpAds_hlp_obfuscate'] = "Nothing here....";

$GLOBALS['phpAds_hlp_auto_clean_tables'] =
$GLOBALS['phpAds_hlp_auto_clean_tables_interval'] = "\\n	Bila Anda ingin gunakan fasilitas ini, statistik yang diperolehkan akan dihapus secara otomatis\\n		setelah periode yang ditentukan pada kotak ini tercapai. Sebagai contoh: Bila Anda tentukan\\n		jangka waktu 5 minggu, statistik yang melebihi jangka waktu 5 minggu akan dihapus secara\\n		otomatis.\\n		";

$GLOBALS['phpAds_hlp_auto_clean_userlog'] =
$GLOBALS['phpAds_hlp_auto_clean_userlog_interval'] = "\\n	Pilihan ini akan menghapus semua catatan dari <i>Userlog</i> yang masa waktunya melebihi jumlah\\n		minggu yang telah ditentukan pada kotak	dibawah ini.\\n		";

$GLOBALS['phpAds_hlp_geotracking_type'] = "
		Geotargeting allows ".MAX_PRODUCT_NAME." to convert the IP address of the visitor to geographical
		information. Based on this information you can set delivery limitations or you could store
		this information to see which country is generation the most impressions or click-thrus.
		If you want to enable geotargeting you need to choose which type of database you have.
		".MAX_PRODUCT_NAME." currently supports the <a href='http://hop.clickbank.net/?phpadsnew/ip2country' target='_blank'>IP2Country</a>
		and <a href='http://www.maxmind.com/?rId=phpadsnew' target='_blank'>GeoIP</a> database.
		";

$GLOBALS['phpAds_hlp_geotracking_location'] = "
		Unless you are the GeoIP Apache module, you should tell ".MAX_PRODUCT_NAME." the location of the
		geotargeting database. It is always recommended to place the database outside of the web
		servers document root, because otherwise people are able to download the database.
		";

$GLOBALS['phpAds_hlp_geotracking_cookie'] = "
		Converting the IP address in geographical information takes time. To prevent
		".MAX_PRODUCT_NAME." from having to do this every time a banner is delivered the result can be
		stored in a cookie. If this cookie is present ".MAX_PRODUCT_NAME." will use this information instead
		of converting the IP address.
		";

$GLOBALS['phpAds_hlp_ignore_hosts'] = "\\n	Bila Anda ingin menghindar perhitungan Clicks dan Views oleh komputer tertentu, komputer-\\n		komputer tersebut bisa dicatat pada daftar ini. Bila fasilitas <i>Reverse Lookup</i> diaktifkan,\\n		Anda diperbolehkan untuk mencatat nama domain dan nomor IP disini. Bila fasilitas\\n		<i>Reverse Lookup</i> tidak aktif, hanya nomor IP diperbolehkan disini. Anda boleh gunakan\\n		Wildcards (contoh '*.altavista.com' or '192.168.*').\\n		";

$GLOBALS['phpAds_hlp_begin_of_week'] = "\\n	Pada umumnya sebuah minggu dimulai dengan hari senin. Bila Anda ingin memulai minggu\\n		pada hari minggu, silakan tentukannya disini.\\n		";

$GLOBALS['phpAds_hlp_percentage_decimals'] = "\\n	Menentukan jumlah angka desimal pada halaman statistik.\\n		";

$GLOBALS['phpAds_hlp_warn_admin'] = "
        ".MAX_PRODUCT_NAME." can sent you email if a campaign has only a limited number of
        views, clicks, or conversions left. This is turned on by default.
		";

$GLOBALS['phpAds_hlp_warn_client'] = "
        ".MAX_PRODUCT_NAME." can sent the advertiser email if one of his campaigns has only a
		limited number of views, clicks, or conversions left. This is turned on by default.
		";

$GLOBALS['phpAds_hlp_qmail_patch'] = "
		Some versions of qmail are affected by a bug, which causes email sent by
		".MAX_PRODUCT_NAME." to show the headers inside the body of the email. If you enable
		this setting, ".MAX_PRODUCT_NAME." will send email in a qmail compatible format.
		";

$GLOBALS['phpAds_hlp_warn_limit'] = "
        The limit on which ".MAX_PRODUCT_NAME." starts sending warning emails. This is 100
        by default.
		";

$GLOBALS['phpAds_hlp_acl'] = "
        If you are not using delivery limitations you can disable this option with this parameter,
        this will speed up ".MAX_PRODUCT_NAME." a bit.
		";

$GLOBALS['phpAds_hlp_default_banner_url'] =
$GLOBALS['phpAds_hlp_default_banner_target'] = "
        If ".MAX_PRODUCT_NAME." can't connect to the database server, or can't find any matching
        banners at all, for example when the database crashed or was deleted,
        it won't display anything. Some users may want to specify a default banner,
        which will be displayed in these situations. The default banner specified
        here will not be logged and won't be used if there are still active banners
        left in the database. This is turned off by default.
		";

$GLOBALS['phpAds_hlp_delivery_caching'] = "
		To help speed up the delivery ".MAX_PRODUCT_NAME." uses a cache which includes all
		the information needed to delivery the banner to the visitor of your website. The delivery
		cache is stored by default in the database, but to increase the speed even more it is also
		possible to store the cache inside a file or inside shared memory. Shared memory is fastest,
		Files is also very fast. It is not recommended to turn the delivery cache off, because this
		will seriously affect the performance.
		";

$GLOBALS['phpAds_hlp_type_web_mode'] = "\\n	Bila Anda ingin menggunakan banner yang disimpan pada web server, penyetelan disini perlu\\n		dilakukan. Untuk simpan banner dalam direktori lokal penyetelan ini harus ditetapkan\\n		pada posisi <i>Direktori Lokal</i>. Bila Anda ingin simpan banner pada FTP\\n		Server eksternal, penyetelan ini harus berada pada posisi <i>FTP Server\\n		Eksternal</i>. Pada web server tertentu Anda ingin menggunakan penyimpanan FTP,\\n		meskipun di web server lokal.\\n		";

$GLOBALS['phpAds_hlp_type_web_dir'] = "
        Specify the directory where ".MAX_PRODUCT_NAME." needs to copy the uploaded banners
        to. This directory needs to be writable by PHP, this could mean you need
        to modify the UNIX permissions for this directory (chmod). The directory
        you specify here needs to be in the web server' document root, the web
        server must be able to serve the files directly. Do not specify a trailing
        slash (/). You only need to configure this option if you have set the storing
		method to <i>Local directory</i>.
		";

$GLOBALS['phpAds_hlp_type_web_ftp_host'] = "
		If you set the storing method to <i>External FTP server</i> you need to
        specify the IP address or domain name of the FTP server where ".MAX_PRODUCT_NAME." needs
		to copy the uploaded banners to.
		";

$GLOBALS['phpAds_hlp_type_web_ftp_path'] = "
		If you set the storing method to <i>External FTP server</i> you need to
        specify the directory on the external FTP server where ".MAX_PRODUCT_NAME." needs
		to copy the uploaded banners to.
		";

$GLOBALS['phpAds_hlp_type_web_ftp_user'] = "
		If you set the storing method to <i>External FTP server</i> you need to
        specify the username which ".MAX_PRODUCT_NAME." must use in order to connect to the
		external FTP server.
		";

$GLOBALS['phpAds_hlp_type_web_ftp_password'] = "
		If you set the storing method to <i>External FTP server</i> you need to
        specify the password which ".MAX_PRODUCT_NAME." must use in order to connect to the
		external FTP server.
		";

$GLOBALS['phpAds_hlp_type_web_ftp_passive'] = "
 	    Some FTP servers and firewalls require transfers to use Passive Mode (PASV).
 	    If " . MAX_PRODUCT_NAME . " will need to use Passive Mode to connect to your
 	    FTP server, then enable this option.
 	    ";

$GLOBALS['phpAds_hlp_type_web_url'] = "
        If you store banners on a web server, ".MAX_PRODUCT_NAME." needs to know which public
        URL corresponds with the directory you specified below. Do not specify
        a trailing slash (/).
		";

$GLOBALS['phpAds_hlp_type_web_ssl_url'] = "
        If you store banners on a web server, ".MAX_PRODUCT_NAME." needs to know which public
        URL (SSL) corresponds with the directory you specified below. Do not specify
        a trailing slash (/).
		";

$GLOBALS['phpAds_hlp_type_html_auto'] = "
        If this option is turned on ".MAX_PRODUCT_NAME." will automatically alter HTML banners
        in order to allow the clicks to be logged. However even while this option
        is turned on, it will still be possible to disable this feature on a per banner
        basis.
		";

$GLOBALS['phpAds_hlp_type_html_php'] = "
        It is possible to let ".MAX_PRODUCT_NAME." execute PHP code embedded inside HTML
        banners. This feature is turned off by default.
		";

$GLOBALS['phpAds_hlp_admin'] = "\\n	Silakan isi nama pengguna dari Administrator. Dengan nama pengguna tersebut Anda\\n		diperbolehkan untuk me-login ke Interface Administrator.\\n		";

$GLOBALS['phpAds_hlp_admin_pw'] =
$GLOBALS['phpAds_hlp_admin_pw2'] = "\\n	Silakan ketik kata sandi yang ingin digunakan untuk me-login ke Interface Administrator.\\n		Kata sandi perlu diketik berulang dua kali untuk menghindar kekeliruan pengetetikan.\\n		";

$GLOBALS['phpAds_hlp_pwold'] =
$GLOBALS['phpAds_hlp_pw'] =
$GLOBALS['phpAds_hlp_pw2'] = "\\n	Untuk mengubah kata sandi dari Administrator, Anda perlu sebutkan kata sandi yang lama\\n		diatas. Kata sandi yang baru perlu diketik berulang dua kali untuk hindari kekeliruan\\n		sewaktu penggantian kata sandi.\\n		";

$GLOBALS['phpAds_hlp_admin_fullname'] = "\\n	Nama lengkap dari Administrator. Nama yang tercantum disini digunakan untuk mengirim statistik\\n		melalui E-Mail.\\n		";

$GLOBALS['phpAds_hlp_admin_email'] = "\\n	Alamat E-Mail dari Administrator. Alamat ini digunakan sebagai alamat dari pengirim\\n		setiap kalinya E-Mail tentang statistik dikirim.\\n		";

$GLOBALS['phpAds_hlp_admin_novice'] = "\\n	Bila Anda ingin menerima peringatan sebelum menghapus Pemasang Iklan, kampanye, banner,\\n		penerbit dan zona tepatkan penyetelan ini ke <i>True</i>.\\n		";

$GLOBALS['phpAds_hlp_client_welcome'] = "\\n	Bila fasilitas ini ditepatkan pada posisi On, sebuah kabar Selamat Datang akan ditampilkan\\n		pada halaman pembuka setelah Pemasang Iklan login. Anda diperbolehkan untuk ubah\\n		kabar ini sesuai keinginan Anda dengan meng-edit file welcome.html yang terletak pada\\n		direktori admin/templates. Mungkin Anda ingin menambahkan nama perusahaan, informasi\\n		tentang alamat, lambang perusahaan, sebuah link ke halaman harga untuk beriklan di\\n		situs Anda dll..\\n		";

$GLOBALS['phpAds_hlp_client_welcome_msg'] = "\\n	Daripada meng-edit file welcome.html, Anda diperbolehkan untuk mengisi kabar disini. Bila Anda\\n		tulis teks disini, file welcome.html akan diabaikan. Diperbolehkan untuk menggunakan\\n		<i>HTML Tags</i> disini.\\n		";

$GLOBALS['phpAds_hlp_updates_frequency'] = "
		If you want to check for new versions of ".MAX_PRODUCT_NAME." you can enable this feature.
		It is possible the specify the interval in which ".MAX_PRODUCT_NAME." makes a connection to
		the update server. If a new version is found a dialog box will pop up with additional
		information about the update.
		";

$GLOBALS['phpAds_hlp_userlog_email'] = "
		If you want to keep a copy of all outgoing email messages send by ".MAX_PRODUCT_NAME." you
		can enable this feature. The email messages are stored in the userlog.
		";

$GLOBALS['phpAds_hlp_userlog_inventory'] = "
		To ensure the inventory calculation ran correctly, you can save a report about
		the hourly inventory calculation. This report includes the predicted profile and how much
		priority is assigned to all banners. This information might be useful if you
		want to submit a bugreport about the priority calculations. The reports are
		stored inside the userlog.
		";

$GLOBALS['phpAds_hlp_userlog_autoclean'] = "\\n	Untuk memastikan bahwa database telah dipangkas secara benar, Anda bisa simpan sebuah laporan\\n		tentang apa saja yang terjadi sewaktu pemangkasan tersebut dijalankan. Informasi ini\\n		akan tersimpan pada Userlog.\\n		";

$GLOBALS['phpAds_hlp_default_banner_weight'] = "\\n	Bila Anda ingin menggunakan bobot banner yang lebih tinggi sebagai default, silakan tentukan bobot\\n		yang diinginkan disini. Stelan 1 adalah penyetelan default.\\n		";

$GLOBALS['phpAds_hlp_default_campaign_weight'] = "\\n	Bila Anda ingin menggunakan bobot kampanye yang lebih tinggi sebagai default, silakan tentukan bobot\\n		yang diinginkan disini. Stelan 1 adalah penyetelan default.\\n		";

$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "\\n	Bila penyetelan ini diaktifkan, sebuah informasi khusus tentang setiap kampanye akan ditampilkan\\n		pada halaman <i>Ikhtisar dari Kampanye</i>. Informasi khusus tersebut berisi jumlah AdViews yang\\n		tersisa, jumlah AdClicks yang tersisa, tanggal aktivasi, waktu berakhir dan penyetelan\\n		prioritas.\\n		";

$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "\\n	Bila penyetelan ini diaktifkan, sebuah informasi khusus tentang setiap banner akan ditampilkan\\n		pada halaman <i>Pandangan Banner</i>. Informasi khusus tersebut berisi URL tujuan,\\n		kata kunci, ukuran dan bobot dari banner-banner yang bersangkutan.\\n		";

$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "\\n	Bila penyetelan ini diaktifkan, sebuah <i>Preview</i> dari semua banner akan ditampilkan pada halaman\\n		<i>Pandangan Banner</i>. Bila penyetelan ini tidak aktif, sebuah <i>Preview</i> dari\\n		seluruh banner tetap ditampilkan jika Anda men-klik segitiga yang berlokasi di sebelahnya\\n		setiap banner pada halaman <i>Pandangan Banner</i>.\\n		";

$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "\\n	Bila penyetelan ini diaktifkan, banner yang sebenarnya akan ditampilkan dan bukan kode HTML. Penyetelan\\n		ini tidak aktif sebagai default, sehubungan banner HTML mampu untuk berkonflik dengan interface\\n		dari pengguna. Bila penyetalan ini tidak aktif, banner yang sebenarnya tetap bisa dimunculkan\\n		dengan cara menggunakan	tombol <i>Tampilkan Banner</i> yang terletak di sebelah kode HTML.\\n		";

$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "\\n	Bila penyetelan ini diaktifkan, sebuah <i>Preview</i> akan ditampilkan pada halaman <i>Properties dari\\n		Banner</i>, <i>Pilihan Penyampaian</i> dan halaman <i>Zona yang di-link</i>. Bila penyetalan ini\\n		tidak aktif, hal-hal yang tersembunyi tetap ditampilkan dengan cara menggunakan\\n		tombol <i>Tampilkan Banner</i> yang terletak pada bagian atas dari halaman yang bersangkutan.\\n		";

$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "\\n	Bila penyetelan ini diaktifkan, seluruh banner, kampanye dan Pemasang Iklan akan disembunyikan\\n		dari halaman <i>Pemasang Iklan & Kampanye</i> dan dari halaman <i>Ikhtisar Kampanye</i>.\\n		Bila penyetalan ini aktif, hal-hal yang tersembunyi tetap ditampilkan dengan cara menggunakan\\n		tombol <i>Tampilkan Semua</i> yang terletak pada bagian bawah dari halaman yang bersangkutan.\\n		";

$GLOBALS['phpAds_hlp_gui_show_matching'] = "\\n	Bila pilihan ini diaktifkan banner sebanding akan tertampil pada halaman <i>Linked banners</i> jika\\n		metode <i>Campaign selection</i> dipilihkan. Hal ini mengizinkan Anda untuk melihat secara\\n		pasti banner yang mana saja ditentukan untuk disampaikan kalau sebuah kampanye di-link.\\n		Memungkinkan juga untuk melihat banner sebanding dalam <i>Preview</i>.\\n		";

$GLOBALS['phpAds_hlp_gui_show_parents'] = "\\n	Bila pilihan ini diaktifkan kampanye induk dari banner akan tertampil pada halaman <i>Linked banners</i>\\n		jika metode <i>Banner selection</i> dipilihkan. Hal ini mengizinkan Anda untuk memastikan banner\\n		mana dimiliki oleh kampanye yang mana sebelum banner yang bersangkutan di-link. Hal ini juga berarti\\n		bahwa banner dikelompokkan oleh kampanye induknya dan tidak lagi diurut bedasarkan abjad.\\n		";
?>
