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

$GLOBALS['strHome']                     = "Home";
$GLOBALS['strHelp']                     = "مساعدة";
$GLOBALS['strContactUs']                = "Contact us";
$GLOBALS['strStartOver']                = "البدء من جديد";
$GLOBALS['strNavigation']               = "التصفح";
$GLOBALS['strShortcuts']                = "الاختصارات";
$GLOBALS['strActions']                  = "الفعل";
$GLOBALS['strMore']                     = "More";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "Less";
$GLOBALS['strAdminstration']            = "المخزن";
$GLOBALS['strMaintenance']              = "الصيانة";
$GLOBALS['strProbability']              = "الإحتماليات";
$GLOBALS['strInvocationcode']           = "كود التركيب";
$GLOBALS['strTrackerVariables']         = "متغيرات متقفي الأثر";
$GLOBALS['strBasicInformation']         = "معلومات أساسية";
$GLOBALS['strAdditionalInformation']    = "Additional information";
$GLOBALS['strContractInformation']      = "Contract information";
$GLOBALS['strLoginInformation']         = "معلومات الدخول";
$GLOBALS['strLogoutURL']                = "الرابط الخاص بالتحويل لتسجيل الخروج. <br /> إتركه فارغاً لإستخدام الخيار الإفتراضي";
$GLOBALS['strAppendTrackerCode']        = "Append Tracker Code";
$GLOBALS['strOverview']                 = "نظرة عامة";
$GLOBALS['strSearch']                   = "البحث";
$GLOBALS['strHistory']                  = "History";
$GLOBALS['strDetails']                  = "التفاصيل";
$GLOBALS['strUpdateSettings']           = "Update Settings";
$GLOBALS['strCheckForUpdates']          = "فحص التحديثات";
$GLOBALS['strWhenCheckingForUpdates']   = "When checking for updates";
$GLOBALS['strCompact']                  = "مدمج";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "مستخدم";
$GLOBALS['strEdit']                     = "تعديل";
$GLOBALS['strCreate']                   = "إنشاء";
$GLOBALS['strDuplicate']                = "نسخ";
$GLOBALS['strCopyOf']                   = "Copy of";
$GLOBALS['strMoveTo']                   = "نقل إلى";
$GLOBALS['strDelete']                   = "حذف";
$GLOBALS['strActivate']                 = "تفعيل";
$GLOBALS['strDeActivate']               = "إلغاء التفعيل";
$GLOBALS['strConvert']                  = "تحويل";
$GLOBALS['strRefresh']                  = "تحديث";
$GLOBALS['strSaveChanges']              = "حفظ التعديلات";
$GLOBALS['strUp']                       = "فوق";
$GLOBALS['strDown']                     = "تحت";
$GLOBALS['strSave']                     = "حفظ";
$GLOBALS['strCancel']                   = "إلغاء";
$GLOBALS['strBack']                     = "Back";
$GLOBALS['strPrevious']                 = "السابق";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "التالي";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "نعم";
$GLOBALS['strNo']                       = "لا";
$GLOBALS['strNone']                     = "المنطقة";
$GLOBALS['strCustom']                   = "مخصص";
$GLOBALS['strDefault']                  = "افتراضي";
$GLOBALS['strOther']                    = "أخرى";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "غير محدود";
$GLOBALS['strUntitled']                 = "بدون عنوان";
$GLOBALS['strAll']                      = "الكل";
$GLOBALS['strAvg']                      = "متوسط";
$GLOBALS['strAverage']                  = "المتوسط";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run " . PRODUCT_NAME . " with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "بشكل عام";
$GLOBALS['strTotal']                    = "المجموع";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "فعال";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "إلى";
$GLOBALS['strAdd']                      = "Add";
$GLOBALS['strLinkedTo']                 = "رابط إلى";
$GLOBALS['strDaysLeft']                 = "أيام باقية";
$GLOBALS['strCheckAllNone']             = "تحديد الكل/ إزالة التحديد";
$GLOBALS['strKiloByte']                 = "كيلو بايت";
$GLOBALS['strExpandAll']                = "<u>فـ</u>ـتح الكل";
$GLOBALS['strCollapseAll']              = "<u>غـ</u>ـلق الكل";
$GLOBALS['strShowAll']                  = "عرض الكل";
$GLOBALS['strNoAdminInterface']         = "تم إيقاف لوحة تحكم المدراء بسبب الصيانة. هذا الإيقاف لن يؤثر على عملية عرض الإعلانات في حملتك الإعلانية.";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "الحقول التالية تحتوي على أخطاء:";
$GLOBALS['strFieldFixBeforeContinue1']  = "قبل الاستمرار يجب أن";
$GLOBALS['strFieldFixBeforeContinue2']  = "لتصليح هذه الأخطاء";
$GLOBALS['strDelimiter']                = "الفاصل";
$GLOBALS['strMiscellaneous']            = "خيارات متنوعة";
$GLOBALS['strCollectedAllStats']        = "كل الاحصائيات";
$GLOBALS['strCollectedToday']           = "اليوم";
$GLOBALS['strCollectedYesterday']       = "أمس";
$GLOBALS['strCollectedThisWeek']        = "هذا الاسبوع";
$GLOBALS['strCollectedLastWeek']        = "الاسبوع الماضي";
$GLOBALS['strCollectedThisMonth']       = "هذا الشهر";
$GLOBALS['strCollectedLastMonth']       = "الشهر الماضي";
$GLOBALS['strCollectedLast7Days']       = "آخر 7 أيام";
$GLOBALS['strCollectedSpecificDates']   = "تواريخ محددة";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "المدير";
$GLOBALS['strWarning']                  = "تحذير";
$GLOBALS['strNotice']                   = "تنبيه";
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
$GLOBALS['strPriority']                 = "الأهمية";
$GLOBALS['strPriorityLevel']            = "مستوى الأهمية";
$GLOBALS['strPriorityTargeting']        = "التوزيع";
$GLOBALS['strPriorityOptimisation']     = "خيارات متنوعة"; // Er, what?
$GLOBALS['strOverrideAds']              = "Override Campaign Advertisements";
$GLOBALS['strHighAds']                  = "Contract Campaign Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Campaign Advertisements";
$GLOBALS['strLowAds']                   = "Remnant Campaign Advertisements";
$GLOBALS['strLimitations']              = "المحددات";
$GLOBALS['strNoLimitations']            = "بدون تحديد";
$GLOBALS['strCapping']                  = "تغطية";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "الإسم";
$GLOBALS['strSize']                     = "الحجم";
$GLOBALS['strWidth']                    = "العرض";
$GLOBALS['strHeight']                   = "الارتفاع";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "الوجهة";
$GLOBALS['strLanguage']                 = "اللغة";
$GLOBALS['strDescription']              = "الوصف";
$GLOBALS['strVariables']                = "المتغيرات";
$GLOBALS['strID']                       = "الرقم";
$GLOBALS['strComments']                 = "التعليقات";

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
$GLOBALS['strLinkUserHelpUser']         = "اسم المستخدم";
$GLOBALS['strLinkUserHelpEmail']        = "البريد الإلكتروني";
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
$GLOBALS['strUserProperties']           = "خواص البنر";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "Permissions";
$GLOBALS['strAuthentification']         = "التحقق";
$GLOBALS['strWelcomeTo']                = "مرحباً بك في";
$GLOBALS['strEnterUsername']            = "الرجاء كتابة اسم المستخدم و كلمة السر للدخول";
$GLOBALS['strEnterBoth']                = "الرجاء كتابة اسم المستخدم و كلمة السر";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "هنالك مشكلة في الكوكيز، الرجاء الدخول من جديد";
$GLOBALS['strLogin']                    = "اسم الدخول";
$GLOBALS['strLogout']                   = "تسجيل الخروج";
$GLOBALS['strUsername']                 = "اسم المستخدم";
$GLOBALS['strPassword']                 = "كلمة السر";
$GLOBALS['strPasswordRepeat']           = "قم بإعادة كتابة كلمة السر";
$GLOBALS['strAccessDenied']             = "الدخول ممنوع";
$GLOBALS['strUsernameOrPasswordWrong']  = "قمت بإدخال بيانات خاطئة في اسم المستخدم أو كلمة السر. الرجاء المحاولة مرة أخرى.";
$GLOBALS['strPasswordWrong']            = "كلمة السر غير صحيحة";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Your account does not have the required permissions to use this feature, you can log into another account to use it.";
$GLOBALS['strDuplicateClientName']      = "اسم المستخدم الذي أدخلته موجود مسبقاً ، الرجاء اختيار اسم آخر.";
$GLOBALS['strDuplicateAgencyName']      = "اسم المستخدم الذي أدخلته موجود مسبقاً ، الرجاء اختيار اسم آخر.";
$GLOBALS['strInvalidPassword']          = "كلمة السر الجديدة غير صالحة ، الرجاء اختيار كلمة سر أخرى.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "كلمتا السر التي قمت بإدخالهما غير متطابقتين";
$GLOBALS['strRepeatPassword']           = "قم بإعادة كتابة كلمة السر";
$GLOBALS['strOldPassword']              = "كلمة السر الحالية";
$GLOBALS['strNewPassword']              = "كلمة السر الجديدة";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "الطلبات";
$GLOBALS['strImpressions']              = "مرات الظهور";
$GLOBALS['strClicks']                   = "الضغطات";
$GLOBALS['strConversions']              = "التحويل";
$GLOBALS['strCTRShort']                 = "معدل الضغطات";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "معدل الضغطات";
$GLOBALS['strCNVR']                     = "نسبة المبيعات";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "مجموع الضغطات";
$GLOBALS['strTotalConversions']         = "مجموع التحويلات";
$GLOBALS['strViewCredits']              = "رصيد الظهور";
$GLOBALS['strClickCredits']             = "رصيد الضغطات";
$GLOBALS['strConversionCredits']        = "رصيد التحويلات";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "التاريخ الوقت";
$GLOBALS['strTrackerID']                = "رقم المتتبع";
$GLOBALS['strTrackerName']              = "اسم المتتبع";
$GLOBALS['strTrackerImageTag']          = "Image Tag";
$GLOBALS['strTrackerJsTag']             = "Javascript Tag";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "بنرات";
$GLOBALS['strCampaigns']                = "الحملة الإعلانية";
$GLOBALS['strCampaignID']               = "رقم الحملة الاعلانية";
$GLOBALS['strCampaignName']             = "اسم الحملة الاعلانية";
$GLOBALS['strCountry']                  = "الدولة";
$GLOBALS['strStatsAction']              = "الفعل";
$GLOBALS['strWindowDelay']              = "تأخير الشاشة";
$GLOBALS['strStatsVariables']           = "المتغيرات";

