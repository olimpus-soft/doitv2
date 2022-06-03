<?php
if($agents && is_array($agents) && count($agents) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="agents" class="about-area agents-area  pt-40 pb-70 white-bg">
		<div class="container">
			<div class="row justify-content-center"> 
				<div class="my-slider">
<?php
	foreach ($agents as $agent) {
?>
					<!--====== <?= $agent->oferta_titulo; ?> PART START ======-->
					<div class="justify-content-center agent" id="agent-id-<?= $agent->id; ?>">
						<div class="avatar">
              <div class="image-wrapper">
                <img src="<?= $agent->photo; ?>" alt="<?= $agent->fullname; ?>" class="img img-responsive">
              </div>
              <div class="content-wrapper">
                <p class="name"><?= $agent->fullname; ?></p>
                <p class="position"><?= $agent->cargo; ?></p>
                <div class="details"><?= $agent->details; ?></div>
                <div class="contacts"><?= $agent->details; ?>
                	
                </div>
            	</div>
          	</div>
					</div>
					<!--====== <?= $agent->oferta_titulo; ?> PART ENDS ======-->
<?php
	} ?>
				</div>
			</div>
		</div>
	</section>
<?php
} 
?>