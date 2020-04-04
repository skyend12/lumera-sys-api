<?php

	require '../api_conf.php';
	
	$data = $dale->kueri("SELECT * FROM `master_patients` ORDER BY `patients_name` ASC");
	
	$data = json_decode($data);
	$json_data = [];

	for($i = 0; $i < sizeof($data); $i++){

		$json_data[$i][0]['data']  = $i + 1;

		// patients name
		$json_data[$i][1]['data']  = $data[$i] -> patients_name;
		$json_data[$i][1]['class'] = "";

		// patients address
		$json_data[$i][2]['data']  = $data[$i] -> patients_address;
		$json_data[$i][2]['class'] = "";

		// patients hp
		$json_data[$i][3]['type']  = "badge";
		$json_data[$i][3]['class'] = "badge badge-success";
		$json_data[$i][3]['data']  = $data[$i] -> patients_hp;

		// patients dob
		$json_data[$i][4]['data']  = $data[$i] -> patients_dob;
		$json_data[$i][4]['class'] = "";
		
	}
	
	echo json_encode($json_data);
	

?>