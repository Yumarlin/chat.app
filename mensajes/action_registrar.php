<?php
require_once("../connection.php");
$mensaje = $_POST["mensaje"];
$remitenteID = $_POST["remitenteID"];
$destinatarioID = $_POST["destinatarioID"];
$fecha = date("Y-m-d H:i:s");

$status = $database->insert("mensajes", [
    "remitenteID" => $remitenteID,
    "destinatarioID" => $destinatarioID,
    "mensaje" => $mensaje,
    "fecha" => $fecha
]);

echo ($status != null) ? 1 : 0;
