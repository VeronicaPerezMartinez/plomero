<?php
require_once("class/classbd.php");


$tra=new Trabajo();

$tra->eliminar_cliente($_GET['id']);
?>