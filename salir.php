<?php
session_start();
// session_unregister("session_clase14");
  session_destroy();
  //devuelvo al usuario al formulario
  //header("Location: index1.php");
  
  echo "<script type='text/javascript'> window.location='index.php'; </script>'";
  
?>