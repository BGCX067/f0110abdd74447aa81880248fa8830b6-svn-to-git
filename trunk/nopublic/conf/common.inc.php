<?php

//加载环境配置文件
require_once 'opt.inc.php';

//加载配置文件
require_once 'config.inc.php';

//加载数据配置文件
require_once 'local.inc.php';

//包含framework库
//设定包含目录
set_include_path('.' 

. APP_SEPARATOR_PS . APP_NOPUBLIC_LIB_PATH
. APP_SEPARATOR_PS . APP_NOPUBLIC_MODELS_PATH
. APP_SEPARATOR_PS . APP_NOPUBLIC_LOGICS_PATH
. APP_SEPARATOR_PS . APP_NOPUBLIC_FORMS_PATH
. APP_SEPARATOR_PS . APP_NOPUBLIC_HELPER_PATH
. APP_SEPARATOR_PS . APP_NOPUBLIC_APPLICATION_PATH

. APP_SEPARATOR_PS . SYS_NOPUBLIC_LIB_PATH
. APP_SEPARATOR_PS . SYS_NOPUBLIC_MODELS_PATH
. APP_SEPARATOR_PS . SYS_NOPUBLIC_LOGICS_PATH
. APP_SEPARATOR_PS . SYS_NOPUBLIC_FORMS_PATH
. APP_SEPARATOR_PS . SYS_NOPUBLIC_HELPER_PATH
. APP_SEPARATOR_PS . SYS_NOPUBLIC_APPLICATION_PATH

. APP_SEPARATOR_PS . LIB_PATH
. APP_SEPARATOR_PS . LIB_ZEND_PATH
. APP_SEPARATOR_PS . LIB_PEAR_PATH
. APP_SEPARATOR_PS . LIB_SMARTY_PATH

. APP_SEPARATOR_PS . get_include_path()
);

//设置php.ini
ini_set('session.name', 'PHPSESSID');
ini_set('session.auto_start', 0);
//ini_set('session.use_cookies', 0);
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', APP_COOKIE_DOMAIN);

/**
 * 自动加载设置
 */
//function __autoload($className) {}

//加载ZendLoader
require_once 'Common/Zend/Loader.php';

//加载autoLoad
//$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader = Common_Zend_Loader::getInstance();
$autoloader->registerNamespace('Model_');
$autoloader->setFallbackAutoloader(true);

//加载数据配置文件
require_once 'data.inc.php';

//加载公用函数库
Common_Lib::INIT_LIB_FUNC;

?>