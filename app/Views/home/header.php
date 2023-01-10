<!--====== HEADER PART START ======-->

<header id="inicio" class="header-area pt-100">

	<div class="shape header-shape-one">
		<img src="<?= base_url('assets/images/banner/shape/shape-1.png');?>" alt="shape">
	</div> <!-- header shape one -->

	<div class="shape header-shape-tow animation-one">
		<img src="<?= base_url('assets/images/banner/shape/shape-2.png');?>" alt="shape">
	</div> <!-- header shape tow -->

	<div class="shape header-shape-three animation-one">
		<img src="<?= base_url('assets/images/banner/shape/shape-3.png');?>" alt="shape">
	</div> <!-- header shape three -->

	<div class="shape header-shape-fore">
		<img src="<?= base_url('assets/images/banner/shape/shape-4.png');?>" alt="shape">
	</div> <!-- header shape three -->

	<div class="navigation-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg">
						<a class="navbar-brand" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#inicio">
							<img src="<?= base_url('assets/images/logo.png');?>" alt="Logo">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="toggler-icon"></span>
							<span class="toggler-icon"></span>
							<span class="toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul id="nav" class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="page-scroll" hash="#inicio" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#inicio?utm_source=doit&utm_medium=web&utm_campaign=inicio&utm_term=all&utm_content="><?= lang('Doit.home'); ?></a>
								</li>
								<li class="nav-item">
									<a class="page-scroll" hash="#nosotoros" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#nosotoros?utm_source=doit&utm_medium=web&utm_campaign=nosotoros&utm_term=all&utm_content="><?= lang('Doit.us'); ?></a>
								</li>
								<!--li class="nav-item">
									<a class="page-scroll" data-aos="fade-up" target="_self" href="<?= base_url('disfruta-nuestro-charter?utm_source=doit&utm_medium=web&utm_campaign=disfruta-nuestro-charter&utm_term=all&utm_content=');?>"><?= lang('Doit.charter'); ?></a>
								</li-->
								<li class="nav-item">
									<a class="page-scroll" hash="#objetivos" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#objetivos?utm_source=doit&utm_medium=web&utm_campaign=objetivos&utm_term=all&utm_content="><?= lang('Doit.objectives'); ?></a>
								</li>
								<?php
								if(isset($cntOffers) && $cntOffers > 0) { 
								?> 
								<li class="nav-item">
									<a class="page-scroll" hash="#ofertas" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#ofertas?utm_source=doit&utm_medium=web&utm_campaign=ofertas&utm_term=all&utm_content="><?= lang('Doit.offers'); ?></a>
								</li>
								<?php 
								}
								?>
								<?php
								if(isset($cntDestinations) && $cntDestinations > 0) { 
								?> 
									<li class="nav-item">
										<a class="" href="<?= base_url('nuestros-destinos?utm_source=doit&utm_medium=web&utm_campaign=nuestros-destinos&utm_term=all&utm_content=');?>"><?= lang('Doit.destinations'); ?></a>
									</li>
								<?php 
								}
								?>
								<li class="nav-item">
									<a class="page-scroll" hash="#contacto" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#contacto?utm_source=doit&utm_medium=web&utm_campaign=contacto&utm_term=all&utm_content="><?= lang('Doit.contact'); ?></a>
								</li>
							</ul> <!-- navbar nav -->
						</div>
						<div class="navbar-btn ml-20 d-sm-block">
							<a class="main-btn" href="https://wa.me/<?= str_replace(['+','.',' '], '', CONTACT_PHONE);?>?text=<?= CONTACT_MSG_OFFERS;?>"><i class="lni-whatsapp"></i><span class="d-none d-md-inline"><?= CONTACT_PHONE;?></span></a>
						</div>
					</nav> <!-- navbar -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- navigation bar -->
	<?php
	if((isset($noBanner) && $noBanner === false)) { 
	?> 
	<div class="header-banner d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-9 col-sm-10">
					<div class="banner-content"> 
						<h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s"><?= SUBTITLEAPP;?></h4>
						<h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span><?= TITLEAPP_BASE; ?></span> <?= TITLEAPP_TAILS; ?></h1>
						<a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#contacto"><?= lang('Doit.contactus'); ?></a><br>
						<a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="<?= base_url('files/'.strrev(str_replace('=', '', base64_encode(RNT_FILE))));?>"><?= RNT_TITLE;?></a>
					</div> <!-- banner content -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="banner-image bg_cover" style="background-image: url(<?= base_url('assets/images/banner/banner-image-'.(date('j')).'.jpg');?>)"></div>
	</div> <!-- header banner -->

	<?php 
	}
	?>
</header>

<!--====== HEADER PART ENDS ======-->