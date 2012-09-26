<?php

return array(


	'profile' => true,

	'fetch' => PDO::FETCH_CLASS,

	'default' => 'mysql',


	'connections' => array(
		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'database' => 'dele_geleyi',
			'username' => 'dele_geleyi',
			'password' => 'Griffin003$',
			'charset'  => 'utf8',
			'prefix'   => '',
		),

	),


);