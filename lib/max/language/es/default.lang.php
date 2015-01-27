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
$GLOBALS['phpAds_TextDirection']        = "ltr";
$GLOBALS['phpAds_TextAlignRight']       = "right";
$GLOBALS['phpAds_TextAlignLeft']        = "left";
$GLOBALS['phpAds_CharSet']              = "UTF-8";

$GLOBALS['phpAds_DecimalPoint']         = ".";
$GLOBALS['phpAds_ThousandsSeperator']   = ",";

// Date & time configuration
$GLOBALS['date_format']                 = "%d/%m/%Y";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m/%Y";
$GLOBALS['day_format']                  = "%d/%m";
$GLOBALS['week_format']                 = "%W/%Y";
$GLOBALS['weekiso_format']              = "%V/%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Inicio";
$GLOBALS['strHelp']                     = "Ayuda";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Comenzar de nuevo";
$GLOBALS['strNavigation']               = "Navegación";
$GLOBALS['strShortcuts']                = "Atajos";
$GLOBALS['strActions']                  = "Acción";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Inventario";
$GLOBALS['strMaintenance']              = "Mantenimiento";
$GLOBALS['strProbability']              = "Probabilidad";
$GLOBALS['strInvocationcode']           = "Código de invocación";
$GLOBALS['strTrackerVariables']         = "Variables de Tracker";
$GLOBALS['strBasicInformation']         = "Informaci&oacute;n B&aacute;sica";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contraer información";
$GLOBALS['strLoginInformation']         = "Información de autenticación";
$GLOBALS['strLogoutURL']                = "URL de destino en cierre de sesión. <br /> Dejar en blanco para valor por defecto";
$GLOBALS['strAppendTrackerCode']        = "Añadir código de tracker";
$GLOBALS['strOverview']                 = "Resumen";
$GLOBALS['strSearch']                   = "<u>B</u>uscar";
$GLOBALS['strHistory']                  = "Historial";
$GLOBALS['strDetails']                  = "Detalles";
$GLOBALS['strUpdateSettings']           = "Configuración de Actualizaciones";
$GLOBALS['strCheckForUpdates']          = "Comprobar actualizaciones";
$GLOBALS['strWhenCheckingForUpdates']   = "Al comprobar si hay actualizaciones";
$GLOBALS['strCompact']                  = "Compactar";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "Usuario";
$GLOBALS['strEdit']                     = "Editar";
$GLOBALS['strCreate']                   = "Crear";
$GLOBALS['strDuplicate']                = "Duplicado";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Mover a";
$GLOBALS['strDelete']                   = "Borrar";
$GLOBALS['strActivate']                 = "Activar";
$GLOBALS['strDeActivate']               = "Desactivar";
$GLOBALS['strConvert']                  = "Convertir";
$GLOBALS['strRefresh']                  = "Actualizar";
$GLOBALS['strSaveChanges']              = "Guardar Cambios";
$GLOBALS['strUp']                       = "Arriba";
$GLOBALS['strDown']                     = "Abajo";
$GLOBALS['strSave']                     = "Guardar";
$GLOBALS['strCancel']                   = "Cancelar";
$GLOBALS['strBack']                     = "Atrás";
$GLOBALS['strPrevious']                 = "Anterior";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Siguiente";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Sí";
$GLOBALS['strNo']                       = "No";
$GLOBALS['strNone']                     = "Nada";
$GLOBALS['strCustom']                   = "Común";
$GLOBALS['strDefault']                  = "Predeterminado";
$GLOBALS['strOther']                    = "Otro";
$GLOBALS['strUnknown']                  = "Desconocido";
$GLOBALS['strUnlimited']                = "Ilimitado";
$GLOBALS['strUntitled']                 = "Sin título";
$GLOBALS['strAll']                      = "todo";
$GLOBALS['strAvg']                      = "Prom.";
$GLOBALS['strAverage']                  = "Promedio";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "General";
$GLOBALS['strTotal']                    = "Total";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "activo";
$GLOBALS['strFrom']                     = "De";
$GLOBALS['strTo']                       = "a";
$GLOBALS['strAdd']                      = "Agregar";
$GLOBALS['strLinkedTo']                 = "relacionado con";
$GLOBALS['strDaysLeft']                 = "Días restantes";
$GLOBALS['strCheckAllNone']             = "Marcar todo / nada";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>E</u>xpandir todo";
$GLOBALS['strCollapseAll']              = "<u>C</u>ontraer todo";
$GLOBALS['strShowAll']                  = "Ver todo";
$GLOBALS['strNoAdminInterface']         = "La pantalla de administración está desactivada por mantenimiento. Esto no afecta la entrega de campañas.";
$GLOBALS['strFilterBySource']           = "filtrar por fuente";
$GLOBALS['strFieldStartDateBeforeEnd']  = "La fecha 'Desde' debe ser anterior a la fecha 'Hasta'";
$GLOBALS['strFieldContainsErrors']      = "Los siguientes campos contienen errores:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Antes de continuar necesita";
$GLOBALS['strFieldFixBeforeContinue2']  = "corregir estos errores.";
$GLOBALS['strDelimiter']                = "Delimitador";
$GLOBALS['strMiscellaneous']            = "Miscelánea";
$GLOBALS['strCollectedAllStats']        = "Todas las estadísticas";
$GLOBALS['strCollectedToday']           = "Hoy";
$GLOBALS['strCollectedYesterday']       = "Ayer";
$GLOBALS['strCollectedThisWeek']        = "Esta semana";
$GLOBALS['strCollectedLastWeek']        = "La semana pasada";
$GLOBALS['strCollectedThisMonth']       = "Este mes";
$GLOBALS['strCollectedLastMonth']       = "El mes pasado";
$GLOBALS['strCollectedLast7Days']       = "Últimos 7 días";
$GLOBALS['strCollectedSpecificDates']   = "Fechas específicas";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "Admin";
$GLOBALS['strWarning']                  = "Warning";
$GLOBALS['strNotice']                   = "Atención";
$GLOBALS['strRequiredField']            = "Campo requerido";
$GLOBALS['strCloseWindow']              = "Close window";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "The dashboard can not be displayed";
$GLOBALS['strNoCheckForUpdates']        = "The dashboard cannot be displayed unless the<br />check for updates setting is enabled.";
$GLOBALS['strEnableCheckForUpdates']    = "Please enable the <a href='account-settings-update.php' target='_top'>check for updates</a> setting on the<br/><a href='account-settings-update.php' target='_top'>update settings</a> page.";
$GLOBALS['strChoosenDisableHomePage']   = "Ha escogido deshabilitar su Página Principal.";
$GLOBALS['strAccessHomePage']           = "Haga clic aquí para acceder a su Página Principal";
$GLOBALS['strEditSyncSettings']         = "y editar sus configuraciones de sincronización";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "código";
$GLOBALS['strDashboardSystemMessage']   = "Mensaje del sistema";
$GLOBALS['strDashboardErrorHelp']       = "Si este error se ha repetido por favor describa detalladamente el problema y publicalo en <a href='http://forum.openx.org/'>OpenX forum</a>. ";

// Priority
$GLOBALS['strPriority']                 = "Prioridad";
$GLOBALS['strPriorityLevel']            = "Nivel de prioridad";
$GLOBALS['strPriorityTargeting']        = "Distribución";
$GLOBALS['strPriorityOptimisation']     = "Miscelánea"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Publicidades con contrato";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Publicidades remanentes";
$GLOBALS['strLimitations']              = "Limitaciones";
$GLOBALS['strNoLimitations']            = "Sin limitaciones";
$GLOBALS['strCapping']                  = "Límites";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Nombre";
$GLOBALS['strSize']                     = "Tamaño";
$GLOBALS['strWidth']                    = "Ancho";
$GLOBALS['strHeight']                   = "Alto";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Target";
$GLOBALS['strLanguage']                 = "Idioma";
$GLOBALS['strDescription']              = "Descripción";
$GLOBALS['strVariables']                = "Variables";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Comentarios";

// User access
$GLOBALS['strWorkingAs']                = "Trabajando como";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Trabajando como";
$GLOBALS['strSwitchTo']                 = "Cambiar a";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s para…";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Agregar usuario";
$GLOBALS['strLinkUser_Key']             = "Agregar <u>u</u>suario";
$GLOBALS['strUsernameToLink']           = "Nombre de usuario del usuario a agregar";
$GLOBALS['strEmailToLink']              = "E-mail del usuario a agregar";
$GLOBALS['strNewUserWillBeCreated']     = "Se creará un nuevo usuario";
$GLOBALS['strToLinkProvideEmail']       = "Para agregar un usuario, indique el e-mail del usuario";
$GLOBALS['strToLinkProvideUsername']    = "Para agregar un usuario, indique el nombre de usuario";
$GLOBALS['strErrorWhileCreatingUser']   = "Error al crear usuario: %s";
$GLOBALS['strUserLinkedToAccount']      = "Usuario agregado a la cuenta";
$GLOBALS['strUserAccountUpdated']       = "Cuenta de usuario actualizada";
$GLOBALS['strUserUnlinkedFromAccount']  = "Usuario eliminado de la cuenta";
$GLOBALS['strUserWasDeleted']           = "Usuario ha sido borrado";
$GLOBALS['strUserNotLinkedWithAccount'] = "El usuario no está asignado a la cuenta";
$GLOBALS['strCantDeleteOneAdminUser']   = "No puede borrar el usuario. Almenos un usuario necesita estar asignado a la cuenta de admin.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Nombre de usuario";
$GLOBALS['strLinkUserHelpEmail']        = "Dirección e-mail";
$GLOBALS['strLastLoggedIn']             = "Último registro de ingreso";
$GLOBALS['strDateLinked']               = "Fecha enlazada";
$GLOBALS['strUnlink']                   = "Remover";
$GLOBALS['strUnlinkingFromLastEntity']  = "Remover usuario desde la última entidad";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Remover el usuario desde la última entidad puede causar que el usuario sea borrado. ¿Quiere eliminar este usuario?";
$GLOBALS['strUnlinkAndDelete']          = "Remover &amp; eliminar usuario";
$GLOBALS['strUnlinkUser']               = "Remover usuario";
$GLOBALS['strUnlinkUserConfirmBody']    = "¿Está seguro de querer remover este usuario?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Acceso de usuario";
$GLOBALS['strAdminAccess']              = "Acceso de administrador";
$GLOBALS['strUserProperties']           = "Propiedades de usuario";
$GLOBALS['strLinkNewUser']              = "Asignar nuevo usuario";
$GLOBALS['strPermissions']              = "Permisos";
$GLOBALS['strAuthentification']         = "Autenticación";
$GLOBALS['strWelcomeTo']                = "Bienvenido a";
$GLOBALS['strEnterUsername']            = "Introduzca su nombre de usuario y contraseña para entrar";
$GLOBALS['strEnterBoth']                = "Por favor, introduzca ambos, nombre de usuario y contraseña";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Error de cookie de sesión, por favor ingrese de nuevo.";
$GLOBALS['strLogin']                    = "Iniciar sesión";
$GLOBALS['strLogout']                   = "Cerrar sesión";
$GLOBALS['strUsername']                 = "Nombre de usuario";
$GLOBALS['strPassword']                 = "Contraseña";
$GLOBALS['strPasswordRepeat']           = "Repetir contraseña";
$GLOBALS['strAccessDenied']             = "Acceso denegado";
$GLOBALS['strUsernameOrPasswordWrong']  = "El nombre de usuario y/o la contraseña no son correctos. Por favor, inténtelo de nuevo.";
$GLOBALS['strPasswordWrong']            = "La contraseña no es correcta.";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Puede que no tenga suficientes privilegios; si conoce los datos de usuario correctos, puede iniciar sesión a continuación";
$GLOBALS['strDuplicateClientName']      = "El nombre de usuario que ha facilitado ya existe, por favor use un nombre de usuario diferente.";
$GLOBALS['strDuplicateAgencyName']      = "El nombre de usuario que ha facilitado ya existe, por favor use un nombre de usuario diferente.";
$GLOBALS['strInvalidPassword']          = "The new password is invalid, please use a different password.";
$GLOBALS['strInvalidEmail']             = "El formato de esta dirección de e-mail no es válido, por favor introduzca una dirección de e-mail válida.";
$GLOBALS['strNotSamePasswords']         = "The two passwords you supplied are not the same";
$GLOBALS['strRepeatPassword']           = "Repeat Password";
$GLOBALS['strOldPassword']              = "Old Password";
$GLOBALS['strNewPassword']              = "New Password";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Su enlace es inválido.";
$GLOBALS['strNoPlacement']              = "La campaña seleccionada no existe. Intente con este <a href='{link}'>enlace</a> en lugar del otro";
$GLOBALS['strNoAdvertiser']             = "El anunciante seleccionado no existe. Intente con este <a href='{link}'>enlace</a> en lugar del otro";

