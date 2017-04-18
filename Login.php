<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login AmericanFut</title>
</head>

<body   >
	<center><div class="tit"><h2 style="color: #00004A; ">Inicio de sesión</h2>
		<hr>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="/FactorDocente/validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt; color: #cc0000;" ><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt; color: #cc0000;" ><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
		<hr class="separador">

<h3><center><a href="/FactorDocente/Principal.html" style="font-size: 16pt; color: #FFFFFF;" onMouseOver="this.style.cssText='color: #cc0000'"> Ingresa Sin Registrarte</a></center></h3>
<!-- formulario registro -->
<hr class="separador">
<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt; color: #00004A;"><b>Registrate</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color: #008000;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #008000;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #008000;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #008000;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
		if(isset($_POST['submit'])){
			require("/registro.php");
		}
?>

<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>