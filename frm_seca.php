<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso del Secado del Café - 2021</title>
    <link rel = "stylesheet" href="estilos.css">
</head>

<header>
    <ul>
        <li><a href="#Inicio">Inicio</a></li>
        <li><a href="#Noticias">Noticias</a></li>
        <li><a href="#Acerca De">Acerca De</a></li>
        <li><a href="#Despulpado">Despulpado</a></li>
        <li><a href="#Personal">Personal</a></li>
        <li></li>
      </ul>
    <div id="encab">
        <img src="https://drive.google.com/uc?export=view&id=1TesebcEqzs6LG3el8lp5YgFH1aWUu8oC"
        style="width: 100px; max-width: 100%; height: auto" align=”left” >
        <h1>Registro del Secado del Cafe</h1>
    </div>
</header>
<body background="https://drive.google.com/uc?export=view&id=1tXWBVjAAxR5Tb8RW6yCOXT-rqHjmDuDU" style="background-color:antiquewhite;">
   
    <div id="Form_ProcSecpCafe">
        <form name="frm_Seca" class="frm_Seca" method="post" action="InsertaSeca.php">
            <h2>Formulario de Secado</h2>
            <p class="parrafotitulo">A continuacion, complete los campos solicitados de acuerdo a los resultados obtenido en proceso</p>
            <label for="Nombre del Secador"> 
                <span>Nombre del Secador: </span><br>
                <input id="Secador" name="Secador" type=text placeholder="Ej: Javier Lopez"></input>
            </label>

            <br>
            <label for="Fecha"> 
                <span>Fecha: </span><br>
                <input id="Fecha" name="Fecha" type=date placeholder="Ej: 2021-03-20"></input>
            </label>

            <br>
            <label for="Hora Inicio"> 
                <span>Hora Inicio: </span><br>
                <input id="Inicio" name="Inicio" type=time placeholder="Ej: 05:00 AM"></input>
            </label>

            <br>
            <label for="Hora Fin"> 
                <span>Hora Fin: </span><br>
                <input id="Fin" name="Fin" type=time></input>
            </label>
                       
            <br>
            <label for="Tipo de Secado"> 
                <span>Tipo de Secado: </span><br>
                <input id="Tipo" name="Tipo" type=text placeholder="Ej: Al Sol"></input>
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
                <th align="center" width=200 style="border: 1pt solid #C99F81\">Nombre del Secador</th>
                <th align="center" width=70 style="border: 1pt solid #C99F81\">Fecha</th>
                <th align="center" width=70 style="border: 1pt solid #C99F81\">Hora Inicio</th>
                <th align="center" width=70 style="border: 1pt solid #C99F81\">Hora Fin</th>
                <th align="center" width=200 style="border: 1pt ssolid #C99F81\">Tipo de Secado</th>
            </tr>
          
            <?php
      $Servidor ="localhost";
      $Usuario = "manuel";
      $Clave = "IDAW";
      $BD = "Cafe";
      $Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

      if($Conexion == true){
        echo "<h2>Conexion Exitosa a la Base de Datos Cafe!!!</h2>";

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
        </p>
    </div>
</footer>
</html>