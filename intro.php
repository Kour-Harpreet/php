<?php 

// echo for displaying data
echo 'hello world "echo"';


//variables in php
$myString = 'Hello, this is my first string';
echo $myString;

echo "\n\n";

//difference bw single and double quotes.
$mySingleQuoteString = 'This is single quotes:\n\n' . $myString;
echo $mySingleQuoteString;
$myDoubleQuoteString = "\n\nthis is a double quotes string: $myString";
echo $myDoubleQuoteString;
// NOTE: '' SINGLE QUOTES DONOT PARSE AND "" QUOTES DOES PARSING

//Comments in PHP. 
//: single line
# we can also use bash style one line comments ("#")
/*
* we can also do multi line comments in this way
*/  

//DataTYpes
$myString = 'This is a string.'; // String.
$myTrueBoolean = TRUE; // Boolean.
$myFalseBoolean = false;
$myInt = 42; // Integer.
$myFloat = 3.14; // Decimal value (float / double.)
$myNull = null;
$myArray = [ 1, 2, 3, 4, 'test', false, null ]; // Array (can be created using the [] OR array() syntaxes.)
$mySecondArray = array(
  $myString,
  $myTrueBoolean,
  $myFalseBoolean,
  $myInt,
  $myFloat,
  $myNull,
  $myArray
);

$myObject = new stdClass(); // BASIC standard/generic object.
$myObject->name = "Bob";
$myObject->age  = 36;
$myObject->hobbies = ["programming", "skydiving"];
echo "\nHello, my name is {$myObject->name}.\nI am {$myObject->age} years old.\nI enjoy the following activities:";
// Oh, we'll need to loop through our array of hobbies!
// Foreach works almost identically to "for...of" in JavaScript!
foreach ( $myObject->hobbies as $hobby ) { // Note: $hobby in this case represents the current iterated item in the array. Can be any variable name.
  echo "\n ♥ $hobby";
} 
echo "\n\n Let's try a \"for\" loop!";
for ( $iterator = 0; $iterator < 8; $iterator = $iterator + 2 ) {
  echo "\nCurrent value in loop: $iterator";
}

$myArrayLength = count( $myArray );
echo "\n\nThe variable \$myArray contains $myArrayLength items."; 