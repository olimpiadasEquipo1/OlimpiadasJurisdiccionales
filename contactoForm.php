<?php

/* Una vez enviado el formulario se realiza el envio del correo electrónico a la dirección correspondiente */
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $mensaje = $_POST['mensaje'];
    $texto = "Nombre: " . $nombre . "\n\n" .  "Email: " . $mail . "\n\n" .  "Mensaje: " . $mensaje;


    $mailReceptor = "mirko.doriaet36@gmail.com";


    mail($mailReceptor, 'CONSULTA ODONTOLÓGICA', $texto);
    header("Location: webCliente/odontologia.php");
}
