<?php
$search = null;
if (!empty($_GET['search']))
{
    $search = trim(htmlspecialchars($_GET['search']));
}

$geocode = file_get_contents('https://search-maps.yandex.ru/v1/?text='.$search.
                             ',Новосибирск&type=biz&results=500&lang=ru_RU&apikey=be028a20-0326-4e17-afc7-a30c13123bed');
$arr = json_decode($geocode, true);
$findResult = count($arr['features']);

echo '<pre>';
//print_r($arr);
echo '</pre>';

$arrData = [];
for ($i = 0; $i < $findResult; $i++)
{
    if (!empty($arr['features'][$i]['properties']['CompanyMetaData']['url'])) {
        $url = $arr['features'][$i]['properties']['CompanyMetaData']['url'];
    } else {
        $url = 'Сайта нет!';
    }
    if (!empty($arr['features'][$i]['properties']['CompanyMetaData']['Phones'][0]['formatted'])) {
        $phone = $arr['features'][$i]['properties']['CompanyMetaData']['Phones'][0]['formatted'];
    } else {
        $phone = 'Телефон не указан!';
    }
    if (!empty($arr['features'][$i]['properties']['CompanyMetaData']['Hours']['text'])) {
        $hours = $arr['features'][$i]['properties']['CompanyMetaData']['Hours']['text'];
    } else {
        $hours = 'не указано!';
    }
    $longitude = $arr['features'][$i]['geometry']['coordinates'][0];
    $latitude = $arr['features'][$i]['geometry']['coordinates'][1];
    $arrData[$i]['url'] = $url;
    $arrData[$i]['nameCompany'] = $arr['features'][$i]['properties']['CompanyMetaData']['name'];
    $arrData[$i]['address'] = $arr['features'][$i]['properties']['CompanyMetaData']['address'];
    $arrData[$i]['phones'] = $phone;
    $arrData[$i]['hours'] = $hours;
    $arrData[$i]['coordinates'] = $latitude.', '.$longitude;
    $arrData[$i]['category'] = $arr['features'][$i]['properties']['CompanyMetaData']['Categories'][0]['name'];
}
//center: [55.76, 37.64],//moscva
//center: [56.3, 90.52],//achinsk
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новосибирск поиск огранизаций</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
   </head>
<body>

<div class="map" id="map">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="search" placeholder="Введите название организации" value="<?php echo $search; ?>" autofocus>
    <input type="submit" value="Поиск">
    <p>Найдено организаций : <?php echo $findResult; ?></>
</form>
</div>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap, myPlacemark;

    function init() {
        myMap = new ymaps.Map("map", {
            center: [55.04, 82.92],//nsk
            zoom: 11
        });
        myMap.controls.add('mapTools');
        myMap.controls.add('smallZoomControl');
        <?php for ($i = 0; $i < $findResult; $i++) { ?>
            myPlacemark<?php echo $i; ?> = new ymaps.Placemark([<?php echo $arrData[$i]['coordinates']; ?>], {
                hintContent: "<?php echo $arrData[$i]['nameCompany']; ?>",
                balloonContent: "<?php echo $arrData[$i]['category'].' '.$arrData[$i]['nameCompany'].'<br>'.
                                            $arrData[$i]['address'].'<br>'.
                                            '<a href='.$arrData[$i]['url'].' target=_blank>Сайт организации</a><br>'.
                                            $arrData[$i]['phones'].'<br>'.
                                            'Часы работы : '.$arrData[$i]['hours']; ?>"
            });
            myMap.geoObjects.add(myPlacemark<?php echo $i; ?>);
       <?php } ?>
    }
</script>
</body>
</html>
