<?php
session_start();

if (!isset($_SESSION["idUsuario"]) || !isset($_SESSION["usuario"])) {
    header('location: ../login.php');
}
else {
    $idUsuario = $_SESSION["idUsuario"];
    $usuario = $_SESSION["usuario"];
    $perm = $_SESSION["perm"];
}
?>