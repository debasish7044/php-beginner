<?php

// Print current date
echo date("Y-m-d H:i:s")."<br>";
// Print yesterday
// echo date("Y-m-d H:i:s", time() - 60 * 60 * 24);
// Different format: https://www.php.net/manual/en/function.date.php


echo date('F j Y  H:i:s')."<br>";
// Print current timestamp

echo time();
// Parse date: https://www.php.net/manual/en/function.date-parse.php

$dateParse = date_parse('February 4 2021 12:35:45');
echo '<pre>';
print_r($dateParse);
echo '</pre>';


// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
// $dateString = 'February 4 2021 12:35:45';

// $dateParse = date_parse_from_format('F j Y  H:i:s',$dateString);

// echo '<pre>';
// print_r($dateParse);
// echo '</pre>';