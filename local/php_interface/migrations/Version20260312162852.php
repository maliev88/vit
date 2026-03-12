<?php

namespace Sprint\Migration;


class Version20260312162852 extends Version
{
    protected $author = "maliev.88@y.ru";

    protected $description = "Vit Миграция - VitDoctors / Vit - Врачи";

    protected $moduleVersion = "5.4.1";

    /**
     * @return bool|void
     * @throws Exceptions\HelperException
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array(
            'NAME' => 'VitDoctors',
            'TABLE_NAME' => 'b_vit_doctors',
            'LANG' =>
                array(
                    'ru' =>
                        array(
                            'NAME' => 'Vit - Врачи',
                        ),
                ),
        ));
        $helper->Hlblock()->saveField($hlblockId, array(
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
                array(
                    'SIZE' => 20,
                    'ROWS' => 1,
                    'REGEXP' => '',
                    'MIN_LENGTH' => 0,
                    'MAX_LENGTH' => 0,
                    'DEFAULT_VALUE' => '',
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'ФИО - врача',
                    'ua' => '',
                ),
            'LIST_COLUMN_LABEL' =>
                array(
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
                array(
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
                array(
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
                array(
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
        $helper->Hlblock()->saveField($hlblockId, array(
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
                array(
                    'SIZE' => 20,
                    'ROWS' => 1,
                    'REGEXP' => '',
                    'MIN_LENGTH' => 0,
                    'MAX_LENGTH' => 0,
                    'DEFAULT_VALUE' => '',
                ),
            'EDIT_FORM_LABEL' =>
                array(
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
                array(
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
                array(
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
                array(
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
                array(
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
        $helper->Hlblock()->saveField($hlblockId, array(
            'FIELD_NAME' => 'UF_SPECIALIZ',
            'USER_TYPE_ID' => 'hlblock',
            'XML_ID' => 'UF_SPECIALIZ',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'I',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
            'SETTINGS' =>
                array(
                    'DISPLAY' => 'LIST',
                    'LIST_HEIGHT' => 1,
                    'HLBLOCK_ID' => 'VitSpecialization',
                    'HLFIELD_ID' => 'UF_NAME',
                    'DEFAULT_VALUE' => '',
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'Специлизация',
                    'ua' => '',
                ),
            'LIST_COLUMN_LABEL' =>
                array(
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
                array(
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
                array(
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
                array(
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
        $helper->Hlblock()->saveField($hlblockId, array(
            'FIELD_NAME' => 'UF_ADMISSION_TYPE',
            'USER_TYPE_ID' => 'hlblock',
            'XML_ID' => 'UF_ADMISSION_TYPE',
            'SORT' => '100',
            'MULTIPLE' => 'Y',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'I',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
            'SETTINGS' =>
                array(
                    'DISPLAY' => 'LIST',
                    'LIST_HEIGHT' => 1,
                    'HLBLOCK_ID' => 'VitAdmissionType',
                    'HLFIELD_ID' => 'UF_NAME',
                    'DEFAULT_VALUE' =>
                        array(),
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'Тип приема',
                    'ua' => '',
                ),
            'LIST_COLUMN_LABEL' =>
                array(
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
                array(
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
                array(
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
                array(
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
        $helper->Hlblock()->saveField($hlblockId, array(
            'FIELD_NAME' => 'UF_CLINIC',
            'USER_TYPE_ID' => 'hlblock',
            'XML_ID' => 'UF_CLINIC',
            'SORT' => '100',
            'MULTIPLE' => 'Y',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                array(
                    'DISPLAY' => 'LIST',
                    'LIST_HEIGHT' => 1,
                    'HLBLOCK_ID' => 'VitAddress',
                    'HLFIELD_ID' => 'UF_NAME',
                    'DEFAULT_VALUE' =>
                        array(),
                ),
            'EDIT_FORM_LABEL' =>
                array(
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
                array(
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
                array(
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
                array(
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
                array(
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
        $helper->Hlblock()->saveField($hlblockId, array(
            'FIELD_NAME' => 'UF_DESCRIPTION',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_DESCRIPTION',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                array(
                    'SIZE' => 20,
                    'ROWS' => 3,
                    'REGEXP' => '',
                    'MIN_LENGTH' => 0,
                    'MAX_LENGTH' => 0,
                    'DEFAULT_VALUE' => '',
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'Описание',
                    'ua' => '',
                ),
            'LIST_COLUMN_LABEL' =>
                array(
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
                array(
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
                array(
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
                array(
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
        $helper->Hlblock()->saveField($hlblockId, array(
            'FIELD_NAME' => 'UF_FILE',
            'USER_TYPE_ID' => 'file',
            'XML_ID' => 'UF_FILE',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                array(
                    'SIZE' => 20,
                    'LIST_WIDTH' => 0,
                    'LIST_HEIGHT' => 0,
                    'MAX_SHOW_SIZE' => 0,
                    'MAX_ALLOWED_SIZE' => 0,
                    'EXTENSIONS' =>
                        array(),
                    'TARGET_BLANK' => 'Y',
                    'DEFAULT_VIEW' => NULL,
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'Фото врача',
                    'ua' => '',
                ),
            'LIST_COLUMN_LABEL' =>
                array(
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
                array(
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
                array(
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
                array(
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
