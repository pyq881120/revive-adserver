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

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection']        = "ltr";
$GLOBALS['phpAds_TextAlignRight']       = "right";
$GLOBALS['phpAds_TextAlignLeft']        = "left";
$GLOBALS['phpAds_CharSet']              = "UTF-8";

$GLOBALS['phpAds_DecimalPoint']         = ".";
$GLOBALS['phpAds_ThousandsSeperator']   = ",";

// Date & time configuration
$GLOBALS['date_format']                 = "%d-%m-%Y";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%m-%Y";
$GLOBALS['day_format']                  = "%d-%m";
$GLOBALS['week_format']                 = "%W-%Y";
$GLOBALS['weekiso_format']              = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "خانه";
$GLOBALS['strHelp']                     = "راهنما";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "شروع کردن";
$GLOBALS['strNavigation']               = "منوی اصلی";
$GLOBALS['strShortcuts']                = "میانبر";
$GLOBALS['strActions']                  = "اقدام";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "صورت موجودی";
$GLOBALS['strMaintenance']              = "نگهداری";
$GLOBALS['strProbability']              = "احتمال";
$GLOBALS['strInvocationcode']           = "احضار کد";
$GLOBALS['strTrackerVariables']         = "تغییرات تراکر";
$GLOBALS['strBasicInformation']         = "اطلاعات اصلی";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "اطلاعات قرارداد";
$GLOBALS['strLoginInformation']         = "اطلاعات ورود";
$GLOBALS['strLogoutURL']                = "آدرس خروجی <br/> خالی برای حالت پیش�?رض";
$GLOBALS['strAppendTrackerCode']        = "اضا�?ه کردن کد رهگیری";
$GLOBALS['strOverview']                 = "شمای کلی";
$GLOBALS['strSearch']                   = "<u>جستجو</u>";
$GLOBALS['strHistory']                  = "تاریخچه";
$GLOBALS['strDetails']                  = "جزییات";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "چک کردن برای به روز رسانی";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "�?شرده";
$GLOBALS['strVerbose']                  = "دراز";
$GLOBALS['strUser']                     = "نام کاربری";
$GLOBALS['strEdit']                     = "ویرایش";
$GLOBALS['strCreate']                   = "ایجاد";
$GLOBALS['strDuplicate']                = "همسان";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "انتقال به";
$GLOBALS['strDelete']                   = "حذ�?";
$GLOBALS['strActivate']                 = "�?عالسازی";
$GLOBALS['strDeActivate']               = "غیر�?عال";
$GLOBALS['strConvert']                  = "تبدیل";
$GLOBALS['strRefresh']                  = "بارگذاری مجدد";
$GLOBALS['strSaveChanges']              = "ذخیره تغییرات";
$GLOBALS['strUp']                       = "بالا";
$GLOBALS['strDown']                     = "پایین";
$GLOBALS['strSave']                     = "ذخیره";
$GLOBALS['strCancel']                   = "لغوکردن";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "قبلی";
$GLOBALS['strPrevious_Key']             = "<u>قبلی</u>";
$GLOBALS['strNext']                     = "بعدی";
$GLOBALS['strNext_Key']                 = "<u>بعدی</u>";
$GLOBALS['strYes']                      = "بله";
$GLOBALS['strNo']                       = "خیر";
$GLOBALS['strNone']                     = "خالی";
$GLOBALS['strCustom']                   = "س�?ارشی";
$GLOBALS['strDefault']                  = "پیش �?رض";
$GLOBALS['strOther']                    = "غیره";
$GLOBALS['strUnknown']                  = "مجهول";
$GLOBALS['strUnlimited']                = "نامحدود";
$GLOBALS['strUntitled']                 = "بدون عنوان";
$GLOBALS['strAll']                      = "همه";
$GLOBALS['strAvg']                      = "میانگین.";
$GLOBALS['strAverage']                  = "میانگین";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "کلی";
$GLOBALS['strTotal']                    = "جمع کل";
$GLOBALS['strUnfilteredTotal']          = "کل (unfiltered)";
$GLOBALS['strFilteredTotal']            = "کل (filtered)";
$GLOBALS['strActive']                   = "�?عال";
$GLOBALS['strFrom']                     = "توسط";
$GLOBALS['strTo']                       = "به";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "لینک به";
$GLOBALS['strDaysLeft']                 = "روزهای مانده";
$GLOBALS['strCheckAllNone']             = "انتخاب همه / هیچکدام";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "<u>همه باز</u>";
$GLOBALS['strCollapseAll']              = "<u>همه بسته</u>";
$GLOBALS['strShowAll']                  = "نمایش همه";
$GLOBALS['strNoAdminInterface']         = "سرور از کار ا�?تاده است...";
$GLOBALS['strFilterBySource']           = "�?یلتر شده توسط منبع";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = ":این ردی�?ها دارای خطا می باشد آن را اصلاح نمایید";
$GLOBALS['strFieldFixBeforeContinue1']  = "قبل از ادامه شما نیازمند این هستید که";
$GLOBALS['strFieldFixBeforeContinue2']  = "برای اصلاح این خطاها";
$GLOBALS['strDelimiter']                = "جداکننده";
$GLOBALS['strMiscellaneous']            = "گوناگون";
$GLOBALS['strCollectedAllStats']        = "همه آمار";
$GLOBALS['strCollectedToday']           = "امروز";
$GLOBALS['strCollectedYesterday']       = "دیروز";
$GLOBALS['strCollectedThisWeek']        = "این ه�?ته";
$GLOBALS['strCollectedLastWeek']        = "ه�?ته گذشته";
$GLOBALS['strCollectedThisMonth']       = "این ماه";
$GLOBALS['strCollectedLastMonth']       = "ماه گذشته";
$GLOBALS['strCollectedLast7Days']       = "ه�?ت روز پیش";
$GLOBALS['strCollectedSpecificDates']   = "تاریخ مشخص";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "قیمت";
$GLOBALS['strAdmin']                    = "مدیر";
$GLOBALS['strWarning']                  = "اخطار";
$GLOBALS['strNotice']                   = "توجه";
$GLOBALS['strRequiredField']            = "Required field";
$GLOBALS['strCloseWindow']              = "Close window";

// Dashboard
$GLOBALS['strDashboardCantBeDisplayed'] = "The dashboard can not be displayed";
$GLOBALS['strNoCheckForUpdates']        = "The dashboard cannot be displayed unless the<br />check for updates setting is enabled.";
$GLOBALS['strEnableCheckForUpdates']    = "Please enable the <a href='account-settings-update.php' target='_top'>check for updates</a> setting on the<br/><a href='account-settings-update.php' target='_top'>update settings</a> page.";
$GLOBALS['strChoosenDisableHomePage']   = "You have choosen to disable your Home page.";
$GLOBALS['strAccessHomePage']           = "Click here to access your Home page";
$GLOBALS['strEditSyncSettings']         = "and edit your synchronization settings";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "code";
$GLOBALS['strDashboardSystemMessage']   = "System message";
$GLOBALS['strDashboardErrorHelp']       = "If this error repeats please describe your problem in detail and post it on <a href='http://forum.revive-adserver.com/'>forum.revive-adserver.com/</a>.";

// Priority
$GLOBALS['strPriority']                 = "اولویت";
$GLOBALS['strPriorityLevel']            = "درجه اولویت";
$GLOBALS['strPriorityTargeting']        = "توزیع";
$GLOBALS['strPriorityOptimisation']     = "گوناگون"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "High-Priority Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Low-Priority Advertisements";
$GLOBALS['strLimitations']              = "محدودیت ها";
$GLOBALS['strNoLimitations']            = "هیچ محدودتی وارد نشده";
$GLOBALS['strCapping']                  = "محدود کردن";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "نام";
$GLOBALS['strSize']                     = "سایز";
$GLOBALS['strWidth']                    = "عرض";
$GLOBALS['strHeight']                   = "ارت�?اع";
$GLOBALS['strURL2']                     = "آدرس";
$GLOBALS['strTarget']                   = "هد�?";
$GLOBALS['strLanguage']                 = "زبان";
$GLOBALS['strDescription']              = "توصی�?";
$GLOBALS['strVariables']                = "متغییر";
$GLOBALS['strID']                       = "شناسه";
$GLOBALS['strComments']                 = "توضیحات";

// User access
$GLOBALS['strWorkingAs']                = "Working as";
$GLOBALS['strWorkingAs_Key']            = "<u>W</u>orking as";
$GLOBALS['strWorkingAs']                = "Working as";
$GLOBALS['strSwitchTo']                 = "Switch to";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s for...";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "Add user";
$GLOBALS['strLinkUser_Key']             = "Add <u>u</u>ser";
$GLOBALS['strUsernameToLink']           = "Username of user to add";
$GLOBALS['strEmailToLink']              = "Email of user to add";
$GLOBALS['strNewUserWillBeCreated']     = "New user will be created";
$GLOBALS['strToLinkProvideEmail']       = "To add user, provide user's email";
$GLOBALS['strToLinkProvideUsername']    = "To add user, provide username";
$GLOBALS['strErrorWhileCreatingUser']   = "Error while creating user: %s";
$GLOBALS['strUserLinkedToAccount']      = "User has been added to account";
$GLOBALS['strUserAccountUpdated']       = "User account updated";
$GLOBALS['strUserUnlinkedFromAccount']  = "User has been removed from account";
$GLOBALS['strUserWasDeleted']           = "User has been deleted";
$GLOBALS['strUserNotLinkedWithAccount'] = "Such user is not linked with account";
$GLOBALS['strCantDeleteOneAdminUser']   = "You can't delete a user. At least one user needs to be linked with admin account.";
$GLOBALS['strLinkUserHelp']             = "To add an <b>existing user</b>, type %s and click {$GLOBALS['strLinkUser']} <br />To add a <b>new user</b>, type desired %s and click {$GLOBALS['strLinkUser']}" ;
$GLOBALS['strLinkUserHelpUser']         = "نام کاربری";
$GLOBALS['strLinkUserHelpEmail']        = "email address";
$GLOBALS['strLastLoggedIn']             = "Last logged in";
$GLOBALS['strDateLinked']               = "Date linked";
$GLOBALS['strUnlink']                   = "Remove";
$GLOBALS['strUnlinkingFromLastEntity']  = "Removing user from last entity";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "Removing user from last entity will cause the user to be deleted. Would you like to remove this user?";
$GLOBALS['strUnlinkAndDelete']          = "Remove &amp; delete user";
$GLOBALS['strUnlinkUser']               = "Remove user";
$GLOBALS['strUnlinkUserConfirmBody']    = "Are you sure you want to remove this user?";

