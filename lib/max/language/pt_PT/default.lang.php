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
$GLOBALS['date_format']                 = "%d-%m-%Y";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m-%Y";
$GLOBALS['day_format']                  = "%d-%m";
$GLOBALS['week_format']                 = "%W-%Y";
$GLOBALS['weekiso_format']              = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "Principal";
$GLOBALS['strHelp']                     = "Ajuda";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "Re-iniciar";
$GLOBALS['strNavigation']               = "Navegação";
$GLOBALS['strShortcuts']                = "Atalhos";
$GLOBALS['strActions']                  = "Ação";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "Inventário";
$GLOBALS['strMaintenance']              = "Manutenção";
$GLOBALS['strProbability']              = "Probabilidade";
$GLOBALS['strInvocationcode']           = "Código de inserção";
$GLOBALS['strTrackerVariables']         = "Variáveis de rastreamento";
$GLOBALS['strBasicInformation']         = "Informações básicas";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "Informações de login";
$GLOBALS['strLogoutURL']                = "URL para redirecionar após logout. <br />Em branco para valor padrão.";
$GLOBALS['strAppendTrackerCode']        = "Anexar código de rastreamento";
$GLOBALS['strOverview']                 = "Visão geral";
$GLOBALS['strSearch']                   = "Bu<u>s</u>ca";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "Detalhes";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "Procurar atualizações";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "Compactar";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "Usuário";
$GLOBALS['strEdit']                     = "Editar";
$GLOBALS['strCreate']                   = "Criar";
$GLOBALS['strDuplicate']                = "Duplicar";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "Mover para";
$GLOBALS['strDelete']                   = "Remover";
$GLOBALS['strActivate']                 = "Ativar";
$GLOBALS['strDeActivate']               = "Desativar";
$GLOBALS['strConvert']                  = "Converter";
$GLOBALS['strRefresh']                  = "Recarregar";
$GLOBALS['strSaveChanges']              = "Salvar alterações";
$GLOBALS['strUp']                       = "Para cima";
$GLOBALS['strDown']                     = "Para baixo";
$GLOBALS['strSave']                     = "Salvar";
$GLOBALS['strCancel']                   = "Cancelar";
$GLOBALS['strBack']                     = "Voltar";
$GLOBALS['strPrevious']                 = "Anterior";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Próximo";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "Sim";
$GLOBALS['strNo']                       = "Não";
$GLOBALS['strNone']                     = "Nenhum";
$GLOBALS['strCustom']                   = "Personalizado";
$GLOBALS['strDefault']                  = "Padrão";
$GLOBALS['strOther']                    = "Outro";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "Ilimitado";
$GLOBALS['strUntitled']                 = "Sem título";
$GLOBALS['strAll']                      = "todos";
$GLOBALS['strAvg']                      = "Méd.";
$GLOBALS['strAverage']                  = "Média";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "Geral";
$GLOBALS['strTotal']                    = "Total";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "ativo";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "para";
$GLOBALS['strAdd']                      = "Adicionar";
$GLOBALS['strLinkedTo']                 = "vinculado com";
$GLOBALS['strDaysLeft']                 = "Dias restantes";
$GLOBALS['strCheckAllNone']             = "Selecionar todos/nenhum";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>E</u>xpandir todos";
$GLOBALS['strCollapseAll']              = "Fe<u>c</u>har todos";
$GLOBALS['strShowAll']                  = "Mostrar todos";
$GLOBALS['strNoAdminInterface']         = "A tela de administração foi desligada para manutenção. Isso não afeta a entrega de suas campanhas.";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "A data 'De' deve ser anterior à data 'Até'";
$GLOBALS['strFieldContainsErrors']      = "Estes campos contêm erros:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Antes de continuar você precisa";
$GLOBALS['strFieldFixBeforeContinue2']  = "para corrigir estes erros.";
$GLOBALS['strDelimiter']                = "Delimitador";
$GLOBALS['strMiscellaneous']            = "Miscelânea";
$GLOBALS['strCollectedAllStats']        = "Todas estatísticas";
$GLOBALS['strCollectedToday']           = "Hoje";
$GLOBALS['strCollectedYesterday']       = "Ontem";
$GLOBALS['strCollectedThisWeek']        = "Esta semana";
$GLOBALS['strCollectedLastWeek']        = "Semana passada";
$GLOBALS['strCollectedThisMonth']       = "Este mês";
$GLOBALS['strCollectedLastMonth']       = "Mês passado";
$GLOBALS['strCollectedLast7Days']       = "Últimos 7 dias";
$GLOBALS['strCollectedSpecificDates']   = "Datas específicas";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Valor";
$GLOBALS['strAdmin']                    = "Admin";
$GLOBALS['strWarning']                  = "Alerta";
$GLOBALS['strNotice']                   = "Aviso";
$GLOBALS['strRequiredField']            = "Campo obrigatório";
$GLOBALS['strCloseWindow']              = "Close window";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "The dashboard can not be displayed";
$GLOBALS['strNoCheckForUpdates']        = "The dashboard cannot be displayed unless the<br />check for updates setting is enabled.";
$GLOBALS['strEnableCheckForUpdates']    = "Please enable the <a href='account-settings-update.php' target='_top'>check for updates</a> setting on the<br/><a href='account-settings-update.php' target='_top'>update settings</a> page.";
$GLOBALS['strChoosenDisableHomePage']   = "Você escolheu desabilitar sua página inicial";
$GLOBALS['strAccessHomePage']           = "Clique aqui para acessar sua página inicial";
$GLOBALS['strEditSyncSettings']         = "e configurar suas preferências de sincronização";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "código";
$GLOBALS['strDashboardSystemMessage']   = "Mensagem do Sistema";
$GLOBALS['strDashboardErrorHelp']       = "Caso este erro ocorra novamente, po favor descreva em detalhes no <a href='http://forum.openx.org/'>Fórum OpenX</a>.";

// Priority
$GLOBALS['strPriority']                 = "Prioridade";
$GLOBALS['strPriorityLevel']            = "Nível de prioridade";
$GLOBALS['strPriorityTargeting']        = "Distribuição";
$GLOBALS['strPriorityOptimisation']     = "Miscelânea"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "Limites";
$GLOBALS['strNoLimitations']            = "Sem limites";
$GLOBALS['strCapping']                  = "Excesso";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "Nome";
$GLOBALS['strSize']                     = "Tamanho";
$GLOBALS['strWidth']                    = "Largura";
$GLOBALS['strHeight']                   = "Altura";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "Alvo (target)";
$GLOBALS['strLanguage']                 = "Língua";
$GLOBALS['strDescription']              = "Descrição";
$GLOBALS['strVariables']                = "Variáveis";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "Comentários";

// User access
$GLOBALS['strWorkingAs']                = "Trabalhando como";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Trabalhando como";
$GLOBALS['strSwitchTo']                 = "Alternar para";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s para ....";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Adicionar usuário";
$GLOBALS['strLinkUser_Key']             = "Vincular <u>u</u>suário";
$GLOBALS['strUsernameToLink']           = "Nome do usuário do usuário que será adicionado";
$GLOBALS['strEmailToLink']              = "E-mail do usuário que será adicionado";
$GLOBALS['strNewUserWillBeCreated']     = "Novo usuário será criado";
$GLOBALS['strToLinkProvideEmail']       = "Para adicionar um usuário, informe o e-mail do mesmo";
$GLOBALS['strToLinkProvideUsername']    = "Para adicionar um usuário, informe o nome de usuário";
$GLOBALS['strErrorWhileCreatingUser']   = "Erro ao criar usuário: %s";
$GLOBALS['strUserLinkedToAccount']      = "O usuário foi adicionado à conta";
$GLOBALS['strUserAccountUpdated']       = "Conta de usuário atualizada";
$GLOBALS['strUserUnlinkedFromAccount']  = "O usuário foi removido da conta";
$GLOBALS['strUserWasDeleted']           = "O usuário foi removido";
$GLOBALS['strUserNotLinkedWithAccount'] = "Este usuário não esta vinculado a esta conta";
$GLOBALS['strCantDeleteOneAdminUser']   = "Você não pode remover um usuário. Pelo menos um usuário deve estar vinculado à conta de administração";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "Nome de usuário";
$GLOBALS['strLinkUserHelpEmail']        = "Endereço de e-mail";
$GLOBALS['strLastLoggedIn']             = "Adicionar <u>u</u>suário";
$GLOBALS['strDateLinked']               = "Data de vinculação";
$GLOBALS['strUnlink']                   = "Remover";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removendo usuários da última entidade";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Remover o usuário da última entidade causará sua remoção total. Você deseja remover este usuário?";
$GLOBALS['strUnlinkAndDelete']          = "Remover usuário";
$GLOBALS['strUnlinkUser']               = "Remover usuário";
$GLOBALS['strUnlinkUserConfirmBody']    = "Deseja mesmo remover este usuário?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "Acesso de usuário";
$GLOBALS['strAdminAccess']              = "Acesso de administrador";
$GLOBALS['strUserProperties']           = "Dados do usuário";
$GLOBALS['strLinkNewUser']              = "Vincular novo usuário";
$GLOBALS['strPermissions']              = "Permissões";
$GLOBALS['strAuthentification']         = "Autenticação";
$GLOBALS['strWelcomeTo']                = "Bem vindo a";
$GLOBALS['strEnterUsername']            = "Entre com seu nome de usuário e senha para se logar";
$GLOBALS['strEnterBoth']                = "Por favor digite ambos seu nome de usuário e senha";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Erro no cookie de sessão, por favor faça login novamente";
$GLOBALS['strLogin']                    = "Login ";
$GLOBALS['strLogout']                   = "Sair";
$GLOBALS['strUsername']                 = "Nome de usuário";
$GLOBALS['strPassword']                 = "Senha";
$GLOBALS['strPasswordRepeat']           = "Repita a senha";
$GLOBALS['strAccessDenied']             = "Acesso negado";
$GLOBALS['strUsernameOrPasswordWrong']  = "O nome de usuário e/ou senha estão incorretos. Por favor tente novamente.";
$GLOBALS['strPasswordWrong']            = "A senha esta incorreta.";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Sua conta não possui as permissões necessárias para utilizar esta função, você pode logar em outra conta para utilizá-la. Clique <a href='logout.php'>aqui</a> para logar como um usuário diferente.";
$GLOBALS['strDuplicateClientName']      = "O nome de usuário fornecido já existe, por favor escolha outro.";
$GLOBALS['strDuplicateAgencyName']      = "O nome de usuário fornecido já existe, por favor escolha outro.";
$GLOBALS['strInvalidPassword']          = "A nova senha é inválida, use uma senha diferente.";
$GLOBALS['strInvalidEmail']             = "O e-mail não possui a formatação correta, por favor informe um e-mail válido.";
$GLOBALS['strNotSamePasswords']         = "As senhas fornecidas não são iguais";
$GLOBALS['strRepeatPassword']           = "Repetir senha";
$GLOBALS['strOldPassword']              = "Senha antiga";
$GLOBALS['strNewPassword']              = "Nova senha";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Seu link é inválido";
$GLOBALS['strNoPlacement']              = "A campanha selecionada não existe. Tente este <a href='{link}'>link</a>.";
$GLOBALS['strNoAdvertiser']             = "O anunciante escolhido não existe. Tente este <a href='{link}'>link</a>.";

