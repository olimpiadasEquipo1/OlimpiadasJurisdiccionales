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
<html lang="en">

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
  <!-- Titulo -->
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

  <section>
    <!-- Formulario para el calculo de tu IMC -->
    <div class="contenedor mx-auto ms-auto">
      <form class="ms-auto mx-auto">
        <h1 class="text-center pb-2 f-2 border-bottom border-3">CALCULÁ TU IMC</h1>
        <input class="mt-2" id="txtPeso" placeholder="Peso en kg" type="number" required>
        <input id="txtAltura" placeholder="Altura en metros" type="text" required>
        <input class="boton" id="btnCalcular" value="Calcular"></input>
      </form>
    </div>
  </section>

  <section>
    <h2 class="text-center">¿Qué es el IMC?</h2>
    <p class="texto col-lg-8 text-justify mx-auto ms-auto mb-4 mt-3">El índice de masa corporal (IMC) es un número que se calcula con base en el peso y la estatura de la persona. Para la mayoría de las personas, el IMC es un indicador confiable de la gordura y se usa para identificar las categorías de peso que pueden llevar a problemas de salud.</p>

    <!-- TABLA DEL INDICE DE MASA CORPORAL (IMC)-->
    <div class="table-responsive nav-bar mt-3 ms-3 mx-3">
      <table class="table table-bordered table-striped text-center w-75 mx-auto ms-auto">
        <thead>
          <th class="col-lg-4">Clasificación</th>
          <th class="col-lg-4">IMC (Kg/m²)</th>
          <th class="col-lg-4">Riesgo</th>
        </thead>
        <tbody>
          <tr>
            <td>Normal</td>
            <td>18.5 - 24.9</td>
            <td>Promedio</td>
          </tr>
          <tr>
            <td>Sobrepeso</td>
            <td>25 - 29.9</td>
            <td>Aumentado</td>
          </tr>
          <tr>
            <td>Obesidad grado I</td>
            <td>30 - 34.9</td>
            <td>Moderado</td>
          </tr>
          <tr>
            <td>Obesidad grado II</td>
            <td>35 - 39.9</td>
            <td>Severo</td>
          </tr>
          <tr>
            <td>Obesidad grado III</td>
            <td>Más de 40</td>
            <td>Muy severo</td>
          </tr>
        </tbody>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Javascript -->
  <script src="../js/calcIMC.js"></script>
  <script src="../js/cerrarSesion.js"></script>
</body>

</html>