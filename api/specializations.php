<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
use Vit\SpecializationTable;

header('Content-Type: application/json');

Loader::includeModule('highloadblock');

$specializations = [];

$res = SpecializationTable::getList([
    'select' => ['ID', 'UF_NAME'],
    'order' => ['UF_NAME' => 'ASC']
]);

while ($spec = $res->fetch()) {
    $specializations[] = [
        'id' => $spec['ID'],
        'name' => $spec['UF_NAME']
    ];
}

echo json_encode($specializations);