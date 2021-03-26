<?php

$age = 20;
$salary = 300000;

// Sample if
if($age === 20) {
  echo "1";
};
// Without circle braces
if($age === 20) echo "1";

// Sample if-else
if($age === 30) {
  echo "1";
}else {
   echo "2";
}

// Difference between == and ===

$age == "20" ; // true
$age == 20; // true

$age === 20; // true
$age == 20; // false

// if AND

if($age == 20 && $salary > 30000){
   echo 'do Something';
}

// if OR
if($age == 20 || $salary < 30000){
   echo 'do Something';
}

// Ternary if
echo $salary < 30000 ?  'bad salary': 'good salary';


// Short ternary
$person = 'ram';

$personName = $person?: 'shyam';
echo '<pre>';
print_r($personName);
echo '</pre>';


// Null coalescing operator
echo $myName = isset($name) ? $name : 'john';
echo $myName = $name ?? 'jadu';

// switch

$myRole = "admin";

switch($myRole) {
   case 'admin';
     echo 'admin';
    break;
   case 'user';
      echo 'user';
     break;
   default: 
      echo 'invalid role';
      break;
}