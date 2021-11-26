<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	
	echo "<div> Hellow World </div>";
	echo "<div> Goodbye World </div>";
	
	
	// Variables
	$a = 5;

	echo $a;

	// String Interpolation
	echo "<div>I have $a things</div>";

	// Number
	
	// Integer
	$b =15;
	
	// Float
	$b =0.579;

	$b =10;

	// String
	$name = "Yerguy2";

	// Boolean
	$isOn = true;


	
	// Math and Order of Operation
	// PEMDAS
	echo (5 - 4) * 2;

	// Concatenation
	echo "<div> b + a" . "= c </div>";
	echo "<div> $b + $a = ".($a+$b)."</div>";


	//phpinfo();

	?>


	<hr>
	<div>This is my name</div>
	<div></div>

	<?php

	$firstname = "Ji";
	$lastname = "Hwang"; 
	$fullname = $firstname . " " . $lastname;
	// $fullname = "$firstname $lastname;"
	echo $fullname;

	?>

	<hr>
	<?php
	// Superglobal
	
	// add ?name=Ji to the end of the url 
	echo "<a href='?name=Ji'>Visit</a><br>";
	echo "<div>My name is {$_GET['name']} </div>";


	//?name=Ji&type=textarea
	echo "<a href='?name=Ji&type=textarea'>Visit</a><br>";
	echo "<{$_GET['type']}>My name is {$_GET['name']} </{$_GET['type']}>";

	?>
	<hr>
	<?php

	//Array
	$colors = array("red","green","blue");

	echo $colors[2];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";

	echo count($colors);

	?>

	<div style="color:<?= $colors[1] ?>">
		This text is green
	</div>

	<hr>
	<?php
	
	//Associative Array
	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "00f"
	];
	echo $colorsAssociative['green'];
	?>

	<hr>
	<?php
	// Casting
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	// echo $colorsObject;
	
	echo "<hr>";

	// Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	// Object Property Notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	?>

	<hr>
	<?php
	print_r($colors); //output of array
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	echo "<pre>", print_r($colorsObject), "</pre>";

	// Function
	function print_p($v){
		echo "<pre>", print_r($v), "</pre>";
	}
	print_p($_GET); // show all of the values that are currently up in the URL
	?>


</body>
</html>