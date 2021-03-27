<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso del Empacado del Café - 2021</title>
    <link rel = "stylesheet" href="estilos.css">
</head>

<header>
    <ul>
    <li><a href="/Proyecto/frm_inicio.php">Inicio</a></li>
        <li><a href="/Proyecto/frm_corta.php">Corta</a></li>
        <li><a href="/Proyecto/frm_despulpa.php">Despulpa</a></li>
        <li><a href="/Proyecto/frm_Lava.php">Lava</a></li>
        <li><a href="/Proyecto/frm_seca.php">Seca</a></li>
        <li><a href="/Proyecto/frm_tosta.php">Tosta</a></li>
        <li><a href="/Proyecto/frm_moledor.php">Moler</a></li>
        <li><a href="/Proyecto/frm_empaca.php">Empacar</a></li>
        <li></li>
      </ul>
    <div id="encab">
        <img src="https://drive.google.com/uc?export=view&id=1TesebcEqzs6LG3el8lp5YgFH1aWUu8oC"
        style="width: 100px; max-width: 100%; height: auto" align=”left” >
        <h1>Registro - Empacado del Cafe</h1>
    </div>
</header>
<body background="https://drive.google.com/uc?export=view&id=1tXWBVjAAxR5Tb8RW6yCOXT-rqHjmDuDU" style="background-color:antiquewhite;">
   
    <div id="Form_ProcEmpCafe">
        <form name="frm_empaca" class="frm_empaca" method="post" action="InsertaEmpaca.php">
            <h2>Formulario de Empaque</h2>
            <p class="parrafotitulo">A continuacion, complete los campos solicitados de acuerdo a los resultados obtenido en proceso</p>
            
            <label for="Nombre del Empacador"> 
                <span>Nombre del Empacador: </span><br>
                <input id="Empacador" name="Empacador" type=text placeholder="Ej: Luis Padilla"></input>
            </label>

            <br>
            <label for="Cantidad de Empaques de 200g"> 
                <span>Cantidad de Empaques de 200g: </span><br>
                <input id="dos" name="dos" type=text placeholder="Ej: 50"></input>
            </label>

            <br>
            <label for="Cantidad de Empaques de 500g"> 
                <span>Cantidad de Empaques de 500g: </span><br>
                <input id="cinco" name="cinco" type=text placeholder="Ej: 50"></input>
            </label>

            <br>
            <label for="Calidad del Cafe"> 
                <span>Calidad del Cafe: </span><br>
                <input id="Calidad" name="Calidad" type=text></input>
            </label>

            <br>
            <br>
            <br>
            <label>
                <input class= "boton" type="submit" value="Registrar">
                <input class= "boton" type="reset" value="Cancelar"> 
            </label>

        </form>
    </div>

    <div id=tbl_regescapulado>
        <h2>Listado de personal Registrado</h2>
        <p class="parrafotitulo">Se enlistan todos los registros para el proceso de Empacado</p>
        
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
              echo "<h2>Conexion Exitosa a la Base de Datos Cafe!!!</h2>";
      
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
          ?> 
          
        </table>

        <a href="./Excel/ExcelEmpaca.php" class="btn-small blue z-depth-2">Exportar Excel</a>
    </div>
</body>
<br>
<br>
<footer>
    <div id="pie_de_pagina">
        <p>Cualquier consulta en cuanto registro de informacion, hacer solicitud via correo a
        <br>
            <a href="mailto:kevin.narvaes@unitec.edu">kevin.narvaes@unitec.edu</a>
            <br>
            <a href="mailto:mabonilla@unitec.edu">mabonilla@unitec.edu</a>
            <br>
            <a href="mailto:luis.david@unitec.edu">luis.david@unitec.edu</a>
        </p>
    </div>
</footer>
</html>