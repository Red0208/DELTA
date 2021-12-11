<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DELTA</title>

	<?php include "parts/meta.php"; ?>

</head>
<body class="flush">
	
	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url('img/Home.png')"></div>
<br>

<div class="container">
	<div class="card soft">
		<h3>Ray-Ban Stories</h3>
		<p>The first generation of Ray-Ban smart glasses has arrived, discover the new way to capture, share & listen. Only available at select, certified Ray-Ban dealers – online and in store.</p>

			<div class="form-control-1">
			<a href="product_list.php" class="form-button">Explore</a>
		</div>
	</div>

<br>

		<div class="container">
		<h2>Limited Time</h2>

		<?php

		$result = makeQuery(makeConn(),
			"
			SELECT *
			FROM `products`
			ORDER BY `date_create` ASC
			LIMIT 3
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

		?>


</div>
</div>
<br>
<div class="container">
	<h2>Recommend Sunglasses</h2>
			<?php recommendedCategory("Versace");?>
</div>


</body>
</html>















