<?php
    $versionPHP = phpversion();
    $versionMySQL = $this->db->version();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registrar un nuevo usuario</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">registar usuario</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="register-box-user">
            <div class="card">
                <table>
                    <tbody>
                        <tr>
                            <td><strong>Version PHP:</strong></td>
                            <td><?= $versionPHP;?></td>
                        </tr>
                        <tr>
                            <td><strong>Version MySQL:</strong></td>
                            <td><?= $versionMySQL;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card -->
            </div>
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
