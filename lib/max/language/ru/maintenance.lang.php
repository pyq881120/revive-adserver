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
$GLOBALS['strChooseSection']			= "Выберите раздел";
$GLOBALS['strAppendCodes']              = "Добавить коды";

// Maintenance
$GLOBALS['strScheduledMaintenanceHasntRun']	   = "<b>Запланированное обслуживание не запускалось в последний час. Возможно, обслуживание не настроено или настроено некорректно.</b>";

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

$GLOBALS['strScheduledMantenaceRunning']  		= "<b>Запланированное обслуживание работает корректно.</b>";

$GLOBALS['strAutomaticMaintenanceHasRun']  		= "<b>Автоматическое обслуживание работает корректно.</b>";

$GLOBALS['strAutoMantenaceEnabled']		= "Автоматическое обслуживание было включено. для лучшей производительности рекомендуется настроить <a href='account-settings-maintenance.php'>запланированное обслуживание</a>.";


// Priority
$GLOBALS['strRecalculatePriority']		= "Пересчитать приоритеты";
$GLOBALS['strHighPriorityCampaigns']		= "Кампании с высоким приоритетом";
$GLOBALS['strAdViewsAssigned']			= "Выделено просмотров";
$GLOBALS['strLowPriorityCampaigns']		= "Кампании с низким приоритетом";
$GLOBALS['strPredictedAdViews']			= "Предсказано просмотров";
$GLOBALS['strPriorityDaysRunning']		= "There are currently {days} days worth of statistics available from where ".MAX_PRODUCT_NAME." can base its daily prediction on. ";
$GLOBALS['strPriorityBasedLastWeek']		= "Предсказания основаны на данных по этой и прошлой неделе. ";
$GLOBALS['strPriorityBasedYesterday']		= "Предсказание основано на данных за вчера. ";
$GLOBALS['strPriorityNoData']			= "Недостаточно данных для надёжного предсказания количества показов, которые данный сервер сгенерирует сегодня. Назначение проритетов будет основываться на статистике, собираемой в реальном времени. ";
$GLOBALS['strPriorityEnoughAdViews']		= "Должно быть достаточно показов для удовлетворения требований всех высокоприоритетных кампаний. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "Неочевидно, будет ли сегодня сгенерировано достаточно показов для удовлетворения требований всех высокопроритетных кампаний. ";


// Banner cache
$GLOBALS['strCheckBannerCache']		= "Проверить кэш баннеров";
$GLOBALS['strRebuildBannerCache']		= "Построить кэш баннеров заново";
$GLOBALS['strBannerCacheErrorsFound'] = "В процессе проверки кэша баннеров были обнаружены ошибки. До ручного исправления этих ошибок баннеры показываться не будут.";
$GLOBALS['strBannerCacheOK'] = "В процессе проверки кэша баннеров ошибок не обнаружено.";
$GLOBALS['strBannerCacheDifferencesFound'] = "В процессе проверки кэша баннеров обнаружено устаревание кэша. Нажмите на ссылку для автоматического обновления кэша.";
$GLOBALS['strBannerCacheFixed'] = "Автоматическое обновление кеша произведено успешно. Кеш баннеров работает нормально.";
$GLOBALS['strBannerCacheRebuildButton'] = "Обновить";
$GLOBALS['strRebuildDeliveryCache']			= "Обновить кэш баннеров";
$GLOBALS['strBannerCacheExplaination']		= "
    The database banner cache is used to speed up delivery of banners during delivery<br />
    This cache needs to be updated when:
    <ul>
        <li>You upgrade your version of ".MAX_PRODUCT_NAME."</li>
        <li>You move your ".MAX_PRODUCT_NAME." installation to a different server</li>
    </ul>
";