// Finance
$GLOBALS['strFinanceCPM']               = "تكلفة الظهور";
$GLOBALS['strFinanceCPC']               = "تكلفة الضغطات";
$GLOBALS['strFinanceCPA']               = "تكلفة العمليات";
$GLOBALS['strFinanceMT']                = "الإيجار الشهري";
$GLOBALS['strFinanceCTR']               = "معدل الضغطات";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "التاريخ";
$GLOBALS['strToday']                    = "Today";
$GLOBALS['strDay']                      = "يوم";
$GLOBALS['strDays']                     = "أيام";
$GLOBALS['strLast7Days']                = "Last 7 days";
$GLOBALS['strWeek']                     = "اسبوع";
$GLOBALS['strWeeks']                    = "أسابيع";
$GLOBALS['strSingleMonth']              = "شهر";
$GLOBALS['strMonths']                   = "أشهر";
$GLOBALS['strDayOfWeek']                = "اليوم من الأسبوع";
$GLOBALS['strThisMonth']                = "This month";
$GLOBALS['strMonth']                    = array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDayFullNames']             = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$GLOBALS['strDayShortCuts']             = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strHour']                     = "الساعة";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "الثواني";
$GLOBALS['strMinutes']                  = "الدقائق";
$GLOBALS['strHours']                    = "الساعات";
$GLOBALS['strTimes']                    = "times";

// Advertiser
$GLOBALS['strClient']                       = "المعلن";
$GLOBALS['strClients']                      = "المعلنين";
$GLOBALS['strClientsAndCampaigns']          = "المعلنين و الحملات الاعلانية";
$GLOBALS['strAddClient']                    = "إضافة معلن جديد";
$GLOBALS['strAddClient_Key']                = "إضافة معلن <u>جـ</u>ـديد";
$GLOBALS['strTotalClients']                 = "جميع المعلنين";
$GLOBALS['strClientProperties']             = "خواص المعلن";
$GLOBALS['strClientHistory']                = "سجل المعلن";
$GLOBALS['strNoClients']                    = "لا يوجد معلنين حتى الآن. لإضافة حملة إعلانية، يجب <a href='advertiser-edit.php'>إضافة معلن</a> قبل ذلك.";
$GLOBALS['strNoClientsForBanners']          = "لا يوجد معلنين حتى الآن. لإضافة حملة إعلانية، يجب <a href='advertiser-edit.php'>إضافة معلن</a> قبل ذلك.";
$GLOBALS['strConfirmDeleteClient']          = "هل أنت متأكد من رغبتك في حذف هذا المعلن ؟";
$GLOBALS['strConfirmDeleteClients']         = "هل أنت متأكد من رغبتك في حذف هذا المعلن ؟";
$GLOBALS['strConfirmResetClientStats']      = "Do you really want to delete all existing statistics for this advertiser?";
$GLOBALS['strSite']                         = "الحجم";
$GLOBALS['strHideInactive']                 = "إخفاء الغير فعّال";
$GLOBALS['strHideInactiveAdvertisers']      = "إخفاء المعلنين غير النشطين";
$GLOBALS['strInactiveAdvertisersHidden']    = "المعلنين غير النشطين تم إخفائهم";
$GLOBALS['strOverallAdvertisers']           = "المعلنين";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "المعلنين و الحملات الاعلانية";
// Advertisers properties
$GLOBALS['strContact']                          = "الاتصال";
$GLOBALS['strContactName']                      = "Contact Name";
$GLOBALS['strEMail']                            = "البريد الالكتروني";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "إرسال تفاصيل الحملة الاعلانية بالبريد الالكتروني";
$GLOBALS['strNoDaysBetweenReports']             = "عدد الأيام بين تقارير عرض الحملات";
$GLOBALS['strSendDeactivationWarning']          = "إرسال بريد إلكتروني عندما يتم إيقاف أو تفعيل الحملة بشكل تلقائي";
$GLOBALS['strAllowClientModifyInfo']            = "السماح لهذا العضو بتعديل خياراته";
$GLOBALS['strAllowClientModifyBanner']          = "السماح لهذا العضو بتعديل الإعلانات الخاصة به";
$GLOBALS['strAllowClientAddBanner']             = "Allow this user to add their own banners";
$GLOBALS['strAllowClientDisableBanner']         = "السماح لهذا العضو بتعطيل الإعلانات الخاصة به";
$GLOBALS['strAllowClientActivateBanner']        = "السماح لهذا العضو بتفعيل الإعلانات الخاصة به";
$GLOBALS['strAllowClientViewTargetingStats']    = "السماح لهذا العضو بإستعراض إحصائيات الإستهداف";
$GLOBALS['strAllowCreateAccounts']              = "Allow this user to create new accounts";
$GLOBALS['strCsvImportConversions']             = "السماح لهذا العضو بإستيراد نسخة من التحويلات";
$GLOBALS['strAdvertiserLimitation']             = "Display only one banner from this advertiser on a web page";
$GLOBALS['strAllowAuditTrailAccess']            = "Allow this user to access the audit trail";

