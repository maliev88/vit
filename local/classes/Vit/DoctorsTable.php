<?php

namespace Vit;

class DoctorsTable
{
    public static function getList($filter = [])
    {
        $class = VitHL::getDataClass('b_vit_doctors');

        $result = $class::getList([
            'select' => [
                'ID',
                'UF_NAME',
                'UF_DESCRIPTION',
                'UF_SPECIALIZ',
                'UF_ADMISSION_TYPE',
                'UF_CLINIC',
                'UF_FILE'
            ],
            'filter' => $filter
        ]);

        $items = [];

        while ($row = $result->fetch())
        {
            $items[] = [
                'id' => $row['ID'],
                'name' => $row['UF_NAME'],
                'description' => $row['UF_DESCRIPTION'],
                'specialization' => $row['UF_SPECIALIZ'],
                'admission_type' => $row['UF_ADMISSION_TYPE'],
                'clinic' => $row['UF_CLINIC'],
                'photo' => $row['UF_FILE']
            ];
        }

        return $items;
    }
}