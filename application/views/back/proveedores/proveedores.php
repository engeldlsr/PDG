
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de proveedores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lista de proveedores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-bodys">

                <table class="table">
                    <thead>
                        <th>Proveedores</th>
                        <th>CORREO ELECTRONICO</th>
                        <th>TELEFONO</th>
                        <th>ACCION</th>
                    </thead>
                    <tbody>

                      <?php foreach($proveedores as $proveedor): ?>
                        <tr>
                            <td class="user_login"><?= $proveedor->nombre;?></td>
                            <td><?= $proveedor->email;?></td>
                            <td><?= $proveedor->telefono;?></td>
                            <td>
                                <a href="<?= base_url('administrador/proveedores/info/') . $proveedor->id;?>" class="btn btn-sm btn-success">Ver</a>
                                <a href="<?= base_url('administrador/proveedores/editar/') . $proveedor->id;?>" class="btn btn-sm btn-info">Editar</a>
                                <a href="<?= base_url('administrador/proveedores/borrar/') . $proveedor->id;?>" class="btn btn-sm btn-danger">Borrar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
