<?php
session_start();
include_once 'db.php';

if($_SESSION["usuario"] === null){
    header("Location: index.php");
}else{
    header("Location: webCliente/home.php");
}

?>