// General advertising
$GLOBALS['strRequests']                 = "Peticiones";
$GLOBALS['strImpressions']              = "Impresiones";
$GLOBALS['strClicks']                   = "Clics";
$GLOBALS['strConversions']              = "Conversiones";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Promedio de ventas";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total de Impresiones";
$GLOBALS['strTotalClicks']              = "Clics totales";
$GLOBALS['strTotalConversions']         = "Conversiones totales";
$GLOBALS['strViewCredits']              = "Créditos de impresiones";
$GLOBALS['strClickCredits']             = "Créditos de clics";
$GLOBALS['strConversionCredits']        = "Créditos de conversión";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Fecha y hora";
$GLOBALS['strTrackerID']                = "ID Tracker";
$GLOBALS['strTrackerName']              = "Nombre del Tracker";
$GLOBALS['strTrackerImageTag']          = "Tag de Imagen";
$GLOBALS['strTrackerJsTag']             = "Tag de Javascript";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Banners";
$GLOBALS['strCampaigns']                = "Campañas";
$GLOBALS['strCampaignID']               = "ID Campaña";
$GLOBALS['strCampaignName']             = "Nombre de la Campaña";
$GLOBALS['strCountry']                  = "País";
$GLOBALS['strStatsAction']              = "Acción";
$GLOBALS['strWindowDelay']              = "Retardo de Ventana";
$GLOBALS['strStatsVariables']           = "Variables";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Alquiler mensual";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% de recorte de ganancias";
$GLOBALS['strPercentBasketValue']       = "% Valor de cesta";
$GLOBALS['strAmountPerItem']            = "Monto por item";
$GLOBALS['strPercentCustomVariable']    = "% Variable Personalizada";
$GLOBALS['strPercentSumVariables']      = "% Suma de Variables";

// Time and date related
$GLOBALS['strDate']                     = "Fecha";
$GLOBALS['strToday']                    = "Hoy";
$GLOBALS['strDay']                      = "Día";
$GLOBALS['strDays']                     = "Días";
$GLOBALS['strLast7Days']                = "Últimos 7 días";
$GLOBALS['strWeek']                     = "Semana";
$GLOBALS['strWeeks']                    = "Semanas";
$GLOBALS['strSingleMonth']              = "Mes";
$GLOBALS['strMonths']                   = "Meses";
$GLOBALS['strDayOfWeek']                = "Día de la semana";
$GLOBALS['strThisMonth']                = "Este Mes";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Hora";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "segundos";
$GLOBALS['strMinutes']                  = "minutos";
$GLOBALS['strHours']                    = "horas";
$GLOBALS['strTimes']                    = "veces";

// Advertiser
$GLOBALS['strClient']                       = "Anunciante";
$GLOBALS['strClients']                      = "Anunciantes";
$GLOBALS['strClientsAndCampaigns']          = "Anunciantes & Campañas";
$GLOBALS['strAddClient']                    = "Agregar nuevo anunciante";
$GLOBALS['strAddClient_Key']                = "Agregar <u>n</u>uevo anunciante";
$GLOBALS['strTotalClients']                 = "Anunciantes totales";
$GLOBALS['strClientProperties']             = "Propiedades del anunciante";
$GLOBALS['strClientHistory']                = "Historial del anunciante";
$GLOBALS['strNoClients']                    = "No hay actualmente anunciantes definidos . Para crear una campaña, <a href='advertiser-edit.php'>agregue un anunciante</a> primero.";
$GLOBALS['strNoClientsForBanners']          = "No hay actualmente anunciantes definidos . Para crear una campaña, <a href='advertiser-edit.php'>agregue un anunciante</a> primero.";
$GLOBALS['strConfirmDeleteClient']          = "Está seguro de querer borrar este anunciante?";
$GLOBALS['strConfirmDeleteClients']         = "Está seguro de querer borrar este anunciante?";
$GLOBALS['strConfirmResetClientStats']      = "Está seguro de querer borrar todas las estadísticas de este Anunciante?";
$GLOBALS['strSite']                         = "Tamaño";
$GLOBALS['strHideInactive']                 = "Hide inactive";
$GLOBALS['strHideInactiveAdvertisers']      = "Ocultar anunciantes inactivos";
$GLOBALS['strInactiveAdvertisersHidden']    = "anunciante(s) inactivo(s) oculto(s)";
$GLOBALS['strOverallAdvertisers']           = "anunciante(s)";
$GLOBALS['strAdvertiserSignup']             = "Alta de anunciante";
$GLOBALS['strAdvertiserSignupDesc']         = "Regístrese para disponer de autoservicio de anunciante y pagos";
$GLOBALS['strAdvertiserSignupLink']         = "Enlace de Alta de Anunciante";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "Para agregar un link de Alta de Anunciante a tu sitio web, por favor copia el código HTML de abajo:";
$GLOBALS['strAdvertiserSignupOption']       = "Opción de Alta de Anunciante";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "Para editar tus opciones de Alta de Anunciante, vaya a";
$GLOBALS['strAdvertiserCampaigns']          = "Anunciantes & Campañas";
// Advertisers properties
$GLOBALS['strContact']                          = "Contacto";
$GLOBALS['strContactName']                      = "Nombre de contacto";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "caracteres";
$GLOBALS['strSendAdvertisingReport']            = "Enviar informes de entrega de campañas vía email";
$GLOBALS['strNoDaysBetweenReports']             = "Número de días entre informes de entrega de campañas";
$GLOBALS['strSendDeactivationWarning']          = "Enviar un Alerta cuando una campaña sea desactivada automáticamente";
$GLOBALS['strAllowClientModifyInfo']            = "Permitir a este usuario modificar sus propiedades";
$GLOBALS['strAllowClientModifyBanner']          = "Permitir a este usuario modificar sus propios banners";
$GLOBALS['strAllowClientAddBanner']             = "Permitir a este usuario agregar sus propios banners";
$GLOBALS['strAllowClientDisableBanner']         = "Permitir a este usuario desactivar sus propios banners";
$GLOBALS['strAllowClientActivateBanner']        = "Permitir a este usuario activar sus propios banners";
$GLOBALS['strAllowClientViewTargetingStats']    = "Permitir a este usuario ver estadísticas de targeting";
$GLOBALS['strAllowCreateAccounts']              = "Permitir a este usuario crear cuentas nuevas";
$GLOBALS['strCsvImportConversions']             = "Permitir a este usuario importar conversiones offline";
$GLOBALS['strAdvertiserLimitation']             = "Mostrar sólo un banner de este anunciante en una misma página web";
$GLOBALS['strAllowAuditTrailAccess']            = "Permitir a este usuario acceder al audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "Campaña";
$GLOBALS['strCampaigns']                    = "Campañas";
$GLOBALS['strOverallCampaigns']             = "campaña(s)";
$GLOBALS['strTotalCampaigns']               = "Campañas totales";
$GLOBALS['strActiveCampaigns']              = "Campañas activas";
$GLOBALS['strAddCampaign']                  = "Agregar nueva campaña";
$GLOBALS['strAddCampaign_Key']              = "Agregar <u>n</u>ueva campaña";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Crear Nueva Campaña";
$GLOBALS['strModifyCampaign']               = "Modificar campaña";
$GLOBALS['strMoveToNewCampaign']            = "Mover a una nueva Campaña";
$GLOBALS['strBannersWithoutCampaign']       = "Banners sin una Campaña";
$GLOBALS['strDeleteAllCampaigns']           = "Borrar todas las campañas";
$GLOBALS['strLinkedCampaigns']              = "Campañas enlazadas";
$GLOBALS['strCampaignStats']                = "Estadísticas de Campaña";
$GLOBALS['strCampaignProperties']           = "Propiedades de la campaña";
$GLOBALS['strCampaignOverview']             = "Resumen de campañas";
$GLOBALS['strCampaignHistory']              = "Historial de la campaña";
$GLOBALS['strNoCampaigns']                  = "No hay campañas definidas";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "¿Está seguro de querer borrar todas las campañas de este anunciante?";
$GLOBALS['strConfirmDeleteCampaign']        = "¿Está seguro de querer borrar esta campaña?";
$GLOBALS['strConfirmDeleteCampaigns']       = "¿Está seguro de querer borrar esta campaña?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Mostrar anunciantes superiores";
$GLOBALS['strHideParentAdvertisers']        = "Ocultar anunciantes superiores";
$GLOBALS['strHideInactiveCampaigns']        = "Ocultar campañas inactivas";
$GLOBALS['strInactiveCampaignsHidden']      = "campaña(s) inactiva(s) oculta(s)";
$GLOBALS['strContractDetails']              = "Detalles de contrato";
$GLOBALS['strInventoryDetails']             = "Detalles de inventario";
$GLOBALS['strPriorityInformation']          = "Prioridad en relación a otras campañas";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Campaña";
$GLOBALS['strHiddenAd']                     = "Anuncio";
$GLOBALS['strHiddenAdvertiser']             = "Anunciante";
$GLOBALS['strHiddenTracker']                = "Tracker";
$GLOBALS['strHiddenWebsite']              = "Página web";
$GLOBALS['strHiddenZone']                   = "Zona";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Mostrar compañeros (No mostrar banners de esta campaña junto a banners de otras campañas)";
$GLOBALS['strSelectUnselectAll']            = "Seleccionar / Deseleccionar todo";
$GLOBALS['strConfirmOverwrite']             = "Saving these changes will overwrite any individual banner-zone links. Are you sure?";
$GLOBALS['strCampaignsOfAdvertiser']        = "of"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie']           = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns']    = "Calculated for all campaigns";
$GLOBALS['strCalculatedForThisCampaign']    = "Calculated for this campaign";
$GLOBALS['strLinkingZonesProblem']          = "Problem occurred when linking zones";
$GLOBALS['strUnlinkingZonesProblem']        = "Problem occurred when unlinking zones";
$GLOBALS['strZonesLinked']                  = "zone(s) linked";
$GLOBALS['strZonesUnlinked']                = "zone(s) unlinked";
$GLOBALS['strZonesSearch']                  = "Search";
$GLOBALS['strZonesSearchTitle']             = "Search zones and websites by name";
$GLOBALS['strNoWebsitesAndZones']           = "No websites and zones";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "in category";
$GLOBALS['strNoWebsitesAndZonesText']       = "with \"%s\" in name";
$GLOBALS['strToLink']                       = "to link";
$GLOBALS['strToUnlink']                     = "to unlink";
$GLOBALS['strLinked']                       = "Linked";
$GLOBALS['strAvailable']                    = "Available";
$GLOBALS['strShowing']                      = "Showing";
$GLOBALS['strAllCategories']                = "all categories";
$GLOBALS['strUncategorized']                = "Uncategorized";
$GLOBALS['strEditZone']                     = "Edit zone";
$GLOBALS['strEditWebsite']                  = "Edit website";


