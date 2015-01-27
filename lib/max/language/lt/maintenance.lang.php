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
$GLOBALS['strChooseSection']			= "Pasirinkti dalį";

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
$GLOBALS['strRecalculatePriority']		= "Perskaičiuoti pirmenybę";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Patikrinti banerių atsargas";
$GLOBALS['strBannerCacheErrorsFound'] = "Banerių duomenų bazė rado tam tikrų klaidų. Šie baneriai neveiks tol, kol jų rankiniu būdu nesutvarkysite.";
$GLOBALS['strBannerCacheOK'] = "Jokių klaidų nerasta. Jūsų banerių duomenų bazė atnaujinta ";
$GLOBALS['strBannerCacheFixed'] = "Duomenų bazės banerių atminties pertvarkymas buvo įvykdytas sėkmingai. Jūsų duomenų bazės atmitis šiuo atnaujinta. ";
$GLOBALS['strBannerCacheRebuildButton'] = "Atstatyti";
$GLOBALS['strRebuildDeliveryCache']			= "Atstatyti banerių duomenų bazės sandėlius";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Pristatymo sandėlys";
$GLOBALS['strAge']				= "Amžius";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n	 Pasidalinta atmintis yra naudojama pristatymo sandėliui.\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n	 Duomenų bazė naudojama pristatymo sandėlio duomenims išsaugoti.\\n";
$GLOBALS['strDeliveryCacheFiles']		= "\\n	 Pristatymo sandėlio atsargų kiekis yra išsaugotas per kelis failus Jūsų serveryje.\\n";


// Storage
$GLOBALS['strStorage']				= "Saugojimas";
$GLOBALS['strMoveToDirectory']			= "Išsaugotus vaizdus perkelti į katalogą";
$GLOBALS['strStorageExplaination']		= "\\n	 Vaizdai, kuriuos naudoja vietiniai baneriaiyra išsaugoti kataloge. Jei išsaugosite vaizdus viduje\\n	a katalogo tai tuomet padidės siuntimo į bazę greitis, tačiau sumažės vietos pačioje bazėje.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Užkoduota";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Konvertuoti iš šio užkodavimo:";
$GLOBALS['strEncodingConvert']          = "Versti";
$GLOBALS['strEncodingConvertTest']      = "Perkeitimo testas";
$GLOBALS['strConvertThese']             = "Šie duomenys bus pakeisti jei nuspręsite tęsti";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	Jūs įgalinote <i>kompatišką statistiką</i>,bet Jūsų senoji statistika vis dar yra daugiakalbiame formate.\\n	Ar norite konvertuoti daugiakalbę statistiką į naują kompaktišką formatą?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Ieškoma atnaujinimų. Prašome palaukti...";
$GLOBALS['strAvailableUpdates']			= "Galimi atnaujinimai";
$GLOBALS['strDownloadZip']			= "Parsisiųsti(.zip)";
$GLOBALS['strDownloadGZip']			= "Parsisiųsti (.zip)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "Dėl nežinomų priežasčių neįmanoma atkurti <br>informacijos apie galimus atnaujinimus. Prašome vėliau pabandyti iš naujo.";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	jei norite sužinoti ar yra galima naujesnė versija, prašome užsukti į mūasų internetinį puslapį.\\n";

$GLOBALS['strClickToVisitWebsite']		= "Spauskite čia jei norite užsukti į mūsų internetinį puslapį";
$GLOBALS['strCurrentlyUsing'] 			= "Šiuo metu Jūs naudojate";
$GLOBALS['strRunningOn']				= "paleista per";
$GLOBALS['strAndPlain']					= "Ir";


// Stats conversion




//  Maintenace
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Atsiuntimo apribojimai";


//  Append codes

$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";


?>
