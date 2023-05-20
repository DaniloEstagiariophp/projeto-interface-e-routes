<?php
namespace App\Controller\Pages;
use App\Controller\Pages\Master;
use App\View\View;
class Services extends Master{
    public static function getServices()
    {
        $content = View::render('pages/services',[
            //code here
        ]);
        return parent::getMasterPages('Dmm-WebSites - Desenvolvimento de sites para (MEI) - Profissional Autonômo',$content);
    }
}
