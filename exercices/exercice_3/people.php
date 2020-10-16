<?php 
    class People{
        //Propriété de l'objet
        protected string $name;
        protected string $firstname;
        protected string $address;

        // méthode de l'objet

        public function setName(string $name){
           $this->name = $name; 
        }

        public function setFirstname(string $firstname){
            $this->firstname = $firstname; 
        }

        public function setAddress(string $address){
            $this->address = $address;
        }

        public function getName():string{
            return $this->name = $name;
        }

        public function getFirstname():string{
            return $this->firstname = $firstname; 
        }

        public function getAddress():string{
            return $this->address = $address; 
        }

        public function getCoord():string{
            return $this->firstname . " " . $this->name . "habite au" . $this->address . ".";
        }

        public function hydrate(array $data) {
            foreach ($data as $key => $value) {
              $methode = "set". ucfirst($key);
              $this->$methode($value);
            }
        }

        public function __constructor(array $data){
           $this->hydrate($data);
        }

    }
?>