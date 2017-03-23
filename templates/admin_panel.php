<?php
if(!empty($_SESSION['id_train'])) {
    $id = $_SESSION['id_train'];
} else {
    $id = null;
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Панель управления</title>
    <script src="js/ajax.js"></script>
</head>
<body>
<div class="wrapper-admin-panel">
    <section class="main-content">
        <header class="main-header">
            <div class="container">
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link admin-panel__link" href="photo_gallery.php">фотогалерея</a></li>
                    <li class="menu__item"><a class="menu__link admin-panel__link" href="index.php">на главную</a></li>
                    <li class="menu__item"><a class="menu__link admin-panel__link" href="train_timetables.php">расписание поездов</a></li>
                    <li class="menu__item"><a class="menu__link admin-panel__link" href="logout.php">выход</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <h2 class="admin-panel__title">Панель управления</h2>
            <div class="row">
                <form action="/upload_img.php"
                      method="post" enctype="multipart/form-data" class="admin-panel__photo">
                    <fieldset>
                        <legend>Добавить фото в  фотогалерею</legend>
                        <input type="file" name="user_file">
                        <input type="submit" value="добавить">
                    </fieldset>
                </form>
                <form action="/edit_slogan.php" class="admin-panel__slogan" method="post">
                    <fieldset>
                        <legend>Изменить слоган</legend>
                        <input type="text" name="slogan" id="slogan" autofocus>
                        <input type="submit" value="изменить">
                    </fieldset>
                </form>
            </div>
            <div class="row">
                <form class="admin-panel__train" action="/add_train.php" id="form_insert">
                    <fieldset>
                        <legend>Добавить новый поезд</legend>
                        <div class="admin-panel__train-row">
                            <div class="admin-panel__train-col">
                                <label for="train_number">Номер поезда</label>
                                <input type="text" name="trainData[train_number]" id="train_number_insert" placeholder="Номер и литера поезда" onchange="checkTrainNumber();">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="start_station">Станция отправления</label>
                                <input type="text" name="trainData[start_station]" id="">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="end_station">Станция прибытия</label>
                                <input type="text" name="trainData[end_station]" id="" placeholder="">
                            </div>
                        </div>
                        <div class="admin-panel__train-row">
                            <div class="admin-panel__train-col">
                                <label for="arrival_time">Время прибытия</label>
                                <input type="text" name="trainData[arrival_time]" id="" value="00:00" placeholder="в формате 00:00">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="departure_time">Время отправления</label>
                                <input type="text" name="trainData[departure_time]" id="" value="00:00" placeholder="в формате 00:00">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="parking_time">Время стоянки</label>
                                <input type="text" name="trainData[parking_time]" id=""  value="мин." placeholder="в формате 1 час. 20 мин.">
                            </div>
                        </div>
                        <div class="admin-panel__train-row">
                            <input type="submit" formmethod="post" formaction="/add_train.php" value="добавить">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="row">
                <form class="admin-panel__train" id="fff">
                    <fieldset>
                        <legend>Удалить поезд</legend>
                        <div class="admin-panel__train-row">
                            <div class="admin-panel__train-col">
                                <label for="train_number">Номер поезда</label>
                                <input type="text" name="trainData[train_number]"  id="train_number" placeholder="Номер и литера поезда" onchange="getTrainData();">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="start_station">Станция отправления</label>
                                <input type="text" name="trainData[start_station]" id="start_station">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="end_station">Станция прибытия</label>
                                <input type="text" name="trainData[end_station]" id="end_station">
                            </div>
                        </div>
                        <div class="admin-panel__train-row">
                             <input type="submit" formmethod="post" formaction="/del_train.php" value="удалить">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="row">
                <form class="admin-panel__train" action="/edit_train.php" method="post">
                    <fieldset>
                        <legend>Редактировать расписание поезда</legend>
                        <div class="admin-panel__train-row">
                            <div class="admin-panel__train-col">
                                <label for="train_number">Идентификатор поезда</label>
                                <input type="text" name="trainDataUpdate[train_id]" id="train_id_update" readonly>
                            </div>
                        </div>
                        <div class="admin-panel__train-row">
                            <div class="admin-panel__train-col">
                                <label for="train_number">Номер поезда</label>
                                <input type="text" name="trainDataUpdate[train_number]" placeholder="Номер и литера поезда" id="train_number_update">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="start_station">Станция отправления</label>
                                <input type="text" name="trainDataUpdate[start_station]" id="start_station_update">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="end_station">Станция прибытия</label>
                                <input type="text" name="trainDataUpdate[end_station]" id="end_station_update">
                            </div>
                        </div>
                        <div class="admin-panel__train-row">
                            <div class="admin-panel__train-col">
                                <label for="arrival_time">Время прибытия</label>
                                <input type="text" name="trainDataUpdate[arrival_time]" placeholder="в формате 00:00" id="arrival_time_update">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="departure_time">Время отправления</label>
                                <input type="text" name="trainDataUpdate[departure_time]" placeholder="в формате 00:00" id="departure_time_update">
                            </div>
                            <div class="admin-panel__train-col">
                                <label for="parking_time">Время стоянки</label>
                                <input type="text" name="trainDataUpdate[parking_time]" placeholder="в формате 1 час. 20 мин." id="parking_time_update">
                            </div>
                        </div>
                        <div class="admin-panel__train-row">
                            <input type="submit" value="обновить">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <footer class="main-footer">
        <div class="container">
            <p></p>
        </div>
    </footer>
    <script>

        // получить данные поезда при вводе его номера
        function getTrainData() {
            var trainNumber = document.getElementById('train_number').value;
            var req = getXmlHttp();
            req.open('GET', 'ajax/get_train_data.php?train=' + trainNumber, true);
            req.onreadystatechange = function () {
                if (req.readyState == 4 && req.status == 200) {
                    var rez = req.responseText.trim();
                    var arr = JSON.parse(rez);
                    if (arr.length == 0) {
                        alert("Поезда № " + trainNumber + " нет в данном расписании!");
                        setTimeout(function(){document.forms.fff.reset()}, 200);
                    } else {
                         document.getElementById('start_station').value = arr[0][1];
                        document.getElementById('end_station').value = arr[0][2];
                        document.getElementById('train_id_update').value = arr[0][0];
                        document.getElementById('train_number_update').value = trainNumber;
                        document.getElementById('start_station_update').value = arr[0][1];
                        document.getElementById('end_station_update').value = arr[0][2];
                        document.getElementById('arrival_time_update').value = arr[0][3];
                        document.getElementById('departure_time_update').value = arr[0][4];
                        document.getElementById('parking_time_update').value = arr[0][5];
                    }
                }
             }
            req.send();
        }
        // проверить наличие поезда при вводе его номера перед добавлением нового поезда
        function checkTrainNumber() {
            var trainNumber = document.getElementById('train_number_insert').value;
            var req = getXmlHttp();
            req.open('GET', 'ajax/check_train_number.php?train=' + trainNumber, true);
            req.onreadystatechange = function () {
                if (req.readyState == 4 && req.status == 200) {
                    var rez = req.responseText.trim();
                    if (rez) {
                        alert("Поезд № " + trainNumber + " уже есть в данном расписании!");
                        setTimeout(function () {
                            document.forms.form_insert.reset()
                        }, 200);
                    }
                }
            }
            req.send();
        }
    </script>
</div>
</body>
</html>