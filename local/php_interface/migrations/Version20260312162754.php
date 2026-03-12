<?php

namespace Sprint\Migration;


class Version20260312162754 extends Version
{
    protected $author = "sveta@m.ru";

    protected $description = "VIT Миграция  - Vit - Специализация";

    protected $moduleVersion = "5.4.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
    $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'VitSpecialization',
  'TABLE_NAME' => 'b_vit_specialization',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Vit - Специализация',
    ),
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_NAME',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_NAME',
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
    'ru' => 'Наименование',
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
  'FIELD_NAME' => 'UF_CODE',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_CODE',
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
    'ru' => 'Код',
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
        }
}
