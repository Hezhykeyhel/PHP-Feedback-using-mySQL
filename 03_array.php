<?php

// Arrays in php
$numbers = [1, 24, 56, 67];
// Second method of inputing an array
$fruits = array('apple', 'oranges', 'pineapple');

// print_r($numbers);
// print_r($fruits);
// var_dump($fruits);

// echo $fruits[2];


// Associates array
$colors = [
    1 =>'Red',
    4 => 'Blue',
    8 => 'Purple'
];

// echo $colors[4];

$hex = [
    'red' => '$f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex["blue"];

$person = [
    'first_name' => 'Egbetayo Damilola',
    'last_name'=> 'Ezekiel',
    'email' => 'damilolaegbetayo12@gmail.com',
];

// echo $person['first_name'];

// Multi Dimensional Arrays

$people = [
[
    'first_name' => 'Egbetayo Damilola',
    'last_name'=> 'Ezekiel',
    'email' => 'damilolaegbetayo12@gmail.com',
    'age' => 26
],
[
    'first_name' => 'Bradley',
    'last_name'=> 'Bradley',
    'email' => 'Bradley@gmail.com',
    'age' => 45
],
[
    'first_name' => 'hezhykeyhel',
    'last_name'=> 'Ezekiel',
    'email' => 'ezekiel@gmail.com',
    'age' => 29
],

];

// echo $people[1]['email'];
var_dump(json_encode($people));