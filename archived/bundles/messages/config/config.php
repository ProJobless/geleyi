<?php

return array(



	'default' => 'smtp',

	'transports' => array(

		'smtp' => array(
			'host'       => 'mail.geleyi.com',
			'port'       => 26,
			'username'   => 'info@geleyi.com',
			'password'   => 'Griffin003',
			'encryption' => null,
		),

		'sendmail' => array(
			'command' => '/user/sbin/sendmail -bs',
		),

		'mail',

	),
);