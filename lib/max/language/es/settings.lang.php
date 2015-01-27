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
$GLOBALS['strInstall']                      = "Instalación";
$GLOBALS['strChooseInstallLanguage']        = "Escoja un idioma para proceder con la instalación";
$GLOBALS['strLanguageSelection']            = "Selección de idioma";
$GLOBALS['strDatabaseSettings']             = "Configuración de Base de Datos";
$GLOBALS['strAdminSettings']                = "Opciones de Administrador";
$GLOBALS['strAdminAccount']                 = "Cuenta de Administrador";
$GLOBALS['strAdministrativeSettings']       = "Administrative Settings";
$GLOBALS['strAdvancedSettings']             = "Configuración avanzada";
$GLOBALS['strOtherSettings']                = "Otras configuraciones";
$GLOBALS['strSpecifySyncSettings']          = "Opciones de sincronización";
$GLOBALS['strLicenseInformation']           = "License information";
$GLOBALS['strWarning']                      = "Advertencia";
$GLOBALS['strFatalError']                   = "Ha ocurrido un error fatal";
$GLOBALS['strUpdateError']                  = "An error occurred while updating";
$GLOBALS['strBtnContinue']                  = "Continuar »";
$GLOBALS['strBtnRecover']                   = "Recuperar »";
$GLOBALS['strBtnStartAgain']                   = "Empezar actualización de nuevo »";
$GLOBALS['strBtnGoBack']                    = "« Volver";
$GLOBALS['strBtnAgree']                     = "Acepto »";
$GLOBALS['strBtnDontAgree']                 = "« No acepto";
$GLOBALS['strBtnRetry']                     = "Reintentar";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']          = "No se puede conectar a la base de datos, por favor verifique la configuración especificada para la misma";
$GLOBALS['strCreateTableTestFailed']        = "El usuario especificado no tiene permisos suficientes para crear o actualizar la estructura de la base de datos, por favor contacte al administrador de la base de datos.";
$GLOBALS['strUpdateTableTestFailed']        = "El usuario especificado no tiene permisos suficientes para actualizar la estructura de la base de datos, por favor contacte al administrador de la base de datos.";
$GLOBALS['strTablePrefixInvalid']           = "El prefijo de tabla contiene caracteres inválidos";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strNoVersionInfo']                = "Unable to select the database version";
$GLOBALS['strInvalidVersionInfo']           = "Unable to determine the database version";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strMayNotFunction']               = "Antes de continuar por favor corrija estos potenciales problemas:";
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strIgnoreWarnings']               = "Ignorar advertencias";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']       = "Configuración PHP : la variable register_globals tiene que tener el valor on.";
$GLOBALS['strWarningRegisterArgcArv']       = "La variable de configuración de PHP register_argc_argv necesita estar activa para ejecutar el mantenimiento desde la línea de comandos.";
$GLOBALS['strWarningMagicQuotesGPC']        = "Configuración PHP : la variable magic_quotes_gpc tiene que tener el valor on.";
$GLOBALS['strWarningMagicQuotesRuntime']    = "Configuración PHP : la variable magic_quotes_runtime tiene que tener el valor off.";
$GLOBALS['strWarningFileUploads']           = "Configuración PHP : la variable file_uploads tiene que tener el valor on.";
$GLOBALS['strWarningTrackVars']             = "The PHP configuration variable track_vars needs to be turned on.";
$GLOBALS['strWarningPREG']                  = "The version of PHP you are using doesn't have support for PERL compatible regular expressions. You need to enable the PREG extension before you can proceed.";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']                 = "No es posible actualizar la base de datos en este momento. si desea proceder, todos los bannes, estadísticas y anunciantes existentes serán borrados.";
$GLOBALS['strIgnoreErrors']                 = "Ignore errors";
$GLOBALS['strRetryUpdate']                  = "Retry updating";
$GLOBALS['strTableNames']                   = "Nombre de Tablas";
$GLOBALS['strTablesPrefix']                 = "Prefijo del nombre de las tablas";
$GLOBALS['strTablesType']                   = "Tipo de tablas";


