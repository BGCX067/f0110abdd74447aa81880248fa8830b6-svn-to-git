<?php

class Common_Zend_Controller_Request_Http extends Zend_Controller_Request_Http implements Common_Data {
	
	/**
     * Constructor
     *
     * If a $uri is passed, the object will attempt to populate itself using
     * that information.
     *
     * @param string|Zend_Uri $uri
     * @return void
     * @throws Zend_Controller_Request_Exception when invalid URI passed
     */
	public function __construct($uri = null) {
		
		//重新设置key
		$this->setControllerKey(self::ZEND_CTL_KEY);
		$this->setActionKey(self::ZEND_ACT_KEY);
		$this->setModuleKey(self::ZEND_MOD_KEY);
		
		parent::__construct($uri);
	}
}

?>