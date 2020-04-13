<?php

	require '../api_conf.php';
	
	$data = "";

	if(isset($_GET['id'])){
		$data = $dale->kueri("SELECT * FROM `master_patients` WHERE `patients_id` = '".$_GET['id']."'");
	}
	else{
		$data = $dale->kueri("SELECT * FROM `master_patients` ORDER BY `patients_name` ASC");
	}

	
	$data = json_decode($data);
	$json_data = [];

	for($i = 0; $i < sizeof($data); $i++){

		$json_data[$i][0]['data']  = $data[$i] -> patients_id;
		$json_data[$i][0]['type']  = "id";

		// patients name
		$json_data[$i][1]['data']  = $data[$i] -> patients_name;
		$json_data[$i][1]['type']  = "text";
		$json_data[$i][1]['class'] = "";

		// patients address
		$json_data[$i][2]['data']  = $data[$i] -> patients_address;
		$json_data[$i][2]['type']  = "text";
		$json_data[$i][2]['class'] = "";

		// patients hp
		$json_data[$i][3]['data']  = $data[$i] -> patients_hp;
		$json_data[$i][3]['type']  = "text";
		$json_data[$i][3]['class'] = "";

		// patients dob
		$json_data[$i][4]['data']  = $data[$i] -> patients_dob;
		$json_data[$i][4]['type']  = "date";
		$json_data[$i][4]['class'] = "";

		// patients status
		$json_data[$i][5]['data']  = $data[$i] -> patients_status;
		$json_data[$i][5]['type']  = "badge_radio";

		if($data[$i] -> patients_status == 1){
			$json_data[$i][5]['class'] = "badge badge-success";
			$json_data[$i][5]['value'] = "Aktif";
		}
		else{
			$json_data[$i][5]['class'] = "badge badge-danger";
			$json_data[$i][5]['value'] = "Tidak Aktif";
		}
		
	}
	
	echo json_encode($json_data);
	

?>