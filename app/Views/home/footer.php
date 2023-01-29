<!--====== FOOTER PART START ======-->
<footer id="footer" class="footer-area">
	<div class="footer-widget pt-30 pb-30">
		<div class="container">
			<div class="row" itemscope itemtype="https://schema.org/TravelAgency">
				<div class="col-lg-3 col-md-4 col-sm-8">
					<div class="footer-logo mt-20">
						<a href="#">
							<img itemprop="logo" src="<?= base_url('assets/images/logo.png');?>" alt="Logo">
							<img class="d-none" itemprop="image" src="<?= base_url('assets/images/'. LOGOCOMERCIAL);?>" alt="LogoComercial">
						</a>
						<ul class="footer-info">
							<li>
								<div class="single-info">
									<div class="info-icon">
										<i class="lni-whatsapp"></i>
									</div>
									<div class="info-content">
										<a target="_blank" href="https://wa.me/<?= str_replace(['+','.',' '], '', CONTACT_PHONE);?>?text=<?= CONTACT_MSG_OFFERS;?>"><span class="" itemprop="telephone"><?= CONTACT_PHONE;?></span></a>
										<span class="d-none" itemprop="faxNumber"><?= CONTACT_PHONE;?></span>
									</div>
								</div> <!-- single info -->
							</li>
							<li>
								<div class="single-info">
									<div class="info-icon">
										<i class="lni-envelope"></i>
									</div>
									<div class="info-content">
										<p><a target="_blank" href="mailto:<?= CONTACT_EMAIL; ?>?subject=<?= CONTACT_MSG_OFFERS;?>" target="_blank" itemprop="email"><?= CONTACT_EMAIL; ?></a></p>
									</div>
								</div> <!-- single info -->
							</li>
							<li>
								<div class="single-info">
									<div class="info-icon">
										<i class="lni-map"></i>
									</div>
									<div class="info-content" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
										<p><a target="_blank" href="https://www.google.com/maps/search/<?= COMPANY_ADDRESS;?>, <?= COMPANY_LOCALITY;?>, <?= COUNTRY_NAME;?>" target="_blank"><span itemprop="streetAddress"><?= COMPANY_ADDRESS;?></span>, <span itemprop="addressLocality"><?= COMPANY_LOCALITY;?></span>, <span itemprop="addressRegion"><?= COUNTRY_NAME;?></span>, <span itemprop="postalCode"><?= COMPANY_POSTAL_CODE;?></span></a></p>
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
						<div itemprop="paymentAccepted" style="display: none;">cash, check, credit card, invoice, paypal</div>
						<meta itemprop="openingHours" style="display: none;" datetime="Mo,Tu,We,Th,Fr,Sa 08:00-17:00" />
						<div itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo" style="display: none;">
							<meta itemprop="latitude" content="<?= COMPANY_LAT;?>" />
							<meta itemprop="longitude" content="<?= COMPANY_LON;?>" />

						</div>
					</div> <!-- footer logo -->
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-link mt-20">
						<div class="f-title">
							<h4 class="title"><?= lang('Doit.linksEscentials'); ?></h4>
						</div>
						<ul class="mt-15">
							<li class="d-none"><a target="_self" href="<?= base_url();?>" itemprop="url"><?= base_url(); ?></a></li>
							<li><a target="_self" href="<?= base_url('sobre-nosotros?utm_source=doit&utm_medium=web&utm_campaign=about-us&utm_term=about-us&utm_content=');?>"><?= lang('Doit.about_us'); ?></a></li>
							<li><a target="_self" href="<?= base_url('todas-las-ofertas?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=');?>"><?= lang('Doit.offers'); ?></a></li>
							<?php
							if(isset($cntDestinations) && $cntDestinations > 0) { 
							?>
								<li><a target="_self" href="<?= base_url('nuestros-destinos?utm_source=doit&utm_medium=web&utm_campaign=nuestros-destinos&utm_term=all&utm_content=');?>"><?= lang('Doit.destinations'); ?></a></li>
							<?php 
							}
							?>
							<li><div class="fb-like" data-href="https://www.facebook.com/doitviajesyturismo/" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div></li>
							<li><div class="fb-share-button" data-href="https://www.facebook.com/doitviajesyturismo/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fdoitviajesyturismo%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div></li>
							<li><div class="fb-share-button" data-uri="https://www.facebook.com/hashtag/doitviajesyturismo/" data-lazy="true" data-size="small"></div></li>
							<li><a href="https://twitter.com/doitviajesytur?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-dnt="true" data-show-count="false">Follow @doitviajesytur</a></li>
							<li><a href="https://twitter.com/intent/tweet?screen_name=doitviajesytur&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-related="olimpussoft,mmoralescoterio" data-dnt="true" data-show-count="false">Tweet to @doitviajesytur</a></li>
							<li><a href="https://twitter.com/intent/tweet?button_hashtag=doitviajesytur&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-related="olimpussoft,mmoralescoterio" data-dnt="true" data-show-count="false">Tweet #doitviajesytur</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-6">
					<div class="footer-link mt-20">
						<div class="f-title">
							<h4 class="title" itemprop="name"><?= COMERCIALNAME; ?></h4>
						</div>
						<p class="mt-15 text-justify" itemprop="description"><?= COMPANY_LEGAL_DESC; ?></p>
						<span itemprop="priceRange" style="display: none;">$$$$$</span>
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
					</div> <!-- copyright -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- copyright-area -->
</footer>
<!--====== FOOTER PART ENDS ======-->