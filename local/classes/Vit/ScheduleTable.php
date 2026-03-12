<?php

namespace Vit; // VitHL
use Bitrix\Main\Loader;
use CUserFieldEnum;
use CUserTypeEntity;

class ScheduleTable
{
    protected static function getEnumValues($fieldName)
    {
        Loader::includeModule('highloadblock');

        $values = [];

        $rsUserField = CUserTypeEntity::GetList(
            [],
            [
                'ENTITY_ID' => 'HLBLOCK_21',
                'FIELD_NAME' => $fieldName
            ]
        );

        if ($userField = $rsUserField->Fetch())
        {
            $enum = new CUserFieldEnum();

            $rsEnum = $enum->GetList([], [
                'USER_FIELD_ID' => $userField['ID']
            ]);

            while ($item = $rsEnum->Fetch())
            {
                $values[$item['ID']] = $item['VALUE'];
            }
        }

        return $values;
    }

    public static function getList($filter = [])
    {
        $class = VitHL::getDataClass('b_vit_schedule');

        $daysEnum = self::getEnumValues('UF_DAYOFWEEK');
        $timeEnum = self::getEnumValues('UF_TIME');

        $result = $class::getList([
            'select' => [
                'ID',
                'UF_DOCTOR',
                'UF_CLINIC',
                'UF_DAYOFWEEK',
                'UF_TIME'
            ],
            'filter' => $filter
        ]);

        $items = [];

        while ($row = $result->fetch())
        {
            $days = [];
            foreach ((array)$row['UF_DAYOFWEEK'] as $id)
            {
                $days[$id] = $daysEnum[$id] ?? $id;
            }

            $times = [];
            foreach ((array)$row['UF_TIME'] as $id)
            {
                $times[$id] = $timeEnum[$id] ?? $id;
            }

            $items[] = [
                'id' => $row['ID'],
                'doctor_id' => $row['UF_DOCTOR'],
                'clinic_id' => $row['UF_CLINIC'],
                'days' => $days,
                'times' => $times
            ];
        }

        return $items;
    }

    public static function getDoctorSchedule($doctorId)
    {
        return self::getList([
            'UF_DOCTOR' => $doctorId
        ]);
    }
}