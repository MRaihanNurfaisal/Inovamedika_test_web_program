<?php

class Wilayah extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'wilayah';
    }

    public function rules()
    {
        return array(
            array('nama', 'required'),
            array('nama', 'length', 'max'=>255),
            array('keterangan', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'nama' => 'Nama',
            'keterangan' => 'Keterangan',
        );
    }
}

