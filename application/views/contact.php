<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php
$base_url = base_url();
?>

<main id="main" data-router-wrapper>
   <div class="view-contact" data-router-view="contact">
      <section>
         <div class="top c-120" data-out="fade">
            <p>LET'S CHAT</p>
            <h1 tabindex="1" style="opacity: 1;">Partner with us
            </h1>
            <div class="contact-form" tabindex="2">
               <form id="signup_form" class="mb-3">
                  <div class="d-flex mt-30">
                     <div class="w-50 m-w-100">
                        <input type="text" class="banner-button" id="name" name="name" placeholder="Name" required>
                     </div>
                     <div class="w-50 m-w-100">
                        <input type="email" class="banner-button" id="email" name="email" placeholder="E-Mail" required>
                     </div>
                  </div>
                  <div class="d-flex mt-30">
                     <div class="w-50 m-w-100">
                        <input type="text" class="banner-button" id="company" name="company" placeholder="Company Name" required>
                     </div>
                     <div class="w-50 m-w-100">
                        <input type="email" class="banner-button" id="website" name="website" placeholder="Your Website" required>
                     </div>
                  </div>
                  <div class="d-flex mt-30">
                     <div class="w-100">
                        <textarea id="description" name="description" class="banner-button" rows="4" cols="50" placeholder="Tell us More"></textarea>
                     </div>
                  </div>

                  <input type="submit" class="banner-button mt-30 w-100" value="SUBMIT TO CLARITY">
               </form>
            </div>
         </div>
      </section>

      <section class="about-callout c-120">
         <div class="quick-contact" data-entrance="wipe-bg" data-offset=".86" data-offset-mobile=".8" data-out="fade">
            <div class="wipe-bg"></div>

            <a href="https://www.instagram.com/zero.studios/" target="_blank" target="_blank" rel="noopener" class="handle banner-button"><?= COMPANY_COPYRIGHT_TEXT ?>
            </a>

            <a href="mailto:<?= COMPANY_EMAIL ?>" class="email banner-button"><?= COMPANY_EMAIL ?>
            </a>
         </div>
      </section>

   </div>
</main>