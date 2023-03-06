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

        public function setNameAndPic() {
            if ($this->type == 'cibo') {
                $this->name = 'Scatolette per gatti';
                $this->pic = 'https://upload.wikimedia.org/wikipedia/commons/5/5b/Cat_and_Cat_Foods.jpg';
            }
            elseif ($this->type == 'cuccia') {
                $this->name = 'Castello per gatti';
                $this->pic = 'https://images.pexels.com/photos/11533580/pexels-photo-11533580.jpeg';
            }
            elseif ($this->type == 'gioco') {
                $this->name = 'Bacchetta con piuma';
                $this->pic = 'https://live.staticflickr.com/3813/32665158163_53ef389248_b.jpg';
            }
        }
    }
?>