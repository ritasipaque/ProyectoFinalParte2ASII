<?php 
    include("controladores/cabecera.php");
    
?>


<html>
<head>


<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <title>Programando Ando</title>
  


</head>
<body>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">



    <center><h1>Cetros de vacunacion </h1></center>

    <form method="POST" action="centros.php" >

    <div class="form-group">
      <label for="zona">Consulta tu centro mas cercano </label>
      <input type="text" name="zona" class="form-control" id="zona">
  </div>

  

   

  
    
    <center>
    
      <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
     





    </center>

  </form>



  <?php

    

    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");
      

        $doc = $_POST['zona'];
        if($doc=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "Digita una zona. (Ej: zona6)";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE zona = $doc");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo 
            "
              <table width=\"140%\" border=\"1\">
                <tr>
                  <td><b><center>ID</center></b></td>
                  <td><b><center>NOMBRE</center></b></td>
                  <td><b><center>Zona</center></b></td>
                  <td><b><center>Vacuna</center></b></td>
                  
                  <td><b><center>DOSIS</center></b></td>
                  <td><b><center>HORARIO</center></b></td>
                  <td><b><center>DIA</center></b></td>
                </tr>
                <tr>
                  <td>".$consulta['id']."</td>
                  <td>".$consulta['nombre']."</td>
                  <td>".$consulta['zona']."</td>
                  <td>".$consulta['vacuna']."</td>
                  <td>".$consulta['dosis']."</td>
                  <td>".$consulta['horario']."</td>
                  <td>".$consulta['dia']."</td>
                </tr>
              </table>
            ";
          }
        }

      include("cerrar_conexion.php");
    }


    




  ?>



  </div>
  <div class="col-md-4"></div>
</div>

<form>

<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
      <nav class="navbar navbar-expand-lg bg-primary"">
    <ul class="nav navbar-nav">
    
       

        <li class="nav-item">
            
            <a class="tex-center" href="index.php"><h2>REGRESAR</h2></a>
        </li>
        
        
    
    
    
    
    </ul>
</nav>

      </form>

  
  
</body>
</html>