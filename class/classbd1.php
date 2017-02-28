<?php
class Conectar
{
	public static function conexion()
	{
		$conex=mysqli_connect("127.0.0.1","root","Plomero");
		mysqli_query($conex,"SET NAMES 'utf8'");
	//	mysqli_set_charset($conex,"utf8");
		mysqli_select_db($conex,"plomeria");
		return $conex;
	}
}

class Trabajo
{
	
	private $visitas;
	private $mostrar=array();
	private $buscador=array();
	public function __construct()
	{
		$this->visitas=array();
	}
	public function get_clientes()
	{	
	$sql="select * from clientes order by nombre desc ";
	$reg=mysqli_query(Conectar::conexion(),$sql);
	while($resul=mysqli_fetch_assoc($reg))
	{
			$this->visitas[]=$resul;
	}
	return $this->visitas;
	}
	public function add_cliente($Nombre,$ApellidoP,$ApellidoM,$Telefono1,$Telefono2,$Direccion,$Correo,$Comentarios,$Rfc)
	{
		$sql="insert into clientes values(null,'$Nombre','$ApellidoP','$ApellidoM','$Telefono1','$Telefono2','$Direccion','$Correo','$Comentarios','$Rfc', now())";
		$res=mysqli_query(Conectar::conexion(),$sql);
		echo "<script type='text/javascript'>
		alert('Gracias por ingresar en nuestro catalogo de clientes');
		window.location='indexb.php';
		</script>";
	}
	public function get_cliente_por_id($id7)
	{
		$sql="select * from clientes where idcliente=$id7";
		$res=mysqli_query(Conectar::conexion(),$sql);
		while($reg=mysqli_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
			return $this->visitas;
		}
	}
	public function edit_cliente($Nombre,$ApellidoP,$ApellidoM,$Telefono1,$Telefono2,$Direccion,$Correo,$Comentarios,$Rfc,$id)
	{
		$sql="update clientes set nombre='$Nombre', apellidop='$ApellidoP', apellidom='$ApellidoM', telefono1='$Telefono1', telefono2='$Telefono2', direccion='$Direccion', correo='$Correo', comentarios='$Comentarios', rfc='$Rfc' where idcliente='$id'";
		/*$sql="update libro_de_visitas"
		."set"
		." nombre_persona='$nom',"
		." texto='$texto',"
		." where"
		." id='$id'";*/
	$res=mysqli_query(Conectar::conexion(),$sql);
	echo "<script type='text/javascript'>
	alert('El registro ha sido modificado correctamente');
	window.location='indexb.php';
	</script>";
	}
	public function eliminar_cliente($id)
	{
		$sql="DELETE FROM `clientes` WHERE idcliente=$id";
		$reg=mysqli_query(Conectar::conexion(),$sql);
		echo "<scrip type='text/javascript'>
		alert('El registro ha sido eliminado correctamente');
		window.location='indexb.php';
		</script>";
	}
	
		public function eliminar_nota($id)
	{
		$sql="DELETE FROM `notas` WHERE idnota=$id";
		
		$reg=mysqli_query(Conectar::conexion(),$sql);
		echo "<scrip type='text/javascript'>
		alert('El registro ha sido eliminado correctamente');
		window.location='notas.php';
		</script>";
	}
	
		public function buscarcliente($id)
	{
		
		$sql="select * from clientes where telefono1=$id";
		
		$res=mysqli_query(Conectar::conexion(),$sql);
		while($reg=mysqli_fetch_assoc($res))
		{
			$this->mostrar[]=$reg;
		}
		return $this->mostrar;
	}
	
		public function muestra_resultados($id1)
	{
		$sql="select * from clientes where nombre like '%".$_GET["id1"]."%' or apellidop like '%".$_GET["id1"]."%' or apellidom like '%".$_GET["id1"]."%' or telefono1 like '%".$_GET["id1"]."%' or telefono2 like '%".$_GET["id1"]."%'";
		
	
	$res=mysqli_query(Conectar::conexion(),$sql);
	while($reg=mysqli_fetch_assoc($res))
		{
			$this->buscador[]=$reg;
		}
		return $this->buscador;
		
	}
			public function muestra_empleados($id)
	{
		$sql="select * from empleados where nombreempleado like '%".$_GET["id"]."%' or apellidop like '%".$_GET["id"]."%' or apellidom like '%".$_GET["id"]."%' or telefono1 like '%".$_GET["id"]."%' or telefono2 like '%".$_GET["id"]."%'";
		
	
	$res=mysqli_query(Conectar::conexion(),$sql);
	while($reg=mysqli_fetch_assoc($res))
		{
			$this->buscador[]=$reg;
		}
		return $this->buscador;
		
	}
		public function add_empleado($Nombre,$ApellidoP,$ApellidoM,$Telefono1,$Telefono2,$Direccion,$Correo,$Rfc,$Fecha)
	{
		$sql="insert into empleados values(null,'$Nombre','$ApellidoP','$ApellidoM','$Telefono1','$Telefono2','$Direccion','$Correo','$Rfc', now())";
		$res=mysqli_query(Conectar::conexion(),$sql);
		echo "<script type='text/javascript'>
		alert('Gracias por ingresar en nuestro catalogo de empleados');
		window.location='empleados.php';
		</script>";
	}
		public function get_empleados()
	{	
	$sql="select * from empleados order by nombreempleado desc ";
	$reg=mysqli_query(Conectar::conexion(),$sql);
	while($resul=mysqli_fetch_assoc($reg))
	{
			$this->visitas[]=$resul;
	}
	return $this->visitas;
	}
	public function get_empleado_por_id($id)
	{
		$sql="select * from empleados where idempleado=$id";
		$res=mysqli_query(Conectar::conexion(),$sql);
		while($reg=mysqli_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
			return $this->visitas;
		}
	}
	public function edit_empleado($Nombre,$ApellidoP,$ApellidoM,$Telefono1,$Telefono2,$Direccion,$Correo,$Rfc,$Fecha,$id)
	{
		$sql="update empleados set nombreempleado='$Nombre', apellidop='$ApellidoP', apellidom='$ApellidoM', telefono1='$Telefono1', telefono2='$Telefono2', direccion='$Direccion', correo='$Correo', rfc='$Rfc', fecha_alta='$Fecha' where idempleado='$id'";
	
	$res=mysqli_query(Conectar::conexion(),$sql);
	echo "<script type='text/javascript'>
	alert('El registro ha sido modificado correctamente');
	window.location='empleados.php';
	</script>";
	}
	
