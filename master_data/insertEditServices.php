<?php
	
	require '../api_conf.php';
	
	if(isset($_GET['data_0'])){
		$data = $dale->kueri("INSERT INTO `master_services` 
						 SET services_id       = '".md5($_GET['data_0'])."',
							 services_name     = '".$_GET['data_0']."',
							 services_category = '".$_GET['data_2']."',
							 services_price    = '".$_GET['data_1']."',
							 created_by        = 'NULL',
							 updated_by        = 'NULL' 
					     ON DUPLICATE KEY
					         services_id       = '".md5($_GET['data_0'])."',
							 services_name     = '".$_GET['data_0']."',
							 services_category = '".$_GET['data_2']."',
							 services_price    = '".$_GET['data_1']."',
							 created_by        = 'NULL',
							 updated_by        = 'NULL' ");
	}
	
?>