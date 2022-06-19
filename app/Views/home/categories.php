<!--====== OFFERS PART START ======-->
<?php
	if(isset($categories) && is_array($categories) && count($categories) > 0) {
?>
	<section id="categories" class="project-area pt-125 pb-130">
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
		<div class="container">
			<div class="row  tiny-slider">
				<div class="customize-tools"  id="categories-customize-controls">
          <ul class="controls" aria-label="Carousel Navigation" tabindex="0">
            <li class="prev" aria-controls="prev" tabindex="-1" data-controls="prev" id="categories-control-prev">
              <i class="fa fa-chevron-left"></i>
            </li>
            <li class="next" aria-controls="next" tabindex="-1" data-controls="next" id="categories-control-next">
              <i class="fa fa-chevron-right"></i>
            </li>
          </ul>
          <div class="playbutton-wrapper">
            <button class="customize-toggle" id="categories-autoplay-toggle" data-action="stop" data-slider-id="categories-slider"><span class="tns-visually-hidden">Detener Animación</span><i class="fa fa-stop"></i></button>
          </div>
          <div class="col-lg-12 slick-dots">
          </div>
        </div>
			</div>
			<div class="row categoria-oferta-container" id="categoria-oferta-container">
						<?php
						  $i = 0;
							foreach ($categories as &$category) {
						?>
						<div class="col justify-content-center categoria-oferta ml-10">
							<div class="card mb-3 ml-5" style="">
				      	<img src="<?= $category->categoria_image; ?>" class="img-fluid rounded-start" alt="<?= $category->categoria; ?>">
					      <div class="card-body">
					        <h5 class="card-title"><?= $category->categoria; ?></h5>
					        <p class="card-text"><?= $category->categoria_descripcion; ?></p>
					        <a class="main-btn d-block" target="_self" href="<?= base_url('oferta/'. $category->categoria_slug .'?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content='. $category->categoria_slug); ?>">
										<?= lang('Doit.seeMore'); ?>
									</a>
					      </div>
					      <div class="card-footer">
                    <a class="d-block" target="_self" href="<?= base_url('oferta/'. $category->categoria_slug .'?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content='. $category->categoria_slug); ?>">
                    	<small class="text-muted">Ofertas: <b class="numscroller" data-min='0' data-max='<?= $category->cntOfertas; ?>' data-delay='3' data-increment='1'><?= $category->cntOfertas; ?></b></small>
                    </a>
                </div>
							</div>
						</div>
						<?php
								$i++;
							} //foreach ($categories as &$category)
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
	} //if(isset($categories) && is_array($categories) && count($categories) > 0)
?>

<!--====== OFFERS PART ENDS ======-->