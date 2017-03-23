<?php
session_start();
$_SESSION['id_train'] = '';
require_once __DIR__.'/class_loader.php';
$train_number = $start_station = $end_station = null;
if (!empty($_POST['trainData'])) {
    $train_number = htmlspecialchars(trim($_POST['trainData']['train_number']));
    $start_station = htmlspecialchars(trim($_POST['trainData']['start_station']));
    $end_station = htmlspecialchars(trim($_POST['trainData']['end_station']));
}
$db = new Application\Models\DB;
$id = (int)$db->query('SELECT id FROM timetable
                 WHERE train_number = :train_number AND start_station = :start_station
                 AND end_station = :end_station AND line_delete = 0',
    [':train_number' => $train_number,
        ':start_station' => $start_station,
        ':end_station' => $end_station
    ])[0][0];
$_SESSION['id_train'] = $id;
$_SESSION['user'] = 'admin';
header('Location:admin_panel.php');