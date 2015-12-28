<?php
/**
 * ---------- Common_Config Functions ----------
 */
/**
 * 根据一个（一组）key取得数组的索引。
 * @param string|array $configKey 取得的数组索引的数组
 * @return null|mixed|array 如果索引存在，则返回对应的值的数组，否则返回null
 * @see Common_Config::getConfigByKey Common_Config::getConfigByArray
 */
function libConfigGetConfig($configKey) {
	
	$result = null;
	
	if ( libVariableHasValue($configKey) ) {
		
		if ( is_array($configKey) ) {
			
			$result = Common_Config::getConfigByArray($configKey);
		} else {
			
			$configKey = (string) $configKey;
			$result = Common_Config::getConfigByKey($configKey);
		}
	}
	
	return $result;
}

/**
 * 根据一组key依次取得数组的索引。
 * @param string|array $configKey 取得的数组索引的数组
 * @return null|mixed|array 如果索引存在，则返回对应的值的数组，否则返回null
 * @see Common_Config::getConfigBySearch
 */
function libConfigSearchConfig($configKey, $keys) {
	
	return Common_Config::getConfigBySearch($configKey, $keys);
}

/**
 * ---------- Common_Array Functions ----------
 */
/**
 * 简便的函数判断更加严格的判断一个变量是否是一个数组
 * @param mixed $value 需要检查的变量
 * @return boolean
 * 如果是数组并且数组有值，则返回true，否则返回false
 * @see Common_Array::isArray
 */
function libArrayIsArray($value) {
	
	return Common_Array::isArray($value);
}

/**
 * 检查一个key是否存在于数组中
 * @param string $key 数组的索引
 * @param array $arra 数组
 * @return boolean 如果数组key存在并且有值，则返回true，否则返回false
 * @see Common_Array::arrayKeyExists
 */
function libArrayKeyExists($key, array $array) {
	
	return Common_Array::arrayKeyExists($value);
}


/**
 * ---------- Common_Variable Functions ----------
 */
/**
 * 更加严格的判断变量是否有值
 * @param mixed $value 需要判断的变量
 * @return boolean 如果变量有值，并且不是null、0、false返回true，否则返回false
 * @see Common_Variable::hasValue
 */
function libVariableHasValue($value) {
	
	return Common_Variable::hasValue($value);
}

/**
 * 提供通用的访问lib的方法
 *
 */
class Common_Lib {
	
	/**
	 * 初始化LIB的函数
	 */
	const INIT_LIB_FUNC = null;
	
	public function __call($name, $args) {}
}

?>