<?php
header("Content-Type: text/html;charset=utf-8");
	 $server="127.0.0.1";
	 $database="plomeria";
	 $db_user="root";
	 $db_pass="verito2102";
$conexion= new mysqli('127.0.0.1', 'root','verito2102');
 mysqli_select_db($conexion, "$database") or die ("error2".mysqli_error());
 mysqli_set_charset($conexion,"utf8");
		print_r($conexion);
		if($conexion->connect_errno)
		{
			echo "<br>Hubo un error no se conecto a la base de datos";
		}
		else
		{
			echo "<br>Ha habido exito en la coneccion, felicidades!!";
		}
//La Id de la fila insertada es: 1



//INSERT INTO `plomeria`.`clientes` (`idcliente`, `nombre`, `apellidop`, `apellidom`, `telefono1`, `telefono2`, `direccion`, `correo`, `comentarios`, `rfc`) VALUES (NULL, 'Veronica', 'Perez', 'Martinez', '6861744264', NULL, 'macarena 3569 sevilla', 'verydan2000@hotmail.com', 'Esto es una prueba del sistema.', 'PEMV810307110'); 
$sql="INSERT INTO clientes
(idcliente,nombre,apellidop,apellidom,telefono1,telefono2,direccion,correo,comentarios,rfc) 
VALUES (?,?,?,?,?,?,?,?,?,?)";
//values('$_POST[Nombre]', '$_POST[Edad]', '$_POST[Sexo]')";
if($sentencia=$conexion->prepare($sql)){
$sentencia->bind_param("isssssssss", $aa,$a,$b,$c,$d,$e,$f,$g,$h,$i);
$aa=null;
$a=$_POST[Nombre];
$b=$_POST[ApellidoP];
$c=$_POST[ApellidoM];
$d=$_POST[Telefono1];
$e=$_POST[Telefono2];
$f=$_POST[Direccion];
$g=$_POST[Correo];
$h=$_POST[Comentarios];
$i=$_POST[Rfc];
$sentencia->execute();
$sentencia->close();
}
?>