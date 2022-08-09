
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Escritorio</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $ventas7Dias->Ventas7Dias; ?></h3>
                <p>Ventas realizadas en los últimos 7 días</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $numClientes->numClientes;?></h3>

                <p>Total de clientes registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Ventas -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Ventas</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Status</th>
                        <th>Comentario</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($ventasXClientes as $v): ?>
                        
                      <tr data-widget="expandable-table" aria-expanded="false">
                          <td>183</td>
                          <td><?= $v->nombre . " " . $v->apellidos;?></td>
                          <td><?= date_format( date_create($v->fecha), "d-m-Y"); ?></td>
                          <?php if($v->estado == "Despachado"): ?>
                            <td><span class="badge bg-success">Despachado</span></td>
                          <?php endif; ?>
                          <?php if($v->estado == "Pendiente"): ?>
                            <td><span class="badge bg-warning"><a href="<?= base_url('administrador/compra_estado');?>?id_compra=<?= $v->id_factura; ?>">Pendiente</a></span></td>
                          <?php endif; ?>
                          <?php if($v->estado == "Cancelado"): ?>
                            <td><span class="badge bg-danger">Cancelada</span></td>
                          <?php endif; ?>
                          <td><?= $v->comentario; ?></td>
                      </tr>
 
                    <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
        <!-- /.ventas -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->