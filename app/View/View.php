<?php
//ARQUIVO RESPONSÁVEL PELO GERENCIAMENTO DE INTERFACES ENTRE O NAVEGADOR E O SERVIDOR
namespace App\View;

class View{
    private static function getContentView($views)
    {
        $file = __DIR__.'/../../public_html/views/'.$views.'.html';
            return file_exists($file) ? file_get_contents($file) : 'Erro';
    }
    public static function render($views, $vars = [])
    {
        $contentViews = self::getContentView($views);
        $key = array_keys($vars);
        $key = array_map(function($item){
            return '{{'.$item.'}}';
        },$key);
            return str_replace($key,array_values($vars),$contentViews);
    }
}