// Cache
$GLOBALS['strCache']			= "Кэш доставки";
$GLOBALS['strAge']				= "Срок";
$GLOBALS['strDeliveryCacheSharedMem']		= "\\n        Для хранения кэша доставки используется разделяема\\ память.\\n";
$GLOBALS['strDeliveryCacheDatabase']		= "\\n        Для хранения кэша доставки используется база данных.\\n";
$GLOBALS['strDeliveryCacheFiles']		= "\\n        Для хранения кэша доставки используются файлы на сервере.\\n";


// Storage
$GLOBALS['strStorage']				= "Хранение";
$GLOBALS['strMoveToDirectory']			= "Переместить картинки из БД в каталог";
$GLOBALS['strStorageExplaination']		= "\\n	Картинки, используемые локальными баннерами, хранятся в базе данных или в каталоге. Если вы будете хранить картинки \\n	в каталоге на диске, нагрузка на базу данных уменьшится, и это приведёт к ускорению.\\n";

// Encoding
$GLOBALS['strEncoding']                 = "Кодировка";
$GLOBALS['strEncodingExplaination']     = "" . MAX_PRODUCT_NAME ." now stores all data in the database in UTF-8 format.<br />
    Where possible, your data will have been automatically converted to this encoding.<br />
    If after upgrading you find corrupt characters, and you know the encoding used, you may use this tool to convert the data from that format to UTF-8";
$GLOBALS['strEncodingConvertFrom']      = "Исходная кодировка:";
$GLOBALS['strEncodingConvert']          = "Преобразовать";
$GLOBALS['strEncodingConvertTest']      = "Тестировать преобразование";
$GLOBALS['strConvertThese']             = "Если вы продолжите, следующие данные будут изменены";


// Storage
$GLOBALS['strStatisticsExplaination']		= "Вы включили режим <i>компактной статистики</i>, но ваши старые данные остаются в подробном формате. Хотите ли вы конвертировать ваши данные в компактный формат?";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "Производится поиск обновлений. Пожалуйста, подождите...";
$GLOBALS['strAvailableUpdates']			= "Доступные обновления";
$GLOBALS['strDownloadZip']			= "Скачать (.zip)";
$GLOBALS['strDownloadGZip']			= "Скачать (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nDo you want to get more information \\nabout this update?";
$GLOBALS['strUpdateAlertSecurity']		= "A new version of ".MAX_PRODUCT_NAME." is available.                 \\n\\nIt is highly recommended to upgrade \\nas soon as possible, because this \\nversion contains one or more security fixes.";

$GLOBALS['strUpdateServerDown']			= "\\n    По неизвестной причине невозможно получить информацию <br />\\n	о возможных обновлениях. Пожалуйста, попытайтесь позднее.\\n";

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

$GLOBALS['strForUpdatesLookOnWebsite']	= "\\n        Если вы хотите узнать, нет ли более новой версии, посетите наш веб-сайт.\\n";

$GLOBALS['strClickToVisitWebsite']		= "\\n        Щёлкните здесь, чтобы посетить наш веб-сайт\\n";
$GLOBALS['strCurrentlyUsing'] 			= "В настоящее время вы используете";
$GLOBALS['strRunningOn']				= "запущенную на";
$GLOBALS['strAndPlain']					= "и";


// Stats conversion
$GLOBALS['strConverting']			= "Преобразование";
$GLOBALS['strConvertingStats']			= "Преобразовываем статистики...";
$GLOBALS['strConvertStats']			= "Преобразовать статистику";
$GLOBALS['strConvertAdViews']			= "Показы преобразованы,";
$GLOBALS['strConvertAdClicks']			= "Клики преобразованы...";
$GLOBALS['strConvertNothing']			= "Нечего преобразовывать...";
$GLOBALS['strConvertFinished']			= "Закончено...";

$GLOBALS['strConvertExplaination']		= "\\n	Вы сейчас используете компактный формат хранения вашей статистики, но у вас всё еще есть <br />\\n	некоторые данные в расширенном формате. До тех пор пока расширенная статистика не будет  <br />\\n	преобразована в компактный формат, она не будет использоваться при просмотре этих страниц.  <br />\\n	Перед преобразованием статистики, сделайте резервную копию базы данных!  <br />\\n	Вы хотите преобразовать вашу расширенную статистику в новый компактный формат? <br />\\n";

