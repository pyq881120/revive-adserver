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
$GLOBALS['strCopyToClipboard']                      = "Kopiraj na namizje";
$GLOBALS['strCopy']                                 = "kopiraj";
$GLOBALS['strChooseTypeOfInvocation']               = "Prosimo, izberite tip poziva";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Prosimo, izberite tip poziva pasici";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "sek";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Izbira pasice";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "Advertiser";
$GLOBALS['strInvocationCampaignID']                 = "Kampanja";
$GLOBALS['strInvocationTarget']                     = "Okvir cilja";
$GLOBALS['strInvocationSource']                     = "Vir";
$GLOBALS['strInvocationWithText']                   = "Prikaži besedilo pod pasico";
$GLOBALS['strInvocationDontShowAgain']              = "Ne prikaži pasice še enkrat na isti strani";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Ne prikaži pasice iz iste kampanje še enkrat na isti strani";
$GLOBALS['strInvocationTemplate']                   = "Shrani pasico v spremenljivki za uporabo v predlogi";
$GLOBALS['strInvocationBannerID']                   = "ID pasice";
$GLOBALS['strInvocationComments']                   = "Vključi komentarje";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Osveži po";
$GLOBALS['strIframeResizeToBanner']                 = "Razširi I-Frame v dimenzije pasice";
$GLOBALS['strIframeMakeTransparent']                = "Naredi I-Frame prozoren";
$GLOBALS['strIframeIncludeNetscape4']               = "Vključi Netscape 4 združljiv i-layer";
$GLOBALS['strIframeGoogleClickTracking']            = "Vključi zbirnik za sledenje Google AdSense klikov";


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
$GLOBALS['strAdLayerStyle']			= "Slog";

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
$GLOBALS['strPause']				= "Premor";
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
$GLOBALS['str3rdPartyTrack']		 = "Podpora sledenju klikov iz drugih strežnikov";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Vstavi cache-busting kodo";

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
$GLOBALS['strWarning'] = "Opozorilo";
$GLOBALS['strImgWithAppendWarning'] = "Ta sledilnik ima pripeto kodo, ki deluje <strong>samo</strong> z JavaScriptom";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Opozorilo:</strong> Način lokalnega poziva bo deloval SAMO, če je klicujoča stran na istem računalniku kot oglaševalski strežnik</span><br />Preverite, da MAX_PATH definirana v zbirniku spodaj kaže na osnovno mapo vaše MAX namestitve,<br />in da imate konfiguracijsko datoteka za domeno strani, ki prikazuje oglas (v MAX_PATH/var)";

$GLOBALS['strIABNoteLocalInvocation'] = "<b>Note:</b> Impression data generated from using Local Mode invocation tags are not compliant with IAB guidelines for ad impression measurements.";
$GLOBALS['strIABNoteXMLRPCInvocation'] = "<b>Note:</b> Impression data generated from using XML-RPC invocation tags are not compliant with IAB guidelines for ad impression measurements.";

?>
