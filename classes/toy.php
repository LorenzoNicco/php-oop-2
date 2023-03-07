<?php
    require_once __DIR__ .'/product.php';
    
    class Toy extends Product {
        public $material;

        function __construct($name, $price, $img, $units, $category, $material)
        {
            parent::__construct($name, $price, $img, $units, $category);
            
            $this->material = $material;
        }
    }
?>