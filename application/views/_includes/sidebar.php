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
               <a href="<?= base_url() ?>work/filter/consumer">Consumer</a>
            </li>
            <li>
               <a href="<?= base_url() ?>work/filter/e-commerce">E Commerce</a>
            </li>
            <li>
               <a href="<?= base_url() ?>work/filter/web">Web</a>
            </li>
         </ul>

         <article class="work-tile fw">
            <a href="<?= base_url() ?>work/nylon/">
               <div class="cover-wrapper">
                  <div class="cover bg"><video class="d-auto preload" preload muted loop playsinline data-preload-desktop="<?php echo base_url(); ?>/assets/video/demo/NYLON-vid-2.mp4" data-preload-mobile="<?php echo base_url(); ?>/assets/video/demo/NYLON-vid-tumbnail.mp4"></video></div>
               </div>
               <div class="info">
                  <span>Redesigning an Iconic Magazine for the Internet Age.
                  </span>
                  <h3>Nylon
                  </h3>
               </div>
            </a>
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
            <h2>About</h2>
            <p>Zero is a digitally-native branding agency with offices in New York and Milwaukee. We build next generation brands and digital experiences.</p>
            <a class="read-more underline" href="<?= base_url() ?>about-us/">Read more<span class="visuallyhidden">about us</span></a>
         </div>
         <div class="block">
            <h3>WTF is a digitally-native branding agency?</h3>
            <div class="svg-wrapper">
               <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 904 551" style="enable-background:new 0 0 904 551;" xml:space="preserve">
                  <title>A Venn Diagram of Zero</title>
                  <desc>Zero is at the sweet spot where traditional branding agencies and digital agencies meet.</desc>

                  <style type="text/css">
                     .about-drawer-path {
                        fill: var(--primary);
                     }

                     .about-drawer-copy {
                        font-size: 16px;
                        font-family: "GTAmerica-Regular", sans-serif;
                     }

                     .about-drawer-circle-stroke {
                        fill: none;
                        stroke: var(--primary);
                        stroke-width: 3;
                     }
                  </style>

                  <text transform="matrix(1 0 0 1 124.992 262)" class="about-drawer-path about-drawer-copy">TRADITIONAL </text>
                  <text transform="matrix(1 0 0 1 135.376 282)" class="about-drawer-path about-drawer-copy">BRANDING </text>
                  <text transform="matrix(1 0 0 1 145.408 302)" class="about-drawer-path about-drawer-copy">AGENCY</text>
                  <text transform="matrix(1 0 0 1 671.992 262)" class="about-drawer-path about-drawer-copy">TRADITIONAL</text>
                  <text transform="matrix(1 0 0 1 813.8311 262)" class="about-drawer-path about-drawer-copy"> </text>
                  <text transform="matrix(1 0 0 1 694.512 282)" class="about-drawer-path about-drawer-copy">DIGITAL </text>
                  <text transform="matrix(1 0 0 1 692.408 302)" class="about-drawer-path about-drawer-copy">AGENCY</text>
                  <circle class="about-drawer-path about-drawer-circle-stroke" cx="275.5" cy="275.5" r="273.5"></circle>
                  <circle class="about-drawer-path about-drawer-circle-stroke" cx="628.5" cy="275.5" r="273.5"></circle>
                  <circle class="about-drawer-path" cx="452" cy="276" r="25"></circle>
               </svg>

            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <h3>Got it. But why does that matter?</h3>
            <div class="wysiwyg">
               <p>We believe that everything is branding. The emails you send, the code you write, the packaging people tear open. Everything. We also know that nowadays most things are digital. Not everything. But quite a bit. So we think that the folks helping to define why you exist and why consumers should give a shit, should be the same folks that bring that message to life, across channels.</p>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <h3>Does that mean you only take on full-service engagements?</h3>
            <div class="wysiwyg">
               <p>No. While much of what we do is help businesses go to market, we also work as specialists at times. Meaning, we take on projects building websites, shooting content, building campaigns, establishing positioning and naming, voice &amp; tone, etc.</p>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <h3>Who do you typically like to work with?</h3>
            <div class="wysiwyg">
               <p>We work with people that are doing something good for the world. Often, this means working directly with founders to help them bring their vision to life. Other times, it&rsquo;s with select fortune 500 companies. We started Zero in search of a better quality of life and value the time we spend making things with people. If we&rsquo;re going to solve problems together, we might as well enjoy it.</p>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <h3>Hmm sounds pretty cool, tbh. What services do you offer?</h3>
            <div class="wysiwyg">
               <p>Branding, design, content &amp; technology:</p>
               <ul>
                  <li>Naming</li>
                  <li>Brand Strategy &amp; Positioning </li>
                  <li>Logo &amp; Identity</li>
                  <li>Voice &amp; Tone</li>
                  <li>Brand Books &amp; Style Guides </li>
                  <li>Art Direction</li>
                  <li>Copywriting</li>
                  <li>Illustration</li>
                  <li>Styling</li>
                  <li>Design</li>
                  <li>User Experience Design </li>
                  <li>Full Stack Development </li>
                  <li>Mobile &amp; App Development</li>
                  <li>Ecommerce</li>
                  <li>Packaging</li>
                  <li>Content Strategy &amp; Production</li>
                  <li>Content Production</li>
                  <li>Brand Activations &amp; Experiences</li>
                  <li>Digital &amp; Traditional Advertising</li>
                  <li>In-store Retail Design</li>
               </ul>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <h3>DANG, Y&rsquo;ALL ARE COOL. WHAT&rsquo;S THE PROCESS TYPICALLY LIKE?</h3>
            <div class="wysiwyg">
               <p>Full-service partnerships: Discovery &amp; Research &rarr; Strategy &amp; Voice &rarr; Branding &amp; Identity &rarr; UX &amp; Content &rarr; Design &amp; Development &rarr; BFFs</p>
            </div>
         </div>
         <div class="block" data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">
            <h3>Nice, I need all of that. How much do you charge?</h3>
            <div class="wysiwyg">
               <p>It depends on the length of the engagement, complexity, and deliverables - but our studio minimum is $100k.</p>
            </div>
         </div>
         <div class="block">
            <h3 data-d-entrance="basic-fade" data-offset=".77" data-offset-mobile=".85">But wait, I have more questions</h3>

            <div class="drawer-end-wrapper" data-d-entrance="basic-fade" data-offset=".85" data-offset-mobile=".8">
               <a href="<?= base_url() ?>about-us/" class="banner-button">Read more about Zero</a>

               <div class="button-quad">
                  <a class="banner-button half-row" href="https://www.instagram.com/zero.studios/?hl=en" target="_blank" rel="noopener">@zero.nyc</a>
                  <a class="banner-button half-row" href="mailto:some1@zero.nyc">some1@zero.nyc</a>
                  <div class="banner-button half-row switch-text">
                     <div class="first-text"><span class="peace">&#9774;</span> <span>2023 Zero Studios, Inc.</span> <span class="peace">&#9774;</span></div>
                     <div class="second-text"><span>Punk Peace Forever</span></div>
                  </div>
                  <a class="banner-button half-row" href="<?= base_url() ?>privacy-policy/">Privacy Policy</a>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>