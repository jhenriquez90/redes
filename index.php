
<?php
require_once 'class/conexion.php';

session_start();
if (isset($_SESSION['USUARIO'])) {
header("location:paginas/inicio.php");
} else {
$_SESSION['USUARIO'] = "";
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
        <link rel="shortcut icon" href="img/logo.png" />
        <link rel="shortcut icon" href="img/logo.png" type="image/png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
           <h1 class="app-h1">Dirección Nacional de Telemática</h1>
          <!--<div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right navbar-personalizado">
              
             
              
                   
            </ul>
            
          </div>-->

          
          </div>
          
         

      </nav>
     </header>
      <section id="login">  
      <div class="container">
<div class="row">


   <div class="form-horizontal app-login">

<h3 class="app-head">Departamento de Conectividad</h3>

  <div class="form-group">
  
    <label for="user" class="col-sm-2 col-lg-2 control-label">Usuario</label>
    <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
      <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
    </div>
  </div>

  <div class="form-group">
    <label for="psw" class="col-sm-2 col-lg-2 control-label">Contraseña</label>
    <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
      <input type="password" class="form-control" id="psw" name="psw" placeholder="Contraseña">
    </div>
  </div>
  
 <div class="app-botonera"> 
<div id="modalDialog"></div>

 <button type="button" class="btn btn-success" id="entrar" name="entrar">Ingresar</button>
 </div> 
  
    
 </div>
 


</div><!--fin row-->
</div>
</section>
<footer class="app-footer">
   
    <div class="container">
        Desarrollado por Giselle Salgado del Instituto Cerro de Plata, en colaboracion con el Departamento de Conectividad  
        <br>Derechos Reservados 2017
    </div>
</footer>
    <!--Desarrollado por Jorge Henriquez en colaboracion con el Departamento de Desarrollo de Telemática -->   

         
       <script src="js/vendor/jquery-1.11.2.min.js"></script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
