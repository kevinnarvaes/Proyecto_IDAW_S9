<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Tostado de Café - 2021</title>
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
        <h1>Registro - Moledor de Cafe</h1>
    </div>
</header>
<body background="https://drive.google.com/uc?export=view&id=1tXWBVjAAxR5Tb8RW6yCOXT-rqHjmDuDU" style="background-color:antiquewhite;">
   
    <div id="Form_ProcDespCafe">
        <form name="frm_moledor" class="frm_moledor" method="post" action="InsertaMole.php">
            <h2>Formulario de Registro de Moledor</h2>
            <p class="parrafotitulo">A continuacion, complete los campos solicitados de acuerdo a los resultados obtenido en proceso</p>
            <label for="fecha"> 
                <span>Fecha: </span><br>
                <input id="fecha" name="fecha" type=date></input>
            </label>
            <br>
            <label for="hora"> 
                <span>Horas trabajadas por el moledor: </span><br>
                <input id="hora" name="hora" type=time></input>
            </label>

            <br>
            <label for="nombre_mole"> 
                <span>Nombre del moledor: </span><br>
                <input id="nombre_mole" name="nombre_mole" type=text placeholder="Ej: Kevin Narvaes"></input>
            </label>

            <br>
            <label for="turno_mole"> 
                <span>Turno del moledor: </span><br>
                <input id="turno_mole" name="turno_mole" type=text placeholder="Ej: Matutino"></input>
            </label>

            <br>
            <label for="cant_horas"> 
                <span>Cantidad horas trabajadas: </span><br>
                <input id="cant_horas" name="cant_horas" type=number max="100" min="0" placeholder="0 - 100"></input>
            </label>
            


            <br>
            <label for="cant_molido"> 
                <span>Cantidad Cafe molido: </span><br>
                <input id="cant_molido" name="cant_molido" type=number max="100" min="0" placeholder="0 - 100"></input>
            </label>
            
            <label>
                <input class= "boton" type="submit" value="Registrar">
                <input class= "boton" type="reset" value="Cancelar"> 
            </label>

        </form>
    </div>

    <div id=tbl_regescapulado>
        <h2>Listado de personal Registrado</h2>
        <p class="parrafotitulo">Se enlistan todos los registros de los Moledores</p>
        
        <table border="1">
            <tr height = 50>
                <th align="center" width=100 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Mes</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Semana</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Día</th>
                <th align="center" width=250 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Moledor</th>
                <th align="center" width=70 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Turno del Moledor</th>
                <th align="center" width=150 style="border: 1pt solid whitesmoke" bgcolor= "#C99F81">Cantidad Cafe Molido</th>
                
            </tr>
            <tr height = 30>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                
            </tr>
            <tr height = 30>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                
            </tr>
            <tr height = 30>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                <td align="center" style="border: 1pt solid gray"></td>
                
            </tr>
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