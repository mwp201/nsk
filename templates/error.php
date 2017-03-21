<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERROR</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <section class="main-content">
        <header class="main-header">
            <div class="container">
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link" href="/logout.php">вернуться на страницу входа</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <p class="error-text"><?php echo $this->arrData['errorText']; ?></p>
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
