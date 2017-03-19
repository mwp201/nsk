<?php
require_once __DIR__.'/classes/View.php';
require_once __DIR__.'/classes/DB.php';
$db = new DB;
$view = new View;
$view->assign('timetable', $db->query('SELECT train_number, start_station, end_station,
                                              arrival_time, departure_time, parking_time
                                       FROM timetable
                                       WHERE line_delete = 0', []));
$view->display(__DIR__.'/templates/train_timetables.php');