// Login & Permissions
$GLOBALS['strUserAccess']               = "User Access";
$GLOBALS['strAdminAccess']              = "Admin Access";
$GLOBALS['strUserProperties']           = "تنظیمات بنر";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "اجازه کاربری";
$GLOBALS['strWelcomeTo']                = "خوش آمدید به ";
$GLOBALS['strEnterUsername']            = "کلمه کاربری و رمز خود را برای ورود وارد کنید";
$GLOBALS['strEnterBoth']                = "لط�?ا کلمه کاربری و رمز ورود را وارد کنید";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "ورود به سیستم";
$GLOBALS['strLogout']                   = "خروج";
$GLOBALS['strUsername']                 = "نام کاربری";
$GLOBALS['strPassword']                 = "رمز ";
$GLOBALS['strPasswordRepeat']           = "تکرار پسورد";
$GLOBALS['strAccessDenied']             = "دسترسی مجاز نیست";
$GLOBALS['strUsernameOrPasswordWrong']  = "نام کاربری و/یا رمز اشتباه است لط�?ا مجددا تلاش کنید .";
$GLOBALS['strPasswordWrong']            = "رمز ورود صحیح نمی باشد.";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "ممکن است شما دسترسی کا�?ی به کل امکانات نداشته باشید.";
$GLOBALS['strDuplicateClientName']      = "این نام کاربری موجود می باشد. نام کاربری دیگری را انتخاب کنید..";
$GLOBALS['strDuplicateAgencyName']      = "این نام کاربری موجود می باشد. نام کاربری دیگری را انتخاب کنید..";
$GLOBALS['strInvalidPassword']          = "این رمز ورود معتبر نمی باشد. رمز ورود دیگری را انتخاب کنید.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "رمز های ورود وارد شده شبیه به هم نمی باشند";
$GLOBALS['strRepeatPassword']           = "تکرار رمز";
$GLOBALS['strOldPassword']              = "رمز قدیمی";
$GLOBALS['strNewPassword']              = "پسورد جدید";
$GLOBALS['strNoBannerId']               = "همچین آی دی وجود ندارد";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "درخواست ها";
$GLOBALS['strImpressions']              = "تاثیرات";
$GLOBALS['strClicks']                   = "کلیک ها";
$GLOBALS['strConversions']              = "تغییرات";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "CTR";
$GLOBALS['strCNVR']                     = "نسبت �?روش ها";
$GLOBALS['strCPC']                      = "هزینه / بها هر کلیک";
$GLOBALS['strCPCo']                     = "هزینه / بهار هر تغییر";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "کل اثرها";
$GLOBALS['strTotalClicks']              = "کل کلیکها";
$GLOBALS['strTotalConversions']         = "کل تغییرات";
$GLOBALS['strViewCredits']              = "اثر اعتبارات";
$GLOBALS['strClickCredits']             = "تعداد کلیکها";
$GLOBALS['strConversionCredits']        = "تبدیل اعتبارات";
$GLOBALS['strImportStats']              = "آمار ورودیها";
$GLOBALS['strDateTime']                 = "زمان تاریخ";
$GLOBALS['strTrackerID']                = "شناسه رهگیری";
$GLOBALS['strTrackerName']              = "نام رهگیری";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "بنرها";
$GLOBALS['strCampaigns']                = "داخلی";
$GLOBALS['strCampaignID']               = "شناسه Campaign";
$GLOBALS['strCampaignName']             = "نام Campaign";
$GLOBALS['strCountry']                  = "کشور";
$GLOBALS['strStatsAction']              = "اقدام";
$GLOBALS['strWindowDelay']              = "پنجره تاخیر";
$GLOBALS['strStatsVariables']           = "متغییر";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "مدت اجاره هر ماه";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "تاریخ";
$GLOBALS['strToday']                    = "امروز";
$GLOBALS['strDay']                      = "روز";
$GLOBALS['strDays']                     = "روزها";
$GLOBALS['strLast7Days']                = "ه�?ت روز پیش";
$GLOBALS['strWeek']                     = "ه�?ته";
$GLOBALS['strWeeks']                    = "ه�?ته ها";
$GLOBALS['strSingleMonth']              = "ماه";
$GLOBALS['strMonths']                   = "ماهها";
$GLOBALS['strDayOfWeek']                = "روز و ه�?ته";
$GLOBALS['strThisMonth']                = "این ماه";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "ساعت";
$GLOBALS['strHourFilter']               = "ساعت �?یلتر";
$GLOBALS['strSeconds']                  = "ثانیه";
$GLOBALS['strMinutes']                  = "دقیقه ها";
$GLOBALS['strHours']                    = "ساعتها";
$GLOBALS['strTimes']                    = "زمانها";

// Advertiser
$GLOBALS['strClient']                       = "آگهی دهنده";
$GLOBALS['strClients']                      = "آگهی دهندگان";
$GLOBALS['strClientsAndCampaigns']          = "نمایش در یک نگاه";
$GLOBALS['strAddClient']                    = "اضا�?ه کردن آگهی دهنده";
$GLOBALS['strAddClient_Key']                = "اضا�?ه کردن آگهی دهنده جدید";
$GLOBALS['strTotalClients']                 = "کل آگهی دهندگان";
$GLOBALS['strClientProperties']             = "تنظیمات آگهی دهندگان";
$GLOBALS['strClientHistory']                = "تاریخچه آگهی دهندگان";
$GLOBALS['strNoClients']                    = "تبلیغ کننده ای تعری�? نشده است";
$GLOBALS['strNoClientsForBanners']          = "There are currently no advertisers defined. To add banners you need to <a href='advertiser-edit.php'>add new advertiser</a> and campaign first.";
$GLOBALS['strConfirmDeleteClient']          = "آیا شما واقعا میخواهید این تبلیغ کننده را حذ�? کنید؟";
$GLOBALS['strConfirmDeleteClients']         = "آیا شما واقعا میخواهید این تبلیغ کننده را حذ�? کنید؟";
$GLOBALS['strConfirmResetClientStats']      = "آیا شما واقعا میخواهید همه آمار موجود مربوط به این تبلیغ کننده را حذ�? کنید؟";
$GLOBALS['strSite']                         = "سایز";
$GLOBALS['strHideInactive']                 = "غیر�?عال مخ�?ی";
$GLOBALS['strHideInactiveAdvertisers']      = "مخ�?ی کردن آگهی دهندهای غیر�?عال";
$GLOBALS['strInactiveAdvertisersHidden']    = "مخ�?ی بودن آگهی دهندگان غیر�?عال";
$GLOBALS['strOverallAdvertisers']           = "آگهی دهندگان";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "نمایش در یک نگاه";
// Advertisers properties
$GLOBALS['strContact']                          = "تماس";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "ایمیل";
$GLOBALS['strChars']                            = "عملیات";
$GLOBALS['strSendAdvertisingReport']            = "گزارش هر تغییر داخلی ایمیل شود";
$GLOBALS['strNoDaysBetweenReports']             = "ارسال گزارش عملکرد داخلی بعد از گذشت چند روز ارسال شود";
$GLOBALS['strSendDeactivationWarning']          = "به صورت اتوماتیک �?عال و غیر�?عال شود";
$GLOBALS['strAllowClientModifyInfo']            = "مجاز بودن کاربر برای تغییر تنظیمات شخصی خود";
$GLOBALS['strAllowClientModifyBanner']          = "مجاز بودن کاربر برای تغییر بنرهای شخصی خود";
$GLOBALS['strAllowClientAddBanner']             = "مجاز بودن کاربر برای اضا�?ه کردن بنرهای شخصی خود";
$GLOBALS['strAllowClientDisableBanner']         = "مجاز بودن کاربر برای غیر�?عال کردن بنرهای شخصی خود";
$GLOBALS['strAllowClientActivateBanner']        = "مجاز بودن کاربر برای �?عال کردن بنرهای شخصی خود";
$GLOBALS['strAllowClientViewTargetingStats']    = "اجازه دادن برای نمایش آمار عملکرد خود";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "اجازه دادن به کاربر برای ورود تغییرات آ�?لاین خود";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "داخلی";
$GLOBALS['strCampaigns']                    = "داخلی";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "کل انتقالی ها";
$GLOBALS['strActiveCampaigns']              = "انتقالی های �?عال";
$GLOBALS['strAddCampaign']                  = "اضا�?ه کردن داخلی";
$GLOBALS['strAddCampaign_Key']              = "اضا�?ه کردن داخلی جدید";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "ساخت داخلی جدید";
$GLOBALS['strModifyCampaign']               = "تغییر داخلی";
$GLOBALS['strMoveToNewCampaign']            = "انتقال به داخلی جدید";
$GLOBALS['strBannersWithoutCampaign']       = "بنرهای بیرونی در داخلی";
$GLOBALS['strDeleteAllCampaigns']           = "حذ�? همه داخلی ها";
$GLOBALS['strLinkedCampaigns']              = "لینکهای داخلی";
$GLOBALS['strCampaignStats']                = "آمار داخلی";
$GLOBALS['strCampaignProperties']           = "تنظیمات داخلی";
$GLOBALS['strCampaignOverview']             = "نمایش داخلی";
$GLOBALS['strCampaignHistory']              = "تاریخچه انتقالی";
$GLOBALS['strNoCampaigns']                  = "در حال حاضر هیچ campaigns تعری�? نشده است.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "آیا واقعا میخواهید تمام  campaigns شخصی شده این تبلیغ کننده را حذ�? نمایید.";
$GLOBALS['strConfirmDeleteCampaign']        = "آیا واقعا میخواهید این campaignرا حذ�? کنید؟";
$GLOBALS['strConfirmDeleteCampaigns']       = "آیا واقعا میخواهید این campaignرا حذ�? کنید؟";
$GLOBALS['strConfirmResetCampaignStats']    = "ایا واقعا تمام آمار موجود برای این campaignرا میخواهید حذ�? نمایید؟";
$GLOBALS['strShowParentAdvertisers']        = "نمایش منشا آگهی دهندگان";
$GLOBALS['strHideParentAdvertisers']        = "مخ�?ی بودن منشا آگهی دهندگان";
$GLOBALS['strHideInactiveCampaigns']        = "مخ�?ی کردن داخلی های غیر�?عال";
$GLOBALS['strInactiveCampaignsHidden']      = "مخ�?ی بودن داخلی های غیر�?عال";
$GLOBALS['strContractDetails']              = "جزییات قرارداد";
$GLOBALS['strInventoryDetails']             = "جزییات صورت";
$GLOBALS['strPriorityInformation']          = "اطلاعات اولویت";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "داخلی";
$GLOBALS['strHiddenAd']                     = "آگهی دهندگان";
$GLOBALS['strHiddenAdvertiser']             = "آگهی دهنده";
$GLOBALS['strHiddenTracker']                = "تراکر";
$GLOBALS['strHiddenWebsite']              = "ناشر";
$GLOBALS['strHiddenZone']                   = "ناحیه";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "مانده";
$GLOBALS['strCompanionPositioning']         = "همراه با موقعیت";
$GLOBALS['strSelectUnselectAll']            = "انتخاب / انتخاب همه";
$GLOBALS['strConfirmOverwrite']             = "Saving these changes will overwrite any individual banner-zone links. Are you sure?";
$GLOBALS['strCampaignsOfAdvertiser']        = "of"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie']           = "Show capped ads if cookies are disabled";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns']    = "Calculated for all campaigns";
$GLOBALS['strCalculatedForThisCampaign']    = "Calculated for this campaign";
$GLOBALS['strLinkingZonesProblem']          = "Problem occurred when linking zones";
$GLOBALS['strUnlinkingZonesProblem']        = "Problem occurred when unlinking zones";
$GLOBALS['strZonesLinked']                  = "zone(s) linked";
$GLOBALS['strZonesUnlinked']                = "zone(s) unlinked";
$GLOBALS['strZonesSearch']                  = "Search";
$GLOBALS['strZonesSearchTitle']             = "Search zones and websites by name";
$GLOBALS['strNoWebsitesAndZones']           = "No websites and zones";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "in category";
$GLOBALS['strNoWebsitesAndZonesText']       = "with \"%s\" in name";
$GLOBALS['strToLink']                       = "to link";
$GLOBALS['strToUnlink']                     = "to unlink";
$GLOBALS['strLinked']                       = "Linked";
$GLOBALS['strAvailable']                    = "Available";
$GLOBALS['strShowing']                      = "Showing";
$GLOBALS['strAllCategories']                = "all categories";
$GLOBALS['strUncategorized']                = "Uncategorized";
$GLOBALS['strEditZone']                     = "Edit zone";
$GLOBALS['strEditWebsite']                  = "Edit website";


