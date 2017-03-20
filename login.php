<?php
//require_once __DIR__.'/classes/View.php';
function __autoload($className) {
    require __DIR__.'/classes/'.$className.'.php';
}
$view = new View;
$view->display(__DIR__.'/templates/login.php');