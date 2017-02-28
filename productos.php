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
			<form name="Buscador" method="get" action="productos.php">
			<label>Buscar productos</label> 
				<input type="text" name="s" placeholder="large-4.columns">
				 <div id="buscador" class="large-4 medium-4 columns">
			<a href="javascript:void(0);" onClick="window.location='busquedaportelefono.php?id=<?php echo $_GET['s'];?>';" title="Buscar cliente"><img src="ima/iconLupa.png" border="0" width="50" height="50"></a>
		</div>
            
		
			</form>
		
	
			
			</div>
			
					
			 <div id="buscador" class="large-4 medium-4 columns">
			<form name="Buscador" method="get" action="indexb.php">
			<label>Buscar empleado</label>
<input type="text" name="s" placeholder="large-4.columns">			
			 <div id="buscador" class="large-4 medium-4 columns">
			<a href="javascript:void(0);" onClick="window.location='busquedaportelefono.php?id=<?php echo $_GET['s'];?>';" title="Buscar cliente"><img src="ima/iconLupa.png" border="0" width="50" height="50"></a>
			
			</div>
            
		
			</form>
		
	
			
			</div>
		
			<div id="buscador" class="large-4 medium-4 columns">
			<form name="Buscador" method="get" action="indexb.php">
			<label>Buscar cliente</label>
			<input type="text" name="s2" placeholder="large-4.columns">	
					<div id="buscador" class="large-4 medium-4 columns">
					
			 <a href="javascript:void(0);" onClick="window.location='mostrarclientes.php?id1=<?php echo $_GET['s2'];?>';" title="Buscar cliente"><img src="ima/iconLupa.png" border="0" width="50" height="50"></a>
			 </div>
			 
           
			</form>	
		
			</div></div>
				
		
  </div>
      </div></div>
 <div class="small-12 small-centered columns">
   <div class="primary callout">
          
    <div class="small-12 small-centered columns">
        <h5>Complete el formulario para dar de alta un producto </h5>
		 <hr />
		<form name="form" action="ingresarproducto.php" method="post">
            <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Nombre del producto</label>
              <input type="text" name="Nombre" placeholder="large-4.columns" />
			  	 
            </div>
            <div class="large-4 medium-4 columns">
              <label>Precio</label>
              <input type="text" name="Precio" placeholder="large-4.columns" />
            </div>      
			<div class="large-4 medium-4 columns">
              <label>Inventario</label>
              <input type="text" name="Inventario" placeholder="large-4.columns" />
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
				
				<input class="alert button"type="button" value="Mostrar clientes" title="Motrar" onClick="window.location='mostrartodos.php';"/>
				<input class="secondary button"type="button" value="Editar clientes" title="Motrar" onClick="window.location='mostrareditar.php';"/>
				<input class="sucess button"type="button" value="Empleados" title="Motrar" onClick="window.location='empleados.php';"/>
				<input class="sucess button"type="button" value="Menu" title="Motrar" onClick="window.location='menu.php';"/>
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