// General advertising
$GLOBALS['strRequests']                 = "Requisições";
$GLOBALS['strImpressions']              = "Impressões";
$GLOBALS['strClicks']                   = "Cliques";
$GLOBALS['strConversions']              = "Conversões";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "Proporção de vendas";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Total de cliques";
$GLOBALS['strTotalConversions']         = "Total de conversões";
$GLOBALS['strViewCredits']              = "Créditos de Impressão";
$GLOBALS['strClickCredits']             = "Créditos de Cliques";
$GLOBALS['strConversionCredits']        = "Créditos de Conversão";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Data e Hora";
$GLOBALS['strTrackerID']                = "ID do rastreador";
$GLOBALS['strTrackerName']              = "Nome do rastreador";
$GLOBALS['strTrackerImageTag']          = "Tag de imagem";
$GLOBALS['strTrackerJsTag']             = "Tag de javascript";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Banners";
$GLOBALS['strCampaigns']                = "Campanhas";
$GLOBALS['strCampaignID']               = "ID da campanha";
$GLOBALS['strCampaignName']             = "Nome da campanha";
$GLOBALS['strCountry']                  = "País";
$GLOBALS['strStatsAction']              = "Ação";
$GLOBALS['strWindowDelay']              = "Atraso da janela";
$GLOBALS['strStatsVariables']           = "Variáveis";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM ";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "Locação mensal";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Divisão de Receita";
$GLOBALS['strPercentBasketValue']       = "% Valor da cesta";
$GLOBALS['strAmountPerItem']            = "Quantidade por item";
$GLOBALS['strPercentCustomVariable']    = "% variável personalizada";
$GLOBALS['strPercentSumVariables']      = "% Soma das variáveis";

// Time and date related
$GLOBALS['strDate']                     = "Data";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "Dia";
$GLOBALS['strDays']                     = "Dias";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "Semana";
$GLOBALS['strWeeks']                    = "Semanas";
$GLOBALS['strSingleMonth']              = "Mês";
$GLOBALS['strMonths']                   = "Meses";
$GLOBALS['strDayOfWeek']                = "Dia da semana";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "Hora";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "segundos";
$GLOBALS['strMinutes']                  = "minutos";
$GLOBALS['strHours']                    = "horas";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "Anunciante";
$GLOBALS['strClients']                      = "Anunciantes";
$GLOBALS['strClientsAndCampaigns']          = "Anunciantes e campanhas";
$GLOBALS['strAddClient']                    = "Adicionar novo anunciante";
$GLOBALS['strAddClient_Key']                = "Adicionar <u>n</u>ovo anunciante";
$GLOBALS['strTotalClients']                 = "Total de anunciantes";
$GLOBALS['strClientProperties']             = "Dados do anunciante";
$GLOBALS['strClientHistory']                = "Histórico do anunciante";
$GLOBALS['strNoClients']                    = "Nenhum anunciante definido. Para criar uma campanha, <a href='advertiser-edit.php'>adicione um anunciante</a> primeiro.";
$GLOBALS['strNoClientsForBanners']          = "Nenhum anunciante definido. Para criar uma campanha, <a href='advertiser-edit.php'>adicione um anunciante</a> primeiro.";
$GLOBALS['strConfirmDeleteClient']          = "Deseja realmente remover este anunciante?";
$GLOBALS['strConfirmDeleteClients']         = "Deseja realmente remover este anunciante?";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "Tamanho";
$GLOBALS['strHideInactive']                 = "Ocultar inativos";
$GLOBALS['strHideInactiveAdvertisers']      = "Ocultar anunciantes inativos";
$GLOBALS['strInactiveAdvertisersHidden']    = "anunciante(s) inativo(s) ocultado(s)";
$GLOBALS['strOverallAdvertisers']           = "anunciante(s)";
$GLOBALS['strAdvertiserSignup']             = "Inscrição de anunciante";
$GLOBALS['strAdvertiserSignupDesc']         = "Registre-se para serviço próprio de Anunciante e pagamentos";
$GLOBALS['strAdvertiserSignupLink']         = "Link para Inscrição de anunciante";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "Para adicionar um link para Inscrição de Anunciante em seu site, copie o HTML abaixo:";
$GLOBALS['strAdvertiserSignupOption']       = "Divulgar opção de Inscrição de anunciante";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "Para editar as opções de inscrição de anunciante, siga para";
$GLOBALS['strAdvertiserCampaigns']          = "Anunciantes e campanhas";
// Advertisers properties
$GLOBALS['strContact']                          = "Contato";
$GLOBALS['strContactName']                      = "Nome de contato";
$GLOBALS['strEMail']                            = "E-mail";
$GLOBALS['strChars']                            = "caracteres";
$GLOBALS['strSendAdvertisingReport']            = "Relatório de entrega e e-mails de campanha";
$GLOBALS['strNoDaysBetweenReports']             = "Número de dias entre relatórios de entrega de campanha";
$GLOBALS['strSendDeactivationWarning']          = "Enviar e-mail quando a campanha for automaticamente ativada/desativada";
$GLOBALS['strAllowClientModifyInfo']            = "Permitir que este usuário altere suas configurações";
$GLOBALS['strAllowClientModifyBanner']          = "Permitir que este usuário altere seus banners";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "Permitir que este usuário desative seus próprios banners";
$GLOBALS['strAllowClientActivateBanner']        = "Permitir que este usuário ative seus próprios banners";
$GLOBALS['strAllowClientViewTargetingStats']    = "Permitir que este usuário veja estatísticas de direcionamento";
$GLOBALS['strAllowCreateAccounts']              = "Permitir que este usuário crie novas contas";
$GLOBALS['strCsvImportConversions']             = "Permitir que este usuário importe conversões 'offline'";
$GLOBALS['strAdvertiserLimitation']             = "Mostre apenas um anúncio deste anunciante em uma página";
$GLOBALS['strAllowAuditTrailAccess']            = "Permitir que este usuário acesse o rastro de auditoria";

