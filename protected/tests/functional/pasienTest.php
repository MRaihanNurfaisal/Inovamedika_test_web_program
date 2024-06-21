<?php

class pasienTest extends WebTestCase
{
	public $fixtures=array(
		'pasiens'=>'pasien',
	);

	public function testShow()
	{
		$this->open('?r=pasien/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=pasien/create');
	}

	public function testUpdate()
	{
		$this->open('?r=pasien/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=pasien/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=pasien/index');
	}

	public function testAdmin()
	{
		$this->open('?r=pasien/admin');
	}
}
