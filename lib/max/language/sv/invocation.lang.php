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
$GLOBALS['strCopyToClipboard']                      = "Kopiera till klippbordet";
$GLOBALS['strCopy']                                 = "kopiera";
$GLOBALS['strChooseTypeOfInvocation']               = "Vänligen välj typ av bannerpublicering";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Vänligen välj typ av bannerpublicering";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "sek";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Val av banner";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "Advertiser";
$GLOBALS['strInvocationCampaignID']                 = "Kampanj";
$GLOBALS['strInvocationTarget']                     = "Målram";
$GLOBALS['strInvocationSource']                     = "Källa";
$GLOBALS['strInvocationWithText']                   = "Visa text nedanför banner";
$GLOBALS['strInvocationDontShowAgain']              = "Visa inte banner igen på samma sida";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Visa inte en banner från samma kampanj igen på samma sida";
$GLOBALS['strInvocationTemplate']                   = "Lagra bannern inuti en variabel så att den kan användas i en mall";
$GLOBALS['strInvocationBannerID']                   = "Banner ID";
$GLOBALS['strInvocationComments']                   = "Inkludera kommentarer";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Förnya efter";
$GLOBALS['strIframeResizeToBanner']                 = "Omvandla iframe till bannerns dimensioner";
$GLOBALS['strIframeMakeTransparent']                = "Gör iframe transparent";
$GLOBALS['strIframeIncludeNetscape4']               = "Inkludera Netscape 4 kompatibel ilayer";
$GLOBALS['strIframeGoogleClickTracking']            = "Include code to track Google AdSense clicks";


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
$GLOBALS['strPause']				= "Pause";
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
$GLOBALS['str3rdPartyTrack']		 = "Stöd klickspårning från 3:e parts server ";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Infoga Cache-Busting code";

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
$GLOBALS['strWarning'] = "Varning";
$GLOBALS['strImgWithAppendWarning'] = "This tracker has appended code, appended code will <strong>only</strong> work with JavaScript tags";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Warning:</strong> Local mode invocation will ONLY work if the site calling the code
 is on the same physical machine as the adserver</span><br />
Check that the MAX_PATH defined in the code below points to the base directory of your MAX installation<br />
and that you have a config file for the domain of the site showing the ads (in MAX_PATH/var)";

$GLOBALS['strIABNoteLocalInvocation'] = "<b>Note:</b> Impression data generated from using Local Mode invocation tags are not compliant with IAB guidelines for ad impression measurements.";
$GLOBALS['strIABNoteXMLRPCInvocation'] = "<b>Note:</b> Impression data generated from using XML-RPC invocation tags are not compliant with IAB guidelines for ad impression measurements.";

?>
