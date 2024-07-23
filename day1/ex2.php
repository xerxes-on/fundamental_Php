<?php
$arr = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
];
function enlargeArrayImage($arr){
    $temp = [];
    foreach($arr as $item){
        $t = [];
        foreach($item as $i){
            $t[] = $i;
            $t[] = $i;
        }
        $temp[] = $t;
        $temp[] = $t;
    }
    return $temp;
}
$a = enlargeArrayImage($arr) ;
foreach ($a as $ar){
    foreach ($ar as $b){
        echo $b;
    }
    echo "<br>";
}