$GLOBALS['strRecoveryRequiredTitle']    = "El intento de actualización ha encontrado errores";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Aviso: el archivo de ACTUALIZACIÓN sigue presente en el directorio var. No podemos borrar dicho archivo debido a permisos insuficientes. Por favor, borre este archivo usted mismo.";
$GLOBALS['strRemoveUpgradeFile']               = "Debe borrar el archivo de ACTUALIZACIÓN del directorio var.";
$GLOBALS['strInstallSuccess']               = "Clicking 'Continue' will log you in to your ad server.
<p><strong>What next?</strong></p>
<div class='psub'>";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Su sistema ha sido actualizado correctamente. Las siguientes pantallas le ayudarán a actualizar la configuración de su nuevo adserver.";
$GLOBALS['strErrorOccured']                 = "Ha ocurrido el siguiente error:";
$GLOBALS['strErrorInstallDatabase']         = "No se puede crear la estructura de la base de datos.";
$GLOBALS['strErrorInstallPrefs']            = "The administrator user preferences could not be written to the database.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";
$GLOBALS['strErrorUpgrade']                 = 'The existing installation\'s database could not be upgraded.';
$GLOBALS['strErrorInstallDbConnect']        = "No fue posible conectarse con la base de datos.";

$GLOBALS['strErrorWritePermissions']        = "Se han detectado errores de permisos de archivos y deben ser solucionados para poder continuar.<br />Para solucionar los errores en un sistema Linux intente teclear el/los siguiente(s) comando(s).";
$GLOBALS['strErrorFixPermissionsCommand']   = "<p><strong>Seguridad</strong><br>";
$GLOBALS['strErrorFixPermissionsRCommand']  = "<i>chmod -R a+w %s</i>";
$GLOBALS['strNotWriteable']                 = "NOT writeable";
$GLOBALS['strDirNotWriteableError']         = "Directory must be writeable";

