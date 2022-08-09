

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url('assets/')?>images/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Instrumentos de<br>Cuerdas</h3>
								<a href="<?= base_url('instrumentos-de-cuerdas');?>" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url('assets/')?>images/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Bocinas y<br>Accesorios</h3>
								<a href="<?= base_url('bocinas-y-accesorios');?>" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo base_url('assets/')?>images/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Equipos de<br>Sonidos</h3>
								<a href="<?= base_url('equipos-de-sonido');?>" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nuevos productos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Micrófonos</a></li>
									<li><a data-toggle="tab" href="#tab1">Guitarras</a></li>
									<li><a data-toggle="tab" href="#tab1">Bocinas</a></li>
									<li><a data-toggle="tab" href="#tab1">Accesorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<?php if($ultimosProductos === 0): ?>
										<h2>No se encontraron productos para esta categoria</h2>
										<?php else : ?>
										<?php foreach($ultimosProductos as $product): ?>
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url('uploads/') . $product->foto;?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="<?= base_url('detalle-producto/') . $product->id_producto;?>"><?= $product->nombre;?></a></h3>
												<h4 class="product-price"><?= number_format($product->precio, 2);?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<form action="carrito/cart_insert" method="post">
													<input type="hidden" name="id" value="<?= $product->id_producto;?>">
													<input type="hidden" name="qty" value="1">
													<input type="hidden" name="price" value="<?= $product->precio;?>">
													<input type="hidden" name="name" value="<?= $product->nombre;?>">
													<input class="add-to-cart-btn" type="submit" value="Agregar al carrito">
												</form>
											</div>
										</div>
										<!-- /product -->
										<?php endforeach;?>
										<?php endif; ?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Dias</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Horas</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Seg</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Súper ofertas de la semana</h2>
							<p>Nueva Colección Hasta 25% DE DESCUENTO</p>
							<a class="primary-btn cta-btn" href="#">Comprar ahora</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Percusión</h3>
							<div class="section-nav">
								<!--<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Micrófonos</a></li>
									<li><a data-toggle="tab" href="#tab1">Guitarras</a></li>
									<li><a data-toggle="tab" href="#tab1">Bocinas</a></li>
									<li><a data-toggle="tab" href="#tab1">Accesorios</a></li>
								</ul>-->
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php foreach($percusiones as $percuion): ?>
										<div class="product">
											<div class="product-img">
												<img src="<?= base_url('uploads/') . $percuion->foto;?>" alt="">
												<div class="product-label">
													<!--<span class="sale">-30%</span>
													<span class="new">NUEVO</span>-->
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="<?= base_url('detalle-producto/') . $percuion->id_producto;?>"><?= $percuion->nombre;?></a></h3>
												<h4 class="product-price">$<?= number_format($percuion->precio, 2);?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a mis deseos</span></button>
												</div>
											</div>
											<div class="add-to-cart">
											<form action="carrito/cart_insert" method="post">
												<input type="hidden" name="id" value="<?= $percuion->id_producto;?>">
												<input type="hidden" name="qty" value="1">
												<input type="hidden" name="price" value="<?= $percuion->precio;?>">
												<input type="hidden" name="name" value="<?= $percuion->nombre;?>">
												<input class="add-to-cart-btn" type="submit" value="Agregar al carrito">
											</form>
											</div>
										</div>
										<?php endforeach; ?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Guitarras</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<?php foreach($guitars as $guitar): ?>
								<div class="product-widget">
									<div class="product-img">
										<img src="<?php echo base_url('uploads/') . $guitar->foto;?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name"><a href="<?= base_url('detalle-producto/') . $guitar->id_producto;?>"><?= $guitar->nombre;?></a></h3>
										<h4 class="product-price"><?= number_format($guitar->precio, 2);?></h4>
									</div>
								</div>
								<?php endforeach;?>
								<!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Bocinas</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<?php foreach($speakers as $speaker): ?>
								<div class="product-widget">
									<div class="product-img">
										<img src="<?= base_url('uploads/') . $speaker->foto; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name"><a href="<?= base_url('detalle-producto/') . $speaker->id_producto;?>"><?= $speaker->nombre ?></a></h3>
										<h4 class="product-price">$<?= number_format($speaker->precio, 2); ?></h4>
									</div>
								</div>
								<?php endforeach; ?>
								<!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Accesorios</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<?php foreach($accesories as $accesorie): ?>
								<div class="product-widget">
									<div class="product-img">
										<img src="<?= base_url('uploads/') . $accesorie->foto; ?> ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name"><a href="<?= base_url('detalle-producto/') . $accesorie->id_producto; ?>"><?= $accesorie->nombre ?></a></h3>
										<h4 class="product-price">$<?= number_format($accesorie->precio, 2) ?></h4>
									</div>
								</div>
								<?php endforeach; ?>
								<!-- /product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Suscríbete a nuestro <strong>boletín de noticias</strong></p>
							<form>
								<input class="input" type="email" placeholder="Introduce tu correo electrónico">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Suscríbete</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		