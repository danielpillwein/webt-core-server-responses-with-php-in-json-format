<?php
header('Content-Type: application/json; charset=utf-8');

require_once "../../src/Seeder.php";

if (isset($_GET["id"])) {
    $request_OST =  $_GET["id"];

    echo json_encode(Seeder::getOSTbyId($request_OST));
} else {
    echo json_encode(null);
}
