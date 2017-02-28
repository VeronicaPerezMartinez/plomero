<?php
require_once("class/classbd.php");
?>
<!DOCTYPE HTML PUBLIC "=//W3C//DTD HTML 5.01 Transitional//EN" "http://www.w3.org/TR/html5/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset-UTF-8">
<title>Dar de alta un cliente</title>
<script type="text/javascript" language="javascript" src="js/funciones.js"></script>
</head>
<body onload="limpiar();">
<center>
<form name="form" action="ingresar.php" method="post">
<table width="800" align="center">
<tr>
<td align="center" width="800" valign="top" colspan="9">
<h2>Ingrese los datos del cliente</2>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Nombre
</td>
<td valign="top" align="left">
<input type="text" name="Nombre"/>
</td>
</tr>

<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Apellido Paterno
</td>
<td valign="top" align="left">
<input type="text" name="ApellidoP"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Apellido Materno
</td>
<td valign="top" align="left">
<input type="text" name="ApellidoM"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Telefono 1
</td>
<td valign="top" align="left">
<input type="text" name="Telefono1"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Telefono 2
</td>
<td valign="top" align="left">
<input type="text" name="Telefono2"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Direccion
</td>
<td valign="top" align="left">
<input type="text" name="Direccion"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Correo
</td>
<td valign="top" align="left">
<input type="text" name="Correo"/>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Comentarios
</td>
<td valign="top" align="left">
<textarea name="Comentarios" cols="35" rows="5"></textarea>
</td>
</tr>
<tr>
<td valign ="top" align ="right">
&nbsp;&nbsp;&nbsp;Rfc
</td>
<td valign="top" align="left">
<input type="text" name="Rfc"/>
</td>
</tr>

<tr>
<td valign="top" width="800" align="center" colspan="2">
<hr />
<input type="button" value="Escribir" title="Escribir" onclick="validar()"/>

</td>
</tr>
</table>
</form>
<table align="center" width="800">
<tr>
<td valign="top" width="800" align="center" colspan="9">
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
Comentarios
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
<td valign="top" align="center" width="50">
<?php echo $reg[$i]["comentarios"];?>
</td>
<td valign="top" align="center" width="50">
<?php echo $reg[$i]["rfc"];?>
</td>
<td valign="top" align="center" width="50">
<a href="javascript:void(0);" onClick="window.location='editar.php?id=<?php echo $reg[$i]["idcliente"];?>';" title="Editar registro"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="50">
<a href="javascript:void(0);" onClick="eliminar('eliminar.php?id=<?php echo $reg[$i]["idcliente"];?>');" title="Eliminar registro"><img src="ima/borrar.png" border="0"></a>

</td>

</tr>
<?php
} 
?>
</center>
</body>
</html>