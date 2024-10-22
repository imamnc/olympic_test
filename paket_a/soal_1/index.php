<?php

// Logic fibonacci
function fibonacci($n) {
    $number1 = 0;
    $number2 = 1;

    for ($i = 0; $i < $n; $i++) {
        echo $number1;

        if ($i < $n - 1) {
            echo ", ";
        }

        $next = $number1 + $number2;
        $number1 = $number2;
        $number2 = $next;
    }
}

// Execute method to print fibonacci
fibonacci(13);
