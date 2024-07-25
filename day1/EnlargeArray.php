<?php
$arr = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
];
function enlargeArrayImage($arr): array
{
    $resul_array = [];
    foreach($arr as $row){
        $temp_array = [];
        foreach($row as $row_element){
            $temp_array[] = $row_element;
            $temp_array[] = $row_element;
        }
        $resul_array[] = $temp_array;
        $resul_array[] = $temp_array;
    }
    return $resul_array;
}

print_r(enlargeArrayImage($arr));
