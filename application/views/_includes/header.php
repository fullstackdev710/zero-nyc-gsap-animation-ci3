<?php defined("BASEPATH") or exit(); ?>

<?php
$base_url = base_url();
?>

<!DOCTYPE html>
<html class="no-js" lang="en" style="--primary: #ffffff; --secondary: #000000;">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>Zero Studios</title>
   <style type="text/css">
      * {
         box-sizing: border-box;
         color: var(--primary)
      }

      body {
         margin: 0
      }

      html,
      html a {
         -webkit-font-smoothing: antialiased !important;
         -moz-osx-font-smoothing: grayscale
      }

      body,
      html {
         width: 100%;
         overflow-x: hidden;
         overflow-y: auto;
         overscroll-behavior: none
      }

      body {
         font-family: GTAmerica-Medium, sans-serif;
         font-weight: 500
      }

      #main {
         position: relative;
         z-index: 3
      }

      #global-mask {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: var(--secondary);
         z-index: 99
      }

      .drawer-trigger {
         opacity: 0
      }

      #main-navigation {
         display: -ms-flexbox;
         display: flex;
         -ms-flex-align: end;
         align-items: flex-end;
         -ms-flex-pack: justify;
         justify-content: space-between;
         width: 100%;
         height: 96px;
         z-index: 10;
         position: relative;
         pointer-events: none
      }

      #main-navigation .hammy,
      #main-navigation .logo,
      #main-navigation .nav-emoji {
         pointer-events: all
      }

      #main-navigation .mobile,
      #main-navigation .mode {
         display: none
      }

      @media screen and (max-width:767px) {
         #main-navigation .mobile {
            display: -ms-flexbox;
            display: flex
         }
      }

      #main-navigation .contact {
         margin-bottom: 6px;
         position: relative
      }

      #main-navigation .contact,
      #main-navigation .contact .links {
         display: -ms-flexbox;
         display: flex;
         -ms-flex-align: center;
         align-items: center
      }

      #main-navigation .contact .links {
         position: absolute;
         pointer-events: none;
         padding-left: 4.09722vw
      }

      #main-navigation .contact .links a {
         pointer-events: all
      }

      @media screen and (max-width:1440px) {
         #main-navigation .contact .links {
            padding-left: 59px
         }
      }

      #main-navigation .contact .links span {
         display: block;
         margin: 0 10px
      }

      @media screen and (max-width:767px) {
         #main-navigation .contact {
            pointer-events: none;
            opacity: 0
         }

         #main-navigation .contact .links {
            display: none
         }
      }

      #main-navigation .contact a {
         font-size: 14px;
         line-height: 1;
         text-transform: uppercase
      }

      #main-navigation .contact a,
      #main-navigation .contact span {
         opacity: 0;
         transition: opacity .3s ease-in-out
      }

      @media (any-hover:hover) {

         #main-navigation .contact:hover a,
         #main-navigation .contact:hover span {
            opacity: 1;
            pointer-events: all
         }
      }

      #main-navigation .trigger {
         position: relative;
         z-index: 1;
         -webkit-tap-highlight-color: transparent;
         border: 0;
         width: 45px;
         height: 45px;
         margin-bottom: 0;
         cursor: pointer
      }

      #main-navigation .trigger .hitbox {
         display: block;
         height: 82px;
         width: 80px;
         top: -30px;
         border: 0
      }

      #main-navigation .trigger:first-child {
         position: absolute;
         right: 4.86111vw
      }

      @media screen and (max-width:1440px) {
         #main-navigation .trigger:first-child {
            right: 70px
         }
      }

      @media screen and (max-width:767px) {
         #main-navigation .trigger:first-child {
            right: 50px;
            top: -4px
         }
      }

      #main-navigation .trigger:first-child .hitbox {
         left: -26px
      }

      #main-navigation .trigger:last-child .hitbox {
         left: -24px;
         height: 82px
      }

      #main-navigation .trigger:hover {
         opacity: 1
      }

      #main-navigation .mode-triggers {
         border: 0;
         cursor: pointer;
         position: relative;
         display: -ms-flexbox;
         display: flex;
         -ms-flex-pack: end;
         justify-content: flex-end;
         margin-bottom: 7px;
         outline: none
      }

      @media (max-width:767px) {
         #main-navigation {
            height: 75px
         }

         #main-navigation .trigger {
            min-width: 30px
         }
      }

      .domgl {
         display: block
      }

      .domgl-email,
      .domgl-lollipop {
         width: 34px;
         height: 25px
      }

      .domgl-heart {
         width: 26px;
         height: 26px
      }

      .hitbox {
         position: absolute;
         width: 90px;
         height: 90px;
         left: -35px;
         top: -35px
      }

      .logo-hitbox {
         position: absolute;
         width: 110px;
         height: 110px;
         left: -36px;
         top: -29px
      }

      .contact .hitbox {
         left: -30px;
         top: -32px;
         width: 94px;
         display: -ms-flexbox;
         display: flex;
         -ms-flex-pack: end;
         justify-content: flex-end;
         -ms-flex-align: center;
         align-items: center
      }

      .email {
         width: 120px;
         height: 120px;
         border: 0;
         cursor: pointer
      }

      .email img {
         display: none
      }

      .logo {
         width: 45px;
         height: 45px;
         cursor: pointer;
         position: relative
      }

      .c-120 {
         width: 100%;
         margin: 0 auto;
         padding: 0 120px
      }

      @media (max-width:1024px) {
         .c-120 {
            padding: 0 100px
         }
      }

      @media (max-width:767px) {
         .c-120 {
            padding: 0 30px
         }
      }

      @media (max-width:370px) {
         .c-120 {
            padding: 0 20px
         }
      }

      .drawer-trigger {
         height: calc(var(--vh, 1vh)*100);
         width: 60px;
         cursor: pointer;
         position: fixed;
         top: 0;
         display: -ms-flexbox;
         display: flex;
         -ms-flex-pack: center;
         justify-content: center;
         -ms-flex-align: center;
         align-items: center;
         background: transparent;
         border: 1px solid var(--primary);
         z-index: 100;
         pointer-events: all
      }

      .drawer-trigger span {
         font-size: 15px;
         letter-spacing: 1px;
         transform-origin: center;
         text-transform: uppercase;
         font-family: GTAmerica-Medium, sans-serif;
         color: var(--primary)
      }

      .drawer-trigger.work {
         left: 0;
         border-width: 0 1px 0 0;
         padding-bottom: 10px
      }

      .drawer-trigger.work span {
         transform: rotate(-90deg);
         top: -12px
      }

      .drawer-trigger.about {
         right: 0;
         border-width: 0 0 0 1px;
         padding-bottom: 5px
      }

      .drawer-trigger.about span {
         transform: rotate(90deg);
         top: -6px
      }

      @media screen and (max-width:767px) {
         .drawer-trigger {
            display: none
         }
      }
   </style>
   <style type="text/css">
      @font-face {
         font-family: GTAmerica-Regular;
         src: url(https://prismic-io.s3.amazonaws.com/zero-2020/78c24d45-2d90-4828-89de-6551f8aacffe_GTAmerica-Regular.woff2) format("woff2");
         font-weight: 400;
         font-style: normal;
         font-display: swap
      }

      @font-face {
         font-family: GTAmerica-Medium;
         src: url(https://prismic-io.s3.amazonaws.com/zero-2020/ed120b1f-f1a0-4d42-bc2a-b4ac43835048_GTAmerica-Medium.woff2) format("woff2");
         font-weight: 400;
         font-style: normal;
         font-display: swap
      }

      @font-face {
         font-family: GTAmerica-Black;
         src: url(https://prismic-io.s3.amazonaws.com/zero-2020/aa62cdfe-45a5-4a47-af19-263fb72ecaa3_GTAmerica-Black.woff2) format("woff2");
         font-weight: 400;
         font-style: normal;
         font-display: swap
      }
   </style>

   <!-- Custom Font -->
   <style>
      @font-face {
         font-family: 'white-theme-font';
         src: url('https://zero-2020.cdn.prismic.io/zero-2020/125b2d93-1ac1-42b6-9748-2061df96e2a7_BeatriceDisplay-LightIt.woff2') format('woff2');
         font-weight: normal;
         font-style: normal;
         font-display: swap;
      }

      @font-face {
         font-family: 'black-theme-font';
         src: url('https://zero-2020.cdn.prismic.io/zero-2020/4466df26-3916-4dae-bb78-41a4e813729d_Grenat0.2-Black.woff2') format('woff2');
         font-weight: normal;
         font-style: normal;
         font-display: swap;
      }

      @font-face {
         font-family: 'third-theme-font';
         src: url('https://zero-2020.cdn.prismic.io/zero-2020/2e2b0b94-fdd4-48a8-b717-21bdb9891fed_Digestive-four.woff2') format('woff2');
         font-weight: normal;
         font-style: normal;
         font-display: swap;
      }
   </style>
   <noscript>
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css?ver=<?php echo time(); ?>" type="text/css" media="all" />
   </noscript>

   <script>
      const domain_url = `<?php echo base_url(); ?>`;
      console.log("Domain Url: ", domain_url)
   </script>
</head>

<body style="--font: 'white-theme-font'; --font2: 'black-theme-font'; --font3: 'third-theme-font'; background-color:var(--secondary, #000000);">
   <div id="global-mask"></div>
   <div id="container">
      <header id="header">
         <nav id="main-navigation" class="c-120">

            <div class="nav-emoji contact">
               <div id="envelope-hitbox" class="hitbox"></div>
               <div id="emoji-nav-links" class="links">
                  <a href="/contact/">contact</a>
                  <span>•</span>
                  <a href="/careers/">careers</a>
               </div>
               <div class="domgl-email"></div>
            </div>

            <a class="logo" href="/" title="Home"><span class="logo-hitbox"></span><span class="visuallyhidden">Back to the home page</span></a>

            <div class="nav-emoji mode-triggers" aria-label="See page mode views" tabindex="0">
               <button class="trigger" aria-label="View in tie-dye mode" data-mode="tie-dye">
                  <span class="hitbox"></span>
                  <span class="domgl-lollipop"></span>
               </button>
               <button class="trigger" aria-label="View in light mode" data-mode="dark-mode">
                  <span class="hitbox"></span>
                  <span class="domgl-heart"></span>
               </button>
            </div>
         </nav>

         <nav id="mobile-nav">
            <div class="background"></div>
            <button class="hammy mobile" aria-label="Open menu">
               <span></span>
               <span></span>
               <span></span>
            </button>
            <div class="inner">
               <div class="content-wrapper">
                  <a href="/work/" class="main-link">
                     <div class="link-wrapper">
                        <span>Work
                           <span class="custom-font">Work
                           </span></span>
                     </div>
                  </a>
                  <a href="/about-us/" class="main-link">
                     <div class="link-wrapper">
                        <span>About
                           <span class="custom-font">About
                           </span></span>
                     </div>
                  </a>
                  <a href="/contact/" class="main-link">
                     <div class="link-wrapper">
                        <span>Contact
                           <span class="custom-font">Contact
                           </span></span>
                     </div>
                  </a>
                  <a href="/careers/" class="main-link">
                     <div class="link-wrapper">
                        <span>Careers
                           <span class="custom-font">Careers
                           </span></span>
                     </div>
                  </a>

                  <div class="contact">
                     <a href="https://www.instagram.com/zero.studios/" target="_blank" class="secondary-link" target="_blank" rel="noopener">
                        @Zero.Studios
                     </a>
                     <a href="mailto:some1@zero.nyc" class="secondary-link">
                        SOME1@ZERO.NYC
                     </a>
                  </div>


                  <a href="https://www.google.com/maps/place/265+Canal+St,+New+York,+NY+10013/@40.7189376,-74.003147,17z/data=!3m1!4b1!4m5!3m4!1s0x89c2598a1c3945dd:0x6b44c616961ec727!8m2!3d40.7189336!4d-74.000953" class="secondary-link" target="_blank" rel="noopener">
                     NYC • 265 CANAL ST #604
                  </a>
                  <a href="https://www.google.com/maps/place/320+E+Buffalo+St,+Milwaukee,+WI+53202/@43.0342528,-87.9085505,17z/data=!3m1!4b1!4m5!3m4!1s0x880519a5d50eb0ef:0x5d6f5ef1971a9634!8m2!3d43.0342489!4d-87.9063565" class="secondary-link" target="_blank" rel="noopener">
                     MKE • 320 BUFFALO ST #415
                  </a>
                  <p class="secondary-link switch-text">
                     <span class="first-text">☮ 2020 ZERO STUDIOS, INC ☮
                     </span>
                     <span class="second-text">Punk Peace Forever</span>
                  </p>
                  <a href="/privacy-policy/" class="secondary-link">
                     Privacy Policy
                  </a>
               </div>
            </div>
         </nav>
      </header>