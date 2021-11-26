
<?php

		include_once "lib/php/functions.php";
		
		$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];

		$cart_product = cartItemById($_GET['id']);


		?>

		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>

<?php include "parts/meta.php"; ?>
	
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="container">
	<div class="card soft">
		<h2>You Added <?=$product->name ?> to your cart.</h2>

		<p>There are now <?=$cart_product->amount ?> of <?=$product->name ?> in your cart. </p>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
					<div class="images-main">
						<img src="img/store/<?= $product->thumbnail ?>" alt="">
					</div>
				

		<div class="display-flex">
			
		
			<div class="flex-none"><a href="cart.php">Go To Cart</a></div>
		</div>
	</div>
</div>

</body>
</html>