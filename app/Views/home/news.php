<?php
if($news && is_array($news) && count($news) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="news" class="about-area news-area  pt-20 pb-30 white-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= lang('Doit.news'); ?></h5>
						<h2 class="title"><?= lang('Doit.of_interest'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
			<!--div class="row justify-content-center"--> 
			<div class="swiper news-swiper"> 
				<!-- If we need pagination -->
			  <div class="swiper-pagination"></div>

			  <!-- If we need navigation buttons -->
			  <div class="swiper-button-prev"></div>
			  <div class="swiper-button-next"></div>

			  <!-- If we need scrollbar -->
			  <div class="swiper-scrollbar"></div>
				<div class="swiper-wrapper news-slider pb-50" id="news-slider">
					<?php
						foreach ($news as $new) {
					?>
						<!--====== <?= $new->title; ?> PART START ======-->
						<div class="justify-content-center news swiper-slide new-id-<?= $new->id; ?>">
							<div class="card new">
								<?php if(!empty($new->photo)) { ?>
								<div class="image-wrapper d-md-block justify-content-center">
							  	<img src="<?= $new->photo; ?>" class="img" alt="<?= $new->title; ?>">
							  </div>
								<?php } ?>
							  <div class="card-body">
							    <h5 class="card-title text-center"><?= $new->title; ?></h5>
					        <h6 class="card-subtitle mb-2 text-muted"></h6>
							    <p class="card-text text-justify"><?= mb_strlen($new->details) > 150 ? substr($new->details, 0, 147).'...' : $new->details; ?></p>
							  </div>
							  <div class="card-footer">
							    <a href="<?= $new->news_link; ?>" target="_blank" class="main-btn d-block"><?= lang('Doit.seeMore'); ?></a>
							  </div>
						  </div>
					  </div>
						<!--====== <?= $new->title; ?> PART ENDS ======-->
					<?php
						} 
					?>
				</div>
			</div>
		</div>
	</section>
<?php
} 
?>