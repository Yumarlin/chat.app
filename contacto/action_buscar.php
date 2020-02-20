<?php
require_once("../connection.php");
$busqueda=$_GET["busqueda"];
$id=$_GET["id"];

$result=$database->select("contactos", ["ID", "nombre", "apellidos"],[
    "ID[!]"=>$id,
    "OR"=>[
        "nombre[~]"=> "%".$busqueda."%",
        "apellidos"=>"%".$busqueda."%"
    
    ]

]);

echo json_encode($result);