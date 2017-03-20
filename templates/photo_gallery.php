<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Новосибирск фотогалерея</title>
</head>
<body>
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
</body>
</html>
