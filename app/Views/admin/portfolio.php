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
              <h4 class="card-title mb-0">Portafolio</h4>
              <div class="small text-muted">Nuestros Trabajos</div>
            </div>            
          </div>
          <div class="container-fluid">
            <form class="form-horizontal" action="<?= site_url('Admin/update_portfolio');?>" method="post" enctype="multipart/form-data">
                <input class="form-control sr-only" type="hidden" name="portfolio[data]" value="<?= $portfolio['data']; ?>">
                <?php if($validation->hasError('portfolio.data')) {?>
                  <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('portfolio.data'); ?></div>
                <?php }?>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="title">Titulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('portfolio.title'))?' is-invalid':''; ?>" id="title" type="text" name="portfolio[title]" placeholder="Titulo princpal de la Seccion" autocomplete="off" value="<?= set_value('portfolio.title', @$portfolio['title']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('portfolio.title')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('portfolio.title'); ?></div>
                  <?php }?>
                </div>
                <div class="form-group col-md-12">
                  <label for="subtitle">Subtitulo</label>
                  <div class="input-group">
                    <input class="form-control countChars<?= ($validation->hasError('portfolio.subtitle'))?' is-invalid':''; ?>" id="subtitle" type="text" name="portfolio[subtitle]" placeholder="Subtitulo de la Sección" autocomplete="off" maxlength="200" value="<?= set_value('portfolio.subtitle', @$portfolio['subtitle']??''); ?>" required>
                  </div>
                  <p class="help-block"></p>
                  <?php if($validation->hasError('portfolio.subtitle')) {?>
                    <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('portfolio.subtitle'); ?></div>
                  <?php }?>
                </div>

                <!-- categories -->
                <div class="row col-sm-12">
                  <hr class="col-sm-12" style="height:2px;">
                  <h4 class="col-sm-12 text-center py-10">Categorias
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalCategory" data-whatever="modalCategory"><i class="fa fa-plus"></i></button>

                    
                  </h4>
                  <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      //$permitCategories = [];
                      $iic=0;
                      $portfolio['categories'] = isset($portfolio['categories']) ? $portfolio['categories'] : array();
                      if(count($portfolio['categories']) > 0) {
                        foreach ($portfolio['categories'] as $key => $value) { 
                          $value = (object) $value;
                          $permitCategories[] = $value->title;
                        ?>
                          <tr valign="middle">
                            <td><?= $iic+1; ?></td>
                            <td valign="middle"><?= $value->title; ?></td>
                            <td valign="middle" class="<?= $value->status == 1 ? 'btn-success' : 'btn-warning'; ?>"><?= $value->status == 1 ? 'Activo' : 'Inactivo'; ?></td>
                            <td style="/*word-break: keep-all;white-space: nowrap;*/">
                              <a href="<?= site_url('Admin/portfolio/toggleCategorie/'.hideData(myencrypt($portfolio['data'].'-'.hideData(myencrypt($key)))));?>" class="btn btn-info" type="button">
                                <i class="fa <?= $value->status == 1 ? 'fa-times' : 'fa-check'; ?>"></i>
                              </a>
                            </td>
                          </tr>
                        <?php $iic++;} 
                      } else { ?>
                        <tr><td colspan="4">No hay registros</td></tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- END categories -->

                <!-- portfolio -->
                <div class="row col-sm-12">
                  <hr class="col-sm-12" style="height:2px;">
                  <h4 class="col-sm-12 text-center">Imagenes
                    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modalImage" data-whatever="modalImage"><i class="fa fa-plus"></i></button>
                  </h4>
                  <table id="lstImages" class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Miniatura</th>
                        <th>Titulo</th>
                        <th>Categorias</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- END portfolio -->
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

<!-- Modal Category-->
<div class="modal fade" id="modalCategory" tabindex="-1" role="dialog" aria-labelledby="modalCategoryTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCategoryTitle">Agregar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?= site_url('Admin/portfolio/addCategorie');?>" method="post" enctype="multipart/form-data">
        <input class="form-control sr-only" type="hidden" name="portfolio[data]" value="<?= $portfolio['data']; ?>">
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-12">
              <label for="title">Titulo</label>
              <div class="input-group">
                <input class="form-control countChars<?= ($validation->hasError('category.title'))?' is-invalid':''; ?>" id="title" type="text" name="category[title]" placeholder="Titulo princpal de la Seccion" autocomplete="off" value="<?= set_value('category.title', ''); ?>" required>
              </div>
              <p class="help-block"></p>
              <?php if($validation->hasError('category.title')) {?>
                <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('category.title'); ?></div>
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

<!-- Modal Imagen-->
<div class="modal fade" id="modalImage" tabindex="-1" role="dialog" aria-labelledby="modalImageTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalImageTitle">Agregar Imagen al Portafolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?= site_url('Admin/portfolio/addImage');?>" method="post" enctype="multipart/form-data">
        <input class="form-control sr-only" type="hidden" name="portafolio[data]" value="<?= $portfolio['data']; ?>">
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="title">Titulo</label>
              <div class="input-group">
                <input class="form-control countChars<?= ($validation->hasError('portafolio.title'))?' is-invalid':''; ?>" id="title" type="text" name="portafolio[title]" placeholder="Titulo princpal de la Seccion" autocomplete="off" value="<?= set_value('portafolio.title', ''); ?>" required>
              </div>
              <p class="help-block"></p>
              <?php if($validation->hasError('portafolio.title')) {?>
                <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('portafolio.title'); ?></div>
              <?php }?>
            </div>
            <div class="form-group col-md-6">
              <label for="title">Categoria</label>
              <div class="input-group">
                <select class="form-control chosen-select<?= ($validation->hasError('portafolio.title'))?' is-invalid':''; ?>" data-placeholder="Seleccione categoria" name="portafolio[category][]" id="category" required size="1" placeholder="Seleccione categoria" multiple autocomplete="off">
                  <?php  
                  foreach ($portfolio['categories'] as $key => $value) { ?>
                    <option value="<?= $key;?>"><?= $value['title']; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <p class="help-block"></p>
              <?php if($validation->hasError('portafolio.category')) {?>
                <div class="invalid-feedback alert btn-sm alert-danger d-block"><?= $validation->getError('portafolio.category'); ?></div>
              <?php }?>
            </div>
            <div class="controls col-md-12 rflex">
              <label for="uploadThumb">Imagen (600x400)</label>
              <div class="fileupload fileupload-new<?= ($validation->hasError('about.image_url'))?' is-invalid':''; ?>" data-provides="fileupload">
                <label for="uploadThumb" class="fileupload-new thumbnail">
                  <img src="<?php echo $about['image_url']?? base_url('assets/images/upload.png'); ?>" alt="empresa" class="img img-fluid img-responsive" id="thumbnailPreview"/>
                </label>
                <input type="file" id="uploadThumb" name="uploadThumb" class="default" style="display: none;"/>
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
echo view('admin/partitials/footer');
?>