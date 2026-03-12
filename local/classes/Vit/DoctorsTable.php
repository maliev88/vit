<?php

namespace Vit;
class DoctorsTable
{
    /**
     * Получаем список врачей
     *
     * @param array $filter
     * @param int|null $specializationId
     * @return array
     */
    public static function getList($filter = [], $specializationId = null)
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
            // десериализуем массив специализаций
            $specializations = @unserialize($row['UF_SPECIALIZ']);
            if (!is_array($specializations)) {
                $specializations = [$row['UF_SPECIALIZ']]; // на случай одной специализации
            }

            // фильтрация по специализации, если указано
            if ($specializationId !== null && !in_array($specializationId, $specializations)) {
                continue;
            }

            // десериализация типов приема и кабинетов
            $admissionTypes = @unserialize($row['UF_ADMISSION_TYPE']);
            $clinics = @unserialize($row['UF_CLINIC']);

            $items[] = [
                'id' => $row['ID'],
                'name' => $row['UF_NAME'],
                'description' => $row['UF_DESCRIPTION'],
                'specialization' => $specializations,
                'admission_type' => is_array($admissionTypes) ? $admissionTypes : [],
                'clinic' => is_array($clinics) ? $clinics : [],
                'photo' => $row['UF_FILE']
            ];
        }

        return $items;
    }

    /**
     * Получаем всех врачей по специализации
     *
     * @param int $specializationId
     * @return array
     */
    public static function getBySpecialization($specializationId)
    {
        return self::getList([], $specializationId);
    }
}