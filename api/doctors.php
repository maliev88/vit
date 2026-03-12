<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Vit\DoctorsTable;

header('Content-Type: application/json');

$specId = (int)($_GET['specialization'] ?? 0);

$doctors = $specId > 0
    ? DoctorsTable::getBySpecialization($specId)
    : DoctorsTable::getList();

$response = [];

foreach ($doctors as $doc) {
    $response[] = [
        'id' => $doc['id'],
        'name' => $doc['name']
    ];
}

echo json_encode($response);