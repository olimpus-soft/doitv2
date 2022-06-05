<!--====== SERVICES PART START ======-->
<?php
	if(isset($objetivos) && is_array($objetivos) && count($objetivos) > 0) {
?>
	<section id="objetivos" class="services-area pt-125 pb-130 gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= lang('Doit.ours'); ?></h5>
						<h2 class="title"><?= lang('Doit.objectives'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
			<div class="row justify-content-center">
<?php
		foreach ($objetivos as &$objetivo) {
?>
				<div class="col-lg-4 col-md-6 col-sm-8" id="objetivo-id-<?= $objetivo->id; ?>">
					<div class="single-services text-center mt-30 wow fadeInUp" data-aos="zoom-in-down" data-aos-duration="500" data-aos-easing="ease-in-sine" >
						<div class="services-icon">
							<i class="<?= $objetivo->icon; ?>"></i>
						</div>
						<div class="services-content mt-15">
							<h4 class="services-title"><?= $objetivo->title; ?></h4>
							<?php
								if(isset($objetivo->details) && is_array($objetivo->details) && count($objetivo->details) > 0) {
							?>
							<p class="mt-20">
								<ul>
									<?php
										foreach ($objetivo->details as &$detail) {
									?>
									<li><?= $detail->descripcion; ?></li><hr>
									<?php
										} //foreach ($objetivo->details as &$detail) {
									?>
								</ul>
							</p>
							<?php
								} //if(isset($objetivo->details) && is_array($objetivo->details) && count($objetivo->details) > 0) {
							?>
						</div>
					</div> <!-- single services -->
				</div>
<?php
		} //foreach ($objetivos as &$objetivo) {
?>
			</div> <!-- row -->
		</div> <!-- container -->
	</section>
<?php
	} //if(isset($objetivos) && is_array($objetivos) && count($objetivos) > 0)
?>
<!--====== SERVICES PART ENDS ======-->