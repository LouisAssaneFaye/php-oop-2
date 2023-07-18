<?php

class Products{
    
    public $category;
    public $imagine;
    public $title;
    public $price;

    function __construct(String $_category, String $_imagine, String $_title, Array $_price=[] ){
        $this->category = $_category;
        $this->imagine = $_imagine;
        $this->title = $_title;
        $this->price = $_price;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getImagine(){
        return $this->imagine;
    }

    public function getTitle(){
        return $this->title;
    }

}

class Food extends Products {
    public $type;
    public $gramms;

    function __construct($_type, $_gramms,  $_category, $_imagine, $_title, $_price){
        parent ::__construct($_category, $_imagine, $_title, $_price);
        $this->type = $_type;
        $this->gramms = $_gramms;

    }
}

class Toy extends Products {
    public $type;
    public $size;

    function __construct($_type, $_size, $_category, $_imagine, $_title, $_price){
        parent ::__construct($_category, $_imagine, $_title, $_price);
        $this->type = $_type;
        $this->size = $_size;

    }
}

class Accessory extends Products {
    public $type;
    public $size;

    function __construct($_type, $_size, $_category, $_imagine, $_title, $_price){
        parent ::__construct($_category, $_imagine, $_title, $_price);
        $this->type = $_type;
        $this->size = $_size;

    }
}