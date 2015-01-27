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
$GLOBALS['phpAds_hlp_my_footer'] = "\\n	U kunt hier het pad naar de voetnoot en eindnoot bestanden invoeren (bijv.\\n	/home/login/www/header.htm) indien u een voetnoot en/of eindnoot wil hebben\\n	op alle pagina's van de administratie interface. U kunt zowel gewone tekst\\n	bestanden als html bestanden gebruiken (indien u html wilt gebruiken in\\n	deze bestanden moet u niet de <body> of <html> tags gebruiken).\\n";






$GLOBALS['phpAds_hlp_content_gzip_compression'] = "\\n	Door GZIP content compressie te gebruiken zal de data, die elke keer als een pagina\\n	van de administratie interface wordt opgevraagd naar uw browser gestuurd wordt, afnemen\\n	Om deze functie te kunnen gebruiken moet minimaal PHP 4.0.5 en de GZIP extentie op uw\\n	server geinstalleerd zijn.\\n";

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

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "\\n	Indien u een volledige privacy policy wilt gebruiken kunt u hier de locatie\\n	invullen van het P3P policy bestand.\\n";

$GLOBALS['phpAds_hlp_compact_stats'] = "
        Traditionally ".MAX_PRODUCT_NAME." used rather extensive logging, which was very
        detailed but was also very demanding on the database server. This could
        be a big problem on sites with a lot of visitors. To overcome this problem
		".MAX_PRODUCT_NAME." also supports a new kind of statistics, the compact statistics,
		which is less demanding on the database server, but also less detailed.
		The compact statistics collects AdViews, AdClicks, and AdConversions for each hour, if you need
		more detail you can turn the compact statistics off.
		";

$GLOBALS['phpAds_hlp_log_adviews'] = "\\n	Normaal gesproken worden alle AdViews bijgehouden, maar in het geval dat u geen\\n	statistieken wil bijhouden over het aantal AdViews, dan kunt u deze functie uitzetten.\\n";

$GLOBALS['phpAds_hlp_block_adviews'] = "
		If a visitor reloads a page an AdView will be logged by ".MAX_PRODUCT_NAME." every time.
		This feature is used to make sure that only one AdView is logged for each unique
		banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdViews if the same banner isn�t already
		shown to the same visitor in the last 5 minutes. This feature only works the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_log_adclicks'] = "\\n	Normaal gesproken worden alle AdViews bijgehouden, maar in het geval dat u geen\\n	statistieken wilt bijhouden over het aantal AdClicks, dan kunt u deze functie uitzetten.\\n";

$GLOBALS['phpAds_hlp_block_adclicks'] = "
		If a visitor clicks multiple times on a banner an AdClick will be logged by ".MAX_PRODUCT_NAME."
		every time. This feature is used to make sure that only one AdClick is logged for each
		unique banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdClicks if the visitor didn�t click on the same
		banner in the last 5 minutes. This feature only works when the browser accepts cookies.
		";


$GLOBALS['phpAds_hlp_block_adconversions'] = "
		If a visitor reloads a page with an AdConversion beacon, ".MAX_PRODUCT_NAME." will log the AdConversion
		every time. This feature is used to make sure that only one AdConversion is logged for each
		unique conversion for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdConversions if the visitor didn�t load the same
		page with the AdConversion beacon in the last 5 minutes. This feature only works when the browser accepts cookies.
		";



$GLOBALS['phpAds_hlp_proxy_lookup'] = "
		Some visitors are using a proxy server to access the internet. In that case ".MAX_PRODUCT_NAME." will
		log the IP address or the hostname of the proxy server instead of the user. If you enable
		this feature ".MAX_PRODUCT_NAME." will try to find the IP address or hostname of the visitor's computer
		behind the proxy server. If it is not possible to find the exact address of the visitor
		it will use the address of the proxy server instead. This option is not enabled by default,
		because it will slow the delivery of banners down considerably.
		";


$GLOBALS['phpAds_hlp_auto_clean_tables'] =

$GLOBALS['phpAds_hlp_auto_clean_userlog'] =

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

$GLOBALS['phpAds_hlp_ignore_hosts'] = "\\n	Indien u van sommige computers niet de AdViews en AdClicks wilt bijhouden\\n	kunt u het IP adres van de computer aan deze lijst toevoegen. Indien u\\n	Reverse lookup aan heeft staan kunt u ook domeinnamen in deze lijst gebruiken.\\n	U kunt ook een zgn. wildcard gebruiken (bijv. *.altavista.nl of 192.168.*).\\n";

$GLOBALS['phpAds_hlp_begin_of_week'] = "\\n	Voor de meeste mensen start een week op de Maandag, maar indien u in een land\\n	woont waar het gewoonte is dat de week op een Zondag start kunt dit hier instellen.\\n";


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

