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
$GLOBALS['strInstall']                      = "Instalar";
$GLOBALS['strLanguageSelection']            = "Seleção de idioma";
$GLOBALS['strDatabaseSettings']             = "Configurações de base de dados";
$GLOBALS['strAdminAccount']                 = "Conta de Administrador";
$GLOBALS['strAdvancedSettings']             = "Configurações avançadas";
$GLOBALS['strSpecifySyncSettings']          = "Configurações de sincronização";
$GLOBALS['strBtnContinue']                  = "Prosseguir »";
$GLOBALS['strBtnRecover']                   = "Recuperar »";
$GLOBALS['strBtnStartAgain']                   = "Re-iniciar upgrade »";
$GLOBALS['strBtnGoBack']                    = "« Voltar";
$GLOBALS['strBtnAgree']                     = "Eu concordo »";
$GLOBALS['strBtnDontAgree']                 = "« Eu não concordo";
$GLOBALS['strBtnRetry']                     = "Tentar novamente";
$GLOBALS['strUpdateDatabaseError']          = "Due to unknown reasons the update of the database structure wasn't succesful. The recommended way to proceed is to click <b>Retry updating</b> to try to correct these potential problems. If you are sure these errors won't affect the functionality of ".MAX_PRODUCT_NAME." you can click <b>Ignore errors</b> to continue. Ignoring these errors may cause serious problems and is not recommended!";
$GLOBALS['strAlreadyInstalled']             = "" . PRODUCT_NAME." is already installed on this system. If you want to configure it go to the <a href='account-index.php'>settings interface</a>";
$GLOBALS['strTableInUse']                   = "The database which you specified is already used for ".PRODUCT_NAME.", please use a different table prefix, or read the UPGRADE.txt file for upgrading instructions.";
$GLOBALS['strInvalidMySqlVersion']          = "" . PRODUCT_NAME." requires MySQL 4.0 or higher to function correctly. Please select a different database server.";
$GLOBALS['strTableWrongType']               = "The table type you selected isn't supported by your installation of ".phpAds_dbmsname;
$GLOBALS['strFixProblemsBefore']            = "The following item(s) need to be corrected before you can install ".MAX_PRODUCT_NAME.". If you have any questions about this error message, please read the <i>Administrator Guide</i>, which is part of the package you downloaded.";
$GLOBALS['strFixProblemsAfter']             = "If you are not able to correct the problems listed above, please contact the administrator of the server you are trying to install ".MAX_PRODUCT_NAME." on. The administrator of the server may be able to help you.";
$GLOBALS['strWarningDBavailable']           = "The version of PHP you are using doesn't have support for connecting to a ".phpAds_dbmsname." database server. You need to enable the PHP ".phpAds_dbmsname." extension before you can proceed.";
$GLOBALS['strWarningPHPversion']            = "" . PRODUCT_NAME." requires PHP 5.1.4 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterArgcArv']       = "A variável register_argc_argv da configuração do PHP deve estar habilitada para que a manutenção seja executada pela linha de comando";
$GLOBALS['strConfigLockedDetected']         = "" . PRODUCT_NAME." has detected that the <b>max.conf.php</b> file cannot be written by the web server. You can't proceed until you make the 'var' directory writable by the web server. Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strTablesPrefix']                 = "Prefixo das tabelas";
$GLOBALS['strTablesType']                   = "Tipo das tabelas";


$GLOBALS['strRecoveryRequiredTitle']    = "Sua última tentativa de atualizar o sistema encontrou um erro";
$GLOBALS['strRecoveryRequired']         = "There was an error while processing your previous upgrade and " . PRODUCT_NAME . " must attempt to recover the upgrade process. Please click the Recover button below.";

$GLOBALS['strProductUpToDateTitle']     =  PRODUCT_NAME . " is up to date";
$GLOBALS['strOaUpToDate']               = "Your " . PRODUCT_NAME . " database and file structure are both using the most recent version and therefore no upgrade is required at this time. Please click Continue to proceed to the administration panel.";
$GLOBALS['strOaUpToDateCantRemove']     = "Atenção: o arquivo UPGRADE ainda está presente no seu diretório var. Foi impossível remover este arquivo devido a falta de permissão. Por favor remova o arquivo manualmente.";
$GLOBALS['strRemoveUpgradeFile']               = "Você deve remover o arquivo UPGRADE do diretório var.";
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
$GLOBALS['strDbSuccessIntroUpgrade']        = "Seu sistema foi atualizado com sucesso. As próximas telas irão lhe ajudar a atualizar as configurações de seu novo servidor de anúncios.";
$GLOBALS['strErrorInstallVersion']          = "The " . MAX_PRODUCT_NAME . " version number could not be written to the database.";

