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

// Set text direction and characterset


// Date & time configuration
$GLOBALS['date_format']                 = "%d/%m/%Y";

// Formats used by PEAR Spreadsheet_Excel_Writer packate

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Дом";
$GLOBALS['strHelp']                     = "Помощь";
$GLOBALS['strStartOver']                = "Начало";
$GLOBALS['strNavigation']               = "Навигация";
$GLOBALS['strShortcuts']                = "Сокращения";
$GLOBALS['strActions']                  = "Действие";
$GLOBALS['strAdminstration']            = "Администрирование";
$GLOBALS['strMaintenance']              = "Обслуживание";
$GLOBALS['strProbability']              = "Вероятность";
$GLOBALS['strInvocationcode']           = "Код вызова";
$GLOBALS['strTrackerVariables']         = "Переменные трекера";
$GLOBALS['strBasicInformation']         = "Основная информация";
$GLOBALS['strContractInformation']      = "Контрактная информация";
$GLOBALS['strLoginInformation']         = "Информация о логине";
$GLOBALS['strLogoutURL']                = "URL для перехода при выходе. <br />Оставьте пустым для URL по умолчанию";
$GLOBALS['strAppendTrackerCode']        = "Добавить код трекера";
$GLOBALS['strOverview']                 = "Обозрение";
$GLOBALS['strSearch']                   = "<u>П</u>оиск";
$GLOBALS['strHistory']                  = "История";
$GLOBALS['strDetails']                  = "Подробнее";
$GLOBALS['strUpdateSettings']           = "Настройки обновления";
$GLOBALS['strCheckForUpdates']          = "Проверить обновления";
$GLOBALS['strCompact']                  = "Компактно";
$GLOBALS['strVerbose']                  = "Подробно";
$GLOBALS['strUser']                     = "Пользователь";
$GLOBALS['strEdit']                     = "Редактировать";
$GLOBALS['strCreate']                   = "Создать";
$GLOBALS['strDuplicate']                = "Дублировать";
$GLOBALS['strMoveTo']                   = "Переместить в";
$GLOBALS['strDelete']                   = "Удалить";
$GLOBALS['strActivate']                 = "Активировать";
$GLOBALS['strDeActivate']               = "Деактивировать";
$GLOBALS['strConvert']                  = "Конвертировать";
$GLOBALS['strRefresh']                  = "Обновить";
$GLOBALS['strSaveChanges']              = "Сохранить изменения";
$GLOBALS['strUp']                       = "Вверх";
$GLOBALS['strDown']                     = "Вниз";
$GLOBALS['strSave']                     = "Сохранить";
$GLOBALS['strCancel']                   = "Отменить";
$GLOBALS['strBack']                     = "Назад";
$GLOBALS['strPrevious']                 = "Предыдущий";
$GLOBALS['strPrevious_Key']             = "<u>П</u>редыдущий";
$GLOBALS['strNext']                     = "Следующий";
$GLOBALS['strNext_Key']                 = "<u>C</u>ледующий";
$GLOBALS['strYes']                      = "Да";
$GLOBALS['strNo']                       = "Нет";
$GLOBALS['strNone']                     = "Никто";
$GLOBALS['strCustom']                   = "Нестандартный";
$GLOBALS['strDefault']                  = "По умолчанию";
$GLOBALS['strOther']                    = "Другое";
$GLOBALS['strUnknown']                  = "Неизвестное";
$GLOBALS['strUnlimited']                = "Не ограничено";
$GLOBALS['strUntitled']                 = "Без названия";
$GLOBALS['strAll']                      = "все";
$GLOBALS['strAvg']                      = "Среднее";
$GLOBALS['strAverage']                  = "В среднем";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Всего";
$GLOBALS['strTotal']                    = "Итого";
$GLOBALS['strActive']                   = "активен";
$GLOBALS['strFrom']                     = "С";
$GLOBALS['strTo']                       = "по";
$GLOBALS['strAdd']                      = "Добавить";
$GLOBALS['strLinkedTo']                 = "связано с";
$GLOBALS['strDaysLeft']                 = "Осталось дней";
$GLOBALS['strCheckAllNone']             = "Пометить всё / ничего";
$GLOBALS['strExpandAll']                = "<u>Р</u>аскрыть всё";
$GLOBALS['strCollapseAll']              = "<u>З</u>акрыть всё";
$GLOBALS['strShowAll']                  = "Показать все";
$GLOBALS['strNoAdminInterface']         = "Административный интерфейс недоступен на время планового обслуживания. Это никак не сказывается на ваших рекламных кампаниях.";
$GLOBALS['strFieldStartDateBeforeEnd']  = "\\'От' должно быть ранее даты 'До'";
$GLOBALS['strFieldContainsErrors']      = "Указанные поля содержат ошибки:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Прежде чем вы сможете продолжить, вам необходимо";
$GLOBALS['strFieldFixBeforeContinue2']  = "для исправления этих ошибок";
$GLOBALS['strDelimiter']                = "Разделитель";
$GLOBALS['strMiscellaneous']            = "Разное";
$GLOBALS['strCollectedAllStats']        = "Вся статистика";
$GLOBALS['strCollectedToday']           = "Сегодня";
$GLOBALS['strCollectedYesterday']       = "Вчера";
$GLOBALS['strCollectedThisWeek']        = "Текущая неделя";
$GLOBALS['strCollectedLastWeek']        = "Предыдущая неделя";
$GLOBALS['strCollectedThisMonth']       = "Текущий месяц";
$GLOBALS['strCollectedLastMonth']       = "Предыдущий месяц";
$GLOBALS['strCollectedLast7Days']       = "За последние 7 дней";
$GLOBALS['strCollectedSpecificDates']   = "Заданные даты";
$GLOBALS['strValue']                    = "Значение";
$GLOBALS['strAdmin']                    = "Администратор";
$GLOBALS['strNotice']                   = "Уведомление";
$GLOBALS['strRequiredField']            = "Обязательные поля";

// Dashboard
$GLOBALS['strChoosenDisableHomePage']   = "Вы выбрали отключение вашей домашней странички.";
$GLOBALS['strAccessHomePage']           = "Нажмите здесь для доступа к вашей домашней страничке";
$GLOBALS['strEditSyncSettings']         = "и редактируйте ваши настройки синхронизации";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "код";
$GLOBALS['strDashboardSystemMessage']   = "Системное собщение";
$GLOBALS['strDashboardErrorHelp']       = "Если эта ошибка повторяется просьба описать проблему в деталях и разместить её на <a href='http://forum.openx.org/'>OpenX форуме</а>.";

// Priority
$GLOBALS['strPriority']                 = "Приоритет";
$GLOBALS['strPriorityLevel']            = "Уровень приоритета";
$GLOBALS['strPriorityTargeting']        = "Распределение";
$GLOBALS['strPriorityOptimisation']     = "Разное"; // Er, what?
$GLOBALS['strHighAds']                  = "Îые кампании";
$GLOBALS['strLowAds']                   = "Ùе кампании";
$GLOBALS['strLimitations']              = "Ограничения";
$GLOBALS['strNoLimitations']            = "Нет ограничений";
$GLOBALS['strCapping']                  = "Частичные ограничения";

// Properties
$GLOBALS['strName']                     = "Имя";
$GLOBALS['strSize']                     = "Размер";
$GLOBALS['strWidth']                    = "ширина";
$GLOBALS['strHeight']                   = "высота";
$GLOBALS['strTarget']                   = "Цель";
$GLOBALS['strLanguage']                 = "Язык";
$GLOBALS['strDescription']              = "Описание";
$GLOBALS['strVariables']                = "Переменные";
$GLOBALS['strComments']                 = "Комментарии";

