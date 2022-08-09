<style>
    .frm-login{
        max-width:300px;
    }
    a.crear-cuenta{
        position:relative;
        top:0px;
        right:-33px;
    }
</style>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="frm-login row">
                <h1>Iniciar sesión</h1>
                <form action="<?= base_url('mi-cuenta/login');?>" method="post">
                        <div class="col-md-12 form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" class="col-md-5 form-control" id="email">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn btn-danger" value="Iniciar sesión">
                            <a href="<?= base_url('mi-cuenta/crear-cuenta');?>" class="crear-cuenta btn btn-default">Crear cuenta</a>
                            <br /><br /><a href="#">Olvide mi contraseña</a>
                        </div>
                    </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->