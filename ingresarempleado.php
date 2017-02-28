<?php
require_once("class/classbd.php");
//print_r($_POST);
$tra=new Trabajo();
header("Content-Type: text/html;charset=utf-8");
//$nombre=htmlentities($_POST['nom'], ENT_QUOTES,'UTF-8');
//$tra->add_cliente($_POST['nom'],$_POST['texto']);
$tra->add_empleado($_POST['Nombre'],$_POST['ApellidoP'],$_POST['ApellidoM'],$_POST['Telefono1'],$_POST['Telefono2'],$_POST['Direccion'],$_POST['Correo'],$_POST['Rfc']);
?>