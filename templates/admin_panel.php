<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Панель управления</title>
</head>
<body>
<div class="admin-panel">
<div class="container">

    <h2 class="admin-panel__title">Панель управления</h2>
    <div class="row">
        <form action=""
              method="post" enctype="multipart/form-data" class="admin-panel__photo">
            <fieldset>
                <legend>Добавить фото в  фотогалерею</legend>
                <input type="file" name="user_file">
                <input type="submit" value="добавить">
            </fieldset>
        </form>
    <form action="edit_slogan.php" class="admin-panel__slogan" method="post">
        <fieldset>
            <legend>Изменить слоган</legend>
            <input type="text" name="slogan" id="slogan" autofocus>
            <input type="submit" value="изменить">
        </fieldset>
    </form>
        </div>
    <div class="row">
    <form class="admin-panel__train">
        <fieldset>
            <legend>Редактировать расписание поездов</legend>
            <div class="admin-panel__train-row">
            <div class="admin-panel__train-col">
                <label for="train_number">Номер поезда</label>
                <input type="text" name="train_number" id="train_number" placeholder="Номер и литера поезда">
            </div>
            <div class="admin-panel__train-col">
                <label for="start_station">Станция отправления</label>
                <input type="text" name="start_station" id="start_station">
            </div>
            <div class="admin-panel__train-col">
                <label for="end_station">Станция прибытия</label>
                <input type="text" name="end_station" id="end_station" placeholder="">
            </div>
            </div>
            <div class="admin-panel__train-row">
            <div class="admin-panel__train-col">
                <label for="arrival_time">Время прибытия</label>
                <input type="text" name="arrival_time" id="arrival_time" placeholder="в формате 00:00">
            </div>
            <div class="admin-panel__train-col">
                <label for="departure_time">Время отправления</label>
                <input type="text" name="departure_time" id="departure_time" placeholder="в формате 00:00">
            </div>
            <div class="admin-panel__train-col">
                <label for="parking_time">Время стоянки</label>
                <input type="text" name="parking_time" id="parking_time"  placeholder="в формате 1 час. 20 мин.">
            </div>
            </div>
            <div class="admin-panel__train-row">
            <input type="submit" formmethod="post" formaction="" value="добавить">
            <input type="submit" formmethod="post" formaction="" value="обновить">
            <input type="submit" formmethod="post" formaction="" value="удалить">
            </div>
        </fieldset>
    </form>
    </div>
<!--    <a class="menu__link admin-panel__link" href="index.php">вернуться на главную</a>-->
</div>
</div>
</body>
</html>