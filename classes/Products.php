<?php

class Products{
    
    public $category;
    public $imagine;
    public $title;
    public $priceOnCent;

    function __construct(String $_category, String $_imagine, String $_title, Int $_priceOnCent ){
        $this->category = $_category;
        $this->imagine = $_imagine;
        $this->title = $_title;
        $this->priceOnCent = $_priceOnCent;
    }

    public function getCategory(){
        return $this->title;
    }

    public function getImagine(){
        return $this->title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPriceOnCent(){
        return $this->title;
    }

}

class Food extends Products {
    public $type;
    public $gramms;

    function __construct(String $type, Int $gramms, String $_category, String $_imagine, String $_title, Int $_priceOnCent){
        parent ::__construct($_category, $_imagine, $_title, $_priceOnCent);
        $this->type = $type;
        $this->gramms = $gramms;

    }
}

class Toy extends Products {
    public $type;
    public $size;

    function __construct(String $type, String $size, String $_category, String $_imagine, String $_title, Int $_priceOnCent){
        parent ::__construct($_category, $_imagine, $_title, $_priceOnCent);
        $this->type = $type;
        $this->size = $size;

    }
}

class Accessory extends Products {
    public $type;
    public $size;

    function __construct(String $type, String $size, String $_category, String $_imagine, String $_title, Int $_priceOnCent){
        parent ::__construct($_category, $_imagine, $_title, $_priceOnCent);
        $this->type = $type;
        $this->size = $size;

    }
}