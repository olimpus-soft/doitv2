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
    <div class="col-md-6">
      <div class="clearfix">
        <h1 class="float-left display-3 mr-4"><?= $error ?? 'Error'?></h1>
        <h4 class="pt-3"><?= $errorDes ?? 'Oops! ha ocurrido un error.';?></h4>
        <p class="text-muted"><?= $message ?? '' ?></p>
      </div>
    </div>
  </div>
</div>
<?php
echo view('admin/partitials/footer_auth');
?>