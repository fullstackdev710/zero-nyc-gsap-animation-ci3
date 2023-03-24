<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php
$base_url = base_url();
?>

<main id="main" data-router-wrapper>
	<div class="view-home" data-router-view="home">
		<section>
			<div class="hero c-60" data-out="fade">
				<h1>The Digital Agency <span class="custom-font">of Revyrie</span>
					<p>Complete 360° capabilities, with resources spanning technologies & site development, scalability, and marketing - short term or ongoing support.</p>
				</h1>
				<div class="scroll-indicator"></div>
			</div>

			<div class="full-bleed c-60 media-within">
				<div class="image-wrapper" style="--dar: 62.5%; transform: translate(0px, 0px);" data-out="fade" data-entrance="basic-fade" data-offset=".86" data-offset-mobile=".85">
					<img class="bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/222.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/222.webp" alt="">
				</div>
			</div>
			<div class="full-bleed c-60 media-within">
				<div class="image-wrapper" style="--dar: 62.5%; transform: translate(0px, 0px);" data-out="fade" data-entrance="basic-fade" data-offset=".86" data-offset-mobile=".85">
					<img class="bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/222222.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/222222.webp" alt="">
				</div>
			</div>
			<div class="full-bleed c-60 media-within">
				<div class="image-wrapper" style="--dar: 62.5%; transform: translate(0px, 0px);" data-out="fade" data-entrance="basic-fade" data-offset=".86" data-offset-mobile=".85">
					<img class="bg preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/333333333.webp" data-preload-mobile="<?php echo base_url(); ?>/assets/img/333333333.webp" alt="">
				</div>
			</div>

			<div class="featured-work work-grid c-60">

				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>/work/aperio-beauty/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/aperio.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/aperio.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Aperio Beauty</h1>
							<p>Custom Build Shopify Solution</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>/work/box-union/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/box_union.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/box_union.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Box Union</h1>
							<p>Custom Build Shopify Solution</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>/work/combo-boxing/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/combo-2.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/combo-2.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Combo Boxing</h1>
							<p>Custom Build Shopify Solution</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within center" data-out="fade">
					<a href="<?= base_url() ?>/work/hugga-feel/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/hugga_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/hugga_clarity_revyrie.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Hugga</h1>
							<p>Custom Build Shopify Solution</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>/work/rta-brand/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/RtaDenim_Clarity_Revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/RtaDenim_Clarity_Revyrie.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>RtA Denim</h1>
							<p>Custom Solution & Shopify Plus</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>/work/gigi-c-bikinis/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/gigicbikinis_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/gigicbikinis_clarity_revyrie.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Gigi C Bikinis</h1>
							<p>Custom Build Shopify Solution</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/jonathan-simkhai/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/jonathan_simkhai_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/jonathan_simkhai_clarity_revyrie.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Jonathan Simkhai</h1>
							<p>Custom Solution & Shopify Plus</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/the-national-herald/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/thenationalherald_clarity_revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/thenationalherald_clarity_revyrie.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>The National Herald</h1>
							<p>Woocommerce</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/in-the-groove/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/getinthegroove_Clarity_Revyrie.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/getinthegroove_Clarity_Revyrie.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>In the Groove</h1>
							<p>Woocommerce</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/lokai-elements/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Lokai.png" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Lokai.png" alt="">

						<div class="copy cml-60 color-override">
							<h1>Lokai & Elements</h1>
							<p>Shopify Plus</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/staud/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Staud.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Staud.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>STAUD</h1>
							<p>Custom Solution & Shopify Plus</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/houseplant/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Housplant.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Housplant.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Houseplant</h1>
							<p>Woocommerce</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/cubed-labs/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Cubed-Labs.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Cubed-Labs.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>Cubed Labs</h1>
							<p>Custom Woocommerce Solution</p>
						</div>
					</a>
				</article>
				<article class="work-tile fw media-within bottom" data-out="fade">
					<a href="<?= base_url() ?>work/alwrld/" data-entrance="cover-copy" data-offset=".85" data-offset-mobile=".85">
						<img class="bg miq preload" data-preload-desktop="<?php echo base_url(); ?>/assets/img/Alwrld.jpg" data-preload-mobile="<?php echo base_url(); ?>/assets/img/Alwrld.jpg" alt="">

						<div class="copy cml-60 color-override">
							<h1>ALWRLD</h1>
							<p>Custom Build Shopify Solution</p>
						</div>
					</a>
				</article>
			</div>
		</section>