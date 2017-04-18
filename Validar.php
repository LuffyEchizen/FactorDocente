

<?php
	
	include("conexion.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];

	$consulta = "SELECT * FROM login WHERE email='$username'";
	$eje_consulta = $conexion->query($consulta);
	$reg_contacto = $eje_consulta->fetch_assoc();
	
	if($reg_contacto){
		if($pass==$reg_contacto['pasadmin']){
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		
			echo "<script>location.href='admin.php'</script>";
		
		}
	}

	//$sql=mysql_query("SELECT * FROM login WHERE email='$username'");

	$consulta = "SELECT * FROM login WHERE email='$username'";
	$eje_consulta = $conexion->query($consulta);
	$reg_contacto = $eje_consulta->fetch_assoc();
	if($reg_contacto){
		if($pass==$reg_contacto['password']){
			header("Location: ../FactorDocente/index.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../FactorDocente/Login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../FactorDocente/Login.php'</script>";	

	}



		


?>