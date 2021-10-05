<?php 
session_start();
include_once '../db.php';
$conexion=mysqli_connect("localhost","root","","sistema_olimpiada");

if($_SESSION["usuario"] === null){
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
    <title>Hospital Online</title>
</head>

<body>
  <header>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><span class="title">Hospital Online</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php"><span class="nav-links">Home</span></a>
            </li>
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
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirmarSalir()"><span class="nav-links">Salir <i class="fa fa-sign-out"></i></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- FORMULARIO CONSULTA -->
  <div class="contenedor">
      <form action="../contactoForm.php" method="POST" onsubmit="Success();" class="col-lg-4 mx-auto">
      <h1 class="text-center pb-2 f-2 border-bottom border-3">¡HACÉ TU CONSULTA!</h1>
      <input class="mt-2" type="text" name="nombre" placeholder="Tu nombre" required>
      <input type="text" name="mail" placeholder="Tu correo Electrónico" required>
      <textarea maxlength="512" name="consulta" placeholder="Escribí acá tu consulta. Máximo 512 caracteres." required></textarea>
      <input class="boton" type="submit" name="submit"></input>
      </form>
   </div>

  <h2 class="text-center mb-4">Buscá acá a tu odolontólogo de confianza</h2>

  <!-- TABLA DE ODONTÓLOGOS -->
  <div class="table-responsive nav-bar mt-3 ms-3 mx-3">
  <table class="table table-responsive table-bordered table-striped text-center w-75 mx-auto ms-auto">
      <thead>
        <td class="col-lg-6">Odontólogo/a</td>
        <td class="col-lg-6">Teléfono</td>
      </thead>

      <?php
      $sql = "SELECT * FROM odontologos";
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
  <script type="text/javascript" src="../js/form.js"></script>
</body>
</html>