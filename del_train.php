<?php
require_once __DIR__.'/class_loader.php';
$train_number = $start_station = $end_station = null;
if (!empty($_POST['trainData'])) {
    $train_number = htmlspecialchars(trim($_POST['trainData']['train_number']));
    $start_station = htmlspecialchars(trim($_POST['trainData']['start_station']));
    $end_station = htmlspecialchars(trim($_POST['trainData']['end_station']));
}
$db = new Application\Models\DB;
if ($db->execute('UPDATE timetable SET line_delete = :line_delete WHERE train_number = :train_number AND start_station = :start_station
                  AND end_station = :end_station',
    [':line_delete' => true, ':train_number' => $train_number, ':start_station' => $start_station, ':end_station' => $end_station])) {
    session_start();
    $_SESSION['user'] = 'admin';
    header('Location: admin_panel.php');
}
