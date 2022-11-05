<?php

//Recibir datos del formulario Agendar Cita 

include("con_db.php");



      if(isset($_POST['register'])){
        if(strlen($_POST['id']) >= 1 &&
        strlen($_POST['dpi']) >= 1 &&
       strlen($_POST['nombre']) >= 1 &&
       strlen($_POST['fecha_nacimiento']) >= 1 &&
       strlen($_POST['sexo']) >= 1 &&
       strlen($_POST['departamento']) >= 1 &&
       strlen($_POST['direccion']) >= 1 &&
       strlen($_POST['telefono']) >= 1 ) {
        $dpi = trim($_POST['dpi']);
        $nombre = trim($_POST['nombre']);
        $fecha_nacimiento = trim($_POST['fecha_nacimiento']);
        $sexo = trim($_POST['sexo']);
        $departamento = trim($_POST['departamento']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $consulta = "INSERT INTO `
        afiliados`(dpi, nombre, fecha_nacimiento, sexo,departamento,direccion,telefono)
         VALUES ('$dpi','$nombre','$fecha_nacimiento','$sexo','$departamento','$direccion','$telefono')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?> 
            <h3 class="ok">¡Se ha registrado la cita correctamente!</h3>
           <?php
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
        }
        }   else {
            ?> 
            <h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
        }
        
     }
         
    ?>

