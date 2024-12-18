<?php
include '../setting.php';
?>
<!DOCTYPE html>
<html lang="en-US" data-woostify-version="2.3.8">

<head>
    <meta charset="UTF-8">
    <title>স্ক্যামার অ্যালার্ট</title>
    <meta name='robots' content='max-image-preview:large' />

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />

    <link rel='stylesheet' id='woostify-fonts-css'
        href='https://fonts.googleapis.com/css?family=Poppins&#038;display=fallback&#038;ver=2.3.8' type='text/css'
        media='all' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



    <style>
        /* Larger white search box */
        #search {
            width: 400px;
            /* Adjust width as needed */
            height: 50px;
            /* Adjust height */
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
            padding: 10px;
            outline: none;
        }

        #search:focus {
            border-color: #0078ff;
            /* Highlight color on focus */
        }

        /* Go button style */
        #goButton {
            height: 50px;
            width: 80px;
            background-color: #4CAF50;
            /* Green color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }

        #goButton:hover {
            background-color: #45a049;
        }

        /* Container styling */
        .search-container {
            text-align: center;
            margin-top: 20px;
        }

        i.ti-menu,
        i.ti-close {
            font-family: "Themify";
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
        }

        
    </style>

    <link rel='stylesheet' id='woostify-style-css' href='assets/css/style.css' type='text/css' media='all' />



    <link rel='stylesheet' id='elementor-frontend-css' href='assets/css/frontend.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='assets/css/wiper.min.css' type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-post-150-css' href='assets/css/post-150.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css' href='assets/css/f3rontend.min.css' type='text/css' media='all' />

    <link rel='stylesheet' id='e-animation-fadeInUp-css' href='assets/css/fadeInUp.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='assets/css/widget-heading.min.css' type='text/css'
        media='all' />




    <link rel='stylesheet' id='elementor-post-95-css' href='assets/css/post-95.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-41-css' href='assets/css/post-41.css' type='text/css' media='all' />


    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Outfit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.7.1'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="assets/js/jquery.min.js" id="jquery-core-js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body
    class="home page-template page-template-elementor_header_footer page page-id-95 wp-embed-responsive site-normal-container has-header-layout-1 no-sidebar elementor-default elementor-template-full-width elementor-kit-150 elementor-page elementor-page-95">
    <div id="view">
        <header data-elementor-type="header" data-elementor-id="41"
            class="elementor elementor-41 elementor-location-header" data-elementor-post-type="elementor_library">
            <div class="elementor-element elementor-element-2966f81f e-flex e-con-boxed e-con e-parent"
                data-id="2966f81f" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;background_motion_fx_opacity_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_opacity_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:100,&quot;end&quot;:100}},&quot;sticky&quot;:&quot;top&quot;,&quot;background_motion_fx_opacity_direction&quot;:&quot;out-in&quot;,&quot;background_motion_fx_opacity_level&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-a760ccd e-flex e-con-boxed e-con e-child"
                        data-id="a760ccd" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="e-con-inner">
                            <div class="elementor-element elementor-element-5b72955d e-con-full e-flex e-con e-child"
                                data-id="5b72955d" data-element_type="container">
                                <div class="elementor-element elementor-element-4b1a88b5 elementor-widget elementor-widget-image"
                                    data-id="4b1a88b5" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <a href="<?php echo rtrim($baseUrl, '/'); ?>">
                                            <img src="https://agencyuddokta.online/wp-content/uploads/elementor/thumbs/a-removebg-preview-1-qy6b1rglonkuipc34t6ntup3xkxofz8eg24iwbah34.png"
                                                title="a-removebg-preview (1)" alt="a-removebg-preview (1)"
                                                loading="lazy" /> </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9e80bed elementor-fixed elementor-widget elementor-widget-theme-site-title elementor-widget-heading"
                                    data-id="9e80bed" data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;fixed&quot;}"
                                    data-widget_type="theme-site-title.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default"><a
                                                href="<?php echo rtrim($baseUrl, '/'); ?>">স্ক্যামার অ্যালার্ট</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4838e25d e-con-full e-flex e-con e-child"
                                data-id="4838e25d" data-element_type="container">
                                <div class="elementor-element elementor-element-27a11a7f elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                    data-id="27a11a7f" data-element_type="widget"
                                    data-settings="{&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-angle-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}"
                                    data-widget_type="nav-menu.default">
                                    <div class="elementor-widget-container">
                                        <nav aria-label="Menu"
                                            class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                            <ul id="menu-1-27a11a7f" class="elementor-nav-menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-95 current_page_item menu-item-123">
                                                    <a href="<?php echo $baseUrl ?>" aria-current="page"
                                                        class="elementor-item ">হোম</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124">
                                                    <a href="<?php echo $baseUrl ?>/about/"
                                                        class="elementor-item ">আমাদের সম্পর্কে</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125">
                                                    <a href="<?php echo $baseUrl ?>/contact/"
                                                        class="elementor-item elementor-item-active">যোগাযোগ করুন</a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <div class="elementor-menu-toggle" role="button" tabindex="0"
                                            aria-label="Menu Toggle" aria-expanded="false">
                                            <i aria-hidden="true" role="presentation" class="fa fa-bars"></i>
                                            <i aria-hidden="true" role="presentation" class="ti-close">
                                            </i>
                                            <span class="elementor-screen-only">Menu</span>
                                        </div>
                                        <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                            aria-hidden="true">
                                            <ul id="menu-2-27a11a7f" class="elementor-nav-menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-95 current_page_item menu-item-123">
                                                    <a href="<?php echo $baseUrl ?>" aria-current="page"
                                                        class="elementor-item elementor-item-active"
                                                        tabindex="-1">হোম</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124">
                                                    <a href="<?php echo $baseUrl ?>/about/" class="elementor-item"
                                                        tabindex="-1">আমাদের সম্পর্কে</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125">
                                                    <a href="<?php echo $baseUrl ?>/contact/"
                                                        class="elementor-item" tabindex="-1">যোগাযোগ করুন</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125">
                                                    <a href="javascript:void(0)" class="custom-popup-trigger"
                                                        onclick="openCustomPopup()">রিপোর্ট করতে ক্লিক করুন</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3f2a0332 elementor-hidden-mobile elementor-widget elementor-widget-button"
                                    data-id="3f2a0332" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a href="javascript:void(0)"
                                                class="elementor-item elementor-button elementor-button-link elementor-size-sm"
                                                onclick="openCustomPopup()" tabindex="-1">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">রিপোর্ট করতে ক্লিক করুন
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Custom Popup Modal -->
    <div id="customPopupModal" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-close-btn" onclick="closeCustomPopup()">&times;</span>
            <h2 class="custom-title">রিপোর্ট জমা করুন</h2>
            <form id="customReportForm">
                <!-- Name -->
                <div class="custom-form-group">
                    <label for="customName">আপনার নাম লিখুন</label>
                    <input type="text" id="customName" name="customName" class="custom-input"
                        placeholder="আপনার নাম লিখুন" required>
                    <small>আপনার নাম প্রদর্শিত হবে।</small>
                </div>

                <!-- Email -->
                <div class="custom-form-group">
                    <label for="customEmail">আপনার ই-মেইল লিখুন</label>
                    <input type="email" id="customEmail" name="customEmail" class="custom-input"
                        placeholder="আপনার ই-মেইল লিখুন" required>
                    <small>আমাদের ইমেইল দৃশ্যমান হবে না, শুধুমাত্র আপনার সাথে যোগাযোগ করার জন্য।</small>
                </div>

                <!-- Phone -->
                <div class="custom-form-group">
                    <label for="customPhone">আপনার ফোন নাম্বার লিখুন</label>
                    <input type="tel" id="customPhone" name="customPhone" class="custom-input"
                        placeholder="আপনার ফোন নাম্বার লিখুন" required>
                    <small>আপনার নম্বর দৃশ্যমান হবে না, শুধুমাত্র আপনার সাথে যোগাযোগ করার জন্য।</small>
                </div>

                <div class="custom-form-group">
                    <label for="customPageName">প্রতারিত পেজের নাম লিখুন</label>
                    <input type="text" id="customPageName" name="customPageName" class="custom-input"
                        placeholder="প্রতারিত পেজের নাম লিখুন" required>

                </div>
                <div class="custom-form-group">
                    <label for="PagePhoneNumber">প্রতারিত পেজের ফোন নাম্বার লিখুন</label>
                    <input type="text" id="PagePhoneNumber" name="PagePhoneNumber" class="custom-input"
                        placeholder="প্রতারিত পেজের ফোন নাম্বার লিখুন">

                </div>
                <div class="custom-form-group">
                    <label for="Pagelink">পেজের লিঙ্ক লিখুন</label>
                    <input type="text" id="Pagelink" name="Pagelink" class="custom-input"
                        placeholder="পেজের লিঙ্ক লিখুন" required>

                </div>
                <div class="custom-form-group">
                    <label for="details">কিভাবে প্রতারিত হয়েছেন?</label>
                    <input type="text" id="details" name="details" class="custom-input"
                        placeholder="কিভাবে প্রতারিত হয়েছেন?" required>

                </div>

                <!-- Add Content -->
                <div id="customFileUploadsContainer" class="custom-file-container"></div>
                <button type="button" class="custom-add-btn" onclick="addCustomFileInput()">+ ADD CONTENT</button>

                <!-- Submit -->
                <button type="submit" class="custom-submit-btn">SUBMIT</button>
            </form>
            <div id="loadingSpinner" class="loading-spinner" style="display: none;">
                <div class="spinner"></div>
                <p>Uploading, please wait...</p>
            </div>

        </div>
    </div>
    <style>
        /* Loading Spinner */
        .loading-spinner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            /* Overlay */
            color: #fff;
            z-index: 999;
            text-align: center;
        }

        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Modal Background */
        .custom-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            overflow: auto;
            align-items: center;
            justify-content: center;
        }

        /* Modal Content */
        .custom-modal-content {
            background: #fff;
            width: 90%;
            max-width: 500px;
            margin: auto;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            animation: slideIn 0.3s ease-out;
            font-family: Arial, sans-serif;
        }

        /* Animation for modal */
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Close Button */
        .custom-close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #888;
            cursor: pointer;
        }

        .custom-close-btn:hover {
            color: #333;
        }

        /* Title */
        .custom-title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            color: #333 !important;
            margin-bottom: 15px;
        }

        /* Form Group */
        .custom-form-group {
            margin-bottom: 15px;
        }

        .custom-form-group label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .custom-form-group .custom-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .custom-form-group small {
            font-size: 12px;
            color: #666;
        }

        /* File Uploads Container */
        .custom-file-container {
            margin-top: 10px;
        }

        .custom-add-btn {
            display: inline-block;
            padding: 8px 12px;
            background: #6a11cb;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
        }

        .custom-add-btn:hover {
            background: #2575fc;
        }

        /* Submit Button */
        .custom-submit-btn {
            display: block;
            width: 100%;
            background: #6a11cb;
            color: #fff;
            padding: 10px;
            border: none;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }

        .custom-submit-btn:hover {
            background: #2575fc;
        }
       
    </style>
                    <div class="elementor-element elementor-element-6739cb52 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="6739cb52" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="content" class="site-content" tabindex="-1">
    <div class="woostify-container">
        <div data-elementor-type="wp-page" data-elementor-id="95" class="elementor elementor-95" data-elementor-post-type="page">
            <div class="elementor-element elementor-element-23799674 e-flex e-con-boxed e-con e-parent" data-id="23799674" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/www.youtube.com\/watch?v=HXJEakm65FI&quot;,&quot;background_video_start&quot;:5,&quot;background_video_end&quot;:14}">
                <div class="e-con-inner">

                    <div class="elementor-element elementor-element-2bcf5620 e-con-full e-flex e-con e-child" data-id="2bcf5620" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div>
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default">আসসালামুয়ালাইকুম</h6>
                            </div>
                            <h5>আমাদের মেইল অ্যাড্রেসঃ 
                            <a href="mailto:admin@secretshopbd.store" style="text-decoration: none; color: #007bff; z-index: 1000; position: relative;">
    admin@secretshopbd.store
