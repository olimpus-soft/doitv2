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
			<div class="row justify-content-center">
				<div id="carouselCategories" class="carousel slide justify-content-center" data-bs-ride="carousel">
  				<div class="carousel-inner">
						<?php
						  $i = 0;
							foreach ($categories as &$category) {
						?>
						<div class="carousel-item <?= ($i == 0 ? 'active': ''); ?>">
							<div class="col-lg-4 float-left" id="category-id-<?= $category->id; ?>">
								<div class="card mb-3 ml-5" style="/*max-width: 540px;*/">
								  <div class="row g-0">
								    <div class="col-md-5">
								      <img src="<?= $category->categoria_image; ?>" class="img-fluid rounded-start" alt="<?= $category->categoria; ?>">
								    </div>
								    <div class="col-md-7">
								      <div class="card-body">
								        <h5 class="card-title"><?= $category->categoria; ?></h5>
								        <p class="card-text"><?= $category->categoria_descripcion; ?></p>
								        <a class="main-btn" target="_self" href="<?= base_url('oferta/'. $category->categoria_slug .'?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content='. $category->categoria_slug); ?>">
													<?= lang('Doit.seeMore'); ?>
												</a>
								      </div>
								    </div>
								  </div>
								</div>
							</div>
						</div>
						<?php
								$i++;
							} //foreach ($categories as &$category)
						?>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>
					</div>
				</div>
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