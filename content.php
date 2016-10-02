<?php

class Content
{
    private static $pages = array(1 => 'start.html', 2 => 'toplist.html', 3 => 'about.html');
	
	public static function getPageContent($pageName) {
		if ($pageName == "")
			return file_get_contents('./assets/' . 'mainPage.html');
		else {
			foreach (self::$pages as $key => $value) {
				if ($pageName == $value)
					return file_get_contents('./assets/' . $value);
			}
			return file_get_contents('./assets/' . 'mainPage.html');
		}
	}
}