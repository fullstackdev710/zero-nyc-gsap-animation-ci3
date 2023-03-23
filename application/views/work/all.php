<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php
$base_url = base_url();
?>

<main id="main" data-router-wrapper="">
   <div class="view-work" data-router-view="work">
      <section>
         <div class="hero c-120" data-out="fade">
            <div class="headline-wrapper">
               <h1 class="custom-font" style="opacity: 1;">Work</h1>
            </div>


            <div class="filter-wrapper">
               <button class="filter-el underline is-active" data-filter="all" style="opacity: 1;">All</button>

               <button class="filter-el underline" data-filter="consumer" style="opacity: 1;">Consumer</button>
               <button class="filter-el underline" data-filter="e-commerce" style="opacity: 1;">E Commerce</button>
               <button class="filter-el underline" data-filter="web" style="opacity: 1;">Web</button>
            </div>

            <div class="mobile-filter-wrapper">
               <div class="dropdown">
                  <button class="dropdown-value">
                     <span>Filter +</span>
                  </button>
                  <div class="options-wrapper" style="height: 0px;">
                     <div class="options">

                        <button class="option filter-el is-active" data-filter="technology">
                           <span>All</span>
                        </button>

                        <button class="option filter-el" data-filter="consumer">
                           <span>Consumer</span>
                        </button>
                        <button class="option filter-el" data-filter="e-commerce">
                           <span>E Commerce</span>
                        </button>
                        <button class="option filter-el" data-filter="web">
                           <span>Web</span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>


         <div class="work-grid c-60" aria-live="polite" style="opacity: 1;">

            <article class="work-tile fw featured-project" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/aperio-beauty/" data-out="fade">
                  <div class="wrapper bottom">
                     <div class="cover-wrapper">
                        <img class="cover bg miq bound" alt="" src="<?php echo base_url(); ?>/assets/img/aperio.jpg" style="opacity: 1;">
                        <img class="hidden cover bg miq bound" alt="" src="<?php echo base_url(); ?>/assets/img/aperio.jpg" style="opacity: 1;">
                     </div>
                     <div class="copy cml-60 color-override" style="--primary-override: #000000;">
                        <h3>Aperio Beauty</h3>
                        <p>Custom Build Shopify Solution</p>
                     </div>
                  </div>
                  <div class="context s-el">
                     <p class="full-width">Custom Build Shopify Solution</p>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-left" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/box-union/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/box_union.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/box_union.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Box Union</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-right" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/combo-boxing/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/combo-2.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/combo-2.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Combo Boxing</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-left" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/hugga-feel/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/hugga_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/hugga_clarity_revyrie.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Hugga</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-right" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/rta-brand/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/RtaDenim_Clarity_Revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/RtaDenim_Clarity_Revyrie.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">RtA Denim</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-left" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/gigi-c-bikinis/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/gigicbikinis_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/gigicbikinis_clarity_revyrie.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Gigi C Bikinis</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-right" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/jonathan-simkhai/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/jonathan_simkhai_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/jonathan_simkhai_clarity_revyrie.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Jonathan Simkhai</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-left" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/the-national-herald/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/thenationalherald_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/thenationalherald_clarity_revyrie.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">The National Herald</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-right" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/in-the-groove/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/getinthegroove_Clarity_Revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/getinthegroove_Clarity_Revyrie.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">In the Groove</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-left" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/lokai-elements/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Lokai.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Lokai.png" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Lokai & Elements</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-right" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/staud/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Staud.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Staud.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">STAUD</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-left" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/houseplant/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Housplant.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Housplant.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Houseplant</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-right" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/cubed-labs/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Cubed-Labs.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Cubed-Labs.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">Cubed Labs</h3>
                  </div>
               </a>
            </article>


            <article class="work-tile media-within is-left" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85" data-filters="consumer e-commerce web">
               <a href="<?= base_url() ?>work/alwrld/" data-out="fade">
                  <div class="cover-wrapper s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <img class="cover bg preload bound" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Alwrld.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Alwrld.jpg" alt="">
                  </div>
                  <div class="context s-el" style="opacity: 0; transform: translate(0px, 20px);">
                     <h3 class="full-width">ALWRLD</h3>
                  </div>
               </a>
            </article>

         </div>
      </section>


      <div class="c-120 special-projects-wrapper">
         <section class="special-projects media-within">
            <div class="headline-wrapper" data-out="fade" data-entrance="basic-fade" data-offset=".86" data-offset-mobile=".85" style="opacity: 0; transform: translate(0px, 20px);">
               <h3>Special <strong class="custom-font">Projects</strong></h3>
            </div>

            <div class="work-tile fw" data-out="fade" data-entrance="basic-fade" data-offset=".86" data-offset-mobile=".85" style="opacity: 0; transform: translate(0px, 20px);">
               <a href="https://d20.thisisastagingsite.com/" target="_blank" rel="noopener">
                  <div class="cover-wrapper">
                     <img class="cover bg preload" data-preload-desktop="https://images.prismic.io/zero-2020/ed5b77b2-62a8-4693-b233-fed16d859748_Zero_Case_Study_DNC_Featured_Image.jpg?q=65&amp;w=1440&amp;auto=format" data-preload-mobile="https://images.prismic.io/zero-2020/dd110d71-9782-492a-9d8a-e5bfc12eb137_Zero_Case_Study_DNC_Featured_Image_Mobile.jpg?q=65&amp;w=550&amp;auto=format" alt="" data-out="fade">
                  </div>

                  <div class="context">
                     <p class="left"><span class="link-out">
                           <span>➚</span>
                           <span>➚</span>
                        </span>2020 Democratic National Convention brand microsite
                     </p>
                     <p class="right">Democratic National Convention
                     </p>
                  </div>
               </a>
            </div>
            <div class="work-tile fw" data-out="fade" data-entrance="basic-fade" data-offset=".86" data-offset-mobile=".85" style="opacity: 0; transform: translate(0px, 20px);">
               <a href="https://two.zero.nyc/" target="_blank" rel="noopener">
                  <div class="cover-wrapper">
                     <img class="cover bg preload" data-preload-desktop="https://images.prismic.io/zero-2020/ef72b03c-d850-4b96-a678-c3f45eb7e47b_Zero_Birthday_Site_Featured_Image.jpg?q=65&amp;w=1440&amp;auto=format" data-preload-mobile="https://images.prismic.io/zero-2020/41c12c8f-12b1-4d73-92a7-f57b1a7d102f_Zero_Birthday_Site_Featured_Mobile_Image.jpg?q=65&amp;w=550&amp;auto=format" alt="" data-out="fade">
                  </div>

                  <div class="context">
                     <p class="left"><span class="link-out">
                           <span>➚</span>
                           <span>➚</span>
                        </span>Zero’s Second Birthday Party
                     </p>
                     <p class="right">Self Initiated
                     </p>
                  </div>
               </a>
            </div>
         </section>
      </div>


      <div class="c-120">
         <div class="separator"></div>
      </div>

      <!-- <section class="category-buttons c-120" data-out="fade" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85">
         <a class="el s-el" href="/category/cannabis-design/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">★
            </span>
            <p>Cannabis Design and Branding</p>
         </a>
         <a class="el s-el" href="/category/ecommerce/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">₿
            </span>
            <p>Ecommerce Design and Development</p>
         </a>
         <a class="el s-el" href="/category/cpg/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">🞚
            </span>
            <p>CPG</p>
         </a>
         <a class="el s-el" href="/category/direct-to-consumer/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">❋
            </span>
            <p>Direct to Consumer</p>
         </a>
         <a class="el s-el" href="/category/startup/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">➳
            </span>
            <p>Startup Design and Development</p>
         </a>
         <a class="el s-el" href="/category/content/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">♛
            </span>
            <p>Content</p>
         </a>
         <a class="el s-el" href="/category/campaign/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">✎
            </span>
            <p>Campaigns</p>
         </a>
         <a class="el s-el" href="/category/digital-agency/" style="opacity: 0; transform: translate(0px, 20px);">
            <span class="symbol">☭
            </span>
            <p>Digital Design and Development</p>
         </a>
      </section> -->



      <section class="about-callout c-120">
         <div data-out="fade" data-entrance="basic-fade" data-offset=".86" data-offset-mobile=".85" style="opacity: 0; transform: translate(0px, 20px);">
            <h2>Zero is a digitally-native branding agency with offices in New York and Milwaukee. We build next generation brands and digital experiences.</h2>
            <a class="read-more underline" href="/about-us/">Read more<span class="visuallyhidden">about us</span></a>
         </div>



         <div class="quick-contact" data-entrance="wipe-bg" data-offset=".86" data-offset-mobile=".8" data-out="fade">
            <div class="wipe-bg"></div>

            <a href="https://www.instagram.com/zero.studios/" target="_blank" rel="noopener" class="handle banner-button" style="opacity: 0;">@Zero.Studios
            </a>

            <a href="" class="email banner-button" aria-label="Copy contact email to clipboard: some1@zero.nyc" aria-live="polite" style="opacity: 0;">SOME1@ZERO.NYC
            </a>
         </div>

         <!-- <h2 class="visuallyhidden">Our Locations</h2> -->
         <div class="office-snapshots media-within" data-entrance="stagger-fade" data-offset=".86" data-offset-mobile=".85">
            <div class="office parallax-hover s-el" data-out="fade" style="opacity: 0; transform: translate(0px, 20px);">
               <div class="ar-wrapper" style="--dar: 117.5%; --mar: 117.5%;">
                  <img class="bg preload" data-preload-desktop="https://images.prismic.io/zero-2020/2c8777a8-c75f-4390-8945-3bba48242421_zero-nyc-canal-street.png?auto=compress,format&amp;rect=0,0,800,940&amp;w=800&amp;h=940" alt="">
               </div>
               <address class="address move-el" style="pointer-events: none;">
                  <p>NYC<br>
                     Brooklyn</p>
               </address>
            </div>
            <div class="office parallax-hover s-el" data-out="fade" style="opacity: 0; transform: translate(0px, 20px);">
               <div class="ar-wrapper" style="--dar: 117.625%; --mar: 117.5%;">
                  <img class="bg preload" data-preload-desktop="https://images.prismic.io/zero-2020/c134093a-e33f-4122-a694-89395cac3fdf_MKE_office.jpg?auto=compress,format&amp;rect=0,0,740,870&amp;w=800&amp;h=941" alt="">
               </div>
               <address class="address move-el" style="pointer-events: none;">
                  <p>MKE<br>
                     Third Ward</p>
               </address>
            </div>
         </div>
      </section>
   </div>
</main>