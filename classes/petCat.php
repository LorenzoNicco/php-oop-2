<?php
    class Cat extends Product {
        public $price;
        public $name;

        public function setPrice() {
            if ($this->type == 'cibo') {
                $this->price = (1.5 * $this->units).' euro';
            }
            elseif ($this->type == 'cuccia') {
                $this->price = (30 * $this->units).' euro';
            }
            elseif ($this->type == 'gioco') {
                $this->price = (12 * $this->units).' euro';
            }
        }

        public function setName() {
            if ($this->type == 'cibo') {
                $this->name = 'Scatolette per gatti';
            }
            elseif ($this->type == 'cuccia') {
                $this->name = 'Castello per gatti';
            }
            elseif ($this->type == 'gioco') {
                $this->name = 'Bacchetta con piuma';
            }
        }
    }
?>