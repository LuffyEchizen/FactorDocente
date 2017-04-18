<?php
$conexion=  mysqli_connect("localhost","root","") or die ("error al conectar a la bases de datos");
mysqli_select_db($conexion,"factordocente2") or die("error al seleccionar la base de datos");
?>