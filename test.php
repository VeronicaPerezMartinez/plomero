<!doctype html>
<body> 
<SELECT NAME="productoss">
<option>Seleccione una Opción...</option>
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
echo'<OPTION VALUE="'.$row['id'].'">'.$row['nombre'].'</OPTION>';
}
 
?>
</SELECT>
<input type='submit' name='boton' /> 
</body>
</html>