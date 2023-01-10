<!--====== OFFERS PART START ======-->
<?php
	if(isset($categories) && is_array($categories) && count($categories) > 0 && (isset($cntOffers) && $cntOffers > 0)) {
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
		<div class="swiper categoria-oferta-swiper">
			<!-- If we need pagination -->
		  <div class="swiper-pagination"></div>

		  <!-- If we need navigation buttons -->
		  <div class="swiper-button-prev"></div>
		  <div class="swiper-button-next"></div>

		  <!-- If we need scrollbar -->
		  <div class="swiper-scrollbar"></div>
			<div class="swiper-wrapper categoria-oferta-container" id="categoria-oferta-container">
					<?php
					  $i = 0;
						foreach ($categories as &$category) {
					?>
					<div class="swiper-slide justify-content-center categoria-oferta ml-10 categoria-id-<?= $category->id; ?>">
						<div class="card mb-4 ml-5" style="">
			      	<img src="<?= $category->categoria_image; ?>" class="img-fluid rounded-start" alt="<?= $category->categoria; ?>">
				      <div class="card-body">
				        <h5 class="card-title"><?= $category->categoria; ?>( <small class="text-muted"><b class="numscroller" data-min='0' data-max='<?= $category->cntOfertas; ?>' data-delay='2' data-increment='1'><?= $category->cntOfertas; ?></b></small> )</h5>
				        <p class="card-text"><?= $category->categoria_descripcion; ?></p>
				      </div>
				      <div class="card-footer">
				        <a class="main-btn d-block" target="_self" href="<?= base_url('oferta/'. $category->categoria_slug .'?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content='. $category->categoria_slug); ?>">
									<?= lang('Doit.seeMore'); ?>
								</a>
              </div>
						</div>
					</div>
					<?php
							$i++;
						} //foreach ($categories as &$category)
					?>
			</div>
		</div>
		<div class="container col-lg-12 text-center">
			<a class="main-btn mt-25" data-aos="fade-right" data-aos-duration="500" data-aos-offset="-800"  data-aos-easing="ease-in-sine"  target="_self" href="<?= base_url('ofertas?utm_source=doit&utm_medium=web&utm_campaign=ofertas-por-categoria&utm_term=all&utm_content=');?>"><?= lang('Doit.all_categories'); ?></a>
			<a class="main-btn mt-25" data-aos="fade-up" data-aos-duration="500" data-aos-offset="-700"  data-aos-easing="ease-in-sine" target="_self" href="<?= base_url('disfruta-nuestro-charter?utm_source=doit&utm_medium=web&utm_campaign=disfruta-nuestro-charter&utm_term=all&utm_content=');?>"><?= lang('Doit.enjoyCharter'); ?></a>
			<a class="main-btn mt-25" data-aos="fade-left" data-aos-duration="500" data-aos-offset="-600" data-aos-easing="ease-in-sine" target="_self" href="<?= base_url('todas-las-ofertas?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=');?>"><?= lang('Doit.all_offers'); ?></a>
		</div>
	</section>
<?php
	} //if(isset($categories) && is_array($categories) && count($categories) > 0)
?>

<!--====== OFFERS PART ENDS ======-->