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
$GLOBALS['phpAds_hlp_my_footer'] = "\\n        Damit Kopf- bzw. Fußzeilen im Admin-Bereich eingeblendet werden können, müssen dies\\n         als HTML-Datei vorhanden sein. Eingegeben werden muß die Adresse dieser Dateien  (z.B.: /home/login/www/header.htm). <br />\\nIn den HTML-Dateien ist der entsprechende Text für die Kopf- oder Fußzeile zu hinterlegen. Es können auch HTML-Tags verwendet werden. Wird HTML verwendet, sind Tags wie <i><body>, <html> </i>usw. nicht zugelassen. <br />\\n		";

$GLOBALS['phpAds_hlp_my_logo'] = "\\n        Geben Sie hier den Dateinamen Ihres Logos an. Dieses wird dann anstatt des Standard-Logos angezeigt. Sie müssen die Logo-Datei zuerst in das Verzeichnis admin/images hochladen, bevor Sie den Dateinamen hier angeben können.\\n               ";

$GLOBALS['phpAds_hlp_gui_header_foreground_color'] = "\\n        Geben Sie hier Ihre Wunschfarbe ein, in der die Navigationsreiter, das Suchfeld und gefetteter Text erscheinen sollen.\\n               ";

$GLOBALS['phpAds_hlp_gui_header_background_color'] = "\\n        Geben Sie hier Ihre Wunschfarbe für die Hintergrundfarbe der Kopfzeile ein.\\n               ";

$GLOBALS['phpAds_hlp_gui_header_active_tab_color'] = "\\n        Geben Sie hier Ihre Wunschfarbe für den aktiven Navigationsreiter ein.\\n               ";

$GLOBALS['phpAds_hlp_gui_header_text_color'] = "\\n        Geben Sie hier Ihre Wunschfarbe für den Text in der Kopfzeile an.\\n               ";

$GLOBALS['phpAds_hlp_content_gzip_compression'] = "Durch das Aktivieren der GZIP Inhaltskomprimierung wird die Datenmenge, die zum Browser beim Anzeigen einer Administrationsseite übertragen wird, erheblich verringert. Sie müssen die PHP Erweiterung 'GZIP' installieren um diese Zusatzfunktion nutzen zu können.";

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

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "\\n        Wenn Sie eine vollständige Datenschutzerklärung nutzen, können Sie hier deren den Standort eingeben.\\n		";

$GLOBALS['phpAds_hlp_compact_stats'] = "
        Traditionally ".MAX_PRODUCT_NAME." used rather extensive logging, which was very
        detailed but was also very demanding on the database server. This could
        be a big problem on sites with a lot of visitors. To overcome this problem
		".MAX_PRODUCT_NAME." also supports a new kind of statistics, the compact statistics,
		which is less demanding on the database server, but also less detailed.
		The compact statistics collects AdViews, AdClicks, and AdConversions for each hour, if you need
		more detail you can turn the compact statistics off.
		";

$GLOBALS['phpAds_hlp_log_adviews'] = "\\n	Normalerweise werden alle AdViews aufgezeichnet und fließen in die Statistiken ein. Diese Option kann deaktiviert werden.\\n		";

$GLOBALS['phpAds_hlp_block_adviews'] = "
		If a visitor reloads a page an AdView will be logged by ".MAX_PRODUCT_NAME." every time.
		This feature is used to make sure that only one AdView is logged for each unique
		banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdViews if the same banner isn�t already
		shown to the same visitor in the last 5 minutes. This feature only works the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_log_adclicks'] = "\\n	Normalerweise werden alle AdClicks aufgezeichnet und fließen in die Statistiken ein. Diese Option kann deaktiviert werden.\\n		";

$GLOBALS['phpAds_hlp_block_adclicks'] = "
		If a visitor clicks multiple times on a banner an AdClick will be logged by ".MAX_PRODUCT_NAME."
		every time. This feature is used to make sure that only one AdClick is logged for each
		unique banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdClicks if the visitor didn�t click on the same
		banner in the last 5 minutes. This feature only works when the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_log_adconversions'] = "\\n        Normalerweise werden Ad-Konversionen protokolliert. Wenn Sie diese Funktion nicht benötigen, können Sie diese hier abschalten.\\n		";

$GLOBALS['phpAds_hlp_block_adconversions'] = "
		If a visitor reloads a page with an AdConversion beacon, ".MAX_PRODUCT_NAME." will log the AdConversion
		every time. This feature is used to make sure that only one AdConversion is logged for each
		unique conversion for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdConversions if the visitor didn�t load the same
		page with the AdConversion beacon in the last 5 minutes. This feature only works when the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_geotracking_stats'] = "\\n		Geotargeting ist die Standortbestimmung des Besuchers. Wenn Sie eine Datenbank für\\n		Geotargeting einsetzen, werden als geographische Informationen gespeichert: <br /><br />\\nDas Herkunftsland des Besuchers und die Entwicklung der Banner nach Ländern. Die Option Geotargeting kann nur in Verbindung mit detaillierten Statistiken aktiviert werden.\\n		";


