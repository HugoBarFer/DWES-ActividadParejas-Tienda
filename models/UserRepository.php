<?php

class UserRepository{

    public static function getUserById($idUser){
        $db = 
        $q="SELECT * FROM users where id='".$idUser."';";
        $result=$db->query($q); 
        if($row=$result->fetch_assoc()){
            return new User($row['id'], $row['username']);
        }
        return null;
    }   
}