<?php
function fib($a){
    $res = [0,1];
    for($i=0;$i<=$a-2; $i++){
        $res[] = $res[count($res)-1] + $res[count($res)-2];
    }
    return $res;
}

print_r(fib(10));