$GLOBALS['strErrorWritePermissions']        = "Erros de permissão em arquivos foram detectados, e devem ser corrigidos antes de prosseguir.<br />Para corrigir estes erros em um sistema Linux, tente digitar o(s) seguinte(s) comando(s):";

$GLOBALS['strErrorWritePermissionsWin']     = "Erros de permissão em arquivos foram detectados, e devem ser corrigidos antes de prosseguir.";
$GLOBALS['strCheckDocumentation']           = "For more help, please see the <a href=\"".PRODUCT_DOCSURL."\">" . PRODUCT_NAME . " documentation</a>.";
$GLOBALS['strSystemCheckBadPHPConfig']      = "Your current PHP configuration does not meet requirements of " . MAX_PRODUCT_NAME . ". To resolve the problems, please modify settings in your 'php.ini' file.";

$GLOBALS['strAdminUrlPrefix']               = "URL da interface de administração";
$GLOBALS['strDeliveryUrlPrefix']            = "URL da engine de entrega";
$GLOBALS['strDeliveryUrlPrefixSSL']         = "URL da engine de entrega (SSL)";
$GLOBALS['strImagesUrlPrefix']              = "URL do armazenamento de imagens";
$GLOBALS['strImagesUrlPrefixSSL']           = "URL do armazenamento de imagens (SSL)";



/*-------------------------------------------------------*/
/* Configuration translations                            */
/*-------------------------------------------------------*/

// Global
$GLOBALS['strEditConfigNotPossible']                 = "It is not possible to edit all settings because the configuration file is locked for security reasons. ".
                                                       "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible']                    = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. ".
                                                       "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig']                   = "Não é possível editar todas as configurações pois o arquivo de configuração esta travado por questões de segurança. Se deseja fazer alterações destrave o arquivo de configurações primeiro.";
$GLOBALS['strUnableToWritePrefs']                    = "É possível editar toas configurações pois o arquivo de configuração esta liberado, mas isto pode levar a problemas de segurança. Se deseja tornar seus sistema seguro é necessário travar o arquivo de configuração.";
$GLOBALS['strImageDirLockedDetected']	             = "O <b>Diretório de imagens</b> fornecido não possui permissão de escrita pelo servidor. <br>Você não poderá prosseguir até alterar as permissões ou criar a pasta.";

// Configuration Settings
$GLOBALS['strConfigurationSetup']                    = "Lista de verificações da Configuração";
$GLOBALS['strConfigurationSettings']                 = "Dados de configuração";

// Administrator Settings
$GLOBALS['strAdministratorSettings']                 = "Configurações de administração";
$GLOBALS['strLoginCredentials']                      = "Dados de login";
$GLOBALS['strAdminUsername']                         = "Usuário administrativo";
$GLOBALS['strAdminPassword']                         = "Senha de administração";
$GLOBALS['strInvalidUsername']                       = "Nome de usuário inválido";
$GLOBALS['strAdminFullName']                         = "Nome completo do administrador";
$GLOBALS['strAdminEmail']                            = "E-mail do admin.";
$GLOBALS['strAdministratorEmail']                    = "E-mail do administrador";
$GLOBALS['strCompanyName']                           = "Nome da empresa";
$GLOBALS['strAdminShareStack']                       = "Share technical information with the " . PRODUCT_NAME . " Team to help with development and testing.";
$GLOBALS['strUserlogEmail']                          = "Registrar todos e-mail enviados";
$GLOBALS['strEnableDashboardSyncNotice']             = "Por favor habilite <a href='account-settings-update.php'>Verificar atualizações</a> se deseja usar o Painel de Controle.";
$GLOBALS['strTimezone']                              = "Fuso horário";
$GLOBALS['strTimezoneEstimated']                     = "Fuso horário estimado";
$GLOBALS['strTimezoneGuessedValue']                  = "Fuso horário do servidor incorretamente configurado no PHP";
$GLOBALS['strTimezoneSeeDocs']                       = "Pro favor verifique a %DOCS% sobre como configurar esta variável no PHP";
$GLOBALS['strTimezoneDocumentation']                 = "documentação";
$GLOBALS['strAdminSettingsTitle']                    = "Crie uma conta Administrativa";
$GLOBALS['strAdminSettingsIntro']                    = "Por favor preencha este formulário para criar a conta administrativa de seu servidor de anúncios.";
$GLOBALS['strConfigSettingsIntro']                   = "Por favor verifique as configurações abaixo e faça qualquer alteração necessária antes de prosseguir. Se não tiver certeza, deixe os valores padrões.";