// Campaign
$GLOBALS['strCampaign']                     = "الحملة الإعلانية";
$GLOBALS['strCampaigns']                    = "الحملة الإعلانية";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "مجموع الحملات الاعلانية";
$GLOBALS['strActiveCampaigns']              = "الحملات الاعلانية النشطة";
$GLOBALS['strAddCampaign']                  = "إضافة حملة إعلانية";
$GLOBALS['strAddCampaign_Key']              = "إضافة حملة إعلانية";
$GLOBALS['strCampaignForAdvertiser']        = "for advertiser";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "تعديل حملة إعلانية";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "حذف كل الحملات الاعلانية";
$GLOBALS['strLinkedCampaigns']              = "الحملات الاعلانية المرتبطة";
$GLOBALS['strCampaignStats']                = "Campaign Statistics";
$GLOBALS['strCampaignProperties']           = "خواص الحملة الإعلانية";
$GLOBALS['strCampaignOverview']             = "نظرة عامة على الحملة الإعلانية";
$GLOBALS['strCampaignHistory']              = "سجل الحملة الإعلانية";
$GLOBALS['strNoCampaigns']                  = "There are currently no campaigns defined for this advertiser.";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "There are currently no campaigns defined, because there are no advertisers. To create a campaign, <a href='advertiser-edit.php'>add a new advertiser</a> first.";
$GLOBALS['strNoCampaignsForBanners']        = "This advertiser has no campaigns. You need to <a href='campaign-edit.php?clientid=%s'>add first campaign</a> in order to add banners";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "هل تريد حذف كل الحملات الإعلانية المرتبطة بهذا المعلن ؟";
$GLOBALS['strConfirmDeleteCampaign']        = "هل تريد حذف هذه الحملة الاعلانية ؟";
$GLOBALS['strConfirmDeleteCampaigns']       = "هل تريد حذف هذه الحملة الاعلانية ؟";
$GLOBALS['strConfirmResetCampaignStats']    = "Do you really want to delete all existing statistics for this campaign?";
$GLOBALS['strShowParentAdvertisers']        = "عرض المعلنين الرئيسيين";
$GLOBALS['strHideParentAdvertisers']        = "إخفاء المعلنين الرئيسيين";
$GLOBALS['strHideInactiveCampaigns']        = "إخفاء الحملات الاعلانية غير النشطة";
$GLOBALS['strInactiveCampaignsHidden']      = "تم إخفاء الحملات الاعلانية غير النشطة";
$GLOBALS['strContractDetails']              = "تفاصيل العقد";
$GLOBALS['strInventoryDetails']             = "تفاصيل المخزون";
$GLOBALS['strPriorityInformation']          = "الأهمية مقارنة بالحملات الإعلانية الأخرى";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM prioritization";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strHiddenCampaign']               = "الحملة الإعلانية";
$GLOBALS['strHiddenAd']                     = "الاعلانات";
$GLOBALS['strHiddenAdvertiser']             = "المعلن";
$GLOBALS['strHiddenTracker']                = "المتتبع";
$GLOBALS['strHiddenWebsite']              = "الموقع";
$GLOBALS['strHiddenZone']                   = "المنطقة";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "Companion positioning";
$GLOBALS['strSelectUnselectAll']            = "اختيار/عدم اختيار الكل";
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
$GLOBALS['strDontExpire']                       = "Don't expire";
$GLOBALS['strActivateNow']                      = "Start immediately";
$GLOBALS['strSetSpecificDate']                  = "Set specific date";
$GLOBALS['strLow']                              = "منخفض";
$GLOBALS['strHigh']                             = "عالي";
$GLOBALS['strExpirationDate']                   = "تاريخ النهاية";
$GLOBALS['strExpirationDateComment']            = "الحملة الاعلانية ستنتهي مع نهاية هذا اليوم";
$GLOBALS['strActivationDate']                   = "تاريخ البداية";
$GLOBALS['strActivationDateComment']            = "الحملة الاعلانية ستبدأ مع بداية اليوم";
$GLOBALS['strRevenueInfo']                      = "تفاصيل الأرباح";
$GLOBALS['strTotalRevenue']                     = "Total Revenue";
$GLOBALS['strImpressionsRemaining']             = "مرات الظهور المتبقية";
$GLOBALS['strClicksRemaining']                  = "الضغطات المتبقية";
$GLOBALS['strConversionsRemaining']             = "مرات الظهور المتبقية";
$GLOBALS['strImpressionsBooked']                = "مرات الظهور المحجوزة";
$GLOBALS['strClicksBooked']                     = "الضغطات المحجوزة";
$GLOBALS['strConversionsBooked']                = "التحويلات المحجوزة";
$GLOBALS['strCampaignWeight']                   = "Set the campaign weight";
$GLOBALS['strTargetLimitAdImpressions']         = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                         = "تحسين";
$GLOBALS['strAnonymous']                        = "إخفاء المعلن و المواقع لهذه الحملة الاعلانية";
$GLOBALS['strHighPriority']                     = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                      = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                     = "في اليوم";
$GLOBALS['strTargetLimitImpressionsTo']         = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']            = "تلقائي - توزيع المخزون المتبقي بشكل متناسق مع الأيام المتبقية";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "أهمية هذه الحملة تم تحديدها كمنخفضة، \\nولكن الوزن تم تحديده كصفر أو لم يتم تحديده. \\nهذا الأمر سيجعل الحملة غير نشطة \\nو لن يتم عرض الإعلانات الموجودة فيها \\nحتى يتم تعديل الوزن إلى رقم صحيح. \\n\\nهل أنت متأكد من رغبتك في المواصلة؟";
$GLOBALS['strCampaignWarningEcpmNoRevenue']     = "This campaign uses eCPM optimisation \\nbut the 'revenue' is set to zero or it has not been specified. \\nThis will cause the campaign to be deactivated \\nand its banners won't be delivered until the \\nrevenue has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningOverrideNoWeight']  = "The type of this campaign has been set to Override, \\nbut the weight is set to zero or it has not been \\nspecified. This will cause the campaign to be \\ndeactivated and its banners won't be delivered \\nuntil the weight has been set to a valid number. \\n\\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']          = "أهمية هذه الحملة تم تحديدها كمرتفعة، \\nولكن مرات الظهور المستهدفة لم يتم تحديدها. \\nهذا الأمر سيعطل الحملة و \\nالإعلانات المرتبطة بها لن يتم عرضها حتى يتم \\nتحديد عدد مرات الظهور المستهدف.\\n\\nهل أنت متأكد من رغبتك في المواصلة؟";
$GLOBALS['strCampaignStatusPending']            = "بانتظار الموافقة";
$GLOBALS['strCampaignStatusInactive']           = "فعال";
$GLOBALS['strCampaignStatusRunning']            = "Running";
$GLOBALS['strCampaignStatusPaused']             = "إيقاف مؤقت";
$GLOBALS['strCampaignStatusAwaiting']           = "Awaiting";
$GLOBALS['strCampaignStatusExpired']            = "Completed";
$GLOBALS['strCampaignStatusApproval']           = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']           = "Rejected";
$GLOBALS['strCampaignStatusAdded']              = "Added";
$GLOBALS['strCampaignStatusStarted']            = "Started";
$GLOBALS['strCampaignStatusRestarted']          = "إعادة تشغيل";
$GLOBALS['strCampaignStatusDeleted']            = "حذف";
$GLOBALS['strCampaignApprove']                  = "تمت الموافقة";
$GLOBALS['strCampaignApproveDescription']       = "accept this campaign";
$GLOBALS['strCampaignReject']                   = "Reject";
$GLOBALS['strCampaignRejectDescription']        = "reject this campaign";
$GLOBALS['strCampaignPause']                    = "إيقاف مؤقت";
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
$GLOBALS['strCampaignType']                     = "اسم الحملة الاعلانية";
$GLOBALS['strType']                             = "النوع";
$GLOBALS['strContract']                         = "الاتصال";
$GLOBALS['strOverride']                         = "Override";
$GLOBALS['strOverrideInfo']                     = "Override campaigns are a special campaign type specifically to
    override (i.e. take priority over) Remnant and Contract campaigns. Override campaigns are generally used with
    specific targeting and/or capping rules to ensure that the campaign banners are always displayed in certain
    locations, to certain users, and perhaps a certain number of times, as part of a specific promotion. (This campaign
    type was previously known as 'Contract (Exclusive)'.)";
