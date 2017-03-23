<?php
require_once __DIR__.'/../class_loader.php';
$db = new Application\Models\DB;
if (!empty($_GET['train'])) {
    $trainNumber = $_GET['train'];
} else {
    $trainNumber = null;
}
$data = $db->query('SELECT id FROM timetable
                    WHERE train_number = :train_number AND line_delete = 0',
                   [':train_number' => $trainNumber]);
if (@$data[0][0]) {
    $train = true;
} else {
    $train = false;
}
echo $train;