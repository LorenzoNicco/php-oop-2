<?php
    require_once __DIR__ .'/product.php';
    require_once __DIR__ .'/../traits/nameTrait.php';
    
    class Toy extends Product {
        use Name;
        
        public $material;

        function __construct($price, $img, $units, $category, $material)
        {
            parent::__construct($price, $img, $units, $category);
            
            $this->material = $material;
        }
    }
?>