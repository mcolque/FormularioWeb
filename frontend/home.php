<?php
    //incluir la conexion
    //require('conexion/conexion.php');
    include('guardarDatos.php');
    
?>

<?php
    session_start();
    if(!isset($_SESSION["token"]))
        header("Location: 401.html");

    if(!isset($_COOKIE["token"]))
        header("Location: 401.html");

    if($_SESSION["token"] != $_COOKIE["token"])
        header("Location: 401.html");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>LOGIN CON NODE + JWT</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 shadow-lg p-3 mb-5">

            <div class="car border-primary">
                <div class="card-header bg-primary text-white">Empleados</div>
                <div class="card-body text-primary">
                    <form action="home.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="name" name="nombre" type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="ap" class="form-label">Apellido</label>
                            <input id="ap" name="apellido" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="dni" class="form-label">DNI</label>
                            <input id="dni" name="dni" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="domi" class="form-label">Domicilio</label>
                            <input id="domi" name="domicilio" type="text" class="form-control">
                        </div>
                </div>
                <div class="card-footer bg-transparent border-primary">
                    <a href="/" type="button" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                </form>
            </div>

            <!-- Contenido principal   -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Bienvenid@ <?php echo $_COOKIE["firstName"]?></h1>
            <a href="logout.php">Cerrar Sesión</a>
        </div> 
      </main>
            
        </div>
    </div>
    
</div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>