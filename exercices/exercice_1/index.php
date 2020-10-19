<?php 
    //Exercice 1
echo"<h3>Exercice 1</h3>";
require "city.php";

$city = new City();
$city->setName("Rouen");
$city->setDepartment("Seine-Maritime");
echo $city->showLocation();
try{
}
catch(\Exception $e){
    echo $e->getMessage();
}




?>