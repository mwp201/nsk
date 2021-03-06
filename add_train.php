<?php
require_once __DIR__.'/class_loader.php';
$train_number = $start_station = $end_station = $arrival_time = $departure_time = $parking_time = null;
if (!empty($_POST['trainData'])) {
    $train_number = htmlspecialchars(trim($_POST['trainData']['train_number']));
    $start_station = htmlspecialchars(trim($_POST['trainData']['start_station']));
    $end_station = htmlspecialchars(trim($_POST['trainData']['end_station']));
    $arrival_time = htmlspecialchars(trim($_POST['trainData']['arrival_time']));
    $departure_time = htmlspecialchars(trim($_POST['trainData']['departure_time']));
    $parking_time = htmlspecialchars(trim($_POST['trainData']['parking_time']));
}
$db = new Application\Models\DB;
if ($db->execute('INSERT INTO timetable (train_number, start_station, end_station,
                              arrival_time, departure_time, parking_time)
                   VALUES(:train_number, :start_station, :end_station,
                         :arrival_time, :departure_time, :parking_time)',
    [':train_number' => $train_number, ':start_station' => $start_station,
        ':end_station' => $end_station, ':arrival_time' => $arrival_time,
        ':departure_time' => $departure_time, ':parking_time' => $parking_time])) {
    session_start();
    $_SESSION['user'] = 'admin';
    header('Location: admin_panel.php');
}
