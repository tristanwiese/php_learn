<?php
    class ApiModel{

        var $id;
        var $title;
        var $description;
        var $price;
        var $discountPercentage;
        var $rating;
        var $stock;
        var $brand;
        var $category;
        var $thumbnail;
        var $images;
        function __construct($apiData){
            $this->id = $apiData['id'];
            $this->title = $apiData['title'];
            $this->description = $apiData['description'];
            $this->price = $apiData['price'];
            $this->discountPercentage = $apiData['discountPercentage'];
            $this->rating = $apiData['rating'];
            $this->stock = $apiData['stock'];
            $this->brand = $apiData['brand'];
            $this->category = $apiData['category'];
            $this->thumbnail = $apiData['thumbnail'];
            $this->images = $apiData['images'];
        }
    }
    
?>