<?php

class Tindakan extends CActiveRecord
{

	public function tableName()
	{
		return 'tindakan';
	}

	public function rules()
	{

		return array(
			array('penyakit, solusi, harga', 'required'),
			array('harga', 'numerical', 'integerOnly'=>true),
			array('penyakit, solusi', 'length', 'max'=>255),
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
			'penyakit' => 'Penyakit',
			'solusi' => 'Solusi',
			'harga' => 'Harga',
		);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}