<?php
require_once __DIR__.'/class_loader.php';
$db = new Application\Models\DB;
if (!empty($_GET['train'])) {
    $trainNumber = $_GET['train'];
} else {
    $trainNumber = null;
}
$data = $db->query('SELECT start_station, end_station FROM timetable WHERE train_number = :train_number AND line_delete = 0',
           [':train_number' => $trainNumber]);
$data = [$data[0][0],$data[0][1]];
//echo '<pre>';
//print_r($data);
echo json_encode($data);

