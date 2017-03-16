<?php
$table = file_get_contents('http://raspisanie24.com/poezda/novosibirsk/');
file_put_contents('rasp.html', $table);


INSERT INTO `timetable`(`train_number`, `start_stantion`,
`end_station`, `arrival_time`, `departure_time`, `parking_time`,
`line_delete`) VALUES ('', '', '', ':', ':', '2 мин.', 'false')
