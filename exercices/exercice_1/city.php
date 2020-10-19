<?php 
    class City{

        //Propriété de l'objet
        protected string $name;
        protected string $department;
        // méthode de l'objet
        
        public function setName(string $name){
            $this->name = $name;
        }
        public function getName(string $name){
            return $this->name = $name;
        }

        public function setDepartment(string $department){
            $this->department = $department;
        }
        public function getDepartment(string $department){
            return $this->department = $department;
        }
        
        public function showLocation(){
           return "la ville $this->name est dans le département $this->department ";
        }


    }
?>