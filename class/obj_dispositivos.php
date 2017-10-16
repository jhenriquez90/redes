<?php
require_once ('conexion.php');

class Tarchivos{
private $verdispositivos;
private $edicion;



public function __construct(){
	$this->verdispositivos=array();
	$this->edicion=array();
	
}

public function getarchivos(){
$sql="SELECT * FROM dispositivos";
$res=mysql_query($sql,Conectar::con());
while($reg = mysql_fetch_assoc($res)){
				$this->verdispositivos[] = $reg;
			}
			return $this->verdispositivos;

}

public function getdatos(){
	$id=$_POST['id'];
$sql="SELECT * FROM dispositivos where id=$id" ;
$res=mysql_query($sql,Conectar::con());
while($reg = mysql_fetch_assoc($res)){
				$this->edicion[] = $reg;
			}
			return $this->edicion;

}

}




?>