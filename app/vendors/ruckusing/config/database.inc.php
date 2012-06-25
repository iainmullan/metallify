<?php


//----------------------------
// DATABASE CONFIGURATION
//----------------------------
$ruckusing_db_config = array(
	
  'development' => array(
     'type'      => 'mysql',
     'host'      => 'localhost',
     'port'      => 3306,
     'database'  => 'php_migrator',
     'user'      => 'root',
     'password'  => ''
  ),

	'test' 					=> array(
			'type' 			=> 'mysql',
			'host' 			=> 'localhost',
			'port'			=> 3306,
			'database' 	=> 'php_migrator_test',
			'user' 			=> 'root',
			'password' 	=> ''
	),
	'production' 		=> array(
			'type' 			=> 'mysql',
			'host' 			=> 'localhost',
			'port'			=> 0,
			'database' 	=> 'prod_php_migrator',
			'user' 			=> 'root',
			'password' 	=> ''
	)
	
);


?>