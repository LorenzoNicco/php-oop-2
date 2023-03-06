<?php

    require_once __DIR__ .'/product.php';

    class Dog extends Product {
        public $price;
        public $name;
        public $pic;

        public function setPrice() {
            if ($this->type == 'cibo') {
                $this->price = (3 * $this->units).' euro';
            }
            elseif ($this->type == 'cuccia') {
                $this->price = (50 * $this->units).' euro';
            }
            elseif ($this->type == 'gioco') {
                $this->price = (8 * $this->units).' euro';
            }
        }

        public function setNameAndPic() {
            if ($this->type == 'cibo') {
                $this->name = 'Croccantini per cani';
                $this->pic = 'https://live.staticflickr.com/86/208810939_69840d8daa_b.jpg';
            }
            elseif ($this->type == 'cuccia') {
                $this->name = 'Casetta per cani';
                $this->pic = 'https://live.staticflickr.com/4057/4602192058_e7a5cce3c9_b.jpg';
            }
            elseif ($this->type == 'gioco') {
                $this->name = 'Pallina di gomma';
                $this->pic = 'https://www.stockvault.net/data/2016/05/19/198785/preview16.jpg';
            }
        }
    }
?>