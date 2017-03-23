<?php
require_once __DIR__.'/../class_loader.php';
$db = new Application\Models\DB;
if (!empty($_GET['train'])) {
    $trainNumber = $_GET['train'];
} else {
    $trainNumber = null;
}
$data = $db->query('SELECT id, start_station, end_station, arrival_time, departure_time, parking_time
                    FROM timetable WHERE train_number = :train_number AND line_delete = 0',
                    [':train_number' => $trainNumber]);
echo json_encode($data);

