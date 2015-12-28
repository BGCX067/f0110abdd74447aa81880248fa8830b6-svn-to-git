<?php

/**
 * 获得配置的类
 *
 */
class Common_Config {
	
	/**
	 * $GLOBALS数组中记录key的索引
	 */
	const GLOBAL_CONFIG_KEY = 'config';
	
	const SHORT_GCK = self::GLOBAL_CONFIG_KEY;
	
	/**
	 * 根据一个key取得数组的索引。
	 * @param string $key 取得的数组索引
	 * @return null|mixed 如果索引存在，则返回对应的值，否则返回null
	 */
	public function getConfigByKey($key) {
		
		return array_key_exists($key, $GLOBALS[self::SHORT_GCK]) ? $GLOBALS[self::SHORT_GCK][$key] : null;
	}
	
	/**
	 * 根据一组key取得数组的索引。
	 * @param array $key 取得的数组索引的数组
	 * @return null|array
	 * 如果索引存在，则返回对应的值的数组，否则返回null
	 */
	public function getConfigByArray(array $keys) {
		
		$result = null;
		
		if ( libArrayIsArray($keys) ) {
			
			$result = array();
			
			foreach ( $keys as $key ) {
				
				$result[$key] = self::getConfigByKey($key);
			}
		}
		
		return $result;
	}
	
	/**
	 * 根据一组key依次取得数组的索引。
	 * @param array $key 取得的数组索引的数组
	 * @return null|array
	 * 如果索引存在，则返回对应的值的数组，否则返回null
	 */
	public function getConfigBySearch($configKey, array $keys) {
		
		$result = null;
		
		$result = self::getConfigByKey($configKey);
		
		if ( libArrayIsArray($result) && libArrayIsArray($keys) ) {
			
			foreach ( $keys as $key ) {
				
				if ( array_key_exists($key, $result) ) {
					
					$result = $result[$key];
				} else {
					
					break;
				}
			}
		}
		
		return $result;
	}
}

?>