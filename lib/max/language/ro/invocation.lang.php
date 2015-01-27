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
$GLOBALS['strCopyToClipboard']                      = "Copiază în clipboard";
$GLOBALS['strCopy']                                 = "copiază";
$GLOBALS['strChooseTypeOfInvocation']               = "Te rugăm să alegi tipul de cod pentru";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Te rugăm să alegi tipul de cod pentru banner";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "sec";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Alegere banner";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "Advertiser";
$GLOBALS['strInvocationCampaignID']                 = "Campanie";
$GLOBALS['strInvocationTarget']                     = "Frame ţintă";
$GLOBALS['strInvocationSource']                     = "Sursa";
$GLOBALS['strInvocationWithText']                   = "Arată text sub banner";
$GLOBALS['strInvocationDontShowAgain']              = "Nu afişa banner-ul din nou pe aceeaşi pagină";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Nu arăta un banner din aceeaşi campanie pe aceeaşi pagină";
$GLOBALS['strInvocationTemplate']                   = "Stochează bannerul într-o variabilă pentru a putea fi folosit într-un template";
$GLOBALS['strInvocationBannerID']                   = "ID Banner";
$GLOBALS['strInvocationComments']                   = "Include comentarii";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Reîmprospătează după";
$GLOBALS['strIframeResizeToBanner']                 = "Redimensionează iframe-ul după dimensiunile bannerului";
$GLOBALS['strIframeMakeTransparent']                = "Iframe transparent";
$GLOBALS['strIframeIncludeNetscape4']               = "Include ilayer compatibil Netscape 4";
$GLOBALS['strIframeGoogleClickTracking']            = "Include codul pentru a urmări click-urile Google Adsense";


// PopUp
$GLOBALS['strPopUpStyle']			= "Pop-up type";
$GLOBALS['strPopUpStylePopUp']			= "Pop-up";
$GLOBALS['strPopUpStylePopUnder']		= "Pop-under";
$GLOBALS['strPopUpCreateInstance']		= "Instance when the pop-up is created";
$GLOBALS['strPopUpImmediately']			= "Immediately";
$GLOBALS['strPopUpOnClose']			= "When the page is closed";
$GLOBALS['strPopUpAfterSec']			= "After";
$GLOBALS['strAutoCloseAfter']			= "Automatically close after";
$GLOBALS['strPopUpTop']				= "Initial position (top)";
$GLOBALS['strPopUpLeft']			= "Initial position (left)";
$GLOBALS['strWindowOptions']		= "Window options";
$GLOBALS['strShowToolbars']			= "Toolbars";
$GLOBALS['strShowLocation']			= "Location";
$GLOBALS['strShowMenubar']			= "Menubar";
$GLOBALS['strShowStatus']			= "Status";
$GLOBALS['strWindowResizable']		= "Resizable";
$GLOBALS['strShowScrollbars']		= "Scrollbars";


// XML-RPC
$GLOBALS['strXmlRpcLanguage']       = "Host Language";
$GLOBALS['strXmlRpcProtocol']       = "Use HTTPS to contact XML-RPC Server";
$GLOBALS['strXmlRpcTimeout']        = "XML-RPC Timeout (Seconds)";


// AdLayer
$GLOBALS['strAdLayerStyle']			= "Stil";

$GLOBALS['strAlignment']			= "Alignment";
$GLOBALS['strHAlignment']			= "Horizontal alignment";
$GLOBALS['strLeft']				= "Left";
$GLOBALS['strCenter']				= "Center";
$GLOBALS['strRight']				= "Right";

$GLOBALS['strVAlignment']			= "Vertical alignment";
$GLOBALS['strTop']				= "Top";
$GLOBALS['strMiddle']				= "Middle";
$GLOBALS['strBottom']				= "Bottom";

$GLOBALS['strAutoCollapseAfter']		= "Automatically collapse after";
$GLOBALS['strCloseText']			= "Close text";
$GLOBALS['strClose']				= "[Close]";
$GLOBALS['strBannerPadding']			= "Banner padding";

$GLOBALS['strHShift']				= "Horizontal shift";
$GLOBALS['strVShift']				= "Vertical shift";

$GLOBALS['strShowCloseButton']			= "Show close button";
$GLOBALS['strBackgroundColor']			= "Background color";
$GLOBALS['strBorderColor']			= "Border color";

$GLOBALS['strDirection']			= "Direction";
$GLOBALS['strLeftToRight']			= "Left to right";
$GLOBALS['strRightToLeft']			= "Right to left";
$GLOBALS['strLooping']				= "Looping";
$GLOBALS['strAlwaysActive']			= "Always active";
$GLOBALS['strSpeed']				= "Speed";
$GLOBALS['strPause']				= "Pauză";
$GLOBALS['strLimited']				= "Limited";
$GLOBALS['strLeftMargin']			= "Left margin";
$GLOBALS['strRightMargin']			= "Right margin";
$GLOBALS['strTransparentBackground']		= "Transparent background";

$GLOBALS['strSmoothMovement']		= "Smooth movement";
$GLOBALS['strHideNotMoving']		= "Hide the banner when the cursor is not moving";
$GLOBALS['strHideDelay']			= "Delay before banner is hidden";
$GLOBALS['strHideTransparancy']		= "Transparancy of the hidden banner";


$GLOBALS['strAdLayerStyleName']	= array(
	'geocities'		=> "Geocities",
	'simple'		=> "Simple",
	'cursor'		=> "Cursor",
	'floater'		=> "Floater"
);

// Support for 3rd party server clicktracking
$GLOBALS['str3rdPartyTrack']		 = "Suportă contorizarea click-urilor pentru alte servere";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Inserează cod Cache-Busting";

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
$GLOBALS['strWarning'] = "Avertisment";
$GLOBALS['strImgWithAppendWarning'] = "Acest contor are cod lipit, codul lipit va funcţiona <strong>doar</strong> cu tag-uri JavaScript";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Atenţie:</strong> Codul HTML în modul local va funcţiona DOAR dacă site-ul care face apel la cod se află pe acelaşi calculator cu server-ul de reclame</span><br />Verifică dacă MAX_PATH definită în codul de mai jos indică către directorul de bază al instalării MAX<br />and şi dacă ai un fişier de configurare pentru domeniul site-ului care afişează reclamele (în MAX_PATH/var)";

$GLOBALS['strIABNoteLocalInvocation'] = "<b>Note:</b> Impression data generated from using Local Mode invocation tags are not compliant with IAB guidelines for ad impression measurements.";
$GLOBALS['strIABNoteXMLRPCInvocation'] = "<b>Note:</b> Impression data generated from using XML-RPC invocation tags are not compliant with IAB guidelines for ad impression measurements.";

?>
