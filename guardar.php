<?php
include ("conexion.php");
$cedula=$_POST["cedula"];
$nombre1=$_POST["txtnombre"];
$nombre2=$_POST["txtnombre2"];
$apellido1=$_POST["txtapellido"];
$apellido2=$_POST["txtapellido2"];
$direccion=$_POST["txtdireccion"];
$celular=$_POST["txtcelular"];
$fijo=$_POST["txtfijo"];
$cargo=$_POST["selcargo"];

$query_insertar=  mysqli_query($conexion, "insert into usuarios(cedula,nombre1,nombre2,apellido1,apellido2,direccion,celular,fijo)values('".$cedula."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$direccion."','".$celular."','".$fijo."')") or die("error al insertar un resgitro informacion");
$query_insertar=  mysqli_query($conexion, "insert into usucar(codcargo,cedula)values('".$cargo."','".$cedula."')") or die("error al insertar un resgitro cargos");
?>
<script>
    alert ("se ha guardado un nuevo resgistro");
    location.href="index.php";
</script> 