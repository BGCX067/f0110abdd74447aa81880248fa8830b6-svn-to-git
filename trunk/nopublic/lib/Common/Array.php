<?php
/**
 * 处理数组的类。
 */
class Common_Array {
	
	/**
	 * 更加严格的判断变量是否是一个数组
	 * @param mixed $value 需要检查的变量
	 * @return boolean 如果是数组并且数组有值，则返回true，否则返回false
	 */
	public static function isArray($value) {
		
		return ($value && is_array($value));
	}
	
	/**
	 * 检查一个key是否存在于数组中
	 * @param string $key 数组的索引
	 * @param array $arra 数组
	 * @return boolean 如果数组key存在并且有值，则返回true，否则返回false
	 */
	public static function arrayKeyExists($key, array $array) {
		
		return (array_key_exists($key, $array) && libVariableHasValue($array[$key]));
	}
}

?>