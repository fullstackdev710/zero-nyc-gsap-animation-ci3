<?php defined("BASEPATH") or exit(); ?>

<?php
$base_url = base_url();
?>

<div id="drawer-backdrop"></div>

<button class="drawer-trigger work"><span>Work</span></button>
<div id="work-drawer" class="drawer-wrapper work" style="--primary: #000000; --secondary: #ffffff;">

   <section class="drawer-content work">
      <div class="inner">
         <button class="drawer-close js-tabshow">Close</button>

         <div class="top">
            <h2>Work
            </h2>
         </div>
         <ul class="categories">
            <li>
               <a href="<?= base_url() ?>work/">see all</a>
            </li>
            <li>
               <a href="<?= base_url() ?>work/?filter=consumer">Consumer</a>
            </li>
            <li>
               <a href="<?= base_url() ?>work?filter=e-commerce">E Commerce</a>
            </li>
            <li>
               <a href="<?= base_url() ?>work?filter=web">Web</a>
            </li>
         </ul>

         <article class="work-tile fw">
            <div>
               <div class="cover-wrapper">
                  <div class="cover bg"><video class="d-auto preload" preload muted loop playsinline data-preload-desktop="<?php echo base_url(); ?>/assets/video/demo/NYLON-vid-2.mp4" data-preload-mobile="<?php echo base_url(); ?>/assets/video/demo/NYLON-vid-tumbnail.mp4"></video></div>
               </div>
               <div class="info">
                  <span>Redesigning an Iconic Magazine for the Internet Age.
                  </span>
                  <h3>Nylon
                  </h3>
               </div>
            </div>
         </article>

         <div class="work-grid">
            <article class="work-tile is-right" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/aperio-beauty/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/aperio.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/aperio.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Aperio Beauty
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-left" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/box-union/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/box_union.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/box_union.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Box Union
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-right" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/combo-boxing/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/combo-2.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/combo-2.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Combo Boxing
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-left" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/hugga-feel/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/hugga_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/hugga_clarity_revyrie.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Hugga
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-right" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/rta-brand/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/RtaDenim_Clarity_Revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/RtaDenim_Clarity_Revyrie.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">RtA Denim
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-left" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/gigi-c-bikinis/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/jonathan_simkhai_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/jonathan_simkhai_clarity_revyrie.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Jonathan Simkhai
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-right" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/the-national-herald/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/thenationalherald_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/thenationalherald_clarity_revyrie.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">The National Herald
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-left" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/in-the-groove/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/getinthegroove_Clarity_Revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/getinthegroove_Clarity_Revyrie.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">In the Groove
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-right" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/lokai-elements/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Lokai.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Lokai.png" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Lokai & Elements
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-left" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/staud/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Staud.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Staud.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">STAUD
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-right" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/houseplant/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Housplant.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Housplant.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Houseplant
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-left" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/cubed-labs/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Cubed-Labs.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Cubed-Labs.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">Cubed Labs
                     </h3>
                  </div>
               </a>
            </article>

            <article class="work-tile is-right" data-d-entrance="stagger-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="<?= base_url() ?>work/alwrld/">
                  <div class="cover-wrapper s-el">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Alwrld.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Alwrld.jpg" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">ALWRLD
                     </h3>
                  </div>
               </a>
            </article>

         </div>

         <section class="special-projects">
            <div class="headline-wrapper" data-d-entrance="basic-fade" data-offset=".8" data-offset-mobile=".85">
               <h3>Special <strong class='custom-font'>Projects</strong></h3>
            </div>

            <article class="work-tile fw" data-d-entrance="basic-fade" data-offset=".8" data-offset-mobile=".85">
               <a href="https://d20.thisisastagingsite.com/" target="_blank" target="_blank" rel="noopener">
                  <div class="cover-wrapper">
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/demo/ed5b77b2-62a8-4693-b233-fed16d859748_Zero_Case_Study_DNC_Featured_Image.jpg?q=65&w=1440&auto=format" data-preload-mobile="<?php echo base_url(); ?>/assets/img/demo/dd110d71-9782-492a-9d8a-e5bfc12eb137_Zero_Case_Study_DNC_Featured_Image_Mobile.jpg?q=65&w=550&auto=format" data-out="fade" alt="">
                  </div>

                  <div class="context" data-out="fade">
                     <p class="left"><span class="link-out" aria-hidden="true">
                           <span>➚</span>
                           <span>➚</span>
                        </span>2020 Democratic National Convention brand microsite
                     </p>
                     <h3 class="right">Democratic National Convention
                     </h3>
                  </div>
               </a>
            </article>
         </section>

         <div data-d-entrance="basic-fade" data-offset=".85" data-offset-mobile=".8">
            <a href="<?= base_url() ?>work/" class="banner-button">See all work</a>
            <div class="quick-contact">
               <div class="wipe-bg"></div>

               <a href="https://www.instagram.com/zero.studios/" target="_blank" target="_blank" rel="noopener" class="handle banner-button">@Zero.Studios
               </a>

               <a href="mailto:some1@zero.nyc" class="email banner-button">SOME1@ZERO.NYC
               </a>
            </div>
         </div>

      </div>
   </section>
