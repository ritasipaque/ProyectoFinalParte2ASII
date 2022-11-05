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



    <center><h1>Contancia</h1></center>

    <form method="POST" action="ConstanciaVac.php" >

    <div class="form-group">
      <label for="dpi">Documento</label>
      <input type="text" name="dpi" class="form-control" id="dpi">
  </div>

  

   

  
    
    <center>
    
      <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
     





    </center>

  </form>



  <?php

    

    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");
      

        $doc = $_POST['dpi'];
        if($doc=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "Digita un documento por favor. (Ej: 4015369900101)";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE dpi = $doc");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo 
            "
              <table width=\"140%\" border=\"1\">
                <tr>
                  <td><b><center>Nombre</center></b></td>
                  <td><b><center>Dosis</center></b></td>
                  <td><b><center>Vacuna</center></b></td>
                  <td><b><center>Fech.Vacunacion</center></b></td>
                  <td><b><center>Lote</center></b></td>
                  <td><b><center>Centro</center></b></td>
                  <td><b><center>Pais</center></b></td>
                </tr>
                <tr>
                  <td>".$consulta['nombre']."</td>
                  <td>".$consulta['dosis']."</td>
                  <td>".$consulta['vacuna']."</td>
                  <td>".$consulta['fecha_vacunacion']."</td>
                  <td>".$consulta['lote']."</td>
                  <td>".$consulta['centro']."</td>
                  <td>".$consulta['pais']."</td>
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
            
            <a class="tex-center" href="pdf/gpdf.php"><h2>GENERAR PDF</h2></a>
        </li>

        <li class="nav-item">
            
            <a class="tex-center" href="index.php"><h2>REGRESAR</h2></a>
        </li>
        
        
    
    
    
    
    </ul>
</nav>

      </form>

  
  
</body>
</html>