$GLOBALS['strStandardContract']                 = "الاتصال";
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
$GLOBALS['strTracker']                    = "المتتبع";
$GLOBALS['strTrackers']                   = "المتتبع";
$GLOBALS['strTrackerOverview']            = "نظرة عامة على المتتبع";
$GLOBALS['strTrackerPreferences']            = "الخيارات العامة";
$GLOBALS['strAddTracker']                 = "إضافة متتبع جديد";
$GLOBALS['strAddTracker_Key']             = "إضافة متتبع جديد";
$GLOBALS['strTrackerForAdvertiser']       = "for advertiser";
$GLOBALS['strNoTrackers']                 = "There are currently no trackers defined for this advertiser";
$GLOBALS['strConfirmDeleteAllTrackers']   = "هل تريد حذف كل المتتبعات المرتبطة بهذا المعلن ؟";
$GLOBALS['strConfirmDeleteTrackers']      = "هل تريد حذف هذا المتتبع ؟";
$GLOBALS['strConfirmDeleteTracker']       = "هل تريد حذف هذا المتتبع ؟";
$GLOBALS['strDeleteAllTrackers']          = "حذف كل المتتبعات";
$GLOBALS['strTrackerProperties']          = "خواص المتتبع";
$GLOBALS['strTrackerOverview']            = "نظرة عامة على المتتبع";
$GLOBALS['strModifyTracker']              = "تعديل المتتبع";
$GLOBALS['strLog']                        = "سجلات؟";
$GLOBALS['strDefaultStatus']              = "الحالة الافتراضية";
$GLOBALS['strStatus']                     = "الحالة";
$GLOBALS['strLinkedTrackers']             = "المتتبعات المرتبطة";
$GLOBALS['strTrackerInformation']         = "Tracker Information";
$GLOBALS['strConversionWindow']           = "نافذة التحويل";
$GLOBALS['strUniqueWindow']               = "ناقذة فريدة";
$GLOBALS['strClick']                      = "ضغطة";
$GLOBALS['strView']                       = "عرض";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "مرات الظهور";
$GLOBALS['strConversionClickWindow']      = "Count conversions which occur within this number of seconds of a click";
$GLOBALS['strConversionViewWindow']       = "Count conversions which occur within this number of seconds of a view";
$GLOBALS['strTotalTrackerImpressions']    = "Total Impressions";
$GLOBALS['strTotalTrackerConnections']    = "Total Connections";
$GLOBALS['strTotalTrackerConversions']    = "Total Conversions";
$GLOBALS['strTrackerImpressions']         = "Impressions";
$GLOBALS['strTrackerImprConnections']     = "Impression Connections";
$GLOBALS['strTrackerClickConnections']    = "Click Connections";
$GLOBALS['strTrackerImprConversions']     = "Impression Conversions";
$GLOBALS['strTrackerClickConversions']    = "Click Conversions";
$GLOBALS['strConversionType']             = "نوع التحويل";
$GLOBALS['strLinkCampaignsByDefault']     = "ربط الحملات الاعلانية الجديدة افتراضياً";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "Back to trackers";



// Banners (General)
$GLOBALS['strBanner']                        = "بنر";
$GLOBALS['strBanners']                       = "بنرات";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "إضافة بنر جديد";
$GLOBALS['strAddBanner_Key']                 = "إضافة بنر جديد";
$GLOBALS['strBannerToCampaign']              = "to campaign";
$GLOBALS['strModifyBanner']                  = "تعديل بنر";
$GLOBALS['strActiveBanners']                 = "البنرات النشطة";
$GLOBALS['strTotalBanners']                  = "مجموع البنرات";
$GLOBALS['strShowBanner']                    = "عرض البنر";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "حذف كل البنرات";
$GLOBALS['strActivateAllBanners']            = "تنشيط كل البنرات";
$GLOBALS['strDeactivateAllBanners']          = "إيقاف كل البنرات";
$GLOBALS['strBannerOverview']                = "نظرة عامة على البنر";
$GLOBALS['strBannerProperties']              = "خواص البنر";
$GLOBALS['strBannerHistory']                 = "سجل البنر";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "There are currently no banners defined for this campaign.";
$GLOBALS['strNoBannersAddCampaign']          = "لا يوجد حتى الآن أية مواقع. لإضافة منطقة إعلانية، يجب <a href='affiliate-edit.php'>إضافة موقع جديد</a> قبل ذلك.";
$GLOBALS['strNoBannersAddAdvertiser']        = "لا يوجد حتى الآن أية مواقع. لإضافة منطقة إعلانية، يجب <a href='affiliate-edit.php'>إضافة موقع جديد</a> قبل ذلك.";
$GLOBALS['strConfirmDeleteBanner']           = "هل تريد حذف هذا البنر ؟";
$GLOBALS['strConfirmDeleteBanners']          = "هل تريد حذف هذا البنر ؟";
$GLOBALS['strConfirmDeleteAllBanners']       = "هل تريد حذف كل البنرات المرتبطة بهذه الحملة الاعلانية ؟";
$GLOBALS['strConfirmResetBannerStats']       = "Do you really want to delete all existing statistics for this banner?";
$GLOBALS['strShowParentCampaigns']           = "عرض الحملة الاعلانية الرئيسية";
$GLOBALS['strHideParentCampaigns']           = "إخفاء الحملات الاعلانية الرئيسية";
$GLOBALS['strHideInactiveBanners']           = "إخفاء البنرات غير النشطة";
$GLOBALS['strInactiveBannersHidden']         = "تم إخفاء البنرات غير النشطة";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "لا يمكن إضافة إعلانات أخرى للإعلانات النصية.";
$GLOBALS['strHiddenBanner']                  = "Hidden banner";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "تحذير، أمور مفقودة محتملة";
$GLOBALS['strWarningMissingClosing']         = "علامة الإغلاق";
$GLOBALS['strWarningMissingOpening']         = "علامة الإبتداء";
$GLOBALS['strSubmitAnyway']       		     = "إضافة دون تغيير";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "in"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "الخيارات العامة";
$GLOBALS['strCampaignPreferences']                   = "Campaign Preferences";
$GLOBALS['strDefaultBanners']                        = "البنر الافتراضي";
$GLOBALS['strDefaultBannerUrl']                      = "الصورة الافتراضية";
$GLOBALS['strDefaultBannerDestination']              = "الرابط الافتراضي";
$GLOBALS['strAllowedBannerTypes']                    = "أنواع البنرات المسموحة";
$GLOBALS['strTypeSqlAllow']                          = "Allow SQL Local Banners";
$GLOBALS['strTypeWebAllow']                          = "Allow Webserver Local Banners";
$GLOBALS['strTypeUrlAllow']                          = "إتاحة البنرات الخارجية";
$GLOBALS['strTypeHtmlAllow']                         = "إتاحة بنرات HTML";
$GLOBALS['strTypeTxtAllow']                          = "إتاحة الاعلانات النصية";
$GLOBALS['strTypeHtmlSettings']                      = "إعدادات بنرات HTML";
$GLOBALS['strTypeHtmlAuto']                          = "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']                           = "Allow PHP expressions to be executed from within a HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "الرجاء اختيار نوع البنر";
$GLOBALS['strMySQLBanner']             = "Upload a local banner to the database";
$GLOBALS['strWebBanner']               = "Upload a local banner to the webserver";
$GLOBALS['strURLBanner']               = "Link an external banner";
$GLOBALS['strHTMLBanner']              = "Create an HTML banner";
$GLOBALS['strTextBanner']              = "Create a Text banner";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "هل تريد حفظ <br />الصورة الحالية ، أو<br />رفع صورة أخرى ؟";
$GLOBALS['strUploadOrKeepAlt']        = "هل تريد حفظ <br />الصورة الاحتياطية الحالية ، أو<br />رفع صورة أخرى ؟";
$GLOBALS['strNewBannerFile']         = "الرجاء اختيار الصورة التي تريد<br />استخدامها لهذا البنر<br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "إختيار صورة إحتياطية <br /> تريد إستخدامها في حال لم يتمكن المستعرض <br /> من عرض الوسائط المتعددة<br /><br />";
$GLOBALS['strNewBannerURL']         = "رابط الصورة (مع http://)";
$GLOBALS['strURL']                     = "رابط الوجهة (مع http://)";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "كلمات مفتاحية";
$GLOBALS['strTextBelow']             = "النص تحت الصورة";
$GLOBALS['strWeight']                 = "الوزن";
$GLOBALS['strAlt']                     = "النص البديل";
$GLOBALS['strStatusText']            = "نص الحالة";
$GLOBALS['strBannerWeight']            = "وزن البنر";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "بنر HTML عام";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strGenericOutputAdServer'] = "عام";
$GLOBALS['strSwfTransparency']		   = "السماح بخليفة شفافة";
$GLOBALS['strBackToBanners']           = "Back to banners";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "Always prepend the following HTML code to this banner";
$GLOBALS['strBannerAppendHTML']        = "Always append the following HTML code to this banner";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "افحص الروابط المكتوبة داخل ملف الفلاش";
$GLOBALS['strConvertSWFLinks']        = "تحويل روابط الفلاش";
$GLOBALS['strHardcodedLinks']        = "روابط ضمن الكود البرمجي";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "ضغط ملف SWF لتحميل أسرع (يحتاج لمشغل فلاش 6 أو أعلى)";
$GLOBALS['strOverwriteSource']        = "الكتابة على المتغيرات الأصلية";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "خيارات التوصيل";
$GLOBALS['strACL']                        = "التوصيل";
$GLOBALS['strACLAdd']                     = "Add delivery limitation";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "بدون تحديد";
$GLOBALS['strApplyLimitationsTo']         = "طبق الحدود إلى";
$GLOBALS['strAllBannersInCampaign']       = "All banners in this campaign";
$GLOBALS['strRemoveAllLimitations']       = "إزالة كل الحدود";
$GLOBALS['strEqualTo']                    = "يساوي";
$GLOBALS['strDifferentFrom']              = "مختلف عن";
$GLOBALS['strLaterThan']                  = "أحدث من";
$GLOBALS['strLaterThanOrEqual']           = "أحدث من أو يساوي";
$GLOBALS['strEarlierThan']                = "أقدم من";
$GLOBALS['strEarlierThanOrEqual']         = "أقدم من أو يساوي";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "أكبر من";
$GLOBALS['strLessThan']                   = "أصغر من";
$GLOBALS['strAND']                        = "و";                          // logical operator
$GLOBALS['strOR']                         = "أو";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "إعرض البنر فقط عندما";
$GLOBALS['strWeekDay']                    = "يوم من الاسبوع";
$GLOBALS['strWeekDays']                   = "أيام الاسبوع";
$GLOBALS['strTime']                       = "الوقت";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "Domain";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "المصدر";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "Browser";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "المدينة";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "حدود التوصيل";

