<?php
require_once("class/classbd.php");


$tra=new Trabajo();

$tra->eliminar_nota($_GET['id']);
?>