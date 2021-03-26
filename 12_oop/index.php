<?php

// What is class and instance
class Person {
   public $name;
   public $surname;
   private $age;


    public function __construct($name,$surname)
      {
        $this->$name = $name;
        $this->$surname = $surname;
      }
      function  _set_age($age){
         $this->age = $age;
      }

      function _get_age(){
       return $this->age;
      }
}

$firstPerson = new Person('deb','das');


$firstPerson->_set_age(23);

echo $firstPerson->_get_age();

echo '<pre>';
print_r($firstPerson );
echo '</pre>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter