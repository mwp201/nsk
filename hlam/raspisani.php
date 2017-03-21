<?php
//$table = file_get_contents('http://raspisanie24.com/poezda/novosibirsk/');
//file_put_contents('rasp.html', $table);



$data1 = array("data" =>
    [
        ["456456456","First Term","2016-09-26","J.H.S 1","ENGLISH LANGUAGE","CLASS WORK","20"],
        ["Janet Andor","First Term","2016-09-26","J.H.S 1","ENGLISH LANGUAGE","CLASS WORK","20"],
        ["Janet Andor","First Term","2016-09-26","J.H.S 1","ENGLISH LANGUAGE","CLASS WORK","20"],
        ["Janet Andor","First Term","2016-09-26","J.H.S 1","ENGLISH LANGUAGE","CLASS WORK","20"],
        ["Janet Andor","First Term","2016-09-26","J.H.S 1","ENGLISH LANGUAGE","CLASS WORK","20"]

    ]);

//echo '<pre>';
//var_dump($data1);

$arrData1 = ['res1', 'res2', 'res3', 'res4', 'res5'];
$arrData2 = ['a6', 'a7', 'a8', 'a9', 'a10'];

$data=[];
//for ($i=0; $i < 5; $i++){
    //$data['data'][$i] = [$i,$arrData1[$i],$arrData2[$i]];
//}
foreach ($arrData1 as $key => $value){
    $data['data'][$key] = [$key,$arrData1[$key],$arrData2[$key]];
}
echo '<pre>';
print_r($data);


<div class="main-content">
   <div class="container">
       <ul class="menu">
           <li class="menu__item"><a class="menu__link" href="search.php">поиск организаций</a></li>
           <li class="menu__item"><a class="menu__link" href="index.php">на главную</a></li>
           <li class="menu__item"><a class="menu__link" href="train_timetables.php">расписание поездов</a></li>
       </ul>
       <h1 class="inner__title">фотогалерея</h1>
       <div class="photo">
           <?php foreach ($this->arrData['arrImg'] as $img) : ?>
    <a href="<?php echo '/../uploads/'.$img; ?>" class="photo__item"><img src="<?php echo '/../uploads/'.$img; ?>"</a>
<?php endforeach; ?>
</div>
</div>
</div>

<div class="main-content">
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