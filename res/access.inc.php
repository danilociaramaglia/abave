<?php

// Users data
$imSettings['access']['users'] = array(
	'admin' => array(
		'id' => '7c867ueu',
		'groups' => array('7c867ueu'),
		'firstname' => 'Admin',
		'lastname' => '',
		'email' => 'admin',
		'password' => '$2a$11$.DNNCgqUuK2zRLjkUmAlIuCP0ZegwzySqkzXpNWvb0LJlChP8F9hS',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	),
	'user' => array(
		'id' => 'aaabcdef',
		'groups' => array('13912n91'),
		'firstname' => 'Area riservata 1',
		'lastname' => '',
		'email' => 'user',
		'password' => '$2a$11$IrNWn3L5mMVRWzNxWpVSCOkGnDbD5jni164bQZu4gRmmGqEeqSTE6',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	)
);

// Admins list
$imSettings['access']['admins'] = array('7c867ueu');

// Page/Users permissions
$imSettings['access']['pages'] = array();

// PASSWORD CRYPT

$imSettings['access']['password_crypt'] = array(
	'encoding_id' => 'php_default',
	'encodings' => array(
		'no_crypt' => array(
			'encode' => function ($pwd) { return $pwd; },
			'check' => function ($input, $encoded) { return $input == $encoded; }
		),
		'php_default' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_DEFAULT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		),
		'csharp_bcrypt' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_BCRYPT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		)
	)
);

// End of file access.inc.php