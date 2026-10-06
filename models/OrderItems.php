<?php
    class OrderItems{
        private $orderId;
        private $productId;
        private $quantity;
        private $price;

        public function __construct($orderId,$productId,$quantity,$price){
            $this->orderId=$orderId;
            $this->productId=$productId;
            $this->quantity=$quantity;
            $this->price=$price;
        }
    }

?>