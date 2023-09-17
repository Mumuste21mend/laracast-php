<?php
require("functions.php");
// require("router.php");



// class Person
// {
//     public $name;
//     public $age;
//     public function breathe()
//     {
//         echo "breathing";
//     }
// }
// $person = new Person();
// $person->name = 'Mumuste mend';
// $person->age = 25;
// $person->breathe();
// dd($person);
$dsn = "mysql:host=localhost;port=3000;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn);