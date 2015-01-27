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
$GLOBALS['strChooseSection']			= "Escolher seção";
$GLOBALS['strAppendCodes']              = "Anexar códigos";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>A manutenção agendada não foi executada na última hora. Isto pode significar que a configuração não foi feita de forma correta</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>A manutenção agendada esta sendo executada corretamente</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>A Manutenção automática esta sendo executada corretamente</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Porém, a manutenção automática ainda esta habilitada. Para o melhor funcionamento, você deve <a href='account-settings-maintenance.php'>desabilitar ela</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Recalcular prioridade";
$GLOBALS['strHighPriorityCampaigns']		= "High priority campaigns";
$GLOBALS['strAdViewsAssigned']			= "AdViews assigned";
$GLOBALS['strLowPriorityCampaigns']		= "Low priority campaigns";
$GLOBALS['strPredictedAdViews']			= "Predicted AdViews";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "The prediction is based on data from this week and last week. ";
$GLOBALS['strPriorityBasedLastDays']		= "The prediction is based on data from the last couple of days. ";
$GLOBALS['strPriorityBasedYesterday']		= "The prediction is based on data from yesterday. ";
$GLOBALS['strPriorityNoData']			= "There isn't enough data available to make a reliable prediction about the number of impressions this adserver will generate today. Priority assignments will be based on real time statistics only. ";
$GLOBALS['strPriorityEnoughAdViews']		= "There should be enough AdViews to fully satisfy the target all high priority campaigns. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "It isn't clear wether there will be enough AdViews served today to satisfy the target all high priority campaigns. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Verificar cache de banners ";
$GLOBALS['strRebuildBannerCache']		= "Rebuild banner cache";
$GLOBALS['strBannerCacheErrorsFound'] = "A verificação de cache da base de dados encontrou erros. Estes banners não funcionarão até que sejam corrigidos manualmente.";
$GLOBALS['strBannerCacheOK'] = "Nenhum erro detectado. Seu cache de banners esta atualizado";
$GLOBALS['strBannerCacheDifferencesFound'] = "A verificação do cache de banners detectou que seu cache não esta atualizado e necessita ser regenerado. Clique aqui para atualizar seu cache automaticamente.";
$GLOBALS['strBannerCacheFixed'] = "A re-geração do cache em banco de dados foi concluída com sucesso. Seu cache esta atualizado.";
$GLOBALS['strBannerCacheRebuildButton'] = "Gerar novamente";
$GLOBALS['strRebuildDeliveryCache']			= "Regenerar base de cache de banners";
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
$GLOBALS['strAge']				= "Idade";
$GLOBALS['strDeliveryCacheSharedMem']		= "Memória compartilhada esta sendo usada para cache atualmente.";
$GLOBALS['strDeliveryCacheDatabase']		= "A base de dados esta atualmente sendo usada como cache";
$GLOBALS['strDeliveryCacheFiles']		= "O cache de entrega esta atualmente sendo armazenado em arquivos múltiplos de seu servidor";


// Storage
$GLOBALS['strStorage']				= "Armazenamento";
$GLOBALS['strMoveToDirectory']			= "Mover imagens armazenadas dentro da base de dados em um diretório";
$GLOBALS['strStorageExplaination']		= "As imagens usadas por banners locais estão armazenadas na base de dados ou em um diretório local. Se você armazena-las dentro de um diretório a carga sobre a base de dados será menor e haverá uma melhora na velocidade.";

// Encoding
$GLOBALS['strEncoding']                 = "Codificação";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Converter desta codificação:";
$GLOBALS['strEncodingConvert']          = "Converter";
$GLOBALS['strEncodingConvertTest']      = "Testar conversão";
$GLOBALS['strConvertThese']             = "Os seguintes dados serão alterados caso você siga em frente";


// Storage
$GLOBALS['strStatisticsExplaination']		= "Você habilitou as <i>estatísticas compactas</i>, mas suas estatísticas antigas estão em formato extenso. Você deseja converter estas estatísticas para o novo formato compacto?";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Procurando atualizações. Por favor aguarde ...";
$GLOBALS['strAvailableUpdates']			= "Atualizações disponíveis";
$GLOBALS['strDownloadZip']			= "Fazer Download (.zip)";
$GLOBALS['strDownloadGZip']			= "Fazer Download (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "Devido a um motivo desconhecido é impossível resgatar <br /> informações sobre possíveis atualizações. Tente novamente mais tarde.";

$GLOBALS['strNoNewVersionAvailable']		= "
	Your version of ".MAX_PRODUCT_NAME." is up-to-date. There are currently no updates available.
";

$GLOBALS['strServerCommunicationError'] = "
    <b>Communication with the update server timed out, so ".MAX_PRODUCT_NAME." is not
    able to check if a newer version is available at this stage. Please try again later.</b>";

$GLOBALS['strCheckForUpdatesDisabled'] = "
    <b>Check for updates is disabled. Please enable via the
    <a href='account-settings-update.php'>update settings</a> screen.</b>
