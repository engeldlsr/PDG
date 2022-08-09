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
            <h1>Editar usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar usuario</li>
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
              <form action="<?= base_url('administrador/updateUser');?>" method="post" enctype="multipart/form-data">
                <div class="col-6">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" value="<?= $editUser->nombre;?>" class="form-control" id="nombre" placeholder="Nombre" required="required">
                </div>
                <div class="col-6">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" value="<?= $editUser->apellido;?>" class="form-control" id="apellido" placeholder="Apellidos" required="required">
                </div>
                <div class="clear-both"></div>
                <div class="col-12">
                    <label for="direccion">Direccion:</label>
                    <input type="text" name="direccion" value="<?= $editUser->direccion;?>" class="form-control" id="direccion" placeholder="Direccion" required="required">
                </div>
                <div class="col-6">
                    <label for="email">email:</label>
                    <input type="email" name="email" value="<?= $editUser->email;?>" class="form-control" id="email" placeholder="Correo electronico" required="required">
                </div>
                <div class="col-6">
                    <label for="telefono">telefono:</label>
                    <input type="text" name="telefono" value="<?= $editUser->telefono;?>" class="form-control" id="telefono" placeholder="Telefono" required="required">
                </div>
                <div class="col-6">
                    <label for="user_login">Nombre de usuario:</label>
                    <input type="text" name="user_login" value="<?= $editUser->user_login;?>" class="form-control" id="user_login" placeholder="Nombre de usuario" readOnly="true" required="required">
                </div>
                <div class="col-6">
                    <label for="nombre">Password:</label>
                    <input type="text" name="user_password" class="form-control" id="password" placeholder="Contrasena">
                </div>
                <div class="col-6">
                    <label for="rol">Rol de usuario:</label>
                    <select name="rol" class="form-control" id="rol" required>
                        <option value="administrador">Administrador</option>
                        <option value="vendedor">Vendedor</option>
                        <option value="usuario">Usuario</option>
                    </select>
                </div>
                <div class="form-group col-6">
                <div class="form-group">
                        <label for="foto_perfil">Foto de perfil</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="foto_perfil" class="custom-file-input" id="foto_perfil">
                            <label class="custom-file-label" for="foto_perfil">Selecciona un archivo</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Subir</span>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-12 boton-registro">
                    <input type="hidden" name="id" value="<?= $editUser->id;?>">
                    <input type="submit" class="btn btn-sm btn-primary btn-right" value="Actualizar usuario">
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