// User access
$GLOBALS['strWorkingAs']                = "Работает как";
$GLOBALS['strWorkingAs']                = "Работает как";
$GLOBALS['strSwitchTo']                 = "Переключиться в";
$GLOBALS['strWorkingFor']               = "%s для…";
$GLOBALS['strLinkUser']                 = "Добавить пользователя";
$GLOBALS['strLinkUser_Key']             = "Привязать <u>п</u>ользователя";
$GLOBALS['strUsernameToLink']           = "Имя пользователя для ссылки";
$GLOBALS['strEmailToLink']              = "E-mail для ссылки";
$GLOBALS['strNewUserWillBeCreated']     = "Будет создан новый пользователь";
$GLOBALS['strToLinkProvideEmail']       = "Для связи пользователя, задайте e-mail";
$GLOBALS['strToLinkProvideUsername']    = "Для связи пользователя, задайте его имя";
$GLOBALS['strErrorWhileCreatingUser']   = "Ошибка при создании пользователя: %s";
$GLOBALS['strUserLinkedToAccount']      = "Пользователь добавлен к учетной записи";
$GLOBALS['strUserAccountUpdated']       = "Учетная запись обновлена";
$GLOBALS['strUserUnlinkedFromAccount']  = "Пользователь был удален из учетной записи";
$GLOBALS['strUserWasDeleted']           = "Пользователь был удален";
$GLOBALS['strUserNotLinkedWithAccount'] = "К учетной записи не привязан ни один пользователь";
$GLOBALS['strCantDeleteOneAdminUser']   = "Вы не можете удалить этого пользователя. Хотя бы один пользователь должен быть связан с учетной записью администратора.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Имя пользователя";
$GLOBALS['strLinkUserHelpEmail']        = "Адрес e-mail";
$GLOBALS['strLastLoggedIn']             = "Последний вход в систему";
$GLOBALS['strDateLinked']               = "Дата привязана";
$GLOBALS['strUnlink']                   = "Удалить";
$GLOBALS['strUnlinkingFromLastEntity']  = "Удаление пользователя";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Удаление пользователя необратимо. Вы уверены что хотите это сделать?";
$GLOBALS['strUnlinkAndDelete']          = "Удалить пользователя";
$GLOBALS['strUnlinkUser']               = "Удалить пользователя";
$GLOBALS['strUnlinkUserConfirmBody']    = "Вы уверены, что хотите удалить этого пользователя?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Доступ пользователя";
$GLOBALS['strAdminAccess']              = "Административный доступ";
$GLOBALS['strUserProperties']           = "Настройки пользователя";
$GLOBALS['strLinkNewUser']              = "Привязать нового пользователя";
$GLOBALS['strPermissions']              = "Права доступа";
$GLOBALS['strAuthentification']         = "Доступ";
$GLOBALS['strWelcomeTo']                = "Добро пожаловать в";
$GLOBALS['strEnterUsername']            = "Введите ваш логин и пароль для входа в систему";
$GLOBALS['strEnterBoth']                = "Пожалуйста, введите логин и пароль";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Ошибка cookie, пожалуйста, авторизуйтесь заново";
$GLOBALS['strLogin']                    = "Имя пользователя";
$GLOBALS['strLogout']                   = "Выход";
$GLOBALS['strUsername']                 = "Имя пользователя";
$GLOBALS['strPassword']                 = "Пароль";
$GLOBALS['strPasswordRepeat']           = "Повторите пароль";
$GLOBALS['strAccessDenied']             = "Доступ запрещён";
$GLOBALS['strUsernameOrPasswordWrong']  = "Имя пользователя и/или пароль, неправильные. Пожалуйста, попробуйте еще раз.";
$GLOBALS['strPasswordWrong']            = "Пароль указан неверно";
$GLOBALS['strNotAdmin']                 = "Ваш аккаунт не имеет необходимых полномочий, но вы можете войти под другим именем. Нажмите <a href='logout.php'>здесь</a> для входа под другим именем.";
$GLOBALS['strDuplicateClientName']      = "Указанное имя пользователя уже существует, пожалуйста введите другое имя.";
$GLOBALS['strDuplicateAgencyName']      = "Указанное имя пользователя уже существует, пожалуйста введите другое имя.";
$GLOBALS['strInvalidEmail']             = "Этот e-mail имеет некорректный формат";
$GLOBALS['strDeadLink']                 = "Ваша ссылка некорректна";
$GLOBALS['strNoPlacement']              = "Выбранная кампания не существует. Попробуйте нажать на <a href='{link}'>эту ссылку</a>";
$GLOBALS['strNoAdvertiser']             = "Выбранный рекламодатель не существует. Попробуйте нажать на <a href='{link}'>эту ссылку</a>";

// General advertising
$GLOBALS['strRequests']                 = "Запросов";
$GLOBALS['strImpressions']              = "Показов";
$GLOBALS['strClicks']                   = "Кликов";
$GLOBALS['strConversions']              = "Переходов";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Показатель продаж (Sales Ratio)";
$GLOBALS['strTotalViews']               = "Всего показов";
$GLOBALS['strTotalClicks']              = "Всего кликов";
$GLOBALS['strTotalConversions']         = "Всего переходов";
$GLOBALS['strViewCredits']              = "Кредиты по показам";
$GLOBALS['strClickCredits']             = "Кредиты по кликам";
$GLOBALS['strConversionCredits']        = "Конвертация кредитов";
$GLOBALS['strDateTime']                 = "Дата и время";
$GLOBALS['strTrackerID']                = "ID трекера";
$GLOBALS['strTrackerName']              = "Название трекера";
$GLOBALS['strTrackerImageTag']          = "Метка изображения";
$GLOBALS['strTrackerJsTag']             = "Метка JavaScript";
$GLOBALS['strBanners']                  = "Баннеры";
$GLOBALS['strCampaigns']                = "Кампании";
$GLOBALS['strCampaignID']               = "ID кампании";
$GLOBALS['strCampaignName']             = "Название кампании";
$GLOBALS['strCountry']                  = "Страна";
$GLOBALS['strStatsAction']              = "Действие";
$GLOBALS['strWindowDelay']              = "Задержка окна";
$GLOBALS['strStatsVariables']           = "Переменные";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM (цена 1000 показов)";
$GLOBALS['strFinanceCPC']               = "CPC (цена клика)";
$GLOBALS['strFinanceCPA']               = "CPA (цена действия)";
$GLOBALS['strFinanceMT']                = "Цена месяца размещения";
$GLOBALS['strPercentRevenueSplit']      = "% распределение доходов";
$GLOBALS['strPercentBasketValue']       = "% Значение корзины";
$GLOBALS['strAmountPerItem']            = "Значения по элементу";
$GLOBALS['strPercentCustomVariable']    = "% Специальная переменная";
$GLOBALS['strPercentSumVariables']      = "% сумма переменных";

// Time and date related
$GLOBALS['strDate']                     = "Дата";
$GLOBALS['strToday']                    = "Сегодня";
$GLOBALS['strDay']                      = "День";
$GLOBALS['strDays']                     = "Дней";
$GLOBALS['strLast7Days']                = "Последние 7 дней";
$GLOBALS['strWeek']                     = "Неделя";
$GLOBALS['strWeeks']                    = "Недель";
$GLOBALS['strSingleMonth']              = "Месяц";
$GLOBALS['strMonths']                   = "Месяцев";
$GLOBALS['strDayOfWeek']                = "День недели";
$GLOBALS['strThisMonth']                = "За этот месяц";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "час";
$GLOBALS['strSeconds']                  = "секунд";
$GLOBALS['strMinutes']                  = "минут";
$GLOBALS['strHours']                    = "часов";

// Advertiser
$GLOBALS['strClient']                       = "Клиент";
$GLOBALS['strClients']                      = "Клиенты";
$GLOBALS['strClientsAndCampaigns']          = "Клиенты и кампании";
$GLOBALS['strAddClient']                    = "Добавить клиента";
$GLOBALS['strAddClient_Key']                = "Добавить <u>н</u>ового клиента";
$GLOBALS['strTotalClients']                 = "Всего клиентов";
$GLOBALS['strClientProperties']             = "Параметры клиента";
$GLOBALS['strClientHistory']                = "История клиентов";
$GLOBALS['strNoClients']                    = "в настоящее время не определено ни одного клиента. Для создания кампании необходимо сначала <a href='advertiser-edit.php'>добавить клиента</a>.";
$GLOBALS['strNoClientsForBanners']          = "в настоящее время не определено ни одного клиента. Для создания кампании необходимо сначала <a href='advertiser-edit.php'>добавить клиента</a>.";
$GLOBALS['strConfirmDeleteClient']          = "Вы действительно хотите удалить этого клиента?";
$GLOBALS['strConfirmDeleteClients']         = "Вы действительно хотите удалить этого клиента?";
$GLOBALS['strConfirmResetClientStats']      = "Вы действительно хотите обнулить статистику для этого клиента?";
$GLOBALS['strSite']                         = "Размер";
$GLOBALS['strHideInactive']                 = "Скрыть неактивные элементы со всех страниц";
$GLOBALS['strHideInactiveAdvertisers']      = "Скрыть неактивных клиентов";
$GLOBALS['strInactiveAdvertisersHidden']    = "неактивные клиенты скрыты";
$GLOBALS['strOverallAdvertisers']           = "клиент(ы)";
$GLOBALS['strAdvertiserSignup']             = "Регистрация рекламодателя";
$GLOBALS['strAdvertiserSignupDesc']         = "Вход для клиентов (самообслуживание и платежи)";
$GLOBALS['strAdvertiserSignupLink']         = "Ссылка для регистрации рекламодателя";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "Для добавления ссылки на ваш сайт скопируйте приведенный HTML-код ";
$GLOBALS['strAdvertiserSignupOption']       = "Регистрация рекламодателя (опции)";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "Для редактирования опций регистрации, нажмите здесь";
$GLOBALS['strAdvertiserCampaigns']          = "Клиенты и кампании";
// Advertisers properties
$GLOBALS['strContact']                          = "Контакт";
$GLOBALS['strContactName']                      = "Имя";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "знаков";
$GLOBALS['strSendAdvertisingReport']            = "Посылать рекламный отчет по E-mail";
$GLOBALS['strNoDaysBetweenReports']             = "Количество дней между отчетами";
$GLOBALS['strSendDeactivationWarning']          = "Посылать предупреждение, когда кампания деактивируется";
$GLOBALS['strAllowClientModifyInfo']            = "Разрешить редактировать собственные клиентские данные";
$GLOBALS['strAllowClientModifyBanner']          = "Разрешить модифицировать собственные баннеры";
$GLOBALS['strAllowClientAddBanner']             = "Разрешить этому пользователю добавлять новые баннеры";
$GLOBALS['strAllowClientDisableBanner']         = "Разрешить деактивировать его баннеры";
$GLOBALS['strAllowClientActivateBanner']        = "Разрешить активировать его баннеры";
$GLOBALS['strAllowClientViewTargetingStats']    = "Разрешить просмотр статистики таргетинга";
$GLOBALS['strAllowCreateAccounts']              = "Разрешить пользователю создавать учетные записи";
$GLOBALS['strCsvImportConversions']             = "Разрешить импортировать оффлайн-действия";
$GLOBALS['strAdvertiserLimitation']             = "Показывать только один баннер этого рекламодателя на странице";
$GLOBALS['strAllowAuditTrailAccess']            = "разрешить этому пользователю доступ к аудиту";

