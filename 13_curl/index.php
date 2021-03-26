<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
$header = curl_getinfo($resource, CURLINFO_HTTP_CODE);
  echo '<pre>';
  print_r($header);
  echo '</pre>';
  echo '<pre>';
  print_r($result);
  echo '</pre>';

// Get response status code
// set_opt_array
$resource = curl_init();

$user = [
   "name" => "debasish",
   "surname" => "das",
   "age" => 20,
   "jobprofile" => "developer"
];

curl_setopt_array($resource, [
   CURLOPT_URL => $url,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POST => true,
   CURLOPT_HTTPHEADER => ['content-type: application/json'],
   CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);

  echo '<pre>';
  print_r($result);
  echo '</pre>';

// Post request