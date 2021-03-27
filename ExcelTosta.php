<?php
header("Content-Type: application/xlsx");
header("Content-Disposition: attachment; filename= archivo.xlsx");

?>
 <table border="1">
            <tr height = 50>
                <th align="center" width=100 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Fecha</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Hora del tostado</th>
                <th align="center" width=250 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Nombre del Tostador</th>
                <th align="center" width=250 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Cantidad Cafe Tostado</th>
                
                
            </tr>
            <?php 
            $Servidor ="localhost";
            $Usuario = "optimus";
            $Clave = "123";
            $BD = "Cafe";
            $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);
      
            if($Conexion == true){
              echo "<h2><b>Conexion Exitosa</b></h2>";
      
              $Consulta = "select * from Tosta;";
              $Resultado = $Conexion->query($Consulta);
      
              while($fila = $Resultado->fetch_assoc()){
              $Fecha = $fila['fecha'];
              $Hora = $fila['hora'];
              $Tostador = $fila['nombre_tosta'];             
              $Cant_Tosta=$fila['cant_tosta'];                   
         
              echo "<tr>";
              echo "<td width=\"200\" height=\"15\" style=\"border:2pt solid #30A163\">".$Fecha."</td>";
              echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Hora."</td>";
              echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Tostador."</td>";            
              echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Cant_Tosta."</td>";
              echo "</tr>";         
        }   
          
      
        $Conexion->close();
      }else{
        die("<h2>NO fue posible establecer Conexion con la Base de Datos Cafe</h2>");
      }