<?php
if($offers && is_array($offers) && count($offers) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="page-all-offers" class="services-area ofertas-area todas-las-ofertas pt-125 pb-130 gray-bg">
		<div class="container">
			<div class="row justify-content-center"> 
<?php
	foreach ($offers as $offer) {
?>
				<!--====== <?= $offer->oferta_titulo; ?> PART START ======-->
				<div class="col-lg-4 justify-content-center py-4 oferta" id="oferta-id-<?= $offer->id; ?>">
					<div class="single-project">
						<?php if($offer->oferta_favorita > 0 ) { ?>
							<span class="starred"><i class="fas fa-star"></i></span>
						<?php } ?>
						<div class="project-image">
							<img src="<?= $offer->oferta_image; ?>" alt="<?= $offer->oferta_titulo; ?>">
						</div>
						<div class="project-content">
							<a class="project-title" name="<?= $offer->oferta_filename; ?>" target="_self" href="<?= $offer->oferta_file; ?>">
								<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_titulo); ?>
							</a>
							<?= !empty($offer->oferta_subtitulo)?'<span class="project-subtitle">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_subtitulo).'</span>':''; ?>
						</div>
					</div>
				</div>
				<!--====== <?= $offer->oferta_titulo; ?> PART ENDS ======-->
<?php
	} ?>
			</div>
		</div>
	</section><?php
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