<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store</title>

<?php include "parts/meta.php"; ?>

<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script>
<script src="js/product_list.js"></script>
	
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="container">
		<h2>Product List</h2>
		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control">
			<div class="card soft">

			<div class="display-flex flex-wrap">
				<div class="flex-stretch display-flex flex-wrap">
					
						<div class="flex-none">
							<button data-filter="category" data-value="" type="button" class="form-button-1">all</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="Versace" type="button" class="form-button-1">Versace</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="Oakley" type="button" class="form-button-1">Oakley</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="Ray-Ban" type="button" class="form-button-1">Ray-Ban</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="PERSOL" type="button" class="form-button-1">Persol</button>
						</div>
					</div>	
				
					<div class="flex-none">
			
					<div class="form-select">
			
									<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Price: Low to High</option>
									<option value="4">Price: High to Low</option>
								
									</select>
					</div>
					</div>
				</div>
			</div>
		</div>

		<br>

<div class='productlist grid gap'></div>
		

</body>
</html>