</a>

                            </h5>
                        </div>

                        <div class="elementor-element elementor-element-67008149 elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="67008149" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <!-- Content here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <footer style="text-align: center; background-color: #333; color: #fff; padding: 10px 0; font-size: 16px;">
            <p style="margin: 0;">
                Developed by
                <a href="https://www.facebook.com/ahshanhabib00" target="_blank"
                    style="color: #4da3ff; text-decoration: none; font-weight: bold;">
                    Ahshan Habib
                </a>
            </p>
        </footer>


    </div>







    <script type="text/javascript" src="assets/js/jquery.sticky.min.js?ver=3.23.3" id="e-sticky-js"></script>
    <script type="text/javascript" src="assets/js/webpack-pro.runtime.min.js?ver=3.23.3"
        id="elementor-pro-webpack-runtime-js"></script>
    <script type="text/javascript" src="assets/js/webpack.runtime.min.js?ver=3.25.10"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="assets/js/frontend-modules.min.js?ver=3.25.10"
        id="elementor-frontend-modules-js"></script>


    <script type="text/javascript" id="elementor-pro-frontend-js-before">
        /* <![CDATA[ */
        var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/agencyuddokta.online\/wp-admin\/admin-ajax.php", "nonce": "081cc76d10", "urls": { "assets": "https:\/\/agencyuddokta.online\/wp-content\/plugins\/elementor-pro\/assets\/", "rest": "https:\/\/agencyuddokta.online\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" }, "x-twitter": { "title": "X" }, "threads": { "title": "Threads" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": "https:\/\/agencyuddokta.online\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" } };
        /* ]]> */
    </script>
    <script type="text/javascript" src="assets/js/f3rontend.min.js" id="elementor-pro-frontend-js"></script>

    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } }, "hasCustomBreakpoints": false }, "version": "3.25.10", "is_static": false, "experimentalFeatures": { "e_font_icon_svg": true, "additional_custom_breakpoints": true, "container": true, "e_swiper_latest": true, "e_nested_atomic_repeaters": true, "e_optimized_control_loading": true, "e_onboarding": true, "e_css_smooth_scroll": true, "theme_builder_v2": true, "home_screen": true, "nested-elements": true, "editor_v2": true, "e_element_cache": true, "link-in-bio": true, "floating-buttons": true, "launchpad-checklist": true, "display-conditions": true, "form-submissions": true, "taxonomy-filter": true, "search": true }, "urls": { "assets": "https:\/\/agencyuddokta.online\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/agencyuddokta.online\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/agencyuddokta.online\/wp-content\/uploads" }, "nonces": { "floatingButtonsClickTracking": "a771fb99f1" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "body_background_background": "classic", "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 95, "title": "Agency%20Uddokta", "excerpt": "", "featuredImage": "https:\/\/agencyuddokta.online\/wp-content\/uploads\/2024\/12\/400x380_3_Homepage.jpg" } };
        /* ]]> */
    </script>
    <script type="text/javascript" src="assets/js/frontend.min.js" id="elementor-frontend-js"></script>

    <script type="text/javascript"
        src="https://agencyuddokta.online/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"
        id="smartmenus-js"></script>
    <script type="text/javascript" id="elementor-pro-frontend-js-before">
        /* <![CDATA[ */
        var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/agencyuddokta.online\/wp-admin\/admin-ajax.php", "nonce": "081cc76d10", "urls": { "assets": "https:\/\/agencyuddokta.online\/wp-content\/plugins\/elementor-pro\/assets\/", "rest": "https:\/\/agencyuddokta.online\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" }, "x-twitter": { "title": "X" }, "threads": { "title": "Threads" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": "https:\/\/agencyuddokta.online\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" } };
        /* ]]> */
    </script>
    <script>
        // JavaScript to show the Go button when user starts typing
        const searchInput = document.getElementById("search");
        const goButton = document.getElementById("goButton");

        searchInput.addEventListener("input", function () {
            if (searchInput.value.trim() !== "") {
                goButton.style.display = "inline-block";
            } else {
                goButton.style.display = "none";
            }
        });
    </script>
    <script type="text/javascript"
        src="https://agencyuddokta.online/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.23.3"
        id="pro-elements-handlers-js"></script>
    <script>
        // Open the modal
        function openCustomPopup() {
            document.getElementById("customPopupModal").style.display = "block";
        }

        // Close the modal
        function closeCustomPopup() {
            document.getElementById("customPopupModal").style.display = "none";
        }

        // Add new file input dynamically
        // Add new file input dynamically
        function addCustomFileInput() {
            const container = document.getElementById("customFileUploadsContainer");

            // Create file input
            const fileInput = document.createElement("input");
            fileInput.type = "file";
            fileInput.name = "content[]";
            fileInput.classList.add("custom-file-input");

            // Listen for file size validation
            fileInput.addEventListener("change", function () {
                if (fileInput.files[0].size > 10 * 1024 * 1024) { // Check if file size > 10 MB
                    alert("File size must not exceed 10 MB.");
                    fileInput.value = ""; // Reset the file input
                }
            });

            // Add "Remove" button
            const removeBtn = document.createElement("button");
            removeBtn.type = "button";
            removeBtn.textContent = "Remove";
            removeBtn.classList.add("remove-btn");
            removeBtn.onclick = function () {
                container.removeChild(fileInputWrapper);
            };

            // Wrap file input and remove button
            const fileInputWrapper = document.createElement("div");
            fileInputWrapper.classList.add("file-input-wrapper");
            fileInputWrapper.appendChild(fileInput);
            fileInputWrapper.appendChild(removeBtn);

            // Add to the container
            container.appendChild(fileInputWrapper);
        }

        // Handle form submission
        document.getElementById("customReportForm").addEventListener("submit", async function (event) {
            event.preventDefault();
            // Show loading spinner
            document.getElementById("loadingSpinner").style.display = "flex";
            const formData = new FormData(this);

            // Fetch form field values with sanitization
            const name = document.getElementById("customName").value.trim().replace(/\s+/g, "_").toLowerCase();
            const email = document.getElementById("customEmail").value.trim().replace(/[@.]/g, "_").toLowerCase();
            const phone = document.getElementById("customPhone").value.trim().replace(/\D/g, "");
            const page_phone = document.getElementById("PagePhoneNumber").value.trim().replace(/\D/g, "");
            const page_name = document.getElementById("customPageName").value.trim().replace(/\s+/g, "_").toLowerCase();
            const page_link = document.getElementById("Pagelink")?.value.trim() || ""; // Don't replace spaces in page_link
            const details = document.getElementById("details").value.trim().replace(/\s+/g, "_").toLowerCase();

            // Check if the required fields are filled
            if (!name || !email || !phone || !page_name || !page_link || !details) {
                alert("Please fill in all required fields.");
                return;
            }

            // Handle file renaming and appending
            const fileInputs = document.querySelectorAll('input[name="content[]"]');
            let hasFiles = false;

            for (const fileInput of fileInputs) {
                if (fileInput.files.length > 0) { // Ensure file is selected
                    hasFiles = true;
                    const file = fileInput.files[0];
                    const randomNum = Math.floor(Math.random() * 100000);
                    const extension = file.name.split(".").pop(); // Get file extension
                    const newFileName = `${name}_${email}_${phone}_${randomNum}.${extension}`.replace(/_+/g, "_"); // Remove extra underscores
                    formData.append("renamed_files[]", file, newFileName); // Append renamed file
                }
            }

            // Check if at least one file was added
            if (!hasFiles) {

                alert("Please add at least one file before submitting.");
                document.getElementById("loadingSpinner").style.display = "none";
                return;
            }

            // Send data to server
            try {
                const response = await fetch("../search/insert.php", {
                    method: "POST",
                    body: formData,
                });

                const result = await response.json();
                console.log(result);
                if (result.success) {
                    alert("Report submitted successfully!");
                    closeCustomPopup();
                    document.getElementById("customReportForm").reset(); // Reset form
                    document.getElementById("customFileUploadsContainer").innerHTML = ""; // Clear dynamic file inputs
                } else {
                    alert("An error occurred while submitting your report. Please try again.");
                }
            } catch (error) {
                console.error("Error:", error);
                alert("Something went wrong. Please check your connection or try again later.");
            }
            finally {
                // Hide the loading spinner once the upload is finished
                document.getElementById("loadingSpinner").style.display = "none";
            }
        });

    </script>
</body>

</html>