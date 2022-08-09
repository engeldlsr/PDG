
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="<?= base_url();?>">Inicio</a></li>
							<li><a href="#">Detalle del producto</a></li>
							<li class="active"><?= $detalleProducto->nombre;?></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= base_url('uploads/') . $detalleProducto->foto;?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?= $detalleProducto->nombre; ?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Reseña(s) | Añadir tu reseña</a>
							</div>
							<div>
								<h3 class="product-price"><?= number_format($detalleProducto->precio, 2); ?></h3>
								<span class="product-available">En inventario</span>
							</div>
							<?= $detalleProducto->descripcion;?>
                            <br /><br />
							<div class="add-to-cart">
                            <form action="<?= base_url('carrito/cart_insert');?>" method="post">
                                <div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number" name="qty" value="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
                                    <br /><br />
								</div>
								
                                    <input type="hidden" name="id" value="<?= $detalleProducto->id_producto;?>">
                                    <input type="hidden" name="price" value="<?= $detalleProducto->precio;?>">
                                    <input type="hidden" name="name" value="<?= $detalleProducto->nombre;?>">
                                    <input class="add-to-cart-btn" type="submit" value="Agregar al carrito">
                                </form>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> añadir a mis deseos</a></li>
							</ul>

							<ul class="product-links">
								<li>Categoria:</li>
								<!--<li><a href="#">Headphones</a></li>
								<li><a href="#">Accessories</a></li>-->
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
                                        <?= $detalleProducto->descripcion;?>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
                                        <?= $detalleProducto->descripcion;?>
										</div>
									</div>
								</div>
								<!-- /tab2  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

