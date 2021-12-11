<?php

include_once "lib/php/functions.php";

?>

	<input type="checkbox" id="menu" class="hidden">
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>DELTA</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>

			<nav class="nav nav-pills flex-none">
				<ul class="container display-flex">
					<li><a href="index.php">HOME</a></li>
					<li><a href="product_list.php">STORE</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="cart.php">
						<span>CART</span>
						<span class="badge"><?= makeCartbadge(); ?></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>

