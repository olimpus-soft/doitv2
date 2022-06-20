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
	echo view('home/header');
	?>
	<?php
	if($offer) {
		$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
		<section id="page-show-offer" class="services-area offer-area offer-id-<?= $offer->id; ?> offer pt-125 pb-130 gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title text-center pb-20">
							<?= !empty($offer->oferta_subtitulo)?'<h5 class="sub-title mb-15">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_subtitulo).'</h5>':''; ?>
							<h2 class="title"><?= $offer->oferta_titulo; ?></h2>
						</div> <!-- section title -->
					</div>
				</div> <!-- row -->
				<div class="row justify-content-center text-justify">
					<!--div class="col-lg-12 justify-content-center text-center pb-30">
						<img alt="<?= $offer->oferta_titulo;?>" src="<?= $offer->oferta_image;?>" data-image="<?= $offer->oferta_image;?>" data-description="<?= !empty($offer->oferta_subtitulo) ? str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_subtitulo) : ''; ?>">
					</div-->
					<div class="col-lg-12 justify-content-center text-center pb-30">
						<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_resumen);?>
					</div>
					<div class="col-xl-12 justify-content-center text-center docpdf" id="docpdf">
						
					</div>
				</div> <!-- row -->
			</div>
			
			<div class="container col-lg-12 text-center">
				<a class="main-btn mt-25" data-aos="fade-right" target="_self" href="<?= base_url('ofertas?utm_source=doit&utm_medium=web&utm_campaign=ofertas-por-categoria&utm_term=all&utm_content=');?>"><?= lang('Doit.all_categories'); ?></a>
				<a class="main-btn mt-25" data-aos="fade-left" target="_self" href="<?= base_url('todas-las-ofertas?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=');?>"><?= lang('Doit.all_offers'); ?></a>
			</div>
		</section>

	<?php
	dd($offer);
	echo view('home/contact');
	
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

	<!-- row -->
<?php
echo view('partials/footer');
?>