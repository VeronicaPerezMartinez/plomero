
function limpiar()
{
	document.form.reset();
	document.form.Nombre.focus();
}
function validar()
{
	var form =document.form;

		if (form.Nombre.value==0)
	{
		alert("Ingrese el nombre del cliente");
		form.Nombre.value="";
		form.Nombre.focus();
		return false;
		
	}
		if (form.ApellidoP.value==0)
	{
		alert("Ingrese el apellido paterno del cliente");
		form.ApellidoP.value="";
		form.ApellidoP.focus();
		return false;
		
	}	if (form.ApellidoM.value==0)
	{
		alert("Ingrese el apellido materno del cliente");
		form.ApellidoM.value="";
		form.ApellidoM.focus();
		return false;
		
	}	if (form.Telefono1.value==0)
	{
		alert("Ingrese el telefono de casa del cliente");
		form.Telefono1.value="";
		form.Telefono1.focus();
		return false;
		
	}	if (form.Telefono2.value==0)
	{
		alert("Ingrese el telefono celular del cliente");
		form.Telefono2.value="";
		form.Telefono2.focus();
		return false;
		
	}	if (form.Direccion.value==0)
	{
		alert("Ingrese la dirección del cliente");
		form.Direccion.value="";
		form.Direccion.focus();
		return false;
		
	}	if (form.Correo.value==0)
	{
		alert("Ingrese el correo del cliente");
		form.Correo.value="";
		form.Correo.focus();
		return false;
		
	}
	if (form.Rfc.value==0)
	{
		alert("Ingrese el rfc");
		form.Rfc.value="";
		form.Rfc.focus();
		return false;
		
	}
	form.submit();
}
function cambiar(id,color)
{
	document.getElementById(id).style.backgroundColor=color;
}
function eliminar(url)
{
	if(confirm("Realmente desea eliminar este registro?"))
	{
		window.location=url;
	}
}

function valida_correo(correo)
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
}
function valida_comentarios()
{
	
	//alert("hola");
	var form =document.form;
	
		if(form.nom.value==0)
		{
			document.getElementById("valor").innerHTML="<hr><font color='#ff0000'>El nombre est&aacute; vac&iacute;o</font><hr>";
			form.nom.value="";
			form.nom.focus();
			return false;
			
		}else
		{
			document.getElementById("valor").innerHTML="";
		}
			if(form.correo.value==0)
		{
			document.getElementById("valor").innerHTML="<hr><font color='#ff0000'>El e-mail est&aacute; vac&iacute;o</font><hr>";
			form.correo.value="";
			form.correo.focus();
			return false;
			
		}else
		{
			document.getElementById("valor").innerHTML="";
		}
		if (valida_correo(form.correo.value)==false)
	{
		document.getElementById("valor").innerHTML="<hr><font color='#ff0000'>El e-mail ingresado no es v&aacute;lido</font><hr>";
		form.correo.value="";
		form.correo.focus();
		return false;
	}else
	{
		document.getElementById("valor").innerHTML="";
	}
			if(form.mensaje.value==0)
		{
			document.getElementById("valor").innerHTML="<hr><font color='#ff0000'>El mensaje est&aacute; vac&iacute;o</font><hr>";
			form.mensaje.value="";
			form.mensaje.focus();
			return false;
			
		}else
		{
			document.getElementById("valor").innerHTML="";
		}
		form.url.value=location.href;
		form.submit();
		}
		function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }

function limpiar_logueo()
{
	document.form.reset();
	document.form.user.focus();
}
function validar_logueo()
{
	var form=document.form;
	if (form.user.value==0)
	{
		alert("Ingrese su Login");
		form.user.value="";
		form.user.focus();
		return false;
	}
	if (form.pass.value==0)
	{
		alert("Ingrese su Password");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	
	form.pass.value=calcMD5(form.pass.value);
	form.submit();
	
}
function valida_registro()
{
	var form=document.form;	
	if (form.nom.value==0)
	{
		alert("Ingrese su Nombre");
		form.nom.value="";
		form.nom.focus();
		return false;
	}
	if (form.correo.value==0)
	{
		alert("Ingrese su E-Mail");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	if (valida_correo(form.correo.value)==false)
	{
		alert("El E-Mail ingresado no es correcto");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	if (form.login.value==0)
	{
		alert("Ingrese su Login");
		form.login.value="";
		form.login.focus();
		return false;
	}
	if (form.pass.value==0)
	{
		alert("Ingrese su Password");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	if (form.pass_1.value==0)
	{
		alert("Repita su Password");
		form.pass_1.value="";
		form.pass_1.focus();
		return false;
	}
	if (form.pass.value != form.pass_1.value)
	{
		alert("Los password ingresados no coinciden");
		form.pass.value="";
		form.pass_1.value="";
		form.pass.focus();
		return false;
	}
	form.pass.value=calcMD5(form.pass.value);
	form.submit();

	
}
function validar1()
{
	var form =document.form;
	if (form.Cliente.value==0)
	{
		alert("Ingrese Cliente");
		form.Cliente.value="";
		form.Cliente.focus();
		return false;
		
	}
		if (form.Empleado.value==0)
	{
		alert("Ingrese Empleado");
		form.Empleado.value="";
		form.Empleado.focus();
		return false;
		
	}
		if (form.Nota.value==0)
	{
		alert("Ingrese la nota");
		form.Nota.value="";
		form.Nota.focus();
		return false;
		
	}
		if (form.Fecha.value==0)
	{
		alert("Ingrese la fecha");
		form.Fecha.value="";
		form.Fecha.focus();
		return false;
		
	}
		if (form.Cantidad.value==0)
	{
		alert("Ingrese Cantidad");
		form.Cantidad.value="";
		form.Cantidad.focus();
		return false;
		
	}
		if (form.Descripcion.value==0)
	{
		alert("Ingrese Descripcion");
		form.Descripcion.value="";
		form.Descripcion.focus();
		return false;
		
	}
		if (form.Servicio.value==0)
	{
		alert("Ingrese el nombre del Servicio");
		form.Servicio.value="";
		form.Servicio.focus();
		return false;
		
	}
		if (form.Materiales.value==0importe abono pagado
	{
		alert("Ingrese Materiales");
		form.Materiales.value="";
		form.Materiales.focus();
		return false;
		
	}	if (form.Importe.value==0)
	{
		alert("Ingrese el Importe");
		form.Importe.value="";
		form.Importe.focus();
		return false;
		
	}	if (form.Abono.value==0)
	{
		alert("Ingrese Abono");
		form.Abono.value="";
		form.Abono.focus();
		return false;
		
	}	if (form.Pagado.value==0)
	{
		alert("Ingrese Pagado");
		form.Pagado.value="";
		form.Pagado.focus();
		return false;
		
	}

	form.submit();
}

function validar2()
{
	var form =document.form;
	form.submit();
}


