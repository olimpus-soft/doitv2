<?php
if($aditionalPages && is_array($aditionalPages) && count($aditionalPages) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues();
	foreach ($aditionalPages as $aditionalPage) {
?>
<!--====== <?= $aditionalPage->title; ?> PART START ======-->
<section id="page-<?= $aditionalPage->slug; ?>" class="services-area pt-20 pb-10 gray-bg">
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
<!--====== <?= $aditionalPage->title; ?> PART ENDS ======-->
<?php
	}
} else {	
 	echo view('partials/notFound');
}
?>