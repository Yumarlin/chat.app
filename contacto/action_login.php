<?php
require_once("../connection.php");
session_start();
$usuario = $_POST["usuario"];
$password = $_POST["password"];

$result = $database->select("contactos", [
    "ID",
    "nombre",
    "apellidos"
], [
    "email" => $usuario,
    "password" => hash("sha256",$password,false)  
   
]);

if (count($result) > 0) {
    $_SESSION["id"] = $result[0]["ID"];
    $_SESSION["nombre"] = $result[0]["nombre"];
    $_SESSION["apellidos"] = $result[0]["apellidos"];

    header("location: /home/index.php");
} else {
    header("location: /home/login.php?error=1");
}
