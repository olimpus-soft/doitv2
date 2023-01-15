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

		<div class="row">
      <div class="col-lg-10 mx-auto">
          <div class="career-search mb-60">

              <form action="#" class="career-form mb-60">
                  <div class="row">
                      <div class="col-md-6 col-lg-3 my-3">
                          <div class="select-container">
                              <select class="custom-select">
                                  <option selected="">Categoria</option>
                                  <?php
																		foreach ($categories as &$category) {
																			if($category->cntOfertas > 0) {
																	?>
                                  	<option tile="Ofertas de Categoria: <?= $category->cntOfertas;?>" value="<?= $category->categoria_slug; ?>" data-id="<?= $category->id; ?>"><?= $category->categoria; ?></option>
                                	<?php } ?>
                                <?php } ?>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 my-3">
                          <div class="select-container">
                              <select class="custom-select">
                                  <option selected="">Location</option>
                                  <option value="1">Jaipur</option>
                                  <option value="2">Pune</option>
                                  <option value="3">Bangalore</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 my-3">
                          <div class="select-container">
                              <select class="custom-select">
                                  <option selected="">Select Job Type</option>
                                  <option value="1">Ui designer</option>
                                  <option value="2">JS developer</option>
                                  <option value="3">Web developer</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 my-3">
                          <button type="button" class="btn btn-lg btn-block btn-light btn-custom" id="contact-submit">
                              Search
                          </button>
                      </div>
                  </div>
              </form>

              <div class="filter-result">
                  <p class="mb-30 ff-montserrat"><?= $cntOffers; ?> Total Ofertas</p>
                  <?php
									  $i = 0;
										foreach ($ofertas as &$offer) {
									?>
                  <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                      <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                          <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                              <?= $offer->oferta_favorita == 1 ? '<i class="fa fa-star"></i>' : '<i class="fa fa-dot"></i>';?>
                          </div>
                          <div class="job-content">
                              <h5 class="text-center text-md-left"><?= $offer->oferta_titulo; ?></h5>
                              <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                  <li class="mr-md-4">
                                      <i class="zmdi zmdi-pin mr-2"></i> <?= $offer->oferta_subtitulo; ?>
                                  </li>
                                  <li class="mr-md-4">
                                      <i class="zmdi zmdi-money mr-2"></i> <?= $offer->oferta_resumen; ?>
                                  </li>
                                  <li class="mr-md-4">
                                      <i class="zmdi zmdi-time mr-2"></i> <?= $offer->categoria; ?>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="job-right my-4 flex-shrink-0">
                          <a href="<?= $offer->oferta_file; ?>?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=<?= $offer->categoria_slug .'/'. $offer->oferta_slug ; ?>" class="btn d-block w-100 d-sm-inline-block btn-light">Ver Info</a>
                          <a href="<?= base_url('oferta/'. $offer->categoria_slug .'/'. $offer->oferta_slug .'?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content='. $offer->categoria_slug .'/'. $offer->oferta_slug ); ?>" class="btn d-block w-100 d-sm-inline-block btn-light">Mas detalles</a>
                      </div>
                  </div>

					<?php
							$i++;
						} //foreach ($categories as &$category)
					?>
              </div>
          </div>

          <!-- START Pagination -->
          <nav aria-label="Page navigation">
              <ul class="pagination pagination-reset justify-content-center">
                  <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <i class="zmdi zmdi-long-arrow-left"></i>
                      </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">2</a></li>
                  <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">8</a></li>
                  <li class="page-item">
                      <a class="page-link" href="#">
                          <i class="zmdi zmdi-long-arrow-right"></i>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- END Pagination -->
      </div>
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