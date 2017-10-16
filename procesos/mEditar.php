<?php
require_once '../class/conexion.php';
$ID=$_POST['ID'];
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
if ($ID!="" and $NOM_DEPA!="" and $NOM_ROUTER!="" and $MARCA!="" and $MODELO!="" and $SERIE!="" and $INVENTARIO!="" and $CONTRA_ROUTER!="" and $IP_ACCESO!="" and $MASK!="" and $GATEWAY!="" and $MAC_ADDRESS!=""){
$sql="update dispositivos set NOM_DEPA='$NOM_DEPA', NOM_ROUTER='$NOM_ROUTER', MARCA='$MARCA', MODELO='$MODELO', SERIE='$SERIE', INVENTARIO='$INVENTARIO', CONTRA_ROUTER='$CONTRA_ROUTER', IP_ACCESO='$IP_ACCESO', MASK='$MASK', GATEWAY='$GATEWAY', MAC_ADDRESS='$MAC_ADDRESS' where ID=$ID ";
mysql_query($sql,Conectar::con());
echo 1;
}
else{
	echo 0;
}

?>