<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");


// haader start
// include('header.php');
// // Page session
// if (!isset($_SESSION['user_id'])) {
//   header("location:login-error.php");
// }


?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <title>DreamWell</title>

    <style>
    .houzez-library-modal-btn {
      margin-left: 5px;
      background: #35AAE1;
      vertical-align: top;
      font-size: 0 !important;
    }

    .houzez-library-modal-btn:before {
      content: '';
      width: 16px;
      height: 16px;
      background-image: url('wp-content/themes/houzez/img/studio-icon.png');
      background-position: center;
      background-size: contain;
      background-repeat: no-repeat;
    }

    #houzez-library-modal .houzez-elementor-template-library-template-name {
      text-align: right;
      flex: 1 0 0%;
    }
  </style>

<meta name='robots' content='max-image-preview:large' />
<style id='classic-theme-styles-inline-css' type='text/css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
      color: #fff;
      background-color: #32373c;
      border-radius: 9999px;
      box-shadow: none;
      text-decoration: none;
      padding: calc(.667em + 2px) calc(1.333em + 2px);
      font-size: 1.125em
    }

    .wp-block-file__button {
      background: #32373c;
      color: #fff;
      text-decoration: none
    }
  </style>
  <style id='global-styles-inline-css' type='text/css'>
    :root {
      --wp--preset--aspect-ratio--square: 1;
      --wp--preset--aspect-ratio--4-3: 4/3;
      --wp--preset--aspect-ratio--3-4: 3/4;
      --wp--preset--aspect-ratio--3-2: 3/2;
      --wp--preset--aspect-ratio--2-3: 2/3;
      --wp--preset--aspect-ratio--16-9: 16/9;
      --wp--preset--aspect-ratio--9-16: 9/16;
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    :where(.is-layout-grid) {
      gap: 0.5em;
    }

    body .is-layout-flex {
      display: flex;
    }

    .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    .is-layout-flex> :is(*, div) {
      margin: 0;
    }

    body .is-layout-grid {
      display: grid;
    }

    .is-layout-grid> :is(*, div) {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    :root :where(.wp-block-pullquote) {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>

    <link rel="stylesheet" href="css/frontend.min.css">

    <!-- fonts  -->
    <link rel="preload" as="style"
    href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&amp;display=swap" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&amp;display=swap"
    media="print" onload="this.media='all'"><noscript>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&amp;display=swap" />
  </noscript>
  <link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNoto+Serif+JP%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto'
    type='text/css' media='all' />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  
  <!-- slider -->
  <link rel="stylesheet" href="css/slider/swiper.min.css">
  
  <!-- favicon icon -->
  <link rel="shortcut icon" href="assets/favicon-icn.png" type="image/x-icon">
  
  <!-- font icon file -->
  <link rel="stylesheet" href="css/line-awesome.min.css">
  
  
  <!-- bootsrap  -->
  <link rel="stylesheet" href="css/frontend.min.css">
  
  <!-- custom css file -->
  <link rel="stylesheet" href="css/style.css">

  
  <!-- script  -->
   <script src="assets/js/jquery-1.11.0.min.js"></script>
   <script src="assets/js/script.js"></script>


    
</head>

<body
    class="home page-template page-template-template page-template-template-homepage page-template-templatetemplate-homepage-php page page-id-10 houzez-theme houzez-footer-position transparent-yes houzez-header-elementor elementor-default elementor-kit-17100 elementor-page elementor-page-10">
    
    <!-- preloader start -->
    <!-- <div class="pre-loader">
        <div class="loader">
            <img src="assets/loader.gif" alt="">
        </div>
    </div> -->
    <!-- preloader end -->
    
    <div class="nav-mobile nav-mobile-js">
        <div class="main-nav navbar slideout-menu slideout-menu-left" id="nav-mobile">
            <ul id="mobile-main-nav" class="navbar-nav mobile-navbar-nav">
                <li
                    class="nav-item menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children dropdown">
                    <a class="nav-link " href="index.php">Home</a> 
                </li>
                <li
                    class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li
                    class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                </li>
                <li
                    class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown">
                    <a class="nav-link " href="peoperty.php">Properties</a> 
                </li>
            </ul>
        </div>
        <nav class="navi-login-register slideout-menu slideout-menu-right" id="navi-user">
            <a class="btn btn-create-listing" href="User/View_approved_property.php">Create a Listing</a>
            <ul class="logged-in-nav">
                <li class="login-link">
                    <a href="#" data-toggle="modal" data-target="#login-register-form"><i
                            class="houzez-icon icon-lock-5 mr-1"></i> Login</a>
                </li>
                <li class="favorite-link">
                    <a class="favorite-btn" href="#"><i class="las la-heart"></i> Favorites <span
                            class="btn-bubble frvt-count">0</span></a>
                </li>
            </ul>
        </nav>
    </div>
    <main id="main-wrap" class="main-wrap main-wrap-js">

<header class="header-main-wrap header-transparent-wrap">
            <div id="header-section" class="header-desktop header-v4" data-sticky="0">
                <div class="container">
                    <div class="header-inner-wrap">
                        <div class="navbar d-flex align-items-center">
                            <div class="logo logo-splash">
                                <a href="index.php" class="logo-img">
                                    <img src="assets/dreamwell-light.png" alt="">
                                </a>
                            </div>
                            <nav class="main-nav on-hover-menu navbar-expand-lg flex-grow-1">
                                <ul id="main-nav" class="navbar-nav justify-content-end">
                                    <li id="menu-item-60"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children nav-item menu-item-60 menu-item-design-default dropdown">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li id="menu-item-71"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-71 menu-item-design-default dropdown">
                                        <a class="nav-link" href="about.php">About Us</a>
                                    </li>
                                    <li id="menu-item-71"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-71 menu-item-design-default dropdown">
                                        <a class="nav-link" href="contact_us.php">Contact Us</a>
                                    </li>
                                    <li id="menu-item-2795"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-2795 menu-item-design-default dropdown">
                                        <a class="nav-link" href="property.php">Property</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="login-register on-hover-menu">
                                <ul class="login-register-nav dropdown d-flex align-items-center">
                                    <li>
                                        
                                        <a href="User/View_approved_property.php"
                                            class="btn btn-create-listing hidden-xs hidden-sm">Create a Listing</a>
                                     
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-mobile" class="header-mobile d-flex align-items-center" data-sticky>
                <div class="header-mobile-left">
                    <button class="btn toggle-button-left">
                        <i class="houzez-icon icon-navigation-menu"></i>
                    </button>
                </div>
                <div class="header-mobile-center flex-grow-1">
                    <div class="logo logo-mobile">
                        <a href="https://demo01.houzez.co/">
                            <img height="24" width="127" alt="Mobile logo"
                                data-cfsrc="https://demo01.houzez.co/wp-content/themes/houzez/img/logo-houzez-white.png"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="https://demo01.houzez.co/wp-content/themes/houzez/img/logo-houzez-white.png"
                                    height="24" width="127" alt="Mobile logo"></noscript>
                        </a>
                    </div>
                </div>
                <div class="header-mobile-right">
                    <button class="btn toggle-button-right">
                        <i class="houzez-icon icon-single-neutral-circle ml-1"></i>
                    </button>
                </div>
            </div>
        </header>




