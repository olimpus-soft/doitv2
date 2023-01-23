<!--====== OFFERS PART START ======-->
<?php
	if(isset($categories) && is_array($categories) && count($categories) > 0 && (isset($cntOffers) && $cntOffers > 0)) {
?>
	<section id="categories" class="project-area pt-125 pb-130">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center pb-50">
						<h5 class="sub-title mb-15"><?= lang('Doit.oursh'); ?></h5>
						<h2 class="title"><?= lang('Doit.offers'); ?></h2>
					</div> <!-- section title -->
				</div>
			</div> <!-- row -->
		</div>

		<div class="row">
      <div class="col-lg-10 mx-auto">
        <ul style="list-style: disc;">
        <?php
        $i = 0;
        foreach ($categories as &$category) {
          if($category->cntOfertas > 0) {
        ?>
          <li style="padding:10px 15px;">
            <span><?= $category->categoria; ?></span>
            <ul style="list-style: square;margin-left: 30px;">
              <?php
              $j = 0;
              foreach ($category->ofertas as &$oferta) {
              ?>
              <li style="padding:10px 25px;">
                <a href="<?= $oferta->oferta_file; ?>?utm_source=doit&utm_medium=web&utm_campaign=todas-las-ofertas&utm_term=all&utm_content=<?= $oferta->categoria_slug .'/'. $oferta->oferta_slug ; ?>" class="d-block w-100 d-sm-inline-block btn-light btn-link">
                  <?= $oferta->oferta_titulo; ?>                    
                </a>
              </li>
              <?php
              }
              ?>
            </ul>
          </li>
        <?php
          }
        }
        ?>
        </ul>
      </div>
    </div>
	</section>
<?php
	} //if(isset($categories) && is_array($categories) && count($categories) > 0)
?>

<!--====== OFFERS PART ENDS ======-->