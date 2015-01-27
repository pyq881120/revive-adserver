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

// Installer translation strings
$GLOBALS['strInstall']                      = "Установка";
$GLOBALS['strChooseInstallLanguage']        = "Выберите язык для процедуры установки";
$GLOBALS['strLanguageSelection']            = "Выбор Языка";
$GLOBALS['strDatabaseSettings']             = "Настройки базы данных";
$GLOBALS['strAdminSettings']                = "Настройки администратора";
$GLOBALS['strAdminAccount']                 = "Учетная запись администратора";
$GLOBALS['strAdvancedSettings']             = "Расширенные Настройки";
$GLOBALS['strOtherSettings']                = "Другие Настройки";
$GLOBALS['strSpecifySyncSettings']          = "Настройки синхронизации";
$GLOBALS['strWarning']                      = "Предупреждение";
$GLOBALS['strFatalError']                   = "Произошла фатальная ошибка";
$GLOBALS['strBtnContinue']                  = "Продолжить »";
$GLOBALS['strBtnRecover']                   = "Исправить »";
$GLOBALS['strBtnStartAgain']                   = "Запустить обновление снова »";
$GLOBALS['strBtnGoBack']                    = "« Вернуться назад";
$GLOBALS['strBtnAgree']                     = "Я согласен »";
$GLOBALS['strBtnDontAgree']                 = "« Я не согласен";
$GLOBALS['strBtnRetry']                     = "Повторить";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "Не удалось связаться с базой данной, перепроверьте указанные вами параметры";
$GLOBALS['strCreateTableTestFailed']        = "Указанный вами пользователь не имеет прав создавать или изменять структуру базы данных, пожалуйста, свяжитесь с администратором БД.";
$GLOBALS['strUpdateTableTestFailed']        = "Указанный вами пользователь не имеет прав на изменение структуры базы данных, пожалуйста, свяжитесь с администратором БД.";
$GLOBALS['strTablePrefixInvalid']           = "Приставка к имени таблицы содержит запрещенные символы";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Перед тем как проолжить, пожалуйта, исправьте эти возможные проблемы:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Игнорировать предупреждения";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "Конфигурационная переменная PHP register_globals должна быть включена (on).";
$GLOBALS['strWarningRegisterArgcArv']       = "Переменная конфигурации PHP register_argc_argv должна иметь значение on для запуска утилиты обслуживания БД из командной строки";
$GLOBALS['strWarningMagicQuotesGPC']        = "Конфигурационная переменная PHP magic_quotes_gpc должна быть включена (on).";
$GLOBALS['strWarningMagicQuotesRuntime']    = "Конфигурационная переменная PHP magic_quotes_runtime должна быть включена (on).";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "Не представляется возможным обновить базу данных. Если вы решите продолжить, все существующие баннеры, статистика и данные о клиентах будут стерты.";
$GLOBALS['strTableNames']                   = "Имена таблиц";
$GLOBALS['strTablesPrefix']                 = "Префикс к именам таблиц";
$GLOBALS['strTablesType']                   = "Тип таблиц";


$GLOBALS['strRecoveryRequiredTitle']    = "Во время предыдущей попытки обновления произошла ошибка";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "предупреждение: файл UPGRADE по прежнему находится в папке var. Программа установки не в состоянии удалить его из-за недостатка прав доступа. Пожалуйста, удалите его самостоятельно.";
$GLOBALS['strRemoveUpgradeFile']               = "Вам необходимо удалить файл UPGRADE из папки var";
$GLOBALS['strInstallSuccess2'] ="
  <p><b>Serving your first ad campaign</b><br>
    Use our <a href='".PRODUCT_DOCSURL."/user/quickStartGuide' target='_blank'>quick start guide to start serving your first ad campaign</a>.
  </p>
