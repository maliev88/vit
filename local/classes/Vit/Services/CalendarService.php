<?php

namespace Vit\Services;

// генерирует календарь доступных дат.
use Vit\ScheduleTable;

class CalendarService
{
    /**
     * Возвращает календарь врача на $days вперед с доступными слотами
     *
     * @param int $doctorId
     * @param int $days
     * @return array
     */
    public static function getDoctorCalendar($doctorId, $days = 30)
    {
        $schedule = ScheduleTable::getDoctorSchedule($doctorId);

        if (!$schedule) {
            return [];
        }

        // собираем ID дней недели → массив доступных слотов по ID дня
        $weekSlots = [];

        foreach ($schedule as $item) {
            foreach ($item['days'] as $dayId => $dayName) {
                if (!isset($weekSlots[$dayId])) {
                    $weekSlots[$dayId] = [];
                }
                $weekSlots[$dayId] = array_merge($weekSlots[$dayId], $item['times']);
            }
        }

        // убираем дубли слотов
        foreach ($weekSlots as $dayId => $slots) {
            $weekSlots[$dayId] = array_unique($slots);
        }

        $calendar = [];

        for ($i = 0; $i < $days; $i++)
        {
            $timestamp = strtotime("+$i day");

            $dayEnumId = self::getEnumDayId($timestamp);
            $dayName = date('l', $timestamp); // английское имя дня

            // берём слоты по ID дня
            if (isset($weekSlots[$dayEnumId]))
            {
                $calendar[] = [
                    'date' => date('Y-m-d', $timestamp),
                    'day' => self::getDayName($dayEnumId),
                    'times' => $weekSlots[$dayEnumId]
                ];
            }
        }

        return $calendar;
    }

    protected static function getEnumDayId($timestamp)
    {
        // карта ID HL enum для дней недели
        $map = [
            1 => 55, // Понедельник
            2 => 56,
            3 => 57,
            4 => 58,
            5 => 59,
            6 => 60,
            7 => 61  // Воскресенье
        ];

        $dayIndex = date('N', $timestamp);

        return $map[$dayIndex];
    }

    protected static function getDayName($enumId)
    {
        $map = [
            55 => "Понедельник",
            56 => "Вторник",
            57 => "Среда",
            58 => "Четверг",
            59 => "Пятница",
            60 => "Суббота",
            61 => "Воскресенье"
        ];

        return $map[$enumId] ?? '—';
    }
}