<!--====== Galeria PART START ======-->
<?php
$images = [];
$basePath = BASEPATH . 'bucket' . DIRECTORY_SEPARATOR;
helper('filesystem');
  $files = get_filenames($basePath . 'com-relation' . DIRECTORY_SEPARATOR, true);
  foreach ($files as $file) {
    if(file_exists($file) && is_file($file)) {
      $mime = mime_content_type($file);
      if(strstr($mime, 'image/')) {
        $images[] = base_url('bucketC/'.str_replace($basePath, '', $file));
      }
    }
  }	
?>
	<section id="commertials-relations" class="about-area pt-20 pb-20">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-20">
						<h5 class="sub-title mb-15"><?= lang('Doit.oursh'); ?></h5>
						<h2 class="title"><?= lang('Doit.commRelations'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
		</div>
		<div class="container">
			<div class="row justify-content-center hyperlink">
				<div id="relationscomms" class="col-lg-12 slide-logo-wrapper owl-carousel owl-theme" style="">
          <?php 
              foreach ($images as $key => $value) {
                  echo '<div class="logo-item"><img src="'.$value.'" alt="'.basename($value).'" class="link img-responsive"/></div>'.PHP_EOL;
              }
          ?>
				</div>
			</div>
		</div>
	</section>
<?php
	
?>

<!--====== Galeia PART ENDS ======-->