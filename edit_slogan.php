<?php
require_once __DIR__.'/classes/DB.php';
$slogan = null;
if (!empty($_POST['slogan'])) {
    $slogan = htmlspecialchars(trim($_POST['slogan']));
}
$db = new DB;
$v = $db->execute('SELECT slogan FROM textdata');
var_dump($v);
if ($db->query('UPDATE textdata SET slogan =:slogan', [':slogan' => $slogan])) {
    header('Location: admin_panel.php');
} else {
    echo 'ERROR БЛЯ!!!!!!';
}
