<?php
// Exercice 1
echo "<h2>Exercice 1</h2>";

    require "dog.php";

    $dog1 = new Dog();
    $dog2 = new Dog();
    $dog3 = $dog2;

    var_dump($dog1);
    var_dump($dog2);
    var_dump($dog3);
    
    


    // Exercice 2
    echo "<h2>Exercice 2</h2>";

    require "customer.php";
    
    $customer = new Customer();
    var_dump($customer);
    $customer->name = "Doe";
    var_dump($customer);

    $customer->firstname = "John";
    $customer->age = 42;
    $customer->payments = ["visa", "mastercard ", "paypal"];

    var_dump($customer);
    $customer2 = new Customer();
    echo "<br><br>";
    var_dump($customer2);

    $customer->dog = $dog1;
    echo "<br><br>";
    var_dump($customer);

    
?> 
