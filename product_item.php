<?php

		include_once "lib/php/functions.php";
		
		$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];

		$images = explode(",", $product->images);

		$image_elements = array_reduce($images,function($r,$o){
			return $r."<img src='img/store/$o'>";
		});

		//print_p($_SESSION);

		?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/store/<?= $product->thumbnail ?>" alt="">
					</div>
					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card flat" method="post" action="cart_actions.php?action=add-to-cart">
					<input type="hidden" name="product-id" value="<?= $product->id ?>">
					<div class="card-section">
						<h2 class="product-title"><?= $product->name ?></h2>
					<div class="product-price">&dollar;<?= $product->price ?></div>
					</div>

					<div class="card-section">
						<h3>Size</h3>
						<div class="product-Size"><?= $product->size ?></div>

						<h3>Color</h3>
					<div class="product-Color"><?= $product->color ?></div>
					</div>
				
					<div class="card-section">
						<div class="form-control">
							<label for="product-amount" class="form-label">Amount</label>
							<div class="form-select">
							
							<select id="product-amount" name="product-amount">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							</select>
							</div>
						</div>
						
						<div class="form-control">
							<label for="product-color" class="form-label">Color</label>
							<div class="form-select">
							
							<select id="product-color" name="product-color">
							<option>Brown</option>
							<option>Blue</option>
							<option>Grey-Black</option>
												
							</select>
							</div>
						</div>
						
					</div>


						<div class="form-control-1 card-section">
							<input type="submit" class="form-button" value="Add To Cart">
						</div>
				</div>
			</form>
		</div>

		<div class="card soft">
			<h3>PERSOL</h3>
			<p><?= $product->description ?></p>
		</div>
	
</div>

</body>
</html>