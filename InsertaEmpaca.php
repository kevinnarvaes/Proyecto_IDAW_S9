<?php 
      $Servidor ="localhost";
      $Usuario = "optimus";
      $Clave = "123";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){
        echo "<h2><b>Conexion Exitosa</b></h2>";


        $Empacador = $_POST['Empacador'];
        $dos = $_POST['dos'];
        $cinco = $_POST['cinco'];
        $Calidad = $_POST['Calidad'];

        if(!empty($Empacador) && !empty($dos) && !empty($cinco) && !empty($Calidad)   ){
          $Consulta ="insert into Empaca(Empacador,dos,cinco,Calidad) values('$Empacador','$dos','$cinco','$Calidad');";

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