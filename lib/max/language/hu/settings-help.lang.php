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
$GLOBALS['phpAds_hlp_my_footer'] = "\\n        Itt adhatja meg a fejléc fájlok útvonalát (pl.: /home/login/www/header.htm),\\n				hogy legyen fejléc és lábjegyzet az adminisztrátori kezelőfelület mindegyik\\n				oldalán. Szöveget vagy HTML-kódot egyaránt írhat ezekben a fájlokban (ha az\\n				egyik vagy mindkét fájlban HTML-kódot akar használni, akkor ne használjon\\n				olyan elemeket, mint a <body> vagy a <html>).\\n		";

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

$GLOBALS['phpAds_hlp_content_gzip_compression'] = "\\n		A GZIP tartalomtönörítés engedélyezésével az adminisztrátor kezelőfelület egy oldalának\\n		minden alkalommal történő megnyitásakor nagyon csökkenhetnek a böngészőhöz küldött\\n		adatok méretei. A funkció engedélyezéséhez legalább PHP 4.0.5 és a GZIP bővítmény\\n		telepítése szükséges.\\n		";

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

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "\\n        Ha teljes adatvédelmi nyilatkozatot akar használni, akkor megadhatja\\n				a nyilatkozat helyét.\\n		";

$GLOBALS['phpAds_hlp_compact_stats'] = "
        Traditionally ".MAX_PRODUCT_NAME." used rather extensive logging, which was very
        detailed but was also very demanding on the database server. This could
        be a big problem on sites with a lot of visitors. To overcome this problem
		".MAX_PRODUCT_NAME." also supports a new kind of statistics, the compact statistics,
		which is less demanding on the database server, but also less detailed.
		The compact statistics collects AdViews, AdClicks, and AdConversions for each hour, if you need
		more detail you can turn the compact statistics off.
		";

$GLOBALS['phpAds_hlp_log_adviews'] = "\\n        Normál esetben minden letöltés naplózásra kerül, viszont ha ön nem akar\\n				statisztikát gyűjteni a letöltésekről, kikapcsolhatja ezt.\\n		";

$GLOBALS['phpAds_hlp_block_adviews'] = "
		If a visitor reloads a page an AdView will be logged by ".MAX_PRODUCT_NAME." every time.
		This feature is used to make sure that only one AdView is logged for each unique
		banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdViews if the same banner isn�t already
		shown to the same visitor in the last 5 minutes. This feature only works the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_log_adclicks'] = "\\n        Normál esetben minden kattintás naplózásra kerül, viszont ha ön nem akarja\\n				gyűjteni a kattintások statisztikáját, akkor kikapcsolhatja.\\n		";

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

$GLOBALS['phpAds_hlp_geotracking_stats'] = "\\n		If you are using a geotargeting database you can also store the geographical information\\n		in the database. If you have enabled this option you will be able to see statistics about the\\n		location of your visitors and how each banner is performing in the different countries.\\n		This option will only be available to you if you are using verbose statistics.\\n		";