// Campaign
$GLOBALS['strCampaign']                     = "Кампания";
$GLOBALS['strCampaigns']                    = "Кампании";
$GLOBALS['strOverallCampaigns']             = "кампани(я-и)";
$GLOBALS['strTotalCampaigns']               = "Всего кампаний";
$GLOBALS['strActiveCampaigns']              = "Активных кампаний";
$GLOBALS['strAddCampaign']                  = "Добавить новую кампанию";
$GLOBALS['strAddCampaign_Key']              = "Добавить <u>н</u>овую кампанию";
$GLOBALS['strCreateNewCampaign']            = "Создать новую кампанию";
$GLOBALS['strModifyCampaign']               = "Редактировать кампанию";
$GLOBALS['strMoveToNewCampaign']            = "Перейти к новой кампании";
$GLOBALS['strBannersWithoutCampaign']       = "Баннеры без кампании";
$GLOBALS['strDeleteAllCampaigns']           = "Удалить все кампании";
$GLOBALS['strLinkedCampaigns']              = "Связанные кампании";
$GLOBALS['strCampaignStats']                = "Статистика кампании";
$GLOBALS['strCampaignProperties']           = "Параметры кампании";
$GLOBALS['strCampaignOverview']             = "Обзор кампании";
$GLOBALS['strCampaignHistory']              = "История кампаний";
$GLOBALS['strNoCampaigns']                  = "В настоящее время нет активных кампаний";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Вы действительно хотите удалить все кампании этого клиента?";
$GLOBALS['strConfirmDeleteCampaign']        = "Вы действительно хотите удалить эту кампанию?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Вы действительно хотите удалить эту кампанию?";
$GLOBALS['strConfirmResetCampaignStats']    = "Вы действительно хотите обнулить статистику для этой кампании?";
$GLOBALS['strShowParentAdvertisers']        = "Показать связанных клиентов";
$GLOBALS['strHideParentAdvertisers']        = "Скрыть связанных клиентов";
$GLOBALS['strHideInactiveCampaigns']        = "Скрыть неактивные кампании";
$GLOBALS['strInactiveCampaignsHidden']      = "неактивная кампаня(ии) скрыты";
$GLOBALS['strContractDetails']              = "Параметры контракта";
$GLOBALS['strInventoryDetails']             = "Параметры администрирования";
$GLOBALS['strPriorityInformation']          = "Приоритет по отношению к другим кампаниям";
$GLOBALS['strHiddenCampaign']               = "Кампания";
$GLOBALS['strHiddenAd']                     = "Баннер";
$GLOBALS['strHiddenAdvertiser']             = "Клиент";
$GLOBALS['strHiddenTracker']                = "Трекер";
$GLOBALS['strHiddenWebsite']              = "Вебсайт";
$GLOBALS['strHiddenZone']                   = "Зона";
$GLOBALS['strCompanionPositioning']         = "Совместное размещение баннеров этой кампании";
$GLOBALS['strSelectUnselectAll']            = "Выбрать всё / Снять выделение";

// Campaign-zone linking page


// Campaign properties
$GLOBALS['strDontExpire']                       = "Не деактивировать";
$GLOBALS['strActivateNow']                      = "Немедленно активировать";
$GLOBALS['strLow']                              = "Низкий";
$GLOBALS['strHigh']                             = "Высокий";
$GLOBALS['strExpirationDate']                   = "Дата окончания";
$GLOBALS['strExpirationDateComment']            = "Кампания закончится в конце этого дня";
$GLOBALS['strActivationDate']                   = "Дата начала";
$GLOBALS['strActivationDateComment']            = "Кампания начнется в начале этого дня";
$GLOBALS['strRevenueInfo']                      = "Цена";
$GLOBALS['strTotalRevenue']                     = "Общий доход";
$GLOBALS['strImpressionsRemaining']             = "Осталось показов";
$GLOBALS['strClicksRemaining']                  = "Осталось кликов";
$GLOBALS['strConversionsRemaining']             = "Осталось действий";
$GLOBALS['strImpressionsBooked']                = "Заказано показов";
$GLOBALS['strClicksBooked']                     = "Заказано кликов";
$GLOBALS['strConversionsBooked']                = "Заказано действий";
$GLOBALS['strCampaignWeight']                   = "Вес кампании";
$GLOBALS['strOptimise']                         = "Оптимизировать";
$GLOBALS['strAnonymous']                        = "Скрыть клиента и сайты этой кампании";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Показывать баннеры в этой кампании с низким приоритетом.<br>\\n										   Эта кампания используетися для показа оставшихся просмотров, которые\\n										   не используются высокоприоритетными кампаниями.";
$GLOBALS['strTargetPerDay']                     = "в день.";
$GLOBALS['strPriorityAutoTargeting']            = "Автоматически. Распределить показы равномерно на оставшиеся дни";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "Приоритет этой кампании был установлен на низком уровне,\\nно вес был установлен равным нулю, или не был указан вовсе.\\nЭто вызовет отключение кампании и баннеры не будут показываться до тех пор,\\nпока не будет задан вес, отличный от нуля.\\n\\nВы действительно хотите продолжить?";
$GLOBALS['strCampaignWarningNoTarget']          = "Приоритет этой кампании был задан высоким, но не было указано число показов. Это вызовет отключение кампании и баннеры не будут показываться до тех пор, пока не будет задано количество показов, отличное от нуля.\\n\\nВы действительно хотите продолжить?";
$GLOBALS['strCampaignStatusPending']            = "Ожидают";
$GLOBALS['strCampaignStatusInactive']           = "активен";
$GLOBALS['strCampaignStatusRunning']            = "Запущен ";
$GLOBALS['strCampaignStatusPaused']             = "Приостановлен";
$GLOBALS['strCampaignStatusAwaiting']           = "Ожидает";
$GLOBALS['strCampaignStatusExpired']            = "Завершен";
$GLOBALS['strCampaignStatusApproval']           = "Ожидает подтверждения";
$GLOBALS['strCampaignStatusRejected']           = "Отклонен";
$GLOBALS['strCampaignStatusAdded']              = "Добавлен";
$GLOBALS['strCampaignStatusStarted']            = "Стартовал";
$GLOBALS['strCampaignStatusRestarted']          = "Перезапущен";
$GLOBALS['strCampaignStatusDeleted']            = "Удалено";
$GLOBALS['strCampaignApprove']                  = "Подтвержден";
$GLOBALS['strCampaignApproveDescription']       = "подтвердить эту кампанию";
$GLOBALS['strCampaignReject']                   = "Отменить";
$GLOBALS['strCampaignRejectDescription']        = "отменить эту кампанию";
$GLOBALS['strCampaignPause']                    = "Приостановить";
$GLOBALS['strCampaignPauseDescription']         = "приостановить эту кампанию";
$GLOBALS['strCampaignRestart']                  = "Продолжить";
$GLOBALS['strCampaignRestartDescription']       = "продолжить эту кампанию";
$GLOBALS['strCampaignStatus']                   = "Состояние кампании";
$GLOBALS['strReasonForRejection']               = "Причина отказа";
$GLOBALS['strReasonSiteNotLive']                = "Сайт недоступен";
$GLOBALS['strReasonBadCreative']                = "Неприемлемый креатив";
$GLOBALS['strReasonBadUrl']                     = "Неприемлемый URL перехода";
$GLOBALS['strReasonBreakTerms']                 = "Сайт нарушает Правила";
$GLOBALS['strChangeStatus']                     = "Изменить состояние";
$GLOBALS['strCampaignType']                     = "Название кампании";
$GLOBALS['strType']                             = "Тип";
$GLOBALS['strContract']                         = "Контакт";
$GLOBALS['strStandardContract']                 = "Контакт";

// Tracker
$GLOBALS['strTracker']                    = "Трекер";
$GLOBALS['strTrackers']                   = "Трекеры";
$GLOBALS['strTrackerOverview']            = "Параметры трекера";
$GLOBALS['strTrackerPreferences']            = "Предпочтения трекера";
$GLOBALS['strAddTracker']                 = "Добавить трекер";
$GLOBALS['strAddTracker_Key']             = "Добавить <u>н</u>овый трекер";
$GLOBALS['strNoTrackers']                 = "Трекеры не определены";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Вы действительно хотите удалить все трекеры этого клиента?";
$GLOBALS['strConfirmDeleteTrackers']      = "Вы действительно хотите удалить этот трекер?";
$GLOBALS['strConfirmDeleteTracker']       = "Вы действительно хотите удалить этот трекер?";
$GLOBALS['strDeleteAllTrackers']          = "Удалить все трекеры";
$GLOBALS['strTrackerProperties']          = "Свойства трекера";
$GLOBALS['strTrackerOverview']            = "Параметры трекера";
$GLOBALS['strModifyTracker']              = "Редактировать трекер";
$GLOBALS['strLog']                        = "Записать в журнал?";
$GLOBALS['strDefaultStatus']              = "Статус по умолчанию";
$GLOBALS['strStatus']                     = "Статус";
$GLOBALS['strLinkedTrackers']             = "Связанные трекеры";
$GLOBALS['strConversionWindow']           = "Период действия";
$GLOBALS['strUniqueWindow']               = "Период уникального пользователя";
$GLOBALS['strClick']                      = "Клик";
$GLOBALS['strView']                       = "Показ";
$GLOBALS['strImpression']                 = "Показ";
$GLOBALS['strConversionType']             = "Тип конверсии";
$GLOBALS['strLinkCampaignsByDefault']     = "По умолчанию связывать с новыми кампаниями";
$GLOBALS['strPerSingleImpression']        = "на один показ";



