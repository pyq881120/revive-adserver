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
$GLOBALS['phpAds_hlp_my_footer'] = "
        כ�?ן �?תה צריך לרשו�? �?ת מסלול הקובץ המצביע �?ל הכותרת (לדוגמ�?: /home/login/www/header.htm)
       כדי שתוכל להציג כותרת ו/�?ו תחתית בכל עמוד של ממשק הניהול.
        ניתן להכיל טקסט �?ו קוד HTML בקבצי�? �?לה (כ�?שר �?תה משתמש ב-HTML הימנע משימוש בתגי�? כמו <body> �?ו <html>).
		";

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

$GLOBALS['phpAds_hlp_content_gzip_compression'] = "
	בהפעלת דחיסת תוכן מסוג	GZIP תופחת כמות הנתוני�? הנשלחת מהשרת �?ל הדפדפן בכל פע�? שעמוד המנהלה עולה.
כדי ל�?פשר ז�?ת, על השרת צריכה להיות מותקנת גירסת PHP 4.0.5 ומעלה, ע�? הרחבת GZIP מותקנת.
		";

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

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "
      �?�? �?תה רוצה להשתמש בפוליסת פרטיות מל�?ה, �?תה יכול לציין �?ת מיקומה.
		";

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
       בדרך כלל כל החשיפות מתועדות. �?�? �?ינך רוצה ב�?יסוף נתוני�? �?ודות החשיפות, כבה �?ופציה זו.	";

$GLOBALS['phpAds_hlp_block_adviews'] = "
		If a visitor reloads a page an AdView will be logged by ".MAX_PRODUCT_NAME." every time.
		This feature is used to make sure that only one AdView is logged for each unique
		banner for the number of seconds you specify. For example: if you set this value
		to 300 seconds, ".MAX_PRODUCT_NAME." will only log AdViews if the same banner isn�t already
		shown to the same visitor in the last 5 minutes. This feature only works the browser accepts cookies.
		";

$GLOBALS['phpAds_hlp_log_adclicks'] = "
    בדרך כלל כל ההקלקות מתועדות, �?�? �?ינך רוצה לצבור סטטיסטיקה �?ודות כמות ההקלקה על ב�?נרי�?, �?תה יכול לכבות �?ופציה זו.		";

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

$GLOBALS['phpAds_hlp_geotracking_stats'] = "
		�?�? �?תה משתמש במ�?גר גי�?וגרפי, �?תה יכול ג�? לשמור �?ת המידע גי�?וגרפי במ�?גר הנתוני�?. �?�? ת�?פשר �?ופציה זו, תוכל לר�?ות סטטיסטיקה �?ודות המקור ממנו מגיעי�? המבקרי�?, וכיצד של ב�?נר מתפקד במדינה מסוימת.
		�?ופציה זו תקפה רק �?�? �?תה משתמש בסטטיסטיקה טקסטו�?לית (מבו�?רת, verbose).
		";

$GLOBALS['phpAds_hlp_reverse_lookup'] = "
		ש�? השירות נקבע בדרך כלל דרך ש�? השרת, �?ך במקרי�? מסוימי�? �?פשרות זו כבויה. �?�? �?תה רוצה להכליל �?ת ש�? השירות בתוך הגבלות התפוצה ו/�?ו לשמור סטטיסטיקה �?ודות נתון זה, והשרת �?ינו מנפיק �?ת המידע, עליך לכבות �?ופציה זו. קביעת ש�? השירות גוזל זמן יקר; עובדה שת�?ט �?ת הנפקת הב�?נרי�?.
		";

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
$GLOBALS['phpAds_hlp_auto_clean_tables_interval'] = "
		If you enable this feature, the gathered statistics will be automatically deleted after the
		period you specify below this checkbox is passed. For example, if you set this to 5 weeks,
		statistics older than 5 weeks will be automatically deleted.
		";

$GLOBALS['phpAds_hlp_auto_clean_userlog'] =
$GLOBALS['phpAds_hlp_auto_clean_userlog_interval'] = "
		�?ופציה זו תמחק �?וטומטית רישו�? יומן משתמש שהו�? ישן יותר ממספר השבועות שקבעת כ�?ן.
		";

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

