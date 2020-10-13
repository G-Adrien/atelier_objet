<?php 

class Student {
    //Propriété de l'objet
    public ?string $firstname;
    public ?int $age;
    protected ?string $id;

    // méthodes de l'objet
    public function __construct(?string $firstname, ?int $age) {
        $this->firstname = $firstname;
        $this->age = $age;
    }

    // Donne une valeur à id
    public function setId(string $id){
        if(strlen($id) > 3) {
            $this->id = $id;
        }
    }

    // Récupérer la valeur de id
    public function getId(){
       return $this->id; 
    }
}
?>