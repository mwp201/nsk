<?php //TODO no work
/*
require_once __DIR__.'/classes/DB.php';
$train_number = $start_station = $end_station = $arrival_time = $departure_time = $parking_time = null;
if (!empty($_POST['trainData'])) {
    $train_number = htmlspecialchars(trim($_POST['trainData']['train_number']));
    $start_station = htmlspecialchars(trim($_POST['trainData']['start_station']));
    $end_station = htmlspecialchars(trim($_POST['trainData']['end_station']));
    $arrival_time = htmlspecialchars(trim($_POST['trainData']['arrival_time']));
    $departure_time = htmlspecialchars(trim($_POST['trainData']['departure_time']));
    $parking_time = htmlspecialchars(trim($_POST['trainData']['parking_time']));
}
$db = new DB;
$id = (int)$db->query('SELECT id FROM timetable
                 WHERE train_number = :train_number AND start_station = :start_station
                 AND end_station = :end_station AND line_delete = 0',
                 [':train_number' => $train_number,
                  ':start_station' => $start_station,
                  ':end_station' => $end_station
                 ])[0][0];

if ($db->execute('UPDATE timetable SET train_number = :train_number, start_station = :start_station,
                                       end_station = :end_station, arrival_time = :arrival_time,
                                       departure_time = :departure_time, parking_time = :parking_time
                   WHERE id = $id AND line_delete = 0',
    [':train_number' => $train_number, ':start_station' => $start_station,
     ':end_station' => $end_station, ':arrival_time' => $arrival_time,
     ':departure_time' => $departure_time, ':parking_time' => $parking_time])) {
    header('Location: admin_panel.php');
}*/
//'UPDATE timetable SET line_delete = true WHERE train_number = :train_number',