<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
use Vit\Services\CalendarService;

header('Content-Type: application/json');

Loader::includeModule('highloadblock');

$doctorId = (int)($_GET['doctor'] ?? 0);

if (!$doctorId) {
    echo json_encode([]);
    exit;
}

// возвращаем календарь на 30 дней с доступными слотами
$calendar = CalendarService::getDoctorCalendar($doctorId, 30);

echo json_encode($calendar);