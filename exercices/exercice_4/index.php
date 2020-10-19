<?php
    //Exercice 4
    echo"<h3>Exercice 4</h3>";

require "form.php";

$form = new Form("");
$form->setTexte("name");
$form->setSubmit("form", "envoyer");
$form->showForm();



?>

