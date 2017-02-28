<?php
require_once("class/classbd.php");
$tra=new Trabajo();
//	$reg=$tra->get_cliente_por_id($_GET['id']);
$reg=$tra->buscarcliente($_GET['id']);
//$reg=$tra->muestra_resultados($_GET['id1']);

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

  <div class="row">
   
          
  <div class="large-12 medium-4 columns">
    <div class="large-12 medium-6 columns">
 <div class="row">
<center>
<form name="form" action="mostrarclientes.php" method="post">
<table width="800" align="center">
<tr>
<td align="center" width="800" valign="top" colspan="9">

</td>
</tr>

       
		</div>
		  <div class="small-12 columns">

			 <div class="primary callout">
			 	<center><p><strong><h1></h1></strong><img src="ima/logonew.jpg" border="0" width="500" height="500"></p></center>
			  	 <p><i><strong><h3>Resultados de clientes que coinciden con su busqueda </h3></strong></i></p>
			 <div class="small-4 columns">
		
			 </div>			
             </div>

 <hr  />
  </div>
  	 <div class="small-12 columns">
	 <div class="primary callout">
  	<form name="form" action="mostrarclientes.php" method="post">
            <div class="row">
			<?php
	
			for ($i=0; $i<count($reg); $i++)
{?>
            <div class="large-4 medium-4 columns">
              <label>Nombre del cliente</label>
              <input type="text" name="Nombre" value="<?php echo $reg[$i]["nombre"];?>" placeholder="large-4.columns" />
			  	 
            </div>
            <div class="large-4 medium-4 columns">
              <label>Apellido Paterno</label>
              <input type="text" name="ApellidoP" value="<?php echo $reg[$i]["apellidop"];?>" placeholder="large-4.columns" />
            </div>      <div class="large-4 medium-4 columns">
              <label>Apellido Materno</label>
              <input type="text" name="ApellidoM" value="<?php echo $reg[$i]["apellidom"];?>" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Telefono de casa</label>
              <input type="text" name="Telefono1" value="<?php echo $reg[$i]["telefono1"];?>" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Celular</label>
              <input type="text" name="Telefono2" value="<?php echo $reg[$i]["telefono2"];?>" placeholder="large-4.columns" />
            </div>
			      <div class="large-4 medium-4 columns">
              <label>Direccion</label>
              <input type="text" name="Direccion" value="<?php echo $reg[$i]["direccion"];?>" placeholder="large-4.columns" />
            </div>
		    <div class="large-4 medium-4 columns">
              <label>Correo</label>
              <input type="text" name="Correo" value="<?php echo $reg[$i]["correo"];?>" placeholder="large-4.columns" />
            </div>
			<div class="large-4 medium-4 columns">
              <label>Rfc</label>
              <input type="text" name="Rfc" value="<?php echo $reg[$i]["rfc"];?>" placeholder="large-4.columns" />
            </div>	
		
            <div class="large-12 medium-4 columns">
              <label>Comentarios</label>
              <textarea name="Comentarios" placeholder="large-12.columns"><?php echo $reg[$i]["comentarios"];?></textarea>
			   <hr  />
<?php

}

?>
            </div>
        
			

          </div>


		  <!--  <input type="SUBMIT" value="Enviar" name="Enviar la información a la base de datos"><br /><br>-->
		   <!-- <input type="submit" class="button" name="Insertar cliente">
			<a href="#" class="button">Insertar cliente</a>-->
		
		 <div class="small-12 columns">
            <div class="secondary callout">
			       
     
       
       
				<center>
	<input class="alert button"type="button" value="Volver" title="Volver" onClick="window.location='index.php';"/>
            </center>
			  </div>
				
            
			
          </div>
        </form>
		</div>
      
	  </div>
	   </div>
 </div>
 </div>
</td>
</tr>
</table>
</form>
</center>
</body>