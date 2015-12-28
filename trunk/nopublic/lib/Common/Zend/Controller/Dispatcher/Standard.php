<?php

class Common_Zend_Controller_Dispatcher_Standard extends Zend_Controller_Dispatcher_Standard implements Common_Data {
	
	/**
     * Formats a string into a controller name.  This is used to take a raw
     * controller name, such as one stored inside a Zend_Controller_Request_Abstract
     * object, and reformat it to a proper class name that a class extending
     * Zend_Controller_Action would use.
     *
     * @param string $unformatted
     * @return string
     */
    public function formatControllerName($unformatted) {
    	
        return ucfirst($this->_formatName($unformatted)) . self::ZEND_CTL_KEY;
    }

    /**
     * Formats a string into an action name.  This is used to take a raw
     * action name, such as one that would be stored inside a Zend_Controller_Request_Abstract
     * object, and reformat into a proper method name that would be found
     * inside a class extending Zend_Controller_Action.
     *
     * @param string $unformatted
     * @return string
     */
    public function formatActionName($unformatted) {
    	
        $formatted = $this->_formatName($unformatted, true);
        return strtolower(substr($formatted, 0, 1)) . substr($formatted, 1) . self::ZEND_ACT_NAME;
    }
}

?>