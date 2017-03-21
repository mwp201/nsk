<?php
require_once __DIR__.'/class_loader.php';
$db = new Application\Models\DB;
$userData = ($db->query('SELECT user_name, user_password FROM users WHERE id = 1', []));
$userNameDb = $userData[0][0];
$userPasswordDb = $userData[0][1];
$userNameForm = $userPasswordForm = null;
if (!empty($_POST['user_name']) && !empty($_POST['password'])) {
    $userNameForm = htmlspecialchars(trim($_POST['user_name']));
    $userPasswordForm = htmlspecialchars(trim($_POST['password']));
}
if (($userNameDb === $userNameForm) && ($userPasswordDb === $userPasswordForm)){
    session_start();
    $_SESSION['user'] = 'admin';
    header('Location:admin_panel.php');
} else {
    session_start();
    $_SESSION['user'] = '';
    session_destroy();
    header('Location:login.php');
}
