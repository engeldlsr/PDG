
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    <h1>Bienvenid@ <small><?= $_SESSION['cliente']['nombre'];?></small></h1>
                    <a href="<?= base_url('mi-cuenta/logout');?>">Cerrar sesion</a>
                    <hr />
				</div>
				<!-- /row -->

                <!-- row -->
                <div class="row">
                    <h3>Desde aquí podrás dar un seguimiento al estado de sus pedidos</h3>
                    <h4>Historial de compras</h4>
                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row">
                    <p>Actualmente no has realizado ninguna compra en nuestra tienda.</p>
                    <p>Date una vuelta por nuestro sitio web, y mira nuestros productos a ver si encuentras algo de tu interés <a href="<?= base_url();?>">Click aqu&iacute;</a> </p>
                </div>
                <!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
