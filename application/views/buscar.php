
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<?php if(count($search) < 1): ?>
								<h3 class="title">No se encontró ningún resultado relacionado con su búsqueda</h3>
							<?php elseif(count($search) <= 1): ?>
								<h3 class="title">Se ha encontrado <?= count($search);?> articulo realacinado con su busqueda.</h3>
							<?php else: ?>
								<h3 class="title">Se han encontrado <?= count($search);?> articulos realacinados con su busqueda.</h3>
							<?php endif;?>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">	
									<?php //var_dump($search);?>						
									<!-- product -->
									<?php foreach($search as $b): ?>
									<div class="product col-md-3">
										<div class="product-img">
											<img src="<?= base_url('uploads/') . $b->foto ?>?>" alt="">
											<div class="product-label">
												<!--<span class="sale">-30%</span>
												<span class="new">Nuevo</span>-->
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="<?= base_url('detalle-producto/') . $b->id_producto ?>"><?= $b->nombre ?></a></h3>
											<h4 class="product-price">$<?= number_format($b->precio, 2); ?></h4>
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
												<input type="hidden" name="id" value="<?= $b->id_producto;?>">
												<input type="hidden" name="qty" value="1">
												<input type="hidden" name="price" value="<?= $b->precio;?>">
												<input type="hidden" name="name" value="<?= $b->nombre;?>">
												<input class="add-to-cart-btn" type="submit" value="Agregar al carrito">
											</form>
										</div>
									</div>
									<?php endforeach;?>
									<!-- /product -->
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
		