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
            public function getOrderId(){
        return $this->orderId;
    }
    public function getProductId(){
        return $this->productId;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function getPrice(){
        return $this->price;
    }
    }

?>