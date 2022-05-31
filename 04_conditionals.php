<?php

/*
< less than
> greater than
<= less than or equal to
>= greater than or equal to
== equal to
!= not equal to
!== not identical to
*/

$age= 20;

// if($age >= 18){
//     echo 'You are old enough to vote';
// } 
// else{
//     echo 'You are not eligible to vote';
// }

$t = date("H");
// echo $t;

// if($t < 12){
//     echo 'Good Morning';
// }
// else if($t < 17){
//     echo 'Good Afternoon';
// }
// else{
//     echo 'Good Evening';
// }
// if(true){
//     echo 123;
// }

$post = [];
// if(!empty($post)){
//     echo $post[0];
// }
// else{
//     echo 'No Post';
// }

// echo !empty($post) ? $post[0] : 'No post';

// placing it in a variable

// $firstPost = !empty($post) ? $post[0] : null;

$firstPost = $post[0] ?? null;

echo $firstPost;

// case is better for else if conditional statements
$favourites =  'Red';
switch ($favourites){
    case 'Red';
    echo 'Your favourite color is Red';
    break;
    case 'Blue';
    echo 'Your favourite color is Blue';
    break;
    case 'Green';
    echo 'Your favourite color is Green';
    break;
    default;
    echo 'Your favourite color is not Red, Blue or Green';
}