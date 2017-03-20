<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERROR</title>
    <style>
        body{
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        .wrap {
            width: 960px;
            margin: 0 auto;
        }
        .error-text{
            text-align: center;
            font-size: 25px;
            color: red;
        }
    </style>
</head>
<body>
<div class="wrap clearfix">
    <p class="error-text"><?php echo $this->arrData['errorText']; ?></p>
    <div>
</body>
</html>
