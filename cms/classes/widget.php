<?php
namespace Cms;
class Widget{
    public static function get($path)
	{
		return \Request::factory('cms/'.$path, false)->execute();
	}
}
?>
