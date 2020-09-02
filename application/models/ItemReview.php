<?php

class ItemReview{
    
    private $name;
    private $review;
    private $starCount;
   
    
    function __construct($name, $review, $starCount) {
        $this->name = $name;
        $this->review = $review;
        $this->starCount = $starCount;
    }

    
    function getName() {
        return $this->name;
    }

    function getReview() {
        return $this->review;
    }

    function getStarCount() {
        return $this->starCount;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setReview($review) {
        $this->review = $review;
    }

    function setStarCount($starCount) {
        $this->starCount = $starCount;
    }



}