<?php

/**
 * 
 */
interface Common_Data {
	
	/**
	 * ---------- Zend配置 ----------
	 */
	
	/**
	 * zend framework controller的后缀
	 * 
	 * @var string
	 */
	const ZEND_CTL_KEY = 'ctl';
	
	/**
	 * zend framework action的后缀
	 * 
	 * @var string
	 */
	const ZEND_ACT_KEY = 'act';
	
	/**
	 * zend framework module的后缀
	 * 
	 * @var string
	 */
	const ZEND_MOD_KEY = 'mod';
	
	/**
	 * zend framework controller的后缀
	 * 
	 * @var string
	 */
	const ZEND_CTL_NAME = 'Ctl';
	
	/**
	 * zend framework action的后缀
	 * 
	 * @var string
	 */
	const ZEND_ACT_NAME = 'Act';
	
	/**
	 * zend framework module的后缀
	 * 
	 * @var string
	 */
	const ZEND_MOD_NAME = 'Mod';
	
	/**
	 * zend framework controller的目录名
	 * 
	 * @var string
	 */
	const ZEND_CTL_DIRNAME = 'ctls';
	
	/**
	 * ---------- 环境配置 ----------
	 */
	
	/**
	 * url配置索引
	 * 
	 * @var string
	 */
	const CONFIG_URL_INDEX = 'urlConfig';
	
	/**
	 * 数据库配置索引
	 * 
	 * @var string
	 */
	const CONFIG_DB_INDEX = 'dbConfig';
	
	/**
	 * smarty模板引擎配置索引
	 * 
	 * @var string
	 */
	const CONFIG_TPL_INDEX = 'tplConfig';
	
	/**
	 * ---------- 数据库字段配置 ----------
	 */
	
	/**
	 * 所有字段的字段名
	 * 
	 * @var string
	 */
	const FIELD_NAME_ALLFIELDS = '*';
	
	/**
	 * 记录创建时间的字段名
	 * 
	 * @var string
	 */
	const FIELD_NAME_CREATETIME = 'createTime';
	
	/**
	 * 记录更新时间的字段名
	 *
	 * @var string
	 */
	const FIELD_NAME_UPDATETIME = 'updateTime';
	
	/**
	 * 记录用户名的字段名
	 * 
	 * @var string
	 */
	const FIELD_NAME_USERNAME = 'userName';
	
	/**
	 * 记录用户密码的字段名
	 * 
	 * @var string
	 */
	const FIELD_NAME_PASSWORD = 'password';
	
	/**
	 * 记录用户昵称的字段名
	 * 
	 * @var string
	 */
	const FIELD_NAME_NICKNAME = 'nickName';
	
	/**
	 * 记录用户email的字段名
	 * 
	 * @var string
	 */
	const FIELD_NAME_EMAIL = 'email';
	
	/**
	 * ---------- 用户模块配置 ----------
	 */
	
	/**
	 * 根据email进行登录
	 * 
	 * @var int
	 */
	const USER_MODEL_AUTH_BY_EMAIL = 1;
	
	/**
	 * 根据用户名进行登录
	 * 
	 * @var int
	 */
	const USER_MODEL_AUTH_BY_USERNAME = 2;
	
	/**
	 * 用户密码的加密方式
	 * 
	 * @var string
	 */
	const USER_MODEL_AUTH_CRYPT = 'md5';
}

?>