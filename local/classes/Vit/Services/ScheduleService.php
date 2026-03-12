<?php

namespace Vit\Services;

use Vit\ScheduleTable;

class ScheduleService
{
    public static function getDoctorSchedule($doctorId)
    {
        return ScheduleTable::getDoctorSchedule($doctorId);
    }
}