$GLOBALS['phpAds_hlp_ignore_hosts'] = "
      �?�? �?ינך רוצה למנות הקלקות וחשיפות מתוך מחשב מסוי�?, �?תה יכול להוסיף �?ותו למערך הזה. �?�? �?יפשרת תיעוד כתובת גולש (Reverse lookup) תוכל להוסיף ש�? מתח�? וכתובת IP,  �?חרת תוכל להשתמש רק בכתובת IP. ניתן להשתמש ג�? בתווי�? משלימי�? (wildcards כמו למשל '*.altavista.com' �?ו '192.168.*').
		";

$GLOBALS['phpAds_hlp_begin_of_week'] = "
      עבור רוב הגולשי�? השבוע מתחיל ביו�? שני, �?נחנו הישר�?לי�?/יהודי�? מתחילי�? ביו�? ר�?שון, וכ�?ן המקו�? לקבוע ז�?ת.	";

$GLOBALS['phpAds_hlp_percentage_decimals'] = "
        ציין כמה ספרות ל�?חר הנקודה להציג נתוני�? בעמודי הסטטיסטיקה.
		";

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

$GLOBALS['phpAds_hlp_type_web_mode'] = "
  �?�? �?תה רוצה להשתמש בב�?נרי�? המ�?וחסני�? על השרת, עליך לעצב �?ת הקביעה הזו. �?�? �?תה רוצה ל�?חסן �?ת הב�?נרי�? בתיקיה מקומית, קבע �?ופציה זו ל<i>תקייה מקומית</i>. �?�? �?תה רוצה ל�?חסן �?ת הב�?נר על שרת קבצי�? (FTP) חיצוני, קבע �?ופציה זו ל<i>שרת FTP חצוני</i>. בשרתי�? מסוימי�? �?פשר שתרצה להשתמש ב�?ופציית FTP �?פילו על השרת המקומי.
		";

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

$GLOBALS['phpAds_hlp_admin'] = "
       ש�? המשתמש של ה�?חר�?י (�?דמיניסטרטור). ב�?מצעות ש�? זה ניתן להתחבר לממשק המנהלה.";

$GLOBALS['phpAds_hlp_admin_pw'] =
$GLOBALS['phpAds_hlp_admin_pw2'] = "
        Please enter the password you want to use to log into the administrator interface.
		You need to enter it twice to prevent typing errors.
		";

$GLOBALS['phpAds_hlp_pwold'] =
$GLOBALS['phpAds_hlp_pw'] =
$GLOBALS['phpAds_hlp_pw2'] = "
       כדי לשנות �?ת הסיסמ�? של המנהל, עליך לספק �?ת הסיסמ�? הקיימת למעלה. בנוסף, תצטרך לרשו�? �?ת הסיסמ�? החדשה פעמיי�?, וז�?ת למניעת טעויות.";

$GLOBALS['phpAds_hlp_admin_fullname'] = "
        ציין �?ת הש�? המל�? של ה�?חר�?י/מנהל. בש�? זה ייעשה שימוש בשליחת סטטיסטיקה ב�?ימייל.	";

$GLOBALS['phpAds_hlp_admin_email'] = "
      כתובת ה�?ימייל של ה�?חר�?י/מנהל. זו הכתובת שתופיע בשדה (מ-)  בשליחת ה�?סטטיסטיקה ב�?ימייל.";

$GLOBALS['phpAds_hlp_admin_novice'] = "
      �?�? �?תה רוצה לקבל �?תר�?ה לפני מחיקת מפרס�?/י�?, קמפיין �?ו ב�?נרי�?, סמן �?ופציה זו.	";

$GLOBALS['phpAds_hlp_client_welcome'] = "
		If you turn this feature on a welcome message will be displayed on the first page an
		advertiser will see after loggin in. You can personalize this message by editing the
		welcome.html file location in the admin/templates directory. Things you might want to
		include are for example: Your company name, contact information, your company logo, a
		link a page with advertising rates, etc..
		";

$GLOBALS['phpAds_hlp_client_welcome_msg'] = "
		Instead of editing the welcome.html file you can also specify a small text here. If you enter
		a text here, the welcome.html file will be ignored. It is allowed to use html tags.
		";

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

$GLOBALS['phpAds_hlp_userlog_autoclean'] = "
		כדי להבטיח שבסיס הנתוני�? דולל נכונה, ניתן לשמור דיווח �?ודות מה �?ירע במהלך פעולה זו. מידע זה נשמ�? ביומן המשתמש.
		";

