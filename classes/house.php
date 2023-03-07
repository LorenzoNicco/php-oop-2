<?php
    require_once __DIR__ .'/product.php';
    require_once __DIR__ .'/../traits/nameTrait.php';
    
    class House extends Product {
        use Name;

        public $height;

        function __construct($price, $img, $units, $category, $height)
        {
            parent::__construct($price, $img, $units, $category);
            
            if (is_int($height)) {
                $this->height = $height;
            }
            else {
                throw new Exception('Inserisci una stringa.');
            }
        }
    }
?>