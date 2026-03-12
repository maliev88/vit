<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
use Vit\AppointmentTable;

header('Content-Type: application/json');

Loader::includeModule('highloadblock');

try {
    $data = json_decode(file_get_contents('php://input'), true);

    $doctorId = (int)($data['doctor'] ?? 0);
    $date = $data['appointment_date'] ?? null;
    $time = $data['appointment_time'] ?? null;
    $type = (int)($data['appointment_type'] ?? 0);
    $address = (int)($data['address'] ?? 0);
    $patient = $data['patient'] ?? 'Пациент';

    if (!$doctorId || !$date || !$time || !$type || !$address) {
        throw new \Exception('Неверные данные для записи');
    }

    // проверяем, занят ли слот
    $existing = AppointmentTable::getBookedSlots($doctorId, $date);
    if (in_array($time, $existing)) {
        throw new \Exception('Слот уже занят');
    }

    // создаем запись через ORM
    $result = AppointmentTable::addAppointment([
        'doctor' => $doctorId,
        'date' => $date,
        'time' => $time,
        'type' => $type,
        'address' => $address,
        'patient' => $patient
    ]);

    if ($result->isSuccess()) {
        echo json_encode(['success' => true]);
    } else {
        throw new \Exception(implode(', ', $result->getErrorMessages()));
    }

} catch (\Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}