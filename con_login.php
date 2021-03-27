<?php

$Servidor ="localhost";
$Usuario = "optimus";
$Clave = "123";
$BD = "Cafe";
$Conexion = mysqli_connect($Servidor,$Usuario,$Clave,$BD);

if($Conexion == false){
{
    die('Conexion fallida'.mysqli_error($con));
}
}   

session_start();
    if(isset($_POST['Login']))
    {
    if(empty($_POST['usuario']) || empty($_POST['contraseña']))
    {
            header("location:frm_login.php?Empty= Existen campos vacios");
    }
    else
    {
            $consulta="select * from usuarios where usuario='".$_POST['usuario']."' and contraseña='".$_POST['contraseña']."'";
            $resultado=mysqli_query($Conexion,$consulta);

            if(mysqli_fetch_assoc($resultado))
            {
                $_SESSION['usuario']=$_POST['usuario'];
                header("location:/Proyecto/frm_inicio.php");
            }
            else
            {
                echo 'Usuario o contraseña incorrectos';
                header("location:/Proyecto/frm_login.php?Invalid=Usuario o contraseña incorrectos");
            }
    }
    }
    else
    {
        echo 'Error';
    }

?>