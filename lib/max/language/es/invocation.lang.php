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
$GLOBALS['strCopyToClipboard']                      = "Copiar al portapapeles";
$GLOBALS['strCopy']                                 = "Copiar al portapapeles";
$GLOBALS['strChooseTypeOfInvocation']               = "Por favor, elija el tipo de invocación";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Por favor, elija el tipo de invocación de banner";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "seg";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Selección de banner";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "Anunciante o campaña";
$GLOBALS['strInvocationCampaignID']                 = "Campaña";
$GLOBALS['strInvocationTarget']                     = "Marco de destino";
$GLOBALS['strInvocationSource']                     = "Origen";
$GLOBALS['strInvocationWithText']                   = "Mostrar texto después del banner";
$GLOBALS['strInvocationDontShowAgain']              = "No volver a mostrar el banner en la misma página";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "No volver a mostrar un banner de la misma campaña en la misma página";
$GLOBALS['strInvocationTemplate']                   = "Guardar el baner en una variable para ser usado en una plantilla";
$GLOBALS['strInvocationBannerID']                   = "ID banner";
$GLOBALS['strInvocationComments']                   = "Incluir comentarios";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Actualizar después de";
$GLOBALS['strIframeResizeToBanner']                 = "Ajustar el iframe según las dimensiones del banner";
$GLOBALS['strIframeMakeTransparent']                = "Hacer el iframe transparente";
$GLOBALS['strIframeIncludeNetscape4']               = "Incluir ilayer compatible con Netscape 4";
$GLOBALS['strIframeGoogleClickTracking']            = "Incluir codigo para registrar los clicks de Google AdSense";


// PopUp
$GLOBALS['strPopUpStyle']			= "Tipo de Pop-up";
$GLOBALS['strPopUpStylePopUp']			= "Pop-up";
$GLOBALS['strPopUpStylePopUnder']		= "Pop-under";
$GLOBALS['strPopUpCreateInstance']		= "Instance when the pop-up is created";
$GLOBALS['strPopUpImmediately']			= "Immediately";
$GLOBALS['strPopUpOnClose']			= "When the page is closed";
$GLOBALS['strPopUpAfterSec']			= "After";
$GLOBALS['strAutoCloseAfter']			= "Cerrar automáticamente despues de";
$GLOBALS['strPopUpTop']				= "Posición inicial (superior)";
$GLOBALS['strPopUpLeft']			= "Posición inicial (izquierda)";
$GLOBALS['strWindowOptions']		= "Window options";
$GLOBALS['strShowToolbars']			= "Toolbars";
$GLOBALS['strShowLocation']			= "Location";
$GLOBALS['strShowMenubar']			= "Menubar";
$GLOBALS['strShowStatus']			= "Status";
$GLOBALS['strWindowResizable']		= "Resizable";
$GLOBALS['strShowScrollbars']		= "Scrollbars";


// XML-RPC
$GLOBALS['strXmlRpcLanguage']       = "Idioma del Host";
$GLOBALS['strXmlRpcProtocol']       = "Use HTTPS to contact XML-RPC Server";
$GLOBALS['strXmlRpcTimeout']        = "XML-RPC Timeout (Seconds)";


// AdLayer
$GLOBALS['strAdLayerStyle']			= "Estilo";

$GLOBALS['strAlignment']			= "Alineación";
$GLOBALS['strHAlignment']			= "Alineación horizontal";
$GLOBALS['strLeft']				= "Izquierda";
$GLOBALS['strCenter']				= "Centro";
$GLOBALS['strRight']				= "Derecha";

$GLOBALS['strVAlignment']			= "Alineación vertical";
$GLOBALS['strTop']				= "Superior";
$GLOBALS['strMiddle']				= "Medio";
$GLOBALS['strBottom']				= "Inferior";

$GLOBALS['strAutoCollapseAfter']		= "Colapsar automáticamente despues de";
$GLOBALS['strCloseText']			= "Cerrar texto";
$GLOBALS['strClose']				= "[Cerrar]";
$GLOBALS['strBannerPadding']			= "Banner padding";

$GLOBALS['strHShift']				= "Cambio horizontal";
$GLOBALS['strVShift']				= "Cambio vertical";

$GLOBALS['strShowCloseButton']			= "Ver el botón de Cerrar";
$GLOBALS['strBackgroundColor']			= "Color de fondo";
$GLOBALS['strBorderColor']			= "Color de borde";

$GLOBALS['strDirection']			= "Dirección";
$GLOBALS['strLeftToRight']			= "Derecha a Izquierda";
$GLOBALS['strRightToLeft']			= "Izquierda a Derecha";
$GLOBALS['strLooping']				= "Looping";
$GLOBALS['strAlwaysActive']			= "Siempre activo";
$GLOBALS['strSpeed']				= "Velocidad";
$GLOBALS['strPause']				= "Pausar";
$GLOBALS['strLimited']				= "Limitado";
$GLOBALS['strLeftMargin']			= "Margen Izquierdo";
$GLOBALS['strRightMargin']			= "Margen Derecho";
$GLOBALS['strTransparentBackground']		= "Fondo trasparente";

$GLOBALS['strSmoothMovement']		= "Smooth movement";
$GLOBALS['strHideNotMoving']		= "Hide the banner when the cursor is not moving";
$GLOBALS['strHideDelay']			= "Delay before banner is hidden";
$GLOBALS['strHideTransparancy']		= "Transparancy of the hidden banner";


$GLOBALS['strAdLayerStyleName']	= array(
	'geocities'		=> "Geocities",
	'simple'		=> "Simple",
	'cursor'		=> "Cursor",
	'floater'		=> "Flotante"
);

// Support for 3rd party server clicktracking
$GLOBALS['str3rdPartyTrack']		 = "Permitir <i>clicktracking</i> de servidores de terceros";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Insertar código anti-cache";

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
$GLOBALS['strWarning'] = "Warning";
$GLOBALS['strImgWithAppendWarning'] = "Este tracker tiene código asociado; dicho código <strong>sólo</strong> funcionará con tags Javascript";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Warning:</strong> Local mode invocation will ONLY work if the site calling the code
 is on the same physical machine as the adserver</span><br />
Check that the MAX_PATH defined in the code below points to the base directory of your MAX installation<br />
and that you have a config file for the domain of the site showing the ads (in MAX_PATH/var)";

$GLOBALS['strIABNoteLocalInvocation'] = "<b>Note:</b> Impression data generated from using Local Mode invocation tags are not compliant with IAB guidelines for ad impression measurements.";
$GLOBALS['strIABNoteXMLRPCInvocation'] = "<b>Note:</b> Impression data generated from using XML-RPC invocation tags are not compliant with IAB guidelines for ad impression measurements.";

?>
