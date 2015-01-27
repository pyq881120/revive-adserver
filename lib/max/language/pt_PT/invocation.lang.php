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

// Other
$GLOBALS['strCopyToClipboard']                      = "Copiar para área de transferência";
$GLOBALS['strCopy']                                 = "copiar";
$GLOBALS['strChooseTypeOfInvocation']               = "Por favor escolha o tipo de inserção de banner";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Por favor escolha o tipo de inserção de banner";

// Measures
$GLOBALS['strAbbrSeconds']                          = "seg.";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Seleção de banner";
$GLOBALS['strInvocationCampaignID']                 = "Campanha";
$GLOBALS['strInvocationTarget']                     = "Frame de destino";
$GLOBALS['strInvocationSource']                     = "Fonte";
$GLOBALS['strInvocationWithText']                   = "Mostrar texto abaixo do banner";
$GLOBALS['strInvocationDontShowAgain']              = "Não mostre o banner novamente na mesma página";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Não mostre um banner da mesma campanha novamente na mesma página";
$GLOBALS['strInvocationTemplate']                   = "Armazenar o banner em uma variável para ser utilizado em um template";
$GLOBALS['strInvocationBannerID']                   = "ID do Banner";
$GLOBALS['strInvocationComments']                   = "Incluir comentários";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Recarregar após";
$GLOBALS['strIframeResizeToBanner']                 = "Redimensionar iframe para as dimensões do banner";
$GLOBALS['strIframeMakeTransparent']                = "Fazer o iframe ser transparente";
$GLOBALS['strIframeIncludeNetscape4']               = "Incluir layer de compatibilidade para o Netscape 4";
$GLOBALS['strIframeGoogleClickTracking']            = "Incluir código para rastrear cliques do Google Adsense";


// PopUp


// XML-RPC


// AdLayer
$GLOBALS['strAdLayerStyle']			= "Estilo";






$GLOBALS['strPause']				= "Pausar";



$GLOBALS['strAdLayerStyleName']	= array(
	'geocities'		=> "",
	'simple'		=> "",
	'cursor'		=> "",
	'floater'		=> ""
);

// Support for 3rd party server clicktracking
$GLOBALS['str3rdPartyTrack']		 = "Suporte para rastreamento de cliques de terceiros";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Inserir código anti-cache";

// Non-Img creatives Warning for zone image-only invocation

// unkown HTML tag type Warning for zone invocation

// sql/web banner-type warning for clickonly zone invocation

// IMG invocation selected for tracker with appended code
$GLOBALS['strWarning'] = "Alerta";
$GLOBALS['strImgWithAppendWarning'] = "Este rastreador tem código anexado, código anexado funcionará <strong>apenas</strong> com tags JavaScript";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Atenção:</strong>O código de inserção local SOMENTE funcionará se o site que estiver incluindo o código estiver fisicamente na mesma máquina que o servidor de anúncios</span><br />Verifique que o MAX_PATH definido no código abaixo aponta para o diretório raiz de sua instalação MAX<br />e que você possui um arquivo de configuração para o domínio do site que mostra os anúncios (em MAX_PATH/Var)";


?>
