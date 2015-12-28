<?php

class PassPort_LoginCtl extends Common_Zend_Controller_Action {
	
	/**
	 * 登录操作
	 * 
	 * @return void
	 */
	public function loginAct() {

		$this->view->assign('welcome', '欢迎来到我很闲。');
		$this->view->display($this->actName);
	}
}

?>