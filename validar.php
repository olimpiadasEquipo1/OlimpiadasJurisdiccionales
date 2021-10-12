<?php
/* Recibimos los datos enviados por formulario y con el metodo POST */
$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];
/* Encriptamos la contraseña recibida, ya que por motivos de seguridad, fue encriptada anteriormente en el registro de usuario, y para que coincida con la información de la base de datos hay que encriptar esto que envía el usuario */
$contraseña = md5($contraseña);

$conexion = mysqli_connect("localhost", "root", "", "sistema_olimpiada");

$consulta = "SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

/* Si el usuario y la contraseña coinciden, se detectará 1 fila en la base de datos y la sesión podrá ser iniciada */
if ($filas) {
  /* Abrimos la sesión y guardamos el usuario */
  session_start();
  $_SESSION['usuario'] = $usuario;
  /* Redirigimos la usuario a redireccionamiento.php, donde se redigirá al mismo */
  header("location:redireccionamiento.php");
} else {
  include("index.php");
?>
<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
