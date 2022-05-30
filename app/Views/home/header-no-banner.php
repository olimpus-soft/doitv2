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
								<li class="nav-item">
									<a class="page-scroll" hash="#objetivos" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#objetivos?utm_source=doit&utm_medium=web&utm_campaign=objetivos&utm_term=all&utm_content="><?= lang('Doit.objectives'); ?></a>
								</li>
								<li class="nav-item">
									<a class="page-scroll" hash="#ofertas" href="<?= isset($menuUrl) && $menuUrl == true ? base_url('/') : '';?>#cc?utm_source=doit&utm_medium=web&utm_campaign=ofertas&utm_term=all&utm_content="><?= lang('Doit.offers'); ?></a>
								</li>
								<?php
								if($cntDestinations > 0) { 
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
						<div class="navbar-btn ml-20 d-none d-sm-block">
							<a class="main-btn" href="https://wa.me/<?= str_replace(['+','.',' '], '', CONTACT_PHONE);?>?text=<?= CONTACT_MSG_OFFERS;?>"><i class="lni-whatsapp"></i><?= CONTACT_PHONE;?></a>
						</div>
					</nav> <!-- navbar -->
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- navigation bar -->
</header>

<!--====== HEADER PART ENDS ======-->