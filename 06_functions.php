<?php
// function runMe ($my_name){
//     echo $my_name . ' registered successfully';
// };

// runMe(' Egbetayo Damilola');

function sum($n1 = 4, $n2 = 5){
    return $n1 + $n2;
}
$number = sum();
// echo $number;
// echo sum(5, 5);

$subtract = function($n1, $n2){
    return $n1 - $n2;
};

// echo $subtract(10, 9);

$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(10, 40);
