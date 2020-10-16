<?php 
    class Book{

        //Propriété de l'objet
        protected string $title;
        protected int $pages;

        // méthode de l'objet
        public function setTitle(string $title){
            $this->title = $title;
        }

        public function getTitle():string {
            return $this->title;
          }

        public function setPages(string $pages){
            
            $this->pages = $pages;
        }

        public function getPages():int{
            return $this->pages;
        }

        public function __construct(array $data){
            $this->setTitle($data["title"]);
            $this->setPages($data["pages"]);
        } 
    }

?>