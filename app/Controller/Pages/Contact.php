<?php
namespace App\Controller\Pages;
use App\Controller\Pages\Master;
use App\View\View;
class Contact extends Master{
    public static function getContact()
    {
        $content = View::render('pages/contact',[
            //code here
        ]);
        return parent::getMasterPages('Dmm-WebSites - Desenvolvimento de sites para (MEI) - Profissional Autonômo',$content);
    }
}
