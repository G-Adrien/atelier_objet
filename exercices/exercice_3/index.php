<?php 
    //Exercice 3
echo"<h3>Exercice 3</h3>";

require "people.php";

$people = new People([
    "name" => "Dumoulin",
    "firstname" => "Laurent",
    "address" => "88, rue Nationale 75006 PARIS"
     ]);
    //,
    // [
    // "name" => "Richer",
    // "firstname" => "Mathilde",
    // "address" => "17, cours Franklin Roosevelt 13010 MARSEILLE"
    // ]

echo $people->getCoord();


?>