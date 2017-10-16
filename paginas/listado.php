<?php
require_once '../class/conexion.php';
require_once("../class/obj_dispositivos.php");
session_start();

if($_SESSION['USUARIO']=="")
{
header("location:../procesos/logout.php");
} 
$obj_1=new Tarchivos();
$Obtenerdispositivos=$obj_1->getarchivos();

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gestión y Control de Documentos</title>
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
          <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
          </button>
           <h1 class="app-h1">Dirección Nacional de Telemática</h1>
          
          </div>
          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right navbar-personalizado">             
              
                 <li class="dropdown"><a id="IN" class="app-navbar"  href="../paginas/inicio.php">Ingresar Nuevo</a>
                 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""> <span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['NOMBRE']."&nbsp".$_SESSION['APELLIDO']; ?> <span class="caret Qs"> </span></a>
              <ul class="dropdown-menu navbar-dropdown">
                            
               <li><a href="usuarios">Usuarios</a></li>
              
             
               <li><a href="permisos">Cargos</a></li>
               
                <li><a href="catalogo">Catalago</a></li>
               <li role="separator" class="divider"></li>
              <li><a href="../procesos/logout.php">Cerrar Sesion</a></li>
              </ul>
             
              </li>
            </ul>
            
          </div>

          
          </div>
          
         

      </nav>
     </header>

        <div class="container" >
        <h3 class="app-head">DOCUMENTOS INGRESADOS AL SISTEMA</h3>

        

        <section id="TSearch">
        <div id="TableSearch">
           
        </div> 
           
          <!--<span id="Cbusqueda" class="btn btn-default" onclick = "location='http://localhost/Proyecto/paginas/inicio.php'">Cerrar</span>-->
          
        </section>


  

<section id="MisArchivos">
  <div class="container">
  <div class="table-responsive">
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 app-table ">
        <table class="table table-bordered  ">
        <thead>
        <tr>
            <th>Id</th>
                     
            <th>Nombre Departamento</th>
            <th>Nombre Router</th>
            <th>Marca</th>
            <th>Modelo</th>  
            <th>Serie</th>
            <th>Inventario</th> 
            <th>Contraseña Router</th>
            <th>IP de Acceso</th>
            <th>Mask</th>
            <th>Gateway</th>
            <th>MAC Address</th>   
            
            </tr>
        </thead>
        
        <?php for($i = 0; $i < sizeof($Obtenerdispositivos); $i++){  ?>

<tbody>

<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $Obtenerdispositivos[$i]['NOM_DEPA']; ?></td>
     <td><?php echo $Obtenerdispositivos[$i]['NOM_ROUTER']; ?></td>
    
       <td><?php echo $Obtenerdispositivos[$i]['MARCA']; ?></td>              
           <td><?php echo $Obtenerdispositivos[$i]['MODELO']; ?></td> 
           <td><?php echo $Obtenerdispositivos[$i]['SERIE']; ?></td> 
            <td><?php echo $Obtenerdispositivos[$i]['INVENTARIO']; ?></td> 
             <td><?php echo $Obtenerdispositivos[$i]['CONTRA_ROUTER']; ?></td> 
              <td><?php echo $Obtenerdispositivos[$i]['IP_ACCESO']; ?></td> 
               <td><?php echo $Obtenerdispositivos[$i]['MASK']; ?></td> 
                <td><?php echo $Obtenerdispositivos[$i]['GATEWAY']; ?></td> 
                 <td><?php echo $Obtenerdispositivos[$i]['MAC_ADDRESS']; ?></td>

                 <td><div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li data="<?php echo $Obtenerdispositivos[$i]['ID']; ?>"><a href="#" class="BEditar">Editar</a></li>
    <li  data="<?php echo $Obtenerdispositivos[$i]['ID']; ?>"><a href="#" class="BEliminar">Eliminar</a></li>
  
  </ul>
</div>
</td>
            </tr>

          
</tbody>
   <?php } ?>     
        </table>
        </div>
        </div>
        </div>
 </div>      
</section>



      
    </div> <!-- /container -->   
    <div id="modalDialog">
      
    </div>
    
<!--Desarrollado por Jorge Henriquez en colaboracion con el Departamento de Desarrollo de Telemática -->   
<footer class="app-footer">
   
    <div class="container">
         Desarrollado por Giselle Salgado del Instituto Cerro de Plata, en colaboracion con el Departamento de Conectividad
        <br>Derechos Reservados 2017
    </div>
</footer>
         
        <script src="../js/vendor/jquery-1.11.2.min.js"></script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>
    </body>
      
</html>
