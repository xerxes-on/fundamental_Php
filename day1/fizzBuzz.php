<?php
function fizzBuzz($a, $b)
{
    for($i = $a; $i <= $b; $i++){
        if($i % 3 === 0 && $i % 5 === 0){
            echo " FizzBuzz ";
        }
        elseif($i % 3 === 0){
            echo " Fizz ";
        }elseif ($i % 5 === 0){
            echo " Buzz ";
        }else{
            echo $i." ";
        }
    }
}
fizzBuzz(11, 20);