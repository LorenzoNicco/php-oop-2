<?php
    require_once __DIR__ .'/product.php';
    require_once __DIR__ .'/../traits/nameTrait.php';
    
    class Food extends Product {
        use Name;

        public $expiringDate;

        function __construct($price, $img, $units, $category, $expiringDate)
        {
            parent::__construct($price, $img, $units, $category);
            
            if (is_string($expiringDate)) {
                $this->expiringDate = $expiringDate;
            }
            else {
                throw new Exception('Inserisci una stringa.');
            }
        }
    }
?>