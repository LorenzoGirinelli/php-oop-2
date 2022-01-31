<?php 
    require_once __DIR__ . '/ProductCost.php';
    class Site {
        use ProductCost;

        public $name;
        public $price;

        function __construct($_name, $_price) {
            $this->name = $_name;

            if(is_int($_price)) {
                $this->price = $_price;
            } else {
                throw new Exception('$_price must be a number');
            }
        }

        public function startSite() {
            return 'Launching Zalando Web...';
        }
        
    }
?>