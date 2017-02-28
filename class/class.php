<?php
session_start();
class Conectar
{
public static function con()
{
	$con=mysqli_connect("127.0.0.1","root","Plomero");
		mysqli_query($con,"SET NAMES 'utf8'");
	//	mysqli_set_charset($conex,"utf8");
		mysqli_select_db($con,"plomeria");
		return $con;
}
}
class Trabajo
{
	private $nombre=array();
  public function logueo()
  {
		$user=$_POST["user"];
		$pass_js=$_POST["pass"];
		$pass_php=md5($_POST["pass"]);
		//echo "user=$user<br>pass_js=$pass_js<br>pass_php=$pass_php";
	$sql="select * from registro_usuarios where user='$user' and pass_js='$pass_js' and pass_php='$pass_php' and estado='activo'";
			 //  echo $sql;
	$res=mysqli_query(Conectar::con(),$sql);
	$datos=count(mysqli_num_rows($res));
	//if(count(mysqli_num_rows($res))==0)
		//echo $datos;
	if($datos==0)
	{
		//alert("Ingrese su Password");
		//echo "Los datos ingresados no existen en la base de datos";
		echo "<script type='text/javascript'>
			alert('Los datos ingresados no existen en la base de datos');
			window.location='index.php';
			</script>";
	}else
	{
		if ($reg=mysqli_fetch_array($res))
			{
				$_SESSION["session_clase15"]=$reg["idusuario"];
				header("Location: home.php");
			}
	}
  }
  //***************************************************
	//Función para obtener el nombre del usuario logueado
	public function saluda_al_usuario($idusuario)
	{
		$sql="select nombre from registro_usuarios where idusuario=$idusuario";
		$res=mysqli_query(Conectar::con(),$sql);
		while ($reg=mysqli_fetch_assoc($res))
		{
			$this->nombre[]=$reg;
		}
			return $this->nombre;
	}
	
	//*************************************************
	//Función para registro de usuarios
	public function registro()
	{
		//echo "los pilléeeeeeeeeee";
		//$nombre=$_POST[""];
		$user=$_POST["login"];
		$pass_js=$_POST["pass"];
		$pass_php=md5($_POST["pass"]);
		$nom=$_POST["nom"];
		//echo "user=$user<br>pass_js=$pass_js<br>pass_php=$pass_php";
		$sql="select * from registro_usuarios where user ='$user'";
		//echo "$sql";
		$res=mysqli_query(Conectar::con(),$sql);
			$mires=(mysqli_num_rows($res));
			//echo "el resultado es $mires";
		//if(count(mysqli_num_rows($res))==0)
		if($mires==0)	
		{
		//	echo "si user no existe por lo tanto sigo";
			$query="insert into registro_usuarios 
				values
				(null,'".$_POST["nom"]."','".$_POST["correo"]."','$user','$pass_js','$pass_php',now(),'activo');
			";
			$resp=mysqli_query(Conectar::con(),$query);
			
				echo "<script type='text/javascript'>
			alert('Usted se ha registrado correctamente');
			window.location='index.php';
			</script>";
			//echo $query;
			/*$fecha=date("d-m-Y");
			$hora=date("H:m:s");
					$correo=$_POST["correo"];
					$correo="verydan2000@hotmail.com";
					//$remitente="Remitente <ftp.chaparra.com>";
					$asunto="Confirme su registro en verydan2000@hotmail.com";
					$cuerpo="
					<div align='left'>
					Estimado (a) $nom gracias por registrarse con nosotros
					<br>
					<br>
					Por favor haga clic en el siguiente link para terminar y confirmar su registro:
					<br>
					<br>
					<a href='http://www.curso.chaparra.com/verificacion.php?tokem=".mysqli_insert_id()."&f=$fecha&h=$hora'>
					http://www.curso.chaparra.com/verificacion.php?tokem=".mysqli_insert_id()."&f=$fecha&h=$hora
					</a>
					<br>
					<br>
					Si lo prefiere tome el link y péguelo en la barra de direcciones de su navegador favorito
					<br>
					<br>
					Gracias por registrarse en curso.chaparra.com
					</div>
					";
					$sheader="From:".$remitente."\nReply-To:".$remitente."\n";
					$sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
					$sheader=$sheader."Mime-Version: 1.0\n";
					$sheader=$sheader."Content-Type: text/html";
					mail($correo,$asunto,$cuerpo,$sheader);
					header("Location: index1.php");*/
		
		}else
		{
			echo "El Login $user ya est&aacute; siendo usado por otro usuario<br>";
			?>
			<input type="button" value="Volver" title="Volver" onclick="history.back();" />
			<?php
		}
	}
	public function verificacion()
	{
		//print_r($_GET);
		$sql="select idusuario from registro_usuarios where idusuario=".$_GET["tokem"]." and estado='no_activo'";
		$res=mysqli_query(Conectar::con(),$sql);
		
		if (count(mysqli_num_rows($res))==0)
		{
			header("Location: index1.php");
		}else
		{
			$query="update registro_usuarios set estado='activo' where idusuario=".$_GET["tokem"];
			$resp=mysqli_query($query,Conectar::con());
			$_SESSION["session_clase15"]=$_GET["tokem"];
			//header("Location: home.php");
			echo "<script type='text/javascript'>
			alert('Usted se ha registrado correctamente');
			window.location='home.php';
			</script>";
		}
	}
}
?>
