<?php
    require_once __DIR__ .'/product.php';
    
    class Food extends Product {

        public $expiringDate;

        function __construct($name, $price, $img, $units, $category, $expiringDate)
        {
            parent::__construct($name, $price, $img, $units, $category);
            
            $this->expiringDate = $expiringDate;
        }
    }
?>