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