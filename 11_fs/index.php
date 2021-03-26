<?php
// Magic constants
echo __DIR__."<br>";
echo __FILE__."<br>";
echo __LINE__."<br>";

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
// echo file_get_contents('lorem.txt');

// file_get_contents, file_put_contents
 $files = scandir('./');

//  echo '<pre>';
// print_r($files);
// echo '</pre>';

// file_put_contents('sample.txt', 'something something');


// file_get_contents from URL
$todos = file_get_contents('https://jsonplaceholder.typicode.com/todos');
// echo $todos;

$todosArray = json_decode($todos);
  echo '<pre>';
  print_r($todos);
  echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('sample.txt');  //true
// is_dir
is_dir('test'); //false
// filemtime

// filesize
// disk_free_space
// file