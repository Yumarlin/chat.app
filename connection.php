<?php
require_once("vendor/autoload.php");

use Medoo\Medoo;

$database = new Medoo([
    "database_type" => 'sqlite',
    "database_file" => '../db.sqlite',
    "login" => true
]);