// Campaign properties
$GLOBALS['strDontExpire']                       = "غیر�?عال شدن بعد از گذشت زمان خاص";
$GLOBALS['strActivateNow']                      = "�?عال کردن سریع داخلی";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "پایین";
$GLOBALS['strHigh']                             = "بالا";
$GLOBALS['strExpirationDate']                   = "تاریخ اتمام";
$GLOBALS['strExpirationDateComment']            = "اتمام در این تاریخ";
$GLOBALS['strActivationDate']                   = "تاریخ شروع";
$GLOBALS['strActivationDateComment']            = "آغاز �?عالیت در این تاریخ";
$GLOBALS['strRevenueInfo']                      = "اطلاعات درآمد";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "آثار باقیمانده";
$GLOBALS['strClicksRemaining']                  = "کلیکهای باقیمانده";
$GLOBALS['strConversionsRemaining']             = "تغییرات باقیمانده";
$GLOBALS['strImpressionsBooked']                = "آثار";
$GLOBALS['strClicksBooked']                     = "کلیک ها";
$GLOBALS['strConversionsBooked']                = "تغییرات";
$GLOBALS['strCampaignWeight']                   = "هیچ - هماهنگ نیست با حجم داخلی";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "Optimise";
$GLOBALS['strAnonymous']                        = "مخ�?ی کردن آگهی دهندگان و ناشران در نمایش داخلی";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "نمایش بنر در این campaign با حق تقدم و اولویت بسیار پایین.<br> این campaign برای بنرهایی است�?اده می شود که دارای اولویت پایینی می باشند.";
$GLOBALS['strTargetPerDay']                     = "در هر روز .";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "با گذشت هر روز موجودی را به صورت اتوماتیک اعلام کند";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "The type of this campaign has been set to Remnant, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "The priority of this campaign has been set to high, \\nbut the target number of Impressions are not specified. \\nThis will cause the campaign to be deactivated and \\nits banners won't be delivered until a valid target \\nnumber of Impressions has been set. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignStatusPending']            = "Pending";
$GLOBALS['strCampaignStatusInactive']           = "�?عال";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "Paused";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "Restarted";
$GLOBALS['strCampaignStatusDeleted']            = "حذ�?";
$GLOBALS['strCampaignApprove']                  = "Approve";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "Pause";
$GLOBALS['strCampaignPauseDescription']         = "pause this campaign temporarily";
$GLOBALS['strCampaignRestart']                  = "Resume";
$GLOBALS['strCampaignRestartDescription']       = "resume this campaign";
$GLOBALS['strCampaignStatus']                   = "Campaign status";
$GLOBALS['strReasonForRejection']               = "Reason for rejection";
$GLOBALS['strReasonSiteNotLive']                = "Site not live";
$GLOBALS['strReasonBadCreative']                = "Inappropriate creative";
$GLOBALS['strReasonBadUrl']                     = "Inappropriate destination url";
$GLOBALS['strReasonBreakTerms']                 = "Website againts terms and conditions";
$GLOBALS['strChangeStatus']                     = "Change status";
$GLOBALS['strCampaignType']                     = "نام Campaign";
$GLOBALS['strType']                             = "Type";
$GLOBALS['strContract']                         = "تماس";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "تماس";
$GLOBALS['strStandardContractInfo']             = "Contract campaigns are for smoothly delivering the impressions
    required to achieve a specified time-critical performance requirement. That is, Contract campaigns are for when
    an advertiser has paid specifically to have a given number of impressions, clicks and/or conversions to be
    achieved either between two dates, or per day.";
$GLOBALS['strRemnant']                          = "Remnant";
$GLOBALS['strRemnantInfo']                      = "The default campaign type. Remnant campaigns have lots of different
    delivery options, and you should ideally always have at least one Remnant campaign linked to every zone, to ensure
    that there is always something to show. Use Remnant campaigns to display house banners, ad-network banners, or even
    direct advertising that has been sold, but where there is not a time-critical performance requirement for the
    campaign to adhere to.";
$GLOBALS['strECPMInfo']                         = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strContractCampaign']                 = "Contract Campaign";
$GLOBALS['strRemnantCampaign']                  = "Remnant Campaign";
$GLOBALS['strPricing']                          = "Pricing";
$GLOBALS['strPricingModel']                     = "Pricing model";
$GLOBALS['strSelectPricingModel']               = "-- select model --";
$GLOBALS['strRatePrice']                        = "Rate / Price";
$GLOBALS['strMinimumImpressions']               = "Minimum daily impressions";
$GLOBALS['strLimit']                            = "Limit";
$GLOBALS['strLowExclusiveDisabled']             = "You cannot change this campaign to Remnant or Exclusive, since both an end date and either of impressions/clicks/conversions limit are set. <br>In order to change type, you need to set no expiry date or remove limits.";
$GLOBALS['strCannotSetBothDateAndLimit']        = "You cannot set both an end date and limit for a Remnant or Exclusive campaign.<br>If you need to set both an end date and limit impressions/clicks/conversions please use a non-exclusive Contract campaign.";
$GLOBALS['strWhyDisabled']                      = "why is it disabled?";
$GLOBALS['strBackToCampaigns']                  = "Back to campaigns";
$GLOBALS['strCampaignBanners']                  = "Campaign's banners";
$GLOBALS['strCookies']                          = "Cookies";

