<?php
    require_once __DIR__ .'/product.php';
    
    class House extends Product {
        public $height;

        function __construct($name, $price, $img, $units, $category, $height)
        {
            parent::__construct($name, $price, $img, $units, $category);
            
            $this->height = $height;
        }
    }
?>