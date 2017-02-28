<?php
require_once("class/class.php");
if (isset($_SESSION["session_clase15"]))
{
//print_r($_SESSION);
$t=new Trabajo();
$nom=$t->saluda_al_usuario($_SESSION["session_clase15"]);
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

<body> 
<div class="large-8 large-centered columns">
<div class="large-8 large-centered columns">
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

</div>

<div class="primary callout">
<div class="row">
 <div class="large-12 small-centered columns">
<center><p><strong><h1></h1></strong><img src="ima/plomerito2a.jpg" border="0" width="400" height="400" ></p></center>

   <center><h2><?php echo "Buen d&iacute;a ".$nom[0]["nombre"]." bienvenid@";?></h2><center>


<center><a href="menu.php" class="button">Inicio de sesi&oacute;n</a> 
<a href="salir.php" class="success button">Cerrar Sesi&oacute;n</a></center>
 </div></div>
 </div>
 </div>
</div>
</div>
</div>

</body>
</html>
<?php
}else
{
	echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para acceder a este contenido');
	window.location='index.php';
	</script>
	";
}
?>
