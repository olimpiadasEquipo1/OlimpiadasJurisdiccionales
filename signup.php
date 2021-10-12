<?php
$conexion = mysqli_connect("localhost", "root", "", "sistema_olimpiada");

/* Una vez subido el formulario, empieza a correr el condicional */
if (isset($_POST['insertar'])) {
    session_start();
    /* Recibimos la información enviada por el formulario y la almacenamos en una variable */
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['password'];
    $contraseña2 = $_POST['password2'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $nacimiento = date('Y-m-d', strtotime($_POST['nacimiento']));

    /* Verificamos si la contraseña ha sido confirmada correctamente */
    if ($contraseña == $contraseña2) {
        /* Encriptamos la contraseña por temas de seguridad */
        $contraseña = md5($contraseña);
        $consulta = "INSERT INTO usuarios(id_usuario,usuario,contraseña,nombre,apellido,genero,fecha_de_nacimiento) VALUES (null,'$usuario','$contraseña','$nombre','$apellido','$genero','$nacimiento')";

        /* Realizamos la consulta */
        $query_run = mysqli_query($conexion, $consulta);

        /* Dependiendo si la instancia SQL fue realizada con éxito, se indicará un status por pantalla */
        if ($query_run) {
            $_SESSION['status'] = "Cuenta creada exitosamente";
            header("Location:index.php");
        } else {
            $_SESSION['status'] = "Hubo un error al crear una cuenta";
            header("Location:index.php");
        }
    } else {
        $_SESSION['status'] = "Las 2 contraseñas no coinciden";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Icono que aparece en la pestaña -->
    <link rel="shortcut icon" href="img/simbolo_medico.png" type="image/png">
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Titulo -->
    <title>Tu Salud Online</title>
</head>

<body>
    <!-- Formulario de Registro -->
    <div class="contenedor mx-auto ms-auto">
        <h1 class="text-center border-bottom border-3 w-75 ms-auto mx-auto">LLENE EL SIGUIENTE FORMULARIO PARA COMPLETAR SU REGISTRO</h1>
        <form action="" method="POST" class="mt-2 mx-auto mx-auto">
            <!-- NOMBRE DE USUARIO -->
            <div>
                <input name="usuario" type="text" placeholder="Nombre de usuario" required>
            </div>
            <!-- CONTRASEÑA -->
            <div>
                <input name="password" type="password" placeholder="Contraseña" required>
            </div>
            <!-- CONTRASEÑA -->
            <div>
                <input name="password2" type="password" placeholder="Confirmar contraseña" required>
            </div>
            <!-- NOMBRE -->
            <div>
                <input name="nombre" type="text" placeholder="Nombre" required>
            </div>
            <!-- APELLIDO -->
            <div>
                <input name="apellido" type="text" placeholder="Apellido" required>
            </div>
            <!-- FECHA DE NACIMIENTO -->
            <div>
                <input name="nacimiento" type="date" placeholder="año-mes-dia" required>
            </div>
            <!-- GÉNERO -->
            <div>
                <label for="genero">Indique su género</label>
                <select class="boton" name="genero" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <!-- BOTÓN COMPLETAR REGISTRO -->
            <div>
                <input name="insertar" class="btn" type="submit" value="Crear Cuenta"></input>
            </div>
            <!-- Botón para volver atrás -->
            <div>
                <input type="button" class="btn" value="VOLVER" onclick="location.href = 'index.php';">
            </div>
        </form>
    </div>



    <!-- Si existe status de registro, lo imprimimos por pantalla -->
    <div>
        <?php
        if (isset($_SESSION['status'])) {
            echo "<h4>" . $_SESSION['status'] . "<h4>";
            unset($_SESSION['status']);
            session_destroy();
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>