// Campaign properties
$GLOBALS['strDontExpire']                       = "No expirar";
$GLOBALS['strActivateNow']                      = "Activar inmediatamente";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Bajo";
$GLOBALS['strHigh']                             = "Alto";
$GLOBALS['strExpirationDate']                   = "Fecha de finalización";
$GLOBALS['strExpirationDateComment']            = "La campaña expirará al final del día";
$GLOBALS['strActivationDate']                   = "Fecha de inicio";
$GLOBALS['strActivationDateComment']            = "La campaña comenzará al principio del día";
$GLOBALS['strRevenueInfo']                      = "Información de ingresos";
$GLOBALS['strTotalRevenue']                     = "Facturación total";
$GLOBALS['strImpressionsRemaining']             = "Impresiones restantes";
$GLOBALS['strClicksRemaining']                  = "Clics restantes";
$GLOBALS['strConversionsRemaining']             = "Conversiones restantes";
$GLOBALS['strImpressionsBooked']                = "Impresiones contratadas";
$GLOBALS['strClicksBooked']                     = "Clics contratados";
$GLOBALS['strConversionsBooked']                = "Conversiones contratadas";
$GLOBALS['strCampaignWeight']                   = "Fijar el peso de la campaña";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimizar";
$GLOBALS['strAnonymous']                        = "Ocultar el anunciante y las páginas web de esta campaña.";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Mostrar los banner con Baja Prioridad en esta campaña.<br />\\n											Esta campaña es usada para mostrar las Impresiones\\n											restantes que no son usadas por las campaña de Alta\\n											Prioridad.";
$GLOBALS['strTargetPerDay']                     = "por día.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Automático - Distribuir las impresiones restantes uniformemente durante los días restantes.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "La tipo de esta campaña se ha marcado como exclusiva,\\npero el peso está fijado como cero o no ha sido\\nespecificado. Esto hará que la campaña se desactive \\ny sus banners no se muestren hasta que se fije \\nun número válido en el peso.\\n\\n¿Está seguro de querer continuar?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "La prioridad de esta campaña se ha marcado como alta,\\npero el objetivo de número de impresiones no está\\nespecificado. Esto hará que la campaña se desactive\\ny sus banners no se muestren hasta que se fije un \\nobjetivo válido de impresiones.\\n\\n¿Está seguro de querer continuar?";
$GLOBALS['strCampaignStatusPending']            = "Pendiente";
$GLOBALS['strCampaignStatusInactive']           = "activo";
$GLOBALS['strCampaignStatusRunning']            = "Ejecutándose";
$GLOBALS['strCampaignStatusPaused']             = "Pausada";
$GLOBALS['strCampaignStatusAwaiting']           = "Añadida";
$GLOBALS['strCampaignStatusExpired']            = "Completada";
$GLOBALS['strCampaignStatusApproval']           = "Esperando aprobación »";
$GLOBALS['strCampaignStatusRejected']           = "Rechazada";
$GLOBALS['strCampaignStatusAdded']              = "Añadido";
$GLOBALS['strCampaignStatusStarted']            = "Iniciado";
$GLOBALS['strCampaignStatusRestarted']          = "Reiniciado";
$GLOBALS['strCampaignStatusDeleted']            = "Borrado";
$GLOBALS['strCampaignApprove']                  = "Aprobada";
$GLOBALS['strCampaignApproveDescription']       = "aceptar esta campaña";
$GLOBALS['strCampaignReject']                   = "Rechazar";
$GLOBALS['strCampaignRejectDescription']        = "rechazar esta campaña";
$GLOBALS['strCampaignPause']                    = "Pausar";
$GLOBALS['strCampaignPauseDescription']         = "pausar esta campaña";
$GLOBALS['strCampaignRestart']                  = "Resumir";
$GLOBALS['strCampaignRestartDescription']       = "resumir esta campaña";
$GLOBALS['strCampaignStatus']                   = "Estado de campaña";
$GLOBALS['strReasonForRejection']               = "Razón para rechazo";
$GLOBALS['strReasonSiteNotLive']                = "Página no accesible";
$GLOBALS['strReasonBadCreative']                = "Creatividad inapropiada";
$GLOBALS['strReasonBadUrl']                     = "URL de destino inapropiada";
$GLOBALS['strReasonBreakTerms']                 = "Página web no cumple de términos y condiciones";
$GLOBALS['strChangeStatus']                     = "Cambiar estado";
$GLOBALS['strCampaignType']                     = "Nombre de la Campaña";
$GLOBALS['strType']                             = "Type";
$GLOBALS['strContract']                         = "Contacto";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Contacto";
$GLOBALS['strStandardContractInfo']             = "Contract campaigns are for smoothly delivering the impressions
    required to achieve a specified time-critical performance requirement. That is, Contract campaigns are for when
    an advertiser has paid specifically to have a given number of impressions, clicks and/or conversions to be
    achieved either between two dates, or per day.";
$GLOBALS['strRemnant']                          = "Remnant";
$GLOBALS['strRemnantInfo']                      = "The default campaign type. Remnant campaigns have lots of different
    delivery options, and you should ideally always have at least one Remnant campaign linked to every zone, to ensure
    that there is always something to show. Use Remnant campaigns to display house banners, ad-network banners, or even
    direct advertising that has been sold, but where there is not a time-critical performance requirement for the
    campaign to adhere to.";
$GLOBALS['strECPMInfo']                         = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strContractCampaign']                 = "Contract Campaign";
$GLOBALS['strRemnantCampaign']                  = "Remnant Campaign";
$GLOBALS['strPricing']                          = "Pricing";
$GLOBALS['strPricingModel']                     = "Pricing model";
$GLOBALS['strSelectPricingModel']               = "-- select model --";
$GLOBALS['strRatePrice']                        = "Rate / Price";
$GLOBALS['strMinimumImpressions']               = "Minimum daily impressions";
$GLOBALS['strLimit']                            = "Limit";
$GLOBALS['strLowExclusiveDisabled']             = "You cannot change this campaign to Remnant or Exclusive, since both an end date and either of impressions/clicks/conversions limit are set. <br>In order to change type, you need to set no expiry date or remove limits.";
$GLOBALS['strCannotSetBothDateAndLimit']        = "You cannot set both an end date and limit for a Remnant or Exclusive campaign.<br>If you need to set both an end date and limit impressions/clicks/conversions please use a non-exclusive Contract campaign.";
$GLOBALS['strWhyDisabled']                      = "why is it disabled?";
$GLOBALS['strBackToCampaigns']                  = "Back to campaigns";
$GLOBALS['strCampaignBanners']                  = "Campaign's banners";
$GLOBALS['strCookies']                          = "Cookies";

