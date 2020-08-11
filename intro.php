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

