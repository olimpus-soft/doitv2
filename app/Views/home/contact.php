
<!--====== CONTACT PART START ======-->

<section id="contacto" class="contact-area pt-20 pb-30 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center pb-20">
					<h5 class="sub-title mb-15"><?= lang('Doit.contactus'); ?></h5>
					<h2 class="title"><?= lang('Doit.withatouch'); ?></h2>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">			
			<div class="col-lg-8">
								
				<div class="contact-form">
					
					<?php 
						if(!isset($contentScripts)) {
							$contentScripts = '';
						}
						if(($successMessages = session()->getFlashdata('success')) && ((is_array($successMessages) && count($successMessages) > 0) || (is_string($successMessages) && !empty($successMessages)))) {

							if(is_array($successMessages)) {
								$messages = $successMessages;
								$successMessages = '';
								foreach ($messages as $message) {
									$successMessages.= $message.' ';
								}
							}
							$contentScripts.= '
								<script async defer type="text/javascript">
									(function() {
										setTimeout(() => {
											const Toast = Swal.mixin({
										  toast: true,
										  position: \'top-end\',
										  showConfirmButton: false,
										  timer: 3000,
										  timerProgressBar: true,
										  didOpen: (toast) => {
										    toast.addEventListener(\'mouseenter\', Swal.stopTimer)
										    toast.addEventListener(\'mouseleave\', Swal.resumeTimer)
										  }
										})

										Toast.fire({
										  icon: \'success\',
										  title: \''.($successMessages).'\'
										})
										}, 700);
									})();
								</script>
							';
						}
						$errorsForm = trim(\Config\Services::validation()->listErrors()); 
						if(count(\Config\Services::validation()->getErrors()) > 0 && !empty($errorsForm)) {
							$contentScripts.= '
								<script async defer type="text/javascript">
									(function() {
										setTimeout(() => {
											Swal.fire({
											  icon: "error",
											  title: "'.lang('Doit.contactFormErrors').'",
											  html: \''.str_replace([PHP_EOL,' ',"\n"], ' ', $errorsForm).'\',
											  footer: "<a class=\"page-scroll\" href=\"#contacto\">'.lang('Doit.contact').'</a>"
											}).then((result) => {
											  var createA = document.createElement(\'a\');
								        createA.setAttribute(\'href\', "#contacto");
								        createA.click()
											});
										}, 700);
									})();
								</script>
							';
							echo '<p class="form-message">'.$errorsForm.'</p>';
							echo $contentScripts;
						}
					?>
					<form id="contact-form" action="<?= base_url('saveContact');?>" method="post" data-toggle="validator">
						<?= csrf_field() ?>
						<input type="hidden" name="token">
						<input type="hidden" name="recaptcha">
						<input type="hidden" name="action" value="contacto_web">
						<div class="row">
							<div class="col-md-6">
								<div class="single-form form-group">
									<select name="tipo" placeholder="<?= lang('Doit.choiceContacType'); ?>" data-error="<?= lang('Doit.contacTypeRequired'); ?>" required="required">
										<option><?= lang('Doit.choiceContacType'); ?></option>
										<?php
											foreach ($contacTypes as &$contacType) {
										?>
											<option value="<?= $contacType->descripcion;?>"<?= $contacType->descripcion == old('tipo') ? ' selected':''; ?>><?= $contacType->descripcion;?></option>
										<?php
											}
										?>
									</select>
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							<div class="col-md-6">
								<div class="single-form form-group">
									<input type="text" name="empresa" placeholder="<?= lang('Doit.companyName'); ?>" data-error="" value="<?= old('empresa') ?>">
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							<div class="col-md-6">
								<div class="single-form form-group">
									<input type="text" name="nombre" placeholder="<?= lang('Doit.yourName'); ?>" data-error="<?= lang('Doit.yourNameRequired'); ?>" required="required" value="<?= old('nombre') ?>">
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							<div class="col-md-6">
								<div class="single-form form-group">
									<input type="email" name="correo" placeholder="<?= lang('Doit.yourEmail'); ?>" data-error="<?= lang('Doit.yourEmailRequired'); ?>" required="required" value="<?= old('correo') ?>">
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							<div class="col-md-6">
								<div class="single-form form-group">
									<input type="text" name="telefono" placeholder="<?= lang('Doit.yourPhone'); ?>" data-error="<?= lang('Doit.yourPhoneRequired'); ?>" required="required" value="<?= old('telefono') ?>">
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							<div class="col-md-6">
								<div class="single-form form-group">
									<input type="text" name="ciudad" placeholder="<?= lang('Doit.city'); ?>" data-error="<?= lang('Doit.cityRequired'); ?>" required="required" value="<?= old('ciudad') ?>">
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							<div class="col-md-12">
								<div class="single-form form-group">
									<input type="text" name="asunto" placeholder="<?= lang('Doit.subject'); ?>" data-error="<?= lang('Doit.subjectRequired'); ?>" required="required" value="<?= old('asunto') ?>">
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							<div class="col-md-12">
								<div class="single-form form-group">
									<textarea placeholder="<?= lang('Doit.leaveYourMessage'); ?>" name="mensaje" data-error="<?= lang('Doit.leaveYourMessageRequired'); ?>" required="required"><?= old('mensaje') ?></textarea>
									<div class="help-block with-errors"></div>
								</div> <!-- single form -->
							</div>
							
							<div class="col-md-12">
								<div class="single-form form-group text-center">
									<button type="submit" class="main-btn"><?= lang('Doit.send'); ?></button>
								</div> <!-- single form -->
							</div>
						</div> <!-- row -->
					</form>
				</div> <!-- row -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->