$GLOBALS['phpAds_hlp_proxy_lookup'] = "
		Some visitors are using a proxy server to access the internet. In that case ".MAX_PRODUCT_NAME." will
		log the IP address or the hostname of the proxy server instead of the user. If you enable
		this feature ".MAX_PRODUCT_NAME." will try to find the IP address or hostname of the visitor's computer
		behind the proxy server. If it is not possible to find the exact address of the visitor
		it will use the address of the proxy server instead. This option is not enabled by default,
		because it will slow the delivery of banners down considerably.
		";


$GLOBALS['phpAds_hlp_auto_clean_tables'] =
$GLOBALS['phpAds_hlp_auto_clean_tables_interval'] = "\\n		Die aufgezeichneten Daten und erstellten Statistiken können nach einer bestimmten Zeit gelöscht werden. An dieser Stelle kann in Wochen eingegeben werden, nach welchem Zeitraum die Daten gelöscht werden sollen. Mindestens sind 3 Wochen einzugeben.\\n		";

$GLOBALS['phpAds_hlp_auto_clean_userlog'] =
$GLOBALS['phpAds_hlp_auto_clean_userlog_interval'] = "\\n		Durch diese Funktion können alle Einträge im Benutzerprotokoll nach einer bestimmten Zeit gelöscht werden. An dieser Stelle kann in Wochen eingegeben werden, nach welchem Zeitraum die aufgezeichneten Benutzerdaten gelöscht werden sollen. Mindestens sind 3 Wochen einzugeben\\n		";

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

$GLOBALS['phpAds_hlp_ignore_hosts'] = "\\n	Sollen AdViews und AdClicks von bestimmten Host nicht aufgezeichnet werden, können diese hier aufgelistet werden. Wurde eingestellt, daß der Hostname ermittelt wird, können Domain-Name oder IP-Adresse eingegeben werden. Wurde diese Option deaktiviert, ist nur die Eingabe der IP-Adresse möglich. Platzhalter/Wildcards sind zugelassen (z.B. '*.altavista.com' or '192.168.*')\\n		";

$GLOBALS['phpAds_hlp_begin_of_week'] = "\\n	Der Tag des Wochenbeginns kann eingestellt werden. Voreinstellung ist Montag.\\n		";

$GLOBALS['phpAds_hlp_percentage_decimals'] = "\\n	Die Anzahl der Nachkommastellen für die Darstellung von Prozentangaben innerhalb der Statistiken.\\n		";

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

$GLOBALS['phpAds_hlp_type_web_mode'] = "\\nWenn Banner auf dem Web-Server gespeichert werden sollen, müssen die Einstellungen hierfür konfiguriert werden. Sollen die Banner auf einem lokalen Verzeichnis gespeichert werden, muß  <i>Lokales Verzeichnis</i> gewählt werden. Für die Speicherung auf einem FTP-Server ist <i> Externer FTP-Server</i> einzustellen. Es ist durchaus möglich, daß der eigene Web-Server nicht lokal, sondern als FTP-Server eingerichtet wird.\\n		";

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

$GLOBALS['phpAds_hlp_admin'] = "\\n	Bitte geben Sie den Benutzername des Administrators ein. Mit diesem Benutzername ist der Zugang zum Administrationsmodul möglich\\n		";

$GLOBALS['phpAds_hlp_admin_pw'] =
$GLOBALS['phpAds_hlp_admin_pw2'] = "\\n	Bitte geben Sie ein Passwort für den Administrator ein. Die Passworteingabe muß durch erneute Eingabe bestätigt werden.\\n		";

$GLOBALS['phpAds_hlp_pwold'] =
$GLOBALS['phpAds_hlp_pw'] =
$GLOBALS['phpAds_hlp_pw2'] = "\\n	Um das Passwort des Administrators zu ändern, muß zunächst das alte Passwort eingegeben werden. Das neue Passwort ist zweimal einzugeben.\\n		";

$GLOBALS['phpAds_hlp_admin_fullname'] = "\\n	Eingabe des vollen Namen (Name, Vorname) des Administrators. Die Angaben werden für E-Mails benötigt.\\n		";

$GLOBALS['phpAds_hlp_admin_email'] = "\\n        Geben Sie hier die E-Mail-Adresse des Administrators an. Diese Adresse wird als Absender für die Statstik-E-Mals an die Werbetreibenden genutzt.";

$GLOBALS['phpAds_hlp_admin_novice'] = "Setzen Sie diese Option wenn Sie eine Warnung erhalten möchten bevor Sie Werbetreibende, Kampagnen, Banner, Webseiten oder Zonen löschen.";

$GLOBALS['phpAds_hlp_client_welcome'] = "\\n		Wenn diese Option gesetzt wird, erscheint eine Begrüßungszeile auf der ersten Inserentenseite. Dieser Begrüßungstext, der in der Datei welcome.html gespeichert ist, kann personalisiert oder ergänzt werden. Möglich wären Firmenlogo, Kontaktinformationen, Links zu Angeboten ...\\n		";