$GLOBALS['phpAds_hlp_type_web_mode'] = "\\n	Indien u uw banners wilt opslaan op een webserver, dan moet u deze optie\\n	configureren. Indien u de banner wilt opslaan in een lokale map, zet dan\\n	dit veld op <i>Lokale map</i>. Indien u de banner wilt opslaan op een externe\\n	server, zet dan dit veld op <i>Externe FTP server</i>. Op sommige webservers\\n	is het verstandig om de tweede optie te gebruiken, zelfs al is de map\\n	waarin u de banner wilt opslaan lokaal bereikbaar is.\\n";

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

$GLOBALS['phpAds_hlp_admin'] = "\\n	U kunt hier de gebruikersnaam van de beheerder instellen. Met deze\\n	gebruikersnaam krijgt u toegang tot de administratie interface.\\n";

$GLOBALS['phpAds_hlp_admin_pw'] =
$GLOBALS['phpAds_hlp_admin_pw2'] = "\\n	Vul hier het wachtwoord at u wilt gebruiken om toegang te krijgen tot\\n	de administratie interface. U dient het wachtwoord twee maal in te vullen\\n	om typefouten te voorkomen.\\n";

$GLOBALS['phpAds_hlp_pwold'] =
$GLOBALS['phpAds_hlp_pw'] =
$GLOBALS['phpAds_hlp_pw2'] = "\\n	Om het wachtwoord van de beheerder te veranderen dient u eerst het\\n	oude wachtwoord in te vullen, en daaronder tweemaal het nieuwe wachtwoord.\\n	U moet dit dubbel invullen, om typefouten te voorkomen.\\n";


$GLOBALS['phpAds_hlp_admin_email'] = "Het e-mail adres van de administrator. Dit wordt gebruikt als \"afzender\" adres wanneer";

$GLOBALS['phpAds_hlp_admin_novice'] = "Indien u een waarschuwing wilt krijgen voordat u adverteerders, campagnes of banners verwijder, moet u deze optie aanzetten.";



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



$GLOBALS['phpAds_hlp_default_banner_weight'] = "\\n	Indien u standaard een hoger gewicht wilt geven aan banners, dan kunt u hier het\\n	gewenste gewicht instellen. Deze optie staat standaard op 1.\\n";

$GLOBALS['phpAds_hlp_default_campaign_weight'] = "\\n	Indien u standaard een hoger gewicht wilt geven aan campagnes, dan kunt u hier het\\n	gewenste gewicht instellen. Deze optie staat standaard op 1.\\n";

$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "\\n	Als deze optie aan staat, wordt er extra informatie over elke campagne getoond op de\\n	<i>Campagne overzicht</i> pagina. De extra informatie bevat o.a. het overgebleven aantal\\n	AdViews en AdClicks, de activeringsdatum, de vervaldatum en de prioriteit\\n	instellingen.\\n";

$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "\\n	Als deze optie aan staat, wordt er extra informatie over elke banner getoond op de\\n	<i>Banner overzicht</i> pagina. De extra informatie bevat o.a. de doel URL, sleutelwoorden,\\n	grootte en gewicht.\\n";

$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "\\n	Als deze optie aan staat, wordt er een voorbeeld van alle banners getoond op de <i>Banner \\n	overzicht</i> pagina. Als deze optie niet aan staat is het nog steeds mogelijk een een voorbeeld\\n	van een banner te zien, door op de driehoek naast elke banner op de <i>Banner overzicht</i>\\n	pagina te klikken.\\n";

$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "\\n	Als deze optie aan staat wordt de HTML banner zelf getoond in plaats van de HTML code. Deze\\n	optie staat standaard uit, omdat de HTML code in sommige gevallen storend kan werken op de\\n	pagina van de administratie interface. Als deze optie uit staat dan is het nog steeds mogelijk\\n	om de werkelijke banner te zien, door te klikken op <i>Toon banner</i> knop naast de HTML\\n	code.\\n";

$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "\\n	Als deze optie aan staat wordt er een voorbeeld van de banner getoond aan de bovenkant van\\n	de <i>Banner eigenschappen</i>, <i>Leveringsopties</i> en <i>Gekoppelde zones</i> pagina's.\\n	Als deze optie uit staat is het nog steeds mogelijk om een voorbeeld te bekijken door te \\n	klikken op de <i>Toon banner</i> knop bovenaan de pagina.\\n";

$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "\\n	Als deze optie aan staat worden alle niet-actieve banners, campagnes en adverteerders verborgen\\n	op de <i>Adverteerders & campagnes</i> en <i>Campagne overzicht</i> pagina's. Als deze optie\\n	aan staat is het mogelijk om de verborgen items te tonen door te klikken op de <i>Toon alles</i>\\n	knop onderaan de pagina.\\n";


?>
