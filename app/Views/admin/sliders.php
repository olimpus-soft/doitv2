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
              <h4 class="card-title mb-0">Sliders</h4>
              <div class="small text-muted">Imagenes del slider Principal</div>
            </div>
            <div class="btn-toolbar d-sm-block" role="toolbar" aria-label="Toolbar with buttons">
              <a href="<?= site_url('Admin/addSlider');?>" class="btn btn-primary" type="button">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <div class="container-fluid">
              <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Miniatura</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Enlace</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sliders as $key => $value) { ?>
                    <tr valign="middle">
                      <td><?= $key+1; ?></td>
                      <td valign="middle"><img src="<?= $value->image_url; ?>" alt="<?= $value->title; ?>" style="max-width: 150px;height: auto;" class="img fluid img-responsive"> </td>
                      <td valign="middle"><?= $value->title; ?></td>
                      <td valign="middle"><?= $value->description; ?></td>
                      <td valign="middle"><?= $value->enlace; ?></td>
                      <td valign="middle"><?= $value->status == 1 ? 'Activo' : 'Inactivo'; ?></td>
                      <td style="/*word-break: keep-all;white-space: nowrap;*/">
                        <a href="<?= site_url('Admin/editSlider/'.hideData(myencrypt($value->id)));?>" class="btn btn-info" type="button">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" data-id="<?= site_url('Admin/deleteSlider/'.hideData(myencrypt($value->id)));?>" class="btn btn-danger btnDelSlider" type="button">
                          <i class="fa fa-trash"></i>
                        </a>
                      </td>
                  <?php } ?>
                </tbody>
              </table>
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