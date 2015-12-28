<?php

class UserModel extends Common_Model {
	
	public function getAddFields() {
		
		return array('userName', 'nickName', 'password', 'email', 'lastIp');
	}
	
	public function getEditFields() {
		
		return array('password', 'email', 'lastIp');
	}
	
	/**
	 * 构造函数
	 *
	 * @return void
	 */
	public function __construct() {
		
		//以class名来定义表名
		parent::__construct(__CLASS__);
	}
}

?>