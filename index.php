<?php
 require "student.php";

 $student = new Student("Billy", 19);
 $student2 = new Student("Marie", 22);
 $student3 = new Student(null, null);

//  $student->firstname = "Billy";
//  $student->age = 19;

//  $student2->firstname = "Marie";
//  $student2->age = 22;

$student->setId("azerty123");

 var_dump($student);
//  var_dump($student2);
//  var_dump($student3);

echo "<p>$student->firstname : " . $student->getId() . "</p>";
echo "<p>Base code : " . Student::$base . "</p>";
Student::setBase("21");
echo"<p>Valeur max : " . Student::MAX ."</p>"
?>