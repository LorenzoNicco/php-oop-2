<?php
    trait Name {
        protected $name;

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            if (is_string($name)) {
                $this->name = $name;
            }
            else {
                throw new Exception('Il nome deve essere una stringa.');
            }
        }
    }
?>