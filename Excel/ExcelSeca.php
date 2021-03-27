<?php
header("Content-Type: application/xlsx");
header("Content-Disposition: attachment; filename= archivo.xlsx");

?>
<table border="1">
            <tr height = 50>
                <th align="center" width=200 style="border: 1pt solid #C99F81\">Nombre del Secador</th>
                <th align="center" width=70 style="border: 1pt solid #C99F81\">Fecha</th>
                <th align="center" width=70 style="border: 1pt solid #C99F81\">Hora Inicio</th>
                <th align="center" width=70 style="border: 1pt solid #C99F81\">Hora Fin</th>
                <th align="center" width=200 style="border: 1pt ssolid #C99F81\">Tipo de Secado</th>
            </tr>
            <?php 
            $Servidor ="localhost";
            $Usuario = "optimus";
            $Clave = "123";
            $BD = "Cafe";
            $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);
      
            if($Conexion == true){
              echo "<h2><b>Conexion Exitosa</b></h2>";

              $Consulta = "select * from Seca;";
              $Resultado = $Conexion->query($Consulta);
      
              while($fila = $Resultado->fetch_assoc()){
                  $Secador = $fila['Secador'];
                  $Fecha = $fila['Fecha'];
                $Inicio = $fila['Inicio'];
                $Fin = $fila['Fin'];
                $Tipo = $fila['Tipo'];
      
                    echo "<tr>";
                    echo "<td width=\"200\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Secador."</td>";
                    echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Fecha."</td>";
                    echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Inicio."</td>";
                    echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Fin."</td>";
                    echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Tipo."</td>";
                    echo "</tr>";         
              } 
          
      
        $Conexion->close();
      }else{
        die("<h2>NO fue posible establecer Conexion con la Base de Datos Cafe</h2>");
      }