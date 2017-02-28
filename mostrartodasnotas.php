<?php
require_once("class/classbd.php");
$tra=new Trabajo();
//	$reg=$tra->get_cliente_por_id($_GET['id']);
//$reg=$tra->buscarcliente($_GET['id']);
//$reg=$tra->muestra_resultados($_GET['id1']);
$reg=$tra->get_notas();
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
</div>
	  <center><p><strong><h1></h1></strong><img src="ima/plomerito2a.jpg" border="0" width="400" height="400"></p> 
       <p><i><strong><h3>Lista de notas </h3></strong></i></p></center>
   <div class="table-scroll" >
<table align="center" width="1000" class="stack">

<center>
<tr>
<td valign="top"  width="1000"  align="center" colspan="15">

</td>
</tr>
<tr style="background-color:#666666; color:#FFFFFF: font-weight:bold">

<td valign="top" align="center" width="200">
Cliente
</td>

<td valign="top" align="center" width="20">
Empleado
</td>
<td valign="top" align="center" width="20">
Nota
</td>
<td valign="top" align="center" width="20">
Fecha
</td>
<td valign="top" align="center" width="20">
Cantidad
</td>
<td valign="top" align="center" width="20">
Descripcion
</td>
<td valign="top" align="center" width="20">
Servicio
</td>
<td valign="top" align="center" width="200">
Materiales
</td>
<td valign="top" align="center" width="20">
Importe
</td>
<td valign="top" align="center" width="20">
Abono
</td>
<td valign="top" align="center" width="20">
Pagado
</td>
<td valign="top" align="center" width="20">
Cancelada
</td>
<td valign="top" align="center" width="20">
Detalles
</td>
</tr>

<?php
$tra=new Trabajo();
$reg=$tra->get_notas();
for ($i=0; $i<count($reg); $i++)
{
?>
<tr id ="<?php echo "ide_$i";?> style="background-color:#f0f0f0" onMouseMove="cambiar('<?php echo "ide_$i";?>','#cccccc')" onMouseMove="cambiar('<?php echo "ide_$i";?>','#f0f0f0')">

<td valign="top" align="rigth" width="50">

<?php echo $reg[$i]["idcliente"];?>

</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["idempleado"];?>
</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["notaservicio"];?>
</td>

<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["fecha"];?>
</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["cantidad"];?>
</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["descripcion"];?>
</td>
<td valign="top" align="rigth" width="50">
<?php echo $reg[$i]["servicio"];?>
</td>
<td valign="top" align="justify" width="500">
<?php echo $reg[$i]["materiales"];?>
</td>
<td valign="top" align="rigth" width="20">
<?php echo $reg[$i]["importe"];?>
</td>
<td valign="top" align="rigth" width="20">
<?php echo $reg[$i]["abono"];?>
</td>
<td valign="top" align="rigth" width="20">
<?php echo $reg[$i]["pagado"];?>
</td>
<td valign="top" align="rigth" width="20">
<?php echo $reg[$i]["cancelada"];?>
</td>
<td valign="top" align="rigth" width="20">
<?php echo $reg[$i]["detalles"];?>
</td>
</tr>
<?php
} 
?>

 

  
</center></table>
</div></div></div>

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
</div>
		
	<div class="small-12 large-centered columns">
 	 <div class="secondary callout">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">  
		
			 <div class="small-4 small-centered columns">
			 
			
          		          


<input class="alert button expanded" type="button" value="Regresar" title="volver" onClick="window.location='notas.php';"/>
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
