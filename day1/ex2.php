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
print_r( $a);
foreach ($a as $ar){
    foreach ($ar as $b){
        print_r( $b);
    }
    echo "<br>";
}