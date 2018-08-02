<?php
/**
 * Persian Language file for config
 *
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @author   Shevin Shiasi
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

$lang['bootstrapTheme']               = 'پوسته Bootstrap';
$lang['bootstrapTheme_o_bootswatch']  = 'پوسته Bootswatch.com';
$lang['bootstrapTheme_o_custom']      = 'پوسته Bootstrap سفارشی سازی شده';
$lang['bootstrapTheme_o_default']     = 'پوسته Vanilla Bootstrap';
$lang['bootstrapTheme_o_optional']    = 'پوسته Optional Bootstrap';
$lang['bootswatchTheme']              = 'یک پوسته از Bootswatch.com انتخاب کنید';
$lang['browserTitle']                 = 'عنوان مرورگر DokuWiki ( پیش فرض <code> @TITLE@ [@WIKI@] </code> می‌باشد که <code>@TITLE@</code>  عنوان صفحه جاری را جایگزین می‌کند و <code>@WIKI@</code> نام DokuWiki را جایگزین می‌کند) - پیکربندی <a class="interwiki iw_doku" href="#config___title">title</a> را ببینید';
$lang['browserTitleCharSepNS']        = 'جداساز کاراکتر برای هر جای نام در عنوان مرورگر';
$lang['browserTitleOrderNS']          = 'تنظیم ترتیب جای نام‌ها';
$lang['browserTitleShowNS']           = 'نمایش نام قبلی صفحه جاری در عنوان مرورگر';
$lang['collapsibleSections']          = 'Collapse 2nd section level (useful in mobile/tablet devices)';
$lang['cookieLawBannerPage']          = 'Cookie Law banner page name';
$lang['cookieLawPolicyPage']          = 'Cookie Law policy page name';
$lang['customTheme']                  = 'درج URL پوسته سفارشی';
$lang['discussionPage']               = 'Discussion page name (default is <code>discussion:@ID@</code>, where <code>@ID@</code> placeholder replace the current page name), empty field disable the link';
$lang['domParserMaxPageSize']         = 'Set the max size of the page content for DOM Parser. The optimal and default value is <code>600000</code> (600KB)';
$lang['fixedTopNavbar']               = 'ثابت کردن نوارپیمایش در بالا';
$lang['fluidContainer']               = 'فعالسازی کانتینر شناور (کل عرض صفحه)';
$lang['fluidContainerBtn']            = 'نمایش یک دکمه در نوارپیمایش برای باز کردن محتویات';
$lang['googleAnalyticsAnonymizeIP']   = 'گمنام سازی آدرس IPهای بازدیدکنندگان';
$lang['googleAnalyticsNoTrackAdmin']  = 'غیرفعالسازی ردگیری برای کاربران مدیر';
$lang['googleAnalyticsNoTrackPages']  = 'غیر فعالسازی ردگیری برای صفحات خاص (درج یک regex)';
$lang['googleAnalyticsNoTrackUsers']  = 'غیر فعالسازی ردگیری برای همه کاربرهای وراد شده';
$lang['googleAnalyticsTrackActions']  = 'عمل‌های ردگیری دوکوویکی (edit, search و غیره)';
$lang['googleAnalyticsTrackID']       = 'Tracking ID';
$lang['gravatarURL']                  = 'Set Gravatar URL <br/> <strong>NOTE:</strong> <br/> - <code>http://www.gravatar.com/avatar</code> (http) <br/> - <code>https://secure.gravatar.com/avatar</code> (https) <br/> - <code>https://www.gravatar.com/avatar</code> (alternative https)';
$lang['hideInThemeSwitcher']          = 'پنهان کردن پوسته‌ها در تعویض‌گر پوسته';
$lang['hideLoginLink']                = 'Hide the login button in navbar. This option is useful in "read-only" DokuWiki installations (eg. blog, personal website)';
$lang['homePageURL']                  = 'Use custom URL for home-page links';
$lang['individualTools']              = 'جداکردن ابزارها در فهرست‌های جداگانه در نوارپیمایش';
$lang['inverseNavbar']                = 'معکوس کردن نوارپیمایش';
$lang['landingPages']                 = 'نام صفحه فرود "Landing" (درج یک regex)';
$lang['leftSidebarGrid']              = 'Left sidebar grid classes <code>col-{xs,sm,md,lg}-x</code> (see <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> documentation)';
$lang['libravatarURL']                = 'Set Libravatar (or compatible API) URL <br/> <strong>NOTE:</strong> <br/> - <code>https://seccdn.libravatar.org/avatar</code> (https) <br/> - <code>http://cdn.libravatar.org/avatar</code> (http)';
$lang['navbarLabels']                 = 'نمایش دادن/پنهان کردن برچسب‌های تکی';
$lang['office365URL']                 = 'Set Microsoft Office 365 (or EWS) URL <br/> <strong>NOTE:</strong> This service requires login, so this use case is most useful in a corporate installation, where all users have access to Office 365.';
$lang['pageIcons']                    = 'آیکون‌ها را برای نمایش انتخاب کنید';
$lang['pageInfo']                     = 'نمایش دادن/پنهان کردن عناصر اطلاعات صفحه';
$lang['pageInfoDateFormat']           = 'فرمت تاریخ';
$lang['pageInfoDateFormat_o_dformat'] = 'فرمت دکوویکی';
$lang['pageInfoDateFormat_o_human']   = 'قابل خواندن توسط انسان';
$lang['pageOnPanel']                  = 'فعالسازی پانل اطراف صفحه';
$lang['pageToolsAnimation']           = 'فعالسازی ابزارهای انیمیشن صفحه';
$lang['rightSidebar']                 = 'The Right Sidebar page name, empty field disables the right sidebar.<br/>The Right Sidebar is displayed only when the default DokuWiki <a class="interwiki iw_doku" href="#config___sidebar">sidebar</a> is enabled and is on the <code>left</code> position (see the <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosition</a> configuration). If do you want only the DokuWiki sidebar on right position, set the <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosition</a> configuration with <code>right</code> value';
$lang['rightSidebarGrid']             = 'Right sidebar grid classes <code>col-{xs,sm,md,lg}-x</code> (see <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> documentation)';
$lang['schemaOrgType']                = 'Schema.org type (<code>Article</code>, <code>NewsArticle</code>, <code>TechArticle</code>, <code>BlogPosting</code>, <code>Recipe</code>)';
$lang['semantic']                     = 'Enable semantic data';
$lang['showAddNewPage']               = 'Enable the Add New Page plugin in navbar  (require <em>Add New Page Plugin</em>)';
$lang['showAddNewPage_o_always']      = 'همیشه';
$lang['showAddNewPage_o_logged']      = 'هنگامی که ورود شده‌اید';
$lang['showAddNewPage_o_never']       = 'هرگز';
$lang['showAdminMenu']                = 'نمایش فهرست مدیریتی';
$lang['showBadges']                   = 'نمایش دکمه‌های نشان (دوکوویکی، اهدا، غیره)';
$lang['showCookieLawBanner']          = 'نمایش پرچم قوانین کوکی در پایین صفحه';
$lang['showDiscussion']               = 'نمایش پیوند بحث در فهرست ابزارها';
$lang['showEditBtn']                  = 'نمایش دکمه ویرایش در نوارپیمایش';
$lang['showEditBtn_o_always']         = 'همیشه';
$lang['showEditBtn_o_logged']         = 'هنگامی که وارد شده‌ است';
$lang['showEditBtn_o_never']          = 'هرگز';
$lang['showHomePageLink']             = 'نمایش پیوند به صفحه خانگی در نوارپیمایش';
$lang['showIndividualTool']           = 'فعالسازی/غیرفعالسازی ابزار تکی در نوارپیمایش';
$lang['showLandingPage']              = 'Enable the landing page (without a sidebar and the panel around the page)';
$lang['showLoginOnFooter']            = 'Display a "little" login link on footer. This option is useful when <code>hideLoginLink</code> is on';
$lang['showNavbar']                   = 'نمایش هوک نوارپیمایش';
$lang['showNavbar_o_always']          = 'همیشه';
$lang['showNavbar_o_logged']          = 'هنگامی که وارد شده‌ است';
$lang['showPageIcons']                = 'نمایش دادن آیکون‌های پراستفاده بر روی صفحه (مانند:print, share link, send mail )';
$lang['showPageId']                   = 'نمایش دادن نام صفحه (pageId) دوکوویکی در بالا';
$lang['showPageInfo']                 = 'ایش اطلاعات صفحه (مانند: تاریخ، نویسنده)';
$lang['showPageTools']                = 'فعالسازی ابزار صفحه DokuWiki-style';
$lang['showPageTools_o_always']       = 'همیشه';
$lang['showPageTools_o_logged']       = 'هنگامی که وارد شده‌ است';
$lang['showPageTools_o_never']        = 'هرگز';
$lang['showPurgePageCache']           = 'Display the "Purge Cache Page" button in Page Tools';
$lang['showPurgePageCache_o_always']  = 'Always';
$lang['showPurgePageCache_o_logged']  = 'When logged in';
$lang['showPurgePageCache_o_never']   = 'Never';
$lang['showSearchForm']               = 'نمایش فرم جستجو در نوارپیمایش';
$lang['showSearchForm_o_always']      = 'همیشه';
$lang['showSearchForm_o_logged']      = 'هنگامی که وارد شده‌ است';
$lang['showSearchForm_o_never']       = 'هرگز';
$lang['showSemanticPopup']            = 'نمایش دادن یک popup همراه با یک بخش استخراج شده از صفحه هنگامی که کاربر نشانگر موس را روی لینک-ویکی می‌برد (نیازمند <em>Semantic Plugin</em>)';
$lang['showThemeSwitcher']            = 'نمایش تعویض‌گر پوسته Bootswatch.com در نوارپیمایش';
$lang['showTools']                    = 'نمایش ابزار در نوار پیمایش';
$lang['showTools_o_always']           = 'همیشه';
$lang['showTools_o_logged']           = 'هنگامی که وارد شده است';
$lang['showTools_o_never']            = 'هرگز';
$lang['showTranslation']              = 'نمایش نوارابزار ترجمه (نیازمند <em>Translation Plugin</em>)';
$lang['showUserHomeLink']             = 'نمایش دادن پیوند صفحه-خانگی کاربر در نوارپیمایش';
$lang['showWikiInfo']                 = 'Display DokuWiki <a class="interwiki iw_doku" href="#config___title">name</a>, logo and <a class="interwiki iw_doku" href="#config___tagline">tagline</a> on footer';
$lang['sidebarOnNavbar']              = 'Display the sidebar contents inside the navbar (useful on mobile/tablet devices)';
$lang['sidebarPosition']              = 'محل نوارکناری دوکوویکی (<code>چپ</code> یا <code>راست</code>)';
$lang['sidebarShowPageTitle']         = 'نمایش عنوان صفحه‌ی  نوارکناری';
$lang['socialShareProviders']         = 'انتخاب پیوندهای اجتماعی برای نمایش دادن';
$lang['tableFullWidth']               = 'Enable 100% full table width (Bootstrap default)';
$lang['tableStyle']                   = 'Table style';
$lang['tagsOnTop']                    = 'Move all Tags on top of the page, beside the page-id (require <em>Tag Plugin</em>)';
$lang['themeByNamespace']             = 'استفاده از یک namespaced theme';
$lang['tocAffix']                     = 'Affix the TOC during page scrolling';
$lang['tocCollapseOnScroll']          = 'Collapse TOC during page scrolling';
$lang['tocCollapseSubSections']       = 'بستن تمام زیر-بخش‌ها در TOC برای ذخیر صفحه';
$lang['tocCollapsed']                 = 'بستن TOC در تمام صفحات';
$lang['tocPosition']                  = 'مکان TOC';
$lang['tocLayout']                    = 'TOC layout';
$lang['useACL']                       = 'Use ACL for sidebars (left and right) and for all DokuWiki hooks (eg. <code>:footer</code>, <code>:navbar</code>, etc.) <br/> <strong>NOTE:</strong> Available since "Elenor of Tsort" DokuWiki release';
$lang['useAnchorJS']                  = 'استفاده از AnchorJS';
$lang['useAvatar']                    = 'Load the avatar image from Gravatar, Libravatar, Microsoft Office365 or local DokuWiki <code>:user</code> namespace';
$lang['useAvatar_o_gravatar']         = 'Gravatar';
$lang['useAvatar_o_libravatar']       = 'Libravatar';
$lang['useAvatar_o_local']            = 'DokuWiki :user namespace';
$lang['useAvatar_o_off']              = 'Off';
$lang['useAvatar_o_office365']        = 'Office365 (or EWS)';
$lang['useGoogleAnalytics']           = 'فعال سازی Google Analytics';
$lang['useLegacyNavbar']              = 'Use legacy and deprecated <code>navbar.html</code> hook (consider in the future to use the <code>:navbar</code> hook)';
$lang['useLocalBootswatch']           = 'استفاده از پوشه محلی Bootswatch. این انتخاب برای نصب "اینترانتی" دکوویکی سودمند است.';

