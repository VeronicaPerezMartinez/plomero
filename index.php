<?php
require_once("class/class.php");
if (isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	//print_r($_POST);
	$t=new Trabajo();
	$t->logueo();
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
<body onload="limpiar_logueo();">
<form name="form" action="index.php" method="post">
 <center>
 <div class="large-12 columns">
  <div class="large-12 columns">
  </div>
  
  <div class="large-8 large-centered columns">
<div class="large-8 large-centered columns">
<div class="large-8 columns">
 <div class="large-8 columns">
 <div class="large-8 columns">
</div>

</div>

</div>
</div>
<div class="large-4 large-centered columns">
<div class="large-8 columns">
 <div class="large-8 columns">
 <div class="large-8 columns">

</div>

</div>

</div>
</div>
<div class="large-4 large-centered columns">
<div class="row collapse">
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
<div class="small-12 small-centered columns">
<div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
 <div class="small-12 small-centered columns">
  <div class="small-12 small-centered columns">
 <br>
 <br><br><br>

</div>
</div>

</div></div></div></div>
		
			 <div class="primary callout">
			  <center><p><strong><h1></h1></strong><img src="ima/plomerito2a.jpg" border="0" width="400" height="400" ></p></center>
			 <table align="center">
<tr>
<td valign="top" align="center" colspan="2">

              <label><strong><h3>Ingrese sus datos</h3></strong></label>
			  

<hr >
</td>
</tr>
<tr style="background-color:#cccccc;">

<td valign="top" align="center" width="50" height="50">
Usuario:
</td>
<td valign="top" align="left" width="50" height="50" >
<input type="text" name="user"/>
</td>
</tr>

<tr style="background-color:#cccccc;">
<td valign="top" align="center" width="50" height="50">
Contraseña:
</td>
<td valign="top" align="left" width="50" height="50">
<input type="password" name="pass" />
</td>
</tr>
<tr>
<td valign="top" align="center" colspan="2" width="50" height="50">
<hr />

<input class="button" type="button" value="Registrarse" title="Registrarse" onclick="window.location='registro.php';" />
<input type="hidden" name="grabar" value="si">
<input class="button" type="button" value="Entrar" title="Entrar" onClick="validar_logueo();" />
</td>
</tr>
</table>
			
 	

		 <!--div class="primary callout"-->


</form></div>
</div>
</div></center>
</body>
</html>
