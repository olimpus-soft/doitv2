<?php
if($aditionalPages && is_array($aditionalPages) && count($aditionalPages) > 0 ) {
	foreach ($aditionalPages as $aditionalPage) {
?>
<!--====== <?= $aditionalPage->title; ?> PART START ======-->
<section id="page-<?= $aditionalPage->slug; ?>" class="services-area pt-125 pb-130 gray-bg">
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
				<?= $aditionalPage->page_data;?>
			</div>
		</div>
	</div>
</section>
<!--====== <?= $aditionalPage->title; ?> PART ENDS ======-->
<?php
	}
} else {
?>
<section id="page-not-found" class="services-area pt-125 pb-130 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center pb-20">
					<h5 class="sub-title mb-15"><?= lang('Doit.pageNotFound'); ?></h5>
					<h2 class="title">404</h2>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<?= lang('Doit.pageNotFoundDesc'); ?>
			</div>
		</div>
	</div>
</section>
<?php
}
?>