	public function add_notas($Nota,$Fecha,$Cantidad,$Descripcion,$Servicio,$Materiales,$Importe,$Cliente,$Empleado,$Abono,$Pagado,$Cancelada,$Detalles)
	{
	

		$sql="insert into notas values(null,'$Cliente','$Empleado','$Nota','$Fecha','$Cantidad','$Descripcion','$Servicio','$Materiales','$Importe','$Abono','$Pagado','$Cancelada','$Detalles')";
		$res=mysqli_query(Conectar::conexion(),$sql);
		echo "<script type='text/javascript'>
		alert('Gracias por ingresar su nota');
		window.location='notas.php';
		</script>";
	}
	
				public function muestra_notas($id)
	{
		
		$sql="select * from notas where servicio like '%".$_GET["id"]."%'";
		

		
	$res=mysqli_query(Conectar::conexion(),$sql);
	while($reg=mysqli_fetch_assoc($res))
		{
			$this->buscador[]=$reg;
		}
		return $this->buscador;
		
	}
		
		public function get_notas_por_id($id)
	{
		$sql="select * from notas where idnota=$id";
		
		//echo $sql;
		
		$res=mysqli_query(Conectar::conexion(),$sql);
		while($reg=mysqli_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
			return $this->visitas;
		}
	}
	
	
	
	//$Nota
	public function edit_notas($Cantidad,$Descripcion,$Servicio,$Materiales,$Importe,$Abono,$Pagado,$id)
	{
	//$sql="UPDATE `notas` SET `cantidad`=['$Cantidad'],`descripcion`=['$Descripcion'],`servicio`=['$Servicio'],`materiales`=['$Materiales'],`importe`=['$Importe'],`abono`=['$Abono],`pagado`=['$Pagado'] WHERE idnota=['$id']";
	$sql="update notas set cantidad='$Cantidad', descripcion='$Descripcion', servicio='$Servicio', materiales='$Materiales', importe='$Importe', abono='$Abono', pagado='$Pagado' where idnota='$id1'";
	//echo $sql;
	$res=mysqli_query(Conectar::conexion(),$sql);
	echo "<script type='text/javascript'>
	alert('El registro ha sido modificado correctamente');
	window.location='notas.php';
	</script>";
	}

		public function add_producto($Nombre,$Precio,$Inventario)
	{
		$sql="insert into productos values(null,'$Nombre','$Precio','$Inventario')";
		$res=mysqli_query(Conectar::conexion(),$sql);
		echo "<script type='text/javascript'>
		alert('Gracias por ingresar su producto');
		window.location='productos.php';
		</script>";
	}
	
		public function muestra_producto($id3)
	{
		$sql="select * from productos where idproducto=$id3";
	
		$res2=mysqli_query(Conectar::conexion(),$sql);
		while($reg2=mysqli_fetch_assoc($res2))
		{
			$this->visitas[]=$reg2;
			return $this->visitas;
		}
	}
	
		public function muestra_cliente($id4)
	{
		$sql="select * from clientes where idcliente=$id4";
		
		$res1=mysqli_query(Conectar::conexion(),$sql);
		
		while($reg1=mysqli_fetch_assoc($res1))
		{
			$this->visitas[]=$reg1;
			return $this->visitas;
			
		}
	}	
		public function muestra_empleado($id5)
	{
		$sql="select * from empleados  where idempleado=$id5";
		
		$res3=mysqli_query(Conectar::conexion(),$sql);
		while($reg3=mysqli_fetch_assoc($res3))
		{
			$this->visitas[]=$reg3;
			return $this->visitas;
			
		}
	}
	
		public function get_notas()
	{	
	$sql="select * from notas order by servicio asc ";
	$reg=mysqli_query(Conectar::conexion(),$sql);
	while($resul=mysqli_fetch_assoc($reg))
	{
			$this->visitas[]=$resul;
	}
	return $this->visitas;
	}
}
?>