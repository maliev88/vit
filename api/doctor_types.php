<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Vit\DoctorsTable;
use Vit\AdmissionTypeTable;

header('Content-Type: application/json');

$doctorId = (int)($_GET['doctor'] ?? 0);
$response = [];

if ($doctorId > 0) {
    $doctor = DoctorsTable::getList(['ID' => $doctorId]);

    if (!empty($doctor[0])) {
        $admissionIds = $doctor[0]['admission_type'] ?? [];

        if (!empty($admissionIds)) {
            foreach ($admissionIds as $id) {
                $type = AdmissionTypeTable::getById($id);
                if ($type) {
                    $response[] = [
                        'id' => $type['ID'],
                        'name' => $type['UF_NAME']
                    ];
                }
            }
        }
    }
}

echo json_encode($response);