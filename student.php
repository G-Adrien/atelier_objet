<?php 

class Student {

    const MAX = 20;
    //Propriété de l'objet
    public ?string $firstname;
    public ?int $age;
    protected ?string $id;
    public static $base;

    // méthodes de l'objet
    public function __construct(?string $firstname, ?int $age) {
        self::$base ="12";
        $this->firstname = $firstname;
        $this->age = $age;
    }

    // Donne une valeur à id
    public function setId(string $id){
        if(strlen($id) > 3) {
            $this->id = $id;
        }
    }

    public static function setBase (string $base_int){
        if(intval($base_int) <= self::MAX){
            self::$base = $base_int;
        }
    }

    // Récupérer la valeur de id
    public function getId(){
       return $this->id; 
    }
}
?>