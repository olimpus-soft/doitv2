<?php
echo view('partials/header');
?>
<section id="page-not-found" class="services-area pt-125 pb-130 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center pb-20">
					<h5 class="sub-title mb-15"><?= lang('Doit.hasOcurredError'); ?></h5>
					<h6 class="sub-title mb-15"><?= $statusCode; ?></h6>
					<h2 class="title"><?= lang('Doit.Whoops'); ?></h2>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<?= lang('Doit.prodError'); ?>
			</div>
			<div class="col-lg-12 text-center">
				<a class="main-btn" target="_self" href="<?= base_url('?utm_source=doit&utm_medium=web&utm_campaign=error&utm_term=all&utm_content=' ); ?>">
					<?= lang('Doit.home'); ?>
				</a>
			</div>
		</div>
	</div>
</section>
<!--====== FOOTER PART START ======-->
<footer id="footer" class="footer-area fixed-bottom">
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
<?php
echo view('partials/footer');
?>