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
              <h4 class="card-title mb-0">Mi Perfil</h4>
              <h5 class="small text-muted"><?= $user['name']; ?>: <?= $user['email']; ?></h5>
            </div>            
          </div>
          <div class="container-fluid">
            <form class="form-horizontal" action="<?= site_url('Admin/update_profile');?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="title">Nombre Completo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('user.name'))?' is-invalid':''; ?>" id="title" type="text" name="user[name]" placeholder="SU Nombre Completo" autocomplete="off" value="<?= set_value('user.name', @$user['name']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('user.name')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('user.name'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-6">
                  <label for="subtitle">Teléfono</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('user.phone'))?' is-invalid':''; ?>" id="subtitle" type="text" name="user[phone]" placeholder="Telefono de contacto" autocomplete="off" maxlength="200" value="<?= set_value('user.phone', @$user['phone']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('user.phone')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('user.phone'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-4">
                  <label for="subtitle">Creado el</label>
                  <div class="input-group">
                    <label class="form-control disabled readonly" disabled readonly><?= date('d/m/Y h:i:s a', strtotime($user['created_at'])); ?></label>
                  </div>
                  <p class="help-block"></p>
                </div>
                <div class="form-group col-md-4">
                  <label for="subtitle">Actualizacion</label>
                  <div class="input-group">
                    <label class="form-control disabled readonly" disabled readonly><?= date('d/m/Y h:i:s a', strtotime($user['updated_at'])); ?></label>
                  </div>
                  <p class="help-block"></p>
                </div>
                <div class="form-group col-md-4">
                  <label for="subtitle">Última Sesión</label>
                  <div class="input-group">
                    <label class="form-control disabled readonly" disabled readonly><?= date('d/m/Y h:i:s a', strtotime($user['login'])); ?></label>
                  </div>
                  <p class="help-block"></p>
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