$GLOBALS['strEnableAutoMaintenance']	             = "Executar a manutenção automaticamente durante a entrega de anúncios se a manutenção não estiver agendada";

// Database Settings
$GLOBALS['strDatabaseSettings']                      = "Configurações de base de dados";
$GLOBALS['strDatabaseServer']                        = "Configurações globais do servidor de base de dados";
$GLOBALS['strDbLocal']                               = "Usar conexão local por socket";
$GLOBALS['strDbType']                                = "Tipo de banco";
$GLOBALS['strDbHost']                                = "Endereço do banco";
$GLOBALS['strDbSocket']                              = "Socket do Bando de dados";
$GLOBALS['strDbPort']                                = "Porta do banco";
$GLOBALS['strDbUser']                                = "Nome de usuário do banco";
$GLOBALS['strDbPassword']                            = "Senha do banco";
$GLOBALS['strDbName']                                = "Nome da base";
$GLOBALS['strDbNameHint']                            = "A base de dados será criada caso não exista";
$GLOBALS['strDatabaseOptimalisations']               = "Configurações de otimização de banco de dados";
$GLOBALS['strPersistentConnections']                 = "Usar conexões persistentes";
$GLOBALS['strCantConnectToDb']                       = "Impossível conectar à base de dados";
$GLOBALS['strCantConnectToDbDelivery']               = 'Impossível conectar ao Banco de dados para entrega';
$GLOBALS['strDemoDataInstall']                       = "Inserir dados de demonstração";
$GLOBALS['strDemoDataIntro']                         = "Default setup data can be loaded into ". MAX_PRODUCT_NAME ." to help you get started serving online advertising. The most common banner types, as well as some initial campaigns can be loaded and pre-configured. This is highly recommended for new installations.";



// Email Settings
$GLOBALS['strEmailAddresses']                        = "Endereço de remetente de E-mails";
$GLOBALS['strEmailFromName']                         = "Nome do remetente de E-mails";
$GLOBALS['strEmailFromAddress']                      = "Endereço do remetente do e-mail";
$GLOBALS['strEmailFromCompany']                      = "Nome da Companhia de E-mails";
$GLOBALS['strQmailPatch']                            = "patch para qmail";

// Audit Trail Settings
$GLOBALS['strAuditTrailSettings']                    = "Configurações de Auditoria de percurso";

// Debug Logging Settings
$GLOBALS['strDebug']                                 = "Configurações de log de debug";
$GLOBALS['strProduction']                            = "Servidor de produção";
$GLOBALS['strEnableDebug']                           = "Habilitar registro de debug";
$GLOBALS['strDebugMethodNames']                      = "Incluir nome de métodos no log de debug";
$GLOBALS['strDebugLineNumbers']                      = "Incluir número da linha no log de debug";
$GLOBALS['strDebugType']                             = "Tipo de log de debug";
$GLOBALS['strDebugTypeFile']                         = "Arquivo";
$GLOBALS['strDebugTypeSql']                          = "Base de dados SQL";
$GLOBALS['strDebugName']                             = "Nome do log, Calendário, Tabela SQL,<br /> ou SysLog";
$GLOBALS['strDebugPriority']                         = "Nível de prioridade do debug";
$GLOBALS['strPEAR_LOG_DEBUG']                        = "PEAR_LOG_DEBUG - Mais Informação";
$GLOBALS['strPEAR_LOG_INFO']                         = "PEAR_LOG_INFO - Informação padrão";
$GLOBALS['strPEAR_LOG_EMERG']                        = "PEAR_LOG_EMERG - Menos informação";
$GLOBALS['strDebugIdent']                            = "String de identificação de debug";
$GLOBALS['strDebugUsername']                         = "Nome de usuário do mCal, SQL Server";
$GLOBALS['strDebugPassword']                         = "Senha do mCal, SQL Server";
$GLOBALS['strProductionSystem']                      = "Sistema em Produção";

