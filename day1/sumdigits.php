<?php
function addDigits($num){
    $result = $num;
    do{
        $a = str_split(strval($result));
        $result = array_sum($a);
    }while (strlen(strval($result)) > 1);
    return $result;
}
var_dump(addDigits(89753));