// Campaign
$GLOBALS['strCampaign']                     = "Campanha";
$GLOBALS['strCampaigns']                    = "Campanhas";
$GLOBALS['strOverallCampaigns']             = "campanha(s)";
$GLOBALS['strTotalCampaigns']               = "Total de campanhas";
$GLOBALS['strActiveCampaigns']              = "Campanhas ativas";
$GLOBALS['strAddCampaign']                  = "Adicionar uma nova campanha";
$GLOBALS['strAddCampaign_Key']              = "Adicionar <u>n</u>ova campanha";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "Modificar campanha";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "Remover todas campanhas";
$GLOBALS['strLinkedCampaigns']              = "Campanhas vinculadas";
$GLOBALS['strCampaignStats']                = "Estatísticas da campanha";
$GLOBALS['strCampaignProperties']           = "Dados da campanha";
$GLOBALS['strCampaignOverview']             = "Visão geral da campanha";
$GLOBALS['strCampaignHistory']              = "Histórico da campanha";
$GLOBALS['strNoCampaigns']                  = "There are currently no campaigns defined for this advertiser.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "Deseja realmente remover todas campanhas deste anunciante?";
$GLOBALS['strConfirmDeleteCampaign']        = "Deseja realmente remover esta campanha?";
$GLOBALS['strConfirmDeleteCampaigns']       = "Deseja realmente remover esta campanha?";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "Mostrar anunciantes superiores";
$GLOBALS['strHideParentAdvertisers']        = "Esconder anunciantes superiores";
$GLOBALS['strHideInactiveCampaigns']        = "Esconder campanhas inativas";
$GLOBALS['strInactiveCampaignsHidden']      = "campanha(s) inativa(s) ocultada(s)";
$GLOBALS['strContractDetails']              = "Detalhes do contrato";
$GLOBALS['strInventoryDetails']             = "Detalhes do inventário";
$GLOBALS['strPriorityInformation']          = "Prioridade em relação a outras campanhas";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "Campanha";
$GLOBALS['strHiddenAd']                     = "Anúncio";
$GLOBALS['strHiddenAdvertiser']             = "Anunciante";
$GLOBALS['strHiddenTracker']                = "Rastreador";
$GLOBALS['strHiddenWebsite']              = "Site";
$GLOBALS['strHiddenZone']                   = "Zona";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Entrega casada (com outras peças)";
$GLOBALS['strSelectUnselectAll']            = "Selecionar / Deselecionar Todos";
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
$GLOBALS['strDontExpire']                       = "Don't expire";
$GLOBALS['strActivateNow']                      = "Start immediately";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "Baixa";
$GLOBALS['strHigh']                             = "Alta";
$GLOBALS['strExpirationDate']                   = "Data de término";
$GLOBALS['strExpirationDateComment']            = "A campanha terminará ao final deste dia";
$GLOBALS['strActivationDate']                   = "Data de início";
$GLOBALS['strActivationDateComment']            = "A Campanha iniciará ao início deste dia";
$GLOBALS['strRevenueInfo']                      = "Orçamento";
$GLOBALS['strTotalRevenue']                     = "Receita total";
$GLOBALS['strImpressionsRemaining']             = "Impressões restantes";
$GLOBALS['strClicksRemaining']                  = "Cliques restantes";
$GLOBALS['strConversionsRemaining']             = "Conversões restantes";
$GLOBALS['strImpressionsBooked']                = "Impressões contratadas";
$GLOBALS['strClicksBooked']                     = "Cliques contratados";
$GLOBALS['strConversionsBooked']                = "Conversões contratadas";
$GLOBALS['strCampaignWeight']                   = "Set the campaign weight";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Otimizar";
$GLOBALS['strAnonymous']                        = "Esconder o anunciante e o site desta campanha";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "por dia.";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "Automático - Distribuir o restante do contratado homogeneamente pelos dias restantes.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "A prioridade desta campanha foi configurada para baixa, \\nmas seu peso configurado para zero ou não informado.\\nIsto causará a campanha a ser desativada e seus banners\\nnão serão entregues até o peso  ser alterado para um número\\nválido.\\n\\nDeseja continuar?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "A prioridade desta campanha foi configurada para alta,\\nmas o número alvejado de impressões não foi especificado\\nIsto causará a campanha a ser desativada e seus banners não\\nserão entregues até que um número válido seja cadastrado.\\n\\nDeseja continuar?";
$GLOBALS['strCampaignStatusPending']            = "Pendente";
$GLOBALS['strCampaignStatusInactive']           = "ativo";
$GLOBALS['strCampaignStatusRunning']            = "Executando";
$GLOBALS['strCampaignStatusPaused']             = "Pausado";
$GLOBALS['strCampaignStatusAwaiting']           = "Aguardando";
$GLOBALS['strCampaignStatusExpired']            = "Finalizado";
$GLOBALS['strCampaignStatusApproval']           = "Aguardando aprovação »";
$GLOBALS['strCampaignStatusRejected']           = "Rejeitado";
$GLOBALS['strCampaignStatusAdded']              = "Adicionado";
$GLOBALS['strCampaignStatusStarted']            = "Inicializado";
$GLOBALS['strCampaignStatusRestarted']          = "Re-iniciado";
$GLOBALS['strCampaignStatusDeleted']            = "Remover";
$GLOBALS['strCampaignApprove']                  = "Aprovado";
$GLOBALS['strCampaignApproveDescription']       = "aceitar esta campanha";
$GLOBALS['strCampaignReject']                   = "Rejeitar";
$GLOBALS['strCampaignRejectDescription']        = "rejeitar esta campanha";
$GLOBALS['strCampaignPause']                    = "Pausar";
$GLOBALS['strCampaignPauseDescription']         = "pausar esta campanha temporariamente";
$GLOBALS['strCampaignRestart']                  = "Continuar";
$GLOBALS['strCampaignRestartDescription']       = "continuar esta campanha";
$GLOBALS['strCampaignStatus']                   = "Estado da campanha";
$GLOBALS['strReasonForRejection']               = "Justificativa da rejeição";
$GLOBALS['strReasonSiteNotLive']                = "Site fora do ar";
$GLOBALS['strReasonBadCreative']                = "Anúncio inapropriado";
$GLOBALS['strReasonBadUrl']                     = "URL de destino inapropriada";
$GLOBALS['strReasonBreakTerms']                 = "Site fere os termos e condições";
$GLOBALS['strChangeStatus']                     = "Mudar estado";
$GLOBALS['strCampaignType']                     = "Nome da campanha";
$GLOBALS['strType']                             = "Tipo";
$GLOBALS['strContract']                         = "Contato";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "Contato";
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
$GLOBALS['strTracker']                    = "Rastreador";
$GLOBALS['strTrackers']                   = "Rastreadores";
$GLOBALS['strTrackerOverview']            = "Visão geral do rastreador";
$GLOBALS['strTrackerPreferences']            = "Preferências do Rastreador";
$GLOBALS['strAddTracker']                 = "Adicionar no rastreador";
$GLOBALS['strAddTracker_Key']             = "Adicionar <u>n</u>ovo rastreador";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "Deseja realmente remover todos rastreadores deste anunciante?";
$GLOBALS['strConfirmDeleteTrackers']      = "Deseja realmente remover este rastreador?";
$GLOBALS['strConfirmDeleteTracker']       = "Deseja realmente remover este rastreador?";
$GLOBALS['strDeleteAllTrackers']          = "Remover todos rastreadores";
$GLOBALS['strTrackerProperties']          = "Dados do rastreador";
$GLOBALS['strTrackerOverview']            = "Visão geral do rastreador";
$GLOBALS['strModifyTracker']              = "Modificar rastreador";
$GLOBALS['strLog']                        = "Gravar?";
$GLOBALS['strDefaultStatus']              = "Estado padrão";
$GLOBALS['strStatus']                     = "Estado";
$GLOBALS['strLinkedTrackers']             = "Rastreadores vinculados";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "Janela de conversão";
$GLOBALS['strUniqueWindow']               = "Janela única";
$GLOBALS['strClick']                      = "Clique";
$GLOBALS['strView']                       = "Visualizar";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Impressão";
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
$GLOBALS['strConversionType']             = "Tipo de conversão";
$GLOBALS['strLinkCampaignsByDefault']     = "vincular campanhas novas por padrão";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "por cada impressão";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "Banner";
$GLOBALS['strBanners']                       = "Banners";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "Adicionar novo banner";
$GLOBALS['strAddBanner_Key']                 = "Adicionar <u>n</u>ovo banner";
$GLOBALS['strBannerToCampaign']              = "Sua campanha";
$GLOBALS['strModifyBanner']                  = "Modificar banner";
$GLOBALS['strActiveBanners']                 = "Banners ativos";
$GLOBALS['strTotalBanners']                  = "Total de banners";
$GLOBALS['strShowBanner']                    = "Mostrar banners";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Remover todos os banners";
$GLOBALS['strActivateAllBanners']            = "Ativar todos os banners";
$GLOBALS['strDeactivateAllBanners']          = "Desativar todos os banners";
$GLOBALS['strBannerOverview']                = "Visão geral dos banners";
$GLOBALS['strBannerProperties']              = "Informações do banner";
$GLOBALS['strBannerHistory']                 = "Histórico do banner";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "There are currently no banners defined for this campaign.";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "Atualmente nenhum website esta definido. Para criar uma zona, <a href='affiliate-edit.php'>adicione um website</a> primeiro.";
$GLOBALS['strConfirmDeleteBanner']           = "Deseja realmente remover este banner?";
$GLOBALS['strConfirmDeleteBanners']          = "Deseja realmente remover este banner?";
$GLOBALS['strConfirmDeleteAllBanners']       = "Deseja realmente remover todos banners desta campanha?";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "Mostrar campanhas superiores";
$GLOBALS['strHideParentCampaigns']           = "Ocultar campanhas superiores";
$GLOBALS['strHideInactiveBanners']           = "Ocultar banners inativos";
$GLOBALS['strInactiveBannersHidden']         = "banner(s) inativo(s) ocultado(s)";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "Impossível anexar outros banners a anúncios de texto.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Atenção, possivelmente falta uma";
$GLOBALS['strWarningMissingClosing']         = "tag de fechamento \">\"";
$GLOBALS['strWarningMissingOpening']         = "tag de abertura \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "Enviar de qualquer forma";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "em"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Preferências dos Anúncios";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Banners padrão";
$GLOBALS['strDefaultBannerUrl']                      = "URL padrão de imagens";
$GLOBALS['strDefaultBannerDestination']              = "URL padrão de destino";
$GLOBALS['strAllowedBannerTypes']                    = "Tipos de banner permitidos";
$GLOBALS['strTypeSqlAllow']                          = "Permitir banners locais em SQL";
$GLOBALS['strTypeWebAllow']                          = "Permitir banners locais em disco";
$GLOBALS['strTypeUrlAllow']                          = "Permitir banners externos";
$GLOBALS['strTypeHtmlAllow']                         = "Permitir banners em HTML";
$GLOBALS['strTypeTxtAllow']                          = "Permitir Anúncios de texto";
$GLOBALS['strTypeHtmlSettings']                      = "Opções de banners HTML";
$GLOBALS['strTypeHtmlAuto']                          = "Alterar automaticamente o código HTML de banners para permitir rastreamento de cliques";
$GLOBALS['strTypeHtmlPhp']                           = "Permitir que expressões PHP sejam executadas dentro de anúncios HTML";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "Por favor escolha o tipo de banner";
$GLOBALS['strMySQLBanner']             = "Upload a local banner to the database";
$GLOBALS['strWebBanner']               = "Upload a local banner to the webserver";
$GLOBALS['strURLBanner']               = "Link an external banner";
$GLOBALS['strHTMLBanner']              = "Create an HTML banner";
$GLOBALS['strTextBanner']              = "Create a Text banner";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "Deseja manter sua <br />imagem atual ou fazer<br />upload de uma nova?";
$GLOBALS['strUploadOrKeepAlt']        = "Deseja manter sua <br />imagem de backup atual ou fazer <br />upload de uma nova?";
$GLOBALS['strNewBannerFile']         = "Selecione a imagem que deseja <br />usar para este banner<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Selecione a imagem de backup que deseja <br />usar caso o navegador<br />não aceite rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "URL da Imagem (incl. http://)";
$GLOBALS['strURL']                     = "URL de destino (incl. http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "Palavras-chave";
$GLOBALS['strTextBelow']             = "Texto abaixo  da imagem";
$GLOBALS['strWeight']                 = "Peso";
$GLOBALS['strAlt']                     = "Texto alternativo";
$GLOBALS['strStatusText']            = "Texto de status";
$GLOBALS['strBannerWeight']            = "Peso do banner";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Banner HTML genérico";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "Genérico";
$GLOBALS['strSwfTransparency']		   = "Permitir fundo transparente";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Verificar por link codificados dentro do arquivo Flash";
$GLOBALS['strConvertSWFLinks']        = "Converter links do Flash";
$GLOBALS['strHardcodedLinks']        = "Links codificados no Flash";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Comprimir arquivo SWF para download mais rápido(Flash Player 6 necessário)";
$GLOBALS['strOverwriteSource']        = "Sobrescrever parâmetro original";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "Contas do AdSense";
$GLOBALS['strLinkAdSenseAccount']         = "Link para conta do AdSense";
$GLOBALS['strCreateAdSenseAccount']       = "Criar conta no AdSense";
$GLOBALS['strEditAdSenseAccount']         = "Editar conta do AdSense";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "Opções de entrega";
$GLOBALS['strACL']                        = "Entrega";
$GLOBALS['strACLAdd']                     = "Add delivery limitation";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "Sem limites";
$GLOBALS['strApplyLimitationsTo']         = "Aplicar limites a";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "Remover todos limites";
$GLOBALS['strEqualTo']                    = "é igual a";
$GLOBALS['strDifferentFrom']              = "é diferente de";
$GLOBALS['strLaterThan']                  = "depois de";
$GLOBALS['strLaterThanOrEqual']           = "depois de ou igual a";
$GLOBALS['strEarlierThan']                = "antes de";
$GLOBALS['strEarlierThanOrEqual']         = "antes de  ou igual a";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "maior que";
$GLOBALS['strLessThan']                   = "menor que";
$GLOBALS['strAND']                        = "E";                          // logical operator
$GLOBALS['strOR']                         = "OU";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "Somente mostrar este banner quando:";
$GLOBALS['strWeekDay']                    = "Dia da semana";
$GLOBALS['strWeekDays']                   = "Dias da semana";
$GLOBALS['strTime']                       = "Horário";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "Fonte";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "Cidade";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "Limitações de entrega";

$GLOBALS['strDeliveryCapping']            = "Limite de entregas por visitante";
$GLOBALS['strDeliveryCappingReset']       = "Resetar contadores de visualização após:";
$GLOBALS['strDeliveryCappingTotal']       = "no total";
$GLOBALS['strDeliveryCappingSession']     = "por sessão";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "Limitar visualização de banners a:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "Limitar visualizações da campanha a:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "Limitar visualizações de zonas a:";

// Website
$GLOBALS['strAffiliate']                = "Site";
$GLOBALS['strAffiliates']                 = "Sites";
$GLOBALS['strAffiliatesAndZones']        = "Sites e Zonas";
$GLOBALS['strAddNewAffiliate']            = "Adicionar novo site";
$GLOBALS['strAddNewAffiliate_Key']        = "Adicionar <u>n</u>ovo site";
$GLOBALS['strAddAffiliate']                = "Criar um site";
$GLOBALS['strAffiliateProperties']        = "Informações do site";
$GLOBALS['strAffiliateOverview']        = "Visão Geral de Sites";
$GLOBALS['strAffiliateHistory']            = "Histórico do site";
$GLOBALS['strZonesWithoutAffiliate']    = "Zonas sem site";
$GLOBALS['strMoveToNewAffiliate']        = "Mover para um novo site";
$GLOBALS['strNoAffiliates']                = "Atualmente nenhum website esta definido. Para criar uma zona, <a href='affiliate-edit.php'>adicione um website</a> primeiro.";
$GLOBALS['strConfirmDeleteAffiliate']    = "Deseja realmente remover este site?";
$GLOBALS['strConfirmDeleteAffiliates']   = "Deseja realmente remover este site?";
$GLOBALS['strMakePublisherPublic']        = "Transformar zonas deste site em zonas publicamente acessíveis";
$GLOBALS['strAffiliateInvocation']      = "Código de inserção";
$GLOBALS['strAdvertiserSetup']          = "Inscrição de anunciante";
$GLOBALS['strTotalAffiliates']          = "Total de sites";
$GLOBALS['strInactiveAffiliatesHidden'] = "site(s) inativo(s) ocultado(s)";
$GLOBALS['strShowParentAffiliates']     = "Mostrar sites superiores";
$GLOBALS['strHideParentAffiliates']     = "Ocultar sites superiores";

// Website (properties)
$GLOBALS['strWebsite']                      = "Site";
$GLOBALS['strWebsiteURL']                      = "URL do website";
$GLOBALS['strMnemonic']                     = "Mnemônica";
$GLOBALS['strAllowAffiliateModifyInfo']     = "Permitir que este usuário altere suas configurações";
$GLOBALS['strAllowAffiliateModifyZones']    = "Permitir que este usuário modifique suas zonas";
$GLOBALS['strAllowAffiliateLinkBanners']    = "Permitir que este usuário ligue banners às suas zonas";
$GLOBALS['strAllowAffiliateAddZone']        = "Permitir que este usuário defina novas zonas";
$GLOBALS['strAllowAffiliateDeleteZone']     = "Permitir que este usuário remova zonas existentes";
$GLOBALS['strAllowAffiliateGenerateCode']   = "Permitir que este usuário gere o código de inserção";
$GLOBALS['strAllowAffiliateZoneStats']      = "Permitir que este usuário veja estatísticas da zona";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Permitir que este usuário veja apenas conversões aprovadas ou pendentes";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Informações de pagamento";
$GLOBALS['strAddress']                      = "Endereço";
$GLOBALS['strPostcode']                     = "Código Postal (CEP)";
$GLOBALS['strCity']                         = "Cidade";
$GLOBALS['strCountry']                      = "País";
$GLOBALS['strPhone']                        = "Telefone";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Contato da conta";
$GLOBALS['strPayeeName']                    = "Nome do recipiente";
$GLOBALS['strTaxID']                        = "ID da Taxa";
$GLOBALS['strModeOfPayment']                = "Forma de pagamento";
$GLOBALS['strPaymentChequeByPost']          = "Cheque pelo correio";
$GLOBALS['strCurrency']                     = "Moeda";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Outros dados";
$GLOBALS['strUniqueUsersMonth']             = "Visitantes únicos/mês";
$GLOBALS['strUniqueViewsMonth']             = "Visualizações únicas/mês";
$GLOBALS['strPageRank']                     = "Rank da página";
$GLOBALS['strCategory']                     = "Categoria";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Arquivo de ajuda";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "Sites e Zonas";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "Zona";
$GLOBALS['strZones']                        = "Zonas";
$GLOBALS['strAddNewZone']                   = "Adicionar nova zona";
$GLOBALS['strAddNewZone_Key']               = "Adicionar <u>n</u>ova zona";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "Modificar Zona";
$GLOBALS['strZoneToWebsite']                = "Nenhum site";
$GLOBALS['strLinkedZones']                  = "Zonas vinculadas";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Visão Geral de Zonas";
$GLOBALS['strZoneProperties']               = "Informações da Zona";
$GLOBALS['strZoneHistory']                  = "Histórico da Zona";
$GLOBALS['strNoZones']                      = "There are currently no zones defined for this website.";
$GLOBALS['strNoZonesAddWebsite']            = "Atualmente nenhum website esta definido. Para criar uma zona, <a href='affiliate-edit.php'>adicione um website</a> primeiro.";
$GLOBALS['strConfirmDeleteZone']            = "Deseja realmente remover esta zona?";
$GLOBALS['strConfirmDeleteZones']           = "Deseja realmente remover esta zona?";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "Ainda existem campanhas ligadas a esta zona, caso você a remova estas campanhas não serão executadas e você não será pago por elas";
$GLOBALS['strZoneType']                     = "Tipo de zona";
$GLOBALS['strBannerButtonRectangle']        = "Banner, Botão ou retângulo";
$GLOBALS['strInterstitial']                 = "Intersticial ou DHTML Flutuante";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "Anúncio de texto";
$GLOBALS['strEmailAdZone']                  = "Zona de E-mail/Newsletter";
$GLOBALS['strZoneClick']                    = "Zona de rastreamento de cliques";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "Mostrar banners compatíveis";
$GLOBALS['strHideMatchingBanners']          = "Ocultar banners compatíveis";
$GLOBALS['strBannerLinkedAds']              = "Banners vinculados a esta zona";
$GLOBALS['strCampaignLinkedAds']            = "Campanhas vinculadas a esta zona";
$GLOBALS['strTotalZones']                   = "Total de Zonas";
$GLOBALS['strInactiveZonesHidden']          = "zona(s) inativa(s) oculta(s)";
$GLOBALS['strWarnChangeZoneType']           = "Alterar o tipo de zona para texto ou e-mail irá remover vinculo com todos banners/campanhas devido a restrições destes tipos de zonas\\n                                                <ul>\\n                                                    <li>Zonas de texto podem te apenas anúncios de texto</li>\\n                                                    <li>Zonas de E-mail podem ter apenas um banner ativo por vez</li>\\n                                                </ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Alterar o tamanho da zona irá remover vínculos de banners incompatíveis com o novo tamanho, e irá adicionar qualquer banner de campanhas vinculadas que seja compatível';
$GLOBALS['strWarnChangeBannerSize']         = 'Alterar o tamanho do banner irá remover seu vínculo de qualquer zona que não for compatível com o novo tamanho, se a <strong>campanha</strong> deste banner estiver ligada a uma zona do novo tamanho, o banner será automaticamente vinculado.';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Previsão de inventário';
$GLOBALS['strZonesOfWebsite']               = 'em'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones']                  = "Back to zones";

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)']        = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)']        = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Button 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Button 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Rectangle (180 x 150) *";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Square Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Medium Rectangle (300 x 250) *";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Large Rectangle (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Wide Skyscraper (160 x 600) *";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "Avançado";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "Configurações de corrente";
$GLOBALS['strZoneNoDelivery']            = "Se nenhum banner desta zona puder ser mostrado, tente...";
$GLOBALS['strZoneStopDelivery']            = "Parar entrega e não mostrar nenhum banner";
$GLOBALS['strZoneOtherZone']            = "Mostrar a seguinte zona";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "Sempre inserir este código HTML após anúncios de texto apresentados por esta zona";
$GLOBALS['strAppendSettings']            = "Configurações de Anexos e prefixos";
$GLOBALS['strZoneForecasting']            = "Configurações de Previsão da Zona";
$GLOBALS['strZonePrependHTML']            = "Sempre inserir este código HTML antes de anúncios de texto apresentados por esta zona";
$GLOBALS['strZoneAppendHTML']            = "Sempre inserir este código HTML após anúncios de texto apresentados por esta zona";
$GLOBALS['strZoneAppendNoBanner']        = "Anexar mesmo que nenhum banner seja apresentado";
$GLOBALS['strZoneAppendType']            = "Tipo de sufixo";
$GLOBALS['strZoneAppendHTMLCode']        = "Código HTML";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup ou Intersticial";
$GLOBALS['strZoneAppendSelectZone']        = "Sempre anexar o seguinte popup ou intersticial para banners mostrados por esta zona";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "Todos banners ligados a esta zona estão inativos <br />Essa é a corrente que será seguida:";
$GLOBALS['strZoneProbNullPri']            = "Nenhum banner ativo vinculado a esta zona.";
$GLOBALS['strZoneProbListChainLoop']    = "Seguir esta corrente causará uma referência circular. Entrega para esta zona foi interrompida.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Por favor escolha o que vincular com esta zona";
$GLOBALS['strLinkedBanners']            = "vincular banners individuais";
$GLOBALS['strCampaignDefaults']            = "vincular banners pelas campanhas a que pertencem";
$GLOBALS['strLinkedCategories']         = "Vincular banners por categoria";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "Palavra-chave";
$GLOBALS['strIncludedBanners']            = "Banners vinculados";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "Não existem zonas compatíveis com este banner";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} banners compatíveis";
$GLOBALS['strNoCampaignsToLink']        = "Nenhuma campanha compatível com esta zona esta disponível";
$GLOBALS['strNoTrackersToLink']            = "Nenhum rastreador compatível com esta campanha esta disponível";
$GLOBALS['strNoZonesToLinkToCampaign']  = "Nenhuma zona compatível com esta campanha esta disponível";
$GLOBALS['strSelectBannerToLink']        = "Selecione o banner que deseja vincular a esta zona:";
$GLOBALS['strSelectCampaignToLink']        = "Selecione a campanha que deseja vincular a esta zona:";
$GLOBALS['strSelectAdvertiser']         = "Selecionar anunciante";
$GLOBALS['strSelectPlacement']          = "Selecionar campanha";
$GLOBALS['strSelectAd']                 = "Selecionar banner";
$GLOBALS['strSelectPublisher']          = "Escolher o site";
$GLOBALS['strSelectZone']               = "Escolher zona";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Anexar código de rastreamento";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "Pendente";
$GLOBALS['strStatusApproved']           = "Aprovado";
$GLOBALS['strStatusDisapproved']        = "Rejeitado";
$GLOBALS['strStatusDuplicate']          = "Duplicar";
$GLOBALS['strStatusOnHold']             = "Em espera";
$GLOBALS['strStatusIgnore']             = "Ignorar";
$GLOBALS['strConnectionType']           = "Tipo";
$GLOBALS['strConnTypeSale']             = "Venda";
$GLOBALS['strConnTypeLead']             = "Chamada";
$GLOBALS['strConnTypeSignUp']           = "Registrar-se";
$GLOBALS['strShortcutEditStatuses'] = "Editar estados";
$GLOBALS['strShortcutShowStatuses'] = "Mostrar estados";

