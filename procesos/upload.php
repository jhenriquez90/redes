<?php
require_once '../class/conexion.php';
$NOM_DEPA=$_POST['NOM_DEPA'];
$NOM_ROUTER=$_POST['NOM_ROUTER'];
$MARCA=$_POST['MARCA'];
	$MODELO=$_POST['MODELO'];
	$SERIE=$_POST['SERIE'];
	$INVENTARIO=$_POST['INVENTARIO'];
	$CONTRA_ROUTER=$_POST['CONTRA_ROUTER'];
	$IP_ACCESO=$_POST['IP_ACCESO'];
	$MASK=$_POST['MASK'];
	$GATEWAY=$_POST['GATEWAY'];
	$MAC_ADDRESS=$_POST['MAC_ADDRESS'];
if ($NOM_DEPA!="" and $NOM_ROUTER!="" and $MARCA!="" and $MODELO!="" and $SERIE!="" and $INVENTARIO!="" and $CONTRA_ROUTER!="" and $IP_ACCESO!="" and $MASK!="" and $GATEWAY!="" and $MAC_ADDRESS!=""){
$sql="insert into dispositivos (NOM_DEPA,NOM_ROUTER,MARCA,MODELO,SERIE,INVENTARIO,CONTRA_ROUTER,IP_ACCESO,MASK,GATEWAY,MAC_ADDRESS) values('$NOM_DEPA','$NOM_ROUTER','$MARCA','$MODELO','$SERIE','$INVENTARIO','$CONTRA_ROUTER','$IP_ACCESO','$MASK','$GATEWAY','$MAC_ADDRESS')";
mysql_query($sql,Conectar::con());
echo 1;
}
else{
	echo 0;
}

?>