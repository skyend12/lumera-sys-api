<?php
	
	require '../api_conf.php';


	if(isset($_GET['data_0'])){

		$id = $_GET['data_id'];

		if($id == null){
			$id = md5($id);
		}

		$data = $dale->kueri("INSERT INTO `master_services` 
							  SET services_id        = '".$id."', 
							  	  services_name      = '".$_GET['data_0']."', 
							  	  services_category  = '".$_GET['data_2']."',
							  	  services_price     = '".$_GET['data_1']."', 
							  	  created_by         = 'NULL', 
							  	  updated_by         = 'NULL' 
							  ON DUPLICATE KEY UPDATE 
							  	  services_name      = '".$_GET['data_0']."', 
							  	  services_category  = '".$_GET['data_2']."',
							  	  services_price     = '".$_GET['data_1']."', 
							  	  created_by         = 'NULL', 
							  	  updated_by         = 'NULL'");
		echo $data;
	}
	
?>