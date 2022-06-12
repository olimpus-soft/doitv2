<?php
echo view('partials/header');
?>
	<!--====== PRELOADER PART START ======-->
	<div class="preloader">
		<div class="loader_34">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<img src="<?= base_url('assets/images/favicon.png');?>" style="max-width: 80%; margin-top: 12%;" alt="Logo Loader">
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--====== PRELOADER ENDS START ======-->

	

	<?php
	echo view('home/header');
	echo view('home/about');
	echo view('home/services');
	if(isset($categories) && is_array($categories) && count($categories)) {
		echo view('home/categories');
	}
	if(isset($ofertas) && is_array($ofertas) && count($ofertas)) {
		echo view('home/offers');
	}
	//echo view('home/teams');

	if(isset($agents) && is_array($agents) && count($agents)) {
		echo view('home/agents');
	}
	if(isset($news) && is_array($news) && count($news)) {
		echo view('home/news');
	}
	echo view('home/contact');

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