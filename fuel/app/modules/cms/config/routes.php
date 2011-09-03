<?php
return array(
	'cms/admin'  => 'cms/admin/cms/index',  // The default route
	'cms/admin/(:any)'=>'cms/admin/cms/$1',
        //'cms/(:segment)'=>'cms/modules/$1',
    '_404_'=>'cms/admin/404'
	
	/**
	 * This is an example of a BASIC named route (used in reverse routing).
	 * The translated route MUST come first, and the 'name' element must come
	 * after it.
	 */
	// 'foo/bar' => array('welcome/foo', 'name' => 'foo'),
);