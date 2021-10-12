<?php
session_start();
include_once 'db.php';

/* Si la sesión está iniciada, se redirige al usuario a la página HOME de la web, sino, te devuelve */
if ($_SESSION["usuario"] === null) {
    header("Location: index.php");
} else {
    header("Location: webCliente/home.php");
}
