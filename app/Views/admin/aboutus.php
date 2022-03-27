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
              <h4 class="card-title mb-0">Nosotros</h4>
              <div class="small text-muted">Información Sección Nosotros</div>
            </div>            
          </div>
          <div class="container-fluid">
            <form class="form-horizontal" action="<?= site_url('Admin/update_about');?>" method="post" enctype="multipart/form-data">
                <input class="form-control sr-only" type="hidden" name="about[data]" value="<?= $about['data']; ?>">
                <?php if($validation->hasError('about.data')) {?>
                  <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('about.data'); ?></div>
                <?php }?>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="title">Titulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('about.title'))?' is-invalid':''; ?>" id="title" type="text" name="about[title]" placeholder="Titulo princpal de la Seccion" autocomplete="off" value="<?= set_value('about.title', @$about['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('about.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('about.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="subtitle">Subtitulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('about.subtitle'))?' is-invalid':''; ?>" id="subtitle" type="text" name="about[subtitle]" placeholder="Subtitulo de la Sección" autocomplete="off" maxlength="200" value="<?= set_value('about.subtitle', @$about['subtitle']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('about.subtitle')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('about.subtitle'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="title2">Titulo Secundario</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('about.title2'))?' is-invalid':''; ?>" id="title2" type="text" name="about[title2]" placeholder="Titulo Secundario" autocomplete="off" maxlength="50" value="<?= set_value('about.title2', @$about['title2']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('about.title2')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('about.title2'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="about">Reseña</label>
                  <div class="input-group">
                    <textarea class="form-control countChars<?= ($validation->hasError('about.about'))?' is-invalid':''; ?>" id="about" name="about[about]" placeholder="Reseña o descripción" rows="4" autocomplete="off" maxlength="1000" required><?= set_value('about.about', @$about['about']??''); ?></textarea>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('about.about')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('about.about'); ?></div>
                  <?php }?>
                </div>
                <div class="controls col-md-12 rflex">
                  <label for="uploadThumb">Imagen 460x310 (jpg | png)</label>
                  <div class="fileupload fileupload-new<?= ($validation->hasError('about.image_url'))?' is-invalid':''; ?>" data-provides="fileupload">
                    <label for="uploadThumb" class="fileupload-new thumbnail">
                      <img src="<?php echo $about['image_url']?? base_url('images/upload.png'); ?>" alt="empresa" class="img img-fluid img-responsive" id="thumbnailPreview"/>
                    </label>
                    <input type="file" id="uploadThumb" name="uploadThumb" class="default" style="display: none;" accept=".jpg, .png"/>
                    <input class="form-control" type="text" name="image_url" id="image_url" value="<?= $about['image_url'] ?? ''; ?>">
                    <p class="help-block"></p>
                    <?php if($validation->hasError('about.image_url')) {?>
                      <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('about.image_url'); ?></div>
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