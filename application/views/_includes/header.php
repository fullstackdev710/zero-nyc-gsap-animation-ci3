<?php defined("BASEPATH") or exit(); ?>

<?php
$base_url = base_url();
?>

<!DOCTYPE html>
<html class="no-js" lang="en" style="--primary: #ffffff; --secondary: #000000;">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>The Clarity Project :: Revyrie's Digital Agency</title>
   <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/favicon.png">

   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/global.css?ver=<?php echo time(); ?>" type="text/css" media="all" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css?ver=<?php echo time(); ?>" type="text/css" media="all" />

   <script>
      const domain_url = `<?php echo base_url(); ?>`;
      console.log("Domain Url: ", domain_url)
   </script>

   <!-- BEGIN PAGE LEVEL STYLES -->
   <?php if (isset($styles)) {
      foreach ($styles as $style) {
         if (strpos($style, 'http') === 0) {
            echo '<link href="' . $style . '" rel="stylesheet" type="text/css" />';
         } else {
            echo '<link href="' . $base_url . $style . '" rel="stylesheet" type="text/css" />';
         }
      }
   } ?>
   <!-- END PAGE LEVEL STYLES -->
</head>

<body style="--font: 'white-theme-font'; --font2: 'black-theme-font'; --font3: 'third-theme-font'; background-color:var(--secondary, #000000);">
   <div id="global-mask"></div>
   <div id="container">
      <header id="header">
         <nav id="main-navigation" class="c-120">

            <div class="nav-emoji contact">
               <div id="envelope-hitbox" class="hitbox"></div>
               <div id="emoji-nav-links" class="links">
                  <a href="<?= base_url() ?>contact/">contact</a>
                  <span>•</span>
                  <a href="<?= base_url() ?>careers/">careers</a>
               </div>
               <div class="domgl-email"></div>
            </div>

            <a class="logo" href="<?= base_url() ?>" title="Home">
               <span class="logo-hitbox"></span><span class="visuallyhidden">Back to the home page</span></a>

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
                  <a href="<?= base_url() ?>work/" class="main-link">
                     <div class="link-wrapper">
                        <span>Work
                           <span class="custom-font">Work
                           </span></span>
                     </div>
                  </a>
                  <a href="<?= base_url() ?>about-us/" class="main-link">
                     <div class="link-wrapper">
                        <span>About
                           <span class="custom-font">About
                           </span></span>
                     </div>
                  </a>
                  <a href="<?= base_url() ?>contact/" class="main-link">
                     <div class="link-wrapper">
                        <span>Contact
                           <span class="custom-font">Contact
                           </span></span>
                     </div>
                  </a>
                  <a href="<?= base_url() ?>careers/" class="main-link">
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
                  <a href="<?= base_url() ?>privacy-policy/" class="secondary-link">
                     Privacy Policy
                  </a>
               </div>
            </div>
         </nav>
      </header>