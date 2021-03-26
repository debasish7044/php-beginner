<?php

// What is a variable

// Variable types
/*

  String
  Boolean
  Integer
  Float 
  Boolean
  Null
  Array
  Object Resource
 

*/

// Declare variables
$name = 'Ram';
$number = 22;
$boolean = false;
$salary = null;
$height = 1.25;



// Print the variables. Explain what is concatenation

echo $name."<br>";
echo $number."<br>";
echo $boolean;
echo $salary;
echo $number."<br>";

// Print types of the variables
echo gettype($name)."<br>";
// Print the whole variable
var_dump($name,$number,
$boolean,
$salary,$height)."<br>";

// Change the value of the variable
$name = true;

// Print type of the variable
var_dump($name);

// Variable checking functions
is_string($name)."<br>";

// Check if variable is defined
isset($name);
isset($address);

// Constants
define('PI', 3.14);
echo PI."<br>";

// Using PHP built-in constants
echo SORT_ASC."<br>";
echo PHP_INT_MAX."<br>";
