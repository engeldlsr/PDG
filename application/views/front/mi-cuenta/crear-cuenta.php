<?php if(isset($_POST['nombre'])): ?>
<h1>Su cuenta fue creada correctamente, en breve va a ser redirigido a la ventana de login.</h1>
<script>
    setTimeout(function() {
        window.location="<?= base_url('mi-cuenta/login');?>"
    }, 3000);
</script>
<?php exit; endif;?>

        <!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    <h1>Crear una nueva cuenta</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>"  onsubmit="return valida();" method="post">
                        <div class="col-md-6 form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="col-md-5 form-control" id="nombre">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" id="apellidos">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" maxlength="10" onkeypress="return onlyNumberKey(event)" class="form-control" id="telefono">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="cedula">Cedula</label>
                            <input type="text" name="cedula" maxlength="11" onkeypress="return onlyNumberKey(event)" class="form-control" id="cedula">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" class="form-control" id="direccion">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn btn-danger" value="Crear cuenta">
                        </div>
                    </form>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<script>

    var nombre = document.getElementById('nombre');
    var apellidos =  document.getElementById('apellidos');
    var telefono =  document.getElementById('telefono');
    var cedula =  document.getElementById('cedula');
    var email =  document.getElementById('email');
    var password = document.getElementById('password');
    var direccion =  document.getElementById('direccion');

    function valida(){

        if(nombre.value == "")
        {
            alert('Ingrese ingresar su nombre');
            nombre.focus();
            nombre.style.borderColor = "red";
            nombre.addEventListener("blur", function(){
                if(this.value !== ""){
                    this.style.borderColor = "Green";
                }
            });
            return false;
        }

        if(apellidos.value == "")
        {
            alert('Ingrese su apellido');
            apellidos.focus();
            apellidos.style.borderColor = "red";
            apellidos.addEventListener("blur", function(){
                if(this.value !== ""){
                    this.style.borderColor = "Green";
                }
            });
            return false;
        }

        if(telefono.value == "")
        {
            alert('Ingrese su número de teléfono');
            telefono.focus();
            telefono.style.borderColor = "red"
            telefono.addEventListener("blur", function(){
                if(this.value !== ""){
                    this.style.borderColor = "Green";
                }
            });
            return false;
        }

        if(cedula.value == "")
        {
            alert('Ingrese su cedula');
            cedula.focus();
            cedula.style.borderColor = "red"
            cedula.addEventListener("blur", function(){
                if(this.value !== ""){
                    this.style.borderColor = "Green";
                }
            });
            return false;
        }

        if(email.value == "")
        {
            alert('Ingrese su correo electrónico');
            email.focus();
            email.style.borderColor = "red"
            email.addEventListener("blur", function(){
                if(this.value !== ""){
                    this.style.borderColor = "Green";
                }
            });
            return false;
        }

        if(password.value == "")
        {
            alert('Ingrese una clave');
            password.focus();
            password.style.borderColor = "red"
            password.addEventListener("blur", function(){
                if(this.value !== ""){
                    this.style.borderColor = "Green";
                }
            });
            return false;
        }

        if(direccion.value == "")
        {
            alert('Ingrese su dirección');
            direccion.focus();
            direccion.style.borderColor = "red"
            direccion.addEventListener("blur", function(){
                if(this.value !== ""){
                    this.style.borderColor = "Green";
                }
            });
            return false;
        }
    }

    function valido()
    {
        if(this !== null){
            this.style.borderColor = "green";
        }
    }

    function onlyNumberKey(evt) {
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>