<?php
require_once("../connection.php");
$remitenteID = $_GET["remitenteID"];
$destinatarioID = $_GET["destinatarioID"];

$resultado = $database->select("mensajes", [
    "ID",
    "remitenteID",
    "destinatarioID",
    "mensaje",
    "fecha"
], [
    "OR" => [
        "AND" => [
            "destinatarioID" => $destinatarioID,
            "remitenteID" => $remitenteID,
        ],
        "AND #2nd" => [
            "destinatarioID" => $remitenteID,
            "remitenteID" => $destinatarioID
        ]
    ]
]);

echo  json_encode($resultado,false);