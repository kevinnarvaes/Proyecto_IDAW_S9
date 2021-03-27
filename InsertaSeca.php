<?php 
      $Servidor ="localhost";
      $Usuario = "manuel";
      $Clave = "IDAW";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){
        echo "<h2><b>Conexion Exitosa</b></h2>";


        $Secador = $_POST['Secador'];
        $Fecha = $_POST['Fecha'];
        $Inicio = $_POST['Inicio'];
        $Fin = $_POST['Fin'];
        $Tipo=$_POST['Tipo'];

        if(!empty($Secador) && !empty($Fecha) && !empty($Inicio) && !empty($Fin)&& !empty($Tipo)){
          $Consulta ="insert into Seca(Secador,Fecha,Inicio,Fin,Tipo) values (
            '$Secador','$Fecha','$Inicio','$Fin','$Tipo');";

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