<?php
header("Content-Type: application/xlsx");
header("Content-Disposition: attachment; filename= archivo.xlsx");

?>

<table border="1">
            <tr height = 50>
                <th align="center" width=100 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Fecha</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Hora</th>
                <th align="center" width=250 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Nombre</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Turno Moledor</th>    
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Cantidad Horas</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Cantidad Cafe Molido</th>
            </tr>
           
                
            
        
        <?php 
      $Servidor ="localhost";
      $Usuario = "optimus";
      $Clave = "123";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){

        $Consulta = "select * from Mole;";
        $Resultado = $Conexion->query($Consulta);

        while($fila = $Resultado->fetch_assoc()){
        $Fecha = $fila['fecha'];
        $Hora = $fila['hora'];
        $Mole = $fila['nombre_mole'];
        $Turno = $fila['turno_mole'];
        $Cant_Horas=$fila['cant_horas'];
        $Cant_Cafe=$fila['cant_cafe'];       
   
        echo "<tr>";
        echo "<td width=\"200\" height=\"15\" style=\"border:2pt solid #30A163\">".$Fecha."</td>";
        echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Hora."</td>";
        echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Mole."</td>";
        echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Turno."</td>";
        echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Cant_Horas."</td>";
        echo "<td width=\"50\" height=\"15\" style=\"border:2pt solid #30A163\">".$Cant_Cafe."</td>";
        echo "</tr>";         
  }   
    

  $Conexion->close();
}else{
  die("<h2>NO fue posible establecer Conexion con la Base de Datos Cafe</h2>");
}
?> 
</table>