<style>
.reg_user form label {
    color: #a2192e;
}
.register-box-user{
  width:100%;
}

.reg_user div .col-6{
  position:relative;
  float:left;
}

.reg_user div .col-12{
  position:relative;
  clear:both;
}


.btn-primary, .btn-primary:hover{
    background-color: #a2192e;
    border-color: #7a1021;
}
.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
    background-color: #a2192e;
    border-color: #600b18;
}

.boton-registro{
  position:relative;
  display:block;
  clear:both;
}

.btn-right{
  position:absolute;
  top:-20px;
  right:10px;
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrar un nuevo producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">registar producto</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="register-box-user reg_user">
            <div class="card">
            <form action="<?= base_url('administrador/registrar-producto');?>" method="post" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="nombre">Nombre del producto:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del producto" required="required">
                </div>
                <div class="col-6">
                    <label for="categoria">Categoria:</label>
                    <select name="id_categoria" id="categoria" class="form-control">
                        <option value="0">Seleccione una categoria</option>
                        <?php foreach($categoria as $cat):?>
                        <option value="<?= $cat->id; ?>"><?= $cat->nombre;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="clear-both"></div>
                <div class="col-6">
                    <label for="precio">Precio:</label>
                    <input type="text" name="precio" class="form-control" id="precio" placeholder="Precio del producto" required="required">
                </div>
                <div class="col-6">
                    <label for="stock">Stock</label>
                    <input type="text" name="stock" class="form-control" id="email" placeholder="Stock" required="required">
                </div>
                <div class="form-group col-6">
                    <div class="form-group">
                        <label for="foto_perfil">Foto del producto</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="upload" class="custom-file-input" id="foto_perfil">
                            <label class="custom-file-label" for="foto_perfil">Selecciona un archivo</label>
                          </div>
                          <div class="input-group-append">
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-12">
                    <label for="descripcion">Descripcion:</label>
                    <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10"></textarea>
                </div>
                <br />
                <div class="col-12 boton-registro">
                    <input type="submit" class="btn btn-sm btn-primary btn-right" value="Registrar producto">
                    <br />
                </div>
            </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->