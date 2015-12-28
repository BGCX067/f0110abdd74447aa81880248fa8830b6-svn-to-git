<?php

class Common_Zend_Controller_Action extends Zend_Controller_Action implements Common_Data {
	
	/**
	 * 控制器捕获的请求对象
	 * 
	 * @var Zend_Controller_Request_Abstract
	 */
	protected $request = null;
	
	/**
	 * 控制器捕获的响应对象
	 * 
	 * @var Zend_Controller_Response_Abstract
	 */
	protected $response = null;
	
	/**
	 * 当前获取modules的key
	 * 
	 * @var string
	 */
	protected $modKey;
	
	/**
	 * 当前的modules的名字
	 * 
	 * @var string
	 */
	protected $modName;
	
	/**
	 * 当前获取controller的key
	 * 
	 * @var string
	 */
	protected $ctlKey;
	
	/**
	 * 当前的controller的名字
	 * 
	 * @var string
	 */
	protected $ctlName;
	
	/**
	 * 当前获取action的key
	 * 
	 * @var string
	 */
	protected $actKey;
	
	/**
	 * 当前的action的名字
	 * 
	 * @var string
	 */
	protected $actName;
	
	/**
	 * 初始化
	 * 
	 * @return void
	 */
	public function init() {
		
		//request和response对象获取
		$this->request = $this->getRequest();
		$this->response = $this->getResponse();
		
		$this->modKey = $this->request->getModuleKey();
		$this->modName = $this->request->getModuleName();
		
		$this->ctlKey = $this->request->getControllerKey();
		$this->ctlName = $this->request->getControllerName();
		
		$this->actKey = $this->request->getActionKey();
		$this->actName = $this->request->getActionName();
		
		//smarty模板设置
		$this->view = Common_View::getInstance();

		//重新设置模板目录
		$_viewBaseDir = implode(DS, array(APP_NOPUBLIC_MODULES_PATH, $this->modName, 'views'));
		$params = array('template_dir' => $_viewBaseDir . DS . 'html',
						'compile_dir' => $_viewBaseDir . DS . 'compile',
						'cache_dir' => $_viewBaseDir . DS . 'cache');
		$this->view->setViewParams($params);
		unset($_viewBaseDir);
	}
	
	/**
	 * 在动作由 分发器 分发前被调用。
	 * 该回调方法允许代理或者过滤行为。
	 * 通过修改请求和重设分发标志位（利用 Zend_Controller_Request_Abstract::setDispatched(false) ）当前动作可以跳过或者被替换。
	 * 
	 * @return void
	 */
	public function preDispatch() {}
	
	/**
	 * 在动作由 分发器 分发后被调用。
	 * 该回调方法允许代理或者过滤行为。
	 * 通过修改请求和重设分发标志位（利用 Zend_Controller_Request_Abstract::setDispatched(false) ）可以指定新动作进行分发。
	 * 
	 * @return void
	 */
	public function postDispatch() {}
	
	/**
	 * 默认的action
	 * 
	 * @return void
	 */
	public function indexAct() {}
	
}

?>