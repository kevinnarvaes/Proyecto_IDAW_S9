<?php 
      $Servidor ="localhost";
      $Usuario = "optimus";
      $Clave = "123";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){
        echo "<h2><b>Conexion Exitosa</b></h2>";


        $Fecha = $_POST['Fecha'];
        $Hora = $_POST['Hora'];
        $Galones = $_POST['Galones'];
        $Lavador = $_POST['Lavador'];
        $Tratamiento = $_POST['Tratamiento'];

        if( !empty($Fecha) && !empty($Hora) && !empty($Galones) && !empty($Lavador) && !empty($Tratamiento)  ){
          $Consulta = "insert into Lava(Fecha,Hora,Galones,Lavador,Tratamiento)values('$Fecha','$Hora','$Galones','$Lavador','$Tratamiento');";

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