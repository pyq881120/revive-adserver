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
$GLOBALS['strChooseSection']			= "Elija la sección";
$GLOBALS['strAppendCodes']              = "Agregar códigos";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>El mantenimiento programado no se ha ejecutado en la pasada hora. Esto puede significar que no lo haya configurado correctamente.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>El mantenimiento programado se está ejecutando correctamente.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>El mantenimiento automático se está ejecutando correctamente.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "El mantenimiento automático contínua habilitado. Para un mejor rendimiento, deberia <a href='account-settings-maintenance.php'>deshabilitar el mantenimiento automático</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Recalcular prioridad";
$GLOBALS['strHighPriorityCampaigns']		= "Campañas de Alta Prioridad";
$GLOBALS['strAdViewsAssigned']			= "Impresiones Asignadas";
$GLOBALS['strLowPriorityCampaigns']		= "Campañas de Baja Prioridad";
$GLOBALS['strPredictedAdViews']			= "Impresiones Predecidas";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "La predicción está basada en datos de esta semana y la anterior. ";
$GLOBALS['strPriorityBasedLastDays']		= "La predicción está basada en datos de los últimos días. ";
$GLOBALS['strPriorityBasedYesterday']		= "La predicción está basada en datos de ayer. ";
$GLOBALS['strPriorityNoData']			= "No hay datos suficientes para realizar una predicción certera sobre el número de impresiones que se generarán hoy. Las predicciones están basadas en estadísticas de tiempo real SOLAMENTE.";
$GLOBALS['strPriorityEnoughAdViews']		= "Debe haber Impresiones suficientes para satisfacer el objetivo de todas las campañas de alta prioridad. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "No está claro cuantas Impresiones habrán hoy para satisfacer el objetivo de todas las campañas de alta prioridad. Por este motivo todas las campañas de baja prioridad serán temporalmente deshabilitadas. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Comprobar cache de banners";
$GLOBALS['strRebuildBannerCache']		= "Reconstruir banner cache";
$GLOBALS['strBannerCacheErrorsFound'] = "El test de la cache de base de datos de banners ha encontrado algunos errores. Estos banners no funcionarán hasta que los arregle manualmente.";
$GLOBALS['strBannerCacheOK'] = "No se han detectado errores. Su cache de base de datos de banners está actualizada";
$GLOBALS['strBannerCacheDifferencesFound'] = "La revision de la cache de banners de la base de datos  ha encontrado que la cache no está actualizada y requiere reconstruirse. Haga clic aquí para actualizar la cache automáticamente.";
$GLOBALS['strBannerCacheFixed'] = "La reconstrucción de la cache de base de datos banners se ha efectuado satisfactoriamente. Su cache de base de datos está actualizada.";
$GLOBALS['strBannerCacheRebuildButton'] = "Reconstruir";
$GLOBALS['strRebuildDeliveryCache']			= "Reconstruir la base de datos de banner";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Cache de entrega";
$GLOBALS['strAge']				= "Edad";
$GLOBALS['strDeliveryCacheSharedMem']		= "La memoria compartida está siendo usada para guardar la cache de entrega.";
$GLOBALS['strDeliveryCacheDatabase']		= "La base de datos está siendo usada para guardar la cache de entrega.";
$GLOBALS['strDeliveryCacheFiles']		= "La cache de entrega está siendo guardada en archivos múltiples en su servidor.";


// Storage
$GLOBALS['strStorage']				= "Almacenamiento";
$GLOBALS['strMoveToDirectory']			= "Mover imágenes almacenadas en la base de datos a un directorio";
$GLOBALS['strStorageExplaination']		= "Las imágenes usadas por banners locales están almacenadas en la base de datos o bien en un directorio. Si almacena las imagenes en un directorio la carga en la base de datos se verá reducida y esto provocará que aumente su velocidad.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Codificación";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Convertir desde esta codificación";
$GLOBALS['strEncodingConvert']          = "Convertir";
$GLOBALS['strEncodingConvertTest']      = "Probar conversión";
$GLOBALS['strConvertThese']             = "Los siguientes datos serán cambiados si continúa";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\\n	Has activado las <i>estadísticas compactas</i>, pero las estadísticas antiguas todavía están en formato extendido.\\n	¿Quieres convertir las estadísticas en formato extendido al nuevo formato compacto?\\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Buscando Actualizaciones. Por favor espere...";
$GLOBALS['strAvailableUpdates']			= "Hay actualizaciones disponibles";
$GLOBALS['strDownloadZip']			= "Descargar (.zip)";
$GLOBALS['strDownloadGZip']			= "Descargar (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "Debido a razones desconocidas es imposible obtener<br />información sobre posibles actualizaciones. Por favor, inténtelo mas tarde.\\n";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";

