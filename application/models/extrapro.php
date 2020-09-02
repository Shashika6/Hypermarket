<?php


class extrapro {
  
    
    private $id;
   
    private $textqr;
    private $item;
    private $promo;
    private $img;
    private $code;
     private $newPrice;
    private $oldPrice;
    
    function __construct($id, $textqr, $item, $promo, $img, $code, $newPrice, $oldPrice) {
        $this->id = $id;
        $this->textqr = $textqr;
        $this->item = $item;
        $this->promo = $promo;
        $this->img = $img;
        $this->code = $code;
        $this->newPrice = $newPrice;
        $this->oldPrice = $oldPrice;
    }

    function getId() {
        return $this->id;
    }

    function getTextqr() {
        return $this->textqr;
    }

    function getItem() {
        return $this->item;
    }

    function getPromo() {
        return $this->promo;
    }

    function getImg() {
        return $this->img;
    }

    function getCode() {
        return $this->code;
    }

    function getNewPrice() {
        return $this->newPrice;
    }

    function getOldPrice() {
        return $this->oldPrice;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTextqr($textqr) {
        $this->textqr = $textqr;
    }

    function setItem($item) {
        $this->item = $item;
    }

    function setPromo($promo) {
        $this->promo = $promo;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setNewPrice($newPrice) {
        $this->newPrice = $newPrice;
    }

    function setOldPrice($oldPrice) {
        $this->oldPrice = $oldPrice;
    }


}
