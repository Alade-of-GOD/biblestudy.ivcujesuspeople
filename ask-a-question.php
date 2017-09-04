<?php
  require_once ('http://www.ivcujesuspeople.org/data.php');
  if (isset($_GET['newslettersub']) && $_GET['pb'] == 'wp2303kjdj43$003dsdw23!^893nwp'){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (isset($_POST['subscriptionemail']) && !empty($_POST['subscriptionemail'])){
        $s = $_POST['subscriptionemail'];
        $insert = "INSERT INTO `newsletter_user_mail_subs` (usermail, status)
        VALUES ('".mysqli_real_escape_string($dbcon, $s)."', '".mysqli_real_escape_string($dbcon, "on")."')";
        if(!$res = $dbcon->query($insert)){
          header('Location: ../bible-study-outlines.php?pb=wp2303kjdj43$003dsdw23!^893nwp&subres=failed#subresponse');
        }
        else {
          $dbcon->close();
          header('Location: ../bible-study-outlines.php?pb=wp2303kjdj43$003dsdw23!^893nwp&subres=success#subresponse');
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="keywords" content="IVCU, IVCU-NIFES, Jesus People, UI IVCU, Ibadan Varsity Christian Union, Bible Study Discussion">
  <meta name="author" content="IVCU">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato%3A400%7CPoppins%3A400%7CNoto+Serif%3A400italic%7CPoppins%3A700%7CRaleway%3A500%2C400%7CAbril+Fatface%3Aregular" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/contact-form-7/includes/css/styles.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/revolution-slider/public/assets/css/settings.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/woocommerce/assets/css/woocommerce-layout.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/woocommerce/assets/css/woocommerce.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/dgt-framework/assets/css/frontend.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/dgt-framework/assets/vendor/fancybox/jquery.fancybox-1.3.4.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/dgt-framework/assets/vendor/colobox/assets/colorbox.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/ionicons/css/ionicons.min.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/bootstrap/css/bootstrap.min.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/owl-carousel/owl.theme.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/flickity/flickity.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/venobox/venobox.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-includes/js/mediaelement/mediaelementplayer.min.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/css/dgt-style.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/css/dgt-responsive.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/style.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/newsletter/subscription/style.css" data-minify="1" />
  <link rel="stylesheet" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/visual-composer/assets/css/js_composer.min.css" data-minify="1" />
  <title>Discussion &#8211; Ibadan Varsity Christian Union &#8211; NIFES</title>
  <link rel="shortcut icon" href="http://www.ivcujesuspeople.org/ivcujesuspeople-content/logo/favicon.png" type="image/x-icon" />
  <link rel='stylesheet' id='woocommerce-smallscreen-css' href='http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/woocommerce/assets/css/woocommerce-smallscreen32bb.css?ver=2.6.14' type='text/css' media='only screen and (max-width: 768px)' />
  <link rel='stylesheet' id='owl-carousel-css' href='http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/owl-carousel/owl.carousel.min.js' type='text/css' media='all' />
  <style type="text/css">
    #dgt-back-top,
    .dgt-vc-about .dgt-social ul li a:hover,
    .footer-widget .dgt-social ul li a:hover,
    button:hover,
    input[type="button"]:hover,
    input[type="reset"]:hover,
    input[type="submit"]:hover,
    .dgt-button,
    .hades.tparrows:hover:before,
    .post-pagination a:hover,
    .dgt-fiter-wrap ul li::after,
    .dgt-list-layout .dgt-team-item-inner,
    .dgt-event-countdown,
    #dgt-navigation .sub-menu li a::before,
    #dgt-navigation .children li a::before,
    .dgt-donate-form-wrapper .dgt-amount-button:hover,
    .dgt-donate-form-wrapper .dgt-amount-button.active,
    .dgt-donate-form-wrapper .radio:not(:checked) + label::after,
    .dgt-donate-form-wrapper .radio:checked + label::after,
    .vc_tta.vc_tta-color-grey.vc_tta-style-modern .vc_tta-panel.vc_active .vc_tta-panel-heading,
    .vc_tta.vc_tta-color-grey.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-heading:focus,
    .vc_tta.vc_tta-color-grey.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-heading:hover,
    .vc_tta.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a,
    .dgt-event-calendar .fc-state-default.fc-state-active,
    .dgt-event-calendar .fc-state-default:hover,
    .dgt-pagination .current,
    .dgt-pagination .page-numbers:hover,
    .dgt-icon-box .dgt-readmore,
    .dgt-icon-box-horizontal .dgt-icon,
    .dgt-icon-box-title .dgt-icon,
    .dgt-event-inner .event-date,
    .owl-theme .owl-controls .owl-page.active span,
    .owl-theme .owl-controls.clickable .owl-page:hover span,
    #cboxPrevious,
    #cboxNext,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab.vc_active > a:before,
    .dgt-timeline-tabs.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active > a:before,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a:focus:before,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a:hover:before,
    .dgt-filter-wrap li.active:after,
    .dgt-filter-wrap li:hover:after,
    .dgt-button.dgt-button-accent-light:hover,
    .event-time span,
    .blog-time span,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce #respond input#submit:hover,
    .woocommerce a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce input.button:hover,
    .woocommerce ul.products li.product .button,
    .woocommerce ul.products li.product .added_to_cart,
    .woocommerce span.onsale,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a:after {
      background-color: #1f95cc
    }
    .widget_newsletterwidget .tnp-widget input[type=submit]:hover {
      background-color: #1f95cc !important;
      border-color: #1f95cc !important
    }
    .dgt-about-name,
    .dgt-blog-info .dgt-blog-category a,
    #comments .comment-text .author a:hover,
    .comment-list .reply a,
    .dgt-fiter-wrap ul li:hover,
    .team-donate span,
    .dgt-testimonial-heading .dgt-heading::after,
    .dgt-donate-form-wrapper .dgt-sub-title,
    #fancybox-close:hover:before,
    .dgt-counter-box:hover .dgt-icon,
    .dgt-navigation .dgt-megamenu-content li .menu-item > a:hover:before,
    .dgt-navigation .dgt-megamenu-content li .menu-item > a:hover i,
    .dgt-icon-box-title .dgt-icon,
    .dgt-counter-dark h4,
    .dgt-custom-heading .dgt-heading span,
    .dgt-icon-box.dgt-icon-box-vertical:hover h4,
    .dgt-icon-box.dgt-icon-box-vertical:hover .dgt-icon,
    .dgt-event-inner .dgt-event-cat a,
    .dgt-testimonial-wrap .position,
    .dgt-testimonial-wrap a,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab.vc_active > a,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a:focus,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a:hover,
    .dgt-team-item-inner .dgt-social ul li a:hover,
    .dgt-filter-wrap li.active,
    .dgt-filter-wrap li:hover,
    .entry-header .dgt-cat a,
    .dgt-link-list li a,
    .dgt-button.dgt-button-accent-light,
    .dgt-contact-info .contact-icon,
    .dgt-contact-info .dgt-social ul li a:hover,
    #dgt-cover-image .entry-title span,
    .post-pagination a,
    .dgt-link,
    .dgt-sermon-action-item,
    .dgt-blog-title a:hover,
    .info-post a:hover,
    .event-time small,
    .blog-time small,
    .dgt-list-layout .dgt-event-action .dgt-button:hover,
    .dgt-video-box-inner .dgt-icon:hover,
    .dgt-team-item-inner .dgt-blog-readmore a:hover,
    .dgt-team-item-inner h4 a:hover,
    .woocommerce ul.products li.product .price,
    .woocommerce div.product p.price,
    .woocommerce div.product span.price,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
    .entry-meta span i,
    .dgt-gallery-item-inner .dgt-colorbox:hover {
      color: #1f95cc
    }
    .flickity-prev-next-button .arrow {
      fill: #1f95cc
    }
    .dgt-button:hover,
    #dgt-back-top:hover,
    button:hover,
    input[type="button"]:hover,
    input[type="reset"]:hover,
    input[type="submit"]:hover,
    .button:hover,
    .newsletter .newsletter-submit:hover,
    .woocommerce ul.products li.product .button:hover,
    .woocommerce ul.products li.product .added_to_cart:hover,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce a.button.alt:hover,
    .woocommerce button.button.alt:hover,
    .woocommerce input.button.alt:hover,
    .flickity-prev-next-button:hover {
      background-color: rgba(31, 149, 204, 1)
    }
    .dgt-portfolio-item .dgt-portfolio-infomation:before,
    .dgt-sermon-action .dgt-sermon-action-item:hover {
      background-color: rgba(123, 46, 0, 0.95)
    }
    .dgt-flickity-slider-nav .carousel-cell.is-selected:after,
    .dgt-flickity-slider-nav .carousel-cell:hover:after,
    .dgt-gallery-item-inner:hover .post-feature-image:after {
      background-color: rgba(123, 46, 0, 0.9)
    }
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    .dgt-donate-form-wrapper .dgt-amount-button:hover,
    .dgt-donate-form-wrapper .dgt-amount-button.active,
    .dgt-donate-form-wrapper .radio:not(:checked) + label::before,
    .dgt-donate-form-wrapper .radio:not(:checked) + label::after,
    .dgt-donate-form-wrapper .radio:checked + label::before,
    .dgt-donate-form-wrapper .radio:checked + label::after,
    .dgt-icon-box-vertical .dgt-icon-box-inner:hover,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab.vc_active > a:before,
    .dgt-timeline-tabs.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active > a:before,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a:focus:before,
    .dgt-timeline-tabs.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a:hover:before,
    .dgt-team-item-inner:hover,
    .dgt-button.dgt-button-accent-light,
    .dgt-pagination .current,
    .dgt-pagination .page-numbers:hover,
    .post-pagination a,
    .dgt-single-content .dgt-link:hover,
    blockquote,
    .dgt-video-box-inner .dgt-icon:hover,
    .dgt-single-sermon .dgt-sermon-action .dgt-sermon-action-item {
      border-color: #1f95cc
    }
    body {
      background-color: transparent;
      font-size: 14px;
      line-height: 18px;
      font-weight: 400;
      text-align: inherit
    }
    body {
      background-color: transparent
    }
    body,
    .dgt-team-item-inner h4,
    .dgt-team-item-inner h5,
    .dgt-post-author h5,
    .error-404 .page-title,
    .dgt-event-title,
    .dgt-blog-title,
    .dgt-blog-sidebar h4,
    .woocommerce ul.products li.product h3,
    .dgt-navigation .dgt-blog-description {
      font-family: 'Lato'
    }
    body {
      color: #7d7d7d
    }
    a {
      color: #aaa
    }
    a:hover,
    .dgt-link-list li a:hover {
      color: #bb3d30
    }
    a:active {
      color: #bb3d30
    }
    input[type="text"],
    input[type="number"],
    input[type="password"],
    input[type="tel"],
    input[type="url"],
    input[type="email"] {
      color: #000
    }
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    .dgt-button,
    .button {
      background-color: #1f95cc;
      color: #fff
    }
    #dgt-navigation {
      font-size: 14px;
      color: #000;
      font-weight: 400;
      text-align: inherit
    }
    #dgt-navigation,
    #dgt-navigation .dgt-blog-sidebar h4 {
      font-family: 'Poppins'
    }
    .dgt-sub-title,
    .dgt-image-box .description {
      font-family: 'Noto Serif';
      font-size: 18px;
      color: #828282;
      font-weight: 400;
      text-align: inherit;
      line-height: 40px
    }
    h1,
    .h1 {
      font-family: 'Poppins';
      font-size: 36px;
      color: #262626;
      font-weight: 400;
      text-align: inherit;
      line-height: 36px
    }
    h2,
    .h2 {
      font-family: 'Poppins';
      font-size: 30px;
      color: #262626;
      font-weight: 400;
      text-align: inherit;
      line-height: 30px
    }
    h3,
    .h3,
    .dgt-list-layout .dgt-team-info h5,
    .dgt-list-layout .dgt-team-info h4,
    .dgt-testimonial-heading .dgt-heading::after,
    .dgt-event-inner .event-date,
    .dgt-event-inner .dgt-event-cat,
    .dgt-timeline-tabs .vc_tta-tab > a,
    .dgt-portfolio-item .dgt-portfolio-infomation .dgt-portfolio-cat a,
    .entry-header .dgt-cat a,
    .sidebar .widget-title,
    .comments-title,
    .comment-reply-title,
    #comments .comment-text .author,
    .dgt-post-author h5,
    .dgt-post-author h5 a,
    .dgt-button,
    .event-time,
    .blog-time,
    .woocommerce ul.products li.product .price,
    .woocommerce ul.products li.product .button,
    .woocommerce span.onsale,
    .woocommerce div.product .product_title,
    .woocommerce div.product p.price,
    .woocommerce div.product span.price,
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
      font-family: 'Poppins'
    }
    h3,
    .h3 {
      font-size: 24px;
      color: #262626;
      font-weight: 400;
      text-align: inherit;
      line-height: 24px
    }
    h4,
    .h4 {
      font-family: 'Poppins';
      font-size: 20px;
      color: #262626;
      font-weight: 400;
      text-align: inherit;
      line-height: 20px
    }
    h5,
    .h5 {
      font-family: 'Lato';
      font-size: 18px;
      color: #262626;
      font-weight: 400;
      text-align: ;
      line-height: 18px
    }
    h6,
    .h6 {
      font-family: 'Lato';
      font-size: 16px;
      color: #262626;
      font-weight: 400;
      text-align: ;
      line-height: 16px
    }
    .dgtnavigation .tp-bullet {
      background-color: rgba(123, 46, 0, 0.5);
      border-right-color: rgba(123, 46, 0, 0.6)
    }
    .dgtnavigation .tp-bullet.selected,
    .dgtnavigation .tp-bullet:hover {
      background-color: rgba(123, 46, 0, 1)
    }
    .container {
      width: px
    }
    #logo,
    #logo-retina,
    #logo-fixed {
      padding: 35px 0 35px 20px
    }
    #logo img,
    #logo-retina img,
    #logo-fixed img {
      max-height: 60px;
      display: block
    }
    .header-top {
      background-image: url('http://www.ivcujesuspeople.org/ivcujesuspeople-content/uploads/2016/12/img-cover-top.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: inherit;
      background-position: center center;
      background-color: rgba(29, 166, 230, 0.9)
    }
    .header-top:before {
      background-color: rgba(29, 166, 230, 0.9)
    }
    .header-top,
    .header-top span,
    .header-top p {
      color: #fff
    }
    .header-top a {
      color: #fff
    }
    .header-top a:hover {
      color: #cecece
    }
    .header-top a:active {
      color: #cecece
    }
    .header-primary {
      background-color: #fff
    }
    .header-primary {
      color: #fff
    }
    .header-primary a:not(.dgt-button) {
      color: #fff
    }
    .header-primary a:not(.dgt-button):hover {
      color: #1f95cc
    }
    .header-primary a:not(.dgt-button):active {
      color: #1f95cc
    }
    .dgt-header-right {
      padding-top: 40px
    }
    #dgt-navigation {
      background-color: transparent
    }
    .dgt-navigation,
    .dgt-navigation span,
    .dgt-navigation p {
      color: #1f95cc
    }
    #dgt-navigation a {
      color: #1f95cc
    }
    #dgt-navigation a:hover,
    .header-mobile .menu li a:hover,
    #dgt-navigation li.current-menu-item>a {
      color: #1f95cc
    }
    #dgt-navigation>div>ul>li>a::before {
      background-color: #1f95cc
    }
    #dgt-navigation a:active {
      color: #1f95cc
    }
    #dgt-navigation .sub-menu,
    #dgt-navigation .children {
      background-color: #fff;
      color: #000
    }
    #dgt-navigation .sub-menu a,
    #dgt-navigation .children a {
      color: #000;
      font-size: 14px
    }
    #dgt-navigation .sub-menu a:hover,
    #dgt-navigation .children a:hover {
      color: #1f95cc
    }
    #dgt-navigation .sub-menu a:active,
    #dgt-navigation .children a:active {
      color: #1f95cc
    }
    #dgt-navigation .menu > li > a,
    #dgt-navigation .menu>ul>li>a {
      margin-top: 40px;
      margin-bottom: 40px
    }
    .dgt-navigation .sub-menu,
    .dgt-navigation .children {
      top: 120px
    }
    #dgt-cover-image {
      background-color: #eee;
      background-image: url('http://www.ivcujesuspeople.org/sermon/cover-img.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: scroll;
      background-position: center center;
      min-height: 200px
    }
    #dgt-cover-image.dgt-cover-image-shop {
      background-color: #eee;
      min-height: 470px
    }
    #dgt-cover-image.dgt-cover-image-product {
      background-color: #eee;
      min-height: 470px
    }
    #dgt-cover-image,
    #dgt-cover-image span,
    #dgt-cover-image h1,
    #dgt-cover-image .h1,
    #dgt-cover-image p,
    .woocommerce .woocommerce-breadcrumb {
      color: #fff
    }
    #dgt-cover-image a {
      color: #c8c8c8
    }
    #dgt-cover-image a:hover,
    #dgt-cover-image a:hover span {
      color: #1f95cc
    }
    #dgt-cover-image a:active {
      color: #1f95cc
    }
    .site-content {
      background-color: #fff
    }
    .site-content .entry-content,
    .entry-header .dgt-cat a:hover {
      color: #6a6a6a
    }
    .site-content .entry-content a:not(.dgt-readmore,
    .blog-title,
    .dgt-button) {
      color: #aaa
    }
    .site-content .entry-content a:not(.dgt-readmore,
    .blog-title,
    .dgt-button):hover {
      color: #1f95cc
    }
    .site-content .entry-content a:not(.dgt-readmore,
    .blog-title,
    .dgt-button):active {
      color: #1f95cc
    }
    .site-content .entry-meta span a {
      color: #1f95cc
    }
    .site-content .entry-meta span a:hover {
      color: #aaa
    }
    .sidebar .widget {
      background-color: #fff
    }
    .sidebar .widget-title {
      color: #1f95cc
    }
    .sidebar .widget a:not(.dgt-readmore),
    .sidebar .widget a:not(.dgt-button),
    .sidebar .widget a:not(.button) {
      color: #2e2e2e
    }
    .sidebar .widget a:not(.dgt-readmore):hover,
    .sidebar .widget a:not(.dgt-button):hover,
    .sidebar .widget a:not(.button):hover {
      color: #bb3d30
    }
    .sidebar .widget a:not(.dgt-readmore):active,
    .sidebar .widget a:not(.dgt-button):active,
    .sidebar .widget a:not(.button):active {
      color: #bb3d30
    }
    .site-footer {
      background-color: #232323
    }
    .site-footer,
    .site-footer .widget,
    .site-footer span,
    .site-footer p {
      color: #999
    }
    .site-footer .widget-title,
    .footer-address i {
      color: #fff
    }
    .site-footer a {
      color: #999
    }
    .site-footer a:hover {
      color: #bb3d30
    }
    .site-footer a:active {
      color: #bb3d30
    }
    .footer-newsletter {
      background-color: #232323
    }
    #coppyright {
      background-color: #131313
    }
    #coppyright,
    #coppyright .widget,
    #coppyright span,
    #coppyright p {
      color: #6a6a6a
    }
    #coppyright a {
      color: #6a6a6a
    }
    #coppyright a:hover {
      color: #bb3d30
    }
    #coppyright a:active {
      color: #bb3d30
    }
  </style>
  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1479654658478 {
      margin-top: 103px !important;
      margin-bottom: 90px !important
    }
    .vc_custom_1479653728701 {
      margin-top: -6px !important
    }
    .vc_custom_1479653889310 {
      margin-bottom: 76px !important
    }
    .vc_custom_1479654576629 {
      margin-bottom: 0px !important
    }
    .vc_custom_1479654581012 {
      margin-bottom: 0px !important
    }
    .vc_custom_1480526879329 {
      margin-bottom: 33px !important
    }
    .vc_custom_1480526887497 {
      margin-bottom: 33px !important
    }
  </style>