// Banners (General)
$GLOBALS['strBanner']                        = "Баннер";
$GLOBALS['strBanners']                       = "Баннеры";
$GLOBALS['strAddBanner']                     = "Добавить новый баннер";
$GLOBALS['strAddBanner_Key']                 = "Добавить <u>н</u>овый баннер";
$GLOBALS['strBannerToCampaign']              = "Ваша кампания";
$GLOBALS['strModifyBanner']                  = "Изменить баннер";
$GLOBALS['strActiveBanners']                 = "Активных баннеров";
$GLOBALS['strTotalBanners']                  = "Всего баннеров";
$GLOBALS['strShowBanner']                    = "Показать баннер";
$GLOBALS['strShowAllBanners']                = "Показать все баннеры";
$GLOBALS['strShowBannersNoAdViews']          = "Показать баннеры без просмотров";
$GLOBALS['strShowBannersNoAdClicks']         = "Показать баннеры без кликов";
$GLOBALS['strDeleteAllBanners']              = "Удалить все баннеры";
$GLOBALS['strActivateAllBanners']            = "Активировать все баннеры";
$GLOBALS['strDeactivateAllBanners']          = "Деактивировать все баннеры";
$GLOBALS['strBannerOverview']                = "Обозрение баннера";
$GLOBALS['strBannerProperties']              = "Параметры баннера";
$GLOBALS['strBannerHistory']                 = "История баннеров";
$GLOBALS['strBannerNoStats']                 = "Нет статистики для этого баннера!";
$GLOBALS['strNoBanners']                     = "Нет баннеров";
$GLOBALS['strNoBannersAddCampaign']          = "В настоящее время не определено ни одного веб-сайта. Для создания зоны необходимо сначала<a href='affiliate-edit.php'>создать веб-сайт</a>.";
$GLOBALS['strNoBannersAddAdvertiser']        = "В настоящее время не определено ни одного веб-сайта. Для создания зоны необходимо сначала<a href='affiliate-edit.php'>создать веб-сайт</a>.";
$GLOBALS['strConfirmDeleteBanner']           = "Вы действительно хотите удалить этот баннер?";
$GLOBALS['strConfirmDeleteBanners']          = "Вы действительно хотите удалить этот баннер?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Вы действительно хотите удалить все баннеры в этой кампании?";
$GLOBALS['strConfirmResetBannerStats']       = "Вы действительно хотите обнулить статистику для этого баннера?";
$GLOBALS['strShowParentCampaigns']           = "Показать связанные кампании";
$GLOBALS['strHideParentCampaigns']           = "Скрыть связанные кампании";
$GLOBALS['strHideInactiveBanners']           = "Скрыть неактивные баннеры";
$GLOBALS['strInactiveBannersHidden']         = "неактивный баннер(ы) скрыт";
$GLOBALS['strAppendTextAdNotPossible']       = "Невозможно добавить баннер к текстовому объявлению";
$GLOBALS['strWarningMissing']                = "Внимание, возможно отсутствует";
$GLOBALS['strWarningMissingClosing']         = " закрывающий тэг \">\"";
$GLOBALS['strWarningMissingOpening']         = " открывающий тэг \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Сохранить как есть";
$GLOBALS['strOverallBanners']                = "баннер(ы)";
$GLOBALS['strBannersOfCampaign']             = "в"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Предпочтения баннера";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Выберите тип баннера.";
$GLOBALS['strMySQLBanner']             = "Баннер с вашего компьютера помещается в базу данных на сервере";
$GLOBALS['strWebBanner']               = "Баннер с вашего компьютера сохраняется в каталоге на веб-сервере";
$GLOBALS['strURLBanner']               = "Баннер лежит где-то в Интернет";
$GLOBALS['strHTMLBanner']              = "HTML-баннер";
$GLOBALS['strTextBanner']              = "Текстовый баннер";
$GLOBALS['strUploadOrKeep']            = "Хотите сохранить уже<br>имеющуюся картинку: или хотите <br>загрузить другую?";
$GLOBALS['strUploadOrKeepAlt']        = "Хотите сохранить уже<br>имеющуюся картинку: или хотите <br>загрузить другую?";
$GLOBALS['strNewBannerFile']         = "Выберите изображение, которое Вы хотите <br /> использовать для этого баннера <br /> <br />";
$GLOBALS['strNewBannerFileAlt']     = "Выберите изображение для показа <br />в том случае, если браузер клиента <br />не поддерживает Rich Media<br /><br />";
$GLOBALS['strNewBannerURL']         = "URL изображения (с http://)";
$GLOBALS['strURL']                     = "URL перехода (с http://)";
$GLOBALS['strKeyword']              = "Ключевое слово (латиницей и цифрами)";
$GLOBALS['strTextBelow']             = "Текст под картинкой";
$GLOBALS['strWeight']                 = "Вес";
$GLOBALS['strAlt']                     = "Alt-Tекст";
$GLOBALS['strStatusText']            = "Текст в строке состояния";
$GLOBALS['strBannerWeight']            = "Вес баннера";
$GLOBALS['strAdserverTypeGeneric']  = "Простой HTML-баннер";
$GLOBALS['strGenericOutputAdServer'] = "Простой";
$GLOBALS['strSwfTransparency']		   = "Разрешить прозрачный фон";

// Banner (advanced)

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Проверять наличие жестко закодированных ссылок внутри Flash-файлов";
$GLOBALS['strConvertSWFLinks']        = "Преобразовать Flash-ссылки";
$GLOBALS['strHardcodedLinks']        = "Жёстко закодированные ссылки";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Сжать SWF-файл для ускорения загрузки (требует установки Flash 6 плагина)";
$GLOBALS['strOverwriteSource']        = "Перезаписать параметр источника";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "Баннерная сеть";
$GLOBALS['strChooseNetwork']        = "Выберите баннерную сеть, которую вы хотите использовать";
$GLOBALS['strMoreInformation']        = "Доп. информация...";
$GLOBALS['strTrackAdClicks']        = "Отслеживать клики";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "Учетные записи AdSense";
$GLOBALS['strLinkAdSenseAccount']         = "Привязать учетную запись AdSense";
$GLOBALS['strCreateAdSenseAccount']       = "Создать учетную запись AdSense";
$GLOBALS['strEditAdSenseAccount']         = "Редактировать учетную запись AdSense";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Ограничения показа";
$GLOBALS['strACL']                        = "Лимит";
$GLOBALS['strACLAdd']                     = "Добавить новое ограничение";
$GLOBALS['strACLAdd_Key']                 = "Добавить <u>н</u>овое ограничение";
$GLOBALS['strNoLimitations']              = "Нет ограничений";
$GLOBALS['strApplyLimitationsTo']         = "Применить ограничения к";
$GLOBALS['strRemoveAllLimitations']       = "Удалить все ограничения";
$GLOBALS['strEqualTo']                    = "равно";
$GLOBALS['strDifferentFrom']              = "отличается от";
$GLOBALS['strLaterThan']                  = "позже чем";
$GLOBALS['strLaterThanOrEqual']           = "позже или равно";
$GLOBALS['strEarlierThan']                = "раньше чем";
$GLOBALS['strEarlierThanOrEqual']         = "раньше или равно";
$GLOBALS['strGreaterThan']                = "больше чем";
$GLOBALS['strLessThan']                   = "меньше чем";
$GLOBALS['strAND']                        = "И";                          // logical operator
$GLOBALS['strOR']                         = "ИЛИ";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Показывать этот баннер только когда:";
$GLOBALS['strWeekDay']                    = "День недели";
$GLOBALS['strWeekDays']                   = "Дни недели";
$GLOBALS['strTime']                       = "Время";
$GLOBALS['strUserAgent']                  = "regexp строки User-agent";
$GLOBALS['strDomain']                     = "Домен (без точки в начале)";
$GLOBALS['strClientIP']                   = "IP клиента";
$GLOBALS['strSource']                     = "Источник";
$GLOBALS['strCity']                       = "Город";
$GLOBALS['strDeliveryLimitations']        = "Ограничения показов";

$GLOBALS['strDeliveryCapping']            = "Ограничения показа на посетителя";
$GLOBALS['strDeliveryCappingReset']       = "Сбросить счетчик показов после:";
$GLOBALS['strDeliveryCappingTotal']       = "всего";
$GLOBALS['strDeliveryCappingSession']     = "за сессию";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS[''];
$GLOBALS['strCappingBanner']['limit'] = "Лимит показов баннера:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS[''];
$GLOBALS['strCappingCampaign']['limit'] = "Лимит показов кампании:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS[''];
$GLOBALS['strCappingZone']['limit'] = "Лимит показов зоны:";

// Website
$GLOBALS['strAffiliate']                = "Вебсайт";
$GLOBALS['strAffiliates']                 = "Сайты";
$GLOBALS['strAffiliatesAndZones']        = "Сайты и зоны";
$GLOBALS['strAddNewAffiliate']            = "Добавить новый сайт";
$GLOBALS['strAddNewAffiliate_Key']        = "Добавить <u>н</u>овый сайт";
$GLOBALS['strAddAffiliate']                = "Создать сайт";
$GLOBALS['strAffiliateProperties']        = "Свойства сайта";
$GLOBALS['strAffiliateOverview']        = "Обзор сайта";
$GLOBALS['strAffiliateHistory']            = "История сайта";
$GLOBALS['strZonesWithoutAffiliate']    = "Зоны без сайтов";
$GLOBALS['strMoveToNewAffiliate']        = "Переместить в новый сайт";
$GLOBALS['strNoAffiliates']                = "В настоящее время не определено ни одного веб-сайта. Для создания зоны необходимо сначала<a href='affiliate-edit.php'>создать веб-сайт</a>.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Вы действительно хотите удалить этот сайт?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Вы действительно хотите удалить этот сайт?";
$GLOBALS['strMakePublisherPublic']        = "Сделать зоны этого сайта общедоступными";
$GLOBALS['strAffiliateInvocation']      = "Код вызова";
$GLOBALS['strAdvertiserSetup']          = "Регистрация рекламодателя";
$GLOBALS['strTotalAffiliates']          = "Всего сайтов";
$GLOBALS['strInactiveAffiliatesHidden'] = "неактивные сайты скрыты";
$GLOBALS['strShowParentAffiliates']     = "Показать связанные сайты";
$GLOBALS['strHideParentAffiliates']     = "Скрыть связанные сайты";

