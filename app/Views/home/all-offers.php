<?php
if(($offers && is_array($offers) && count($offers) > 0 ) || ($charters && is_array($charters) && count($charters) > 0 ) ){
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="page-all-offers" class="services-area ofertas-area todas-las-ofertas pt-20 pb-10 gray-bg">
		<div class="container">
			<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title text-center pb-20">
							<h5 class="sub-title mb-15"><?= lang('Doit.welcomeTo'); ?></h5>
							<h2 class="title"><?= lang('Doit.all_offers'); ?></h2>
						</div> <!-- section title -->
					</div>
				</div> <!-- row -->
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
							<a class="project-title" target="_self" href="<?= base_url('oferta/'. $offer->categoria_slug .'/'. $offer->oferta_slug .'?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content='. $offer->categoria_slug .'/'. $offer->oferta_slug ); ?>">
								<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_titulo); ?>
							</a>
							<?= !empty($offer->oferta_subtitulo)?'<span class="project-subtitle">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_subtitulo).'</span>':''; ?>
							<?= !empty($offer->oferta_subtitulo)?'<span class="project-subtitle categoria">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->categoria).'</span>':''; ?>
						</div>
					</div>
				</div>
				<!--====== <?= $offer->oferta_titulo; ?> PART ENDS ======-->
<?php
	} foreach ($charters as $charter) {
	?>

				<!--====== <?= $charter->charter_titulo; ?> PART START ======-->
				<div class="col-lg-4 justify-content-center py-4 charter" id="charter-id-<?= $charter->id; ?>">
					<div class="single-project">
						<?php if($charter->charter_favorito > 0 ) { ?>
							<span class="starred"><i class="fas fa-star"></i></span>
						<?php } ?>
						<div class="project-image">
							<img src="<?= $charter->charter_image; ?>" alt="<?= $charter->charter_titulo; ?>">
						</div>
						<div class="project-content">
							<a class="project-title" target="_self" href="<?= base_url('charter/'. $charter->charter_slug .'?utm_source=doit&utm_medium=web&utm_campaign=charters&utm_term=all&utm_content=' . $charter->charter_slug ); ?>">
								<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $charter->charter_titulo); ?>
							</a>
							<?= !empty($charter->charter_subtitulo)?'<span class="project-subtitle"><a  target="_self" href="'. base_url('charter/'. $charter->charter_slug .'?utm_source=doit&utm_medium=web&utm_campaign=charters&utm_term=all&utm_content=' . $charter->charter_slug) .'">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $charter->charter_subtitulo).'</a></span>':''; ?>
							<?= !empty($charter->categoria)?'<span class="project-subtitle categoria"><a  target="_self" href="'. base_url('charter/'. $charter->charter_slug .'?utm_source=doit&utm_medium=web&utm_campaign=charters&utm_term=all&utm_content=' . $charter->charter_slug) .'">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $charter->categoria).'</a></span>':''; ?>
						</div>
					</div>
				</div>
				<!--====== <?= $charter->charter_titulo; ?> PART ENDS ======-->
<?php
		} //foreach ($charters as $charter)?>
			</div>
		</div>
	</section>
<?php
} else {
 	echo view('partials/notFound');
}
?>