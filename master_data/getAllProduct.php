<?php

	require '../api_conf.php';
	
	$data = "";

	if(isset($_GET['id'])){
		$data = $dale->kueri("SELECT * FROM `master_product` WHERE `product_id` = '".$_GET['id']."'");
	}
	else{
		$data = $dale->kueri("SELECT * FROM `master_product` ORDER BY `product_name` ASC");
	}

	
	$data = json_decode($data);
	$json_data = [];

	for($i = 0; $i < sizeof($data); $i++){

		$json_data[$i][0]['data']  = $data[$i] -> product_id;
		$json_data[$i][0]['type']  = "id";

		// product name
		$json_data[$i][1]['data']  = $data[$i] -> product_name;
		$json_data[$i][1]['type']  = "text";
		$json_data[$i][1]['class'] = "";

		// product price
		$json_data[$i][2]['data']  = $data[$i] -> product_price;
		$json_data[$i][2]['type']  = "price";
		$json_data[$i][2]['class'] = "";

		// product stock
		$json_data[$i][3]['data']  = $data[$i] -> product_stock;
		$json_data[$i][3]['type']  = "badge";

		if($data[$i] -> product_stock < 10){
			$json_data[$i][3]['class'] = "badge badge-danger";
		}
		else{
			$json_data[$i][3]['class'] = "badge badge-success";
		}

		// product status
		$json_data[$i][4]['data']  = $data[$i] -> product_status;
		$json_data[$i][4]['value'] = $data[$i] -> product_status;
		$json_data[$i][4]['type']  = "badge_radio";

		if($data[$i] -> product_status == 1){
			$json_data[$i][4]['class'] = "badge badge-success";
			$json_data[$i][4]['value'] = "Aktif";
		}
		else{
			$json_data[$i][4]['class'] = "badge badge-danger";
			$json_data[$i][4]['value'] = "Tidak Aktif";
		}
		
	}
	
	echo json_encode($json_data);
	

?>