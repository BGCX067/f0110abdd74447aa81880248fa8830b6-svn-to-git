<?php

header("Content-Type: text/html; charset=utf-8");

!defined('APP_PATH') && define('APP_PATH', dirname(__FILE__));

//加载公共文件
require_once APP_PATH . './nopublic/conf/app.inc.php';

//数据库设置
$_dbConfig = new Zend_Config(libConfigGetConfig(Common_Data::CONFIG_DB_INDEX));
$dbAdapter=Zend_Db::factory($_dbConfig->database->adapter, $_dbConfig->database->params);
Zend_Db_Table::setDefaultAdapter($dbAdapter);

//注册数据库适配器到注册表中
Zend_Registry::set('dbAdapter', $dbAdapter);
$registry = Zend_Registry::getInstance();
$registry['dbConfig'] = $_dbConfig;//注册配置到注册表中
unset($_dbConfig);

//前端控制器
$frontController = Zend_Controller_Front::getInstance();
$frontController
				->setBaseUrl('/')
				->setRequest(new Common_Zend_Controller_Request_Http())
				->setDispatcher(new Common_Zend_Controller_Dispatcher_Standard())
				
				->throwExceptions(true)	//抛弃错误
				
				//->setParam('useDefaultControllerAlways', true)
				->setParam('noViewRenderer',true)	//开始使用smarty
				
				->setModuleControllerDirectoryName(Common_Data::ZEND_CTL_DIRNAME)
				->addModuleDirectory(APP_NOPUBLIC_MODULES_PATH)
				//->setParam('useDefaultControllerAlways', false)
				//->setControllerDirectory(APP_NOPUBLIC_CONTROLLERS_PATH)//设置控制器目录
				;

Zend_Registry::set('front',$frontController);//注册前端控制器（入口文件）
$frontController->dispatch();

?>