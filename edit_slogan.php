<?php
//require_once __DIR__.'/classes/DB.php';
function __autoload($className) {
    require __DIR__.'/classes/'.$className.'.php';
}
$slogan = null;
if (!empty($_POST['slogan'])) {
    $slogan = htmlspecialchars(trim($_POST['slogan']));
}
$db = new DB;
$db->query('UPDATE textdata SET slogan =:slogan', [':slogan' => $slogan]);
header('Location: admin_panel.php');
