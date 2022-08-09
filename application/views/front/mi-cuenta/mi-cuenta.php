		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    <?php if(isset($_SESSION['cliente'])): ?>
                        <?php include_once('info.php');?>
                    <?php else: ?>
                        <?php include_once('no-login.php');?>
                    <?php endif; ?>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->