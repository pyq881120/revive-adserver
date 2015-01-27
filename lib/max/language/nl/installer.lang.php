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

/** status messages **/
$GLOBALS['strInstallStatusRecovery']            = 'Revive Adserver %s herstellen';
$GLOBALS['strInstallStatusInstall']             = 'Revive Adserver %s installeren';
$GLOBALS['strInstallStatusUpgrade']             = 'Upgrade naar Revive Adserver %s';
$GLOBALS['strInstallStatusUpToDate']            = 'Revive Adserver %s gedetecteerd';

/** welcome step **/
$GLOBALS['strWelcomeTitle']                     = "Welcome to " . PRODUCT_NAME;
$GLOBALS['strInstallIntro']                     = "Thank you for choosing " . PRODUCT_NAME . ". This wizard will guide you through the process of installing " . PRODUCT_NAME . " .";
$GLOBALS['strUpgradeIntro']                     = "Thank you for choosing " . PRODUCT_NAME . ". This wizard will guide you through the process of upgrading " . PRODUCT_NAME . ".";
$GLOBALS['strInstallerHelpIntro']               = "To help you with the " . PRODUCT_NAME . " installation process, please see the <a href='".PRODUCT_DOCSURL."' target='_blank'>Documentation</a>.";
$GLOBALS['strTermsIntro']                       = PRODUCT_NAME . " is distributed freely under an Open Source license, the GNU General Public License. Please review and agree to the following documents to continue the installation.";

/** check step **/
$GLOBALS['strSystemCheck']                      = "Systeemcontrole";
$GLOBALS['strSystemCheckIntro']                 = "De installatiewizard heeft een controle uitgevoerd van uw webserver-instellingen, om zeker te weten dat het installatieproces goed kan worden uitgevoerd..
                                                  <br>Controleer de aangegeven punten om het installatieproces te completeren.";
$GLOBALS['strFixErrorsBeforeContinuing']        = "Configuration of your webserver does not meet the requirements of the " . PRODUCT_NAME . ".
                                                   <br>In order to proceed with installation, please fix all errors.
                                                   For help, please see our <a href='".PRODUCT_DOCSURL."'>documentation</a> and <a href='http://"
                                                   .PRODUCT_DOCSURL."/faq'>FAQs</a>";

$GLOBALS['strAppCheckErrors']                   = "Errors were found when detecting previous installations of " . PRODUCT_NAME;
$GLOBALS['strAppCheckDbIntegrityError']         = "We hebben integriteitsproblemen gevonden in uw database. Dat betekent dat de layout van uw database verschilt van wat er werd verwacht. Dit kan komen door aanpassingen aan uw database.";

$GLOBALS['strSyscheckProgressMessage']          = "Systeemparameters controleren...";
$GLOBALS['strError']                            = "Fout";
$GLOBALS['strWarning']                          = "Waarschuwing";
$GLOBALS['strOK']                               = "OK";
$GLOBALS['strSyscheckName']                     = "Naam van de controle";
$GLOBALS['strSyscheckValue']                    = "Huidige waarde";
$GLOBALS['strSyscheckStatus']                   = "Status";
$GLOBALS['strSyscheckSeeFullReport']            = "Toon gedetailleerde systeemcontrole";
$GLOBALS['strSyscheckSeeShortReport']           = "Alleen fouten en waarschuwingen weergeven";
$GLOBALS['strBrowserCookies']                   = 'Browsercookies';
$GLOBALS['strPHPConfiguration']                 = 'PHP configuratie';
$GLOBALS['strCheckError']                       = 'fout';
$GLOBALS['strCheckErrors']                      = 'fouten';
$GLOBALS['strCheckWarning']                     = 'waarschuwing';
$GLOBALS['strCheckWarnings']                    = 'waarschuwingen';

/** admin login step **/
$GLOBALS['strAdminLoginTitle']                  = "Please login as your " . PRODUCT_NAME . " administrator";
$GLOBALS['strAdminLoginIntro']                  = "To continue, please enter your " . PRODUCT_NAME . " system administrator account login information.";
$GLOBALS['strLoginProgressMessage']             = 'Inloggen...';

/** database step **/
$GLOBALS['strDbSetupTitle']                     = "Geef uw database informatie";
$GLOBALS['strDbSetupIntro']                     = "Provide the details to connect to your " . PRODUCT_NAME . " database.";
$GLOBALS['strDbUpgradeTitle']                   = "Uw database is gedetecteerd";
$GLOBALS['strDbUpgradeIntro']                   = "The following database has been detected for your installation of " . PRODUCT_NAME . ".
                                                   Please verify that this is correct then click \"Continue\" to proceed.";
$GLOBALS['strDbProgressMessageInstall']         = 'Database aanmaken...';
$GLOBALS['strDbProgressMessageUpgrade']         = 'Database bijwerken...';
$GLOBALS['strDbSeeMoreFields']                  = 'Bekijk extra databasevelden...';
$GLOBALS['strDbTimeZoneWarning']                = "<p>As of this version " . PRODUCT_NAME . " stores dates in UTC time rather than in server time.</p>
                                                   <p>If you want historical statistics to be displayed with the correct timezone, upgrade your data manually.  Learn more <a target='help' href='%s'>here</a>.
                                                      Your statistics values will remain accurate even if you leave your data untouched.
                                                   </p>";
$GLOBALS['strDbTimeZoneNoWarnings']             = "Toon in de toekomst geen waarschuwingen over tijdzones";
$GLOBALS['strDBInstallSuccess']                 = 'Database correct aangemaakt';
$GLOBALS['strDBUpgradeSuccess']                 = 'Database met success bijgewerkt';

