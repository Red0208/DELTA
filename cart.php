<?php

		include_once "lib/php/functions.php";

		include_once "parts/templates.php";

		$cart = getCart();
		
		//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1,8,10)");

		$cart_items = getCartItems();

		?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store</title>

<?php include "parts/meta.php"; ?>
	
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="container">
	<h2>Cart</h2>
		
		<?php

		if(count($cart)) {
			?>
			<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class=" card soft soft">
					<?= cartTotals() ?> 
					<div class="form-control-1 card-section">
							<a href="product_checkout.php" class="form-button">Checkout</a>
						</div>
				</div>
			</div>
	</div>
		<?php
		} else {
			?>
			
				<div class="card soft">
					<p>No items in cart</p>
				</div>

				<h3>Other Recommendations</h3>
				<?php recommendedAnything(6);?>
		<?php
		}
		?>
</div>

</body>
</html>