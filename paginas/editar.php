<?php 
    require_once '../class/conexion.php';
$id=$_GET['id'];
$sql="SELECT * FROM dispositivos where id=$id" ;
$res=mysql_query($sql,Conectar::con());
session_start();

if($_SESSION['USUARIO']=="")
{
header("location:../procesos/logout.php");
} 


?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dirección Nacional de Telemática</title>
        <link rel="shortcut icon" href="../img/logo.png" />
        <link rel="shortcut icon" href="../img/logo.png" type="image/png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
                <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="menunav">
        <div id="logo">
         
        </div>
        
         <nav class="navbar navbar-personalizado">
        <div class="container">
          <!--<button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
          </button>-->
           <h1 class="app-h1">Sistema de Edicion de Parametros de Routers Wi-Fi</h1>
          <!--<div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right navbar-personalizado">      
            </ul>
            
          </div>-->
          </div>
      </nav>
     </header>

            <div class="container">
            <div class="app-container">
              <div class="row"> 

                <div class="container">
                    <?php while($row=mysql_fetch_array($res)) : ?>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
             <div class="form-group">
                <label for="NOM_DEPA">Departamento:</label>
                <!--<SELECT NAME="NOM_DEPA" SIZE=1 "> 
                    <option selected> -</option>
                    <OPTION VALUE="1">Depto. Conectividad</OPTION>
                    <OPTION VALUE="2">Depto. Gerencia</OPTION>
                    <OPTION VALUE="3">Depto. Vice-Ministra</OPTION>
                    <OPTION VALUE="4">Comisario Lerolero</OPTION> 
                </SELECT>-->
            <input type="text" class="form-control" id="NOM_DEPA" value="<?php echo $row['NOM_DEPA']; ?>">
            </div>
            
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="NOM_ROUTER">Nombre Router:</label>
                <input type="text" class="form-control" id="NOM_ROUTER" value="<?php echo $row['NOM_ROUTER']; ?>">
            </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="MARCA">Marca:</label>
                <input type="text" class="form-control" id="MARCA" value="<?php echo $row['MARCA']; ?>">
            </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="MODELO">Modelo:</label>
                <input type="text" class="form-control" id="MODELO" value="<?php echo $row['MODELO']; ?>">
            </div>
            </div>
            </div>
            </div><!--Cierre Primer Row-->
            <div class="row">
            <div class="container">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="SERIE">Serie:</label>
                <input type="text" class="form-control" id="SERIE" value="<?php echo $row['SERIE']; ?>">
            </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="INVENTARIO">Inventario:</label>
                <input type="text" class="form-control" id="INVENTARIO" value="<?php echo $row['INVENTARIO']; ?>">
            </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="CONTRA_ROUTER">Contraseña Router:</label>
                <input type="text" class="form-control" id="CONTRA_ROUTER" value="<?php echo $row['CONTRA_ROUTER']; ?>">
            </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="IP_ACCESO">IP de Acceso:</label>
                <input type="text" class="form-control" id="IP_ACCESO" value="<?php echo $row['IP_ACCESO']; ?>">
            </div> 
            </div>
            </div>
            </div><!--Cierre Segundo Row-->
            <div class="row">
            <div class="container">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="MASK">Mask:</label>
                <input type="text" class="form-control" id="MASK" value="<?php echo $row['MASK']; ?>">
            </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="GATEWAY">Gateway:</label>
                <input type="text" class="form-control" id="GATEWAY" value="<?php echo $row['GATEWAY']; ?>" >
            </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="form-group">
                <label for="MAC_ADDRESS">MAC Address:</label>
                <input type="text" class="form-control" id="MAC_ADDRESS" value="<?php echo $row['MAC_ADDRESS']; ?>">
            </div>
            <?php endwhile; ?> 
            <input type="hidden" id="id" name="id" value="<?php echo $id=$_GET['id']; ?>">
            <button  class="btn btn-default" id="eGUARDAR"> Guardar</button>
            
            </div>

       </div>
       </div>
       </div>
   </div>
<div id="modalDialog"></div>
      
<footer class="app-footer">
   
    <div class="container">
        Desarrollado por Giselle Salgado del Instituto Cerro de Plata, en colaboracion con el Departamento de Conectividad 
        <br>Derechos Reservados 2017
    </div>
</footer>
    <!--Desarrollado por Jorge Henriquez en colaboracion con el Departamento de Desarrollo de Telemática -->   

         
       <script src="../js/vendor/jquery-1.11.2.min.js"></script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>

        <script src="../js/jquery.maskedinput.js"></script>
    </body>
</html>