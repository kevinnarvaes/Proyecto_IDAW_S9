<?php
header("Content-Type: application/xlsx");
header("Content-Disposition: attachment; filename= archivo.xlsx");

?>
 <table border="1">
            <tr height = 50>
                <th align="center" width=200 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Fecha</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Hora</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Cantidad de Galones Lavados</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Lavadores</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Tratamiento de Aguas Miel</th>
            </tr>
            <?php 
            $Servidor ="localhost";
            $Usuario = "optimus";
            $Clave = "123";
            $BD = "Cafe";
            $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);
      
            if($Conexion == true){
              echo "<h2><b>Conexion Exitosa</b></h2>";
       
       $Consulta = "select * from Lava;";
       $Resultado = $Conexion->query($Consulta);

       while($fila = $Resultado->fetch_assoc()){
         $Fecha = $fila['Fecha'];
         $Hora = $fila['Hora'];
         $Galones = $fila['Galones'];
         $Lavador = $fila['Lavador'];
         $Tratamiento = $fila['Tratamiento'];

             echo "<tr>";
             echo "<td width=\"200\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Fecha."</td>";
             echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Hora."</td>";
             echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Galones."</td>";
             echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Lavador."</td>";
             echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #C99F81\">".$Tratamiento."</td>";
             echo "</tr>";         
       }  
          
      
        $Conexion->close();
      }else{
        die("<h2>NO fue posible establecer Conexion con la Base de Datos Cafe</h2>");
      }