<?php

$fruits = ['apple', 'orange', 'pear', 'banana'];
//Length
// echo count($fruits);
// print_r($fruits);
// search Array
// var_dump($fruits);
// shows all the values of the arrays including the number of strings and the length of the array
//Add/push values into our array Values
$fruits[] = 'tangerine';
array_push($fruits, 'blueberry', 'strawberry');
// Add to the beginning of an array
array_unshift($fruits, 'Cypress');
// remove from an array the last value
array_pop($fruits);
// remove from an array the frist values
array_shift($fruits);
//remove the index and the values together
unset($fruits[2]);
// Splitting into chnks of 2
$chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);
// Merging arrays with each other
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
// Using spread operators to bind arrays
$arr4 = [...$arr1, ...$arr2];

// Array combined picks the index of the first values and stores b into it
$a =  ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
// print_r($c);
// Gets the keys of the called array
$keys =  array_keys($c);
// print_r($keys);
// restores the keys values with their initoal values
$flipped = array_flip($c);
// print_r($flipped);

// Range of numbers
$numbers = range(1, 30);
// print_r($numbers);

// Array map style
$newNumber = array_map(function($number){
    return "Number ${number}";
}, $numbers);
// print_r($newNumber);
// Filter arrays less than or equal to or greater than or equal to
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessThan10);


// Array to reduce (Plus)
$toreducePlus = array_reduce($numbers, fn($carry, $number) => $carry + $number);
// var_dump($toreducePlus);
//Array to reduce (Minus)
$toreduceMinus = array_reduce($numbers, fn($carry, $number) => $carry - $number);
// var_dump($toreduceMinus);