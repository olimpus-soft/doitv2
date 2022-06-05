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
			<div class="row justify-content-center  tiny-slider"> 
				<div class="customize-tools"  id="agents-customize-controls">
          <ul class="controls" aria-label="Carousel Navigation" tabindex="0">
            <li class="prev" aria-controls="prev" tabindex="-1" data-controls="prev" id="agents-control-prev">
              <i class="fa fa-chevron-left"></i>
            </li>
            <li class="next" aria-controls="next" tabindex="-1" data-controls="next" id="agents-control-next">
              <i class="fa fa-chevron-right"></i>
            </li>
          </ul>
          <div class="playbutton-wrapper">
            <button class="customize-toggle" id="agents-autoplay-toggle" data-action="stop"><span class="tns-visually-hidden">Detener Animación</span><i class="fa fa-stop"></i></button>
          </div>
        </div>

        <!--button class="prev" data-action="prev" aria-label="Anterior" tabindex="0"><span class="tns-visually-hidden">Anterior</span><i class="fa fa-chevron-left"></i></button-->
        <!--button class="next" data-action="next" aria-label="Siguiente" tabindex="0"><span class="tns-visually-hidden">Siguiente</span><i class="fa fa-chevron-rigth"></i></button-->
        
				<div class="agents-slider tiny-slider-content pb-50" id="agents-slider">
<?php
	foreach ($agents as $agent) {
?>
					<!--====== <?= $agent->fullname; ?> PART START ======-->
					<div class="col-sm-6 wrapper-content justify-content-center agent float-left" id="agent-id-<?= $agent->id; ?>">
						<div class="avatar">
              <div class="image-wrapper">
                <img src="<?= $agent->photo; ?>" alt="<?= $agent->fullname; ?>" class="img img-responsive">
              </div>             
          	</div>
            <div class="content-wrapper">
              <p class="name"><?= $agent->fullname; ?></p>
              <p class="position"><?= $agent->cargo; ?></p>
              <div class="details"><?= $agent->details; ?></div>
              <div class="row group-list contact-list">
              	<?php 
              	$cntCtc=count($agent->contacts);
              	foreach ($agent->contacts as $keyCtc => $contact) {
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
              	<div class="col-sm-12 col-md-12 col-xl-12 col-contact">
                    <div class="media contact-list-media">
                        <div class="media-left">
                            <a href="<?= $contact->contact_url; ?>" target="_blank" class="icons"><i class="<?= $contact->contact_ico; ?>" aria-hidden="true"></i></a>
                        </div>
                        <div class="media-right">
                            <a href="<?= $contact->contact_url; ?>" target="_blank" class="title">
                            	<?= $contact->contact_visal; ?>
                            </a>
                        </div>
                    </div>
                </div>
              	<?php	
              	}
              	?>
              	<div class="col-sm-12 col-md-12 col-xl-12 col-contact">
                    <div class="media contact-list-media">
                        <div class="media-left">
                            <a href="<?= base_url('agent/getVcard/' . (strrev(str_replace('=', '', base64_encode($agent->id))))); ?>" target="_blank" class="icons"><i class="fas fa-address-card"></i></a>
                        </div>
                        <div class="media-right">
                            <a href="<?= base_url('agent/getVcard/' . (strrev(str_replace('=', '', base64_encode($agent->id))))); ?>" target="_blank" class="title">
                            	<?= lang('Doit.vCard'); ?>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
          	</div>
					</div>
					<!--====== <?= $agent->fullname; ?> PART ENDS ======-->
<?php
	} ?>
				</div>
			</div>
		</div>
	</section>
<?php
} 
?>