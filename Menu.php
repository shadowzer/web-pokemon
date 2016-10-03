<?php

class Menu
{
    private static $items = array('start.html' => 'Start', 'toplist.html' => 'TopList', 'about.html' => 'About');

    public static function getMenu($pageName) {
        $ans = '<div class="links"><span class="space"></span>';
        foreach (self::$items as $key => $value) {
            if ($pageName == $key)
                $ans .= sprintf("<span class='span'> <a class='linkChosed' href=index.php?page=%s>%s</a> </span>", $pageName, $value);
            else
                $ans .= sprintf("<span class='span'> <a class='link' href=index.php?page=%s>%s</a> </span>", $key, $value);
        }
        $ans .= '</div>';
        return $ans;
    }
}