// Statistics
$GLOBALS['strStats']                     = "Estatísticas";
$GLOBALS['strNoStats']                   = "Nenhum dado estatístico disponível";
$GLOBALS['strNoTargetingStats']          = "Nenhum dado estatístico de direcionamento disponível";
$GLOBALS['strNoStatsForPeriod']          = "Nenhum dado estatístico disponível para o período de %s a %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "Nenhum dado estatístico de direcionamento disponível para o período de %s a %s";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "Histórico Global";
$GLOBALS['strDailyHistory']              = "Histórico diário";
$GLOBALS['strDailyStats']                = "Estatísticas diárias";
$GLOBALS['strWeeklyHistory']             = "Histórico semanal";
$GLOBALS['strMonthlyHistory']            = "Histórico mensal";
$GLOBALS['strCreditStats']               = "Estatísticas de crédito";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "Total para este período";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Distribuição por site";
$GLOBALS['strCampaignDistribution']      = "Distribuição por campanha";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Estatísticas de direcionamento";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "Visualizar por";
$GLOBALS['strBreakdownByDay']            = "Dia";
$GLOBALS['strBreakdownByWeek']           = "Semana";
$GLOBALS['strBreakdownByMonth']          = "Mês";
$GLOBALS['strBreakdownByDow']            = "Dia da semana";
$GLOBALS['strBreakdownByHour']           = "Hora";
$GLOBALS['strItemsPerPage']              = "Itens por página";
$GLOBALS['strDistributionHistory']       = "Histórico de distribuição";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Mostrar <u>G</u>ráfico de estatísticas";
$GLOBALS['strExportStatisticsToExcel']   = "<u>E</u>xportar estatísticas para o Excel";
$GLOBALS['strGDnotEnabled']              = "Você precisa ter a biblioteca GD para PHP habilitada para exibir gráficos. <br />Por favor veja <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> para maiores informações, inclusive como instalar GD em seu servidor.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Área";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "Vencimento";
$GLOBALS['strNoExpiration']           = "Sem data de vencimento";
$GLOBALS['strEstimated']              = "Vencimento estimado";
$GLOBALS['strNoExpirationEstimation'] = "Sem prazo estimado de vencimento ainda";
$GLOBALS['strDaysAgo']                = "dias atás";
$GLOBALS['strCampaignStop']           = "Fim da Campanha";

