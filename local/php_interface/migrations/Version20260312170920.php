<?php

namespace Sprint\Migration;


class Version20260312170920 extends Version
{
    protected $author = "maliev.88@y.ru";

    protected $description = "Миграция - VitAppointments / Vit - Заявки на прием";

    protected $moduleVersion = "5.4.1";

    /**
     * @return bool|void
     * @throws Exceptions\HelperException
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array(
            'NAME' => 'VitAppointments',
            'TABLE_NAME' => 'b_vit_appointments',
            'LANG' =>
                array(
                    'ru' =>
                        array(
                            'NAME' => 'Vit - Заявки на прием',
                        ),
                ),
        ));
        $helper->Hlblock()->saveField($hlblockId, array(
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
                array(
                    'DISPLAY' => 'LIST',
                    'LIST_HEIGHT' => 1,
                    'HLBLOCK_ID' => 'VitDoctors',
                    'HLFIELD_ID' => 0,
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
                    'ru' => 'Врач',
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
            'FIELD_NAME' => 'UF_DATE',
            'USER_TYPE_ID' => 'date',
            'XML_ID' => 'UF_DATE',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                array(
                    'DEFAULT_VALUE' =>
                        array(
                            'TYPE' => 'NONE',
                            'VALUE' => '',
                        ),
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'Дата',
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
            'FIELD_NAME' => 'UF_TIME',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => 'UF_TIME',
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
                    'ru' => 'Время',
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
            'FIELD_NAME' => 'UF_TYPE',
            'USER_TYPE_ID' => 'hlblock',
            'XML_ID' => 'UF_TYPE',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                array(
                    'DISPLAY' => 'LIST',
                    'LIST_HEIGHT' => 1,
                    'HLBLOCK_ID' => 'VitAdmissionType',
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
            'FIELD_NAME' => 'UF_ADDRESS',
            'USER_TYPE_ID' => 'hlblock',
            'XML_ID' => 'UF_ADDRESS',
            'SORT' => '100',
            'MULTIPLE' => 'N',
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
                    'ru' => '',
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
            'FIELD_NAME' => 'UF_PATIENT',
            'USER_TYPE_ID' => 'hlblock',
            'XML_ID' => 'UF_PATIENT',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                array(
                    'DISPLAY' => 'LIST',
                    'LIST_HEIGHT' => 1,
                    'HLBLOCK_ID' => 'VitPatient',
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
                    'ru' => 'Пациент',
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
            'FIELD_NAME' => 'UF_STATUS',
            'USER_TYPE_ID' => 'enumeration',
            'XML_ID' => 'UF_STATUS',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' =>
                array(
                    'DISPLAY' => 'LIST',
                    'LIST_HEIGHT' => 1,
                    'CAPTION_NO_VALUE' => '',
                    'SHOW_NO_VALUE' => 'Y',
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'Статус',
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
            'ENUM_VALUES' =>
                array(
                    0 =>
                        array(
                            'VALUE' => 'Новый',
                            'DEF' => 'N',
                            'SORT' => '500',
                            'XML_ID' => 'st1',
                        ),
                    1 =>
                        array(
                            'VALUE' => 'Отменен',
                            'DEF' => 'N',
                            'SORT' => '500',
                            'XML_ID' => 'st2',
                        ),
                    2 =>
                        array(
                            'VALUE' => 'Пененос',
                            'DEF' => 'N',
                            'SORT' => '500',
                            'XML_ID' => 'st3',
                        ),
                    3 =>
                        array(
                            'VALUE' => 'Выполнен',
                            'DEF' => 'N',
                            'SORT' => '500',
                            'XML_ID' => 'st4',
                        ),
                ),
        ));
        $helper->Hlblock()->saveField($hlblockId, array(
            'FIELD_NAME' => 'UF_CREATED_AT',
            'USER_TYPE_ID' => 'datetime',
            'XML_ID' => 'UF_CREATED_AT',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'I',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'Y',
            'SETTINGS' =>
                array(
                    'DEFAULT_VALUE' =>
                        array(
                            'TYPE' => 'NOW',
                            'VALUE' => '',
                        ),
                    'USE_SECOND' => 'Y',
                    'USE_TIMEZONE' => 'Y',
                ),
            'EDIT_FORM_LABEL' =>
                array(
                    'br' => '',
                    'en' => '',
                    'fr' => '',
                    'it' => '',
                    'la' => '',
                    'pl' => '',
                    'ru' => 'Время добавления записи',
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
