<?php

return array(
	'navigation/admin'  => 'navigation/admin/navigation/index',  // The default route
	'navigation/admin/(:any)'=>'navigation/admin/navigation/$1',
    '_404_'=>'navigation/admin/404'
	
	/**
	 * This is an example of a BASIC named route (used in reverse routing).
	 * The translated route MUST come first, and the 'name' element must come
	 * after it.
	 */
	// 'foo/bar' => array('welcome/foo', 'name' => 'foo'),
);
?>