<?php
if($destinos && is_array($destinos) && count($destinos) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="page-all-destinos" class="services-area destinos-area todas-las-destinos pt-125 pb-130 gray-bg">
		<div class="container">
			<div class="row justify-content-center"> 
<?php
	foreach ($destinos as $destino) {
?>
				<!--====== <?= $destino->destino_titulo; ?> PART START ======-->
				<div class="col-lg-6 justify-content-center py-4 destino" id="destino-id-<?= $destino->id; ?>">
					<a target="_self" href="<?= base_url('destino/' . $destino->destino_slug.'?utm_source=doit&utm_medium=web&utm_campaign=destinos&utm_term=all&utm_content='.$destino->destino_slug); ?>">
						<div class="single-project justify-content-center">
							<div class="project-image justify-content-center">
									<img src="<?= $destino->destino_image; ?>" alt="<?= $destino->destino_titulo; ?>">
							</div>
							<div class="project-content justify-content-center">
								<a class="project-title" target="_self" href="<?= base_url('destino/' . $destino->destino_slug.'?utm_source=doit&utm_medium=web&utm_campaign=destinos&utm_term=all&utm_content='.$destino->destino_slug); ?>">
									<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $destino->destino_titulo); ?>
								</a>
								<?= !empty($destino->destino_subtitulo)?'<span class="project-subtitle"><a target="_self" href="'. base_url('destino/' . $destino->destino_slug.'?utm_source=doit&utm_medium=web&utm_campaign=destinos&utm_term=all&utm_content='.$destino->destino_slug). '">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $destino->destino_subtitulo).'</a></span>':''; ?>
							</div>
						</div>
					</a>
				</div>
				<!--====== <?= $destino->destino_titulo; ?> PART ENDS ======-->
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