// Tracker
$GLOBALS['strTracker']                    = "تراکر";
$GLOBALS['strTrackers']                   = "تراکر";
$GLOBALS['strTrackerOverview']            = "نمایش تراکر";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "اضا�?ه کردن تراکر";
$GLOBALS['strAddTracker_Key']             = "اضا�?ه کردن تراکر جدید";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "تا به این لطحه تراکری تعری�? نشده است ";
$GLOBALS['strConfirmDeleteAllTrackers']   = "آیا واقعا میخواهید تمام  campaigns شخصی شده این تبلیغ کننده را حذ�? نمایید.";
$GLOBALS['strConfirmDeleteTrackers']      = "آیا شما واقعا میخواهید این بنر را حذ�? کنید.";
$GLOBALS['strConfirmDeleteTracker']       = "آیا شما واقعا میخواهید این بنر را حذ�? کنید.";
$GLOBALS['strDeleteAllTrackers']          = "حذ�? همه تراکرها";
$GLOBALS['strTrackerProperties']          = "تنظیمات تراکر";
$GLOBALS['strTrackerOverview']            = "نمایش تراکر";
$GLOBALS['strModifyTracker']              = "تغییر تراکر";
$GLOBALS['strLog']                        = "گزارش روزانه ؟ ";
$GLOBALS['strDefaultStatus']              = "وضعیت پیش �?رض";
$GLOBALS['strStatus']                     = "وضعیت";
$GLOBALS['strLinkedTrackers']             = "لینکهای تراکرها";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "پنجره تغییر";
$GLOBALS['strUniqueWindow']               = "پنجره انحصاری";
$GLOBALS['strClick']                      = "کلیک";
$GLOBALS['strView']                       = "نمایش";
$GLOBALS['strArrival']                    = "ورود";
$GLOBALS['strManual']                     = "راهنما";
$GLOBALS['strImpression']                 = "آثار";
$GLOBALS['strConversionClickWindow']      = "Count conversions which occur within this number of seconds of a click";
$GLOBALS['strConversionViewWindow']       = "Count conversions which occur within this number of seconds of a view";
$GLOBALS['strTotalTrackerImpressions']    = "کل آثار";
$GLOBALS['strTotalTrackerConnections']    = "کل اتصالات";
$GLOBALS['strTotalTrackerConversions']    = "کل تغییرات";
$GLOBALS['strTrackerImpressions']         = "آثار";
$GLOBALS['strTrackerImprConnections']     = "اثر اتصالات";
$GLOBALS['strTrackerClickConnections']    = "کلیک اتصالات";
$GLOBALS['strTrackerImprConversions']     = "اثر تغییرات";
$GLOBALS['strTrackerClickConversions']    = "کلیک تغییرات";
$GLOBALS['strConversionType']             = "Conversion Type";
$GLOBALS['strLinkCampaignsByDefault']     = "آخرین پیوندی که توسط داخلی ساخته شده به صورت پیش �?رض باشد";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "بنر";
$GLOBALS['strBanners']                       = "بنرها";
$GLOBALS['strBannerFilter']                  = "�?یلتر بنر";
$GLOBALS['strAddBanner']                     = "اضا�?ه کردن بنر";
$GLOBALS['strAddBanner_Key']                 = "اضا�?ه کردن بنر جدید";
$GLOBALS['strBannerToCampaign']              = "to campaign";
$GLOBALS['strModifyBanner']                  = "تغییر دادن بنر";
$GLOBALS['strActiveBanners']                 = "�?عالسازی بنرها";
$GLOBALS['strTotalBanners']                  = "کل بنرها";
$GLOBALS['strShowBanner']                    = "نمایش بنر";
$GLOBALS['strShowAllBanners']                = "نمایش همه بنرها";
$GLOBALS['strShowBannersNoAdViews']          = "نشان دادن بنرها بدون تعداد مشاهدات";
$GLOBALS['strShowBannersNoAdClicks']         = "نشان دادن بنرها بدون تعداد کلیک ها";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "حذ�? همه بنرها";
$GLOBALS['strActivateAllBanners']            = "�?عالسازی همه بنرها";
$GLOBALS['strDeactivateAllBanners']          = "غیر �?عال کردن همه بنرها";
$GLOBALS['strBannerOverview']                = "بنرهای نمایش داده شده";
$GLOBALS['strBannerProperties']              = "تنظیمات بنر";
$GLOBALS['strBannerHistory']                 = "تاریخچه بنر";
$GLOBALS['strBannerNoStats']                 = "هیچ آماری برای این بنر موجود نمی باشد.";
$GLOBALS['strNoBanners']                     = "هیچ بنری تعری�? نشده است";
$GLOBALS['strNoBannersAddCampaign']          = "There are currently no banners defined, because there are no campaigns. To create a banner, <a href='campaign-edit.php?clientid=%s'>add a new campaign</a> first.";
$GLOBALS['strNoBannersAddAdvertiser']        = "There are currently no banners defined, because there are no advertisers. To create a banner, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strConfirmDeleteBanner']           = "آیا شما واقعا میخواهید این بنر را حذ�? کنید.";
$GLOBALS['strConfirmDeleteBanners']          = "آیا شما واقعا میخواهید این بنر را حذ�? کنید.";
$GLOBALS['strConfirmDeleteAllBanners']       = "آیا مطمئن هستید که می خواهید تمام بنر های مربوط به این campaign را حذ�? کنید؟";
$GLOBALS['strConfirmResetBannerStats']       = "آیا واقعا شما میخواهید تمام آمار مربوط به این بنر را حذ�? کنید؟";
$GLOBALS['strShowParentCampaigns']           = "نمایش campaign های پدر";
$GLOBALS['strHideParentCampaigns']           = "مخ�?ی کردن campaign های پدر";
$GLOBALS['strHideInactiveBanners']           = "مخ�?ی سازی بنرهای غیر�?عال";
$GLOBALS['strInactiveBannersHidden']         = "مخ�?ی سازی بنرهای غیر�?عال";
$GLOBALS['strAppendOthers']                  = "سایر پیوست";
$GLOBALS['strAppendTextAdNotPossible']       = "امکان الحاق سایر بنرها به تبلیغات متنی وجود ندارد.";
$GLOBALS['strHiddenBanner']                  = "بنر مخ�?ی";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Warning, possibly missing ";
$GLOBALS['strWarningMissingClosing']         = " closing tag \">\"";
$GLOBALS['strWarningMissingOpening']         = " opening tag \"<\"";
$GLOBALS['strSubmitAnyway']       		     = "ذخیره سازی";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "Banner Preferences";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "Default Banners";
$GLOBALS['strDefaultBannerUrl']                      = "Default Image URL";
$GLOBALS['strDefaultBannerDestination']              = "Default Destination URL";
$GLOBALS['strAllowedBannerTypes']                    = "Allowed Banner Types";
$GLOBALS['strTypeSqlAllow']                          = "Allow SQL Local Banners";
$GLOBALS['strTypeWebAllow']                          = "Allow Webserver Local Banners";
$GLOBALS['strTypeUrlAllow']                          = "Allow External Banners";
$GLOBALS['strTypeHtmlAllow']                         = "Allow HTML Banners";
$GLOBALS['strTypeTxtAllow']                          = "Allow Text Ads";
$GLOBALS['strTypeHtmlSettings']                      = "HTML Banner Options";
$GLOBALS['strTypeHtmlAuto']                          = "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']                           = "Allow PHP expressions to be executed from within a HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "لط�?ا نوع بنر خود را از منو زیر انتخاب کنید";
$GLOBALS['strMySQLBanner']             = "بنر لوکال SQL";
$GLOBALS['strWebBanner']               = "بنر لوکال وب سرور";
$GLOBALS['strURLBanner']               = "بنر بیرونی";
$GLOBALS['strHTMLBanner']              = "بنر اچ تی ام ال";
$GLOBALS['strTextBanner']              = "تبلیغ متنی";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "آیا میخواهید تصویر موجود را نگه دارید و یا اینکه میخواهید بنر دیگری را آپلود کنید؟";
$GLOBALS['strUploadOrKeepAlt']        = "آیا میخواهید تصویر موجود را نگه دارید و یا اینکه میخواهید بنر دیگری را آپلود کنید؟";
$GLOBALS['strNewBannerFile']         = "انتخاب عکس برای آپلود بنر";
$GLOBALS['strNewBannerFileAlt']     = "Select a backup image you <br />want to use in case browsers<br />don't support rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "Image URL (incl. http://)";
$GLOBALS['strURL']                     = "آدرس لینک بنر";
$GLOBALS['strHTML']                 = "اچ تی ام ال";
$GLOBALS['strKeyword']              = "کلمات کلیدی";
$GLOBALS['strTextBelow']             = "متن عکس";
$GLOBALS['strWeight']                 = "حجم";
$GLOBALS['strAlt']                     = "همه تکستها";
$GLOBALS['strStatusText']            = "وضعیت متن";
$GLOBALS['strBannerWeight']            = "حجم بنر";
$GLOBALS['strBannerType']           = "پسوند تبلیغ";
$GLOBALS['strAdserverTypeGeneric']  = "Generic HTML Banner";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "عمومی";
$GLOBALS['strSwfTransparency']		   = "Transparent background (Flash-only)";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "بررسی لینک های رمزی شده مشکل درون �?ایل �?لش";
$GLOBALS['strConvertSWFLinks']        = "تبدیل لینک �?لش";
$GLOBALS['strHardcodedLinks']        = "لینک های رمزی شده مشکل";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "�?شرده سازی �?ایل SWF برای سریعتر دانلود شدن (�?لش پلیر 6 مورد نیاز است)";
$GLOBALS['strOverwriteSource']        = "بازنویسی سورس پارامتر";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = " قالب HTML";
$GLOBALS['strChooseNetwork']        = "قالبی را که میخواهید است�?اده شود را انتخاب کنید.";
$GLOBALS['strMoreInformation']        = "اطلاعات بیشتر ...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "پیگیری کلیک ها";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "تنظیمات نمایش";
$GLOBALS['strACL']                        = "تحویل";
$GLOBALS['strACLAdd']                     = "اضا�?ه کردن محدودیت های جدید";
$GLOBALS['strACLAdd_Key']                 = "اضا�?ه کردن محدودیت های جدید";
$GLOBALS['strNoLimitations']              = "هیچ محدودتی وارد نشده";
$GLOBALS['strApplyLimitationsTo']         = "بکارگیری محدودیت ها برای";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "حذ�? تمام محدودیت ها";
$GLOBALS['strEqualTo']                    = "مساوی است با";
$GLOBALS['strDifferentFrom']              = "مت�?اوت است از";
$GLOBALS['strLaterThan']                  = "پس از";
$GLOBALS['strLaterThanOrEqual']           = "پس از یا مساوی با";
$GLOBALS['strEarlierThan']                = "هست نزدیکتر به";
$GLOBALS['strEarlierThanOrEqual']         = "هست نزدیکتر یا مساوی با";
$GLOBALS['strContains']                   = "محتویات";
$GLOBALS['strNotContains']                = "بدون محتوی";
$GLOBALS['strGreaterThan']                = "پس از";
$GLOBALS['strLessThan']                   = "is less than";
$GLOBALS['strAND']                        = "و";                          // logical operator
$GLOBALS['strOR']                         = "یا";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "�?قط نمایش این بنر وقتی که:";
$GLOBALS['strWeekDay']                    = "روزه�?ته";
$GLOBALS['strWeekDays']                   = "روز ه�?ته";
$GLOBALS['strTime']                       = "زمان";
$GLOBALS['strUserAgent']                  = "کاربر";
$GLOBALS['strDomain']                     = "دامین";
$GLOBALS['strClientIP']                   = "آی پی مشتری";
$GLOBALS['strSource']                     = "منشا";
$GLOBALS['strSourceFilter']               = "�?یلتر منبع";
$GLOBALS['strBrowser']                    = "مرورگر";
$GLOBALS['strOS']                         = "ویندوز";
$GLOBALS['strCountryCode']                = "کد کشور";
$GLOBALS['strCountryName']                = "نام کشور";
$GLOBALS['strRegion']                     = "کد ناحیه";
$GLOBALS['strCity']                       = "شهر";
$GLOBALS['strPostalCode']                 = "کد پستی";
$GLOBALS['strLatitude']                   = "عرض";
$GLOBALS['strLongitude']                  = "طول";
$GLOBALS['strDMA']                        = "کد";
$GLOBALS['strArea']                       = "کد تل�?ن شهر";
$GLOBALS['strOrg']                        = "نام اصلی";
$GLOBALS['strIsp']                        = "نام آی اس پی";
$GLOBALS['strNetspeed']                   = "سرعت اینترنت";
$GLOBALS['strReferer']                    = "ص�?حه مراجعه کنندگان";
$GLOBALS['strDeliveryLimitations']        = "محدودیتهای نمایش";

$GLOBALS['strDeliveryCapping']            = "پوشش نمایش";
$GLOBALS['strDeliveryCappingReset']       = "ریستارت مجدد پس از گذشت زمان : ";
$GLOBALS['strDeliveryCappingTotal']       = "در کل";
$GLOBALS['strDeliveryCappingSession']     = "در هر ثانیه";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "حد نمایش بنر به : ";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "حد داخلی نمایش به : ";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "حد ناحیه نمایش به : ";

// Website
$GLOBALS['strAffiliate']                = "ناشر";
$GLOBALS['strAffiliates']                 = "ناشران";
$GLOBALS['strAffiliatesAndZones']        = "انتشار دسته ها";
$GLOBALS['strAddNewAffiliate']            = "اضا�?ه کردن ناشر";
$GLOBALS['strAddNewAffiliate_Key']        = "ساخت ناشر جدید";
$GLOBALS['strAddAffiliate']                = "ساخت ناشر";
$GLOBALS['strAffiliateProperties']        = "تنظیمات ناشر";
$GLOBALS['strAffiliateOverview']        = "نمایش ناشر";
$GLOBALS['strAffiliateHistory']            = "تاریخچه ناشر";
$GLOBALS['strZonesWithoutAffiliate']    = "ناحیه ناشران خارجی";
$GLOBALS['strMoveToNewAffiliate']        = "انتقال به ناشر جدید";
$GLOBALS['strNoAffiliates']                = "هیچ ناشری تعری�? نشده است";
$GLOBALS['strConfirmDeleteAffiliate']    = "آیا شما واقعا میخواهید این ناشر را حذ�? کنید؟";
$GLOBALS['strConfirmDeleteAffiliates']   = "آیا شما واقعا میخواهید این ناشر را حذ�? کنید؟";
$GLOBALS['strMakePublisherPublic']        = "�?عال بودن ناحیه ساخته شده توسط سازنده ناشر";
$GLOBALS['strAffiliateInvocation']      = "احضار کد";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "کل ناشرین";
$GLOBALS['strInactiveAffiliatesHidden'] = "مخ�?ی بودن ناشران غیر �?عال";
$GLOBALS['strShowParentAffiliates']     = "نمایش منشا ناشرین";
$GLOBALS['strHideParentAffiliates']     = "مخ�?ی کردن منشا ناشرین";

// Website (properties)
$GLOBALS['strWebsite']                      = "ناشر";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "وابسته";
$GLOBALS['strAllowAffiliateModifyInfo']     = "مجاز بودن کاربر برای تغییر تنظیمات شخصی خود";
$GLOBALS['strAllowAffiliateModifyZones']    = "مجاز بودن کاربر برای تغییر ناحیه خود";
$GLOBALS['strAllowAffiliateLinkBanners']    = "مجاز بودن کاربر برای قراردادن لینک بنرهای خود در ناحیه ها";
$GLOBALS['strAllowAffiliateAddZone']        = "مجاز بودن کاربر برای تعری�? ناحیه جدید";
$GLOBALS['strAllowAffiliateDeleteZone']     = "مجاز بودن کاربر برای حذ�? ناحیه های موجود";
$GLOBALS['strAllowAffiliateGenerateCode']   = "مجاز بودن کاربر برای ساخت کد خروجی";
$GLOBALS['strAllowAffiliateZoneStats']      = "مجاز بودن کاربر برای نمایش آمار";
$GLOBALS['strAllowAffiliateApprPendConv']   = "مجاز بودن کاربر �?قط در زمان تایید یا تغییرات";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "اطلاعات پرداخت کننده";
$GLOBALS['strAddress']                      = "آدرس";
$GLOBALS['strPostcode']                     = "کدپستی";
$GLOBALS['strCity']                         = "شهر";
$GLOBALS['strCountry']                      = "کشور";
$GLOBALS['strPhone']                        = "تل�?ن";
$GLOBALS['strFax']                          = "�?کس";
$GLOBALS['strAccountContact']               = "اکانت تماس";
$GLOBALS['strPayeeName']                    = "نام گیرنده";
$GLOBALS['strTaxID']                        = "مالیات";
$GLOBALS['strModeOfPayment']                = "نحوه پرداخت وجه";
$GLOBALS['strPaymentChequeByPost']          = "Cheque by post";
$GLOBALS['strCurrency']                     = "پول رایج";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "سایر اطلاعات";
$GLOBALS['strUniqueUsersMonth']             = "�?قط کاربران / ماه";
$GLOBALS['strUniqueViewsMonth']             = "�?قط نمایش دهندگان / ماه";
$GLOBALS['strPageRank']                     = "امتیاز";
$GLOBALS['strCategory']                     = "مجموعه";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "�?ایل راهنما";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "انتشار دسته ها";

// Zone
$GLOBALS['strChooseZone']                   = "انتخاب ناحیه";
$GLOBALS['strZone']                         = "ناحیه";
$GLOBALS['strZones']                        = "ناحیه ها";
$GLOBALS['strAddNewZone']                   = "ساخت ناحیه جدید";
$GLOBALS['strAddNewZone_Key']               = "اضا�?ه کردن ناحیه جدید";
$GLOBALS['strAddZone']                      = "ساخت ناحیه";
$GLOBALS['strModifyZone']                   = "تغییردادن ناحیه";
$GLOBALS['strZoneToWebsite']                = "همه ناشرین";
$GLOBALS['strLinkedZones']                  = "ناحیه پیوند";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "ناحیه بالا";
$GLOBALS['strZoneProperties']               = "تنظیمات ناحیه";
$GLOBALS['strZoneHistory']                  = "تاریخچه ناحیه";
$GLOBALS['strNoZones']                      = "هیچ ناحیه ای تعری�? نشده است";
$GLOBALS['strNoZonesAddWebsite']            = "There are currently no zones defined, because there are no websites. To create a zone, <a href='affiliate-edit.php'>add a new website</a> first.";
$GLOBALS['strConfirmDeleteZone']            = "آیا شما واقعا میخواهید این ناحیه را حذ�? کنید؟";
$GLOBALS['strConfirmDeleteZones']           = "آیا شما واقعا میخواهید این ناحیه را حذ�? کنید؟";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "نوع ناحیه";
$GLOBALS['strBannerButtonRectangle']        = "بنر , دکمه و یا مستطیل";
$GLOBALS['strInterstitial']                 = "DHTML درون شبکه ای یا معلق";
$GLOBALS['strPopup']                        = "پاپ اپ";
$GLOBALS['strTextAdZone']                   = "تبلیغ متنی";
$GLOBALS['strEmailAdZone']                  = "ناحیه ایمیل و خبرنامه";
$GLOBALS['strZoneClick']                    = "Click tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "نمایش برنهای تطبیقی";
$GLOBALS['strHideMatchingBanners']          = "مخ�?ی کردن بنرهای تطبیقی";
$GLOBALS['strBannerLinkedAds']              = "لینک بنرها در داخلی";
$GLOBALS['strCampaignLinkedAds']            = "لینکهای ناحیه های داخلی";
$GLOBALS['strTotalZones']                   = "کل ناحیه ها";
$GLOBALS['strInactiveZonesHidden']          = "مخ�?ی کردن ناحیه های غیر�?عال";
$GLOBALS['strWarnChangeZoneType']           = "Changing the zone type to text or email will unlink all banners/campaigns due to restrictions of these zone types
                                                <ul>
                                                    <li>Text zones can only be linked to text ads</li>
                                                    <li>Email zone campaigns can only have one active banner at a time</li>
                                                </ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Changing the zone size will unlink any banners that are not the new size, and will add any banners from linked campaigns which are the new size';
$GLOBALS['strWarnChangeBannerSize']         = 'Changing the banner size will unlink this banner from any zones that are not the new size, and if this banner\'s <strong>campaign</strong> is linked to a zone of the new size, this banner will be automatically linked';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled. Contact your system administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Inventory Forecasting';
$GLOBALS['strZonesOfWebsite']               = 'in'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones']                  = "Back to zones";

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB Full Banner (468 x 60)";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)']        = "IAB Skyscraper (120 x 600)";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)']        = "IAB Leaderboard (728 x 90)";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB Button 1 (120 x 90)";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB Button 2 (120 x 60)";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB Half Banner (234 x 60)";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB Micro Bar (88 x 31)";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB Square Button (125 x 125)";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB Rectangle (180 x 150)";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB Square Pop-up (250 x 250)";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB Vertical Banner (120 x 240)";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB Medium Rectangle (300 x 250)";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB Large Rectangle (336 x 280)";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB Vertical Rectangle (240 x 400)";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB Wide Skyscraper (160 x 600)";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB Pop-Under (720 x 300)";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 3:1 Rectangle (300 x 100)";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "پیشر�?ته";
$GLOBALS['strChains']                    = "کادر";
$GLOBALS['strChainSettings']            = "تنظیمات کادر";
$GLOBALS['strZoneNoDelivery']            = "اگر بنری در ناحیه وجود نداشت شما می توانید خروجی را مشاهده کنید";
$GLOBALS['strZoneStopDelivery']            = "از کار انداختن و و نمایش ندادن بنر";
$GLOBALS['strZoneOtherZone']            = "نمایش و انتخاب محدوده";
$GLOBALS['strZoneUseKeywords']            = "انتخاب یک بنر با است�?اده از کلمات کلیدی زیر";
$GLOBALS['strZoneAppend']                = "همیشه اضا�?ه کن این کد را در ناحیه بنرها";
$GLOBALS['strAppendSettings']            = "تنظیمات اضا�?ه کردن و پیش بینی";
$GLOBALS['strZoneForecasting']            = "تنظیمات پیش بینی ناحیه";
$GLOBALS['strZonePrependHTML']            = "کد HTML زیر را همیشه با متن تبلیغاتی در این ناحیه نشان داده شود";
$GLOBALS['strZoneAppendHTML']            = "کد HTML زیر را همیشه با متن تبلیغاتی در این ناحیه نشان داده شود";
$GLOBALS['strZoneAppendNoBanner']        = "اضا�?ه کردن حتی اگر بنری وجود نداشته باشد در خروجی";
$GLOBALS['strZoneAppendType']            = "ا�?زودن نوع";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML code";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup or interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "همیشه اضا�?ه کن این کد را در ناحیه بنرها";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "همه بنرهای لینک شده به منطقه انتخاب شده در حال حاضر �?عال نیستند. <";
$GLOBALS['strZoneProbNullPri']            = "تا به حال لینک بنری در این ناحیه �?عال نشده است .";
$GLOBALS['strZoneProbListChainLoop']    = ".";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "لط�?ا لینک ناحیه را انتخاب کنید";
$GLOBALS['strLinkedBanners']            = "لینک بنرهای شخصی";
$GLOBALS['strCampaignDefaults']            = "لینک بنرهای منشا داخلی";
$GLOBALS['strLinkedCategories']         = "Link banners by category";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "کلمات کلیدی";
$GLOBALS['strIncludedBanners']            = "بنرهای لینک شده";
$GLOBALS['strLinkedBannersOverview']    = "بازنگر بنر های لینک شده";
$GLOBALS['strLinkedBannerHistory']        = "پیشینه بنر های لینک شده";
$GLOBALS['strNoZonesToLink']            = "There are no zones available to which this banner can be linked";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "نمایش برنهای تطبیقی";
$GLOBALS['strNoCampaignsToLink']        = "تا این زمان هنوز تراکری که امکان لینک در داخلی داشته باشد �?عال نشده";
$GLOBALS['strNoTrackersToLink']            = "تا این زمان هنوز تراکری که امکان لینک در داخلی داشته باشد �?عال نشده";
$GLOBALS['strNoZonesToLinkToCampaign']  = "There are no zones available to which this campaign can be linked";
$GLOBALS['strSelectBannerToLink']        = "بنری را که می خواهید به این ناحیه لینک کنید را انتخاب نمایید:";
$GLOBALS['strSelectCampaignToLink']        = "را که می خواهید به این ناحیه لینک کنید را انتخاب نمایید:";
$GLOBALS['strSelectAdvertiser']         = "انتخاب آگهی دهنده";
$GLOBALS['strSelectPlacement']          = "انتخاب داخلی";
$GLOBALS['strSelectAd']                 = "انتخاب بنر";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "تایید کد کاراتر";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "تا زمانی که";
$GLOBALS['strStatusApproved']           = "تصویب";
$GLOBALS['strStatusDisapproved']        = "ردکردن";
$GLOBALS['strStatusDuplicate']          = "همسان";
$GLOBALS['strStatusOnHold']             = "به عقب انداختن";
$GLOBALS['strStatusIgnore']             = "بلوک کردن";
$GLOBALS['strConnectionType']           = "پسوند";
$GLOBALS['strConnTypeSale']             = "ذخیره";
$GLOBALS['strConnTypeLead']             = "راهنمایی";
$GLOBALS['strConnTypeSignUp']           = "عضویت";
$GLOBALS['strShortcutEditStatuses'] = "ویرایش وضعیت";
$GLOBALS['strShortcutShowStatuses'] = "نمایش وضعیت";

// Statistics
$GLOBALS['strStats']                     = "آمار سایت";
$GLOBALS['strNoStats']                   = "There are currently no statistics available";
$GLOBALS['strNoTargetingStats']          = "There are currently no targeting statistics available";
$GLOBALS['strNoStatsForPeriod']          = "There are currently no statistics available for the period %s to %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "There are currently no targeting statistics available for the period %s to %s";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "تاریخچه کلی";
$GLOBALS['strDailyHistory']              = "نتایج روزانه";
$GLOBALS['strDailyStats']                = "آمار روزانه";
$GLOBALS['strWeeklyHistory']             = "نتایج ه�?تگی";
$GLOBALS['strMonthlyHistory']            = "نتایج ماهیانه";
$GLOBALS['strCreditStats']               = "آمار اعتبارات";
$GLOBALS['strDetailStats']               = "آمار جزییات";
$GLOBALS['strTotalThisPeriod']           = "Total this period";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Publisher distribution";
$GLOBALS['strCampaignDistribution']      = "Campaign distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Targeting statistics";
$GLOBALS['strCampaignTarget']            = "نحوه";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "همه ";
$GLOBALS['strByZone']                    = "در ناحیه ";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "نمایش به";
$GLOBALS['strBreakdownByDay']            = "روز";
$GLOBALS['strBreakdownByWeek']           = "ه�?ته";
$GLOBALS['strBreakdownByMonth']          = "ماه";
$GLOBALS['strBreakdownByDow']            = "روز و ه�?ته";
$GLOBALS['strBreakdownByHour']           = "ساعت";
$GLOBALS['strItemsPerPage']              = "آیتم ها در هر ص�?حه";
$GLOBALS['strDistributionHistory']       = "تاریخچه توزیع";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Show <u>G</u>raph of Statistics";
$GLOBALS['strExportStatisticsToExcel']   = "خروجی آمار به صورت �?ایل اگسل";
$GLOBALS['strGDnotEnabled']              = "You must have GD enabled in PHP to display graphs. <br />Please see <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for more information, including how to install GD on your server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "گروه ها";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "منقضی شدن";
$GLOBALS['strExpiration']             = "انقضا";
$GLOBALS['strNoExpiration']           = "تا به حال انقضا نداشته";
$GLOBALS['strEstimated']              = "تحمین انقضا";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "تاریخچه انتقالی";

// Reports
$GLOBALS['strReports']                = "گزارشات";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "گزارشات مدیر";
$GLOBALS['strAdvertiserReports']      = "گزارش آگهی دهندگان";
$GLOBALS['strAgencyReports']          = "عملیات گزارش";
$GLOBALS['strPublisherReports']       = "گزارش ناشرین";
$GLOBALS['strSelectReport']           = "انتخاب نحوه گزارشگیری";
$GLOBALS['strStartDate']              = "تاریخ شروع";
$GLOBALS['strEndDate']                = "تاریخ اتمام";
$GLOBALS['strNoData']                 = "تا این تاریخ اطلاعاتی موجود نیست";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "محدودیت ها";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "همه مشتریان";
$GLOBALS['strAnonAdvertisers']           = "آگهی دهندگان بی نام";
$GLOBALS['strAllPublishers']             = "همه ناشرین";
$GLOBALS['strAnonPublishers']            = "ناشرین بی نام";
$GLOBALS['strAllAvailZones']             = "همه مجموعه های �?عال";

// Userlog
$GLOBALS['strUserLog']                = "گزارش روزانه کاربر";
$GLOBALS['strUserLogDetails']        = "جزییات کاربر";
$GLOBALS['strDeleteLog']            = "حذ�? کاربر";
$GLOBALS['strAction']                = "اقدام";
$GLOBALS['strNoActionsLogged']        = "No actions are logged";

// Code generation
$GLOBALS['strGenerateBannercode']        = "انتخاب مستقیم";
$GLOBALS['strChooseInvocationType']        = "لط�?ا پسوند خروجی را انتخاب کنید";
$GLOBALS['strGenerate']                    = "تولیدکردن";
$GLOBALS['strParameters']                = "پارامترها";
$GLOBALS['strFrameSize']                = "سایز �?ریم";
$GLOBALS['strBannercode']                = "کد خروجی بنر";
$GLOBALS['strTrackercode']                = "کد خروجی تراکر";
$GLOBALS['strOptional']                    = "اختیاری";
$GLOBALS['strBackToTheList']            = "بازگشت به لیست گزارشات";
$GLOBALS['strGoToReportBuilder']        = "بازگشت به گزارش های انتخاب شده";
$GLOBALS['strCharset']                  = "Character set";
$GLOBALS['strAutoDetect']                   = "Auto-detect";
$GLOBALS['strCacheBusterComment']       = "  * Replace all instances of {random} with
  * a generated random number (or timestamp).
  *";
$GLOBALS['strSSLBackupComment']         = "
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment']       = "
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";

$GLOBALS['strThirdPartyComment']        = "
  * Don't forget to replace the '{clickurl}' text with
  * the click tracking URL if this ad is to be delivered through a 3rd
  * party (non-Max) adserver.
  *";

// Errors
$GLOBALS['strMySQLError']                       = "SQL Error:";
$GLOBALS['strErrorDatabaseConnetion']           = "Database connection error.";
$GLOBALS['strErrorCantConnectToDatabase']       = "A fatal error occurred %s can't connect to the database. Because
                                                   of this it isn't possible to use the administrator interface. The delivery
                                                   of banners might also be affected. Possible reasons for the problem are:
                                                   <ul>
                                                     <li>The database server isn't functioning at the moment</li>
                                                     <li>The location of the database server has changed</li>
                                                     <li>The username or password used to contact the database server are not correct</li>
                                                     <li>PHP has not loaded the MySQL Extension</li>
                                                   </ul>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] An error occurred while trying to fetch the advertisers from the database.";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] An error occurred while trying to fetch the banners from the database.";
