<?php
/* Reanudamos la sesión para despues cerrarla y redirigir al usuario a la página principal */
session_start();
unset($_SESSION["usuario"]);
session_destroy();
header("Location:index.php");
