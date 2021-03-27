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
        $Despulpador = $_POST['nombre_despul'];
        $Chorros = $_POST['cant_chorros'];
        $Requintador = $_POST['nom_requin'];


        if(!empty($Fecha) && !empty($Hora) && !empty($Despulpador) && !empty($Chorros) && !empty($Requintador) ){
          $Consulta ="insert into Despulpa(Fecha,Hora,Despulpador,Cantidad, Requintador) 
          values('$Fecha','$Hora','$Despulpador','$Chorros','$Requintador');";

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