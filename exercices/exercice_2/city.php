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
        public function showLocation(){
            echo "la ville " . $this->name . " est dans le département " . $this->department . "."; 

        }

        public function __construct(array $data){
            echo $this->setName($data["name"]);
            echo $this->setDepartment($data["department"]);
        }

        // public function __construct(string $name, string $department){
        //     echo $this->setName($name);
        //     echo $this->setDepartment($department);
        // }


    }
?>