<?php
require_once("class/classbd.php");
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plomero al instante</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="style-sheet" href="css/app.css">
  </head>
  <body onload="limpiar();">
   <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
      
   <div class="primary callout"><!--width="800 align="center"-->
    
		  <div class="small-12 small-centered columns">
		
		<div class="row">
			
            <!--  <p><strong><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plomero al instante</h1></strong></p>-->
			<center><p><strong><h1></h1></strong><img src="ima/logonew.jpg" border="0" width="400" height="400"></p></center>
			<!--center><p><strong><h1>Plomero al instante</h1></strong></p></center-->
			<!--p><strong><h1></h1></strong><img src="ima/plomerito2a.jpg" border="0" width="300" height="300" ></p-->
			<p><h5>  </h5></p>
           
<center><p><i><strong><h3>Creando servicios de calidad! </h3></strong></i></p></center>
	
    		 <div id="buscador" class="large-4 medium-4 columns">
			<form name="Buscador" method="get" action="empleados.php">
			<label>Buscar empleado</label>
<input type="text" name="s" placeholder="large-4.columns">			
			 <div id="buscador" class="large-4 medium-4 columns">
			<a href="javascript:void(0);" onClick="window.location='mostrarempleado.php?id=<?php echo $_GET['s'];?>';" title="Buscar empleado"><img src="ima/iconLupa.png" border="0" width="50" height="50"></a>
			
			</div>
            
		
			</form>
		
	
			
			</div>
		</div>
				
		
  </div>
      </div></div>
 <div class="small-12 small-centered columns">
   <div class="primary callout">
          
    <div class="small-12 small-centered columns">
        <h5>Complete el formulario para dar de alta un empleado </h5>
		 <hr />
		<form name="form" action="ingresarempleado.php" method="post">
            <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Nombre del empleado</label>
              <input type="text" name="Nombre" placeholder="large-4.columns" />
			  	 
            </div>
            <div class="large-4 medium-4 columns">
              <label>Apellido Paterno</label>
              <input type="text" name="ApellidoP" placeholder="large-4.columns" />
            </div>      <div class="large-4 medium-4 columns">
              <label>Apellido Materno</label>
              <input type="text" name="ApellidoM" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Telefono de casa</label>
              <input type="text" name="Telefono1" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Celular</label>
              <input type="text" name="Telefono2" placeholder="large-4.columns" />
            </div>
			      <div class="large-4 medium-4 columns">
              <label>Direccion</label>
              <input type="text" name="Direccion" placeholder="large-4.columns" />
            </div>
		    <div class="large-4 medium-4 columns">
              <label>Correo</label>
              <input type="text" name="Correo" placeholder="large-4.columns" />
            </div>
			    <div class="large-4 medium-4 columns">
              <label>Rfc</label>
              <input type="text" name="Rfc" placeholder="large-4.columns" />
            </div>		

				    <!--div class="large-4 medium-4 columns">
              <label>Fecha alta</label>
              <input type="text" name="Fecha" placeholder="large-4.columns" />
            </div-->
          </div>

   		  <!--  <input type="SUBMIT" value="Enviar" name="Enviar la información a la base de datos"><br /><br>-->
		   <!-- <input type="submit" class="button" name="Insertar cliente">
			<a href="#" class="button">Insertar cliente</a>-->
		
			          <div class="small-12 small-centered columns">
            <div class="primary callout">
			       
     
       
       
				<center><input  class="button" type="submit" value="Guardar" title="Guardar" onclick="validar()"/>
                 <!--a href="#" class="secondary button">Buscar clientes</a>
				 <a href="#" class="alert button">Notas importantes</a>
				 <a href="#" class="success button">Success Btn</a><br/></center-->
				
				<input class="alert button"type="button" value="Mostrar empleados" title="Motrar" onClick="window.location='mostrartodosempleados.php';"/>
				<input class="button"type="button" value="Editar empledos" title="Motrar" onClick="window.location='mostrareditarempleado.php';"/>
				<input class="sucess button"type="button" value="Menu" title="Motrar" onClick="window.location='menu.php';"/>
				<a href="indexb.php" class="small button">Regresar</a>
				  <div class="callout">
          <h5>S&iacute; desea salir</h5>
          <p>Aseg&uacute;rese de cerrar su sessi&oacute;n</p>
          <a href="salir.php" class="small button">Cerrar Sesi&oacute;n</a>
        </div>
				<!--a href="salir.php" class="success button">Cerrar Sesi&oacute;n</a-->
            </div>
			
          </div>
        </form>
      </div></div></div></div>
        
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
	<script type="text/javascript" language="javascript" src="js/funciones.js"></script>

  </body>
</html>
