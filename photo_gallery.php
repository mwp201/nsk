<?php
function __autoload($className) {
require __DIR__.'/classes/'.$className.'.php';
}
$arrImg = scandir(__DIR__.'/uploads');
foreach ($arrImg as $key => &$value) {
    if($value == '.' || $value == '..') unset($arrImg[$key]);
}
$view = new View;
$view->assign('arrImg', $arrImg);
$view->display(__DIR__.'/templates/photo_gallery.php');
