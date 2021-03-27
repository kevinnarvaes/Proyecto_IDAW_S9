<?php 
      $Servidor ="localhost";
      $Usuario = "optimus";
      $Clave = "123";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){
        echo "<h2><b>Conexion Exitosa</b></h2>";


        $Fecha = $_POST['fecha'];
        $Hora = $_POST['hora'];
        $Tostador = $_POST['nombre_tosta'];
        $Cant_Tosta = $_POST['cant_tosta'];

        if(!empty($Fecha) && !empty($Hora) && !empty($Tostador) && !empty($Cant_Tosta)){
          $Consulta ="insert into Tosta(fecha,hora,nombre_tosta,cant_tosta) values (
            '$Fecha','$Hora','$Tostador','$Cant_Tosta');";

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