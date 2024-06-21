<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'db'=>array(
		'connectionString' => 'mysql:host=localhost;dbname=testing_testyii',
		'emulatePrepare' => true,
		'username' => 'root', // Ganti dengan username database Anda
		'password' => '', // Ganti dengan password database Anda
		'charset' => 'utf8',
	),

	
);