$GLOBALS['strConvertingExplaination']		= "\\n	Вся оставшаяся расширенная статистика сейчас преобразуется в компактный формат. <br />\\n	В зависимости от того, сколько показов сохранено в расширенном формате, это может занять  <br />\\n	несколько минут. Пожалуйста, подождите окончания преобразования, прежде чем вы перейдёте на другие <br />\\n	страницыpages. Ниже вы увидите журнал всех изменений, произвёденных в базе данных. <br />\\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\\n	Преобразование остававшейся расширенной статистики было успешным и все данные <br />\\n	должны быть теперь доступны. Ниже вы можете увидеть журнал всех изменений, <br />\\n	произведённых в базе данных.<br />\\n";

//  Maintenace
$GLOBALS['strAutoMaintenanceDisabled'] = "Автоматическое обслуживание было отключено.";
$GLOBALS['strScheduledMaintenance']         = "Запланированное обслуживание работает корректно.";
$GLOBALS['strScheduledMaintenanceNotRun']   = "Запланированное обслуживание не запускалось в течение последнего часа. Возможно, оно настроено некорректно.";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger']  = "Автоматическое обслуживание включено и будет запускаться каждый час";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "Automatic maintenance is disabled too but a maintenance task has recently run. To make sure that ".MAX_PRODUCT_NAME." works correctly you should either
 set up <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a> or <a href='settings-admin.php'>enable auto maintenance</a>. ";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "Also, automatic maintenance is disabled, so when ".MAX_PRODUCT_NAME." delivers banners, maintenance is not triggered.
 If you do not plan to run <a href='http://docs.openads.org/openads-2.3-guide/maintenance.html' target='_blank'>scheduled maintenance</a>,
 you must <a href='settings-admin.php'>enable auto maintenance</a> to ensure that ".MAX_PRODUCT_NAME." works correctly.";

//  Deliver Limitations
$GLOBALS['strAllBannerChannelCompiled'] = "Все ограничения каналов и баннеров были пересчитаны";
$GLOBALS['strBannerChannelResult']      = "Ниже приведены результаты проверки ограничений баннеров и каналов";
$GLOBALS['strChannelCompiledLimitationsValid']  = "Все ограничения канала корректны";
$GLOBALS['strBannerCompiledLimitationsValid']   = "Все ограничения баннера корректны";
$GLOBALS['strErrorsFound']              = "Найдены ошибки";
$GLOBALS['strRepairCompiledLimitations']        = "Были найдены несоответствия, которые вы можете исправить нажав кнопку ниже.<br />";
$GLOBALS['strRecompile']                = "Пересчитать";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "При некоторых обстоятельствах механизм доставки может некорректно работать с правами доступа к баннерам и каналам, используйте следующие ссылки для проверки прав доступа в БД.";
$GLOBALS['strCheckACLs'] = "Проверить права доступа";


//  Append codes
$GLOBALS['strAppendCodesDesc']          = "При некоторых обстоятельствах механизм доставки может некорректно добавлять коды трекеров, используйте следующие ссылки для проверки кодов в БД.";
$GLOBALS['strCheckAppendCodes']         = "Проверить коды";
$GLOBALS['strAppendCodesRecompiled']    = "Все коды были пересчитаны";
$GLOBALS['strAppendCodesResult']        = "Результаты пересчета кодов";
$GLOBALS['strAppendCodesValid']         = "Все коды корректны";
$GLOBALS['strRepairAppenedCodes']       = "Были найдены некоторые несовпадения. для их коррекции нажмите пожалуйста кнопку ниже.";

$GLOBALS['strPluginsPrecis']            = "Diagnose and repair problems with " . PRODUCT_NAME . " plugins";


?>
