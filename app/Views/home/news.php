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
			<div class="row justify-content-center" id="news-slick-slider"> 
				<div class="container d-flex news-slick-slider"> <!-- row-cols-1 row-cols-md-3 -->
				<?php
					foreach ($news as $new) {
				?>
					<!--====== <?= $new->title; ?> PART START ======-->
			    <div class="col">
				    <div class="card h-100">
				    	<?php if(!empty($new->photo)) { ?>
				      	<img src="<?= $new->photo; ?>" class="card-img-top" alt="<?= $new->title; ?>">
				      <?php } ?>
				      <div class="card-body">
				        <h5 class="card-title"><?= $new->title; ?></h5>
				        <p class="card-text"><?= mb_strlen($new->details) > 150 ? substr($new->details, 0, 147).'...' : $new->details; ?> <a href="<?= $new->news_link; ?>" target="_blank" class="btn btn-link"><?= lang('Doit.seeMore'); ?></a></p>
				      </div>
				      <div class="card-footer">
				        <small class="text-muted">Ultima actualización <?= timeago($new->updated_at);?></small>
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
function timeago($date) {
	   $timestamp = strtotime($date);	
	   
	   $strTime = array("segundo", "minuto", "hora", "día", "mes", "año");
	   $length = array("60","60","24","30","12","10");

	   $currentTime = time();
	   if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
				$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			return " hace " . $diff . " " . $strTime[$i] . "(s) ";
	   }
	}
?>