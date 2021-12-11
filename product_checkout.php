<?php

		include_once "lib/php/functions.php";

		include_once "parts/templates.php";

		$cart = getCartItems();

		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout Page</title>

<?php include "parts/meta.php"; ?>
	
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="container">
	<div class="grid gap">
			
<div class="col-xs-12 col-md-5">
		<div class="card soft">
			<div class="card-section2">
			<h2>Item Review</h2>
			<?php
			echo array_reduce($cart,function($r,$o){
				$totalfixed = number_format($o->total,2,'.','');
				return $r."<div class='display-flex'>
					<div class='flex-stretch'>$o->name</div>
					<div class='flex-none'>&dollar;$totalfixed</div>
				</div>";
			}) ?>
			</div>
			<?= cartTotals(); ?>
		</div>
	</div>
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<h2>Prodcut Checkout</h2>
			
				<br>
			
				<h3>Address</h3>
				<form>
				<div class="form-control">
					<label class="form-label">Address 1</label>
					<input type="text" placeholder="Address" class="form-input">
				</div>
					<div class="form-control">
						<label class="form-label">Address 2(optional)</label>
						<input type="text" placeholder="" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">City</label>
						<input type="text" placeholder="City" class="form-input">
					</div>
			
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">Zip Code</label>
						</div>
						<div class="flex-stretch">
							<input type="search" placeholder="Zip Code" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">State</label>
						</div>
						<div class="flex-stretch">
							<input type="search" placeholder="State" class="form-input flex-stretch">
						</div>
					</div>
			</form>
			
			<br>
			
			<h3>Payment</h3>
				<form>
				<div class="form-control">
					<label class="form-label">Full Name</label>
					<input type="text" placeholder="Name" class="form-input">
				</div>
					<div class="form-control">
						<label class="form-label">Card Number</label>
						<input type="number" placeholder="#### #### #### ####" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Expiration Date</label>
						<input type="number" placeholder="MM-YY" class="form-input">
					</div>
			
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">CVV</label>
						</div>
						<div class="flex-stretch">
							<input type="search" placeholder="CVV" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">Zip Code</label>
						</div>
						<div class="flex-stretch">
							<input type="search" placeholder="Zip Code" class="form-input flex-stretch">
						</div>
					</div>
					<br>
					<div class="form-control-1">
							 
							 <p><a href="product_confirmation.php" class="form-button">Complete Checkout</a></p> 
					</div>
					</form>
		</div>
	</div>
	


	

	</div>
</div>

</body>
</html>