<?php

class Form{

    //Propriété de l'objet
    protected string $formContent;


    // méthode de l'objet

    public function setTexte(string $name, string $value = null){
        $this->formContent .= "<input type='text' name='$name' value='$value'>";
    }

    public function setSubmit(string $name, string $value = null){
        $this->formContent .= "<input type='submit' name='$name' value='$value'></form>";
        
    }

    public function __construct(){
        $this->formContent = '<form action="" method="post">';
    }

    public function showForm(){
    echo $this->formContent;
    }
}

?>