<?php
require_once("class/classbd.php");
$tra=new Trabajo();
if (isset($_POST['grabar'])and $_POST['grabar']=="si")
{
	//print_r($_POST);
	$tra->edit_cliente($_POST['Nombre'],$_POST['ApellidoP'],$_POST['ApellidoM'],$_POST['Telefono1'],$_POST['Telefono2'],$_POST['Direccion'],$_POST['Correo'],$_POST['Comentarios'],$_POST['Rfc'],$_POST['id']);
	exit;
}
	$reg=$tra->get_cliente_por_id($_GET['id']);


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
<form name="form" action="editar.php" method="post">
<table width="800" align="center">
<tr>
<td align="center" width="800" valign="top" colspan="9">

</td>
</tr>

       
		</div>
		  <div class="small-12 columns">
 
			 <div class="primary callout">
			 <div class="small-12 columns">
			 </div>			
            <!--  <p><strong><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plomero al instante</h1></strong></p>-->
			  <!--center><p><strong><h1></h1></strong><img src="ima/logo.png" border="0"></p-->
			  	<center><p><strong><h1></h1></strong><img src="ima/logonew.jpg" border="0" width="500" height="500"></p></center>
		
            </div>
<p><i><strong><h3>Modifique los datos del cliente </h3></strong></i></p>
 <hr  />
  </div>
  	 <div class="small-12 columns">
	 <div class="primary callout">
  	<form name="form" action="editar.php" method="post">
            <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Nombre del cliente</label>
              <input type="text" name="Nombre" value="<?php echo $reg[0]["nombre"];?>" placeholder="large-4.columns" />
			  	 
            </div>
            <div class="large-4 medium-4 columns">
              <label>Apellido Paterno</label>
              <input type="text" name="ApellidoP" value="<?php echo $reg[0]["apellidop"];?>" placeholder="large-4.columns" />
            </div>      <div class="large-4 medium-4 columns">
              <label>Apellido Materno</label>
              <input type="text" name="ApellidoM" value="<?php echo $reg[0]["apellidom"];?>" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Telefono de casa</label>
              <input type="text" name="Telefono1" value="<?php echo $reg[0]["telefono1"];?>" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Celular</label>
              <input type="text" name="Telefono2" value="<?php echo $reg[0]["telefono2"];?>" placeholder="large-4.columns" />
            </div>
			      <div class="large-4 medium-4 columns">
              <label>Direccion</label>
              <input type="text" name="Direccion" value="<?php echo $reg[0]["direccion"];?>" placeholder="large-4.columns" />
            </div>
		    <div class="large-4 medium-4 columns">
              <label>Correo</label>
              <input type="text" name="Correo" value="<?php echo $reg[0]["correo"];?>" placeholder="large-4.columns" />
            </div>
			<div class="large-4 medium-4 columns">
              <label>Rfc</label>
              <input type="text" name="Rfc" value="<?php echo $reg[0]["rfc"];?>" placeholder="large-4.columns" />
            </div>	
		
            <div class="large-12 medium-4 columns">
              <label>Comentarios</label>
              <textarea name="Comentarios" placeholder="large-12.columns"><?php echo $reg[0]["comentarios"];?></textarea>
			  
            </div>
        
			

          </div>


		  <!--  <input type="SUBMIT" value="Enviar" name="Enviar la información a la base de datos"><br /><br>-->
		   <!-- <input type="submit" class="button" name="Insertar cliente">
			<a href="#" class="button">Insertar cliente</a>-->
		
		 <!--div class="small-12 columns"-->
            <div class="secondary callout">
			       
     
       
       
				<center>
				<input type="hidden" name="grabar" value="si" />
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
				<input class="button" type="button" value="Editar" title="Editar" onClick="validar();"/>
				<input class="alert button"type="button" value="Volver" title="Volver" onClick="window.location='indexb.php';"/>
            </center>
			  </div>
				
            
			
          </div>
        </form>
		</div>
      
	  </div>
	  <!--
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Nombre
</td>
<td valign="top" align="left">
<input type="text" name="Nombre" value="<?php/* echo $reg[0]["nombre"];*/?>"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Apellido Paterno
</td>
<td valign="top" align="left">
<input type="text" name="ApellidoP" value="<?php /*echo $reg[0]["apellidop"];*/?>" placeholder="large-4.columns"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Apellido Materno
</td>
<td valign="top" align="left">
<input type="text" name="ApellidoM" value="<?php/* echo $reg[0]["apellidom"];*/?>" placeholder="large-4.columns"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Telefono1
</td>
<td valign="top" align="left">
<input type="text" name="Telefono1" value="<?php/*echo $reg[0]["telefono1"];*/?>" placeholder="large-4.columns"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Telefono2
</td>
<td valign="top" align="left">
<input type="text" name="Telefono2" value="<?php /*echo $reg[0]["telefono2"];*/?>" placeholder="large-4.columns"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Direccion
</td>
<td valign="top" align="left">
<input type="text" name="Direccion" value="<?php /*echo $reg[0]["direccion"];*/?>" placeholder="large-4.columns"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Correo
</td>
<td valign="top" align="left">
<input type="text" name="Correo" value="<?php/* echo $reg[0]["correo"];*/?>" placeholder="large-4.columns"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Comentarios
</td>

<td valign="top" align="left">
<textarea name="Comentarios" cols="35" rows="5"  placeholder="large-4.columns"><?php/* echo $reg[0]["comentarios"];*/?></textarea>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Rfc
</td>
<td valign="top" align="left">
<input type="text" name="Rfc" value="<?php/* echo $reg[0]["rfc"];*/?>"/>
</td>
</tr>

<tr>
<td valign="top" width="800" align="center" colspan="9">
<hr/>
<input type="hidden" name="grabar" value="si" />
<input type="hidden" name="id" value="<?php/* echo $_GET['id'];*/?>" />
<input type="button" value="Editar" title="Editar" onClick="validar()"/>
&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp
<input type="button" value="Volver" title="Volver" onClick="window.location='index.php';"-->
 </div>
 </div>
 </div>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>