<?php
require_once __DIR__.'/class_loader.php';
$view = new Application\View\View;
$view->display(__DIR__.'/templates/login.php');