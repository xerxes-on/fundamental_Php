<?php
function getMirrorMatrix($m){
    foreach($m as $matrix){
        $j = count($matrix)/2;
        for($i = count($matrix)/2 - 1; $i >=0; $i--){
            $matrix[$j] = $matrix[$i];
            $j++;
        }
        print_r($matrix);
    }
    return $m;
}
getMirrorMatrix([
  [11, 12, 13, 14, 15, 16],
  [21, 22, 23, 24, 25, 26],
  [31, 32, 33, 34, 35, 36],
  [41, 42, 43, 44, 45, 46],
]);