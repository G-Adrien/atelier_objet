<?php 
    //Exercice 2
echo"<h3>Exercice 2</h3>";
require "city.php";

$data = [
    "name" => "Rouen",
    "department" => "Seine-Maritime"
];

$city = new City($data);
  
try{
    echo $city->showLocation();
}
catch(\Exception $e){
    echo $e->getMessage();
}




?>