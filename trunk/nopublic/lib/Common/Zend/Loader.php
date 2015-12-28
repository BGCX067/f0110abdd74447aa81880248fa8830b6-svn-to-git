<?php

require_once 'Zend/Loader/Autoloader.php';

/**
 * 自定义的自动加载文件类
 *
 */
class Common_Zend_Loader extends Zend_Loader_Autoloader {
	
	private static $_instancePool = array();

	/**
	 * 自动加载类函数
	 */
	protected function _autoload($class) {

		/*
		if ( !array_key_exists($class, self::$_instancePool) ) {
			
			$_instancePool[$class] = null;
		}
		*/
		
		parent::_autoload($class);
	}
}

?>