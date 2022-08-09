<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title><?= $tituloPagina; ?></title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/')?>css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/')?>css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/')?>css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url('assets/')?>css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> (809) 220-1111</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> info@eyjmusic.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Santo Domingo</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href=""><i class="fa fa-dollar"></i> $RD</a></li>
						<li><a href="<?= base_url('mi-cuenta');?>"><i class="fa fa-user-o"></i> Mi cuenta</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?= base_url();?>" class="logo">
									<img src="<?php echo base_url('assets/')?>images/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="<?= base_url('buscar');?>" method="get">
									<select class="input-select" name="categoria">
										<option value="0">Categorias</option>
										<?php
										foreach($categorias as $cat)
										{
											if($_GET['categoria'] == $cat->id){
												echo "<option selected='selected' name='$cat->nombre' value='$cat->id'>" . $cat->nombre . "</option>";
											}else{
												echo "<option name='$cat->nombre' value='$cat->id'>" . $cat->nombre . "</option>";
											}
										}
										?>
									</select>
									<input class="input" name="p" value="<?= (isset($_GET['p']) ? $_GET['p'] : '');?>" placeholder="Buscar">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Mis deseos</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Mi carrito</span>
										<div class="qty"><?php echo $this->cart->total_items();?></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<?php $cartContents = $this->cart->contents();?>
											<?php foreach($cartContents as $cart): ?>
											<div class="product-widget">
												<div class="product-img">
													<img src="<?= base_url('assets/images/product-default.jpg');?>" alt="default">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="<?= base_url('detalle-producto/') . $cart['id'];?>"><?= $cart['name'];?></a></h3>
													<h4 class="product-price"><span class="qty"><?= $cart['qty'];?>x</span>$<?= number_format($cart['price'], 2);?></h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
											<?php endforeach; ?>
										</div>
										<div class="cart-summary">
											<small><?= $this->cart->total_items();?> articulo(s) seleccionado</small>
											<h5>SUBTOTAL: $<?= number_format($this->cart->total(), 2);?></h5>
										</div>
										<div class="cart-btns">
											<a href="<?= base_url('carrito');?>">Ver carrito</a>
											<?php if(isset($_SESSION['cliente'])):?>
											<a href="<?= base_url('realizar-pago');?>">Pagar  <i class="fa fa-arrow-circle-right"></i></a>
											<?php endif;?>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
        

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="<?= base_url();?>">Inicio</a></li>
						<li><a href="<?= base_url('mas-vendidos');?>">Mas vendidos</a></li>
						<li><a href="<?= base_url('luces');?>">Luces</a></li>
						<li><a href="<?= base_url('guitarras');?>">Guitarras</a></li>
						<li><a href="<?= base_url('microfonos');?>">Microfonos</a></li>
						<li><a href="<?= base_url('bocinas');?>">Bocinas</a></li>
						<li><a href="<?= base_url('amplificadores');?>">Amplificadores</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->