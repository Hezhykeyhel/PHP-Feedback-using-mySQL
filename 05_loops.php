<?php 
/**
 * Fpr Loop Syntax
 * for(initialize;p condition; increment){
 *  //Code to executed
 * }
 */
//You can set your initials to whatever number you want to start from
// The counter is where you want your count to get to

//  for ($i= 0; $i <= 10; $i++) { 
//      echo 'Number' . ' ' . $i . '<br>';
//  }

// remember to give it an extra lines of codes which passes unto it an instruction

// $x = 1;
// while ($x <= 15) {
//     echo 'Number' . ' ' . $x . '<br>';
//     $x = $x + 1;
// }

// Do while loops
// Do... whileloops will always execute the block of code since even if the condition is false
// $a = 1;
// do {
//     echo 'Number' . ' ' . $a . '<br>';
//     $a++;
// } while ($a <= 2);

// For each is specifically for arrays

$postman = ['First_post', 'Second_post', 'ThirdPost'];
// For loop
// for ($x=0; $x < count($postman); $x++) { 
//     echo $postman[$x];
// }

// Shows all in the array

// foreach ($postman as $post) {
//     echo $post;
// }

// for getting the index of each

// foreach ($postman as $index => $post) {
//     echo $index + 1 . ' ' . $post . '<br>';
// }

// associates of array

$person = [
    'first_name' => 'Egbetayo Damilola',
    'last_name' => 'Ezekiel',
    'email' => 'damilolaegbetayo12@gmail.com',
    'favourites' => 'sausages'
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}