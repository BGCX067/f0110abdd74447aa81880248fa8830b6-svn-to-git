<?php

$globalConfigKey = Common_Config::GLOBAL_CONFIG_KEY;

$GLOBALS[$globalConfigKey] = array();

$GLOBALS[$globalConfigKey]['urlConfig'] = array('webhost' => APP_WWW_URL);

$GLOBALS[$globalConfigKey]['dbConfig'] = array('database' => array('adapter' => 'PDO_MYSQL',
									  'params'  => array('host'     => 'localhost',
									  'username' => 'root',
									  'password' => '123456',
									  'dbname'   => 'wohenxian',
									  'tbprefix' => 'main_',
									  'unix_socket' => '/tmp/mysql.sock',
									  'charset'  => APP_DBCHARSET,
									  'driver_options'  => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . APP_DBCHARSET),
								),
				  'regname' => 'db',
			),
);

$GLOBALS[$globalConfigKey]['tplConfig'] = array('template_dir' => APP_NOPUBLIC_TPL_HTML_PATH,
				   'compile_dir' => APP_NOPUBLIC_TPL_COMPILE_PATH,
				   'config_dir' => APP_NOPUBLIC_TPL_CONFIG_PATH,
				   'cache_dir' => APP_NOPUBLIC_TPL_CACHE_PATH,
				   'left_delimiter' => '<!--{',
				   'right_delimiter' => '}-->',
				   APP_NOPUBLIC_TPL_EXT_KEY => APP_NOPUBLIC_TPL_EXT_VALUE,
);

?>