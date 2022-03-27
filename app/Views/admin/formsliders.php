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
              <h4 class="card-title mb-0"><?= $isNew ? 'Agregar':'Actualizar';?> Slider</h4>
              <div class="small text-muted">Imagenes del slider Principal</div>
            </div>            
          </div>
          <div class="container-fluid">
            <form class="form-horizontal" action="<?= site_url( ($isNew ? 'Admin/create_slider':'Admin/update_slider'));?>" method="post" enctype="multipart/form-data">
              <?php if(!$isNew) { ?>
                <input type="hidden" name="data" value="<?= hideData(myencrypt($id)); ?>">
                <input type="hidden" name="order" value="<?= $order ?? 0; ?>">
                
              <?php } ?>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="title">Titulo</label>
                  <div class="input-group">
                    <input class="form-control" id="title" type="text" name="title" placeholder="Titulo princpal del Slider" autocomplete="off" maxlength="100" value="<?= $title ?? ''; ?>" required>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label for="description">Descripción</label>
                  <div class="input-group">
                    <input class="form-control" id="description" type="text" name="description" placeholder="Descripción del Slider" autocomplete="off" value="<?= $description ?? ''; ?>" maxlength="200" required>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label for="enlace">Enlace</label>
                  <div class="input-group">
                    <input class="form-control" id="enlace" type="text" name="enlace" placeholder="Escriba o pegue el enlace a donde desea dirigir la accion, sino deje en blanco" autocomplete="off" maxlength="200" value="<?= $enlace ?? ''; ?>">
                  </div>
                </div>
                <div class="controls col-md-12 rflex">
                  <label for="uploadThumb">Imagen 1600x550 (png | jpg)</label>
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <label for="uploadThumb" class="fileupload-new thumbnail">
                      <img src="<?php echo !empty($image_url) ? $image_url: base_url('assets/images/upload.png'); ?>" alt="slider" class="img img-fluid img-responsive" id="thumbnailPreview"/>
                    </label>
                    <input type="file" id="uploadThumb" name="uploadThumb" class="default" style="display: none;" accept=".jpg, .png"/>
                    <input class="form-control" type="text" name="image_url" id="image_url" value="<?= $image_url ?? ''; ?>">
                    <p class="help-block"></p>
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
<?php if(!$isNew) { ?>
  <script type="text/javascript" charset="utf-8" async defer>
    $('#image_file').on('change', function(evt) {
      $('#image_url').val('');
    });
  </script>
<?php } ?>
<?php
echo view('admin/partitials/footer');
?>