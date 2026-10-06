<?php

class DB{

        public static function connect(){
            return new msqli(getenv("DB_HOST"),getenv("DB_USER"),getenv("DB_PASSWORD"),getenv("DB_NAME"));
        }
    
}