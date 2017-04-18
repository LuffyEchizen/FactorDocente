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


if ($cargo==""){
  $query_actualizar=mysqli_query($conexion,"update usuarios set txtnombre='".$nombre1."',txtnombre2='".$nombre2."',txtapellido='"
          .$apellido1."',txtapellido2='".$apellido2."',txtdireccion ='".$direccion."',txtcelular='".$celular."',txtfijo='"
          .$fijo."' where cedula=".$cedula."")
          or die ("error al actualizar registro de usuarios cargo");
}else {
      $query_actualizar=mysqli_query($conexion,"update usuarios set txtnombre='".$nombre1."',txtnombre2='".$nombre2."',txtapellido='"
          .$apellido1."',txtapellido2='".$apellido2."',txtdireccion ='".$direccion."',txtcelular='".$celular."',txtfijo='"
          .$fijo."',cargo=".$cargo." where cedula=".$cedula."")
          or die ("error al actualizar registro de usuarios "); 
  }
?>
<script>
    alert("se ha guardado el registro");
    location.href="index.php";
    </script>
    