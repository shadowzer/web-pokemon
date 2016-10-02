<?php

class Menu
{
    private static $items = array('start.html' => 'Start', 'toplist.html' => 'TopList', 'about.html' => 'About');

    public static function getMenu($pageName) {
        $ans = '<div class="links"><span class="space"></span>';
        foreach (self::$items as $key => $value) {
            if ($pageName == $key)
                $ans .= sprintf("%s%s%s%s%s", '<span class="span"> <a class="linkChosed" href=index.php?page=', $pageName, '>', self::$items[$key], '</a> </span>');
            else
                $ans .= sprintf("%s%s%s%s%s", '<span class="span"> <a class="link" href=index.php?page=', $key, '>', self::$items[$key], '</a> </span>');
        }
        $ans .= '</div>';
        return $ans;
    }
}