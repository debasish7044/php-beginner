<?php

// Function which prints "Hello I am Zura"
// function hello (){
//    echo "hello i am zura";
// }
// hello();

// Function with argument
function hello ($name){
   return "hello i am $name";
}

// echo hello('deb');

// Create sum of two functions
// function sum( $a, $b){ 
//    return $a + $b;
// }

// echo sum(5,5);

echo '<pre>';
print_r($personName);
echo '</pre>';

// Create function to sum all numbers using ...$nums
function num(...$nums){
  $sum = 0;
   foreach ($nums as $num){
 $sum += $num;
   }
   echo $sum;
}

num(5,7,9);


// Arrow functions

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

// function product($carry, $item)
// {
//     $carry *= $item;
//     return $carry;
// }

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
// var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
// var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
