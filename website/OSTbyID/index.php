<?php
require_once "../../src/Seeder.php";

$request_OST =  $_GET["id"];

header('Content-Type: application/json; charset=utf-8');
echo json_encode(Seeder::getOSTbyId($request_OST));