</head>
<body class="sermon-template-default single single-sermon postid-1481 wpb-js-composer js-comp-ver-4.12.1 vc_responsive">
  <div id="page" class="site">
    <div class="visible-sm visible-xs header-mobile">
        <div class="header-mobile-inner">
            <div class="header-top">
                <div class="header-top-inner">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="dgt_header-top-left">
                                <p class="text"><i class="ion-android-call"></i><span>Call Us: <?php echo $officialno; ?></span></p>
                                <p class="text"><i class="ion-location"></i><span>Address: Chapel of Resurrection, University of Ibadan</span></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="dgt-social icon-show name-hidden pull-left">
                                <ul>
                                    <li class="facebook"><a title="Facebook" href="#"><span>Facebook</span><i class="ion-social-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile-bottom clearfix">
                <div class="dgt-mobile-menu">
                    <div class="mobile-menu">
                        <ul id="menu-main-menu" class="menu">
                            <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="http://www.ivcujesuspeople.org">Home</a>
                            </li>
                            <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="../bible-study-outlines.php">Outlines</a>
                            </li>
                            <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item active">
                                <a href="../bible-study-discussion.php">Discussions</a>
                            </li>
                            <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page   ">
                                <a href="http://www.ivcujesuspeople.org/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <span class="header-mobile-close"><i class="ion-ios-close-empty"></i></span>
    </div>
    <div id="masthead" class="site-header fixed-header">
        <div class="dgt-header-inner">
            <div class="header-top hidden-xs hidden-sm">
                <div class="container">
                    <div class="header-top-inner">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="dgt_header-top-left">
                                    <p class="text"><i class="ion-android-call"></i><span>Call Us: <strong><?php echo $officialno; ?></strong></span></p>
                                    <p class="text"><i class="ion-location"></i><span>Address: <strong>Chapel of Resurrection, Unibadan</strong></span></p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="pull-right">
                                    <div class="dgt-social icon-show name-hidden pull-left">
                                        <ul>
                                            <li class="facebook"><a title="Facebook" href="#"><span>Facebook</span><i class="ion-social-facebook"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-primary">
                <div class="container">
                    <div class="header-section">
                        <span class="header-mobile-open-icon visible-sm visible-xs"><i class="ion-navicon"></i></span>
                        <div class="row">
                            <div class="col-sm-3 col-md-3 dgt-pr0">
                                <div class="site-branding">
                                    <p class="logo" id="logo">
                                        <a href="http://www.ivcujesuspeople.org" rel="home">
                                            <img src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/logo/logo.png" alt="IVCU - Ibadan Varsity Christian Union" />
                                        </a>
                                    </p>
                                    <p class="logo-retina" id="logo-retina">
                                        <a href="../" rel="home">
                                            <img src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/logo/logo.png" alt="IVCU - Ibadan Varsity Christian Union" />
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="hidden-sm hidden-xs col-sm-7 col-md-7 col-lg-7 dgt-pl0 dgt-pr0">
                                <div id="dgt-navigation" class="dgt-navigation">
                                    <div class="main-menu">
                                        <ul id="menu-main-menu-1" class="menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://www.ivcujesuspeople.org">Home</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="../bible-study-outlines.php">Outlines</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item active"><a href="../bible-study-discussion.php">Discusisons</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://www.ivcujesuspeople.org/contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dgt-cover-image">
      <div class="container">
        <div class="dgt-cover-wrap">
          <h2 class="h1 entry-title">Bible Study Team</h2>
          <div class="breadcrumbs" typeof="BreadcrumbList">
            <span property="itemListElement" typeof="ListItem">
              <span property="name">Forum</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div id="content" class="site-content fixed-sidebar content-left-sidebar">
        <div class="container">
            <div id="primary" class="content-area row">
              <main id="main" class="site-main col-sm-12 col-lg-8 col-md-8" role="main">
                  <div class="post-1762 page type-page status-publish hentry">
                      <div class="entry-content">
                          <div class="vc_row wpb_row vc_row-fluid dgt-bg-inherit">
                              <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                      <div class="wpb_wrapper">
                                          <div class="dgt-vc-element dgt-blog-list dgt-sermon-list">
                                              <?php
                                                  if(isset($_GET['res']) && !empty($_GET['res'])){
                                                    if($_GET['res'] == 'success')
                                                      echo 'Your question has been posted successfully, please wait for members reply.<br><a href="../../bible-study-outlines.php">Check out Outlines</a>';
                                                    else if ($_GET['res'] == 'failed')
                                                      echo 'Please Resend your Question, an error occured in connection';
                                                  }
                                              ?>
                                              <?php //include('fetchoutlines10.php'); ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="respond-wrap">
                    <div id="respond" class="comment-respond">
                      <h3 id="reply-title" class="comment-reply-title">Post a Question</h3>
                      <form action="ask.php" method="post" id="commentform" class="comment-form">
                        <p class="comment-form-comment">
                          <textarea placeholder="Type in your Question here..." id="comment" name="questy" cols="45" rows="8" aria-required="true" required></textarea>
                        </p>
                        <div class="row">
                          <div class="col-sm-12 col-md-12">
                            <p class="comment-form-author">
                              <input placeholder="* Name" id="author" name="quester" type="text" value="" size="30" required />
                            </p>
                          </div>
                        </div>
                        <p class="form-submit">
                          <input name="submit" type="submit" id="submit" class="submit" value="Ask" />
                        </p>
                      </form>
                    </div>
                  </div>
              </main>
              <div class="col-sm-12 col-md-4 sidebar" id="sidebar-right">
                <div id="widget-area" class="widget-area" role="complementary">
                  <aside id="dgt_soraka_latest_news_widget-5" class="widget dgt_soraka_latest_news_widget">
                    <h2 class="widget-title">Recently Asked Questions</h2>
                    <div class="dgt-blog-sidebar">
                      <div class="dgt-blog-item clearfix">
                        <ul class="list-link">
                          <?php include_once('recentquestions5.php'); ?>
                        </ul>
                      </div>
                    </div>
                  </aside>
                  <aside id="life_churches_latest_sermon_widget-2" class="widget life_churches_latest_sermon_widget">
                    <h2 class="widget-title">Recently Answered Questions</h2>
                    <div class="dgt-blog-sidebar">
                      <?php include_once('recentanswers5.php'); ?>
                      <?php //include('http://www.ivcujesuspeople.org/sermon/fetchlast4row.php'); ?>
                    </div>
                  </aside>
                </div>
              </div>
            </div>
        </div>
    </div>
    <footer id="colophon" class="site-footer no-margin" role="contentinfo">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div id="dgt_fiora_about_widget-3" class="widget first dgt_fiora_about_widget">
                            <div class="dgt-widget-about">
                                <div class="logo-footer">
                                    <a href="http://www.ivcujesuspeople.org" rel="home"> <img src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/uploads/2017/01/logo-footer.png" alt="IVCU - Ibadan Varsity Christian Union" /> </a>
                                </div>
                                <div class="dgt-about-info">
                                    <p class="dgt-mb0"><i class="ion-android-pin"></i> Chapel of Resurrection, Unibadan</p>
                                    <p class="dgt-mb0"><i class="ion-android-mail"></i> <a href="mailto:ivcu.jesuspeople@gmail.com">ivcu.jesuspeople@gmail.com</a></p>
                                    <p class="dgt-mb0"><i class="ion-ios-telephone"></i> <?php echo $officialno; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div id="dgt_soraka_latest_news_widget-4" class="widget dgt_soraka_latest_news_widget">
                            <h3 class="widget-title">Articles</h3>
                            <div class="dgt-blog-sidebar">
                                <?php include ('http://www.ivcujesuspeople.org/gpcg_news/fetchlatest4.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div id="nav_menu-3" class="widget last widget_nav_menu">
                            <h3 class="widget-title">Quick link</h3>
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">
                                    <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-194"><a href="../about-us/">Our History</a></li>
                                    <li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195"><a href="../sermon">Sermons</a></li>
                                    <li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197"><a href="../event">Events</a></li>
                                    <li id="menu-item-196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196"><a href="../contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div id="newsletterwidget-4" class="widget last widget_newsletterwidget">
                            <h3 class="widget-title">Subscribe to Newsletter</h3>
                            <div class="footer-newsletter">
                                <div id="nh">Feel free to subscribe to our newsletter to get updates of new messages and upcoming events.</div>
                                <div class="tnp tnp-widget">
                                    <span id="subresponse">
                                      <?php if (isset($_GET['pb']) && $_GET['pb'] == 'wp2303kjdj43$003dsdw23!^893nwp'){
                                        echo '<script type="text/javascript"> document.getElementById("nh").innerHTML=""; document.getElementById("mm").style.enable="false"; </script>';
                                        if (isset($_GET['subres']) && $_GET['subres'] == 'success') echo 'You have successfully subscribed to IVCU newsletter...';
                                        if (isset($_GET['subres']) && $_GET['subres'] == 'failed') echo 'Subscription failed! Try again';
                                      } ?>
                                    </span>
                                    <form action="index.php?newslettersub&pb=wp2303kjdj43$003dsdw23!^893nwp" method="post" id="newsform">
                                        <p><input class="email" type="email" required name="subscriptionemail" placeholder="Enter your mail" id="mm"/></p>
                                        <p><input class="submit" type="submit" value="Subscribe" /></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="coppyright">
            <div class="container">
                <div class="coppyright-inner">
                    <div class="row">
                        <!--<div class="col-sm-12 col-md-6">
                        </div>-->
                        <div class="col-sm-12 col-md-6">
                            <div class="pull-right footer-social">
                                <div class="dgt-social icon-show name-hidden">
                                    <p>© Copyright 2017 All Rights Reserved Ibadan Varsity Christian Union </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="dgt-back-top" class="hidden-xs"> <i class="ion-ios-arrow-thin-up"></i>
    </div>
  </div>
  <script src="http://www.ivcujesuspeople.org/ivcujesuspeople-includes/js/jquery/jquery.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-includes/js/jquery/jquery-migrate.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/dgt-framework/assets/vendor/jquery.infinitescroll.min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/dgt-framework/assets/vendor/fancybox/jquery.fancybox-1.3.4.pack.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/dgt-framework/assets/vendor/colobox/jquery.colorbox-min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-includes/js/wp-embed.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/visual-composer/assets/js/dist/js_composer_front.min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/dgt-framework/assets/js/frontend.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/plugins/visual-composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/bootstrap/js/bootstrap.min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/js/theia-sticky-sidebar.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/owl-carousel/owl.carousel.min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/flickity/flickity.pkgd.min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/js/sticky-header.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/assets/venobox/venobox.min.js" data-minify="1"></script>
	<script src="http://www.ivcujesuspeople.org/ivcujesuspeople-content/themes/ivcujesuspeople-church/js/dgt-theme.js" data-minify="1"></script>
</body>

</html>
