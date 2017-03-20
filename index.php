<?php
require_once __DIR__.'/class_loader.php';

//require_once __DIR__.'/classes/DB.php';
/*
function __autoload($className) {
    $path = str_replace('\\', '/', $className);
    require __DIR__.'/'.$path.'.php';
}*/
$db = new Application\Models\DB;
$view = new Application\View\View;
$view->assign('slogan', $db->query('SELECT slogan FROM textdata', [])[0]['slogan']);
$view->display(__DIR__.'/templates/index.php');
