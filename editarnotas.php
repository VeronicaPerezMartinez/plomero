<?php
require_once("class/classbd.php");
$tra=new Trabajo();
if (isset($_POST['grabar'])and $_POST['grabar']=="si")
{
	print_r($_POST);
	$tra->edit_notas($_POST['Cantidad'],$_POST['Descripcion'],$_POST['Servicio'],$_POST['Materiales'],$_POST['Importe'],$_POST['Abono'],$_POST['Pagado'],$_POST['id']);
	exit;
}
	$reg=$tra->get_notas_por_id($_GET['id']);


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
<div class="large-12 columns">
<div class="large-8 columns">
 <div class="large-8 columns">
 <div class="large-8 columns">
  <div class="large-8 columns">
 <br>
 <br><br><br>
</div>
</div>

</div>

</div>
</div>
<div class="large-12 columns">
<div class="large-8 columns">
 <div class="large-8 columns">
 <div class="large-8 columns">
  <div class="large-8 columns">
 <br>
 <br><br><br>
</div>
</div>

</div>

</div>
</div>
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">  
	  <div class="small-12 small-centered columns"> 	
  <div class="row">
  <div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">  

  <div class="row">
   
          
  <div class="large-12 medium-4 columns">
    <div class="large-12 medium-6 columns">

<form name="form" action="editarnotas.php" method="post">
        <div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">  <div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
   </div> </div>		 </div>		 </div>		 </div>		 </div>		 </div>		 </div>		 </div>		 </div>				
   </div>		 </div>		 </div>		 </div>		 </div>	 </div>		 </div>	 </div>				
	
		  <div class="small-12 columns">
 
			 <div class="primary callout">
			 <div class="small-12 columns">
			 		 </div>			
					 
            <!--  <p><strong><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plomero al instante</h1></strong></p>-->
			  <!--center><p><strong><h1></h1></strong><img src="ima/logo.png" border="0"></p-->
			  	<center><p><strong><h1></h1></strong><img src="ima/logonew.jpg" border="0" width="500" height="500"></p></center>
		
            </div>
<p><i><strong><h3>Agregue las modificaciones a su nota  </h3></strong></i></p>
 <hr  />
  </div>
  	 <div class="small-12 columns">
	 <div class="primary callout">
  	<form name="form" action="editarnotas.php" method="post">
            <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Cantidad</label>
              <input type="text" name="Cantidad" value="<?php echo $reg[0]["cantidad"];?>" placeholder="large-4.columns" />
            </div>
            <div class="large-4 medium-4 columns">
              <label>Descripcion</label>
              <input type="text" name="Descripcion" value="<?php echo $reg[0]["descripcion"];?>" placeholder="large-4.columns" />
            </div>      <div class="large-4 medium-4 columns">
              <label>Servicio</label>
              <input type="text" name="Servicio" value="<?php echo $reg[0]["servicio"];?>" placeholder="large-4.columns" />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Materiales</label>
              <input type="text" name="Materiales" value="<?php echo $reg[0]["materiales"];?>" placeholder="large-4.columns" />
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


          </div>


		  <!--  <input type="SUBMIT" value="Enviar" name="Enviar la información a la base de datos"><br /><br>-->
		   <!-- <input type="submit" class="button" name="Insertar cliente">
			<a href="#" class="button">Insertar cliente</a>-->
		
		 <!--div class="small-12 columns"-->
            <div class="secondary callout">
			       
     
       
       
				<center>
				<input type="hidden" name="grabar" value="si" />
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
				
				<!--input class="alert button" type="button" value="Editar" title="Editar" onClick="validar2();" /-->
				<input class="button" type="submit" value="Editar" title="Editar" onClick="validar();"/>
				<input class="button" type="button" value="Volver" title="Volver" onClick="window.location='notas.php';" />
            </center>
			  </div>
				
            
			
          </div>
        </form>
		</div>
     </form> 
	  </div>
	   </div> 
	   </div> 
	   </div>
	  </div>
	   </div> 
	   </div> 
	   </div>
	   	  </div>
	   </div> 
	   </div> 
	   </div>
	   
   </div> 
	 
</body>
</html>