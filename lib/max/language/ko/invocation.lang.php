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
$GLOBALS['strCopyToClipboard']                      = "클립보드에 복사";
$GLOBALS['strCopy']                                 = "copy";
$GLOBALS['strChooseTypeOfInvocation']               = "호출할 배너 종류를 선택하세요.";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "호출할 배너 종류를 선택하세요.";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "sec";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "배너 선택";
$GLOBALS['strInvocationPreview']                    = "Banner preview";
$GLOBALS['strInvocationClientID']                   = "광고주 또는 캠페인";
$GLOBALS['strInvocationCampaignID']                 = "Campaign";
$GLOBALS['strInvocationTarget']                     = "대상 프레임";
$GLOBALS['strInvocationSource']                     = "소스";
$GLOBALS['strInvocationWithText']                   = "배너 밑에 텍스트를 표시합니다.";
$GLOBALS['strInvocationDontShowAgain']              = "같은 페이지에 연속해서 배너를 표시하지 않습니다.";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Don't show a banner from the same campaign again on the same page";
$GLOBALS['strInvocationTemplate']                   = "배너를 템플릿에서 사용할 수 있도록 변수에 저장합니다.";
$GLOBALS['strInvocationBannerID']                   = "Banner ID";
$GLOBALS['strInvocationComments']                   = "Include comments";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "새로고침 간격";
$GLOBALS['strIframeResizeToBanner']                 = "iframe을 배너에 맞게 크기 조정";
$GLOBALS['strIframeMakeTransparent']                = "iframe을 투명하게 설정";
$GLOBALS['strIframeIncludeNetscape4']               = "넷스케이프 4 ilayer 호환";
$GLOBALS['strIframeGoogleClickTracking']            = "Include code to track Google AdSense clicks";


// PopUp
$GLOBALS['strPopUpStyle']			= "팝업 형식";
$GLOBALS['strPopUpStylePopUp']			= "팝업";
$GLOBALS['strPopUpStylePopUnder']		= "팝언더";
$GLOBALS['strPopUpCreateInstance']		= "팝업이 생성되는 경우";
$GLOBALS['strPopUpImmediately']			= "바로 띄우기";
$GLOBALS['strPopUpOnClose']			= "페이지를 닫을 때";
$GLOBALS['strPopUpAfterSec']			= "후에 ";
$GLOBALS['strAutoCloseAfter']			= "후에 자동으로 닫음";
$GLOBALS['strPopUpTop']				= "격자 배너 위치(top)";
$GLOBALS['strPopUpLeft']			= "격자 배너 위치(left)";
$GLOBALS['strWindowOptions']		= "Window options";
$GLOBALS['strShowToolbars']			= "Toolbars";
$GLOBALS['strShowLocation']			= "Location";
$GLOBALS['strShowMenubar']			= "Menubar";
$GLOBALS['strShowStatus']			= "Status";
$GLOBALS['strWindowResizable']		= "Resizable";
$GLOBALS['strShowScrollbars']		= "Scrollbars";


// XML-RPC
$GLOBALS['strXmlRpcLanguage']       = "사용 언어";
$GLOBALS['strXmlRpcProtocol']       = "Use HTTPS to contact XML-RPC Server";
$GLOBALS['strXmlRpcTimeout']        = "XML-RPC Timeout (Seconds)";


// AdLayer
$GLOBALS['strAdLayerStyle']			= "배너 형식";

$GLOBALS['strAlignment']			= "정렬";
$GLOBALS['strHAlignment']			= "가로 정렬";
$GLOBALS['strLeft']				= "Left";
$GLOBALS['strCenter']				= "Center";
$GLOBALS['strRight']				= "Right";

$GLOBALS['strVAlignment']			= "세로 정렬";
$GLOBALS['strTop']				= "Top";
$GLOBALS['strMiddle']				= "Middle";
$GLOBALS['strBottom']				= "Bottom";

$GLOBALS['strAutoCollapseAfter']		= "지정된 시간 이후에 자동으로 닫음";
$GLOBALS['strCloseText']			= "배너 닫기 문구(Close text)";
$GLOBALS['strClose']				= "[Close]";
$GLOBALS['strBannerPadding']			= "배너 간격(padding)";

$GLOBALS['strHShift']				= "수평 이동";
$GLOBALS['strVShift']				= "수직 이동";

$GLOBALS['strShowCloseButton']			= "닫기 버튼 표시";
$GLOBALS['strBackgroundColor']			= "배경색";
$GLOBALS['strBorderColor']			= "테두리 색";

$GLOBALS['strDirection']			= "방향";
$GLOBALS['strLeftToRight']			= "왼쪽에서 오른쪽으로";
$GLOBALS['strRightToLeft']			= "오른쪽에서 왼쪽으로";
$GLOBALS['strLooping']				= "반복하기";
$GLOBALS['strAlwaysActive']			= "항상 사용";
$GLOBALS['strSpeed']				= "Speed";
$GLOBALS['strPause']				= "Pause";
$GLOBALS['strLimited']				= "Limited";
$GLOBALS['strLeftMargin']			= "왼쪽 여백";
$GLOBALS['strRightMargin']			= "오른쪽 여백";
$GLOBALS['strTransparentBackground']		= "배경 투명색";

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
