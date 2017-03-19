<?php
session_start();
if (!empty($_SESSION['user'])) {
    echo $_SESSION['user'];
    require_once __DIR__.'/classes/View.php';
//require_once __DIR__.'/classes/DB.php';
//$db = new DB;
    $view = new View;
//$view->assign('slogan', $db->query('SELECT slogan FROM textdata', [])[0]['slogan']);
    $view->display(__DIR__.'/templates/admin_panel.php');
} else {
    header('Locatin:login.php');
}
