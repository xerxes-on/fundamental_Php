<?php
function buildQueryString($a): array
{
    $arr = explode("&", $a);
    $res = [];
    foreach ($arr as $ar){
        $temp = explode("=", $ar);
        $res[$temp[0]] = $temp[1];
    }
    return $res;
}
print_r(buildQueryString('P=34&tags=23&mag=true&tag=false'));
