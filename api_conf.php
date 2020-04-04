<?php
	
	require 'dale.php';

	define("HOST", "127.0.0.1");
	define("DATABASE", "lumerasystem");
	define("USER", "root");
	define("PASSWORD", "");

	$dale = new dale();
	$dale->konek_ke_database(HOST, DATABASE,USER,PASSWORD);


?>