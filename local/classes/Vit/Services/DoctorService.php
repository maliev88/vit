<?php

namespace Vit\Services;

use Vit\DoctorsTable;

/*
 * Отвечает за:
    список врачей
    специализацию
    типы приема
    адреса
*/
class DoctorService
{
    public static function getDoctors($specializationId = null)
    {
        $filter = [];

        if ($specializationId) {
            $filter['UF_SPECIALIZ'] = $specializationId;
        }

        return DoctorsTable::getList($filter);
    }
}