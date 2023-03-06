<?php

    require_once __DIR__ .'/categoyPet.php';
    
    class Product {
        private $target;
        public $type;
        public $model;

        function __construct($_target, $_type, $_model) {
            $this->target = $_target;
            $this->type = $_type;
            $this->model = $_model;
        }

    }
?>