$GLOBALS['strDeliveryCapping']            = "Delivery capping per visitor";
$GLOBALS['strDeliveryCappingReset']       = "قم بتصفير العداد بعد :";
$GLOBALS['strDeliveryCappingTotal']       = "في المجموع";
$GLOBALS['strDeliveryCappingSession']     = "كل جلسة";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "تحديد عرض الإعلانات إلى:";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "تحديد عرض الحملة الإعلانية إلى:";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "تحديد عرض المنطقة الإعلانية إلى:";

// Website
$GLOBALS['strAffiliate']                = "الموقع";
$GLOBALS['strAffiliates']                 = "المواقع";
$GLOBALS['strAffiliatesAndZones']        = "المواقع و مناطق العرض";
$GLOBALS['strAddNewAffiliate']            = "إضافة موقع جديد";
$GLOBALS['strAddNewAffiliate_Key']        = "إضافة موقع جديد";
$GLOBALS['strAddAffiliate']                = "Create website";
$GLOBALS['strAffiliateProperties']        = "خواص الموقع";
$GLOBALS['strAffiliateOverview']        = "Website Overview";
$GLOBALS['strAffiliateHistory']            = "سجل الموقع";
$GLOBALS['strZonesWithoutAffiliate']    = "مناطق عرض بدون مواقع";
$GLOBALS['strMoveToNewAffiliate']        = "نقل الى موقع جديد";
$GLOBALS['strNoAffiliates']                = "لا يوجد حتى الآن أية مواقع. لإضافة منطقة إعلانية، يجب <a href='affiliate-edit.php'>إضافة موقع جديد</a> قبل ذلك.";
$GLOBALS['strConfirmDeleteAffiliate']    = "هل تريد حذف هذا الموقع؟";
$GLOBALS['strConfirmDeleteAffiliates']   = "هل تريد حذف هذا الموقع؟";
$GLOBALS['strMakePublisherPublic']        = "جعل المنطقة الإعلانية المملوكة لهذا الموقع معروضة للجميع";
$GLOBALS['strAffiliateInvocation']      = "كود التركيب";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "مجموع المواقع";
$GLOBALS['strInactiveAffiliatesHidden'] = "تم إخفاء المواقع غير النشطة";
$GLOBALS['strShowParentAffiliates']     = "عرض المواقع الرئيسية";
$GLOBALS['strHideParentAffiliates']     = "إخفاء المواقع الرئيسية";

