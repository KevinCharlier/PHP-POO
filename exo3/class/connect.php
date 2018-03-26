<?php 

    class App {
        static $db = null;
        static function getDatabase(){
            if(!self::$db){
                self::$db = new Database('poo_exo3', 'root', 'user');

            }
            return self::$db;
        }
    }

?>