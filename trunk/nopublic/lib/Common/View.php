<?php

class Common_View extends Common_Zend_View implements Common_Data {

	/**
	 * return a new view
	 * 
	 * @return Common_View
	 */
	public static function getInstance() {
		
		return new self(null, libConfigGetConfig(self::CONFIG_TPL_INDEX));
	}
}

?>