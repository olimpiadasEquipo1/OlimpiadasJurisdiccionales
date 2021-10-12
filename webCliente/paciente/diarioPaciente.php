<?php
/* Conectamos a la base de datos y reanudamos la sesión */
session_start();
include_once '../../db.php';
$conexion = mysqli_connect("localhost", "root", "", "sistema_olimpiada");

/* Para acceder a esta página, el usuario debe estar loggeado */
if ($_SESSION["usuario"] === null) {
    header("Location: ../../index.php");
}

/* Comenzamos un proceso PHP */

$usuario = $_SESSION['usuario'];
$consulta = "SELECT id_usuario FROM usuarios where usuario='$usuario'";
$resultado = mysqli_query($conexion, $consulta);
if (mysqli_num_rows($resultado) > 0) {
    while ($rowData = mysqli_fetch_assoc($resultado)) {
        $id_usuario = $rowData["id_usuario"];
    }
}

/* Una vez subido el formulario empieza a correr el condicional */

if (isset($_POST['insertar'])) {
    /* Recibimos la información enviada por el formulario y la almacenamos en una variable */
    $actLun = $_POST['actLun'];
    $actMar = $_POST['actMar'];
    $actMie = $_POST['actMie'];
    $actJue = $_POST['actJue'];
    $actVie = $_POST['actVie'];
    $actSab = $_POST['actSab'];
    $actDom = $_POST['actDom'];
    $pesoSem = $_POST['pesoSem'];
    $estado = $_POST['estado'];
    $valSem = $_POST['valSem'];

    $consulta = "INSERT INTO diariopaciente(id_semana,actividadLun,actividadMar,actividadMie,actividadJue,actividadVie,actividadSab,actividadDom,pesoSemanal,estado,valoracionSemana,id_usuario) VALUES (null,'$actLun','$actMar','$actMie','$actJue','$actVie','$actSab','$actDom','$pesoSem','$estado','$valSem','$id_usuario')";

    $resultado = mysqli_query($conexion, $consulta);

    header("Location:verDiario.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icono que aparece en la pestaña -->
    <link rel="shortcut icon" href="../../img/simbolo_medico.png" type="image/png">
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Tu Salud Online</title>
</head>

<body>
  <header>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../home.php"><span class="title">Tu Salud Online</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="../imc.php"><span class="nav-links">Calculadora IMC</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../odontologia.php"><span class="nav-links">Odontología</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../oftalmologia.php"><span class="nav-links">Oftalmología</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../vacunacion.php"><span class="nav-links">Vacunación</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="nav-links dropdown-toggle">Mi perfil </span> 
              </a>
              <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="verDiario.php">Ver diario</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="diarioPaciente.php">Actualizar diario</a></li>
                
              </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../logout.php" onclick="return confirmarSalir()"><span class="nav-links">Salir <i class="fa fa-sign-out"></i></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <div>
      <!-- Titulo -->
      <h1 class="mt-2 p-2 text-center border-bottom border-3 w-75 ms-auto mx-auto">TU DIARIO DE SALUD</h1>
      <div class="col-lg-8 ms-auto mx-auto">
        <ul class="mt-2 pt-2 text-justify">
          <p>Es necesario llevar un control de los medicamentos que tomas y las cosas que haces, por lo que te presentamos esta agenda, donde podrás apuntar cómo ha ido la semana, controlar tu peso y anotar las diferentes actividades que realices entre otras cosas.</p>
          <p>Es recomendable que se pese el mismo día de la semana y más o menos a la misma hora</p>
        </ul>
      </div>
    </div>
    <!-- FORMULARIO DIARIO DE PACIENTE -->
    <div class="contenedor mx-auto ms-auto">
        <form action="" method="POST" class="ms-auto mx-auto">
            <!-- Actividad del lunes  -->
            <div class="text-center">
                <label for="actLun" class="mb-2">¿Cuál fue su actividad del lunes?</label>
                <input name="actLun" type="text" placeholder="" required>
            </div>
            <!-- Actividad del martes -->
            <div class="text-center">
                <label for="actMar" class="mb-2">¿Cuál fue su actividad del martes?</label>
                <input name="actMar" type="text" placeholder="" required>
            </div>
            <!-- Actividad del míércoles -->
            <div class="text-center">
                <label for="actMie" class="mb-2">¿Cuál fue su actividad del miércoles?</label>
                <input name="actMie" type="text" placeholder="" required>
            </div>
            <!-- Actividad del jueves -->
            <div class="text-center">
                <label for="actJue" class="mb-2">¿Cuál fue su actividad del jueves?</label>
                <input name="actJue" type="text" placeholder="" required>
            </div>
            <!-- Actividad del viernes -->
            <div class="text-center">
                <label for="actVie" class="mb-2">¿Cuál fue su actividad del viernes?</label>
                <input name="actVie" type="text" placeholder="" required>
            </div>
            <!-- Actividad del sábado -->
            <div class="text-center">
                <label for="actSab" class="mb-2">¿Cuál fue su actividad del sábado?</label>
                <input name="actSab" type="text" placeholder="" required>
            </div>
            <!-- Actividad del domingo -->
            <div class="text-center">
                <label for="actDom" class="mb-2">¿Cuál fue su actividad del domingo?</label>
                <input name="actDom" type="text" placeholder="" required>
            </div>
            <!-- Peso semanal -->
            <div class="text-center">
                <label for="pesoSem" class="mb-2">¿Ganó peso? ¿Perdió peso? ¿Cuánto?</label>
                <input name="pesoSem" type="text" placeholder="" required>
            </div>
            <!-- Estado de la persona -->
            <div class="text-center">
                <label for="estado" class="mb-2">¿Cómo se encuentra?</label>
                <input name="estado" type="text" placeholder="Sentimientos, problemas de salud, etc" required>
            </div>
            <!-- Valoración de su semana -->
            <div class="text-center">
              <label for="valSem" class="mb-2">¿Cómo ha sido su semana en general?</label>
                <select class="boton" name="valSem" required>
                  <option value="Muy buena">Muy buena</option>
                  <option value="Buena">Buena</option>
                  <option value="Regular">Regular</option>
                  <option value="Mala">Mala</option>
                  <option value="Muy mala">Muy mala</option>
                </select>
            </div>
            <!-- BOTÓN COMPLETAR REGISTRO -->
            <div>
                <input name="insertar" class="boton mt-3" type="submit" value="ACTUALIZAR"></input>
            </div>
        </form>
    </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Javascript -->
  <script src="../../js/cerrarSesion.js"></script>
</body>

</html>