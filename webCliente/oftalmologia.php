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

  <!-- Prueba de la vista -->
  <section>
    <!-- Titulo -->
    <h1 class="mt-2 p-2 text-center border-bottom border-3 w-75 ms-auto mx-auto">TEST DE MEDICIÓN DE AGUDEZA VISUAL LEJANA</h1>
    <!-- Subtitulo -->
    <h3 class="text-center mt-2 mb-2">Instrucciones</h3>
    <!-- Lista de instrucciones para realizar el test -->
    <div class="col-lg-8 ms-auto mx-auto">
      <ol class="mt-2 pt-2 text-justify">
        <li>Para comprobar la agudeza visual lejana, deberá situarse a unos 3,5 metros de distancia de la pantalla.</li>
        <li>La prueba se realizará monocularmente: primero la realizaremos para un ojo y después para el otro, tapando siempre el ojo no examinado.</li>
        <li>También la realizaremos binocularmente, es decir con los dos ojos abiertos, siendo conscientes siempre de ver las figuras nítidas y simples (es decir, que no se vean dobles).</li>
        <li>Si usted utiliza compensación óptica (gafas o lentillas) para visión lejana, debe utilizarlas.</li>
      </ol>
    </div>
  </section>

  <!-- Imagen para realizar el test -->
  <div class="col-lg-6 ms-auto mx-auto mt-5 mb-5 borde">
    <img src="../img/test_vision.jpg" class="img-fluid" alt="Imagen para realizar el test de agudeza visual">
  </div>

  <p class="mt-2 pt-2 text-center">Estos tests son simplemente orientativos y no eximen de la necesidad de realizar un examen visual completo por parte de un optometrista.</p>

  <h2 class="text-center mb-4">Buscá a tu oftalmólogo de confianza</h2>
  <!-- TABLA DE OFTALMÓLOGOS -->
  <div class="table-responsive nav-bar mt-3 ms-3 mx-3 mb-4">
    <table class="table table-responsive table-bordered table-striped text-center w-75 mx-auto ms-auto">
      <thead>
        <td class="col-lg-6">Odontólogo/a</td>
        <td class="col-lg-6">Teléfono</td>
      </thead>

      <?php
      $sql = "SELECT * FROM oftalmologos";
      $result = mysqli_query($conexion, $sql);

      while ($mostrar = mysqli_fetch_array($result)) {
      ?>

        <tr>
          <td>Dr <?php echo $mostrar['apellido'] ?></td>
          <td><?php echo $mostrar['telefono'] ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Javascript -->
  <script src="../js/cerrarSesion.js"></script>
</body>

</html>