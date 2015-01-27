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
$GLOBALS['strCopyToClipboard']                      = "Copia negli appunti";
$GLOBALS['strCopy']                                 = "copia";
$GLOBALS['strChooseTypeOfInvocation']               = "Seleziona il tipo di invocazione";
$GLOBALS['strChooseTypeOfBannerInvocation']         = "Seleziona il tipo di invocazione banner";

// Measures
$GLOBALS['strAbbrPixels']                           = "px";
$GLOBALS['strAbbrSeconds']                          = "sec";

// Common Invocation Parameters
$GLOBALS['strInvocationWhat']                       = "Selezione banner";
$GLOBALS['strInvocationClientID']                   = "Inserzionista o campagna";
$GLOBALS['strInvocationCampaignID']                 = "Campagna";
$GLOBALS['strInvocationTarget']                     = "Frame di destinazione";
$GLOBALS['strInvocationSource']                     = "Risorsa";
$GLOBALS['strInvocationWithText']                   = "Mostra testo sotto il Banner";
$GLOBALS['strInvocationDontShowAgain']              = "Non mostrare banner duplicati nella stessa pagina";
$GLOBALS['strInvocationDontShowAgainCampaign']      = "Non mostrare banner della stessa campagna nella pagina";
$GLOBALS['strInvocationTemplate']                   = "Assegna il banner a una variabile per utilizzarla in un template";
$GLOBALS['strInvocationBannerID']                   = "Banner ID";
$GLOBALS['strInvocationComments']                   = "Includi commenti";

// Iframe
$GLOBALS['strIFrameRefreshAfter']                   = "Aggiorna dopo";
$GLOBALS['strIframeResizeToBanner']                 = "Adatta dimensioni IFrame al Banner";
$GLOBALS['strIframeMakeTransparent']                = "Sfondo IFrame trasparente";
$GLOBALS['strIframeIncludeNetscape4']               = "Includi ilayer compatibile con Netscape 4";
$GLOBALS['strIframeGoogleClickTracking']            = "Includi il codice per monitorare i click AdSense di Google";


// PopUp
$GLOBALS['strPopUpStyle']			= "Tipo di Pop-up";
$GLOBALS['strPopUpStylePopUp']			= "Pop-up";
$GLOBALS['strPopUpStylePopUnder']		= "Pop-under";
$GLOBALS['strPopUpCreateInstance']		= "Apertura Pop-up";
$GLOBALS['strPopUpImmediately']			= "Immediata";
$GLOBALS['strPopUpOnClose']			= "Alla chiusura della pagina";
$GLOBALS['strPopUpAfterSec']			= "Dopo";
$GLOBALS['strAutoCloseAfter']			= "Chiudi automaticamente dopo";
$GLOBALS['strPopUpTop']				= "Positione Iniziale (alto)";
$GLOBALS['strPopUpLeft']			= "Positione Iniziale (sinistra)";
$GLOBALS['strWindowOptions']		= "Opzioni finestra";
$GLOBALS['strShowToolbars']			= "Barra degli strumenti";
$GLOBALS['strShowLocation']			= "Barra dell'indirizzo";
$GLOBALS['strShowMenubar']			= "Barra dei menu";
$GLOBALS['strShowStatus']			= "Barra di stato";
$GLOBALS['strWindowResizable']		= "Ridimensionabile";
$GLOBALS['strShowScrollbars']		= "Barre di scorrimento";


// XML-RPC
$GLOBALS['strXmlRpcLanguage']       = "Linguaggio utilizzato";


// AdLayer
$GLOBALS['strAdLayerStyle']			= "Stile";

$GLOBALS['strAlignment']			= "Allinemento";
$GLOBALS['strHAlignment']			= "Allinemento orizzontale";
$GLOBALS['strLeft']				= "Sinistra";
$GLOBALS['strCenter']				= "Centrato";
$GLOBALS['strRight']				= "Destra";

$GLOBALS['strVAlignment']			= "Allinemento verticale";
$GLOBALS['strTop']				= "Alto";
$GLOBALS['strMiddle']				= "Centrato";
$GLOBALS['strBottom']				= "Basso";

$GLOBALS['strAutoCollapseAfter']		= "Riduci automaticamente dopo";
$GLOBALS['strCloseText']			= "Testo di chiusura";
$GLOBALS['strClose']				= "[Chiudi]";
$GLOBALS['strBannerPadding']			= "Margini interni";

$GLOBALS['strHShift']				= "Scostamento orizzontale";
$GLOBALS['strVShift']				= "Scostamento verticale";

$GLOBALS['strShowCloseButton']			= "Visualizza pulsante di chiusura";
$GLOBALS['strBackgroundColor']			= "Colore di sfondo";
$GLOBALS['strBorderColor']			= "Colore del bordo";

$GLOBALS['strDirection']			= "Direzione";
$GLOBALS['strLeftToRight']			= "Da sinistra a destra";
$GLOBALS['strRightToLeft']			= "Da destra a sinistra";
$GLOBALS['strLooping']				= "Ripetizioni";
$GLOBALS['strAlwaysActive']			= "Sempre attivo";
$GLOBALS['strSpeed']				= "Velocità";
$GLOBALS['strPause']				= "Pausa";
$GLOBALS['strLimited']				= "Limitato";
$GLOBALS['strLeftMargin']			= "Margine sinistro";
$GLOBALS['strRightMargin']			= "Margine destro";
$GLOBALS['strTransparentBackground']		= "Sfondo trasparente";

$GLOBALS['strSmoothMovement']		= "Movimento fluido";
$GLOBALS['strHideNotMoving']		= "Nascondi il banner quando il puntatore è fermo";
$GLOBALS['strHideDelay']			= "Nascondi dopo";
$GLOBALS['strHideTransparancy']		= "Trasparenza del banner nascosto";


$GLOBALS['strAdLayerStyleName']	= array(
	'geocities'		=> "Geocities",
	'simple'		=> "Semplice",
	'cursor'		=> "Cursore",
	'floater'		=> "Flottante"
);

// Support for 3rd party server clicktracking
$GLOBALS['str3rdPartyTrack']		 = "Supporta server di tracciamento dei click di terze parti";

// Support for cachebusting code
$GLOBALS['strCacheBuster']		    = "Inserisci codice di Cache-Busting";

// Non-Img creatives Warning for zone image-only invocation

// unkown HTML tag type Warning for zone invocation

// sql/web banner-type warning for clickonly zone invocation

// IMG invocation selected for tracker with appended code
$GLOBALS['strImgWithAppendWarning'] = "Questo tracker ha aggiunto il codice, il codice aggiunto funzionerà <strong>solo</strong> con tag JavaScript";

// Local Invocation
$GLOBALS['strWarningLocalInvocation'] = "<span class='tab-s'><strong>Attenzione:</strong> L'invocazione in modalità locale funzionerà soltanto se il sito che richiama il codice è fisicamente posizionato sulla stessa macchina dell'ad server.</span><br />Controlla che il valore MAX_PATH definito nel codice sottostante indichi effettivamente la directory di base del prodotto<br /> e di avere un file di configurazione per il dominio che mostra i banner (nella directory MAX_PATH/var)";


?>
