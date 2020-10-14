<?php

echo "<h2>Exercice 1</h2>";
require "customer.php";

$customer = new Customer();
var_dump($customer);
/* la variable ne contient rien
le var_dump affiche maintenant un paramètre qui est null,
 nous venons d'ajouter un paramètre, name représente le nom du paramètre,
 public représente la propriété  
*/
$customer2 = new Customer();
echo "<br>";
var_dump($customer2);
/*$customer2 à un index de 2
notre objet attends des paramètre
Avec "string" l'attribut attend une chaîne de caractère
*/
echo "<br>";
$customer->name = "Doe";
$customer->firstname = "John";
$customer->age = 42;
$customer->payments = ["visa", "mastercard ", "paypal"];
var_dump($customer);

echo "<h2>Exercice 2</h2>";

$customer->name = strtoupper($customer->name);
$customer->firstname = strtoupper($customer->firstname);
$customer->payments[] = "cash";
var_dump($customer);
echo "<br><br>";
echo $customer->firstname . " " . $customer->name . " is " . $customer->age . " years old.<br>";
echo "He has the following means of payement : <br>";
foreach ($customer->payments as $payment){
    echo "- $payment <br>";

}
?>