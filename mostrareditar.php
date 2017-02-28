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
 
   
   <div class="large-12 medium-6 columns">
   
   <div class="primary callout"><!--width="800 align="center"-->
   
   <center>
<table align="center" width="800">
<center>
<tr>
<td valign="top"  width="1500"  align="center" colspan="11">
<hr />
</td>
</tr>
<tr style="background-color:#666666; color:#FFFFFF: font-weight:bold">
<td valign="top" align="rigth" width="250">
Nombre
</td>

<td valign="top" align="center" width="550">
ApellidoP
</td>
<td valign="top" align="center" width="100">
ApellidoM
</td>
<td valign="top" align="center" width="50">
Telefono1
</td>
<td valign="top" align="center" width="50">
Telefono2
</td>
<td valign="top" align="center" width="50">
Direccion
</td>
<td valign="top" align="center" width="50">
Correo
</td>
<td valign="top" align="center" width="50">
Notas
</td>

<td valign="top" align="center" width="50">
Rfc
</td>
<td valign="top" align="center" width="50">
Editar
</td>
<td valign="top" align="center" width="50">
Borrar
</td>
</tr>

<?php
$tra=new Trabajo();
$reg=$tra->get_clientes();
for ($i=0; $i<count($reg); $i++)
{
?>
<tr id ="<?php echo "ide_$i";?> style="background-color:#f0f0f0" onMouseMove="cambiar('<?php echo "ide_$i";?>','#cccccc')" onMouseMove="cambiar('<?php echo "ide_$i";?>','#f0f0f0')">
<td valign="top" align="rigth" width="250">
<?php echo $reg[$i]["nombre"];?>
</td>

<td valign="top" align="center" width="550">
<div align="justify">
<?php echo $reg[$i]["apellidop"];?>
</div>
</td>
<td valign="top" align="center" width="100">
<?php echo $reg[$i]["apellidom"];?>
</td>
<td valign="top" align="center" width="50">
<?php echo $reg[$i]["telefono1"];?>
</td>
<td valign="top" align="center" width="50">
<?php echo $reg[$i]["telefono2"];?>
</td>
<td valign="top" align="center" width="50">
<?php echo $reg[$i]["direccion"];?>
</td>
<td valign="top" align="center" width="50">
<?php echo $reg[$i]["correo"];?>
</td>
<td valign="top" align="justify" width="50">
<?php echo $reg[$i]["comentarios"];?>
</td>
<td valign="top" align="center" width="50">
<?php echo $reg[$i]["rfc"];?>
</td>
<td valign="top" align="center" width="10">
<a href="javascript:void(0);"  onClick="window.location='editar.php?id=<?php echo $reg[$i]["idcliente"];?>';" title="Editar registro"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="10">
<a href="javascript:void(0);" onClick="eliminar('eliminar.php?id=<?php echo $reg[$i]["idcliente"];?>');" title="Eliminar registro"><img src="ima/borrar.png" border="0"></a>

</td>

</tr>
<?php
} 
?>  
 </div>

  </div>
</center>

  
       
		  <div class="small-12 columns">
 

			
			 <div class="primary callout">
			 <div class="large-12 columns">
			
            <!--  <p><strong><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plomero al instante</h1></strong></p>-->
	<center><p><strong><h1></h1></strong><img src="ima/logonew.jpg" border="0" width="500" height="500"></p></center> 
			<p><h5>  </h5></p>
            </div>
<p><i><strong><h3>Creando servicios de calidad! </h3></strong></i></p>
	  <div class="small-12 small-centered columns">
            <div class="primary callout">
			       
 				<input class="alert button"type="button" value="volver" title="volver" onClick="window.location='indexb.php';"/>
				
			
          </div>
 
      </div>
			 </div>	

				 <hr />
		
  </div>
    <!--  </div>-->
  

    <div class="row">
  
           <hr />

        <h5>Elija el cliente a editar </h5>
		
          </div>
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
