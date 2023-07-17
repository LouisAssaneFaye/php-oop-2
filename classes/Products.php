<?php

class Products{
    
    public $category;
    public $imagine;
    public $title;
    public $price;

    function __construct($_category, $_imagine, $_title, $_price ){
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

    public function getPrice(){
        return $this->price;
    }

}

class price{
    public $dollar;
    public $cent;
    function __constructor(Int $_dollar, Int $_cent){
        $this->dollar=$_dollar;
        $this->cent=$_cent;
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