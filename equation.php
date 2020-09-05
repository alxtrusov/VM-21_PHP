<?php

// ax + b = 0
function line($a=0, $b=0) {
    if (is_numeric($a) && is_numeric($b)) {
        if ($a != 0) {
            return [-$b / $a];
        }
    }
    return [];
}

// ax^2 + bx + c = 0
function square($a=0, $b=0, $c=0) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        if ($a === 0) {
            return line($b, $c);
        }
        // считаем дискриминант и корни уравнения
        //...
    }
    return [];
}

// ax^3 + bx^2 + cx + d = 0
function cube($a, $b, $c, $d) {

}