<?php
if($news && is_array($news) && count($news) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="news" class="about-area news-area  pt-40 pb-120 white-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= lang('Doit.news'); ?></h5>
						<h2 class="title"><?= lang('Doit.of_interest'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
			<div class="row justify-content-center tiny-slider"> 
				<div class="row"> 
					<div class="customize-tools" id="news-customize-controls">
	          <ul class="controls" aria-label="Carousel Navigation" tabindex="0">
	            <li class="prev" aria-controls="prev" tabindex="-1" data-controls="prev" id="news-control-prev">
	              <i class="fa fa-chevron-left"></i>
	            </li>
	            <li class="next" aria-controls="next" tabindex="-1" data-controls="next" id="news-control-next">
	              <i class="fa fa-chevron-right"></i>
	            </li>
	          </ul>
	          <div class="playbutton-wrapper">
	            <button class="customize-toggle" id="news-autoplay-toggle" data-action="stop"><span class="tns-visually-hidden">Detener Animación</span><i class="fa fa-stop"></i></button>
	          </div>
	        </div>
        </div>

        <!--button class="prev" data-action="prev" aria-label="Anterior" tabindex="0"><span class="tns-visually-hidden">Anterior</span><i class="fa fa-chevron-left"></i></button-->
        <!--button class="next" data-action="next" aria-label="Siguiente" tabindex="0"><span class="tns-visually-hidden">Siguiente</span><i class="fa fa-chevron-rigth"></i></button-->
        
				<div class="row news-slider tiny-slider-content pb-50" id="news-slider">
<?php
	foreach ($news as $new) {
?>
					<!--====== <?= $new->title; ?> PART START ======-->
					<!--div class="col-sm-4 justify-content-center news" id="new-id-<?= $new->id; ?>">
						<div class="new">
							<div class="row col-sm-12">
		            <div class="image-wrapper col-sm-6 d-sm-none d-md-block">
		              <img src="<?= $new->photo; ?>" alt="<?= $new->title; ?>" class="img img-responsive">
		            </div>             
		            <div class="content-wrapper col-md-6 col-sm-12">
		              <p class="title"><?= $new->title; ?></p>
		              <p class="details"><?= $new->details; ?></p>
		          	</div>
	          	</div>
	          	<div class="row col-sm-12">
		            <div class="link-wrapper col-sm-12">
		            	<a href="<?= $new->news_link; ?>" target="_blank" class="main-btn">Ver Más</a>
		          	</div>
	          	</div>
	          </div>
					</div-->

					<div class="justify-content-center news" id="new-id-<?= $new->id; ?>">
						<div class="card new">
							<?php if(!empty($new->photo)) { ?>
							<div class="image-wrapper d-sm-none d-md-block justify-content-center">
						  	<img src="<?= $new->photo; ?>" class="img" alt="<?= $new->title; ?>">
						  </div>
						<?php } ?>
						  <div class="card-body">
						    <h5 class="card-title text-center"><?= $new->title; ?></h5>
				        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						    <p class="card-text text-justify"><?= mb_strlen($new->details) > 150 ? substr($new->details, 0, 147).'...' : $new->details; ?></p>
						    <!--a href="<?= $new->news_link; ?>" target="_blank" class="main-btn d-block">Ver Más</a-->
						  </div>
						  <div class="card-footer">
						    <a href="<?= $new->news_link; ?>" target="_blank" class="main-btn d-block"><?= lang('Doit.seeMore'); ?></a>
						  </div>
					  </div>
				  </div>
					<!--====== <?= $new->title; ?> PART ENDS ======-->
<?php
	} ?>
				</div>
			</div>
		</div>
	</section>
<?php
} 
?>