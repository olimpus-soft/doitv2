<?php
if($offers && is_array($offers) && count($offers) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues();
	foreach ($offers as $offer) {
?>
<!--====== <?= $offer->title; ?> PART START ======-->
<section id="page-<?= $offer->slug; ?>" class="services-area pt-125 pb-130 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center pb-20">
					<h5 class="sub-title mb-15"><?= $offer->subtitle; ?></h5>
					<h2 class="title"><?= $offer->title; ?></h2>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->page_data);?>
			</div>
		</div>
	</div>
</section>
<!--====== <?= $offer->title; ?> PART ENDS ======-->
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
			<div class="col-lg-12 text-center">
				<?= lang('Doit.pageNotFoundDesc'); ?>
			</div>
		</div>
	</div>
</section>
<?php
	header("HTTP/1.1 404 Not Found", true);
}
?>