<?php

class IndexCtl extends Common_Zend_Controller_Action {
	
	public function indexAct() {

		$this->view->assign('welcome', '欢迎来到我很闲。');
		$this->view->display('index');
	}
}

?>