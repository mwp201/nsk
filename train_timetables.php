<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Новосибирск</title>
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
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">243c</td>
            <td class="timetables__col-2">Анапа - Новокузнецк</td>
            <td class="timetables__col-3">20:23</td>
            <td class="timetables__col-4">21:13</td>
            <td class="timetables__col-5">50 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">128ы</td>
            <td class="timetables__col-2">Адлер - Красноярск</td>
            <td class="timetables__col-3">20:56</td>
            <td class="timetables__col-4">21:18 </td>
            <td class="timetables__col-5">22 мин</td>
        </tr>
        <tr class="timetables__row">
            <td class="timetables__col-1">70ч</td>
            <td class="timetables__col-2">Москва - Чита</td>
            <td class="timetables__col-3">21:10 </td>
            <td class="timetables__col-4">22:02 </td>
            <td class="timetables__col-5">52 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">8н</td>
            <td class="timetables__col-2">Новосибирск - Владивосток</td>
            <td class="timetables__col-3"></td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5"></td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">2мщ</td>
            <td class="timetables__col-2">2Москва - Владивосток</td>
            <td class="timetables__col-3">22:00 </td>
            <td class="timetables__col-4">22:21 </td>
            <td class="timetables__col-5">21 мин </td>
        </tr>

        <tr class="timetables__row">
            <td class="timetables__col-1">127ы</td>
            <td class="timetables__col-2">Красноярск - Адлер</td>
            <td class="timetables__col-3">22:14</td>
            <td class="timetables__col-4">22:35</td>
            <td class="timetables__col-5"> 21 мин </td>
        </tr>
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
                /* Ссылка на рабочую таблицу */
            document.getElementById("paged"),
                /* Кол-во строк таблицы на "странице" */
            15,
                /* Конфигурация постраничной навигации */
            {
                /* текст ссылки "в начало" */
                toStart: "START",
                /* текст ссылки "предыдущий" */
                toPrev: "PREV",
                /* текст ссылки "следующий" */
                toNext: "NEXT",
                /* текст ссылки "в конец" */
                toEnd: "END",
                /* кол-во ссылок, отображаемых на "странице" */
                linkPerPage: 5,
                /* Тег для элементов постраничной навигации: */
                linkTag: "li",
                /* Шаблон блока постраничной навигации: */
                template: "<span class='summary'>Страница: %p из %c (всего строк: %r)</span><ul class='page-nav'>%n</ul>",
                /* Событие "после инициализации" - отработает только ОДИН РАЗ! */
                onAfterInit: function (table) {
                    // Делаем данные опять видимыми
                    table.tBodies[0].style.display = "";
                }
                /* ,
                 Это событие будет отрабатывать
                 каждый каз при клике на элементе постраничной навигации
                 если вернуть из ф-ции "false" то переход на страницу не произойдет.
                 onNavClick : function (pageId) {
                 // Запрещаем переход на четные страницы
                 return (pageId+1) % 2 ? true : false;
                 } */
            }
        );
    </script>
</div>
</body>
</html>