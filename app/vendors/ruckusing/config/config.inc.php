<?php

//--------------------------------------------
//Overall file system configuration paths
//--------------------------------------------

//These might already be defined, so wrap them in checks


// DB table where the version info is stored
if(!defined('RUCKUSING_SCHEMA_TBL_NAME')) {
	define('RUCKUSING_SCHEMA_TBL_NAME', 'ruckusing_info');
}

//Parent of migrations directory.
//Where schema.txt will be placed when 'db:schema' is executed
if(!defined('RUCKUSING_DB_DIR')) {
	define('RUCKUSING_DB_DIR', RUCKUSING_BASE . '/../../config/sql');
}

//Where the actual migrations reside
if(!defined('RUCKUSING_MIGRATION_DIR')) {
	define('RUCKUSING_MIGRATION_DIR', RUCKUSING_DB_DIR . '/migrate');
}

?>