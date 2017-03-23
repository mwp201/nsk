<?php
require_once __DIR__.'/class_loader.php';
$slogan = null;
if (!empty($_POST['slogan'])) {
    $slogan = htmlspecialchars(trim($_POST['slogan']));
}
$db = new Application\Models\DB;
if ($db->execute('UPDATE textdata SET slogan =:slogan', [':slogan' => $slogan])) {
    session_start();
    $_SESSION['user'] = 'admin';
    header('Location: admin_panel.php');
}

