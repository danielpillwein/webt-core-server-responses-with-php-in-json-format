<?php
header('Content-Type: application/json; charset=utf-8');

require_once "../../src/Seeder.php";

echo json_encode(Seeder::generateOSTs());
