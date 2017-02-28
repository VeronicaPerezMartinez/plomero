<?php
require_once("class/classbd.php");
$tra7=new Trabajo();
if (isset($_POST['grabar'])and $_POST['grabar']=="si")
{
//print_r($_POST);
	$tra7->edit_notas($_POST['Cantidad'],$_POST['Descripcion'],$_POST['Servicio'],$_POST['Materiales'], $_POST['Importe'],$_POST['Abono'],$_POST['Pagado'],$_POST['id1']);
	
	exit;
}
	$reg=$tra7->get_notas_por_id($_GET['id']);


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
<form name="form" action="editarnota.php" method="post">
<table width="800" align="center">
<tr>
<td align="center" width="800" valign="top" colspan="11">

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
<p><i><strong><h3>Modifique los datos de la nota </h3></strong></i></p>
 <hr  />
  </div>
  	 <div class="small-12 columns">
	 <div class="primary callout">
  	<form name="form" action="editarnota.php" method="post">
            <div class="row">
   
            <div class="large-4 medium-4 columns">
              <label>Cliente</label>
              <input type="text" name="Cliente" value="<?php echo $reg[0]["idcliente"];?>" placeholder="large-4.columns" readonly />
            </div>      
			<div class="large-4 medium-4 columns">
              <label>Empleado</label>
              <input type="text" name="Empleado" value="<?php echo $reg[0]["idempleado"];?>" placeholder="large-4.columns" readonly />
            </div>
			<div class="large-4 medium-4 columns">
              <label>Nota</label>
              <input type="text" name="Nota" value="<?php echo $reg[0]["notaservicio"];?>" placeholder="large-4.columns" readonly />
	
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Fecha</label>
              <input type="text" name="Fecha" value="<?php echo $reg[0]["fecha"];?>" placeholder="large-4.columns" readonly />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Cantidad</label>
              <input type="text" name="Cantidad" value="<?php echo $reg[0]["cantidad"];?>" placeholder="large-4.columns" />
            </div>
			      <div class="large-4 medium-4 columns">
              <label>Descripcion</label>
              <input type="text" name="Descripcion" value="<?php echo $reg[0]["descripcion"];?>" placeholder="large-4.columns" />
            </div>
		    <div class="large-4 medium-4 columns">
              <label>Servicio</label>
              <input type="text" name="Servicio" value="<?php echo $reg[0]["servicio"];?>" placeholder="large-4.columns" />
            </div>
			<div class="large-12 columns">
              <label>Materiales</label>
              <!--input type="text" name="Materiales" value="<?php/* echo $reg[0]["materiales"];*/?>" placeholder="large-4.columns" /-->
			   <textarea name="Materiales" placeholder="large-8.columns"><?php echo $reg[0]["materiales"];?></textarea>
            </div>	
		   
        	<div class="large-4 medium-4 columns">
              <label>Importe</label>
              <input type="text" name="Importe" value="<?php echo $reg[0]["importe"];?>" placeholder="large-4.columns" />
            </div>
				<div class="large-4 medium-4 columns">
              <label>Abono</label>
              <input type="text" name="Abono" value="<?php echo $reg[0]["abono"];?>" placeholder="large-4.columns" />
            </div>
				<div class="large-4 medium-4 columns">
              <label>Pagado</label>
              <input type="text" name="Pagado" value="<?php echo $reg[0]["pagado"];?>" placeholder="large-4.columns" />
            </div>
		     <div class="large-4 medium-4 columns">
              <label>Cancelada</label>
              <input type="text" name="Cancelada" value="<?php echo $reg[0]["cancelada"];?>" placeholder="large-4.columns" />
              </div>
			<div class="large-12 medium-4 columns">
              <label>Detalles</label>
              <textarea name="Detalles" placeholder="large-12.columns"><?php echo $reg[0]["detalles"];?></textarea>
			  
            </div>
			

          </div>


		  <!--  <input type="SUBMIT" value="Enviar" name="Enviar la información a la base de datos"><br /><br>-->
		   <!-- <input type="submit" class="button" name="Insertar cliente">
			<a href="#" class="button">Insertar cliente</a>-->
		
		 <div class="row">
			       
     
       
       
				
				<input type="hidden" name="grabar" value="si" />
                <input type="hidden" name="id1" value="<?php echo $_GET['id'];?>" />
			    <div class="small-4 centered columns">
				<input class="button expanded" type="submit" value="Editar" title="Editar" onClick="validar()"/>
				<input class="alert button expanded "type="button" value="Volver" title="Volver" onClick="window.location='notas.php';"/>
         
			  </div>
					</div>
             
			
          </div>
        </form>
		</div>
      
	  </div>

 </div>
 </div>
</td>
</tr>
</table>
</form>
</body>
</html>