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
$GLOBALS['strChooseSection']			= "Opération de maintenance";
$GLOBALS['strAppendCodes']              = "Codes ajoutés";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>La maintenance planifiée n'a pas été lancée au cours de la dernière heure. Cela pourrait signifier que vous ne l'avez pas paramétrée correctement.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>La maintenance planifiée fonctionne correctement.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>La maintenance automatique fonctionne correctement.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Cependant, la maintenance automatique est toujours activée. Pour de meilleures performances, vous devriez <a href='account-settings-maintenance.php'>désactiver la maintenance automatique</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Recalculer les priorités";
$GLOBALS['strHighPriorityCampaigns']		= "Campagnes avec une priorité haute";
$GLOBALS['strAdViewsAssigned']			= "Nbre d'affichages assignés";
$GLOBALS['strLowPriorityCampaigns']		= "Campagnes avec une priorité basse";
$GLOBALS['strPredictedAdViews']			= "Nbre d'affichages prévus";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "Les prévisions sont basées sur les données de cette semaine et de la semaine passée. ";
$GLOBALS['strPriorityBasedLastDays']		= "Les prévisions sont basées sur les données des derniers jours. ";
$GLOBALS['strPriorityBasedYesterday']		= "Les prévisions sont basées sur les données d'hier. ";
$GLOBALS['strPriorityNoData']			= "Il n'y a pas suffisament de statistiques disponibles afin d'effectuer des prévisions réalistes concernant le nombre d'affichages que ce serveur de publicités va effectuer aujourd'hui. L'assignement des objectifs ne sera basé que sur des statistiques en temps réel. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Il devrait y avoir suffisament d'affichages aujourd'hui pour satisfaire complètement les objectifs de toutes les campagnes haute priorité. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Il n'est pas certains qu'il y aura assez d'affichages aujourd'hui pour satisfaire les objectifs de toutes les campagnes haute priorité. C'est pourquoi toutes les campagnes basse priorité sont temporairement désactivées. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Vérifier le cache des bannières";
$GLOBALS['strRebuildBannerCache']		= "Reconstuire le cache des bannières";
$GLOBALS['strBannerCacheErrorsFound'] = "La vérification du cache des bannières en base de données a trouvé quelques erreurs. Ces bannières ne fonctionneront pas tant que vous ne les aurez pas corrigées à la main.";
$GLOBALS['strBannerCacheOK'] = "Aucune erreur n'a été détectée. Votre cache de bannières en base de données est à jour";
$GLOBALS['strBannerCacheDifferencesFound'] = "La vérification du cache des bannières en base de données a trouvé que votre cache n'est pas à jour et nécessite une reconstruction. Cliquez ici pour mettre à jour automatiquement votre cache.";
$GLOBALS['strBannerCacheFixed'] = "La reconstruction du cache des bannières en base de données a été terminée avec succès. Votre cache en base de données est maintenant à jour.";
$GLOBALS['strBannerCacheRebuildButton'] = "Reconstruire";
$GLOBALS['strRebuildDeliveryCache']			= "Reconstruire le cache des bannières en base de données";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Cache de distribution";
$GLOBALS['strAge']				= "Âge";
$GLOBALS['strDeliveryCacheSharedMem']		= "
 La mémoire partagée est actuellement utilisée pour le stockage du cache de distribution.
";
$GLOBALS['strDeliveryCacheDatabase']		= "
 La base de données est actuellement utilisée pour le stockage du cache de distribution.
";
$GLOBALS['strDeliveryCacheFiles']		= "
 Le cache de distribution est actuellement stocké dans plusieurs fichiers sur votre serveur.
";


// Storage
$GLOBALS['strStorage']				= "Stockage";
$GLOBALS['strMoveToDirectory']			= "Déplacer les images stockées dans la base de données vers un répertoire";
$GLOBALS['strStorageExplaination']		= "
 Les images utilisées par les bannières locales sont stockées dans la base de données ou dans un répertoire. Si vous stockez les images dans
 un répertoire, la charge de la base de données sera réduite et cela provoquera une accélération.
";

// Encoding
$GLOBALS['strEncoding']                 = "Encodage";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Convertir depuis cet encodage :";
$GLOBALS['strEncodingConvert']          = "Convertir";
$GLOBALS['strEncodingConvertTest']      = "Tester la conversion";
$GLOBALS['strConvertThese']             = "Les données suivantes seront changées si vous continuez";


// Storage
$GLOBALS['strStatisticsExplaination']		= "
 Vous avez activé les <i>statistiques compactes</i>, mais vos anciennes statistiques sont toujours en format complet.
 Voulez-vous convertir vos statistiques complètes au nouveau format compact ?
";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Recherche de mises à jour. Veuillez patienter…";
$GLOBALS['strAvailableUpdates']			= "Mise à jour disponibles";
$GLOBALS['strDownloadZip']			= "Télécharger (.zip)";
$GLOBALS['strDownloadGZip']			= "Télécharger (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "Pour une raison inconnue, il est impossible de récupérer <br>les informations concernant de possibles mises à jour. Veuillez réessayer plus tard.";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";

