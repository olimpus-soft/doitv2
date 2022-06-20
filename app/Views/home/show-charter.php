<!--====== CHARTER PART START ======-->
<?php
	if(isset($charter)) {
		$replaceViewValues = App\Controllers\BaseController::replaceViewValues(); 
		$replaceViewValues->find2Replace[] = '__RAW_BODY__';
		$replaceViewValues->replace2Found[] = rawurlencode($rawBodyEmail);
?>
	<section id="page-charter" class="services-area page-charter-area pt-125 pb-90 gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= $charter->charter_subtitulo; ?></h5>
						<h2 class="title"><?= $charter->charter_titulo; ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->

			<div class="row justify-content-center">
				<div class="col-lg-12 justify-content-center text-justify">
					<p class="pb-30">
						<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $charter->charter_resumen); ?>
					</p>
				</div>
				<div class="col-lg-12 justify-content-center text-center pb-30 pt-30">
					<div class="fb-like" data-href="<?= current_url(); ?>" data-layout="button" data-action="like" data-size="large" data-share="true"></div>
				</div>
				<div class="col-lg-12 justify-content-center text-center">
					<img class="img-fluid img-responsive" src="<?= $charter->charter_image; ?>" alt="<?= $charter->categoria; ?> <?= $charter->charter_titulo; ?>">
				</div>
			</div>

			<?php if(isset($charter->charter_plans) && is_array($charter->charter_plans) && count($charter->charter_plans)) { ?>
			<div class="row justify-content-center white-bg pt-40">
				<div class="col-lg-12 justify-content-center">
					<div class="table-responsive">
						<table class="table thead-dark table-striped table-bordered table-hover">
							<caption><?= lang('Doit.listPlnas');?></caption>
							<?php $row = array_shift($charter->charter_plans); $charter->charter_plans = array_filter($charter->charter_plans);?>
							<thead>
								<tr>
									<?php foreach ($row as $cell) { ?>
										<th scope="col"><?= $cell; ?></th>
									<?php } ?>
								</tr>
							</thead>
							<tbody>
								<?php 
										$fr = 0;
										$frC = 0;
										foreach ($charter->charter_plans as $row) { 
											if(!$row || !isset($row[0]) || !$row[0]) continue;
											//$frC++;
											//if($frC%2===0) {
											//}
											if($fr>4) {
												$fr = 1;
											}
											$fr+=2;
								?>
										<tr class="franja<?=$fr?>">
											<?php foreach ($row as $cell) { ?>
												<td scope="row" style="<?= is_numeric($cell) ? 'text-align: right;' : ''; ?>"><?= is_numeric($cell) ? '$ ' . number_format($cell, 2, ',', '.') : $cell; ?></td>
											<?php } ?>
										</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php } ?>

			<div class="row justify-content-center white-bg pt-40">
				<div class="col-lg-12 justify-content-center">
					<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $charter->charter_description); ?>
				</div>
			</div>

			<?php if(isset($charter->charter_itinerary) && is_array($charter->charter_itinerary) && count($charter->charter_itinerary)) { ?>
			<div class="row justify-content-center gray-bg pt-80">
				<div class="col-lg-12 justify-content-center">
					<div class="table-responsive">
						<table class="table thead-dark table-bordered table-hover">
							<caption><?= lang('Doit.nextDepartures'); ?></caption>
							<?php $row = array_shift($charter->charter_itinerary); $charter->charter_itinerary = array_filter($charter->charter_itinerary);?>
							<thead>
								<tr>
									<?php foreach ($row as $cell) { ?>
										<th scope="col"><?= $cell; ?></th>
									<?php } ?>
								</tr>
							</thead>
							<tbody>
								<?php 
										$fr = 1;
										$frC = 0;
										foreach ($charter->charter_itinerary as $row) { 
											if(!$row || !isset($row[0]) || !$row[0]) continue;
											if($frC > 0 && $frC%2===0) {
												$fr++;
											}
											$frC++;
											if($fr>4) {
												$fr = 1;
											}
								?>
										<tr class="franja<?=$fr?>">
											<?php foreach ($row as $dKey => $cell) { ?>
												<td scope="row" style="<?= $dKey > 1 ? 'text-align: center;' : ''; ?>"><?= $cell; ?></td>
											<?php } ?>
										</tr>
								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php } ?>
			
			<div class="row justify-content-center white-bg pt-40">
				<div class="col-lg-12 justify-content-center">
					<?= str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $charter->charter_conditions); ?>
				</div>
			</div>

			<div class="col-xl-12 justify-content-center text-center docpdf pt-50" id="docpdf"></div>
		</div>
	</section>
<?php
	echo view('home/contact');	
} else {
?>
	<section id="page-not-found" class="services-area pt-125 pb-130 gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= lang('Doit.pageNotFound'); ?></h5>
						<h2 class="title">404</h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<?= lang('Doit.pageNotFoundDesc'); ?>
				</div>
			</div>
		</div>
	</section>
<?php
	header("HTTP/1.1 404 Not Found", true);
}
?>
<!--====== CHARTER PART END ======-->