// Website (properties)
$GLOBALS['strWebsite']                      = "Вебсайт";
$GLOBALS['strWebsiteURL']                      = "URL Веб-сайта";
$GLOBALS['strMnemonic']                     = "Мнемоническое";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Разрешить редактировать собственные клиентские данные";
$GLOBALS['strAllowAffiliateModifyZones']    = "Разрешить редактировать его собственные зоны";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Разрешить связывать баннеры с его собственными зонами";
$GLOBALS['strAllowAffiliateAddZone']        = "Разрешить определять новые зоны";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Разрешить удалять существующие зоны";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Разрешить генерировать код вызова";
$GLOBALS['strAllowAffiliateZoneStats']      = "Разрешить просмотр статистики зон";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Показывать этому пользователю только подтвержденные действия";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Информация о платеже";
$GLOBALS['strAddress']                      = "Адрес";
$GLOBALS['strPostcode']                     = "Почтовый индекс";
$GLOBALS['strCity']                         = "Город";
$GLOBALS['strCountry']                      = "Страна";
$GLOBALS['strPhone']                        = "Телефон";
$GLOBALS['strFax']                          = "Факс";
$GLOBALS['strAccountContact']               = "Контактное лицо";
$GLOBALS['strPayeeName']                    = "Наименование плательщика";
$GLOBALS['strTaxID']                        = "Тип налога";
$GLOBALS['strModeOfPayment']                = "Тип платежа";
$GLOBALS['strPaymentChequeByPost']          = "Чек по почте";
$GLOBALS['strCurrency']                     = "Валюта";
$GLOBALS['strCurrencyGBP']                  = "Английские фунты";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Другая информация";
$GLOBALS['strUniqueUsersMonth']             = "Уникальных пользователей в месяц";
$GLOBALS['strUniqueViewsMonth']             = "Уникальных показов в месяц";
$GLOBALS['strPageRank']                     = "Google Pagerank";
$GLOBALS['strCategory']                     = "Категория";
$GLOBALS['strHelpFile']                     = "Файл справки";
$GLOBALS['strWebsiteZones']                 = "Сайты и зоны";

// Zone
$GLOBALS['strZone']                         = "Зона";
$GLOBALS['strZones']                        = "Зоны";
$GLOBALS['strAddNewZone']                   = "Добавить новую зону";
$GLOBALS['strAddNewZone_Key']               = "Добавить <u>н</u>овую зону";
$GLOBALS['strAddZone']                      = "Создать зону";
$GLOBALS['strModifyZone']                   = "Редактировать зону";
$GLOBALS['strZoneToWebsite']                = "Ни один веб-сайт";
$GLOBALS['strLinkedZones']                  = "Связанные зоны";
$GLOBALS['strZoneOverview']                 = "Обозрение зоны";
$GLOBALS['strZoneProperties']               = "Параметры зоны";
$GLOBALS['strZoneHistory']                  = "История зон";
$GLOBALS['strNoZones']                      = "Сейчас не определено ни одной зоны";
$GLOBALS['strNoZonesAddWebsite']            = "В настоящее время не определено ни одного веб-сайта. Для создания зоны необходимо сначала<a href='affiliate-edit.php'>создать веб-сайт</a>.";
$GLOBALS['strConfirmDeleteZone']            = "Вы действительно хотите удалить эту зону?";
$GLOBALS['strConfirmDeleteZones']           = "Вы действительно хотите удалить эту зону?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "С выбранной зоной связаны платные кампании. Если вы удалите эту зону - платные кампании остановятся и вы не получите за них денег.";
$GLOBALS['strZoneType']                     = "Тип зоны";
$GLOBALS['strBannerButtonRectangle']        = "Баннер, кнопка или область";
$GLOBALS['strInterstitial']                 = "Rich-Media и HTML баннеры";
$GLOBALS['strPopup']                        = "Pop-Up";
$GLOBALS['strTextAdZone']                   = "Текстовый баннер";
$GLOBALS['strEmailAdZone']                  = "Баннер в рассылке";
$GLOBALS['strZoneClick']                    = "Трекинга кликов";
$GLOBALS['strShowMatchingBanners']          = "Показать подходящие баннеры";
$GLOBALS['strHideMatchingBanners']          = "Скрыть подходящие баннеры";
$GLOBALS['strBannerLinkedAds']              = "Связанные баннеры";
$GLOBALS['strCampaignLinkedAds']            = "Связанные кампании";
$GLOBALS['strTotalZones']                   = "Всего зон";
$GLOBALS['strInactiveZonesHidden']          = "неактивные зоны скрыты";
$GLOBALS['strWarnChangeZoneType']           = "При смене типа зоны на \"текст\" или \"е-мэйл\" все связи с баннерами и кампаниями будут потеряны                                                <ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Изменение размеров зоны повлечет отключение текущих баннеров и подключение баннеров подходящего размера из связанных кампаний';
$GLOBALS['strWarnChangeBannerSize']         = 'Изменение размеров баннера приведет к тому, что он будет перемещен в зоны, подходящие под новый размер.';
$GLOBALS['strInventoryForecasting']         = 'Прогнозируемые значения';
$GLOBALS['strZonesOfWebsite']               = 'в'; //this is added between page name and website name eg. 'Zones in www.example.com'


// Advanced zone settings
$GLOBALS['strAdvanced']                    = "Дополнительно";
$GLOBALS['strChainSettings']            = "Настройки цепочки";
$GLOBALS['strZoneNoDelivery']            = "Если в этой зоне нет баннерных показов…";
$GLOBALS['strZoneStopDelivery']            = "Остановить показы";
$GLOBALS['strZoneOtherZone']            = "Показывать баннеры из указанной зоны";
$GLOBALS['strZoneAppend']                = "Всегда добавлять следующий HTML-код к баннерам в этой зоне";
$GLOBALS['strAppendSettings']            = "Настройки включений";
$GLOBALS['strZoneForecasting']            = "Настройки прогноза для зоны";
$GLOBALS['strZonePrependHTML']            = "Всегда добавлять следующий HTML-код ДО текстового баннера в этой зоне";
$GLOBALS['strZoneAppendHTML']            = "Всегда добавлять следующий HTML-код ПОСЛЕ текстового баннера в этой зоне";
$GLOBALS['strZoneAppendNoBanner']        = "Добавлять HTML-код даже если нет баннерных показов";
$GLOBALS['strZoneAppendType']            = "Тип вставки";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML-код";
$GLOBALS['strZoneAppendZoneSelection']    = "Pop-Up или \"плавающий\" баннер";
$GLOBALS['strZoneAppendSelectZone']        = "Всегда добавлять следующий Pop-Up или \"плавающий\" баннер к баннерам в этой зоне";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Все баннеры, связанные с выбранной зоной, неактивны. Цепь вызова зон, которая будет использована:";
$GLOBALS['strZoneProbNullPri']            = "Все баннеры, связанные с этой зоной, неактивны";
$GLOBALS['strZoneProbListChainLoop']    = "Указанная цепочка генерирует замкнутый цикл. Доставка баннеров для этой зоны прекращена.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Пожалуйста, выберите тип связи баннеров";
$GLOBALS['strLinkedBanners']            = "Связь отдельных баннеров";
$GLOBALS['strCampaignDefaults']            = "Связь баннеров по кампаниям";
$GLOBALS['strLinkedCategories']         = "Связь баннеров по категориям";
$GLOBALS['strWithXBanners']                = "%d баннер(ы)";
$GLOBALS['strInteractive']                = "Интерактивный";
$GLOBALS['strRawQueryString']            = "Строка запроса 'как есть'";
$GLOBALS['strIncludedBanners']            = "Связанные баннеры";
$GLOBALS['strLinkedBannersOverview']    = "Обозрение связанных баннеров";
$GLOBALS['strLinkedBannerHistory']        = "История связанных баннеров";
$GLOBALS['strNoZonesToLink']            = "Зон, к которым может быть отнесен данный баннер, нет";
$GLOBALS['strNoBannersToLink']            = "Сейчас нет баннеров, которые могли бы быть привязаны к этой зоне";
$GLOBALS['strNoLinkedBanners']            = "Сейчас нет баннеров, которые привязаны к этой зоне";
$GLOBALS['strMatchingBanners']            = "{count} подходящих баннеров";
$GLOBALS['strNoCampaignsToLink']        = "Нет кампаний для связи с данной зоной";
$GLOBALS['strNoTrackersToLink']            = "Нет трекеров для связи с данной кампанией";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Нет зон для связи с данной кампанией";
$GLOBALS['strSelectBannerToLink']        = "Выберите баннер для связи с этой зоной:";
$GLOBALS['strSelectCampaignToLink']        = "Выберите кампанию для связи с этой зоной:";
$GLOBALS['strSelectAdvertiser']         = "Выберите клиента";
$GLOBALS['strSelectPlacement']          = "Выберите кампанию";
$GLOBALS['strSelectAd']                 = "Выберите баннер";
$GLOBALS['strSelectPublisher']          = "Выбрать сайт";
$GLOBALS['strSelectZone']               = "Выбрать зону";
$GLOBALS['strTrackerCodeSubject']          = "Добавить код трекера";
$GLOBALS['strStatusPending']            = "Ожидают";
$GLOBALS['strStatusApproved']           = "Одобрены";
$GLOBALS['strStatusDisapproved']        = "Не одобрены";
$GLOBALS['strStatusDuplicate']          = "Дублировать";
$GLOBALS['strStatusOnHold']             = "Удерживаемые";
$GLOBALS['strStatusIgnore']             = "Игнорируемые";
$GLOBALS['strConnectionType']           = "Тип";
$GLOBALS['strConnTypeSale']             = "Продажа";
$GLOBALS['strConnTypeLead']             = "Следование";
$GLOBALS['strConnTypeSignUp']           = "Регистрация";
$GLOBALS['strShortcutEditStatuses'] = "Редактировать статусы";
$GLOBALS['strShortcutShowStatuses'] = "Показать статусы";

