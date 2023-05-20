<?php
namespace App\Controller\Pages;
use App\Controller\Pages\Master;
use App\View\View;
class Error extends Master{
    public static function getError(){
        $content = View::render('pages/erro',[

        ]);
        return parent::getMasterPages('Error 404: page not found',$content);
    }
}
