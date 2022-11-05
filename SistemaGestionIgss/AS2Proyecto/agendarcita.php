<?php

//Recibir datos del formulario Agendar Cita 

include("con_db.php");

if(isset($_POST['register'])){
    if(strlen($_POST['centro']) >= 1 &&
    strlen($_POST['fechaC']) >= 1 &&
   strlen($_POST['vacuna']) >= 1 &&
   strlen($_POST['lote']) >= 1) {
    $centro = trim($_POST['centro']);
    $fechaC = trim($_POST['fechaC']);
    $vacuna = trim($_POST['vacuna']);
    $lote = trim($_POST['lote']);
    $consulta = "INSERT INTO `agendar_cita`(centro, fecha_cita, vacuna, lote_vacuna) VALUES ('$centro','$fechaC','$vacuna','$lote')";
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