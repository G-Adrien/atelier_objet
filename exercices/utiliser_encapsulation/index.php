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

$student = new Student();

try{
    $student->setName("aaa");
    $student->setAge(1250);
}
catch(\Exception $e){
    echo $e->getMessage();
}
var_dump($student);


//Exercice 3
echo"<h3>Exercice 3</h3>";
require "book.php";

$data = [
    "title" => "The rain",
    "pages" => 246,
  ];
  
try{
    $book = new Book($data);
}
catch(\Exception $e){
    echo $e->getMessage();
}
echo "<br>" . $book->getTitle() . " has " . $book->getPages() . " pages";

?>