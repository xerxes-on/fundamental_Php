<?php
namespace javohir\isBalanced;

class BalancedParentheses {
    public static function isBalanced($s): bool
    {
        $a = str_split($s);
        $t = 0;
        foreach ($a as $item){
            if ($item ==='('){
                $t++;
            }
            if ($item === ')')
            {
                $t--;
            }
        }
        return $t === 0;
    }
}
