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
$GLOBALS['strChooseTypeOfInvocation']               = "Por favor escolha o tipo de inserção";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Por favor escolha o tipo de inserção de banner";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "seg.";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Seleção de banner";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "Anunciante ou campanha";
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
$GLOBALS['strPopUpStyle']			= "Tipo de Pop-up";
$GLOBALS['strPopUpStylePopUp']			= "Pop-up";
$GLOBALS['strPopUpStylePopUnder']		= "Pop-under";
$GLOBALS['strPopUpCreateInstance']		= "Criar instï¿œncia quando o pop-up ï¿œ criado";
$GLOBALS['strPopUpImmediately']			= "Immediatamente";
$GLOBALS['strPopUpOnClose']			= "Quando a pï¿œgina ï¿œ encerrada";
$GLOBALS['strPopUpAfterSec']			= "Apï¿œs";
$GLOBALS['strAutoCloseAfter']			= "Automaticamente encerrada apï¿œs";
$GLOBALS['strPopUpTop']				= "Posiï¿œï¿œo Inicial (topo)";
$GLOBALS['strPopUpLeft']			= "Posiï¿œï¿œo Inicial (esquerda)";
$GLOBALS['strWindowOptions']		= "Window options";
$GLOBALS['strShowToolbars']			= "Toolbars";
$GLOBALS['strShowLocation']			= "Location";
$GLOBALS['strShowMenubar']			= "Menubar";
$GLOBALS['strShowStatus']			= "Status";
$GLOBALS['strWindowResizable']		= "Resizable";
$GLOBALS['strShowScrollbars']		= "Scrollbars";


// XML-RPC
$GLOBALS['strXmlRpcLanguage']       = "Linguagem do Servidor";
$GLOBALS['strXmlRpcProtocol']       = "Use HTTPS to contact XML-RPC Server";
$GLOBALS['strXmlRpcTimeout']        = "XML-RPC Timeout (Seconds)";


// AdLayer
$GLOBALS['strAdLayerStyle']			= "Estilo";

$GLOBALS['strAlignment']			= "Alinhamento";
$GLOBALS['strHAlignment']			= "Alinhamento Horizontal";
$GLOBALS['strLeft']				= "Esquerda";
$GLOBALS['strCenter']				= "Centrado";
$GLOBALS['strRight']				= "Direita";

$GLOBALS['strVAlignment']			= "Alinhamento Vertical";
$GLOBALS['strTop']				= "Topo";
$GLOBALS['strMiddle']				= "Meio";
$GLOBALS['strBottom']				= "Fundo";

$GLOBALS['strAutoCollapseAfter']		= "Desaparece automï¿œticamente apï¿œs";
$GLOBALS['strCloseText']			= "Texto de Fecho";
$GLOBALS['strClose']				= "[Fechar]";
$GLOBALS['strBannerPadding']			= "Margem interna";

$GLOBALS['strHShift']				= "Afastamento horizontal";
$GLOBALS['strVShift']				= "Afastamento vertical";

$GLOBALS['strShowCloseButton']			= "Mostrar botï¿œo de encerramento";
$GLOBALS['strBackgroundColor']			= "Cor de fundo";
$GLOBALS['strBorderColor']			= "Cor de borda";

$GLOBALS['strDirection']			= "Direcï¿œï¿œo";
$GLOBALS['strLeftToRight']			= "Esquerda para direita";
$GLOBALS['strRightToLeft']			= "Direita para esquerda";
$GLOBALS['strLooping']				= "Rotaï¿œï¿œo";
$GLOBALS['strAlwaysActive']			= "Sempre activa";
$GLOBALS['strSpeed']				= "Velocidade";
$GLOBALS['strPause']				= "Pausar";
$GLOBALS['strLimited']				= "Limitada";
$GLOBALS['strLeftMargin']			= "Margem esquerda";
$GLOBALS['strRightMargin']			= "Margem direita";
$GLOBALS['strTransparentBackground']		= "Fundo transparente";

$GLOBALS['strSmoothMovement']		= "Smooth movement";
$GLOBALS['strHideNotMoving']		= "Hide the banner when the cursor is not moving";
$GLOBALS['strHideDelay']			= "Delay before banner is hidden";
$GLOBALS['strHideTransparancy']		= "Transparancy of the hidden banner";


$GLOBALS['strAdLayerStyleName']	= array(
	'geocities'		=> "Geocities",
	'simple'		=> "Simples",
	'cursor'		=> "Cursor",
	'floater'		=> "Flutuante"
);

// Support for 3rd party server clicktracking
$GLOBALS['str3rdPartyTrack']		 = "Suporte para rastreamento de cliques de terceiros";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Inserir código anti-cache";

// Non-Img creatives Warning for zone image-only invocation
$GLOBALS['strNonImgWarningZone']	= "Warning: There are banners attached to this zone which are not images. These banners will not be rotated using this tag.";
$GLOBALS['strNonImgWarning']        = "Warning: This tag will not work because this banner is not an image.";

// unkown HTML tag type Warning for zone invocation
$GLOBALS['strUnknHtmlWarning']      = "Warning: This banner is an unkown HTML ad format.";

// sql/web banner-type warning for clickonly zone invocation
$GLOBALS['strWebBannerWarning']     = "Warning: This banner must be downloaded and you must notify us the correct URL for the banner.
<br /> 1) Download the banner:";
$GLOBALS['strDwnldWebBanner']       = "Right-click here and choose Save Target As";
$GLOBALS['strWebBannerWarning2']    = "<br /> 2) Upload the banner to your webserver and write its location here: ";

// IMG invocation selected for tracker with appended code
$GLOBALS['strWarning'] = "Alerta";
$GLOBALS['strImgWithAppendWarning'] = "Este rastreador tem código anexado, código anexado funcionará <strong>apenas</strong> com tags JavaScript";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Atenção:</strong>O código de inserção local SOMENTE funcionará se o site que estiver incluindo o código estiver fisicamente na mesma máquina que o servidor de anúncios</span><br />Verifique que o MAX_PATH definido no código abaixo aponta para o diretório raiz de sua instalação MAX<br />e que você possui um arquivo de configuração para o domínio do site que mostra os anúncios (em MAX_PATH/Var)";

$GLOBALS['strIABNoteLocalInvocation'] = "<b>Note:</b> Impression data generated from using Local Mode invocation tags are not compliant with IAB guidelines for ad impression measurements.";
$GLOBALS['strIABNoteXMLRPCInvocation'] = "<b>Note:</b> Impression data generated from using XML-RPC invocation tags are not compliant with IAB guidelines for ad impression measurements.";

?>