// Website (properties)
$GLOBALS['strWebsite']                      = "الموقع";
$GLOBALS['strWebsiteURL']                      = "Website URL";
$GLOBALS['strMnemonic']                     = "مساعد للذاكرة";
$GLOBALS['strAllowAffiliateModifyInfo']     = "السماح لهذا العضو بتعديل خياراته";
$GLOBALS['strAllowAffiliateModifyZones']    = "السماح لهذا العضو بتعديل مناطقه الإعلانية الخاصة";
$GLOBALS['strAllowAffiliateLinkBanners']    = "السماح لهذا العضو بربط الإعلانات لمناطقة الخاصة";
$GLOBALS['strAllowAffiliateAddZone']        = "السماح لهذا العضو بإنشاء منطقة إعلانية جديدة";
$GLOBALS['strAllowAffiliateDeleteZone']     = "السماح لهذا العضو بحذف منطقة إعلانية موجودة";
$GLOBALS['strAllowAffiliateGenerateCode']   = "السماح لهذا العضو بإنشاء أكواد التركيب";
$GLOBALS['strAllowAffiliateZoneStats']      = "السماح لهذا العضو بمشاهدة إحصائيات المنطقة الإعلانية";
$GLOBALS['strAllowAffiliateApprPendConv']   = "السماح لهذا العضو بمشاهدة التحويلات الموافق عليها أو تحت الإنتظار";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "معلومات الدفع";
$GLOBALS['strAddress']                      = "العنوان";
$GLOBALS['strPostcode']                     = "الرمز البريدي";
$GLOBALS['strCity']                         = "المدينة";
$GLOBALS['strCountry']                      = "الدولة";
$GLOBALS['strPhone']                        = "الهاتف";
$GLOBALS['strFax']                          = "الفاكس";
$GLOBALS['strAccountContact']               = "Account contact";
$GLOBALS['strPayeeName']                    = "اسم المستفيد";
$GLOBALS['strTaxID']                        = "رقم الضريبة";
$GLOBALS['strModeOfPayment']                = "اسلوب الدفع";
$GLOBALS['strPaymentChequeByPost']          = "شيك عبر البريد";
$GLOBALS['strCurrency']                     = "العملة";
$GLOBALS['strCurrencyGBP']                  = "جنيه استرليني";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "معلومات أخرى";
$GLOBALS['strUniqueUsersMonth']             = "عدد الزوار شهرياً";
$GLOBALS['strUniqueViewsMonth']             = "مرات التصفح شهرياً";
$GLOBALS['strPageRank']                     = "Page rank";
$GLOBALS['strCategory']                     = "القسم";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "ملف التعليمات";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "المواقع و مناطق العرض";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "المنطقة";
$GLOBALS['strZones']                        = "مناطق العرض";
$GLOBALS['strAddNewZone']                   = "إضافة منطقة عرض جديدة";
$GLOBALS['strAddNewZone_Key']               = "إضافة منطقة عرض جديدة";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "تعديل منطقة عرض";
$GLOBALS['strZoneToWebsite']                = "كل المواقع";
$GLOBALS['strLinkedZones']                  = "مناطق العرض المرتبطة";
$GLOBALS['strAvailableZones']               = "Available Zones";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "نظرة عامة على منطقة عرض";
$GLOBALS['strZoneProperties']               = "خواص منطقة العرض";
$GLOBALS['strZoneHistory']                  = "سجل منطقة العرض";
$GLOBALS['strNoZones']                      = "There are currently no zones defined for this website.";
$GLOBALS['strNoZonesAddWebsite']            = "لا يوجد حتى الآن أية مواقع. لإضافة منطقة إعلانية، يجب <a href='affiliate-edit.php'>إضافة موقع جديد</a> قبل ذلك.";
$GLOBALS['strConfirmDeleteZone']            = "هل تريد حذف منطقة العرض ؟";
$GLOBALS['strConfirmDeleteZones']           = "هل تريد حذف منطقة العرض ؟";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "There are campaigns still linked to this zone, if you delete it these will not be able to run and you will not be paid for them.";
$GLOBALS['strZoneType']                     = "نوع منطقة العرض";
$GLOBALS['strBannerButtonRectangle']        = "بنر";
$GLOBALS['strInterstitial']                 = "ضمن المحتوى";
$GLOBALS['strPopup']                        = "نافذة منبثقة";
$GLOBALS['strTextAdZone']                   = "اعلان نصي";
$GLOBALS['strEmailAdZone']                  = "بريد الكتروني/قائمة مراسلات";
$GLOBALS['strZoneClick']                    = "Click tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "عرض البنرات المطابقة";
$GLOBALS['strHideMatchingBanners']          = "إخفاء البنرات المطابقة";
$GLOBALS['strBannerLinkedAds']              = "البنرات المرتبطة بمنطقة العرض هذه";
$GLOBALS['strCampaignLinkedAds']            = "الحملات الاعلانية المرتبطة بمنطقة العرض هذه";
$GLOBALS['strTotalZones']                   = "مجموع مناطق العرض";
$GLOBALS['strInactiveZonesHidden']          = "تم إخفاء مناطق العرض غير النشطة";
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
$GLOBALS['strAdvanced']                    = "متقدم";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "Chain settings";
$GLOBALS['strZoneNoDelivery']            = "If no banners from this zone <br />can be delivered, try to...";
$GLOBALS['strZoneStopDelivery']            = "إيقاف العرض و عدم عرض أي بنر";
$GLOBALS['strZoneOtherZone']            = "ستخدم منطقة العرض كـ بديل";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "Always append the following HTML code to banners displayed by this zone";
$GLOBALS['strAppendSettings']            = "Append and prepend settings";
$GLOBALS['strZoneForecasting']            = "Zone Forecasting settings";
$GLOBALS['strZonePrependHTML']            = "Always prepend the following HTML code to banners displayed by this zone";
$GLOBALS['strZoneAppendHTML']            = "Always append the HTML code to text ads displayed by this zone";
$GLOBALS['strZoneAppendNoBanner']        = "Prepend/Append even if no banner delivered";
$GLOBALS['strZoneAppendType']            = "Append type";
$GLOBALS['strZoneAppendHTMLCode']        = "كود HTML";
$GLOBALS['strZoneAppendZoneSelection']    = "نافذة منبثقة أو ضمن النص";
$GLOBALS['strZoneAppendSelectZone']        = "Always append the following popup or intersitial to banners displayed by this zone";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "All the banners linked to the selected zone are currently not active. <br />This is the zone chain that will be followed:";
$GLOBALS['strZoneProbNullPri']            = "There are no active banners linked to this zone.";
$GLOBALS['strZoneProbListChainLoop']    = "Following the zone chain would cause a circular loop. Delivery for this zone is halted.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "Please choose what to link to this zone";
$GLOBALS['strLinkedBanners']            = "ربط بنرات منفردة";
$GLOBALS['strCampaignDefaults']            = "ربط بنرات عبر الحملة الاعلانية";
$GLOBALS['strLinkedCategories']         = "ربط بنرات حسب التصنيف";
$GLOBALS['strWithXBanners']                = "%d banner(s)";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "كلمة مفتاحية";
$GLOBALS['strIncludedBanners']            = "البنرات المرتبطة";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "لا توجد مناطق عرض متوفرة للربط بهذا البنر";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} بنرات مطابقة";
$GLOBALS['strNoCampaignsToLink']        = "لا توجد حملات إعلانية متوفرة للربط بهذا البنر";
$GLOBALS['strNoTrackersToLink']            = "لا يوجد متتبع متوفر للربط بهذا البنر";
$GLOBALS['strNoZonesToLinkToCampaign']  = "لا توجد مناطق عرض متوفرة للربط بهذه الحملة الاعلانية";
$GLOBALS['strSelectBannerToLink']        = "الرجاء اختيار البنر الذي ترغب بربطه مع منطقة العرض هذه :";
$GLOBALS['strSelectCampaignToLink']        = "الرجاء اختيار الحملة الاعلانية الذي ترغب بربطها مع منطقة العرض هذه :";
$GLOBALS['strSelectAdvertiser']         = "إختيار المعلن";
$GLOBALS['strSelectPlacement']          = "إختيار الحملة الاعلانية";
$GLOBALS['strSelectAd']                 = "إختيار البنر";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "إختيار المنطقة";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Append Tracker Code";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "بانتظار الموافقة";
$GLOBALS['strStatusApproved']           = "تمت الموافقة";
$GLOBALS['strStatusDisapproved']        = "لم تتم الموافقة";
$GLOBALS['strStatusDuplicate']          = "نسخ";
$GLOBALS['strStatusOnHold']             = "On Hold";
$GLOBALS['strStatusIgnore']             = "تجاهل";
$GLOBALS['strConnectionType']           = "النوع";
$GLOBALS['strConnTypeSale']             = "حفظ";
$GLOBALS['strConnTypeLead']             = "Lead";
$GLOBALS['strConnTypeSignUp']           = "تسجيل جديد";
$GLOBALS['strShortcutEditStatuses'] = "تعديل الحالات";
$GLOBALS['strShortcutShowStatuses'] = "عرض الحالات";

// Statistics
$GLOBALS['strStats']                     = "Statistics";
$GLOBALS['strNoStats']                   = "لا تتوفر إحصائيات حالياً";
$GLOBALS['strNoTargetingStats']          = "لا تتوفر إحصائيات حالياً";
$GLOBALS['strNoStatsForPeriod']          = "There are currently no statistics available for the period %s to %s";
$GLOBALS['strNoTargetingStatsForPeriod'] = "There are currently no targeting statistics available for the period %s to %s";
$GLOBALS['strConfirmResetStats']         = "Do you really want to delete all existing statistics?";
$GLOBALS['strGlobalHistory']             = "السجل العام";
$GLOBALS['strDailyHistory']              = "السجل اليومي";
$GLOBALS['strDailyStats']                = "الإحصائيات اليومية";
$GLOBALS['strWeeklyHistory']             = "السجل الاسبوعي";
$GLOBALS['strMonthlyHistory']            = "السجل الشهري";
$GLOBALS['strCreditStats']               = "Credit statistics";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "المجموع لهذه الفترة";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "Website Distribution";
$GLOBALS['strCampaignDistribution']      = "Campaign Distribution";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Targeting Statistics";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "عرض حسب";
$GLOBALS['strBreakdownByDay']            = "يوم";
$GLOBALS['strBreakdownByWeek']           = "اسبوع";
$GLOBALS['strBreakdownByMonth']          = "شهر";
$GLOBALS['strBreakdownByDow']            = "اليوم من الأسبوع";
$GLOBALS['strBreakdownByHour']           = "الساعة";
$GLOBALS['strItemsPerPage']              = "عدد العناصر في الصفحة";
$GLOBALS['strDistributionHistory']       = "Distribution history";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "عرض مخطط بياني للاحصائيات";
$GLOBALS['strExportStatisticsToExcel']   = "تصدير الاحصائيات الى Excel";
$GLOBALS['strGDnotEnabled']              = "You must have GD enabled in PHP to display graphs. <br />Please see <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for more information, including how to install GD on your server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "تاريخ الانتهاء";
$GLOBALS['strNoExpiration']           = "لم يتم تحديد تاريخ الانتهاء";
$GLOBALS['strEstimated']              = "تاريخ الانتهاء المتوقع";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "سجل الحملة الإعلانية";

