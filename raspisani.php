<?php
$table = file_get_contents('http://raspisanie24.com/poezda/novosibirsk/');
file_put_contents('rasp.html', $table);

