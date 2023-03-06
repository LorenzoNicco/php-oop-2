<?php

    require_once __DIR__ .'/product.php';

    class Dog extends Product {
        public $price;
        public $name;

        public function setPrice() {
            if ($this->type == 'cibo') {
                $this->price = (3 * $this->units).' euro';
                $this->name = 'Croccantini per cani';
            }
            elseif ($this->type == 'cuccia') {
                $this->price = (50 * $this->units).' euro';
                $this->name = 'Casetta per cani';
            }
            elseif ($this->type == 'gioco') {
                $this->price = (8 * $this->units).' euro';
                $this->name = 'Pallina di gomma';
            }
        }
    }
?>