// Reports
$GLOBALS['strReports']                = "التقارير";
$GLOBALS['strAdvancedReports']        = "Advanced Reports";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Account Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "تاريخ البداية";
$GLOBALS['strEndDate']                = "تاريخ النهاية";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "Period";
$GLOBALS['strLimitations']            = "المحددات";
$GLOBALS['strWorksheets']             = "Worksheets";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "كل المعلنين";
$GLOBALS['strAnonAdvertisers']           = "Anonymous advertisers";
$GLOBALS['strAllPublishers']             = "كل المواقع";
$GLOBALS['strAnonPublishers']            = "Anonymous websites";
$GLOBALS['strAllAvailZones']             = "كل مناطق العرض المتوفرة";

// Userlog
$GLOBALS['strUserLog']                = "سجل المستخدم";
$GLOBALS['strUserLogDetails']        = "تفاصيل سجل المستخدم";
$GLOBALS['strDeleteLog']            = "حذف السجل";
$GLOBALS['strAction']                = "الفعل";
$GLOBALS['strNoActionsLogged']        = "No actions are logged";

// Code generation
$GLOBALS['strGenerateBannercode']        = "اختيار مباشر";
$GLOBALS['strChooseInvocationType']        = "الرجاء اختيار نوع البنر";
$GLOBALS['strGenerate']                    = "إنشاء";
$GLOBALS['strParameters']                = "Tag settings";
$GLOBALS['strFrameSize']                = "حجم الاطار";
$GLOBALS['strBannercode']                = "كود البنر";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "العودة لقائمة التقارير";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
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
$GLOBALS['strErrorViews']                       = "You must enter the number of impressions or select the unlimited box !";
$GLOBALS['strErrorNegViews']                    = "Negative impressions are not allowed";
$GLOBALS['strErrorClicks']                      = "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks']                   = "Negative clicks are not allowed";
$GLOBALS['strErrorConversions']                 = "You must enter the number of conversions or select the unlimited box !";
$GLOBALS['strErrorNegConversions']              = "Negative conversions are not allowed";
$GLOBALS['strNoMatchesFound']                   = "No matches were found";
$GLOBALS['strErrorOccurred']                    = "حدث خطأ ما";
$GLOBALS['strErrorUploadSecurity']              = "Detected a possible security problem, upload halted!";
$GLOBALS['strErrorUploadBasedir']               = "Could not access uploaded file, probably due to safemode or open_basedir restrictions";
$GLOBALS['strErrorUploadUnknown']               = "Could not access uploaded file, due to an unknown reason. Please check your PHP configuration";
$GLOBALS['strErrorStoreLocal']                  = "An error occcured while trying to save the banner in the local directory. This is probably the result of a misconfiguration of the local directory path settings";
$GLOBALS['strErrorStoreFTP']                    = "An error occcured while trying to upload the banner to the FTP server. This could be because the server is not available, or because of a misconfiguration of the FTP server settings";
$GLOBALS['strErrorDBPlain']                     = "An error occurred while accessing the database";
$GLOBALS['strErrorDBSerious']                   = "A serious problem with the database has been detected";
$GLOBALS['strErrorDBNoDataPlain']               = "Due to a problem with the database ".MAX_PRODUCT_NAME." couldn't retrieve or store data. ";
$GLOBALS['strErrorDBNoDataSerious']             = "Due to a serious problem with the database, ".MAX_PRODUCT_NAME." couldn't retrieve data";
$GLOBALS['strErrorDBCorrupt']                   = "The database table is probably corrupt and needs to be repaired. For more information about repairing corrupted tables please read the chapter <i>Troubleshooting</i> of the <i>Administrator guide</i>.";
$GLOBALS['strErrorDBContact']                   = "Please contact the administrator of this server and notify him or her of the problem.";
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
$GLOBALS['strDatesConflict']                    = "Dates of the campaign you are trying to link overlap with the dates of a campaign already linked ";
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
$GLOBALS['strSirMadam']                         = "Sir/Madam";
$GLOBALS['strMailSubject']                      = "Advertiser report";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Dear {contact},\\n";
$GLOBALS['strMailBannerStats']                  = "Below you will find the banner statistics for {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campaign activated";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campaign deactivated";
$GLOBALS['strMailBannerActivated']              = "Your campaign shown below has been activated because\\nthe campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated']            = "Your campaign shown below has been deactivated because";
$GLOBALS['strMailFooter']                       = "Regards,\\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "If you would like to continue advertising on our website, please feel free to contact us.\\nWe'd be glad to hear from you.";
$GLOBALS['strClientDeactivated']                = "This campaign is currently not active because";
$GLOBALS['strBeforeActivate']                   = "the activation date has not yet been reached";
$GLOBALS['strAfterExpire']                      = "the expiration date has been reached";
$GLOBALS['strNoMoreImpressions']                = "there are no Impressions remaining";
$GLOBALS['strNoMoreClicks']                     = "there are no Clicks remaining";
$GLOBALS['strNoMoreConversions']                = "there are no Sales remaining";
$GLOBALS['strWeightIsNull']                     = "its weight is set to zero";
$GLOBALS['strRevenueIsNull']                    = "its revenue is set to zero";
$GLOBALS['strTargetIsNull']                     = "its limit per day is set to zero - you need to either specify both an end date and a limit or set Limit per day value";
$GLOBALS['strWarnClientTxt']                    = "The Impressions, Clicks, or Conversions left for your banners are getting below {limit}. \\nYour banners will be disabled when there are no Impressions, Clicks, or Conversions left. ";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Clicks/Conversions are low";
$GLOBALS['strNoViewLoggedInInterval']           = "No Impressions were logged during the span of this report";
$GLOBALS['strNoClickLoggedInInterval']          = "No Clicks were logged during the span of this report";
$GLOBALS['strNoConversionLoggedInInterval']     = "No Conversions were logged during the span of this report";
$GLOBALS['strMailReportPeriod']                 = "This report includes statistics from {startdate} up to {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "This report includes all statistics up to {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "There are no statistics available for this campaign";
$GLOBALS['strImpendingCampaignExpiry']          = "Impending campaign expiration";
$GLOBALS['strYourCampaign']                     = "Your campaign";
$GLOBALS['strTheCampiaignBelongingTo']          = "The campaign belonging to";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} shown below is due to end on {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} shown below has less than {limit} impressions remaining.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "الأهمية";
$GLOBALS['strSourceEdit']                       = "Edit Sources";

