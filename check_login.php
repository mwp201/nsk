<?php
/*
 * возможно этот файл не понадобится
function __autoload($className) {
    require __DIR__.'/classes/'.$className.'.php';
}
$db = new DB;
//$view = new View;
$userData = ($db->query('SELECT user_name, user_password FROM users WHERE id = 1', []));
$userNameDb = $userData[0][0];
$userPasswordDb = $userData[0][1];
$userNameForm = $userPasswordForm = null;
if (!empty($_POST['user_name']) && !empty($_POST['password'])) {
    $userNameForm = htmlspecialchars(trim($_POST['user_name']));
    $userPasswordForm = htmlspecialchars(trim($_POST['password']));
}
if (($userNameDb === $userNameForm) && ($userPasswordDb === $userPasswordForm)){
     $view = new View;
    $view->display(__DIR__.'/templates/admin_panel.php');
} else {
    header('Location:login.php');
}
*/