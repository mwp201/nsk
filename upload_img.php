<?php
require_once __DIR__.'/class_loader.php';
$view = new Application\View\View;
$loadFile = new Application\Models\Uploader($_FILES['user_file']);
if ($loadFile->isUploader()) {
    $loadFile->upload();
    session_start();
    $_SESSION['user'] = 'admin';
    header('Location: admin_panel.php');
} else {
    $view->assign('errorText', $loadFile->errMessage);
    $view->display(__DIR__.'/templates/error.php');
}
