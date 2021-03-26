<?php

// while

// Loop with $counter

// do - while

// for
for($var = 0; $var < 10;  $var++) {
   echo $var.'<br>';
}

// foreach
$fruits = ["Mango", "Banana", "Jackfruit"];

foreach($fruits as $fruit){
   echo $fruit.'<br>';
}

// Iterate Over associative array.
$person = [
  'name' => 'Debasish',
  "surname" => 'Das',
  "age" => 30,
  "hobbies" => ['Tennis', "Video Game"]
];

foreach($person as $i => $value){
   if( is_array($value) ){
     $result =  implode(',', $value).'<br>';
    echo $i.' ' .$result;
   }else {
      echo  $i.' '.$value.'<br>';
   }
}