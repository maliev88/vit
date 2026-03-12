<?php

namespace Vit;

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

class AppointmentTable extends Entity\DataManager
{
    /**
     * Получаем HL-блок
     */
    public static function getHLBlockId()
    {
        return 22; // замените на реальный ID HL-блока vit_appointments
    }

    /**
     * Имя таблицы
     */
    public static function getTableName()
    {
        $hlblock = HL\HighloadBlockTable::getById(self::getHLBlockId())->fetch();
        return $hlblock['TABLE_NAME'] ?? '';
    }

    /**
     * Определяем поля ORM
     */
    public static function getMap()
    {
        return [
            new Entity\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true
            ]),
            new Entity\IntegerField('UF_DOCTOR'),
            new Entity\StringField('UF_DATE'),
            new Entity\StringField('UF_TIME'),
            new Entity\IntegerField('UF_TYPE'),
            new Entity\IntegerField('UF_ADDRESS'),
            new Entity\StringField('UF_PATIENT'),
            new Entity\StringField('UF_STATUS'),
            new Entity\DatetimeField('UF_CREATED_AT', [
                'default_value' => function() { return new \Bitrix\Main\Type\DateTime(); }
            ])
        ];
    }

    /**
     * Добавляем новую запись
     */
    public static function addAppointment($data)
    {
        $result = self::add([
            'UF_DOCTOR' => $data['doctor'],
            'UF_DATE' => $data['date'],
            'UF_TIME' => $data['time'],
            'UF_TYPE' => $data['type'],
            'UF_ADDRESS' => $data['address'],
            'UF_PATIENT' => $data['patient'],
            'UF_STATUS' => 'new'
        ]);

        return $result;
    }

    /**
     * Получаем занятые слоты врача на дату
     */
    public static function getBookedSlots($doctorId, $date)
    {
        $res = self::getList([
            'filter' => [
                'UF_DOCTOR' => $doctorId,
                'UF_DATE' => $date,
                'UF_STATUS' => 'new'
            ],
            'select' => ['UF_TIME']
        ]);

        $slots = [];
        while ($row = $res->fetch()) {
            $slots[] = $row['UF_TIME'];
        }

        return $slots;
    }
}