<!--====== OFFERS PART START ======-->
<?php
	if(isset($ofertas) && is_array($ofertas) && count($ofertas) > 0) {
?>
	<section id="ofertas" class="project-area pt-125 pb-130">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-50">
						<h5 class="sub-title mb-15"><?= lang('Doit.oursh'); ?></h5>
						<h2 class="title"><?= lang('Doit.offers'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
		</div>
		<div class="container-fluid">
			<div class="row project-active">
				<?php
					foreach ($ofertas as &$oferta) {
				?>
					<div class="col-lg-4" id="oferta-id-<?= $oferta->id; ?>">
						<div class="single-project">
							<div class="project-image">
								<img src="<?= $oferta->oferta_image; ?>" alt="<?= $oferta->oferta_titulo; ?>">
							</div>
							<div class="project-content">
								<a class="project-title" target="_self" href="<?= base_url('oferta/'. $oferta->categoria_slug .'/'. $oferta->oferta_slug .'?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content='. $oferta->categoria_slug .'/'. $oferta->oferta_slug ); ?>">
									<?= $oferta->oferta_titulo; ?>
								</a>
								<?= !empty($oferta->oferta_subtitulo)?'<span class="project-subtitle">'.$oferta->oferta_subtitulo.'</span>':''; ?>
							</div>
						</div>
					</div>
				<?php
					} //foreach ($ofertas as &$oferta)
				?>
			</div>
			<div class="container col-lg-12 text-center">
				<a class="main-btn mt-25" data-aos="fade-right" data-aos-duration="500" data-aos-offset="-300" data-aos-easing="ease-in-sine"  target="_self" href="<?= base_url('ofertas?utm_source=doit&utm_medium=web&utm_campaign=ofertas-por-categoria&utm_term=all&utm_content=');?>"><?= lang('Doit.all_categories'); ?></a>
				<a class="main-btn mt-25" data-aos="fade-up" data-aos-duration="500" data-aos-offset="-300" data-aos-easing="ease-in-sine" target="_self" href="<?= base_url('disfruta-nuestro-charter?utm_source=doit&utm_medium=web&utm_campaign=disfruta-nuestro-charter&utm_term=all&utm_content=');?>"><?= lang('Doit.enjoyCharter'); ?></a>
				<a class="main-btn mt-25" data-aos="fade-left" data-aos-duration="500" data-aos-offset="-300" data-aos-easing="ease-in-sine" target="_self" href="<?= base_url('todas-las-ofertas?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=');?>"><?= lang('Doit.all_offers'); ?></a>
			</div>
		</div>
	</section>
<?php
	} //if(isset($ofertas) && is_array($ofertas) && count($ofertas) > 0)
?>

<!--====== OFFERS PART ENDS ======-->