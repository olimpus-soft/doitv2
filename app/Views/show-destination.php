<?php
echo view('partials/header');

	echo view('partials/preloader');

	echo view('home/destination-header');

	if($destino) {
		$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
		<section id="page-show-destination" class="services-area destino-area destination pt-20 pb-10 gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title text-center pb-10">
							<?= !empty($destino->destino_subtitulo)?'<h5 class="sub-title mb-15">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $destino->destino_subtitulo).'</h5>':''; ?>
							<h2 class="title"><?= $destino->destino_titulo; ?></h2>
						</div> <!-- section title -->
					</div>
				</div> <!-- row -->
				<div class="row justify-content-center text-justify">
					<div class="col-lg-12">
						<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $destino->destino_resumen);?>
					</div>
				</div> <!-- row -->
				<?php if($destino->detalle && isset($destino->detalle->descripcion)) { ?>
					<div class="row justify-content-center text-justify pt-5">
						<div class="col-lg-12">
							<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $destino->detalle->descripcion);?>
						</div>
					</div> <!-- row -->
				<?php } ?>
			</div>
			<?php if(isset($destino) && isset($destino->imagenes) && is_array($destino->imagenes)  && count($destino->imagenes) > 0) { ?>
			<div class="container white-bg pt-5 pb-0">
				<div class="row justify-content-center">
					<div id="gallery" class="col-lg-12" style="display:none;">
						<?php foreach ($destino->imagenes as $imagen) { ?>
							<?php if($imagen->recurso_tipo == 'image') { ?>
							<img alt="<?= $imagen->recurso_titulo;?>" src="<?= $imagen->recurso;?>" data-image="<?= $imagen->recurso;?>" data-description="<?= $imagen->recurso_descripcion;?>">
							<?php } ?>
							<?php if($imagen->recurso_tipo == 'video') { ?>
							<?php if(strstr($imagen->recurso, 'youtube.com')) { 
								$videoId = explode('v=', $imagen->recurso);
								$videoId = end($videoId);
							?>
								<img alt="<?= $imagen->recurso_titulo;?>"
									 data-type="youtube"
									 data-videoid="<?= $videoId; ?>"
									 data-description="<?= $imagen->recurso_descripcion;?>">
							<?php } else { ?>
								<img alt="<?= $imagen->recurso_titulo;?>"
									 src="<?= base_url('assets/images/favicon.png');?>"
									 data-type="html5video"
									 data-image="<?= base_url('assets/images/favicon.png');?>"
									 data-videoogv="<?= $imagen->recurso;?>"
									 data-videowebm="<?= $imagen->recurso;?>"
									 data-videomp4="<?= $imagen->recurso;?>"
							    	 data-description="<?= $imagen->recurso_descripcion;?>">
							<?php } 
								}?>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</section>

	<?php
	echo view('home/contact');
	
	} else {
 	echo view('partials/notFound');
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