";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n	Se deseja saber se uma nova versão esta disponível, visite nosso site.\\n";

$GLOBALS['strClickToVisitWebsite']		= "Clique aqui para visitar nosso site";
$GLOBALS['strCurrentlyUsing'] 			= "Você esta atualmente usando";
$GLOBALS['strRunningOn']				= "rodando em um";
$GLOBALS['strAndPlain']					= "e";


// Stats conversion
$GLOBALS['strConverting']			= "Converting";
$GLOBALS['strConvertingStats']			= "Converting statistics...";
$GLOBALS['strConvertStats']			= "Convert statistics";
$GLOBALS['strConvertAdViews']			= "AdViews converted,";
$GLOBALS['strConvertAdClicks']			= "AdClicks converted...";
$GLOBALS['strConvertAdConversions']			= "AdConversions converted...";
$GLOBALS['strConvertNothing']			= "Nothing to convert...";
$GLOBALS['strConvertFinished']			= "Finished...";

$GLOBALS['strConvertExplaination']		= "
	You are currently using the compact format to store your statistics, but there are <br />
	still some statistics in verbose format. As long as the verbose statistics aren't  <br />
	converted to compact format they will not be used while viewing these pages.  <br />
	Before converting your statistics, make a backup of the database!  <br />
	Do you want to convert your verbose statistics to the new compact format? <br />
";

$GLOBALS['strConvertingExplaination']		= "
	All remaining verbose statistics are now being converted to the compact format. <br />
	Depending on how many impressions are stored in verbose format this may take a  <br />
	couple of minutes. Please wait until the conversion is finished before you visit other <br />
	pages. Below you will see a log of all modification made to the database. <br />
";

$GLOBALS['strConvertFinishedExplaination']  	= "
	The conversion of the remaining verbose statistics was succesful and the data <br />
	should now be usable again. Below you will see a log of all modification made <br />
	to the database.<br />
";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "A manutenção automática esta desabilitada.";
$GLOBALS['strAutoMaintenanceEnabled']  = "A manutenção automática esta habilitada. Para o melhor funcionamento, é recomendado que você <a href='account-settings-maintenance.php'>desabilite ela</a>.";
$GLOBALS['strScheduledMaintenance']         = "A manutenção agendada aparenta estar sendo executada corretamente.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "A manutenção agendada não foi executada na última hora. Isto pode significar que ela nõ foi corretamente configurada.";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered']  = "Automatic maintenance is enabled, but it has not been triggered. Note that automatic maintenance is triggered only when Openads delivers banners.";
$GLOBALS['strAutoMaintenanceBestPerformance']      = "For best performance it is advised to set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "A manutenção agendada esta habilitada e irá disparar a manutenção a cada hora.";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strDeliveryLimitations']      = "Limitações de entrega";
$GLOBALS['strAllBannerChannelCompiled'] = "Todos valores de limiteções de banners/canais foram re-compilados";
$GLOBALS['strBannerChannelResult']      = "Este são os resultados da validação da compilação de limites de banners/canais";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Todos limites compilados para os canais são válidos";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Todos limites compilados para os banners são válidos";
$GLOBALS['strErrorsFound']              = "Erros foram encontrados";
$GLOBALS['strRepairCompiledLimitations']        = "Inconsistências foram encontradas acima, você pode corrigir estas usando o botão abaixo, isso irá recompilar as limitações de todos os banners/canais do sistema<br />";
$GLOBALS['strRecompile']                = "Re-compilar";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "Em algumas situações o núcleo de entrega pode discordar com o ACL armazenado, use o link a seguir para validar os ACLsna base de dados";
$GLOBALS['strCheckACLs'] = "Verificar ACLs (Camadas de controle de acesso)";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "Em algumas situações o núcleo de entrega pode discordar com o código de rastreamento armazenado, use o link a seguir para validar os códigos na base de dados";
$GLOBALS['strCheckAppendCodes']         = "Verificar códigos anexados";
$GLOBALS['strAppendCodesRecompiled']    = "Todos códigos anexados foram re-compilados";
$GLOBALS['strAppendCodesResult']        = "Estes são os resultados da validação da compilação de códigos anexados";
$GLOBALS['strAppendCodesValid']         = "Todos códigos compilados para os rastreadores são válidos";
$GLOBALS['strRepairAppenedCodes']       = "Algumas inconsistências foram encontradas acima, você pode reparar estas utilizando botão abaixo, isso irá recompilar todos os códigos de todos rastreadores no sistema";

$GLOBALS['strPlugins']                  = "Plugins";
$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";
$GLOBALS['strPluginsOk']                = "No problems found";

$GLOBALS['strMenus']                    = "Menus";
$GLOBALS['strMenusPrecis']              = "Rebuild the menu cache";
$GLOBALS['strMenusCachedOk']            = "Menu cache has been rebuilt";
$GLOBALS['strMenusCachedErr']           = "Errors while rebuilding Menu cache";

?>
