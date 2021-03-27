<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Despulpado Café - 2021</title>
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
        <h1>Registro - Despulpado de Cafe</h1>
    </div>
</header>
<body background="https://drive.google.com/uc?export=view&id=1tXWBVjAAxR5Tb8RW6yCOXT-rqHjmDuDU" style="background-color:antiquewhite;">
   
    <div id="Form_ProcDespCafe">
        <form name="frm_despulpa" class="frm_despulpa" method="post" action="InsertaDespulpa.php">
            <h2>Formulario de Registro</h2>
            <p class="parrafotitulo">A continuacion, complete los campos solicitados de acuerdo a los resultados obtenido en proceso</p>
            <label for="fecha"> 
                <span>Fecha: </span><br>
                <input id="fecha" name="fecha" type=date></input>
            </label>
            <br>
            <label for="hora"> 
                <span>Hora: </span><br>
                <input id="hora" name="hora" type=time></input>
            </label>

            <br>
            <label for="nombre_despul"> 
                <span>Nombre Despulpador: </span><br>
                <input id="nombre_despul" name="nombre_despul" type=text placeholder="Ej: Kevin Narvaes"></input>
            </label>

            <br>
            <label for="cant_chorros"> 
                <span>Cantidad Chorros Maquina Despulpadora: </span><br>
                <input id="cant_chorros" name="cant_chorros" type=number max="100" min="0" placeholder="0 - 100"></input>
            </label>
            <br>
            <label for ="nom_requin">
                <span>Ingrese los requintador asociado: </span><br>
                <input id="nom_requin" name="nom_requin" type=text placeholder="Ej: Kevin Narvaes"></input>
            </label>
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
        <p class="parrafotitulo">Se enlistan todos los registros para proceso de escalpado</p>
        
        <table border="1">
            <tr height = 50>
                <th align="center" width=100 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Fecha</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Hora</th>
                <th align="center" width=250 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Despulpador</th>
                <th align="center" width=150 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Total Chorros</th>
                <th align="center" width=250 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Requintadores</th>
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