<style>
    label {
        margin-top: 15px;
    }

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
  top:10px;
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
            <h1>Informacion de la categoria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Informacion de la categoria</li>
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
            <form action="<?= base_url('administrador/categoria/publicar');?>" method="post">
                <div class="col-6">
                    <label for="nombre">Nombre de la categoria:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" disabled>
                </div>
                <div class="col-6">
                    <label for="Sub_Categoria">Sub Categoria:</label>
                    <select name="Sub_Categoria" class="form-control" id="Sub_Categoria">
                        <option value="0">Seleccione una sub categoria</option>
                        <?php foreach($subCategoria as $subCat): ?>
                          <option value="<?= $subCat->id;?>"><?= $subCat->nombre;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                
                <div class="col-6">
                    <label for="display">Display:</label>
                    <select name="display" class="form-control" id="display">
                        <option value="">Mostrar categoria</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                    <br />
                </div>
                <div class="clear-both"></div>
                <br /><br />
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
  
</body>
</html>