</div>
<p><strong>Optional installation steps</strong></p>
<div class='psub'>
  <p><b>Lock your configuration files</b><br>
    This is a good extra security step to protect your ad server configuration settings from being altered.  <a href='".PRODUCT_DOCSURL."/admin/lockConfig' target='_blank'>Find out more</a>.
  </p>
  <p><b>Set up a regular maintenance task</b><br>
    A maintenance script is recommended to ensure timely reporting and the best possible ad delivery performance.  <a href='".PRODUCT_DOCSURL."/admin/maintenance' target='_blank'>Find out more</a>
  </p>
  <p><b>Review your system configuration settings</b><br>
    Before you start using ".MAX_PRODUCT_NAME." we suggest you review your settings within the 'Settings' tab.
  </p>
</div>";
$GLOBALS['strInstallNotSuccessful']         = "<b>The installation of ".MAX_PRODUCT_NAME." was not succesful</b><br /><br />Some portions of the install process could not be completed.
                                                It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the
                                                first step of the install process. If you want to know more on what the error message below means, and how to solve it,
                                                please consult the supplied documentation.";
$GLOBALS['strDbSuccessIntro']               = "The " . MAX_PRODUCT_NAME . " database has now been created. Please click the 'Continue' button to proceed with configuring " . MAX_PRODUCT_NAME . " Administrator and Delivery settings.";
$GLOBALS['strDbSuccessIntroUpgrade']        = "Ваша система была обновлена. Оставшиеся шаги помогут вам обновить конфигурационные файлы вашего сервера.";
$GLOBALS['strErrorOccured']                 = "Произошла следующая ошибка:";
$GLOBALS['strErrorInstallDatabase']         = "Структура базы данных не могла быть создана.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorInstallDbConnect']        = "Не получилось открыть соединение с базой данных.";

$GLOBALS['strErrorWritePermissions']        = "Прежде, чем вы сможете продолжить, необходимо исправить ошибки прав доступа к файлам.<br />Чтобы исправить ошибки в ОС Linux попробуйте выполнить следующие команды:";

