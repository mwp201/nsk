<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Новосибирск Расписание поездов дольнего следования</title>
</head>
<body>
<div class="container">
    <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="search.php">поиск организаций</a></li>
        <li class="menu__item"><a class="menu__link" href="photo_gallery.php">фотогалерея</a></li>
        <li class="menu__item"><a class="menu__link" href="index.php">на главную</a></li>
    </ul>
    <h1 class="inner__title inner__title--small">Расписание поездов дальнего следования</h1>
    <table class="timetables" id="paged">
        <thead class="timetables__header">
        <tr class="timetables__row">
            <th>Номер<br>поезда</th>
            <th>Маршрут поезда</th>
            <th>Время<br>прибытия </th>
            <th>Время<br>отправления </th>
            <th>Время стоянки</th>
        </tr>
        </thead>
        <tbody style="display: none">
         <?php foreach($this->arrData['timetable'] as $item) : ;?>
            <tr>
                <td><?php echo $item['train_number']; ?></td>
                <td><?php echo $item['start_station'].' - '.$item['end_station'];?></td>
                <td><?php echo $item['arrival_time']; ?></td>
                <td><?php echo $item['departure_time']; ?></td>
                <td><?php echo $item['parking_time']; ?></td>
            </tr>
         <?php endforeach; ?>
        </tbody>
            <tfoot>
            <tr>
                <td colspan="5"></td>
            </tr>
            </tfoot>
    </table>
    <script src="js/pagedTable.js"></script>
    <script>
        pagedTable(
              document.getElementById("paged"),12,
              {
                toStart: "START",
                toPrev: "PREV",
                toNext: "NEXT",
                toEnd: "END",
                linkPerPage: 5,
                linkTag: "li",
                template: "<span class='summary'>Страница: %p из %c (всего строк: %r)</span>" +
                "<ul class='page-nav'>%n</ul>",
                onAfterInit: function (table) {
                   table.tBodies[0].style.display = "";
                }
              }
        );
    </script>
</div>
</body>
</html>