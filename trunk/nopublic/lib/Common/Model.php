<?php

abstract class Common_Model extends Common_Sql implements Common_Data {
	
	/**
	 * 扩展这个类的类名前缀
	 * 
	 * @var string
	 */
	const EXTENDS_CLASS_NAME_PREFIX = '';
	
	/**
	 * 扩展这个类的类名后缀
	 *
	 * @var string
	 */
	const EXTENDS_CLASS_NAME_POSTFIX = 'Model';
	
	/**
	 * 与其他表的关联
	 *
	 * @var array
	 */
	protected $_tbRelationships = array();
	
	/**
	 * 数据库名
	 * 
	 * @var string
	 */
	private $_databaseName;
	
	/**
	 * 表名前缀
	 * 
	 * @var string
	 */
	private $_tablePrefix = '';
	
	/**
	 * 表名
	 * 
	 * @var string
	 */
	private $_tableName = '';
	
	/**
	 * 返回添加操作可用的字段列表
	 */
	abstract public function getAddFields();
	
	/**
	 * 返回编辑操作可用的字段列表
	 */
	abstract public function getEditFields();
	
	/**
	 * 构造函数
	 * 
	 * @param string $className class名
	 * @return void
	 */
	public function __construct($className) {
		
		$tableName = strtolower($this->getRealTableName($className));
		
		$this->_tablePrefix = libConfigSearchConfig(self::CONFIG_DB_INDEX, array('database', 'params', 'tbprefix'));
		$this->_databaseName = libConfigSearchConfig(self::CONFIG_DB_INDEX, array('database', 'params', 'dbname'));
		
		$this->_name = $this->_tablePrefix . $tableName;
		$this->_tableName = $this->_databaseName . '.' . $this->_name;
		
		$this->setPrimaryKey($tableName . "Id");

		//设置关联关系的表名
		/*if ( $this->_referenceMap ) {
			
			foreach ( $this->_referenceMap as $key => $value ) {
				
				if ( array_key_exists('refTableName', $value) ) {
					
					$this->_referenceMap[$key]['refTableName'] = $this->_tablePrefix . $value['refTableName'];
				} else {
					
					foreach ( $value as $k => $v ) {
						
						$this->_referenceMap[$key][$k]['refTableName'] = $this->_tablePrefix . $v['refTableName'];
					}
				}
				
			}
		}*/
		
		parent::_setup();
	}
	
	/**
	 * 析构函数
	 * @return void
	 */
	public function __destruct() {}
	
	/**
	 * 取得model在数据库中的表名
	 * 
	 * @return void
	 */
	public function getTableName() {
		
		return $this->_name;
	}
	
	/**
	 * 取得主键
	 *
	 * @return string
	 */
	public function getPrimaryKey() {

		return (is_array($this->_primary) ? $this->_primary[1] : $this->_primary);
	}
	
	/**
	 * 设置主键
	 *
	 * @param string $field
	 * 
	 * @return void
	 */
	public function setPrimaryKey($field) {
		
		$this->_primary = $field;
	}
	
	/**
	 * 取得 数据库名.表名.字段名 这样格式的字段
	 * 
	 * @param string $field
	 * 字段名
	 * 
	 * @return string
	 */
	public function getFullFieldName($field) {
		
		return $this->_tableName . '.' . $field;
	}
	
	/**
	 * 根据model的class名取得真实的表名
	 *
	 * @param string $className
	 * @return string
	 */
	private function getRealTableName($className) {
		
		return substr($className, strlen(self::EXTENDS_CLASS_NAME_PREFIX), strlen(self::EXTENDS_CLASS_NAME_POSTFIX) * -1);
	}
}

?>