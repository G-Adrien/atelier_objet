<?php
    class Bird{
        //Propriété de l'objet
        public string $type;
        public string $color;
        public int $age;
        public array $areas;

        // méthodes de l'objet
        public function sing() {
            echo "<br>$this->type : Cui cui<br>";
        }
        public function fly(string $destination):string{
            if($this->age > 4){
                return "The bird is flying to $destination";
            }
            else{
                return "This bird is too young to fly";
            }
        }
    

    }
?>