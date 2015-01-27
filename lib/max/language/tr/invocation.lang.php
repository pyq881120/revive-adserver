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
$GLOBALS['strCopyToClipboard']                      = "Panoya kopyala";
$GLOBALS['strCopy']                                 = "kopyala";
$GLOBALS['strChooseTypeOfInvocation']               = "Lütfen banner çağırma tipini seçiniz";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Lütfen banner çağırma tipini seçiniz";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "sec";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Banner seçimi";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "Reklamcılar veya Kampanyalar";
$GLOBALS['strInvocationCampaignID']                 = "Kampanya";
$GLOBALS['strInvocationTarget']                     = "Hedef çerçeve";
$GLOBALS['strInvocationSource']                     = "Kaynak";
$GLOBALS['strInvocationWithText']                   = "Banner altında yazı göster";
$GLOBALS['strInvocationDontShowAgain']              = "Aynı sayfada bannerı tekrar gösterme";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Aynı sayfada aynı kampanyadan başka bir banner gösterme";
$GLOBALS['strInvocationTemplate']                   = "Şablon içerisinde kullanım için bannerı bir değişken içinde sakla.";
$GLOBALS['strInvocationBannerID']                   = "Banner ID";
$GLOBALS['strInvocationComments']                   = "Yorumlarla birlikte";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Şu zaman sonunda yenile";
$GLOBALS['strIframeResizeToBanner']                 = "Çerçeveyi banner ölçüsüne göre yeniden boyutlandır";
$GLOBALS['strIframeMakeTransparent']                = "Çerçeveyi şeffaf yap";
$GLOBALS['strIframeIncludeNetscape4']               = "Netscape 4 uyumlu ilayer kullan";
$GLOBALS['strIframeGoogleClickTracking']            = "Include code to track Google AdSense clicks";


// PopUp
$GLOBALS['strPopUpStyle']			= "Pop-up tipi";
$GLOBALS['strPopUpStylePopUp']			= "Pop-up";
$GLOBALS['strPopUpStylePopUnder']		= "Pop-under";
$GLOBALS['strPopUpCreateInstance']		= "Instance when the pop-up is created";
$GLOBALS['strPopUpImmediately']			= "Hemen";
$GLOBALS['strPopUpOnClose']			= "Sayfa kapandığında";
$GLOBALS['strPopUpAfterSec']			= "Sonra";
$GLOBALS['strAutoCloseAfter']			= "Süre sonra otomatik kapat";
$GLOBALS['strPopUpTop']				= "Başlangıç konumu (üst)";
$GLOBALS['strPopUpLeft']			= "Başlangıç konumu (sol)";
$GLOBALS['strWindowOptions']		= "Window options";
$GLOBALS['strShowToolbars']			= "Toolbars";
$GLOBALS['strShowLocation']			= "Location";
$GLOBALS['strShowMenubar']			= "Menubar";
$GLOBALS['strShowStatus']			= "Status";
$GLOBALS['strWindowResizable']		= "Resizable";
$GLOBALS['strShowScrollbars']		= "Scrollbars";


// XML-RPC
$GLOBALS['strXmlRpcLanguage']       = "Sunucu Dili";
$GLOBALS['strXmlRpcProtocol']       = "Use HTTPS to contact XML-RPC Server";
$GLOBALS['strXmlRpcTimeout']        = "XML-RPC Timeout (Seconds)";


// AdLayer
$GLOBALS['strAdLayerStyle']			= "Stil";

$GLOBALS['strAlignment']			= "Hiza";
$GLOBALS['strHAlignment']			= "Yatay hiza";
$GLOBALS['strLeft']				= "Left";
$GLOBALS['strCenter']				= "Center";
$GLOBALS['strRight']				= "Right";

$GLOBALS['strVAlignment']			= "Dikey hiza";
$GLOBALS['strTop']				= "Top";
$GLOBALS['strMiddle']				= "Middle";
$GLOBALS['strBottom']				= "Bottom";

$GLOBALS['strAutoCollapseAfter']		= "Otomatik olarak aşağı at";
$GLOBALS['strCloseText']			= "Kapat Yazısı";
$GLOBALS['strClose']				= "[Kapat]";
$GLOBALS['strBannerPadding']			= "Banner dolgusu";

$GLOBALS['strHShift']				= "Yatay Değiştir";
$GLOBALS['strVShift']				= "Dikey değiştir";

$GLOBALS['strShowCloseButton']			= "Kapat Butonunu Göster";
$GLOBALS['strBackgroundColor']			= "Zemin Rengi";
$GLOBALS['strBorderColor']			= "Çerçeve Rengi";

$GLOBALS['strDirection']			= "Yön";
$GLOBALS['strLeftToRight']			= "Left to right";
$GLOBALS['strRightToLeft']			= "Right to left";
$GLOBALS['strLooping']				= "Döngü";
$GLOBALS['strAlwaysActive']			= "Herzaman Aktif";
$GLOBALS['strSpeed']				= "Hız";
$GLOBALS['strPause']				= "Duraklat";
$GLOBALS['strLimited']				= "sınırlanmış";
$GLOBALS['strLeftMargin']			= "Left margin";
$GLOBALS['strRightMargin']			= "Right margin";
$GLOBALS['strTransparentBackground']		= "Transparan zemin";

$GLOBALS['strSmoothMovement']		= "Smooth movement";
$GLOBALS['strHideNotMoving']		= "Hide the banner when the cursor is not moving";
$GLOBALS['strHideDelay']			= "Delay before banner is hidden";
$GLOBALS['strHideTransparancy']		= "Transparancy of the hidden banner";


$GLOBALS['strAdLayerStyleName']	= array(
	'geocities'		=> "GeocitiesBasitGelişigüzelYüzen",
	'simple'		=> "Basit",
	'cursor'		=> "Gelişigüzel",
	'floater'		=> "Yüzen"
);

// Support for 3rd party server clicktracking
$GLOBALS['str3rdPartyTrack']		 = "Support 3rd Party Server Clicktracking";

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
