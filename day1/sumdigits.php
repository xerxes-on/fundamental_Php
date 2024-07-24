<?php
function addDigits($num){
    $t = $num;
    do{
        $a = str_split(strval($t));
        $t = array_sum($a);
    }while (strlen(strval($t)) > 1);
    return $t;

}
var_dump(addDigits(8953));