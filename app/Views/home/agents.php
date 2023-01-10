<?php
if($agents && is_array($agents) && count($agents) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="agents" class="about-area agents-area  pt-20 pb-30 white-bg">
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
              $agentModal = "{$agent->id}-{$agent->orden}";
          ?>
          <!--====== <?= $agent->fullname; ?> PART START ======-->
          <div class="agent agent-card card p-3 py-4 mx-3">
            <div class="card-body">
              <div class="text-center"> 
                <div class="row mt-1 mb-1">            
                  <img src="<?= $agent->photo; ?>" alt="<?= $agent->fullname; ?>"  width="100" class="agent-picture rounded-circle">
                </div>
                <div class="row mt-1 mb-1">            
                  <h4 class="agent-name mt-0"><?= $agent->fullname; ?></h4>
                  <span class="agent-cargo mt-0 clearfix"><?= $agent->cargo; ?></span>              
                </div>            
                <hr class="line">            
                <div class="social-buttons mt-1"> 
                  <?php 
                  $cntCtc=count($agent->contacts);
                  foreach ($agent->contacts as $keyCtc => &$contact) {
                    //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
                    $contact->contact_visal = $contact->contact_value;
                    $contact->contact_ico = 'fa fa-at';
                    $contact->contact_url = '#';
                    if(in_array($contact->tipo, ['phone', 'movil'])) {
                      $contact->contact_value = str_replace([' ', '.','-','(',')'], '', $contact->contact_value);
                      $contact->contact_ico = 'fa '.($contact->tipo == 'phone' ? 'fa-phone' : 'fa-mobile');
                      $contact->contact_url = 'call:'.$contact->contact_value;
                    } else if(in_array($contact->tipo, ['zoom', 'skype'])) {
                      $contact->contact_url = 'live:'.$contact->contact_value;
                      //$contact->contact_ico = 'fa '.($contact->tipo == 'phone' ? 'fa-phone' : 'fa-mobile');
                    } else if($contact->tipo == 'email') {
                      $contact->contact_url = 'mailto:'.$contact->contact_value;
                      $contact->contact_ico = 'fas fa-envelope';
                    } else if($contact->tipo == 'facebook') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-facebook';
                    } else if($contact->tipo == 'twiter') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-twiter';
                    } else if($contact->tipo == 'instagram') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-instagram';
                    } else if($contact->tipo == 'telegram') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-telegram';
                    } else if($contact->tipo == 'tiktok') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-tiktok';
                    } else if($contact->tipo == 'linkedin') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-linkedin';
                    } else if($contact->tipo == 'pinterest') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-pinterest';
                    } else if($contact->tipo == 'tumblr') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-tumblr';
                    } else if($contact->tipo == 'reddit') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-reddit';
                    } else if($contact->tipo == 'viber') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-viber';
                    } else if($contact->tipo == 'line') {
                      $contact->contact_url = $contact->contact_value;
                      $contact->contact_ico = 'fab fa-line';
                    } else if($contact->tipo == 'whatsapp') {
                      $contact->contact_value = str_replace([' ', '.','-','(',')', '+'], '', $contact->contact_value);
                      $contact->contact_url = '//wa.me/'.$contact->contact_value;
                      $contact->contact_ico = 'fab fa-whatsapp';
                    } else {
                      $contact->contact_visal = $contact->contact_value;
                      $contact->contact_ico = 'fa fa-dot';
                      $contact->contact_url = '#';
                    }
                  ?>
                    <a href="<?= $contact->contact_url; ?>" target="_blank" class="neo-button"
                       data-bs-toggle="popover" data-bs-trigger="hover focus" title="<?= $contact->tipo; ?>" data-bs-content="<?= $contact->contact_value; ?>"
                    ><i class="<?= $contact->contact_ico; ?> fa-2x" aria-hidden="true"></i></a>                 
                  <?php 
                  }
                  ?>
                </div>
                 
              </div>
            </div>
            <div class="card-footer text-muted">
              <button class="profile_button px-5 main-btn" data-bs-toggle="modal" data-bs-target="#agent-<?= $agentModal; ?>">Ver Perfil</button>
            </div>
          </div>
          <?php
            } //foreach ($agents as $agent)
          ?>
        </div>
      </div> <!-- row -->
			<?php
        foreach ($agents as $agent) {
          $agentModal = "{$agent->id}-{$agent->orden}";
      ?>        
        <!-- Modal -->
        <div class="modal fade agent-modal" id="agent-<?= $agentModal; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agent-<?= $agentModal; ?>Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="agent-<?= $agentModal; ?>Label">Detalles</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card" style="width: 100%;">
                  <img src="<?= $agent->photo; ?>" alt="<?= $agent->fullname; ?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?= $agent->fullname; ?></h5>
                    <span class="agent-cargo mt-0 clearfix"><?= $agent->cargo; ?></span> 
                    <p class="card-text"><?= $agent->details; ?></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <?php
                      foreach ($agent->contacts as $keyCtc => &$contact) { 
                    ?>
                    <li class="list-group-item"><a href="<?= $contact->contact_url; ?>" target="_blank" class="neo-button"><i class="<?= $contact->contact_ico; ?> fa-2x" style="color: var(--primary);" aria-hidden="true"></i></a> <span style="color:#000;"><?= $contact->contact_value; ?></span> </li>
                    <?php
                      }
                    ?>
                    <li class="list-group-item"><a href="<?= base_url('agent/getVcard/' . (strrev(str_replace('=', '', base64_encode($agent->id))))); ?>" target="_blank" class="neo-button"><i class="fas fa-address-card fa-2x" style="color: var(--primary);" aria-hidden="true"></i>
                              <span style="color:#000;"><?= lang('Doit.vCard'); ?></span>
                            </a></li>
                  </ul>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      <?php
        } //foreach ($agents as $agent) 2
      ?>
	</section>
<?php
} 
?>