// Delivery Settings
$GLOBALS['strDeliverySettings']                      = "Configurações de entrega";
$GLOBALS['strWebPath']                               =  MAX_PRODUCT_NAME ." Server Access Paths";
$GLOBALS['strWebPathSimple']                         = "Caminho pela Web";
$GLOBALS['strDeliveryPath']                          = "Caminho de entrega";
$GLOBALS['strImagePath']                             = "Caminho de Imagens";
$GLOBALS['strDeliverySslPath']                       = "Caminho de entrega SSL";
$GLOBALS['strImageSslPath']                          = "Caminho de imagens SSL";
$GLOBALS['strImageStore']                            = "Diretório de imagens";
$GLOBALS['strTypeWebSettings']                       = "Configurações de armazenamento local de banners";
$GLOBALS['strTypeWebMode']                           = "Forma de armazenamento";
$GLOBALS['strTypeWebModeLocal']                      = "Diretório local";
$GLOBALS['strTypeDirError']                          = "O diretório local não possui permissão de escrita pelo servidor";
$GLOBALS['strTypeWebModeFtp']                        = "Servidor de FTP externo";
$GLOBALS['strTypeWebDir']                            = "Diretório local";
$GLOBALS['strTypeFTPHost']                           = "Endereço do FTP";
$GLOBALS['strTypeFTPDirectory']                      = "Diretório do servidor";
$GLOBALS['strTypeFTPUsername']                       = "Login ";
$GLOBALS['strTypeFTPPassword']                       = "Senha";
$GLOBALS['strTypeFTPPassive']                        = "Use FTP Passivo";
$GLOBALS['strTypeFTPErrorDir']                       = "O Diretório não existe no Servidor de FTP";
$GLOBALS['strTypeFTPErrorConnect']                   = "Impossível conectar ao servidor de FTP, o login ou senha estão incorretos";
$GLOBALS['strTypeFTPErrorUpload']                    = "Impossível realizar upload para o servidor FTP, verifique as permissões no diretório do Host";
$GLOBALS['strTypeFTPErrorHost']                      = "O endereço do Servidor FTP está incorreto";
$GLOBALS['strDeliveryFilenames']                     = "Nome de arquivos de entrega";
$GLOBALS['strDeliveryFilenamesAdClick']              = "Clique em anúncio";
$GLOBALS['strDeliveryFilenamesAdConversionVars']     = "Variáveis de conversão de anúncios";
$GLOBALS['strDeliveryFilenamesAdContent']            = "Conteúdo de anúncios";
$GLOBALS['strDeliveryFilenamesAdConversion']         = "Conversão de anúncios";
$GLOBALS['strDeliveryFilenamesAdConversionJS']       = "Conversão de anúncios (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame']              = "Frame de anúncios";
$GLOBALS['strDeliveryFilenamesAdImage']              = "Imagem do anúncio";
$GLOBALS['strDeliveryFilenamesAdJS']                 = "Anúncio (Javascript)";
$GLOBALS['strDeliveryFilenamesAdLayer']              = "Layer de anúncio";
$GLOBALS['strDeliveryFilenamesAdLog']                = "Log de anúncio";
$GLOBALS['strDeliveryFilenamesAdPopup']              = "Popup de Anúncio";
$GLOBALS['strDeliveryFilenamesAdView']               = "Visualização de anúncio";
$GLOBALS['strDeliveryFilenamesXMLRPC']               = "Inclusão por XML RPC";
$GLOBALS['strDeliveryFilenamesLocal']                = "Inserção local";
$GLOBALS['strDeliveryFilenamesFrontController']      = "Ponto de entrada único (Front Controller)";
$GLOBALS['strDeliveryFilenamesFlash']                = "Inclusão em Flash (Pode ser URL completo)";
$GLOBALS['strDeliveryCaching']                       = "Configurações de Cache de Entrega de Banners";
$GLOBALS['strDeliveryCacheLimit']                    = "Tempo entre atualizações do Cache de Banners(segundos)";


