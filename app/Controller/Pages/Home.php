<?php
namespace App\Controller\Pages;
use App\Controller\Pages\Master;
use App\View\View;
class Home extends Master{
    public static function getHome()
    {
        $content = View::render('pages/home',[
            //code here
        ]);
            return parent::getMasterPages('Dmm-WebSites - Desenvolvimento de sites para (MEI) - Profissional Autonômo',$content);
    }
}