// Reports
$GLOBALS['strReports']                = "Relatórios";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Relatórios de Sites";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "Data de início";
$GLOBALS['strEndDate']                = "Data de término";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Período";
$GLOBALS['strLimitations']            = "Limites";
$GLOBALS['strWorksheets']             = "Planilhas";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "Todos anunciantes";
$GLOBALS['strAnonAdvertisers']           = "Anunciantes anônimos";
$GLOBALS['strAllPublishers']             = "Todos sites";
$GLOBALS['strAnonPublishers']            = "Sites anônimos";
$GLOBALS['strAllAvailZones']             = "Todas zonas disponíveis";

// Userlog
$GLOBALS['strUserLog']                = "Log de usuários";
$GLOBALS['strUserLogDetails']        = "Detalhes do log de usuários";
$GLOBALS['strDeleteLog']            = "Remover log";
$GLOBALS['strAction']                = "Ação";
$GLOBALS['strNoActionsLogged']        = "Nenhuma ação registrada";

// Code generation
$GLOBALS['strGenerateBannercode']        = "Seleção direta";
$GLOBALS['strChooseInvocationType']        = "Por favor escolha o tipo de inserção de banner";
$GLOBALS['strGenerate']                    = "Gerar";
$GLOBALS['strParameters']                = "Parâmetros das tags";
$GLOBALS['strFrameSize']                = "Tamanho da moldura";
$GLOBALS['strBannercode']                = "Código do banner";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "Voltar para lista de relatórios";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
$GLOBALS['strCharset']                  = "Conjunto de caracteres";
$GLOBALS['strAutoDetect']                   = "Auto-detectar";
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
$GLOBALS['strMySQLError']                       = "SQL Error:";
$GLOBALS['strErrorDatabaseConnetion']           = "Database connection error.";
$GLOBALS['strErrorCantConnectToDatabase']       = "A fatal error occurred %s can't connect to the database. Because
                                                   of this it isn't possible to use the administrator interface. The delivery
                                                   of banners might also be affected. Possible reasons for the problem are:
                                                   <ul>
                                                     <li>The database server isn't functioning at the moment</li>
                                                     <li>The location of the database server has changed</li>
                                                     <li>The username or password used to contact the database server are not correct</li>
                                                     <li>PHP has not loaded the MySQL Extension</li>
                                                   </ul>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] Um erro ocorreu enquanto pegava anunciantes da base de dados.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] Um erro ocorreu enquanto pegava banners da base de dados.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] Um erro ocorreu enquanto pegava impressões da base de dados.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] Um erro ocorreu enquanto pegava cliques da base de dados.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] Um erro ocorreu enquanto pegava conversões da base de dados.";
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "Nenhum resultado encontrado";
$GLOBALS['strErrorOccurred']                    = "Um erro ocorreu";
$GLOBALS['strErrorUploadSecurity']              = "Foi detectado um possível problema de segurança, upload interrompido!";
$GLOBALS['strErrorUploadBasedir']               = "Não foi possível acessar o arquivo enviado, provavelmente devido a uma restrição de safemode ou open_basedir";
$GLOBALS['strErrorUploadUnknown']               = "Não foi possível acessar o arquivo enviado, devido a um erro desconhecido. Verifique a configuração de seu PHP";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "Um erro ocorreu ao acessar a base de dados";
$GLOBALS['strErrorDBSerious']                   = "Um grave problema foi detectado com a base de dados";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "A tabela da base de dados pode estar corrompida e necessita de reparos. Para mais informações sobre tabelas corrompidas leia o capitulo <i>Troubleshooting</i> do <i>Guia do Administrador</i>.";
$GLOBALS['strErrorDBContact']                   = "Por favor notifique o administrador deste sistema sobre este problema.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "Não foi possível vincular este banner a esta zona pois:";
$GLOBALS['strUnableToLinkBanner']               = "Impossível vincular este banner:";
$GLOBALS['strErrorEditingCampaign']             = "Erro ao atualizar a campanha:";
$GLOBALS['strUnableToChangeCampaign']           = "Impossível aplicar esta alteração pois:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "formatação incorreta de números no campo de Receita";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Erro ao atualizar a zona:";
$GLOBALS['strUnableToChangeZone']               = "Impossível aplicar esta alteração pois:";
$GLOBALS['strDatesConflict']                    = "datas conflitam com:";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Algumas destas estatísticas foram logadas em um fuso horário não-UTC, e podem não ser apresentadas no fuso correto";
$GLOBALS['strWarningInaccurateReadMore']        = "Leia mais sobre isso";
$GLOBALS['strWarningInaccurateReport']          = "Algumas destas estatísticas neste relatório foram logadas em um fuso horário não-UTC, e podem não ser apresentadas no fuso correto";

