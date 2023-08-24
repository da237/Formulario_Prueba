<?php

echo "Post";
echo "<pre>";
print_r($_POST);

$cont = 0;
$arraysucces = [];
$arrayerror = [];
$arrayresponses = [
    'respuesta1'=> 2,
    'respuesta2'=> 1,
    'respuesta3'=> 1,
    'respuesta4'=> 1,
    'respuesta5'=> 1,
];

foreach ($_POST as $key => $value) {
    if ($arrayresponses[$key]  ==  $value) {
        $arraysucces [$key]= $value;
        $cont = $cont  + 5;
    } else {
        $arrayerror [$key] = $value;
    }
}

echo "Puntos Ganados: ".$cont;
echo "<br>";
echo "<br>";    



echo "Respuestas Correctas";
echo "<br>";
echo "<pre>";
print_r($arraysucces);



echo "Respuestas Erroneas";
echo "<pre>";
print_r($arrayerror);

?>