<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Новосибирск - Столица Сибири</title>
</head>
<body>
<div class="wrapper">
    <section class="main-content">
         <header class="main-header">
             <div class="container">
                 <ul class="menu">
                     <li class="menu__item"><a class="menu__link" href="photo_gallery.php">фотогалерея</a></li>
                     <li class="menu__item"><a class="menu__link" href="train_timetables.php">расписание поездов</a></li>
                 </ul>
             </div>
         </header>
        <div class="container">
             <h1 class="main-title">Новосибирск</h1>
             <span class="slogan"><?php echo $this->arrData['slogan']; ?></span>
             <img class="gerb" src="img/gerb.png" alt="герб Новосибирска">
        </div>
    </section>
    <footer class="main-footer">
        <div class="container">
            <p></p>
        </div>
    </footer>
</div>
</body>
</html>