$GLOBALS['strOrigin']                                = "Usar servidor remoto de origem";
$GLOBALS['strOriginType']                            = "Tipo do servidor de Origem";
$GLOBALS['strOriginHost']                            = "Endereço do servidor de origem";
$GLOBALS['strOriginPort']                            = "Porta da base de dados de origem";
$GLOBALS['strOriginScript']                          = "Arquivo de código da base de dados de origem";
$GLOBALS['strOriginTimeout']                         = "Timeout da origem (segundos)";
$GLOBALS['strOriginProtocol']                        = "Protocolo do servidor de origem";

$GLOBALS['strDeliveryAcls']                          = "Avaliar limitações de entrega de banners durante a entrega";
$GLOBALS['strDeliveryObfuscate']                     = "Ofuscar canal quando entregando anúncios";
$GLOBALS['strDeliveryExecPhp']                       = "Permitir a execução de códigos PHP nos anúncios<br />(Atenção: Risco de segurança)";
$GLOBALS['strDeliveryCtDelimiter']                   = "Delimitador de rastreadores de cliques de terceiros";
$GLOBALS['strGlobalDefaultBannerUrl']                = "URL padrão de banners de imagem (Global)";
$GLOBALS['strP3PSettings']                           = "Políticas de Privacidade P3P";
$GLOBALS['strUseP3P']                                = "Usar políticas P3P";
$GLOBALS['strP3PCompactPolicy']                      = "Política P3P compacta";
$GLOBALS['strP3PPolicyLocation']                     = "Localização da política P3P";

// General Settings
$GLOBALS['uiEnabled']                                = "Interface do usuário habilitada";

// Geotargeting Settings
$GLOBALS['strGeotargetingSettings']                  = "Configurações de Direcionamento Geográfico (GeoTargeting)";
$GLOBALS['strGeotargeting']                          = "Configurações de Direcionamento Geográfico (GeoTargeting)";
$GLOBALS['strGeotargetingType']                      = "Tipo de módulo de direcionamento";
$GLOBALS['strGeotargetingGeoipCountryLocation']      = "Localização da base de dados de Países da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipRegionLocation']       = "Localização da base de dados de Regiões da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipCityLocation']         = "Localização da base de dados de Cidades da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipAreaLocation']         = "Localização da base de dados de Áreas da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipDmaLocation']          = "Localização da base de dados de DMA da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipOrgLocation']          = "Localização da base de dados de Organizações da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipIspLocation']          = "Localização da base de dados de Provedores de Internet da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipNetspeedLocation']     = "Localização da base de dados de Netspeed da MaxMind GeoIP";
$GLOBALS['strGeoShowUnavailable']                    = "Mostrar limitações de direcionamento geográfico mesmo se dados GeoIP não existirem";
$GLOBALS['strGeotrackingGeoipCountryLocationError']  = "A base de dados de Países da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipRegionLocationError']   = "A base de dados de Regiões da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipCityLocationError']     = "A base de dados de Cidades da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipAreaLocationError']     = "A base de dados de Áreas da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipDmaLocationError']      = "A base de dados de DMA da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipOrgLocationError']      = "A base de dados de Organizações da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipIspLocationError']      = "A base de dados de Provedores de Internet da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "A base de dados de Netspeed da MaxMind GeoIP não existe no local informado";

// Interface Settings
$GLOBALS['strInventory']                             = "Inventário";
$GLOBALS['strShowCampaignInfo']                      = "Mostrar dados extras de campanhas na página de <i>Campanhas</i>";
$GLOBALS['strShowBannerInfo']                        = "Mostrar dados extras de banners na página de <i>Banners</i>";
$GLOBALS['strShowCampaignPreview']                   = "Mostrar pre-visualização de banners na página de <i>Banners</i>";
$GLOBALS['strShowBannerHTML']                        = "Mostrar banner ao invés de código HTML na pré-visualização de banners HTML";
$GLOBALS['strShowBannerPreview']                     = "Mostrar pré-visualização do banner em páginas que lidam com banners";
$GLOBALS['strGUIShowMatchingBanners']                = "Mostrar banners compatíveis na página de <i>Banners vinculados</i>";
$GLOBALS['strGUIShowParentCampaigns']                = "Mostrar campanhas superiores na página de <i>Banners vinculados</i>";
$GLOBALS['strGUIAnonymousCampaignsByDefault']        = "Marcar campanhas como anônimas por padrão";
$GLOBALS['strStatisticsDefaults']                    = "Estatísticas";
$GLOBALS['strBeginOfWeek']                           = "Início da semana";
$GLOBALS['strPercentageDecimals']                    = "Decimais de percentagens";
$GLOBALS['strWeightDefaults']                        = "Peso padrão";
$GLOBALS['strDefaultBannerWeight']                   = "Peso padrão de banners";
$GLOBALS['strDefaultCampaignWeight']                 = "Peso padrão de campanhas";

