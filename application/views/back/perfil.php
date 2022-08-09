

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">perfil de usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('uploads/users/') . $user['imagen'];?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $user['nombre'] . " " . $user['apellido']?></h3>

                <p class="text-muted text-center"><?= $user['rol'];?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
            
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-panee" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" name="nombre" value="<?= $user['nombre'];?>" class="form-control" id="nombre" placeholder="Nombre" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="apellido" class="col-sm-2 col-form-label">Apellidos</label>
                        <div class="col-sm-10">
                          <input type="text" name="apellidos" value="<?= $user['apellido'];?>" class="form-control" id="apellido" placeholder="Apellidos" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                        <div class="col-sm-10">
                          <input type="text" name="telefono" value="<?= $user['telefono'];?>" class="form-control" id="telefono" placeholder="Telefono" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" value="<?= $user['email'];?>" class="form-control" id="email" placeholder="Email" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                        <div class="col-sm-10">
                          <input type="text" name="direccion" value="<?= $user['direccion'];?>" class="form-control" id="direccion" placeholder="Direccion" disabled>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Actualizar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

