<?php

    require_once __DIR__ .'/petCat.php';
    require_once __DIR__ .'/petDog.php';
    
    class Product {
        public $target;
        public $type;
        public $units;

        function __construct(string $_target, string $_type, int $_units) {
            $this->target = $_target;
            $this->type = $_type;
            $this->units = $_units;
        }

    }
?>