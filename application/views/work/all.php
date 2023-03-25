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

   </div>
</main>