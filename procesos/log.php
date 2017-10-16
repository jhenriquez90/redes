<?php session_start(); 
require_once '../class/conexion.php';

$user=$_POST['usuario'];
$pasw=$_POST['pasw'];

$sql="select*from usuarios where USUARIO='$user' and CONTRA='$pasw'";
$query=mysql_query($sql,Conectar::con());
$result=mysql_num_rows($query);
while($usuarios=mysql_fetch_array($query)){
$_SESSION['ID']=$usuarios['ID'];
$_SESSION['USUARIO']=$usuarios['USUARIO'];
$_SESSION['NOMBRE']=$usuarios['NOMBRE'];
$_SESSION['APELLIDO']=$usuarios['APELLIDO'];
$_SESSION['NIVEL']=$usuarios['NIVEL'];

}

if($result==1){

	echo 1;

}else{
	echo 0;
}
?>