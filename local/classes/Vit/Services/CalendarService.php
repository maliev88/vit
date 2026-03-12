<?php

namespace Vit\Services;

// генерирует календарь доступных дат.
use Vit\ScheduleTable;

class CalendarService
{
    public static function getAvailableDates($doctorId, $days = 30)
    {
        $schedule = ScheduleTable::getDoctorSchedule($doctorId);

        if (!$schedule) {
            return [];
        }

        // собираем ID дней недели из расписания
        $weekDays = [];

        foreach ($schedule as $item) {
            foreach ($item['days'] as $dayId => $dayName) {
                $weekDays[] = $dayId;
            }
        }

        $weekDays = array_unique($weekDays);

        $result = [];

        for ($i = 0; $i < $days; $i++)
        {
            $timestamp = strtotime("+$i day");

            $dayEnumId = self::getEnumDayId($timestamp);

            if (in_array($dayEnumId, $weekDays))
            {
                $result[] = date('Y-m-d', $timestamp);
            }
        }

        return $result;
    }

    protected static function getEnumDayId($timestamp)
    {
        $map = [
            1 => 55,
            2 => 56,
            3 => 57,
            4 => 58,
            5 => 59,
            6 => 60,
            7 => 61
        ];

        $dayIndex = date('N', $timestamp);

        return $map[$dayIndex];
    }
}