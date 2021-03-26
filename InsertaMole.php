<?php 
      $Servidor ="localhost";
      $Usuario = "narvaes_bi";
      $Clave = "ALucinante123";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){
        echo "<h2><b>Conexion Exitosa</b></h2>";


        $Fecha = $_POST['fecha'];
        $Hora = $_POST['hora'];
        $Mole = $_POST['nombre_mole'];
        $Turno = $_POST['turno_mole'];
        $Cant_Horas=$_POST['cant_horas'];

        if(!empty($Fecha) && !empty($Hora) && !empty($Mole) && !empty($Turno)&& !empty($Cant_Horas)){
          $Consulta ="insert into Mole(fecha,hora,nombre_mole,turno_mole,cant_horas) values (
            '$Fecha','$Hora','$Mole','$Turno','$Cant_Horas');";

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