<?php

class UserRepository{

    public static function getUserById($idUser){
        $db = DB ::connect();
        $q="SELECT * FROM users where id='".$idUser."';";
        $result=$db->query($q); 
        if($row=$result->fetch_assoc()){
            return new User($row['null'], $row['username']);
        }
        return null;
    }   
   
}