<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Vit\DoctorsTable;
use Vit\AddressTable;

header('Content-Type: application/json');

$doctorId = (int)($_GET['doctor'] ?? 0);
$response = [];

if ($doctorId > 0) {
    $doctor = DoctorsTable::getList(['ID' => $doctorId]);

    if (!empty($doctor[0])) {
        $clinicIds = $doctor[0]['clinic'] ?? [];

        if (!empty($clinicIds)) {
            foreach ($clinicIds as $id) {
                $clinic = AddressTable::getById($id);
                if ($clinic) {
                    $response[] = [
                        'id' => $clinic['ID'],
                        'name' => $clinic['UF_NAME']
                    ];
                }
            }
        }
    }
}

echo json_encode($response);