<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cafe</title>
    <link rel = "stylesheet" href="estilos_login.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">Modelo - Proceso de Cafe </h3>
                    </div>
                    <div class="card-body">
                        <form action="/Proyecto/con_login.php" method="post">
                            <input type="text" name="usuario" placeholder="Nombre de usuario" class="form-control mb-3">
                            <input type="password" name="contraseña" placeholder="Contraseña" class="form-control mb-3">
                            <button class="btn btn-success mt-3" name="Login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
</body>
</html>