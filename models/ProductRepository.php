<?php

class ProductRepository{

    public static function getProductbyId($idProduct){
        $db = DB ::connect();
        $q="SELECT * FROM products where id='".$idUser."';";
        $result=$db->query($q); 
        if($row=$result->fetch_assoc()){
            return new Producto($row['null'], $row['name'],$row['price'], $row['stock']);
        }
        return null;
    }   
   public static function getAll() {
    $db = DB::connect();
    $q = "SELECT * FROM products";
    $result = $db->query($q); 

    $productos = [];

  
    while ($row = $result->fetch_assoc()) {
        $productos[] = new Producto(
            $row['id'], 
            $row['name'], 
            $row['price'], 
            $row['stock']
        );
    }

    return $productos; 
}
}