<?php
require_once("../connection.php");
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$sexo=$_POST["sexo"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$password=$_POST["password"];

$status=$database->insert("contactos",[
    "nombre"=>$nombre,
    "apellidos"=>$apellidos, 
    "sexo"=>$sexo,
    "telefono"=>$telefono,
    "email"=>$email,
    "password"=> hash("sha256",$password,false)  
]);

if ($status!=null) {
    header("location: /contacto/confirmacion_registro.php");
}else{
    header("location: /contacto/confirmacion_registro.php?error=1");
}



