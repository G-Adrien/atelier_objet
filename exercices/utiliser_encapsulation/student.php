<?php

    class Student{
    //Propriété de l'objet
    protected string $name;
    protected int $age;
    //Méthode de l'objet
    public function setName(string $name) {
        $this->name = $name;
    }
    
    public function setAge(int $age) {
        $this->age = $age;
    }
    }

?>