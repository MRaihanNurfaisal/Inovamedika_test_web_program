<?php

class Pasien extends CActiveRecord
{
	public function tableName()
	{
		return 'pasien';
	}

	public function rules()
	{
		return array(
			array('nama, penyakit', 'required'),
			array('harga', 'numerical', 'integerOnly'=>true),
			array('nama, penyakit, tindakan', 'length', 'max'=>255),
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
			'penyakit' => 'Penyakit',
			'tindakan' => 'Tindakan',
			'harga' => 'Harga',
		);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}