$GLOBALS['strCheckForUpdatesDisabled'] = "<b>La recherche de mises à jour est désactivée. Â Veuillez l'activerÂ via l'écran <a href='account-settings-update.php'>paramètres de mise à jour</a>.</b>";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "
 Si vous voulez savoir si une nouvelle version est disponible, veuillez visiter notre site web.
";

$GLOBALS['strClickToVisitWebsite']		= "Cliquez ici pour visiter notre site web";
$GLOBALS['strCurrentlyUsing'] 			= "Vous utilisez actuellement";
$GLOBALS['strRunningOn']				= "exécuté sur";
$GLOBALS['strAndPlain']					= "et";


// Stats conversion
$GLOBALS['strConverting']			= "Conversion";
$GLOBALS['strConvertingStats']			= "Conversion des statistiques...";
$GLOBALS['strConvertStats']			= "Convertir les statistiques";
$GLOBALS['strConvertAdViews']			= "affichages convertis,";
$GLOBALS['strConvertAdClicks']			= "clics convertis...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "Rien à convertir...";
$GLOBALS['strConvertFinished']			= "Fini...";

$GLOBALS['strConvertExplaination']		= "
	Vous utilisez actuellement le format compact pour stocker vos statistiques, mais il<br>
	y a encore quelques statistiques au format détaillé. Aussi longtemps que les statistiques<br>
	seront en format détaillé, le format compact ne sera pas utilisé pour voir ces pages.<br><br>
	Avant de convertir les statistiques, faite une sauvegarde de la base de données !!<br>
	Souhaitez vous convertir vos statistiques détaillées avec le nouveau format compact ? <br>
";

$GLOBALS['strConvertingExplaination']		= "
	Toutes les statistiques détaillées restante sont en train d'être converties au format<br>
	compact. Selon le nombre d'affichages stockés au format détaillé, cela peut prendre<br>
	quelques minutes. Merci d'attendre jusqu'à ce que la conversion soit fini, avant de<br>
	visiter d'autres pages. Ci-dessous vous trouverez un journal des modifications faites<br>
	à la base de données.<br>
";

$GLOBALS['strConvertFinishedExplaination']  	= "
	La conversion des statistiques du format détaillé vers le format compact est réussie, et les données<br>
	devrait pouvoir être utilisables à nouveau. Ci-dessous vous trouverez un journal des <br>
	modifications faites à la base de données.
";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "La maintenance automatique est désactivée.";
$GLOBALS['strAutoMaintenanceEnabled']  = "La maintenance automatique est activée. Pour de meilleures performances il est recommandé de <a href='settings-admin.php'>désactiver la maintenance automatique</a>.";
$GLOBALS['strScheduledMaintenance']         = "La maintenance planifiée semble fonctionner correctement.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "La maintenance planifiée n'a pas été lancée au cours de la dernière heure. Cela pourrait signifier que vous ne l'avez pas paramétrée correctement.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "La maintenance automatique est activée et déclenchera la maintenance à chaque heure.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Delivery Limitations";
$GLOBALS['strAllBannerChannelCompiled'] = "Toutes les valeurs de limitations compilées de bannières/canaux ont été recompilées";
$GLOBALS['strBannerChannelResult']      = "Voici les résultats de la validation des limitations compilées de bannières/canaux";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Toutes les limitations compilées de canaux sont valides";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Toutes les limitations compilées de bannières sont valides";
$GLOBALS['strErrorsFound']              = "Erreurs trouvées";
$GLOBALS['strRepairCompiledLimitations']        = "Quelques inconsistances ont été trouvées ci-dessus, vous pouvez les réparer en utilisant le bouton ci-dessous, ceci recompilera les limitations compilées pour chaque bannière/canal du système<br />";
$GLOBALS['strRecompile']                = "Recompiler";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "Dans certaines circonstances, le moteur de distribution peut entrer en conflit avec les limitations stockées pour les bannières et les canaux, utilisez le lien suivant pour valider les limitations dans la base de données";
$GLOBALS['strCheckACLs'] = "Vérifier les limitations";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "Dans certaines circonstances, le moteur de distribution peut entrer en conflit avec les codes ajoutés stockés pour les suiveurs, utilisez le lien suivant pour valider les codes ajoutés dans la base de données";
$GLOBALS['strCheckAppendCodes']         = "Vérifier les codes ajoutés";
$GLOBALS['strAppendCodesRecompiled']    = "Toutes les valeurs de codes ajoutés compilées ont été recompilées.";
$GLOBALS['strAppendCodesResult']        = "Voici les résultats de la validation des codes ajoutés compilés";
$GLOBALS['strAppendCodesValid']         = "Tous les codes ajoutés compilés des suiveurs sont valides";
$GLOBALS['strRepairAppenedCodes']       = "Quelques inconsistances ont été trouvées ci-dessus, vous pouvez les réparer en utilisant le bouton ci-dessous, ceci recompilera les codes ajoutés pour chaque suiveur du système";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "Pas de problèmes trouvés";

$GLOBALS['strMenus']                    = "Menus";
$GLOBALS['strMenusPrecis']              = "Reconstruire le cache du menu";
$GLOBALS['strMenusCachedOk']            = "Le cache du menu a été reconstruit";
$GLOBALS['strMenusCachedErr']           = "Erreurs durant la reconstruction du cache de menu";

?>
