<?php
echo view('partials/header');
echo view('partials/preloader');
	echo view('home/header');
	?>
	<?php
	if($categories && is_array($categories) && count($categories) > 0 ) {
	$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); ?>
	<section id="page-all-offers-categories" class="services-area ofertas-categories-area offers-categories pt-20 pb-10 gray-bg">
		<div class="container">
			<div class="row justify-content-center"> 
<?php
	foreach ($categories as $category) {
?>
				<!--====== <?= $category->categoria; ?> PART START ======-->
				<div class="col-sm-6 pb-20 pt-20">
			    <div class="card text-center oferta" id="oferta-id-<?= $category->id; ?>">
			      <div class="card-body">
			        <h5 class="card-title"><?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $category->categoria); ?></h5>
			        <p class="card-text"><?= !empty($category->categoria_descripcion)?'<span class="project-subtitle">'.str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $category->categoria_descripcion).'</span>':''; ?></p>
			        <a target="_self" href="<?= base_url('oferta/'. $category->categoria_slug . '?utm_source=doit&utm_medium=web&utm_campaign=ofertas-categories&utm_term=all&utm_content='. $category->categoria_slug ); ?>" class="main-btn"><?= lang('Doit.seeMore'); ?></a>
			      </div>
			    </div>
			  </div>
				<!--====== <?= $category->categoria; ?> PART ENDS ======-->
<?php
	} ?>
			</div>
		</div>
		<div class="container col-lg-12 text-center">
			<a class="main-btn mt-25" data-aos="fade-left" target="_self" href="<?= base_url('todas-las-ofertas?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=');?>"><?= lang('Doit.all_offers'); ?></a>
		</div>
	</section>
<?php
	} else {
 	echo view('partials/notFound');
	}
	?>

	<?php
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