<?php include ("conexion.php");
?>
<html>
    <head>
        <title>Factor Docente</title>
        <link type ='text/css' rel='stylesheet' href='estilo.css'>
    </head>
    <body>
        <meta charset = "UTF-8">
         <div align='left'><h1>Creacíon de Usuarios</h1></div>
          <form name="form1" id="form1" method="post" action="guardar.php">
Cedula:<input type ="text" name="cedula" size="40">
            <br> <br>       
Primer Nombre:<input type ="text" name="txtnombre" size="40">
            <br> <br>
Segundo Nombre:<input type ="text" name="txtnombre2" size="40">
            <br> <br>
Primer Apellido:<input type ="text" name="txtapellido"  size="30">
            <br> <br>
Segundo Apellido:<input type ="text" name="txtapellido2"  size="30">
            <br> <br>
Direccion:<input type ="text" name="txtdireccion"size="30">
            <br> <br>
Celular:<input type ="text" name="txtcelular"size="10">
            <br> <br>  
Fijo:<input type ="text" name="txtfijo"size="8">
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
        <div align='center'><h1>informacion de Usuarios</h1></div>
        <table border='1'width='70%' align='center'>
            <tr>
                <td>Cedula</td>
                <td>Primer Nombre</td>
                <td>Segundo Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Direccion</td>
                <td>Celular</td>
                <td>Fijo</td>
                <td></td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php
            $query_persona = mysqli_query($conexion,"select * from usuarios") or die ("error al mostrar los"
                    . "registros de las personas");
            while($listar_personas=  mysqli_fetch_assoc($query_persona)){
                ?>
            <tr>
                <td><?php echo $listar_personas["cedula"];?> </td>
                <td><?php echo $listar_personas["nombre1"];?> </td>
                <td><?php echo $listar_personas["nombre2"];?> </td>
                <td><?php echo $listar_personas["apellido1"];?> </td>
                <td><?php echo $listar_personas["apellido2"];?> </td>
                <td><?php echo $listar_personas["direccion"];?> </td>
                <td><?php echo $listar_personas["celular"];?> </td>
                <td><?php echo $listar_personas["fijo"];?> </td>
                <td><?php 
                if ($listar_cargos["codcargo"]=="" || is_null($listar_cargos["codcargo"])){
                    echo '';
                }else{    
                $query_cargo=  mysqli_query($conexion,"select * from cargos where cargo=".$listar_cargos["cargo"]."")
                        or die ("error al hacer la consulta cargos");
                $mostrar_cargo= mysqli_fetch_assoc($query_cargo);
                
                
                    echo $mostrar_cargo["cargo"];
                }
                
                ?> </td>
                <td><a href="editar.php?cedula=<?php echo $listar_personas["cedula"];?> ">Editar</a>
                <td><a href="eliminar.php?cedula=<?php echo $listar_personas["cedula"];?> ">Eliminar</a>      
            </tr>
            <?php } ?>
            
            
            
        </table>
    </body>
</html>
