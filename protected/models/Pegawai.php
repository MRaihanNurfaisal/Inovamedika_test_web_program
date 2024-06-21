<?php

class Pegawai extends CActiveRecord
{

	public function tableName()
	{
		return 'pegawai';
	}

	public function rules()
	{
		return array(
			array('nama, umur', 'required'),
			array('umur', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>128),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'nama' => 'Nama',
			'umur' => 'Umur',
		);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}