$GLOBALS['strLogErrorViews']                    = "[phpAds] An error occurred while trying to fetch the Impressions from the database.";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] An error occurred while trying to fetch the Clicks from the database.";
$GLOBALS['strLogErrorConversions']              = "[phpAds] An error occurred while trying to fetch the Conversions from the database.";
$GLOBALS['strErrorViews']                       = "شما یابد یک عدد برای تعداد شماهدات وارد کنید یا کادر نامحدود را انتخاب نمایید !";
$GLOBALS['strErrorNegViews']                    = "مشاهدات من�?ی اجازه داده نمی شود";
$GLOBALS['strErrorClicks']                      = "شما باید تعداد کلیک ها را وارد کنید یا کادر نامحدود را انتخاب نمایید!";
$GLOBALS['strErrorNegClicks']                   = "کلیک های من�?ی اجازه داده نمی شود";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "هیچ تطبیقی پیدا نشد";
$GLOBALS['strErrorOccurred']                    = "یک خطا رخ داده است";
$GLOBALS['strErrorUploadSecurity']              = "یک مشکل امنیتی رخ داده است, عملیات آپلود متوق�? شد!";
$GLOBALS['strErrorUploadBasedir']               = "دسترسی به آپلود �?ایل وجود ندارد, احتمالا به خاطر محدودیت های safemode یا open_basedir می باشد";
$GLOBALS['strErrorUploadUnknown']               = "دسترسی به آپلود �?ایل وجود ندارد,و این به خاطر یک دلیل ناشناخته است. لط�?ا پیکربندی PHP خود را بررسی نمایید";
$GLOBALS['strErrorStoreLocal']                  = "یک خطا رخ داده است در حالی که سعی در ذخیره این بنر در دایرکتوری محلی دارد. و این نتیجه ای از عدم پیکربندی  درست مسیر این دایرکتوری میباشد.";
$GLOBALS['strErrorStoreFTP']                    = "در حالی که سعی در آپلود �?ایل به سرور FTP دارد یک خطا رخ داده است. و به این دلیل می تواند باشد که سرور موجود نیست و یا اینکه تنظیمات سرور FTP درست نمی باشد.";
$GLOBALS['strErrorDBPlain']                     = "یک خطا در طی دسترسی به بانک اطلاعاتی رخ داده است";
$GLOBALS['strErrorDBSerious']                   = "یک مشکل جدی هنگام دسترسی و شناسایی بانک اطلاعاتی رخ داده است";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "جداول بانک اطلاعاتی احتمالا خراب شده اند و نیاز به تعمیر دارند. برای اطلاعات بیشتر راهنمای برنامه را مطالعه نمایید.";
$GLOBALS['strErrorDBContact']                   = "با مدیریت سرور تماس بگیرید و این مشکل را حل نمایید.";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "The maintenance script has not been run in the last 24 hours. \\nIn order for ".MAX_PRODUCT_NAME." to function correctly it needs to run \\nevery hour. \\n\\nPlease read the Administrator guide for more information \\nabout configuring the maintenance script.";
$GLOBALS['strErrorBadUserType']                 = "The system was unable to determine your account user type!";
$GLOBALS['strErrorLinkingBanner']               = "It was not possible to link this banner to this zone because:";
$GLOBALS['strUnableToLinkBanner']               = "Cannot link this banner: ";
$GLOBALS['strErrorEditingCampaign']             = "Error updating campaign:";
$GLOBALS['strUnableToChangeCampaign']           = "Cannot apply this change because:";
$GLOBALS['strErrorEditingCampaignRevenue']      = "incorrect number format in Revenue Information field";
$GLOBALS['strErrorEditingCampaignECPM']         = "incorrect number format in ECPM Information field";
$GLOBALS['strErrorEditingZone']                 = "Error updating zone:";
$GLOBALS['strUnableToChangeZone']               = "Cannot apply this change because:";
$GLOBALS['strDatesConflict']                    = "dates conflict with:";
$GLOBALS['strEmailNoDates']                     = "Campaigns linked to Email Zones must have a start and end date set. " . PRODUCT_NAME . " ensures that on a given date, only one active banner is linked to an Email Zone. Please ensure that the campaigns already linked to the zone do not have overlapping dates with the campaign you are trying to link.";
$GLOBALS['strWarningInaccurateStats']           = "Some of these statistics were logged in a non-UTC timezone, and may not be displayed in the correct timezone.";
$GLOBALS['strWarningInaccurateReadMore']        = "Read more about this";
$GLOBALS['strWarningInaccurateReport']          = "Some of the statistics in this report were logged in a non-UTC timezone, and may not be displayed in the correct timezone";