// Statistics
$GLOBALS['strStats']                     = "Статистика";
$GLOBALS['strNoStats']                   = "Сейчас не доступно никакой статистики";
$GLOBALS['strNoTargetingStats']          = "Статистика по таргетингу недоступна";
$GLOBALS['strNoStatsForPeriod']          = "Статистика за период с %s по %s недоступна";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Статистика по таргетингу за период с %s по %s недоступна";
$GLOBALS['strConfirmResetStats']         = "Вы действительно хотите обнулить всю статистику?";
$GLOBALS['strGlobalHistory']             = "Общая история";
$GLOBALS['strDailyHistory']              = "История по дням";
$GLOBALS['strDailyStats']                = "Статистика по дням";
$GLOBALS['strWeeklyHistory']             = "История по неделям";
$GLOBALS['strMonthlyHistory']            = "История по месяцам";
$GLOBALS['strCreditStats']               = "Статистика по кредитам";
$GLOBALS['strDetailStats']               = "Детальная статистика";
$GLOBALS['strTotalThisPeriod']           = "Всего за этот период";
$GLOBALS['strAverageThisPeriod']         = "В среднем за этот период";
$GLOBALS['strPublisherDistribution']     = "Распределение по сайтам";
$GLOBALS['strCampaignDistribution']      = "Распределение по кампаниям";
$GLOBALS['strResetStats']                = "Обнулить статистику";
$GLOBALS['strSourceStats']               = "Статистика по источнику";
$GLOBALS['strSelectSource']              = "Выберите источник, который вы хотите просмотреть:";
$GLOBALS['strSizeDistribution']          = "Распределение по размеру";
$GLOBALS['strCountryDistribution']       = "Распределение по стране";
$GLOBALS['strEffectivity']               = "Эффективность";
$GLOBALS['strTargetStats']               = "Статистика таргетинга";
$GLOBALS['strViewBreakdown']             = "Просмотры за";
$GLOBALS['strBreakdownByDay']            = "День";
$GLOBALS['strBreakdownByWeek']           = "Неделя";
$GLOBALS['strBreakdownByMonth']          = "Месяц";
$GLOBALS['strBreakdownByDow']            = "День недели";
$GLOBALS['strBreakdownByHour']           = "час";
$GLOBALS['strItemsPerPage']              = "Элементов на странице";
$GLOBALS['strDistributionHistory']       = "История распределения";
$GLOBALS['strShowGraphOfStatistics']     = "Показать <u>г</u>трафик";
$GLOBALS['strExportStatisticsToExcel']   = "<u>Э</u>экспортировать статистику в Excel";
$GLOBALS['strGDnotEnabled']              = "Для отображения графиков вам необходимо сконфигурировать PHP Для работы с библиотекой GD. Обратитесь за подробностями к руководству по PHP: <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a>";
$GLOBALS['strStatsArea']                 = "Область";

// Hosts
$GLOBALS['strHosts']                = "Хосты";
$GLOBALS['strTopHosts']             = "Лучшие хосты";
$GLOBALS['strTopCountries']         = "Лучшие страны";
$GLOBALS['strRecentHosts']             = "Недавно просматривавшие хосты";

// Expiration
$GLOBALS['strExpired']                = "Устарело";
$GLOBALS['strExpiration']             = "Срок окончания";
$GLOBALS['strNoExpiration']           = "Срок окончания не установлен";
$GLOBALS['strEstimated']              = "Ожидаемое окончание";
$GLOBALS['strNoExpirationEstimation'] = "Ограничения еще не достигнуты";
$GLOBALS['strDaysAgo']                = "дней назад";
$GLOBALS['strCampaignStop']           = "Остановка кампании";

// Reports
$GLOBALS['strReports']                = "Отчеты";
$GLOBALS['strPublisherReports']       = "Отчеты сайта";
$GLOBALS['strStartDate']              = "Дата начала";
$GLOBALS['strEndDate']                = "Дата окончания";
$GLOBALS['strPeriod']                 = "Период";
$GLOBALS['strLimitations']            = "Ограничения";
$GLOBALS['strWorksheets']             = "Рабочие листы";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Все клиенты";
$GLOBALS['strAnonAdvertisers']           = "Анонимные рекламодатели";
$GLOBALS['strAllPublishers']             = "Все сайты";
$GLOBALS['strAnonPublishers']            = "Анонимные сайты";
$GLOBALS['strAllAvailZones']             = "Все доступные зоны";

// Userlog
$GLOBALS['strUserLog']                = "Журнал действий пользователя";
$GLOBALS['strUserLogDetails']        = "Подробности действий пользователя";
$GLOBALS['strDeleteLog']            = "Удалить журнал";
$GLOBALS['strAction']                = "Действие";
$GLOBALS['strNoActionsLogged']        = "Действий не зарегистрировано";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Сгенерировать баннерный код";
$GLOBALS['strChooseInvocationType']        = "Пожалуйста, выберите тип вызова баннера";
$GLOBALS['strGenerate']                    = "Сгенерировать";
$GLOBALS['strParameters']                = "Настройки метки";
$GLOBALS['strFrameSize']                = "Размер фрейма";
$GLOBALS['strBannercode']                = "Баннерный код";
$GLOBALS['strTrackercode']                = "Код трекера";
$GLOBALS['strBackToTheList']            = "Вернуться к списку отчетов";
$GLOBALS['strCharset']                  = "Кодировка";
$GLOBALS['strAutoDetect']                   = "Автоопределение";


// Errors
$GLOBALS['strMySQLError']                       = "Ошибка MySQL:";
$GLOBALS['strErrorDatabaseConnetion']           = "Ошибка подключения к базе данных.";
$GLOBALS['strErrorCantConnectToDatabase']       = "Произошла фатальная ошибка %s не могу подключиться к базе данных. Из-за этого невозможно использовать интерфейс администратора. Доставка баннеров также может быть затронута. Возможными причинами этой проблемы являются: <ul> <li>сервер базы данных не функционирует в данный момент</li><li>место расположения базы данных на сервере изменился</li><li>имя пользователя или пароль, используемый для связи с сервером базы данных не правильны</li><li>в PHP не загружается MySQL модуль соединения</li></uL>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] ошибка доступа к базе данных информации о клиентах.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Ошибка доступа к БД баннеров.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Ошибка доступа к БД показов.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Ошибка доступа к БД кликов.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Ошибка доступа к БД действий.";
$GLOBALS['strErrorViews']                       = "Вы должны ввести число показов или выбрать 'Не ограничено' !";
$GLOBALS['strErrorNegViews']                    = "Отрицательное число показов не разрешено";
$GLOBALS['strErrorClicks']                      = "Вы должны ввести число кликов или выбрать 'Не ограничено' !";
$GLOBALS['strErrorNegClicks']                   = "Отрицательное число кликов не разрешено";
$GLOBALS['strNoMatchesFound']                   = "Ничего не найдено";
$GLOBALS['strErrorOccurred']                    = "Произошла ошибка";
$GLOBALS['strErrorUploadSecurity']              = "Обнаружена возможная проблема с безопасностью, загрузка остановлена!";
$GLOBALS['strErrorUploadBasedir']               = "Загруженный файл недоступен, вероятно, в результате действия safe_mode или ограничений open_basedir";
$GLOBALS['strErrorUploadUnknown']               = "Не могу получить доступ к загруженному файлу по неизвестной причине. Пожалуйста, проверьте настройки PHP!";
$GLOBALS['strErrorStoreLocal']                  = "Во время попытки сохранения баннера в локальном каталоге произошла ошибка. Вероятно, это результат неверного указания пути к локальному каталогу";
$GLOBALS['strErrorStoreFTP']                    = "Во время попытки загрузки баннера на FTP-сервер произошла ошибка. Это может быть из-за того, что сервер недоступен, или из-за неправильной настройки его параметров";
$GLOBALS['strErrorDBPlain']                     = "Ошибка доступа к БД";
$GLOBALS['strErrorDBSerious']                   = "Обнаружена серьезная проблема с БД";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "Возможно, БД повреждена и нуждается в починке. Для дополнительной информации о починке поврежденных таблиц БД прочтите раздел <i>Устранение неполадок</i> в <i>Руководстве Администратора</i>";
$GLOBALS['strErrorDBContact']                   = "Свяжитесь с администратором сервера и сообщите ему о проблеме";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorLinkingBanner']               = "Невозможно привязать выбранный баннер к этой зоне, т.к.:";
$GLOBALS['strUnableToLinkBanner']               = "Невозможно привязать выбранный баннер:";
$GLOBALS['strErrorEditingCampaign']             = "Ошибка при обновлении кампании:";
$GLOBALS['strUnableToChangeCampaign']           = "Невозможно сохранить изменения, т.к.:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "некорректный формат в поле Информация об оплате";
$GLOBALS['strErrorEditingZone']                 = "Ошибка обновления зоны:";
$GLOBALS['strUnableToChangeZone']               = "Невозможно сохранить изменения, т.к.:";
$GLOBALS['strDatesConflict']                    = "дата конфликтует с:";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Часть статистики была собрана в не-UTC часовом поясе, и не может быть отображена при использовании корректного часового пояса.";
$GLOBALS['strWarningInaccurateReadMore']        = "Узнать больше";
$GLOBALS['strWarningInaccurateReport']          = "Часть статистики была собрана в не-UTC часовом поясе, и не может быть отображена при использовании корректного часового пояса.";

