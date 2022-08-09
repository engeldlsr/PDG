<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('administrador');?>" class="brand-link">
      <img src="<?= base_url('assets/');?>images/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E&J Music</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('uploads/users/') . $_SESSION['user']['imagen'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('administrador/perfil');?>" class="d-block user_login"><?= $_SESSION['user']['user_login'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open dashboard">
            <a href="<?= base_url('administrador');?>" class="nav-link active" id="dashboard">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!-- Usuarios -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= base_url('administrador/');?>mostrar-usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mostrar usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('administrador/');?>registrar-usuario" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar usuario</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Productos -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Productos
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= base_url('administrador/');?>mostrar-productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mostrar productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('administrador/');?>registrar-producto" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar producto</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Clientes -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Clientes
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= base_url('administrador/clientes');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mostrar clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('administrador/cliente/registrar');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar cliente</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Categorias
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?= base_url('administrador/categorias');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mostrar categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('administrador/categoria/publicar');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publicar categoria</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i><i class="fas "></i>
              <p>
                Proveedores
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('administrador/proveedores');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mostrar proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('administrador/proveedores/registrar');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar proveedores</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('administrador/');?>reportes" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('administrador/');?>info-sistema" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Info sistema
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('auth/logout');?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Cerrar sesion
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>