//Validation
$GLOBALS['strRequiredFieldLegend']              = "denotes required field";
$GLOBALS['strFormContainsErrors']               = "Form contains errors, please correct the marked fields below.";
$GLOBALS['strRequiredField']                    = "Required field";
$GLOBALS['strXRequiredField']                   = "%s is required";
$GLOBALS['strMaxLengthField']                   = "Please enter maximum %s characters";
$GLOBALS['strEmailField']                       = "Please enter a valid email";
$GLOBALS['strNumericField']                     = "Please enter a number (only digits allowed)";
$GLOBALS['strGreaterThanZeroField']             = "Must be greater than 0";
$GLOBALS['strXGreaterThanZeroField']            = "%s must be greater than 0";
$GLOBALS['strXPositiveWholeNumberField']        = "%s must be a positive whole number";
$GLOBALS['strXUniqueField']                     = "%s with this %s already exists";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "Must be a decimal with maximum %s decimal places";
$GLOBALS['strInvalidWebsiteURL']                = "Invalid Website URL";


// Email
$GLOBALS['strSirMadam']                         = "آقا/خانوم";
$GLOBALS['strMailSubject']                      = "گزارش آگهی دهندگان";
$GLOBALS['strAdReportSent']                     = "ارسال گزارش آگهی دهندگان";
$GLOBALS['strMailHeader']                       = "دوست عزیز {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "در زیر آمار بنر ها برای {clientname}آورده شده است:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campaign {id} �?عال شده است";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campaign {id} �?عال شده است";
$GLOBALS['strMailBannerActivated']              = "Your campaign shown below has been activated because\\nthe campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated']            = "Your campaign shown below has been deactivated because";
$GLOBALS['strMailFooter']                       = "با احترام �?راوان,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "بنر های زیر غیر �?عال شده اند زیرا";
$GLOBALS['strMailNothingLeft']                  = "اگر شما دوست دارید که تبلیغات را در سایت ما ادامه دهید, با ما تماس بگیرید.\\nما خوشحال خواهیم شد.";
$GLOBALS['strClientDeactivated']                = "این  در حال حاضر �?عال نمی باشد زیرا";
$GLOBALS['strBeforeActivate']                   = "تاریخ �?عال سازی هنوز �?را نرسیده است";
$GLOBALS['strAfterExpire']                      = "تاریخ انقضاء �?رارسیده است";
$GLOBALS['strNoMoreImpressions']                = "there are no Impressions remaining";
$GLOBALS['strNoMoreClicks']                     = "there are no Clicks remaining";
$GLOBALS['strNoMoreConversions']                = "there are no Sales remaining";
$GLOBALS['strWeightIsNull']                     = "its weight is set to zero";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its target is set to zero";
$GLOBALS['strWarnClientTxt']                    = "The Impressions, Clicks, or Conversions left for your banners are getting below {limit}. \\nYour banners will be disabled when there are no Impressions, Clicks, or Conversions left. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Clicks/Conversions are low";
$GLOBALS['strNoViewLoggedInInterval']           = "هیچ مشاهده تبلیغاتی در طول این گزارش ثبت نشده است";
$GLOBALS['strNoClickLoggedInInterval']          = "هیچ کلیک تبلیغاتی در طول این گزارش ثبت نشده است";
$GLOBALS['strNoConversionLoggedInInterval']     = "هیچ مشاهده تبلیغاتی در طول این گزارش ثبت نشده است";
$GLOBALS['strMailReportPeriod']                 = "این گزارش شامل آماری از {startdate} تا {enddate}می باشد.";
$GLOBALS['strMailReportPeriodAll']              = "این گزارش شامل�? همه آمار تا {enddate} می باشد.";
$GLOBALS['strNoStatsForCampaign']               = "هیچ آماری برای این  موجود نمی باشد";
$GLOBALS['strImpendingCampaignExpiry']          = "Impending campaign expiration";
$GLOBALS['strYourCampaign']                     = "Your campaign";
$GLOBALS['strTheCampiaignBelongingTo']          = "The campaign belonging to";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} shown below is due to end on {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} shown below has less than {limit} impressions remaining.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "اولویت";
$GLOBALS['strSourceEdit']                       = "ویرایش منشا";

