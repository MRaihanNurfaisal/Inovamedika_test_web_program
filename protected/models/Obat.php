<?php

class Obat extends CActiveRecord
{

	public function tableName()
	{
		return 'obat';
	}

	public function rules()
	{

		return array(
			array('nama, keterangan, harga', 'required'),
			array('harga', 'numerical', 'integerOnly'=>true),
			array('nama, keterangan', 'length', 'max'=>255),
		);
	}


	public function relations()
	{
		return array(
		);
	}


	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'nama' => 'Nama',
			'keterangan' => 'Keterangan',
			'harga' => 'Harga',
		);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}