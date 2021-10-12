<?php
/* Conectamos a la base de datos y reanudamos la sesión */
session_start();
include_once '../db.php';
$conexion = mysqli_connect("localhost", "root", "", "sistema_olimpiada");

/* Para acceder a esta página, el usuario debe estar loggeado */
if ($_SESSION["usuario"] === null) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icono que aparece en la pestaña -->
    <link rel="shortcut icon" href="../img/simbolo_medico.png" type="image/png">
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Tu Salud Online</title>
</head>


<body>
  <header>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><span class="title">Tu Salud Online</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="imc.php"><span class="nav-links">Calculadora IMC</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="odontologia.php"><span class="nav-links">Odontología</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="oftalmologia.php"><span class="nav-links">Oftalmología</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vacunacion.php"><span class="nav-links">Vacunación</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="nav-links dropdown-toggle">Mi perfil </span> 
              </a>
              <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="paciente/verDiario.php">Ver diario</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="paciente/diarioPaciente.php">Actualizar diario</a></li>
                
              </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php" onclick="return confirmarSalir()"><span class="nav-links">Salir <i class="fa fa-sign-out"></i></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <!-- Imagen del calendario nacional de vacunacion -->
    <div>
        <img src="../img/calendario-nacional-de-vacunacion-2020.jpg" class="img-fluid" alt="Calendario nacional de vacunacion">
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script src="../js/cerrarSesion.js"></script>
</body>

</html>