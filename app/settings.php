<?php

return [
	'settings' => [
		'displayErrorDetails' => true,

		// Setting Dababase
		'db' => [
			'host'	=>	'localhost',
			'user'	=>	'root',
			'pass'	=>	'root',
			'name'	=>	'test',
		],

		// Setting View
		'view' => [
			'path'	=>	__DIR__ . '/../views',
			'twig'	=> 	[
				'cache'	=>	false,
			]
		],

		// Setting Valadasi
		'lang' => [
			'default'	=>	'id',
		],


	]
];

?>
