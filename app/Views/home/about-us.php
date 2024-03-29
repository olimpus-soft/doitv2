<?php
$replaceViewValues = App\Controllers\BaseController::replaceViewValues();
?>
<!--====== ABOUT PART START ======-->
<section id="nosotoros" class="about-area pt-20 pb-20">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-image mt-10 clearfix">
					<div class="single-image float-left">
						<img src="<?= base_url('assets/images/about/about-1.png');?>" alt="About">
					</div> <!-- single image -->
					<div data-aos="fade-right" class="about-btn">
						<a class="main-btn" target="_self" href="#"><span><?= $experienceYears; ?></span> <?= lang('Doit.experienceYears'); ?></a>
					</div>
					<div class="single-image image-tow float-right">
						<img src="<?= base_url('assets/images/about/about-2.png');?>" alt="<?= lang('Doit.about_us'); ?>">
					</div> <!-- single image -->
				</div> <!-- about image -->
			</div>
			<div class="col-lg-6">
				<div class="about-content mt-15">
					<h4 class="about-welcome"><?= lang('Doit.about_us'); ?> </h4>
					<h3 class="about-title mt-10"><span><?= TITLEAPP_BASE; ?></span> <?= TITLEAPP_TAILS; ?></h3>
					<p class="mt-25 text-justify"><?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, ABOUT_TEXT); ?>
					</p>
				</div> <!-- about content -->
			</div>
		</div> <!-- row -->
		<div class="row">
			<div class="col-lg-12 mt-5">
				<div class="text-center">
          <a data-aos="fade-right" class="main-btn mx-30" target="_self" href="<?= base_url('p/privacidad');?>?utm_source=doit&utm_medium=web&utm_campaign=<?= lang('Doit.privacy'); ?>&utm_term=all&utm_content="><?= lang('Doit.privacy'); ?></a>
          <a data-aos="fade-top" class="main-btn mx-30" target="_self" href="<?= base_url('p/sostenibilidad');?>?utm_source=doit&utm_medium=web&utm_campaign=<?= lang('Doit.sostenibilidad'); ?>&utm_term=all&utm_content="><?= lang('Doit.sostenibilidad'); ?></a>
          <a data-aos="fade-left" class="main-btn mx-30" target="_self" href="<?= base_url('p/politicas');?>?utm_source=doit&utm_medium=web&utm_campaign=<?= lang('Doit.policy'); ?>&utm_term=all&utm_content="><?= lang('Doit.policy'); ?></a>
        </div>
      </div>
		</div> <!-- row -->
		<?= view('home/social-row'); ?>
	</div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->
<?php
if($aditionalPages && is_array($aditionalPages) && count($aditionalPages) > 0 ) {
	foreach ($aditionalPages as $aditionalPage) {
?>
<section id="page-<?= $aditionalPage->slug; ?>" class="services-area pt-20 pb-20 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center pb-20">
					<h5 class="sub-title mb-15"><?= $aditionalPage->subtitle; ?></h5>
					<h2 class="title"><?= $aditionalPage->title; ?></h2>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $aditionalPage->page_data);?>
			</div>
		</div>
	</div>
</section>
<?php
	}
?>
<!--section id="nosotoros" class="about-area pt-20 pb-20">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center justify-content-center">
				<div class="fb-comments" data-href="https://www.doitviajesyturismo.com/disfruta-nuestro-charter" data-width="100%" data-numposts="5" data-lazy="true"></div>
			</div>
		</div>
	</div>
</section-->
<?php

} else {
 	echo view('partials/notFound');
}
?>