// Preferences
$GLOBALS['strPreferences']                      = "پیش تنظیمات";
$GLOBALS['strUserPreferences']                  = "User Preferences";
$GLOBALS['strChangePassword']                   = "Change Password";
$GLOBALS['strChangeEmail']                      = "Change E-mail";
$GLOBALS['strCurrentPassword']                  = "Current Password";
$GLOBALS['strChooseNewPassword']                = "Choose a new password";
$GLOBALS['strReenterNewPassword']               = "Re-enter new password";
$GLOBALS['strNameLanguage']                     = "Name & Language";
$GLOBALS['strAccountPreferences']               = "Account Preferences";
$GLOBALS['strCampaignEmailReportsPreferences']  = "Campaign email Reports Preferences";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "System administrator email Warnings";
$GLOBALS['strAgencyEmailWarnings']              = "Account email Warnings";
$GLOBALS['strAdveEmailWarnings']                = "Advertiser email Warnings";
$GLOBALS['strFullName']                         = "Full Name";
$GLOBALS['strEmailAddress']                     = "Email address";
$GLOBALS['strUserDetails']                      = "User Details";
$GLOBALS['strLanguageTimezone']                 = "Language & Timezone";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "User Interface Preferences";
$GLOBALS['strPluginPreferences']                = "Plugin Preferences";
$GLOBALS['strInvocationPreferences']            = "Invocation Preferences";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "Revenue";
$GLOBALS['strNumberOfItems']                       = "Number of items";
$GLOBALS['strRevenueCPC']                          = "Revenue CPC";
$GLOBALS['strERPM']                                = "ERPM";
$GLOBALS['strERPC']                                = "ERPC";
$GLOBALS['strERPS']                                = "ERPS";
$GLOBALS['strEIPM']                                = "EIPM";
$GLOBALS['strEIPC']                                = "EIPC";
$GLOBALS['strEIPS']                                = "EIPS";
$GLOBALS['strECPM']                                = "eCPM";
$GLOBALS['strECPC']                                = "ECPC";
$GLOBALS['strECPS']                                = "ECPS";
$GLOBALS['strEPPM']                                = "EPPM";
$GLOBALS['strEPPC']                                = "EPPC";
$GLOBALS['strEPPS']                                = "EPPS";
$GLOBALS['strPendingConversions']               = "Pending conversions";
$GLOBALS['strImpressionSR']                     = "آثار";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "تاثیرات";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "Rev.";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "Num. Items";
$GLOBALS['strRevenueCPC_short']                 = "Rev. CPC";
$GLOBALS['strERPM_short']                       = "ERPM";
$GLOBALS['strERPC_short']                       = "ERPC";
$GLOBALS['strERPS_short']                       = "ERPS";
$GLOBALS['strEIPM_short']                       = "EIPM";
$GLOBALS['strEIPC_short']                       = "EIPC";
$GLOBALS['strEIPS_short']                       = "EIPS";
$GLOBALS['strECPM_short']                       = "ECPM";
$GLOBALS['strECPC_short']                       = "ECPC";
$GLOBALS['strECPS_short']                       = "ECPS";
$GLOBALS['strEPPM_short']                       = "EPPM";
$GLOBALS['strEPPC_short']                       = "EPPC";
$GLOBALS['strEPPS_short']                       = "EPPS";
$GLOBALS['strID_short']                         = "شناسه";
$GLOBALS['strRequests_short']                   = "Req.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "کلیک ها";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "تنظیمات عمومی";
$GLOBALS['strGeneralSettings']              = "تنظیمات عمومی";
$GLOBALS['strMainSettings']                 = "تنظیمات اصلی";
$GLOBALS['strAdminSettings']                = "تنظیمات مدیریت";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "به روز رسانی محصولات";
$GLOBALS['strViewPastUpdates']        = "Manage Past Updates and Backups";
$GLOBALS['strFromVersion']            = "From Version";
$GLOBALS['strToVersion']              = "To Version";
$GLOBALS['strToggleDataBackupDetails']= "Toggle data backup details";
$GLOBALS['strClickViewBackupDetails'] = "click to view backup details";
$GLOBALS['strClickHideBackupDetails'] = "click to hide backup details";
$GLOBALS['strShowBackupDetails']      = "Show data backup details";
$GLOBALS['strHideBackupDetails']      = "Hide data backup details";
$GLOBALS['strInstallation']           = "Installation";
$GLOBALS['strBackupDeleteConfirm']    = "Do you really want to delete all backups created from this upgrade?";
$GLOBALS['strDeleteArtifacts']         = "Delete Artifacts";
$GLOBALS['strArtifacts']              = "Artifacts";
$GLOBALS['strBackupDbTables']         = "Backup database tables";
$GLOBALS['strLogFiles']               = "Log files";
$GLOBALS['strConfigBackups']          = "Conf backups";
$GLOBALS['strUpdatedDbVersionStamp']  = "Updated database version stamp";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "UPGRADE COMPLETE";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "UPGRADE FAILED";

// Agency
$GLOBALS['strAgencyManagement']              = "مدیریت نمایندگی";
$GLOBALS['strAgency']                      = "نمایندگی";
$GLOBALS['strAgencies']                   = "نمایندگی ها";
$GLOBALS['strAddAgency']                   = "ا�?زودن نماندگی";
$GLOBALS['strAddAgency_Key']               = "اضا�?ه کردن ناحیه جدید";
$GLOBALS['strTotalAgencies']               = "کل نمایندگی ها";
$GLOBALS['strAgencyProperties']              = "تنظیمات نمایندگی";
$GLOBALS['strNoAgencies']                 = "هیچ ناحیه ای تعری�? نشده است";
$GLOBALS['strConfirmDeleteAgency']           = "آیا شما واقعا میخواهید این ناحیه را حذ�? کنید؟";
$GLOBALS['strHideInactiveAgencies']          = "مخ�?ی کردن نمانیندگی های غیر�?عال";
$GLOBALS['strInactiveAgenciesHidden']     = "مخ�?ی کردن ناحیه های غیر�?عال";
$GLOBALS['strAllowAgencyEditConversions'] = "مجاز بودن کاربر برای ویرایش تغییرات";
$GLOBALS['strAllowMoreReports']           = "Allow 'More Reports' button";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "خط مشی";
$GLOBALS['strChannels']                   = "خط مشی ها";
$GLOBALS['strChannelOverview']            = "نمایش خط مشی";
$GLOBALS['strChannelManagement']          = "مدیریت خط مشی";
$GLOBALS['strAddNewChannel']              = "ا�?زودن خط مشی";
$GLOBALS['strAddNewChannel_Key']          = "ساختن خط مشی جدید";
$GLOBALS['strChannelToWebsite']           = "همه ناشرین";
$GLOBALS['strNoChannels']                 = "خط مشی تا به حال وارد نشده";
$GLOBALS['strNoChannelsAddWebsite']       = "There are currently no targeting channels defined, because there are no websites. To create a targeting channel, <a href='affiliate-edit.php'>add a new website</a> first.";

$GLOBALS['strEditChannelLimitations']     = "ویرایش محدودیت خط مشی";
$GLOBALS['strChannelProperties']          = "تنظیمات خط مشی";
$GLOBALS['strChannelLimitations']         = "تنظیمات نمایش";
$GLOBALS['strConfirmDeleteChannel']       = "آیا شما واقعا میخواهید این بنر را حذ�? کنید.";
$GLOBALS['strConfirmDeleteChannels']      = "آیا شما واقعا میخواهید این بنر را حذ�? کنید.";
$GLOBALS['strModifychannel']              = "ویرایش خط مشی";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Variable Name";
$GLOBALS['strVariableDescription']     = "توصی�?";
$GLOBALS['strVariableDataType']         = "پسوند تاریخ";
$GLOBALS['strVariablePurpose']       = "زمینه";
$GLOBALS['strGeneric']               = "عمومی";
$GLOBALS['strBasketValue']           = "Basket value";
$GLOBALS['strNumItems']              = "Number of items";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "تعداد";
$GLOBALS['strString']                 = "ریشه";
$GLOBALS['strTrackFollowingVars']     = "Track the following variable";
$GLOBALS['strAddVariable']             = "Add Variable";
$GLOBALS['strNoVarsToTrack']         = "No Variables to track.";
$GLOBALS['strVariableHidden']       = "Hide variable to publishers?";
$GLOBALS['strVariableRejectEmpty']  = "Reject if empty?";
$GLOBALS['strTrackingSettings']     = "Tracking settings";
$GLOBALS['strTrackerType']          = "نام تراکر";
$GLOBALS['strTrackerTypeJS']        = "Track JavaScript variables";
$GLOBALS['strTrackerTypeDefault']   = "Track JavaScript variables (backwards compatible, escaping needed)";
$GLOBALS['strTrackerTypeDOM']       = "Track HTML elements using DOM";
$GLOBALS['strTrackerTypeCustom']    = "Custom JS code";
$GLOBALS['strVariableCode']         = "Javascript tracking code";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "نمایش در یک نگاه";
$GLOBALS['strYouHaveNoBanners']     = "Campaign has no banners!";
$GLOBALS['strYouHaveNoZones']       = "Banner not linked to any zones!";
$GLOBALS['strNoBannersDropdown']    = "--No Banners Found--";
$GLOBALS['strNoZonesDropdown']      = "--No Zones Found--";
$GLOBALS['strInsertErrorPart1']     = "<br><br><center><b> Error, ";
$GLOBALS['strInsertErrorPart2']     = "records was not inserted! </b></center>";
$GLOBALS['strDuplicatedValue']      = "Duplicated Value!";
$GLOBALS['strInsertCorrect']        = "<br><br><center><b> File was uploaded correctly </b></center>";
$GLOBALS['strReuploadCsvFile']      = "Reupload CSV File";
$GLOBALS['strConfirmUpload']        = "Confirm Upload";
$GLOBALS['strLoadedRecords']        = "Loaded Records";
$GLOBALS['strBrokenRecords']        = "Broken Fields in all Records";
$GLOBALS['strWrongDateFormat']      = "Wrong Date Format";


