<?php

    // require_once __DIR__ .'/petCat.php';
    // require_once __DIR__ .'/petDog.php';
    
    // class Product {
    //     public $target;
    //     public $type;
    //     public $units;

    //     function __construct(string $_target, string $_type, int $_units) {
    //         $this->target = $_target;
    //         $this->type = $_type;
    //         $this->units = $_units;
    //     }

    // }

    require_once __DIR__ .'/category.php';
    require_once __DIR__ .'/../traits/nameTrait.php';

    class Product {
        use Name;
        public $price;
        public $img;
        public $units;
        public $category;

        function __construct($price, $img, $units, $category) {
            $this->price = $price * $units;
            $this->img = $img;
            $this->units = $units;
            $this->category = $category;
        }
    }
?>