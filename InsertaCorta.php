<?php 
      $Servidor ="localhost";
      $Usuario = "optimus";
      $Clave = "123";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){
        echo "<h2><b>Conexion Exitosa</b></h2>";


        $Fecha = $_POST['fecha'];
        $Cortador = $_POST['cortador'];
        $Galones = $_POST['galones'];
        $Observacion = $_POST['observacion'];

        if(!empty($Fecha) && !empty($Cortador) && !empty($Galones)){
          $Consulta ="insert into Corta(fecha,cortador,galones,observacion) values(
            '$Fecha','$Cortador','$Galones','$Observacion');";

            if ($Conexion->query($Consulta)){
              echo "<h2>Datos insertados con exito</h2>";
            }else{
              echo "<h2>Error en insercion de datos</h2>";
            }
        }else{
          echo "<h2>Algunos cambos estan vacios. Favor llenar toda la informacion requerida</h2>";
        }

      }
      else {
        die("<h2><b>Conexion Fallida</b></h2>");
      }
    
      $Conexion->close();
      ?>