<?php
echo view('admin/partitials/header');
?>
      
<main class="c-main">
  <div class="container-fluid">
    <div class="fade-in">
      <?php if (session('error')) : ?>
        <div class="alert alert-danger alert-dismissible">
            <?= session('error') ?>
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        </div>
      <?php endif ?>
      <?php if (session('success')) : ?>
        <div class="alert alert-success alert-dismissible">
            <?= session('success') ?>
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        </div>
      <?php endif ?>
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <h4 class="card-title mb-0">Caracteristicas</h4>
              <div class="small text-muted">Nuestras Principales Caracteristicas</div>
            </div>            
          </div>
          <div class="container-fluid">
            <form class="form-horizontal" action="<?= site_url('Admin/update_features');?>" method="post" enctype="multipart/form-data">
                <input class="form-control sr-only" type="hidden" name="features[data]" value="<?= $features['data']; ?>">
                <?php if($validation->hasError('features.data')) {?>
                  <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.data'); ?></div>
                <?php }?>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="title">Titulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.title'))?' is-invalid':''; ?>" id="title" type="text" name="features[title]" placeholder="Titulo princpal de la Seccion" autocomplete="off" value="<?= set_value('features.title', @$features['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="subtitle">Subtitulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.subtitle'))?' is-invalid':''; ?>" id="subtitle" type="text" name="features[subtitle]" placeholder="Subtitulo de la Sección" autocomplete="off" maxlength="200" value="<?= set_value('features.subtitle', @$features['subtitle']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.subtitle')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.subtitle'); ?></div>
                  <?php }?>
                </div>

                <!-- FEATURES -->
                <div class="form-group col-md-4">
                  <label for="titlec1">Titulo Caracteristica 1</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.0.title'))?' is-invalid':''; ?>" id="titlec1" type="text" name="features[features][0][title]" placeholder="Titulo" autocomplete="off" maxlength="50" value="<?= set_value('features.features.0.title', @$features['features'][0]['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.0.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.0.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-8">
                  <label for="titled1">Desc. Caracteristica 1</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.0.description'))?' is-invalid':''; ?>" id="titled1" type="text" name="features[features][0][description]" placeholder="Descripción" autocomplete="off" maxlength="100" value="<?= set_value('features.features.0.description', @$features['features'][0]['description']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.0.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.0.title'); ?></div>
                  <?php }?>
                </div>

                <div class="form-group col-md-4">
                  <label for="titlec2">Titulo Caracteristica 2</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.1.title'))?' is-invalid':''; ?>" id="titlec2" type="text" name="features[features][1][title]" placeholder="Titulo" autocomplete="off" maxlength="50" value="<?= set_value('features.features.1.title', @$features['features'][1]['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.1.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.1.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-8">
                  <label for="titled2">Desc. Caracteristica 2</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.1.description'))?' is-invalid':''; ?>" id="titled2" type="text" name="features[features][1][description]" placeholder="Descripción" autocomplete="off" maxlength="50" value="<?= set_value('features.features.1.description', @$features['features'][1]['description']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.1.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.1.title'); ?></div>
                  <?php }?>
                </div>

                <div class="form-group col-md-4">
                  <label for="titlec3">Titulo Caracteristica 3</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.2.title'))?' is-invalid':''; ?>" id="titlec3" type="text" name="features[features][2][title]" placeholder="Titulo" autocomplete="off" maxlength="50" value="<?= set_value('features.features.2.title', @$features['features'][2]['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.2.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.2.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-8">
                  <label for="titled3">Desc. Caracteristica 3</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.2.description'))?' is-invalid':''; ?>" id="titled3" type="text" name="features[features][2][description]" placeholder="Descripción" autocomplete="off" maxlength="50" value="<?= set_value('features.features.2.description', @$features['features'][2]['description']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.2.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.2.title'); ?></div>
                  <?php }?>
                </div>

                <div class="form-group col-md-4">
                  <label for="titlec4">Titulo Caracteristica 4</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.3.title'))?' is-invalid':''; ?>" id="titlec4" type="text" name="features[features][3][title]" placeholder="Titulo" autocomplete="off" maxlength="50" value="<?= set_value('features.features.3.title', @$features['features'][3]['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.3.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.3.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-8">
                  <label for="titled4">Desc. Caracteristica 4</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('features.features.3.description'))?' is-invalid':''; ?>" id="titled4" type="text" name="features[features][3][description]" placeholder="Descripción" autocomplete="off" maxlength="50" value="<?= set_value('features.features.3.description', @$features['features'][3]['description']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('features.features.3.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.features.3.title'); ?></div>
                  <?php }?>
                </div>

                <!-- END FEATURES -->

                <div class="controls col-md-12 rflex">
                  <label for="uploadThumb">Imagen 850x700 (png | jpg)</label>
                  <div class="fileupload fileupload-new<?= ($validation->hasError('features.image_url'))?' is-invalid':''; ?>" data-provides="fileupload">
                    <label for="uploadThumb" class="fileupload-new thumbnail">
                      <img src="<?php echo $features['image_url']?? base_url('images/upload.png'); ?>" alt="empresa" class="img img-fluid img-responsive" id="thumbnailPreview"/>
                    </label>
                    <input type="file" id="uploadThumb" name="uploadThumb" class="default" style="display: none;" accept=".jpg, .png"/>
                    <input class="form-control" type="text" name="image_url" readonly="" id="image_url" value="<?= $features['image_url'] ?? ''; ?>">
                    <p class="help-block"></p>
                    <?php if($validation->hasError('features.image_url')) {?>
                      <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('features.image_url'); ?></div>
                    <?php }?>
                    <?php if($validation->hasError('uploadThumb')) {?>
                      <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('uploadThumb'); ?></div>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-success" type="submit"> Enviar</button>
                <button class="btn btn-danger pull-right" type="reset"> Restablecer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.card-->
    </div>
  </div>
</main>
<?php
echo view('admin/partitials/footer');
?>