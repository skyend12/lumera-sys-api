<?php
	
	require '../api_conf.php';

	if(isset($_GET['id'])){

		// get product detail
		$product = $dale->kueri("SELECT * FROM `master_services` WHERE `services_id` = '".$_GET['id']."'");

		// get hair stylist or hair washer
		$stafs = $dale->kueri("SELECT * FROM `master_staff` WHERE `staff_roles` = 'Stylist'");

		$product = json_decode($product);
		$stafs   = json_decode($stafs);
		
		$data = array($product[0], $stafs);
		echo json_encode($data);
	}

?>