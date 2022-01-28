<?php 
    class User {
        public $name;
        public $lastname;
        public $age = 0;
        public $email;
        private $cart = [];

        function __construct($_name, $_lastname, $_age, $_email) {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->age = $_age;
            $this->email = $_email;
        }

        public function addToCart($_product) {
            $this->cart[] = $_product;
        }

        public function getFullName() {
            return "$this->name $this->lastname";
        } 

        public function getCart() {
            return $this->cart;
        }

        public function getTotalPrice() {
            $sum = 0;
            foreach($this->cart as $product) {
                $sum += $product->price;
            }
            return $sum;
        }
    }
?>