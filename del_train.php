<?php
require_once __DIR__.'/classes/DB.php';
$train_number = null;
if (!empty($_POST['trainData'])) {
    $train_number = htmlspecialchars(trim($_POST['trainData']['train_number']));
    $start_station = htmlspecialchars(trim($_POST['trainData']['start_station']));
    $end_station = htmlspecialchars(trim($_POST['trainData']['end_station']));
    $arrival_time = htmlspecialchars(trim($_POST['trainData']['arrival_time']));
    $departure_time = htmlspecialchars(trim($_POST['trainData']['departure_time']));
    $parking_time = htmlspecialchars(trim($_POST['trainData']['parking_time']));
}
$db = new DB;
if ($db->execute('UPDATE timetable SET line_delete = true WHERE train_number = :train_number',
    [':train_number' => $train_number])) {
    header('Location: admin_panel.php');
}