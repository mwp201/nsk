<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Логин</title>
</head>
<body>
<div class="container">
    <h2 class="login-panel__title">Вход в панель управления</h2>
    <form action="admin_panel.php" class="login-panel__form" method="post">
        <fieldset>
            <label for="user_name">Пользователь</label>
            <input type="text" name="user_name" id="user_name" autofocus>
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="войти">
        </fieldset>
    </form>
    <a class="menu__link login-panel__link" href="index.php">вернуться на главную</a>
</div>
</body>
</html>