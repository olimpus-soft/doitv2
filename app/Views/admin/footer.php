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
              <h4 class="card-title mb-0">General</h4>
              <div class="small text-muted">Información Sección Nosotros</div>
            </div>            
          </div>
          <div class="container-fluid">
            <form class="form-horizontal" action="<?= site_url('Admin/update_general');?>" method="post" enctype="multipart/form-data">
                <input class="form-control sr-only" type="hidden" name="footer[data]" value="<?= $footer['data']; ?>">
                <?php if($validation->hasError('footer.data')) {?>
                  <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.data'); ?></div>
                <?php }?>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="razonSocial">Razon Social</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.razonSocial'))?' is-invalid':''; ?>" id="razonSocial" type="text" name="footer[razonSocial]" placeholder="Razon Social de la Empresa" autocomplete="off" value="<?= set_value('footer.razonSocial', @$footer['razonSocial']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.razonSocial')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.razonSocial'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="rif">RIF</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.rif'))?' is-invalid':''; ?>" id="rif" type="text" name="footer[rif]" placeholder="RIF de la Empresa" autocomplete="off" value="<?= set_value('footer.rif', @$footer['rif']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.rif')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.rif'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="address">Dirección Fiscal</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.address'))?' is-invalid':''; ?>" id="address" type="text" name="footer[address]" placeholder="Direccion fiscal de la empresa" autocomplete="off" value="<?= set_value('footer.address', @$footer['address']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.address')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.address'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">Teléfono</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.phone'))?' is-invalid':''; ?>" id="phone" type="text" name="footer[phone]" placeholder="Teléfono de Contacto" autocomplete="off" value="<?= set_value('footer.phone', @$footer['phone']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.phone')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.phone'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Correo Eletrónico</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.email'))?' is-invalid':''; ?>" id="email" type="email" name="footer[email]" placeholder="Correo eletrónico de contacto" autocomplete="off" value="<?= set_value('footer.email', @$footer['email']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.email')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.email'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="facebook">FaceBok</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.facebook'))?' is-invalid':''; ?>" id="facebook" type="text" name="footer[facebook]" placeholder="URL de Facebook" autocomplete="off" value="<?= set_value('footer.facebook', @$footer['facebook']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.facebook')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.facebook'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="twitter">Twitter</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.twitter'))?' is-invalid':''; ?>" id="twitter" type="text" name="footer[twitter]" placeholder="URL de Twitter" autocomplete="off" value="<?= set_value('footer.twitter', @$footer['twitter']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.twitter')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.twitter'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="instagram">Instagram</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.instagram'))?' is-invalid':''; ?>" id="instagram" type="text" name="footer[instagram]" placeholder="URL de Instagram" autocomplete="off" value="<?= set_value('footer.instagram', @$footer['instagram']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.instagram')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.instagram'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="google">Google</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('footer.google'))?' is-invalid':''; ?>" id="google" type="text" name="footer[google]" placeholder="URL/Perfil de Google" autocomplete="off" value="<?= set_value('footer.google', @$footer['google']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('footer.google')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.google'); ?></div>
                  <?php }?>
                </div>

                <div class="controls col-md-12 rflex">
                  <label for="uploadThumb">Logo</label>
                  <div class="fileupload fileupload-new<?= ($validation->hasError('footer.image_url'))?' is-invalid':''; ?>" data-provides="fileupload">
                    <label for="uploadThumb" class="fileupload-new thumbnail logo">
                      <img src="<?php echo $footer['image_url']?? base_url('images/upload.png'); ?>" alt="empresa" class="img img-fluid img-responsive" id="thumbnailPreview"/>
                    </label>
                    <input type="file" id="uploadThumb" name="uploadThumb" class="default" style="display: none;"/>
                    <input class="form-control" type="text" name="footer[image_url]" id="image_url" value="<?= $footer['image_url'] ?? ''; ?>">
                    <p class="help-block"></p>
                    <?php if($validation->hasError('footer.image_url')) {?>
                      <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('footer.image_url'); ?></div>
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