// Preferences
$GLOBALS['strPreferences']                      = "الخيارات";
$GLOBALS['strUserPreferences']                  = "الخيارات العامة";
$GLOBALS['strChangePassword']                   = "تغيير كلمة المرور";
$GLOBALS['strChangeEmail']                      = "Change E-mail";
$GLOBALS['strCurrentPassword']                  = "كلمة المرور الحالية";
$GLOBALS['strChooseNewPassword']                = "كلمة المرور الجديدة";
$GLOBALS['strReenterNewPassword']               = "إعادة كتابة كلمة المرور الجديدة";
$GLOBALS['strNameLanguage']                     = "الإسم و اللغة";
$GLOBALS['strAccountPreferences']               = "خيارات الحساب";
$GLOBALS['strCampaignEmailReportsPreferences']  = "خيارات التقارير الخاصة بالحملة الإعلانية";
$GLOBALS['strTimezonePreferences']              = "Timezone Preferences";
$GLOBALS['strAdminEmailWarnings']               = "البريد الالكتروني للمدير العام";
$GLOBALS['strAgencyEmailWarnings']              = "التنبيهات البريدية للوكالة الإعلانية";
$GLOBALS['strAdveEmailWarnings']                = "التنبيهات البريدية للمعلنين";
$GLOBALS['strFullName']                         = "الإسم الكامل";
$GLOBALS['strEmailAddress']                     = "البريد الإلكتروني";
$GLOBALS['strUserDetails']                      = "معلومات العضو";
$GLOBALS['strLanguageTimezone']                 = "اللغة و المنطقة الزمنية";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "خيارات شكل لوحة التحكم";
$GLOBALS['strPluginPreferences']                = "الخيارات العامة";
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
$GLOBALS['strERPM']                                = "تكلفة الظهور";
$GLOBALS['strERPC']                                = "تكلفة الضغطات";
$GLOBALS['strERPS']                                = "تكلفة الظهور";
$GLOBALS['strEIPM']                                = "تكلفة الظهور";
$GLOBALS['strEIPC']                                = "تكلفة الضغطات";
$GLOBALS['strEIPS']                                = "تكلفة الظهور";
$GLOBALS['strECPM']                                = "تكلفة الظهور";
$GLOBALS['strECPC']                                = "تكلفة الضغطات";
$GLOBALS['strECPS']                                = "تكلفة الظهور";
$GLOBALS['strEPPM']                                = "تكلفة الظهور";
$GLOBALS['strEPPC']                                = "تكلفة الضغطات";
$GLOBALS['strEPPS']                                = "تكلفة الظهور";
$GLOBALS['strPendingConversions']               = "Pending conversions";
$GLOBALS['strImpressionSR']                     = "مرات الظهور";
$GLOBALS['strClickSR']                          = "Click SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "مرات الظهور";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "Rev.";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "Num. Items";
$GLOBALS['strRevenueCPC_short']                 = "Rev. CPC";
$GLOBALS['strERPM_short']                       = "تكلفة الظهور";
$GLOBALS['strERPC_short']                       = "تكلفة الضغطات";
$GLOBALS['strERPS_short']                       = "تكلفة الظهور";
$GLOBALS['strEIPM_short']                       = "تكلفة الظهور";
$GLOBALS['strEIPC_short']                       = "تكلفة الضغطات";
$GLOBALS['strEIPS_short']                       = "تكلفة الظهور";
$GLOBALS['strECPM_short']                       = "تكلفة الظهور";
$GLOBALS['strECPC_short']                       = "تكلفة الضغطات";
$GLOBALS['strECPS_short']                       = "تكلفة الظهور";
$GLOBALS['strEPPM_short']                       = "تكلفة الظهور";
$GLOBALS['strEPPC_short']                       = "تكلفة الضغطات";
$GLOBALS['strEPPS_short']                       = "تكلفة الظهور";
$GLOBALS['strID_short']                         = "الرقم";
$GLOBALS['strRequests_short']                   = "Req.";
$GLOBALS['strImpressions_short']                = "Impr.";
$GLOBALS['strClicks_short']                     = "الضغطات";
$GLOBALS['strCTR_short']                        = "معدل الضغطات";
$GLOBALS['strConversions_short']                = "Conv.";
$GLOBALS['strPendingConversions_short']         = "Pend conv.";
$GLOBALS['strImpressionSR_short']               = "Impr. SR";
$GLOBALS['strClickSR_short']                    = "Click SR";

// Global Settings
$GLOBALS['strConfiguration']                = "Configuration";
$GLOBALS['strGlobalSettings']               = "الإعدادات العامة";
$GLOBALS['strGeneralSettings']              = "الإعدادات العامة";
$GLOBALS['strMainSettings']                 = "Main Settings";
$GLOBALS['strAdminSettings']                = "خيارات المدير";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'إختيار قسم';

// Product Updates
$GLOBALS['strProductUpdates']         = "Product Updates";
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
$GLOBALS['strAgencyManagement']              = "Account Management";
$GLOBALS['strAgency']                      = "Account";
$GLOBALS['strAgencies']                   = "Accounts";
$GLOBALS['strAddAgency']                   = "Add new account";
$GLOBALS['strAddAgency_Key']               = "إضافة منطقة عرض جديدة";
$GLOBALS['strTotalAgencies']               = "Total accounts";
$GLOBALS['strAgencyProperties']              = "Account Properties";
$GLOBALS['strNoAgencies']                 = "لم يتم تعريف أي منطقة عرض";
$GLOBALS['strConfirmDeleteAgency']           = "هل تريد حذف منطقة العرض ؟";
$GLOBALS['strHideInactiveAgencies']          = "Hide inactive accounts";
$GLOBALS['strInactiveAgenciesHidden']     = "تم إخفاء مناطق العرض غير النشطة";
$GLOBALS['strAllowAgencyEditConversions'] = "Allow this user to edit conversions";
$GLOBALS['strAllowMoreReports']           = "Allow 'More Reports' button";
$GLOBALS['strSwitchAccount']              = "Switch to this account";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "Targeting Channels";
$GLOBALS['strChannelOverview']            = "Targeting Channel Overview";
$GLOBALS['strChannelManagement']          = "Targeting Channel Management";
$GLOBALS['strAddNewChannel']              = "Add new Targeting Channel";
$GLOBALS['strAddNewChannel_Key']          = "Add <u>n</u>ew Targeting Channel";
$GLOBALS['strChannelToWebsite']           = "كل المواقع";
$GLOBALS['strNoChannels']                 = "لم يتم تعريف أي بنرات";
$GLOBALS['strNoChannelsAddWebsite']       = "لا يوجد حتى الآن أية مواقع. لإضافة منطقة إعلانية، يجب <a href='affiliate-edit.php'>إضافة موقع جديد</a> قبل ذلك.";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "Targeting Channel properties";
$GLOBALS['strChannelLimitations']         = "خيارات التوصيل";
$GLOBALS['strConfirmDeleteChannel']       = "هل تريد حذف هذا البنر ";
$GLOBALS['strConfirmDeleteChannels']      = "هل تريد حذف هذا البنر ";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = 'in'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "Variable Name";
$GLOBALS['strVariableDescription']     = "الوصف";
$GLOBALS['strVariableDataType']         = "Data Type";
$GLOBALS['strVariablePurpose']       = "Purpose";
$GLOBALS['strGeneric']               = "عام";
$GLOBALS['strBasketValue']           = "Basket value";
$GLOBALS['strNumItems']              = "Number of items";
$GLOBALS['strVariableIsUnique']      = "Dedup conversions?";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "Number";
$GLOBALS['strString']                 = "String";
$GLOBALS['strTrackFollowingVars']     = "Track the following variable";
$GLOBALS['strAddVariable']             = "Add Variable";
$GLOBALS['strNoVarsToTrack']         = "No Variables to track.";
$GLOBALS['strVariableHidden']       = "Hide variable to websites?";
$GLOBALS['strVariableRejectEmpty']  = "Reject if empty?";
$GLOBALS['strTrackingSettings']     = "Tracking settings";
$GLOBALS['strTrackerType']          = "اسم المتتبع";
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
$GLOBALS['strYouHaveNoCampaigns']   = "المعلنين و الحملات الاعلانية";
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
$GLOBALS['strForgotPassword']         = "Forgot your password?";
$GLOBALS['strPasswordRecovery']       = "Password recovery";
$GLOBALS['strEmailRequired']          = "Email is a required field";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Email address not found";
$GLOBALS['strPwdRecPasswordSaved']    = "The new password was saved, proceed to <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "Wrong ID";
$GLOBALS['strPwdRecEnterEmail']       = "Enter your email address below";
$GLOBALS['strPwdRecEnterPassword']    = "Enter your new password below";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "Password reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s password recovery";
$GLOBALS['strProceed']                = "Proceed >";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "المنطقة الإعلانية ذي العلاقة";
$GLOBALS['strBinaryData']             = "معلومات Binary";
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
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>لا يوجد أي نشاط لأي حملة للعرض.</li>";

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
