<?php

return array(


	'profile' => true,

	'fetch' => PDO::FETCH_CLASS,

	'default' => 'mysql',


	'connections' => array(
		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'database' => 'geleyi',
			'username' => 'root',
			'password' => 'root',
			'charset'  => 'utf8',
			'prefix'   => '',
		),

	),


);