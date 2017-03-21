<?php
require_once __DIR__.'/class_loader.php';
$slogan = null;
if (!empty($_POST['slogan'])) {
    $slogan = htmlspecialchars(trim($_POST['slogan']));
}
$db = new Application\Models\DB;
$db->query('UPDATE textdata SET slogan =:slogan', [':slogan' => $slogan]);
header('Location: admin_panel.php');
