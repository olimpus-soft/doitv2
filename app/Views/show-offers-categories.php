<?php
echo view('partials/header');
?>
	<!--====== PRELOADER PART START ======-->
	<div class="preloader">
		<div class="loader_34">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<img src="<?= base_url('assets/images/favicon.png');?>" style="max-width: 80%; margin-top: 12%;" alt="Logo Loader">
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--====== PRELOADER ENDS START ======-->

	

	<?php
	echo view('home/header-no-banner');
	?>
	<?php
	if($categories && is_array($categories) && count($categories) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="page-all-offers-categories" class="services-area ofertas-categories-area offers-categories pt-125 pb-130 gray-bg">
		<div class="container">
			<div class="row justify-content-center"> 
<?php
	foreach ($categories as $category) {
?>
				<!--====== <?= $category->categoria; ?> PART START ======-->
				<div class="col-lg-4 justify-content-center py-4 oferta" id="oferta-id-<?= $category->id; ?>">
					<div class="single-project">
						<div class="project-content">
							<a class="project-title" target="_self" href="<?= base_url('oferta/'. $category->categoria_slug . '?utm_source=doit&utm_medium=web&utm_campaign=ofertas-categories&utm_term=all&utm_content='. $category->categoria_slug ); ?>">
								<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $category->categoria); ?>
							</a>
							<?= !empty($category->categoria_descripcion)?'<span class="project-subtitle">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $category->categoria_descripcion).'</span>':''; ?>
						</div>
					</div>
				</div>
				<!--====== <?= $category->categoria; ?> PART ENDS ======-->
<?php
	} ?>
			</div>
		</div>
	</section>
<?php
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

	<?php
	echo view('home/footer');
	?>


	<!--====== BACK TO TOP PART START ======-->

	<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

	<!--====== BACK TO TOP PART ENDS ======-->

	<!--====== PART START ======-->

	<!--
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-lg-"></div>
			</div>
		</div>
	</section>
-->

	<!--====== PART ENDS ======-->


	<!-- row -->
<?php
echo view('partials/footer');
?>