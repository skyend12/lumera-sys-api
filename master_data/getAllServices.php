<?php

	require '../api_conf.php';
	
	$data = "";

	if(isset($_GET['id'])){
		$data = $dale->kueri("SELECT * FROM `master_services` WHERE `services_id` = '".$_GET['id']."'");
	}
	else{
		$data = $dale->kueri("SELECT * FROM `master_services` ORDER BY `services_name` ASC");
	}

	
	$data = json_decode($data);
	$json_data = [];

	for($i = 0; $i < sizeof($data); $i++){

		$json_data[$i][0]['data']  = $data[$i] -> services_id;
		$json_data[$i][0]['type']  = "id";

		// services name
		$json_data[$i][1]['data']  = $data[$i] -> services_name;
		$json_data[$i][1]['type']  = "text";
		$json_data[$i][1]['class'] = "";

		// services price
		$json_data[$i][2]['data']  = $data[$i] -> services_price;
		$json_data[$i][2]['type']  = "price";
		$json_data[$i][2]['class'] = "";

		// services category
		$json_data[$i][3]['data']  = $data[$i] -> services_category;
		$json_data[$i][3]['type']  = "badge";

		if($data[$i] -> services_category == "Klinik"){
			$json_data[$i][3]['class'] = "badge badge-primary";
		}
		else{
			$json_data[$i][3]['class'] = "badge badge-info";
		}
		
	}
	
	echo json_encode($json_data);
	

?>