<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!-- Icono que aparece en la pestaña -->
	<link rel="shortcut icon" href="../img/simbolo_medico.png" type="image/png">
	<!-- Fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Titulo -->
	<title>Login</title>
	<!-- Titulo -->
	<title>Hospital Online</title>
</head>
<body>
	<!-- Imagen de fondo -->
	<img class="wave" src="img/wave.png" alt="Forma curva de decoracion">
	<div class="container">
		<!-- Imagen del simbolo de la medicina -->
		<div class="img">
			<img src="img/simbolo_medico.png" alt="Simbolo de la medicina">
		</div>
		<div class="login-content">
			<!-- Formulario Login -->
			<form action="validar.php" method="POST">
				<!-- Imagen del avatar -->
				<img src="img/avatar.svg" alt="Avatar de un medico">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
					<!-- icono de usuario a la izquierda del input -->
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
						<!-- Input donde se ingresa el usuario -->
           		   		<input type="text" class="input" name="usuario" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
					<!-- Icono de candado a la izquierda del input -->
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
						<!-- Input donde se ingresa la contraseña -->
           		    	<input type="password" class="input" name="password" required>
            	   </div>
            	</div>
				<!-- Boton para ingresar -->
            	<input type="submit" class="btn" value="Ingresar">
            </form>
        </div>
    </div>
	<!-- Javascript -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
