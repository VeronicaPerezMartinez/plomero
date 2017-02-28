<?php
require_once("class/classbd.php");
$tra=new Trabajo();
//	$reg=$tra->get_cliente_por_id($_GET['id']);
//$reg=$tra->buscarcliente($_GET['id']);
//$reg=$tra->muestra_resultados($_GET['id1']);
$reg=$tra->get_empleados();
?>
<!--<!DOCTYPE HTML PUBLIC "=//W3C//DTD HTML 5.01 Transitional//EN" "http://www.w3.org/TR/html5/loose.dtd">
<html>
<head>-->

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plomero al instante</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
	<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
  </head>

<!--
<meta http-equiv="Content-Type" content="text/html; charset-UTF-8">
<title>Editar registros</title>-->

<body onload="limpiar();">

    <div class="large-12 large-centered columns">
   
   <!--div class="large-12 medium-6 columns"-->
  
   <div class="primary callout"><!--width="800 align="center"-->
   	  <div class="large-12 large-centered columns">
   <center>
<table align="center" width="1000">

<center>
<tr>
<td valign="top"  width="1000"  align="center" colspan="9">

</td>
</tr>
<tr style="background-color:#666666; color:#FFFFFF: font-weight:bold">
<td valign="top" align="center" width="20">
Nombre
</td>

<td valign="top" align="center" width="20">
ApellidoP
</td>
<td valign="top" align="center" width="20">
ApellidoM
</td>
<td valign="top" align="center" width="20">
Telefono1
</td>
<td valign="top" align="center" width="20">
Telefono2
</td>
<td valign="top" align="center" width="200">
Direccion
</td>
<td valign="top" align="center" width="20">
Correo
</td>
<td valign="top" align="center" width="200">
Rfc
</td>

<td valign="top" align="center" width="20">
Fecha
</td>

</tr>

<?php
$tra=new Trabajo();
$reg=$tra->get_empleados();
for ($i=0; $i<count($reg); $i++)
{
?>
<tr id ="<?php echo "ide_$i";?> style="background-color:#f0f0f0" onMouseMove="cambiar('<?php echo "ide_$i";?>','#cccccc')" onMouseMove="cambiar('<?php echo "ide_$i";?>','#f0f0f0')">
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["nombreempleado"];?>
</td>

<td valign="top" align="rigth" width="50">

<?php echo $reg[$i]["apellidop"];?>

</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["apellidom"];?>
</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["telefono1"];?>
</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["telefono2"];?>
</td>
<td valign="top" align="rigth" width="500">
<?php echo $reg[$i]["direccion"];?>
</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["correo"];?>
</td>
<td valign="top" align="justify" width="200">
<?php echo $reg[$i]["rfc"];?>
</td>
<td valign="top" align="rigth" width="20">
<?php echo $reg[$i]["fecha_alta"];?>
</td>
</tr>
<?php
} 
?>

 </div></div>

  </div>
</center>

  <div class="large-12 large-centered columns">
<div class="row collapse">
 <div class="large-4 columns">
 <div class="large-4 columns">
  <div class="large-4 columns">
 <br>
 <br><br><br>
</div>
</div>

</div>

</div>
</div><center><p><strong><h1></h1></strong><img src="ima/plomerito2a.jpg" border="0" width="400" height="400"></p> 
       <p><i><strong><h3>Lista de Empleados </h3></strong></i></p></center>
		  <div class="small-12 large-centered columns">
 	 <div class="primary callout">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">  
		
			 <div class="small-4 large-centered columns">
			 
			
          		          


<input class="sucess button" type="button" value="volver" title="volver" onClick="window.location='empleados.php';"/>
			</div> </div>	</div> </div>	</div>
</div> </div>	</div> </div>	</div> </div>
				 <hr />
		
  </div>
    <!--  </div>-->
  

		  <!--  <input type="SUBMIT" value="Enviar" name="Enviar la información a la base de datos"><br /><br>-->
		   <!-- <input type="submit" class="button" name="Insertar cliente">
			<a href="#" class="button">Insertar cliente</a>-->
		
	
        
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
	<script type="text/javascript" language="javascript" src="js/funciones.js"></script>
  </body>
</html>






 
</form>

</center>
</body>
</html>