$GLOBALS['phpAds_hlp_default_banner_weight'] = "
		�?�? �?תה רוצה להשתמש במשקל ב�?נר התחלתי גבוה יותר, �?תה יכול לקבוע �?ת זה כ�?ן. ברירת המחדל הי�? 1.";

$GLOBALS['phpAds_hlp_default_campaign_weight'] = "
		�?�? �?תה רוצה להשתמש במשקל קמפיין התחלתי גבוה יותר, �?תה יכול לקבוע �?ת המשקל המבוקש כ�?ן. ברירת המחדל הי�? 1.	";

$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "
		�?�? �?ופציה זו מסומנת, מידע נוסף עבור כל קמפיין יוצג בעמוד <i>סקירת קמפיין</i> . מידע נוסף זה כולל �?ת מספר החשיפות הנותרות, ת�?ריך ההפעלה וקביעות הקדימויות.";

$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "
		�?�? �?ופציה זו פעילה, מידע נוסף �?ודות כל ב�?נר יוצג בעמוד <i>סקירת ב�?נרי�?</i> . מידע נוסף זה כולל �?ת עמוד המטרה (�?ליו יילקח הגולש ל�?חר הקלה), מילות מפתח, גודל הב�?נר ומשקלו.";

$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "
	�?�? �?ופציה זו מופעלת יוצגו כל הב�?נרי�? בצורה ממשית בעמוד <i>סקירת ב�?נרי�?</i> . �?�? ה�?ופציה כבויה, עדיין יהיה �?פשר לצפות בכל ב�?נר על ידי לחיצה על המשולש הסמוך �?ליו בעמוד <i>סקירת ב�?נרי�?</i>.
		";

$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "
		�?�? �?ופציה זו פעילה יוצג ב�?נר HTML בצורה מצי�?ותית, וז�?ת במקו�? קוד HTML פשוט. �?ופציה זו כבויה כברירת מחדל כיוון שב�?נרי�? מסוג HTML עשויי�? להתנגש ע�? ממשק המשתמש. �?�? �?ופציה זו כבויה עדיין �?פשרי לצפות בב�?נר HTML ממשי ב�?מצעות לחיצה על כפתור <i>הצג ב�?נר</i> הסמוך לקוד ה-HTML.";

$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "
		�?�? �?ופציה זו פעילה יוצג הב�?ר בכותרת של  העמודי�? <i>תכונות הב�?נר</i>,
		<i>�?ופציות תפוצה</i> ו-<i>�?זורי�? מקושרי�?</i>. �?�? �?ופציה זו מבוטלת, עדיין ניתן לצפות בב�?נר ב�?מצעות לחיצה על כפתור <i>הצג ב�?נר</i> בכותרת העמודי�?.";

$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "
	�?�? �?ופציה זו פעילה כל הב�?נרי�? ש�?ינ�? פעילי�?, הקמפייני�? והמפרסמי�?, יוסתרו מהתצוגה בעמודי�? <i>מפרסמי�? ומערכות</i> ו-<i>סקירת קמפיין</i>. �?�? פונקציה זו פעילה, עדיין �?פשרי לצפות בפריטי�? המוסתרי�? ב�?מצעות הקלקה על כפתור <i>הצג הכל</i> שבתחתית העמודי�?	";

$GLOBALS['phpAds_hlp_gui_show_matching'] = "
		�?�? �?ופציה זו פעילה, הב�?נר התו�?�? ייר�?ה בעמוד <i>ב�?נרי�? מקושרי�?</i> , �?�?  <i>בחירת קמפיין</i> הי�? השיטה הנבחרת. זה מ�?פשר לר�?ות במדויק �?לו ב�?נרי�? מיועדי�? להנפקה �?�? הקמפייני�? מקושרי�?. �?פשר יהיה ג�? לצפות בתצוגה מקדמת של הב�?נרי�? התו�?מי�?.
		";

$GLOBALS['phpAds_hlp_gui_show_parents'] = "
		�?�? �?ופציה זו פעילה, הקמפייני�? הר�?שיי�? של הב�?נרי�? יוצגו בעמוד <i>ב�?נרי�? מקושרי�?</i>, �?�? <i>בחירת ב�?נר</i> הי�? השיטה הנבחרת. זה י�?פשר לר�?ות להיכן שייך כל ב�?נר לפני קישורו. זה �?ומר ג�? שהב�?נרי�? מקובצי�? בידי קמפיין-�?�? וכבר ל�? שמורי�? בסדר �?לפביתי.
		";
?>
