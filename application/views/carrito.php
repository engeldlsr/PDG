<style>
    .tbl_items tr:nth-child(even){
        background-color:rgba(255, 200, 200, .2) !important;
    }

    td.t{
        float:right !important;
        border:none !important;
    }
</style>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
        <?php echo form_open('carrito/cart_update'); ?>

<table class="table table-bordered tbl_items" cellpadding="6" cellspacing="1" style="width:100%" border="0">
    <tr>
        <?php //var_dump($this->cart->contents());?>
        <th>QTY</th>
        <th>Descipcion</th>
        <th style="text-align:right">Precio c/u</th>
        <th style="text-align:right">Sub-Total</th>
    </tr>
    
    <?php $i = 1; ?>

    <?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td> 
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>

    <?php $i++; ?>

    <?php endforeach; ?>

    <tr>
        <td colspan="2"> </td>
        <td class="right t"><strong>Total</strong></td>
        <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
    </tr>

</table>

<p><?php echo form_submit('', 'Actualizar carrito', "class='btn btn-danger'"); ?></p>

<?php if(isset($_SESSION['cliente'])): ?>
<p> <a href="realizar-pago" class="btn btn-danger">Pagar ahora</a> </p>
<?php endif; ?>

<p><a href="<?= base_url('carrito/cart_delete'); ?>">Vaciar carrito</a></p>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

		