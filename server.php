<?php 

	date_default_timezone_get("Asia/jakarta");
	if($_GET['p']=="date"){
		echo date("Y-m-d H:i:s");

	}else if($_GET['p']=="joiner"){
		echo $_POST['nama1']." ".$_POST['nama2']
	} 
?>