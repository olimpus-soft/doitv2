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
    <div class="col-md-10">
      <div class="card-group">
        <div class="card col-md-4 text-white bg-primary py-5 d-md-down-none" style="width:34%">
          <div class="card-body text-center">
            <div>
              <h2>Ya tienes cuenta</h2>
              <p>Si ya posee cuenta inicia sesión.</p>
              <a class="btn btn-lg btn-outline-light mt-3" href="<?= base_url('Auth/Login');?>">Inicia Sesión</a>
            </div>
          </div>
        </div>
        <div class="card p-4">
          <div class="card-body p-4">
            <form class="" action="<?= site_url('Auth/createAccount');?>" method="post">
              <h1>Registro</h1>
              <p class="text-muted">Crea tu cuenta</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <i class="c-icon fa fa-user"></i>
                    </span></div>
                <input class="form-control" type="text" name="name" placeholder="Nombre Completo" value="<?= set_value('name', @$name??''); ?>" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <i class="c-icon fa fa-envelope-o"></i></span></div>
                <input class="form-control" type="email" name="username" placeholder="Correo Electronico" value="<?= set_value('username', @$username??''); ?>" required>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <i class="c-icon fa fa-lock"></i></span></div>
                <input class="form-control" type="password" name="password" placeholder="Contraseña" value="" required>
              </div>
              <button class="btn btn-block btn-success" type="submit">Crear Cuenta</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
echo view('admin/partitials/footer_auth');
?>