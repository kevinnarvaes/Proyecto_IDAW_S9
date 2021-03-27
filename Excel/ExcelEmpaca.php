<?php
header("Content-Type: application/xlsx");
header("Content-Disposition: attachment; filename= archivo.xlsx");

?>
<table border="1">
            <tr height = 50>
                <th align="center" width=200 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Nombre del Empacador</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Empaques 200g</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Empaques 500g</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Calidad del Cafe</th>               
           
            </tr>
            <?php 
            $Servidor ="localhost";
            $Usuario = "optimus";
            $Clave = "123";
            $BD = "Cafe";
            $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);
      
            if($Conexion == true){
              echo "<h2><b>Conexion Exitosa</b></h2>";

              $Consulta = "select * from Empaca;";
              $Resultado = $Conexion->query($Consulta);
      
              while($fila = $Resultado->fetch_assoc()){
                $Empacador = $fila['Empacador'];
                $dos = $fila['dos'];
                $cinco = $fila['cinco'];
                $Calidad = $fila['Calidad'];
                
                echo "<tr>";
              echo "<td width=\"200\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Empacador."</td>";
              echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$dos."</td>";
              echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$cinco."</td>";
              echo "<td width=\"100\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Calidad."</td>";
              echo "</tr>";         
              } 
          
      
        $Conexion->close();
      }else{
        die("<h2>NO fue posible establecer Conexion con la Base de Datos Cafe</h2>");
      }