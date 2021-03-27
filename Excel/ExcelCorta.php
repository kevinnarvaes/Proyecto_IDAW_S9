<?php
header("Content-Type: application/xlsx");
header("Content-Disposition: attachment; filename= archivo.xlsx");

?>

<table border="1">
            <tr height = 50>
                <th align="center" width=100 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Fecha</th>
                <th align="center" width=250 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Cortador</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Galones</th>    
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">OBservacion</th>
            </tr>             
            
        
        <?php 
      $Servidor ="localhost";
      $Usuario = "optimus";
      $Clave = "123";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){

        $Consulta = "select * from Corta;";
        $Resultado = $Conexion->query($Consulta);

        while($fila = $Resultado->fetch_assoc()){
        $Fecha = $fila['Fecha'];
        $Cortador = $fila['Cortador'];
        $Galones = $fila['Galones'];
        $Observacion = $fila['Observacion'];
   
   
        echo "<tr>";
        echo "<td width=\"100\" height=\"15\">".$Fecha."</td>";
        echo "<td width=\"250\" height=\"15\">".$Cortador."</td>";
        echo "<td width=\"70\" height=\"15\">".$Galones."</td>";
        echo "<td width=\"70\" height=\"15\">".$Observacion."</td>";
        echo "</tr>";         
  }   
    

  $Conexion->close();
}else{
  die("<h2>NO fue posible establecer Conexion con la Base de Datos Cafe</h2>");
}
?> 
</table>