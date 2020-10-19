<?php
class Clio{
    //propriété de l'objet
    protected int $nbDoor;
    protected string $color;

    private static $price = 15000;

    const FIVEDOORS = 5;
    const THREEDOORS = 3;
    const colors = [
        "red"=>10215455,
        "green"=>131533541,
        "purple"=>76513684,
        "yellow"=>76521564,
        "grey"=>76236254456,
        "black"=>96326824,
        "blue"=>82136548,
        "orange"=>646852215
    ];


    //méthode  de l'objet
    public function setNbDoor(int $nbDoor){
        $this->nbDoor = $nbDoor;
    }

    public function setColor(string $color){
        $this->color = $color;
    }

    public function setPrice(int $price){
        $this->price = $price;
    }


    public function getNbDoor(int $nbDoor){
        return $this->nbDoor = $nbDoor;
    }
    public function getColor(string $color){
        return $this->color = $color;
    }
    public function getPrice(int $price){
        return $this->price = $price;
    }

    public function __construct(int $nbDoor, string $color, int $price){
        var_dump($this->$clio);
    }

}

?>