$GLOBALS['strErrorWritePermissionsWin']     = "La isntalación de Openads necesita que el archivo de configuración se pueda modificar. Al finalizar las modificaciones de configuración, es altamente recomendable mantener un simple acceso de lectura a este archivo, para mayor seguridad. Para más información sobre esto, por favor lea la referencia en la <a href='http://MAX_PRODUCT_DOCSURL' target='_blank'><strong>documentación</strong></a>.</p>";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL de la Interfaz de Administración";
$GLOBALS['strDeliveryUrlPrefix']            = "URL del Motor de Entrega";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL motor de entrega (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "URL de almacenamiento de imagen";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL de almacenamiento de imagen (SSL)";

$GLOBALS['strInvalidUserPwd']               = "Nombre de usuario o password incorrecto.";

$GLOBALS['strUpgrade']                      = "Actualización";
$GLOBALS['strSystemUpToDate']               = "Su sistema se encuentra actualizado. <br />Clickee en<b>Proceder</b> para regresar a la página de inicio.";
$GLOBALS['strSystemNeedsUpgrade']           = "La estructura de la base de datos y el archivo de configuración deberán actualizarse para funcionar correctamente. Clickee en <b>Proceder</b> para comenzar el proceso de actualización. <br />Por favor tenga paciencia, la actualización puede tardar algunos minutos.";
$GLOBALS['strSystemUpgradeBusy']            = "Actualización del sistema en progreso, por favor espere...";
$GLOBALS['strSystemRebuildingCache']        = "Reconstruyendo cache, por favor espere...";
$GLOBALS['strServiceUnavalable']            = "El sistema no se encuentra disponible temporariamente. Se encuentra en proceso de actualización.";

/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strChooseSection']                         = "Elija la Sección";
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Unable to write changes to the config file";
$GLOBALS['strUnableToWritePrefs']                    = "Unable to commit preferences to the database";
$GLOBALS['strImageDirLockedDetected']	             = "El servidor no puede escribir en el <b>Directorio de Imágenes</b> suministrado. <br>No puede continuar hasta que haya cambiado los permisos del directorio o haya creado otro directorio.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Configuration checklist";
$GLOBALS['strConfigurationSettings']                 = "Configuration settings";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Opciones de Administrador";
$GLOBALS['strAdministratorAccount']                  = "The System Administrator Account";
$GLOBALS['strLoginCredentials']                      = "Credenciales de inicio de sesión";
$GLOBALS['strAdminUsername']                         = "Nombre de usuario del administrador";
$GLOBALS['strAdminPassword']                         = "Administrator  Password";
$GLOBALS['strInvalidUsername']                       = "Nombre de usuario incorrecto";
$GLOBALS['strBasicInformation']                      = "Información Básica";
$GLOBALS['strAdminFullName']                         = "Nombre completo del admin";
$GLOBALS['strAdminEmail']                            = "Dirección e-mail del admin";
$GLOBALS['strAdministratorEmail']                    = "Administrator email Address";
$GLOBALS['strCompanyName']                           = "Nombre de la compañía";
$GLOBALS['strAdminCheckUpdates']                     = "Comprobar automáticamente si hay actualizaciones de producto y alertas de seguridad (Recomendado).";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strAdminCheckEveryLogin']                  = "En cada logueo";
$GLOBALS['strAdminCheckDaily']                       = "A diario";
$GLOBALS['strAdminCheckWeekly']                      = "Semanalmente";
$GLOBALS['strAdminCheckMonthly']                     = "Mensualmente";
$GLOBALS['strAdminCheckNever']                       = "Nunca";
$GLOBALS['strNovice']                                = "Delete actions require confirmation for safety";
$GLOBALS['strUserlogEmail']                          = "Grabar todos los e-mails salientes";
$GLOBALS['strEnableDashboard']                       = "Enable dashboard";
$GLOBALS['strEnableDashboardSyncNotice']             = "Por favor, permita el <a href='account-settings-update.php'>chequeo de actualizaciones</a> si desea usar el Tablero.";
$GLOBALS['strTimezone']                              = "Zona horaria";
$GLOBALS['strTimezoneEstimated']                     = "Zona horaria estimada";
$GLOBALS['strTimezoneGuessedValue']                  = "La zona horaria del servidor no está correctamente configurada en PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Por favor, lea los %DOCS% acerca de configurar esta variable para PHP.";
$GLOBALS['strTimezoneDocumentation']                 = "documentación";
$GLOBALS['strAdminSettingsTitle']                    = "Crear cuenta de administrador";
$GLOBALS['strAdminSettingsIntro']                    = "Por favor, complete este formulario para crear su cuenta de administración del adserver.";
$GLOBALS['strConfigSettingsIntro']                   = "Por favor revise la configuración que hay a continuación y realice cualquier cambio requerido antes de continuar. Si no está seguro, deje los valores por defecto.";

$GLOBALS['strEnableAutoMaintenance']	             = "Ejecutar automáticamente el mantenimiento durante la entrega si el mantenimiento programado no está activo";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Configuración de Base de Datos";
$GLOBALS['strDatabaseServer']                        = "Opciones globales del servidor de base de datos";
$GLOBALS['strDbLocal']                               = "Usar como conexión socket local";
$GLOBALS['strDbType']                                = "Database Type";
$GLOBALS['strDbHost']                                = "Nombre de host de la base de datos";
$GLOBALS['strDbSocket']                              = "Socket de Base de Datos";
$GLOBALS['strDbPort']                                = "Database Port Number";
$GLOBALS['strDbUser']                                = "Nombre de usuario de la base de datos";
$GLOBALS['strDbPassword']                            = "Contraseña de la base de datos";
$GLOBALS['strDbName']                                = "Nombre de la base de datos";
$GLOBALS['strDbNameHint']                            = "La Base de datos será creada si no existe";
$GLOBALS['strDatabaseOptimalisations']               = "Opciones de optimización de la base de datos";
$GLOBALS['strPersistentConnections']                 = "Usar conexiones persistentes";
$GLOBALS['strCantConnectToDb']                       = "No se puede conectar a la base de datos";
$GLOBALS['strCantConnectToDbDelivery']               = 'No se puede conectar con la base de datos para la entrega de avisos';
$GLOBALS['strDemoDataInstall']                       = "Install Demo Data";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailSettings']                         = "Email Settings";
$GLOBALS['strEmailAddresses']                        = "Email 'From' Address";
$GLOBALS['strEmailFromName']                         = "Email 'From' Name";
$GLOBALS['strEmailFromAddress']                      = "Email 'From' Email Address";
$GLOBALS['strEmailFromCompany']                      = "Compañía del Emisor";
$GLOBALS['strUseManagerDetails']                     = 'Use the owning account\'s Contact, Email and Name instead of the above Name, Email Address and Company when emailing reports to Advertiser or Website accounts.';
$GLOBALS['strQmailPatch']                            = "parche qmail";
$GLOBALS['strEnableQmailPatch']                      = "Enable qmail patch";
$GLOBALS['strEmailHeader']                           = "Email headers";
$GLOBALS['strEmailLog']                              = "Email log";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Log Audit";
$GLOBALS['strEnableAudit']                           = "Enable Audit Trail";
$GLOBALS['strEnableAuditForZoneLinking']             = "Enable Audit Trail for Zone Linking screen (introduces huge performance penalty when linking large amounts of zones)";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Debug Logging Settings";
$GLOBALS['strProduction']                            = "Production server";
$GLOBALS['strEnableDebug']                           = "Enable Debug Logging";
$GLOBALS['strDebugMethodNames']                      = "Include method names in debug log";
$GLOBALS['strDebugLineNumbers']                      = "Include line numbers in debug log";
$GLOBALS['strDebugType']                             = "Debug Log Type";
$GLOBALS['strDebugTypeFile']                         = "File";
$GLOBALS['strDebugTypeMcal']                         = "mCal";
$GLOBALS['strDebugTypeSql']                          = "SQL Database";
$GLOBALS['strDebugTypeSyslog']                       = "Syslog";
$GLOBALS['strDebugName']                             = "Debug Log Name, Calendar, SQL Table,<br />or Syslog Facility";
$GLOBALS['strDebugPriority']                         = "Debug Priority Level";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Most Information";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Default Information";
$GLOBALS['strPEAR_LOG_NOTICE']                       = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING']                      = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR']                          = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT']                         = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT']                        = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Least Information";
$GLOBALS['strDebugIdent']                            = "Debug Identification String";
$GLOBALS['strDebugUsername']                         = "mCal, SQL Server Username";
$GLOBALS['strDebugPassword']                         = "mCal, SQL Server Password";
$GLOBALS['strProductionSystem']                      = "Sistema de Producción";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Delivery Settings";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Web path";
$GLOBALS['strDeliveryPath']                          = "Delivery path";
$GLOBALS['strImagePath']                             = "Images path";
$GLOBALS['strDeliverySslPath']                       = "Delivery SSL path";
$GLOBALS['strImageSslPath']                          = "Images SSL path";
$GLOBALS['strImageStore']                            = "Images folder";
$GLOBALS['strTypeWebSettings']                       = "Configuración de banner local (Webserver)";
$GLOBALS['strTypeWebMode']                           = "Método de almacenamiento";
$GLOBALS['strTypeWebModeLocal']                      = "Directorio local";
$GLOBALS['strTypeDirError']                          = "The local directory cannot be written to by the web server";
$GLOBALS['strTypeWebModeFtp']                        = "Servidor FTP externo";
$GLOBALS['strTypeWebDir']                            = "Directorio local";
$GLOBALS['strTypeFTPHost']                           = "Host FTP";
$GLOBALS['strTypeFTPDirectory']                      = "Directorio del host";
$GLOBALS['strTypeFTPUsername']                       = "Iniciar sesión";
$GLOBALS['strTypeFTPPassword']                       = "Contraseña";
$GLOBALS['strTypeFTPPassive']                        = "Use passive FTP";
$GLOBALS['strTypeFTPErrorDir']                       = "The FTP Host Directory does not exist";
$GLOBALS['strTypeFTPErrorConnect']                   = "Could not connect to the FTP Server, the Login or Password is not correct";
$GLOBALS['strTypeFTPErrorNoSupport']                 = "Your installation of PHP does not support FTP.";
$GLOBALS['strTypeFTPErrorUpload']                    = "No se pudo subir el archivo al Servidor FTP, verífique que el directorio en el servidor tiene los permisos correctos";
$GLOBALS['strTypeFTPErrorHost']                      = "The FTP Host is not correct";
$GLOBALS['strDeliveryFilenames']                     = "Delivery File Names";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Ad Click";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Ad Conversion Variables";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Ad Content";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Ad Conversion";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Ad Conversion (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Ad Frame";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Ad Image";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Ad (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Ad Layer";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Ad Log";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Ad Popup";
$GLOBALS['strDeliveryFilenamesAdView']               = "Ad View";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "XML RPC Invocation";
$GLOBALS['strDeliveryFilenamesLocal']                = "Local Invocation";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Front Controller";
$GLOBALS['strDeliveryFilenamesFlash']                = "Flash Include (Can be a full URL)";
$GLOBALS['strDeliveryFilenamesSinglePageCall']       = "Single Page Call";
$GLOBALS['strDeliveryFilenamesSinglePageCallJS']     = "Single Page Call (JavaScript)";
$GLOBALS['strDeliveryCaching']                       = "Banner Delivery Cache Settings";
$GLOBALS['strDeliveryCacheLimit']                    = "Time Between Banner Cache Updates (seconds)";
$GLOBALS['strDeliveryCacheStore']                    = "Banner Delivery Cache Store Type";

$GLOBALS['strErrorInCacheStorePlugin']               = "Some errors were reported by the '%s' delivery store plugin:";
$GLOBALS['strDeliveryCacheStorage']                  = "Delivery cache storage type";

$GLOBALS['strOrigin']                                = "Use remote origin server";
$GLOBALS['strOriginType']                            = "Origin server type";
$GLOBALS['strOriginHost']                            = "Hostname for origin server";
$GLOBALS['strOriginPort']                            = "Port number for origin database";
$GLOBALS['strOriginScript']                          = "Script file for origin database";
$GLOBALS['strOriginTypeXMLRPC']                      = "XMLRPC";
$GLOBALS['strOriginTimeout']                         = "Origin timeout (seconds)";
$GLOBALS['strOriginProtocol']                        = "Origin server protocol";

$GLOBALS['strDeliveryAcls']                          = "Evaluate banner delivery limitations during delivery";
$GLOBALS['strDeliveryAclsDirectSelection']           = "Evaluate banner delivery limitations for direct selected ads";
$GLOBALS['strDeliveryObfuscate']                     = "Obfuscate channel when delivering ads";
$GLOBALS['strDeliveryExecPhp']                       = "Allow PHP code in ads to be executed<br />(Warning: Security risk)";
$GLOBALS['strDeliveryCtDelimiter']                   = "3rd Party Click Tracking Delimiter";
$GLOBALS['strGlobalDefaultBannerUrl']                = "URL de la imagen del banner global por defecto";
$GLOBALS['strP3PSettings']                           = "Políticas de Privacidad P3P";
$GLOBALS['strUseP3P']                                = "Usar Politicas P3P";
$GLOBALS['strP3PCompactPolicy']                      = "Politica Compacta P3P";
$GLOBALS['strP3PPolicyLocation']                     = "Ubicación de Politica P3P";

// General Settings
$GLOBALS['generalSettings']                          = "Global General System Settings";
$GLOBALS['uiEnabled']                                = "Habilitar Interface de Usuario ";
$GLOBALS['defaultLanguage']                          = "Default System Language<br />(Each user can select their own language)";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Geotargeting Settings";
$GLOBALS['strGeotargeting']                          = "Geotargeting Settings";
$GLOBALS['strGeotargetingType']                      = "Geotargeting Module Type";
$GLOBALS['strGeotargetingUseBundledCountryDb']       = "Use the bundled MaxMind GeoLiteCountry database";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "MaxMind GeoIP Country Database Location";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "MaxMind GeoIP Region Database Location";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "MaxMind GeoIP City Database Location";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "MaxMind GeoIP Area Database Location";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "MaxMind GeoIP DMA Database Location";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "MaxMind GeoIP Organisation Database Location";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "MaxMind GeoIP ISP Database Location";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "MaxMind GeoIP Netspeed Database Location";
$GLOBALS['strGeoShowUnavailable']                    = "Show geotargeting delivery limitations even if GeoIP data unavailable";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "The MaxMind GeoIP Country Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "The MaxMind GeoIP Region Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "The MaxMind GeoIP City Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "The MaxMind GeoIP Area Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "The MaxMind GeoIP DMA Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "The MaxMind GeoIP Organisation Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "The MaxMind GeoIP ISP Database does not exist in the location specified";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "The MaxMind GeoIP Netspeed Database does not exist in the location specified";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventario";
$GLOBALS['strUploadConversions']                     = "Upload Conversions";
$GLOBALS['strShowCampaignInfo']                      = "Mostrar información extra de la campaña en la página <i>Campañas</i>";
$GLOBALS['strShowBannerInfo']                        = "Mostrar información extra del banner en la página <i>Banners</i>";
$GLOBALS['strShowCampaignPreview']                   = "Mostrar vista previa de todos los banners en la página <i>Banner</i>";
$GLOBALS['strShowBannerHTML']                        = "Mostrar banner actual en lugar del código HTML plano para la vista previa de Banners HTML";
$GLOBALS['strShowBannerPreview']                     = "Mostrar la vista previa del banner al principio de las páginas correspondientes al banner";
$GLOBALS['strHideInactive']                          = "Esconder inactivos";
$GLOBALS['strGUIShowMatchingBanners']                = "Mostrar banners relacionados en la página <i>Banner Relacionado</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Mostrar campaña principal en la páginae <i>Banner Relacionado</i>";
$GLOBALS['strShowEntityId']                          = "Show entity identifiers";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Default Campaigns to Anonymous";
$GLOBALS['strStatisticsDefaults']                    = "Estadísticas";
$GLOBALS['strBeginOfWeek']                           = "Comienzo de la semana";
$GLOBALS['strPercentageDecimals']                    = "Cantidad de decimales en los porcentajes";
$GLOBALS['strWeightDefaults']                        = "Peso predeterminado";
$GLOBALS['strDefaultBannerWeight']                   = "Peso predeterminado del banner";
$GLOBALS['strDefaultCampaignWeight']                 = "Peso predeterminado de la campaña";
$GLOBALS['strDefaultBannerWErr']                     = "El peso predetermindado del banner debe ser un número entero positivo";
$GLOBALS['strDefaultCampaignWErr']                   = "El peso predeterminado de la campaña debe ser un número entero positivo";
$GLOBALS['strConfirmationUI']                        = "Confirmation in User Interface";

$GLOBALS['strPublisherDefaults']                     = "Website defaults";
$GLOBALS['strModesOfPayment']                        = "Modes of payment";
$GLOBALS['strCurrencies']                            = "Currencies";
$GLOBALS['strCategories']                            = "Categories";
$GLOBALS['strHelpFiles']                             = "Help files";
$GLOBALS['strHasTaxID']                              = "Tax ID";
$GLOBALS['strDefaultApproved']                       = "Approved check box";

// CSV Import Settings
$GLOBALS['strChooseAdvertiser']                      = "Choose Advertiser";
$GLOBALS['strChooseCampaign']                        = "Choose Campaign";
$GLOBALS['strChooseCampaignBanner']                  = "Choose Banner";
$GLOBALS['strChooseTracker']                         = "Choose Tracker";
$GLOBALS['strDefaultConversionStatus']               = "Reglas de conversión por defecto";
$GLOBALS['strDefaultConversionType']                 = "Reglas de conversión por defecto";
$GLOBALS['strCSVTemplateSettings']                   = "CSV Template Settings";
$GLOBALS['strIncludeCountryInfo']                    = "Include Country Info";
$GLOBALS['strIncludeBrowserInfo']                    = "Include Browser Info";
$GLOBALS['strIncludeOSInfo']                         = "Include OS Info";
$GLOBALS['strIncludeSampleRow']                      = "Include Sample Row";
$GLOBALS['strCSVTemplateAdvanced']                   = "Advanced Template";
$GLOBALS['strCSVTemplateIncVariables']               = "Include Tracker Variables";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Tipos de invocación permitidos";
$GLOBALS['strInvocationDefaults']                    = "Invocation Defaults";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Enable 3rd Party Clicktracking by Default";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Opciones de entrega de banners";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Opciones de registro de banners";
$GLOBALS['strLogAdRequests']                         = "Log a request every time a banner is requested";
$GLOBALS['strLogAdImpressions']                      = "Log an impression every time a banner is viewed";
$GLOBALS['strLogAdClicks']                           = "Log a click every time a viewer clicks on a banner";
$GLOBALS['strLogTrackerImpressions']                 = "Log a tracker impression every time a tracker beacon is viewed";
$GLOBALS['strReverseLookup']                         = "Hacer un reverse lookup de los hostnames de los visitantes cuando no se facilite";
$GLOBALS['strProxyLookup']                           = "Intentar determinar la dirección IP real de los visitantes tras un servidor proxy";
$GLOBALS['strPreventLogging']                        = "Block Banner Logging Settings";
$GLOBALS['strIgnoreHosts']                           = "No guardar estadísticas para visitantes que usan alguna de las siguientes Ips o hostnames:";
$GLOBALS['strIgnoreUserAgents']                      = "<b>No</b> loguear estadísticas de clientes que contengan alguna de las siguientes cadenas en su agente de usuario (una por línea)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Sólo</b> loguear estadísticas de clientes con alguna de las siguientes cadenas en su agente de usuario (una por línea)";

// Banner Storage Settings
$GLOBALS['strBannerStorage']                         = "Banner Storage Settings";

// Campaign ECPM settings
$GLOBALS['strEnableECPM']                            = "Use eCPM optimized priorities instead of remnant-weighted priorities";
$GLOBALS['strEnableContractECPM']                    = "Use eCPM optimized priorities instead of standard contract priorities";
$GLOBALS['strEnableECPMfromRemnant']                 = "(If you enable this feature all your remnant campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strEnableECPMfromECPM']                    = "(If you disable this feature some of your active eCPM campaigns will be deactivated, you will have to update them manually to reactivate them)";
$GLOBALS['strInactivatedCampaigns']                  = "List of campaigns which became inactive due to the changes in preferences:";

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceSettings']                   = "Maintenance Settings";
$GLOBALS['strConversionTracking']                    = "Configuración de Conversion Tracking";
$GLOBALS['strEnableConversionTracking']              = "Habilitar Conversion Tracking";
$GLOBALS['strCsvImport']                             = "Allow upload of offline conversions";
$GLOBALS['strBlockAdViews']                          = "Don't count Ad Impressions if the viewer has seen the same ad/zone pair within the specified time (seconds)";
$GLOBALS['strBlockAdViewsError']                     = "Ad Impression block value must be a non-negative integer";
$GLOBALS['strBlockAdClicks']                         = "Don't count Ad Clicks if the viewer has clicked on the same ad/zone pair within the specified time (seconds)";
$GLOBALS['strBlockAdClicksError']                    = "Ad Click block value must be a non-negative integer";
$GLOBALS['strMaintenanceOI']                         = "Maintenance Operation Interval (minutes)";
$GLOBALS['strMaintenanceOIError']                    = "The Maintenace Operation Interval is not valid - see documentation for valid values";
$GLOBALS['strPrioritySettings']                      = "Priority Settings";
$GLOBALS['strPriorityInstantUpdate']                 = "Update advertisement priorities immediately when changes made in the UI";
$GLOBALS['strPriorityIntentionalOverdelivery']       = "Intentionally over-deliver Contract Campaigns<br />(% over-delivery)";
$GLOBALS['strDefaultImpConWindow']                   = "Default Ad Impression Connection Window (seconds)";
$GLOBALS['strDefaultImpConWindowError']              = "If set, the Default Ad Impression Connection Window must be a positive integer";
$GLOBALS['strDefaultCliConWindow']                   = "Default Ad Click Connection Window (seconds)";
$GLOBALS['strDefaultCliConWindowError']              = "If set, the Default Ad Click Connection Window must be a positive integer";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Enviar un aviso cuando el número de impresiones restantes sea menos que el especificado aquí";
$GLOBALS['strWarnLimitErr']                          = "El límite de aviso debe ser un entero positivo";
$GLOBALS['strWarnLimitDays']                         = "Send a warning when the days left are less than specified here";
$GLOBALS['strWarnLimitDaysErr']                      = "Warn Limit Days should be a positive number";
$GLOBALS['strAllowEmail']                            = "Globally allow sending of emails";
$GLOBALS['strEmailAddressFrom']                      = "Email address to send reports FROM";
$GLOBALS['strEmailAddressName']                      = "Company or personal name to sign off email with";
$GLOBALS['strWarnAdmin']                             = "Enviar un aviso al administrador cada vez que una campaña vaya a expirar";
$GLOBALS['strWarnClient']                            = "Enviar un aviso al anunciante cada vez que una campaña vaya a expirar";
$GLOBALS['strWarnAgency']                            = "Send a warning to the account every time a campaign is almost expired";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Opciones de la interfaz de usuario";
$GLOBALS['strGeneralSettings']                       = "Configuración General";
$GLOBALS['strAppName']                               = "Nombre de la aplicación";
$GLOBALS['strMyHeader']                              = "Ubicación del archivo header";
$GLOBALS['strMyHeaderError']                         = "The header file does not exist in the location you specified";
$GLOBALS['strMyFooter']                              = "Ubicación del archivo footer";
$GLOBALS['strMyFooterError']                         = "The footer file does not exist in the location you specified";
$GLOBALS['strDefaultTrackerStatus']                  = "Default tracker status";
$GLOBALS['strDefaultTrackerType']                    = "Default tracker type";
$GLOBALS['strSSLSettings']                           = "SSL Settings";
$GLOBALS['requireSSL']                               = "Force SSL Access on User Interface";
$GLOBALS['sslPort']                                  = "SSL Port Used by Web Server";
$GLOBALS['strDashboardSettings']                     = "Configuración del Tablero";

$GLOBALS['strMyLogo']                                = "Name/URL of custom logo file";
$GLOBALS['strMyLogoError']                           = "The logo file does not exist in the admin/images directory";
$GLOBALS['strGuiHeaderForegroundColor']              = "Color of the header foreground";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Color of the header background";
$GLOBALS['strGuiActiveTabColor']                     = "Color of the active tab";
$GLOBALS['strGuiHeaderTextColor']                    = "Color of the text in the header";
$GLOBALS['strGuiSupportLink']                        = "Custom URL for 'Support' link in header";
$GLOBALS['strColorError']                            = "Please enter colors in an RGB format, like '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Usar GZIP para compresión de contenido";
$GLOBALS['strClientInterface']                       = "Interfaz del anunciante";
$GLOBALS['strReportsInterface']                      = "Reports Interface";
$GLOBALS['strClientWelcomeEnabled']                  = "Habilitar mensaje de bienvenida para el anunciante";
$GLOBALS['strClientWelcomeText']                     = "Texto de bienvenida<br />(código HTML permitido)";

$GLOBALS['strPublisherInterface']                    = "Website interface";
$GLOBALS['strPublisherAgreementEnabled']             = "Enable login control for websites who haven't accepted Terms and Conditions";
$GLOBALS['strPublisherAgreementText']                = "Login text (HTML tags allowed)";

// Regenerate Platfor Hash script
$GLOBALS['strPlatformHashRegenerate']                = "Platform Hash Regenerate";
$GLOBALS['strNewPlatformHash']                       = "Your new Platform Hash is:";
$GLOBALS['strPlatformHashInsertingError']            = "Error inserting Platform Hash into database";

// Plugin Settings
$GLOBALS['strPluginSettings']                        = "Plugin Settings";
$GLOBALS['strEnableNewPlugins']                      = "Enable newly installed plugins";
$GLOBALS['strUseMergedFunctions']                    = "Use merged delivery functions file";

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/

$GLOBALS['strExperimental']                 = "Experimental";
$GLOBALS['strKeywordRetrieval']             = "Recuperación de Palabra Clave";
$GLOBALS['strBannerRetrieval']              = "Metodo de Recuperación de Banner";
$GLOBALS['strRetrieveRandom']               = "Randomización de Recuperación de banner (predeterminado)";
$GLOBALS['strRetrieveNormalSeq']            = "Recuperación secuencial de banner normal";
$GLOBALS['strWeightSeq']                    = "Recuperación secuencial de banner basada en peso";
$GLOBALS['strFullSeq']                      = "Recuperación secuencial de banner completa";
$GLOBALS['strUseKeywords']                  = "Use keywords to select banners";
$GLOBALS['strUseConditionalKeys']           = "Usar palabra clave condicionales";
$GLOBALS['strUseMultipleKeys']              = "Usar multiples palabras claves";

$GLOBALS['strTableBorderColor']             = "Table Border Color";
$GLOBALS['strTableBackColor']               = "Table Back Color";
$GLOBALS['strTableBackColorAlt']            = "Table Back Color (Alternative)";
$GLOBALS['strMainBackColor']                = "Main Back Color";
$GLOBALS['strOverrideGD']                   = "Override GD Imageformat";
$GLOBALS['strTimeZone']                     = "Time Zone";

?>
