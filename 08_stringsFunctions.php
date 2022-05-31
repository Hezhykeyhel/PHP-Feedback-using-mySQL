<?php

$string = "Hello World";
// The length of the string
echo strlen($string);

//Finds the position if the first occurence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurence of a substring in a string
echo strrpos($string, 'o');

// reverses a string
echo strrev($string);
// converts all characters to lowercase
echo strtolower($string);
// converts all characters to upper case
echo strtoupper($string);
//capitalize the first initials of a string
echo ucwords($string);

//String replace
echo str_replace("World", "Everyone", $string);
echo str_replace("Hello", "Goodday", $string);

// returns the portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);
// Strings start conditional statements
if(str_starts_with($string, "Hello")){
    echo "Yes Baby";
};
// Strings ends conditional statements
if (str_ends_with($string, "ld")){
    echo "Yes Nigga";
};
// Html special characters
$string2 = '<script>prompt(1)</script>';
echo htmlspecialchars($string2);
// Formatted strings
printf('%s likes to %s', 'Egbetayo', 'code');
printf('1+1=%f', 1+1);

