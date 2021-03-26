<?php

// Create simple string
// $name = "debasish";
// $firstName = 'hello my name is '.$name.'i am 20 years old';
// $secondName = "hello my name is $name and i am 20 years old";
// echo $firstName."<br>";
// echo $secondName."<br>";

// // String concatenation
// echo 'hello '.'world '.'php '."<br>";

// String functions
// $person = "   ramdas  ";

// echo "1. ". strlen($person).'<br>';
// echo "2. ". trim($person).'<br>';
// echo "3. ". ltrim($person).'<br>';
// echo "4. ". rtrim($person).'<br>';
// echo "5. ". str_word_count($person).'<br>';
// echo "6. ". strrev($person).'<br>';
// echo "7. ". strtoupper($person).'<br>';
// echo "8. ". strtolower($person).'<br>';
// echo "9. ". ucfirst("hello").'<br>';
// echo "10. ". lcfirst("HELLO").'<br>';
// echo "11. ". ucwords("hello world").'<br>';
// echo "12. ". strpos($person, 'world').'<br>';
// echo "13. ". substr($person, 3).'<br>';
// echo "14. ". str_replace('ramdas', 'PHP', $person).'<br>';
// echo "15. ". str_ireplace(' RAMDAS','PHP',$person);

// Multiline text and line breaks
$longtext = " 
Hello my name is debasish
and i am 20 years old.
i am a web developer 
";

echo "1. - ".$longtext.'<br>';
echo "2. - ".nl2br($longtext).'<br>';

// Multiline text and reserve html tags
$longtext = " 
Hello my name is <b>debasish</b>
and i am 20 years old.
i am a web <b>developer</b> 
";
echo "1. - ".$longtext.'<br>';
echo "2. - ".nl2br($longtext).'<br>'; 
echo "3. - ".htmlentities($longtext).'<br>'; 
echo "4. - ".html_entity_decode('&lt;b&gt;debasish&lt;/b&gt;').'<br>'; 

// https://www.php.net/manual/en/ref.strings.php