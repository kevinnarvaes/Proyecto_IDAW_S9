<?php
header("Content-Type: application/xlsx");
header("Content-Disposition: attachment; filename= despulpa.xlsx");

?>

<table border="1">
            <tr height = 50>
                <th >Fecha</th>
                <th>Hora</th>
                <th>Despulpador</th>
                <th >Total Chorros</th>
                <th>Requintadores</th>
            </tr>
            <?php 
                $Servidor ="localhost";
                $Usuario = "optimus";
                $Clave = "123";
                $BD = "Cafe";
                $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

                if($Conexion == true){

                    $Consulta = "select * from Despulpa;";
                    $Resultado = $Conexion->query($Consulta);

                    while($fila = $Resultado->fetch_assoc()){
                    $Fecha = $fila['Fecha'];
                    $Hora = $fila['Hora'];
                    $Despulpador = $fila['Despulpador'];
                    $Chorros = $fila['Cantidad'];
                    $Requintador=$fila['Requintador'];    
            
                    echo "<tr>";
                    echo "<td width=\"200\" height=\"15\">".$Fecha."</td>";
                    echo "<td width=\"50\" height=\"15\">".$Hora."</td>";
                    echo "<td width=\"50\" height=\"15\">".$Despulpador."</td>";
                    echo "<td width=\"50\" height=\"15\">".$Chorros."</td>";
                    echo "<td width=\"50\" height=\"15\">".$Requintador."</td>";
                    echo "</tr>";         
            }   
                

            $Conexion->close();
            }else{
            die("<h2>NO fue posible establecer Conexion con la Base de Datos Cafe</h2>");
            }
            ?> 
            </table>