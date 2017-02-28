<?php
require_once("class/class.php");

if (isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	//print_r($_POST);
	$obj=new Trabajo();
	$obj->registro();
	exit;
}

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
 <link href="css/estilos.css" type="text/css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript" language="javascript" src="js/funciones.js"></script>

</head>




<body><center>
<form name="form" action="registro.php" method="post">




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
<div class="large-12 large-centered columns">
<div class="large-12 large-centered columns">
<div class="large-4 large-centered columns">
 
	 <div class="primary callout">
	 
 <br>
 <br>
 <h2>Registrarse</h2>
 	  <center><p><strong><h1></h1></strong><img src="ima/plomerito2a.jpg" border="0" width="200" height="200" ></p></center>
 <label align="left"><strong><h5>Nombre:</h5></strong></label>
<input type="text" name="nom" /> 
 <label align="left"><strong><h5>E-Mail:</h5></strong></label>
 <input type="text" name="correo" />
 <label align="left"><strong><h5>Login:</h5></strong></label>
 <input type="text" name="login" />
 <label align="left"><strong><h5>Password:</h5></strong></label>
 <input type="password" name="pass" />
 <label align="left"><strong><h5>Repetir Password:</h5></strong></label>
 <input type="password" name="pass_1" />
<div class="row">
<input type="hidden" name="grabar" value="si" />
<input class="secondary button" type="button" value="Volver Atr&aacute;s" title="Volver Atr&aacute;s" onclick="window.location='index.php';" />
<input class="button" type="button" value="Registrarse" title="Registrarse" onclick="valida_registro();" />
</div></div>
</div>
</div></div>


</form></center>
</body>
</html>
