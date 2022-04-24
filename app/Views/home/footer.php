<!--====== FOOTER PART START ======-->
<footer id="footer" class="footer-area">
	<div class="footer-widget pt-80 pb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-8">
					<div class="footer-logo mt-50">
						<a href="#">
							<img src="<?= base_url('assets/images/logo.png');?>" alt="Logo">
						</a>
						<ul class="footer-info">
							<li>
								<div class="single-info">
									<div class="info-icon">
										<i class="lni-whatsapp"></i>
									</div>
									<div class="info-content">
										<a target="_blank" href="https://wa.me/<?= str_replace(['+','.',' '], '', CONTACT_PHONE);?>?text=<?= CONTACT_MSG_OFFERS;?>"><?= CONTACT_PHONE;?></a>
									</div>
								</div> <!-- single info -->
							</li>
							<li>
								<div class="single-info">
									<div class="info-icon">
										<i class="lni-envelope"></i>
									</div>
									<div class="info-content">
										<p><a target="_blank" href="mailto:<?= CONTACT_EMAIL; ?>?subject=<?= CONTACT_MSG_OFFERS;?>" target="_blank"><?= CONTACT_EMAIL; ?></a></p>
									</div>
								</div> <!-- single info -->
							</li>
							<li>
								<div class="single-info">
									<div class="info-icon">
										<i class="lni-map"></i>
									</div>
									<div class="info-content">
										<p><a target="_blank" href="https://www.google.com/maps/search/<?= COMPANY_ADDRESS;?>, <?= COMPANY_LOCALITY;?>, <?= COUNTRY_NAME;?>" target="_blank"><?= COMPANY_ADDRESS;?>, <?= COMPANY_LOCALITY;?>, <?= COUNTRY_NAME;?></a></p>
									</div>
								</div> <!-- single info -->
							</li>
						</ul>
						<ul class="footer-social mt-20">
							<li><a target="_blank" href="https://www.facebook.com/<?= ltrim(CONTACT_FB, '@');?>"><i class="lni-facebook-filled"></i></a></li>
							<li><a target="_blank" href="https://www.twitter.com/<?= ltrim(CONTACT_TW, '@');?>"><i class="lni-twitter-original"></i></a></li>
							<li><a target="_blank" href="https://www.google.com/search?q=Do+It+Viajes+y+Turismo&oq=Do+It+Viajes+y+Turismo%20site:doitviajesyturismo.com"><i class="lni-google"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/<?= ltrim(CONTACT_IM, '@');?>"><i class="lni-instagram"></i></a></li>
						</ul>
					</div> <!-- footer logo -->
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-link mt-45">
						<div class="f-title">
							<h4 class="title"><?= lang('Doit.linksEscentials'); ?></h4>
						</div>
						<ul class="mt-15">
							<li><a target="_self" href="<?= base_url('sobre-nosotros?utm_source=doit&utm_medium=web&utm_campaign=about-us&utm_term=about-us&utm_content=');?>"><?= lang('Doit.about_us'); ?></a></li>
							<li><a target="_self" href="<?= base_url('todas-las-ofertas?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=');?>"><?= lang('Doit.offers'); ?></a></li>
							<?php
							if($cntDestinations > 0) { 
							?>
								<li><a target="_self" href="<?= base_url('nuestros-destinos?utm_source=doit&utm_medium=web&utm_campaign=nuestros-destinos&utm_term=all&utm_content=');?>"><?= lang('Doit.destinations'); ?></a></li>
							<?php 
							}
							?>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-6">
					<div class="footer-link mt-45">
						<div class="f-title">
							<h4 class="title"><?= COMERCIALNAME; ?></h4>
						</div>
						<p class="mt-15 text-justify"><?= COMPANY_LEGAL_DESC; ?>
						</p>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- footer widget -->
	<div class="copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright text-center">
						<p><?= lang('Doit.designed_by'); ?> <a target="_blank" href="https://olimpussoft.com" rel="follow">olimpussoft.com</a> &copy; <?= lang('Doit.since'); ?> 2019 - <?= date('Y');?></p>
						<p>Renderizado en {elapsed_time} segundos</p>
					</div> <!-- copyright -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- copyright-area -->
</footer>
<!--====== FOOTER PART ENDS ======-->