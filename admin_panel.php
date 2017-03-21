<?php
session_start();
require_once __DIR__.'/class_loader.php';
if (!empty($_SESSION['user'])) {
    $view = new Application\View\View;
    $view->display(__DIR__.'/templates/admin_panel.php');
}else {
    $_SESSION['user'] = '';
    session_destroy();
    header('Location:login.php');
}
