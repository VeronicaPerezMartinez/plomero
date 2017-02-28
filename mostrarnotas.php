<?php
require_once("class/classbd.php");
$tra=new Trabajo();
$tra1=new Trabajo();
//	$reg=$tra->get_cliente_por_id($_GET['id']);
//$reg=$tra->buscarcliente($_GET['id']);
$reg=$tra->muestra_notas($_GET['id']);
//$resg2=$tra->muestra_producto($_GET['id']);
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
<form name="form" action="mostrarnotas.php" method="post">
<table width="800" align="center">
<tr>
<td align="center" width="800" valign="top" colspan="9">

</td>
</tr>

       
		</div>
		  <div class="small-12 columns">

			 <div class="primary callout">
			 	<center><p><strong><h1></h1></strong><img src="ima/logonew.jpg" border="0" width="500" height="500"></p></center>
			  	 <p><i><strong><h3>Resultados de notas que coinciden con su busqueda </h3></strong></i></p>
			 <div class="small-4 columns">
		
			 </div>			
             </div>

 <hr  />
  </div>
  	 <div class="small-12 columns">
	 <div class="primary callout">
  	<form name="form" action="mostrarnotas.php" method="post">
            <div class="row">
			<?php
	
			for ($i=0; $i<count($reg); $i++)
{?>
           
			 	<div class="large-4 medium-4 columns">
              <label>Cliente</label>
				  
              <input type="text" name="Cliente" value="
			  <?php
		 $id4=$reg[$i]['idcliente'];
			 // echo $id4;
$reg3=$tra->muestra_cliente($id4); 

 echo $reg3[$i]["nombre"];?>"placeholder="large-4.columns" readonly />
 
            </div>	
			
			<div class="large-4 medium-4 columns">
              <label>Empleado</label>
              <input type="text" name="Empleado" value="<?php

 $id5=$reg[$i]['idempleado'];
			
$reg4=$tra1->muestra_empleado($id5);
			  echo $reg4[$i]["nombreempleado"];?>" placeholder="large-4.columns" readonly />
            </div>
				 <div class="large-4 medium-4 columns">
		    <label>Nota de servicio</label>
            <input type="text" name="Nota"  value="<?php echo $reg[$i]["notaservicio"];?>" placeholder="large-4.columns"  readonly />
			 </div>
            <div class="large-4 medium-4 columns">
              <label>Fecha</label>
              <input type="text" name="Fecha" value="<?php echo $reg[$i]["fecha"];?>" placeholder="large-4.columns" readonly/>
            </div>      
			<div class="large-4 medium-4 columns">
              <label>Cantidad</label>
              <input type="text" name="Cantidad" value="<?php echo $reg[$i]["cantidad"];?>" placeholder="large-4.columns" readonly />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Descripci&oacute;n</label>
              <input type="text" name="Descripcion" value="<?php echo $reg[$i]["descripcion"];?>" placeholder="large-4.columns" readonly />
            </div>
			 <div class="large-4 medium-4 columns">
              <label>Servicio</label>
              <input type="text" name="Servicio" value="<?php echo $reg[$i]["servicio"];?>" placeholder="large-4.columns" readonly/>
            </div>
			      <div class="large-12 columns">
              <label>Materiales</label>
              <!--input type="text" name="Materiales" value="
			  <?php 
		/*	 $id3=$reg[$i]["materiales"];
			// echo $id3;
$reg2=$tra->muestra_producto($id3); 
echo $reg2[$i]["nombreproducto"];*/?>"placeholder="large-4.columns"/-->
             <textarea name="Materiales" placeholder="large-12.columns" readonly ><?php echo $reg[$i]["materiales"];?>  </textarea >
			 </div>
		    <div class="large-4 medium-4 columns">
              <label>Importe</label>
              <input type="text" name="Importe" value="<?php echo $reg[$i]["importe"];?>" placeholder="large-4.columns" readonly />
            </div>
		
				

				<div class="large-4 medium-4 columns">
              <label>Abono</label>
              <input type="text" name="Abono"  value="<?php echo $reg[$i]["abono"];?>" placeholder="large-4.columns" readonly />
            </div>
				
			    <div class="large-4 medium-4 columns">
              <label>Pagado</label>
              <input type="text" name="Pagado" value="<?php echo $reg[$i]["pagado"];?>" placeholder="large-4.columns" readonly />
            </div>
		
		
		
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
	<input class="alert button"type="button" value="Volver" title="Volver" onClick="window.location='notas.php';"/>
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