$GLOBALS['strPublisherDefaults']                     = "Definições padrão para o site";
$GLOBALS['strModesOfPayment']                        = "Modos de pagamento";
$GLOBALS['strCurrencies']                            = "Moeda";
$GLOBALS['strCategories']                            = "Categorias";
$GLOBALS['strHelpFiles']                             = "Arquivos de ajuda";
$GLOBALS['strHasTaxID']                              = "ID da Taxa";
$GLOBALS['strDefaultApproved']                       = "Caixa aprovada";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus']               = "Regras padrões de conversão";
$GLOBALS['strDefaultConversionType']                 = "Regras padrões de conversão";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings
$GLOBALS['strAllowedInvocationTypes']                = "Tipos de inserção permitidos";
$GLOBALS['strInvocationDefaults']                    = "Padrões de inserção";
$GLOBALS['strEnable3rdPartyTrackingByDefault']       = "Habilitar por padrão o rastreamento de cliques de terceiros";

// Banner Delivery Settings
$GLOBALS['strBannerDelivery']                         = "Configurações de Entrega de Banners";

// Banner Logging Settings
$GLOBALS['strBannerLogging']                         = "Configurações de Log estatístico de banners";
$GLOBALS['strLogAdRequests']                         = "Logar uma requisição a cada vez que um anúncio é requisitado";
$GLOBALS['strLogAdImpressions']                      = "Logar uma impressão a cada vez que um anúncio é visualizado";
$GLOBALS['strLogAdClicks']                           = "Logar um clique cada vez que um visualizador clique em um anúncio";
$GLOBALS['strLogTrackerImpressions']                 = "Logar uma impressão de rastreador cada vez que um sinalizador de rastreador for visualizado";
$GLOBALS['strReverseLookup']                         = "Realizar um lookup reverso de visualizadores quando não for fornecido o endereço (hostname)";
$GLOBALS['strProxyLookup']                           = "Tentar determinar o endereço IP real de visualizadores atrás de servidores proxy";
$GLOBALS['strPreventLogging']                        = "Bloquear configurações de Log estatístico de banners";
$GLOBALS['strIgnoreHosts']                           = "Não armazenar estatísticas para visualizadores usando os seguintes IPs e Hostnames";
$GLOBALS['strIgnoreUserAgents']                      = "<b>Não</b> registre estatísticas de clientes com qualquer uma das palavras abaixo em seu user-agent (um por linha)";
$GLOBALS['strEnforceUserAgents']                     = "<b>Somente</b> registre estatísticas de clientes com qualquer uma das palavras abaixo em seu user-agent (um por linha)";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strConversionTracking']                    = "Configurações de acompanhamento de Conversões";
$GLOBALS['strEnableConversionTracking']              = "Habilitar acompanhamento de Conversões";
$GLOBALS['strCsvImport']                             = "Permitir o upload de conversões offline";
$GLOBALS['strBlockAdViews']                          = "Não contar impressões se o visualizador ver o mesmo par de anúncio/zona dentro do tempo especificado (segundos)";
$GLOBALS['strBlockAdViewsError']                     = "Valor do bloco de impressão de anúncio deve ser um inteiro não-negativo";
$GLOBALS['strBlockAdClicks']                         = "Não contar cliques se o visualizador clicar o mesmo par de anúncio/zona dentro do tempo especificado (segundos)";
$GLOBALS['strBlockAdClicksError']                    = "Valor do bloco de clique de anúncio deve ser um inteiro não-negativo";
$GLOBALS['strMaintenanceOI']                         = "Intervalo de operações de manutenção (minutos)";
$GLOBALS['strMaintenanceOIError']                    = "O Intervalo de operações de manutenção não é válido - veja a documentação para valores válidos";
$GLOBALS['strPrioritySettings']                      = "Configurações de prioridade";
$GLOBALS['strPriorityInstantUpdate']                 = "Atualizar prioridade de anúncios imediatamente após mudanças na interface";
$GLOBALS['strDefaultImpConWindow']                   = "Tempo padrão para a conexão de uma impressão de anúncio (segundos)";
$GLOBALS['strDefaultImpConWindowError']              = "Se setado o tempo deve ser um inteiro positivo";
$GLOBALS['strDefaultCliConWindow']                   = "Tempo padrão de conexão de clique (segundos)";
$GLOBALS['strDefaultCliConWindowError']              = "Se setado o tempo deve ser um inteiro positivo";
$GLOBALS['strAdminEmailHeaders']                     = "Add the following headers to each email message sent by ". MAX_PRODUCT_NAME;
$GLOBALS['strWarnLimit']                             = "Enviar um alerta quando o número de impressões restantes for menor que o número especificado";
$GLOBALS['strWarnLimitErr']                          = "Limite para alerta deve ser um inteiro positivo";
$GLOBALS['strWarnLimitDays']                         = "Enviar um alerta quando os dias restantes forem menor que o número especificado";
$GLOBALS['strWarnLimitDaysErr']                      = "Limite para alerta de dias deve ser um inteiro positivo";
$GLOBALS['strAllowEmail']                            = "Permitir globalmente o envio de e-mails";
$GLOBALS['strEmailAddressName']                      = "Empresa ou nome pessoal para usar na assinatura do e-mail";
$GLOBALS['strWarnAdmin']                             = "Enviar um alerta para o administrador quando uma campanha estiver quase expirada";
$GLOBALS['strWarnClient']                            = "Enviar um alerta para o anunciante sempre que uma campanha estiver quase expirada";
$GLOBALS['strWarnAgency']                            = "Enviar um alerta para a agência sempre que uma campanha estiver quase expirada";

