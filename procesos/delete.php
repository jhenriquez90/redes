<?php
	require_once '../class/conexion.php';
	$id=$_POST['id'];
	if 	($id!=""){
		$sql="delete from dispositivos where ID=$id";
		mysql_query($sql,Conectar::con());
		echo 1;
	}

	else{
			echo 0;
	}


 ?>