$GLOBALS['strDetectedVersion']                  = 'Detected ' . PRODUCT_NAME . ' version';

/** config step **/
$GLOBALS['strConfigureInstallTitle']            = 'Configure your local ' . PRODUCT_NAME . ' system administrator account';
$GLOBALS['strConfigureInstallIntro']            = 'Please provide the desired login information for your local ' . PRODUCT_NAME . ' system administrator account.';
$GLOBALS['strConfigureUpgradeTitle']            = 'Configuratie-instellingen';
$GLOBALS['strConfigureUpgradeIntro']            = 'Provide the path to your previous ' . PRODUCT_NAME . ' installation.';
$GLOBALS['strConfigSeeMoreFields']              = 'Bekijk meer configuratie-velden...';
$GLOBALS['strPreviousInstallTitle']             = "Vorige installatie";
$GLOBALS['strPathToPrevious']                   = "Path to previous " . PRODUCT_NAME . " installation";
$GLOBALS['strPathToPreviousHint']               = "Plugin bestanden moeten overgenomen worden van het path van uw vorige installatie";
$GLOBALS['strPathToPreviousError']              = "Een of meer plugin bestanden kon niet gevonden worden, bekijk het bestand install.log voor meer informatie";
$GLOBALS['strConfigureProgressMessage']         = 'Configuring ' . PRODUCT_NAME . '...';

/** jobs step **/
$GLOBALS['strJobsInstallTitle']                 = 'De taken van de installatie worden uitgevoerd';
$GLOBALS['strJobsInstallIntro']                 = 'De Installer voert nu de laatste installatie-taken uit.';
$GLOBALS['strJobsUpgradeTitle']                 = 'Upgrade taken uitvoeren';
$GLOBALS['strJobsUpgradeIntro']                 = 'De Installer voert nu de laatste upgrade taken uit.';
$GLOBALS['strJobsProgressInstallMessage']       = 'Installatie taken uitvoeren...';
$GLOBALS['strJobsProgressUpgradeMessage']       = 'Upgrade taken uitvoeren...';

$GLOBALS['strPluginTaskChecking']               = 'Checking ' . PRODUCT_NAME . ' Plugin';
$GLOBALS['strPluginTaskInstalling']             = 'Installing ' . PRODUCT_NAME . ' Plugin';
$GLOBALS['strPostInstallTaskRunning']           = 'Taken uitvoeren';

/** finish step **/
$GLOBALS['strFinishInstallTitle']               = 'Your ' . PRODUCT_NAME . ' installation is complete.';
$GLOBALS['strFinishUpgradeWithErrorsTitle']     = 'Your ' . PRODUCT_NAME . ' upgrade is complete. Please check the highlighted issues.';
$GLOBALS['strFinishUpgradeTitle']               = 'Your ' . PRODUCT_NAME . ' upgrade is complete.';
$GLOBALS['strFinishInstallWithErrorsTitle']     = 'Your ' . PRODUCT_NAME . ' installation is complete. Please check the highlighted issues.';
$GLOBALS['strInstallNonBlockingErrors']         = "An error occurred when performing installation tasks. Please check the <a class=\"show-errors\" href=\"#\">error list</a>
                                                   and install log at '%s' for details. You will still be able to login to your " . PRODUCT_NAME . " instance.";
$GLOBALS['strDetailedTaskErrorList']            = 'Gedetailleerde lijst van gevonden fouten';
$GLOBALS['strPluginInstallFailed']              = "Installatie van plugin '%s' is mislukt:";
$GLOBALS['strTaskInstallFailed']                = "Fout opgetreden bij het uitvoeren van installatie taak '%s':";
$GLOBALS['strContinueToLogin']                  = 'Click "Continue" to login to your ' . PRODUCT_NAME . ' instance.';

$GLOBALS['strContinue']                         = "Ga verder »";
$GLOBALS['strDBCreatedSuccessful']              = "Your database has successfully been created for ". PRODUCT_NAME;
$GLOBALS['strPluginsDefault']                   = PRODUCT_NAME . " Plugins";
$GLOBALS['strPostUpgradeTasks']                 = PRODUCT_NAME . " Post-Upgrade Tasks";
$GLOBALS['strInstallComplete']                  = "Your " . PRODUCT_NAME . " installation is now complete.";
$GLOBALS['strSignupUpdates']                    = "Meld u aan voor productupdates en beveiligingswaarschuwingen";
$GLOBALS['strUpgradeComplete']                  = "Congratulations, you have finished upgrading ". PRODUCT_NAME;
$GLOBALS['strUnableCreateConfFile']             = "We are unable to create your configuration file. Please re-check the permissions of the ". PRODUCT_NAME ." var folder.";
$GLOBALS['strUnableUpdateConfFile']             = "We are unable to update your configuration file. Please re-check the permissions of the ". PRODUCT_NAME ." var folder, and also check the permissions of the previous install's config file that you copied into this folder.";
$GLOBALS['strUnableToCreateAdmin']              = "We zijn niet in staat om een systeembeheerder-account te maken, is de database toegankelijk?";
$GLOBALS['strTimezoneLocal']                    = PRODUCT_NAME . " has detected that your PHP installation is returning 'System/Localtime' as the ".
                                                  "timezone of your server. This is because of a patch to PHP applied by some Linux distributions. " .
                                                  "Unfortunately, this is not a valid PHP timezone. Please edit your php.ini file and set the 'date.timezone' " .
                                                  "property to the correct value for your server.";

?>