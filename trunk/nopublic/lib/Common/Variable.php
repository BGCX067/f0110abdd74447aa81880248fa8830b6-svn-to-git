<?php
/**
 * 变量处理类
 */
class Common_Variable {
	
	/**
	 * 更加严格的判断变量是否有值
	 * @param mixed $value 需要判断的变量
	 * @return boolean 如果变量有值，并且不是null、0、false返回true，否则返回false
	 */
	public static function hasValue($value) {
		
		return ($value && !empty($value) && !is_null($value) && isset($value));
	}
}

?>