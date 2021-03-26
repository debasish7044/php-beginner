<?php

// Create array
$fruits = ["Mango", "Banana", "Jackfruit"];

// Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Get element by index
echo $fruits[1]."<br>";

// Set element by index
$fruits[2] = "cucumber";
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Check if array has element at index 2
echo isset($fruits[2]);

// Append element
$fruits[] = 'watermelon';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// Print the length of the array
echo count($fruits);

// Add element at the end of the array
array_push($fruits, 'foo');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Remove element from the end of the array
array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'foo');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Remove element from the beginning of the array
array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Peach";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// Combine array elements into string
echo implode("&",$fruits);


// Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('cucumber', $fruits));
// echo '</pre>';

// Search element index in the array
// echo '<pre>';
// var_dump(array_search('cucumber',$fruits));
// echo '</pre>';

// Merge two arrays
$vegetables = ["cabbage","mushroom"];

// echo '<pre>';
// var_dump(array_merge($fruits,$vegetables));
// echo '</pre>';

// Sorting of array (Reverse order also)
// sort($vegetables);
// echo '<pre>';
// var_dump($vegetables);
// echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
  'name' => 'Debasish',
  "surname" => 'Das',
  "age" => 30,
  "hobbies" => ['Tennis', "Video Game"]
];

// echo '<pre>';
// print_r($person);
// echo '</pre>';


// Get element by key
echo $person['name'];

// Set element by key

echo $person['jobprofile'] = 'Web Developer';
// echo '<pre>';
// print_r($person);
// echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key
if(!isset($person['address'])){
   $person['address'] = 'unknown';
}
// echo '<pre>';
// print_r($person);
// echo '</pre>';


// Print the keys of the array
// echo '<pre>';
// print_r(array_keys($person));
// echo '</pre>';

// Print the values of the array
// echo '<pre>';
// print_r(array_values($person));
// echo '</pre>';

// Sorting associative arrays by values, by keys
// ksort($person);
asort($person);
// echo '<pre>';
// print_r($person);
// echo '</pre>';

// Two dimensional arrays

$todos = [
   ['title' => 'Todo title 1', 'completed' => true],
   ['title' => 'Todo title 2', 'completed' => false]
];

echo '<pre>';
print_r($todos);
echo '</pre>';