$GLOBALS['strCheckForUpdatesDisabled'] = "<b>Comprobar actualizaciones está deshabilitado. Por favor habilite esa opción en la pantalla <a href='account-settings-update.php'>actualizar opciones</a>.</b>";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "Si quiere saber si hay una nueva versión disponible, por favor, consulte en nuestra página web.";

$GLOBALS['strClickToVisitWebsite']		= "Haga clic aquí para visitar nuestra página web";
$GLOBALS['strCurrentlyUsing'] 			= "Actualmente está usando";
$GLOBALS['strRunningOn']				= "funcionando bajo";
$GLOBALS['strAndPlain']					= "y";


// Stats conversion
$GLOBALS['strConverting']			= "Convirtiendo";
$GLOBALS['strConvertingStats']			= "Convirtiendo estadísticas...";
$GLOBALS['strConvertStats']			= "Estadísticas convertidas";
$GLOBALS['strConvertAdViews']			= "Impresiones convertidas,";
$GLOBALS['strConvertAdClicks']			= "Clicks convertidos...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "No hay nada que convertir...";
$GLOBALS['strConvertFinished']			= "Finalizado...";

$GLOBALS['strConvertExplaination']		= "\\n	Ud. actualmente está usando el formato compacto para almacenar sus estadísticas, pero aún hay<br />\\n	algunas estadísticas en formato extendido. Hasta que no sean convertidas al formato compacto <br />\\n	no podrán verse en estas páginas. <br />\\n	Antes de convertir sus estadísticas, haga un backup de su base de datos! <br />\\n	Desea convertir sus estadísticas extendidas al nuevo formato compacto? <br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	Todas las estadísticas expandidas están siendo convertidas al formato compacto. <br />\\n	Dependiendo de la cantidad de Impresiones hayan almacenadas en formato extendido tardará <br />\\n	algunos minutos. Por favor espere mientras la conversión finaliza antes de visitar otra <br />\\n	página. A continuación verá todas las modificaciones realizadas a la base de datos. <br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	La conversión de las estadísticas extendidas restantes ha termindado. <br />\\n	A continuación verá todas las modificaciones realizadas al a base de datos. <br />\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "El mantenimiento automático está deshabilitado";
$GLOBALS['strAutoMaintenanceEnabled']  = "El mantenimineto automático está habilitado. Para un mejor rendimiento se aconseja <a href='settings-admin.php'>deshabilitar el mantenimiento automático</a>.";
$GLOBALS['strScheduledMaintenance']         = "El mantenimiento programado parece estar ejecutándose correctamente.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "El mantenimiento programado no se ha ejecutado en la pasada hora. Esto puede significar que no lo haya configurado correctamente.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "El mantenimiento automático está habilitado y se ejecutará mantenimiento cada hora.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Delivery Limitations";
$GLOBALS['strAllBannerChannelCompiled'] = "Todos los valores compilados de limitaciones de banners/canales han sido recompilados";
$GLOBALS['strBannerChannelResult']      = "Aqui están los resultados de la validación de las limitaciones compiladas de banners/canales";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Todas las limitaciones de canales compiladas son válidas";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Todas las limitaciones de banners compiladas son válidas";
$GLOBALS['strErrorsFound']              = "Errores encontrados";
$GLOBALS['strRepairCompiledLimitations']        = "Se encontraron algunas incosistencias anteriormente, puede repararlas usando el botón de abajo, este recompilará las limitaciones compiladas para cada banner/canal en el sistema<br />";
$GLOBALS['strRecompile']                = "Recompilar";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "Bajo algunas circustancias el motor de entrega puede discrepar con algunas de las ACLs para los banners y cananles, use el siguiente enlace para validar las ACLs de la base de datos";
$GLOBALS['strCheckACLs'] = "Revisar ACLs";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "Bajo algunas circustancias el motor de entrega puede discrepar con algunos de los códigos agregados para los trackers, use el siguiente enlace para validar los códigos agregados a la base de datos ";
$GLOBALS['strCheckAppendCodes']         = "Chequear códigos agregados";
$GLOBALS['strAppendCodesRecompiled']    = "Todos los valores de los códigos compilados agregados han sido recompilados";
$GLOBALS['strAppendCodesResult']        = "Aquí están los resultados de la validación de códigos agregados";
$GLOBALS['strAppendCodesValid']         = "Todos los trackers de los códigos agregados compilados son válidos";
$GLOBALS['strRepairAppenedCodes']       = "Se encontraron algunas inconsistencias arriba, puede repararlas usando el botón de abajo, esto recompilará los códigos agregados para cada tracker en el sistema";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "No problems found";

$GLOBALS['strMenus']                    = "Menus";
$GLOBALS['strMenusPrecis']              = "Rebuild the menu cache";
$GLOBALS['strMenusCachedOk']            = "Menu cache has been rebuilt";
$GLOBALS['strMenusCachedErr']           = "Errors while rebuilding Menu cache";

?>
