<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso del Lavado del Café - 2021</title>
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
        <h1>Registro - Lavado del Cafe</h1>
    </div>
</header>
<body background="https://drive.google.com/uc?export=view&id=1tXWBVjAAxR5Tb8RW6yCOXT-rqHjmDuDU" style="background-color:antiquewhite;">
   
    <div id="Form_ProcSecpCafe">
        <form name="frm_Lava" class="frm_Lava" method="post" action="InsertaLava.php">
            <h2>Formulario de Lavador</h2>
            <p class="parrafotitulo">A continuacion, complete los campos solicitados de acuerdo a los resultados obtenido en proceso</p>
            
            <label for="Fecha"> 
                <span>Fecha: </span><br>
                <input id="Fecha" name="Fecha" type=text placeholder="Ej: 2021-03-20"></input>
            </label>

            <br>
            <label for="Hora"> 
                <span>Hora: </span><br>
                <input id="Hora" name="Hora" type=time placeholder="Ej: 02:00 PM"></input>
            </label>

            <br>
            <label for="Cantidad de Galones Lavados"> 
                <span>Cantidad de Galones Lavados: </span><br>
                <input id="Galones" name="Galones" type=text placeholder="Ej: 5"></input>
            </label>

            <br>
            <label for="Lavadores"> 
                <span>Lavadores: </span><br>
                <input id="Lavador" name="Lavador" type=text placeholder="Ej. Javier Lopez" ></input>
            </label>
                       
            <br>
            <label for="Tratamiento de Aguas Miel"> 
                <span>Tratamiento de Aguas Miel: </span><br>
                <input id="Tratamiento" name="Tratamiento" type=text></input>
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
        <p class="parrafotitulo">Se enlistan todos los registros para el proceso de Secador</p>
        
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
    ?> 
        </table>


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