<?php 

function MYSQLIAuth() {
	return [
		"localhost", //mysql host
		"redliu", //mysql username
		"lxy080814ss", //mysql pass
		"redaauwnm608database" // mysql database name
	];
}



function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=redaauwnm608database", //host and database name
		"redliu", //mysql username
		"lxy080814ss", //mysql pass
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}