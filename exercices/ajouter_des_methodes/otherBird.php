<?php
    class otherBird{
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

    // public function __construct($type, $color, $age, $areas) {
    //     $this->type = $type;
    //     $this->color = $color;
    //     $this->age = $age;
    //     $this->areas = $areas;
    //   }

    public function __construct(array $data) {
        $this->type = $data["type"];
        $this->color = $data["color"];
        $this->age = $data["age"];
        $this->areas = $data["areas"];
    }
}
?>