<?php

namespace Sprint\Migration;


class Version20260312162910 extends Version
{
    protected $author = "sveta@m.ru";

    protected $description = "Vit Миграция - VitSchedule / Vit - Расписание";

    protected $moduleVersion = "5.4.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
    $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'VitSchedule',
  'TABLE_NAME' => 'b_vit_schedule',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Vit - Расписание',
    ),
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_XML_ID',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_XML_ID',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Внешний код',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_DOCTOR',
  'USER_TYPE_ID' => 'hlblock',
  'XML_ID' => 'UF_DOCTOR',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 1,
    'HLBLOCK_ID' => 'VitDoctors',
    'HLFIELD_ID' => 'UF_NAME',
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Врач',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_TIME',
  'USER_TYPE_ID' => 'enumeration',
  'XML_ID' => 'UF_TIME',
  'SORT' => '100',
  'MULTIPLE' => 'Y',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'I',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'Y',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'UI',
    'LIST_HEIGHT' => 1,
    'CAPTION_NO_VALUE' => '',
    'SHOW_NO_VALUE' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Время приема',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ENUM_VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => '09:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '0900',
    ),
    1 => 
    array (
      'VALUE' => '10:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1000',
    ),
    2 => 
    array (
      'VALUE' => '11:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1100',
    ),
    3 => 
    array (
      'VALUE' => '12:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1200',
    ),
    4 => 
    array (
      'VALUE' => '13:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1300',
    ),
    5 => 
    array (
      'VALUE' => '14:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1400',
    ),
    6 => 
    array (
      'VALUE' => '15:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1500',
    ),
    7 => 
    array (
      'VALUE' => '16:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1600',
    ),
    8 => 
    array (
      'VALUE' => '17:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1700',
    ),
    9 => 
    array (
      'VALUE' => '18:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1800',
    ),
    10 => 
    array (
      'VALUE' => '19:00',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1900',
    ),
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_CLINIC',
  'USER_TYPE_ID' => 'hlblock',
  'XML_ID' => 'UF_CLINIC',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 1,
    'HLBLOCK_ID' => 'VitAddress',
    'HLFIELD_ID' => 'UF_NAME',
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Клиника приема',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_DAYOFWEEK',
  'USER_TYPE_ID' => 'enumeration',
  'XML_ID' => 'UF_DAYOFWEEK',
  'SORT' => '100',
  'MULTIPLE' => 'Y',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'I',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'Y',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'UI',
    'LIST_HEIGHT' => 1,
    'CAPTION_NO_VALUE' => '',
    'SHOW_NO_VALUE' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ENUM_VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Пн.',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Monday',
    ),
    1 => 
    array (
      'VALUE' => 'Вт.',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Tuesday',
    ),
    2 => 
    array (
      'VALUE' => 'Ср.',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Wednesday',
    ),
    3 => 
    array (
      'VALUE' => 'Чт.',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Thursday',
    ),
    4 => 
    array (
      'VALUE' => 'Пт.',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Friday',
    ),
    5 => 
    array (
      'VALUE' => 'Сб.',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Saturday',
    ),
    6 => 
    array (
      'VALUE' => 'Вс.',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Sunday',
    ),
  ),
));
        }
}
