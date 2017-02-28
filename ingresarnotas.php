<?php
require_once("class/classbd.php");
//print_r($_POST);
$tra=new Trabajo();
header("Content-Type: text/html;charset=utf-8");
//$nombre=htmlentities($_POST['nom'], ENT_QUOTES,'UTF-8');
//$tra->add_cliente($_POST['nom'],$_POST['texto']);
$tra->add_notas($_POST['Nota'],$_POST['Fecha'],$_POST['Cantidad'],$_POST['Descripcion'],$_POST['Servicio'],$_POST['Materiales'],$_POST['Importe'],$_POST['Cliente'], $_POST['Empleado'], $_POST['Abono'], $_POST['Pagado']);
?>
