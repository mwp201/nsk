<?php
session_start();
session_destroy();
require_once __DIR__.'/class_loader.php';
$db = new Application\Models\DB;
$view = new Application\View\View;
$view->assign('slogan', $db->query('SELECT slogan FROM textdata', [])[0]['slogan']);
$view->display(__DIR__.'/templates/index.php');

