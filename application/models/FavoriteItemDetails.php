<?php


class FavoriteItemDetails {
    
    
    private $id;
   
    private $productname;
    private $image;
    private $newprice;
    private $oldprice;
    private $qyt;
    
   

    function __construct($id, $productname, $image, $newprice, $oldprice, $qyt) {
        $this->id = $id;
        $this->productname = $productname;
        $this->image = $image;
        $this->newprice = $newprice;
        $this->oldprice = $oldprice;
        $this->qyt = $qyt;
    }
    function getId() {
        return $this->id;
    }

    function getProductname() {
        return $this->productname;
    }

    function getImage() {
        return $this->image;
    }

    function getNewprice() {
        return $this->newprice;
    }

    function getOldprice() {
        return $this->oldprice;
    }

    function getQyt() {
        return $this->qyt;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProductname($productname) {
        $this->productname = $productname;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setNewprice($newprice) {
        $this->newprice = $newprice;
    }

    function setOldprice($oldprice) {
        $this->oldprice = $oldprice;
    }

    function setQyt($qyt) {
        $this->qyt = $qyt;
    }



}