$GLOBALS['phpAds_hlp_client_welcome_msg'] = "\\n		Der Begrüßungstext für Inserenten kann hier eingegeben werden. HTML-Tags sind zugelassen.\\n		Ist hier ein Text eingegeben, wird die Datei welcome.html ignoriert.\\n		";

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

$GLOBALS['phpAds_hlp_userlog_inventory'] = "\\n		Wenn Sie sichergehen wollen, daß die stündliche Inventarkalkulation korrekt abläuft,\\n		können Sie einen Bericht darüber anlegen lassen. Dieser Bericht enthält die Vorhersagen über die Werbemittelprofile und die Dringlicghkeitsdstufe für jedes Werbemittel. Diese Informationen sind mützlich, wenn Sie den Entwicklern einen Bugreport bezüglich der Inventarkalkulation senden möchten. Der Bereicht wird vom System als Teil des Benutzerprotokolls gespeichert.\\n		";

$GLOBALS['phpAds_hlp_userlog_autoclean'] = "\\n		Um überprüfen zu können, ob die Datenbank fehlerfrei gesäubert wurde, kann ein Bericht über den Datenbanklauf erstellt werden. Er wird in das Benutzerprotokoll eingetragen.\\n		";

$GLOBALS['phpAds_hlp_default_banner_weight'] = "\\n		Die Gewichtung für Banner ist als Voreinstellung <i>1</i>. Die Voreinstellung kann an dieser Stelle höher gesetzt werden.\\n		";

$GLOBALS['phpAds_hlp_default_campaign_weight'] = "\\n		Die Gewichtung für Kampagnen ist als Voreinstellung <i>1</i>. Die Voreinstellung kann an dieser Stelle höher gesetzt werden.\\n		";

$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "Wenn diese Option aktiviert ist werden Zusatzinformationen über jede Kampagne auf der Seite <i>Kampagnen</i> angezeigt. Diese Zusatzinformationen beinhalten die verbleibenden Impressionen, Klicks und Konversionen, sowie Aktivierungsdatum, Auslaufdatum und die Prioritätseinstellungen.";

$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "Wenn diese Option aktiviert ist werden Zusatzinformationen über jeden Banner auf der Seite <i>Banner</i> angezeigt. Diese Zusatzinformationen beinhalten die Ziel-URL, Schlüsselwörter, Größe und Gewichtung.";

$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "Wenn diese Option aktiviert ist wird eine Vorschau jedes Banners auf der Seite <i>Banner</i> angezeigt. Selbst wenn diese Option nicht ausgewählt ist haben Sie auf der Seite <i>Banner</i> die Möglichkeit durch einen Klick auf das Dreieck neben dem Banner sich eine Vorschau anzeigen zu lassen.";

$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "\\n		Wenn diese Option aktiviert ist, wird der aktuelle HTML-Banner anstelle des HTML-Codes angezeigt. Diese Funktion ist in der Voreinstellung deaktiviert; denn auf diesem Wege angezeigte HTML-Banner können Konflikte produzieren. Jeder HTML-Banner kann in der <i>Übersicht Banner</i> durch anklicken von <i>Banner anzeigen</i> dargestellt werden.\\n		";

$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "\\n		Wenn diese Option aktiviert ist, erfolgt eine Vorschau auf den Seiten <i>Bannermerkmale</i>, <i> Auslieferungsoptionen</i> und <i> Verknüpfte Zonen</i>.<br />\\nIst diese Option deaktiviert, ist die Bannerdarstellung möglich, wenn auf <i>Banner anzeigen</i> geklickt wird.\\n		";

$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "Wenn diese Option aktiviert ist werden alle inaktiven Banner, Kampagnen und Werbetreibenden auf den Seiten <i>Werbetreibende & Kampagnen</i> versteckt. Selbst wenn diese Option ausgewählt ist können Sie durch einen Klick auf <i>Alle zeigen</i> am unteren Ende der Seite die verstecken Einträge sichtbar machen.";

$GLOBALS['phpAds_hlp_gui_show_matching'] = "\\n	Wenn diese Option aktiviert ist, werden alle gefundene Banner auf der Seite <i>Verknüpfte Banner</i> dargestellt, wenn als Methode <i>Kampagne (Auswahl)</i> gewählt wurde. Hier durch wird genau dargestellt, welche Banner zur Auslieferung vorgesehen sind. Auch eine Vorschau der zugehörenden Banner ist möglich.\\n		";

$GLOBALS['phpAds_hlp_gui_show_parents'] = "\\n		Wenn diese Option aktiviert ist, werden die zugehörenden Kampagnen der Banner auf der Seite <i>Verknüpfte Banner</i> angezeigt, wenn als Methode <i>Banner (Auswahl)</i> gewählt wurde. Hierdurch wird es - vor der Verknüpfung - möglich, anzuzeigen, welcher Banner den jeweiligen Kampagnen zugeordnet ist. Die Banner sind in der Sortierung der Kampagnen eingeordnet und werden nicht alphabetisch angezeigt.\\n		";
?>
