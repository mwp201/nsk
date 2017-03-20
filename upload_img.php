<?php
function __autoload($className) {
    require __DIR__.'/classes/'.$className.'.php';
}
$view = new View;
$loadFile = new Uploader($_FILES['user_file']);
if ($loadFile->isUploader()) {
    $loadFile->upload();
    header('Location: admin_panel.php');
} else {
    $view->assign('errorText', $loadFile->errMessage);
    $view->display(__DIR__.'/templates/error.php');
}
