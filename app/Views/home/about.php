<!--====== ABOUT PART START ======-->

<section id="nosotoros" class="about-area pt-50 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-image mt-50 clearfix">
					<div class="single-image float-left">
						<img src="<?= base_url('assets/images/about/about-1.png');?>" alt="About">
					</div> <!-- single image -->
					<div data-aos="fade-right" class="about-btn">
						<a class="main-btn" target="_self" href="<?= base_url('sobre-nosotros?utm_source=doit&utm_medium=web&utm_campaign=about-us&utm_term=about-us&utm_content=');?>"><span><?= $experienceYears; ?></span> <?= lang('Doit.experienceYears'); ?></a>
					</div>
					<div class="single-image image-tow float-right">
						<img src="<?= base_url('assets/images/about/about-2.png');?>" alt="<?= lang('Doit.about_us'); ?>">
					</div> <!-- single image -->
				</div> <!-- about image -->
			</div>
			<div class="col-lg-6">
				<div class="about-content mt-45">
					<h4 class="about-welcome"><?= lang('Doit.about_us'); ?> </h4>
					<h3 class="about-title mt-10">Do It! Viajes y Turismo</h3>
					<p class="mt-25 text-justify"><?= ABOUT_TEXT; ?>
					</p>
					<a class="main-btn mt-25" target="_self" href="<?= base_url('sobre-nosotros?utm_source=doit&utm_medium=web&utm_campaign=about-us&utm_term=about-us&utm_content=');?>"><?= lang('Doit.more_about_us'); ?></a>
				</div> <!-- about content -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->