$GLOBALS['phpAds_hlp_reverse_lookup'] = "\\n		�?ltalában a webkiszolgáló állapítja meg az állomás nevét, de lehet, hogy bizonyos\\n		esetekben ki kell kapcsolni. Ha használni kívánja a felhasználók állomásnevét a továbbítási\\n		korlátozásokban, és/vagy statisztikát kíván erről vezetni, a kiszolgáló viszont nem\\n		szolgáltat ilyen információt, akkor kapcsolja be ezt a tulajdonságot. A látogató\\n		állomásnevének megállapítása némi időt vesz igénybe: lassítja a reklámok továbbítását.\\n		";

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
$GLOBALS['phpAds_hlp_auto_clean_tables_interval'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor az összegyűjtött statisztika az alábbi\\n		jelölőnégyzetben megadott időtartam leteltével automatikusan törlésre kerül. Például,\\n		ha 5 hétre állítja ezt a jelölőnégyzetet, akkor az 5 hétnél régebbi statisztika\\n		automatikusan törlésre kerül.\\n		";

$GLOBALS['phpAds_hlp_auto_clean_userlog'] =
$GLOBALS['phpAds_hlp_auto_clean_userlog_interval'] = "\\n		Ez a tulajdonság automatikusan törli azokat a bejegyzéseket a felashználói naplóból,\\n		melyek régebbiek az alábbi jelölőnégyzetben megadott hetek számánál.\\n		";

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

$GLOBALS['phpAds_hlp_ignore_hosts'] = "\\n        Ha nem akarja számolni valamely számítógépről érkező kattintásokat és letöltéseket,\\n				akkor ezeket felveheti erre a listára. A fordított keresés engedélyezése esetén\\n				tartományneveket és IP-címeket egyaránt felvehet, egyéb esetben csak az IP-címeket\\n				használhatja. Karakterhelyettesítőket is használhat (pl. '*.altavista.com' vagy\\n				'192.168.*').\\n		";

$GLOBALS['phpAds_hlp_begin_of_week'] = "\\n        A legtöbb ember számára a hét első napja a hétfő, de ha a vasárnappal akarja\\n				kezdeni a hetet, megteheti.\\n		";

$GLOBALS['phpAds_hlp_percentage_decimals'] = "\\n        Azt szabja meg, hogy hány tizes hely legyen látható a statisztikai oldalakon.\\n		";

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

$GLOBALS['phpAds_hlp_type_web_mode'] = "\\n        Ha a webkiszolgálón tárolt reklámokat akar használni, akkor konfigurálnia\\n				kell ezt a beállítást. Ha helyi mappában kívánja tárolni a reklámokat, akkor\\n				a <i>Helyi könyvtár</i> elemet jelölje ki. Ha külső FTP-kiszolgálón akarja\\n		tárolni a reklámokat, akkor a <i>Külső FTP-kiszolgáló</i> elemet jelölje ki.\\n		Lehet, hogy némely webkiszolgálón, sőt, akár a helyi webkiszolgálón is az\\n		FTP-opciót kívánja használni.\\n		";

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

$GLOBALS['phpAds_hlp_admin'] = "\\n        �?rja be az adminisztrátor felhasználónevét. Ezzel a felhasználónévvel\\n				jelentkezhet be ön az adminisztrátor kezelőfelületre.\\n		";

$GLOBALS['phpAds_hlp_admin_pw'] =
$GLOBALS['phpAds_hlp_admin_pw2'] = "\\n        �?rja be az adminisztrátor kezelőfelületre történő bejelentkezéshez szükséges\\n				jelszót. A gépelési hibák megelőzése céljából kétszer kell beírnia.\\n		";

$GLOBALS['phpAds_hlp_pwold'] =
$GLOBALS['phpAds_hlp_pw'] =
$GLOBALS['phpAds_hlp_pw2'] = "\\n        Az adminisztrátor jelszavának megváltoztatásához meg kell adnia a\\n				fentiekben a régi jelszót. Továbbá, a gépelési hibák elkerülése végett\\n				kétszer meg kell adnia az új jelszót.\\n		";

$GLOBALS['phpAds_hlp_admin_fullname'] = "\\n        Adja meg az adminisztrátor teljes nevét. Ez a név kerül felhasználásra\\n				a statisztika e-mailben történő küldésekor.\\n		";

$GLOBALS['phpAds_hlp_admin_email'] = "\\n        Az adminisztrátor e-mail címe. Ez kerül felhasználásra a Feladó mezőben\\n				a statisztika	e-mailben történő küldésekor.\\n		";

$GLOBALS['phpAds_hlp_admin_novice'] = "\\n        Ha szeretne figyelmeztetést kapni a hirdetők, kampányok, reklámok, kiadók és zónák\\n				törlése előtt, akkor válassza az igaz tulajdonságot.\\n		";

$GLOBALS['phpAds_hlp_client_welcome'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor a hirdető bejelentkezése utáni első\\n		oldalon egy üdvözlet fog megjelenni. Az admin/templates mappában lévő welcome.html\\n		fájlban a saját üdvözletét írhatja le. Néhány dolog, amit érdemes tartalmaznia:\\n		az ön cégének a neve, elérhetősége, a cég logója, a hirdetési árak oldalára\\n		mutató hivatkozás, stb.\\n		";

$GLOBALS['phpAds_hlp_client_welcome_msg'] = "\\n		A welcome.html fájl átszerkesztése helyett itt adhat meg egy rövid szöveget. Ha ide\\n		szöveget ír be, akkor a welcome.html fájl kihagyásra kerül. Használhat HTML elemeket is.\\n		";

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

$GLOBALS['phpAds_hlp_userlog_autoclean'] = "\\n		Ha meg akar győződni arról, hogy az adatbázis tisztítása megfelelő volt, akkor\\n		mentheti a jelentést arról, hogy valójában mi is történt tisztítás közben.\\n		Ennek az információnak a tárolása a felhasználói naplóban történik.\\n		";

$GLOBALS['phpAds_hlp_default_banner_weight'] = "\\n		Ha magasabbra kívánja állítani az alapértelmezett reklám fontosságot, akkor itt\\n		adhatja meg az óhajtott fontossági értéket. Ez az érték 1 alapértelmezésként.\\n		";

$GLOBALS['phpAds_hlp_default_campaign_weight'] = "\\n		Ha magasabbra kívánja állítani az alapértelmezett kampány fontosságot, akkor itt\\n		adhatja meg az óhajtott fontossági értéket. Ez az érték 1 alapértelmezésként.\\n		";

$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor <i>Kampány áttekintése</i> oldalon további\\n		információ jelenik meg az egyes kampányokról. Ez a további információ tartalmazza\\n		a hátralévő letöltések és a hátralévő kattintások számát, az aktiválás dátumát,\\n		a lejárat dátumát és a beállított prioritást.\\n		";

$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor a <i>Reklám áttekintése</i> oldalon további\\n		információ jelenik meg az egyes reklámokról. A kiegészítő információ tartalmazza a\\n		cél hivatkozást, a kulcsszavakat, a méretet és a reklám fontosságát.\\n		";

$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor a <i>Reklám áttekintése</i> oldalon látható lesz\\n		a reklámok képe. A tulajdonság letiltása esetén még mindig lehetőség van a reklámok\\n		megtekintésére, ha a <i>Reklám áttekintése</i> oldalon a reklám melletti háromszögre\\n		kattint.\\n		";

$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor a tényleges HTML-reklám fog megjelenni a HTML-kód\\n		helyett. Ez a tulajdonság alapértelmezésként letiltott, mert lehet, hogy a HTML-reklámok\\n		ütköznek a felhasználói kezelőfelülettel. Ha ez a tulajdonság letiltott, még mindig lehetséges\\n		az aktuális HTML-reklám megtekintése, a HTML-kód melletti <i>Reklám megjelenítése</i>\\n		gombra kattintással.\\n		";

$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor a <i>Reklám tulajdonságai</i>,\\n		a <i>Továbbítás tulajdonságai</i> és a <i>Zónák kapcsolása</i> oldalak tetején megtekinthető\\n		előnézetben. A rulajdonság letiltása esetén még mindig lehetőség van a reklám\\n		megtekintésére az oldalak tetején lévő <i>Reklám megjelenítése</i> gombra\\n		kattintással.\\n		";

$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor a <i>Hirdetők és kampányok</i>, ill. a\\n		<i>Kampány áttekintése</i> oldalon elrejti az inaktív reklámokat, kampányokat és\\n		hirdetőket. A tulajdonság engedélyezése esetén még mindig lehetőség van a rejtett\\n		elemek megjelenítésére, ha a <i>Mind megjelenítése</i> gombra kattint az oldal\\n		alján.\\n		";

$GLOBALS['phpAds_hlp_gui_show_matching'] = "\\n		Ha engedélyezi a tulajdonságot, akkor a megfelelő reklám fog megjelenni a\\n		<i>Kapcsolt reklámok</i> oldalon, a <i>Kampány kiválasztása</i> módszer kiválasztása\\n		esetén. Ez teszi lehetővé, hogy ön megtekinthesse, pontosan mely reklámokat is vegye\\n		figyelembe továbbítás céljából kapcsolt kampány esetén. Lehetőség van az egyező\\n		reklámok megtekintésére is.\\n		";

$GLOBALS['phpAds_hlp_gui_show_parents'] = "\\n		Ha engedélyezi ezt a tulajdonságot, akkor a reklámok szülő kampányai láthatók lesznek\\n		a <i>Kapcsolt reklámok</i> oldalon a <i>Reklám kiválasztása</i> mód választása esetén.\\n		�?gy válik lehetővé az ön számára, hogy a reklám kapcsolása előtt megtekinthesse, melyik\\n		reklám melyik kampányhoz is tartozik. Ez azt is jelenti, hogy a reklámok csoportosítása\\n		a szülő kampányok alapján történik, és tovább már nem betűrendbe soroltak.\\n		";
?>