//Validation
$GLOBALS['strRequiredField']                    = "Обязательные поля";


// Email
$GLOBALS['strSirMadam']                         = "Г-н/Г-жа";
$GLOBALS['strMailSubject']                      = "Отчёт о рекламе";
$GLOBALS['strAdReportSent']                     = "Отчет о рекламе выслан";
$GLOBALS['strMailHeader']                       = "Дорогой {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Здесь вы видите статистику клиента {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Кампания активирована";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Кампания деактивирована";
$GLOBALS['strMailBannerActivated']              = "Указанные кампании были активированы, т.к.";
$GLOBALS['strMailBannerDeactivated']            = "Указанные кампании были деактивированы, т.к.";
$GLOBALS['strMailFooter']                       = "с наилучшими пожеланиями,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Ваши баннеры бли выключены, так как";
$GLOBALS['strMailNothingLeft']                  = "Если бы вы хотели продолжать размещать рекламу на нашем сайте, пожалуйста, свяжитесь с нами.";
$GLOBALS['strClientDeactivated']                = "Данный клиент в настоящее время деактивирован, так как";
$GLOBALS['strBeforeActivate']                   = "дата активации еще не достигнута";
$GLOBALS['strAfterExpire']                      = "была достигнута дата деактивации";
$GLOBALS['strNoMoreImpressions']                = "все приобретенные показы использованы";
$GLOBALS['strNoMoreClicks']                     = "все приобретенные клики использованы";
$GLOBALS['strNoMoreConversions']                = "все приобретенные действия использованы";
$GLOBALS['strWeightIsNull']                     = "был установлен нулевой вес";
$GLOBALS['strTargetIsNull']                     = "был установлен нулевой таргетинг";
$GLOBALS['strWarnClientTxt']                    = "Количество действий, кликов или показов для ваших баннеров скоро станет меньше {limit}. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Показы, клики или действия заканчиваются";
$GLOBALS['strNoViewLoggedInInterval']           = "За период данного отчета не было зарегистрировано показов";
$GLOBALS['strNoClickLoggedInInterval']          = "За период данного отчета не было зарегистрировано кликов";
$GLOBALS['strNoConversionLoggedInInterval']     = "За период данного отчета не было зарегистрировано действий";
$GLOBALS['strMailReportPeriod']                 = "Этот отчет включает в себя статистику с {startdate} по {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Этот отчет включает в себя всю статистику вплоть до {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Нет статистики для этой кампании";
$GLOBALS['strImpendingCampaignExpiry']          = "Приближается окончание запланированной кампании";
$GLOBALS['strYourCampaign']                     = "Ваша кампания";
$GLOBALS['strTheCampiaignBelongingTo']          = "Кампания, принадлежащая";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} указанному ниже, заканчивается {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} указанному ниже, осталось меньше {limit} показов";
$GLOBALS['strImpendingCampaignExpiryBody']      = "В результате чего кампания скоро будет автоматически отключена, и";

// Priority
$GLOBALS['strPriority']                         = "Приоритет";
$GLOBALS['strSourceEdit']                       = "Редактировать источники";

// Preferences
$GLOBALS['strPreferences']                      = "Настройки";
$GLOBALS['strUserPreferences']                  = "Предпочтения пользователя";
$GLOBALS['strChangePassword']                   = "Сменить пароль";
$GLOBALS['strChangeEmail']                      = "Сменить e-mail";
$GLOBALS['strCurrentPassword']                  = "Текущий пароль";
$GLOBALS['strChooseNewPassword']                = "Новый пароль";
$GLOBALS['strReenterNewPassword']               = "Подтвердите пароль";
$GLOBALS['strNameLanguage']                     = "Имя и Язык";
$GLOBALS['strAccountPreferences']               = "Настройки аккаунта";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Настройки доставки отчетов";
$GLOBALS['strAdminEmailWarnings']               = "Предупреждения администратора";
$GLOBALS['strAgencyEmailWarnings']              = "Предупреждения агентства";
$GLOBALS['strAdveEmailWarnings']                = "Предупреждения клиента";
$GLOBALS['strFullName']                         = "ФИО";
$GLOBALS['strUserDetails']                      = "Данные пользователя";
$GLOBALS['strLanguageTimezone']                 = "Язык и часовой пояс";
$GLOBALS['strLanguageTimezonePreferences']      = "Настройки языка и часового пояса";
$GLOBALS['strUserInterfacePreferences']         = "Настройки GUI";
$GLOBALS['strPluginPreferences']                = "Главные настройки";
$GLOBALS['strInvocationPreferences']            = "Настройки вызова баннеров";
$GLOBALS['strColumnName']                       = "имя колонки";
$GLOBALS['strShowColumn']                       = "Показать колонку";
$GLOBALS['strCustomColumnName']                 = "Пользовательское имя колонки";
$GLOBALS['strColumnRank']                       = "Приоритет колонки";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Доход";
$GLOBALS['strNumberOfItems']                       = "Количество элементов";
$GLOBALS['strRevenueCPC']                          = "Доход CPC";
$GLOBALS['strERPM']                                = "ECPM (эффективная цена 1000 показов)";
$GLOBALS['strERPC']                                = "ECPC (эффективная цена клика)";
$GLOBALS['strERPS']                                = "ECPM (эффективная цена 1000 показов)";
$GLOBALS['strEIPM']                                = "EIPM (цена 1000 показов)";
$GLOBALS['strEIPC']                                = "EIPC (цена клика)";
$GLOBALS['strEIPS']                                = "EIPS (цена 1000 показов)";
$GLOBALS['strECPM']                                = "ECPM (эффективная цена 1000 показов)";
$GLOBALS['strECPC']                                = "ECPC (эффективная цена клика)";
$GLOBALS['strECPS']                                = "ECPS (эффективная цена действия)";
$GLOBALS['strPendingConversions']               = "Неизрасходованные действия";
$GLOBALS['strImpressionSR']                     = "Показ (SR)";
$GLOBALS['strClickSR']                          = "Клик (SR)";
$GLOBALS['strActualImpressions']                = "Показов";

    // Short names
$GLOBALS['strRevenue_short']                    = "Доход";
$GLOBALS['strBasketValue_short']                = "Корзина";
$GLOBALS['strNumberOfItems_short']              = "Кол-во поз.";
$GLOBALS['strRevenueCPC_short']                 = "Дох. CPC";
$GLOBALS['strERPM_short']                       = "ECPM (эффективная цена 1000 показов)";
$GLOBALS['strERPC_short']                       = "ECPC (эффективная цена клика)";
$GLOBALS['strERPS_short']                       = "ECPM (эффективная цена 1000 показов)";
$GLOBALS['strEIPM_short']                       = "EIPM (цена 1000 показов)";
$GLOBALS['strEIPC_short']                       = "EIPC (цена клика)";
$GLOBALS['strEIPS_short']                       = "EIPS (цена 1000 показов)";
$GLOBALS['strECPM_short']                       = "ECPM (эффективная цена 1000 показов)";
$GLOBALS['strECPC_short']                       = "ECPC (эффективная цена клика)";
$GLOBALS['strECPS_short']                       = "ECPS (эффективная цена действия)";
$GLOBALS['strRequests_short']                   = "Запр.";
$GLOBALS['strClicks_short']                     = "Кликов";
$GLOBALS['strConversions_short']                = "Конв.";
$GLOBALS['strPendingConversions_short']         = "Неизрасходованные действ.";
$GLOBALS['strClickSR_short']                    = "Клик (SR)";

// Global Settings
$GLOBALS['strGlobalSettings']               = "Общие настройки";
$GLOBALS['strGeneralSettings']              = "Общие установки";
$GLOBALS['strMainSettings']                 = "Главные настройки";
$GLOBALS['strAdminSettings']                = "Административные настройки";


// Product Updates
$GLOBALS['strProductUpdates']         = "Обновление ПО";
$GLOBALS['strViewPastUpdates']        = "Управление обновлениями и резервными копиями";
$GLOBALS['strFromVersion']            = "С версии";
$GLOBALS['strToVersion']              = "До версии";
$GLOBALS['strToggleDataBackupDetails']= "Показать/спрятать подробности резервного копирования";
$GLOBALS['strClickViewBackupDetails'] = "нажмите для просмотра подробной информации";
$GLOBALS['strClickHideBackupDetails'] = "нажмите чтобы скрыть подробности";
$GLOBALS['strShowBackupDetails']      = "показать подробную информацию";
$GLOBALS['strHideBackupDetails']      = "скрыть подробную информацию";
$GLOBALS['strInstallation']           = "инсталляция";
$GLOBALS['strBackupDeleteConfirm']    = "Вы действительно хотите удалить все резервные копии созданные со времени обновления?";
$GLOBALS['strDeleteArtifacts']         = "Удалить артефакты";
$GLOBALS['strArtifacts']              = "Артефакты";
$GLOBALS['strBackupDbTables']         = "Копировать таблицы БД";
$GLOBALS['strLogFiles']               = "Журналы регистрации";
$GLOBALS['strConfigBackups']          = "Резервные копии конфигурации";
$GLOBALS['strUpdatedDbVersionStamp']  = "Метка версии обновленной БД";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "Обновление завершено";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "Обновление не удалось";

