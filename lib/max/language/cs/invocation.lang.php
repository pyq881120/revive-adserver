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
$GLOBALS['strCopyToClipboard']                      = "Kopírovat do schránky";
$GLOBALS['strCopy']                                 = "copy";
$GLOBALS['strChooseTypeOfInvocation']               = "Prosím zvolte typ volání banneru";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Prosím zvolte typ volání banneru";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "vteřin";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Volba banneru";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "Inzerent";
$GLOBALS['strInvocationCampaignID']                 = "Skrytá kampaň";
$GLOBALS['strInvocationTarget']                     = "Cílový frame";
$GLOBALS['strInvocationSource']                     = "Zdroj";
$GLOBALS['strInvocationWithText']                   = "Zobrazit text pod bannerem";
$GLOBALS['strInvocationDontShowAgain']              = "Nezobrazovat banner znova na stejné stránce";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Nezobrazovat banner ze stejné kampaně znova na stejné stránce";
$GLOBALS['strInvocationTemplate']                   = "Uložit banner v proměnné aby mohl být použit v šabloně";
$GLOBALS['strInvocationBannerID']                   = "ID banneru";
$GLOBALS['strInvocationComments']                   = "Include comments";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Obnovit po";
$GLOBALS['strIframeResizeToBanner']                 = "Zmenit velikost iframe podle banneru";
$GLOBALS['strIframeMakeTransparent']                = "Udělat iframe průhledný";
$GLOBALS['strIframeIncludeNetscape4']               = "Vložit Nestcape 4 kompatibilní ilayer";
$GLOBALS['strIframeGoogleClickTracking']            = "Include code to track Google AdSense clicks";


// PopUp
$GLOBALS['strPopUpStyle']			= "Typ Pop-upu";
$GLOBALS['strPopUpStylePopUp']			= "Pop-up";
$GLOBALS['strPopUpStylePopUnder']		= "Pop-under";
$GLOBALS['strPopUpCreateInstance']		= "Zobrazit když je pop-up vytvořen";
$GLOBALS['strPopUpImmediately']			= "Okamžitě";
$GLOBALS['strPopUpOnClose']			= "Když je zavřena stránka";
$GLOBALS['strPopUpAfterSec']			= "Po";
$GLOBALS['strAutoCloseAfter']			= "Automaticky zavřít po";
$GLOBALS['strPopUpTop']				= "Výchozí pozice (zhora)";
$GLOBALS['strPopUpLeft']			= "Výchozí pozice (zleva)";
$GLOBALS['strWindowOptions']		= "Parametry okna";
$GLOBALS['strShowToolbars']			= "Panel nástrojů";
$GLOBALS['strShowLocation']			= "Umístění";
$GLOBALS['strShowMenubar']			= "Menu";
$GLOBALS['strShowStatus']			= "Stavový řádek";
$GLOBALS['strWindowResizable']		= "Měnitelná velikost";
$GLOBALS['strShowScrollbars']		= "Skrolovatelný";


// XML-RPC
$GLOBALS['strXmlRpcLanguage']       = "Jazyk hostitele";
$GLOBALS['strXmlRpcProtocol']       = "Use HTTPS to contact XML-RPC Server";
$GLOBALS['strXmlRpcTimeout']        = "XML-RPC Timeout (Seconds)";


// AdLayer
$GLOBALS['strAdLayerStyle']			= "Styl";

$GLOBALS['strAlignment']			= "Zarovnání";
$GLOBALS['strHAlignment']			= "Horizontální zarovnání";
$GLOBALS['strLeft']				= "Vlevo";
$GLOBALS['strCenter']				= "Na střed";
$GLOBALS['strRight']				= "Vpravo";

$GLOBALS['strVAlignment']			= "Vertikální zarovnání";
$GLOBALS['strTop']				= "Nahoru";
$GLOBALS['strMiddle']				= "Na střed";
$GLOBALS['strBottom']				= "Dolů";

$GLOBALS['strAutoCollapseAfter']		= "Automaticky sloučit po";
$GLOBALS['strCloseText']			= "Zavřít text";
$GLOBALS['strClose']				= "[Zavřít]";
$GLOBALS['strBannerPadding']			= "Odsazení banneru";

$GLOBALS['strHShift']				= "Horizontání posun";
$GLOBALS['strVShift']				= "Vertikální posun";

$GLOBALS['strShowCloseButton']			= "Zobrazit tlačítko zavřít";
$GLOBALS['strBackgroundColor']			= "Barva pozadí";
$GLOBALS['strBorderColor']			= "Barva okraje";

$GLOBALS['strDirection']			= "Směr";
$GLOBALS['strLeftToRight']			= "Zleva do prava";
$GLOBALS['strRightToLeft']			= "Zprava do leva";
$GLOBALS['strLooping']				= "Smyčka";
$GLOBALS['strAlwaysActive']			= "Vždy aktivní";
$GLOBALS['strSpeed']				= "Rychlost";
$GLOBALS['strPause']				= "Pauza";
$GLOBALS['strLimited']				= "Omezený";
$GLOBALS['strLeftMargin']			= "Levý okraj";
$GLOBALS['strRightMargin']			= "Pravý okraj";
$GLOBALS['strTransparentBackground']		= "Průhledné pozadí";

$GLOBALS['strSmoothMovement']		= "Jemný pohyb";
$GLOBALS['strHideNotMoving']		= "Skrýt banner když se nehýbe kurzor";
$GLOBALS['strHideDelay']			= "Prodleva před skrytím banneru";
$GLOBALS['strHideTransparancy']		= "Průhlednost skrytého banneru";


$GLOBALS['strAdLayerStyleName']	= array(
	'geocities'		=> "GeocitiesJednoduchýKursorPlovoucí",
	'simple'		=> "Jednoduchý",
	'cursor'		=> "Kursor",
	'floater'		=> "Plovoucí"
);

// Support for 3rd party server clicktracking
$GLOBALS['str3rdPartyTrack']		 = "Podpora pro sledování kliknutí serverů 3tích stran";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Insert Cache-Busting code";

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
$GLOBALS['strImgWithAppendWarning'] = "This tracker has appended code, appended code will <strong>only</strong> work with JavaScript tags";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Warning:</strong> Local mode invocation will ONLY work if the site calling the code
 is on the same physical machine as the adserver</span><br />
Check that the MAX_PATH defined in the code below points to the base directory of your MAX installation<br />
and that you have a config file for the domain of the site showing the ads (in MAX_PATH/var)";

$GLOBALS['strIABNoteLocalInvocation'] = "<b>Note:</b> Impression data generated from using Local Mode invocation tags are not compliant with IAB guidelines for ad impression measurements.";
$GLOBALS['strIABNoteXMLRPCInvocation'] = "<b>Note:</b> Impression data generated from using XML-RPC invocation tags are not compliant with IAB guidelines for ad impression measurements.";

?>
