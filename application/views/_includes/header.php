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
                  <a href="<?= base_url() ?>about/" class="main-link">
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
                     <div class="handle banner-button">
                        <span class="peace">&#9774;</span> <span><?= COMPANY_ADDRESS ?></span> <span class="peace">&#9774;</span>
                     </div>

                     <a href="mailto:<?= COMPANY_EMAIL ?>" class="email banner-button">
                        <?= COMPANY_EMAIL ?>
                     </a>
                  </div>


                  <a href="#" class="secondary-link" target="_blank" rel="noopener" style="display: none">

                  </a>
                  <p class="secondary-link switch-text">
                     <span class="first-text">☮ <?= COMPANY_COPYRIGHT_TEXT ?> ☮</span>
                  </p>
                  <p class="secondary-link switch-text">
                     <span class="first-text">☮ <?= COMPANY_NAME ?> ☮</span>
                  </p>
                  <a href="<?= base_url() ?>privacypolicy/" class="secondary-link" style="display: none">
                     Privacy Policy
                  </a>
               </div>
            </div>
         </nav>
      </header>