<?php

//本地调试与服务器调试的定义
!defined('APP_RUN_PROFILE') && define('APP_RUN_PROFILE', 'local');
//!defined('APP_RUN_PROFILE') && define('APP_RUN_PROFILE', 'server');

//运行模式设置,生产平台请修改为false
!defined('APP_RUN_DEBUG_MODE') && define('APP_RUN_DEBUG_MODE', true);

!defined('APP_RUN_PROFILE') && exit;
!defined('APP_RUN_DEBUG_MODE') && exit;

//基本目录设置
if ( 'local' == APP_RUN_PROFILE ) {

	define('SYS_BASE_PATH', '/wwwroot/sites/wohenxian');
} else {

	define('SYS_BASE_PATH', '/wwwroot/sites/wohenxian');
}

//错误提示开关设置
if ( APP_RUN_DEBUG_MODE ) {
	
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
} else {
	
	error_reporting(0);
	ini_set('display_errors', 'Off');
}

//时区设置
!defined('APP_TIME_ZONE') && define('APP_TIME_ZONE', 'Asia/Shanghai');
date_default_timezone_set(APP_TIME_ZONE);

//网址
define('APP_DOMAIN_NAME', 'wohenxian.com');
define('APP_WWW_URL', 'http://www.' . APP_DOMAIN_NAME);
define('APP_API_URL', 'http://api.' . APP_DOMAIN_NAME);
define('APP_IMAGES_URL', 'http://images.' . APP_DOMAIN_NAME);
define('APP_FILE_URL', APP_IMAGES_URL . '/uploads');
define('APP_ADMIN_URL', 'http://admin.' . APP_DOMAIN_NAME);

//项目编码
define('APP_ENCODING', 'UTF-8');

//数据库编码
define('APP_DBCHARSET', 'UTF8');

?>