<?php
class OrderRepository{
    public static function getOrderbyId($idOrder){
        $db = DB ::connect();
        $q="SELECT * FROM orders where id='".$idOrder."';";
        $result=$db->query($q); 
        if($row=$result->fetch_assoc()){
            return new Order($row['null'], $row['idUser'],$row['total']);
        }
        return null;
    }   
     public static function getAll() {
    $db = DB::connect();
    $q = "SELECT * FROM orders";
    $result = $db->query($q); 

    $orders = [];

  
    while ($row = $result->fetch_assoc()) {
        $productos[] = new Orders(
            $row['id'], 
            $row['idUser'], 
            $row['total'], 
            
        );
    }

    return $orders; 
}
}


?>
