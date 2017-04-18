<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	include("conexion.php");
	$consulta = "SELECT *FROM login WHERE email = '$email'";
	$eje_consulta = $conexion->query($consulta);
	$num_regs = $eje_consulta->num_rows;

	
		if($pass==$rpass){
			if($consulta>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				$consulta = "INSERT INTO login(id,user,password,email,pasadmin) VALUES('','$realname','$pass','$mail','')";
				$eje_consulta = $conexion->query(utf8_encode($consulta));
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				$conexion->close();
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>