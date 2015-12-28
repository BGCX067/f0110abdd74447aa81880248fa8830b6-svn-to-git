<?php

class UserLogic extends UserModel {
	
	/**
	 * 注册一个新用户
	 * 
	 * @param string $userName 用户名
	 * @param string $password 用户密码(未md5加密)
	 * @param string $email email地址
	 * @param string $nickname 用户昵称
	 */
	public function register($userName, $password, $email, $nickname = null) {
		
		$result = 0;
		
		is_null($nickname) && $nickname = $userName;

		//查询用户库中是否已存在该用户名或者email地址的用户
	}
	
	/**
	 * 查询用户库中是否已存在当前的用户名或者email地址
	 * 
	 * @param string $email email地址
	 * @param string $userName 用户名
	 * @return boolean 如果存在返回true，否则返回false
	 */
	public function userIsExists($email, $userName) {
		
		$result = true;

		
		
		return $result;
	}
	
	/**
	 * 实现登录用户的认证
	 * 
	 * @param string $authName 用户认证的用户名/email
	 * @param string $authPass 用户认证的密码
	 * @param int $authType 用户认证的类型 1-email登录 2-用户名登录
	 * @param int $crypt 用户密码加密的类型 目前只支持md5加密验证
	 * @return boolean 认证通过返回true，否则返回false
	 */
	public function auth($authName, $authPass, $authType = self::USER_MODEL_AUTH_BY_EMAIL, $crypt = self::USER_MODEL_AUTH_CRYPT) {
		
		$result = false;
		
		if ( self::USER_MODEL_AUTH_CRYPT == $crypt ) {
			
			$authPass = md5($authPass);
		}
		
		if ( self::USER_MODEL_AUTH_BY_EMAIL == $authType ) {
			
			$result = $this->authByEmail($authName, $authPass);
		} elseif ( self::USER_MODEL_AUTH_BY_USERNAME == $authType ) {
			
			$result = $this->authByUserName($authName, $authPass);
		}
		
		$result = (boolean) $result;
		
		return $result;
	}
	
	/**
	 * 根据email和密码进行验证
	 * 
	 * @param string $email email地址
	 * @param string $password 加密后的md5密码
	 * @return boolean 认证通过返回true，否则返回false
	 */
	private function authByEmail($email, $password) {
		
		
	}
	
	/**
	 * 根据用户名和密码进行验证
	 * 
	 * @param string $userName 用户名
	 * @param string $password 加密后的md5密码
	 * @return boolean 认证通过返回true，否则返回false
	 */
	private function authByUserName($userName, $password) {
		
		
	}
	
	
}

?>