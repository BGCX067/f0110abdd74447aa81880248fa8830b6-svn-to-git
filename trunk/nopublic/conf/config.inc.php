<?php
/*
 * 以下不可修改
 */

!empty($_SERVER["REDIRECT_URL"]) && $_SERVER["REQUEST_URI"] = $_SERVER["REDIRECT_URL"];

//当前时间
define('APP_CURRENT_TIME', time());

//目录分割符号
define('APP_SEPARATOR_DS', DIRECTORY_SEPARATOR);
define('DS', DIRECTORY_SEPARATOR);

//include_path分割符号
define('APP_SEPARATOR_PS', PATH_SEPARATOR);
define('PS', PATH_SEPARATOR);

//url目录分割符号
define('APP_SEPARATOR_US', '/');
define('US', '/');

//定义服务器的操作系统
define('APP_SERVER_TYPE', 'WIN' === strtoupper(substr(PHP_OS, 0, 3)) ? 'WIN' : 'NUX');
define('APP_SERVER_IS_WIN', 'WIN' === APP_SERVER_TYPE ? true : false);
define('APP_SERVER_IS_NUX', !APP_SERVER_IS_WIN);

//定义cookie作用域
define('APP_COOKIE_DOMAIN', '.' . APP_DOMAIN_NAME);

//lib框架库路径
define('LIB_PATH', SYS_BASE_PATH . APP_SEPARATOR_DS . 'lib');

//zend框架路径
define('LIB_ZEND_PATH', LIB_PATH);

//Pear路径
define('LIB_PEAR_PATH', LIB_PATH . APP_SEPARATOR_DS . 'Pear');

//Smarty路径
define('LIB_SMARTY_PATH', LIB_PATH . APP_SEPARATOR_DS . 'Smarty');

//上传文件目录
define('APP_UPLOAD_PATH', SYS_BASE_PATH . APP_SEPARATOR_DS . 'images/uploads');

//不可对外公开目录路径
define('SYS_NOPUBLIC_PATH', SYS_BASE_PATH . APP_SEPARATOR_DS . 'nopublic');

//lib根目录
define('SYS_NOPUBLIC_LIB_PATH', SYS_NOPUBLIC_PATH . APP_SEPARATOR_DS . 'lib');

//conf根目录
define('SYS_NOPUBLIC_CONF_PATH', SYS_NOPUBLIC_PATH . APP_SEPARATOR_DS . 'conf');

//application根目录
define('SYS_NOPUBLIC_APPLICATION_PATH', SYS_NOPUBLIC_PATH . APP_SEPARATOR_DS . 'app');

//全局的modules目录
define('SYS_NOPUBLIC_MODULES_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'modules');

//全局的controllers目录
define('SYS_NOPUBLIC_CONTROLLERS_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'ctls');

//全局的models目录
define('SYS_NOPUBLIC_MODELS_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'models');

//全局的logics目录
define('SYS_NOPUBLIC_LOGICS_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'logics');

//全局的forms目录
define('SYS_NOPUBLIC_FORMS_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'forms');

//全局的views目录
define('SYS_NOPUBLIC_VIEWS_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'views');

//全局的模板目录
define('SYS_NOPUBLIC_HTML_PATH', SYS_NOPUBLIC_VIEWS_PATH . APP_SEPARATOR_DS . 'html');

//全局的模板文件目录
define('SYS_NOPUBLIC_TPL_HTML_PATH', SYS_NOPUBLIC_VIEWS_PATH . APP_SEPARATOR_DS . 'html');
//全局的模板编译目录
define('SYS_NOPUBLIC_TPL_COMPILE_PATH', SYS_NOPUBLIC_VIEWS_PATH . APP_SEPARATOR_DS . 'compile');
//全局的模板配置目录
define('SYS_NOPUBLIC_TPL_CONFIG_PATH', SYS_NOPUBLIC_VIEWS_PATH . APP_SEPARATOR_DS . 'config');
//全局的模板配置目录
define('SYS_NOPUBLIC_TPL_CACHE_PATH', SYS_NOPUBLIC_VIEWS_PATH . APP_SEPARATOR_DS . 'cache');
//全局的模板文件扩展名的配置索引key
define('SYS_NOPUBLIC_TPL_EXT_KEY', 'template_ext_name');
//全局的模板文件扩展名
define('SYS_NOPUBLIC_TPL_EXT_VALUE', '.html');

//全局的helper目录
define('SYS_NOPUBLIC_HELPER_PATH', SYS_NOPUBLIC_VIEWS_PATH . APP_SEPARATOR_DS . 'helper');
define('SYS_NOPUBLIC_HELPER_PREFIX', 'My_View_Helper');

//全局的cache目录
define('SYS_NOPUBLIC_CACHE_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'Cache');

//全局的layouts目录
define('SYS_NOPUBLIC_LAYOUTS_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'layouts');

//语言翻译目录
define('SYS_NOPUBLIC_TRANSLATE_PATH', SYS_NOPUBLIC_APPLICATION_PATH . APP_SEPARATOR_DS . 'languages');

//form提示信息翻译目录
define('APP_NOPUBLIC_G_TRANSLATE_FORM_FILE', SYS_NOPUBLIC_TRANSLATE_PATH . APP_SEPARATOR_DS . 'simpleChinese.php');

?>