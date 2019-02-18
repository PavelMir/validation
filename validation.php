<?php
function match($string) {
    $len = strlen($string);
	echo $len;
    $stack =[];
    for ($i = 0; $i < $len; $i++) {
        switch ($string[$i]) {
            case '[': array_push($stack, 0); break;
            case ']': 
                if (array_pop($stack) !== 0)
                    return false;
            break;
			
            case '<': array_push($stack, 1); break;
            case '>': 
                if (array_pop($stack) !== 1)
                    return false;
            break;
			
			case '{': array_push($stack, 2); break;
            case '}': 
                if (array_pop($stack) !== 2)
                    return false;
            break;
			
			case '(': array_push($stack, 3); break;
            case ')': 
                if (array_pop($stack) !== 3)
                    return false;
            break;
			
            default: break;
        }
    }
    return (empty($stack));
}
var_dump(match('()'));
var_dump(match('<]'));
