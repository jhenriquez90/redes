$(document).ready(function(){
	jQuery(function($){
   $("#IP_ACCESO").mask("999.999.999.999");
   $("#MASK").mask("999.999.999.999");
   $("#GATEWAY").mask("999.999.999.999");
   $("#MAC_ADDRESS").mask("**:**:**:**:**:**");
});

$('#entrar').on('click',function(){
  
  var cargar=$('#modalDialog').html('<div class="app-load"><img src="img/30.gif" /></div>');    
var usuario=$('#user').val();
var pasw=$('#psw').val();

var dataString='usuario='+usuario+'&pasw='+pasw;

    $.ajax({
      type: "POST",
      url: "procesos/log.php",
    data: dataString,

      success: function(a) {
      var ver=a;
      
      if(ver==1){
      document.location.href = 'paginas/inicio.php';        

      }
      else{       
      ObtenerDialog('Usuario o Contraseña incorrecta');   

      }
      }
       });
});

$('#GUARDAR').on('click',function(e){
	e.preventDefault();
  var cargar=$('#modalDialog').html('<div class="app-load"><img src="../img/30.gif" /></div>');    
var NOM_DEPA=$('#NOM_DEPA').val();
var NOM_ROUTER=$('#NOM_ROUTER').val();
var MARCA=$('#MARCA').val();
	var MODELO=$('#MODELO').val();
	var SERIE=$('#SERIE').val();
	var INVENTARIO=$('#INVENTARIO').val();
	var CONTRA_ROUTER=$('#CONTRA_ROUTER').val();
	var IP_ACCESO=$('#IP_ACCESO').val();
	var MASK=$('#MASK').val();
	var GATEWAY=$('#GATEWAY').val();
	var MAC_ADDRESS=$('#MAC_ADDRESS').val();


var dataString='NOM_DEPA='+NOM_DEPA+'&NOM_ROUTER='+NOM_ROUTER+ '&MARCA='+MARCA+'&MODELO='+MODELO+'&SERIE='+SERIE+'&INVENTARIO='+INVENTARIO+'&CONTRA_ROUTER='+CONTRA_ROUTER+'&IP_ACCESO='+IP_ACCESO+'&MASK='+MASK+'&GATEWAY='+GATEWAY+'&MAC_ADDRESS='+MAC_ADDRESS;

    $.ajax({
      type: "POST",
      url: "../procesos/upload.php",
    data: dataString,
   
      success: function(a) {
      var ver=a;
      
      if(ver==1){
      obtenerDialog('Nota','Se Guardo Con Exito');      
      	$('#NOM_DEPA').val("");
      	$('#NOM_ROUTER').val("");
      	$('#MARCA').val("");
		$('#MODELO').val("");
		$('#SERIE').val("");
		$('#INVENTARIO').val("");
		$('#CONTRA_ROUTER').val("");
		$('#IP_ACCESO').val("");
		$('#MASK').val("");
		$('#GATEWAY').val("");
		$('#MAC_ADDRESS').val("");
      }
      else{       
      obtenerDialog('Alerta','No se pudo Guardar');

      }
      }
       });
});

$('.BEditar').on('click', function(){
  var id=$(this).parent().attr('data');
  
  
  $.ajax({
      type: "GET",  
      success: function(a) {
        document.location.href='editar.php?id='+id;        
    }
    });
});

$('#eGUARDAR').on('click', function(){

      var cargar=$('#modalDialog').html('<div class="app-load"><img src="../img/30.gif" /></div>');    
      var ID =$('#id').val();
      var NOM_DEPA=$('#NOM_DEPA').val();
      var NOM_ROUTER=$('#NOM_ROUTER').val();
      var MARCA=$('#MARCA').val();
      var MODELO=$('#MODELO').val();
      var SERIE=$('#SERIE').val();
      var INVENTARIO=$('#INVENTARIO').val();
      var CONTRA_ROUTER=$('#CONTRA_ROUTER').val();
      var IP_ACCESO=$('#IP_ACCESO').val();
      var MASK=$('#MASK').val();
      var GATEWAY=$('#GATEWAY').val();
      var MAC_ADDRESS=$('#MAC_ADDRESS').val(); 
      var dataString='ID='+ID+'&NOM_DEPA='+NOM_DEPA+'&NOM_ROUTER='+NOM_ROUTER+ '&MARCA='+MARCA+'&MODELO='+MODELO+'&SERIE='+SERIE+'&INVENTARIO='+INVENTARIO+'&CONTRA_ROUTER='+CONTRA_ROUTER+'&IP_ACCESO='+IP_ACCESO+'&MASK='+MASK+'&GATEWAY='+GATEWAY+'&MAC_ADDRESS='+MAC_ADDRESS;
    $.ajax({
        type: "POST",
        url: "../procesos/mEditar.php",
        data: dataString,
        success: function(a) {
          if (a==1){
              obtenerDialog('Nota','Se Guardo Con Exito');
              $('#aceptar').on('click', function(){
                document.location.href='../paginas/listado.php';
              });
              }
          else{
              obtenerDialog('Nota','No Se Pudo Guardar');
          }


        }
    });

});

$('.BEliminar').on('click', function(){
    var id=$(this).parent().attr('data');
    var dataString='id='+id;
      obtenerDialog('Advertencia','¿Desea Eliminar este Registro?');
      $('#aceptar').on('click', function(){
        $.ajax({
            type:"POST",
            url:"../procesos/delete.php",
            data:dataString,
            success:function(a){
                  if (a==1){
                      obtenerDialog('Nota','Su Registro Fue Eliminado Con Exito');
                      $('#aceptar').on('click', function(){
                          document.location.reload();

                      });
                  }
                  else{
                      obtenerDialog('Nota','Su Registro No Pudo Ser Eliminado');
                  }

            }

        });
      });

});
function ObtenerDialog(Contenido){
  var _html='<div class="alert alert-danger app-alert" role="alert">'+
  '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>'+
  '<span class="sr-only">Error:</span>'+
  Contenido+
'</div>';     

   $("#modalDialog").html(_html);
    }

    function obtenerDialog(Nota,Contenido){
  var _html='<div class="modal fade" id="error" tabindex="-1" role="dialog">'+
  '<div class="modal-dialog" role="document">'+
    '<div class="modal-content">'+
      '<div class="modal-header">'+
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
        '<h2 class="modal-title text-danger">'+Nota+'</h2>'+
      '</div>'+
      '<div class="modal-body">'+
      Contenido+  
      '</div>'+
      '<div class="modal-footer">'+
        '<button id="aceptar" type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>'+
       '</div>'+
    '</div>'+
  '</div>'+
'</div>';
   $('#modalDialog').html(_html);
    $('#error').modal('show');  
    }
});