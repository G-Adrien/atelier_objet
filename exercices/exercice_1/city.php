<?php 
    class City{

        //Propriété de l'objet
        protected string $name;
        protected string $department;
        // méthode de l'objet
        
        protected function setName(string $name){
            $this->name = $name;
        }
        protected function getName(string $name){
            return $this->name = $name;
        }

        protected function setDepartment(string $department){
            $this->department = $department;
        }
        protected function getDepartment(string $department){
            return $this->department = $department;
        }
        
        public function showLocation(string $name, string $department){
           return "la ville $name est dans le département $department ";
        }


    }
?>