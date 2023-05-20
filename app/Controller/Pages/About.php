<?php
namespace App\Controller\Pages;
use App\Controller\Pages\Master;
use App\View\View;
class About extends Master{
    public static function getAbout()
    {
        $content = View::render('pages/about',[
            //code here
        ]);
        return parent::getMasterPages('Dmm-WebSites - Desenvolvimento de sites para (MEI) - Profissional Autonômo',$content);
    }
}
