<?php
session_start();
session_destroy();
require_once __DIR__.'/class_loader.php';
$db = new Application\Models\DB;
$view = new Application\View\View;
$view->assign('timetable', $db->query('SELECT train_number, start_station, end_station,
                                              arrival_time, departure_time, parking_time
                                       FROM timetable
                                       WHERE line_delete = 0', []));
$view->display(__DIR__.'/templates/train_timetables.php');
