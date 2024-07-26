<?php
function buildQueryString($input): array
{
    $arr = explode("&", $input);
    $resulting_array = [];
    foreach ($arr as $array_element){
        $temp = explode("=", $array_element);
        $resulting_array[$temp[0]] = $temp[1];
    }
        ksort($resulting_array);

    return $resulting_array;
}
print_r(buildQueryString('wag1=php&tag2=javascript&bags=2'));
