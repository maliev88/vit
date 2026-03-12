<?php

namespace Vit;

class AdmissionTypeTable
{
    public static function getList()
    {
        $class = VitHL::getDataClass('b_vit_admissiontype');

        return $class::getList([
            'select' => ['*']
        ])->fetchAll();
    }
}