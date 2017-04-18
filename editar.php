<?php include ("conexion.php"); $query_datos=  mysqli_query($conexion,"select * from usuarios WHERE cedula=".$_REQUEST["cedula"]."") or die ("error al realizar la consulta del ususario");
     $dato_persona=  mysqli_fetch_assoc($query_datos);?>  
<!--<html>-->
    <head>
        <title>Editar informacion del usuario</title>
         <link type ='text/css' rel='stylesheet' href='estilo.css'>
    </head>
    <body>
        <h1>informacion basica del usuario</h1>
        <form name="form1" id="form1" method="post" action="guardar_datos.php">
<input type="hidden" name="cedula" value="<?php echo $dato_persona["cedula"];?>">
Primer Nombre:<input type ="text" name="txtnombre" value="<?php echo $dato_persona["nombre1"];?>" size="40">
            <br> <br>
Segundo Nombre:<input type ="text" name="txtnombre2" value="<?php echo $dato_persona["nombre2"];?>" size="40">
            <br> <br>
Primer Apellido:<input type ="text" name="txtapellido" value="<?php echo $dato_persona["apellido1"];?>" size="30">
            <br> <br>
Segundo Apellido:<input type ="text" name="txtapellido2" value="<?php echo $dato_persona["apellido2"];?>" size="30">
            <br> <br>
Direccion:<input type ="text" name="txtdireccion" value="<?php echo $dato_persona["direccion"];?>" size="30">
            <br> <br>
Celular:<input type ="text" name="txtcelular" value="<?php echo $dato_persona["celular"];?>" size="30">
            <br> <br>
Fijo:<input type ="text" name="txtfijo" value="<?php echo $dato_persona["fijo"];?>" size="30">
            <br> <br>
Cargo:
     <select name="selcargo">
         <option value="">Seleccione...</option>
    <?php $query_cargos=  mysqli_query($conexion,"select * from cargos") or die ("error al traer los cargos");
     while($listar_cargos=  mysqli_fetch_assoc($query_cargos)){
                     ?>
         <option value="<?php echo $listar_cargos["codcargo"]?>"><?php echo $listar_cargos["cargo"];?></option>
                <?php } ?>
     </select>
            <br> <br>
            
            <input type="submit" name="guardar" value="Guardar">
            
        </form>
    </body>
</html>
