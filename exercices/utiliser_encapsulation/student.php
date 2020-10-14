<?php

    class Student{
        //Propriété de l'objet
        protected string $name;
        protected int $age;
        //Méthode de l'objet
        public function setName(string $name):Student   {
            if(strlen($name) <=1){
                throw new Exception('The name must contain at least 1 character');
            }
            $this->name = $name;
            return $this;
        }

        public function setAge(int $age) {
            if($age < 16 || $age > 70){
                throw new Exception('The age must be between 16 and 70');
            }
            $this->age = $age;
            return $this;
        }
    }

?>