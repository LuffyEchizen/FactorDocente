<?php
include ("conexion.php");
$cedula=$_REQUEST["cedula"];



$query_eliminar=  mysqli_query($conexion,"delete from usuarios where cedula=".$cedula."") or die("error al eliminar la persona de usuarios");

?>
<script>
alert("se ha eliminado el registro indicado");
location.href="index.php";
</script>