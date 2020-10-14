<?php
//Exercice 1
echo"<h3>Exercice 1</h3>";
require "student.php";

$student = new Student();


// $student->name = "Timmy";
// $student->age = 35;
// var_dump($student);

//Nous n'avons pas accès à la propriété protégé name
//Nous avons accès au propriété protégé seulement dans la classe
$student->setName("John");
$student->setAge(27);

var_dump($student);

//Exercice 2
echo"<h3>Exercice 2</h3>";


?>