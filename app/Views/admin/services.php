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
              <h4 class="card-title mb-0">Servicios</h4>
              <div class="small text-muted">Nuestros Servicios</div>
            </div>            
          </div>
          <div class="container-fluid">
            <form class="form-horizontal" action="<?= site_url('Admin/update_services');?>" method="post" enctype="multipart/form-data">
                <input class="form-control sr-only" type="hidden" name="services[data]" value="<?= $services['data']; ?>">
                <?php if($validation->hasError('services.data')) {?>
                  <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('services.data'); ?></div>
                <?php }?>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="title">Titulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('services.title'))?' is-invalid':''; ?>" id="title" type="text" name="services[title]" placeholder="Titulo princpal de la Seccion" autocomplete="off" value="<?= set_value('services.title', @$services['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('services.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('services.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="subtitle">Subtitulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('services.subtitle'))?' is-invalid':''; ?>" id="subtitle" type="text" name="services[subtitle]" placeholder="Subtitulo de la Sección" autocomplete="off" maxlength="200" value="<?= set_value('services.subtitle', @$services['subtitle']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('services.subtitle')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('services.subtitle'); ?></div>
                  <?php }?>
                </div>

                <!-- services -->
                <?php for ($i=0; $i < 8; $i++) { ?>
                <div class="form-group col-sm-12 row row-services">
                  <h4 class="col-sm-12 text-center py-05"> Servicio <?= $i+1;?> </h4>
                  <div class="form-group col-md-2">
                    <label for="iconc<?= $i+1;?>">Icono <?= $i+1;?></label>
                    <div class="input-group<?= ($validation->hasError('services.services.'.$i.'.icon'))?' is-invalid':''; ?>">
                      <button type="button" class="btn btn-block btn-primary GetIconPicker" id="GetIconPicker<?= $i+1;?>" data-iconpicker-input="input#iconpicker<?= $i+1;?>" data-iconpicker-preview="i#iconpreview<?= $i+1;?>"><i class="<?= set_value('services.services.'.$i.'.icon', @$services['services'][$i]['icon']??'fa fa-check'); ?>" id="iconpreview<?= $i+1;?>" aria-hidden="true"></i></button>
                      <input class="form-control d-none sr-only countChars<?= ($validation->hasError('services.services.'.$i.'.icon'))?' is-invalid':''; ?>" id="iconpicker<?= $i+1;?>" type="text" name="services[services][<?= $i;?>][icon]" placeholder="Titulo" autocomplete="off" maxlength="50" value="<?= set_value('services.services.'.$i.'.icon', @$services['services'][$i]['icon']??'fa fa-check'); ?>" required>
                    </div>
                    <?php if($validation->hasError('services.subtitle')) {?>
                      <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('services.services.'.$i.'.icon'); ?></div>
                    <?php }?>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titlec<?= $i+1;?>">Titulo Servicio <?= $i+1;?></label>
                    <div class="input-group">
                      <input class="form-control countChars<?= ($validation->hasError('services.services.'.$i.'.title'))?' is-invalid':''; ?>" id="titlec<?= $i+1;?>" type="text" name="services[services][<?= $i;?>][title]" placeholder="Titulo" autocomplete="off" maxlength="50" value="<?= set_value('services.services.'.$i.'.title', @$services['services'][$i]['title']??''); ?>" required>
                    </div>
                    <p class="help-block"></p>
                    <?php if($validation->hasError('services.services.'.$i.'.title')) {?>
                      <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('services.services.'.$i.'.title'); ?></div>
                    <?php }?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="titled<?= $i+1;?>">Desc. Servicio <?= $i+1;?></label>
                    <div class="input-group">
                      <input class="form-control countChars<?= ($validation->hasError('services.services.'.$i.'.description'))?' is-invalid':''; ?>" id="titled<?= $i+1;?>" type="text" name="services[services][<?= $i;?>][description]" placeholder="Descripción" autocomplete="off" maxlength="100" value="<?= set_value('services.services.'.$i.'.description', @$services['services'][$i]['description']??''); ?>" required>
                    </div>
                    <p class="help-block"></p>
                    <?php if($validation->hasError('services.services.'.$i.'.title')) {?>
                      <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('services.services.'.$i.'.title'); ?></div>
                    <?php }?>
                  </div>
                </div>
                <?php } ?>

                <!-- END services -->
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