<?php

	require '../api_conf.php';
	
	$data = $dale->kueri("SELECT * FROM `master_product` ORDER BY `product_name` ASC");
	
	$data = json_decode($data);
	$json_data = [];

	for($i = 0; $i < sizeof($data); $i++){

		$json_data[$i][0]['data']  = $i + 1;

		// product barcode
		$json_data[$i][1]['data']  = $data[$i] -> product_barcode;
		$json_data[$i][1]['class'] = "";

		// product name
		$json_data[$i][2]['data']  = $data[$i] -> product_name;
		$json_data[$i][2]['class'] = "";

		// product price
		$json_data[$i][3]['data']  = $data[$i] -> product_price;
		$json_data[$i][3]['type']  = "price";
		$json_data[$i][3]['class'] = "";

		// product stok
		$json_data[$i][4]['data']  = $data[$i] -> product_stock;
		$json_data[$i][4]['type']  = "badge";

		if($data[$i] -> product_stock < 10){
			$json_data[$i][4]['class'] = "badge badge-danger";
		}
		else{
			$json_data[$i][4]['class'] = "badge badge-success";
		}
		
	}
	
	echo json_encode($json_data);
	

?>