</div>

<button class="drawer-trigger about"><span>About</span></button>
<div id="about-drawer" class="drawer-wrapper about" style="--primary: #000000; --secondary: #ffffff;">
   <section class="drawer-content about">
      <div class="inner">
         <button class="drawer-close js-tabshow">Close</button>
         <div class="top">
            <h2>The Digital Agency of Revyrie</h2>
            <p>Complete 360° capabilities, with resources spanning technologies & site development, scalability, and marketing - short term or ongoing support.</p>
            <a class="read-more underline" href="<?= base_url() ?>about/">Read more<span class="visuallyhidden">about us</span></a>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <div class="two-up c-60 media-within" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85">
               <div class="d-flex align-center s-el" style="opacity: 1;">
                  <div class="inner" data-out="fade">
                     <h4>KEY E-COMM PLATFORMS:</h4>
                     <div class="wysiwyg">
                        <ul>
                           <li>Shopify Basic / Plus</li>
                           <li>Customized Woocommerce</li>
                           <li>WordPress</li>
                           <li>Magento</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="s-el media fill-space" style="opacity: 1; padding: 0 10%" data-out="fade">
                  <div class="media-wrapper full">
                     <img class="bg white-icon d-flex align-center" alt="" src="<?php echo base_url(); ?>/assets/img/icons/e-comm-service.png">
                  </div>
               </div>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <div class="two-up c-60 media-within" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85">
               <div class="d-flex align-center s-el" style="opacity: 1;">
                  <div class="inner" data-out="fade">
                     <h4>FEATURED CAPABILITIES:</h4>
                     <div class="wysiwyg">
                        <ul>
                           <li>Full Stack</li>
                           <li>Dedicated Back-End / Server Administration / API management</li>
                           <li>UI / UX Design</li>
                           <li>Email & Campaign Management</li>
                           <li>Custom Membership Solutions</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="s-el media fill-space" style="opacity: 1; padding: 0 10%" data-out="fade">
                  <div class="media-wrapper full">
                     <img class="bg white-icon d-flex align-center" alt="" src="<?php echo base_url(); ?>/assets/img/icons/featured-service.png">
                  </div>
               </div>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <div class="two-up c-60 media-within" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85">
               <div class="d-flex align-center s-el" style="opacity: 1;">
                  <div class="inner" data-out="fade">
                     <h4>SOLUTION INTEGRATIONS:</h4>
                     <div class="wysiwyg">
                        <ul>
                           <li>3PLs - Shiphero, Whiplash, etc.</li>
                           <li>ERP - Aims360, Apparel Magic, Circle</li>
                           <li>CRM - Salesforce, DebtPayPro, Zoho</li>
                           <li>Cloud/Server - AWS, Azure</li>
                           <li>WordPress - Custom and Vanilla</li>
                           <li>Payments - Stripe, Authorize.net, Paypal Email Management & Flow</li>
                           <li>Handling - Klaviyo, Bluecore, Mailchimp</li>
                           <li>Customer Support Systems - Intercom, Gorgias, Zendesk, Zoho</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="s-el media fill-space" style="opacity: 1; padding: 0 10%" data-out="fade">
                  <div class="media-wrapper full">
                     <img class="bg white-icon d-flex align-center" alt="" src="<?php echo base_url(); ?>/assets/img/icons/solution-service.png">
                  </div>
               </div>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <div class="two-up c-60 media-within" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85">
               <div class="d-flex align-center s-el" style="opacity: 1;">
                  <div class="inner" data-out="fade">
                     <h4>MARKETING / SEO:</h4>
                     <div class="wysiwyg">
                        <ul>
                           <li>Facebook / Instagram</li>
                           <li>Digital Ad Spend - Google / Socials</li>
                           <li>Heatmapping</li>
                           <li>Real time decision making</li>
                           <li>SEO Optimization</li>
                           <li>Detailed Reporting</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="s-el media fill-space" style="opacity: 1; padding: 0 10%" data-out="fade">
                  <div class="media-wrapper full">
                     <img class="bg white-icon d-flex align-center" alt="" src="<?php echo base_url(); ?>/assets/img/icons/digital-marketing-service.png">
                  </div>
               </div>
            </div>
         </div>

         <div class="block">
            <h3 data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">But wait, I have more questions</h3>

            <div class="drawer-end-wrapper" data-d-entrance="basic-fade" data-offset=".85" data-offset-mobile=".8">
               <a href="<?= base_url() ?>about/" class="banner-button">Read more about Clarity</a>

               <div class="button-quad">
                  <a class="banner-button half-row" href="mailto:<?= COMPANY_EMAIL ?>"><?= COMPANY_EMAIL ?></a>
                  <div class="banner-button half-row switch-text">
                     <div class="first-text"><span class="peace">&#9774;</span> <span><?= COMPANY_ADDRESS ?></span> <span class="peace">&#9774;</span></div>
                     <div class="second-text"><span>Punk Peace Forever</span></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>