//Validation
$GLOBALS['strRequiredFieldLegend']              = "denotes required field";
$GLOBALS['strFormContainsErrors']               = "Form contains errors, please correct the marked fields below.";
$GLOBALS['strRequiredField']                    = "Campo obrigatório";
$GLOBALS['strXRequiredField']                   = "%s is required";
$GLOBALS['strMaxLengthField']                   = "Please enter maximum %s characters";
$GLOBALS['strEmailField']                       = "Please enter a valid email";
$GLOBALS['strNumericField']                     = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField']             = "Must be greater than 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s must be greater than 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s must be a positive whole number";
$GLOBALS['strXUniqueField']                     = "%s with this %s already exists";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "Must be a decimal with maximum %s decimal places";
$GLOBALS['strInvalidWebsiteURL']                = "Invalid Website URL";


// Email
$GLOBALS['strSirMadam']                         = "Sr./Sra.";
$GLOBALS['strMailSubject']                      = "Relatório de Anunciante";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Caro(a) {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Abaixo poderá ver as estatísticas de banners para {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campanha ativada";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campanha desativada";
$GLOBALS['strMailBannerActivated']              = "A sua campanha demonstrada abaixo foi ativada pois \\na data de ativação foi alcançada.";
$GLOBALS['strMailBannerDeactivated']            = "A sua campanha demonstrada abaixo foi desativada porque";
$GLOBALS['strMailFooter']                       = "Atenciosamente,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "Se deseja continuar anunciando em nosso site, sinta-se a vontade em nos contactar.\\nEstaremos felizes em lhe receber.";
$GLOBALS['strClientDeactivated']                = "Esta campanha não esta ativa porque";
$GLOBALS['strBeforeActivate']                   = "a data de ativação ainda não foi alcançada";
$GLOBALS['strAfterExpire']                      = "a data de vencimento foi alcançada";
$GLOBALS['strNoMoreImpressions']                = "não há mais Impressões restantes";
$GLOBALS['strNoMoreClicks']                     = "não há mais Cliques restantes";
$GLOBALS['strNoMoreConversions']                = "não há mais Vendas restantes";
$GLOBALS['strWeightIsNull']                     = "seu peso esta definido para zero";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "As Impressões, Cliques, ou conversões restantes para este banner estão chegando ao fim {limit}.\\nSeu banner será desativado quando não houver nenhuma restante. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressões/Cliques/Conversões estão no fim";
$GLOBALS['strNoViewLoggedInInterval']           = "Nenhum Impressão foi registrada durante o período deste relatório";
$GLOBALS['strNoClickLoggedInInterval']          = "Nenhum Clique foi registrada durante o período deste relatório";
$GLOBALS['strNoConversionLoggedInInterval']     = "Nenhum Conversão foi registrada durante o período deste relatório";
$GLOBALS['strMailReportPeriod']                 = "Este relatório inclui estatísticas de {startdate} até {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "Este relatório possui todas estatísticas até {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "Nenhum dado estatístico disponível para esta campanha";
$GLOBALS['strImpendingCampaignExpiry']          = "Vencimento de campanha iminente";
$GLOBALS['strYourCampaign']                     = "Sua campanha";
$GLOBALS['strTheCampiaignBelongingTo']          = "A campanha pertencente a";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} apresentada abaixo vencerá dia {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} apresenta abaixo tem menos de {limit} impressões restantes.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "Por conseqüência, a campanha será em breve automaticamente desabilitada e \\nos seguintes banners também:";

// Priority
$GLOBALS['strPriority']                         = "Prioridade";
$GLOBALS['strSourceEdit']                       = "Editar fontes";

// Preferences
$GLOBALS['strPreferences']                      = "Preferências";
$GLOBALS['strUserPreferences']                  = "Preferências do Usuário";
$GLOBALS['strChangePassword']                   = "Trocar senha";
$GLOBALS['strChangeEmail']                      = "Trocar e-mail";
$GLOBALS['strCurrentPassword']                  = "Senha Atual";
$GLOBALS['strChooseNewPassword']                = "Escolha uma nova senha";
$GLOBALS['strReenterNewPassword']               = "Re-digite a nova senha";
$GLOBALS['strNameLanguage']                     = "Nome e Língua";
$GLOBALS['strAccountPreferences']               = "Preferências da conta";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Preferências de E-mails com relatórios de campanhas";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "Alertas de e-mail do Administrador";
$GLOBALS['strAgencyEmailWarnings']              = "Alertas de e-mail de Agências";
$GLOBALS['strAdveEmailWarnings']                = "Alertas de e-mail de Anunciantes";
$GLOBALS['strFullName']                         = "Nome completo";
$GLOBALS['strEmailAddress']                     = "Endereço de e-mail";
$GLOBALS['strUserDetails']                      = "Detalhes do usuário";
$GLOBALS['strLanguageTimezone']                 = "Línguas e Fusos Horários";
$GLOBALS['strLanguageTimezonePreferences']      = "Preferências de Idiomas e Fusos Horários";
$GLOBALS['strUserInterfacePreferences']         = "Preferências da Interface de usuários";
$GLOBALS['strPluginPreferences']                = "Preferências gerais";
$GLOBALS['strInvocationPreferences']            = "Preferências de inserção";
$GLOBALS['strColumnName']                       = "Nome da coluna";
$GLOBALS['strShowColumn']                       = "Mostrar Coluna";
$GLOBALS['strCustomColumnName']                 = "Nome de coluna personalizado";
$GLOBALS['strColumnRank']                       = "Ranking da coluna";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Receita";
$GLOBALS['strNumberOfItems']                       = "Número de itens";
$GLOBALS['strRevenueCPC']                          = "Receita de CPC";
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
$GLOBALS['strPendingConversions']               = "Conversões pendentes";
$GLOBALS['strImpressionSR']                     = "Impressão SR";
$GLOBALS['strClickSR']                          = "Cliques SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Impressões";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "Rec.";
$GLOBALS['strBasketValue_short']                = "VM";
$GLOBALS['strNumberOfItems_short']              = "Num. itm.";
$GLOBALS['strRevenueCPC_short']                 = "Rec. CPC";
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
$GLOBALS['strRequests_short']                   = "Req.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "Cliques";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Conv. pendentes";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Cliques SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "Configurações global";
$GLOBALS['strGeneralSettings']              = "Configurações gerais";
$GLOBALS['strMainSettings']                 = "Principais configurações";
$GLOBALS['strAdminSettings']                = "Configurações de administração";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Escolher seção';

// Product Updates
$GLOBALS['strProductUpdates']         = "Atualizações do produto";
$GLOBALS['strViewPastUpdates']        = "Gerenciar Atualizações anteriores e backups";
$GLOBALS['strFromVersion']            = "Da versão";
$GLOBALS['strToVersion']              = "Para versão";
$GLOBALS['strToggleDataBackupDetails']= "Ligar/Desligar detalhes de backup de dados";
$GLOBALS['strClickViewBackupDetails'] = "clique aqui para mostrar detalhes de backup";
$GLOBALS['strClickHideBackupDetails'] = "clique aqui para esconder detalhes de bakup";
$GLOBALS['strShowBackupDetails']      = "Mostrar detalhes de bakup";
$GLOBALS['strHideBackupDetails']      = "Esconder detalhes de backup";
$GLOBALS['strInstallation']           = "Instalação";
$GLOBALS['strBackupDeleteConfirm']    = "Deseja realmente remover todos backups criados por este upgrade?";
$GLOBALS['strDeleteArtifacts']         = "Remover artefatos";
$GLOBALS['strArtifacts']              = "Artefatos";
$GLOBALS['strBackupDbTables']         = "Fazer backup das tabelas da Base de dados";
$GLOBALS['strLogFiles']               = "Registrar arquivos";
$GLOBALS['strConfigBackups']          = "Backup de configurações";
$GLOBALS['strUpdatedDbVersionStamp']  = "Marca de versão da base de dados atualizada";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "ATUALIZAÇÃO CONCLUÍDA";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "FALHA NA ATUALIZAÇÃO";

// Agency
$GLOBALS['strAgencyManagement']              = "Gerenciamento de contas";
$GLOBALS['strAgency']                      = "Conta";
$GLOBALS['strAgencies']                   = "Contas";
$GLOBALS['strAddAgency']                   = "Adicionar nova conta";
$GLOBALS['strAddAgency_Key']               = "Adicionar <u>n</u>ova conta";
$GLOBALS['strTotalAgencies']               = "Total de contas";
$GLOBALS['strAgencyProperties']              = "Propriedades da conta";
$GLOBALS['strNoAgencies']                 = "Atualmente nenhuma conta esta definida";
$GLOBALS['strConfirmDeleteAgency']           = "Deseja realmente remover esta conta?";
$GLOBALS['strHideInactiveAgencies']          = "Escolher contas inativas";
$GLOBALS['strInactiveAgenciesHidden']     = "conta(s) inativa(s) oculta(s)";
$GLOBALS['strAllowAgencyEditConversions'] = "Permitir que este usuário altere conversões";
$GLOBALS['strAllowMoreReports']           = "Permitir botão de 'Mais Relatórios'";
$GLOBALS['strSwitchAccount']              = "Trocar para esta conta";

// Channels
$GLOBALS['strChannel']                    = "Canal de direcionamento";
$GLOBALS['strChannels']                   = "Canais de direcionamento";
$GLOBALS['strChannelOverview']            = "Visão geral do canais de direcionamento";
$GLOBALS['strChannelManagement']          = "Gerenciamento de Canais de direcionamento";
$GLOBALS['strAddNewChannel']              = "Adicionar novo canal de direcionamento";
$GLOBALS['strAddNewChannel_Key']          = "Adicionar <u>n</u>ovo canal de direcionamento";
$GLOBALS['strChannelToWebsite']           = "Nenhum site";
$GLOBALS['strNoChannels']                 = "Nenhum canal de direcionamento definido";
$GLOBALS['strNoChannelsAddWebsite']       = "Atualmente nenhum website esta definido. Para criar uma zona, <a href='affiliate-edit.php'>adicione um website</a> primeiro.";

$GLOBALS['strEditChannelLimitations']     = "Editar limitações do canal de direcionamento";
$GLOBALS['strChannelProperties']          = "Propriedades do canal de direcionamento";
$GLOBALS['strChannelLimitations']         = "Opções de entrega";
$GLOBALS['strConfirmDeleteChannel']       = "Deseja realmente remover este canal de direcionamento?";
$GLOBALS['strConfirmDeleteChannels']      = "Deseja realmente remover este canal de direcionamento?";
$GLOBALS['strModifychannel']              = "Editar canal de direcionamento";
$GLOBALS['strChannelsOfWebsite']          = 'em'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Nome da variável";
$GLOBALS['strVariableDescription']     = "Descrição";
$GLOBALS['strVariableDataType']         = "Tipo de dado";
$GLOBALS['strVariablePurpose']       = "Função/Objetivo";
$GLOBALS['strGeneric']               = "Genérico";
$GLOBALS['strBasketValue']           = "Valor da cesta";
$GLOBALS['strNumItems']              = "Número de itens";
$GLOBALS['strVariableIsUnique']      = "Deduzir conversões?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Número";
$GLOBALS['strString']                 = "Texto";
$GLOBALS['strTrackFollowingVars']     = "Rastrear a seguinte variável";
$GLOBALS['strAddVariable']             = "Adicionar variável";
$GLOBALS['strNoVarsToTrack']         = "Nenhuma variável para rastrear.";
$GLOBALS['strVariableHidden']       = "Esconder variável de sites?";
$GLOBALS['strVariableRejectEmpty']  = "Rejeitar se estiver vazio?";
$GLOBALS['strTrackingSettings']     = "Configurações de rastreamento";
$GLOBALS['strTrackerType']          = "Tipo de rastreador";
$GLOBALS['strTrackerTypeJS']        = "Rastrear variáveis de JavaScript";
$GLOBALS['strTrackerTypeDefault']   = "Rastrear variáveis de JavaScript (compatibilidade retroativa, é necessário usar 'escape')";
$GLOBALS['strTrackerTypeDOM']       = "Rastrear elementos HTML usando DOM";
$GLOBALS['strTrackerTypeCustom']    = "Código Javascript personalizado";
$GLOBALS['strVariableCode']         = "Código de rastreamento em Javascript";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Anunciantes e campanhas";
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
$GLOBALS['strForgotPassword']         = "Esqueceu sua senha?";
$GLOBALS['strPasswordRecovery']       = "Recuperação de senha";
$GLOBALS['strEmailRequired']          = "E-mail é um campo obrigatório";
$GLOBALS['strPwdRecEmailSent']        = "E-mail de recuperação de senha enviado";
$GLOBALS['strPwdRecEmailNotFound']    = "E-mail não encontrado";
$GLOBALS['strPwdRecPasswordSaved']    = "A nova senha foi armazenada, prossiga para fazer <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "ID incorreto";
$GLOBALS['strPwdRecEnterEmail']       = "Digite seu e-mail abaixo";
$GLOBALS['strPwdRecEnterPassword']    = "Digite sua nova senha abaixo";
$GLOBALS['strPwdRecReset']            = "Resetar senha";
$GLOBALS['strPwdRecResetLink']        = "Link para resetar a senha";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Resetar senha para este usuário";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s recuperação de senha";
$GLOBALS['strProceed']                = "Prosseguir >";
$GLOBALS['strNotifyPageMessage']      = "Um e-mail foi enviado para o endereço informado, nele esta incluso um link que irá permitir a re-configuração de sua senha.<br />Permita alguns minutos para o e-mail chegar.<br />Caso não receba o e-mail, verifique a pasta de spam.<br /><a href='index.php'>Voltar para página de login.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "e itens adicionais";
$GLOBALS['strFor']                    = "para";
$GLOBALS['strHas']                    = "tem";
$GLOBALS['strAdZoneAsscociation']     = "Associação de Zona de anúncios";
$GLOBALS['strBinaryData']             = "Dados binários";
$GLOBALS['strAuditTrailDisabled']     = "O Rastro de Auditoria foi desabilitado pelo administrador. Nenhum evento será logado e mostrado na lista da auditoria.";
$GLOBALS['strAccount']                  = "Conta";
$GLOBALS['strAccountUserAssociation']   = "Associação de conta e usuário";
$GLOBALS['strEvent']                    = "Evento";
$GLOBALS['strImage']                    = "Imagem";
$GLOBALS['strCampaignZoneAssociation']      = "Associação de campanha e zona";
$GLOBALS['strAccountPreferenceAssociation'] = "Associação de conta e preferências";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "Nenhuma atividade dos usuários registrada do período escolhido.";
$GLOBALS['strAuditTrail']             = "Rastros de auditoria";
$GLOBALS['strAuditTrailSetup']          = "Configurar o Rastreamento de Auditoria hoje";
$GLOBALS['strAuditTrailGoTo']           = "Ir para log de Auditoria";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Ir para página de campanhas";
$GLOBALS['strCampaignSetUp']            = "Configurar uma campanha hoje";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>Não há atividade de campanha para apresentar.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "Nenhuma campanha começou ou terminou no prazo escolhido";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>Para visualizar campanhas que iniciaram ou terminam durante o período que escolheu, o Rastro de Auditoria deve estar ativado</li>	        <li>Você esta vendo esta mensagem pois o Rastro de Auditoria esta desativado</li>";
$GLOBALS['strCampaignAuditTrailSetup']   = "Ativar rastro de auditoria para começar a visualizar campanhas";

$GLOBALS['strUnsavedChanges']       = "Você tem alterações não salvas nesta página, não esqueça de apertar \"Salvar Alterações\" quando terminar";
$GLOBALS['strDeliveryLimitationsDisagree'] = "ATENÇÃO: As limitações do núcleo de entrega <strong>NÃO BATEM</strong> com as limitações mostradas abaixo<br />Aperta salvar alterações para atualizar as regras do núcleo de entrega";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Some of delivery limitations reports incorrect values:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "You are now working as <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "You don't have access to that page. You have been re-directed.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Advertiser <a href='%s'>%s</a> has been added, <a href='%s'>add a campaign</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Advertiser <a href='%s'>%s</a> has been updated";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Advertiser <b>%s</b> has been deleted";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "All selected advertisers have been deleted";

$GLOBALS['strTrackerHasBeenAdded'] = "Tracker <a href='%s'>%s</a> has been added";
$GLOBALS['strTrackerHasBeenUpdated'] = "Tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Variables of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Linked campaigns of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Append tracker code of tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> has been deleted";
$GLOBALS['strTrackersHaveBeenDeleted'] = "All selected trackers have been deleted";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Tracker <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Tracker <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Campaign <a href='%s'>%s</a> has been added, <a href='%s'>add a banner</a>";
$GLOBALS['strCampaignHasBeenNoBanner'] = "Campaign <a href='%s'>%s</a> has been added";
$GLOBALS['strCampaignHasBeenUpdated'] = "Campaign <a href='%s'>%s</a> has been updated";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Linked trackers of campaign <a href='%s'>%s</a> have been updated";
$GLOBALS['strCampaignHasBeenDeleted'] = "Campaign <b>%s</b> has been deleted";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "All selected campaigns have been deleted";
$GLOBALS['strCampaignHasBeenDuplicated'] = "Campaign <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "Campaign <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Banner <a href='%s'>%s</a> has been added";
$GLOBALS['strBannerHasBeenUpdated'] = "Banner <a href='%s'>%s</a> has been updated";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Advanced settings for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Delivery options for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Delivery options for banner <a href='%s'>%s</a> have been applied to %d banners";
$GLOBALS['strBannerHasBeenDeleted'] = "Banner <b>%s</b> has been deleted";
$GLOBALS['strBannersHaveBeenDeleted'] = "All selected banners have been deleted";
$GLOBALS['strBannerHasBeenDuplicated'] = "Banner <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Banner <b>%s</b> has been moved to campaign <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Banner <a href='%s'>%s</a> has been activated";
$GLOBALS['strBannerHasBeenDeactivated'] = "Banner <a href='%s'>%s</a> has been deactivated";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zone(s) linked";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zone(s) unlinked";

$GLOBALS['strWebsiteHasBeenAdded'] = "Website <a href='%s'>%s</a> has been added, <a href='%s'>add a zone</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Website <a href='%s'>%s</a> has been updated";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Website <b>%s</b> has been deleted";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "All selected website have been deleted";

$GLOBALS['strZoneHasBeenAdded'] = "Zone <a href='%s'>%s</a> has been added";
$GLOBALS['strZoneHasBeenUpdated'] = "Zone <a href='%s'>%s</a> has been updated";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Advanced settings for zone <a href='%s'>%s</a> have been updated";
$GLOBALS['strZoneHasBeenDeleted'] = "Zone <b>%s</b> has been deleted";
$GLOBALS['strZonesHaveBeenDeleted'] = "All selected zone have been deleted";
$GLOBALS['strZoneHasBeenDuplicated'] = "Zone <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Zone <b>%s</b> has been moved to website <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Banner has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Campaign has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Banner has been unlinked from zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Campaign has been unlinked from zone <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Targeting channel <a href='%s'>%s</a> has been added, <a href='%s'>change the delivery options</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Targeting channel <a href='%s'>%s</a> has been updated";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Delivery options for targeting channel <a href='%s'>%s</a> have been updated";
$GLOBALS['strChannelHasBeenDeleted'] = "Targeting channel <b>%s</b> has been deleted";
$GLOBALS['strChannelsHaveBeenDeleted'] = "All selected Targeting Channels have been deleted";
$GLOBALS['strChannelHasBeenDuplicated'] = "Targeting channel <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Your <b>%s</b> preferences has been updated";
$GLOBALS['strPreferencesHaveBeenUpdated'] = "Preferences have been updated";
$GLOBALS['strEmailChanged'] = "Your E-mail has been changed";
$GLOBALS['strPasswordChanged'] = "Your password has been changed";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> have been updated";
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
$GLOBALS['keyLinkUser']        = "u";
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
$GLOBALS['str_cs']                  = "Tcheco";
$GLOBALS['str_cy']                  = "Galês";
$GLOBALS['str_da']                  = "Dinamarques";
$GLOBALS['str_de']                  = "Alemão";
$GLOBALS['str_el']                  = "Grego";
$GLOBALS['str_en']                  = "Inglês";
$GLOBALS['str_es']                  = "Espanhol";
$GLOBALS['str_fa']                  = "Persiano";
$GLOBALS['str_fr']                  = "Francês";
$GLOBALS['str_he']                  = "Hebreu";
$GLOBALS['str_hr']                  = "Croata";
$GLOBALS['str_hu']                  = "Húngaro";
$GLOBALS['str_id']                  = "Indonésia";
$GLOBALS['str_it']                  = "Italiano";
$GLOBALS['str_ja']                  = "Japonês";
$GLOBALS['str_ko']                  = "Coreano";
$GLOBALS['str_lt']                  = "Lituano";
$GLOBALS['str_ms']                  = "Malaia";
$GLOBALS['str_nb']                  = "Norueguês bokmål";
$GLOBALS['str_nl']                  = "Holandês";
$GLOBALS['str_pl']                  = "Polonês";
$GLOBALS['str_pt_BR']               = "Portuguese Brazil";
$GLOBALS['str_pt_PT']               = "Portuguese Portugal";
$GLOBALS['str_ro']                  = "Romeno";
$GLOBALS['str_ru']                  = "Russo";
$GLOBALS['str_sk']                  = "Eslovaco";
$GLOBALS['str_sl']                  = "Eslovaco";
$GLOBALS['str_sq']                  = "Albanian";
$GLOBALS['str_sv']                  = "Sueco";
$GLOBALS['str_tr']                  = "Turco";
$GLOBALS['str_uk']                  = "Ucrâniano";
$GLOBALS['str_zh_CN']               = "Chinese Simplified";
$GLOBALS['str_zh_TW']               = "Chinese Traditional";

?>
