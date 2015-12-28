<?php
/**
 * 处理sql语句的类。
 * 这个类不能单独使用
 */
class Common_Sql extends Zend_Db_Table {
	
	public function getSelect() {}
	
	public function getInsert() {}
	
	public function getUpdate() {}
	
	public function getDelete() {}
	
	public function getWhere() {}
	
	public function getSelectFields() {}
}

?>