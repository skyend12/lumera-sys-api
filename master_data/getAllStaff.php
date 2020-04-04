<?php

	require '../api_conf.php';
	
	$data = $dale->kueri("SELECT * FROM `master_staff` ORDER BY `staff_name` ASC");
	
	$data = json_decode($data);
	$json_data = [];

	for($i = 0; $i < sizeof($data); $i++){

		$json_data[$i][0]['data']  = $i + 1;

		// staff name
		$json_data[$i][1]['data']  = $data[$i] -> staff_name;
		$json_data[$i][1]['class'] = "";

		// staff roles
		$json_data[$i][2]['data']  = $data[$i] -> staff_roles;
		$json_data[$i][2]['class'] = "";

		// staff status
		$json_data[$i][3]['type']  = "badge";

		if($data[$i] -> staff_status == 0){
			$json_data[$i][3]['class'] = "badge badge-danger";
			$json_data[$i][3]['data']  = "Tidak Aktif";
		}
		else{
			$json_data[$i][3]['class'] = "badge badge-success";
			$json_data[$i][3]['data']  = "Aktif";
		}
		
	}
	
	echo json_encode($json_data);
	

?>