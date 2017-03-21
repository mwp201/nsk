<?php
session_start();
session_destroy();
require_once __DIR__.'/class_loader.php';
$arrImg = scandir(__DIR__.'/uploads');
foreach ($arrImg as $key => &$value) {
    if($value == '.' || $value == '..') unset($arrImg[$key]);
}
$view = new Application\View\View;
$view->assign('arrImg', $arrImg);
$view->display(__DIR__.'/templates/photo_gallery.php');
