<?php 
    //Exercice 1
echo"<h3>Exercice 1</h3>";
require "city.php";

$city = new City();

try{
    echo $city->showLocation("Rouen", "Seine-Maritime");
}
catch(\Exception $e){
    echo $e->getMessage();
}




?>