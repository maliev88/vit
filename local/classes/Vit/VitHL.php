<?php

namespace Vit;

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Loader;

class VitHL
{
    public static function getDataClass($tableName)
    {
        Loader::includeModule('highloadblock');

        $hlblock = HL\HighloadBlockTable::getList([
            'filter' => ['=TABLE_NAME' => $tableName]
        ])->fetch();

        $entity = HL\HighloadBlockTable::compileEntity($hlblock);

        return $entity->getDataClass();
    }
}