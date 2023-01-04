<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#" class="loading-site no-js">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>@yield('title')</title>
      <meta name="description" content="">
      <meta name="keywords" content="@yield('title')"/>
      <meta name="robots" content="noodp,index,follow" />
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="description" content="@yield('description')" />
      <link rel="canonical" href="{{url()->current()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{url()->current()}}" />
      <meta property="og:site_name" content="{{url()->current()}}" />
      <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="598" />
      <meta property="og:image:height" content="333" />
      <meta property="og:image:alt" content="" />
      <meta property="og:image:type" content="image/jpeg" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <!-- Fav Icon -->
      <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
      <link rel='stylesheet' id='ux-his-css-css'  href='{{asset('frontend/css/style.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='wp-block-library-css'  href='{{asset('frontend/css/style.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='devvn-album-style-css'  href='{{asset('frontend/css/devvn-album.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='devvn-tailieu-style-css'  href='{{asset('frontend/css/devvn-tailieu.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='ez-icomoon-css'  href='{{asset('frontend/css/style1.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='ez-toc-css'  href='{{asset('frontend/css/screen.min.css')}}' type='text/css' media='all' />
      <style id='ez-toc-inline-css' type='text/css'>
      div#ez-toc-container p.ez-toc-title {font-size: 120%;}div#ez-toc-container p.ez-toc-title {font-weight: 500;}div#ez-toc-container ul li {font-size: 95%;}
      </style>
      <link rel='stylesheet' id='flatsome-icons-css'  href='{{asset('frontend/css/fl-icons.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='flatsome-main-css'  href='{{asset('frontend/css/flatsome.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='flatsome-style-css'  href='{{asset('frontend/css/style1.css')}}' type='text/css' media='all' />
      @yield('css')
      <link rel='stylesheet' id='flatsome-googlefonts-css'  href='//fonts.googleapis.com/css?family=Roboto%3Aregular%2C700%2Cregular%7CQuicksand%3Aregular%2Cregular%7CDancing+Script%3Aregular%2C400&#038;display=swap' type='text/css' media='all' />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

      <script type='text/javascript' src='{{asset('frontend/js/jquery.min.js')}}' id='jquery-core-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
      <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>
      <style id="custom-css" type="text/css">:root {--primary-color: #62a438;}.full-width .ubermenu-nav, .container, .row{max-width: 1170px}.row.row-collapse{max-width: 1140px}.row.row-small{max-width: 1162.5px}.row.row-large{max-width: 1200px}.header-main{height: 68px}#logo img{max-height: 68px}#logo{width:212px;}#logo img{padding:3px 0;}.header-bottom{min-height: 26px}.header-top{min-height: 35px}.transparent .header-main{height: 265px}.transparent #logo img{max-height: 265px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 265px;}.header.show-on-scroll,.stuck .header-main{height:62px!important}.stuck #logo img{max-height: 62px!important}.header-bg-color, .header-wrapper {background-color: #FFFFFF}.header-bottom {background-color: #f1f1f1}.header-main .nav > li > a{line-height: 16px }.stuck .header-main .nav > li > a{line-height: 50px }.header-bottom-nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.nav-dropdown{border-radius:10px}.nav-dropdown{font-size:92%}.header-top{background-color:#62a438!important;}.blog-wrapper{background-color: #f4f4f4;}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #62a438;}/* Color !important */[data-text-color="primary"]{color: #62a438!important;}/* Background Color */[data-text-bg="primary"]{background-color: #62a438;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #62a438;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #62a438}.nav-tabs > li.active > a{border-top-color: #62a438}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #62a438 }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #62a438 }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #62a438;}body{font-size: 98%;}@media screen and (max-width: 549px){body{font-size: 102%;}}body{font-family:"Roboto", sans-serif}body{font-weight: 0}body{color: #0A0A0A}.nav > li > a {font-family:"Quicksand", sans-serif;}.nav > li > a {font-weight: 0;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Roboto", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #ec1d26;}.alt-font{font-family: "Dancing Script", sans-serif;}.alt-font{font-weight: 400!important;}.header:not(.transparent) .header-nav.nav > li > a {color: #ec1d26;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #1E73BE;}a{color: #212121;}.footer-1{background-color: #ffffff}.footer-2{background-color: #ffffff}.absolute-footer, html{background-color: #62a438}/* Custom CSS */.category-project-cat ul.news-related {display: none;}body.page-template.page-template-page-blank.page-template-page-blank-php.page.page-id-9308.logged-in.admin-bar.header-shadow.lightbox.customize-support .box-text.text-center {background-image: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 94%, rgba(0, 0, 0, 0) 100%);}.category-project-cat h3.title-related-post {display: none;}.page-id-9308 .box-text-inner.blog-post-inner h5.post-title.is-large {color: #ffffff;}p.from_the_blog_excerpt {display: none;}h5.post-title.is-large {height: 48px;overflow: hidden;line-height: 23px;}.is-divider {display: none;}input#nf-field-23 {background-color: #62a438;color: #fff;width: 100%;border-radius: 20px;}.locactive {color: #fff;display: inline-block;font-size: 12px;}.locactive a {color: #fff;}.tabbed-content h5.post-title.is-large {min-height: 50px;}.box-text-inner.blog-post-inner h5.post-title.is-large {color: #3c3c3c;}ul.news-related {padding: 15px;}h3.title-related-post {padding-left: 20px;}.locdong {padding: 10px;}h1,h2,h3,h4,h5,h6, .heading-font{font-family: 'Google Sans', sans-serif;line-height: 1.4em;font-weight: 500;}.hover12 .fill.banner-link {background-image: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 44%, rgba(0, 0, 0, 0) 100%);}header.entry-header .entry-divider.is-divider.small {display: none;}span.post_comments.op-7.block.is-xsmall {display: none;}.portfolio-element-wrapper.has-filtering .nav>li>a:hover {color: rgb(255 255 255 / 85%);}.nav-dropdown {position: absolute;min-width: 260px;max-height: 0;z-index: 9;padding: 20px 0 20px;opacity: 0;margin: 0;transition: opacity .25s;box-shadow: 1px 1px 35px rgb(0 0 0 / 35%);border: none;color: #303030;background-color: #fff;text-align: left;display: table;left: -99999px;}blockquote { border-left: 2px solid #fe7b00;font-style: normal;color: #333;text-transform: unset;font-size: 16px;background: #eee;padding: 10px 15px 0 15px;border-top: 1px solid #ccc;margin: 0 0 15px 0;line-height: 2;}body, .nav > li > a{font-family: 'Google Sans', sans-serif;}.footer-wrapper {background-color: #fff;}.footer-secondary.pull-right {float: none;}.footer-2 {margin-bottom: 28px;}.hot2 .icon {margin-top: -6px;}.hot2 h5 {color: #e69300;font-size: 12px;line-height: 0.4;font-weight: 600;}.hot2 h6 {color: #fff;font-size: 20px;opacity: unset;letter-spacing: 0;}.hot1 h5.uppercase {text-transform: unset;font-weight: normal;color: #fff;font-size: 12px;line-height: 0.4;}.hot1 h6 {font-size: 20px;font-weight: 700;color: #fff;letter-spacing: 0;opacity: unset;}.text-right {text-align: right;}li.header-block {width: auto;}.footer-wrapper .col-inner h3{font-size: 16px;text-transform: uppercase;margin-bottom: 25px;font-weight: bold;}.footer-wrapper .col-inner p{margin-bottom: 0;}.footer-wrapper .wpcf7 br{display: none;}.footer-wrapper .wpcf7 p {border: 1px solid #e8eff1;width: 100%;height: auto;float: left;border-radius: 5px;padding: 3px;}.footer-wrapper .wpcf7 .wpcf7-form-control-wrap {display: initial;}.footer-wrapper .wpcf7 input:not(.wpcf7-submit) {width: 40%;float: left;padding: 5px 10px;border: none;border-radius: 0;box-shadow: none;margin-bottom: 0;}.footer-wrapper .wpcf7 .your-name input {border-right: 1px solid #e8eff1 !important;}.footer-wrapper .wpcf7 .wpcf7-submit {text-align: center;border: none;background: #ed1c24;color: white;border-radius: 6px;float: right;width: 32px;height: 32px;margin: 0;padding: 0;font-size: 12px;min-height: auto;line-height: inherit;}.absolute-footer{padding-top: 15px;padding-bottom: 15px;font-size: 13px;position: relative;}.footer-phone img {width: 40px;height: 40px;opacity: 0.9;}.footer-secondary .inline-block{display: block;width: 100%;}.footer-mxh .social-icons{margin-left: 10px;}.footer-center p,.footer-mxh .social-icons a{margin-bottom: 0;}.absolute-footer::before {content: "";width: 100%;height: 100px;top: 0px;position: absolute;left: 0;background-repeat: no-repeat;background-image: url(https://themesdep.com/japan/wp-content/uploads/2020/05/bg-f.png);background-position: center top;}@media (max-width: 849px){.copyright-footer .col{text-align: center !important;}.footer-mxh .social-icons{display: block;}}.category-project-cat .locdong {display: none;}/* Styling CF7 to look like the Divi Contact Form *//*--- 2 Column Form Styles Start ---*/div#row-433089628 {margin-left: 0;margin-right: 0;margin-bottom: 20px;background-color: #ade8ff;}div#row-433089628 li.bullet-arrow {border-bottom: 1px solid #ececec00;}#left {width: 47%;float: left;margin-right:6%;} #right {width: 47%;float: left;} .clearfix:after {content:"020";display:block;height:0;clear:both;visibility:hidden;overflow:hidden;margin-bottom:10px;} .clearfix {display:block;}/*--- 2 Column Form Styles End ---*/.wpcf7-text, .wpcf7-textarea, .wpcf7-captchar, input.wpcf7-form-control.wpcf7-quiz {background-color: #eee !important;border: none !important;width: 100% !important;-moz-border-radius: 0 !important;-webkit-border-radius: 0 !important;border-radius: 3px !important;font-size: 14px;color: #999 !important;padding: 16px !important;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;}textarea.wpcf7-form-control.wpcf7-textarea {height: 180px;}input.wpcf7-form-control.wpcf7-submit {width: 100%;}span.wpcf7-quiz-label {color: #827776;/* line-height: 2; */font-size: 14px;font-weight: normal;}li.tab.active.has-icon a {border-radius: 0px;}ul.nav.nav-pills.nav-uppercase.nav-size-normal.nav-center {background-color: #c4880238;}.lol9 ul li.bullet-arrow {border-bottom: 1px solid #ececec00;}.panel__header h3 {font-size: 15px;line-height: 1;margin-left: -50px;font-weight: 400;margin-top: -5px;}.panel__header {padding: 1.7rem 28rem 2rem 8rem;line-height: 20px;font-weight: 700;color: #3e3e3e;margin-bottom: 30px;background-color: #fff;height: 60px;position: relative;cursor: pointer;}.panel__header .panel__arrow {display: block;width: 60px;height: 60px;text-align: center;background-color: #037cc2;color: #fff;font-size: 2rem;position: absolute;left: 0;top: 0;line-height: 60px;-webkit-transition: all .2s ease-in-out;transition: all .2s ease-in-out;}.panel__header .date {position: absolute;right: 20px;top: 22px;color: #000000;display: inline-block;font-weight: 400;font-size: 13px;}p.uppercase.portfolio-box-category.is-xsmall.op-6 {display: none;}.hi7 .dark ul li.bullet-arrow {border-color: rgba(255, 255, 255, 0);}div#content h6 {color: #ffffff;line-height: 1.5;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;opacity: .99;}.portfolio-box.box.has-hover.box-shade.dark .box-text.text-center {background-image: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 94%, rgba(0, 0, 0, 0) 100%);}.phai8 iframe {max-height: 350px;}.phai8 .is-divider {display: none;}.tuyendung iframe {height: 360px;}.keke2 a.button.secondary {background-color: #ffc600;color: #000;padding-right: 50px;padding-left: 50px;}.phai8 .col, .gallery-item, .columns {position: relative;margin: 0;padding: 0 15px 5px;width: 100%;}.hover11 .fill.banner-link {background-color: #62a438;background-image: linear-gradient(to right,#62a438 10%,#0085d2 90%);opacity: .8;}.posts-shortcode.top-bottom li .post-thumbnail {padding: 0px;}.col.col-divided:not(.col-first):last-child {border-right: 0;padding-right: 0;padding-left: 20px;border-left: 1px solid #ececec00;}.tuyendung .col.post-item {padding-bottom: 0px;}.tuyendung .is-divider {display: none;}.tuyendung .section-title-normal span {color: #ffffff;font-weight: 400;}.home .posts-shortcode .first-news h2.post-box-title {margin-bottom: 10px; * height: 24px; ** white-space: nowrap; * *overflow: hidden; * }h1.loctieude {color: #484848;font-size: 19px;font-weight: 600;margin-bottom: 15px;line-height: 1.7;}.tuyendung_widget_wrap {border-top: solid 1px #d2d2d2;}.row-divided>.col+.col:not(.large-12) {border-left: 1px solid #fff;}li.html.header-button-1 a{animation:stm-button 6s ease infinite}@-webkit-keyframes stm-button{0%,100%{background:#62a438}33%{background:#62a438}66%{background:#027ec5}}@keyframes stm-button{0%,100%{background:#62a438}33%{background:#62a438}66%{background:#027ec5}}.nav-dropdown {border-radius: 0px;}.nav>li>a, .nav-dropdown>li>a, .nav-column>li>a {color: rgba(0, 0, 0, 0.85);transition: all .2s;}.nav-dropdown-default {padding: 2px;}@media only screen and (min-device-width : 375px) and (max-device-width : 667px) and (orientation : landscape) {.loclvv1 {width:100%;max-width: 100%;}}.locvienb {border-radius: 30px;}.locnhoo {font-size: 90%;}.his-list-items .his-items:hover, .his-list-items .his-items.active {background: #027ec4;}.his-list-items .his-items .his-year {color: #027ec4;}.umix-sodo-title {background: #337ab7;color: #fff;padding: 10px 30px;/* border-radius: 15px 15px 0 0; */font-size: 18px;text-align: center;font-weight: 600;}thead#pro {background-color: #007cc2;}.his-content .content-title span {color: #027ec4;}.his-list-items .his-items {min-height: 380px;}ul li.bullet-star:before {color: #027ec5;}#pro b {color: #fff;}.page-title-inner.container.flex-row.dark {display: none;}td {color: #153574;font-weight: 400;font-size: 1em;border-right: 1px solid #ddd;}th:first-child, td:first-child {border-left: 1px solid #ddd;}.entry-content.single-page {padding-top: 0px;}span.byline {display: none;}h3.entry-title a {/* font-size: 18px; *//* font-weight: 700; */color: #027ec4;}#locz1 h3 {background-color: #f76200;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.3);height: 31px;display: block;border-radius: 5px;margin-bottom: 20px;}#locz1 h3 span {padding-right: 8px;padding-left: 8px;background-color: #173774;margin-left: 40px;margin-top: 20px;display: block;padding: 8px;color: #fff;font-weight: 800;text-transform: none;border-radius: 0px 5px 5px 0px;}p.lead {font-weight: 300;font-size: 106%;color: #fff;padding: 10px;}i.icon-play {color: #fff;}.videoo .button.icon.circle {color: #ffffff;box-shadow: 4px 6px 15px rgba(0, 0, 0, 0.75);}.img-thumbnail:before {width: 50px;height: 50px;right: 0px;content: '';position: absolute;background-image: url(http://deltagroup.vn/wp-content/uploads/2017/02/arr-top.png);}.img-thumbnail:after {width: 50px;height: 50px;left: 0px;bottom: -5px;content: '';position: absolute;background-image: url(http://deltagroup.vn/wp-content/uploads/2017/02/arr-bot.png);}.section-title a {font-weight: 300;}.section-title-normal span {color: #173774;font-weight: 400;}.posts-shortcode .first-news h2.post-box-title {margin-bottom: 16px;}.locvienn img {padding: 2px;}.accordion-title {font-size: 100%;}.dark .is-divider {background-color: rgba(255, 255, 255, 0);margin-bottom: 10px;}input#ninja_forms_field_29 {margin-top: 20px;width: 100%;}input#ninja_forms_field_36 {margin-top: 20px;width: 100%;}.loclvv1 {padding: 10px;background-color: #f1f1f1;border-radius: 85px 0 0 85px;}.loclvv2 {padding: 10px;background-color: #f1f1f1;border-radius: 0 85px 85px 0;}.menu-right {background: #f6f6f6 url(http://deltagroup.vn/wp-content/uploads/2017/03/bg_subnav.png) left no-repeat;border-radius: 6px;padding-left: 16px;list-style: none;margin-top: 0px;}.menu-right li {padding: 9px 0px;background: url(http://deltagroup.vn/wp-content/uploads/2017/03/line-right-mnu1.png) no-repeat bottom center;position: relative;}.menu-right li a {font-size: 15px;color: #383838;padding-left: 15px!important;display: block!important;padding-right: 15px!important;}.arrow {position: absolute;top: 27px;left: 0px;overflow: hidden;border-top: 4px solid transparent;border-bottom: 4px solid transparent;border-left: 6px solid #939598;}@media screen and (min-width: 850px).row-large>.flickity-viewport>.flickity-slider>.col, .row-large>.col {padding: 0 10px 20px;margin-bottom: 0;}input#ninja_forms_field_7, input#ninja_forms_field_13 {width: 100% !important;background-color: #62a438;color: #ffffff;font-size: 17px;font-weight: bold;margin-top: 20px;}/* Custom CSS Mobile */@media (max-width: 549px){.panel__header .date {display:none; }.panel__header h3 {font-size: 13px;width: 400px;}img.alignright {width: 100%;display: block;padding: 20px;}.col.pb-0.footer-phone.text-left {display: none;}.col.pb-0.footer-mxh.text-right {text-align: center;}}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
      <style type="text/css" id="wp-custom-css">
      /*--- 2 Column Form Styles Start ---*/
      #left {
      width: 47%;
      float: left;
      margin-right:6%;
      }
      #right {
      width: 47%;
      float: left;
      }
      .clearfix:after {
      content:"\0020";
      display:block;
      height:0;
      clear:both;
      visibility:hidden;
      overflow:hidden;
      margin-bottom:10px;
      }
      .clearfix {
      display:block;
      }
      .aligncenter {
      clear: both;
      display: block;
      margin: 10px auto;
      }
      /*--- 2 Column Form Styles End ---*/		
      </style>
   </head>
   <body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-8 header-shadow lightbox">
      <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
      <div id="wrapper">
      @include('layouts.header.index')
      @yield('content')
      @include('layouts.footer.index')
      </div>
      
      <div id="fb-root"></div>
      @yield('js')
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="w8I3wHKP"></script>
      <script type='text/javascript' id='devvn-album-jquery-js-extra'>
      /* <![CDATA[ */
      var devvn_album = {"ajaxurl":"","siteurl":""};
      /* ]]> */
      </script>
      <script type='text/javascript' src='{{asset('frontend/js/devvn-jquery.js')}}' id='devvn-album-jquery-js'></script>
      <script type='text/javascript' id='image-sizes-js-extra'>
      /* <![CDATA[ */
      var THUMBPRESS = {"version":"3.6","disables":["medium","medium_large","large","2048x2048","1536x1536"]};
      /* ]]> */
      </script>
      <script type='text/javascript' src='{{asset('frontend/js/flatsome-live-search.js')}}' id='flatsome-live-search-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/hoverIntent.min.js')}}' id='hoverIntent-js'></script>
      <script type='text/javascript' id='flatsome-js-js-extra'>
      /* <![CDATA[ */
      var flatsomeVars = {"ajaxurl":"","rtl":"","sticky_height":"62","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false}};
      /* ]]> */
      </script>
      <script type='text/javascript' src='{{asset('frontend/js/flatsome.js')}}' id='flatsome-js-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/wp-embed.min.js')}}' id='wp-embed-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/packery.pkgd.min.js')}}' id='flatsome-masonry-js-js'></script>
      <!-- The Modal -->
      <div id="myModal" class="modal">

         <!-- Modal content -->
         <div class="modal-content">
            {{-- <div class="modal-header">
               <h3>Thông báo</h3>
            </div>
            <div class="modal-body">
               <span>Bạn đang chuyển hướng tới trang web</span><br>
               <span>Bạn có chắc chắn muốn chuyển hướng sang trang này không?</span>
            </div>
            <div class="modal-footer">
               <button class="btn btn-success">Đồng ý</button>
               <button class="btn btn-danger close">Bỏ qua</button>
            </div> --}}
         </div>
      </div>
      <style>
         /* The Modal (background) */
         .modal {
         display: none; /* Hidden by default */
         position: fixed; /* Stay in place */
         z-index: 1; /* Sit on top */
         left: 0;
         top: 0;
         width: 100%; /* Full width */
         height: 100%; /* Full height */
         overflow: auto; /* Enable scroll if needed */
         background-color: rgb(0,0,0); /* Fallback color */
         background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
         }

         /* Modal Content/Box */
         .modal-content {
         background-color: #fefefe;
         margin: 15% auto; /* 15% from the top and centered */
         padding: 20px;
         border: 1px solid #888;
         width: 35%; /* Could be more or less, depending on screen size */
         text-align: center;
         border-radius: 18px;
         }

         @media screen and (max-width:768px) {
            .modal-content{
               width: 90%;
               margin-top: 40%;
            }
         }

         .modal .modal-content .modal-header h3 {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 10px;
         }

         .modal .modal-footer {
            margin-top: 30px;
         }

         .modal .modal-footer .btn {
            padding: 8px 16px;
            border-radius: 10px;
            color: white;
         }

         .modal .modal-footer .btn.btn-danger {
            background-color: #ec1d26;
         }

         .modal .modal-footer .btn.btn-success {
            background-color: #62a438;
         }
      </style>
      <script>
         // Get the modal
         var modal = document.getElementById("myModal");

         // Get the button that opens the modal
         var btn = document.getElementById("myBtn");

         // Get the <span> element that closes the modal
         function redirectLink(e) {
            var url = e;
            modal.style.display = "block";
            var html = `<div class="modal-header"><h3>Thông báo</h3></div><div class="modal-body"><span>Bạn đang chuyển hướng tới trang web <span style="color: #62a438">`+url+`</span></span><br><span>Bạn có chắc chắn muốn chuyển hướng sang trang này không?</span></div><div class="modal-footer"><button class="btn btn-success" onclick="redirectUrl('`+url+`')">Đồng ý</button><button class="btn btn-danger" onclick="closeModal()">Bỏ qua</button></div>`;
            $(".modal-content").html(html);
         }
         
         // When the user clicks on <span> (x), close the modal
         function closeModal() {
            modal.style.display = "none";
         }

         function redirectUrl(e) {
            var url = e;
            window.location.href = url;
         }

         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
            if (event.target == modal) {
               modal.style.display = "none";
            }
         }
      </script>
   </body>
</html>