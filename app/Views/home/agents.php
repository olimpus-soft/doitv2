<?php
if($agents && is_array($agents) && count($agents) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="agents" class="about-area agents-area  pt-40 pb-120 white-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= lang('Doit.contactusPleasure'); ?></h5>
						<h2 class="title"><?= lang('Doit.ouragents'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
      
      <div class="row justify-content-center">
        <div class="container d-flex justify-content-center" id="agents-slider">
          <?php
            foreach ($agents as $agent) {
          ?>
          <!--====== <?= $agent->fullname; ?> PART START ======-->
          <div class="agent-card card p-3 py-4 mx-3 col-lg-3 col-md-6 col-sm-12">
            <div class="text-center"> 
              <img src="<?= $agent->photo; ?>" alt="<?= $agent->fullname; ?>"  width="100" class="rounded-circle">
              <h3 class="mt-2"><?= $agent->fullname; ?></h3>
              <span class="mt-1 clearfix"><?= $agent->cargo; ?></span>
              <small class="mt-4"><?= $agent->details; ?></small>
            
              <div class="row mt-3 mb-3">            
                <div class="col-md-4">
                <h5>Projects</h5>
                <span class="num">10</span>
                </div>
                <div class="col-md-4">
                <h5>Projects</h5>
                <span class="num">10</span>
                </div>
                <div class="col-md-4">
                <h5>Projects</h5>
                <span class="num">10</span>
                </div>            
              </div>
            
              <hr class="line">
            
              <div class="social-buttons mt-5"> 
                <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> 
                <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> 
                <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> 
                <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button>
                <button class="neo-button"><i class="fa fa-twitter fa-1x"></i> </button>
              </div>
              
              <div class="profile mt-5">             
                <button class="profile_button px-5 main-btn">Ver Perfil</button>
              </div>
               
            </div>
          </div>
          <?php
            } //foreach ($agents as $agent)
          ?>
      </div>
      </div> <!-- row -->
			
	</section>
<?php
} 
?>