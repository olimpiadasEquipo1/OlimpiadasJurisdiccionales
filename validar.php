<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "root", "", "sistema_olimpiada");

$consulta = "SELECT * FROM usuarios where usuario='$usuario' and password='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas) {
  header("location:redireccionamiento.php");
} else {
?>
  <?php
  include("index.php");
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
