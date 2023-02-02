<?php
echo view('partials/header');

	echo view('partials/preloader');
	echo view('home/header');
	echo view('home/about');
	if(isset($news) && is_array($news) && count($news)) {
		echo view('home/news');
	}
	if(isset($categories) && is_array($categories) && count($categories)) {
		echo view('home/categories');
	}
	if(isset($ofertas) && is_array($ofertas) && count($ofertas)) {
		echo view('home/offers');
	}

	/**
	 * Pendiente por desarrollar destinos en principal
	 */
	//echo view('home/destinations');
	
	echo view('home/services');

	echo view('home/social-section');

	//echo view('home/teams');

	if(isset($agents) && is_array($agents) && count($agents)) {
		echo view('home/agents');
	}
	echo view('home/contact');

	echo view('home/galeria');

	echo view('home/commercial-relations');

	echo view('home/footer');
	?>


	<!--====== BACK TO TOP PART START ======-->

	<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

	<!--====== BACK TO TOP PART ENDS ======-->

	<!--====== PART START ======-->

	<!--
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-lg-"></div>
			</div>
		</div>
	</section>
-->

	<!--====== PART ENDS ======-->


	<!-- row -->
<?php
echo view('partials/footer');
?>