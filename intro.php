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