// Password recovery
$GLOBALS['strForgotPassword']         = "پسورد خود را �?راموش کردید ؟ ";
$GLOBALS['strPasswordRecovery']       = "بازیابی پسورد";
$GLOBALS['strEmailRequired']          = "نیاز بودن آدرس ایمیل برای ارسال";
$GLOBALS['strPwdRecEmailSent']        = "عملیات بازیابی به ایمیل شما ارسال شد";
$GLOBALS['strPwdRecEmailNotFound']    = "همچین آدرس ایمیلی وجود ندارد";
$GLOBALS['strPwdRecPasswordSaved']    = "The new password was saved, proceed to <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "آی دی اشتباه";
$GLOBALS['strPwdRecEnterEmail']       = "آدرس ایمیل خود را برای بازیابی پسورد وارد کنید";
$GLOBALS['strPwdRecEnterPassword']    = "Enter your new password address below";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "پسورد تغییر کرد";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "بازیابی پسورد";
$GLOBALS['strProceed']                = "اقدام کردن &gt;";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binary data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by the system administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "Account";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "Event";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No user activity has been recorded during the timeframe you have selected.";
$GLOBALS['strAuditTrail']             = "Audit Trail";
$GLOBALS['strAuditTrailSetup']          = "Setup the Audit Trail today";
$GLOBALS['strAuditTrailGoTo']           = "Go to Audit Trail page";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".PRODUCT_DOCSURL."/admin/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Go to Campaigns page";
$GLOBALS['strCampaignSetUp']            = "Set up a Campaign today";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".PRODUCT_DOCSURL."/user/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>There is no campaign activity to display.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "No campaigns have started or finished during the timeframe you have selected";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>In order to view campaigns which have started or finished during the timeframe you have selected, the Audit Trail must be activated</li>
        <li>You are seeing this message because you didn't activate the Audit Trail</li>
";
$GLOBALS['strCampaignAuditTrailSetup']   = "Activate Audit Trail to start viewing Campaigns";

$GLOBALS['strUnsavedChanges']       = "You have unsaved changes on this page, make sure you press &quot;Save Changes&quot; when finished";
$GLOBALS['strDeliveryLimitationsDisagree'] = "WARNING: The delivery engine limitations <strong>DO NOT AGREE</strong> with the limitations shown below<br />Please hit save changes to update the delivery engine's rules";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Some of delivery limitations reports incorrect values:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "You are now working as <b>%s</b>";
$GLOBALS['strYouDontHaveAccess'] = "You don't have access to that page. You have been re-directed.";

$GLOBALS['strAdvertiserHasBeenAdded'] = "Advertiser <a href='%s'>%s</a> has been added, <a href='%s'>add a campaign</a>";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "Advertiser <a href='%s'>%s</a> has been updated";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "Advertiser <b>%s</b> has been deleted";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "All selected advertisers have been deleted";

$GLOBALS['strTrackerHasBeenAdded'] = "Tracker <a href='%s'>%s</a> has been added";
$GLOBALS['strTrackerHasBeenUpdated'] = "Tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "Variables of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "Linked campaigns of tracker <a href='%s'>%s</a> have been updated";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "Append tracker code of tracker <a href='%s'>%s</a> has been updated";
$GLOBALS['strTrackerHasBeenDeleted'] = "Tracker <b>%s</b> has been deleted";
$GLOBALS['strTrackersHaveBeenDeleted'] = "All selected trackers have been deleted";
$GLOBALS['strTrackerHasBeenDuplicated'] = "Tracker <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strTrackerHasBeenMoved'] = "Tracker <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strCampaignHasBeenAdded'] = "Campaign <a href='%s'>%s</a> has been added, <a href='%s'>add a banner</a>";
$GLOBALS['strCampaignHasBeenNoBanner'] = "Campaign <a href='%s'>%s</a> has been added";
$GLOBALS['strCampaignHasBeenUpdated'] = "Campaign <a href='%s'>%s</a> has been updated";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "Linked trackers of campaign <a href='%s'>%s</a> have been updated";
$GLOBALS['strCampaignHasBeenDeleted'] = "Campaign <b>%s</b> has been deleted";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "All selected campaigns have been deleted";
$GLOBALS['strCampaignHasBeenDuplicated'] = "Campaign <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strCampaignHasBeenMoved'] = "Campaign <b>%s</b> has been moved to advertiser <b>%s</b>";

$GLOBALS['strBannerHasBeenAdded'] = "Banner <a href='%s'>%s</a> has been added";
$GLOBALS['strBannerHasBeenUpdated'] = "Banner <a href='%s'>%s</a> has been updated";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "Advanced settings for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenUpdated'] = "Delivery options for banner <a href='%s'>%s</a> have been updated";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "Delivery options for banner <a href='%s'>%s</a> have been applied to %d banners";
$GLOBALS['strBannerHasBeenDeleted'] = "Banner <b>%s</b> has been deleted";
$GLOBALS['strBannersHaveBeenDeleted'] = "All selected banners have been deleted";
$GLOBALS['strBannerHasBeenDuplicated'] = "Banner <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strBannerHasBeenMoved'] = "Banner <b>%s</b> has been moved to campaign <b>%s</b>";
$GLOBALS['strBannerHasBeenActivated'] = "Banner <a href='%s'>%s</a> has been activated";
$GLOBALS['strBannerHasBeenDeactivated'] = "Banner <a href='%s'>%s</a> has been deactivated";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> zone(s) linked";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> zone(s) unlinked";

$GLOBALS['strWebsiteHasBeenAdded'] = "Website <a href='%s'>%s</a> has been added, <a href='%s'>add a zone</a>";
$GLOBALS['strWebsiteHasBeenUpdated'] = "Website <a href='%s'>%s</a> has been updated";
$GLOBALS['strWebsiteHasBeenDeleted'] = "Website <b>%s</b> has been deleted";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "All selected website have been deleted";

$GLOBALS['strZoneHasBeenAdded'] = "Zone <a href='%s'>%s</a> has been added";
$GLOBALS['strZoneHasBeenUpdated'] = "Zone <a href='%s'>%s</a> has been updated";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "Advanced settings for zone <a href='%s'>%s</a> have been updated";
$GLOBALS['strZoneHasBeenDeleted'] = "Zone <b>%s</b> has been deleted";
$GLOBALS['strZonesHaveBeenDeleted'] = "All selected zone have been deleted";
$GLOBALS['strZoneHasBeenDuplicated'] = "Zone <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";
$GLOBALS['strZoneHasBeenMoved'] = "Zone <b>%s</b> has been moved to website <b>%s</b>";
$GLOBALS['strZoneLinkedBanner'] = "Banner has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneLinkedCampaign'] = "Campaign has been linked to zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedBanner'] = "Banner has been unlinked from zone <a href='%s'>%s</a>";
$GLOBALS['strZoneRemovedCampaign'] = "Campaign has been unlinked from zone <a href='%s'>%s</a>";

$GLOBALS['strChannelHasBeenAdded'] = "Targeting channel <a href='%s'>%s</a> has been added, <a href='%s'>change the delivery options</a>";
$GLOBALS['strChannelHasBeenUpdated'] = "Targeting channel <a href='%s'>%s</a> has been updated";
$GLOBALS['strChannelAclHasBeenUpdated'] = "Delivery options for targeting channel <a href='%s'>%s</a> have been updated";
$GLOBALS['strChannelHasBeenDeleted'] = "Targeting channel <b>%s</b> has been deleted";
$GLOBALS['strChannelsHaveBeenDeleted'] = "All selected Targeting Channels have been deleted";
$GLOBALS['strChannelHasBeenDuplicated'] = "Targeting channel <a href='%s'>%s</a> has been copied to <a href='%s'>%s</a>";

$GLOBALS['strUserPreferencesUpdated'] = "Your <b>%s</b> preferences has been updated";
$GLOBALS['strPreferencesHaveBeenUpdated'] = "Preferences have been updated";
$GLOBALS['strEmailChanged'] = "Your E-mail has been changed";
$GLOBALS['strPasswordChanged'] = "Your password has been changed";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b> have been updated";
$GLOBALS['strTZPreferencesWarning'] = "However, campaign activation and expiry were not updated, nor time-based banner limitations.<br />You will need to update them manually if you wish them to use the new timezone";


/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome']            = "h";
$GLOBALS['keyUp']            = "u";
$GLOBALS['keyNextItem']        = ".";
$GLOBALS['keyPreviousItem']    = ",";
$GLOBALS['keyList']            = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "s";
$GLOBALS['keyCollapseAll']    = "c";
$GLOBALS['keyExpandAll']    = "e";
$GLOBALS['keyAddNew']        = "n";
$GLOBALS['keyNext']            = "n";
$GLOBALS['keyPrevious']        = "p";
$GLOBALS['keyLinkUser']        = "u";
$GLOBALS['keyWorkingAs']        = "w";

// Market entities
$GLOBALS['strMarketCampaignOptin'] = "OpenX Market - Opted In Campaigns";
$GLOBALS['strMarketZoneOptin'] = "OpenX Market - Zone Default Ads";
$GLOBALS['strMarketZoneBeforeOpenX2.8.4'] = "OpenX Market ads before OpenX 2.8.4";

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "Arabic";
$GLOBALS['str_bg']                  = "Bulgarian";
$GLOBALS['str_cs']                  = "Czech";
$GLOBALS['str_cy']                  = "Welsh";
$GLOBALS['str_da']                  = "Danish";
$GLOBALS['str_de']                  = "German";
$GLOBALS['str_el']                  = "Greek";
$GLOBALS['str_en']                  = "English";
$GLOBALS['str_es']                  = "Spanish";
$GLOBALS['str_fa']                  = "Persian";
$GLOBALS['str_fr']                  = "French";
$GLOBALS['str_he']                  = "Hebrew";
$GLOBALS['str_hr']                  = "Croatian";
$GLOBALS['str_hu']                  = "Hungarian";
$GLOBALS['str_id']                  = "Indonesian";
$GLOBALS['str_it']                  = "Italian";
$GLOBALS['str_ja']                  = "Japanese";
$GLOBALS['str_ko']                  = "Korean";
$GLOBALS['str_lt']                  = "Lithuanian";
$GLOBALS['str_ms']                  = "Malay";
$GLOBALS['str_nb']                  = "Norwegian Bokmal";
$GLOBALS['str_nl']                  = "Dutch";
$GLOBALS['str_pl']                  = "Polish";
$GLOBALS['str_pt_BR']               = "Portuguese Brazil";
$GLOBALS['str_pt_PT']               = "Portuguese Portugal";
$GLOBALS['str_ro']                  = "Romanian";
$GLOBALS['str_ru']                  = "Russian";
$GLOBALS['str_sk']                  = "Slovak";
$GLOBALS['str_sl']                  = "Slovenian";
$GLOBALS['str_sq']                  = "Albanian";
$GLOBALS['str_sv']                  = "Swedish";
$GLOBALS['str_tr']                  = "Turkish";
$GLOBALS['str_uk']                  = "Ukranian";
$GLOBALS['str_zh_CN']               = "Chinese Simplified";
$GLOBALS['str_zh_TW']               = "Chinese Traditional";

?>
