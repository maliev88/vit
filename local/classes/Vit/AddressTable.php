<?php

namespace Vit;

class AddressTable
{
    public static function getList()
    {
        $class = VitHL::getDataClass('b_vit_address');

        return $class::getList([
            'select' => ['*']
        ])->fetchAll();
    }
}