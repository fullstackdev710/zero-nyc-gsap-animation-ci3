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
                  <div class="cover bg"><video class="d-auto preload" preload muted loop playsinline data-preload-desktop="<?php echo base_url(); ?>assets/video/intro-video.mp4" data-preload-mobile="<?php echo base_url(); ?>assets/video/intro-video.mp4"></video></div>
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/aperio.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/aperio.webp" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/box-union/Box-Union-4.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/box-union/Box-Union-4.png" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/hugga/Hugga-1.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/hugga/Hugga-1.png" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/rta-denim/RTA-1.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/rta-denim/RTA-1.png" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/jonathan-simkhai/Jonathan-Simkhai-1.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/jonathan-simkhai/Jonathan-Simkhai-1.png" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/in-the-groove/In-the-Goove-4.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/in-the-groove/In-the-Goove-4.png" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Lokai.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Lokai.webp" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/stuad/Staud-1.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/stuad/Staud-1.png" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Housplant.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Housplant.webp" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Cubed-Labs.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Cubed-Labs.webp" alt="">
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
                     <img class="cover bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Alwrld.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Alwrld.webp" alt="">
                  </div>

                  <div class="context s-el">
                     <h3 class="full-width">ALWRLD
                     </h3>
                  </div>
               </a>
            </article>

         </div>

         <div data-d-entrance="basic-fade" data-offset=".85" data-offset-mobile=".8">
            <a href="<?= base_url() ?>work/" class="banner-button">See all work</a>
            <div class="quick-contact">
               <div class="wipe-bg"></div>

               <div class="handle banner-button">
                  <span class="peace">&#9774;</span> <span><?= COMPANY_ADDRESS ?></span> <span class="peace">&#9774;</span>
               </div>

               <a href="mailto:<?= COMPANY_EMAIL ?>" class="email banner-button">
                  <?= COMPANY_EMAIL ?>
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

            <div data-d-entrance="basic-fade" data-offset=".85" data-offset-mobile=".8">
               <a href="<?= base_url() ?>about/" class="banner-button">Read more about Clarity</a>
               <div class="quick-contact">
                  <div class="wipe-bg"></div>

                  <div class="handle banner-button">
                     <span class="peace">&#9774;</span> <span><?= COMPANY_ADDRESS ?></span> <span class="peace">&#9774;</span>
                  </div>

                  <a href="mailto:<?= COMPANY_EMAIL ?>" class="email banner-button">
                     <?= COMPANY_EMAIL ?>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>