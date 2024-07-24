<?php
function isBalanced($s){
    $a = str_split($s);
    $t = 0;
    foreach ($a as $item){
        if ($item =='('){
            $t++;
        }
        if ($item == ')')
        {
            $t--;
        }
    }
    return $t == 0;
}
var_dump(isBalanced('()()()(())'));
