<?php

class Products{
    
    public $category;
    public $imagine;
    public $title;
    public $priceOnCent;
    public $type;

    function __construct(String $_category, String $_imagine, String $_title, Int $_priceOnCent, String $_type ){
        $this->category = $_category;
        $this->imagine = $_imagine;
        $this->title = $_title;
        $this->priceOnCent = $_priceOnCent;
        $this->type = $_type;
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

    public function getType(){
        return $this->title;
    }

}