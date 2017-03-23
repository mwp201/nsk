<?php
require_once __DIR__.'/class_loader.php';
$train_number = $start_station = $end_station = $arrival_time = $departure_time = $parking_time = null;
if (!empty($_POST['trainDataUpdate'])) {
    $id = htmlspecialchars(trim($_POST['trainDataUpdate']['train_id']));
    $train_number = htmlspecialchars(trim($_POST['trainDataUpdate']['train_number']));
    $start_station = htmlspecialchars(trim($_POST['trainDataUpdate']['start_station']));
    $end_station = htmlspecialchars(trim($_POST['trainDataUpdate']['end_station']));
    $arrival_time = htmlspecialchars(trim($_POST['trainDataUpdate']['arrival_time']));
    $departure_time = htmlspecialchars(trim($_POST['trainDataUpdate']['departure_time']));
    $parking_time = htmlspecialchars(trim($_POST['trainDataUpdate']['parking_time']));
}
$db = new Application\Models\DB;
if ($db->execute('UPDATE timetable SET train_number = :train_number, start_station = :start_station,
                                       end_station = :end_station, arrival_time = :arrival_time,
                                       departure_time = :departure_time, parking_time = :parking_time
                   WHERE id = :id AND line_delete = :line_delete',
    [':train_number' => $train_number, ':start_station' => $start_station,
     ':end_station' => $end_station, ':arrival_time' => $arrival_time,
     ':departure_time' => $departure_time, ':parking_time' => $parking_time,
     ':id' => $id, ':line_delete' => false])) {
    session_start();
    $_SESSION['user'] = 'admin';
    header('Location: admin_panel.php');
}
