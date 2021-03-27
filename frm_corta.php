<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Tostado de Café - 2021</title>
    <link rel = "stylesheet" href="estilos.css">
</head>

<!--Un comment-->
<header>
    <ul>
        <li><a href="#Inicio">Inicio</a></li>
        <li><a href="/Proyecto/frm_despulpa.php">Despulpa</a></li>
        <li><a href="#Acerca De">Acerca De</a></li>
        <li><a href="#Despulpado">Despulpado</a></li>
        <li><a href="#Personal">Personal</a></li>
        <li></li>
      </ul>
    <div id="encab">
        <img src="https://drive.google.com/uc?export=view&id=1TesebcEqzs6LG3el8lp5YgFH1aWUu8oC"
        style="width: 100px; max-width: 100%; height: auto" align=”left” >
        <h1>Registro - COrta de Cafe</h1>
    </div>
</header>
<body background="https://drive.google.com/uc?export=view&id=1tXWBVjAAxR5Tb8RW6yCOXT-rqHjmDuDU" style="background-color:antiquewhite;">
   
    <div id="Form_ProcDespCafe">
        <form name="frm_corta" class="frm_corta" method="post" action="InsertaCorta.php">
            <h2>Formulario de Registro de Cortador</h2>
            <p class="parrafotitulo">A continuacion, complete los campos solicitados de acuerdo a los resultados obtenido en proceso</p>
            
            <label for="fecha"> 
                <span>Fecha: </span>
                <input id="fecha" type="date" name="fecha" placeholder="Ej. 30/01/2020">
            </label>
            <br>
            <br>
            <label for="cortador"> 
                <span>Cortador:</span> 
                <input id="cortador" type="text" name="cortador" placeholder="Ej. Juan Lopez">
            </label>
            <br>
            <br>
            <label for="galones"> 
                <span>Galones: </span>
                <input id="galones" type="number" name="galones" placeholder="Ej. 10">
            </label>
            <br>
            <br>
            <label for="observacion"> 
                <span>Observaciones: </span>
                <textarea id="observacion" cols=50 rows=3 name="observacion" ></textarea>
            </label>
            <br>
            <br>

            <label>
                <input class= "boton" type="submit" value="Registrar">
                <input class= "boton" type="reset" value="Cancelar"> 
            </label>

        </form>
    </div>

    <div id=tbl_regcorta>
        <h2>Listado de cortas</h2>
        <p class="parrafotitulo">Se enlistan todos los registros de Cortadores</p>
        
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