<?php

class Common_Smarty extends Smarty {

	/**
     * executes & returns or displays the template results
     *
     * @param string $resource_name
     * @param string $cache_id
     * @param string $compile_id
     * @param boolean $display
     */
	public function fetch($resource_name, $cache_id = null, $compile_id = null, $display = false) {
		
		$resource_name .= $this->{SYS_NOPUBLIC_TPL_EXT_KEY};
		
		parent::fetch($resource_name, $cache_id, $compile_id, $display);
	}
}

?>