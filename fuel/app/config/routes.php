<?php
return array(
	'_root_'  => 'front/index',  // The default route
	'_404_'   => 'cms/404',    // The main 404 route
	'welcome'=>'front/index',
    'welcome/(:any)'=>'front/$1',
    //'$1'=>'front/$1'
	/**
	 * This is an example of a BASIC named route (used in reverse routing).
	 * The translated route MUST come first, and the 'name' element must come
	 * after it.
	 */
	// 'foo/bar' => array('welcome/foo', 'name' => 'foo'),
);