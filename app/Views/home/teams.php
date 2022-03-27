<!--====== TEAM PART START ======-->
<?php
	if(isset($equipos) && is_array($equipos) && count($equipos) > 0) {
?>
	<section id="team" class="team-area pt-125 pb-130 gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= lang('Doit.oursteam'); ?></h5>
						<h2 class="title"><?= lang('Doit.teamsubtitle'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
			<div class="row">
				<?php
					foreach ($equipos as &$integra) {
				?>
				<div class="col-lg-4 col-md-6 col-sm-6" id="team-id-<?= $integra->id; ?>">
					<div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
						<div class="team-image">
							<img src="<?= $integra->equipo_image; ?>" alt="<?= $integra->equipo_titulo; ?>">
						</div>
						<div class="team-content">
							<h4 class="team-name"><a href="#"><?= $integra->equipo_titulo; ?></a></h4>
							<span class="sub-title"><?= $integra->equipo_subtitulo; ?></span>
						</div>
					</div> <!-- single team -->
				</div>
				<?php
					} //foreach ($equipos as &$integra)
				?>
			</div> <!-- row -->
		</div> <!-- container -->
	</section>
<?php
	} //if(isset($equipos) && is_array($equipos) && count($equipos) > 0)
?>
<!--====== TEAM PART ENDS ======-->