<?php

$arr = [];

$array = array(
    "foo" => "bar"
);
var_dump($array);

//Classic
$arr[0] = 0;

$arr[20] = 20;

echo " sizeof = " . sizeof($arr) . "<br>";

for ($i = 0; $i < sizeof($arr); $i++){
    echo $arr[$i] . "<br>";
}