// Tracker
$GLOBALS['strTracker']                    = "Tracker";
$GLOBALS['strTrackers']                   = "Seguidores";
$GLOBALS['strTrackerOverview']            = "Resumen de trackers";
$GLOBALS['strTrackerPreferences']            = "Preferencias del tracker";
$GLOBALS['strAddTracker']                 = "Añadir nuevo tracker";
$GLOBALS['strAddTracker_Key']             = "Añadir <u>n</u>uevo tracker";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "No hay trackers definidos";
$GLOBALS['strConfirmDeleteAllTrackers']   = "¿Está seguro de querer borrar todos los trackers pertenecientes a este anunciante?";
$GLOBALS['strConfirmDeleteTrackers']      = "¿Está seguro de querer borrar este tracker?";
$GLOBALS['strConfirmDeleteTracker']       = "¿Está seguro de querer borrar este tracker?";
$GLOBALS['strDeleteAllTrackers']          = "Borrar todos los trackers";
$GLOBALS['strTrackerProperties']          = "Propiedades de trackers";
$GLOBALS['strTrackerOverview']            = "Resumen de trackers";
$GLOBALS['strModifyTracker']              = "Modificar tracker";
$GLOBALS['strLog']                        = "¿Grabar?";
$GLOBALS['strDefaultStatus']              = "Estado por defecto";
$GLOBALS['strStatus']                     = "Estado";
$GLOBALS['strLinkedTrackers']             = "Trackers enlazados";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Ventana de conversión";
$GLOBALS['strUniqueWindow']               = "Ventana de único";
$GLOBALS['strClick']                      = "Clic";
$GLOBALS['strView']                       = "Vista";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Impresión";
$GLOBALS['strConversionClickWindow']      = "Count conversions which occur within this number of seconds of a click";
$GLOBALS['strConversionViewWindow']       = "Count conversions which occur within this number of seconds of a view";
$GLOBALS['strTotalTrackerImpressions']    = "Total Impressions";
$GLOBALS['strTotalTrackerConnections']    = "Total Connections";
$GLOBALS['strTotalTrackerConversions']    = "Total Conversions";
$GLOBALS['strTrackerImpressions']         = "Impressions";
$GLOBALS['strTrackerImprConnections']     = "Impression Connections";
$GLOBALS['strTrackerClickConnections']    = "Click Connections";
$GLOBALS['strTrackerImprConversions']     = "Impression Conversions";
$GLOBALS['strTrackerClickConversions']    = "Click Conversions";
$GLOBALS['strConversionType']             = "Tipo de Conversión";
$GLOBALS['strLinkCampaignsByDefault']     = "Enlazar campañas nuevas por defecto";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "por cada impresión";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Banner";
$GLOBALS['strBanners']                       = "Banners";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Agregar nuevo banner";
$GLOBALS['strAddBanner_Key']                 = "Agregar <u>n</u>uevo banner";
$GLOBALS['strBannerToCampaign']              = "Su campaña";
$GLOBALS['strModifyBanner']                  = "Modificar banner";
$GLOBALS['strActiveBanners']                 = "Banners activos";
$GLOBALS['strTotalBanners']                  = "Banners totales";
$GLOBALS['strShowBanner']                    = "Mostrar banner";
$GLOBALS['strShowAllBanners']                = "Mostrar todos los banners";
$GLOBALS['strShowBannersNoAdViews']          = "Mostrar banners sin impresiones";
$GLOBALS['strShowBannersNoAdClicks']         = "Mostrar banners sin Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Borrar todos los banners";
$GLOBALS['strActivateAllBanners']            = "Activar todos los banners";
$GLOBALS['strDeactivateAllBanners']          = "Desactivar todos los banners";
$GLOBALS['strBannerOverview']                = "Resumen de banners";
$GLOBALS['strBannerProperties']              = "Propiedades del banner";
$GLOBALS['strBannerHistory']                 = "Historial del banner";
$GLOBALS['strBannerNoStats']                 = "No hay estadísticas disponibles para este banner.";
$GLOBALS['strNoBanners']                     = "No hay actualmente banners definidos";
$GLOBALS['strNoBannersAddCampaign']          = "Actualmente no hay páginas web definidas. Para crear una zona, <a href='affiliate-edit.php'>agregue una página web</a> primero.";
$GLOBALS['strNoBannersAddAdvertiser']        = "Actualmente no hay páginas web definidas. Para crear una zona, <a href='affiliate-edit.php'>agregue una página web</a> primero.";
$GLOBALS['strConfirmDeleteBanner']           = "¿Está seguro de querer borrar este banner?";
$GLOBALS['strConfirmDeleteBanners']          = "¿Está seguro de querer borrar este banner?";
$GLOBALS['strConfirmDeleteAllBanners']       = "¿Está seguro de querer borrar todos los banners pertenecientes a esta campaña?";
$GLOBALS['strConfirmResetBannerStats']       = "Está seguro de querer borrar todas las estadísticas de este banner?";
$GLOBALS['strShowParentCampaigns']           = "Mostrar campañas relacionadas";
$GLOBALS['strHideParentCampaigns']           = "Ocultar campañas relacionadas";
$GLOBALS['strHideInactiveBanners']           = "Ocultar banners inactivos";
$GLOBALS['strInactiveBannersHidden']         = "banner(s) inactivo(s) oculto(s)";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "No es posible añadir otros banners a banners de texto.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Aviso, probablemente falta";
$GLOBALS['strWarningMissingClosing']         = " tag de cierre \">\"";
$GLOBALS['strWarningMissingOpening']         = " tag de apertura \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Enviar de todas maneras";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "en"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Preferencias de banner";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Default Banners";
$GLOBALS['strDefaultBannerUrl']                      = "Default Image URL";
$GLOBALS['strDefaultBannerDestination']              = "URL de destino predeterminada";
$GLOBALS['strAllowedBannerTypes']                    = "Allowed Banner Types";
$GLOBALS['strTypeSqlAllow']                          = "Allow SQL Local Banners";
$GLOBALS['strTypeWebAllow']                          = "Allow Webserver Local Banners";
$GLOBALS['strTypeUrlAllow']                          = "Allow External Banners";
$GLOBALS['strTypeHtmlAllow']                         = "Allow HTML Banners";
$GLOBALS['strTypeTxtAllow']                          = "Allow Text Ads";
$GLOBALS['strTypeHtmlSettings']                      = "HTML Banner Options";
$GLOBALS['strTypeHtmlAuto']                          = "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']                           = "Allow PHP expressions to be executed from within a HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Por favor, elija el tipo de banner";
$GLOBALS['strMySQLBanner']             = "Banner Local (SQL)";
$GLOBALS['strWebBanner']               = "Banner Local (Webserver)";
$GLOBALS['strURLBanner']               = "Banner Externo";
$GLOBALS['strHTMLBanner']              = "Banner HTML";
$GLOBALS['strTextBanner']              = "Banner de texto";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "¿Desea conservar<br />la imagen existente,<br />o desea subir una nueva?";
$GLOBALS['strUploadOrKeepAlt']        = "¿Desea conservar<br />la imagen de reserva,<br />o desea subir una nueva?";
$GLOBALS['strNewBannerFile']         = "Seleccione la imagen que quiere <br />usar para este banner.<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Seleccione la imagen de reserva que <br />quiere usar en el caso de que los navegadores </br /> no soporten multimedia";
$GLOBALS['strNewBannerURL']         = "URL de la imagen (incluir http://)";
$GLOBALS['strURL']                     = "URL de destino (incluir http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Palabras clave";
$GLOBALS['strTextBelow']             = "Texto posterior a la imagen";
$GLOBALS['strWeight']                 = "Peso";
$GLOBALS['strAlt']                     = "Texto alternativo";
$GLOBALS['strStatusText']            = "Texto de barra de estado";
$GLOBALS['strBannerWeight']            = "Peso del banner";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Banner HTML genérico";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Genérico";
$GLOBALS['strSwfTransparency']		   = "Permitir fondo transparente";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Comprobar enlaces <i>hard-coded</i> en el archivo Flash";
$GLOBALS['strConvertSWFLinks']        = "Convertir enlaces Flash";
$GLOBALS['strHardcodedLinks']        = "Enlaces <i>hard-coded</i>";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Comprimir el archivo SWF para descargarlo más rápidamente (Reproductor Flash 6 es requerido)";
$GLOBALS['strOverwriteSource']        = "Sobreescribir parámetro de origen";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "plantilla HTML";
$GLOBALS['strChooseNetwork']        = "Elija la plantilla que quiera usar";
$GLOBALS['strMoreInformation']        = "Mas información...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Rastrear Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "Cuentas AdSense";
$GLOBALS['strLinkAdSenseAccount']         = "Enlazar cuenta AdSense";
$GLOBALS['strCreateAdSenseAccount']       = "Crear cuenta AdSense";
$GLOBALS['strEditAdSenseAccount']         = "Editar cuenta AdSense";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Opciones de entrega";
$GLOBALS['strACL']                        = "Entrega";
$GLOBALS['strACLAdd']                     = "Agregar nuevas limitaciones";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Sin limitaciones";
$GLOBALS['strApplyLimitationsTo']         = "Aplicar limitaciones a";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Quitar todas las limitaciones";
$GLOBALS['strEqualTo']                    = "es igual a";
$GLOBALS['strDifferentFrom']              = "es diferente de";
$GLOBALS['strLaterThan']                  = "es más tarde de";
$GLOBALS['strLaterThanOrEqual']           = "es más tarde o igual a";
$GLOBALS['strEarlierThan']                = "es antes de";
$GLOBALS['strEarlierThanOrEqual']         = "es antes o igual a";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "es mayor que";
$GLOBALS['strLessThan']                   = "es menor que";
$GLOBALS['strAND']                        = "Y";                          // logical operator
$GLOBALS['strOR']                         = "O";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Mostrar este banner solamente cuando:";
$GLOBALS['strWeekDay']                    = "Día de semana";
$GLOBALS['strWeekDays']                   = "Días de la semana";
$GLOBALS['strTime']                       = "Hora";
$GLOBALS['strUserAgent']                  = "Browser";
$GLOBALS['strDomain']                     = "Dominio";
$GLOBALS['strClientIP']                   = "IP del Cliente";
$GLOBALS['strSource']                     = "Origen";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Ciudad";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Limitaciones de entrega";

$GLOBALS['strDeliveryCapping']            = "Límite de entrega por visitante";
$GLOBALS['strDeliveryCappingReset']       = "Resetear contadores de vistas después de:";
$GLOBALS['strDeliveryCappingTotal']       = "en total";
$GLOBALS['strDeliveryCappingSession']     = "por sesión";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Limitar vistas de banners a:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Limitar vistas de campa&ntilde;a a:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Limitar vistas de zonas a:";

// Website
$GLOBALS['strAffiliate']                = "Página web";
$GLOBALS['strAffiliates']                 = "Páginas web";
$GLOBALS['strAffiliatesAndZones']        = "Páginas web y Zonas";
$GLOBALS['strAddNewAffiliate']            = "Agregar nueva página web";
$GLOBALS['strAddNewAffiliate_Key']        = "Agregar <u>n</u>ueva página web";
$GLOBALS['strAddAffiliate']                = "Crear página web";
$GLOBALS['strAffiliateProperties']        = "Propiedades de la página web";
$GLOBALS['strAffiliateOverview']        = "Resumen de páginas web";
$GLOBALS['strAffiliateHistory']            = "Historial de la página web";
$GLOBALS['strZonesWithoutAffiliate']    = "Zonas sin página web";
$GLOBALS['strMoveToNewAffiliate']        = "Mover a nueva página web";
$GLOBALS['strNoAffiliates']                = "Actualmente no hay páginas web definidas. Para crear una zona, <a href='affiliate-edit.php'>agregue una página web</a> primero.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Está seguro de querer borrar esta página web?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Está seguro de querer borrar esta página web?";
$GLOBALS['strMakePublisherPublic']        = "Convertir en públicas las zonas de esta página web";
$GLOBALS['strAffiliateInvocation']      = "Código de invocación";
$GLOBALS['strAdvertiserSetup']          = "Alta de anunciante";
$GLOBALS['strTotalAffiliates']          = "Páginas web totales";
$GLOBALS['strInactiveAffiliatesHidden'] = "página web(s) inactiva(s) oculta(s)";
$GLOBALS['strShowParentAffiliates']     = "Mostrar páginas web relacionadas";
$GLOBALS['strHideParentAffiliates']     = "Ocultar páginas web relacionadas";

