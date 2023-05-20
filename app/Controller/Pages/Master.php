<?php
namespace App\Controller\Pages;
use App\View\View;
abstract class Master{
    private static function getHeader()
    {
        return View::render('pages/includes/header/header');
    }
    private static function getFooter()
    {
        return View::render('pages/includes/footer/footer');
    }
    public static function getMasterPages($title, $content)
    {
        $content = View::render('pages/master',[
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
        return $content;
    }
}