// UI Settings
$GLOBALS['strGuiSettings']                           = "Configurações da Interface de usuários";
$GLOBALS['strAppName']                               = "Nome da aplicação";
$GLOBALS['strMyHeader']                              = "Localização do arquivo de cabeçalho";
$GLOBALS['strMyHeaderError']                         = "O arquivo de cabeçalho especificado não existe";
$GLOBALS['strMyFooter']                              = "Localização do arquivo de rodapé";
$GLOBALS['strMyFooterError']                         = "O arquivo de rodapé especificado não existe";
$GLOBALS['strDefaultTrackerStatus']                  = "Estado padrão do rastreador";
$GLOBALS['strDefaultTrackerType']                    = "Tipo padrão do rastreador";
$GLOBALS['requireSSL']                               = "Forçar acesso por SSL na interface de usuários";
$GLOBALS['sslPort']                                  = "Porta SSL usada pelo servidor";
$GLOBALS['strDashboardSettings']                     = "Configurações do Painel de Controle";

$GLOBALS['strMyLogo']                                = "Nome do arquivo da logomarca padrão";
$GLOBALS['strMyLogoError']                           = "O arquivo de logomarca não existe no diretório admin/imagens";
$GLOBALS['strGuiHeaderForegroundColor']              = "Cor do primeiro plano no cabeçalho";
$GLOBALS['strGuiHeaderBackgroundColor']              = "Cor do fundo no cabeçalho";
$GLOBALS['strGuiActiveTabColor']                     = "Cor da aba ativa";
$GLOBALS['strGuiHeaderTextColor']                    = "Cor do texto no cabeçalho";
$GLOBALS['strColorError']                            = "Por favor entre com cores em formato RGB, como '0066CC'";

$GLOBALS['strGzipContentCompression']                = "Usar compressão GZIP no conteúdo";
$GLOBALS['strClientInterface']                       = "Interface do anunciante";
$GLOBALS['strReportsInterface']                      = "Interface de relatórios";
$GLOBALS['strClientWelcomeEnabled']                  = "Habilitar mensagem de boas vindas para anunciantes";
$GLOBALS['strClientWelcomeText']                     = "Texto de boas vindas<br />(Tags HTML permitidas)";

$GLOBALS['strPublisherInterface']                    = "Interface de Sites";
$GLOBALS['strPublisherAgreementEnabled']             = "Habilitar controle de login para sites que não aceitaram os Termos e Condições";
$GLOBALS['strPublisherAgreementText']                = "Texto de login (Tags HTML permitidas)";

// Regenerate Platfor Hash script

// Plugin Settings

/*-------------------------------------------------------*/
/* Unknown (unused?) translations                        */
/*-------------------------------------------------------*/



?>
