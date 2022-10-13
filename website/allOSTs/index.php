<?php
require_once "../../src/Seeder.php";

header('Content-Type: application/json; charset=utf-8');
echo json_encode(Seeder::generateOSTs());
