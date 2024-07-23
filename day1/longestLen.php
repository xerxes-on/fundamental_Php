<?php
function longestLength($s){
    $a = str_split($s);
    $temp = [];
    $longest = [];
    for($i = 0; $i <count($a); $i++){
        if(in_array($a[$i],$temp)){
            $longest[] = $temp;
            $temp = [];
        }
        $temp[] = $a[$i];
    }
    if(empty($longest)){
        return [$temp, count($temp)];
    }elseif(count($longest[0])>count($temp)){
        return [$longest[0], count($longest[0])];
    }else {
        return [$temp, count($temp)];
    }
}
print_r(longestLength('abcdeef'));