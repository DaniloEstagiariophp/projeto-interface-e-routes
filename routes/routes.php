<?php
// ARQUIVO RESPONSÁVEL PELO GERENCIAMENTO DE ROTAS DO SISTEMA
use Slim\App;
use Slim\Http\Response;
use Slim\Http\Request;
/***
 * routes configurations
 */
    $config['displayErrorDetails'] = true;
    $app = new App(['settings' => $config]);
    $app ->get('/','App\Controller\Pages\Home:getHome');
    $app ->get('/home','App\Controller\Pages\Home:getHome');
    $app ->get('/sobre','App\Controller\Pages\About:getAbout');
    $app ->get('/contato','App\Controller\Pages\Contact:getContact');
    $app ->get('/servicos','App\Controller\Pages\Services:getServices');
    //configurações de erros 404
    $app ->get('/{erro}','App\Controller\Pages\Error:getError');
    $app ->get('/{erro}/','App\Controller\Pages\Error:getError');
    $app ->get('/{erro}/{params}','App\Controller\Pages\Error:getError');
    $app ->run();
