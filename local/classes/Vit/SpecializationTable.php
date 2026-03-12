<?php

namespace Vit;

class SpecializationTable
{
    public static function getList()
    {
        $class = VitHL::getDataClass('b_vit_specialization');

        return $class::getList([
            'select' => ['*']
        ])->fetchAll();
    }
}