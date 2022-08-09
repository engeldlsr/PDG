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
            <h1>Registrar cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">registar cliente</li>
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
            <form action="<?= base_url('administrador/registrar-cliente');?>" method="post">
                <div class="col-6">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required="required">
                </div>
                <div class="col-6">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" required="required">
                </div>
                <div class="clear-both"></div>
                <div class="col-12">
                    <label for="direccion">Direccion:</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion" required="required">
                </div>
                <div class="col-6">
                    <label for="telefono">telefono:</label>
                    <input type="text" name="telefono" class="form-control" maxlength="10" id="telefono" placeholder="Telefono" required="required">
                </div>
                <div class="col-6">
                    <label for="cedula">Cedula</label>
                    <input type="text" name="cedula" class="form-control" maxlength="11" id="cedula" placeholder="Nombre de usuario" required="required">
                </div>
                <div class="col-6">
                    <label for="email">email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Correo electronico" required="required">
                </div>
                
                
                <div class="col-6">
                    <label for="password">Password:</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="Contrasena" required="required">
                </div>
                <div class="col-12 boton-registro">
                <div><br /></div>
                    <input type="submit" class="btn btn-sm btn-primary btn-right" value="Registrar cliente">
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
  
</body>
</html>