// Agency
$GLOBALS['strAgencyManagement']              = "Управление учетными записями";
$GLOBALS['strAgency']                      = "Учетная запись";
$GLOBALS['strAgencies']                   = "Учетные записи";
$GLOBALS['strAddAgency']                   = "Добавить новую учетную запись";
$GLOBALS['strAddAgency_Key']               = "Добавить <u>н</u>овую учетную запись";
$GLOBALS['strTotalAgencies']               = "Всего учетных записей";
$GLOBALS['strAgencyProperties']              = "Свойства учетной записи";
$GLOBALS['strNoAgencies']                 = "Сейчас не определено ни одной учетной записи";
$GLOBALS['strConfirmDeleteAgency']           = "Вы действительно хотите удалить эту учетную запись?";
$GLOBALS['strHideInactiveAgencies']          = "Скрыть неактивные учетные записи";
$GLOBALS['strInactiveAgenciesHidden']     = "неактивные учетные записи скрыты";
$GLOBALS['strAllowAgencyEditConversions'] = "Разрешить редактировать действия";
$GLOBALS['strAllowMoreReports']           = "Показать кнопку 'Дополнительные отчеты'";
$GLOBALS['strSwitchAccount']              = "Переключиться в этот аккаунт";

// Channels
$GLOBALS['strChannel']                    = "Канал таргетинга";
$GLOBALS['strChannels']                   = "Каналы таргетинга";
$GLOBALS['strChannelOverview']            = "Обозрение каналов таргетинга";
$GLOBALS['strChannelManagement']          = "Управление каналами таргетинга";
$GLOBALS['strAddNewChannel']              = "Добавить канал таргетинга";
$GLOBALS['strAddNewChannel_Key']          = "Добавить <u>н</u>овый канал таргетинга";
$GLOBALS['strChannelToWebsite']           = "Ни один веб-сайт";
$GLOBALS['strNoChannels']                 = "В настоящее время каналы не определены";
$GLOBALS['strNoChannelsAddWebsite']       = "В настоящее время не определено ни одного веб-сайта. Для создания зоны необходимо сначала<a href='affiliate-edit.php'>создать веб-сайт</a>.";

$GLOBALS['strEditChannelLimitations']     = "Редактировать канал таргетинга";
$GLOBALS['strChannelProperties']          = "Свойства канала таргетинга";
$GLOBALS['strChannelLimitations']         = "Ограничения показа";
$GLOBALS['strConfirmDeleteChannel']       = "Вы действительно хотите удалить этот канал?";
$GLOBALS['strConfirmDeleteChannels']      = "Вы действительно хотите удалить этот канал?";
$GLOBALS['strModifychannel']              = "Добавить канал таргетинга";
$GLOBALS['strChannelsOfWebsite']          = 'в'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Имя переменной";
$GLOBALS['strVariableDescription']     = "Описание";
$GLOBALS['strVariableDataType']         = "Тип данных";
$GLOBALS['strVariablePurpose']       = "Назначение";
$GLOBALS['strGeneric']               = "Простой";
$GLOBALS['strBasketValue']           = "Значение корзины";
$GLOBALS['strNumItems']              = "Количество элементов";
$GLOBALS['strVariableIsUnique']      = "Избегать дублирования действий?";
$GLOBALS['strNumber']                 = "Номер";
$GLOBALS['strString']                 = "Строка";
$GLOBALS['strTrackFollowingVars']     = "Отслеживать за переменной";
$GLOBALS['strAddVariable']             = "Добавить переменную";
$GLOBALS['strNoVarsToTrack']         = "Нет переменных для отслеживания";
$GLOBALS['strVariableHidden']       = "Скрыть переменную для сайтов";
$GLOBALS['strVariableRejectEmpty']  = "Отказаться если пусто?";
$GLOBALS['strTrackingSettings']     = "Настройки отслеживания";
$GLOBALS['strTrackerType']          = "Тип отслеживания";
$GLOBALS['strTrackerTypeJS']        = "Отслеживать значения переменных JavaScript";
$GLOBALS['strTrackerTypeDefault']   = "Отслеживать значения переменных JavaScript (для обратной совместимости необходимо экранирование)";
$GLOBALS['strTrackerTypeDOM']       = "Отслеживать значения переменных, используя DOM";
$GLOBALS['strTrackerTypeCustom']    = "Пользовательский код JS";
$GLOBALS['strVariableCode']         = "Код отслеживания JS";


// Upload conversions
$GLOBALS['strYouHaveNoCampaigns']   = "Клиенты и кампании";


// Password recovery
$GLOBALS['strForgotPassword']         = "Забыли пароль?";
$GLOBALS['strPasswordRecovery']       = "Восстановление пароля";
$GLOBALS['strEmailRequired']          = "Поле \"E-mail\" обязательно для заполнения";
$GLOBALS['strPwdRecEmailSent']        = "Вам отправлено письмо с инструкциями для восстановления пароля";
$GLOBALS['strPwdRecEmailNotFound']    = "Указанный адрес электронной почты не найден";
$GLOBALS['strPwdRecPasswordSaved']    = "Новый пароль сохранен, продолжить <a href='index.php'>вход</a>";
$GLOBALS['strPwdRecWrongId']          = "Неправильный ID";
$GLOBALS['strPwdRecEnterEmail']       = "Введите ваш адрес электронной почты";
$GLOBALS['strPwdRecEnterPassword']    = "Введите ваш новый пароль";
$GLOBALS['strPwdRecReset']            = "Сброс пароля";
$GLOBALS['strPwdRecResetLink']        = "Ссылка для сброса пароля";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Сброс пароля для пользователя";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s восстановление пароля";
$GLOBALS['strNotifyPageMessage']      = "Вам было отправлено письмо, которое позволит сбросить ваш старый пароль и авторизоваться.<br />Подождите несколько минут и проверьте ваш почтовый ящик.<br />Если вы не получите письмо в течение нескольких минут - проверьте вашу папку со СПАМом.<br /><a href='index.php'>Вернуться на страницу авторизации.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "добавить дополнительные элементы";
$GLOBALS['strFor']                    = "для";
$GLOBALS['strHas']                    = "содержит";
$GLOBALS['strAdZoneAsscociation']     = "Ассоциации баннерной зоны";
$GLOBALS['strBinaryData']             = "Двоичные данные";
$GLOBALS['strAuditTrailDisabled']     = "Аудит был отключен администратором. Сообщения аудита больше не фиксируются и не отображаются в журнале аудита.";
$GLOBALS['strAccount']                  = "Учетная запись";
$GLOBALS['strAccountUserAssociation']   = "Привязки учетной записи";
$GLOBALS['strEvent']                    = "Событие";
$GLOBALS['strImage']                    = "Изображение";
$GLOBALS['strCampaignZoneAssociation']      = "Привязки зоны кампании";
$GLOBALS['strAccountPreferenceAssociation'] = "Привязки предпочтений учетной записи";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "За выбранный вами временной интервал не было зафиксировано никакой активности.";
$GLOBALS['strAuditTrail']             = "Аудит изменений";
$GLOBALS['strAuditTrailSetup']          = "Настроить аудит изменений сегодня";
$GLOBALS['strAuditTrailGoTo']           = "Перейти на страницу аудита изменений";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Перейти на стр. кампании";
$GLOBALS['strCampaignSetUp']            = "Настроить кампанию сегодня";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>У вас нет активных кампаний.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "В выбранный вами период ни одна кампания не стартовала и не закончилась";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>Чтобы видеть, какие кампании стартовали или финишировали в заданный вами период, необходимо активировать аудит изменений.</li><li>Усли вы видите это сообщение - значит вы еще не активировали аудит изменений.</li>";
$GLOBALS['strCampaignAuditTrailSetup']   = "Активируйте аудит для начала отображения кампаний";

$GLOBALS['strUnsavedChanges']       = "У вас есть несохраненные изменения. Не забудьте нажать кнопку \"Сохранить\" когда закончите редактирование";
$GLOBALS['strDeliveryLimitationsDisagree'] = "ВНИМАНИЕ: Ограничения движка доставки <strong>НЕ СОГЛАСУЮТСЯ</strong> с ограничениями, показанными ниже.<br />Нажмите кнопку Сохранить для обновления правил движка доставки.";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Некоторые из ограничений доставки сообщений, содержат неправильные значения:";

//confirmation messages











/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "П";
$GLOBALS['keyCollapseAll']    = "З";
$GLOBALS['keyExpandAll']    = "Р";
$GLOBALS['keyAddNew']        = "н";
$GLOBALS['keyNext']            = "С";
$GLOBALS['keyPrevious']        = "П";

// Market entities

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Арабский";
$GLOBALS['str_bg']                  = "Болгарский";
$GLOBALS['str_cs']                  = "Чешский";
$GLOBALS['str_cy']                  = "Валлийский";
$GLOBALS['str_da']                  = "Датский";
$GLOBALS['str_de']                  = "Немецкий";
$GLOBALS['str_el']                  = "Греческий";
$GLOBALS['str_en']                  = "Английский";
$GLOBALS['str_es']                  = "Испанский";
$GLOBALS['str_fa']                  = "Фарси";
$GLOBALS['str_fr']                  = "Французский";
$GLOBALS['str_he']                  = "Иврит";
$GLOBALS['str_hr']                  = "Хорватский";
$GLOBALS['str_hu']                  = "Венгерский";
$GLOBALS['str_id']                  = "Индонезийский";
$GLOBALS['str_it']                  = "Итальянский";
$GLOBALS['str_ja']                  = "Японский";
$GLOBALS['str_ko']                  = "Корейский";
$GLOBALS['str_lt']                  = "Литовский";
$GLOBALS['str_ms']                  = "Малайский";
$GLOBALS['str_nb']                  = "Норвежская букмол";
$GLOBALS['str_nl']                  = "Голландский";
$GLOBALS['str_pl']                  = "Польский";
$GLOBALS['str_ro']                  = "Румынский";
$GLOBALS['str_ru']                  = "Русский";
$GLOBALS['str_sk']                  = "Словацкий";
$GLOBALS['str_sl']                  = "Словенский";
$GLOBALS['str_sv']                  = "Шведский";
$GLOBALS['str_tr']                  = "Турецкий";
$GLOBALS['str_uk']                  = "Украинский";

?>
