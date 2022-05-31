<?php
$name = 'Egbetayo Damilola';
$age = '40';
$has_kids = true;
 $cash_hand = 20.45;
// var_dump($cash_hand);

// echo 'My name is ' . $name . ' '. 'I am'.' ' . $age . ' '. 'years old'; 
// Better
echo "My name is ${name} and i am ${age} years old";

// $x = 5 + 5;
// $x = '5' + '5';
// var_dump($x);

// echo 10 - 5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;
///These are constants
define('HOST', 'localhost');
define('DB_NAME', 'localhost');

echo DB_NAME;