// Website (properties)
$GLOBALS['strWebsite']                      = "Página web";
$GLOBALS['strWebsiteURL']                      = "URL del Sitio Web";
$GLOBALS['strMnemonic']                     = "Mnemónico";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Permitir a este usuario modificar sus propiedades";
$GLOBALS['strAllowAffiliateModifyZones']    = "Permitir a este usuario modificar sus zonas";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Permitir a este usuario enlazar banners a sus zonas";
$GLOBALS['strAllowAffiliateAddZone']        = "Permitir a este usuario definir nuevas zonas";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Permitir a este usuario borrar zonas existentes";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Permitir a este usuario generar código de invocación";
$GLOBALS['strAllowAffiliateZoneStats']      = "Permitir a este usuario ver estadísticas de zonas";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Permitir a este usuario ver sólo conversiones aprobadas o pendientes";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Información de pagos";
$GLOBALS['strAddress']                      = "Dirección";
$GLOBALS['strPostcode']                     = "Código postal";
$GLOBALS['strCity']                         = "Ciudad";
$GLOBALS['strCountry']                      = "País";
$GLOBALS['strPhone']                        = "Teléfono";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Contacto de cuenta";
$GLOBALS['strPayeeName']                    = "Nombre del Beneficiario";
$GLOBALS['strTaxID']                        = "ID del Impuesto";
$GLOBALS['strModeOfPayment']                = "Modo de pago";
$GLOBALS['strPaymentChequeByPost']          = "Cheque postal";
$GLOBALS['strCurrency']                     = "Moneda";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Otra información";
$GLOBALS['strUniqueUsersMonth']             = "Usuarios únicos/mes";
$GLOBALS['strUniqueViewsMonth']             = "Vistas únicas/mes";
$GLOBALS['strPageRank']                     = "Page rank";
$GLOBALS['strCategory']                     = "Categoría";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Archivo de ayuda";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Páginas web y Zonas";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Zona";
$GLOBALS['strZones']                        = "Zonas";
$GLOBALS['strAddNewZone']                   = "Agregar nueva zona";
$GLOBALS['strAddNewZone_Key']               = "Agregar <u>n</u>ueva zona";
$GLOBALS['strAddZone']                      = "Crear Zona";
$GLOBALS['strModifyZone']                   = "Modificar zona";
$GLOBALS['strZoneToWebsite']                = "Sin sitio web";
$GLOBALS['strLinkedZones']                  = "Zonas enlazadas";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Resumen de zonas";
$GLOBALS['strZoneProperties']               = "Propiedades de la zona";
$GLOBALS['strZoneHistory']                  = "Historial de la zona";
$GLOBALS['strNoZones']                      = "No hay zonas definidas actualmente";
$GLOBALS['strNoZonesAddWebsite']            = "Actualmente no hay páginas web definidas. Para crear una zona, <a href='affiliate-edit.php'>agregue una página web</a> primero.";
$GLOBALS['strConfirmDeleteZone']            = "¿Está seguro de querer borrar esta zona?";
$GLOBALS['strConfirmDeleteZones']           = "¿Está seguro de querer borrar esta zona?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "Hay campañas de pago todavía enlazadas a esta zona, si la borra estas campañas no se ejecutarán y no recibirá los pagos correspondientes.";
$GLOBALS['strZoneType']                     = "Tipo de zona";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Botón o Rectángulo";
$GLOBALS['strInterstitial']                 = "Interstitial o DHTML flotante";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "Texto";
$GLOBALS['strEmailAdZone']                  = "Zona de E-mail/Boletín";
$GLOBALS['strZoneClick']                    = "Zona de tracking de clics";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Mostrar banners correspondientes";
$GLOBALS['strHideMatchingBanners']          = "Ocultar banners correspondientes";
$GLOBALS['strBannerLinkedAds']              = "Banners enlazados a la zona";
$GLOBALS['strCampaignLinkedAds']            = "Campañas enlazadas a la zona";
$GLOBALS['strTotalZones']                   = "Zonas totales";
$GLOBALS['strInactiveZonesHidden']          = "zona(s) inactiva(s) oculta(s)";
$GLOBALS['strWarnChangeZoneType']           = "Cambiar el tipo de zona a texto o a e-mail desenlazara todos los banners/campañas debido a restricciones en esos tipos de zonas\\n   <ul>\\n      <li>Zonas de texto sólo pueden enlazarse con banners de texto</li>\\n      <li>Campañas en zonas de e-mail sólo pueden tener un banner activo a la vez</li>\\n   </ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Cambiar la zona desenlazará cualquier banner que no tenga el nuevo tamaño, y añadirá banners de campañas enlazadas que coincidan con el nuevo tamaño';
$GLOBALS['strWarnChangeBannerSize']         = 'Cambiar el tamaño del banner lo desmarcará de todas las zonas que no tengan el nuevo tamaño, y si la <b>campaña</b> del banner está enlazada con una zona del nuevo tamaño, el banner se asignará automáticamente';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Pronóstico del Inventario';
$GLOBALS['strZonesOfWebsite']               = 'en'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones']                  = "Back to zones";

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB Banner Clásico (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)']        = "IAB Rascacielos (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)']        = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Botón 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Botón 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Medio Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB Micro Barra (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Botón Cuadrado (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Rectángulo (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Pop-up Cuadrado (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB Banner Vertical (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Rectángulo Medio (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Rectángulo Grande (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Rectángulo Vertical (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Rascacielos Ancho (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "Avanzado";
$GLOBALS['strChains']                    = "Cadenas";
$GLOBALS['strChainSettings']            = "Propiedades de encadenación";
$GLOBALS['strZoneNoDelivery']            = "Si ningún banner de esta zona <br />puede ser entregado, tratar de...";
$GLOBALS['strZoneStopDelivery']            = "Detener la entrega y no mostrar un banner";
$GLOBALS['strZoneOtherZone']            = "Mostrar la siguiente zona en su lugar";
$GLOBALS['strZoneUseKeywords']            = "Seleccionar un banner usando las siguientes palabras claves";
$GLOBALS['strZoneAppend']                = "Adjuntar siempre el siguiente popup o interstitial a los banners mostrados en esta zona";
$GLOBALS['strAppendSettings']            = "Opciones de adjuntos";
$GLOBALS['strZoneForecasting']            = "Opciones de previsión de zonas";
$GLOBALS['strZonePrependHTML']            = "Pre-añadir siempre el código HTML al banner de texto mostrado por esta zona";
$GLOBALS['strZoneAppendHTML']            = "Añadir siempre el código HTML al texto publicitario mostrado por esta zona";
$GLOBALS['strZoneAppendNoBanner']        = "Añadir incluso si no hay banners que mostrar";
$GLOBALS['strZoneAppendType']            = "Tipo de zona";
$GLOBALS['strZoneAppendHTMLCode']        = "Código HTML";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup o interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Siempre añadir el siguiente popup o interstitial a los banners mostrados por esta zona";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Todos los banners enlazados a esta zona están actualmente desactivados. <br />Esta es la cadena de zonas:";
$GLOBALS['strZoneProbNullPri']            = "No hay banners activos enlazados a esta zona.";
$GLOBALS['strZoneProbListChainLoop']    = "Continuar con la cadena de zonas provocará un bucle circular. Se ha detenido la entrega de esta zona.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Por favor, elija qué enlazar a esta zona";
$GLOBALS['strLinkedBanners']            = "Enlazar banners individuales";
$GLOBALS['strCampaignDefaults']            = "Enlazar banners por campaña padre";
$GLOBALS['strLinkedCategories']         = "Enlazar banners por categoría";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactivo";
$GLOBALS['strRawQueryString']            = "Palabra clave";
$GLOBALS['strIncludedBanners']            = "Banners relacionados";
$GLOBALS['strLinkedBannersOverview']    = "Resumen de banners relacionados";
$GLOBALS['strLinkedBannerHistory']        = "Historial de banners relacionados";
$GLOBALS['strNoZonesToLink']            = "No hay zonas disponibles donde enlazar este banner";
$GLOBALS['strNoBannersToLink']            = "No hay banners disponibles para linkear a esta zona";
$GLOBALS['strNoLinkedBanners']            = "No hay banners relacionados a esta zona";
$GLOBALS['strMatchingBanners']            = "{count} banners correspondientes";
$GLOBALS['strNoCampaignsToLink']        = "No hay actualmente campañas disponibles para enlazar a esta zona";
$GLOBALS['strNoTrackersToLink']            = "No hay actualmente trackers disponibles que puedan enlazarse a esta campaña";
$GLOBALS['strNoZonesToLinkToCampaign']  = "No hay zonas disponibles donde enlazar esta campaña";
$GLOBALS['strSelectBannerToLink']        = "Seleccione el banner que desea enlazar a esta zona:";
$GLOBALS['strSelectCampaignToLink']        = "Seleccione la campaña que desea enlazar a esta zona:";
$GLOBALS['strSelectAdvertiser']         = "Seleccione anunciante";
$GLOBALS['strSelectPlacement']          = "Seleccione campaña";
$GLOBALS['strSelectAd']                 = "Seleccione banner";
$GLOBALS['strSelectPublisher']          = "Seleccionar página web";
$GLOBALS['strSelectZone']               = "Seleccionar zona";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Añadir código de tracker";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Pendiente";
$GLOBALS['strStatusApproved']           = "Aprobado";
$GLOBALS['strStatusDisapproved']        = "No aprobado";
$GLOBALS['strStatusDuplicate']          = "Duplicado";
$GLOBALS['strStatusOnHold']             = "En espera";
$GLOBALS['strStatusIgnore']             = "Ignorar";
$GLOBALS['strConnectionType']           = "Tipo";
$GLOBALS['strConnTypeSale']             = "Venta";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "Alta";
$GLOBALS['strShortcutEditStatuses'] = "Editar estados";
$GLOBALS['strShortcutShowStatuses'] = "Mostrar estados";

// Statistics
$GLOBALS['strStats']                     = "Estadísticas";
$GLOBALS['strNoStats']                   = "No hay estadísticas disponibles";
$GLOBALS['strNoTargetingStats']          = "No hay estadísticas de targeting disponibles";
$GLOBALS['strNoStatsForPeriod']          = "No hay estadísticas disponibles para el periodo del %s al %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "No hay estadísticas de targeting disponibles para el periodo del %s al %s";
$GLOBALS['strConfirmResetStats']         = "Est&aacute seguro de querer borrar todas las estadísticas?";
$GLOBALS['strGlobalHistory']             = "Historial global";
$GLOBALS['strDailyHistory']              = "Historial diario";
$GLOBALS['strDailyStats']                = "Estadísticas diarias";
$GLOBALS['strWeeklyHistory']             = "Historial semanal";
$GLOBALS['strMonthlyHistory']            = "Historial mensual";
$GLOBALS['strCreditStats']               = "Estadísticas de créditos";
$GLOBALS['strDetailStats']               = "Estadísticas detalladas";
$GLOBALS['strTotalThisPeriod']           = "Total en este periodo";
$GLOBALS['strAverageThisPeriod']         = "Promedio del período";
$GLOBALS['strPublisherDistribution']     = "Distribución de páginas web";
$GLOBALS['strCampaignDistribution']      = "Distribución de campañas";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Resetear Estadísticas";
$GLOBALS['strSourceStats']               = "Estadísticas de fuente";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Seleccione la fuente que desea ver:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Estadísticas de targeting";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Ver por";
$GLOBALS['strBreakdownByDay']            = "Día";
$GLOBALS['strBreakdownByWeek']           = "Semana";
$GLOBALS['strBreakdownByMonth']          = "Mes";
$GLOBALS['strBreakdownByDow']            = "Día de la semana";
$GLOBALS['strBreakdownByHour']           = "Hora";
$GLOBALS['strItemsPerPage']              = "Elementos por página";
$GLOBALS['strDistributionHistory']       = "Distribución de histórico";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Mostrar <u>g</u>ráfica de estadísticas";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>xportar estadísticas a Excel";
$GLOBALS['strGDnotEnabled']              = "Debe tener GD activado en PHP para poder mostrar gráficas. Por favor, vea <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> para más información, incluyendo cómo instalar GD en su servidor.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Área";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Caducado";
$GLOBALS['strExpiration']             = "Caducidad";
$GLOBALS['strNoExpiration']           = "Sin fecha de expiración fijada";
$GLOBALS['strEstimated']              = "Expiración estimada";
$GLOBALS['strNoExpirationEstimation'] = "Sin expiración estimada todavía";
$GLOBALS['strDaysAgo']                = "días atrás";
$GLOBALS['strCampaignStop']           = "Detener campaña";

// Reports
$GLOBALS['strReports']                = "Informes";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Informes de páginas web";
$GLOBALS['strSelectReport']           = "Elija el reporte que desea generar";
$GLOBALS['strStartDate']              = "Fecha de inicio";
$GLOBALS['strEndDate']                = "Fecha de finalización";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Periodo";
$GLOBALS['strLimitations']            = "Limitaciones";
$GLOBALS['strWorksheets']             = "Hojas de trabajo";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Todos los anunciantes";
$GLOBALS['strAnonAdvertisers']           = "Anunciantes anónimos";
$GLOBALS['strAllPublishers']             = "Todas las páginas web";
$GLOBALS['strAnonPublishers']            = "Páginas web anónimas";
$GLOBALS['strAllAvailZones']             = "Todas las zonas disponibles";

// Userlog
$GLOBALS['strUserLog']                = "Log de usuarios";
$GLOBALS['strUserLogDetails']        = "Detalle del log de usuarios";
$GLOBALS['strDeleteLog']            = "Borrar log";
$GLOBALS['strAction']                = "Acción";
$GLOBALS['strNoActionsLogged']        = "No hay acciones grabadas";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Selección directa";
$GLOBALS['strChooseInvocationType']        = "Por favor, elija el tipo de invocación de banner";
$GLOBALS['strGenerate']                    = "Generar";
$GLOBALS['strParameters']                = "Opciones de tag";
$GLOBALS['strFrameSize']                = "Tamaño del marco (frame)";
$GLOBALS['strBannercode']                = "Código del banner";
$GLOBALS['strTrackercode']                = "C&oacute;digo del tracker";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Volver a la lista de informes";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
$GLOBALS['strCharset']                  = "Juego de caracteres";
$GLOBALS['strAutoDetect']                   = "Autodetectar";
$GLOBALS['strCacheBusterComment']       = "  * Replace all instances of {random} with
  * a generated random number (or timestamp).
  *";
$GLOBALS['strSSLBackupComment']         = "
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment']       = "
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";

$GLOBALS['strThirdPartyComment']        = "
  * Don't forget to replace the '{clickurl}' text with
  * the click tracking URL if this ad is to be delivered through a 3rd
  * party (non-Max) adserver.
  *";

// Errors
$GLOBALS['strMySQLError']                       = "Error SQL:";
$GLOBALS['strErrorDatabaseConnetion']           = "Error de conexión a la Base de Datos.";
$GLOBALS['strErrorCantConnectToDatabase']       = "Un error fatal se ha producido en %s y no es posible conectarse a la base de datos. Por esta razón no es posible conectarse con la interfaz de administración. La entrega de banners también puede verse afectada. Algunas posibles razones para el problema son: <ul> <li>El servidor de la base de datos puede no estar funcionando en este momento</li> <li>La dirección del servidor de la base de datos ha cambiado</li> <li>El nombre de usuario o clave usados para ingresar en la base de datos no es el correcto</li> <li>PHP no ha cargado la extensión MySQL</li> </ul>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] Ha ocurrido un error al recoger los anunciantes de la base de datos.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Ha ocurrido un error al recoger los banners de la base de datos.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Ha ocurrido un error al recoger los adviews de la base de datos.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Ha ocurrido un error al recoger los adclicks de la base de datos.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Ha ocurrido un error al recoger las conversiones de la base de datos.";
$GLOBALS['strErrorViews']                       = "Debe ingresar el numero de Impresiones o seleccionar la casilla de Ilimitadas !";
$GLOBALS['strErrorNegViews']                    = "No están permitidas Impresiones negativas !";
$GLOBALS['strErrorClicks']                      = "Debe ingresar el numero de Clicks o seleccionar la casilla de Ilimitadas !";
$GLOBALS['strErrorNegClicks']                   = "No están permitidos los Clicks negativos";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "No se han encontrado resultados.";
$GLOBALS['strErrorOccurred']                    = "Ha ocurrido un error";
$GLOBALS['strErrorUploadSecurity']              = "Se ha detectado un posible problema de seguridad. ¡Upload cancelado!";
$GLOBALS['strErrorUploadBasedir']               = "No se puede acceder al archivo recibido, probablemente debido al modo seguro (safemode) o restricciones sobre open_basedir";
$GLOBALS['strErrorUploadUnknown']               = "No se puede acceder al archivo recibido y se desconoce la razón. Compruebe su configuración de PHP";
$GLOBALS['strErrorStoreLocal']                  = "Ha ocurrido un error mientras se intentaba guardar el banner en el directorio local. Probablemente se deba a una mala configuración del directorio local";
$GLOBALS['strErrorStoreFTP']                    = "Ha ocurrido un error mientras se intentaba subir el banner al servidor FTP. Puede deberse a que el servidor FTP no se encuentra disponible o bien a una mala configuración del mismo";
$GLOBALS['strErrorDBPlain']                     = "Ha ocurrido un error al intentar acceder a la base de datos";
$GLOBALS['strErrorDBSerious']                   = "Se ha detectado un problema serio con la base de datos";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "La tabla de base de datos está probablemente corrupta y necesita ser reparada. Para más información sobre reparación de tablas corruptas, por favor, lea el capítulo <i>Troubleshooting</i> (resolución de problemas) de la <i>Guía del Administrador</i>.";
$GLOBALS['strErrorDBContact']                   = "Por favor, contacte con el administrador de este servidor y notifíquele el problema.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "No ha sido posible enlazar el banner a esta zona porque:";
$GLOBALS['strUnableToLinkBanner']               = "No se puede enlazar este banner:";
$GLOBALS['strErrorEditingCampaign']             = "Error actualizando campaña:";
$GLOBALS['strUnableToChangeCampaign']           = "No se pueden aplicar los cambios porque:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "formato incorrecto de número en el campo de Información de Ingresos";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error actualizando zona:";
$GLOBALS['strUnableToChangeZone']               = "No se pueden aplicar los cambios porque:";
$GLOBALS['strDatesConflict']                    = "las fechas son conflictivas con:";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Algunas de estas estadísticas no fueron logueadas en un huso horario UTC por lo que podrían ser mostradas en un huso horario incorrecto.";
$GLOBALS['strWarningInaccurateReadMore']        = "Leer más sobre esto";
$GLOBALS['strWarningInaccurateReport']          = "Algunas estadísticas en este informe no fueron logueadas en un huso horario UTC por lo que podrían ser mostradas en un huso horario incorrecto.";

//Validation
$GLOBALS['strRequiredFieldLegend']              = "denotes required field";
$GLOBALS['strFormContainsErrors']               = "Form contains errors, please correct the marked fields below.";
$GLOBALS['strRequiredField']                    = "Campo requerido";
$GLOBALS['strXRequiredField']                   = "%s is required";
$GLOBALS['strMaxLengthField']                   = "Please enter maximum %s characters";
$GLOBALS['strEmailField']                       = "Please enter a valid email";
$GLOBALS['strNumericField']                     = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField']             = "Must be greater than 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s must be greater than 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s debe ser un número positivo entero";
$GLOBALS['strXUniqueField']                     = "%s with this %s already exists";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "Must be a decimal with maximum %s decimal places";
$GLOBALS['strInvalidWebsiteURL']                = "URL inválida";


// Email
$GLOBALS['strSirMadam']                         = "Sr/a.";
$GLOBALS['strMailSubject']                      = "Informe de anunciante";
$GLOBALS['strAdReportSent']                     = "Reporte de Anunciante enviado";
$GLOBALS['strMailHeader']                       = "Estimado/a {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "A continuación encontrará las estadísticas de banners de {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campaña activada";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campaña desactivada";
$GLOBALS['strMailBannerActivated']              = "La campaña mostrada debajo ha sido activada porque\\nla fecha de activación de la campaña ha llegado.";
$GLOBALS['strMailBannerDeactivated']            = "La campaña mostrada debajo ha sido desactivada porque";
$GLOBALS['strMailFooter']                       = "Le saluda atentamente,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "Los siguientes banners fueron deshabilitados porque";
$GLOBALS['strMailNothingLeft']                  = "Si desea seguir colaborando con nosotros poniendo anuncios, por favor, contacte con nosotros. Estaremos encantados de hablar con usted.\\nNos alegrará volver a saber de usted.";
$GLOBALS['strClientDeactivated']                = "Esta campaña no se encuentra activada porque";
$GLOBALS['strBeforeActivate']                   = "la fecha de activación aún no ha llegado";
$GLOBALS['strAfterExpire']                      = "ha llegado la fecha de caducidad";
$GLOBALS['strNoMoreImpressions']                = "no quedan impresiones disponibles";
$GLOBALS['strNoMoreClicks']                     = "no quedan clics disponibles";
$GLOBALS['strNoMoreConversions']                = "no quedan ventas disponibles";
$GLOBALS['strWeightIsNull']                     = "el peso es cero";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "el target es cero";
$GLOBALS['strWarnClientTxt']                    = "Las impresiones, clics o conversiones restantes para sus banners están llegando por debajo de {limit}.\\nSus banners se desactivarán cuando ya no queden impresiones, clics o conversiones.";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Las impresiones/clics/conversiones son bajas";
$GLOBALS['strNoViewLoggedInInterval']           = "No se ha grabado ninguna impresión durante el periodo de este informe";
$GLOBALS['strNoClickLoggedInInterval']          = "No se ha grabado ningún clic durante el periodo de este informe";
$GLOBALS['strNoConversionLoggedInInterval']     = "No se ha grabado ninguna conversión durante el periodo de este informe";
$GLOBALS['strMailReportPeriod']                 = "Este informe incluye estadísticas desde {startdate} hasta {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Este informe incluye todas las estadísticas hasta {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "No hay estadísticas disponibles para esta campaña";
$GLOBALS['strImpendingCampaignExpiry']          = "Fecha de expiración de campaña próxima";
$GLOBALS['strYourCampaign']                     = "Su campaña";
$GLOBALS['strTheCampiaignBelongingTo']          = "La campaña perteneciente a";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} mostrada a continuación caducará en la fecha {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} mostrada a continuación tiene menos de {limit} impresiones restantes.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Como resultado, pronto la campaña será desactivada automáticamente, y los\\nsiguientes banners en la campaña también se desactivarán:";

// Priority
$GLOBALS['strPriority']                         = "Prioridad";
$GLOBALS['strSourceEdit']                       = "Editar orígenes";

// Preferences
$GLOBALS['strPreferences']                      = "Preferencias";
$GLOBALS['strUserPreferences']                  = "Preferencias de usuario";
$GLOBALS['strChangePassword']                   = "Cambiar Contraseña";
$GLOBALS['strChangeEmail']                      = "Cambiar E-mail";
$GLOBALS['strCurrentPassword']                  = "Contraseña actual";
$GLOBALS['strChooseNewPassword']                = "Elija una nueva contraseña";
$GLOBALS['strReenterNewPassword']               = "Confirme la nueva contraseña";
$GLOBALS['strNameLanguage']                     = "Nombre e Idioma";
$GLOBALS['strAccountPreferences']               = "Preferencias de cuenta";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Preferencias de informes de campaña por e-mail";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "Avisos e-mail de administrador";
$GLOBALS['strAgencyEmailWarnings']              = "Avisos e-mail de agencia";
$GLOBALS['strAdveEmailWarnings']                = "Avisos e-mail de anunciante";
$GLOBALS['strFullName']                         = "Nombre completo";
$GLOBALS['strEmailAddress']                     = "Dirección e-mail";
$GLOBALS['strUserDetails']                      = "Detalles usuario";
$GLOBALS['strLanguageTimezone']                 = "Idioma y zona horaria";
$GLOBALS['strLanguageTimezonePreferences']      = "Preferencias de Idiomas y Zona Horaria";
$GLOBALS['strUserInterfacePreferences']         = "Preferencias de interfaz de usuario";
$GLOBALS['strPluginPreferences']                = "Opciones principales";
$GLOBALS['strInvocationPreferences']            = "Preferencias de invocación";
$GLOBALS['strColumnName']                       = "Nombre de Columna";
$GLOBALS['strShowColumn']                       = "Mostrar Columna";
$GLOBALS['strCustomColumnName']                 = "Nombre de Columna Personalizada";
$GLOBALS['strColumnRank']                       = "Rango de Columna";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Ganancias";
$GLOBALS['strNumberOfItems']                       = "Número de elementos";
$GLOBALS['strRevenueCPC']                          = "Ingresos CPC";
$GLOBALS['strERPM']                                = "ERPM";
$GLOBALS['strERPC']                                = "ERPC";
$GLOBALS['strERPS']                                = "ERPS";
$GLOBALS['strEIPM']                                = "EIPM";
$GLOBALS['strEIPC']                                = "EIPC";
$GLOBALS['strEIPS']                                = "EIPS";
$GLOBALS['strECPM']                                = "ECPM";
$GLOBALS['strECPC']                                = "ECPC";
$GLOBALS['strECPS']                                = "ECPS";
$GLOBALS['strEPPM']                                = "EPPM";
$GLOBALS['strEPPC']                                = "EPPC";
$GLOBALS['strEPPS']                                = "EPPS";
$GLOBALS['strPendingConversions']               = "Conversiones pendientes";
$GLOBALS['strImpressionSR']                     = "Impresión SR";
$GLOBALS['strClickSR']                          = "Clic SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Impresiones";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "Fact.";
$GLOBALS['strBasketValue_short']                = "VC";
$GLOBALS['strNumberOfItems_short']              = "Num. Ítems";
$GLOBALS['strRevenueCPC_short']                 = "Rev. CPC";
$GLOBALS['strERPM_short']                       = "ERPM";
$GLOBALS['strERPC_short']                       = "ERPC";
$GLOBALS['strERPS_short']                       = "ERPS";
$GLOBALS['strEIPM_short']                       = "EIPM";
$GLOBALS['strEIPC_short']                       = "EIPC";
$GLOBALS['strEIPS_short']                       = "EIPS";
$GLOBALS['strECPM_short']                       = "ECPM";
$GLOBALS['strECPC_short']                       = "ECPC";
$GLOBALS['strECPS_short']                       = "ECPS";
$GLOBALS['strEPPM_short']                       = "EPPM";
$GLOBALS['strEPPC_short']                       = "EPPC";
$GLOBALS['strEPPS_short']                       = "EPPS";
$GLOBALS['strID_short']                         = "ID";
$GLOBALS['strRequests_short']                   = "Petic.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "Clics";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Conv. pendientes";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Clic SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Opciones Globales";
$GLOBALS['strGeneralSettings']              = "Configuraci&oacute;n general";
$GLOBALS['strMainSettings']                 = "Configuración Principal";
$GLOBALS['strAdminSettings']                = "Opciones de administraci&oacute;n";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Actualización del producto";
$GLOBALS['strViewPastUpdates']        = "Administrar actualizaciones anteriores y copias de seguridad";
$GLOBALS['strFromVersion']            = "De la Versión";
$GLOBALS['strToVersion']              = "a la Versión";
$GLOBALS['strToggleDataBackupDetails']= "Detalles de la Palanca del respaldo de datos";
$GLOBALS['strClickViewBackupDetails'] = "haga clic para ver los detalles del respaldo";
$GLOBALS['strClickHideBackupDetails'] = "haga clic para esconder los detalles del respaldo";
$GLOBALS['strShowBackupDetails']      = "Mostrar los detalles de la data del respaldo";
$GLOBALS['strHideBackupDetails']      = "Esconder los detalles de la data del respaldo";
$GLOBALS['strInstallation']           = "Instalación";
$GLOBALS['strBackupDeleteConfirm']    = "¿Realmente deseas borrar todos los respaldos creados desde esta actualización?";
$GLOBALS['strDeleteArtifacts']         = "Borrar Artefactos";
$GLOBALS['strArtifacts']              = "Artefactos";
$GLOBALS['strBackupDbTables']         = "Respaldar tablas de la Base de Datos";
$GLOBALS['strLogFiles']               = "Archivos de Registro";
$GLOBALS['strConfigBackups']          = "Conf respaldos";
$GLOBALS['strUpdatedDbVersionStamp']  = "Sello de actualización de versión de Base de Datos";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "ACTUALIZACIÓN COMPLETA";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "FALLO EN LA ACTUALIZACIÓN";

// Agency
$GLOBALS['strAgencyManagement']              = "Gestión de Cuentas";
$GLOBALS['strAgency']                      = "Cuenta";
$GLOBALS['strAgencies']                   = "Cuentas";
$GLOBALS['strAddAgency']                   = "Agregar nueva cuenta";
$GLOBALS['strAddAgency_Key']               = "Agregar <u>n</u>ueva cuenta";
$GLOBALS['strTotalAgencies']               = "Cuentas totales";
$GLOBALS['strAgencyProperties']              = "Propiedades de cuenta";
$GLOBALS['strNoAgencies']                 = "No hay cuentas definidas actualmente";
$GLOBALS['strConfirmDeleteAgency']           = "¿Está seguro de querer borrar esta zona?";
$GLOBALS['strHideInactiveAgencies']          = "Ocultar cuentas inactivas";
$GLOBALS['strInactiveAgenciesHidden']     = "cuentas(s) inactiva(s) ocultada(s)";
$GLOBALS['strAllowAgencyEditConversions'] = "Permitir a este usuario editar conversiones";
$GLOBALS['strAllowMoreReports']           = "Permitir botón de Más Informes";
$GLOBALS['strSwitchAccount']              = "Cambiar a esta cuenta";

// Channels
$GLOBALS['strChannel']                    = "Canal de Direccionamiento";
$GLOBALS['strChannels']                   = "Canales de Direccionamiento";
$GLOBALS['strChannelOverview']            = "Resumen de Canales de Direccionamiento";
$GLOBALS['strChannelManagement']          = "Gestión de Canales de Direccionamiento";
$GLOBALS['strAddNewChannel']              = "Agregar nuevo canal de Direccionamiento";
$GLOBALS['strAddNewChannel_Key']          = "Agregar <u>n</u>uevo canal de Direccionamiento";
$GLOBALS['strChannelToWebsite']           = "Sin sitio web";
$GLOBALS['strNoChannels']                 = "No hay canales de Direccionamiento definidos actualmente";
$GLOBALS['strNoChannelsAddWebsite']       = "Actualmente no hay páginas web definidas. Para crear una zona, <a href='affiliate-edit.php'>agregue una página web</a> primero.";

$GLOBALS['strEditChannelLimitations']     = "Editar limitaciones de canal de Direccionamiento";
$GLOBALS['strChannelProperties']          = "Propiedades del Canal de Direccionamiento";
$GLOBALS['strChannelLimitations']         = "Opciones de entrega";
$GLOBALS['strConfirmDeleteChannel']       = "¿Está seguro de querer borrar este canal de direccionamiento?";
$GLOBALS['strConfirmDeleteChannels']      = "¿Está seguro de querer borrar este canal de direccionamiento?";
$GLOBALS['strModifychannel']              = "Editar canal de targeting";
$GLOBALS['strChannelsOfWebsite']          = 'en'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Nombre de variable";
$GLOBALS['strVariableDescription']     = "Descripción";
$GLOBALS['strVariableDataType']         = "Tipo de dato";
$GLOBALS['strVariablePurpose']       = "Objetivo";
$GLOBALS['strGeneric']               = "Genérico";
$GLOBALS['strBasketValue']           = "Valor de cesta";
$GLOBALS['strNumItems']              = "Número de elementos";
$GLOBALS['strVariableIsUnique']      = "De-duplicar conversiones?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Número";
$GLOBALS['strString']                 = "Cadena de caracteres (string)";
$GLOBALS['strTrackFollowingVars']     = "Controlar la siguiente variable";
$GLOBALS['strAddVariable']             = "Agregar variable";
$GLOBALS['strNoVarsToTrack']         = "No hay variables que controlar.";
$GLOBALS['strVariableHidden']       = "¿Esconder variable a páginas web?";
$GLOBALS['strVariableRejectEmpty']  = "¿Rechazar si está vacío?";
$GLOBALS['strTrackingSettings']     = "Opciones de tracking";
$GLOBALS['strTrackerType']          = "Tipo de tracker";
$GLOBALS['strTrackerTypeJS']        = "Variables Javascript de tracker";
$GLOBALS['strTrackerTypeDefault']   = "Variables Javascript de tracker (modo compatible, se necesita escapar caracteres)";
$GLOBALS['strTrackerTypeDOM']       = "Controlar elementos HTML usando DOM";
$GLOBALS['strTrackerTypeCustom']    = "Código Javascript personalizado";
$GLOBALS['strVariableCode']         = "Código Javascript de tracking";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Anunciantes & Campañas";
$GLOBALS['strYouHaveNoBanners']     = "Campaign has no banners!";
$GLOBALS['strYouHaveNoZones']       = "Banner not linked to any zones!";
$GLOBALS['strNoBannersDropdown']    = "--No Banners Found--";
$GLOBALS['strNoZonesDropdown']      = "--No Zones Found--";
$GLOBALS['strInsertErrorPart1']     = "<br><br><center><b> Error, ";
$GLOBALS['strInsertErrorPart2']     = "records was not inserted! </b></center>";
$GLOBALS['strDuplicatedValue']      = "Duplicated Value!";
$GLOBALS['strInsertCorrect']        = "<br><br><center><b> File was uploaded correctly </b></center>";
$GLOBALS['strReuploadCsvFile']      = "Reupload CSV File";
$GLOBALS['strConfirmUpload']        = "Confirm Upload";
$GLOBALS['strLoadedRecords']        = "Loaded Records";
$GLOBALS['strBrokenRecords']        = "Broken Fields in all Records";
$GLOBALS['strWrongDateFormat']      = "Wrong Date Format";


// Password recovery
$GLOBALS['strForgotPassword']         = "¿Ha olvidado su contraseña?";
$GLOBALS['strPasswordRecovery']       = "Recuperar contraseña";
$GLOBALS['strEmailRequired']          = "E-mail es un campo requerido";
$GLOBALS['strPwdRecEmailSent']        = "Recuperar email enviados";
$GLOBALS['strPwdRecEmailNotFound']    = "Dirección e-mail no encontrada";
$GLOBALS['strPwdRecPasswordSaved']    = "Se ha guardado la nueva contraseña, proceda a <a href='index.php'>iniciar sesión</a>";
$GLOBALS['strPwdRecWrongId']          = "ID erróneo";
$GLOBALS['strPwdRecEnterEmail']       = "Introduzca su dirección e-mail a continuación";
$GLOBALS['strPwdRecEnterPassword']    = "Introduzca su nueva contraseña a continuación";
$GLOBALS['strPwdRecReset']            = "Borrar password";
$GLOBALS['strPwdRecResetLink']        = "Enlace de reset de contraseña";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Borrar password para este usuario";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "Recuperación de contraseña %s";
$GLOBALS['strProceed']                = "Proceed >";
$GLOBALS['strNotifyPageMessage']      = "Se le ha enviado un e-mail, el cual incluye un enlace que le permitirá restaurar su contraseña y entrar en el sistema.<br />Por favor de varios minutos al e-mail para recibirlo.<br />Si no recibe el e-mail, por favor revise su carpeta de spam.<br /><a href='index.php'>Volver a la página principal de entrada al sistema.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "e ítems adicionales";
$GLOBALS['strFor']                    = "para";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "Asociación de Anuncio a Zona";
$GLOBALS['strBinaryData']             = "Datos binarios";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail ha sido deshabilitado por el administrador. No son grabados y mostrados más eventos en la lista de Audit Trail";
$GLOBALS['strAccount']                  = "Cuenta";
$GLOBALS['strAccountUserAssociation']   = "Asociación de Cuenta de Usuario";
$GLOBALS['strEvent']                    = "Event";
$GLOBALS['strImage']                    = "Imagen";
$GLOBALS['strCampaignZoneAssociation']      = "Asociación de Zona de Campaña";
$GLOBALS['strAccountPreferenceAssociation'] = "Asociación de Preferencias de Cuenta";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No ha sido guardada ninguna actividad de usuario durante el espacio de tiempo que ha seleccionado.";
$GLOBALS['strAuditTrail']             = "Audit Trail";
$GLOBALS['strAuditTrailSetup']          = "Configurar hoy Audit Trail";
$GLOBALS['strAuditTrailGoTo']           = "Ir a página de Audit Trail";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Ir a página de campañas";
$GLOBALS['strCampaignSetUp']            = "Registrar hoy una campaña";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>No hay actividad para mostrar de la campaña.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "No se han encontrado campañas que empiecen o terminen en el espacio de tiempo que ha seleccionado";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>Para ver campañas que hayan empezado o terminado en el espacio de tiempos que ha seleccionado, Audit Trail debe estar activado</li>	<li>Está viendo este mensaje porque no activó Audit Trail</li>";
$GLOBALS['strCampaignAuditTrailSetup']   = "Activar Audit Trail para empezar a ver Campañas";

$GLOBALS['strUnsavedChanges']       = "Tiene cambios no guardados en esta página, asegúrese de presionar \"Guardar Cambios\" cuando finalice";
$GLOBALS['strDeliveryLimitationsDisagree'] = "ADVERTENCIA: Las limitaciones del motor de entrega <strong>NO ESTÁ DE ACUERDO</strong> con las limitaciones que se muestran debajo<br />Por favor guarde los cambios y actualice las reglas del motor de entrega";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Algunos valores incorrectos de reportes de limitaciones de entrega:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "You are now working as <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "You don't have access to that page. You have been re-directed.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Advertiser <a href='%s'>%s</a> has been added, <a href='%s'>add a campaign</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Advertiser <b>%s</b> has been deleted";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "El sitio web completo ha sido eliminado";

$GLOBALS['strTrackerHasBeenAdded'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strTrackerHasBeenUpdated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Variables of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Linked campaigns of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Append tracker code of tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> has been deleted";
$GLOBALS['strTrackersHaveBeenDeleted'] = "Todas las zonas seleccionadas han sido eliminadas";
$GLOBALS['strTrackerHasBeenDuplicated'] = "La zona <a href='%s'>%s</a> ha sido copiada como <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "La zona <b>%s</b> ha sido movida al sitio <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Campaign <a href='%s'>%s</a> has been added, <a href='%s'>add a banner</a>";
$GLOBALS['strCampaignHasBeenNoBanner'] = "Campaign <a href='%s'>%s</a> has been added";
$GLOBALS['strCampaignHasBeenUpdated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Linked trackers of campaign <a href='%s'>%s</a> have been updated";
$GLOBALS['strCampaignHasBeenDeleted'] = "Campaign <b>%s</b> has been deleted";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "Todas las zonas seleccionadas han sido eliminadas";
$GLOBALS['strCampaignHasBeenDuplicated'] = "La zona <a href='%s'>%s</a> ha sido copiada como <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "La zona <b>%s</b> ha sido movida al sitio <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strBannerHasBeenUpdated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Las opciones avanzadas para la zona <a href='%s'>%s</a> han sido actualizadas";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Las opciones de entrega para el canal de segmentación <a href='%s'>%s</a> han sido actualizadas";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Delivery options for banner <a href='%s'>%s</a> have been applied to %d banners";
$GLOBALS['strBannerHasBeenDeleted'] = "Banner <b>%s</b> has been deleted";
$GLOBALS['strBannersHaveBeenDeleted'] = "Todas las zonas seleccionadas han sido eliminadas";
$GLOBALS['strBannerHasBeenDuplicated'] = "La zona <a href='%s'>%s</a> ha sido copiada como <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "La zona <b>%s</b> ha sido movida al sitio <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strBannerHasBeenDeactivated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zone(s) linked";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zone(s) unlinked";

$GLOBALS['strWebsiteHasBeenAdded'] = "Website <a href='%s'>%s</a> has been added, <a href='%s'>add a zone</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Website <b>%s</b> has been deleted";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "El sitio web completo ha sido eliminado";

$GLOBALS['strZoneHasBeenAdded'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strZoneHasBeenUpdated'] = "La zona <a href='%s'>%s</a> ha sido actualizada";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Las opciones avanzadas para la zona <a href='%s'>%s</a> han sido actualizadas";
$GLOBALS['strZoneHasBeenDeleted'] = "Zone <b>%s</b> has been deleted";
$GLOBALS['strZonesHaveBeenDeleted'] = "Todas las zonas seleccionadas han sido eliminadas";
$GLOBALS['strZoneHasBeenDuplicated'] = "La zona <a href='%s'>%s</a> ha sido copiada como <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "La zona <b>%s</b> ha sido movida al sitio <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "El baner ha sido vinculado a la zona <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "La campaña ha sido vinculada a la zona <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "El baner ha sido desvinculado de la zona <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "La campaña ha sido desvinculada de la zona <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Targeting channel <a href='%s'>%s</a> has been added, <a href='%s'>change the delivery options</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "El canal de segmentación <a href='%s'>%s</a> ha sido actualizado";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Las opciones de entrega para el canal de segmentación <a href='%s'>%s</a> han sido actualizadas";
$GLOBALS['strChannelHasBeenDeleted'] = "Targeting channel <b>%s</b> has been deleted";
$GLOBALS['strChannelsHaveBeenDeleted'] = "Todos los canales de segmentación han sido eliminados";
$GLOBALS['strChannelHasBeenDuplicated'] = "El canal de segmentación <a href='%s'>%s</a> ha sido copiado como <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Sus preferencias de <b>%s</b> han sido actualizadas";
$GLOBALS['strPreferencesHaveBeenUpdated'] = "Las preferencias han sido actualizadas";
$GLOBALS['strEmailChanged'] = "Su correo electrónico ha sido actualizado";
$GLOBALS['strPasswordChanged'] = "Su clave ha sido actualizada";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> ha sido actualizado";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> ha sido actualizado";
$GLOBALS['strTZPreferencesWarning'] = "However, campaign activation and expiry were not updated, nor time-based banner limitations.<br />You will need to update them manually if you wish them to use the new timezone";


/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome']            = "h";
$GLOBALS['keyUp']            = "u";
$GLOBALS['keyNextItem']        = ".";
$GLOBALS['keyPreviousItem']    = ",";
$GLOBALS['keyList']            = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "s";
$GLOBALS['keyCollapseAll']    = "c";
$GLOBALS['keyExpandAll']    = "e";
$GLOBALS['keyAddNew']        = "n";
$GLOBALS['keyNext']            = "n";
$GLOBALS['keyPrevious']        = "p";
$GLOBALS['keyLinkUser']        = "Enlace del Usuario";
$GLOBALS['keyWorkingAs']        = "w";

// Market entities
$GLOBALS['strMarketCampaignOptin'] = "OpenX Market - Opted In Campaigns";
$GLOBALS['strMarketZoneOptin'] = "OpenX Market - Zone Default Ads";
$GLOBALS['strMarketZoneBeforeOpenX2.8.4'] = "OpenX Market ads before OpenX 2.8.4";

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Árabe";
$GLOBALS['str_bg']                  = "Búlgaro";
$GLOBALS['str_cs']                  = "Checo";
$GLOBALS['str_cy']                  = "Galés";
$GLOBALS['str_da']                  = "Danés";
$GLOBALS['str_de']                  = "Alemán";
$GLOBALS['str_el']                  = "Griego";
$GLOBALS['str_en']                  = "Inglés";
$GLOBALS['str_es']                  = "Español";
$GLOBALS['str_fa']                  = "Persa";
$GLOBALS['str_fr']                  = "Francés";
$GLOBALS['str_he']                  = "Hebreo";
$GLOBALS['str_hr']                  = "Croata";
$GLOBALS['str_hu']                  = "Húngaro";
$GLOBALS['str_id']                  = "Indonesio";
$GLOBALS['str_it']                  = "Italiano";
$GLOBALS['str_ja']                  = "Japonés";
$GLOBALS['str_ko']                  = "Coreano";
$GLOBALS['str_lt']                  = "Lituano";
$GLOBALS['str_ms']                  = "Malay";
$GLOBALS['str_nb']                  = "Bokmal Noruego";
$GLOBALS['str_nl']                  = "Holandés";
$GLOBALS['str_pl']                  = "Polaco";
$GLOBALS['str_pt_BR']               = "Portuguese Brazil";
$GLOBALS['str_pt_PT']               = "Portuguese Portugal";
$GLOBALS['str_ro']                  = "Rumano";
$GLOBALS['str_ru']                  = "Ruso";
$GLOBALS['str_sk']                  = "Eslovaco";
$GLOBALS['str_sl']                  = "Esloveno";
$GLOBALS['str_sq']                  = "Albanian";
$GLOBALS['str_sv']                  = "Sueco";
$GLOBALS['str_tr']                  = "Turco";
$GLOBALS['str_uk']                  = "Ucraniano";
$GLOBALS['str_zh_CN']               = "Chinese Simplified";
$GLOBALS['str_zh_TW']               = "Chinese Traditional";

?>
