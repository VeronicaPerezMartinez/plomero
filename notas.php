<?php
require_once("class/classbd.php");
//$tra=new Trabajo();
//	$reg=$tra->get_cliente_por_id($_GET['id']);
//$reg=$tra->buscarcliente($_GET['id']);
//$reg=$tra->get_empleados();
//$reg2=$tra->get_clientes();
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
			<form name="Buscador" method="get" action="notas.php">
			<label>Buscar notas</label>
<input type="text" name="s" placeholder="large-4.columns">			
			 <div id="buscador" class="large-4 medium-4 columns">
			<a href="javascript:void(0);" onClick="window.location='mostrarnotas.php?id=<?php echo $_GET['s'];?>';" title="Buscar notas"><img src="ima/iconLupa.png" border="0" width="50" height="50"></a>
			
			</div>
            
		
			</form>
		
	
			
			</div>
		</div>
				
		
  </div>
      </div></div>
 <div class="small-12 small-centered columns">
   <div class="primary callout">
          
    <div class="small-12 small-centered columns">
        <h5>Complete el formulario para registrar una nota </h5>
		 <hr />
		<form name="form" action="ingresarnotas.php" method="post">
            <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Nota de servicio</label>
              <input type="text" name="Nota" placeholder="large-4.columns" />
			  	 
            </div>
            <div class="large-4 medium-4 columns">
              <label>Fecha</label>
              <input type="text" name="Fecha" placeholder="large-4.columns" />
            </div>      <div class="large-4 medium-4 columns">
              <label>Cantidad</label>
              <input type="text" name="Cantidad" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Descripci&oacute;n</label>
              <input type="text" name="Descripcion" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Servicio</label>
              <input type="text" name="Servicio" placeholder="large-4.columns" />
            </div>
			      <div class="large-4 medium-4 columns">
				  
              <label>Materiales</label>
			  <SELECT NAME="Materiales">
<option>Seleccione una Opción...</option>
<?php 
$conexion=mysql_connect("127.0.0.1","root","Plomero") or
die("Problemas en la conexion");
mysql_select_db("plomeria",$conexion) or
die("Problemas en la selección de la base de datos");  
mysql_query ("SET NAMES 'utf8'");
$clavebuscadah=mysql_query("select idproducto,nombreproducto from productos",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['idproducto'].'">'.$row['nombreproducto'].'</OPTION>';
}
 //$resultado=$clavebuscadah;
?>
</SELECT>

<!--input type='submit' name='boton' /--> 
    <textarea name="Materiales" placeholder="large-12.columns"></textarea>
              
            </div>
		    <div class="large-4 medium-4 columns">
              <label>Importe</label>
              <input type="text" name="Importe" placeholder="large-4.columns" />
            </div>
			    <div class="large-4 medium-4 columns">
              <label>Cliente</label>
			  			  <SELECT NAME="Cliente">
<option>Seleccione cliente...</option>
<?php 
$conexion=mysql_connect("127.0.0.1","root","Plomero") or
die("Problemas en la conexion");
mysql_select_db("plomeria",$conexion) or
die("Problemas en la selección de la base de datos");  
mysql_query ("SET NAMES 'utf8'");
$clavebuscadah=mysql_query("select idcliente,nombre from clientes",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['idcliente'].'">'.$row['nombre'].'</OPTION>';


}
 
?>
</SELECT>
              <!--input type="text" name="Cliente" placeholder="large-4.columns" /-->
            </div>	
			<div class="large-4 medium-4 columns">
              <label>Empleado</label>
			  			  			  <SELECT NAME="Empleado">
<option>Seleccione empleado...</option>
<?php 
$conexion=mysql_connect("127.0.0.1","root","Plomero") or
die("Problemas en la conexion");
mysql_select_db("plomeria",$conexion) or
die("Problemas en la selección de la base de datos");  
mysql_query ("SET NAMES 'utf8'");
$clavebuscadah=mysql_query("select idempleado,nombreempleado from empleados",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['idempleado'].'">'.$row['nombreempleado'].'</OPTION>';
}
 
?>
</SELECT>
              <!--input type="text" name="Empleado" placeholder="large-4.columns" /-->
            </div>				

				<div class="large-4 medium-4 columns">
              <label>Abono</label>
              <input type="text" name="Abono" placeholder="large-4.columns" />
            </div>
				
			    <div class="large-4 medium-4 columns">
              <label>Pagado</label>
              <input type="text" name="Pagado" placeholder="large-4.columns" />
            </div>
			
			 <div class="large-4 medium-4 columns">
			  <label>Cancelada</label>
              <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">S&iacute;</label>
              <input type="radio" name="pokemon" value="Blue" checked id="pokemonBlue"><label for="pokemonBlue">No</label>
          </div>
		  
			 <div class="large-4 medium-4 columns">
		    <label>Detalles</label>
		    <textarea name="Detalles" placeholder="large-12.columns"></textarea>
		  </div>
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
				
				<input class="alert button"type="button" value="Mostrar notas" title="Motrar" onClick="window.location='mostrartodasnotas.php';"/>
				<input class="button"type="button" value="Editar notas" title="Motrar" onClick="window.location='mostrareditarnota.php';"/>
				<input class="sucess button"type="button" value="Menu" title="Motrar" onClick="window.location='menu.php';"/>
				<!--a href="indexb.php" class="small button">Regresar</a-->
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
