<?php
// Exercice 1
echo "<h3>Exercice 1</h3>";
    require "bird.php";

    $bird = new Bird();

    $bird->type = "sparrow";
    $bird->color = "grey";
    $bird->age = 5;
    $bird->areas = ["europe", "north america", "asia"];

    var_dump($bird);
    /* Oui nous obtenons bien le résultat attendu nous avons les valeurs de notre objet
    Nous avons ajouter une fonction à l'objet. 
    */
    echo "<br>";
    echo $bird->sing();
    /* Nous avons la fonction qui est executé
    $this représente l'objet sur le quel nous nous trouvons.
    */
    echo "<br>";
    echo $bird->fly("Paris");

    // Exercice 2
echo "<h3>Exercice 2</h3>";

require "otherBird.php";

// la particularité de la notation de cette méthode est le double underscore
// $otherBird = new otherBird("sparrow", "white", 2, ["europe", "north america", "asia"]);
// var_dump($otherBird);

$data = [
    "type" => "sparrow",
    "color" => "white",
    "age" => 2,
    "areas" => ["europe", "north america", "asia"],
  ];

$otherBird = new OtherBird($data);
var_dump($otherBird);
?>

