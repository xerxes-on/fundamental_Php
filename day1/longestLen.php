<?php
function longestLength($s){
    $a = str_split($s);
    $temp = [];
    $longest = [];
    for($i = 0; $i <count($a); $i++){
        if(in_array($a[$i],$temp)){
            $longest[] = $temp;
            $temp = [];
            $temp[] = $a[$i];
        }else{
            $temp[] = $a[$i];
        }
    }

    if(empty($longest)){
        return count($temp);
    }elseif(max($longest)>count($temp)){
        return count(max($longest));
    }else {
        return count($temp);
    }
}
print_r(longestLength('aabcdefdfg'));