$GLOBALS['strErrorWritePermissionsWin']     = "Прежде, чем вы сможете продолжить, необходимо исправить ошибки прав доступа к файлам.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL административного интерфейса";
$GLOBALS['strDeliveryUrlPrefix']            = "URL движка доставки баннеров";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL движка доставки баннеров (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "URL хранилища изображений";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL хранилища изображений (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Неверное имя пользователя или пароль";

$GLOBALS['strUpgrade']                      = "Обновить";
$GLOBALS['strSystemUpToDate']               = "Ваша система не требует обновления. <br>Щёлкните по <b>Дальше</b> для перехода на домашнюю страницу.";
$GLOBALS['strSystemNeedsUpgrade']           = "Сруктура базы данных и файл конфигурации должны быть обновлены для корректного функционирования системы. Щёлкните <b>Дальше</b>, чтобы запустить процесс обновления. <br>Будьте терпеливы? обновление может занять пару минут.";
$GLOBALS['strSystemUpgradeBusy']            = "Происходит обновление системы? пожалуйста? подождите...";
$GLOBALS['strServiceUnavalable']            = "Обслуживание временно недоступно. Происходит обновление системы";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Выберите раздел";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Невозможно сохранить изменения в файл конфигурации";
$GLOBALS['strUnableToWritePrefs']                    = "Невозможно сохранить настройки в БД";
$GLOBALS['strImageDirLockedDetected']	             = "Указанная<b>папка для изображений</b>недоступна для записи. <br>Необходимо изменить настройки доступа, или создать папку.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Настройка конфигурации";
$GLOBALS['strConfigurationSettings']                 = "Настройки конфигурации";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Настройки администратора";
$GLOBALS['strLoginCredentials']                      = "Данные для входа в систему";
$GLOBALS['strAdminUsername']                         = "Имя пользователя-администратора";
$GLOBALS['strAdminPassword']                         = "Пароль пользователя-администратора";
$GLOBALS['strInvalidUsername']                       = "Неверное имя пользователя";
$GLOBALS['strBasicInformation']                      = "Основная информация";
$GLOBALS['strAdminFullName']                         = "Полное имя администратора";
$GLOBALS['strAdminEmail']                            = "Адрес электронной почты администратора";
$GLOBALS['strAdministratorEmail']                    = "Адрес электронной почты администратора";
$GLOBALS['strCompanyName']                           = "Название компании";
$GLOBALS['strAdminCheckUpdates']                     = "Проверить обновления";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strUserlogEmail']                          = "Протоколировать все исходящие сообщения электронной почты";
$GLOBALS['strEnableDashboardSyncNotice']             = "Пожалуйста разрешите <a href='account-settings-update.php'>Проверить обновление</a> если вы хотите использовать панель инструментов.";
$GLOBALS['strTimezone']                              = "Часовой пояс";
$GLOBALS['strTimezoneEstimated']                     = "Выбранный часовой пояс";
$GLOBALS['strTimezoneGuessedValue']                  = "Часовой пояс сервера в PHP настроен некорректно";
$GLOBALS['strTimezoneSeeDocs']                       = "Подробнее об установке переменных в PHP читайте в %DOCS%";
$GLOBALS['strTimezoneDocumentation']                 = "документация";
$GLOBALS['strAdminSettingsTitle']                    = "Создать аккаунт администратора";
$GLOBALS['strAdminSettingsIntro']                    = "Заполните форму для создания административного аккаунта.";
$GLOBALS['strConfigSettingsIntro']                   = "Проверьте настройки конфигурации и внесите все необходимые изменения. Если вы не уверены, оставляйте значения по умолчанию.";

$GLOBALS['strEnableAutoMaintenance']	             = "Автоматически проводить обслуживание БД во время доставки баннеров, если обслуживание не настроено вручную";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Настройки базы данных";
$GLOBALS['strDatabaseServer']                        = "Сервер баз данных";
$GLOBALS['strDbLocal']                               = "Использовать соединение с локальным сокетом";
$GLOBALS['strDbType']                                = "Тип БД";
$GLOBALS['strDbHost']                                = "Имя хоста";
$GLOBALS['strDbSocket']                              = "Сокет БД";
$GLOBALS['strDbPort']                                = "Порт БД";
$GLOBALS['strDbUser']                                = "Имя пользователя";
$GLOBALS['strDbPassword']                            = "Пароль";
$GLOBALS['strDbName']                                = "Имя базы данных";
$GLOBALS['strDbNameHint']                            = "Если БД не существует, она будет создана автоматически";
$GLOBALS['strDatabaseOptimalisations']               = "Настройки оптимизации работы с БД";
$GLOBALS['strPersistentConnections']                 = "Использовать постоянные соединения";
$GLOBALS['strCantConnectToDb']                       = "Не могу связаться с базой данных";
$GLOBALS['strCantConnectToDbDelivery']               = 'Не удается подключиться к базе данных для доставки';
$GLOBALS['strDemoDataInstall']                       = "Инсталлировать демо-данные";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailAddresses']                        = "Email \"От\" адрес";
$GLOBALS['strEmailFromName']                         = "Email \"От\" Имя";
$GLOBALS['strEmailFromAddress']                      = "Email \"От\" Электронная почта";
$GLOBALS['strEmailFromCompany']                      = "Email \"От\" Компания";
$GLOBALS['strQmailPatch']                            = "патч для qmail";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Настройки аудита изменений";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Глобальные настройки отладочного журнала";
$GLOBALS['strProduction']                            = "Рабочий сервер";
$GLOBALS['strEnableDebug']                           = "Разрешить вести отладочный журнал";
$GLOBALS['strDebugMethodNames']                      = "Включать имена методов в отладочный журнал";
$GLOBALS['strDebugLineNumbers']                      = "Включать номера строк в отладочный журнал";
$GLOBALS['strDebugType']                             = "Тип отладочного журнала";
$GLOBALS['strDebugTypeFile']                         = "Файл";
$GLOBALS['strDebugTypeSql']                          = "БД";
$GLOBALS['strDebugName']                             = "Имя файла Журнала отладки, таблица БД или метка Syslog";
$GLOBALS['strDebugPriority']                         = "Уровень приоритета отладки";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Основная информация";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Информация по умолчанию";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Полная информация";
$GLOBALS['strDebugIdent']                            = "Строка идентификации отладки";
$GLOBALS['strDebugUsername']                         = "Имя пользователя для mCal или SQL сервера";
$GLOBALS['strDebugPassword']                         = "Пароль для mCal или SQL сервера";
$GLOBALS['strProductionSystem']                      = "Production сервер";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Настройки доставки";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Расположение веб-страниц";
$GLOBALS['strDeliveryPath']                          = "Расположение папки доставки";
$GLOBALS['strImagePath']                             = "Расположение папки изображений";
$GLOBALS['strDeliverySslPath']                       = "Расположение папки доставки (SSL)";
$GLOBALS['strImageSslPath']                          = "Расположение папки изображений (SSL)";
$GLOBALS['strImageStore']                            = "Папка изображений";
$GLOBALS['strTypeWebSettings']                       = "Конфигурация веб-баннеров";
$GLOBALS['strTypeWebMode']                           = "Метод хранения";
$GLOBALS['strTypeWebModeLocal']                      = "Локальный режим (хранятся в локальном каталоге)";
$GLOBALS['strTypeDirError']                          = "У веб-сервера нет прав на запись в локальную папку.";
$GLOBALS['strTypeWebModeFtp']                        = "FTP-режим (хранятся на внешнем FTP-сервере)";
$GLOBALS['strTypeWebDir']                            = "Локальный режим (хранятся в локальном каталоге)";
$GLOBALS['strTypeFTPHost']                           = "Имя FTP сервера";
$GLOBALS['strTypeFTPDirectory']                      = "Папка";
$GLOBALS['strTypeFTPUsername']                       = "Имя пользователя";
$GLOBALS['strTypeFTPPassword']                       = "Пароль";
$GLOBALS['strTypeFTPPassive']                        = "Использовать пассивный режим";
$GLOBALS['strTypeFTPErrorDir']                       = "Указанная папка недоступна";
$GLOBALS['strTypeFTPErrorConnect']                   = "Невозможно соединиться с сервером, неправильные имя пользователя или пароль";
$GLOBALS['strTypeFTPErrorUpload']                    = "Невозможно загрузить файл на FTP сервер, проверьте права доступа.";
$GLOBALS['strTypeFTPErrorHost']                      = "Неправильное имя сервера";
$GLOBALS['strDeliveryFilenames']                     = "Имена файлов глобальной доставки";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Клик по баннеру";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Переменные действия";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Содержание баннера";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Действие баннера";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Действие баннера (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Фрейм баннера";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Изображение баннера";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Баннер (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Слой баннера";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Журнал баннера";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Pop-Up баннера";
$GLOBALS['strDeliveryFilenamesAdView']               = "Просмотр баннера";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "Вызов XML-RPC";
$GLOBALS['strDeliveryFilenamesLocal']                = "Локальный вызов";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Фронт контроллер";
$GLOBALS['strDeliveryFilenamesFlash']                = "Flash-включение (может быть полным URL)";
$GLOBALS['strDeliveryCaching']                       = "Настройки кэширования доставки";
$GLOBALS['strDeliveryCacheLimit']                    = "Время между обновлениями кэша (сек.)";


$GLOBALS['strOrigin']                                = "Использовать удаленный сервер";
$GLOBALS['strOriginType']                            = "Тип удаленного сервера";
$GLOBALS['strOriginHost']                            = "Имя удаленного сервера";
$GLOBALS['strOriginPort']                            = "Номер порта БД";
$GLOBALS['strOriginScript']                          = "Файл скрипта БД";
$GLOBALS['strOriginTypeXMLRPC']                      = "XML-RPC";
$GLOBALS['strOriginTimeout']                         = "Таймаут (сек.)";
$GLOBALS['strOriginProtocol']                        = "Протокол";

$GLOBALS['strDeliveryAcls']                          = "Проверять ограничения в процессе доставки";
$GLOBALS['strDeliveryObfuscate']                     = "Скрывать каналы при показе баннеров";
$GLOBALS['strDeliveryExecPhp']                       = "Разрешить исполнение кода PHP (Предупреждение: эта опция небезопасна)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Разделитель для сторонних трекеров";
$GLOBALS['strGlobalDefaultBannerUrl']                = "Глобальное значение баннера по умолчанию URL";
$GLOBALS['strP3PSettings']                           = "Настройки P3P (политика обращения с частной информацией) ";
$GLOBALS['strUseP3P']                                = "Использовать P3P-политики";
$GLOBALS['strP3PCompactPolicy']                      = "Компактная политика P3P";
$GLOBALS['strP3PPolicyLocation']                     = "Место размещения P3P-политики";

// General Settings
$GLOBALS['uiEnabled']                                = "Интерфейс пользователя включен";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Настройки гео-таргетинга";
$GLOBALS['strGeotargeting']                          = "Настройки гео-таргетинга";
$GLOBALS['strGeotargetingType']                      = "Тип модуля гео-таргетинга";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "Путь к БД MaxMind GeoIP Country. Оставьте пустым для использования бесплатной версии.";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "Путь к БД MaxMind GeoIP Region";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "Путь к БД  MaxMind GeoIP City";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "Путь к БД MaxMind GeoIP Area";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "Путь к БД MaxMind GeoIP DMA";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "Путь к БД MaxMind GeoIP Organisation";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "Путь к БД MaxMind GeoIP ISP";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "Путь к БД MaxMind GeoIP Netspeed";
$GLOBALS['strGeoShowUnavailable']                    = "Показать настройки гео-таргетинга даже есть БД GeoIP недоступна";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "БД MaxMind GeoIP Country недоступна по указанному адресу";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "БД MaxMind GeoIP Region недоступна по указанному адресу";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "БД MaxMind GeoIP City недоступна по указанному адресу";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "БД MaxMind GeoIP Area недоступна по указанному адресу";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "БД MaxMind GeoIP DMA недоступна по указанному адресу";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "БД MaxMind GeoIP Database недоступна по указанному адресу";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "БД MaxMind GeoIP ISP недоступна по указанному адресу";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "БД MaxMind GeoIP Netspeed недоступна по указанному адресу";

// Interface Settings
$GLOBALS['strInventory']                             = "Администрирование";
$GLOBALS['strShowCampaignInfo']                      = "Показывать дополнительную информацию на странице <i>обзора кампании</i>";
$GLOBALS['strShowBannerInfo']                        = "Показывать дополнительную информацию на странице <i>обзора баннеров</i>";
$GLOBALS['strShowCampaignPreview']                   = "Показывать превью баннеров на странице <i>обзора баннеров</i>";
$GLOBALS['strShowBannerHTML']                        = "Показывать баннер вместо HTML-кода на странице обзора HTML баннеров";
$GLOBALS['strShowBannerPreview']                     = "Показывать превью баннера вверху страниц управления баннерами";
$GLOBALS['strHideInactive']                          = "Скрыть неактивные";
$GLOBALS['strGUIShowMatchingBanners']                = "Показывать баннеры на странице <i>Связанные баннеры</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Показывать кампании на странице <i>Связанные баннеры</i>";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "По умолчанию кампании анонимны";
$GLOBALS['strStatisticsDefaults']                    = "Статистика";
$GLOBALS['strBeginOfWeek']                           = "Начало недели";
$GLOBALS['strPercentageDecimals']                    = "Десятичные дроби";
$GLOBALS['strWeightDefaults']                        = "Вес по умолчанию";
$GLOBALS['strDefaultBannerWeight']                   = "Вес баннера по умолчанию";
$GLOBALS['strDefaultCampaignWeight']                 = "Вес кампании по умолчанию";
$GLOBALS['strDefaultBannerWErr']                     = "Вес баннера по умолчанию должен быть положительным целым числом";
$GLOBALS['strDefaultCampaignWErr']                   = "Вес кампании по умолчанию должен быть положительным целым числом";

$GLOBALS['strPublisherDefaults']                     = "Свойства вебсайта";
$GLOBALS['strModesOfPayment']                        = "Способ платежа";
$GLOBALS['strCurrencies']                            = "Валюты";
$GLOBALS['strCategories']                            = "Категории";
$GLOBALS['strHelpFiles']                             = "Файлы помощи";
$GLOBALS['strHasTaxID']                              = "Тип налога";
$GLOBALS['strDefaultApproved']                       = "Одобрено";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "Действие по умолчанию";
$GLOBALS['strDefaultConversionType']                 = "Действие по умолчанию";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Разрешенные типы вызова";
$GLOBALS['strInvocationDefaults']                    = "Настройки вызова по умолчанию";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Разрешить сторонние трекеры по умолчанию";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Настройки доставки баннеров";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Настройки журналирования";
$GLOBALS['strLogAdRequests']                         = "Регистрировать запрос каждый раз когда запрошен баннер";
$GLOBALS['strLogAdImpressions']                      = "Регистрировать просмотр каждый раз когда просмотрен баннер";
$GLOBALS['strLogAdClicks']                           = "Регистрировать клик каждый раз, когда пользователь кликает на баннере";
$GLOBALS['strLogTrackerImpressions']                 = "Регистрировать действие каждый раз когда пользователь загружает код действия";
$GLOBALS['strReverseLookup']                         = "Проверка обратного DNS";
$GLOBALS['strProxyLookup']                           = "Проверка прокси";
$GLOBALS['strPreventLogging']                        = "Глобальные настройки не-фиксируемых действий";
$GLOBALS['strIgnoreHosts']                           = "Игнорировать хосты";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Не</b> считать статистику для клиентов со следующими строками в user-agent (по одной на строку)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Считать только</b> статистику для клиентов со следующими строками в user-agent (по одной на строку)";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strConversionTracking']                    = "Настройки учета конверсии";
$GLOBALS['strEnableConversionTracking']              = "Разрешить учет конверсии";
$GLOBALS['strCsvImport']                             = "разрешить загрузку оффлайн-действий";
$GLOBALS['strBlockAdViews']                          = "Не засчитывать показ, если пользователь видит ту же пару баннер/зона в течение указанного времени (сек.)";
$GLOBALS['strBlockAdViewsError']                     = "Блок показа баннера должен быть положительным целым числом";
$GLOBALS['strBlockAdClicks']                         = "Не засчитывать клик, если пользователь кликает ту же пару баннер/зона в течение указанного времени (сек.)";
$GLOBALS['strBlockAdClicksError']                    = "Блок клика баннера должен быть положительным целым числом";
$GLOBALS['strMaintenanceOI']                         = "Интервал между операциями обслуживания (минут)";
$GLOBALS['strMaintenanceOIError']                    = "Введенный вами интервал некорректен - см. документацию";
$GLOBALS['strPrioritySettings']                      = "Глобальные настройки приоритетов";
$GLOBALS['strPriorityInstantUpdate']                 = "Обновлять приоритеты немедленно при внесении изменений";
$GLOBALS['strDefaultImpConWindow']                   = "Окно показа в секундах по умолчанию";
$GLOBALS['strDefaultImpConWindowError']              = "Окно показа должно быть положительным целым числом";
$GLOBALS['strDefaultCliConWindow']                   = "Окно клика в секундах по умолчанию";
$GLOBALS['strDefaultCliConWindowError']              = "Окно клика должно быть положительным целым числом";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Предупреждение о лимите";
$GLOBALS['strWarnLimitErr']                          = "Предупреждение о лимите должно быть положительным целым числом";
$GLOBALS['strWarnLimitDays']                         = "Отправлять сообщение если осталось дней меньше чем";
$GLOBALS['strWarnLimitDaysErr']                      = "Число дней должно быть положительным целым числом";
$GLOBALS['strAllowEmail']                            = "Разрешить отправку сообщений по e-mail";
$GLOBALS['strEmailAddressName']                      = "Имя для поля ОТ:";
$GLOBALS['strWarnAdmin']                             = "Отправлять сообщение администратору всякий раз когда кампания близка к завершению";
$GLOBALS['strWarnClient']                            = "Отправлять сообщение клиенту всякий раз когда кампания близка к завершению";
$GLOBALS['strWarnAgency']                            = "Отправлять сообщение агентству всякий раз когда кампания близка к завершению";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Настройка интерфейса пользователя";
$GLOBALS['strGeneralSettings']                       = "Общие настройки";
$GLOBALS['strAppName']                               = "Имя приложения";
$GLOBALS['strMyHeader']                              = "Мой заголовок";
$GLOBALS['strMyHeaderError']                         = "Указанный файл заголовка недоступен";
$GLOBALS['strMyFooter']                              = "Мой подвал";
$GLOBALS['strMyFooterError']                         = "Указанный файл подвала недоступен";
$GLOBALS['strDefaultTrackerStatus']                  = "Статус по умолчанию";
$GLOBALS['strDefaultTrackerType']                    = "Тип по умолчанию";
$GLOBALS['requireSSL']                               = "Принудительно использовать SSL в GUI";
$GLOBALS['sslPort']                                  = "SSL порт сервера";
$GLOBALS['strDashboardSettings']                     = "Настройка панели";

$GLOBALS['strMyLogo']                                = "Имя файла логотипа";
$GLOBALS['strMyLogoError']                           = "Файл с указанным именем должен лежать в папке admin/images";
$GLOBALS['strGuiHeaderForegroundColor']              = "Цвет букв заголовка";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Цвет фона заголовка";
$GLOBALS['strGuiActiveTabColor']                     = "Цвет активной закладки";
$GLOBALS['strGuiHeaderTextColor']                    = "Цвет текста в заголовке";
$GLOBALS['strColorError']                            = "Укажите цвет в формате RGB, например '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Использовать Gzip сжатие";
$GLOBALS['strClientInterface']                       = "Клиентский интерфейс";
$GLOBALS['strReportsInterface']                      = "Интерфейс отчетов";
$GLOBALS['strClientWelcomeEnabled']                  = "Включить приветственное сообщение для клиентов";
$GLOBALS['strClientWelcomeText']                     = "Текст приветственного сообщения для клиентов<br>(разрешены тэги HTML)";

$GLOBALS['strPublisherInterface']                    = "Интерфейс сайта";
$GLOBALS['strPublisherAgreementEnabled']             = "Разрешить вход для сайтов, которые не согласились с Условиями использования";
$GLOBALS['strPublisherAgreementText']                = "Текст страницы входа";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strKeywordRetrieval']             = "Извлечение по ключевым словам";
$GLOBALS['strBannerRetrieval']              = "Метод извлечения баннеров";
$GLOBALS['strRetrieveRandom']               = "Случайное извлечение (по умолчанию)";
$GLOBALS['strRetrieveNormalSeq']            = "Обычное последовательное извлечение";
$GLOBALS['strWeightSeq']                    = "Последовательное извлечение с учётом весов";
$GLOBALS['strFullSeq']                      = "Полное последовательное извлечение";
$GLOBALS['strUseConditionalKeys']           = "Разрешить логические операторы при прямой выборке";
$GLOBALS['strUseMultipleKeys']              = "Разрешить множественные ключевые слова при прямой выборке";

$GLOBALS['strTableBorderColor']             = "Цвет рамки таблицы";
$GLOBALS['strTableBackColor']               = "Цвет фона таблицы";
$GLOBALS['strTableBackColorAlt']            = "Альтернативный цвет фона таблицы";
$GLOBALS['strMainBackColor']                = "Основной цвет фона";
$GLOBALS['strOverrideGD']                   = "Игнорировать автопределение формата картинок в GD";
$GLOBALS['strTimeZone']                     = "Временная зона";

?>
