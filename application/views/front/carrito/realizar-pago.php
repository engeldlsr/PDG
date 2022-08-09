

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Dirección de Envio</h3>
								<?php //var_dump($this->cart->contents());?>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="nombre" value="<?= $_SESSION['cliente']['nombre'];?>" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="apellido" value="<?= $_SESSION['cliente']['apellidos'];?>" placeholder="Apellidos">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" value="<?= $_SESSION['cliente']['email'];?>" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="direccion" value="<?= $_SESSION['cliente']['direccion'];?>" placeholder="Direccion">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="ciudad" value="<?= $_SESSION['cliente']['ciudad'];?>" placeholder="Ciudad">
							</div>

							<div class="form-group">
								<input class="input" type="tel" name="telefono" value="<?= $_SESSION['cliente']['telefono'];?>" placeholder="Telefono">
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" name="nota" placeholder="Nota"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">SU PEDIDO</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCTO</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<?php $cartContents = $this->cart->contents();?>
								<?php foreach($cartContents as $cart): ?>
								<div class="order-col">
									<div><?= $cart['qty'];?>x <?= $cart['name'];?></div>
									<div>$<?= number_format($cart['price'], 2);?></div>
								</div>
								<?php endforeach;?>
							</div>
							<div class="order-col">
								<div>Envío</div>
								<div><strong>GRATIS</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$<?= number_format($this->cart->total(), 2);?></strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Transferencia bancaria
								</label>
								<div class="caption">
									<p>Al utilizar este método, primero debe realizar la transferencia a nombre de la empresa <strong>E&J Music</strong>, luego enviar el recibo de comprobante a nuestro número de WhatsApp</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Pago contra entrega
								</label>
								<div class="caption">
									<p>Realice el pago el recibir sus producto, si usa este método favor de notificar si requiere que lleven <strong>Verifone</strong> para realizar el pago con tarjeta de crédito.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal o Tajeta de Cedito
								</label>
								<div class="caption">
									<p>Puedes pagar de forma segura en nuestro comercio mediante <strong>PayPal</strong> o con su tarjeta de crédito <strong>Visa</strong> o <strong>MasterCard</strong></p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								He leído y acepto los <a href="#">términos y condiciones</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Realizar pedido</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->