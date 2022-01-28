<?php 
    class Site {
        public $name;
        public $price;

        function __construct($_name, $_price) {
            $this->name = $_name;
            $this->price = $_price;
        }

        public function startSite() {
            return 'Launching Zalando Web...';
        }
        
    }
?>