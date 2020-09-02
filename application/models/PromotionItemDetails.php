<?php

class PromotionItemDetails{
    
    private $productID;
    private $productName;
    private $productImage;
    private $discount;
    private $oldPrice;
    private $newPrice;
    private $category;
    
    
    function __construct($productID, $productName, $productImage, $discount, $oldPrice, $newPrice, $category) {
        $this->productID = $productID;
        $this->productName = $productName;
        $this->productImage = $productImage;
        $this->discount = $discount;
        $this->oldPrice = $oldPrice;
        $this->newPrice = $newPrice;
        $this->category = $category;
    }

    function getProductID() {
        return $this->productID;
    }

    function getProductName() {
        return $this->productName;
    }

    function getProductImage() {
        return $this->productImage;
    }

    function getDiscount() {
        return $this->discount;
    }

    function getOldPrice() {
        return $this->oldPrice;
    }

    function getNewPrice() {
        return $this->newPrice;
    }

    function getCategory() {
        return $this->category;
    }

    function setProductID($productID) {
        $this->productID = $productID;
    }

    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setProductImage($productImage) {
        $this->productImage = $productImage;
    }

    function setDiscount($discount) {
        $this->discount = $discount;
    }

    function setOldPrice($oldPrice) {
        $this->oldPrice = $oldPrice;
    }

    function setNewPrice($newPrice) {
        $this->newPrice = $newPrice;
    }

    function setCategory($category) {
        $this->category = $category;
    }


    

}