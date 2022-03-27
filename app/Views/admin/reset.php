<?php
echo view('admin/partitials/header_auth');
?>
<div class="container">
  <div class="row justify-content-center">
    <?= $validation->listErrors() ?>
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
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            <form class="" action="<?= site_url('Auth/Set-New-Password');?>" method="post">
              <h2>Restablecer Contraseña</h2>
              <p class="text-muted">Ingresa una contraseña Nueva</p>
              <input class="form-control" name="data" type="hidden" placeholder="Datos de recuperacion" value="<?= set_value('data', @$data??''); ?>" required>              
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="c-icon fa fa-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" name="password" placeholder="Nueva Contraseña" required>
              </div>
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-primary px-4" type="submit">Restablecer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
          <div class="card-body text-center">
            <div>
              <h2>Ya tienes cuenta</h2>
              <p>Si ya posee cuenta inicia sesión.</p>
              <a class="btn btn-lg btn-outline-light mt-3" href="<?= base_url('Auth/Login');?>">Inicia Sesión</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Reset-->
<div class="modal fade" id="modalReset" tabindex="-1" role="dialog" aria-labelledby="modalResetTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalResetTitle">Olvidó Su contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?= site_url('Auth/Forgot-Password');?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <label for="title">Correo Electónico</label>
              <div class="input-group">
                <input class="form-control countChars<?= ($validation->hasError('username'))?' is-invalid':''; ?>" id="title" type="text" name="username" placeholder="Su correo electronico" autocomplete="off" value="<?= set_value('username', ''); ?>" required>
              </div>
              <p class="help-block"></p>
              <?php if($validation->hasError('username')) {?>
                <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('username'); ?></div>
              <?php }?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
echo view('admin/partitials/footer_auth');
?>