
### Структура файлов
/local/php_interface/classes/Vit/

- VitHL.php
- DoctorsTable.php
- ScheduleTable.php
- SpecializationTable.php
- AddressTable.php
- AdmissionTypeTable.php

/services/
- DoctorService.php
- ScheduleService.php
- CalendarService.php


##  1. DoctorService
Отвечает за:
 - список врачей
 - специализацию
 - типы приема
 - адреса


### Использование:
$doctors = DoctorService::getDoctors(1);


2. ScheduleService
Отвечает за расписание врача.

3. CalendarService
Этот сервис генерирует календарь доступных дат.
Например на 30 дней вперед.

Использование
$calendar = \Vit\Services\CalendarService::getDoctorCalendar(1, 30);

Пример результата
[
[
"date" => "2026-03-12",
"day" => "Понедельник",
"times" => ["12:00","13:00","14:00"]
],
[
"date" => "2026-03-13",
"day" => "Вторник",
"times" => ["12:00","13:00","14:00"]
],
[
"date" => "2026-03-15",
"day" => "Четверг",
"times" => ["12:00","13:00","14:00"]
]
]